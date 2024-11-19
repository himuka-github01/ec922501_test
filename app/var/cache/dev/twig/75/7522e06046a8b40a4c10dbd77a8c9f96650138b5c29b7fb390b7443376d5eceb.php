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

/* ProductOption/Form/Type/Admin/ProductOptionDesignType.php */
class __TwigTemplate_afd7676ffdd15be5c9d5efd16d995c9bc950ccd5536501e68618a940fa8e88be extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Type/Admin/ProductOptionDesignType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Type/Admin/ProductOptionDesignType.php"));

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

use Eccube\\Form\\Validator\\TwigLint;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\OptionsResolver\\OptionsResolverInterface;

class ProductOptionDesignType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('option_html', Type\\TextareaType::class, [
                'label' => trans('productoption.admin.content.label.option'),
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new TwigLint(),
                ],
            ])
            ->add('description_html', Type\\TextareaType::class, [
                'label' => trans('productoption.admin.content.label.description'),
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new TwigLint(),
                ],
            ])
            ->add('css_html', Type\\TextareaType::class, [
                'label' => trans('productoption.admin.content.label.css'),
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new TwigLint(),
                ],
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
        return "ProductOption/Form/Type/Admin/ProductOptionDesignType.php";
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

use Eccube\\Form\\Validator\\TwigLint;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\OptionsResolver\\OptionsResolverInterface;

class ProductOptionDesignType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('option_html', Type\\TextareaType::class, [
                'label' => trans('productoption.admin.content.label.option'),
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new TwigLint(),
                ],
            ])
            ->add('description_html', Type\\TextareaType::class, [
                'label' => trans('productoption.admin.content.label.description'),
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new TwigLint(),
                ],
            ])
            ->add('css_html', Type\\TextareaType::class, [
                'label' => trans('productoption.admin.content.label.css'),
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Assert\\NotBlank(),
                    new TwigLint(),
                ],
            ])
        ;

    }


}
", "ProductOption/Form/Type/Admin/ProductOptionDesignType.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Form/Type/Admin/ProductOptionDesignType.php");
    }
}
