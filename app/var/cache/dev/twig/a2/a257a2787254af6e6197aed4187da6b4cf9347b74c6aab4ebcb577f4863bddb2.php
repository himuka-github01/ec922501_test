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

/* Mypage/index.twig */
class __TwigTemplate_2e215e7348a6226cc87516cc667ae5ea17464bec46376fdd0fe42800cf805881 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/index.twig"));

        // line 13
        $context["mypageno"] = "index";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__history"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/index.twig", 23)->display($context);
        // line 24
        echo "        </div>
        <div class=\"ec-mypageRole\">
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 26, $this->source); })()), "totalItemCount", [], "any", false, false, false, 26) > 0)) {
            // line 27
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.history_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 27, $this->source); })()), "totalItemCount", [], "any", false, false, false, 27)]), "html", null, true);
            echo "</p>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 29
                echo "                    <div class=\"ec-historyRole\">
                        <div class=\"ec-historyRole__contents\">

                            <div class=\"ec-historyRole__header\">
                                <div class=\"ec-historyListHeader\">
                                    <p class=\"ec-historyListHeader__date\">";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, false, 34)), "html", null, true);
                echo "</p>
                                    <dl class=\"ec-definitions\">
                                        <dt>";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_no"), "html", null, true);
                echo "</dt>
                                        <dd>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, false, 37), "html", null, true);
                echo "</dd>
                                    </dl>
                                    ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 39, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, false, 39)) {
                    // line 40
                    echo "                                        <dl class=\"ec-definitions\">
                                            <dt>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_status"), "html", null, true);
                    echo "</dt>
                                            <dd>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "CustomerOrderStatus", [], "any", false, false, false, 42), "html", null, true);
                    echo "</dd>
                                        </dl>
                                    ";
                }
                // line 45
                echo "                                    <p class=\"ec-historyListHeader__action\"><a class=\"ec-inlineBtn\"
                                                                               href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_history", ["order_no" => twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.view_detail"), "html", null, true);
                echo "</a>
                                    </p>
                                </div>
                            </div>
                            <div class=\"ec-historyRole__detail\">
                                ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "MergedProductOrderItems", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                    // line 52
                    echo "                                    <div class=\"ec-imageGrid\">
                                        <div class=\"ec-imageGrid__img\">
                                            ";
                    // line 54
                    if ((null === twig_get_attribute($this->env, $this->source, $context["OrderItem"], "Product", [], "any", false, false, false, 54))) {
                        // line 55
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                        echo "\"/>
                                            ";
                    } else {
                        // line 57
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "Product", [], "any", false, false, false, 57), "MainListImage", [], "any", false, false, false, 57)), "save_image"), "html", null, true);
                        echo "\">
                                            ";
                    }
                    // line 59
                    echo "                                        </div>
                                        <div class=\"ec-imageGrid__content\">
                                            <p class=\"ec-historyRole__detailTitle\">";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 61), "html", null, true);
                    echo "</p>
                                            ";
                    // line 62
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", [], "any", false, false, false, 62))) {
                        // line 63
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name1", [], "any", false, false, false, 63), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 65
                    echo "                                            ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name2", [], "any", false, false, false, 65))) {
                        // line 66
                        echo "                                                / ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "class_category_name2", [], "any", false, false, false, 66), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 68
                    echo "                                            <p class=\"ec-historyRole__detailPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inc_tax", [], "any", false, false, false, 68)), "html", null, true);
                    echo "
                                                × ";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 69), "html", null, true);
                    echo "</p>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                <div class=\"ec-pagerRole\">
                    ";
            // line 78
            $this->loadTemplate("pager.twig", "Mypage/index.twig", 78)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()), "paginationData", [], "any", false, false, false, 78)]));
            // line 79
            echo "                </div>
            ";
        } else {
            // line 81
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.history_not_found"), "html", null, true);
            echo "</p>
            ";
        }
        // line 83
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 83,  231 => 81,  227 => 79,  225 => 78,  222 => 77,  213 => 73,  203 => 69,  198 => 68,  192 => 66,  189 => 65,  183 => 63,  181 => 62,  177 => 61,  173 => 59,  167 => 57,  161 => 55,  159 => 54,  155 => 52,  151 => 51,  141 => 46,  138 => 45,  132 => 42,  128 => 41,  125 => 40,  123 => 39,  118 => 37,  114 => 36,  109 => 34,  102 => 29,  98 => 28,  93 => 27,  91 => 26,  87 => 24,  85 => 23,  78 => 21,  73 => 18,  63 => 17,  52 => 11,  50 => 15,  48 => 13,  35 => 11,);
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
{% extends 'default_frame.twig' %}

{% set mypageno = 'index' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'front.mypage.title'|trans }}/{{ 'front.mypage.nav__history'|trans }}</h1>
            </div>
            {% include 'Mypage/navi.twig' %}
        </div>
        <div class=\"ec-mypageRole\">
            {% if pagination.totalItemCount > 0 %}
                <p class=\"ec-para-normal\">{{ 'front.mypage.history_count'|trans({'%count%':pagination.totalItemCount}) }}</p>
                {% for Order in pagination %}
                    <div class=\"ec-historyRole\">
                        <div class=\"ec-historyRole__contents\">

                            <div class=\"ec-historyRole__header\">
                                <div class=\"ec-historyListHeader\">
                                    <p class=\"ec-historyListHeader__date\">{{ Order.order_date|date_sec }}</p>
                                    <dl class=\"ec-definitions\">
                                        <dt>{{ 'front.mypage.order_no'|trans }}</dt>
                                        <dd>{{ Order.order_no }}</dd>
                                    </dl>
                                    {% if (BaseInfo.option_mypage_order_status_display) %}
                                        <dl class=\"ec-definitions\">
                                            <dt>{{ 'front.mypage.order_status'|trans }}</dt>
                                            <dd>{{ Order.CustomerOrderStatus }}</dd>
                                        </dl>
                                    {% endif %}
                                    <p class=\"ec-historyListHeader__action\"><a class=\"ec-inlineBtn\"
                                                                               href=\"{{ url('mypage_history', {'order_no': Order.order_no}) }}\">{{ 'front.mypage.view_detail'|trans }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class=\"ec-historyRole__detail\">
                                {% for OrderItem in Order.MergedProductOrderItems %}
                                    <div class=\"ec-imageGrid\">
                                        <div class=\"ec-imageGrid__img\">
                                            {% if OrderItem.Product is null %}
                                                <img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/>
                                            {% else %}
                                                <img src=\"{{ asset(OrderItem.Product.MainListImage|no_image_product, 'save_image') }}\">
                                            {% endif %}
                                        </div>
                                        <div class=\"ec-imageGrid__content\">
                                            <p class=\"ec-historyRole__detailTitle\">{{ OrderItem.product_name }}</p>
                                            {% if OrderItem.class_category_name1 is not empty %}
                                                {{ OrderItem.class_category_name1 }}
                                            {% endif %}
                                            {% if OrderItem.class_category_name2 is not empty %}
                                                / {{ OrderItem.class_category_name2 }}
                                            {% endif %}
                                            <p class=\"ec-historyRole__detailPrice\">{{ OrderItem.price_inc_tax|price }}
                                                × {{ OrderItem.quantity }}</p>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
                <div class=\"ec-pagerRole\">
                    {% include \"pager.twig\" with {'pages': pagination.paginationData} %}
                </div>
            {% else %}
                <p class=\"ec-para-normal\">{{ 'front.mypage.history_not_found'|trans }}</p>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "Mypage/index.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mypage/index.twig");
    }
}
