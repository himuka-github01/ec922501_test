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

/* ProductOption/Entity/OrderItemOption.php */
class __TwigTemplate_6c09185e800ecb9d95f5b7aca62d7460bd044d4265d413cf7e38ad7eaee1d3f4 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OrderItemOption.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OrderItemOption.php"));

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

use Eccube\\Util\\EntityUtil;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * OrderItemOption
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_order_item_option\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\OrderItemOptionRepository\")
 */
class OrderItemOption extends \\Eccube\\Entity\\AbstractEntity
{
    private \$_calc = false;
    private \$option_price = 0;
    private \$option_tax = 0;
    private \$delivery_free_flg = false;
    private \$arrOrderItemOptionCategory = [];

    public function _calc()
    {
        if (!\$this->_calc) {
            foreach (\$this->getOrderItemOptionCategories() as \$OrderItemOptionCategory) {
                \$price = \$OrderItemOptionCategory->getPrice();
                \$tax = \$OrderItemOptionCategory->getTax();
                if(is_numeric(\$price)){
                    \$this->option_price += \$price;
                    \$this->option_tax += \$tax;
                }
                if(!\$this->delivery_free_flg){
                    \$flg = \$OrderItemOptionCategory->getDeliveryFreeFlg();
                    if(\$flg == OptionCategory::ON){
                        \$this->delivery_free_flg = true;
                    }
                }
                \$this->arrOrderItemOptionCategory[\$this->option_id] = \$OrderItemOptionCategory->getValue();
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

    public function getArrOrderItemOptionCategory()
    {
        \$this->_calc();

        return \$this->arrOrderItemOptionCategory;
    }

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"label\", type=\"string\", length=4000, nullable=true)
     */
    private \$label;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\")
     */
    private \$sort_no;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"option_id\", type=\"integer\")
     */
    private \$option_id;

    /**
     * @var \\Eccube\\Entity\\OrderItem
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\OrderItem\", inversedBy=\"OrderItemOptions\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"order_item_id\", referencedColumnName=\"id\")
     * })
     */
    private \$OrderItem;

    /**
     * @var \\Doctrine\\Common\\Collections\\Collection
     *
     * @ORM\\OneToMany(targetEntity=\"Plugin\\ProductOption\\Entity\\OrderItemOptionCategory\", mappedBy=\"OrderItemOption\", cascade={\"persist\",\"remove\"})
     * @ORM\\OrderBy({
     *     \"sort_no\"=\"ASC\"
     * })
     */
    private \$OrderItemOptionCategories;

    public function __construct()
    {
        \$this->OrderItemOptionCategories = new \\Doctrine\\Common\\Collections\\ArrayCollection();
    }

    public function getId()
    {
        return \$this->id;
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

    public function setSortNo(\$sortNo)
    {
        \$this->sort_no = \$sortNo;

        return \$this;
    }

    public function getSortNo()
    {
        return \$this->sort_no;
    }

    public function setOptionId(\$optionId)
    {
        \$this->option_id = \$optionId;

        return \$this;
    }

    public function getOptionId()
    {
        return \$this->option_id;
    }

    public function setOrderItem(\$orderItem)
    {
        \$this->OrderItem = \$orderItem;

        return \$this;
    }

    public function getOrderItem()
    {
        return \$this->OrderItem;
    }

    public function addOrderItemOptionCategory(\\Plugin\\ProductOption\\Entity\\OrderItemOptionCategory \$orderItemOptionCategory)
    {
        \$this->OrderItemOptionCategories[] = \$orderItemOptionCategory;

        return \$this;
    }

    public function removeOrderItemOptionCategory(\\Plugin\\ProductOption\\Entity\\OrderItemOptionCategory \$orderItemOptionCategory)
    {
        \$this->OrderItemOptionCategories->removeElement(\$orderItemOptionCategory);
    }

    public function getOrderItemOptionCategories()
    {
        return \$this->OrderItemOptionCategories;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/OrderItemOption.php";
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

use Eccube\\Util\\EntityUtil;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * OrderItemOption
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_order_item_option\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\OrderItemOptionRepository\")
 */
class OrderItemOption extends \\Eccube\\Entity\\AbstractEntity
{
    private \$_calc = false;
    private \$option_price = 0;
    private \$option_tax = 0;
    private \$delivery_free_flg = false;
    private \$arrOrderItemOptionCategory = [];

    public function _calc()
    {
        if (!\$this->_calc) {
            foreach (\$this->getOrderItemOptionCategories() as \$OrderItemOptionCategory) {
                \$price = \$OrderItemOptionCategory->getPrice();
                \$tax = \$OrderItemOptionCategory->getTax();
                if(is_numeric(\$price)){
                    \$this->option_price += \$price;
                    \$this->option_tax += \$tax;
                }
                if(!\$this->delivery_free_flg){
                    \$flg = \$OrderItemOptionCategory->getDeliveryFreeFlg();
                    if(\$flg == OptionCategory::ON){
                        \$this->delivery_free_flg = true;
                    }
                }
                \$this->arrOrderItemOptionCategory[\$this->option_id] = \$OrderItemOptionCategory->getValue();
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

    public function getArrOrderItemOptionCategory()
    {
        \$this->_calc();

        return \$this->arrOrderItemOptionCategory;
    }

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"label\", type=\"string\", length=4000, nullable=true)
     */
    private \$label;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\")
     */
    private \$sort_no;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"option_id\", type=\"integer\")
     */
    private \$option_id;

    /**
     * @var \\Eccube\\Entity\\OrderItem
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\OrderItem\", inversedBy=\"OrderItemOptions\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"order_item_id\", referencedColumnName=\"id\")
     * })
     */
    private \$OrderItem;

    /**
     * @var \\Doctrine\\Common\\Collections\\Collection
     *
     * @ORM\\OneToMany(targetEntity=\"Plugin\\ProductOption\\Entity\\OrderItemOptionCategory\", mappedBy=\"OrderItemOption\", cascade={\"persist\",\"remove\"})
     * @ORM\\OrderBy({
     *     \"sort_no\"=\"ASC\"
     * })
     */
    private \$OrderItemOptionCategories;

    public function __construct()
    {
        \$this->OrderItemOptionCategories = new \\Doctrine\\Common\\Collections\\ArrayCollection();
    }

    public function getId()
    {
        return \$this->id;
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

    public function setSortNo(\$sortNo)
    {
        \$this->sort_no = \$sortNo;

        return \$this;
    }

    public function getSortNo()
    {
        return \$this->sort_no;
    }

    public function setOptionId(\$optionId)
    {
        \$this->option_id = \$optionId;

        return \$this;
    }

    public function getOptionId()
    {
        return \$this->option_id;
    }

    public function setOrderItem(\$orderItem)
    {
        \$this->OrderItem = \$orderItem;

        return \$this;
    }

    public function getOrderItem()
    {
        return \$this->OrderItem;
    }

    public function addOrderItemOptionCategory(\\Plugin\\ProductOption\\Entity\\OrderItemOptionCategory \$orderItemOptionCategory)
    {
        \$this->OrderItemOptionCategories[] = \$orderItemOptionCategory;

        return \$this;
    }

    public function removeOrderItemOptionCategory(\\Plugin\\ProductOption\\Entity\\OrderItemOptionCategory \$orderItemOptionCategory)
    {
        \$this->OrderItemOptionCategories->removeElement(\$orderItemOptionCategory);
    }

    public function getOrderItemOptionCategories()
    {
        return \$this->OrderItemOptionCategories;
    }
}
", "ProductOption/Entity/OrderItemOption.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/OrderItemOption.php");
    }
}
