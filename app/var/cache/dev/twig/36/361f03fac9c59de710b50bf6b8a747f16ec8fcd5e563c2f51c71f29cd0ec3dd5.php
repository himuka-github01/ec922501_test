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

/* ProductOption/Entity/OptionImage.php */
class __TwigTemplate_a93b4019bc54b8401323808d58da4abfe8ca80ec99fd1a03bd9cf9ff79d782f6 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OptionImage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/OptionImage.php"));

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
 * OptionImage
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_option_image\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\OptionImageRepository\")
 */
class OptionImage extends \\Eccube\\Entity\\AbstractEntity
{
    /**
     * @return string
     */
    public function __toString()
    {
        return (string) \$this->getFileName();
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
         * @ORM\\Column(name=\"file_name\", type=\"string\", length=255)
         */
        private \$file_name;

        /**
         * @var int
         *
         * @ORM\\Column(name=\"sort_no\", type=\"smallint\", options={\"unsigned\":true})
         */
        private \$sort_no;

        /**
         * @var \\DateTime
         *
         * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
         */
        private \$create_date;

        /**
         * @var \\Plugin\\ProductOption\\Entity\\OptionCategory
         *
         * @ORM\\ManyToOne(targetEntity=\"Plugin\\ProductOption\\Entity\\OptionCategory\", inversedBy=\"OptionImages\")
         * @ORM\\JoinColumns({
         *   @ORM\\JoinColumn(name=\"option_category_id\", referencedColumnName=\"id\")
         * })
         */
        private \$OptionCategory;

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
         * Get id.
         *
         * @return int
         */
        public function getId()
        {
            return \$this->id;
        }

        /**
         * Set fileName.
         *
         * @param string \$fileName
         *
         * @return ProductImage
         */
        public function setFileName(\$fileName)
        {
            \$this->file_name = \$fileName;

            return \$this;
        }

        /**
         * Get fileName.
         *
         * @return string
         */
        public function getFileName()
        {
            return \$this->file_name;
        }

        /**
         * Set sortNo.
         *
         * @param int \$sortNo
         *
         * @return ProductImage
         */
        public function setSortNo(\$sortNo)
        {
            \$this->sort_no = \$sortNo;

            return \$this;
        }

        /**
         * Get sortNo.
         *
         * @return int
         */
        public function getSortNo()
        {
            return \$this->sort_no;
        }

        /**
         * Set createDate.
         *
         * @param \\DateTime \$createDate
         *
         * @return ProductImage
         */
        public function setCreateDate(\$createDate)
        {
            \$this->create_date = \$createDate;

            return \$this;
        }

        /**
         * Get createDate.
         *
         * @return \\DateTime
         */
        public function getCreateDate()
        {
            return \$this->create_date;
        }

        /**
         * Set optionCategory.
         *
         * @param \\Plugin\\ProductOption\\Entity\\OptionCategory|null \$optionCategory
         *
         * @return OptionImage
         */
        public function setOptionCategory(\\Plugin\\ProductOption\\Entity\\OptionCategory \$optionCategory = null)
        {
            \$this->OptionCategory = \$optionCategory;

            return \$this;
        }

        /**
         * Get optionCategory.
         *
         * @return \\Plugin\\ProductOption\\Entity\\OptionCategory|null
         */
        public function getOptionCategory()
        {
            return \$this->OptionCategory;
        }

        /**
         * Set creator.
         *
         * @param \\Eccube\\Entity\\Member|null \$creator
         *
         * @return ProductImage
         */
        public function setCreator(\\Eccube\\Entity\\Member \$creator = null)
        {
            \$this->Creator = \$creator;

            return \$this;
        }

        /**
         * Get creator.
         *
         * @return \\Eccube\\Entity\\Member|null
         */
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
        return "ProductOption/Entity/OptionImage.php";
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
 * OptionImage
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_option_image\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\OptionImageRepository\")
 */
class OptionImage extends \\Eccube\\Entity\\AbstractEntity
{
    /**
     * @return string
     */
    public function __toString()
    {
        return (string) \$this->getFileName();
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
         * @ORM\\Column(name=\"file_name\", type=\"string\", length=255)
         */
        private \$file_name;

        /**
         * @var int
         *
         * @ORM\\Column(name=\"sort_no\", type=\"smallint\", options={\"unsigned\":true})
         */
        private \$sort_no;

        /**
         * @var \\DateTime
         *
         * @ORM\\Column(name=\"create_date\", type=\"datetimetz\")
         */
        private \$create_date;

        /**
         * @var \\Plugin\\ProductOption\\Entity\\OptionCategory
         *
         * @ORM\\ManyToOne(targetEntity=\"Plugin\\ProductOption\\Entity\\OptionCategory\", inversedBy=\"OptionImages\")
         * @ORM\\JoinColumns({
         *   @ORM\\JoinColumn(name=\"option_category_id\", referencedColumnName=\"id\")
         * })
         */
        private \$OptionCategory;

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
         * Get id.
         *
         * @return int
         */
        public function getId()
        {
            return \$this->id;
        }

        /**
         * Set fileName.
         *
         * @param string \$fileName
         *
         * @return ProductImage
         */
        public function setFileName(\$fileName)
        {
            \$this->file_name = \$fileName;

            return \$this;
        }

        /**
         * Get fileName.
         *
         * @return string
         */
        public function getFileName()
        {
            return \$this->file_name;
        }

        /**
         * Set sortNo.
         *
         * @param int \$sortNo
         *
         * @return ProductImage
         */
        public function setSortNo(\$sortNo)
        {
            \$this->sort_no = \$sortNo;

            return \$this;
        }

        /**
         * Get sortNo.
         *
         * @return int
         */
        public function getSortNo()
        {
            return \$this->sort_no;
        }

        /**
         * Set createDate.
         *
         * @param \\DateTime \$createDate
         *
         * @return ProductImage
         */
        public function setCreateDate(\$createDate)
        {
            \$this->create_date = \$createDate;

            return \$this;
        }

        /**
         * Get createDate.
         *
         * @return \\DateTime
         */
        public function getCreateDate()
        {
            return \$this->create_date;
        }

        /**
         * Set optionCategory.
         *
         * @param \\Plugin\\ProductOption\\Entity\\OptionCategory|null \$optionCategory
         *
         * @return OptionImage
         */
        public function setOptionCategory(\\Plugin\\ProductOption\\Entity\\OptionCategory \$optionCategory = null)
        {
            \$this->OptionCategory = \$optionCategory;

            return \$this;
        }

        /**
         * Get optionCategory.
         *
         * @return \\Plugin\\ProductOption\\Entity\\OptionCategory|null
         */
        public function getOptionCategory()
        {
            return \$this->OptionCategory;
        }

        /**
         * Set creator.
         *
         * @param \\Eccube\\Entity\\Member|null \$creator
         *
         * @return ProductImage
         */
        public function setCreator(\\Eccube\\Entity\\Member \$creator = null)
        {
            \$this->Creator = \$creator;

            return \$this;
        }

        /**
         * Get creator.
         *
         * @return \\Eccube\\Entity\\Member|null
         */
        public function getCreator()
        {
            return \$this->Creator;
        }

}
", "ProductOption/Entity/OptionImage.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/OptionImage.php");
    }
}
