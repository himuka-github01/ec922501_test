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

use Eccube\Entity\BaseInfo;
use Eccube\Entity\ProductClass;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\TaxRuleRepository;
use Eccube\Service\TaxRuleService as BaseTaxRuleService;   // これを忘れないこと

class TaxRuleService extends BaseTaxRuleService
{
    /**
     * 設定情報に基づいて税ルールを返す
     *
     * @param  int|null|\Eccube\Entity\Product        $product      商品
     * @param  int|null|\Eccube\Entity\ProductClass   $productClass 商品規格
     * @param  int|null|\Eccube\Entity\Master\Pref    $pref         都道府県
     * @param  int|null|\Eccube\Entity\Master\Country $country      国
     *
     * @return \Eccube\Entity\TaxRule                               税情報
     */
    public function getTaxRule($product = null, $productClass = null, $pref = null, $country = null)
    {
        /*
         * 商品別税率が有効で商品別税率が設定されている場合は商品別税率
         * 商品別税率が有効で商品別税率が設定されていない場合は基本税率
         * 商品別税率が無効の場合は基本税率
         */
        /* @var $TaxRule \Eccube\Entity\TaxRule */
        if ($this->BaseInfo->isOptionProductTaxRule() && $productClass) {
            if ($productClass instanceof ProductClass) {
                $TaxRule = $productClass->getTaxRule() ?: $this->taxRuleRepository->getByRule(null, null, $pref, $country);
            } else {
                $TaxRule = $this->taxRuleRepository->getByRule($product, $productClass, $pref, $country);
            }
        } else {
            $TaxRule = $this->taxRuleRepository->getByRule(null, null, $pref, $country);
        }

        return $TaxRule;
    }

}
