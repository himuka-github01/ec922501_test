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

/* ProductOption/Entity/CartItemOption.php */
class __TwigTemplate_343b384b3570b09e5ad35b83ae4f050d12303e03148abb090f830690bb54920e extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/CartItemOption.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/CartItemOption.php"));

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

use Plugin\\ProductOption\\Entity\\OptionCategory;
use Doctrine\\ORM\\Mapping as ORM;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * CartItemOption
 *
 */
class CartItemOption extends \\Eccube\\Entity\\AbstractEntity
{
    private \$_calc = false;
    private \$option_price = 0;
    private \$option_tax = 0;
    private \$delivery_free_flg = false;

    public function _calc()
    {
        if (!\$this->_calc) {
            foreach (\$this->getCartItemOptionCategories() as \$CartItemOptionCategory) {
                \$price = \$CartItemOptionCategory->getPrice();
                \$tax = \$CartItemOptionCategory->getTax();
                if(is_numeric(\$price)){
                    \$this->option_price += \$price;
                    \$this->option_tax += \$tax;
                }
                if(!\$this->delivery_free_flg){
                    \$flg = \$CartItemOptionCategory->getDeliveryFreeFlg();
                    if(\$flg == OptionCategory::ON){
                        \$this->delivery_free_flg = true;
                    }
                }
            }
            \$this->_calc = true;
        }
    }

    public function getOptionPrice()
    {
        \$this->_calc();

        return \$this->option_price;
    }

    public function getOptionTax()
    {
        \$this->_calc();

        return \$this->option_tax;
    }

    public function getDeliveryFreeFlg()
    {
        \$this->_calc();

        return \$this->delivery_free_flg;
    }

    private \$label;

    private \$Option;

    private \$CartItemOptionCategories;

    public function __construct()
    {
        \$this->CartItemOptionCategories = new ArrayCollection();
    }

    public function setLabel(\$label)
    {
        \$this->label = \$label;

        return \$this;
    }

    public function getLabel()
    {
        return \$this->label;
    }

    public function setOption(\$option)
    {
        \$this->Option = \$option;

        return \$this;
    }

    public function getOption()
    {
        return \$this->Option;
    }

    public function addCartItemOptionCategory(\\Plugin\\ProductOption\\Entity\\CartItemOptionCategory \$cartItemOptionCategory)
    {
        \$this->CartItemOptionCategories[] = \$cartItemOptionCategory;

        return \$this;
    }

    public function removeCartItemOptionCategory(\\Plugin\\ProductOption\\Entity\\CartItemOptionCategory \$cartItemOptionCategory)
    {
        \$this->CartItemOptionCategories->removeElement(\$cartItemOptionCategory);
    }

    public function getCartItemOptionCategories()
    {
        return \$this->CartItemOptionCategories;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/CartItemOption.php";
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

use Plugin\\ProductOption\\Entity\\OptionCategory;
use Doctrine\\ORM\\Mapping as ORM;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * CartItemOption
 *
 */
class CartItemOption extends \\Eccube\\Entity\\AbstractEntity
{
    private \$_calc = false;
    private \$option_price = 0;
    private \$option_tax = 0;
    private \$delivery_free_flg = false;

    public function _calc()
    {
        if (!\$this->_calc) {
            foreach (\$this->getCartItemOptionCategories() as \$CartItemOptionCategory) {
                \$price = \$CartItemOptionCategory->getPrice();
                \$tax = \$CartItemOptionCategory->getTax();
                if(is_numeric(\$price)){
                    \$this->option_price += \$price;
                    \$this->option_tax += \$tax;
                }
                if(!\$this->delivery_free_flg){
                    \$flg = \$CartItemOptionCategory->getDeliveryFreeFlg();
                    if(\$flg == OptionCategory::ON){
                        \$this->delivery_free_flg = true;
                    }
                }
            }
            \$this->_calc = true;
        }
    }

    public function getOptionPrice()
    {
        \$this->_calc();

        return \$this->option_price;
    }

    public function getOptionTax()
    {
        \$this->_calc();

        return \$this->option_tax;
    }

    public function getDeliveryFreeFlg()
    {
        \$this->_calc();

        return \$this->delivery_free_flg;
    }

    private \$label;

    private \$Option;

    private \$CartItemOptionCategories;

    public function __construct()
    {
        \$this->CartItemOptionCategories = new ArrayCollection();
    }

    public function setLabel(\$label)
    {
        \$this->label = \$label;

        return \$this;
    }

    public function getLabel()
    {
        return \$this->label;
    }

    public function setOption(\$option)
    {
        \$this->Option = \$option;

        return \$this;
    }

    public function getOption()
    {
        return \$this->Option;
    }

    public function addCartItemOptionCategory(\\Plugin\\ProductOption\\Entity\\CartItemOptionCategory \$cartItemOptionCategory)
    {
        \$this->CartItemOptionCategories[] = \$cartItemOptionCategory;

        return \$this;
    }

    public function removeCartItemOptionCategory(\\Plugin\\ProductOption\\Entity\\CartItemOptionCategory \$cartItemOptionCategory)
    {
        \$this->CartItemOptionCategories->removeElement(\$cartItemOptionCategory);
    }

    public function getCartItemOptionCategories()
    {
        return \$this->CartItemOptionCategories;
    }
}
", "ProductOption/Entity/CartItemOption.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/CartItemOption.php");
    }
}
