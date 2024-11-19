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
class __TwigTemplate_419fa413f3526fcc17bb93c894182a8eb53633ac8191f611fe7b4f7244f9bdf3 extends \Eccube\Twig\Template
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
        // line 10
        echo "
<tr class=\"d-none\">
    <td>
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "product_name", [], "any", false, false, false, 13), 'widget');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "ProductClass", [], "any", false, false, false, 14), 'widget');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "order_item_type", [], "any", false, false, false, 15), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "price", [], "any", false, false, false, 16), 'widget');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "quantity", [], "any", false, false, false, 17), 'widget');
        echo "
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "tax_type", [], "any", true, true, false, 18)) {
            echo "}
            ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "tax_type", [], "any", false, false, false, 19), 'widget');
            echo "
        ";
        }
        // line 20
        echo "}
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["orderItemForm"] ?? null), "option_serial", [], "any", false, false, false, 21), 'widget');
        echo "
    </td>
</tr>";
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
        return array (  74 => 21,  71 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ProductOption/admin/Order/order_item_prototype.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Order/order_item_prototype.twig");
    }
}
