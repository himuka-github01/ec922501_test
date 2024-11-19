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

//namespace Eccube\Twig\Extension;
namespace Customize\Twig\Extension;

use Eccube\Common\EccubeConfig;
use Eccube\Entity\OrderItem;
use Eccube\Entity\Product;
use Eccube\Repository\TaxRuleRepository;
//use Eccube\Repository\ProductClassRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
//use Eccube\Service\TaxRuleService;  // (HDN)
use Customize\Service\TaxRuleService;  // (HDN)
use Eccube\Twig\Extension\TaxExtension as BaseTaxExtension; // (HDN)

class TaxExtension extends BaseTaxExtension
{
    /**
     * @var TaxRuleRepository
     */
    private $taxRuleRepository;

    /**
     * @var ProductClassRepository
     */
    //private $productClassRepository;

    /**
     * @var TaxRuleService
     */
    private $taxRuleService;

    /**
     * @var EccubeConfig
     */
    private $eccubeConfig;

    /**
     * TaxExtension constructor.
     * @param TaxRuleRepository $taxRuleRepository
     */
    public function __construct(
        TaxRuleRepository $taxRuleRepository,
        //ProductClassRepository $productClassRepository,
        TaxRuleService $taxRuleService,
        EccubeConfig $eccubeConfig
    ) {
        $this->taxRuleRepository = $taxRuleRepository;
        //$this->productClassRepository = $productClassRepository;
        $this->taxRuleService = $taxRuleService;
        $this->eccubeConfig = $eccubeConfig;
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return TwigFunction[] An array of functions
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('is_reduced_tax_rate', [$this, 'isReducedTaxRate']),
            new TwigFunction('get_price_inc_tax_for_disp', [$this, 'getPriceIncTaxForDisp']),
            new TwigFunction('get_price_inc_tax_for_disp2', [$this, 'getPriceIncTaxForDisp2']),
        ];
    }

    /**
     * 明細が軽減税率対象かどうかを返す.
     *
     * 受注作成時点での標準税率と比較し, 異なれば軽減税率として判定する.
     *
     * @param OrderItem $OrderItem
     * @return bool
     */
    public function isReducedTaxRate(OrderItem $OrderItem)
    {
        $Order = $OrderItem->getOrder();

        $qb = $this->taxRuleRepository->createQueryBuilder('t');
        try {
            $TaxRule = $qb
                ->where('t.Product IS NULL AND t.ProductClass IS NULL AND t.apply_date < :apply_date')
                ->orderBy('t.apply_date', 'DESC')
                ->setParameter('apply_date', $Order->getCreateDate())
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
        } catch (\Exception $e) {
            return false;
        }
        // (HDN) 軽減税率判定
        if ( $this->eccubeConfig->get('hdn_tax_default_is_reduced') ) {
            return $TaxRule && $TaxRule->getTaxRate() == $OrderItem->getTaxRate();
        } else {
            return $TaxRule && $TaxRule->getTaxRate() != $OrderItem->getTaxRate();
        }

        //return $TaxRule && $TaxRule->getTaxRate() != $OrderItem->getTaxRate();
    }
    /**
     * 表示売価用に税を加えて戻す
     *
     * 実計算と表示売価で端数処理が異なることに対応
     *
     * @param int $price
     * @param Product $Product
     * @return int
     */
    public function getPriceIncTaxForDisp(int $price, Product $Product)
    {
        // (HDN) TaxRuleServiceを改良して使用
        //  ※商品クラスによって変化しない事を前提
        $ProductClass = $Product->getProductClasses()->first();
        $taxRule = $this->taxRuleService->getTaxRule($Product,$ProductClass);
        if ( $taxRule ) {
            $wTaxRate = $taxRule->getTaxRate();
        } else {
            log_alert('税ルール取得不可！ 商品：',(array)$ProductClass);
            $wTaxRate = 0;
        }
        // (HDN) 表示売価を戻す
        $wTax = $this->taxRuleService->calcTax($price, $wTaxRate, $this->eccubeConfig->get('hdn_tax_rounding_for_disp'));
        $priceForDisp = $price + $wTax;
        log_info('税計算（商品から：表示用）：税率：'.$wTaxRate.' 元価格：'.$price.' 算出価格：'.$priceForDisp.' 端数区分：'.$this->eccubeConfig->get('hdn_tax_rounding_for_disp'));
        return $priceForDisp;
    }
    /**
     * 表示売価用に税を加えて戻す(非使用)
     *
     * 実計算と表示売価で端数処理が異なることに対応
     *
     * @param int $price
     * @param int $priceIncTax
     * @return int
     */
    public function getPriceIncTaxForDisp2(int $price, int $priceIncTax)
    {
        // (HDN) 税率を算出
        $wTax = $priceIncTax - $price;
        $wTaxRate = round(100 * ($wTax / $price));
        // (HDN) 表示売価を戻す
        if ( $this->eccubeConfig->get('hdn_tax_rounding_for_disp') == '2' ) {
            $priceForDisp = $price + floor($price * $wTaxRate / 100);
            log_info('税計算（切り捨て）');
        } else if ( $this->eccubeConfig->get('hdn_tax_rounding_for_disp') == '3' ) {
            $priceForDisp = $price + ceil($price * $wTaxRate / 100);
            log_info('税計算（切り上げ）');
        } else {
            $priceForDisp = $price + round($price * $wTaxRate / 100);
            log_info('税計算（四捨五入）');
        }
        log_info('税計算（表示用）：税率：'.$wTaxRate.' 元価格：'.$price.' 算出価格：'.$priceForDisp.' 端数区分：'.$this->eccubeConfig->get('hdn_tax_rounding_for_disp'));
        return $priceForDisp;
    }
}
