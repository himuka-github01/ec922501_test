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

/* @ProductOption/admin/Product/product_list.twig */
class __TwigTemplate_284b47cabe09e757d1e8caeaa510870ad428e4ee4bc322ecffa914223f339945 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/product_list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/product_list.twig"));

        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 12
            echo "    <div id=\"p";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12), "html", null, true);
            echo "\" style=\"display:none;\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_option", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "</div>
    <div id=\"pr";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), "html", null, true);
            echo "\" style=\"display:none;\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_option_rank", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "</div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
<div id=\"productoption_text\" style=\"display:none;\">
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.option"), "html", null, true);
        echo "
</div>

<script>
    \$(function() {
        var index = 6;
        \$('table th').each(function(i) {
            if(\$(this).text().match(/";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
        echo "/)){
                index = i;
            }
        });
        \$('table tr').each(function(i) {
            if (i != 0) {
                \$elem = \$('#p' + i);
                \$elem2 = \$('#pr' + i);
                if(\$elem.length !== 0){
                    \$('td:eq('+index+')', this).after('<td class=\"align-middle\"><a href=\"'+ \$elem.text() +'\"><button type=\"button\" class=\"btn page-link text-dark d-inline-block\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.list.option.label.assign"), "html", null, true);
        echo "</button></a><br><a href=\"'+ \$elem2.text() +'\"><button type=\"button\" style=\"margin-top:2px;\" class=\"btn page-link text-dark d-inline-block\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.list.option.label.sort"), "html", null, true);
        echo "</button></a></td>');
                    \$elem.remove();
                    \$elem2.remove();
                }
            } else {
                \$elem = \$('#productoption_text');
                if(\$elem.length !== 0){
                    \$('th:eq('+index+')', this).after('<th class=\"border-top-0 pt-2 pb-2\">'+ \$elem.text() +'</th>');
                    \$elem.remove();
                }
            }
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Product/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  102 => 24,  92 => 17,  88 => 15,  70 => 13,  63 => 12,  46 => 11,  43 => 10,);
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

{% for p in pagination %}
    <div id=\"p{{ loop.index }}\" style=\"display:none;\">{{ url('admin_product_product_option', { id : p.id }) }}</div>
    <div id=\"pr{{ loop.index }}\" style=\"display:none;\">{{ url('admin_product_product_option_rank', { id : p.id }) }}</div>
{% endfor %}

<div id=\"productoption_text\" style=\"display:none;\">
    {{ 'productoption.admin.common.option'|trans }}
</div>

<script>
    \$(function() {
        var index = 6;
        \$('table th').each(function(i) {
            if(\$(this).text().match(/{{'admin.product.stock'|trans}}/)){
                index = i;
            }
        });
        \$('table tr').each(function(i) {
            if (i != 0) {
                \$elem = \$('#p' + i);
                \$elem2 = \$('#pr' + i);
                if(\$elem.length !== 0){
                    \$('td:eq('+index+')', this).after('<td class=\"align-middle\"><a href=\"'+ \$elem.text() +'\"><button type=\"button\" class=\"btn page-link text-dark d-inline-block\">{{ 'productoption.admin.product.list.option.label.assign'|trans }}</button></a><br><a href=\"'+ \$elem2.text() +'\"><button type=\"button\" style=\"margin-top:2px;\" class=\"btn page-link text-dark d-inline-block\">{{ 'productoption.admin.product.list.option.label.sort'|trans }}</button></a></td>');
                    \$elem.remove();
                    \$elem2.remove();
                }
            } else {
                \$elem = \$('#productoption_text');
                if(\$elem.length !== 0){
                    \$('th:eq('+index+')', this).after('<th class=\"border-top-0 pt-2 pb-2\">'+ \$elem.text() +'</th>');
                    \$elem.remove();
                }
            }
        });
    });
</script>", "@ProductOption/admin/Product/product_list.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Product/product_list.twig");
    }
}
