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

/* ProductOption/Entity/OrderTrait.php */
class __TwigTemplate_6743d44d0c95ba4ff57b83e8434c87a220111bdfb10ea718eefd4e46a51197d4 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OrderTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OrderTrait.php"));

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

namespace Plugin\\ProductOption\\Entity;

use Eccube\\Annotation\\EntityExtension;
use Eccube\\Entity\\OrderItem;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Entity\\OrderItemOption;
use Plugin\\ProductOption\\Entity\\OrderItemOptionCategory;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @EntityExtension(\"Eccube\\Entity\\Order\")
 */
trait OrderTrait
{
    /**
     * 同じ規格の商品の個数をまとめた受注明細を取得
     *
     * @return OrderItem[]
     */
    public function getMergedProductOptionOrderItems()
    {

        \$ProductOrderItems = \$this->getProductOrderItems();
        \$orderItemArray = [];
        /** @var OrderItem \$ProductOrderItem */
        foreach (\$ProductOrderItems as \$ProductOrderItem) {
            \$productClassId = \$ProductOrderItem->getProductClass()->getId();
            \$serial = \$ProductOrderItem->getOptionSerial();
            \$key = \$productClassId .'_'. \$serial;
            if (array_key_exists(\$key, \$orderItemArray)) {
                /** @var ItemInterface \$OrderItem */
                \$OrderItem = \$orderItemArray[\$key];
                \$quantity = \$OrderItem->getQuantity() + \$ProductOrderItem->getQuantity();
                \$OrderItem->setQuantity(\$quantity);
            }else{
                // 新規規格の商品は新しく追加する
                \$OrderItem = new OrderItem();
                \$OrderItem->copyProperties(\$ProductOrderItem, ['id','OrderItemOptions']);
                foreach(\$ProductOrderItem->getOrderItemOptions() as \$OrderItemOption){
                    \$newOrderItemOption = new OrderItemOption();
                    \$newOrderItemOption->setOptionId(\$OrderItemOption->getOptionId())
                                       ->setOrderItem(\$OrderItem)
                                       ->setLabel(\$OrderItemOption->getLabel())
                                       ->setSortNo(\$OrderItemOption->getSortNo());
                    foreach(\$OrderItemOption->getOrderItemOptionCategories() as \$OrderItemOptionCategory){
                        \$newOrderItemOptionCategory = new OrderItemOptionCategory();
                        \$newOrderItemOptionCategory->setOptionCategoryId(\$OrderItemOptionCategory->getOptionCategoryId())
                                                   ->setOrderItemOption(\$newOrderItemOption)
                                                   ->setValue(\$OrderItemOptionCategory->getValue())
                                                   ->setPrice(\$OrderItemOptionCategory->getPrice())
                                                   ->setTax(\$OrderItemOptionCategory->getTax())
                                                   ->setDeliveryFreeFlg(\$OrderItemOptionCategory->getDeliveryFreeFlg())
                                                   ->setSortNo(\$OrderItemOptionCategory->getSortNo());
                        \$newOrderItemOption->addOrderItemOptionCategory(\$newOrderItemOptionCategory);
                    }
                    \$OrderItem->addOrderItemOption(\$newOrderItemOption);
                }
                \$orderItemArray[\$key] = \$OrderItem;
            }
        }

        return array_values(\$orderItemArray);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/OrderTrait.php";
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

namespace Plugin\\ProductOption\\Entity;

use Eccube\\Annotation\\EntityExtension;
use Eccube\\Entity\\OrderItem;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Entity\\OrderItemOption;
use Plugin\\ProductOption\\Entity\\OrderItemOptionCategory;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @EntityExtension(\"Eccube\\Entity\\Order\")
 */
trait OrderTrait
{
    /**
     * 同じ規格の商品の個数をまとめた受注明細を取得
     *
     * @return OrderItem[]
     */
    public function getMergedProductOptionOrderItems()
    {

        \$ProductOrderItems = \$this->getProductOrderItems();
        \$orderItemArray = [];
        /** @var OrderItem \$ProductOrderItem */
        foreach (\$ProductOrderItems as \$ProductOrderItem) {
            \$productClassId = \$ProductOrderItem->getProductClass()->getId();
            \$serial = \$ProductOrderItem->getOptionSerial();
            \$key = \$productClassId .'_'. \$serial;
            if (array_key_exists(\$key, \$orderItemArray)) {
                /** @var ItemInterface \$OrderItem */
                \$OrderItem = \$orderItemArray[\$key];
                \$quantity = \$OrderItem->getQuantity() + \$ProductOrderItem->getQuantity();
                \$OrderItem->setQuantity(\$quantity);
            }else{
                // 新規規格の商品は新しく追加する
                \$OrderItem = new OrderItem();
                \$OrderItem->copyProperties(\$ProductOrderItem, ['id','OrderItemOptions']);
                foreach(\$ProductOrderItem->getOrderItemOptions() as \$OrderItemOption){
                    \$newOrderItemOption = new OrderItemOption();
                    \$newOrderItemOption->setOptionId(\$OrderItemOption->getOptionId())
                                       ->setOrderItem(\$OrderItem)
                                       ->setLabel(\$OrderItemOption->getLabel())
                                       ->setSortNo(\$OrderItemOption->getSortNo());
                    foreach(\$OrderItemOption->getOrderItemOptionCategories() as \$OrderItemOptionCategory){
                        \$newOrderItemOptionCategory = new OrderItemOptionCategory();
                        \$newOrderItemOptionCategory->setOptionCategoryId(\$OrderItemOptionCategory->getOptionCategoryId())
                                                   ->setOrderItemOption(\$newOrderItemOption)
                                                   ->setValue(\$OrderItemOptionCategory->getValue())
                                                   ->setPrice(\$OrderItemOptionCategory->getPrice())
                                                   ->setTax(\$OrderItemOptionCategory->getTax())
                                                   ->setDeliveryFreeFlg(\$OrderItemOptionCategory->getDeliveryFreeFlg())
                                                   ->setSortNo(\$OrderItemOptionCategory->getSortNo());
                        \$newOrderItemOption->addOrderItemOptionCategory(\$newOrderItemOptionCategory);
                    }
                    \$OrderItem->addOrderItemOption(\$newOrderItemOption);
                }
                \$orderItemArray[\$key] = \$OrderItem;
            }
        }

        return array_values(\$orderItemArray);
    }
}
", "ProductOption/Entity/OrderTrait.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/OrderTrait.php");
    }
}
