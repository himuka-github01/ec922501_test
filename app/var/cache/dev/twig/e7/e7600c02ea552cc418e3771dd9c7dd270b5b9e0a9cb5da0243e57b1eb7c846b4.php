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

/* @ProductOption/admin/Order/order_item_prototype.twig */
class __TwigTemplate_074a553ee739bcc12bac61dd34ef58f77d783541cc03280d41eff783a55f98d5 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Order/order_item_prototype.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Order/order_item_prototype.twig"));

        // line 10
        echo "
<tr class=\"d-none\">
    <td>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 13, $this->source); })()), "product_name", [], "any", false, false, false, 13), 'widget');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 14, $this->source); })()), "ProductClass", [], "any", false, false, false, 14), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 15, $this->source); })()), "order_item_type", [], "any", false, false, false, 15), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 16, $this->source); })()), "price", [], "any", false, false, false, 16), 'widget');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 17, $this->source); })()), "quantity", [], "any", false, false, false, 17), 'widget');
        echo "
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "tax_type", [], "any", true, true, false, 18)) {
            echo "}
            ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 19, $this->source); })()), "tax_type", [], "any", false, false, false, 19), 'widget');
            echo "
        ";
        }
        // line 20
        echo "}
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderItemForm"]) || array_key_exists("orderItemForm", $context) ? $context["orderItemForm"] : (function () { throw new RuntimeError('Variable "orderItemForm" does not exist.', 21, $this->source); })()), "option_serial", [], "any", false, false, false, 21), 'widget');
        echo "
    </td>
</tr>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Order/order_item_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  77 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  43 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
#}

<tr class=\"d-none\">
    <td>
        {{ form_widget(orderItemForm.product_name) }}
        {{ form_widget(orderItemForm.ProductClass) }}
        {{ form_widget(orderItemForm.order_item_type) }}
        {{ form_widget(orderItemForm.price) }}
        {{ form_widget(orderItemForm.quantity) }}
        {% if orderItemForm.tax_type is defined %}}
            {{ form_widget(orderItemForm.tax_type) }}
        {% endif %}}
        {{ form_widget(orderItemForm.option_serial) }}
    </td>
</tr>", "@ProductOption/admin/Order/order_item_prototype.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Order/order_item_prototype.twig");
    }
}
