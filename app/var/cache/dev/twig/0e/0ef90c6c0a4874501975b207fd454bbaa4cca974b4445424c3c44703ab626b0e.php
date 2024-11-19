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

/* ProductOption/Form/Type/Admin/OptionTextCategoryType.php */
class __TwigTemplate_631b504e925c6ee321811c5fa96fe338ea28ff790c240842d88b154706f44469 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Type/Admin/OptionTextCategoryType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Type/Admin/OptionTextCategoryType.php"));

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

use Eccube\\Common\\EccubeConfig;
use Eccube\\Form\\Type\\PriceType;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolverInterface;

class OptionTextCategoryType extends AbstractType
{

    protected \$eccubeConfig;

    public function __construct(
        EccubeConfig \$eccubeConfig
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {

        \$arrDeliveryFreeSelect[OptionCategory::OFF] = trans(\"productoption.option.category.delivery_free.off\");
        \$arrDeliveryFreeSelect[OptionCategory::ON] = trans(\"productoption.option.category.delivery_free.on\");

        \$arrMultipleSelect[OptionCategory::OFF] = trans(\"productoption.option.category.multiple.off\");
        \$arrMultipleSelect[OptionCategory::ON] = trans(\"productoption.option.category.multiple.on\");

        \$builder
                ->add('name', Type\\TextType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.placeholder\"),
                    'required' => false,
                ])
                ->add('option_image', Type\\FileType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.image\"),
                    'multiple' => true,
                    'required' => false,
                    'mapped' => false,
                ])
                ->add('images', Type\\CollectionType::class, [
                    'entry_type' => Type\\HiddenType::class,
                    'prototype' => true,
                    'mapped' => false,
                    'allow_add' => true,
                    'allow_delete' => true,
                ])
                ->add('add_images', Type\\CollectionType::class, [
                    'entry_type' => Type\\HiddenType::class,
                    'prototype' => true,
                    'mapped' => false,
                    'allow_add' => true,
                    'allow_delete' => true,
                ])
                ->add('delete_images', Type\\CollectionType::class, [
                    'entry_type' => Type\\HiddenType::class,
                    'prototype' => true,
                    'mapped' => false,
                    'allow_add' => true,
                    'allow_delete' => true,
                ])
                ->add('value', PriceType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.price\"),
                    'required' => false,
                    'accept_minus' => true,
                ])
                ->add('delivery_free_flg', Type\\ChoiceType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.delivery_free_flg\"),
                    'choices' => array_flip(\$arrDeliveryFreeSelect),
                ])
                ->add('multiple_flg', Type\\ChoiceType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.multiple\"),
                    'choices' => array_flip(\$arrMultipleSelect),
                ])
                ->add('return_link', Type\\HiddenType::class, [
                    'mapped' => false,
                ])
        ;

        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            /** @var FormInterface \$form */
            \$form = \$event->getForm();
            \$saveImgDir = \$this->eccubeConfig['eccube_save_image_dir'];
            \$tempImgDir = \$this->eccubeConfig['eccube_temp_image_dir'];
            \$this->validateFilePath(\$form->get('delete_images'), [\$saveImgDir, \$tempImgDir]);
            \$this->validateFilePath(\$form->get('add_images'), [\$tempImgDir]);
        });
    }

    /**
    * 指定された複数ディレクトリのうち、いずれかのディレクトリ以下にファイルが存在するかを確認。
    *
    * @param \$form FormInterface
    * @param \$dirs array
    */
    private function validateFilePath(\$form, \$dirs)
    {
        foreach (\$form->getData() as \$fileName) {
            \$fileInDir = array_filter(\$dirs, function (\$dir) use (\$fileName) {
                \$filePath = realpath(\$dir.'/'.\$fileName);
                \$topDirPath = realpath(\$dir);
                return strpos(\$filePath, \$topDirPath) === 0 && \$filePath !== \$topDirPath;
            });
            if (!\$fileInDir) {
                \$form->getRoot()['option_image']->addError(new FormError(trans('productoption.type.image.path.error')));
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Form/Type/Admin/OptionTextCategoryType.php";
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

use Eccube\\Common\\EccubeConfig;
use Eccube\\Form\\Type\\PriceType;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolverInterface;

class OptionTextCategoryType extends AbstractType
{

    protected \$eccubeConfig;

    public function __construct(
        EccubeConfig \$eccubeConfig
    ) {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {

        \$arrDeliveryFreeSelect[OptionCategory::OFF] = trans(\"productoption.option.category.delivery_free.off\");
        \$arrDeliveryFreeSelect[OptionCategory::ON] = trans(\"productoption.option.category.delivery_free.on\");

        \$arrMultipleSelect[OptionCategory::OFF] = trans(\"productoption.option.category.multiple.off\");
        \$arrMultipleSelect[OptionCategory::ON] = trans(\"productoption.option.category.multiple.on\");

        \$builder
                ->add('name', Type\\TextType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.placeholder\"),
                    'required' => false,
                ])
                ->add('option_image', Type\\FileType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.image\"),
                    'multiple' => true,
                    'required' => false,
                    'mapped' => false,
                ])
                ->add('images', Type\\CollectionType::class, [
                    'entry_type' => Type\\HiddenType::class,
                    'prototype' => true,
                    'mapped' => false,
                    'allow_add' => true,
                    'allow_delete' => true,
                ])
                ->add('add_images', Type\\CollectionType::class, [
                    'entry_type' => Type\\HiddenType::class,
                    'prototype' => true,
                    'mapped' => false,
                    'allow_add' => true,
                    'allow_delete' => true,
                ])
                ->add('delete_images', Type\\CollectionType::class, [
                    'entry_type' => Type\\HiddenType::class,
                    'prototype' => true,
                    'mapped' => false,
                    'allow_add' => true,
                    'allow_delete' => true,
                ])
                ->add('value', PriceType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.price\"),
                    'required' => false,
                    'accept_minus' => true,
                ])
                ->add('delivery_free_flg', Type\\ChoiceType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.delivery_free_flg\"),
                    'choices' => array_flip(\$arrDeliveryFreeSelect),
                ])
                ->add('multiple_flg', Type\\ChoiceType::class, [
                    'label' => trans(\"productoption.admin.product.option.category.multiple\"),
                    'choices' => array_flip(\$arrMultipleSelect),
                ])
                ->add('return_link', Type\\HiddenType::class, [
                    'mapped' => false,
                ])
        ;

        \$builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent \$event) {
            /** @var FormInterface \$form */
            \$form = \$event->getForm();
            \$saveImgDir = \$this->eccubeConfig['eccube_save_image_dir'];
            \$tempImgDir = \$this->eccubeConfig['eccube_temp_image_dir'];
            \$this->validateFilePath(\$form->get('delete_images'), [\$saveImgDir, \$tempImgDir]);
            \$this->validateFilePath(\$form->get('add_images'), [\$tempImgDir]);
        });
    }

    /**
    * 指定された複数ディレクトリのうち、いずれかのディレクトリ以下にファイルが存在するかを確認。
    *
    * @param \$form FormInterface
    * @param \$dirs array
    */
    private function validateFilePath(\$form, \$dirs)
    {
        foreach (\$form->getData() as \$fileName) {
            \$fileInDir = array_filter(\$dirs, function (\$dir) use (\$fileName) {
                \$filePath = realpath(\$dir.'/'.\$fileName);
                \$topDirPath = realpath(\$dir);
                return strpos(\$filePath, \$topDirPath) === 0 && \$filePath !== \$topDirPath;
            });
            if (!\$fileInDir) {
                \$form->getRoot()['option_image']->addError(new FormError(trans('productoption.type.image.path.error')));
            }
        }
    }
}
", "ProductOption/Form/Type/Admin/OptionTextCategoryType.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Form/Type/Admin/OptionTextCategoryType.php");
    }
}
