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
class __TwigTemplate_f1118ee1469fc83e3d3ff2fdc086d23c4f3bf9a61d60c97acc4e9a0b04cd2bfd extends \Eccube\Twig\Template
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
        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/complete.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
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
            echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
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
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 88)) {
            // line 89
            echo "                    <br /><br /><strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", [], "any", false, false, false, 89), "html", null, true);
            echo "</strong>
                ";
        }
        // line 91
        echo "            </p>

            ";
        // line 93
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_message", [], "any", false, false, false, 93))) {
            // line 94
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_message", [], "any", false, false, false, 94);
            echo "
            ";
        }
        // line 96
        echo "
            <div class=\"ec-off4Grid\">
                ";
        // line 98
        if (($context["hasNextCart"] ?? null)) {
            // line 99
            echo "                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--primary\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("購入を続ける"), "html", null, true);
            echo "</a></div>
                ";
        } else {
            // line 101
            echo "                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("start/list_saiji");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
            echo "</a></div>
                    <!--
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_pdf", ["ids[]" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("納品書確認"), "html", null, true);
            echo "</a></div>
                    -->
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel nohinsyo_button\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_pdf_y01", ["ids[]" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "orderNo", [], "any", false, false, false, 105)]), "html", null, true);
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
        return array (  238 => 107,  231 => 105,  224 => 103,  216 => 101,  208 => 99,  206 => 98,  202 => 96,  196 => 94,  194 => 93,  190 => 91,  182 => 89,  180 => 88,  176 => 86,  173 => 85,  166 => 81,  152 => 70,  149 => 69,  146 => 68,  139 => 64,  136 => 63,  133 => 62,  126 => 58,  123 => 57,  120 => 56,  117 => 55,  110 => 51,  107 => 50,  104 => 49,  101 => 48,  99 => 47,  93 => 44,  90 => 43,  87 => 42,  84 => 41,  82 => 40,  72 => 33,  53 => 16,  49 => 15,  44 => 11,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/complete.twig", "/var/www/htdocs/ec922501/app/template/default/Shopping/complete.twig");
    }
}
