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

use Eccube\Controller\Admin\Product\ProductController as BaseProductController;   // 元のコントローラ

use Customize\Entity\Master\Bumon; // 部門
use Customize\Repository\Master\BumonRepository;

use Eccube\Entity\Category; // カテゴリ（催事）
use Eccube\Entity\ClassCategory; // クラスカテゴリ（店舗）
use Eccube\Repository\ClassCategoryRepository;  // クラスカテゴリリポジトリ（店舗取得）
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Eccube\Common\Constant;
use Eccube\Controller\AbstractController;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\ExportCsvRow;
use Eccube\Entity\Master\CsvType;
use Eccube\Entity\Master\ProductStatus;
use Eccube\Entity\Product;
use Eccube\Entity\ProductCategory;
use Eccube\Entity\ProductClass;
use Eccube\Entity\ProductImage;
use Eccube\Entity\ProductStock;
use Eccube\Entity\ProductTag;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\Admin\ProductType;
use Eccube\Form\Type\Admin\SearchProductType;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\Master\PageMaxRepository;
use Eccube\Repository\Master\ProductStatusRepository;
use Eccube\Repository\ProductClassRepository;
use Eccube\Repository\ProductImageRepository;
use Eccube\Repository\ProductRepository;
use Eccube\Repository\TagRepository;
use Eccube\Repository\TaxRuleRepository;
use Eccube\Service\CsvExportService;
use Eccube\Util\CacheUtil;
use Eccube\Util\FormUtil;
use Knp\Component\Pager\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnsupportedMediaTypeHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;

class ProductController extends BaseProductController
{
    /**
     * @Route("/%eccube_admin_route%/product", name="admin_product")
     * @Route("/%eccube_admin_route%/product/page/{page_no}", requirements={"page_no" = "\d+"}, name="admin_product_page")
     * @Template("@admin/Product/index.twig")
     */
    public function index(Request $request, $page_no = null, Paginator $paginator)
    {
        $builder = $this->formFactory
            ->createBuilder(SearchProductType::class);

        $event = new EventArgs(
            [
                'builder' => $builder,
            ],
            $request
        );
        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_PRODUCT_INDEX_INITIALIZE, $event);

        $searchForm = $builder->getForm();

        /**
         * ページの表示件数は, 以下の順に優先される.
         * - リクエストパラメータ
         * - セッション
         * - デフォルト値
         * また, セッションに保存する際は mtb_page_maxと照合し, 一致した場合のみ保存する.
         **/
        $page_count = $this->session->get('eccube.admin.product.search.page_count',
            $this->eccubeConfig->get('eccube_default_page_count'));

        $page_count_param = (int) $request->get('page_count');
        $pageMaxis = $this->pageMaxRepository->findAll();

        if ($page_count_param) {
            foreach ($pageMaxis as $pageMax) {
                if ($page_count_param == $pageMax->getName()) {
                    $page_count = $pageMax->getName();
                    $this->session->set('eccube.admin.product.search.page_count', $page_count);
                    break;
                }
            }
        }

        // (HDN) 催事オブジェクト
        $objSaiji = null;
        // (HDN) 部門オブジェクト
        $objBumon = null;

        if ('POST' === $request->getMethod()) {
            $searchForm->handleRequest($request);

            if ($searchForm->isValid()) {
                /**
                 * 検索が実行された場合は, セッションに検索条件を保存する.
                 * ページ番号は最初のページ番号に初期化する.
                 */
                $page_no = 1;
                $searchData = $searchForm->getData();

                // 検索条件, ページ番号をセッションに保持.
                $this->session->set('eccube.admin.product.search', FormUtil::getViewData($searchForm));
                $this->session->set('eccube.admin.product.search.page_no', $page_no);
            } else {
                // 検索エラーの際は, 詳細検索枠を開いてエラー表示する.
                return [
                    'searchForm' => $searchForm->createView(),
                    'pagination' => [],
                    'pageMaxis' => $pageMaxis,
                    'page_no' => $page_no,
                    'page_count' => $page_count,
                    'has_errors' => true,
                ];
            }
        } else {
            if (null !== $page_no || $request->get('resume')) {
                /*
                 * ページ送りの場合または、他画面から戻ってきた場合は, セッションから検索条件を復旧する.
                 */
                if ($page_no) {
                    // ページ送りで遷移した場合.
                    $this->session->set('eccube.admin.product.search.page_no', (int) $page_no);
                } else {
                    // 他画面から遷移した場合.
                    $page_no = $this->session->get('eccube.admin.product.search.page_no', 1);
                }
                $viewData = $this->session->get('eccube.admin.product.search', []);
                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);
            } else {
                /**
                 * 初期表示の場合.
                 */
                $page_no = 1;
                // submit default value
                $viewData = FormUtil::getViewData($searchForm);
                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);

                // セッション中の検索条件, ページ番号を初期化.
                $this->session->set('eccube.admin.product.search', $viewData);
                $this->session->set('eccube.admin.product.search.page_no', $page_no);
            }
        }

        // (HDN) formで指定があれば催事オブジェクトを取得
        if ( $searchForm->get('saiji_id') ) {
            $objSaiji = $searchForm->get('saiji_id')->getData();
        }
        // (HDN) formで指定があれば部門オブジェクトを取得
        if ( $searchForm->get('bumon_id') ) {
            $objBumon = $searchForm->get('bumon_id')->getData();
        }

        $qb = $this->productRepository->getQueryBuilderBySearchDataForAdmin($searchData);

        //$qb ->addSelect('sj')
            //->leftJoin('p.Category', 'sj');

        $qb ->addSelect('bm')
            ->leftJoin('p.Bumon', 'bm');
                
        // (HDN) 催事指定があれば条件セット
        if ( $objSaiji ) {
            $qb
            ->innerJoin('p.ProductCategories', 'pct')
            ->innerJoin('pct.Category', 'sj')
            //->andWhere($qb->expr()->in('pct.Category', ':Categories'))
            //->setParameter('Categories', $Categories);
            ->andWhere('sj.id = :saiji_id')
            ->setParameter('saiji_id', $objSaiji->getId());
        }
        // (HDN) 部門指定があれば条件セット
        if ( $objBumon ) {
            $qb
            ->andWhere('bm.id = :bumon_id')
            ->setParameter('bumon_id', $objBumon->getId());
        }

        $event = new EventArgs(
            [
                'qb' => $qb,
                'searchData' => $searchData,
            ],
            $request
        );

        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_PRODUCT_INDEX_SEARCH, $event);

        $pagination = $paginator->paginate(
            $qb,
            $page_no,
            $page_count
        );

        return [
            'searchForm' => $searchForm->createView(),
            'pagination' => $pagination,
            'pageMaxis' => $pageMaxis,
            'page_no' => $page_no,
            'page_count' => $page_count,
            'has_errors' => false,
        ];
    }

    /**
     * 商品CSVの出力.
     * 登録用レイアウト用出力メソッド
     *
     * @Route("/%eccube_admin_route%/product/export4import", name="admin_product_export4import")
     *
     * @param Request $request
     *
     * @return StreamedResponse
     */
    public function export4import(Request $request)
    {
        // タイムアウトを無効にする.
        set_time_limit(0);

        // sql loggerを無効にする.
        $em = $this->entityManager;
        $em->getConfiguration()->setSQLLogger(null);

        $response = new StreamedResponse();
        $response->setCallback(function () use ($request,$em) {
            // CSV種別を元に初期化.
            $this->csvExportService->initCsvType(CsvType::CSV_TYPE_PRODUCT_FOR_IMPORT);

            // ヘッダ行の出力.
            $this->csvExportService->exportHeader();

            // 商品データ検索用のクエリビルダを取得.
            $qb = $this->csvExportService
                ->getProductQueryBuilder($request);

            // Get stock status
            $isOutOfStock = 0;
            // (HDN) Category(催事)の初期化
            $CategoryAsSaiji = null;
            // (HDN) ClassCategoryRepository,BumonRepositoryの初期化
            $classCategoryRepository = $em->getRepository(ClassCategory::class);
            $bumonRepository = $em->getRepository(Bumon::class);

            $session = $request->getSession();
            if ($session->has('eccube.admin.product.search')) {
                $searchData = $session->get('eccube.admin.product.search', []);
                if (isset($searchData['stock_status']) && $searchData['stock_status'] === 0) {
                    $isOutOfStock = 1;
                }
                // (HDN) カテゴリ(催事)指定があればそのカテゴリ(催事)を取得する
                //if (isset($searchData['category_id'])) {
                $CategoryAsSaiji = null;
                if ( isset($searchData['saiji_id']) ) {
                    $CategoryAsSaiji = $this->categoryRepository->find($searchData['saiji_id']);
                } else if ( isset($searchData['category_id']) ) {
                    $CategoryAsSaiji = $this->categoryRepository->find($searchData['category_id']);
                }
                // (HDN) 部門指定があれば取得する
                $objBumon = null;
                if ( isset($searchData['bumon_id']) ) {
                    $objBumon = $bumonRepository->find($searchData['bumon_id']);
                }
            }

            // joinする場合はiterateが使えないため, select句をdistinctする.
            // http://qiita.com/suin/items/2b1e98105fa3ef89beb7
            // distinctのmysqlとpgsqlの挙動をあわせる.
            // http://uedatakeshi.blogspot.jp/2010/04/distinct-oeder-by-postgresmysql.html
            $qb->resetDQLPart('select')
                ->resetDQLPart('orderBy')
                ->orderBy('p.update_date', 'DESC');

            if ($isOutOfStock) {
                $qb->select('p, pc')
                    ->distinct();
            } else {
                $qb->select('p')
                    ->distinct();
            }
            // (HDN) 催事指定があれば条件セット
            if ( $CategoryAsSaiji ) {
                $qb
                ->innerJoin('p.ProductCategories', 'pct')
                ->innerJoin('pct.Category', 'sj')
                ->andWhere('sj.id = :saiji_id')
                ->setParameter('saiji_id', $CategoryAsSaiji->getId());
            }
            // (HDN) 部門指定があれば条件セット
            if ( $objBumon ) {
                $qb->leftJoin('p.Bumon', 'bm')
                    ->andWhere('bm.id = :bumon_id')
                    ->setParameter('bumon_id', $objBumon->getId());
            }

            // データ行の出力.
            $this->csvExportService->setExportQueryBuilder($qb);

            $this->csvExportService->exportData(function ($entity, CsvExportService $csvService)
             use ($request,$CategoryAsSaiji,$classCategoryRepository) {
                $Csvs = $csvService->getCsvs();

                /** @var $Product \Eccube\Entity\Product */
                $Product = $entity;

                /** @var $ProductClasses \Eccube\Entity\ProductClass[] */
                $ProductClasses = $Product->getProductClasses();

                foreach ($ProductClasses as $ProductClass) {
                    // (HDN) visible=falseの場合はSKIP
                    if ( $ProductClass->isVisible() == false ) {
                        continue;
                    }

                    $ExportCsvRow = new ExportCsvRow();

                    // (HDN) ClassCateogory(店舗)を取得
                    $ClassCategoryAsTenpo = null;
                    if ( $ProductClass->hasClassCategory1() ) {
                        $ClassCategoryAsTenpo = $classCategoryRepository->find($ProductClass->getClassCategory1());
                    }

                    // CSV出力項目と合致するデータを取得.
                    foreach ($Csvs as $Csv) {
                        // 商品データを検索.
                        $ExportCsvRow->setData($csvService->getData($Csv, $Product));
                        if ($ExportCsvRow->isDataNull()) {
                            // 商品規格情報を検索.
                            $ExportCsvRow->setData($csvService->getData($Csv, $ProductClass));
                        }
                        if ($ExportCsvRow->isDataNull() && $CategoryAsSaiji ) {
                            // (HDN) カテゴリ(催事)を検索.
                            $ExportCsvRow->setData($csvService->getData($Csv, $CategoryAsSaiji));
                        }
                        if ($ExportCsvRow->isDataNull() && $ClassCategoryAsTenpo ) {
                            // (HDN) クラスカテゴリ(店舗)を検索.
                            $ExportCsvRow->setData($csvService->getData($Csv, $ClassCategoryAsTenpo));
                        }
                        $event = new EventArgs(
                            [
                                'csvService' => $csvService,
                                'Csv' => $Csv,
                                'ProductClass' => $ProductClass,
                                'ExportCsvRow' => $ExportCsvRow,
                            ],
                            $request
                        );
                        $this->eventDispatcher->dispatch(EccubeEvents::ADMIN_PRODUCT_CSV_EXPORT, $event);

                        $ExportCsvRow->pushData();
                    }

                    // $row[] = number_format(memory_get_usage(true));
                    // 出力.
                    $csvService->fputcsv($ExportCsvRow->getRow());
                }
            });
        });

        $now = new \DateTime();
        $filename = 'product_'.$now->format('YmdHis').'.csv';
        $response->headers->set('Content-Type', 'application/octet-stream');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$filename);
        $response->send();

        log_info('商品CSV出力ファイル名', [$filename]);

        return $response;
    }

}
