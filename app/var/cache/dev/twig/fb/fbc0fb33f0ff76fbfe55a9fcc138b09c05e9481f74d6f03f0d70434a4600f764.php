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

/* Shopping/complete.twig */
class __TwigTemplate_ccc0b1fa3e5601d5c10efc81bdc2cd0917341a3db1058d1ffb9d75b5b3eeb05a extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/complete.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/complete.twig"));

        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/complete.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "<style>
    a.nohinsyo_button {
        background-color: #DE5D50;
        border-color: #DE5D50;
    }

    a.nohinsyo_button:hover {
        background-color: #b53022;
        border-color: #93271c;
    }
    .hiddenItem {
        display: none !important;
    }
</style>

<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文完了"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 40
        $context["step"] = 1;
        // line 41
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()) + 1);
        // line 43
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 47
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 48
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 49, $this->source); })()), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 49, $this->source); })()) + 1);
            // line 50
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 55
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 56, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 56, $this->source); })()) + 1);
        // line 57
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 62, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 62, $this->source); })()) + 1);
        // line 63
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item  is-complete\">
                <div class=\"ec-progress__number\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 68, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 68, $this->source); })()) + 1);
        // line 69
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

<div class=\"ec-cartCompleteRole\">
    <div class=\"ec-off3Grid ec-text-ac\">
        <div class=\"ec-off3Grid__cell\">
            <div class=\"ec-reportHeading\">
                <h2>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文ありがとうございました"), "html", null, true);
        echo "</h2>
            </div>
            <p class=\"ec-reportDescription\">
                <span class='hiddenItem'>
                ";
        // line 85
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま、ご注文の確認メールをお送りさせていただきました。
                万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがお問い合わせくださいますようお願いいたします。"), "html", null, true));
        // line 86
        echo "
                </span>
                ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)) {
            // line 89
            echo "                    <br /><br /><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 89, $this->source); })()), "orderNo", [], "any", false, false, false, 89), "html", null, true);
            echo "</strong>
                ";
        }
        // line 91
        echo "            </p>

            ";
        // line 93
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 93, $this->source); })()), "complete_message", [], "any", false, false, false, 93))) {
            // line 94
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 94, $this->source); })()), "complete_message", [], "any", false, false, false, 94);
            echo "
            ";
        }
        // line 96
        echo "
            <div class=\"ec-off4Grid\">
                ";
        // line 98
        if ((isset($context["hasNextCart"]) || array_key_exists("hasNextCart", $context) ? $context["hasNextCart"] : (function () { throw new RuntimeError('Variable "hasNextCart" does not exist.', 98, $this->source); })())) {
            // line 99
            echo "                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("購入を続ける"), "html", null, true);
            echo "</a></div>
                ";
        } else {
            // line 101
            echo "                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("start/list_saiji");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
            echo "</a></div>
                    <!--
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_export_pdf", ["ids[]" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 103, $this->source); })()), "orderNo", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("納品書確認"), "html", null, true);
            echo "</a></div>
                    -->
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel nohinsyo_button\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_pdf_y01", ["ids[]" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 105, $this->source); })()), "orderNo", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("納品書発行"), "html", null, true);
            echo "</a></div>
                ";
        }
        // line 107
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/complete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 107,  249 => 105,  242 => 103,  234 => 101,  226 => 99,  224 => 98,  220 => 96,  214 => 94,  212 => 93,  208 => 91,  200 => 89,  198 => 88,  194 => 86,  191 => 85,  184 => 81,  170 => 70,  167 => 69,  164 => 68,  157 => 64,  154 => 63,  151 => 62,  144 => 58,  141 => 57,  138 => 56,  135 => 55,  128 => 51,  125 => 50,  122 => 49,  119 => 48,  117 => 47,  111 => 44,  108 => 43,  105 => 42,  102 => 41,  100 => 40,  90 => 33,  71 => 16,  61 => 15,  50 => 11,  48 => 13,  35 => 11,);
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

{% set body_class = 'cart_page' %}

{% block main %}
<style>
    a.nohinsyo_button {
        background-color: #DE5D50;
        border-color: #DE5D50;
    }

    a.nohinsyo_button:hover {
        background-color: #b53022;
        border-color: #93271c;
    }
    .hiddenItem {
        display: none !important;
    }
</style>

<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>{{ 'ご注文完了'|trans }}</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            {% set step = 1 %}
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'カートの商品'|trans }}
                </div>
            </li>
            {% if is_granted('ROLE_USER') == false %}
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'お客様情報'|trans }}
                    </div>
                </li>
            {% endif %}
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'ご注文手続き'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'ご注文内容確認'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item  is-complete\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ '完了'|trans }}
                </div>
            </li>
        </ul>
    </div>
</div>

<div class=\"ec-cartCompleteRole\">
    <div class=\"ec-off3Grid ec-text-ac\">
        <div class=\"ec-off3Grid__cell\">
            <div class=\"ec-reportHeading\">
                <h2>{{ 'ご注文ありがとうございました'|trans }}</h2>
            </div>
            <p class=\"ec-reportDescription\">
                <span class='hiddenItem'>
                {{ 'ただいま、ご注文の確認メールをお送りさせていただきました。
                万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがお問い合わせくださいますようお願いいたします。'|trans|nl2br }}
                </span>
                {% if Order.id %}
                    <br /><br /><strong>{{ 'ご注文番号'|trans }} : {{ Order.orderNo }}</strong>
                {% endif %}
            </p>

            {% if Order.complete_message is not empty %}
                {{ Order.complete_message|raw }}
            {% endif %}

            <div class=\"ec-off4Grid\">
                {% if hasNextCart %}
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--primary\" href=\"{{ url('cart') }}\">{{ '購入を続ける'|trans }}</a></div>
                {% else %}
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"{{ url('start/list_saiji') }}\">{{ 'トップページへ'|trans }}</a></div>
                    <!--
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"{{ url('admin_order_export_pdf',{'ids[]':Order.orderNo}) }}\">{{ '納品書確認'|trans }}</a></div>
                    -->
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel nohinsyo_button\" href=\"{{ url('admin_order_pdf_y01',{'ids[]':Order.orderNo}) }}\" target=\"_blank\">{{ '納品書発行'|trans }}</a></div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "Shopping/complete.twig", "/var/www/htdocs/ec922501/app/template/default/Shopping/complete.twig");
    }
}
