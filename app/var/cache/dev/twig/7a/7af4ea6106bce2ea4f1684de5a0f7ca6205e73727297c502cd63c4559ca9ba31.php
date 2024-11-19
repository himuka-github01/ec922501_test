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

/* ProductOption/Entity/ProductOption.php */
class __TwigTemplate_70967e025bcce0310ac0afd02c500d7054c57bc007fc8131f76165cae4195381 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/ProductOption.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/ProductOption.php"));

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

/**
 * ProductOption
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_product_option\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\ProductOptionRepository\")
 */
class ProductOption extends \\Eccube\\Entity\\AbstractEntity
{

    private \$checked = false;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\")
     */
    private \$sort_no;

    /**
     * @var \\Eccube\\Entity\\Product
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Product\", inversedBy=\"ProductOptions\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"product_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Product;

    /**
     * @var \\Plugin\\ProductOption\\Entity\\Option
     *
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\ProductOption\\Entity\\Option\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"option_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Option;

    public function getId()
    {
        return \$this->id;
    }

    public function setChecked(\$checked)
    {
        \$this->checked = \$checked;

        return \$this;
    }

    public function getChecked()
    {
        return \$this->checked;
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

    public function setProduct(\\Eccube\\Entity\\Product \$product = null)
    {
        \$this->Product = \$product;

        return \$this;
    }

    public function getProduct()
    {
        return \$this->Product;
    }

    public function setOption(\\Plugin\\ProductOption\\Entity\\Option \$Option = null)
    {
        \$this->Option = \$Option;

        return \$this;
    }

    public function getOption()
    {
        return \$this->Option;
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/ProductOption.php";
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

/**
 * ProductOption
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_product_option\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\ProductOptionRepository\")
 */
class ProductOption extends \\Eccube\\Entity\\AbstractEntity
{

    private \$checked = false;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"id\", type=\"integer\", options={\"unsigned\":true})
     * @ORM\\Id
     * @ORM\\GeneratedValue(strategy=\"IDENTITY\")
     */
    private \$id;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\")
     */
    private \$sort_no;

    /**
     * @var \\Eccube\\Entity\\Product
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Product\", inversedBy=\"ProductOptions\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"product_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Product;

    /**
     * @var \\Plugin\\ProductOption\\Entity\\Option
     *
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\ProductOption\\Entity\\Option\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"option_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Option;

    public function getId()
    {
        return \$this->id;
    }

    public function setChecked(\$checked)
    {
        \$this->checked = \$checked;

        return \$this;
    }

    public function getChecked()
    {
        return \$this->checked;
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

    public function setProduct(\\Eccube\\Entity\\Product \$product = null)
    {
        \$this->Product = \$product;

        return \$this;
    }

    public function getProduct()
    {
        return \$this->Product;
    }

    public function setOption(\\Plugin\\ProductOption\\Entity\\Option \$Option = null)
    {
        \$this->Option = \$Option;

        return \$this;
    }

    public function getOption()
    {
        return \$this->Option;
    }

}
", "ProductOption/Entity/ProductOption.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/ProductOption.php");
    }
}
