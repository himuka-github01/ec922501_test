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

//namespace Eccube\Service\PurchaseFlow;
namespace Customize\Service\PurchaseFlow;

use Doctrine\Common\Collections\ArrayCollection;
use Eccube\Entity\ItemHolderInterface;
use Eccube\Entity\ItemInterface;
use Eccube\Entity\Order;
use Eccube\Entity\OrderItem;
use Eccube\Service\PurchaseFlow\PurchaseFlow as BasePurchaseFlow;   // (HDN)
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class PurchaseFlow extends BasePurchaseFlow
{
    /**
     * @var ArrayCollection|ItemPreprocessor[]
     */
    protected $itemPreprocessors;

    /**
     * @var ArrayCollection|ItemHolderPreprocessor[]
     */
    protected $itemHolderPreprocessors;

    /**
     * @var ArrayCollection|ItemValidator[]
     */
    protected $itemValidators;

    /**
     * @var ArrayCollection|ItemHolderValidator[]
     */
    protected $itemHolderValidators;

    /**
     * @var ArrayCollection|ItemHolderPostValidator[]
     */
    protected $itemHolderPostValidators;

    /**
     * @var ArrayCollection|DiscountProcessor[]
     */
    protected $discountProcessors;

    /**
     * @var ArrayCollection|PurchaseProcessor[]
     */
    protected $purchaseProcessors;

    public function __construct()
    {
        $this->purchaseProcessors = new ArrayCollection();
        $this->itemValidators = new ArrayCollection();
        $this->itemHolderValidators = new ArrayCollection();
        $this->itemPreprocessors = new ArrayCollection();
        $this->itemHolderPreprocessors = new ArrayCollection();
        $this->itemHolderPostValidators = new ArrayCollection();
        $this->discountProcessors = new ArrayCollection();
    }

    /**
     * @param ItemHolderInterface $itemHolder
     */
    protected function calculateTotal(ItemHolderInterface $itemHolder)
    {
        // (HDN) フロータイプによって計算を振り分け

        if ( $this->flowType == 'cart' ) {
            // (HDN) cartの場合は簡易計算 
            $total = array_reduce($itemHolder->getItems()->toArray(), function ($sum, ItemInterface $item) {
                $sum += $item->getPriceIncTax() * $item->getQuantity();

                return $sum;
            }, 0);
            $itemHolder->setTotal($total);
        } else {
            // (HDN) 受注集計時は正確に計算 
            $sum = [];
            $items = $itemHolder->getItems();
            foreach($items as $item) {
                if ($item instanceof OrderItem) {
                    // (HDN) 税率毎に
                    $taxRate = $item->getTaxRate();
                    if ( !array_key_exists($taxRate,$sum) ) {
                        $sum[$taxRate] = 0;
                    }
                    $sum[$taxRate] += $item->getPrice() * $item->getQuantity();
                } else {
                    log_info('受注処理：受注商品以外には未対応：',(array)$item);
                    throw new BadRequestHttpException();
                }
            }
            // (HDN) 税率毎に集計
            $total = 0;
            $taxSum = 0;
            foreach($sum as $taxRate => $kingaku) {
                $total += $kingaku;
                $tax = round($kingaku * $taxRate / 100);
                $taxSum += $tax;
                log_info('受注集計(calculateTotal)：税率：'.$taxRate.' 税抜金額：'.$kingaku.' 税額：'.$tax);
            }
            // (HDN) 税をプラス
            $total += $taxSum;

            $itemHolder->setTotal($total);
        }
        // TODO
        if ($itemHolder instanceof Order) {
            // Order には PaymentTotal もセットする
            $itemHolder->setPaymentTotal($total);
        }
        log_info('受注集計：合計(total)：'.$total);
    }

    protected function calculateSubTotal(ItemHolderInterface $itemHolder)
    {
        // (HDN) フロータイプによって計算を振り分け

        if ( $this->flowType == 'cart' ) {
            // (HDN) cartの場合は簡易計算 
            $total = $itemHolder->getItems()
                ->getProductClasses()
                ->reduce(function ($sum, ItemInterface $item) {
                    $sum += $item->getPriceIncTax() * $item->getQuantity();

                    return $sum;
                }, 0);
        } else {
            // (HDN) 受注集計時は正確に計算 
            $sum = [];
            $items = $itemHolder->getItems()->getProductClasses();
            foreach($items as $item) {
                if ($item instanceof OrderItem) {
                    // (HDN) 税率毎に
                    $taxRate = $item->getTaxRate();
                    if ( !array_key_exists($taxRate,$sum) ) {
                        $sum[$taxRate] = 0;
                    }
                    $sum[$taxRate] += $item->getPrice() * $item->getQuantity();
                } else {
                    log_info('受注処理：受注商品以外には未対応：',(array)$item);
                    throw new BadRequestHttpException();
                }
            }
            // (HDN) 税率毎に集計
            $total = 0;
            $taxSum = 0;
            foreach($sum as $taxRate => $kingaku) {
                $total += $kingaku;
                $tax = round($kingaku * $taxRate / 100);
                $taxSum += $tax;
                log_info('受注集計(calculateSubTotal)：税率：'.$taxRate.' 税抜金額：'.$kingaku.' 税額：'.$tax);
            }
            // (HDN) 税をプラス
            $total += $taxSum;

        }
        // TODO
        if ($itemHolder instanceof Order) {
            // Order の場合は SubTotal をセットする
            $itemHolder->setSubTotal($total);
        }
        log_info('受注集計：小計(subTotal)：'.$total);
    }

    /**
     * @param ItemHolderInterface $itemHolder
     */
    protected function calculateTax(ItemHolderInterface $itemHolder)
    {
        log_info('受注処理タイプ：FlowType：'.$this->flowType);

        // (HDN) フロータイプによって計算を振り分け

        if ( $this->flowType == 'cart' ) {
            // (HDN) cartの場合は簡易計算 
            $total = $itemHolder->getItems()
            ->reduce(function ($sum, ItemInterface $item) {
                if ($item instanceof OrderItem) {
                    $sum += $item->getTax() * $item->getQuantity();
                } else {
                    $sum += ($item->getPriceIncTax() - $item->getPrice()) * $item->getQuantity();
                }
                return $sum;
            }, 0);
            $itemHolder->setTax($total);

            log_info('受注カート：税額(tax)：'.$total);    

        } else {
            // (HDN) 受注集計時は正確に計算 
            $sum = [];
            $items = $itemHolder->getItems();
            foreach($items as $item) {
                if ($item instanceof OrderItem) {
                    // (HDN) 税率毎に
                    $taxRate = $item->getTaxRate();
                    if ( !array_key_exists($taxRate,$sum) ) {
                        $sum[$taxRate] = 0;
                    }
                    $sum[$taxRate] += $item->getPrice() * $item->getQuantity();
                } else {
                    log_info('受注処理：受注商品以外には未対応：',(array)$item);
                    throw new BadRequestHttpException();
                }
            }
            // (HDN) 税率毎に集計
            $taxSum = 0;
            foreach($sum as $taxRate => $kingaku) {
                $tax = round($kingaku * $taxRate / 100);
                $taxSum += $tax;
                log_info('受注集計(calculateTax)：税率：'.$taxRate.' 税抜金額：'.$kingaku.' 税額：'.$tax);
            }
            //$itemHolder->setTax($total);
            $itemHolder->setTax($taxSum);
            log_info('受注集計：税額(tax)：'.$taxSum);    
        }
    }

}
