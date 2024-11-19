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

/* ProductOption/Form/Extension/ShippingMultipleExtension.php */
class __TwigTemplate_883b326ed11f16fde4b4b4f1ae1f9ec85e4644fc5466c74aeb7713a9a4968d28 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Extension/ShippingMultipleExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Extension/ShippingMultipleExtension.php"));

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

namespace Plugin\\ProductOption\\Form\\Extension;

use Eccube\\Repository\\ShippingRepository;
use Eccube\\Form\\Type\\ShippingMultipleType;
use Eccube\\Form\\Type\\ShippingMultipleItemType;
use Plugin\\ProductOption\\Util\\CommonUtil;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class ShippingMultipleExtension extends AbstractTypeExtension
{

    /**
     * @var ShippingRepository
     */
    protected \$shippingRepository;

    /**
     * ShippingMultipleType constructor.
     *
     * @param ShippingRepository \$shippingRepository
     */
    public function __construct(ShippingRepository \$shippingRepository)
    {
        \$this->shippingRepository = \$shippingRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$build_options)
    {
        \$builder
            ->addEventListener(FormEvents::POST_SET_DATA, function (\$event) {
                /** @var \\Eccube\\Entity\\OrderItem \$data */
                \$data = \$event->getData();
                /** @var \\Symfony\\Component\\Form\\Form \$form */
                \$form = \$event->getForm();

                if (is_null(\$data)) {
                    return;
                }

                \$shippings = \$this->shippingRepository->findShippingsProduct(\$data->getOrder(), \$data->getProductClass());

                \$setShippings = [];
                // Add product class for each shipping on view
                foreach (\$shippings as \$key => \$shipping) {
                    \$flg = true;
                    foreach(\$shipping->getProductOrderItems() as \$orderItem){
                        if(CommonUtil::compareArray(unserialize(\$data->getOptionSerial()),unserialize(\$orderItem->getOptionSerial()))){
                            \$flg = false;
                            break;
                        }
                    }
                    if(\$flg)continue;
                    \$shipping->setProductClassOfTemp(\$data->getProductClass());
                    \$shipping->setOptionOfTemp(\$data->getOptionSerial());
                    \$shippingTmp = clone \$shipping;
                    \$setShippings[] = \$shippingTmp;
                }
                \$form
                    ->add('shipping', CollectionType::class, [
                        'entry_type' => ShippingMultipleItemType::class,
                        'data' => \$setShippings,
                        'allow_add' => true,
                        'allow_delete' => true,
                    ]);
            });
    }


    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ShippingMultipleType::class;
    }

    public function getExtendedTypes(): iterable
    {
        return [ShippingMultipleType::class];
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Form/Extension/ShippingMultipleExtension.php";
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

namespace Plugin\\ProductOption\\Form\\Extension;

use Eccube\\Repository\\ShippingRepository;
use Eccube\\Form\\Type\\ShippingMultipleType;
use Eccube\\Form\\Type\\ShippingMultipleItemType;
use Plugin\\ProductOption\\Util\\CommonUtil;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class ShippingMultipleExtension extends AbstractTypeExtension
{

    /**
     * @var ShippingRepository
     */
    protected \$shippingRepository;

    /**
     * ShippingMultipleType constructor.
     *
     * @param ShippingRepository \$shippingRepository
     */
    public function __construct(ShippingRepository \$shippingRepository)
    {
        \$this->shippingRepository = \$shippingRepository;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$build_options)
    {
        \$builder
            ->addEventListener(FormEvents::POST_SET_DATA, function (\$event) {
                /** @var \\Eccube\\Entity\\OrderItem \$data */
                \$data = \$event->getData();
                /** @var \\Symfony\\Component\\Form\\Form \$form */
                \$form = \$event->getForm();

                if (is_null(\$data)) {
                    return;
                }

                \$shippings = \$this->shippingRepository->findShippingsProduct(\$data->getOrder(), \$data->getProductClass());

                \$setShippings = [];
                // Add product class for each shipping on view
                foreach (\$shippings as \$key => \$shipping) {
                    \$flg = true;
                    foreach(\$shipping->getProductOrderItems() as \$orderItem){
                        if(CommonUtil::compareArray(unserialize(\$data->getOptionSerial()),unserialize(\$orderItem->getOptionSerial()))){
                            \$flg = false;
                            break;
                        }
                    }
                    if(\$flg)continue;
                    \$shipping->setProductClassOfTemp(\$data->getProductClass());
                    \$shipping->setOptionOfTemp(\$data->getOptionSerial());
                    \$shippingTmp = clone \$shipping;
                    \$setShippings[] = \$shippingTmp;
                }
                \$form
                    ->add('shipping', CollectionType::class, [
                        'entry_type' => ShippingMultipleItemType::class,
                        'data' => \$setShippings,
                        'allow_add' => true,
                        'allow_delete' => true,
                    ]);
            });
    }


    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ShippingMultipleType::class;
    }

    public function getExtendedTypes(): iterable
    {
        return [ShippingMultipleType::class];
    }

}
", "ProductOption/Form/Extension/ShippingMultipleExtension.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Form/Extension/ShippingMultipleExtension.php");
    }
}
