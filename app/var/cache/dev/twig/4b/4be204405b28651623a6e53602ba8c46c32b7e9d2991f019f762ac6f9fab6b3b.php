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

/* ProductOption/Entity/ProductTrait.php */
class __TwigTemplate_8730b6f4efaccd2bb5b191893b6e35abb08647011aedc79b83aef196c58010b3 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/ProductTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/ProductTrait.php"));

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
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @EntityExtension(\"Eccube\\Entity\\Product\")
 */
trait ProductTrait
{
    /**
     * @var \\Doctrine\\Common\\Collections\\Collection
     *
     * @ORM\\OneToMany(targetEntity=\"Plugin\\ProductOption\\Entity\\ProductOption\", mappedBy=\"Product\", cascade={\"remove\"})
     * @ORM\\OrderBy({
     *     \"sort_no\"=\"ASC\"
     * })
     */
    private \$ProductOptions;

    public function addProductOption(\\Plugin\\ProductOption\\Entity\\ProductOption \$productOption)
    {
        \$this->ProductOptions[] = \$productOption;

        return \$this;
    }

    public function removeProductOption(\\Plugin\\ProductOption\\Entity\\ProductOption \$productOption)
    {
        \$this->ProductOptions->removeElement(\$productOption);
    }

    public function getProductOptions()
    {
        return \$this->ProductOptions;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/ProductTrait.php";
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
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @EntityExtension(\"Eccube\\Entity\\Product\")
 */
trait ProductTrait
{
    /**
     * @var \\Doctrine\\Common\\Collections\\Collection
     *
     * @ORM\\OneToMany(targetEntity=\"Plugin\\ProductOption\\Entity\\ProductOption\", mappedBy=\"Product\", cascade={\"remove\"})
     * @ORM\\OrderBy({
     *     \"sort_no\"=\"ASC\"
     * })
     */
    private \$ProductOptions;

    public function addProductOption(\\Plugin\\ProductOption\\Entity\\ProductOption \$productOption)
    {
        \$this->ProductOptions[] = \$productOption;

        return \$this;
    }

    public function removeProductOption(\\Plugin\\ProductOption\\Entity\\ProductOption \$productOption)
    {
        \$this->ProductOptions->removeElement(\$productOption);
    }

    public function getProductOptions()
    {
        return \$this->ProductOptions;
    }
}
", "ProductOption/Entity/ProductTrait.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/ProductTrait.php");
    }
}
