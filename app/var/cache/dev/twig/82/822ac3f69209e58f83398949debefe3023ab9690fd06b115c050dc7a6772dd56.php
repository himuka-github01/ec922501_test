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

/* @admin/Store/plugin_handler.twig */
class __TwigTemplate_e4a9c077e12a39813bbe78fe21400030841ff231d568cd68bbaf2522de5e5f62 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_handler.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_handler.twig"));

        // line 14
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_handler"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_handler.twig", 12);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.828"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.829"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "

    ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["handlersPerEvent"]) || array_key_exists("handlersPerEvent", $context) ? $context["handlersPerEvent"] : (function () { throw new RuntimeError('Variable "handlersPerEvent" does not exist.', 22, $this->source); })())) > 0)) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["handlersPerEvent"]) || array_key_exists("handlersPerEvent", $context) ? $context["handlersPerEvent"] : (function () { throw new RuntimeError('Variable "handlersPerEvent" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["event"] => $context["handlersPerType"]) {
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["handlersPerType"]);
                foreach ($context['_seq'] as $context["type"] => $context["handlers"]) {
                    // line 25
                    echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"box\">
                            <div class=\"box-header with-arrow\">
                                ";
                    // line 29
                    echo twig_escape_filter($this->env, $context["event"], "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"table_list\">
                                    <div class=\"table-responsive with-border\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.830"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.831"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.832"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.833"), "html", null, true);
                    echo "</th>
                                            </tr>
                                            </thead>
                                            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["handlers"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
                        // line 44
                        echo "                                                <tbody>
                                                    <tr>
                                                        <td class=\"member_id\">
                                                            ";
                        // line 47
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["handler"], "plugin", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 50
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["handler"], "handler", [], "any", false, false, false, 50), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 53
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["handler"], "priority", [], "any", false, false, false, 53), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"icon_edit\">
                                                            <div class=\"dropdown\">
                                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                                    ";
                        // line 59
                        if ((true != twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 59))) {
                            // line 60
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_handler_up", ["id" => twig_get_attribute($this->env, $this->source, $context["handler"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                            echo "\">上へ</a>
                                                                    ";
                        }
                        // line 62
                        echo "                                                                    ";
                        if ((true != twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 62))) {
                            // line 63
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_handler_down", ["id" => twig_get_attribute($this->env, $this->source, $context["handler"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.835"), "html", null, true);
                            echo "</a>
                                                                    ";
                        }
                        // line 65
                        echo "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['handlers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['event'], $context['handlersPerType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header with-arrow\">
                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.836"), "html", null, true);
            echo "
                    </div><!-- /.box-header -->
                    <div class=\"box-header with-arrow\">
                        <h3 class=\"box-title\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.837"), "html", null, true);
            echo "</h3>
                    </div><!-- /.box-header -->
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_handler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 90,  275 => 87,  269 => 83,  266 => 82,  260 => 81,  245 => 71,  226 => 65,  218 => 63,  215 => 62,  209 => 60,  207 => 59,  198 => 53,  192 => 50,  186 => 47,  181 => 44,  164 => 43,  158 => 40,  154 => 39,  150 => 38,  146 => 37,  133 => 29,  127 => 25,  122 => 24,  117 => 23,  115 => 22,  111 => 20,  101 => 19,  82 => 17,  63 => 16,  52 => 12,  50 => 14,  37 => 12,);
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

{% set menus = ['store', 'plugin', 'plugin_handler'] %}

{% block title %}{{'admin.store.plugin_handler.828'|trans}}{% endblock %}
{% block sub_title %}{{'admin.store.plugin_handler.829'|trans}}{% endblock %}

{% block main %}


    {% if handlersPerEvent|length > 0 %}
        {% for event, handlersPerType in handlersPerEvent %}
            {% for type,handlers in handlersPerType %}
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"box\">
                            <div class=\"box-header with-arrow\">
                                {{ event }} / {{ type }}
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"table_list\">
                                    <div class=\"table-responsive with-border\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>{{'admin.store.plugin_handler.830'|trans}}</th>
                                                <th>{{'admin.store.plugin_handler.831'|trans}}</th>
                                                <th>{{'admin.store.plugin_handler.832'|trans}}</th>
                                                <th>{{'admin.store.plugin_handler.833'|trans}}</th>
                                            </tr>
                                            </thead>
                                            {% for handler in handlers %}
                                                <tbody>
                                                    <tr>
                                                        <td class=\"member_id\">
                                                            {{ handler.plugin.name }}
                                                        </td>
                                                        <td class=\"member_name\">
                                                            {{ handler.handler }}
                                                        </td>
                                                        <td class=\"member_name\">
                                                            {{ handler.priority }}
                                                        </td>
                                                        <td class=\"icon_edit\">
                                                            <div class=\"dropdown\">
                                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                                    {% if true != loop.first %}
                                                                        <a href=\"{{ url('admin_store_plugin_handler_up',   {'id': handler.id}) }}\">上へ</a>
                                                                    {% endif %}
                                                                    {% if true != loop.last %}
                                                                        <a href=\"{{ url('admin_store_plugin_handler_down', {'id': handler.id}) }}\">{{'admin.store.plugin_handler.835'|trans}}</a>
                                                                    {% endif %}
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            {% endfor %}
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            {% endfor %}
        {% endfor %}
    {% else %}
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header with-arrow\">
                        {{'admin.store.plugin_handler.836'|trans}}
                    </div><!-- /.box-header -->
                    <div class=\"box-header with-arrow\">
                        <h3 class=\"box-title\">{{'admin.store.plugin_handler.837'|trans}}</h3>
                    </div><!-- /.box-header -->
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

", "@admin/Store/plugin_handler.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/plugin_handler.twig");
    }
}
