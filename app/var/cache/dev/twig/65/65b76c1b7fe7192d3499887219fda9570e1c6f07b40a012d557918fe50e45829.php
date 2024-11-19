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

/* ProductOption/Entity/ProductOptionConfig.php */
class __TwigTemplate_0800028d8bead8039c791242ff31b467e8ce0d1e2d944f1801c1fbcd7250e15f extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/ProductOptionConfig.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Entity/ProductOptionConfig.php"));

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
 * ProductOptionConfig
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_config\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\ConfigRepository\")
 */
class ProductOptionConfig extends \\Eccube\\Entity\\AbstractEntity
{
    const RANGE_NAME = 'range';

    const BY_ALL = 1;
    const BY_SHIPPING = 2;
    /**
     * @var string
     *
     * @ORM\\Column(name=\"name\", type=\"string\", nullable=false, length=255)
     * @ORM\\Id
     */
    private \$name;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"value\", type=\"string\", nullable=true, length=255)
     */
    private \$value;

    public function setName(\$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    public function getName()
    {
        return \$this->name;
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
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Entity/ProductOptionConfig.php";
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
 * ProductOptionConfig
 *
 * @ORM\\Table(name=\"plg_productoption_dtb_config\")
 * @ORM\\InheritanceType(\"SINGLE_TABLE\")
 * @ORM\\DiscriminatorColumn(name=\"discriminator_type\", type=\"string\", length=255)
 * @ORM\\HasLifecycleCallbacks()
 * @ORM\\Entity(repositoryClass=\"Plugin\\ProductOption\\Repository\\ConfigRepository\")
 */
class ProductOptionConfig extends \\Eccube\\Entity\\AbstractEntity
{
    const RANGE_NAME = 'range';

    const BY_ALL = 1;
    const BY_SHIPPING = 2;
    /**
     * @var string
     *
     * @ORM\\Column(name=\"name\", type=\"string\", nullable=false, length=255)
     * @ORM\\Id
     */
    private \$name;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"value\", type=\"string\", nullable=true, length=255)
     */
    private \$value;

    public function setName(\$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    public function getName()
    {
        return \$this->name;
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
}", "ProductOption/Entity/ProductOptionConfig.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Entity/ProductOptionConfig.php");
    }
}
