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

/* @admin/Store/plugin_search.twig */
class __TwigTemplate_f368695d3bd146ddb9ef9568e16850b8c03d92cbe68477453b221f8b8e1909a6 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search.twig"));

        // line 14
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_owners_search"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_search.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_search.885"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_search.884"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 20
        echo "    <style type=\"text/css\">
        .border-bt {
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }
        #plugin-list a img{
            max-height: 180px;
        }
        #plugin-list .info{
            min-height: 50%;
        }
        .plugin-ver li span{
            display: inline-block;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 39
        if ((twig_length_filter($this->env, (isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 39, $this->source); })())) > 0)) {
            // line 40
            echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"row\">
                                <div class=\"col-12 p-4\">
                                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_owners_search", ["category_id" => $context["key"]]), "html", null, true);
                echo "\" class=\"px-3 text-dark\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 52
        echo "
                <form method=\"post\" action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_owners_search");
        echo "\" class=\"plugin-search\" name=\"search\">
                    <div class=\"c-outsideBlock\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 55, $this->source); })()), "_token", [], "any", false, false, false, 55), 'widget');
        echo "
                        <div class=\"c-outsideBlock__contents mb-4\">
                            <div class=\"row justify-content-start\">
                                <div class=\"col-3 pl-0\">
                                    <label class=\"col-form-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 59, $this->source); })()), "category_id", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59)), "html", null, true);
        echo "</label>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 60, $this->source); })()), "category_id", [], "any", false, false, false, 60), 'widget');
        echo "
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 63, $this->source); })()), "price_type", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "label", [], "any", false, false, false, 63)), "html", null, true);
        echo "</label>
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 64, $this->source); })()), "price_type", [], "any", false, false, false, 64), 'widget');
        echo "
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 67, $this->source); })()), "keyword", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "label", [], "any", false, false, false, 67)), "html", null, true);
        echo "</label>
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 68, $this->source); })()), "keyword", [], "any", false, false, false, 68), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"c-outsideBlock__contents mb-2 pl-0\">
                            <button class=\"btn btn-ec-conversion px-5 py-2\" type=\"submit\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.search_button"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-12 text-right\">
                            <div class=\"d-inline-block mr-2\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 79, $this->source); })()), "sort", [], "any", false, false, false, 79), 'widget', ["attr" => ["onchange" => "document.forms.search.submit();"]]);
        echo "
                            </div>
                            <div class=\"d-inline-block\">
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 82, $this->source); })()), "page_count", [], "any", false, false, false, 82), 'widget', ["attr" => ["onchange" => "document.forms.search.submit();"]]);
        echo "
                            </div>
                        </div>
                    </div>
                </form>

                <div id=\"plugin-list\" class=\"card rounded border-0 my-4\">
                    <div class=\"card-header\">
                        <h5>";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.search_results", ["%number%" => twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 90, $this->source); })())), "%total%" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 90, $this->source); })())]), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 93
        if ((twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 93, $this->source); })())) > 0)) {
            // line 94
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "                                <div class=\"row border-bt pb-2 mb-3\">
                                    ";
                // line 96
                echo twig_include($this->env, $context, "@admin/Store/plugin_search_panel.twig");
                echo "
                                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                        ";
        }
        // line 100
        echo "                    </div>

                    ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })()), "totalItemCount", [], "any", false, false, false, 102) > 0)) {
            // line 103
            echo "                        <div class=\"row justify-content-md-center mb-4\">
                            ";
            // line 104
            $this->loadTemplate("@admin/pager.twig", "@admin/Store/plugin_search.twig", 104)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 104, $this->source); })()), "paginationData", [], "any", false, false, false, 104), "routes" => "admin_store_plugin_owners_search_page"]));
            // line 105
            echo "                        </div>
                    ";
        }
        // line 107
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 107,  314 => 105,  312 => 104,  309 => 103,  307 => 102,  303 => 100,  300 => 99,  283 => 96,  280 => 95,  262 => 94,  260 => 93,  254 => 90,  243 => 82,  237 => 79,  228 => 73,  220 => 68,  216 => 67,  210 => 64,  206 => 63,  200 => 60,  196 => 59,  189 => 55,  184 => 53,  181 => 52,  174 => 47,  163 => 45,  159 => 44,  153 => 40,  151 => 39,  146 => 36,  136 => 35,  112 => 20,  102 => 19,  83 => 17,  64 => 16,  53 => 12,  51 => 14,  38 => 12,);
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

{% extends '@admin/default_frame.twig' %}

{% set menus = ['store', 'plugin', 'plugin_owners_search'] %}

{% block title %}{{'admin.store.plugin_search.885'|trans}}{% endblock %}
{% block sub_title %}{{'admin.store.plugin_search.884'|trans}}{% endblock %}

{% block stylesheet %}
    <style type=\"text/css\">
        .border-bt {
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }
        #plugin-list a img{
            max-height: 180px;
        }
        #plugin-list .info{
            min-height: 50%;
        }
        .plugin-ver li span{
            display: inline-block;
        }
    </style>
{% endblock %}
{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if Categories|length > 0 %}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"row\">
                                <div class=\"col-12 p-4\">
                                    {% for key,category in Categories %}
                                        <a href=\"{{ url('admin_store_plugin_owners_search', {'category_id' : key}) }}\" class=\"px-3 text-dark\">{{ category }}</a>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <form method=\"post\" action=\"{{ url('admin_store_plugin_owners_search') }}\" class=\"plugin-search\" name=\"search\">
                    <div class=\"c-outsideBlock\">
                        {{ form_widget(searchForm._token) }}
                        <div class=\"c-outsideBlock__contents mb-4\">
                            <div class=\"row justify-content-start\">
                                <div class=\"col-3 pl-0\">
                                    <label class=\"col-form-label\">{{ searchForm.category_id.vars.label|trans }}</label>
                                    {{ form_widget(searchForm.category_id) }}
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">{{ searchForm.price_type.vars.label|trans }}</label>
                                    {{ form_widget(searchForm.price_type) }}
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">{{ searchForm.keyword.vars.label|trans }}</label>
                                    {{ form_widget(searchForm.keyword) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"c-outsideBlock__contents mb-2 pl-0\">
                            <button class=\"btn btn-ec-conversion px-5 py-2\" type=\"submit\">{{ 'admin.store.plugin_owners_search.search_button'|trans }}</button>
                        </div>
                    </div>
                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-12 text-right\">
                            <div class=\"d-inline-block mr-2\">
                                {{ form_widget(searchForm.sort, {attr: {onchange: 'document.forms.search.submit();'}}) }}
                            </div>
                            <div class=\"d-inline-block\">
                                {{ form_widget(searchForm.page_count, {attr: {onchange: 'document.forms.search.submit();'}}) }}
                            </div>
                        </div>
                    </div>
                </form>

                <div id=\"plugin-list\" class=\"card rounded border-0 my-4\">
                    <div class=\"card-header\">
                        <h5>{{ 'admin.store.plugin_owners_search.search_results'|trans({'%number%': pagination|length, '%total%' : total}) }}</h5>
                    </div>
                    <div class=\"card-body\">
                        {% if pagination|length > 0%}
                            {% for item in pagination %}
                                <div class=\"row border-bt pb-2 mb-3\">
                                    {{ include('@admin/Store/plugin_search_panel.twig') }}
                                </div>
                            {% endfor %}
                        {% endif %}
                    </div>

                    {% if pagination.totalItemCount > 0 %}
                        <div class=\"row justify-content-md-center mb-4\">
                            {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_store_plugin_owners_search_page' } %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Store/plugin_search.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/plugin_search.twig");
    }
}
