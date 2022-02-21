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

//namespace Eccube\Service\PurchaseFlow\Processor;
namespace Customize\Service\PurchaseFlow\Processor;

use Eccube\Entity\ItemInterface;
use Eccube\Entity\Order;
use Eccube\Entity\OrderItem;
use Eccube\Entity\Product;
use Eccube\Service\PurchaseFlow\PurchaseContext;
use Eccube\Service\PurchaseFlow\ItemPreprocessor;

/**
 * (HDN) 割引計算
 */
class HdnWariItemProcessor implements ItemPreprocessor
{
    /**
     * @param ItemInterface   $OrderItem
     * @param PurchaseContext $context
     */
    public function process(ItemInterface $OrderItem, PurchaseContext $context)
    {
        //$Order = $context->getOriginHolder();
        $Order = $OrderItem->getOrder();
        // Order以外の場合は何もしない
        if (!$Order instanceof Order) {
            return;
        }
        // Orderから情報を取得(書き込みは効かない)
        /*
        $paymentId = $Order->getPayment()->getId();
        log_info('[割引計算機] 支払ID:'.$paymentId);
        // Orderへのセット(FC割)
        if ( $paymentId == 5 && $Order->getWariAValue() > 0 ) {
            $Order->setWariAFlg(true);
            //$Order->setWariCFlg(true);
        } else {
            $Order->setWariAFlg(false);
            //$Order->setWariCFlg(false);
        }
        // Orderへのセット(社員割)
        if ( $Order->getShainFlg() && $Order->getWariBValue() > 0 ) {
            $Order->setWariBFlg(true);
        } else {
            $Order->setWariBFlg(false);
        }
        */

        // 商品ごとの処理
        if (!$OrderItem->isProduct()) {
            return;
        }
        // Product参照
        $ProductClass = $OrderItem->getProductClass();
        /* @var $Product \Eccube\Entity\Product */
        $Product = $ProductClass->getProduct();
        log_info('[割引計算機] 商品設定：FC割:'.$Product->getWariAFlg()
                                   .' 社割:'.$Product->getWariBFlg()
                                   .' 早割:'.$Product->getWariKikanFlg()
                                   .' まとめ割:'.$Product->getWariMatomeFlg());

        //----------------------
        // (HDN) 商品情報を補完
        //----------------------
        $OrderItem->setBumon($Product->getBumon());
        $OrderItem->setBasePrice($ProductClass->getPrice02());

        //----------------------
        // (HDN) 割引計算
        //  $orgPrice1 計算の元単価（元の販売価格）
        //  $orgPrice2 計算の元単価（第一グループ割引後の価格）
        //  $wariTotal 割引単価計
        //  $finalPrice 最終単価
        //  $wPrice 各計算用ワーク
        //  $wWariTanka 各割引単価
        //----------------------
        // 元の価格
        $wariTotal = 0;
        $finalPrice = $orgPrice2 = $orgPrice1 = $ProductClass->getPrice02();
        log_info('[割引計算機] 元価格:'.$orgPrice1);

        // 早割
        $wPrice = $orgPrice1;
        if ( $Order->getWariKikanFlg() ) {
            if ( $Product->getWariKikanFlg() ) {
                $OrderItem->setWariKikanFlg($Product->getWariKikanFlg());
                $OrderItem->setWariKikanIsrate($Product->getWariKikanIsrate());
                if ( $Product->getWariKikanValue() > 0 ) {
                    if ( $Product->getWariKikanIsrate() ) {
                        $wPrice = round($wPrice * (100-$Product->getWariKikanValue())/100);
                    } else {
                        $wPrice = round($wPrice - $Product->getWariKikanValue());
                    }
                    $OrderItem->setWariKikanValue($Product->getWariKikanValue());
                } else {
                    $wPrice = round($wPrice * (100-$Order->getWariKikanValue())/100);
                    $OrderItem->setWariKikanValue($Order->getWariKikanValue());
                }
            }
        }
        $wWariTanka = round($orgPrice1-$wPrice);
        $wariTotal  = $wariTotal + $wWariTanka;
        $OrderItem->setWariKikanGaku($wWariTanka);
        log_info('[割引計算機] 早割フラグ：'.$OrderItem->getWariKikanFlg().' 早割値：'.$OrderItem->getWariKikanValue()
        .' 元単価：'.$orgPrice1.' 割引額：'.$OrderItem->getWariKikanGaku());
        
        // まとめ割
        $wPrice = $orgPrice1;
        if ( $Product->getWariMatomeFlg() ) {
            // 商品の割引設定を明細にセット
            $OrderItem->setWariMatomeIsrate($Product->getWariMatomeIsrate());
            $OrderItem->setWariMatomeLimit1($Product->getWariMatomeLimit1());
            $OrderItem->setWariMatomeValue1($Product->getWariMatomeValue1());
            $OrderItem->setWariMatomeLimit2($Product->getWariMatomeLimit2());
            $OrderItem->setWariMatomeValue2($Product->getWariMatomeValue2());
            $OrderItem->setWariMatomeGroup($Product->getWariMatomeGroup());
            // 数量を取得（同一商品の数量を集計）
            //$quantity = $OrderItem->getQuantity();
            $quantity = $Order->getQuantityByItem($OrderItem);
            // グループ指定があればグループの数量を取得
            if ( !is_null($Product->getWariMatomeGroup()) && !empty($Product->getWariMatomeGroup()) ) {
                $quantityGroup = $Order->getQuantityByGroup($OrderItem);
                // 保険
                if ( $quantityGroup > $quantity ) {
                    $quantity = $quantityGroup;
                }
            }
            log_info('[割引計算機] まとめ割の確認：自身の数量'.$OrderItem->getQuantity().' 集計数量：'.$quantity);
            // まとめ割条件と比較して条件に達していれば割引設定
            if ( !is_null($Product->getWariMatomeLimit2()) && $Product->getWariMatomeLimit2() <= $quantity ) {
                $OrderItem->setWariMatomeFlg($Product->getWariMatomeFlg());
                if ( $Product->getWariMatomeIsrate() ) {
                    $wPrice = round($wPrice * (100-$Product->getWariMatomeValue2())/100);
                } else {
                    $wPrice = round($wPrice - $Product->getWariMatomeValue2());
                }
            } else if ( $Product->getWariMatomeLimit1() <= $quantity ) {
                $OrderItem->setWariMatomeFlg($Product->getWariMatomeFlg());
                if ( $Product->getWariMatomeIsrate() ) {
                    $wPrice = round($wPrice * (100-$Product->getWariMatomeValue1())/100);
                } else {
                    $wPrice = round($wPrice - $Product->getWariMatomeValue1());
                }
            }
        }
        $wWariTanka = round($orgPrice1-$wPrice);
        $wariTotal  = $wariTotal + $wWariTanka;
        $OrderItem->setWariMatomeGaku($wWariTanka);
        log_info('[割引計算機] まとめ割フラグ：'.$OrderItem->getWariKikanFlg()
        .' 元単価：'.$orgPrice1.' 割引額：'.$OrderItem->getWariMatomeGaku());

        // 第一グループ割引完了
        $orgPrice2 = $orgPrice1 - $wariTotal;

        // FC割
        $wPrice = $orgPrice2;
        if ( $Order->getWariAFlg() ) {
            if ( $Product->getWariAFlg() ) {
                $OrderItem->setWariAFlg($Product->getWariAFlg());
                $OrderItem->setWariAIsrate($Product->getWariAIsrate());
                if ( $Product->getWariAValue() > 0 ) {
                    if ( $Product->getWariAIsrate() ) {
                        $wPrice = round($wPrice * (100-$Product->getWariAValue())/100);
                    } else {
                        $wPrice = round($wPrice - $Product->getWariAValue());
                    }
                    $OrderItem->setWariAValue($Product->getWariAValue());
                } else {
                    $wPrice = round($wPrice * (100-$Order->getWariAValue())/100);
                    $OrderItem->setWariAValue($Order->getWariAValue());
                }
            }
        }
        $wWariTanka = round($orgPrice2-$wPrice);
        $wariTotal  = $wariTotal + $wWariTanka;
        $OrderItem->setWariAGaku($wWariTanka);
        log_info('[割引計算機] FC割フラグ(Order)：'.$Order->getWariAFlg().' FC割フラグ(oi)：'.$OrderItem->getWariAFlg()
        .' 元単価：'.$orgPrice2.' 割引額：'.$OrderItem->getWariAGaku());

        // 社員割
        $wPrice = $orgPrice2;
        if ( $Order->getWariBFlg() ) {
            if ( $Product->getWariBFlg() ) {
                $OrderItem->setWariBFlg($Product->getWariBFlg());
                $OrderItem->setWariBIsrate($Product->getWariBIsrate());
                if ( $Product->getWariBValue() > 0 ) {
                    if ( $Product->getWariBIsrate() ) {
                        $wPrice = round($wPrice * (100-$Product->getWariBValue())/100);
                    } else {
                        $wPrice = round($wPrice - $Product->getWariBValue());
                    }
                    $OrderItem->setWariBValue($Product->getWariBValue());
                } else {
                    $wPrice = round($wPrice * (100-$Order->getWariBValue())/100);
                    $OrderItem->setWariBValue($Order->getWariBValue());
                }
            }
        }
        $wWariTanka = round($orgPrice2-$wPrice);
        $wariTotal  = $wariTotal + $wWariTanka;
        $OrderItem->setWariBGaku($wWariTanka);
        log_info('[割引計算機] 社割フラグ(Order)：'.$Order->getWariBFlg().' 社割フラグ(oi)：'.$OrderItem->getWariBFlg()
        .' 元単価：'.$orgPrice2.' 割引額：'.$OrderItem->getWariBGaku());

        // 最終単価
        $finalPrice = round($finalPrice - $wariTotal);
        $OrderItem->setPrice($finalPrice);

    }

}
