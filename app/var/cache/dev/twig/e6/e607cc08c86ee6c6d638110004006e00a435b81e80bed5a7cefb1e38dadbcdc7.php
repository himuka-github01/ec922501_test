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

/* ProductOption/Service/PurchaseFlow/Processor/QuantityAdjustValidator.php */
class __TwigTemplate_7e3d96be5b5ff86e63028923e82e6850c6b354929021e6282107bb4e25930090 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/QuantityAdjustValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/QuantityAdjustValidator.php"));

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

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Annotation\\CartFlow;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Service\\PurchaseFlow\\InvalidItemException;
use Eccube\\Service\\PurchaseFlow\\ItemValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\OrderHelper;
use Plugin\\ProductOption\\Util\\CommonUtil;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @CartFlow
 */
class QuantityAdjustValidator extends ItemValidator
{
    private \$orderHelper;
    private \$requestStack;

    public function __construct(
            OrderHelper \$orderHelper,
            RequestStack \$requestStack
            )
    {
        \$this->orderHelper = \$orderHelper;
        \$this->requestStack = \$requestStack;
    }

    protected function validate(ItemInterface \$item, PurchaseContext \$context)
    {
        if (!\$item->isProduct()) {
            return;
        }
        \$request = \$this->requestStack->getMasterRequest();
        if(\$request->get('_route') !== 'shopping_shipping_multiple')return;

        \$Cart = \$item->getCart();
        \$Order = \$this->orderHelper->getPurchaseProcessingOrder(\$Cart->getPreOrderId());

        \$arrOrderItems = [];
        foreach(\$Order->getProductOrderItems() as \$OrderItem){
            \$insert_flg = true;
            \$ProductClass1 = \$OrderItem->getProductClass();
            \$product_class_id1 = \$ProductClass1 ? (string) \$ProductClass1->getId() : null;
            foreach(\$arrOrderItems as \$key => \$arrayItem){
                \$product_class_id2 = \$arrayItem['product_class_id'];
                if (\$product_class_id1 === \$product_class_id2 && CommonUtil::compareArray(unserialize(\$OrderItem->getOptionSerial()),unserialize(\$arrayItem['option']))) {
                    \$arrOrderItems[\$key]['quantity'] += \$OrderItem->getQuantity();
                    \$arrOrderItems[\$key]['obj'][] = \$OrderItem;
                    \$insert_flg = false;
                    break;
                }
            }

            if(\$insert_flg){
                \$insertItem = [];
                \$insertItem['quantity'] = \$OrderItem->getQuantity();
                \$insertItem['option'] = \$OrderItem->getOptionSerial();
                \$insertItem['product_class_id'] = \$product_class_id1;
                \$insertItem['obj'][] = \$OrderItem;
                \$arrOrderItems[] = \$insertItem;
            }
        }

        foreach(\$arrOrderItems as \$orderItem){
            \$ProductClass1 = \$item->getProductClass();
            \$product_class_id1 = \$ProductClass1 ? (string) \$ProductClass1->getId() : null;
            \$product_class_id2 = \$orderItem['product_class_id'];
            if (\$product_class_id1 === \$product_class_id2 && CommonUtil::compareArray(unserialize(\$item->getOptionSerial()),unserialize(\$orderItem['option'])) && \$item->getQuantity() != \$orderItem['quantity']) {
                \$item->setQuantity(\$orderItem['quantity']);
            }
        }
    }

    protected function handle(ItemInterface \$item, PurchaseContext \$context)
    {

    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Service/PurchaseFlow/Processor/QuantityAdjustValidator.php";
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

use Doctrine\\ORM\\EntityManagerInterface;
use Eccube\\Annotation\\CartFlow;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Service\\PurchaseFlow\\InvalidItemException;
use Eccube\\Service\\PurchaseFlow\\ItemValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\OrderHelper;
use Plugin\\ProductOption\\Util\\CommonUtil;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @CartFlow
 */
class QuantityAdjustValidator extends ItemValidator
{
    private \$orderHelper;
    private \$requestStack;

    public function __construct(
            OrderHelper \$orderHelper,
            RequestStack \$requestStack
            )
    {
        \$this->orderHelper = \$orderHelper;
        \$this->requestStack = \$requestStack;
    }

    protected function validate(ItemInterface \$item, PurchaseContext \$context)
    {
        if (!\$item->isProduct()) {
            return;
        }
        \$request = \$this->requestStack->getMasterRequest();
        if(\$request->get('_route') !== 'shopping_shipping_multiple')return;

        \$Cart = \$item->getCart();
        \$Order = \$this->orderHelper->getPurchaseProcessingOrder(\$Cart->getPreOrderId());

        \$arrOrderItems = [];
        foreach(\$Order->getProductOrderItems() as \$OrderItem){
            \$insert_flg = true;
            \$ProductClass1 = \$OrderItem->getProductClass();
            \$product_class_id1 = \$ProductClass1 ? (string) \$ProductClass1->getId() : null;
            foreach(\$arrOrderItems as \$key => \$arrayItem){
                \$product_class_id2 = \$arrayItem['product_class_id'];
                if (\$product_class_id1 === \$product_class_id2 && CommonUtil::compareArray(unserialize(\$OrderItem->getOptionSerial()),unserialize(\$arrayItem['option']))) {
                    \$arrOrderItems[\$key]['quantity'] += \$OrderItem->getQuantity();
                    \$arrOrderItems[\$key]['obj'][] = \$OrderItem;
                    \$insert_flg = false;
                    break;
                }
            }

            if(\$insert_flg){
                \$insertItem = [];
                \$insertItem['quantity'] = \$OrderItem->getQuantity();
                \$insertItem['option'] = \$OrderItem->getOptionSerial();
                \$insertItem['product_class_id'] = \$product_class_id1;
                \$insertItem['obj'][] = \$OrderItem;
                \$arrOrderItems[] = \$insertItem;
            }
        }

        foreach(\$arrOrderItems as \$orderItem){
            \$ProductClass1 = \$item->getProductClass();
            \$product_class_id1 = \$ProductClass1 ? (string) \$ProductClass1->getId() : null;
            \$product_class_id2 = \$orderItem['product_class_id'];
            if (\$product_class_id1 === \$product_class_id2 && CommonUtil::compareArray(unserialize(\$item->getOptionSerial()),unserialize(\$orderItem['option'])) && \$item->getQuantity() != \$orderItem['quantity']) {
                \$item->setQuantity(\$orderItem['quantity']);
            }
        }
    }

    protected function handle(ItemInterface \$item, PurchaseContext \$context)
    {

    }
}
", "ProductOption/Service/PurchaseFlow/Processor/QuantityAdjustValidator.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Service/PurchaseFlow/Processor/QuantityAdjustValidator.php");
    }
}
