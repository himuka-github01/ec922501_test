<?php
/*----------------------------------------
 * OrderHelper (customized)
 *----------------------------------------
 * 2022.05.06 upd uketsuke_tenpo_id, product_ryaku_name by inok
 * 2021.08.01 new by inok
 *----------------------------------------*/

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

use Customize\Entity\HdnTenpo; // (HDN)
use Customize\Repository\HdnTenpoRepository; // (HDN)

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;
use Eccube\Common\EccubeConfig; // (HDN)
use Eccube\Entity\Category; // (HDN)
use Eccube\Entity\Cart;
use Eccube\Entity\CartItem;
use Eccube\Entity\Customer;
use Eccube\Entity\Master\DeviceType;
use Eccube\Entity\Master\OrderItemType;
use Eccube\Entity\Master\OrderStatus;
use Eccube\Entity\Order;
use Eccube\Entity\OrderItem;
use Eccube\Entity\Payment;
use Eccube\Entity\Shipping;
use Eccube\EventListener\SecurityListener;
use Eccube\Repository\CategoryRepository; // (HDN)
use Eccube\Repository\DeliveryRepository;
use Eccube\Repository\Master\DeviceTypeRepository;
use Eccube\Repository\Master\OrderItemTypeRepository;
use Eccube\Repository\Master\OrderStatusRepository;
use Eccube\Repository\Master\PrefRepository;
use Eccube\Repository\OrderRepository;
use Eccube\Repository\PaymentRepository;
use Eccube\Service\OrderHelper as BaseOrderHelper;   // これを忘れないこと
use Eccube\Util\StringUtil;
use SunCat\MobileDetectBundle\DeviceDetector\MobileDetector;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\DependencyInjection\Container;    // (HDN)

class OrderHelper extends BaseOrderHelper
{
    // FIXME 必要なメソッドのみ移植する
    use ControllerTrait;

    /**
     * 購入処理中の受注を生成する.
     *
     * @param Customer $Customer
     * @param $CartItems
     *
     * @return Order
     */
    public function createPurchaseProcessingOrderWithPre(Cart $Cart, Customer $Customer, Order $PreOrder = null)
    {
        $OrderStatus = $this->orderStatusRepository->find(OrderStatus::PROCESSING);
        $Order = new Order($OrderStatus);

        $preOrderId = $this->createPreOrderId();
        $Order->setPreOrderId($preOrderId);

        // 顧客情報の設定
        $this->setCustomer($Order, $Customer);

        // (HDN) Session情報を取得
        $wSaijiId = $this->session->get('saiji_id');
        $wTenpoId = $this->session->get('tenpo_id');
        $wUketsukeTenpoId = $this->session->get('uketsuke_tenpo_id');
        // (HDN) 受付店舗の設定がなければ受注店舗を受付店舗としてセット
        if ( !$wUketsukeTenpoId ) {
            $wUketsukeTenpoId = $wTenpoId;
        }
        //$wPaymentId = $this->session->get('payment_id');
        //log_info('[割引計算] 支払ID:'.$wPaymentId);

        // (HDN) 催事(カテゴリ)情報を取得して必要な項目をセット
        //   (1) CategoryRepositoryの初期化
        $categoryRepository = $this->entityManager->getRepository(Category::class);
        //   (2) 催事(Category)取得
        $saijiCategory = $categoryRepository->find($wSaijiId);
        //   (3) 催事をOrderにセット
        $Order->setSaiji($saijiCategory);
        //   (4) 催事コードを取得してOrderにセット
        $Order->setSaijiCd($saijiCategory->getSaijiCd());
        
        // (HDN) 店舗を取得して必要な項目をセット
        //   (1) HdnTenpoRepositoryの初期化
        $tenpoRepository = $this->entityManager->getRepository(HdnTenpo::class);
        //   (2) HdnTenpo取得
        $tenpo = $tenpoRepository->find($wTenpoId);
        //   (3) 店舗をOrderにセット
        $Order->setTenpo($tenpo);
        //   (4) 店舗コードを取得してOrderにセット
        $Order->setTenpoCd($tenpo->getTenpoCd());
        //   (5) 受付店舗取得（2022.05.06）
        $uketsukeTenpo = $tenpoRepository->find($wUketsukeTenpoId);
        //   (6) 受付店舗をOrderにセット（2022.05.06）
        $Order->setUketsukeTenpo($uketsukeTenpo);

        // (HDN) 支払方法が指定されていればセット
        /*
        if ( $wPaymentId ) {
            //   (1) PaymentRepositoryの初期化
            $paymentRepository = $this->entityManager->getRepository(Payment::class);
            //   (2) Payment
            $payment = $paymentRepository->find($wPaymentId);
            //   (3) Paymentを取得してOrderにセット
            $Order->setPayment($payment);
            $Order->setPaymentMethod($payment->getMethod());
            log_info('[割引計算] OrderにPaymentをセット:ID='.$payment->getId());
        }
        */

        $DeviceType = $this->deviceTypeRepository->find($this->mobileDetector->isMobile() ? DeviceType::DEVICE_TYPE_MB : DeviceType::DEVICE_TYPE_PC);
        $Order->setDeviceType($DeviceType);

        // (HDN) 注文単位での割引情報を設定
        // (HDN) 催事設定からFC割値/社員割値/早割値/早割締日を設定（後からの変更に対応できるよう）
        if ( $saijiCategory->getWariAValue() > 0 ) {
            $Order->setWariAValue($saijiCategory->getWariAValue());
        }
        if ( $saijiCategory->getWariBValue() > 0 ) {
            $Order->setWariBValue($saijiCategory->getWariBValue());
        }
        if ( $saijiCategory->getWariKikanValue() > 0 ) {
            $Order->setWariKikanEndDt($saijiCategory->getWariKikanEndDt());
            $Order->setWariKikanValue($saijiCategory->getWariKikanValue());
        }
        // (HDN) 1.FC割
        /*
        $eccubeConfig = new EccubeConfig($this->container);

        if ( $wPaymentId == $eccubeConfig->get('hdn_house_payment_id') ) {
        //if ( $wPaymentId == 5 ) {
            if ( $saijiCategory->getWariAValue() > 0 ) {
                $Order->setWariAFlg(true);
            }
        }
        */
        // (HDN) 2.社員割
        if ( $Customer->getShainFlg() ) {
            if ( $saijiCategory->getWariBValue() > 0 ) {
                $Order->setWariBFlg(true);
            }
        }
        // (FDN) 3.早割
        if ( $saijiCategory->getWariKikanValue() > 0 ) {
            $today = (new \DateTime())->format('Y-m-d');
            if ( $saijiCategory->getWariKikanEndDt() && $saijiCategory->getWariKikanEndDt()->format('Y-m-d') >= $today ) {
                $Order->setWariKikanFlg(true);
            }
        }

        // 明細情報の設定
        // (HDN) 支払方法などを加味して割引単価を設定する
        //$OrderItems = $this->createOrderItemsFromCartItems($Cart->getCartItems());
        $OrderItems = $this->createOrderItemsFromCartItemsWithOrder($Cart->getCartItems(),$Order);

        $OrderItemsGroupBySaleType = array_reduce($OrderItems, function ($result, $item) {
            /* @var OrderItem $item */
            $saleTypeId = $item->getProductClass()->getSaleType()->getId();
            $result[$saleTypeId][] = $item;

            return $result;
        }, []);

        // (HDN) Shipping情報を取得（不要となった）
        /*
        $wTimeId = null;
        $wShippingDeliveryTime = null;
        $wShippingDeliveryDate = null;
        if ( $PreOrder ) {
            log_info('注文情報] 入力情報から配送情報を抽出');
            $wShippings = $PreOrder->getShippings();
            foreach ($wShippings as $wShipping ) {
                $wTimeId  = $wShipping->getTimeId();
                $wShippingDeliveryTime  = $wShipping->getShippingDeliveryTime();
                $wShippingDeliveryDate  = $wShipping->getShippingDeliveryDate();
                log_info('注文情報] お届け日：'.$wShippingDeliveryDate->format('Y-m-d').' 時間：'.$wShippingDeliveryTime);
            }
        }
        */

        foreach ($OrderItemsGroupBySaleType as $OrderItems) {
            $Shipping = $this->createShippingFromCustomer($Customer);

            $Shipping->setOrder($Order);
            $this->addOrderItems($Order, $Shipping, $OrderItems);
            $this->setDefaultDelivery($Shipping);

            // (HDN) Shipping情報があればマージ
            /*
            if ( $wTimeId ) {
                $Shipping->setTimeId($wTimeId);
            }
            if ( $wShippingDeliveryTime ) {
                $Shipping->setShippingDeliveryTime($wShippingDeliveryTime);
            }
            if ( $wShippingDeliveryDate ) {
                $Shipping->setShippingDeliveryDate($wShippingDeliveryDate);
            }
            */
            $this->entityManager->persist($Shipping);
            $Order->addShipping($Shipping);
        }

        // (HDN) 支払方法が指定されていなければ初期値セット
        //if ( !$wPaymentId ) {
            $this->setDefaultPayment($Order);
        //}

        $this->entityManager->persist($Order);

        return $Order;
    }

    /**
     * @param Cart $Cart
     * @param Customer $Customer
     *
     * @return Order|null
     */
    public function initializeOrder(Cart $Cart, Customer $Customer)
    {
        log_info('[注文の初期化] initializeOrder');

        // (HDN) 割引条件の変化により単価の再計算が必要なので以下受注情報取得をomit
        // (HDN) 代償としてお届け日,時間,お支払い方法がリセットされるので対応が必要
        // (HDN) 受注情報を生かして生成する（存在する場合は取得＆生成＆マージ）

        // 購入処理中の受注情報を取得
        if ($Order = $this->getPurchaseProcessingOrder($Cart->getPreOrderId())) {
            log_info('[カートから注文へ] 購入処理中の場合はそちらから');
            return $Order;
        }
        /*
        $PreOrder = $this->getPurchaseProcessingOrder($Cart->getPreOrderId());
        if ( $PreOrder ) {
            log_info('[注文情報取得] 購入処理中の場合はそちらから情報を取得');
        }
        */

        // 受注情報を作成
        log_info('[カートから注文へ] カート情報を元に注文情報を生成');
        //$Order = $this->createPurchaseProcessingOrder($Cart, $Customer);
        $Order = $this->createPurchaseProcessingOrderWithPre($Cart, $Customer);
        $Cart->setPreOrderId($Order->getPreOrderId());

        return $Order;
    }

    /**
     * @param Collection|ArrayCollection|CartItem[] $CartItems
     *
     * @return OrderItem[]
     */
    protected function createOrderItemsFromCartItems($CartItems)
    {
        $ProductItemType = $this->orderItemTypeRepository->find(OrderItemType::PRODUCT);

        return array_map(function ($item) use ($ProductItemType) {
            /* @var $item CartItem */
            /* @var $ProductClass \Eccube\Entity\ProductClass */
            $ProductClass = $item->getProductClass();
            /* @var $Product \Eccube\Entity\Product */
            $Product = $ProductClass->getProduct();

            $OrderItem = new OrderItem();
            $OrderItem
                ->setProduct($Product)
                ->setProductClass($ProductClass)
                ->setProductName($Product->getName())
                ->setProductRyakuName($Product->getProductRyakuName())
                ->setBumonCd($Product->getBumonCd())
                ->setBumon($Product->getBumon())
                ->setProductCode($ProductClass->getCode())
                ->setPrice($ProductClass->getPrice02())
                ->setQuantity($item->getQuantity())
                ->setOrderItemType($ProductItemType);

            $ClassCategory1 = $ProductClass->getClassCategory1();
            if (!is_null($ClassCategory1)) {
                $OrderItem->setClasscategoryName1($ClassCategory1->getName());
                $OrderItem->setClassName1($ClassCategory1->getClassName()->getName());
            }
            $ClassCategory2 = $ProductClass->getClassCategory2();
            if (!is_null($ClassCategory2)) {
                $OrderItem->setClasscategoryName2($ClassCategory2->getName());
                $OrderItem->setClassName2($ClassCategory2->getClassName()->getName());
            }

            return $OrderItem;
        }, $CartItems instanceof Collection ? $CartItems->toArray() : $CartItems);
    }
    /**
     * @param Collection|ArrayCollection|CartItem[] $CartItems
     *
     * @return OrderItem[]
     */
    protected function createOrderItemsFromCartItemsWithOrder($CartItems,$Order)
    {
        $ProductItemType = $this->orderItemTypeRepository->find(OrderItemType::PRODUCT);

        // (HDN) 割引計算に必要な情報を集める
        // 　イベントから（$Orderにセット済み）
        // 　　FC割引率、社員割引率、早割引率
        // 　商品から（商品設定情報は以下明細ごとに）
        // 　　FC割引対象か？　FC割引率設定はあるか？
        // 　　社員割対象か？　社員割引率設定はあるか？
        // 　　早割対象か？　早割割引率設定はあるか？
        // 　　まとめ割対象か？　まとめ割条件は？

        return array_map(function ($item) use ($ProductItemType,$Order) {
            /* @var $item CartItem */
            /* @var $ProductClass \Eccube\Entity\ProductClass */
            $ProductClass = $item->getProductClass();
            /* @var $Product \Eccube\Entity\Product */
            $Product = $ProductClass->getProduct();

            $OrderItem = new OrderItem();
            $OrderItem
                ->setProduct($Product)
                ->setProductClass($ProductClass)
                ->setProductName($Product->getName())
                ->setProductRyakuName($Product->getProductRyakuName())
                ->setBumonCd($Product->getBumonCd())
                ->setBumon($Product->getBumon())
                ->setProductCode($ProductClass->getCode())
                ->setBasePrice($ProductClass->getPrice02())
                ->setQuantity($item->getQuantity())
                ->setOrderItemType($ProductItemType);

            //----------------------
            // (HDN) 割引計算
            //----------------------
            // 元の価格
            $wPrice = $ProductClass->getPrice02();
            log_info('[割引計算] 元の価格:'.$wPrice);

            // まとめ割
            $orgPrice = $wPrice;
            if ( $Product->getWariMatomeFlg() ) {
                $OrderItem->setWariMatomeIsrate($Product->getWariMatomeIsrate());
                $OrderItem->setWariMatomeLimit1($Product->getWariMatomeLimit1());
                $OrderItem->setWariMatomeValue1($Product->getWariMatomeValue1());
                $OrderItem->setWariMatomeLimit2($Product->getWariMatomeLimit2());
                $OrderItem->setWariMatomeValue2($Product->getWariMatomeValue2());
                if ( $Product->getWariMatomeLimit2() <= $item->getQuantity() ) {
                    $OrderItem->setWariMatomeFlg($Product->getWariMatomeFlg());
                    if ( $Product->getWariMatomeIsrate() ) {
                        $wPrice = round($wPrice * (100-$Product->getWariMatomeValue2())/100);
                    } else {
                        $wPrice = $wPrice - $Product->getWariMatomeValue2();
                    }
                } else if ( $Product->getWariMatomeLimit1() <= $item->getQuantity() ) {
                    $OrderItem->setWariMatomeFlg($Product->getWariMatomeFlg());
                    if ( $Product->getWariMatomeIsrate() ) {
                        $wPrice = round($wPrice * (100-$Product->getWariMatomeValue1())/100);
                    } else {
                        $wPrice = $wPrice - $Product->getWariMatomeValue1();
                    }
                }
            }
            $OrderItem->setWariMatomeGaku($orgPrice-$wPrice);
            log_info('[割引計算] まとめ割後の価格:'.$wPrice.' まとめ割フラグ：'.$OrderItem->getWariMatomeFlg());
            // 早割
            $orgPrice = $wPrice;
            if ( $Order->getWariKikanFlg() ) {
                if ( $Product->getWariKikanFlg() ) {
                    $OrderItem->setWariKikanFlg($Product->getWariKikanFlg());
                    $OrderItem->setWariKikanIsrate($Product->getWariKikanIsrate());
                    if ( $Product->getWariKikanValue() > 0 ) {
                        if ( $Product->getWariKikanIsrate() ) {
                            $wPrice = round($wPrice * (100-$Product->getWariKikanValue())/100);
                        } else {
                            $wPrice = $wPrice - $Product->getWariKikanValue();
                        }
                        $OrderItem->setWariKikanValue($Product->getWariKikanValue());
                    } else {
                        $wPrice = round($wPrice * (100-$Order->getWariKikanValue())/100);
                        $OrderItem->setWariKikanValue($Order->getWariKikanValue());
                    }
                }
            }
            $OrderItem->setWariKikanGaku($orgPrice-$wPrice);
            log_info('[割引計算] 早割後の価格:'.$wPrice.' 早割フラグ：'.$OrderItem->getWariKikanFlg());
            // FC割
            $orgPrice = $wPrice;
            if ( $Order->getWariAFlg() ) {
                if ( $Product->getWariAFlg() ) {
                    $OrderItem->setWariAFlg($Product->getWariAFlg());
                    $OrderItem->setWariAIsrate($Product->getWariAIsrate());
                    if ( $Product->getWariAValue() > 0 ) {
                        if ( $Product->getWariAIsrate() ) {
                            $wPrice = round($wPrice * (100-$Product->getWariAValue())/100);
                        } else {
                            $wPrice = $wPrice - $Product->getWariAValue();
                        }
                        $OrderItem->setWariAValue($Product->getWariAValue());
                    } else {
                        $wPrice = round($wPrice * (100-$Order->getWariAValue())/100);
                        $OrderItem->setWariAValue($Order->getWariAValue());
                    }
                }
            }
            $OrderItem->setWariAGaku($orgPrice-$wPrice);
            log_info('[割引計算] FC割後の価格:'.$wPrice.' FC割フラグ(Order)：'.$Order->getWariAFlg().' FC割フラグ(OrderItem)：'.$OrderItem->getWariAFlg());
            // 社員割
            $orgPrice = $wPrice;
            if ( $Order->getWariBFlg() ) {
                if ( $Product->getWariBFlg() ) {
                    $OrderItem->setWariBFlg($Product->getWariBFlg());
                    $OrderItem->setWariBIsrate($Product->getWariBIsrate());
                    if ( $Product->getWariBValue() > 0 ) {
                        if ( $Product->getWariBIsrate() ) {
                            $wPrice = round($wPrice * (100-$Product->getWariBValue())/100);
                        } else {
                            $wPrice = $wPrice - $Product->getWariBValue();
                        }
                        $OrderItem->setWariBValue($Product->getWariBValue());
                    } else {
                        $wPrice = round($wPrice * (100-$Order->getWariBValue())/100);
                        $OrderItem->setWariBValue($Order->getWariBValue());
                    }
                }
            }
            $OrderItem->setWariBGaku($orgPrice-$wPrice);
            log_info('[割引計算] 社員割後の価格:'.$wPrice.' 社員割フラグ(Order)：'.$Order->getWariBFlg().' 社員割フラグ(OrderItem)：'.$OrderItem->getWariBFlg());

            $OrderItem->setPrice($wPrice);

            $ClassCategory1 = $ProductClass->getClassCategory1();
            if (!is_null($ClassCategory1)) {
                $OrderItem->setClasscategoryName1($ClassCategory1->getName());
                $OrderItem->setClassName1($ClassCategory1->getClassName()->getName());
            }
            $ClassCategory2 = $ProductClass->getClassCategory2();
            if (!is_null($ClassCategory2)) {
                $OrderItem->setClasscategoryName2($ClassCategory2->getName());
                $OrderItem->setClassName2($ClassCategory2->getClassName()->getName());
            }

            return $OrderItem;
        }, $CartItems instanceof Collection ? $CartItems->toArray() : $CartItems);
    }

}
