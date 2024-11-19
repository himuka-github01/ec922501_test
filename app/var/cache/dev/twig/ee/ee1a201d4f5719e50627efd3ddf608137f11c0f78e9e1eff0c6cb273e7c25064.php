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

/* ProductOption/Entity/CartItemOptionCategory.php */
class __TwigTemplate_e3fd0639f0bfc4b5c71e21b4080e12d5ef11290860a6029cc5b01769c263eaf7 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/CartItemOptionCategory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/CartItemOptionCategory.php"));

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

use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * CartItemOptionValue
 *
 */
class CartItemOptionCategory extends \\Eccube\\Entity\\AbstractEntity
{
    private \$price;

    private \$tax;

    private \$value;

    private \$delivery_free_flg;

    private \$OptionCategory;

    public function setPrice(\$price)
    {
        \$this->price = \$price;

        return \$this;
    }

    public function getPrice()
    {
        return \$this->price;
    }

    public function setTax(\$tax)
    {
        \$this->tax = \$tax;

        return \$this;
    }

    public function getTax()
    {
        return \$this->tax;
    }

    public function setValue(\$value)
    {
        \$this->value = \$value;

        return \$this;
    }

    public function getValue()
    {
        return \$this->value;
    }

    public function setDeliveryFreeFlg(\$flg)
    {
        \$this->delivery_free_flg = \$flg;

        return \$this;
    }

    public function getDeliveryFreeFlg()
    {
        return \$this->delivery_free_flg;
    }

    public function setOptionCategory(\$optionCategory)
    {
        \$this->OptionCategory = \$optionCategory;

        return \$this;
    }

    public function getOptionCategory()
    {
        return \$this->OptionCategory;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/CartItemOptionCategory.php";
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

use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * CartItemOptionValue
 *
 */
class CartItemOptionCategory extends \\Eccube\\Entity\\AbstractEntity
{
    private \$price;

    private \$tax;

    private \$value;

    private \$delivery_free_flg;

    private \$OptionCategory;

    public function setPrice(\$price)
    {
        \$this->price = \$price;

        return \$this;
    }

    public function getPrice()
    {
        return \$this->price;
    }

    public function setTax(\$tax)
    {
        \$this->tax = \$tax;

        return \$this;
    }

    public function getTax()
    {
        return \$this->tax;
    }

    public function setValue(\$value)
    {
        \$this->value = \$value;

        return \$this;
    }

    public function getValue()
    {
        return \$this->value;
    }

    public function setDeliveryFreeFlg(\$flg)
    {
        \$this->delivery_free_flg = \$flg;

        return \$this;
    }

    public function getDeliveryFreeFlg()
    {
        return \$this->delivery_free_flg;
    }

    public function setOptionCategory(\$optionCategory)
    {
        \$this->OptionCategory = \$optionCategory;

        return \$this;
    }

    public function getOptionCategory()
    {
        return \$this->OptionCategory;
    }
}
", "ProductOption/Entity/CartItemOptionCategory.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/CartItemOptionCategory.php");
    }
}
