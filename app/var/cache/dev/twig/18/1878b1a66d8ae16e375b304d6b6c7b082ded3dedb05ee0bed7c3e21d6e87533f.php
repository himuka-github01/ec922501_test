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

/* ProductOption/Entity/CartItemTrait.php */
class __TwigTemplate_ee28a9c47b792296eaec9ae42537760395a40908fc1ed6384b41418f15ffdbb1 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/CartItemTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/CartItemTrait.php"));

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
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @EntityExtension(\"Eccube\\Entity\\CartItem\")
 */
trait CartItemTrait
{
    private \$_calc_productoption = false;
    private \$option_price = 0;
    private \$option_tax = 0;
    private \$delivery_free_flg = false;

    public function _calc_productoption()
    {
        if (!\$this->_calc_productoption) {
            if(!is_null(\$this->CartItemOptions)){
                foreach (\$this->CartItemOptions as \$CartItemOption) {
                    \$price = \$CartItemOption->getOptionPrice();
                    \$tax = \$CartItemOption->getOptionTax();
                    if(is_numeric(\$price)){
                        \$this->option_price += \$price;
                        \$this->option_tax += \$tax;
                    }
                    if(!\$this->delivery_free_flg){
                        \$flg = \$CartItemOption->getDeliveryFreeFlg();
                        if(\$flg == OptionCategory::ON){
                            \$this->delivery_free_flg = true;
                        }
                    }
                }
            }
            \$this->_calc_productoption = true;
        }
    }

    public function getOptionPrice()
    {
        \$this->_calc_productoption();

        return \$this->option_price;
    }

    public function getOptionTax()
    {
        \$this->_calc_productoption();

        return \$this->option_tax;
    }

    public function getDeliveryFreeFlg()
    {
        \$this->_calc_productoption();

        return \$this->delivery_free_flg;
    }

    public function getArrOption()
    {
        return unserialize(\$this->option_serial);
    }

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"option_serial\", type=\"string\", length=10000, nullable=true)
     */
    private \$option_serial;

    private \$CartItemOptions;

    public function __construct()
    {
        \$this->CartItemOptions = new ArrayCollection();
    }

    public function getId()
    {
        return \$this->id;
    }

    public function setOptionSerial(\$serial)
    {
        \$this->option_serial = \$serial;

        return \$this;
    }

    public function getOptionSerial()
    {
        return \$this->option_serial;
    }

    public function addCartItemOption(\\Plugin\\ProductOption\\Entity\\CartItemOption \$cartItemOption)
    {
        \$this->CartItemOptions[] = \$cartItemOption;

        return \$this;
    }

    public function removeCartItemOption(\\Plugin\\ProductOption\\Entity\\CartItemOption \$cartItemOption)
    {
        \$this->CartItemOptions->removeElement(\$cartItemOption);
    }

    public function getCartItemOptions()
    {
        return \$this->CartItemOptions;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/CartItemTrait.php";
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
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @EntityExtension(\"Eccube\\Entity\\CartItem\")
 */
trait CartItemTrait
{
    private \$_calc_productoption = false;
    private \$option_price = 0;
    private \$option_tax = 0;
    private \$delivery_free_flg = false;

    public function _calc_productoption()
    {
        if (!\$this->_calc_productoption) {
            if(!is_null(\$this->CartItemOptions)){
                foreach (\$this->CartItemOptions as \$CartItemOption) {
                    \$price = \$CartItemOption->getOptionPrice();
                    \$tax = \$CartItemOption->getOptionTax();
                    if(is_numeric(\$price)){
                        \$this->option_price += \$price;
                        \$this->option_tax += \$tax;
                    }
                    if(!\$this->delivery_free_flg){
                        \$flg = \$CartItemOption->getDeliveryFreeFlg();
                        if(\$flg == OptionCategory::ON){
                            \$this->delivery_free_flg = true;
                        }
                    }
                }
            }
            \$this->_calc_productoption = true;
        }
    }

    public function getOptionPrice()
    {
        \$this->_calc_productoption();

        return \$this->option_price;
    }

    public function getOptionTax()
    {
        \$this->_calc_productoption();

        return \$this->option_tax;
    }

    public function getDeliveryFreeFlg()
    {
        \$this->_calc_productoption();

        return \$this->delivery_free_flg;
    }

    public function getArrOption()
    {
        return unserialize(\$this->option_serial);
    }

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"option_serial\", type=\"string\", length=10000, nullable=true)
     */
    private \$option_serial;

    private \$CartItemOptions;

    public function __construct()
    {
        \$this->CartItemOptions = new ArrayCollection();
    }

    public function getId()
    {
        return \$this->id;
    }

    public function setOptionSerial(\$serial)
    {
        \$this->option_serial = \$serial;

        return \$this;
    }

    public function getOptionSerial()
    {
        return \$this->option_serial;
    }

    public function addCartItemOption(\\Plugin\\ProductOption\\Entity\\CartItemOption \$cartItemOption)
    {
        \$this->CartItemOptions[] = \$cartItemOption;

        return \$this;
    }

    public function removeCartItemOption(\\Plugin\\ProductOption\\Entity\\CartItemOption \$cartItemOption)
    {
        \$this->CartItemOptions->removeElement(\$cartItemOption);
    }

    public function getCartItemOptions()
    {
        return \$this->CartItemOptions;
    }
}
", "ProductOption/Entity/CartItemTrait.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/CartItemTrait.php");
    }
}
