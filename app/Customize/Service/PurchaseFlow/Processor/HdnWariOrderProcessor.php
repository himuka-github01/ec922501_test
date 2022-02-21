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

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Common\EccubeConfig;
use Eccube\Entity\ItemHolderInterface;
use Eccube\Entity\Order;
use Eccube\Service\PurchaseFlow\InvalidItemException;
use Eccube\Service\PurchaseFlow\ItemHolderValidator;
use Eccube\Service\PurchaseFlow\PurchaseContext;

/**
 * (HDN) 割引判定
 */
class HdnWariOrderProcessor extends ItemHolderValidator
{
    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var EccubeConfig
     */
    private $eccubeConfig;

    /**
     * EmptyItemsProcessor constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        EccubeConfig $eccubeConfig
    ) {
        $this->entityManager = $entityManager;
        $this->eccubeConfig = $eccubeConfig;
    }

    /**
     * @param ItemHolderInterface $itemHolder
     * @param PurchaseContext $context
     */
    protected function validate(ItemHolderInterface $itemHolder, PurchaseContext $context)
    {
        if (!$itemHolder instanceof Order) {
            return;
        }
        // Orderから情報を取得
        $paymentId = $itemHolder->getPayment()->getId();
        //log_info('[割引判定機] 支払ID:'.$paymentId);
        // Orderへのセット(FC割)
        if ( $paymentId == $this->eccubeConfig->get('hdn_house_payment_id') && $itemHolder->getWariAValue() > 0 ) {
            $itemHolder->setWariAFlg(true);
        } else {
            $itemHolder->setWariAFlg(false);
        }
        // Orderへのセット(社員割)
        if ( $itemHolder->getShainFlg() && $itemHolder->getWariBValue() > 0 ) {
            $itemHolder->setWariBFlg(true);
        } else {
            $itemHolder->setWariBFlg(false);
        }

        $this->entityManager->flush();

        log_info('[割引判定機] FC割：'.$itemHolder->getWariAFlg()
                        .' FC割引率：'.$itemHolder->getWariAValue()
                        .' 支払方法：'.$itemHolder->getPaymentMethod());
        log_info('[割引判定機] 社割：'.$itemHolder->getWariBFlg()
                        .' 社員割引率：'.$itemHolder->getWariBValue()
                        .' 社員フラグ：'.$itemHolder->getShainFlg());
        log_info('[割引判定機] 早割：'.$itemHolder->getWariKikanFlg()
                        .' 早割割引率：'.$itemHolder->getWariKikanValue()
                        .' 早割終了日：'.$itemHolder->getWariKikanEndDt()->format('Y-m-d'));

    }

}
