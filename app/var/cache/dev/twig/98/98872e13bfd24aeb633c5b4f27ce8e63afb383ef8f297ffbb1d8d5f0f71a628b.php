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

/* Shopping/confirm.twig */
class __TwigTemplate_be4918fbb4c12ba0934ff115a53fb4a839cef371f72a3c8c5b4a63f594cafb30 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/confirm.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/confirm.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 15
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "

<style>
    dl.hiddenItem {
        display: none !important;
    }
    .hiddenItem {
        display: none !important;
    }
</style>

<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容のご確認"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 39
        $context["step"] = 1;
        // line 40
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 41, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 41, $this->source); })()) + 1);
        // line 42
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 46
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 47
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()) + 1);
            // line 49
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 54
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 55, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 55, $this->source); })()) + 1);
        // line 56
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 61, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 61, $this->source); })()) + 1);
        // line 62
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 67, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 67, $this->source); })()) + 1);
        // line 68
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_checkout");
        echo "\">
    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "_token", [], "any", false, false, false, 77), 'widget');
        echo "
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">お名前（漢字）：";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 85, $this->source); })()), "name01", [], "any", false, false, false, 85), "html", null, true);
        echo "&emsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 85, $this->source); })()), "name02", [], "any", false, false, false, 85), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                    <p class=\"ec-halfInput\">お名前（カナ）：";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 86, $this->source); })()), "kana01", [], "any", false, false, false, 86), "html", null, true);
        echo "&emsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 86, $this->source); })()), "kana02", [], "any", false, false, false, 86), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                    <p class=\"ec-input hiddenItem\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 87, $this->source); })()), "companyName", [], "any", false, false, false, 87), "html", null, true);
        echo "</span></p>
                ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 88, $this->source); })()), "hdn_delivery_address_use", [], "any", false, false, false, 88)) {
            // line 89
            echo "                    <p class=\"ec-zipInput\">郵　便　番　号：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 89, $this->source); })()), "postal_code", [], "any", false, false, false, 89), "html", null, true);
            echo "</p>
                    <p class=\"ec-input\">住　　　　　所：";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 90, $this->source); })()), "addr01", [], "any", false, false, false, 90), "html", null, true);
            echo "&emsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 90, $this->source); })()), "addr02", [], "any", false, false, false, 90), "html", null, true);
            echo "</p>
                ";
        } else {
            // line 92
            echo "                    <p class=\"ec-zipInput hiddenItem\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 92, $this->source); })()), "postal_code", [], "any", false, false, false, 92), "html", null, true);
            echo "</p>
                    <p class=\"ec-input hiddenItem\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 93, $this->source); })()), "pref", [], "any", false, false, false, 93), "html", null, true);
            echo "&emsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 93, $this->source); })()), "addr01", [], "any", false, false, false, 93), "html", null, true);
            echo "&emsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 93, $this->source); })()), "addr02", [], "any", false, false, false, 93), "html", null, true);
            echo "</p>
                ";
        }
        // line 95
        echo "
                    ";
        // line 97
        echo "                    <p class=\"ec-input\">受　取　方　法：";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 97, $this->source); })()), "uketori", [], "any", false, false, false, 97)), "html", null, true);
        echo "</p>
                    <p class=\"ec-telInput\">お 支 払 い 方 法：";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 98, $this->source); })()), "Payment", [], "any", false, false, false, 98), "html", null, true);
        echo "</p>
                    <p class=\"ec-telInput\">電　話　番　号：";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 99, $this->source); })()), "phone_number", [], "any", false, false, false, 99), "html", null, true);
        echo "</p>
                    ";
        // line 100
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 100, $this->source); })()), "uketori", [], "any", false, false, false, 100) == "ヤマト配送")) {
            // line 101
            echo "                    <p class=\"ec-input\">支　払　い　状　況：";
            echo "支払い済み";
            echo "</p>
                    <p class=\"ec-input\">お届け先　郵便番号 : ";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 102, $this->source); })()), "h_postal_code", [], "any", false, false, false, 102), "html", null, true);
            echo "</p>
                    <p class=\"ec-input\">お届け先　住所 : ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 103, $this->source); })()), "h_pref", [], "any", false, false, false, 103), "html", null, true);
            echo " &emsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 103, $this->source); })()), "h_addr1", [], "any", false, false, false, 103), "html", null, true);
            echo " &emsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 103, $this->source); })()), "h_addr2", [], "any", false, false, false, 103), "html", null, true);
            echo "</p>
                    <p class=\"ec-halfInput\">お届け先　お名前（漢字）：";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 104, $this->source); })()), "h_name1", [], "any", false, false, false, 104), "html", null, true);
            echo "&emsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 104, $this->source); })()), "h_name2", [], "any", false, false, false, 104), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("様"), "html", null, true);
            echo "</p>
                    <p class=\"ec-input\">お届け先　お名前（カナ）：";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 105, $this->source); })()), "h_kana1", [], "any", false, false, false, 105), "html", null, true);
            echo "&emsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 105, $this->source); })()), "h_kana2", [], "any", false, false, false, 105), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("様"), "html", null, true);
            echo "</p>
                    <p class=\"ec-telInput\">お届け先　お電話番号：";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 106, $this->source); })()), "h_phone_number", [], "any", false, false, false, 106), "html", null, true);
            echo "</p>
                    ";
        }
        // line 108
        echo "                    <p class=\"ec-input hiddenItem\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 108, $this->source); })()), "email", [], "any", false, false, false, 108), "html", null, true);
        echo "</p>
                    ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 109, $this->source); })()), "uketori", [], "any", false, false, false, 109) != "ヤマト配送")) {
            // line 110
            echo "                    <p class=\"ec-input\">受　取　来　店　日：";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 110, $this->source); })()), "Ukedate", [], "any", false, false, false, 110), "Y年m月d日"), "html", null, true);
            echo "</p>
                    <p class=\"ec-input\">受　取　時　間：";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 111, $this->source); })()), "visit_t", [], "any", false, false, false, 111), "html", null, true);
            echo "</p>
                    ";
        }
        // line 113
        echo "                    <p class=\"ec-input\">受　付　店　鋪：";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 113, $this->source); })()), "tenpos", [], "any", false, false, false, 113), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">受　　付　　者：";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 114, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 114), "html", null, true);
        echo "</p>
                    <p class=\"ec-input hiddenItem\">紹　　介　　者：";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 115, $this->source); })()), "shoukai_name", [], "any", false, false, false, 115), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">社　　　　　員：";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 116, $this->source); })()), "shain_flg", [], "any", false, false, false, 116), "html", null, true);
        echo "
                    ";
        // line 117
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 117, $this->source); })()), "shain_flg", [], "any", false, false, false, 117) == 1)) {
            // line 118
            echo "                        <span>社員</span>
                    ";
        } else {
            // line 120
            echo "                        <span>一般</span>
                    ";
        }
        // line 122
        echo "                    </p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お引渡し情報"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 129, $this->source); })()), "shippings", [], "any", false, false, false, 129));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 130
            echo "                    ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 130);
            // line 131
            echo "                    ";
            $context["isShowReducedTaxMess"] = false;
            // line 132
            echo "                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select hiddenItem\">
                                <label>";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo "</label>
                                ";
            // line 136
            $context["delivery_fee"] = 0;
            // line 137
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "order_items", [], "any", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isDeliveryFee", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "                                    ";
                    $context["delivery_fee"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 138);
                    // line 139
                    echo "                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 140, $this->source); })()), "Shippings", [], "any", false, false, false, 140), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 140, $this->source); })()), [], "array", false, false, false, 140), "Delivery", [], "any", false, false, false, 140), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["delivery_fee"]) || array_key_exists("delivery_fee", $context) ? $context["delivery_fee"] : (function () { throw new RuntimeError('Variable "delivery_fee" does not exist.', 140, $this->source); })())), "html", null, true);
            echo ")
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お引渡し日"), "html", null, true);
            echo "</label>
                                ";
            // line 144
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 144, $this->source); })()), "Shippings", [], "any", false, false, false, 144), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 144, $this->source); })()), [], "array", false, false, false, 144), "shipping_delivery_date", [], "any", false, false, false, 144)) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 144, $this->source); })()), "Shippings", [], "any", false, false, false, 144), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 144, $this->source); })()), [], "array", false, false, false, 144), "shipping_delivery_date", [], "any", false, false, false, 144))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お引渡し時間"), "html", null, true);
            echo "</label>
                                ";
            // line 148
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 148, $this->source); })()), "Shippings", [], "any", false, false, false, 148), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 148, $this->source); })()), [], "array", false, false, false, 148), "shipping_delivery_time", [], "any", false, false, false, 148)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 148, $this->source); })()), "Shippings", [], "any", false, false, false, 148), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 148, $this->source); })()), [], "array", false, false, false, 148), "shipping_delivery_time", [], "any", false, false, false, 148)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
        // line 159
        $context["charge"] = 0;
        // line 160
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 160, $this->source); })()), "order_items", [], "any", false, false, false, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if (twig_get_attribute($this->env, $this->source, $context["item"], "isCharge", [], "any", false, false, false, 160)) {
                // line 161
                echo "                        ";
                $context["charge"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 161);
                // line 162
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 163, $this->source); })()), "Payment", [], "any", false, false, false, 163), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["charge"]) || array_key_exists("charge", $context) ? $context["charge"] : (function () { throw new RuntimeError('Variable "charge" does not exist.', 163, $this->source); })())), "html", null, true);
        echo ")
                </div>
            </div>
            ";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 166, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 166) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 166, $this->source); })()), "Customer", [], "any", false, false, false, 166)))) {
            // line 167
            echo "            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("利用ポイント"), "html", null, true);
            echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
            // line 172
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 172, $this->source); })()), "use_point", [], "any", false, false, false, 172)), "html", null, true);
            echo " pt
                </div>
            </div>
            ";
        }
        // line 176
        echo "            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("備考"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-input\">
                    ";
        // line 181
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 181, $this->source); })()), "message", [], "any", false, false, false, 181), "html", null, true));
        echo "
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品情報"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 188, $this->source); })()), "shippings", [], "any", false, false, false, 188));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 189
            echo "                    ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 189);
            // line 190
            echo "                    ";
            $context["isShowReducedTaxMess"] = false;
            // line 191
            echo "                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, false, 193));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 194
                echo "                                ";
                $context["Product"] = twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 194);
                // line 195
                echo "                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 197
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 197))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 197), "MainListImage", [], "any", false, false, false, 197)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 197), "html", null, true);
                echo "\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 199), "html", null, true);
                if ($this->extensions['Customize\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                        ";
                // line 200
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 200)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 200), "classCategory1", [], "any", false, false, false, 200))) {
                    // line 201
                    echo "                                            <p class='hiddenItem'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 201), "classCategory1", [], "any", false, false, false, 201), "className", [], "any", false, false, false, 201), "name", [], "any", false, false, false, 201), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 201), "classCategory1", [], "any", false, false, false, 201), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 203
                echo "                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 203)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 203), "classCategory2", [], "any", false, false, false, 203))) {
                    // line 204
                    echo "                                            <p class='hiddenItem'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 204), "classCategory2", [], "any", false, false, false, 204), "className", [], "any", false, false, false, 204), "name", [], "any", false, false, false, 204), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 204), "classCategory2", [], "any", false, false, false, 204), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 206
                echo "                                        <p class='hiddenItem'>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, false, 206)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 206)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, false, 206)), "html", null, true);
                echo "</span></p>
                                        <p>";
                // line 207
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "price", [], "any", false, false, false, 207)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 207)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, $context["orderItem"], "price", [], "any", false, false, false, 207) * twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 207))), "html", null, true);
                echo "</span></p>
                                        <p>(";
                // line 208
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "basePrice", [], "any", false, false, false, 208)), "html", null, true);
                echo "
                                        ";
                // line 209
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariKikanGaku", [], "any", false, false, false, 209)) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariKikanGaku", [], "any", false, false, false, 209) > 0))) {
                    echo "- 早割";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariKikanGaku", [], "any", false, false, false, 209), "html", null, true);
                }
                // line 210
                echo "                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariMatomeGaku", [], "any", false, false, false, 210)) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariMatomeGaku", [], "any", false, false, false, 210) > 0))) {
                    echo "- まとめ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariMatomeGaku", [], "any", false, false, false, 210), "html", null, true);
                }
                // line 211
                echo "                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariAGaku", [], "any", false, false, false, 211)) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariAGaku", [], "any", false, false, false, 211) > 0))) {
                    echo "- FC割";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariAGaku", [], "any", false, false, false, 211), "html", null, true);
                }
                // line 212
                echo "                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariBGaku", [], "any", false, false, false, 212)) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariBGaku", [], "any", false, false, false, 212) > 0))) {
                    echo "- 社割";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariBGaku", [], "any", false, false, false, 212), "html", null, true);
                }
                // line 213
                echo "                                        )</p>
                                        ";
                // line 214
                if (twig_get_attribute($this->env, $this->source, (isset($context["infoByProductAndDate"]) || array_key_exists("infoByProductAndDate", $context) ? $context["infoByProductAndDate"] : (function () { throw new RuntimeError('Variable "infoByProductAndDate" does not exist.', 214, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 214, $this->source); })()), "id", [], "any", false, false, false, 214), [], "array", false, false, false, 214)) {
                    // line 215
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["infoByProductAndDate"]) || array_key_exists("infoByProductAndDate", $context) ? $context["infoByProductAndDate"] : (function () { throw new RuntimeError('Variable "infoByProductAndDate" does not exist.', 215, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 215, $this->source); })()), "id", [], "any", false, false, false, 215), [], "array", false, false, false, 215), "disp_simple", [], "array", false, false, false, 215), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 217
                echo "                                    </div>
                                </div>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                        </ul>
                        <p>";
            // line 222
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 222, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__address hiddenItem\">
                        <p>";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, false, 225), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, false, 225), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, false, 225), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, false, 225), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
            echo "</p>
                        <p>";
            // line 226
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 226), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 226), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 226), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 226), "html", null, true);
            echo "</p>
                        <p>";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 227), "html", null, true);
            echo "</p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "            </div>
        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品合計"), "html", null, true);
        echo "</dt>
                    <dd class=\"ec-totalBox__specTotal\">";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 236, $this->source); })()), "subtotal", [], "any", false, false, false, 236) - twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 236, $this->source); })()), "tax", [], "any", false, false, false, 236))), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("消費税"), "html", null, true);
        echo "</dt>
                    <dd class=\"ec-totalBox__specTotal\">";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 240, $this->source); })()), "tax", [], "any", false, false, false, 240)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec hiddenItem\">
                    <dt>";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                    <dd class=\"ec-totalBox__specTotal\">";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 244, $this->source); })()), "subtotal", [], "any", false, false, false, 244)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec hiddenItem\">
                    <dt>";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 248, $this->source); })()), "charge", [], "any", false, false, false, 248)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec hiddenItem\">
                    <dt>";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 252, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, false, 252)), "html", null, true);
        echo "</dd>
                </dl>
                ";
        // line 254
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 254, $this->source); })()), "taxable_discount", [], "any", false, false, false, 254) < 0)) {
            // line 255
            echo "                <dl class=\"ec-totalBox__spec hiddenItem\">
                    <dt>";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                    <dd>";
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 257, $this->source); })()), "taxable_discount", [], "any", false, false, false, 257)), "html", null, true);
            echo "</dd>
                </dl>
                ";
        }
        // line 260
        echo "                <div class=\"ec-totalBox__total hiddenItem\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 260, $this->source); })()), "taxable_total", [], "any", false, false, false, 260)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 261, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, false, 261));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 262
            echo "                    <dl class=\"ec-totalBox__taxRate hiddenItem\">
                        <dt>";
            // line 263
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 267, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 267));
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
            // line 268
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 268)) {
                echo "<div class=\"ec-totalBox__total\"></div>";
            }
            // line 269
            echo "                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 270), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 271
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 271)), "html", null, true);
            echo "</dd>
                    </dl>
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
        // line 274
        echo "                <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 274, $this->source); })()), "payment_total", [], "any", false, false, false, 274)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                ";
        // line 275
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 275, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 275) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 275, $this->source); })()), "Customer", [], "any", false, false, false, 275)))) {
            // line 276
            echo "                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 279
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 279, $this->source); })()), "UsePoint", [], "any", false, false, false, 279)), "html", null, true);
            echo " pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt><span class=\"ec-font-bold\">";
            // line 282
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                        <dd><span class=\"ec-font-bold\">";
            // line 283
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 283, $this->source); })()), "AddPoint", [], "any", false, false, false, 283)), "html", null, true);
            echo " pt</span></dd>
                    </dl>
                </div>
                ";
        }
        // line 287
        echo "                <div class=\"ec-totalBox__btn\">
                    <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("注文する"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続きに戻る"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  924 => 289,  920 => 288,  917 => 287,  910 => 283,  906 => 282,  900 => 279,  896 => 278,  892 => 276,  890 => 275,  881 => 274,  864 => 271,  860 => 270,  857 => 269,  852 => 268,  834 => 267,  825 => 264,  821 => 263,  818 => 262,  814 => 261,  805 => 260,  799 => 257,  795 => 256,  792 => 255,  790 => 254,  785 => 252,  781 => 251,  775 => 248,  771 => 247,  765 => 244,  761 => 243,  755 => 240,  751 => 239,  745 => 236,  741 => 235,  734 => 230,  717 => 227,  708 => 226,  695 => 225,  689 => 222,  686 => 221,  677 => 217,  671 => 215,  669 => 214,  666 => 213,  660 => 212,  654 => 211,  648 => 210,  643 => 209,  639 => 208,  630 => 207,  620 => 206,  612 => 204,  609 => 203,  601 => 201,  599 => 200,  591 => 199,  584 => 197,  580 => 195,  577 => 194,  573 => 193,  569 => 191,  566 => 190,  563 => 189,  546 => 188,  541 => 186,  533 => 181,  527 => 178,  523 => 176,  516 => 172,  510 => 169,  506 => 167,  504 => 166,  495 => 163,  488 => 162,  485 => 161,  479 => 160,  477 => 159,  471 => 156,  466 => 153,  447 => 148,  443 => 147,  437 => 144,  433 => 143,  424 => 140,  417 => 139,  414 => 138,  408 => 137,  406 => 136,  402 => 135,  397 => 132,  394 => 131,  391 => 130,  374 => 129,  369 => 127,  362 => 122,  358 => 120,  354 => 118,  352 => 117,  348 => 116,  344 => 115,  340 => 114,  335 => 113,  330 => 111,  325 => 110,  323 => 109,  318 => 108,  313 => 106,  306 => 105,  299 => 104,  291 => 103,  286 => 102,  281 => 101,  279 => 100,  275 => 99,  271 => 98,  266 => 97,  263 => 95,  254 => 93,  248 => 92,  241 => 90,  236 => 89,  234 => 88,  230 => 87,  223 => 86,  216 => 85,  210 => 82,  202 => 77,  198 => 76,  188 => 69,  185 => 68,  182 => 67,  175 => 63,  172 => 62,  169 => 61,  162 => 57,  159 => 56,  156 => 55,  153 => 54,  146 => 50,  143 => 49,  140 => 48,  137 => 47,  135 => 46,  129 => 43,  126 => 42,  123 => 41,  120 => 40,  118 => 39,  108 => 32,  93 => 19,  83 => 18,  72 => 15,  62 => 14,  51 => 11,  49 => 13,  36 => 11,);
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

{% form_theme form 'Form/form_div_layout.twig' %}
{% block javascript %}

{% endblock javascript %}

{% block main %}


<style>
    dl.hiddenItem {
        display: none !important;
    }
    .hiddenItem {
        display: none !important;
    }
</style>

<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>{{ 'ご注文内容のご確認'|trans }}</h1>
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
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'ご注文内容確認'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ '完了'|trans }}
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"{{ url('shopping_checkout') }}\">
    {{ form_widget(form._token) }}
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お客様情報'|trans }}</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">お名前（漢字）：{{ Order.name01 }}&emsp;{{ Order.name02 }}{{ ' 様'|trans }}</p>
                    <p class=\"ec-halfInput\">お名前（カナ）：{{ Order.kana01 }}&emsp;{{ Order.kana02 }}{{ ' 様'|trans }}</p>
                    <p class=\"ec-input hiddenItem\">{{ Order.companyName }}</span></p>
                {% if eccube_config.hdn_delivery_address_use %}
                    <p class=\"ec-zipInput\">郵　便　番　号：{{ Order.postal_code }}</p>
                    <p class=\"ec-input\">住　　　　　所：{{ Order.addr01 }}&emsp;{{ Order.addr02 }}</p>
                {% else %}
                    <p class=\"ec-zipInput hiddenItem\">{{ '〒'|trans }}{{ Order.postal_code }}</p>
                    <p class=\"ec-input hiddenItem\">{{ Order.pref }}&emsp;{{ Order.addr01 }}&emsp;{{ Order.addr02 }}</p>
                {% endif %}

                    {# 受取方法追加　2024/08/23 来店時間追加　2024/09/09 配送先住所追加　2024/09/12 #}
                    <p class=\"ec-input\">受　取　方　法：{{ Order.uketori|trans }}</p>
                    <p class=\"ec-telInput\">お 支 払 い 方 法：{{ Order.Payment }}</p>
                    <p class=\"ec-telInput\">電　話　番　号：{{ Order.phone_number }}</p>
                    {% if Order.uketori == 'ヤマト配送' %}
                    <p class=\"ec-input\">支　払　い　状　況：{{ '支払い済み' }}</p>
                    <p class=\"ec-input\">お届け先　郵便番号 : {{'〒'|trans}}{{ Order.h_postal_code }}</p>
                    <p class=\"ec-input\">お届け先　住所 : {{ Order.h_pref }} &emsp;{{ Order.h_addr1 }} &emsp;{{ Order.h_addr2 }}</p>
                    <p class=\"ec-halfInput\">お届け先　お名前（漢字）：{{ Order.h_name1 }}&emsp;{{ Order.h_name2 }}{{'様'|trans}}</p>
                    <p class=\"ec-input\">お届け先　お名前（カナ）：{{ Order.h_kana1 }}&emsp;{{ Order.h_kana2 }}{{'様'|trans}}</p>
                    <p class=\"ec-telInput\">お届け先　お電話番号：{{ Order.h_phone_number }}</p>
                    {% endif %}
                    <p class=\"ec-input hiddenItem\">{{ Order.email }}</p>
                    {% if Order.uketori != 'ヤマト配送' %}
                    <p class=\"ec-input\">受　取　来　店　日：{{ Order.Ukedate|date(\"Y年m月d日\") }}</p>
                    <p class=\"ec-input\">受　取　時　間：{{ Order.visit_t }}</p>
                    {% endif %}
                    <p class=\"ec-input\">受　付　店　鋪：{{ Order.tenpos }}</p>
                    <p class=\"ec-input\">受　　付　　者：{{ Order.uketsuke_name }}</p>
                    <p class=\"ec-input hiddenItem\">紹　　介　　者：{{ Order.shoukai_name }}</p>
                    <p class=\"ec-input\">社　　　　　員：{{ Order.shain_flg }}
                    {% if Order.shain_flg == 1 %}
                        <span>社員</span>
                    {% else %}
                        <span>一般</span>
                    {% endif %}
                    </p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お引渡し情報'|trans }}</h2>
                </div>
                {% for shipping in Order.shippings %}
                    {% set idx = loop.index0 %}
                    {% set isShowReducedTaxMess = false %}
                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select hiddenItem\">
                                <label>{{ '配送方法'|trans }}</label>
                                {% set delivery_fee = 0 %}
                                {% for item in shipping.order_items if item.isDeliveryFee %}
                                    {% set delivery_fee = item.total_price %}
                                {% endfor %}
                                {{ Order.Shippings[idx].Delivery }}({{ delivery_fee|price }})
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>{{ 'お引渡し日'|trans }}</label>
                                {{ Order.Shippings[idx].shipping_delivery_date ? Order.Shippings[idx].shipping_delivery_date|date_day_with_weekday : '指定なし'|trans }}
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>{{ 'お引渡し時間'|trans }}</label>
                                {{ Order.Shippings[idx].shipping_delivery_time?: '指定なし'|trans }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お支払方法'|trans }}</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    {% set charge = 0 %}
                    {% for item in Order.order_items if item.isCharge %}
                        {% set charge = item.total_price %}
                    {% endfor %}
                    {{ Order.Payment }}({{ charge|price }})
                </div>
            </div>
            {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ '利用ポイント'|trans }}</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    {{ Order.use_point|number_format }} pt
                </div>
            </div>
            {% endif %}
            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ '備考'|trans }}</h2>
                </div>
                <div class=\"ec-input\">
                    {{ Order.message|nl2br }}
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ '商品情報'|trans }}</h2>
                </div>
                {% for shipping in Order.shippings %}
                    {% set idx = loop.index0 %}
                    {% set isShowReducedTaxMess = false %}
                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            {% for orderItem in shipping.productOrderItems %}
                                {% set Product = orderItem.Product %}
                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"{{ asset((orderItem.product is null ? null : orderItem.product.MainListImage)|no_image_product, 'save_image') }}\" alt=\"{{ orderItem.productName }}\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>{{ orderItem.productName }}{% if is_reduced_tax_rate(orderItem) %}{{ '※'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}</p>
                                        {% if orderItem.productClass is not null and orderItem.productClass.classCategory1 %}
                                            <p class='hiddenItem'>{{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}</p>
                                        {% endif %}
                                        {% if orderItem.productClass is not null and orderItem.productClass.classCategory2 %}
                                            <p class='hiddenItem'>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}</p>
                                        {% endif %}
                                        <p class='hiddenItem'>{{ orderItem.priceIncTax|price }} × {{ orderItem.quantity|number_format }}<span>{{ '小計：'|trans }}{{ orderItem.totalPrice|price }}</span></p>
                                        <p>{{ orderItem.price|price }} × {{ orderItem.quantity|number_format }}<span>{{ '小計：'|trans }}{{ (orderItem.price*orderItem.quantity)|price }}</span></p>
                                        <p>({{ orderItem.basePrice|price }}
                                        {% if orderItem.wariKikanGaku is not null and orderItem.wariKikanGaku > 0 %}- 早割{{ orderItem.wariKikanGaku }}{% endif %}
                                        {% if orderItem.wariMatomeGaku is not null and orderItem.wariMatomeGaku > 0 %}- まとめ{{ orderItem.wariMatomeGaku }}{% endif %}
                                        {% if orderItem.wariAGaku is not null and orderItem.wariAGaku > 0 %}- FC割{{ orderItem.wariAGaku }}{% endif %}
                                        {% if orderItem.wariBGaku is not null and orderItem.wariBGaku > 0 %}- 社割{{ orderItem.wariBGaku }}{% endif %}
                                        )</p>
                                        {% if infoByProductAndDate[Product.id] %}
                                            <p>{{ infoByProductAndDate[Product.id]['disp_simple'] }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                            </li>
                            {% endfor %}
                        </ul>
                        <p>{{ isShowReducedTaxMess ? '※ は軽減税率対象商品です。'|trans }}</p>
                    </div>
                    <div class=\"ec-orderDelivery__address hiddenItem\">
                        <p>{{ ''|trans }}{{ shipping.name01 }} {{ shipping.name02 }} ({{ shipping.kana01 }} {{ shipping.kana02 }}){{ ' 様'|trans }}</p>
                        <p>{{ '〒'|trans }}{{ shipping.postal_code }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}</p>
                        <p>{{ shipping.phone_number }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '商品合計'|trans }}</dt>
                    <dd class=\"ec-totalBox__specTotal\">{{ (Order.subtotal-Order.tax)|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '消費税'|trans }}</dt>
                    <dd class=\"ec-totalBox__specTotal\">{{ Order.tax|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec hiddenItem\">
                    <dt>{{ '小計'|trans }}</dt>
                    <dd class=\"ec-totalBox__specTotal\">{{ Order.subtotal|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec hiddenItem\">
                    <dt>{{ '手数料'|trans }}</dt>
                    <dd>{{ Order.charge|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec hiddenItem\">
                    <dt>{{ '送料'|trans }}</dt>
                    <dd>{{ Order.deliveryFeeTotal|price }}</dd>
                </dl>
                {% if Order.taxable_discount < 0 %}
                <dl class=\"ec-totalBox__spec hiddenItem\">
                    <dt>{{ '値引き'|trans }}</dt>
                    <dd>{{ Order.taxable_discount|price }}</dd>
                </dl>
                {% endif %}
                <div class=\"ec-totalBox__total hiddenItem\">{{ '合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                {% for rate, total in Order.taxable_total_by_tax_rate %}
                    <dl class=\"ec-totalBox__taxRate hiddenItem\">
                        <dt>{{ '税率 %rate% %対象'|trans({ '%rate%': rate }) }}</dt>
                        <dd>{{ total|price }}</dd>
                    </dl>
                {% endfor %}
                {% for item in Order.tax_free_discount_items %}
                    {% if loop.first %}<div class=\"ec-totalBox__total\"></div>{% endif %}
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>{{ item.product_name }}</dt>
                        <dd>{{ item.total_price|price }}</dd>
                    </dl>
                {% endfor %}
                <div class=\"ec-totalBox__paymentTotal\">{{ 'お支払い合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>{{ 'ご利用ポイント'|trans }}</dt>
                        <dd>{{ Order.UsePoint|number_format }} pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt><span class=\"ec-font-bold\">{{ '加算ポイント'|trans }}</span></dt>
                        <dd><span class=\"ec-font-bold\">{{ Order.AddPoint|number_format }} pt</span></dd>
                    </dl>
                </div>
                {% endif %}
                <div class=\"ec-totalBox__btn\">
                    <button type=\"submit\" class=\"ec-blockBtn--action\">{{ '注文する'|trans }}</button>
                    <a href=\"{{ url('shopping') }}\" class=\"ec-blockBtn--cancel\">{{ 'ご注文手続きに戻る'|trans }}</a>
                </div>
            </div>
        </div>
    </div>
</form>
{% endblock %}
", "Shopping/confirm.twig", "/var/www/htdocs/ec922501/app/template/default/Shopping/confirm.twig");
    }
}
