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

/* ProductOption/Service/PurchaseFlow/Processor/StockValidator.php */
class __TwigTemplate_06cf97a4673bead91a43c7d1603a032c795ae89a48d0619ce3579b7dc993a9e5 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/StockValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/StockValidator.php"));

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
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Entity\\CartItem;
use Eccube\\Entity\\OrderItem;
use Eccube\\Service\\PurchaseFlow\\InvalidItemException;
use Eccube\\Service\\PurchaseFlow\\ItemValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @CartFlow
 * @ShoppingFlow
 */
class StockValidator extends ItemValidator
{
    private \$requestStack;

    public function __construct(
            RequestStack \$requestStack
            )
    {
        \$this->requestStack = \$requestStack;
    }

    protected function validate(ItemInterface \$item, PurchaseContext \$context)
    {
        \$request = \$this->requestStack->getMasterRequest();
        if(\$item instanceof CartItem && \$request->get('_route') == 'shopping_shipping_multiple')return;
        if (!\$item->isProduct()) {
            return;
        }

        if (\$item->getProductClass()->isStockUnlimited()) {
            return;
        }
        \$stock = \$item->getProductClass()->getStock();
        \$quantity = 0;
        if(\$item instanceof CartItem){
            foreach(\$item->getCart()->getCartItems() as \$CartItem){
                if(\$item->getProductClass()->getId() == \$CartItem->getProductClass()->getId())\$quantity += \$CartItem->getQuantity();
            }
        }
        if(\$item instanceof OrderItem){
            foreach(\$item->getOrder()->getProductOrderItems() as \$OrderItem){
                if(\$item->getProductClass()->getId() == \$OrderItem->getProductClass()->getId())\$quantity += \$OrderItem->getQuantity();
            }
        }
        if (\$stock < \$quantity) {
            \$this->throwInvalidItemException('front.shopping.out_of_stock', \$item->getProductClass());
        }
    }

    protected function handle(ItemInterface \$item, PurchaseContext \$context)
    {
        \$stock = \$item->getProductClass()->getStock();
        \$quantity = 0;
        if(\$item instanceof CartItem){
            foreach(\$item->getCart()->getCartItems() as \$CartItem){
                if(\$CartItem->getId() === \$item->getId())continue;
                if(\$item->getProductClass()->getId() == \$CartItem->getProductClass()->getId())\$quantity += \$CartItem->getQuantity();
            }
        }
        if(\$item instanceof OrderItem){
            foreach(\$item->getOrder()->getProductOrderItems() as \$OrderItem){
                if(\$OrderItem->getId() === \$item->getId())continue;
                if(\$item->getProductClass()->getId() == \$OrderItem->getProductClass()->getId())\$quantity += \$OrderItem->getQuantity();
            }
        }
        \$item->setQuantity(\$stock - \$quantity);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Service/PurchaseFlow/Processor/StockValidator.php";
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
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Entity\\CartItem;
use Eccube\\Entity\\OrderItem;
use Eccube\\Service\\PurchaseFlow\\InvalidItemException;
use Eccube\\Service\\PurchaseFlow\\ItemValidator;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Symfony\\Component\\HttpFoundation\\RequestStack;

/**
 * @CartFlow
 * @ShoppingFlow
 */
class StockValidator extends ItemValidator
{
    private \$requestStack;

    public function __construct(
            RequestStack \$requestStack
            )
    {
        \$this->requestStack = \$requestStack;
    }

    protected function validate(ItemInterface \$item, PurchaseContext \$context)
    {
        \$request = \$this->requestStack->getMasterRequest();
        if(\$item instanceof CartItem && \$request->get('_route') == 'shopping_shipping_multiple')return;
        if (!\$item->isProduct()) {
            return;
        }

        if (\$item->getProductClass()->isStockUnlimited()) {
            return;
        }
        \$stock = \$item->getProductClass()->getStock();
        \$quantity = 0;
        if(\$item instanceof CartItem){
            foreach(\$item->getCart()->getCartItems() as \$CartItem){
                if(\$item->getProductClass()->getId() == \$CartItem->getProductClass()->getId())\$quantity += \$CartItem->getQuantity();
            }
        }
        if(\$item instanceof OrderItem){
            foreach(\$item->getOrder()->getProductOrderItems() as \$OrderItem){
                if(\$item->getProductClass()->getId() == \$OrderItem->getProductClass()->getId())\$quantity += \$OrderItem->getQuantity();
            }
        }
        if (\$stock < \$quantity) {
            \$this->throwInvalidItemException('front.shopping.out_of_stock', \$item->getProductClass());
        }
    }

    protected function handle(ItemInterface \$item, PurchaseContext \$context)
    {
        \$stock = \$item->getProductClass()->getStock();
        \$quantity = 0;
        if(\$item instanceof CartItem){
            foreach(\$item->getCart()->getCartItems() as \$CartItem){
                if(\$CartItem->getId() === \$item->getId())continue;
                if(\$item->getProductClass()->getId() == \$CartItem->getProductClass()->getId())\$quantity += \$CartItem->getQuantity();
            }
        }
        if(\$item instanceof OrderItem){
            foreach(\$item->getOrder()->getProductOrderItems() as \$OrderItem){
                if(\$OrderItem->getId() === \$item->getId())continue;
                if(\$item->getProductClass()->getId() == \$OrderItem->getProductClass()->getId())\$quantity += \$OrderItem->getQuantity();
            }
        }
        \$item->setQuantity(\$stock - \$quantity);
    }
}
", "ProductOption/Service/PurchaseFlow/Processor/StockValidator.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Service/PurchaseFlow/Processor/StockValidator.php");
    }
}
