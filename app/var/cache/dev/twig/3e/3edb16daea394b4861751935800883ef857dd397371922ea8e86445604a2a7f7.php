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

/* ProductOption/Doctrine/EventSubscriber/CartItemEventSubscriber.php */
class __TwigTemplate_7de8b12f38fd8d42b4e3efa4920a092b2c056272603d19ca2cfee285cf8f8166 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Doctrine/EventSubscriber/CartItemEventSubscriber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Doctrine/EventSubscriber/CartItemEventSubscriber.php"));

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

namespace Plugin\\ProductOption\\Doctrine\\EventSubscriber;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\Common\\Persistence\\Event\\LifecycleEventArgs;
use Doctrine\\ORM\\Events;
use Eccube\\Entity\\CartItem;
use Eccube\\Service\\TaxRuleService;
use Plugin\\ProductOption\\Entity\\Option;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Entity\\CartItemOption;
use Plugin\\ProductOption\\Entity\\CartItemOptionCategory;

class CartItemEventSubscriber implements EventSubscriber
{

    public function __construct(
            TaxRuleService \$taxRuleService
            )
    {
        \$this->taxRuleService = \$taxRuleService;
    }

    public function getSubscribedEvents()
    {
        return [Events::postLoad];
    }

    public function postLoad(LifecycleEventArgs \$args)
    {
        \$entity = \$args->getObject();
        \$entityManager = \$args->getObjectManager();
        if (\$entity instanceof CartItem) {
            \$CartItem = \$entity;
            \$Cart = \$CartItem->getCart();
            \$ProductClass = \$CartItem->getProductClass();
            \$Options = \$CartItem->getArrOption();
            if(!empty(\$Options)){
                foreach(\$Options as \$optionId => \$values){
                    if(!is_array(\$values))\$values = [\$values];
                    \$Option = \$entityManager->getRepository(Option::class)->find(\$optionId);
                    if(is_null(\$Option)){
                        \$Cart->removeItem(\$CartItem);
                        \$entityManager->remove(\$CartItem);
                        continue;
                    }
                    \$CartItemOption = new CartItemOption();
                    \$CartItemOption->setLabel(\$Option->getName())
                            ->setOption(\$Option);
                    foreach(\$values as \$value){
                        if(
                                \$Option->getType() == Option::SELECT_TYPE
                                || \$Option->getType() == Option::RADIO_TYPE
                                || \$Option->getType() == Option::CHECKBOX_TYPE
                                ){
                            \$OptionCategory = \$entityManager->getRepository(OptionCategory::class)->find(\$value);
                            if(is_null(\$OptionCategory))continue;
                            \$value = \$OptionCategory->getName();
                        }else{
                                \$OptionCategory = null;
                                \$OptionCategories = \$Option->getOptionCategories();
                                if(count(\$OptionCategories) > 0)\$OptionCategory = \$OptionCategories[0];
                        }
                        \$CartItemOptionCategory = new CartItemOptionCategory();
                        \$CartItemOptionCategory
                                            ->setValue(\$value);
                        if(!is_null(\$OptionCategory)){
                            \$option_price = \$OptionCategory->getValue();
                            if(\$Option->getType() == Option::NUMBER_TYPE){
                                if(\$OptionCategory->getMultipleFlg())\$option_price *= \$value;
                            }
                            \$CartItemOptionCategory->setDeliveryFreeFlg(\$OptionCategory->getDeliveryFreeFlg())
                                                ->setOptionCategory(\$OptionCategory)
                                                ->setPrice(\$option_price)
                                                ->setTax(\$this->taxRuleService->getTax(\$option_price,\$ProductClass->getProduct(),\$ProductClass));
                        }
                        \$CartItemOption->addCartItemOptionCategory(\$CartItemOptionCategory);
                    }
                    if(count(\$CartItemOption->getCartItemOptionCategories()) == 0){
                        \$Cart->removeItem(\$CartItem);
                        \$entityManager->remove(\$CartItem);
                        continue;
                    }
                    \$CartItem->addCartItemOption(\$CartItemOption);
                }
            }
        }
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Doctrine/EventSubscriber/CartItemEventSubscriber.php";
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

namespace Plugin\\ProductOption\\Doctrine\\EventSubscriber;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\Common\\Persistence\\Event\\LifecycleEventArgs;
use Doctrine\\ORM\\Events;
use Eccube\\Entity\\CartItem;
use Eccube\\Service\\TaxRuleService;
use Plugin\\ProductOption\\Entity\\Option;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Entity\\CartItemOption;
use Plugin\\ProductOption\\Entity\\CartItemOptionCategory;

class CartItemEventSubscriber implements EventSubscriber
{

    public function __construct(
            TaxRuleService \$taxRuleService
            )
    {
        \$this->taxRuleService = \$taxRuleService;
    }

    public function getSubscribedEvents()
    {
        return [Events::postLoad];
    }

    public function postLoad(LifecycleEventArgs \$args)
    {
        \$entity = \$args->getObject();
        \$entityManager = \$args->getObjectManager();
        if (\$entity instanceof CartItem) {
            \$CartItem = \$entity;
            \$Cart = \$CartItem->getCart();
            \$ProductClass = \$CartItem->getProductClass();
            \$Options = \$CartItem->getArrOption();
            if(!empty(\$Options)){
                foreach(\$Options as \$optionId => \$values){
                    if(!is_array(\$values))\$values = [\$values];
                    \$Option = \$entityManager->getRepository(Option::class)->find(\$optionId);
                    if(is_null(\$Option)){
                        \$Cart->removeItem(\$CartItem);
                        \$entityManager->remove(\$CartItem);
                        continue;
                    }
                    \$CartItemOption = new CartItemOption();
                    \$CartItemOption->setLabel(\$Option->getName())
                            ->setOption(\$Option);
                    foreach(\$values as \$value){
                        if(
                                \$Option->getType() == Option::SELECT_TYPE
                                || \$Option->getType() == Option::RADIO_TYPE
                                || \$Option->getType() == Option::CHECKBOX_TYPE
                                ){
                            \$OptionCategory = \$entityManager->getRepository(OptionCategory::class)->find(\$value);
                            if(is_null(\$OptionCategory))continue;
                            \$value = \$OptionCategory->getName();
                        }else{
                                \$OptionCategory = null;
                                \$OptionCategories = \$Option->getOptionCategories();
                                if(count(\$OptionCategories) > 0)\$OptionCategory = \$OptionCategories[0];
                        }
                        \$CartItemOptionCategory = new CartItemOptionCategory();
                        \$CartItemOptionCategory
                                            ->setValue(\$value);
                        if(!is_null(\$OptionCategory)){
                            \$option_price = \$OptionCategory->getValue();
                            if(\$Option->getType() == Option::NUMBER_TYPE){
                                if(\$OptionCategory->getMultipleFlg())\$option_price *= \$value;
                            }
                            \$CartItemOptionCategory->setDeliveryFreeFlg(\$OptionCategory->getDeliveryFreeFlg())
                                                ->setOptionCategory(\$OptionCategory)
                                                ->setPrice(\$option_price)
                                                ->setTax(\$this->taxRuleService->getTax(\$option_price,\$ProductClass->getProduct(),\$ProductClass));
                        }
                        \$CartItemOption->addCartItemOptionCategory(\$CartItemOptionCategory);
                    }
                    if(count(\$CartItemOption->getCartItemOptionCategories()) == 0){
                        \$Cart->removeItem(\$CartItem);
                        \$entityManager->remove(\$CartItem);
                        continue;
                    }
                    \$CartItem->addCartItemOption(\$CartItemOption);
                }
            }
        }
    }
}", "ProductOption/Doctrine/EventSubscriber/CartItemEventSubscriber.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Doctrine/EventSubscriber/CartItemEventSubscriber.php");
    }
}
