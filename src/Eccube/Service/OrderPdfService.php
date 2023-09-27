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

namespace Eccube\Service;

use Eccube\Common\EccubeConfig;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\OrderItem;
use Eccube\Entity\Shipping;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\OrderPdfRepository;
use Eccube\Repository\OrderRepository;
use Eccube\Repository\ShippingRepository;
use Eccube\Twig\Extension\EccubeExtension;
use Eccube\Twig\Extension\TaxExtension;
use setasign\Fpdi\TcpdfFpdi;

/**
 * Class OrderPdfService.
 * Do export pdf function.
 */
class OrderPdfService extends TcpdfFpdi
{
    /** @var OrderRepository */
    protected $orderRepository;

    /** @var ShippingRepository */
    protected $shippingRepository;

    /** @var OrderPdfRepository */
    protected $orderPdfRepository;

    /** @var TaxRuleService */
    protected $taxRuleService;

    /**
     * @var EccubeConfig
     */
    private $eccubeConfig;

    /**
     * @var EccubeExtension
     */
    private $eccubeExtension;

    /**
     * @var TaxExtension
     */
    private $taxExtension;

    // ====================================
    // 定数宣言
    // ====================================

    /** ダウンロードするPDFファイルのデフォルト名 */
    const DEFAULT_PDF_FILE_NAME = 'nouhinsyo.pdf';

    /** FONT ゴシック */
    const FONT_GOTHIC = 'kozgopromedium';
    /** FONT 明朝 */
    const FONT_SJIS = 'kozminproregular';

    // ====================================
    // 変数宣言
    // ====================================

    /** @var BaseInfo */
    public $baseInfoRepository;

    /** 購入詳細情報 ラベル配列
     * @var array
     */
    private $labelCell = [];

    /*** 購入詳細情報 幅サイズ配列
     * @var array
     */
    private $widthCell = [];

    /** 最後に処理した注文番号 @var string */
    private $lastOrderId = null;

    // --------------------------------------
    // Font情報のバックアップデータ
    /** @var string フォント名 */
    private $bakFontFamily;
    /** @var string フォントスタイル */
    private $bakFontStyle;
    /** @var string フォントサイズ */
    private $bakFontSize;
    // --------------------------------------

    // lfTextのoffset
    private $baseOffsetX = 0;
    private $baseOffsetY = -4;

    /** ダウンロードファイル名 @var string */
    private $downloadFileName = null;

    /** 発行日 @var string */
    private $issueDate = '';

    /**
     * OrderPdfService constructor.
     * @param EccubeConfig $eccubeConfig
     * @param OrderRepository $orderRepository
     * @param ShippingRepository $shippingRepository
     * @param TaxRuleService $taxRuleService
     * @param BaseInfoRepository $baseInfoRepository
     * @param EccubeExtension $eccubeExtension
     * @param TaxExtension $taxExtension
     * @throws \Exception
     */
    public function __construct(EccubeConfig $eccubeConfig, OrderRepository $orderRepository, ShippingRepository $shippingRepository, TaxRuleService $taxRuleService, BaseInfoRepository $baseInfoRepository, EccubeExtension $eccubeExtension, TaxExtension $taxExtension)
    {
        $this->eccubeConfig = $eccubeConfig;
        $this->baseInfoRepository = $baseInfoRepository->get();
        $this->orderRepository = $orderRepository;
        $this->shippingRepository = $shippingRepository;
        $this->taxRuleService = $taxRuleService;
        $this->eccubeExtension = $eccubeExtension;
        $this->taxExtension = $taxExtension;

        parent::__construct();

        // 購入詳細情報の設定を行う
        // 動的に入れ替えることはない
        $this->labelCell[] = '商品名 / 商品コード';
        $this->labelCell[] = '数量';
        $this->labelCell[] = '単価';
        $this->labelCell[] = '金額(税込)';
        $this->widthCell = [110.3, 12, 21.7, 24.5];

        // Fontの設定しておかないと文字化けを起こす
        $this->SetFont(self::FONT_SJIS);

        // PDFの余白(上左右)を設定
        $this->SetMargins(15, 20);

        // ヘッダーの出力を無効化
        $this->setPrintHeader(false);

        // フッターの出力を無効化
        $this->setPrintFooter(true);
        $this->setFooterMargin();
        $this->setFooterFont([self::FONT_SJIS, '', 8]);
    }

    /**
     * 注文情報からPDFファイルを作成する.
     *
     * @param array $formData
     *                        [KEY]
     *                        ids: 注文番号
     *                        issue_date: 発行日
     *                        title: タイトル
     *                        message1: メッセージ1行目
     *                        message2: メッセージ2行目
     *                        message3: メッセージ3行目
     *                        note1: 備考1行目
     *                        note2: 備考2行目
     *                        note3: 備考3行目
     *
     * @return bool
     */
    public function makePdf(array $formData)
    {
        // 発行日の設定
        $this->issueDate = '作成日: '.$formData['issue_date']->format('Y年m月d日');
        // ダウンロードファイル名の初期化
        $this->downloadFileName = null;

        // データが空であれば終了
        if (!$formData['ids']) {
            return false;
        }

        // 出荷番号をStringからarrayに変換
        $ids = explode(',', $formData['ids']);

        // 空文字列の場合のデフォルトメッセージを設定する
        $this->setDefaultData($formData);

        foreach ($ids as $id) {
            $this->lastOrderId = $id;

            // 出荷番号から出荷情報を取得する
            /** @var Shipping $Shipping */
            $Shipping = $this->shippingRepository->find($id);
            if (!$Shipping) {
                // 出荷情報の取得ができなかった場合
                continue;
            }

            // テンプレートファイルを読み込む
            $Order = $Shipping->getOrder();
            if ($Order->isMultiple()) {
                // 複数配送の時は読み込むテンプレートファイルを変更する
                $userPath = $this->eccubeConfig->get('eccube_html_admin_dir').'/assets/pdf/nouhinsyo_multiple.pdf';
            } else {
                $userPath = $this->eccubeConfig->get('eccube_html_admin_dir').'/assets/pdf/nouhinsyo.pdf';
            }
            $this->setSourceFile($userPath);

            // PDFにページを追加する
            $this->addPdfPage();

            // タイトルを描画する
            $this->renderTitle($formData['title']);

            // 店舗情報を描画する
            $this->renderShopData();

            // 注文情報を描画する
            $this->renderOrderData($Shipping);

            // メッセージを描画する
            $this->renderMessageData($formData);

            // 出荷詳細情報を描画する
            $this->renderOrderDetailData($Shipping);

            // 備考を描画する
            $this->renderEtcData($formData);
        }

        return true;
    }

    /**
     * PDFファイルを出力する.
     *
     * @return string|mixed
     */
    public function outputPdf()
    {
        return $this->Output($this->getPdfFileName(), 'S');
    }

    /**
     * PDFファイル名を取得する
     * PDFが1枚の時は注文番号をファイル名につける.
     *
     * @return string ファイル名
     */
    public function getPdfFileName()
    {
        if (!is_null($this->downloadFileName)) {
            return $this->downloadFileName;
        }
        $this->downloadFileName = self::DEFAULT_PDF_FILE_NAME;
        if ($this->PageNo() == 1) {
            $this->downloadFileName = 'nouhinsyo-No'.$this->lastOrderId.'.pdf';
        }

        return $this->downloadFileName;
    }

    /**
     * フッターに発行日を出力する.
     */
    public function Footer()
    {
        $this->Cell(0, 0, $this->issueDate, 0, 0, 'R');
    }

    /**
     * 作成するPDFのテンプレートファイルを指定する.
     */
    protected function addPdfPage()
    {
        // ページを追加
        $this->AddPage();

        // テンプレートに使うテンプレートファイルのページ番号を取得
        $tplIdx = $this->importPage(1);

        // テンプレートに使うテンプレートファイルのページ番号を指定
        $this->useTemplate($tplIdx, null, null, null, null, true);
        $this->setPageMark();
    }

    /**
     * PDFに店舗情報を設定する
     * ショップ名、ロゴ画像以外はdtb_helpに登録されたデータを使用する.
     */
    protected function renderShopData()
    {
        // 基準座標を設定する
        $this->setBasePosition();

        // ショップ名
        $this->lfText(125, 60, $this->baseInfoRepository->getShopName(), 8, 'B');

        // 都道府県+所在地
        $text = $this->baseInfoRepository->getPref().$this->baseInfoRepository->getAddr01();
        $this->lfText(125, 65, $text, 8);
        $this->lfText(125, 69, $this->baseInfoRepository->getAddr02(), 8);

        // 電話番号
        $text = 'TEL: '.$this->baseInfoRepository->getPhoneNumber();
        $this->lfText(125, 72, $text, 8); //TEL・FAX

        // メールアドレス
        if (strlen($this->baseInfoRepository->getEmail01()) > 0) {
            $text = 'Email: '.$this->baseInfoRepository->getEmail01();
            $this->lfText(125, 75, $text, 8); // Email
        }

        // user_dataにlogo.pngが配置されている場合は優先的に読み込む
        $logoFile = $this->eccubeConfig->get('eccube_html_dir').'/user_data/assets/pdf/logo.png';

        if (!file_exists($logoFile)) {
            $logoFile = $this->eccubeConfig->get('eccube_html_admin_dir').'/assets/pdf/logo.png';
        }

        $this->Image($logoFile, 124, 46, 40);
    }

    /**
     * メッセージを設定する.
     *
     * @param array $formData
     */
    protected function renderMessageData(array $formData)
    {
        $this->lfText(27, 70, $formData['message1'], 8); //メッセージ1
        $this->lfText(27, 74, $formData['message2'], 8); //メッセージ2
        $this->lfText(27, 78, $formData['message3'], 8); //メッセージ3
    }

    /**
     * PDFに備考を設定数.
     *
     * @param array $formData
     */
    protected function renderEtcData(array $formData)
    {
        // フォント情報のバックアップ
        $this->backupFont();

        $this->Cell(0, 10, '', 0, 1, 'C', 0, '');

        $this->SetFont(self::FONT_GOTHIC, 'B', 9);
        $this->MultiCell(0, 6, '＜ 備考 ＞', 'T', 2, 'L', 0, '');

        $this->SetFont(self::FONT_SJIS, '', 8);

        $this->Ln();
        // rtrimを行う
        $text = preg_replace('/\s+$/us', '', $formData['note1']."\n".$formData['note2']."\n".$formData['note3']);
        $this->MultiCell(0, 4, $text, '', 2, 'L', 0, '');

        // フォント情報の復元
        $this->restoreFont();
    }

    /**
     * タイトルをPDFに描画する.
     *
     * @param string $title
     */
    protected function renderTitle($title)
    {
        // 基準座標を設定する
        $this->setBasePosition();

        // フォント情報のバックアップ
        $this->backupFont();

        //文書タイトル（納品書・請求書）
        $this->SetFont(self::FONT_GOTHIC, '', 15);
        $this->Cell(0, 10, $title, 0, 2, 'C', 0, '');
        $this->Cell(0, 66, '', 0, 2, 'R', 0, '');
        $this->Cell(5, 0, '', 0, 0, 'R', 0, '');

        // フォント情報の復元
        $this->restoreFont();
    }

    /**
     * 購入者情報を設定する.
     *
     * @param Shipping $Shipping
     */
    protected function renderOrderData(Shipping $Shipping)
    {
        // 基準座標を設定する
        $this->setBasePosition();

        // フォント情報のバックアップ
        $this->backupFont();

        // =========================================
        // 購入者情報部
        // =========================================

        $Order = $Shipping->getOrder();

        // 購入者都道府県+住所1
        // $text = $Order->getPref().$Order->getAddr01();
        $text = $Shipping->getPref().$Shipping->getAddr01();
        $this->lfText(27, 47, $text, 10);
        $this->lfText(27, 51, $Shipping->getAddr02(), 10); //購入者住所2

        // 購入者氏名
        if (null !== $Shipping->getCompanyName()) {
            // 会社名
            $text = $Shipping->getCompanyName();
            $this->lfText(27, 57, $text, 11);
            // 氏名
            $text = $Shipping->getName01().'　'.$Shipping->getName02().'　様';
            $this->lfText(27, 63, $text, 11);
        } else {
            $text = $Shipping->getName01().'　'.$Shipping->getName02().'　様';
            $this->lfText(27, 59, $text, 11);
        }

        // =========================================
        // お買い上げ明細部
        // =========================================
        $this->SetFont(self::FONT_SJIS, '', 10);

        //ご注文日
        $orderDate = $Order->getCreateDate()->format('Y/m/d H:i');
        if ($Order->getOrderDate()) {
            $orderDate = $Order->getOrderDate()->format('Y/m/d H:i');
        }

        $this->lfText(25, 125, $orderDate, 10);
        //注文番号
        $this->lfText(25, 135, $Order->getOrderNo(), 10);

        // 総合計金額
        if (!$Order->isMultiple()) {
            $this->SetFont(self::FONT_SJIS, 'B', 15);
            $paymentTotalText = $this->eccubeExtension->getPriceFilter($Order->getPaymentTotal());

            $this->setBasePosition(120, 95.5);
            $this->Cell(5, 7, '', 0, 0, '', 0, '');
            $this->Cell(67, 8, $paymentTotalText, 0, 2, 'R', 0, '');
            $this->Cell(0, 45, '', 0, 2, '', 0, '');

            //------------------------
            // (HDN) Barcode印字
            //------------------------
            //$saijiCd = '1';     // ※催事コードを取得する
            $saijiCd = $Order->getSaijiCd();
            $this->lfText(125, 85, '催事コード：'.$saijiCd. ' 売価金額：'.$paymentTotalText, 8); // Barcode value
            $kingaku = round($Order->getPaymentTotal());
            // 金額が収まらない場合は印字しない
            if ( $kingaku < 100000 ) {
                // バーコード内容編集
                $flg = '21';    // バーコードフラグを設定
                $barSaijiCd = str_pad($saijiCd,5,'0',STR_PAD_LEFT);
                $barKingaku = str_pad($kingaku,5,'0',STR_PAD_LEFT);
                // 本来はここでチェックディジットまで取得したい
                // バーコード印字
                $this->print1DBarcode(125, 89, $flg.$barSaijiCd.$barKingaku);    
            }

        }

        // フォント情報の復元
        $this->restoreFont();
    }

    /**
     * 購入商品詳細情報を設定する.
     *
     * @param Shipping $Shipping
     */
    protected function renderOrderDetailData(Shipping $Shipping)
    {
        $arrOrder = [];
        // テーブルの微調整を行うための購入商品詳細情報をarrayに変換する

        // =========================================
        // 受注詳細情報
        // =========================================
        $i = 0;
        $isShowReducedTaxMess = false;
        $Order = $Shipping->getOrder();
        /* @var OrderItem $OrderItem */
        foreach ($Shipping->getOrderItems() as $OrderItem) {
            if (!$Order->isMultiple() && !$OrderItem->isProduct()) {
                continue;
            }
            // class categoryの生成
            $classCategory = '';
            /** @var OrderItem $OrderItem */
            if ($OrderItem->getClassCategoryName1()) {
                $classCategory .= ' [ '.$OrderItem->getClassCategoryName1();
                if ($OrderItem->getClassCategoryName2() == '') {
                    $classCategory .= ' ]';
                } else {
                    $classCategory .= ' * '.$OrderItem->getClassCategoryName2().' ]';
                }
            }

            // product
            $productName = $OrderItem->getProductName();
            if (null !== $OrderItem->getProductCode()) {
                $productName .= ' / '.$OrderItem->getProductCode();
            }
            if ($classCategory) {
                $productName .= ' / '.$classCategory;
            }
            if ($this->taxExtension->isReducedTaxRate($OrderItem)) {
                $productName .= ' ※';
                $isShowReducedTaxMess = true;
            }
            $arrOrder[$i][0] = $productName;
            // 購入数量
            $arrOrder[$i][1] = number_format($suryo);
            // 税込金額（単価）
            $arrOrder[$i][2] = $this->eccubeExtension->getPriceFilter($OrderItem->getPrice());
            // 小計（商品毎）
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($OrderItem->getTotalPrice());

            ++$i;
        }

        if (!$Order->isMultiple()) {
            // =========================================
            // 小計
            // =========================================
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '';
            $arrOrder[$i][3] = '';

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '商品合計';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getSubtotal());

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '送料';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getDeliveryFeeTotal());

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '手数料';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getCharge());

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '値引き';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getTaxableDiscount());

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '';
            $arrOrder[$i][3] = '';

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '合計';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getTaxableTotal());

            foreach ($Order->getTaxableTotalByTaxRate() as $rate => $total) {
                ++$i;
                $arrOrder[$i][0] = '';
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = '('.$rate.'%対象)';
                $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($total);
            }

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '';
            $arrOrder[$i][3] = '';

            foreach($Order->getTaxFreeDiscountItems() as $Item) {
                ++$i;
                $arrOrder[$i][0] = '';
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = $Item->getProductName();
                $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Item->getTotalPrice());
            }

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '請求金額';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getPaymentTotal());

            if ($isShowReducedTaxMess) {
                ++$i;
                $arrOrder[$i][0] = '※は軽減税率対象商品です。';
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = '';
                $arrOrder[$i][3] = '';
            }
        }

        // PDFに設定する
        $this->setFancyTable($this->labelCell, $arrOrder, $this->widthCell);
    }

    /**
     * 注文情報からPDFファイルを作成する.
     * （予約システムY01専用）
     *
     * @param array $formData
     *                        [KEY]
     *                        ids: 注文番号
     *                        issue_date: 発行日
     *                        title: タイトル
     *                        message1: メッセージ1行目
     *                        message2: メッセージ2行目
     *                        message3: メッセージ3行目
     *                        note1: 備考1行目
     *                        note2: 備考2行目
     *                        note3: 備考3行目
     *
     * @return bool
     */
    public function makePdfY01(array $formData)
    {
        // 発行日の設定
        $this->issueDate = '作成日: '.$formData['issue_date']->format('Y年m月d日');
        // ダウンロードファイル名の初期化
        $this->downloadFileName = null;

        // データが空であれば終了
        if (!$formData['ids']) {
            return false;
        }

        // 出荷番号をStringからarrayに変換
        $ids = explode(',', $formData['ids']);

        // 空文字列の場合のデフォルトメッセージを設定する
        $this->setDefaultData($formData);

        foreach ($ids as $id) {
            $this->lastOrderId = $id;

            // 出荷番号から出荷情報を取得する
            /** @var Shipping $Shipping */
            $Shipping = $this->shippingRepository->find($id);
            if (!$Shipping) {
                // 出荷情報の取得ができなかった場合
                continue;
            }

            // テンプレートファイルを読み込む
            $Order = $Shipping->getOrder();
            /*
            if ($Order->isMultiple()) {
                // 複数配送の時は読み込むテンプレートファイルを変更する
                $userPath = $this->eccubeConfig->get('eccube_html_admin_dir').'/assets/pdf/nouhinsyo_multiple.pdf';
            } else {
                $userPath = $this->eccubeConfig->get('eccube_html_admin_dir').'/assets/pdf/nouhinsyo.pdf';
            }
            */
            // (HDN) Y01専用テンプレート（ほぼブランク）
            $userPath = $this->eccubeConfig->get('eccube_html_admin_dir').'/assets/pdf/nouhinsyo_Y01.pdf';
            $this->setSourceFile($userPath);

            // PDFにページを追加する
            $this->addPdfPage();

            // タイトルを描画する（標準）
            $this->renderTitle($formData['title']);

            // 店舗情報を描画する（不要）
            //$this->renderShopData();

            // 注文情報を描画する（Y01）
            $this->renderOrderDataY01($Shipping,20,37,6);

            // メッセージを描画する（Y01） parm:x,y,height
            $this->renderMessageDataY01($formData,20,70,6);

            // 出荷詳細情報を描画する（Y01）
            $this->renderOrderDetailDataY01($Shipping,20,105);

            // 連絡事項(message)
            $formData['order_message'] = $Order->getMessage();

            // 下段備考を描画する（Y01） parm:備考タイトル
            $formData['note1'] = trans('admin.order.delivery_note__y01_line1');
            $formData['note2'] = trans('admin.order.delivery_note__y01_line2');
            $formData['note3'] = trans('admin.order.delivery_note__y01_line3');
            $formData['note4'] = '';
            if ( $Order->getWariAFlg() ) {
                $formData['note4'] = trans('admin.order.delivery_note__y01_line4');
            }
            $formData['note5'] = trans('admin.order.delivery_note__y01_line5');
            $this->renderEtcDataY01($formData,20,'注意事項');
        }

        return true;
    }

    /**
     * 購入者情報を設定する.
     * （予約システムY01専用）
     *
     * @param Shipping $Shipping
     */
    protected function renderOrderDataY01(Shipping $Shipping, $x, $y, $height)
    {
        // 基準座標を設定する
        $this->setBasePosition();

        // フォント情報のバックアップ
        $this->backupFont();

        $this->SetFont(self::FONT_SJIS, '', 10);

        // =========================================
        // 購入者情報部
        // =========================================

        $Order = $Shipping->getOrder();

        // 配置（$x, $x2, $xBar, $xReceipt, $xGaku, $xTel）
        $x2 = $x + 30;  // 注文情報内容
        $xBar = $x + 118; // バーコード
        $xReceipt = $x + 116; // レシート
        $xGaku = $x + 110; // お支払金額
        $xTel = $x + 70;  // 電話番号

        // 配置（$y, $yBar, $yReceipt）
        $yBar = $y + 3; // バーコード
        $yReceipt = $y + 18; // レシート

        // 注文番号
        $this->lfText($x , $y+$height*0, '注文番号', 11);
        $this->lfText($x2, $y+$height*0, $Order->getOrderNo(), 11);

        // 購入者氏名
        //$text = $Shipping->getName01().'　'.$Shipping->getName02().'　様';
        $text = $Order->getKana01().'　'.$Order->getKana02().'　様';
        $this->lfText($x , $y+$height*1, 'お名前', 11);
        $this->lfText($x2, $y+$height*1, $text, 11);

        // ご注文日
        $orderDate = $Order->getCreateDate()->format('Y年m月d日 H:i');
        if ($Order->getOrderDate()) {
            $orderDate = $Order->getOrderDate()->format('Y年m月d日 H:i');
        }
        $this->lfText($x , $y+$height*2, 'ご注文日', 11);
        $this->lfText($x2, $y+$height*2, $orderDate, 11);

        // 受付担当
        $this->lfText($x , $y+$height*3, '受付担当', 11);
        $this->lfText($x2, $y+$height*3, $Order->getUketsukeName(), 11);

        // お支払方法
        $this->lfText($x , $y+$height*4, 'お支払方法', 11);
        $this->lfText($x2, $y+$height*4, $Order->getPaymentMethod(), 11);

        // お引渡し日
        $owatashiDate  = $Shipping->getShippingDeliveryDate()->format('Y年m月d日');
        //$owatashiDate .= '（'.$Shipping->getShippingDeliveryTime().'頃）';
        $owatashiDate .= '（'.$Shipping->getShippingDeliveryTime().'）';
        $this->lfText($x , $y+$height*9.3, 'お引渡し日', 11, 'B');
        $this->lfText($x2, $y+$height*9.3, $owatashiDate, 11, 'BU');

        // お引渡し店舗
        $owatashiTenpo  = $Order->getTenpo()->getTenpoName();
        $phoneNumber    = ' ('.$Order->getTenpo()->getPhoneNumber().')';
        $this->lfText($x , $y+$height*10.3, 'お引渡し店舗', 11, 'B');
        $this->lfText($x2, $y+$height*10.3, $owatashiTenpo, 11, 'BU');
        $this->lfText($xTel, $y+$height*10.3, $phoneNumber, 11,);

        // =========================================
        // 金額＆バーコード
        // =========================================

        // 総合計金額
        if (!$Order->isMultiple()) {
            $paymentTotalText = $this->eccubeExtension->getPriceFilter($Order->getPaymentTotal());

            //------------------------
            // (HDN) Barcode印字
            //------------------------
            // 催事コードを取得する
            $saijiCd = $Order->getSaijiCd();
            //　バーコード上部の内容印刷はいったんomit
            //$this->lfText($xBar, $y+$height*2, '催事コード：'.$saijiCd. ' 売価金額：'.$paymentTotalText, 8); // Barcode value
            $kingaku = round($Order->getPaymentTotal());
            // 金額が収まらない場合は印字しない
            // (HDN) 2023.09.25 eccube.yamlで不要指定された場合は印字omit
            if ( $kingaku < 100000 && !$this->eccubeConfig->get('hdn_order_pdf_barcode_omit') ) {
                // バーコード内容編集
                $flg = '25';    // バーコードフラグを設定
                $barSaijiCd = str_pad($saijiCd,5,'0',STR_PAD_LEFT);
                $barKingaku = str_pad($kingaku,5,'0',STR_PAD_LEFT);
                // 本来はここでチェックディジットまで取得したい
                $code = $flg.$barSaijiCd.$barKingaku;
                $checkDigit = $this->calcJanCodeDigit($code);
                log_info('出荷：バーコード：'.$code.' digit:'.$checkDigit);
                // バーコード印字
                //$this->print1DBarcode($xBar, $y+$height*2+6, $flg.$barSaijiCd.$barKingaku);
                // (HDN) 2022.05.29 バーコード配置を上方へシフト
                //$this->print1DBarcode($xBar, $y+$height*2+6, $code.$checkDigit);    
                $this->print1DBarcode($xBar, $yBar, $code.$checkDigit);    
            }
            //------------------------
            // (HDN) レシート貼付欄
            //------------------------
            // 開始座標の設定
            $this->setBasePosition(0, $yReceipt);
            // タイトル
            $this->SetFillColor(216, 216, 216);
            $this->SetFont(self::FONT_GOTHIC, 'B', 9);
            $text = trans('admin.order.delivery_note_receipt__y01_title');
            $this->MultiCell(58, 6, $text, 1, 'C', 1, 1, $xReceipt);
            // 文言
            $this->SetFont(self::FONT_SJIS, '', 8);
            $text = preg_replace('/\s+$/us', ''
                ,'※'.trans('admin.order.delivery_note_receipt__y01_1')."\n"
                .'    '.trans('admin.order.delivery_note_receipt__y01_2')."\n"
                .'※'.trans('admin.order.delivery_note_receipt__y01_3')."\n"
                .'    '.trans('admin.order.delivery_note_receipt__y01_4')
            );
            $this->MultiCell(58, 4, $text, 1, 'L', 0, 1, $xReceipt);

            //------------------------
            // (HDN) お支払い金額
            //------------------------
            $this->SetFont(self::FONT_SJIS, 'B', 15);
            //$this->setBasePosition($xBar, $y+$height*9);
            //$this->Cell(5, 7, '', 0, 0, '', 0, '');
            //$this->Cell(67, 8, $paymentTotalText, 0, 2, 'R', 0, '');
            //$this->Cell(0, 45, '', 0, 2, '', 0, '');
            $this->lfText($xGaku, $y+$height*10.0, 'お支払金額　'.$paymentTotalText, 15, 'U');

        }

        // フォント情報の復元
        $this->restoreFont();
    }

    /**
     * メッセージを設定する.
     * （予約システムY01専用）
     *
     * @param array $formData
     */
    protected function renderMessageDataY01(array $formData, $x, $y, $height)
    {
        $this->lfText($x, $y+$height*0, $formData['message1'], 10); //メッセージ1
        $this->lfText($x, $y+$height*1, $formData['message2'], 10); //メッセージ2
        $this->lfText($x, $y+$height*2, $formData['message3'], 10); //メッセージ3
    }

    /**
     * PDFに下段備考を設定する.
     * （予約システムY01専用）
     *
     * @param array $formData
     */
    protected function renderEtcDataY01(array $formData, $x, $tsuikiTitle)
    {
        // フォント情報のバックアップ
        $this->backupFont();

        // Cell(矩形領域幅(0は横一杯), 矩形領域高, 印字テキスト, 境界線(0 なし), カーソル移動, テキスト配置, 塗り潰し, リンク)
        // (HDN) 2022.05.29 備考欄改修
        $this->Ln();
        $this->SetFont(self::FONT_GOTHIC, 'B', 9);
        //$this->Cell(0, 4, '*** '.$formData['order_message'].' ***', 0, 1, 'R', 0, '', 0, false, 'T', 'T');
        $this->MultiCell(0, 6, '＜ 備考欄 ＞', 0, 2, 'L', 0, '');
        $this->Ln();
        $this->SetFont(self::FONT_SJIS, '', 8);
        $this->MultiCell(0, 6, '     '.$formData['order_message'], '', 2, 'L', 0, '');
        $this->Ln();
        $this->Ln();

        // 下段注意事項タイトル
        $this->SetFont(self::FONT_GOTHIC, 'B', 9);
        //$this->MultiCell(0, 6, '＜ '.$tsuikiTitle.' ＞', 'T', 2, 'L', 0, '');
        $this->MultiCell(0, 6, '＜ '.$tsuikiTitle.' ＞', 0, 2, 'L', 0, '');

        //　下段注意事項文言
        $this->Ln();
        $this->SetFont(self::FONT_SJIS, '', 8);
        // rtrimを行う
        // (HDN) 2022.05.29 文言追加 → 2022.06.16 取りやめ
        $text = preg_replace('/\s+$/us', '', $formData['note1']."\n".$formData['note2']."\n".$formData['note3']."\n".$formData['note4']);
        //$text = preg_replace('/\s+$/us', '', $formData['note1']."\n".$formData['note2']."\n".$formData['note3']."\n".$formData['note5']."\n".$formData['note4']);
        $this->MultiCell(0, 4, $text, '', 2, 'L', 0, '');

        // フォント情報の復元
        $this->restoreFont();
    }

    /**
     * 購入商品詳細情報を設定する.
     * （予約システムY01専用）
     *
     * @param Shipping $Shipping
     */
    protected function renderOrderDetailDataY01(Shipping $Shipping, $x, $y)
    {
        $arrOrder = [];
        $arrTaxSum = [];
        // テーブルの微調整を行うための購入商品詳細情報をarrayに変換する

        // 明細リスト欄の設定
        // (HDN) 2022.05.29 略称の追加
        // (HDN) 2022.09.25 略称欄を予備エリアとし使い分け
        $this->labelCell[0] = '商品名 / オプション';
        $this->labelCell[1] = '略称';
        if ( $this->eccubeConfig->get('hdn_order_pdf_yobi_area') ) {
            $this->labelCell[1] = $this->eccubeConfig->get('hdn_order_pdf_yobi_area');
        }
        $this->labelCell[2] = '数量';
        $this->labelCell[3] = '商品代金(税抜)';
        $this->labelCell[4] = 'お支払額(税抜)';
        //$this->widthCell = [100, 12, 30, 30];
        //$this->widthCell = [75, 25, 12, 30, 30];
        $this->widthCell = [74, 27, 11, 30, 30];

        // =========================================
        // 受注詳細情報
        // =========================================
        $i = 0;
        $isShowReducedTaxMess = false;
        // 受注データ
        $Order = $Shipping->getOrder();
        // 明細
        $OrderItems = $Shipping->getOrderItems();
        // 商品名で並び替え
        $iter = $OrderItems->getIterator();
        $iter->uasort(function($a, $b) {
            $name_a = $a->getProductName();
            $name_b = $b->getProductName();
            return $name_a == $name_b ? 0 : $name_a > $name_b ? 1 : - 1;
        });
        /* @var OrderItem $OrderItem */
        //foreach ($Shipping->getOrderItems() as $OrderItem) {
        foreach ($iter as $OrderItem) {
            if (!$Order->isMultiple() && !$OrderItem->isProduct()) {
                continue;
            }
            // class categoryの生成
            //$classCategory = '';
            /** @var OrderItem $OrderItem */
            /*
            if ($OrderItem->getClassCategoryName1()) {
                $classCategory .= ' [ '.$OrderItem->getClassCategoryName1();
                if ($OrderItem->getClassCategoryName2() == '') {
                    $classCategory .= ' ]';
                } else {
                    $classCategory .= ' * '.$OrderItem->getClassCategoryName2().' ]';
                }
            }
            */

            //--------------------
            // 商品行の編集
            //--------------------
            // 税率区分
            $taxKbn = '　';
            if ($this->eccubeConfig->get('hdn_tax_default_is_reduced')) {
                if (!$this->taxExtension->isReducedTaxRate($OrderItem)) {
                    $taxKbn = '※';
                    $isShowReducedTaxMess = true;
                }    
            } else {
                if ($this->taxExtension->isReducedTaxRate($OrderItem)) {
                    $taxKbn = '※';
                    $isShowReducedTaxMess = true;
                }    
            }
            //$arrOrder[$i][0] = $taxKbn;

            // 数量の保持
            $suryo = $OrderItem->getQuantity();
            // optionの編集
            $optionText = '';
            $orderItemOptions = $OrderItem->getOrderItemOptions();
            foreach($orderItemOptions as $orderItemOption) {
                //log_info('出荷：商品オプション：'.$orderItemOption->getLabel());
                $optionText .= '|'.$orderItemOption->getLabel();
                $oiocs = $orderItemOption->getOrderItemOptionCategories();
                foreach($oiocs as $oioc) {
                    //log_info('出荷：商品オプションカテゴリ：'.$oioc->getValue());
                    $optionText .= '：'.$oioc->getValue();
                }
            }

            // product
            $productName = $OrderItem->getProductName().$optionText;
            //if (null !== $OrderItem->getProductCode()) {
            //    $productName .= ' / '.$OrderItem->getProductCode();
            //}
            //if ($classCategory) {
            //    $productName .= ' / '.$classCategory;
            //}
            $arrOrder[$i][0] = $taxKbn.$productName;

            // (HDN) 2022.05.29 略称の追加
            // (HDN) 2022.09.25 略称欄を予備エリアとし使い分け
            if ( $this->eccubeConfig->get('hdn_order_pdf_yobi_area') == 'コード' ) {
                $arrOrder[$i][1] = $OrderItem->getProductCode();
            } else {
                $wLenRyaku = 6;
                $wEncode = 'UTF-8';
                //$arrOrder[$i][1] = $OrderItem->getProductRyakuName();
                if ( $OrderItem->getProductRyakuName() && $OrderItem->getProductRyakuName() != '' ) {
                    $arrOrder[$i][1] = $OrderItem->getProductRyakuName();
                } else if ( mb_strlen($OrderItem->getProductName(),$wEncode) >= $wLenRyaku ) {
                    $arrOrder[$i][1] = mb_substr($OrderItem->getProductName(),0,$wLenRyaku,$wEncode);
                } else {
                    $arrOrder[$i][1] = $OrderItem->getProductName();
                }
            }

            // 購入数量
            $arrOrder[$i][2] = number_format($suryo);

            // 商品代金（値引前単価で計算）
            $baseGaku = $suryo * $OrderItem->getBasePrice();
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($baseGaku);

            // 小計（商品毎）
            $itemGaku = $suryo * $OrderItem->getPrice();
            $arrOrder[$i][4] = $this->eccubeExtension->getPriceFilter($itemGaku);

            // 税別集計
            $tax = $OrderItem->getTaxRate();
            if ( !array_key_exists($tax,$arrTaxSum) )  {
                $arrTaxSum[$tax]['tax'] = $tax;
                $arrTaxSum[$tax]['taxKbn'] = $taxKbn;
                $arrTaxSum[$tax]['gaku'] = 0;
                $arrTaxSum[$tax]['taxGaku'] = 0;
            }
            $arrTaxSum[$tax]['gaku'] += $itemGaku;
            $arrTaxSum[$tax]['taxGaku'] += $suryo * $OrderItem->getTax();

            ++$i;
            //--------------------
            // 値引行の編集
            //--------------------
            if ( $OrderItem->getPrice() < $OrderItem->getBasePrice() ) {
                $wariText = '　　';
                $wariGaku = 0;
                // 早割
                if ( $OrderItem->getWariKikanGaku() > 0 ) {
                    $wariText .= '早割';
                    if ( $OrderItem->getWariKikanIsrate() ) {
                        $wariText .= '-'.$OrderItem->getWariKikanValue().'%';
                    }
                    $wariText .= '(-'.$suryo * $OrderItem->getWariKikanGaku().') ';
                    $wariGaku -= $suryo * $OrderItem->getWariKikanGaku();
                }
                // まとめ
                if ( $OrderItem->getWariMatomeGaku() > 0 ) {
                    $wariText .= 'まとめ割';
                    if ( $OrderItem->getWariMatomeIsrate() ) {
                        $wariText .= '-'.$OrderItem->getWariMatomeValue1().'%';
                    }
                    $wariText .= '(-'.$suryo * $OrderItem->getWariMatomeGaku().') ';
                    $wariGaku -= $suryo * $OrderItem->getWariMatomeGaku();
                }
                // FC割
                if ( $OrderItem->getWariAGaku() > 0 ) {
                    $wariText .= 'FC割';
                    if ( $OrderItem->getWariAIsrate() ) {
                        $wariText .= '-'.$OrderItem->getWariAValue().'%';
                    }
                    $wariText .= '(-'.$suryo * $OrderItem->getWariAGaku().') ';
                    $wariGaku -= $suryo * $OrderItem->getWariAGaku();
                }
                // 社割
                if ( $OrderItem->getWariBGaku() > 0 ) {
                    $wariText .= '社割';
                    if ( $OrderItem->getWariBIsrate() ) {
                        $wariText .= '-'.$OrderItem->getWariBValue().'%';
                    }
                    $wariText .= '(-'.$suryo * $OrderItem->getWariBGaku().') ';
                    $wariGaku -= $suryo * $OrderItem->getWariBGaku();
                }
                // セット
                //$arrOrder[$i][0] = '';
                $arrOrder[$i][0] = $wariText;
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = '';
                $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($wariGaku);
                $arrOrder[$i][4] = '';
                ++$i;
            }

        }

        if (!$Order->isMultiple()) {
            // =========================================
            // 小計
            // =========================================
            /*
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '';
            $arrOrder[$i][3] = '';

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '商品合計';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getSubtotal());

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '送料';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getDeliveryFeeTotal());

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '手数料';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getCharge());

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '値引き';
            $arrOrder[$i][3] = $this->eccubeExtension->getPriceFilter($Order->getTaxableDiscount());
            */

            //++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '';
            $arrOrder[$i][3] = '';
            $arrOrder[$i][4] = '';

            //　(HDN) 税別集計
            /*
            foreach ($Order->getTaxableTotalByTaxRate() as $rate => $total) {
                ++$i;
                $arrOrder[$i][0] = '';
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = '';
                $arrOrder[$i][3] = '('.$rate.'%対象)';
                $arrOrder[$i][4] = $this->eccubeExtension->getPriceFilter($total);
            }
            */
            foreach ($arrTaxSum as $taxSum) {
                if ( $this->eccubeConfig->get('hdn_tax_calc_timing') === 'total' ) {
                    if ( $this->eccubeConfig->get('hdn_tax_rounding_type') === '2' ) {
                        $taxSum['taxGaku'] = floor($taxSum['gaku'] * $taxSum['tax'] / 100);
                    } else if ( $this->eccubeConfig->get('hdn_tax_rounding_type') === '3' ) {
                        $taxSum['taxGaku'] = ceil($taxSum['gaku'] * $taxSum['tax'] / 100);
                    } else {
                        $taxSum['taxGaku'] = round($taxSum['gaku'] * $taxSum['tax'] / 100);
                    }
                }
                ++$i;
                //$arrOrder[$i][0] = '';
                $arrOrder[$i][0] = '';
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = '';
                $arrOrder[$i][3] = '小計('.$taxSum['taxKbn'].$taxSum['tax'].'%対象)';
                $arrOrder[$i][4] = $this->eccubeExtension->getPriceFilter($taxSum['gaku']);
                ++$i;
                //$arrOrder[$i][0] = '';
                $arrOrder[$i][0] = '';
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = '';
                $arrOrder[$i][3] = '消費税('.$taxSum['taxKbn'].$taxSum['tax'].'%対象)';
                $arrOrder[$i][4] = $this->eccubeExtension->getPriceFilter($taxSum['taxGaku']);
            }

            ++$i;
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '';
            $arrOrder[$i][3] = '';
            $arrOrder[$i][4] = '';

            //　(HDN) 非課税があれば
            foreach($Order->getTaxFreeDiscountItems() as $Item) {
                ++$i;
                //$arrOrder[$i][0] = '';
                $arrOrder[$i][0] = '';
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = '';
                $arrOrder[$i][3] = $Item->getProductName();
                $arrOrder[$i][4] = $this->eccubeExtension->getPriceFilter($Item->getTotalPrice());
            }

            //　(HDN) お支払合計
            ++$i;
            //$arrOrder[$i][0] = '';
            $arrOrder[$i][0] = '';
            $arrOrder[$i][1] = '';
            $arrOrder[$i][2] = '';
            $arrOrder[$i][3] = 'お支払合計';
            $arrOrder[$i][4] = $this->eccubeExtension->getPriceFilter($Order->getPaymentTotal());

            if ($isShowReducedTaxMess) {
                ++$i;
                //$arrOrder[$i][0] = '';
                $arrOrder[$i][0] = '※は軽減税率対象商品です。';
                $arrOrder[$i][1] = '';
                $arrOrder[$i][2] = '';
                $arrOrder[$i][3] = '';
                $arrOrder[$i][4] = '';
            }
        }

        // PDFに設定する
        $this->setFancyTableY01($this->labelCell, $arrOrder, $this->widthCell, $x, $y);
    }

    /**
     * Colored table.
     *
     * TODO: 後の列の高さが大きい場合、表示が乱れる。
     *
     * @param array $header 出力するラベル名一覧
     * @param array $data   出力するデータ
     * @param array $w      出力するセル幅一覧
     */
    protected function setFancyTableY01($header, $data, $w, $x, $y)
    {
        // フォント情報のバックアップ
        $this->backupFont();

        // 開始座標の設定
        $this->setBasePosition(0, $y);

        // Colors, line width and bold font
        $this->SetFillColor(216, 216, 216);
        $this->SetTextColor(0);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont(self::FONT_SJIS, 'B', 9);
        $this->SetFont('', 'B');

        // Header
        $this->Cell(5, 7, '', 0, 0, '', 0, '');
        $count = count($header);
        for ($i = 0; $i < $count; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();

        // Color and font restoration
        $this->SetFillColor(235, 235, 235);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        $h = 6; // (HDN) 2022.05.29 行高 5 -> 6
        foreach ($data as $row) {
            // 行の処理
            $i = 0;
            $h = 5;
            $this->Cell(5, $h, '', 0, 0, '', 0, '');

            // Cellの高さを保持
            $cellHeight = 0;
            foreach ($row as $col) {
                // 列の処理
                // TODO: 汎用的ではない処理。この指定は呼び出し元で行うようにしたい。
                // テキストの整列を指定する
                if ( $i === 0 ) {
                    $align = 'L';
                } else if ( $i === 1 ) {
                    $align = 'C';
                } else {
                    $align = 'R';
                }

                // セル高さが最大値を保持する
                if ($h >= $cellHeight) {
                    $cellHeight = $h;
                }

                // 最終列の場合は次の行へ移動
                // (0: 右へ移動(既定)/1: 次の行へ移動/2: 下へ移動)
                $ln = ($i == (count($row) - 1)) ? 1 : 0;

                $this->MultiCell(
                    $w[$i], // セル幅
                    $cellHeight, // セルの最小の高さ
                    $col, // 文字列
                    1, // 境界線の描画方法を指定
                    $align, // テキストの整列
                    $fill, // 背景の塗つぶし指定
                    $ln                 // 出力後のカーソルの移動方法
                );
                $h = $this->getLastH();

                ++$i;
            }
            $fill = !$fill;
        }
        $this->Cell(5, $h, '', 0, 0, '', 0, '');
        $this->Cell(array_sum($w), 0, '', 'T');
        $this->SetFillColor(255);

        // フォント情報の復元
        $this->restoreFont();
    }

    /**
     * PDFへのテキスト書き込み
     *
     * @param int    $x     X座標
     * @param int    $y     Y座標
     * @param string $text  テキスト
     * @param int    $size  フォントサイズ
     * @param string $style フォントスタイル
     */
    protected function lfText($x, $y, $text, $size = 0, $style = '')
    {
        // 退避
        $bakFontStyle = $this->FontStyle;
        $bakFontSize = $this->FontSizePt;

        $this->SetFont('', $style, $size);
        $this->Text($x + $this->baseOffsetX, $y + $this->baseOffsetY, $text);

        // 復元
        $this->SetFont('', $bakFontStyle, $bakFontSize);
    }

    /**
     * PDFへのBarcode出力
     * 
     * (HDN)
     * 
     * @param int    $argX     X座標
     * @param int    $argY     Y座標
     * @param string $argText  テキスト
     * @param string $argType  タイプ
     * @param int    $argW     width横幅
     * @param int    $argH     height高さ
     * @param float  $argXres  barの最小幅
     */
    protected function calcJanCodeDigit($num) {
        $arr = str_split($num);
        $odd = 0;
        $mod = 0;
        for($i=0;$i<count($arr);$i++){
           if(($i+1) % 2 == 0) {
              //偶数の総和
              $mod += intval($arr[$i]);
           } else {
              //奇数の総和
              $odd += intval($arr[$i]);               
           }
        }
        //偶数の和を3倍+奇数の総和を加算して、下1桁の数字を10から引く
        $cd = 10 - intval(substr((string)($mod * 3) + $odd,-1));
        //10なら1の位は0なので、0を返す。
        return $cd === 10 ? 0 : $cd;
    }

    /**
     * PDFへのBarcode出力
     * 
     * (HDN)
     * 
     * @param int    $argX     X座標
     * @param int    $argY     Y座標
     * @param string $argText  テキスト
     * @param string $argType  タイプ
     * @param int    $argW     width横幅
     * @param int    $argH     height高さ
     * @param float  $argXres  barの最小幅
     */
    protected function print1DBarcode($argX = 0, $argY = 0, $argText, $argType = 'EAN',$argW = '', $argH = '18', $argXres = '0.5')
    {
        // 印字場所
        $x = $argX + $this->baseOffsetX;
        $y = $argY + $this->baseOffsetY;
        // バーコードタイプ
        if ( $argType == 'EAN' ) {
            if ( strlen($argText) > 8 ) {
                $type = 'EAN13';
            } else {
                $type = 'EAN8';
            }
        } else {
            $type = 'C39';
        }
        // define barcode style
        $style = array(
            'position' => '',
            'align' => 'C',
            'stretch' => false,
            'fitwidth' => true,
            'cellfitalign' => '',
            'border' => false,
            'hpadding' => 'auto',
            'vpadding' => 'auto',
            'fgcolor' => array(0,0,0),
            'bgcolor' => false, //array(255,255,255),
            'text' => true,
            'font' => 'helvetica',
            'fontsize' => 8,
            'stretchtext' => 4
        );
        $this->write1DBarcode($argText, $type, $x, $y, $argW, $argH, $argXres, $style, 'N');
    }

    /**
     * Colored table.
     *
     * TODO: 後の列の高さが大きい場合、表示が乱れる。
     *
     * @param array $header 出力するラベル名一覧
     * @param array $data   出力するデータ
     * @param array $w      出力するセル幅一覧
     */
    protected function setFancyTable($header, $data, $w)
    {
        // フォント情報のバックアップ
        $this->backupFont();

        // 開始座標の設定
        $this->setBasePosition(0, 149);

        // Colors, line width and bold font
        $this->SetFillColor(216, 216, 216);
        $this->SetTextColor(0);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont(self::FONT_SJIS, 'B', 8);
        $this->SetFont('', 'B');

        // Header
        $this->Cell(5, 7, '', 0, 0, '', 0, '');
        $count = count($header);
        for ($i = 0; $i < $count; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();

        // Color and font restoration
        $this->SetFillColor(235, 235, 235);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        $h = 4;
        foreach ($data as $row) {
            // 行のの処理
            $i = 0;
            $h = 4;
            $this->Cell(5, $h, '', 0, 0, '', 0, '');

            // Cellの高さを保持
            $cellHeight = 0;
            foreach ($row as $col) {
                // 列の処理
                // TODO: 汎用的ではない処理。この指定は呼び出し元で行うようにしたい。
                // テキストの整列を指定する
                $align = ($i == 0) ? 'L' : 'R';

                // セル高さが最大値を保持する
                if ($h >= $cellHeight) {
                    $cellHeight = $h;
                }

                // 最終列の場合は次の行へ移動
                // (0: 右へ移動(既定)/1: 次の行へ移動/2: 下へ移動)
                $ln = ($i == (count($row) - 1)) ? 1 : 0;

                $this->MultiCell(
                    $w[$i], // セル幅
                    $cellHeight, // セルの最小の高さ
                    $col, // 文字列
                    1, // 境界線の描画方法を指定
                    $align, // テキストの整列
                    $fill, // 背景の塗つぶし指定
                    $ln                 // 出力後のカーソルの移動方法
                );
                $h = $this->getLastH();

                ++$i;
            }
            $fill = !$fill;
        }
        $this->Cell(5, $h, '', 0, 0, '', 0, '');
        $this->Cell(array_sum($w), 0, '', 'T');
        $this->SetFillColor(255);

        // フォント情報の復元
        $this->restoreFont();
    }

    /**
     * 基準座標を設定する.
     *
     * @param int $x
     * @param int $y
     */
    protected function setBasePosition($x = null, $y = null)
    {
        // 現在のマージンを取得する
        $result = $this->getMargins();

        // 基準座標を指定する
        $actualX = is_null($x) ? $result['left'] : $x;
        $this->SetX($actualX);
        $actualY = is_null($y) ? $result['top'] : $y;
        $this->SetY($actualY);
    }

    /**
     * データが設定されていない場合にデフォルト値を設定する.
     *
     * @param array $formData
     */
    protected function setDefaultData(array &$formData)
    {
        $defaultList = [
            'title' => trans('admin.order.delivery_note_title__default'),
            'message1' => trans('admin.order.delivery_note_message__default1'),
            'message2' => trans('admin.order.delivery_note_message__default2'),
            'message3' => trans('admin.order.delivery_note_message__default3'),
        ];

        foreach ($defaultList as $key => $value) {
            if (is_null($formData[$key])) {
                $formData[$key] = $value;
            }
        }
    }

    /**
     * Font情報のバックアップ.
     */
    protected function backupFont()
    {
        // フォント情報のバックアップ
        $this->bakFontFamily = $this->FontFamily;
        $this->bakFontStyle = $this->FontStyle;
        $this->bakFontSize = $this->FontSizePt;
    }

    /**
     * Font情報の復元.
     */
    protected function restoreFont()
    {
        $this->SetFont($this->bakFontFamily, $this->bakFontStyle, $this->bakFontSize);
    }
}
