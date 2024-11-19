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

/* ProductOption/Form/Type/Admin/ConfigType.php */
class __TwigTemplate_eda0c769034080187cc4e28f815cbadebdd34263162055d64768317770c264c4 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Type/Admin/ConfigType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Type/Admin/ConfigType.php"));

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

namespace Plugin\\ProductOption\\Form\\Type\\Admin;

use Plugin\\ProductOption\\Entity\\ProductOptionConfig;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\OptionsResolver\\OptionsResolverInterface;

class ConfigType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$arrRange[ProductOptionConfig::BY_ALL] = trans(\"productoption.admin.config.label.range.all\");
        \$arrRange[ProductOptionConfig::BY_SHIPPING] = trans(\"productoption.admin.config.label.range.shipping\");

        \$builder
            ->add(ProductOptionConfig::RANGE_NAME, Type\\ChoiceType::class, [
                'label' => 'productoption.admin.config.label.range',
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'choices'  => array_flip(\$arrRange),
            ])
        ;

    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Form/Type/Admin/ConfigType.php";
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

namespace Plugin\\ProductOption\\Form\\Type\\Admin;

use Plugin\\ProductOption\\Entity\\ProductOptionConfig;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\OptionsResolver\\OptionsResolverInterface;

class ConfigType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$arrRange[ProductOptionConfig::BY_ALL] = trans(\"productoption.admin.config.label.range.all\");
        \$arrRange[ProductOptionConfig::BY_SHIPPING] = trans(\"productoption.admin.config.label.range.shipping\");

        \$builder
            ->add(ProductOptionConfig::RANGE_NAME, Type\\ChoiceType::class, [
                'label' => 'productoption.admin.config.label.range',
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'choices'  => array_flip(\$arrRange),
            ])
        ;

    }
}
", "ProductOption/Form/Type/Admin/ConfigType.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Form/Type/Admin/ConfigType.php");
    }
}
