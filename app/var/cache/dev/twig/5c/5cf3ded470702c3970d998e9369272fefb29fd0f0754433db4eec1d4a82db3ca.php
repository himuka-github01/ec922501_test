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

/* ProductOption/Form/Extension/ShippingMultipleItemExtension.php */
class __TwigTemplate_feabf06c8b56264ad642779a02c095d41028f2f99c6a801495c03b65151c0ae6 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Extension/ShippingMultipleItemExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Form/Extension/ShippingMultipleItemExtension.php"));

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

use Eccube\\Form\\Type\\ShippingMultipleItemType;
use Plugin\\ProductOption\\Util\\CommonUtil;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolverInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\ExecutionContext;

class ShippingMultipleItemExtension extends AbstractTypeExtension
{

    public function buildForm(FormBuilderInterface \$builder, array \$build_options)
    {
        \$builder
            ->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) {
                /** @var \\Eccube\\Entity\\Shipping \$data */
                \$data = \$event->getData();
                /** @var \\Symfony\\Component\\Form\\Form \$form */
                \$form = \$event->getForm();

                if (is_null(\$data)) {
                    return;
                }

                \$quantity = 0;
                // Check all shipment items
                foreach (\$data->getProductOrderItems() as \$OrderItem) {
                    // Check item distinct for each quantity
                    if (\$data->getProductClassOfTemp()->getId() == \$OrderItem->getProductClass()->getId() && CommonUtil::compareArray(unserialize(\$data->getOptionOfTemp()),unserialize(\$OrderItem->getOptionSerial()))) {
                        \$quantity = \$OrderItem->getQuantity();
                        break;
                    }
                }
                \$form['quantity']->setData(\$quantity);
            });
    }


    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ShippingMultipleItemType::class;
    }

    public function getExtendedTypes(): iterable
    {
        return [ShippingMultipleItemType::class];
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Form/Extension/ShippingMultipleItemExtension.php";
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

use Eccube\\Form\\Type\\ShippingMultipleItemType;
use Plugin\\ProductOption\\Util\\CommonUtil;
use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolverInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\ExecutionContext;

class ShippingMultipleItemExtension extends AbstractTypeExtension
{

    public function buildForm(FormBuilderInterface \$builder, array \$build_options)
    {
        \$builder
            ->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent \$event) {
                /** @var \\Eccube\\Entity\\Shipping \$data */
                \$data = \$event->getData();
                /** @var \\Symfony\\Component\\Form\\Form \$form */
                \$form = \$event->getForm();

                if (is_null(\$data)) {
                    return;
                }

                \$quantity = 0;
                // Check all shipment items
                foreach (\$data->getProductOrderItems() as \$OrderItem) {
                    // Check item distinct for each quantity
                    if (\$data->getProductClassOfTemp()->getId() == \$OrderItem->getProductClass()->getId() && CommonUtil::compareArray(unserialize(\$data->getOptionOfTemp()),unserialize(\$OrderItem->getOptionSerial()))) {
                        \$quantity = \$OrderItem->getQuantity();
                        break;
                    }
                }
                \$form['quantity']->setData(\$quantity);
            });
    }


    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return ShippingMultipleItemType::class;
    }

    public function getExtendedTypes(): iterable
    {
        return [ShippingMultipleItemType::class];
    }

}
", "ProductOption/Form/Extension/ShippingMultipleItemExtension.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Form/Extension/ShippingMultipleItemExtension.php");
    }
}
