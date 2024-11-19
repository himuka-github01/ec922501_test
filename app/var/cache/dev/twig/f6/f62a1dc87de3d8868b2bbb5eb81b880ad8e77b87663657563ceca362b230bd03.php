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

/* ProductOption/Entity/OrderItemOptionCategory.php */
class __TwigTemplate_116841f96256f0ff6a3b8824fb9aff29ecb24199265f5788ea24492043be2992 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OrderItemOptionCategory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OrderItemOptionCategory.php"));

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
use Doctrine\\ORM\\Mapping as ORM;

/**
 * OrderOptionItem
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_order_item_option_category\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\OrderItemOptionCategoryRepository\")
 */
class OrderItemOptionCategory extends \\Eccube\\Entity\\AbstractEntity
{

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
     * @ORM\\Column(name=\"price\", type=\"decimal\", precision=12, scale=2, nullable=true)
     */
    private \$price;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"tax\", type=\"decimal\", precision=12, scale=2, nullable=true)
     */
    private \$tax;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"value\", type=\"string\", length=4000, nullable=true)
     */
    private \$value;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"delivery_free_flg\", type=\"smallint\", nullable=true)
     */
    private \$delivery_free_flg;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\")
     */
    private \$sort_no;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"option_category_id\", type=\"integer\", nullable=true)
     */
    private \$option_category_id;

    /**
     * @var \\Plugin\\ProductOption\\Entity\\OrderItemOption
     *
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\ProductOption\\Entity\\OrderItemOption\", inversedBy=\"OrderItemOptionCategories\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"order_item_option_id\", referencedColumnName=\"id\")
     * })
     */
    private \$OrderItemOption;

    public function getId()
    {
        return \$this->id;
    }

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

    public function setSortNo(\$sortNo)
    {
        \$this->sort_no = \$sortNo;

        return \$this;
    }

    public function getSortNo()
    {
        return \$this->sort_no;
    }

    public function setOptionCategoryId(\$optionCategoryId)
    {
        \$this->option_category_id = \$optionCategoryId;

        return \$this;
    }

    public function getOptionCategoryId()
    {
        return \$this->option_category_id;
    }

    public function setOrderItemOption(\$orderItemOption)
    {
        \$this->OrderItemOption = \$orderItemOption;

        return \$this;
    }

    public function getOrderItemOption()
    {
        return \$this->OrderItemOption;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/OrderItemOptionCategory.php";
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
use Doctrine\\ORM\\Mapping as ORM;

/**
 * OrderOptionItem
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_order_item_option_category\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\OrderItemOptionCategoryRepository\")
 */
class OrderItemOptionCategory extends \\Eccube\\Entity\\AbstractEntity
{

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
     * @ORM\\Column(name=\"price\", type=\"decimal\", precision=12, scale=2, nullable=true)
     */
    private \$price;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"tax\", type=\"decimal\", precision=12, scale=2, nullable=true)
     */
    private \$tax;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"value\", type=\"string\", length=4000, nullable=true)
     */
    private \$value;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"delivery_free_flg\", type=\"smallint\", nullable=true)
     */
    private \$delivery_free_flg;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\")
     */
    private \$sort_no;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"option_category_id\", type=\"integer\", nullable=true)
     */
    private \$option_category_id;

    /**
     * @var \\Plugin\\ProductOption\\Entity\\OrderItemOption
     *
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\ProductOption\\Entity\\OrderItemOption\", inversedBy=\"OrderItemOptionCategories\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"order_item_option_id\", referencedColumnName=\"id\")
     * })
     */
    private \$OrderItemOption;

    public function getId()
    {
        return \$this->id;
    }

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

    public function setSortNo(\$sortNo)
    {
        \$this->sort_no = \$sortNo;

        return \$this;
    }

    public function getSortNo()
    {
        return \$this->sort_no;
    }

    public function setOptionCategoryId(\$optionCategoryId)
    {
        \$this->option_category_id = \$optionCategoryId;

        return \$this;
    }

    public function getOptionCategoryId()
    {
        return \$this->option_category_id;
    }

    public function setOrderItemOption(\$orderItemOption)
    {
        \$this->OrderItemOption = \$orderItemOption;

        return \$this;
    }

    public function getOrderItemOption()
    {
        return \$this->OrderItemOption;
    }
}
", "ProductOption/Entity/OrderItemOptionCategory.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/OrderItemOptionCategory.php");
    }
}
