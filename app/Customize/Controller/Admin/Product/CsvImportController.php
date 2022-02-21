<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

//namespace Eccube\Controller\Admin\Product;
namespace Customize\Controller\Admin\Product;

use Eccube\Controller\Admin\Product\CsvImportController as BaseCsvImportController;   // 元のコントローラ
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Eccube\Common\Constant;
use Eccube\Controller\Admin\AbstractCsvImportController;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\Category;
use Eccube\Entity\Product;
use Eccube\Entity\ProductCategory;
use Eccube\Entity\ProductClass;
use Eccube\Entity\ProductImage;
use Eccube\Entity\ProductStock;
use Eccube\Entity\ProductTag;
use Customize\Entity\Master\Bumon;  // (HDN) 部門Entity
use Eccube\Form\Type\Admin\CsvImportType;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\ClassCategoryRepository;
use Eccube\Repository\DeliveryDurationRepository;
use Eccube\Repository\Master\ProductStatusRepository;
use Eccube\Repository\Master\SaleTypeRepository;
use Customize\Repository\Master\BumonRepository;    // (HDN) 部門Repository
use Eccube\Repository\ProductImageRepository;
use Eccube\Repository\ProductRepository;
use Eccube\Repository\TagRepository;
use Eccube\Repository\TaxRuleRepository;
use Eccube\Service\CsvImportService;
use Eccube\Util\CacheUtil;
use Eccube\Util\StringUtil;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CsvImportController extends BaseCsvImportController
{
    /**
     * 商品登録CSVアップロード(予約システム専用)
     *
     * @Route("/%eccube_admin_route%/product/product_csv_upload_y01", name="admin_product_csv_import_y01")
     * @Template("@admin/Product/csv_product_y01.twig")
     *
     * @return array
     *
     * @throws \Doctrine\DBAL\ConnectionException
     * @throws \Doctrine\ORM\NoResultException
     */
    public function csvProductY01(Request $request, CacheUtil $cacheUtil)
    {
        $form = $this->formFactory->createBuilder(CsvImportType::class)->getForm();
        // (HDN) ヘッダ取得
        //$headers = $this->getProductCsvHeader();

        if ('POST' !== $request->getMethod()) {
            // (HDN) 画面表示
            $headers = $this->getProductCsvHeaderY01(false);
        } else {
            // (HDN) アップロード
            $headers = $this->getProductCsvHeaderY01(true);
            $form->handleRequest($request);
            if ($form->isValid()) {
                $this->isSplitCsv = $form['is_split_csv']->getData();
                $this->csvFileNo = $form['csv_file_no']->getData();

                $formFile = $form['import_file']->getData();
                if (!empty($formFile)) {
                    log_info('商品CSV登録(専用)開始');
                    $data = $this->getImportData($formFile);
                    if ($data === false) {
                        $this->addErrors(trans('admin.common.csv_invalid_format'));

                        return $this->renderWithError($form, $headers, false);
                    }
                    $getId = function ($item) {
                        return $item['id'];
                    };
                    // (HDN) ヘッダーのチェック
                    $requireHeader = array_keys(array_map($getId, array_filter($headers, function ($value) {
                        return $value['required'];
                    })));

                    log_info('(HDN)ヘッダー必須項目',$requireHeader);

                    $columnHeaders = $data->getColumnHeaders();

                    log_info('(HDN)ヘッダー受信項目',$columnHeaders);

                    if (count(array_diff($requireHeader, $columnHeaders)) > 0) {
                        $this->addErrors(trans('admin.common.csv_invalid_format'));

                        return $this->renderWithError($form, $headers, false);
                    }
                    // (HDN) データ有無のチェック
                    $size = count($data);

                    if ($size < 1) {
                        $this->addErrors(trans('admin.common.csv_invalid_no_data'));

                        return $this->renderWithError($form, $headers, false);
                    }

                    $headerSize = count($columnHeaders);
                    $headerByKey = array_flip(array_map($getId, $headers));

                    log_info('(HDN)ヘッダーキー',$headerByKey);

                    $deleteImages = [];

                    $this->entityManager->getConfiguration()->setSQLLogger(null);
                    $this->entityManager->getConnection()->beginTransaction();

                    // (HDN) ProductClassRepositoryの初期化
                    $productClassRepository = $this->entityManager->getRepository(ProductClass::class);
                    // (HDN) BumonRepositoryの初期化
                    $bumonRepository = $this->entityManager->getRepository(Bumon::class);

                    //-------------------------
                    // CSVファイルの登録処理
                    // LOOP (HDN) １件ずつ処理
                    //-------------------------
                    foreach ($data as $row) {
                        $line = $this->convertLineNo($data->key() + 1);
                        $this->currentLineNo = $line;
                        if ($headerSize != count($row)) {
                            $message = trans('admin.common.csv_invalid_format_line', ['%line%' => $line]);
                            $this->addErrors($message);

                            return $this->renderWithError($form, $headers);
                        }

                        // (HDN) 省略値の設定
                        // ・販売種別
                        if (!isset($row[$headerByKey['sale_type']]) || StringUtil::isBlank($row[$headerByKey['sale_type']])) {
                            $row[$headerByKey['sale_type']] = '1';
                        }

                        // (HDN) 新規登録かの判定をID指定の有無で行っている
                        // 　→ 商品登録の確認を行って判定するように改修

                        log_info('(HDN)入力商品コード：'.$row[$headerByKey['product_code']]);

                        // (HDN) 商品コードチェック＆存在確認
                        if (preg_match('/^\d+$/', $row[$headerByKey['product_code']])) {
                            $wProductClass = $productClassRepository->findOneBy(array('code' => $row[$headerByKey['product_code']]));
                            log_info('(HDN)PC存在チェック(findOneBy)：',(array)$wProductClass);
                            if ( $wProductClass ) {
                                log_info('(HDN)商品コードあり');
                                $Product = $wProductClass->getProduct();
                            } else {
                                log_info('(HDN)商品コードなし');
                                $Product = new Product();
                                $this->entityManager->persist($Product);
                            }
                        } else {
                            $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['id']]);
                            $this->addErrors($message);

                            return $this->renderWithError($form, $headers);
                        }



                        /*
                        if (!isset($row[$headerByKey['id']]) || StringUtil::isBlank($row[$headerByKey['id']])) {
                            $Product = new Product();
                            $this->entityManager->persist($Product);
                        } else {
                            if (preg_match('/^\d+$/', $row[$headerByKey['id']])) {
                                $Product = $this->productRepository->find($row[$headerByKey['id']]);
                                if (!$Product) {
                                    $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['id']]);
                                    $this->addErrors($message);

                                    return $this->renderWithError($form, $headers);
                                }
                            } else {
                                $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['id']]);
                                $this->addErrors($message);

                                return $this->renderWithError($form, $headers);
                            }

                            if (isset($row[$headerByKey['product_del_flg']])) {
                                if (StringUtil::isNotBlank($row[$headerByKey['product_del_flg']]) && $row[$headerByKey['product_del_flg']] == (string) Constant::ENABLED) {
                                    // 商品を物理削除
                                    $deleteImages[] = $Product->getProductImage();

                                    try {
                                        $this->productRepository->delete($Product);
                                        $this->entityManager->flush();

                                        continue;
                                    } catch (ForeignKeyConstraintViolationException $e) {
                                        $message = trans('admin.common.csv_invalid_foreign_key', ['%line%' => $line, '%name%' => $Product->getName()]);
                                        $this->addErrors($message);

                                        return $this->renderWithError($form, $headers);
                                    }
                                }
                            }
                        }
                        */

                        // (HDN) Product：この時点で新商品は空

                        // 公開ステータス
                        if (StringUtil::isBlank($row[$headerByKey['status']])) {
                            $message = trans('admin.common.csv_invalid_required', ['%line%' => $line, '%name%' => $headerByKey['status']]);
                            $this->addErrors($message);
                        } else {
                            if (preg_match('/^\d+$/', $row[$headerByKey['status']])) {
                                $ProductStatus = $this->productStatusRepository->find($row[$headerByKey['status']]);
                                if (!$ProductStatus) {
                                    $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['status']]);
                                    $this->addErrors($message);
                                } else {
                                    $Product->setStatus($ProductStatus);
                                }
                            } else {
                                $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['status']]);
                                $this->addErrors($message);
                            }
                        }

                        // 商品名
                        if (StringUtil::isBlank($row[$headerByKey['name']])) {
                            $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['name']]);
                            $this->addErrors($message);

                            return $this->renderWithError($form, $headers);
                        } else {
                            $Product->setName(StringUtil::trimAll($row[$headerByKey['name']]));
                        }

                        // (HDN) 部門コード（拡張項目）
                        if (isset($row[$headerByKey['bumon_cd']])) {
                            if (StringUtil::isNotBlank($row[$headerByKey['bumon_cd']])) {
                                //$Product->setBumonCd(StringUtil::trimAll($row[$headerByKey['bumon_cd']]));
                                // (HDN) 部門取得
                                $Bumon = $bumonRepository->find($row[$headerByKey['bumon_cd']]);
                                if (!$Bumon) {
                                    $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['bumon_cd']]);
                                    $this->addErrors($message);
                                } else {
                                    $Product->setBumon($Bumon);
                                }
                            }
                        }

                        // メモ欄
                        if (isset($row[$headerByKey['note']])) {
                            if (StringUtil::isNotBlank($row[$headerByKey['note']])) {
                                $Product->setNote(StringUtil::trimAll($row[$headerByKey['note']]));
                            } else {
                                $Product->setNote(null);
                            }
                        }

                        // 商品説明（一覧）
                        if (isset($row[$headerByKey['description_list']])) {
                            if (StringUtil::isNotBlank($row[$headerByKey['description_list']])) {
                                $Product->setDescriptionList(StringUtil::trimAll($row[$headerByKey['description_list']]));
                            } else {
                                $Product->setDescriptionList(null);
                            }
                        }

                        // 商品説明（詳細）
                        if (isset($row[$headerByKey['description_detail']])) {
                            if (StringUtil::isNotBlank($row[$headerByKey['description_detail']])) {
                                if (mb_strlen($row[$headerByKey['description_detail']]) > $this->eccubeConfig['eccube_ltext_len']) {
                                    $message = trans('admin.common.csv_invalid_description_detail_upper_limit', [
                                        '%line%' => $line,
                                        '%name%' => $headerByKey['description_detail'],
                                        '%max%' => $this->eccubeConfig['eccube_ltext_len'],
                                    ]);
                                    $this->addErrors($message);

                                    return $this->renderWithError($form, $headers);
                                } else {
                                    $Product->setDescriptionDetail(StringUtil::trimAll($row[$headerByKey['description_detail']]));
                                }
                            } else {
                                $Product->setDescriptionDetail(null);
                            }
                        }

                        // 検索ワード
                        if (isset($row[$headerByKey['search_word']])) {
                            if (StringUtil::isNotBlank($row[$headerByKey['search_word']])) {
                                $Product->setSearchWord(StringUtil::trimAll($row[$headerByKey['search_word']]));
                            } else {
                                $Product->setSearchWord(null);
                            }
                        }

                        // フリーエリア
                        if (isset($row[$headerByKey['free_area']])) {
                            if (StringUtil::isNotBlank($row[$headerByKey['free_area']])) {
                                $Product->setFreeArea(StringUtil::trimAll($row[$headerByKey['free_area']]));
                            } else {
                                $Product->setFreeArea(null);
                            }
                        }

                        // 商品画像登録
                        $this->createProductImage($row, $Product, $data, $headerByKey);

                        $this->entityManager->flush();

                        // 商品カテゴリ登録
                        // (HDN) カテゴリIDではなく催事コードからの登録に対応
                        //$this->createProductCategory($row, $Product, $data, $headerByKey);
                        $this->createProductCategoryY01($row, $Product, $data, $headerByKey);

                        //タグ登録
                        $this->createProductTag($row, $Product, $data, $headerByKey);

                        // 商品規格が存在しなければ新規登録
                        /** @var ProductClass[] $ProductClasses */
                        $ProductClasses = $Product->getProductClasses();
                        if ($ProductClasses->count() < 1) {
                            log_info('商品CSV登録(専用)：新規商品：商品規格を生成：商品コード='.$row[$headerByKey['product_code']]);
                            // 規格分類1(ID)がセットされていると規格なし商品、規格あり商品を作成

                            // (HDN) 先に規格なし商品を生成しOrgとしている
                            $ProductClassOrg = $this->createProductClass($row, $Product, $data, $headerByKey);

                            if ($this->BaseInfo->isOptionProductDeliveryFee()) {
                                if (isset($row[$headerByKey['delivery_fee']]) && StringUtil::isNotBlank($row[$headerByKey['delivery_fee']])) {
                                    $deliveryFee = str_replace(',', '', $row[$headerByKey['delivery_fee']]);
                                    $errors = $this->validator->validate($deliveryFee, new GreaterThanOrEqual(['value' => 0]));
                                    if ($errors->count() === 0) {
                                        $ProductClassOrg->setDeliveryFee($deliveryFee);
                                    } else {
                                        $message = trans('admin.common.csv_invalid_greater_than_zero', ['%line%' => $line, '%name%' => $headerByKey['delivery_fee']]);
                                        $this->addErrors($message);
                                    }
                                }
                            }

                            // 商品別税率機能が有効の場合に税率を更新
                            if ($this->BaseInfo->isOptionProductTaxRule()) {
                                if (isset($row[$headerByKey['tax_rate']]) && StringUtil::isNotBlank($row[$headerByKey['tax_rate']])) {
                                    $taxRate = $row[$headerByKey['tax_rate']];
                                    $errors = $this->validator->validate($taxRate, new GreaterThanOrEqual(['value' => 0]));
                                    if ($errors->count() === 0) {
                                        if ($ProductClassOrg->getTaxRule()) {
                                            // 商品別税率の設定があれば税率を更新
                                            $ProductClassOrg->getTaxRule()->setTaxRate($taxRate);
                                        } else {
                                            // 商品別税率の設定がなければ新規作成
                                            $TaxRule = $this->taxRuleRepository->newTaxRule();
                                            $TaxRule->setTaxRate($taxRate);
                                            $TaxRule->setApplyDate(new \DateTime());
                                            $TaxRule->setProduct($Product);
                                            $TaxRule->setProductClass($ProductClassOrg);
                                            $ProductClassOrg->setTaxRule($TaxRule);
                                        }
                                    } else {
                                        $message = trans('admin.common.csv_invalid_greater_than_zero', ['%line%' => $line, '%name%' => $headerByKey['tax_rate']]);
                                        $this->addErrors($message);
                                    }
                                } else {
                                    // 税率の入力がなければ税率の設定を削除
                                    if ($ProductClassOrg->getTaxRule()) {
                                        $this->taxRuleRepository->delete($ProductClassOrg->getTaxRule());
                                        $ProductClassOrg->setTaxRule(null);
                                    }
                                }
                            }

                            // ！！！(HDN) 商品規格１：規格分類IDの替わりに店舗コードを用いる
                            // ！！！(HDN) 店舗コード設定があれば商品規格を生成
                            //if (isset($row[$headerByKey['class_category1']]) && StringUtil::isNotBlank($row[$headerByKey['class_category1']])) {
                            if (isset($row[$headerByKey['tenpo_cd']]) && StringUtil::isNotBlank($row[$headerByKey['tenpo_cd']])) {
                                log_info('商品CSV登録(専用)：店舗コード設定あり：店舗コード='.$row[$headerByKey['tenpo_cd']]);

                                /*
                                if (isset($row[$headerByKey['class_category2']]) && $row[$headerByKey['class_category1']] == $row[$headerByKey['class_category2']]) {
                                    $message = trans('admin.common.csv_invalid_not_same', [
                                        '%line%' => $line,
                                        '%name1%' => $headerByKey['class_category1'],
                                        '%name2%' => $headerByKey['class_category2'],
                                    ]);
                                    $this->addErrors($message);
                                } else {
                                */
                                    // 商品規格あり
                                    // 規格分類あり商品を作成
                                    $ProductClass = clone $ProductClassOrg;
                                    $ProductStock = clone $ProductClassOrg->getProductStock();

                                    // 規格分類1、規格分類2がnullであるデータを非表示
                                    $ProductClassOrg->setVisible(false);

                                    // 規格分類1、2をそれぞれセットし作成
                                    $ClassCategory1 = null;


                                    // ！！！(HDN) 商品規格１：規格分類IDの替わりに店舗コードを用いる
                                    //if (preg_match('/^\d+$/', $row[$headerByKey['class_category1']])) {
                                    //    $ClassCategory1 = $this->classCategoryRepository->find($row[$headerByKey['class_category1']]);
                                    if (preg_match('/^\d+$/', $row[$headerByKey['tenpo_cd']])) {
                                        $ClassCategory1 = $this->classCategoryRepository->findOneBy(array('backend_name' => $row[$headerByKey['tenpo_cd']]));


                                        if (!$ClassCategory1) {
                                            $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category1']]);
                                            $this->addErrors($message);
                                        } else {
                                            log_info('商品CSV登録(専用)：店舗コードから規格分類を取得：規格分類名='.$ClassCategory1->getName());
                                            $ProductClass->setClassCategory1($ClassCategory1);
                                        }
                                    } else {
                                        $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category1']]);
                                        $this->addErrors($message);
                                    }

                                    if (isset($row[$headerByKey['class_category2']]) && StringUtil::isNotBlank($row[$headerByKey['class_category2']])) {
                                        if (preg_match('/^\d+$/', $row[$headerByKey['class_category2']])) {
                                            $ClassCategory2 = $this->classCategoryRepository->find($row[$headerByKey['class_category2']]);
                                            if (!$ClassCategory2) {
                                                $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category2']]);
                                                $this->addErrors($message);
                                            } else {
                                                if ($ClassCategory1 &&
                                                    ($ClassCategory1->getClassName()->getId() == $ClassCategory2->getClassName()->getId())
                                                ) {
                                                    $message = trans('admin.common.csv_invalid_not_same', ['%line%' => $line, '%name1%' => $headerByKey['class_category1'], '%name2%' => $headerByKey['class_category2']]);
                                                    $this->addErrors($message);
                                                } else {
                                                    $ProductClass->setClassCategory2($ClassCategory2);
                                                }
                                            }
                                        } else {
                                            $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category2']]);
                                            $this->addErrors($message);
                                        }
                                    }
                                    $ProductClass->setProductStock($ProductStock);
                                    $ProductStock->setProductClass($ProductClass);

                                    $this->entityManager->persist($ProductClass);
                                    $this->entityManager->persist($ProductStock);

                                    log_info('商品CSV登録(専用)：商品クラス登録完了',(array)$ProductClass);
                                /* } */
                            } else {
                                if (isset($row[$headerByKey['class_category2']]) && StringUtil::isNotBlank($row[$headerByKey['class_category2']])) {
                                    $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category2']]);
                                    $this->addErrors($message);
                                }
                            }
                        } else {
                            // 商品規格の更新
                            log_info('商品CSV登録(専用)：既存商品：商品規格を確認：商品コード='.$row[$headerByKey['product_code']]);

                            $flag = false;
                            //$classCategoryId1 = StringUtil::isBlank($row[$headerByKey['class_category1']]) ? null : $row[$headerByKey['class_category1']];
                            //$classCategoryId2 = StringUtil::isBlank($row[$headerByKey['class_category2']]) ? null : $row[$headerByKey['class_category2']];
                            $classCategoryId2 = null;
                            
                            // ！！！(HDN) 店舗コード：CSVから ※ tenpo_cdかbackend_nameか？
                            $tenpoCdFromCsv = StringUtil::isBlank($row[$headerByKey['tenpo_cd']]) ? null : $row[$headerByKey['tenpo_cd']];

                            foreach ($ProductClasses as $pc) {
                                $classCategory1 = is_null($pc->getClassCategory1()) ? null : $pc->getClassCategory1()->getId();
                                $classCategory2 = is_null($pc->getClassCategory2()) ? null : $pc->getClassCategory2()->getId();
                                
                                // ！！！(HDN) 店舗コード：現登録から
                                $tenpoCdFromCc = is_null($pc->getClassCategory1()) ? null : $pc->getClassCategory1()->getBackendName();

                                // 登録されている商品規格を更新
                                // ！！！(HDN) 店舗コードを用いて比較
                                //if ($classCategory1 == $classCategoryId1 &&
                                //    $classCategory2 == $classCategoryId2
                                if ($tenpoCdFromCc == $tenpoCdFromCsv &&
                                    $classCategory2 == $classCategoryId2
                                ) {
                                    log_info('商品CSV登録(専用)：商品規格の更新：店舗コード='.$tenpoCdFromCc);

                                    // ！！！(HDN) updateProductClass内で規格分類IDを使用する
                                    if (!isset($row[$headerByKey['class_category1']])) {
                                        if ( !is_null($classCategory1) ) {
                                            $row[$headerByKey['class_category1']] = $classCategory1;
                                        }
                                    }

                                    $this->updateProductClass($row, $Product, $pc, $data, $headerByKey);

                                    if ($this->BaseInfo->isOptionProductDeliveryFee()) {
                                        if (isset($row[$headerByKey['delivery_fee']]) && StringUtil::isNotBlank($row[$headerByKey['delivery_fee']])) {
                                            $deliveryFee = str_replace(',', '', $row[$headerByKey['delivery_fee']]);
                                            $errors = $this->validator->validate($deliveryFee, new GreaterThanOrEqual(['value' => 0]));
                                            if ($errors->count() === 0) {
                                                $pc->setDeliveryFee($deliveryFee);
                                            } else {
                                                $message = trans('admin.common.csv_invalid_greater_than_zero', ['%line%' => $line, '%name%' => $headerByKey['delivery_fee']]);
                                                $this->addErrors($message);
                                            }
                                        }
                                    }

                                    // 商品別税率機能が有効の場合に税率を更新
                                    if ($this->BaseInfo->isOptionProductTaxRule()) {
                                        if (isset($row[$headerByKey['tax_rate']]) && StringUtil::isNotBlank($row[$headerByKey['tax_rate']])) {
                                            $taxRate = $row[$headerByKey['tax_rate']];
                                            $errors = $this->validator->validate($taxRate, new GreaterThanOrEqual(['value' => 0]));
                                            if ($errors->count() === 0) {
                                                if ($pc->getTaxRule()) {
                                                    // 商品別税率の設定があれば税率を更新
                                                    $pc->getTaxRule()->setTaxRate($taxRate);
                                                } else {
                                                    // 商品別税率の設定がなければ新規作成
                                                    $TaxRule = $this->taxRuleRepository->newTaxRule();
                                                    $TaxRule->setTaxRate($taxRate);
                                                    $TaxRule->setApplyDate(new \DateTime());
                                                    $TaxRule->setProduct($Product);
                                                    $TaxRule->setProductClass($pc);
                                                    $pc->setTaxRule($TaxRule);
                                                }
                                            } else {
                                                $message = trans('admin.common.csv_invalid_greater_than_zero', ['%line%' => $line, '%name%' => $headerByKey['tax_rate']]);
                                                $this->addErrors($message);
                                            }
                                        } else {
                                            // 税率の入力がなければ税率の設定を削除
                                            if ($pc->getTaxRule()) {
                                                $this->taxRuleRepository->delete($pc->getTaxRule());
                                                $pc->setTaxRule(null);
                                            }
                                        }
                                    }

                                    $flag = true;
                                    break;
                                }
                            }

                            // 商品規格を登録
                            // (HDN) 未登録の商品規格を登録
                            if (!$flag) {
                                log_info('商品CSV登録(専用)：商品規格を生成：店舗コード='.$tenpoCdFromCsv);

                                $pc = $ProductClasses[0];
                                if ($pc->getClassCategory1() == null &&
                                    $pc->getClassCategory2() == null
                                ) {
                                    // 規格分類1、規格分類2がnullであるデータを非表示
                                    $pc->setVisible(false);
                                }

                                /*
                                if (isset($row[$headerByKey['class_category1']]) && isset($row[$headerByKey['class_category2']])
                                    && $row[$headerByKey['class_category1']] == $row[$headerByKey['class_category2']]) {
                                    $message = trans('admin.common.csv_invalid_not_same', [
                                        '%line%' => $line,
                                        '%name1%' => $headerByKey['class_category1'],
                                        '%name2%' => $headerByKey['class_category2'],
                                    ]);
                                    $this->addErrors($message);
                                } else {
                                */
                                    // 必ず規格分類1がセットされている
                                    // 規格分類1、2をそれぞれセットし作成
                                    $ClassCategory1 = null;

                                    // ！！！(HDN) 店舗コードを使用
                                    //if (preg_match('/^\d+$/', $classCategoryId1)) {
                                    //    $ClassCategory1 = $this->classCategoryRepository->find($classCategoryId1);
                                    if (preg_match('/^\d+$/', $tenpoCdFromCsv)) {
                                        log_info('商品CSV登録(専用)：店舗コードで規格分類を取得：店舗コード='.$tenpoCdFromCsv);
                                        $ClassCategory1 = $this->classCategoryRepository->findOneBy(array('backend_name' => $tenpoCdFromCsv));

                                        if (!$ClassCategory1) {
                                            $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category1']]);
                                            $this->addErrors($message);
                                        }
                                    } else {
                                        $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category1']]);
                                        $this->addErrors($message);
                                    }

                                    $ClassCategory2 = null;
                                    if (isset($row[$headerByKey['class_category2']]) && StringUtil::isNotBlank($row[$headerByKey['class_category2']])) {
                                        if ($pc->getClassCategory1() != null && $pc->getClassCategory2() == null) {
                                            $message = trans('admin.common.csv_invalid_can_not', ['%line%' => $line, '%name%' => $headerByKey['class_category2']]);
                                            $this->addErrors($message);
                                        } else {
                                            if (preg_match('/^\d+$/', $classCategoryId2)) {
                                                $ClassCategory2 = $this->classCategoryRepository->find($classCategoryId2);
                                                if (!$ClassCategory2) {
                                                    $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category2']]);
                                                    $this->addErrors($message);
                                                } else {
                                                    if ($ClassCategory1 &&
                                                        ($ClassCategory1->getClassName()->getId() == $ClassCategory2->getClassName()->getId())
                                                    ) {
                                                        $message = trans('admin.common.csv_invalid_not_same', [
                                                            '%line%' => $line,
                                                            '%name1%' => $headerByKey['class_category1'],
                                                            '%name2%' => $headerByKey['class_category2'],
                                                        ]);
                                                        $this->addErrors($message);
                                                    }
                                                }
                                            } else {
                                                $message = trans('admin.common.csv_invalid_not_found', ['%line%' => $line, '%name%' => $headerByKey['class_category2']]);
                                                $this->addErrors($message);
                                            }
                                        }
                                    } else {
                                        if ($pc->getClassCategory1() != null && $pc->getClassCategory2() != null) {
                                            $message = trans('admin.common.csv_invalid_required', ['%line%' => $line, '%name%' => $headerByKey['class_category2']]);
                                            $this->addErrors($message);
                                        }
                                    }
                                    $ProductClass = $this->createProductClass($row, $Product, $data, $headerByKey, $ClassCategory1, $ClassCategory2);

                                    if ($this->BaseInfo->isOptionProductDeliveryFee()) {
                                        if (isset($row[$headerByKey['delivery_fee']]) && StringUtil::isNotBlank($row[$headerByKey['delivery_fee']])) {
                                            $deliveryFee = str_replace(',', '', $row[$headerByKey['delivery_fee']]);
                                            $errors = $this->validator->validate($deliveryFee, new GreaterThanOrEqual(['value' => 0]));
                                            if ($errors->count() === 0) {
                                                $ProductClass->setDeliveryFee($deliveryFee);
                                            } else {
                                                $message = trans('admin.common.csv_invalid_greater_than_zero', ['%line%' => $line, '%name%' => $headerByKey['delivery_fee']]);
                                                $this->addErrors($message);
                                            }
                                        }
                                    }

                                    // 商品別税率機能が有効の場合に税率を更新
                                    if ($this->BaseInfo->isOptionProductTaxRule()) {
                                        if (isset($row[$headerByKey['tax_rate']]) && StringUtil::isNotBlank($row[$headerByKey['tax_rate']])) {
                                            $taxRate = $row[$headerByKey['tax_rate']];
                                            $errors = $this->validator->validate($taxRate, new GreaterThanOrEqual(['value' => 0]));
                                            if ($errors->count() === 0) {
                                                $TaxRule = $this->taxRuleRepository->newTaxRule();
                                                $TaxRule->setTaxRate($taxRate);
                                                $TaxRule->setApplyDate(new \DateTime());
                                                $TaxRule->setProduct($Product);
                                                $TaxRule->setProductClass($ProductClass);
                                                $ProductClass->setTaxRule($TaxRule);
                                            } else {
                                                $message = trans('admin.common.csv_invalid_greater_than_zero', ['%line%' => $line, '%name%' => $headerByKey['tax_rate']]);
                                                $this->addErrors($message);
                                            }
                                        }
                                    }

                                    $Product->addProductClass($ProductClass);
                                /* } */
                            }
                        }
                        if ($this->hasErrors()) {
                            return $this->renderWithError($form, $headers);
                        }
                        $this->entityManager->persist($Product);

                        log_info('商品CSV登録(専用)：商品登録完了',(array)$Product);
                        // (HDN) persistだと処理中の結果取得が不安定なのでflushとした
                        $this->entityManager->flush();
                    }
                    // (HDN) 元来はこちらでflush
                    //$this->entityManager->flush();
                    $this->entityManager->getConnection()->commit();

                    // 画像ファイルの削除(commit後に削除させる)
                    foreach ($deleteImages as $images) {
                        /** @var ProductImage $image */
                        foreach ($images as $image) {
                            if ($this->productImageRepository->findOneBy(['file_name' => $image->getFileName()])) {
                                continue;
                            }
                            try {
                                $fs = new Filesystem();
                                $fs->remove($this->eccubeConfig['eccube_save_image_dir'].'/'.$image);
                            } catch (\Exception $e) {
                                // エラーが発生しても無視する
                            }
                        }
                    }

                    log_info('商品CSV登録(専用)完了');
                    if (!$this->isSplitCsv) {
                        $message = 'admin.common.csv_upload_complete';
                        $this->session->getFlashBag()->add('eccube.admin.success', $message);
                    }

                    $cacheUtil->clearDoctrineCache();
                }
            }
        }

        return $this->renderWithError($form, $headers);
    }

    /**
     * 商品カテゴリの削除、登録
     * (HDN) 催事コードからの登録（削除はしない）
     *
     * @param $row
     * @param Product $Product
     * @param CsvImportService $data
     * @param $headerByKey
     */
    protected function createProductCategoryY01($row, Product $Product, $data, $headerByKey)
    {
        // (HDN) カテゴリーIDの替わりに催事コードが指定される
        //if (!isset($row[$headerByKey['product_category']])) {
        log_info('(HDN)催事コード：'.$row[$headerByKey['saiji_cd']]);
        if (!isset($row[$headerByKey['saiji_cd']])) {
                return;
        }
        // カテゴリの削除
        // (HDN) 削除はしない
        /*
        $ProductCategories = $Product->getProductCategories();
        foreach ($ProductCategories as $ProductCategory) {
            $Product->removeProductCategory($ProductCategory);
            $this->entityManager->remove($ProductCategory);
            $this->entityManager->flush();
        }
        */

        // (HDN) 複数の指定は前提としないが残しておく
        //if (StringUtil::isNotBlank($row[$headerByKey['product_category']])) {
        if (StringUtil::isNotBlank($row[$headerByKey['saiji_cd']])) {
            // カテゴリ(催事イベント)の登録
            //$categories = explode(',', $row[$headerByKey['product_category']]);
            $categories = explode(',', $row[$headerByKey['saiji_cd']]);
            $sortNo = 1;
            $categoriesIdList = [];
            // (HDN) ProductCategoryRepositoryの初期化
            $productCategoryRepository = $this->entityManager->getRepository(ProductCategory::class);
            // (HDN) 複数指定対応
            foreach ($categories as $category) {
                log_info('(HDN)LOOP1 催事コード：'.$category);
                $line = $data->key() + 1;
                if (preg_match('/^\d+$/', $category)) {
                    // (HDN) 催事コードで取得
                    //$Category = $this->categoryRepository->find($category);
                    //$Category = $this->categoryRepository->findOneBy(['saiji_cd' => $category]);
                    $Category = $this->categoryRepository->findOneBySaijiCd($category);
                    if (!$Category) {
                        $message = trans('admin.common.csv_invalid_not_found_target', [
                            '%line%' => $line,
                            '%name%' => $headerByKey['saiji_cd'],
                            '%target_name%' => $category,
                        ]);
                        $this->addErrors($message);
                    } else {
                        log_info('(HDN) LOOP1 催事コードで取得したカテゴリのID：'.$Category->getId());
                        foreach ($Category->getPath() as $ParentCategory) {
                            log_info('(HDN)LOOP2 親カテゴリ：'.$ParentCategory->getId());
                            if (!isset($categoriesIdList[$ParentCategory->getId()])) {
                                //$ProductCategory = $this->makeProductCategory($Product, $ParentCategory, $sortNo);
                                //$this->entityManager->persist($ProductCategory);
                                //$sortNo++;

                                //$Product->addProductCategory($ProductCategory);
                                $categoriesIdList[$ParentCategory->getId()] = true;
                            }
                        }
                        // (HDN) 以下 必要？
                        if (!isset($categoriesIdList[$Category->getId()])) {
                            //$ProductCategory = $this->makeProductCategory($Product, $Category, $sortNo);
                            //$sortNo++;
                            //$this->entityManager->persist($ProductCategory);
                            //$Product->addProductCategory($ProductCategory);
                            $categoriesIdList[$Category->getId()] = true;
                        }
                    }
                } else {
                    $message = trans('admin.common.csv_invalid_not_found_target', [
                        '%line%' => $line,
                        '%name%' => $headerByKey['product_category'],
                        '%target_name%' => $category,
                    ]);
                    $this->addErrors($message);
                }
            }
            // (HDN) 登録済みで無ければ作成
            foreach ($categoriesIdList as $wId=>$wBoo) {
                log_info('(HDN)LOOP3 カテゴリID：'.$wId);
                $Category = $this->categoryRepository->find($wId);
                $wProductCategory = $productCategoryRepository->findOneBy(['product_id'=>$Product->getId(),'category_id'=>$wId]);
                if ( !$wProductCategory ) {
                    log_info('(HDN)LOOP3 プロダクトID：'.$Product->getId().' カテゴリID：'.$wId);
                    $ProductCategory = $this->makeProductCategory($Product, $Category, $sortNo);
                    $this->entityManager->persist($ProductCategory);
                    $sortNo++;
                    $Product->addProductCategory($ProductCategory);
                } 
            }
            
        }
    }

    /**
     * ProductCategory作成
     * (HDN) Baseの内容そのまま（privateメソッドとなっており使えないためここに定義）
     *
     * @param \Eccube\Entity\Product $Product
     * @param \Eccube\Entity\Category $Category
     * @param int $sortNo
     *
     * @return ProductCategory
     */
    protected function makeProductCategory($Product, $Category, $sortNo)
    {
        $ProductCategory = new ProductCategory();
        $ProductCategory->setProduct($Product);
        $ProductCategory->setProductId($Product->getId());
        $ProductCategory->setCategory($Category);
        $ProductCategory->setCategoryId($Category->getId());

        return $ProductCategory;
    }

    /**
     * アップロード用CSV雛形ファイルダウンロード
     *
     * @Route("/%eccube_admin_route%/product/csv_template_y01/{type}", requirements={"type" = "\w+"}, name="admin_product_csv_template_y01")
     *
     * @param $type
     *
     * @return StreamedResponse
     */
    public function csvTemplateY01(Request $request, $type)
    {
        if ($type == 'product') {
            $headers = $this->getProductCsvHeaderY01();
            $filename = 'product.csv';
        } elseif ($type == 'category') {
            $headers = $this->getCategoryCsvHeader();
            $filename = 'category.csv';
        } else {
            throw new NotFoundHttpException();
        }

        return $this->sendTemplateResponse($request, array_keys($headers), $filename);
    }

    /**
     * 商品登録CSVヘッダー定義
     *
     * @return array
     */
    protected function getProductCsvHeaderY01($argAll = false)
    {
        $headers = [
            trans('admin.product.product_csv.display_status_col') => [
                'id' => 'status',
                'description' => 'admin.product.product_csv.display_status_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.product_code_col') => [
                'id' => 'product_code',
                'description' => 'admin.product.product_csv.product_code_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.product_name_col') => [
                'id' => 'name',
                'description' => 'admin.product.product_csv.product_name_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.saiji_cd_col') => [
                'id' => 'saiji_cd',
                'description' => 'admin.product.product_csv.saiji_cd_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.bumon_cd_col') => [
                'id' => 'bumon_cd',
                'description' => 'admin.product.product_csv.bumon_cd_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.sale_price_col') => [
                'id' => 'price02',
                'description' => 'admin.product.product_csv.sale_price_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.normal_price_col') => [
                'id' => 'price01',
                'description' => 'admin.product.product_csv.normal_price_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.tax_rate_col') => [
                'id' => 'tax_rate',
                'description' => 'admin.product.product_csv.tax_rate_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.description_list_col') => [
                'id' => 'description_list',
                'description' => 'admin.product.product_csv.description_list_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.description_detail_col') => [
                'id' => 'description_detail',
                'description' => 'admin.product.product_csv.description_detail_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.tenpo_cd_col') => [
                'id' => 'tenpo_cd',
                'description' => 'admin.product.product_csv.tenpo_cd_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.stock_col') => [
                'id' => 'stock',
                'description' => 'admin.product.product_csv.stock_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.stock_unlimited_col') => [
                'id' => 'stock_unlimited',
                'description' => 'admin.product.product_csv.stock_unlimited_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.sale_limit_col') => [
                'id' => 'sale_limit',
                'description' => 'admin.product.product_csv.sale_limit_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.product_image_col') => [
                'id' => 'product_image',
                'description' => 'admin.product.product_csv.product_image_description',
                'required' => false,
            ],
        ];
        if ( $argAll ) {
            $headersPlus = [
                trans('admin.product.product_csv.keyword_col') => [
                    'id' => 'search_word',
                    'description' => 'admin.product.product_csv.keyword_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.free_area_col') => [
                    'id' => 'free_area',
                    'description' => 'admin.product.product_csv.free_area_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.delete_flag_col') => [
                    'id' => 'product_del_flg',
                    'description' => 'admin.product.product_csv.delete_flag_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.category_col') => [
                    'id' => 'product_category',
                    'description' => 'admin.product.product_csv.category_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.tag_col') => [
                    'id' => 'product_tag',
                    'description' => 'admin.product.product_csv.tag_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.sale_type_col') => [
                    'id' => 'sale_type',
                    'description' => 'admin.product.product_csv.sale_type_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.class_category1_col') => [
                    'id' => 'class_category1',
                    'description' => 'admin.product.product_csv.class_category1_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.class_category2_col') => [
                    'id' => 'class_category2',
                    'description' => 'admin.product.product_csv.class_category2_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.delivery_duration_col') => [
                    'id' => 'delivery_date',
                    'description' => 'admin.product.product_csv.delivery_duration_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.stock_unlimited_col') => [
                    'id' => 'stock_unlimited',
                    'description' => 'admin.product.product_csv.stock_unlimited_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.delivery_fee_col') => [
                    'id' => 'delivery_fee',
                    'description' => 'admin.product.product_csv.delivery_fee_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.product_id_col') => [
                    'id' => 'id',
                    'description' => 'admin.product.product_csv.product_id_description',
                    'required' => false,
                ],
                trans('admin.product.product_csv.shop_memo_col') => [
                    'id' => 'note',
                    'description' => 'admin.product.product_csv.shop_memo_description',
                    'required' => false,
                ],    
            ];
            $headers = array_merge($headers,$headersPlus);
        }
        return $headers;
        /*
        return [
            trans('admin.product.product_csv.display_status_col') => [
                'id' => 'status',
                'description' => 'admin.product.product_csv.display_status_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.product_code_col') => [
                'id' => 'product_code',
                'description' => 'admin.product.product_csv.product_code_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.product_name_col') => [
                'id' => 'name',
                'description' => 'admin.product.product_csv.product_name_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.saiji_cd_col') => [
                'id' => 'saiji_cd',
                'description' => 'admin.product.product_csv.saiji_cd_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.bumon_cd_col') => [
                'id' => 'bumon_cd',
                'description' => 'admin.product.product_csv.bumon_cd_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.sale_price_col') => [
                'id' => 'price02',
                'description' => 'admin.product.product_csv.sale_price_description',
                'required' => true,
            ],
            trans('admin.product.product_csv.normal_price_col') => [
                'id' => 'price01',
                'description' => 'admin.product.product_csv.normal_price_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.tax_rate_col') => [
                'id' => 'tax_rate',
                'description' => 'admin.product.product_csv.tax_rate_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.description_list_col') => [
                'id' => 'description_list',
                'description' => 'admin.product.product_csv.description_list_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.description_detail_col') => [
                'id' => 'description_detail',
                'description' => 'admin.product.product_csv.description_detail_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.tenpo_cd_col') => [
                'id' => 'tenpo_cd',
                'description' => 'admin.product.product_csv.tenpo_cd_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.stock_col') => [
                'id' => 'stock',
                'description' => 'admin.product.product_csv.stock_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.stock_unlimited_col') => [
                'id' => 'stock_unlimited',
                'description' => 'admin.product.product_csv.stock_unlimited_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.sale_limit_col') => [
                'id' => 'sale_limit',
                'description' => 'admin.product.product_csv.sale_limit_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.product_image_col') => [
                'id' => 'product_image',
                'description' => 'admin.product.product_csv.product_image_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.keyword_col') => [
                'id' => 'search_word',
                'description' => 'admin.product.product_csv.keyword_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.free_area_col') => [
                'id' => 'free_area',
                'description' => 'admin.product.product_csv.free_area_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.delete_flag_col') => [
                'id' => 'product_del_flg',
                'description' => 'admin.product.product_csv.delete_flag_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.category_col') => [
                'id' => 'product_category',
                'description' => 'admin.product.product_csv.category_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.tag_col') => [
                'id' => 'product_tag',
                'description' => 'admin.product.product_csv.tag_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.sale_type_col') => [
                'id' => 'sale_type',
                'description' => 'admin.product.product_csv.sale_type_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.class_category1_col') => [
                'id' => 'class_category1',
                'description' => 'admin.product.product_csv.class_category1_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.class_category2_col') => [
                'id' => 'class_category2',
                'description' => 'admin.product.product_csv.class_category2_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.delivery_duration_col') => [
                'id' => 'delivery_date',
                'description' => 'admin.product.product_csv.delivery_duration_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.stock_unlimited_col') => [
                'id' => 'stock_unlimited',
                'description' => 'admin.product.product_csv.stock_unlimited_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.delivery_fee_col') => [
                'id' => 'delivery_fee',
                'description' => 'admin.product.product_csv.delivery_fee_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.product_id_col') => [
                'id' => 'id',
                'description' => 'admin.product.product_csv.product_id_description',
                'required' => false,
            ],
            trans('admin.product.product_csv.shop_memo_col') => [
                'id' => 'note',
                'description' => 'admin.product.product_csv.shop_memo_description',
                'required' => false,
            ],
        ];
        */
    }

    /**
     * @Route("/%eccube_admin_route%/product/csv_split_import_y01", name="admin_product_csv_split_import_y01")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function importCsvY01(Request $request, CsrfTokenManagerInterface $tokenManager)
    {
        $this->isTokenValid();

        if (!$request->isXmlHttpRequest()) {
            throw new BadRequestHttpException();
        }

        $choices = $this->getCsvTempFiles();

        $filename = $request->get('file_name');
        if (!isset($choices[$filename])) {
            throw new BadRequestHttpException();
        }

        $path = $this->eccubeConfig['eccube_csv_temp_realdir'].'/'.$filename;
        $request->files->set('admin_csv_import', ['import_file' => new UploadedFile(
            $path,
            'import.csv',
            'text/csv',
            filesize($path),
            null,
            true
        )]);

        $request->setMethod('POST');
        $request->request->set('admin_csv_import', [
            Constant::TOKEN_NAME => $tokenManager->getToken('admin_csv_import')->getValue(),
            'is_split_csv' => true,
            'csv_file_no' => $request->get('file_no'),
        ]);

        return $this->forwardToRoute('admin_product_csv_import_y01');
    }

}
