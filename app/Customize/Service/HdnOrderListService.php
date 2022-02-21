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

//namespace Eccube\Service;
namespace Customize\Service;

use Eccube\Common\EccubeConfig;
use Eccube\Entity\BaseInfo;
use Eccube\Entity\OrderItem;
use Eccube\Entity\Shipping;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\OrderRepository;
use Eccube\Repository\ShippingRepository;
use Eccube\Repository\ProductRepository;
use Eccube\Service\TaxRuleService;
use Eccube\Twig\Extension\EccubeExtension;
use Eccube\Twig\Extension\TaxExtension;

// Spreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xls as XlsReader;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx as Reader;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup as PageSetup;

/**
 * Class HdnOrderListService.
 * Do export pdf function.
 */
class HdnOrderListService
{
    /** @var OrderRepository */
    protected $orderRepository;

    /** @var ShippingRepository */
    protected $shippingRepository;

    /** @var ProductRepository */
    protected $productRepository;

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

	/** 受注一覧プロパティ */
	const FILE_PROP_JUCHU_LIST = '受注一覧';
	const SHEET_NM_JUCHU_LIST = '受注一覧';
	const FILE_NM_JUCHU_LIST = 'juchu_list.xlsx';

	/** 出荷一覧プロパティ */
	const FILE_PROP_SHUKKA_LIST = '出荷一覧';
	const SHEET_NM_SHUKKA_LIST = '出荷一覧';
	const FILE_NM_SHUKKA_LIST = 'shukka_list.xlsx';

    /** FONT ゴシック */
    //const FONT_GOTHIC = 'kozgopromedium';
    /** FONT 明朝 */
    //const FONT_SJIS = 'kozminproregular';

    // ====================================
    // 変数宣言
    // ====================================

    // 基本ポジションオフセット
    private $baseOffsetX = 0;
    private $baseOffsetY = 0;

    // 商品横展開時横位置（KEY=項目名又は商品コード,VALUE=位置）
    private $posColumn = array();

    /** @var BaseInfo */
    public $baseInfoRepository;

    /** 購入詳細情報 ラベル配列
     * @var array
     */
    //private $labelCell = [];

    /*** 購入詳細情報 幅サイズ配列
     * @var array
     */
    //private $widthCell = [];

    /** 最後に処理した注文番号 @var string */
    //private $lastOrderId = null;

    // --------------------------------------
    // Font情報のバックアップデータ
    /** @var string フォント名 */
    //private $bakFontFamily;
    /** @var string フォントスタイル */
    //private $bakFontStyle;
    /** @var string フォントサイズ */
    //private $bakFontSize;
    // --------------------------------------

    // lfTextのoffset
    //private $baseOffsetX = 0;
    //private $baseOffsetY = -4;

    /** ダウンロードファイル名 @var string */
    private $downloadFileName = null;

    /** 発行日 @var string */
    private $issueDate = '';

    /**
     * HdnOrderListService constructor.
     * @param EccubeConfig $eccubeConfig
     * @param OrderRepository $orderRepository
     * @param ShippingRepository $shippingRepository
     * @param ProductRepository $productRepository
     * @param TaxRuleService $taxRuleService
     * @param BaseInfoRepository $baseInfoRepository
     * @param EccubeExtension $eccubeExtension
     * @param TaxExtension $taxExtension
     * @throws \Exception
     */
    public function __construct(
        EccubeConfig $eccubeConfig, 
        OrderRepository $orderRepository, 
        ShippingRepository $shippingRepository, 
        ProductRepository $productRepository, 
        TaxRuleService $taxRuleService, 
        BaseInfoRepository $baseInfoRepository, 
        EccubeExtension $eccubeExtension, 
        TaxExtension $taxExtension
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->baseInfoRepository = $baseInfoRepository->get();
        $this->orderRepository = $orderRepository;
        $this->shippingRepository = $shippingRepository;
        $this->productRepository = $productRepository;
        $this->taxRuleService = $taxRuleService;
        $this->eccubeExtension = $eccubeExtension;
        $this->taxExtension = $taxExtension;

    }

    /**
     * 受注一覧：メイン
     *
     * @param array $arrData
     *
     * @return bool
     */
    public function makeJuchuExcel($searchData,$arrData)
    {
        log_info('受注リスト：searchData:',$searchData);
        log_info('受注リスト：arrData 件数:'.count($arrData));

        if ( !isset($searchData['saiji_id']) ) {
            $searchData['saiji_id'] = 9;
        }
        // イベント対象商品リストを取得
        $arrProduct = $this->productRepository->findProductsWithSaiji($searchData['saiji_id']);
        if ( is_null($arrProduct) || count($arrProduct) <= 0 ) {
            return false;
        }

        // スプレッドシートを作成
        $spreadsheet = new Spreadsheet();
        
        // ファイルのプロパティを設定
        $spreadsheet->getProperties()
                    ->setTitle(self::FILE_PROP_JUCHU_LIST);
        
        // シート作成
        $spreadsheet->getActiveSheet('sheet1')->UnFreezePane();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle(self::SHEET_NM_JUCHU_LIST);

        //
        // 単純リストパターン 
        //

        // ヘッダ作成
        $row = $this->editHeaderJuchuList($sheet,$this->baseOffsetX,$this->baseOffsetY,$searchData,$arrProduct);
        // ヘッダを見出し行とする
        $sheet -> getPageSetup()-> setRowsToRepeatAtTopByStartAndEnd(1, $row);
        // １注文を1行に出力
        $flgFirst = true;
        foreach ($arrData as $Order) {
            log_info('受注データ：id='.$Order->getId());
            log_info('受注データ：saiji='.$Order->getSaijiCd());
            log_info('受注データ：tenpo='.$Order->getTenpoCd());
            if ( $flgFirst ) {
                $arr = (array)$Order;
                log_info('受注データ：obj：',$arr);
                $flgFirst = false;
            }
            $Shipping = $Order->getShipping();
            $shipping = (array)$Shipping;
            //log_info('受注データ：shipping：',$shipping);
            // 明細作成
            $row = $this->editDetailJuchuList($sheet,$this->baseOffsetX,$row,$Order);
        }

        // 整形
        $max_row = $sheet -> getHighestRow(); //最終行（最下段）の取得
        $max_col = $sheet -> getHighestColumn(); //最終列（右端）の取得
        $maxCellAddress = $max_col.$max_row; //最終セルのアドレスを格納する変数
        // 全体のスタイル
        $objStyle = $sheet->getStyle('A1:'.$maxCellAddress);
        // 枠線設定、背景色設定、縦書き設定
        $objStyle->getBorders()->getOutline()->setBorderStyle(Border::BORDER_THIN);
        $objStyle->getBorders()->getVertical()->setBorderStyle(Border::BORDER_THIN);
        $objStyle->getBorders()->getHorizontal()->setBorderStyle(Border::BORDER_THIN);
        // ページ設定
        $sheet -> getPageSetup()-> setPrintArea('A1:'.$maxCellAddress); //印刷範囲の設定
        $sheet -> getPageSetup()-> setOrientation(PageSetup::ORIENTATION_LANDSCAPE); //横向き
        $sheet -> getHeaderFooter()-> setOddHeader('&C '.self::SHEET_NM_JUCHU_LIST); //&Cはセンタリング
        $sheet -> getHeaderFooter()-> setOddFooter("&P/&N"); //&Nは全ページ数、&Pは現在ページの付与

        // バッファをクリア
        ob_end_clean();
        
        $fileName = $this->getFileNm(self::FILE_NM_JUCHU_LIST);
        
        // ダウンロード（詳細は要確認）
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$fileName.'"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
        header('Cache-Control: cache, must-revalidate');
        header('Pragma: public');
        
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        
        exit();

    }

    /**
     * 受注一覧：ヘッダ編集
     *
     * @return boolean 
     */
    public function editHeaderJuchuList($sheet,$offsetX,$offsetY,$searchData,$arrProduct)
    {
        $col = $offsetX;
        $row = $offsetY+1;
        $this->setHeaderColumn($sheet, ++$col, $row, '受取店舗');
        $this->setHeaderColumn($sheet, ++$col, $row, '受付No');
        $this->setHeaderColumn($sheet, ++$col, $row, '合計金額');
        $this->setHeaderColumn($sheet, ++$col, $row, 'お支払い');
        $this->setHeaderColumn($sheet, ++$col, $row, '割引');
        $this->setHeaderColumn($sheet, ++$col, $row, 'お客様名');
        $this->setHeaderColumn($sheet, ++$col, $row, 'お客様電話番号');
        $this->setHeaderColumn($sheet, ++$col, $row, 'お渡し予定日');
        $this->setHeaderColumn($sheet, ++$col, $row, '時刻');
        foreach($arrProduct as $Product) {
            /*
            log_info('受注：催事商品：'.$Product->getName());
            $sheet->setCellValueByColumnAndRow(++$col, $row, $Product->getName());
            $this->posColumn[$Product->getCode()] = $col;
            */
            log_info('受注：催事商品：'.$Product['code'].':'.$Product['name']);
            $sheet->setCellValueByColumnAndRow(++$col, $row, $Product['name']);
            $this->posColumn[$Product['code']] = $col;
            $sheet->setCellValueByColumnAndRow(++$col, $row, '金額');
        }
        $this->setHeaderColumn($sheet, ++$col, $row, '受付者');
        $this->setHeaderColumn($sheet, ++$col, $row, '紹介者');
        $this->setHeaderColumn($sheet, ++$col, $row, '備考');
        $this->setHeaderColumn($sheet, ++$col, $row, '更新者');
        $this->setHeaderColumn($sheet, ++$col, $row, '更新日時');
        $this->setHeaderColumn($sheet, ++$col, $row, '注意事項');
        log_info('受注：配置：',$this->posColumn);
        // ヘッダ全体のスタイルを取得
        $objStyle = $sheet->getStyleByColumnAndRow($offsetX+1,$row,$col,$row);
        // 枠線設定、背景色設定、縦書き設定
        //$objStyle->getBorders()->getOutline()->setBorderStyle(Border::BORDER_THIN);
        //$objStyle->getBorders()->getVertical()->setBorderStyle(Border::BORDER_THIN);
        $objStyle->getFill()->setFillType(Fill::FILL_SOLID);
        $objStyle->getFill()->getStartColor()->setARGB('dddddddd');
        //$objStyle->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $objStyle->getAlignment()->setTextRotation(-165);   // 縦書き：-165(特殊)
        return $row;
    }

    /**
     * 受注一覧：明細編集
     *
     * @return boolean 
     */
    public function editDetailJuchuList($sheet,$offsetX,$offsetY,$Order)
    {
        //$col = $offsetX+1;
        $row = $offsetY+1;

        $Tenpo  = $Order->getTenpo();
        $Saiji  = $Order->getSaiji();
        $Shipping = $Order->getShipping();

        //$sheet->setCellValueByColumnAndRow($this->posColumn['受取店舗'], $row, $Order->getTenpoCd());
        $sheet->setCellValueByColumnAndRow($this->posColumn['受取店舗'], $row, $Tenpo->getTenpoName());
        $sheet->setCellValueByColumnAndRow($this->posColumn['受付No'], $row, $Order->getOrderNo());
        $sheet->setCellValueByColumnAndRow($this->posColumn['合計金額'], $row, $Order->getPaymentTotal());
        $sheet->setCellValueByColumnAndRow($this->posColumn['お支払い'], $row, $Order->getPaymentMethod());
        $sheet->setCellValueByColumnAndRow($this->posColumn['割引'], $row, $this->getWariDisp($Order));
        $sheet->setCellValueByColumnAndRow($this->posColumn['お客様名'], $row, $Order->getKana01().' '.$Order->getKana02());
        $sheet->setCellValueByColumnAndRow($this->posColumn['お客様電話番号'], $row, $Order->getPhoneNumber());
        $sheet->setCellValueByColumnAndRow($this->posColumn['お渡し予定日'], $row, $Shipping->getShippingDeliveryDate() ? $Shipping->getShippingDeliveryDate()->format('Y-m-d') : '');
        $sheet->setCellValueByColumnAndRow($this->posColumn['時刻'], $row, $Shipping->getShippingDeliveryTime());

        // OrderItem
        $OrderItems = $Order->getOrderItems();

        foreach($OrderItems as $OrderItem) {
            //log_info('受注：商品(ALL)：名前='.$OrderItem->getProductName().' OrderItemType='.$OrderItem->getOrderItemTypeId());
            if ( $OrderItem->getOrderItemTypeId() !== 1 ) {
                continue;
            }
            log_debug('受注：商品(TARGET)：'.$OrderItem->getProductName());
            if ( isset($this->posColumn[$OrderItem->getProductCode()]) ) {
                $colItem = $this->posColumn[$OrderItem->getProductCode()];
                $quantity = $OrderItem->getQuantity();
                // 税込商品金額
                //$gaku     = ($OrderItem->getPrice()+$OrderItem->getTax())*$quantity;
                // 税抜商品金額
                $gaku     = ($OrderItem->getPrice())*$quantity;
                $sheet->setCellValueByColumnAndRow($colItem, $row, $quantity);
                $sheet->setCellValueByColumnAndRow($colItem+1, $row, $gaku);    
            } else {
                $sheet->setCellValueByColumnAndRow($this->posColumn['注意事項'], $row, '対象外商品の受注があります！確認をお願いします！');
            }
        }
        $sheet->setCellValueByColumnAndRow($this->posColumn['受付者'], $row, $Order->getUketsukeName());
        $sheet->setCellValueByColumnAndRow($this->posColumn['紹介者'], $row, $Order->getShoukaiName());
        $sheet->setCellValueByColumnAndRow($this->posColumn['備考'], $row, $Order->getMessage());
        $sheet->setCellValueByColumnAndRow($this->posColumn['更新者'], $row, '更新者');
        $sheet->setCellValueByColumnAndRow($this->posColumn['更新日時'], $row, $Order->getUpdateDate()->format('Y-m-d'));
        // キャンセル行
        if ( OrderStatus::CANCEL === $Order->getOrderStatus()->getId() ) {
            $sheet->setCellValueByColumnAndRow($this->posColumn['注意事項'], $row, $Order->getOrderStatus()->getName());
            // ヘッダ全体のスタイルを取得
            $objStyle = $sheet->getStyleByColumnAndRow($offsetX+1,$row,$this->posColumn['注意事項'],$row);
            // 枠線設定、背景色設定、縦書き設定
            //$objStyle->getBorders()->getOutline()->setBorderStyle(Border::BORDER_THIN);
            //$objStyle->getBorders()->getVertical()->setBorderStyle(Border::BORDER_THIN);
            $objStyle->getFill()->setFillType(Fill::FILL_SOLID);
            $objStyle->getFill()->getStartColor()->setARGB('dddddddd');
        }
    return $row;
    }

    /**
     * 出荷一覧：メイン
     *
     * @param array $arrData
     *
     * @return bool
     */
    public function makeShukkaExcel($searchData,$arrData)
    {
        log_info('出荷リスト：searchData:',$searchData);
        log_info('出荷リスト：arrData cnt:'.count($arrData));

        if ( !isset($searchData['saiji_id']) ) {
            $searchData['saiji_id'] = 9;
        }
        // イベント対象商品リストを取得
        $arrProduct = $this->productRepository->findProductsWithSaiji($searchData['saiji_id']);
        if ( is_null($arrProduct) || count($arrProduct) <= 0 ) {
            return false;
        }

        // スプレッドシートを作成
        $spreadsheet = new Spreadsheet();
        
        // ファイルのプロパティを設定
        $spreadsheet->getProperties()
                    ->setTitle(self::FILE_PROP_SHUKKA_LIST);
        
        // シート作成
        $spreadsheet->getActiveSheet('sheet1')->UnFreezePane();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle(self::SHEET_NM_SHUKKA_LIST);

        //
        // 単純リストパターン 
        //

        // ヘッダ作成
        $row = $this->editHeaderShukkaList($sheet,$this->baseOffsetX,$this->baseOffsetY,$searchData,$arrProduct);
        // ヘッダを見出し行とする
        $sheet -> getPageSetup()-> setRowsToRepeatAtTopByStartAndEnd(1, $row);
        // １注文を1行に出力
        $flgFirst = true;
        foreach ($arrData as $Order) {
            log_info('受注データ：id='.$Order->getId());
            log_info('受注データ：saiji='.$Order->getSaijiCd());
            log_info('受注データ：tenpo='.$Order->getTenpoCd());
            if ( $flgFirst ) {
                $arr = (array)$Order;
                log_info('受注データ：obj：',$arr);
                $flgFirst = false;
            }
            $Shipping = $Order->getShipping();
            $shipping = (array)$Shipping;
            //log_info('受注データ：shipping：',$shipping);
            // 明細作成
            $row = $this->editDetailShukkaList($sheet,$this->baseOffsetX,$row,$Order);
        }

        // 整形
        $max_row = $sheet -> getHighestRow(); //最終行（最下段）の取得
        $max_col = $sheet -> getHighestColumn(); //最終列（右端）の取得
        $maxCellAddress = $max_col.$max_row; //最終セルのアドレスを格納する変数
        // 全体のスタイル
        $objStyle = $sheet->getStyle('A1:'.$maxCellAddress);
        // 枠線設定、背景色設定、縦書き設定
        $objStyle->getBorders()->getOutline()->setBorderStyle(Border::BORDER_THIN);
        $objStyle->getBorders()->getVertical()->setBorderStyle(Border::BORDER_THIN);
        $objStyle->getBorders()->getHorizontal()->setBorderStyle(Border::BORDER_THIN);
        // ページ設定
        $sheet -> getPageSetup()-> setPrintArea('A1:'.$maxCellAddress); //印刷範囲の設定
        $sheet -> getPageSetup()-> setOrientation(PageSetup::ORIENTATION_LANDSCAPE); //横向き
        $sheet -> getHeaderFooter()-> setOddHeader('&C '.self::SHEET_NM_JUCHU_LIST); //&Cはセンタリング
        $sheet -> getHeaderFooter()-> setOddFooter("&P/&N"); //&Nは全ページ数、&Pは現在ページの付与

        // バッファをクリア
        ob_end_clean();
        
        $fileName = $this->getFileNm(self::FILE_NM_SHUKKA_LIST);
        
        // ダウンロード（詳細は要確認）
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$fileName.'"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
        header('Cache-Control: cache, must-revalidate');
        header('Pragma: public');
        
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        
        exit();

    }

    /**
     * 出荷一覧：ヘッダ編集
     *
     * @return boolean 
     */
    public function editHeaderShukkaList($sheet,$offsetX,$offsetY,$searchData,$arrProduct)
    {
        $col = $offsetX;
        $row = $offsetY+1;
        $this->setHeaderColumn($sheet, ++$col, $row, 'No');
        $this->setHeaderColumn($sheet, ++$col, $row, 'お引渡し店舗');
        $this->setHeaderColumn($sheet, ++$col, $row, 'お客様名');
        $this->setHeaderColumn($sheet, ++$col, $row, 'ご連絡先');
        $this->setHeaderColumn($sheet, ++$col, $row, '予定日');
        $this->setHeaderColumn($sheet, ++$col, $row, 'お引渡し時刻');
        $this->setHeaderColumn($sheet, ++$col, $row, 'ＦＣ割');
        $this->setHeaderColumn($sheet, ++$col, $row, '社割');
        foreach($arrProduct as $Product) {
            //log_info('出荷：催事商品：'.$Product->getCode().':'.$Product->getName());
            //$sheet->setCellValueByColumnAndRow(++$col, $row, $Product->getName());
            //$this->posColumn[$Product->getCode()] = $col;
            log_info('出荷：催事商品：'.$Product['code'].':'.$Product['name']);
            $sheet->setCellValueByColumnAndRow(++$col, $row, $Product['name']);
            $this->posColumn[$Product['code']] = $col;
            //$sheet->setCellValueByColumnAndRow(++$col, $row, '金額');
        }
        $this->setHeaderColumn($sheet, ++$col, $row, '備考');
        $this->setHeaderColumn($sheet, ++$col, $row, '注文内容');
        $this->setHeaderColumn($sheet, ++$col, $row, 'キャンセル');
        $this->setHeaderColumn($sheet, ++$col, $row, 'お引渡し済');
        $this->setHeaderColumn($sheet, ++$col, $row, '注意事項');
        log_info('出荷：配置：',$this->posColumn);
        // ヘッダ全体のスタイルを取得
        $objStyle = $sheet->getStyleByColumnAndRow($offsetX+1,$row,$col,$row);
        // 枠線設定、背景色設定、縦書き設定
        //$objStyle->getBorders()->getOutline()->setBorderStyle(Border::BORDER_THIN);
        //$objStyle->getBorders()->getVertical()->setBorderStyle(Border::BORDER_THIN);
        $objStyle->getFill()->setFillType(Fill::FILL_SOLID);
        $objStyle->getFill()->getStartColor()->setARGB('dddddddd');
        //$objStyle->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $objStyle->getAlignment()->setTextRotation(-165);   // 縦書き：-165(特殊)
        return $row;
    }

    /**
     * 出荷一覧：明細編集
     *
     * @return boolean 
     */
    public function editDetailShukkaList($sheet,$offsetX,$offsetY,$Order)
    {
        //$col = $offsetX+1;
        $row = $offsetY+1;

        $Tenpo  = $Order->getTenpo();
        $Saiji  = $Order->getSaiji();
        $Shipping = $Order->getShipping();

        //$sheet->setCellValueByColumnAndRow($this->posColumn['No'], $row, $row-1);
        $sheet->setCellValueByColumnAndRow($this->posColumn['No'], $row, $Order->getOrderNo());
        $sheet->setCellValueByColumnAndRow($this->posColumn['お引渡し店舗'], $row, $Tenpo->getTenpoName());
        $sheet->setCellValueByColumnAndRow($this->posColumn['お客様名'], $row, $Order->getKana01().' '.$Order->getKana02());
        $sheet->setCellValueByColumnAndRow($this->posColumn['ご連絡先'], $row, $Order->getPhoneNumber());
        $sheet->setCellValueByColumnAndRow($this->posColumn['予定日'], $row, $Shipping->getShippingDeliveryDate() ? $Shipping->getShippingDeliveryDate()->format('Y-m-d') : '');
        $sheet->setCellValueByColumnAndRow($this->posColumn['お引渡し時刻'], $row, $Shipping->getShippingDeliveryTime());
        $sheet->setCellValueByColumnAndRow($this->posColumn['ＦＣ割'], $row, $this->dispFlg($Order->getWariAFlg()));
        $sheet->setCellValueByColumnAndRow($this->posColumn['社割'], $row, $this->dispFlg($Order->getWariBFlg()));

        // OrderItem
        $OrderItems = $Order->getOrderItems();

        // オプション取得＆注文内容編集＆商品コード毎に集約
        $wOrderContents = [];
        $wOrderItemCodes = [];
        foreach($OrderItems as $OrderItem) {
            //log_info('出荷：商品(ALL)：名前='.$OrderItem->getProductName().' OrderItemType='.$OrderItem->getOrderItemTypeId());
            if ( $OrderItem->getOrderItemTypeId() !== 1 ) {
                continue;
            }
            $wProductCode = $OrderItem->getProductCode();
            $wProuductName = $OrderItem->getProductName();
            log_debug('出荷：商品(TARGET)：'.$wProductCode.':'.$wProuductName);
            $orderItemOptions = $OrderItem->getOrderItemOptions();
            foreach($orderItemOptions as $orderItemOption) {
                log_debug('出荷：商品オプション：'.$orderItemOption->getLabel());
                $wProuductName .= '|'.$orderItemOption->getLabel();
                $oiocs = $orderItemOption->getOrderItemOptionCategories();
                foreach($oiocs as $oioc) {
                    log_debug('出荷：商品オプションカテゴリ：'.$oioc->getValue());
                    $wProuductName .= '：'.$oioc->getValue();
                }
            }
            $wOrderContents[] = $wProuductName.'x'.$OrderItem->getQuantity();
            //$wProductCode = $OrderItem->getProductCode();
            $wOrderItem['product_name'] = $wProuductName;
            $wOrderItem['product_code'] = $wProductCode;
            $wOrderItem['quantity'] = $OrderItem->getQuantity();

            if ( !array_key_exists($wProductCode,$wOrderItemCodes) ) {
                $wOrderItemCodes[$wProductCode] = $wOrderItem;
            } else {
                $wOrderItemCodes[$wProductCode]['quantity'] += $wOrderItem['quantity'];
            }
        }
        // 商品コードで展開
        foreach($wOrderItemCodes as $wOrderItem) {
            log_info('出荷：商品(CONTENTS)：'.$wOrderItem['product_code'].':'.$wOrderItem['product_name']);
            if ( isset($this->posColumn[$wOrderItem['product_code']]) ) {
                $colItem = $this->posColumn[$wOrderItem['product_code']];
                $quantity = $wOrderItem['quantity'];
                $sheet->setCellValueByColumnAndRow($colItem, $row, $quantity);
            } else {
                $sheet->setCellValueByColumnAndRow($this->posColumn['注意事項'], $row, '対象外商品['.$wOrderItem['product_code'].':'.$wOrderItem['product_name'].']の受注があります！確認をお願いします！');
            }
        }
        $sheet->setCellValueByColumnAndRow($this->posColumn['備考'], $row, $Order->getMessage());
        $sheet->setCellValueByColumnAndRow($this->posColumn['注文内容'], $row, implode(PHP_EOL,$wOrderContents));
        $sheet->getStyleByColumnAndRow($this->posColumn['注文内容'], $row)->getAlignment()->setWrapText(true);
        $sheet->setCellValueByColumnAndRow($this->posColumn['キャンセル'], $row, $this->dispStatus(OrderStatus::CANCEL,$Order->getOrderStatus()->getId()));
        $sheet->setCellValueByColumnAndRow($this->posColumn['お引渡し済'], $row, $this->dispStatus(OrderStatus::DELIVERED,$Order->getOrderStatus()->getId()));
        return $row;
    }

    /**
     * ヘッダ項目セット＆カラム位置セット
     */
    public function setHeaderColumn($sheet, $col, $row, $val)
    {
        $this->posColumn[$val] = $col;
        $sheet->setCellValueByColumnAndRow($col,$row,$val);
    }

    /**
     * 割引状況を編集する
     *
     * @return string 割引状況
     */
    public function getWariDisp($Order)
    {
        $wStatus  = $Order->getWariAFlg() ? '1' : '0' ;
        $wStatus .= $Order->getWariBFlg() ? '1' : '0' ;
        //$wStatus .= $Order->getWariKikanFlg() ? '1' : '0' ;
        
        $wDisp = '-';
        switch ( $wStatus ) {
            case '10' :
                $wDisp = '電子マネー';
                break;
            case '01' :
                $wDisp = '社員割引';
                break;
            case '11' :
                $wDisp = '併用';
                break;
        }
        return $wDisp;
    }
    /**
     * ダウンロードファイル名を取得する
     *
     * @return string ファイル名
     */
    public function getFileNm($argFileNm)
    {
        return $argFileNm;
    }

    /**
     * フラグを編集する
     *
     * @return string フラグ
     */
    public function dispFlg($argFlg)
    {
        if ( $argFlg ) {
            return '○';
        } else {
            return '';
        }
    }

    /**
     * フラグを編集する
     *
     * @return string フラグ
     */
    public function dispStatus($orgOrderStatus,$argOrderStatus)
    {
        if ( $orgOrderStatus === $argOrderStatus ) {
            return '○';
        } else {
            return '';
        }
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

}
