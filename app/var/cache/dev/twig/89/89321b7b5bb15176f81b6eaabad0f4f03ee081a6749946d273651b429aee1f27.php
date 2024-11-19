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

/* ProductOption/Entity/OptionCategory.php */
class __TwigTemplate_f16394947ab9159824ea8ac736d263c9ba79248a0316c43979f7b4644c6d0757 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OptionCategory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OptionCategory.php"));

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
 * OptionCategory
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_optioncategory\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\OptionCategoryRepository\")
 */
class OptionCategory extends \\Eccube\\Entity\\AbstractEntity
{
    const ON = 1;
    const OFF = 0;

    private \$label;
    public function setLabel(\$label)
    {
        \$this->label = \$label;

        return \$this;
    }

    public function getLabel()
    {
        return \$this->label;
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
     * @var string
     *
     * @ORM\\Column(name=\"name\", type=\"string\", length=255, nullable=true)
     */
    private \$name;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"description\", type=\"string\", length=4000, nullable=true)
     */
    private \$description;

    /**
     * @var boolean|null
     *
     * @ORM\\Column(name=\"disable_flg\", type=\"boolean\", nullable=true)
     */
    private \$disable_flg;

    /**
     * @var boolean|null
     *
     * @ORM\\Column(name=\"init_flg\", type=\"boolean\", nullable=true)
     */
    private \$init_flg;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"value\", type=\"decimal\", precision=12, scale=2, nullable=true)
     */
    private \$value;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"delivery_free_flg\", type=\"smallint\", nullable=true)
     */
    private \$delivery_free_flg;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"multiple_flg\", type=\"smallint\", nullable=true)
     */
    private \$multiple_flg;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\")
     */
    private \$sort_no;

    /**
     * @var \\DateTime
     *
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$create_date;

    /**
     * @var \\DateTime
     *
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$update_date;

    /**
     * @var \\Plugin\\ProductOption\\Entity\\Option
     *
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\ProductOption\\Entity\\Option\", inversedBy=\"OptionCategories\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"option_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Option;

    /**
     * @var \\Doctrine\\Common\\Collections\\Collection
     *
     * @ORM\\OneToMany(targetEntity=\"Plugin\\ProductOption\\Entity\\OptionImage\", mappedBy=\"OptionCategory\", cascade={\"remove\"})
     * @ORM\\OrderBy({
     *     \"sort_no\"=\"ASC\"
     * })
     */
    private \$OptionImages;

    /**
     * @var \\Eccube\\Entity\\Member
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Member\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"creator_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Creator;

    /**
     * Constructor
     */
    public function __construct()
    {
        \$this->OptionImages = new \\Doctrine\\Common\\Collections\\ArrayCollection();
    }

    public function __toString()
    {
        return \$this->getName();
    }

    public function getId()
    {
        return \$this->id;
    }

    public function setName(\$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function setDescription(\$description)
    {
        \$this->description = \$description;

        return \$this;
    }

    public function getDescription()
    {
        return \$this->description;
    }

    public function setCreateDate(\$date)
    {
        \$this->create_date = \$date;

        return \$this;
    }

    public function getCreateDate()
    {
        return \$this->create_date;
    }

    public function setUpdateDate(\$date)
    {
        \$this->update_date = \$date;

        return \$this;
    }

    public function getUpdateDate()
    {
        return \$this->update_date;
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

    public function setDisableFlg(\$flg)
    {
        \$this->disable_flg = \$flg;

        return \$this;
    }

    public function getDisableFlg()
    {
        return \$this->disable_flg;
    }

    public function setInitFlg(\$flg)
    {
        \$this->init_flg = \$flg;

        return \$this;
    }

    public function getInitFlg()
    {
        return \$this->init_flg;
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

    public function setMultipleFlg(\$flg)
    {
        \$this->multiple_flg = \$flg;

        return \$this;
    }

    public function getMultipleFlg()
    {
        return \$this->multiple_flg;
    }

    public function setOption(\\Plugin\\ProductOption\\Entity\\Option \$Option)
    {
        \$this->Option = \$Option;

        return \$this;
    }

    public function getOption()
    {
        return \$this->Option;
    }

    public function setCreator(\\Eccube\\Entity\\Member \$creator)
    {
        \$this->Creator = \$creator;

        return \$this;
    }

    public function addOptionImage(\\Plugin\\ProductOption\\Entity\\OptionImage \$optionImage)
    {
        \$this->OptionImages[] = \$optionImage;

        return \$this;
    }

    public function removeOptionImage(\\Plugin\\ProductOption\\Entity\\OptionImage \$optionImage)
    {
        return \$this->OptionImages->removeElement(\$optionImage);
    }

    public function getOptionImages()
    {
        return \$this->OptionImages;
    }

    public function getCreator()
    {
        return \$this->Creator;
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/OptionCategory.php";
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
 * OptionCategory
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_optioncategory\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\OptionCategoryRepository\")
 */
class OptionCategory extends \\Eccube\\Entity\\AbstractEntity
{
    const ON = 1;
    const OFF = 0;

    private \$label;
    public function setLabel(\$label)
    {
        \$this->label = \$label;

        return \$this;
    }

    public function getLabel()
    {
        return \$this->label;
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
     * @var string
     *
     * @ORM\\Column(name=\"name\", type=\"string\", length=255, nullable=true)
     */
    private \$name;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"description\", type=\"string\", length=4000, nullable=true)
     */
    private \$description;

    /**
     * @var boolean|null
     *
     * @ORM\\Column(name=\"disable_flg\", type=\"boolean\", nullable=true)
     */
    private \$disable_flg;

    /**
     * @var boolean|null
     *
     * @ORM\\Column(name=\"init_flg\", type=\"boolean\", nullable=true)
     */
    private \$init_flg;

    /**
     * @var string|null
     *
     * @ORM\\Column(name=\"value\", type=\"decimal\", precision=12, scale=2, nullable=true)
     */
    private \$value;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"delivery_free_flg\", type=\"smallint\", nullable=true)
     */
    private \$delivery_free_flg;

    /**
     * @var int|null
     *
     * @ORM\\Column(name=\"multiple_flg\", type=\"smallint\", nullable=true)
     */
    private \$multiple_flg;

    /**
     * @var int
     *
     * @ORM\\Column(name=\"sort_no\", type=\"integer\")
     */
    private \$sort_no;

    /**
     * @var \\DateTime
     *
     * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
     */
    private \$create_date;

    /**
     * @var \\DateTime
     *
     * @ORM\\Column(name=\"update_date\", type=\"datetimetz\")
     */
    private \$update_date;

    /**
     * @var \\Plugin\\ProductOption\\Entity\\Option
     *
     * @ORM\\ManyToOne(targetEntity=\"Plugin\\ProductOption\\Entity\\Option\", inversedBy=\"OptionCategories\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"option_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Option;

    /**
     * @var \\Doctrine\\Common\\Collections\\Collection
     *
     * @ORM\\OneToMany(targetEntity=\"Plugin\\ProductOption\\Entity\\OptionImage\", mappedBy=\"OptionCategory\", cascade={\"remove\"})
     * @ORM\\OrderBy({
     *     \"sort_no\"=\"ASC\"
     * })
     */
    private \$OptionImages;

    /**
     * @var \\Eccube\\Entity\\Member
     *
     * @ORM\\ManyToOne(targetEntity=\"Eccube\\Entity\\Member\")
     * @ORM\\JoinColumns({
     *   @ORM\\JoinColumn(name=\"creator_id\", referencedColumnName=\"id\")
     * })
     */
    private \$Creator;

    /**
     * Constructor
     */
    public function __construct()
    {
        \$this->OptionImages = new \\Doctrine\\Common\\Collections\\ArrayCollection();
    }

    public function __toString()
    {
        return \$this->getName();
    }

    public function getId()
    {
        return \$this->id;
    }

    public function setName(\$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    public function getName()
    {
        return \$this->name;
    }

    public function setDescription(\$description)
    {
        \$this->description = \$description;

        return \$this;
    }

    public function getDescription()
    {
        return \$this->description;
    }

    public function setCreateDate(\$date)
    {
        \$this->create_date = \$date;

        return \$this;
    }

    public function getCreateDate()
    {
        return \$this->create_date;
    }

    public function setUpdateDate(\$date)
    {
        \$this->update_date = \$date;

        return \$this;
    }

    public function getUpdateDate()
    {
        return \$this->update_date;
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

    public function setDisableFlg(\$flg)
    {
        \$this->disable_flg = \$flg;

        return \$this;
    }

    public function getDisableFlg()
    {
        return \$this->disable_flg;
    }

    public function setInitFlg(\$flg)
    {
        \$this->init_flg = \$flg;

        return \$this;
    }

    public function getInitFlg()
    {
        return \$this->init_flg;
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

    public function setMultipleFlg(\$flg)
    {
        \$this->multiple_flg = \$flg;

        return \$this;
    }

    public function getMultipleFlg()
    {
        return \$this->multiple_flg;
    }

    public function setOption(\\Plugin\\ProductOption\\Entity\\Option \$Option)
    {
        \$this->Option = \$Option;

        return \$this;
    }

    public function getOption()
    {
        return \$this->Option;
    }

    public function setCreator(\\Eccube\\Entity\\Member \$creator)
    {
        \$this->Creator = \$creator;

        return \$this;
    }

    public function addOptionImage(\\Plugin\\ProductOption\\Entity\\OptionImage \$optionImage)
    {
        \$this->OptionImages[] = \$optionImage;

        return \$this;
    }

    public function removeOptionImage(\\Plugin\\ProductOption\\Entity\\OptionImage \$optionImage)
    {
        return \$this->OptionImages->removeElement(\$optionImage);
    }

    public function getOptionImages()
    {
        return \$this->OptionImages;
    }

    public function getCreator()
    {
        return \$this->Creator;
    }

}
", "ProductOption/Entity/OptionCategory.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/OptionCategory.php");
    }
}
