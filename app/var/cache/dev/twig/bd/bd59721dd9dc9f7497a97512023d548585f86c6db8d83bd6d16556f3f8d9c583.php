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

/* pager.twig */
class __TwigTemplate_1f4e916cbfe2d92b2dc0d06894d368a51bc8e8e456e843704f4778d1aba87cc1 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pager.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pager.twig"));

        // line 11
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 11, $this->source); })()), "pageCount", [], "any", false, false, false, 11) > 1)) {
            // line 12
            echo "    <ul class=\"ec-pager\">
        ";
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 14, $this->source); })()), "firstPageInRange", [], "any", false, false, false, 14) != 1)) {
                // line 15
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "all", [], "any", false, false, false, 18), ["pageno" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 18, $this->source); })()), "first", [], "any", false, false, false, 18)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.first"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 21
            echo "
        ";
            // line 23
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, false, 23)) {
                // line 24
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 26
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "query", [], "any", false, false, false, 27), "all", [], "any", false, false, false, 27), ["pageno" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 27, $this->source); })()), "previous", [], "any", false, false, false, 27)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.prev"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 29
            echo "
        ";
            // line 31
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 31, $this->source); })()), "firstPageInRange", [], "any", false, false, false, 31) != 1)) {
                // line 32
                echo "            <li class=\"ec-pager__item\">...</li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 35, $this->source); })()), "pagesInRange", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "            ";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 36, $this->source); })()), "current", [], "any", false, false, false, 36))) {
                    // line 37
                    echo "                <li class=\"ec-pager__item--active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 38
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "attributes", [], "any", false, false, false, 38), "get", [0 => "_route"], "method", false, false, false, 38), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 39
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "all", [], "any", false, false, false, 39), ["pageno" => $context["page"]])), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                } else {
                    // line 41
                    echo "                <li class=\"ec-pager__item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 42
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", [0 => "_route"], "method", false, false, false, 42), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 43
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "query", [], "any", false, false, false, 43), "all", [], "any", false, false, false, 43), ["pageno" => $context["page"]])), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo " </a></li>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 48
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 48, $this->source); })()), "last", [], "any", false, false, false, 48) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 48, $this->source); })()), "lastPageInRange", [], "any", false, false, false, 48))) {
                // line 49
                echo "            <li class=\"ec-pager__item\">...</li>
        ";
            }
            // line 51
            echo "
        ";
            // line 53
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, false, 53)) {
                // line 54
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 56
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", [0 => "_route"], "method", false, false, false, 56), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 57
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "query", [], "any", false, false, false, 57), "all", [], "any", false, false, false, 57), ["pageno" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 57, $this->source); })()), "next", [], "any", false, false, false, 57)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.next"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 59
            echo "
        ";
            // line 61
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 61, $this->source); })()), "last", [], "any", false, false, false, 61) != twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 61, $this->source); })()), "lastPageInRange", [], "any", false, false, false, 61))) {
                // line 62
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 64
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", [0 => "_route"], "method", false, false, false, 64), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 65
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65), "all", [], "any", false, false, false, 65), ["pageno" => twig_get_attribute($this->env, $this->source, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 65, $this->source); })()), "last", [], "any", false, false, false, 65)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.last"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 67
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 67,  167 => 65,  166 => 64,  165 => 63,  162 => 62,  159 => 61,  156 => 59,  149 => 57,  148 => 56,  147 => 55,  144 => 54,  141 => 53,  138 => 51,  134 => 49,  131 => 48,  128 => 46,  122 => 45,  115 => 43,  114 => 42,  112 => 41,  105 => 39,  104 => 38,  102 => 37,  99 => 36,  95 => 35,  92 => 34,  88 => 32,  85 => 31,  82 => 29,  75 => 27,  74 => 26,  73 => 25,  70 => 24,  67 => 23,  64 => 21,  56 => 18,  55 => 17,  54 => 16,  51 => 15,  48 => 14,  45 => 12,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% if pages.pageCount > 1 %}
    <ul class=\"ec-pager\">
        {# 最初へ #}
        {% if pages.firstPageInRange != 1 %}
            <li class=\"ec-pager__item\">
                <a href=\"{{ path(
                app.request.attributes.get('_route'),
                app.request.query.all|merge({'pageno': pages.first})) }}\">{{ 'common.first'|trans }}</a></li>

        {% endif %}

        {# 前へ #}
        {% if pages.previous is defined %}
            <li class=\"ec-pager__item\">
                <a href=\"{{ path(
                app.request.attributes.get('_route'),
                app.request.query.all|merge({'pageno': pages.previous})) }}\">{{ 'common.prev'|trans }}</a></li>
        {% endif %}

        {# 1ページリンクが表示されない場合、「...」を表示 #}
        {% if pages.firstPageInRange != 1 %}
            <li class=\"ec-pager__item\">...</li>
        {% endif %}

        {% for page in pages.pagesInRange %}
            {% if page == pages.current %}
                <li class=\"ec-pager__item--active\"><a href=\"{{ path(
                    app.request.attributes.get('_route'),
                    app.request.query.all|merge({'pageno': page})) }}\"> {{ page }} </a></li>
            {% else %}
                <li class=\"ec-pager__item\"><a href=\"{{ path(
                    app.request.attributes.get('_route'),
                    app.request.query.all|merge({'pageno': page})) }}\"> {{ page }} </a></li>
            {% endif %}
        {% endfor %}

        {# 最終ページリンクが表示されない場合、「...」を表示 #}
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"ec-pager__item\">...</li>
        {% endif %}

        {# 次へ #}
        {% if pages.next is defined %}
            <li class=\"ec-pager__item\">
                <a href=\"{{ path(
                app.request.attributes.get('_route'),
                app.request.query.all|merge({'pageno': pages.next})) }}\">{{ 'common.next'|trans }}</a></li>
        {% endif %}

        {# 最後へ #}
        {% if pages.last != pages.lastPageInRange %}
            <li class=\"ec-pager__item\">
                <a href=\"{{ path(
                app.request.attributes.get('_route'),
                app.request.query.all|merge({'pageno': pages.last})) }}\">{{ 'common.last'|trans }}</a></li>
        {% endif %}
    </ul>
{% endif %}
", "pager.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/pager.twig");
    }
}
