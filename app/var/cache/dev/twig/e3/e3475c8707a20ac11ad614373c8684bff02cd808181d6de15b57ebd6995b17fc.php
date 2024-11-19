<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionByShippingPreprocessor.php */
class __TwigTemplate_55e185f34ac365164689dba5aebd0c1b8c94012b2e9e8b9841655689d3455ba3 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionByShippingPreprocessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionByShippingPreprocessor.php"));

        // line 1
        echo "<?php
/*
 * Plugin Name : ProductOption
 *
 * Copyright (C) BraTech Co., Ltd. All Rights Reserved.
 * http://www.bratech.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\ProductOption\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Customer;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Service\\PurchaseFlow\\ItemHolderPreprocessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Plugin\\ProductOption\\Entity\\ProductOptionConfig;
use Plugin\\ProductOption\\Repository\\ConfigRepository;

/**
 * @ShoppingFlow
 */
class DeliveryFeeFreeForProductOptionByShippingPreprocessor implements ItemHolderPreprocessor
{
    private \$configRepository;

    public function __construct(
            ConfigRepository \$configRepository
            )
    {
        \$this->configRepository = \$configRepository;
    }

    public function process(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if(!\$itemHolder instanceof Order){
            return;
        }

        \$Config = \$this->configRepository->findOneBy(['name' => ProductOptionConfig::RANGE_NAME]);
        \$flg = false;
        if(!is_null(\$Config)){
            if(\$Config->getValue() == ProductOptionConfig::BY_SHIPPING)\$flg = true;
        }

        foreach (\$itemHolder->getShippings() as \$Shipping) {
            \$order_flg = false;
            \$shipping_flg = false;
            foreach (\$Shipping->getOrderItems() as \$Item) {
                \$OrderItemOptions = \$Item->getOrderItemOptions();
                foreach(\$OrderItemOptions as \$OrderItemOption){
                    \$shipping_flg = \$OrderItemOption->getDeliveryFreeFlg();
                    if(\$shipping_flg){
                        if(\$flg)\$order_flg = true;
                        break;
                    }
                }
            }
            if(\$shipping_flg){
                foreach (\$Shipping->getOrderItems() as \$Item) {
                    if (\$Item->isDeliveryFee()) {
                        \$Item->setQuantity(0);
                    }
                }
            }
        }

        if(\$order_flg){
            foreach (\$itemHolder->getShippings() as \$Shipping) {
                foreach (\$Shipping->getOrderItems() as \$Item) {
                    if (\$Item->isDeliveryFee()) {
                        \$Item->setQuantity(0);
                    }
                }
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionByShippingPreprocessor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * Plugin Name : ProductOption
 *
 * Copyright (C) BraTech Co., Ltd. All Rights Reserved.
 * http://www.bratech.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\ProductOption\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Entity\\Order;
use Eccube\\Entity\\Customer;
use Eccube\\Repository\\BaseInfoRepository;
use Eccube\\Service\\PurchaseFlow\\ItemHolderPreprocessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Plugin\\ProductOption\\Entity\\ProductOptionConfig;
use Plugin\\ProductOption\\Repository\\ConfigRepository;

/**
 * @ShoppingFlow
 */
class DeliveryFeeFreeForProductOptionByShippingPreprocessor implements ItemHolderPreprocessor
{
    private \$configRepository;

    public function __construct(
            ConfigRepository \$configRepository
            )
    {
        \$this->configRepository = \$configRepository;
    }

    public function process(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        if(!\$itemHolder instanceof Order){
            return;
        }

        \$Config = \$this->configRepository->findOneBy(['name' => ProductOptionConfig::RANGE_NAME]);
        \$flg = false;
        if(!is_null(\$Config)){
            if(\$Config->getValue() == ProductOptionConfig::BY_SHIPPING)\$flg = true;
        }

        foreach (\$itemHolder->getShippings() as \$Shipping) {
            \$order_flg = false;
            \$shipping_flg = false;
            foreach (\$Shipping->getOrderItems() as \$Item) {
                \$OrderItemOptions = \$Item->getOrderItemOptions();
                foreach(\$OrderItemOptions as \$OrderItemOption){
                    \$shipping_flg = \$OrderItemOption->getDeliveryFreeFlg();
                    if(\$shipping_flg){
                        if(\$flg)\$order_flg = true;
                        break;
                    }
                }
            }
            if(\$shipping_flg){
                foreach (\$Shipping->getOrderItems() as \$Item) {
                    if (\$Item->isDeliveryFee()) {
                        \$Item->setQuantity(0);
                    }
                }
            }
        }

        if(\$order_flg){
            foreach (\$itemHolder->getShippings() as \$Shipping) {
                foreach (\$Shipping->getOrderItems() as \$Item) {
                    if (\$Item->isDeliveryFee()) {
                        \$Item->setQuantity(0);
                    }
                }
            }
        }
    }
}
", "ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionByShippingPreprocessor.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionByShippingPreprocessor.php");
    }
}
