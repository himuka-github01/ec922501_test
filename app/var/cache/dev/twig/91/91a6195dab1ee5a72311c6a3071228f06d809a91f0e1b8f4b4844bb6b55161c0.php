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

/* @ProductOption/admin/Product/product_edit.twig */
class __TwigTemplate_dca473140916362898de6dbfc3882a401d9984b5137273b147af8d90a8c4388a extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/product_edit.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/product_edit.twig"));

        // line 10
        echo "
";
        // line 11
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "<div class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                     title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.tooltip.product.product_option"), "html", null, true);
            echo "\">
                <span class=\"card-title\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.product_option__card_title"), "html", null, true);
            echo "
                    <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                </span>
                </div>
            </div>
            <div class=\"col-4 text-right\">
                <a data-toggle=\"collapse\" href=\"#productOption\" aria-expanded=\"false\"
                   aria-controls=\"productOption\">
                    <i class=\"fa fa-angle-up fa-lg\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"collapse show ec-cardCollapse\" id=\"productOption\">
        <div class=\"card-body\">
            ";
            // line 34
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 34, $this->source); })()), "ProductOptions", [], "any", false, false, false, 34)) > 0)) {
                // line 35
                echo "                <table class=\"table table-striped\">
                    <thead class=\"table-active\">
                    <th class=\"pl-3 pt-2 pb-2\">";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.backend_name"), "html", null, true);
                echo "</th>
                    <th class=\"pt-2 pb-2\">";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.name"), "html", null, true);
                echo "</th>
                    <th class=\"pt-2 pb-2\">";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.type"), "html", null, true);
                echo "</th>
                    </thead>
                    <tbody>
                    ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 42, $this->source); })()), "ProductOptions", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                    // line 43
                    echo "                        <tr>
                            <td class=\"pl-3\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 44), "backend_name", [], "any", false, false, false, 44), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrType"]) || array_key_exists("arrType", $context) ? $context["arrType"] : (function () { throw new RuntimeError('Variable "arrType" does not exist.', 46, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46), [], "array", false, false, false, 46), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    </tbody>
                </table>
            ";
            }
            // line 52
            echo "
            <div class=\"d-block text-center text-center\">
                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_product_option", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 54, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                   title=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.option.rank.assign")]), "html", null, true);
            // line 57
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.product_option__confirm_of_product"), "html", null, true);
            echo "</a>
            </div>
            <div class=\"d-block text-center text-center\" style=\"margin-top:10px;\">
                <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_product_option_rank", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 60, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                   title=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.option.rank.sort")]), "html", null, true);
            // line 63
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.product_option_rank__confirm_of_product"), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Product/product_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  148 => 61,  144 => 60,  137 => 57,  135 => 55,  131 => 54,  127 => 52,  122 => 49,  113 => 46,  109 => 45,  105 => 44,  102 => 43,  98 => 42,  92 => 39,  88 => 38,  84 => 37,  80 => 35,  78 => 34,  60 => 19,  55 => 17,  48 => 12,  46 => 11,  43 => 10,);
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

{% if id is not null %}
<div class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                     title=\"{{ 'productoption.tooltip.product.product_option'|trans }}\">
                <span class=\"card-title\">
                    {{ 'productoption.admin.product.product_option__card_title'|trans }}
                    <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                </span>
                </div>
            </div>
            <div class=\"col-4 text-right\">
                <a data-toggle=\"collapse\" href=\"#productOption\" aria-expanded=\"false\"
                   aria-controls=\"productOption\">
                    <i class=\"fa fa-angle-up fa-lg\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"collapse show ec-cardCollapse\" id=\"productOption\">
        <div class=\"card-body\">
            {% if Product.ProductOptions|length > 0 %}
                <table class=\"table table-striped\">
                    <thead class=\"table-active\">
                    <th class=\"pl-3 pt-2 pb-2\">{{ 'productoption.admin.product.option.backend_name'|trans }}</th>
                    <th class=\"pt-2 pb-2\">{{ 'productoption.admin.product.option.name'|trans }}</th>
                    <th class=\"pt-2 pb-2\">{{ 'productoption.admin.product.option.type'|trans }}</th>
                    </thead>
                    <tbody>
                    {% for ProductOption in Product.ProductOptions %}
                        <tr>
                            <td class=\"pl-3\">{{ ProductOption.Option.backend_name }}</td>
                            <td>{{ ProductOption.Option.name }}</td>
                            <td>{{ arrType[ProductOption.Option.type] }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            <div class=\"d-block text-center text-center\">
                <a href=\"{{ path('admin_product_product_option', { 'id' : id }) }}\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                   title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                       '%name%' : 'productoption.admin.product.option.option.rank.assign'|trans
                   }) }}\">{{ 'productoption.admin.product.product_option__confirm_of_product'|trans }}</a>
            </div>
            <div class=\"d-block text-center text-center\" style=\"margin-top:10px;\">
                <a href=\"{{ path('admin_product_product_option_rank', { 'id' : id }) }}\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                   title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                       '%name%' : 'productoption.admin.product.option.option.rank.sort'|trans
                   }) }}\">{{ 'productoption.admin.product.product_option_rank__confirm_of_product'|trans }}</a>
            </div>
        </div>
    </div>
</div>
{% endif %}
", "@ProductOption/admin/Product/product_edit.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Product/product_edit.twig");
    }
}
