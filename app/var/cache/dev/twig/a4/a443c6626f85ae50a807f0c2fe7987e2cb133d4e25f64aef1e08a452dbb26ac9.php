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

/* ProductOption/Service/PurchaseFlow/Processor/OptionPreprocessor.php */
class __TwigTemplate_b2cfedcf095aa2246cf0eefd60e4d3379a10217341887b59a415214a2d2a99c3 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/OptionPreprocessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/OptionPreprocessor.php"));

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
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\Plugin;
use Eccube\\Service\\PurchaseFlow\\ItemPreprocessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\CartService;
use Eccube\\Service\\TaxRuleService;
use Plugin\\ProductOption\\Entity\\Option;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Entity\\OrderItemOption;
use Plugin\\ProductOption\\Entity\\OrderItemOptionCategory;
use Plugin\\ProductOption\\Util\\CommonUtil;

/**
 * @CartFlow
 * @ShoppingFlow
 */
class OptionPreprocessor implements ItemPreprocessor
{
    private \$entityManager;
    private \$cartService;
    private \$taxRuleService;

    public function __construct(
            EntityManagerInterface \$entityManager,
            CartService \$cartService,
            TaxRuleService \$taxRuleService
            )
    {
        \$this->entityManager = \$entityManager;
        \$this->cartService = \$cartService;
        \$this->taxRuleService = \$taxRuleService;
    }

    /**
     * @param ItemInterface \$item
     * @param PurchaseContext \$context
     */
    public function process(ItemInterface \$item, PurchaseContext \$context)
    {
        if (!\$item->isProduct()) {
            return;
        }

        \$Plugin = \$this->entityManager->getRepository(Plugin::class)->findOneBy(['code' => 'CustomerRank']);
        if (\$item instanceof OrderItem) {
            if(strlen(\$item->getOptionSerial()) == 0){
                \$optionRepository = \$this->entityManager->getRepository(Option::class);
                \$optionCategoryRepository = \$this->entityManager->getRepository(OptionCategory::class);
                foreach(\$this->cartService->getCarts() as \$Cart){
                    \$CartItems = \$Cart->getCartItems();
                    foreach(\$CartItems as \$CartItem){
                        \$ProductClass1 = \$item->getProductClass();
                        \$ProductClass2 = \$CartItem->getProductClass();
                        \$product_class_id1 = \$ProductClass1 ? (string) \$ProductClass1->getId() : null;
                        \$product_class_id2 = \$ProductClass2 ? (string) \$ProductClass2->getId() : null;
                        if (\$product_class_id1 === \$product_class_id2 && \$item->getQuantity() === \$CartItem->getQuantity()) {
                            foreach(\$item->getOrder()->getProductOrderItems() as \$orderItem){
                                if(strlen(\$orderItem->getOptionSerial()) == 0)continue;
                                \$ProductClass = \$orderItem->getProductClass();
                                \$product_class_id = \$ProductClass ? (string) \$ProductClass->getId() : null;
                                if(\$product_class_id1 === \$product_class_id && CommonUtil::compareArray(unserialize(\$orderItem->getOptionSerial()),unserialize(\$CartItem->getOptionSerial()))){
                                    \$item->setOptionSerial(\$CartItem->getOptionSerial());
                                    continue 2;
                                }
                            }
                            \$optionPrice = 0;
                            \$optionTax = 0;
                            \$sortNo = 0;
                            foreach(\$CartItem->getArrOption() as \$optionId => \$values){
                                if(!is_array(\$values))\$values = [\$values];
                                \$Option = \$optionRepository->find(\$optionId);
                                if(is_null(\$Option))continue;
                                \$OrderItemOption = new OrderItemOption();
                                \$OrderItemOption->setLabel(\$Option->getName())
                                                ->setOptionId(\$Option->getId())
                                                ->setOrderItem(\$item)
                                                ->setSortNo(\$sortNo++);
                                \$categorySortNo = 0;
                                foreach(\$values as \$value){
                                    if(
                                        \$Option->getType() == Option::SELECT_TYPE
                                        || \$Option->getType() == Option::RADIO_TYPE
                                        || \$Option->getType() == Option::CHECKBOX_TYPE
                                      ){
                                        \$OptionCategory = \$optionCategoryRepository->find(\$value);
                                        if(is_null(\$OptionCategory))continue;
                                        \$value = \$OptionCategory->getName();
                                    }else{
                                        \$OptionCategory = null;
                                        \$OptionCategories = \$Option->getOptionCategories();
                                        if(count(\$OptionCategories) > 0)\$OptionCategory = \$OptionCategories[0];
                                    }
                                    \$OrderItemOptionCategory = new OrderItemOptionCategory();
                                    \$OrderItemOptionCategory
                                                            ->setOrderItemOption(\$OrderItemOption)
                                                            ->setSortNo(\$categorySortNo++)
                                                            ->setValue(\$value);
                                    if(!is_null(\$OptionCategory)){
                                        \$option_price = \$OptionCategory->getValue();
                                        if(\$Option->getType() == Option::NUMBER_TYPE){
                                            if(\$OptionCategory->getMultipleFlg())\$option_price *= \$value;
                                        }
                                        \$OrderItemOptionCategory->setDeliveryFreeFlg(\$OptionCategory->getDeliveryFreeFlg())
                                                                ->setOptionCategoryId(\$OptionCategory->getId())
                                                                ->setPrice(\$option_price)
                                                                ->setTax(\$this->taxRuleService->getTax(\$option_price,\$ProductClass1->getProduct(),\$ProductClass1));
                                        \$optionPrice += \$OrderItemOptionCategory->getPrice();
                                        \$optionTax += \$OrderItemOptionCategory->getTax();
                                    }
                                    \$OrderItemOption->addOrderItemOptionCategory(\$OrderItemOptionCategory);
                                    \$this->entityManager->persist(\$OrderItemOptionCategory);
                                }
                                if(count(\$OrderItemOption->getOrderItemOptionCategories()) == 0)continue;
                                \$item->addOrderItemOption(\$OrderItemOption);
                                \$this->entityManager->persist(\$OrderItemOption);
                            }
                            \$item->setPrice(\$item->getPrice() + \$optionPrice);
                            \$item->setTax(\$item->getTax() + \$optionTax);
                            \$item->setOptionSerial(\$CartItem->getOptionSerial());
                            \$item->setOptionSetFlg(true);
                            \$this->entityManager->persist(\$item);
                            \$this->entityManager->flush(\$item);
                            break 2;
                        }
                    }
                }
            }else{
                if(!is_null(\$Plugin) && \$Plugin->isEnabled() && \$item->getOptionSetFlg() !== true){
                    \$item->setPrice(\$item->getPrice() + \$item->getOptionPrice());
                    \$item->setTax(\$item->getTax() + \$item->getOptionTax());
                    \$item->setOptionSetFlg(true);
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
        return "ProductOption/Service/PurchaseFlow/Processor/OptionPreprocessor.php";
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
use Eccube\\Entity\\OrderItem;
use Eccube\\Entity\\Plugin;
use Eccube\\Service\\PurchaseFlow\\ItemPreprocessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\CartService;
use Eccube\\Service\\TaxRuleService;
use Plugin\\ProductOption\\Entity\\Option;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Entity\\OrderItemOption;
use Plugin\\ProductOption\\Entity\\OrderItemOptionCategory;
use Plugin\\ProductOption\\Util\\CommonUtil;

/**
 * @CartFlow
 * @ShoppingFlow
 */
class OptionPreprocessor implements ItemPreprocessor
{
    private \$entityManager;
    private \$cartService;
    private \$taxRuleService;

    public function __construct(
            EntityManagerInterface \$entityManager,
            CartService \$cartService,
            TaxRuleService \$taxRuleService
            )
    {
        \$this->entityManager = \$entityManager;
        \$this->cartService = \$cartService;
        \$this->taxRuleService = \$taxRuleService;
    }

    /**
     * @param ItemInterface \$item
     * @param PurchaseContext \$context
     */
    public function process(ItemInterface \$item, PurchaseContext \$context)
    {
        if (!\$item->isProduct()) {
            return;
        }

        \$Plugin = \$this->entityManager->getRepository(Plugin::class)->findOneBy(['code' => 'CustomerRank']);
        if (\$item instanceof OrderItem) {
            if(strlen(\$item->getOptionSerial()) == 0){
                \$optionRepository = \$this->entityManager->getRepository(Option::class);
                \$optionCategoryRepository = \$this->entityManager->getRepository(OptionCategory::class);
                foreach(\$this->cartService->getCarts() as \$Cart){
                    \$CartItems = \$Cart->getCartItems();
                    foreach(\$CartItems as \$CartItem){
                        \$ProductClass1 = \$item->getProductClass();
                        \$ProductClass2 = \$CartItem->getProductClass();
                        \$product_class_id1 = \$ProductClass1 ? (string) \$ProductClass1->getId() : null;
                        \$product_class_id2 = \$ProductClass2 ? (string) \$ProductClass2->getId() : null;
                        if (\$product_class_id1 === \$product_class_id2 && \$item->getQuantity() === \$CartItem->getQuantity()) {
                            foreach(\$item->getOrder()->getProductOrderItems() as \$orderItem){
                                if(strlen(\$orderItem->getOptionSerial()) == 0)continue;
                                \$ProductClass = \$orderItem->getProductClass();
                                \$product_class_id = \$ProductClass ? (string) \$ProductClass->getId() : null;
                                if(\$product_class_id1 === \$product_class_id && CommonUtil::compareArray(unserialize(\$orderItem->getOptionSerial()),unserialize(\$CartItem->getOptionSerial()))){
                                    \$item->setOptionSerial(\$CartItem->getOptionSerial());
                                    continue 2;
                                }
                            }
                            \$optionPrice = 0;
                            \$optionTax = 0;
                            \$sortNo = 0;
                            foreach(\$CartItem->getArrOption() as \$optionId => \$values){
                                if(!is_array(\$values))\$values = [\$values];
                                \$Option = \$optionRepository->find(\$optionId);
                                if(is_null(\$Option))continue;
                                \$OrderItemOption = new OrderItemOption();
                                \$OrderItemOption->setLabel(\$Option->getName())
                                                ->setOptionId(\$Option->getId())
                                                ->setOrderItem(\$item)
                                                ->setSortNo(\$sortNo++);
                                \$categorySortNo = 0;
                                foreach(\$values as \$value){
                                    if(
                                        \$Option->getType() == Option::SELECT_TYPE
                                        || \$Option->getType() == Option::RADIO_TYPE
                                        || \$Option->getType() == Option::CHECKBOX_TYPE
                                      ){
                                        \$OptionCategory = \$optionCategoryRepository->find(\$value);
                                        if(is_null(\$OptionCategory))continue;
                                        \$value = \$OptionCategory->getName();
                                    }else{
                                        \$OptionCategory = null;
                                        \$OptionCategories = \$Option->getOptionCategories();
                                        if(count(\$OptionCategories) > 0)\$OptionCategory = \$OptionCategories[0];
                                    }
                                    \$OrderItemOptionCategory = new OrderItemOptionCategory();
                                    \$OrderItemOptionCategory
                                                            ->setOrderItemOption(\$OrderItemOption)
                                                            ->setSortNo(\$categorySortNo++)
                                                            ->setValue(\$value);
                                    if(!is_null(\$OptionCategory)){
                                        \$option_price = \$OptionCategory->getValue();
                                        if(\$Option->getType() == Option::NUMBER_TYPE){
                                            if(\$OptionCategory->getMultipleFlg())\$option_price *= \$value;
                                        }
                                        \$OrderItemOptionCategory->setDeliveryFreeFlg(\$OptionCategory->getDeliveryFreeFlg())
                                                                ->setOptionCategoryId(\$OptionCategory->getId())
                                                                ->setPrice(\$option_price)
                                                                ->setTax(\$this->taxRuleService->getTax(\$option_price,\$ProductClass1->getProduct(),\$ProductClass1));
                                        \$optionPrice += \$OrderItemOptionCategory->getPrice();
                                        \$optionTax += \$OrderItemOptionCategory->getTax();
                                    }
                                    \$OrderItemOption->addOrderItemOptionCategory(\$OrderItemOptionCategory);
                                    \$this->entityManager->persist(\$OrderItemOptionCategory);
                                }
                                if(count(\$OrderItemOption->getOrderItemOptionCategories()) == 0)continue;
                                \$item->addOrderItemOption(\$OrderItemOption);
                                \$this->entityManager->persist(\$OrderItemOption);
                            }
                            \$item->setPrice(\$item->getPrice() + \$optionPrice);
                            \$item->setTax(\$item->getTax() + \$optionTax);
                            \$item->setOptionSerial(\$CartItem->getOptionSerial());
                            \$item->setOptionSetFlg(true);
                            \$this->entityManager->persist(\$item);
                            \$this->entityManager->flush(\$item);
                            break 2;
                        }
                    }
                }
            }else{
                if(!is_null(\$Plugin) && \$Plugin->isEnabled() && \$item->getOptionSetFlg() !== true){
                    \$item->setPrice(\$item->getPrice() + \$item->getOptionPrice());
                    \$item->setTax(\$item->getTax() + \$item->getOptionTax());
                    \$item->setOptionSetFlg(true);
                }
            }
        }
    }
}
", "ProductOption/Service/PurchaseFlow/Processor/OptionPreprocessor.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Service/PurchaseFlow/Processor/OptionPreprocessor.php");
    }
}
