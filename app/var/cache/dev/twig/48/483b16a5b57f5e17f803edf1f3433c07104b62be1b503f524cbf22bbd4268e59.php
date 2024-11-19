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

/* ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionPreprocessor.php */
class __TwigTemplate_03348ac128d89ac9bf90b651b2a9c162ddeb433ee9aa9175f71bcf89b65c3800 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionPreprocessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionPreprocessor.php"));

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

use Eccube\\Annotation\\CartFlow;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Service\\PurchaseFlow\\ItemHolderPreprocessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Plugin\\ProductOption\\Entity\\Option;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Repository\\OptionRepository;
use Plugin\\ProductOption\\Repository\\OptionCategoryRepository;

/**
 * @CartFlow
 */
class DeliveryFeeFreeForProductOptionPreprocessor implements ItemHolderPreprocessor
{
    private \$optionRepository;
    private \$optionCategoryRepository;

    public function __construct(
            OptionRepository \$optionRepository,
            OptionCategoryRepository \$optionCategoryRepository
            )
    {
        \$this->optionRepository = \$optionRepository;
        \$this->optionCategoryRepository = \$optionCategoryRepository;
    }

    public function process(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        \$delivery_free_flg = false;
        foreach(\$itemHolder->getItems() as \$cartItem){
            \$Options = \$cartItem->getArrOption();
            if(!empty(\$Options)){
                foreach(\$Options as \$optionId => \$values){
                    if(!is_array(\$values))\$values = [\$values];
                    \$Option = \$this->optionRepository->find(\$optionId);
                    if(is_null(\$Option))continue;
                    foreach(\$values as \$value){
                        if(
                                \$Option->getType() == Option::SELECT_TYPE
                                || \$Option->getType() == Option::RADIO_TYPE
                                || \$Option->getType() == Option::CHECKBOX_TYPE
                                ){
                            \$OptionCategory = \$this->optionCategoryRepository->find(\$value);
                        }else{
                            \$OptionCategory = null;
                            \$OptionCategories = \$Option->getOptionCategories();
                            if(count(\$OptionCategories) > 0)\$OptionCategory = \$OptionCategories[0];
                        }
                        if(!is_null(\$OptionCategory)){
                            \$flg = \$OptionCategory->getDeliveryFreeFlg();
                            if(\$flg == OptionCategory::ON){
                                \$delivery_free_flg = true;
                                break 3;
                            }
                        }
                    }
                }
            }
        }

        if(\$delivery_free_flg){
            foreach (\$itemHolder->getItems() as \$Item) {
                if (\$Item->isDeliveryFee()) {
                    \$Item->setQuantity(0);
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
        return "ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionPreprocessor.php";
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

use Eccube\\Annotation\\CartFlow;
use Eccube\\Entity\\ItemHolderInterface;
use Eccube\\Service\\PurchaseFlow\\ItemHolderPreprocessor;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Plugin\\ProductOption\\Entity\\Option;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Repository\\OptionRepository;
use Plugin\\ProductOption\\Repository\\OptionCategoryRepository;

/**
 * @CartFlow
 */
class DeliveryFeeFreeForProductOptionPreprocessor implements ItemHolderPreprocessor
{
    private \$optionRepository;
    private \$optionCategoryRepository;

    public function __construct(
            OptionRepository \$optionRepository,
            OptionCategoryRepository \$optionCategoryRepository
            )
    {
        \$this->optionRepository = \$optionRepository;
        \$this->optionCategoryRepository = \$optionCategoryRepository;
    }

    public function process(ItemHolderInterface \$itemHolder, PurchaseContext \$context)
    {
        \$delivery_free_flg = false;
        foreach(\$itemHolder->getItems() as \$cartItem){
            \$Options = \$cartItem->getArrOption();
            if(!empty(\$Options)){
                foreach(\$Options as \$optionId => \$values){
                    if(!is_array(\$values))\$values = [\$values];
                    \$Option = \$this->optionRepository->find(\$optionId);
                    if(is_null(\$Option))continue;
                    foreach(\$values as \$value){
                        if(
                                \$Option->getType() == Option::SELECT_TYPE
                                || \$Option->getType() == Option::RADIO_TYPE
                                || \$Option->getType() == Option::CHECKBOX_TYPE
                                ){
                            \$OptionCategory = \$this->optionCategoryRepository->find(\$value);
                        }else{
                            \$OptionCategory = null;
                            \$OptionCategories = \$Option->getOptionCategories();
                            if(count(\$OptionCategories) > 0)\$OptionCategory = \$OptionCategories[0];
                        }
                        if(!is_null(\$OptionCategory)){
                            \$flg = \$OptionCategory->getDeliveryFreeFlg();
                            if(\$flg == OptionCategory::ON){
                                \$delivery_free_flg = true;
                                break 3;
                            }
                        }
                    }
                }
            }
        }

        if(\$delivery_free_flg){
            foreach (\$itemHolder->getItems() as \$Item) {
                if (\$Item->isDeliveryFee()) {
                    \$Item->setQuantity(0);
                }
            }
        }
    }
}
", "ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionPreprocessor.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Service/PurchaseFlow/Processor/DeliveryFeeFreeForProductOptionPreprocessor.php");
    }
}
