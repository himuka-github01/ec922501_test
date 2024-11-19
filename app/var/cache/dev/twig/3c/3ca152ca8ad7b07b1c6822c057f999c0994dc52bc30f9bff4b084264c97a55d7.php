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

/* @ProductOption/admin/Order/search_product_option.twig */
class __TwigTemplate_c55f573524ef2e0fd42f1207db5e541d03de5f8b8a5f85a619856a169778f83e extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Order/search_product_option.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Order/search_product_option.twig"));

        // line 10
        echo "
";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 11, $this->source); })()), "ProductOptions", [], "any", false, false, false, 11)) > 0)) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 12, $this->source); })()), "ProductOptions", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                // line 13
                echo "        ";
                $context["value"] = ("productoption" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13));
                // line 14
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 14, $this->source); })()), [], "array", true, true, false, 14)) {
                    // line 15
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DATE_TYPE"))) {
                        // line 16
                        echo "                <div class=\"row\">
                    <div class=\"col-4 pr-0\"><span>";
                        // line 17
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 17, $this->source); })()), [], "array", false, false, false, 17), 'label');
                        echo "</span></div>
                    <div class=\"col-8 text-left pl-0\" style=\"position: relative\">
                        ";
                        // line 19
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()), [], "array", false, false, false, 19), 'widget', ["attr" => ["data-target" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 19, $this->source); })()), [], "array", false, false, false, 19), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19))]]);
                        echo "
                    </div>
                </div>
            ";
                    } else {
                        // line 23
                        echo "                <div class=\"row\">
                    <div class=\"col-4 pr-0\"><span>";
                        // line 24
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24), 'label');
                        echo "</span></div>
                    <div class=\"col-8 text-left pl-0\">
                        ";
                        // line 26
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26), 'widget');
                        echo "
                    </div>
                </div>
            ";
                    }
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Order/search_product_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  92 => 30,  85 => 26,  80 => 24,  77 => 23,  70 => 19,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  48 => 12,  46 => 11,  43 => 10,);
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

{% if Product.ProductOptions|length > 0 %}
    {% for ProductOption in Product.ProductOptions %}
        {% set value = 'productoption' ~ ProductOption.Option.id %}
        {% if form[value] is defined %}
            {% if ProductOption.Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DATE_TYPE') %}
                <div class=\"row\">
                    <div class=\"col-4 pr-0\"><span>{{ form_label(form[value]) }}</span></div>
                    <div class=\"col-8 text-left pl-0\" style=\"position: relative\">
                        {{ form_widget(form[value], { attr : { 'data-target' : '#'~form[value].vars.id }}) }}
                    </div>
                </div>
            {% else %}
                <div class=\"row\">
                    <div class=\"col-4 pr-0\"><span>{{ form_label(form[value]) }}</span></div>
                    <div class=\"col-8 text-left pl-0\">
                        {{ form_widget(form[value]) }}
                    </div>
                </div>
            {% endif %}
        {% endif %}
    {% endfor %}
{% endif %}
", "@ProductOption/admin/Order/search_product_option.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Order/search_product_option.twig");
    }
}
