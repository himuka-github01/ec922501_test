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

/* Shopping/nonmember.twig */
class __TwigTemplate_5a90c3a4efae699f9b7b1f4ed33f3a3aa869016d2cc5e447e72d6a828fe27faf extends \Eccube\Twig\Template
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
        // line 13
        $context["body_class"] = "cart_page";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/nonmember.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<script>
    ";
        // line 21
        echo "    function buttonClick() {
        const btnHide = document.getElementById(\"nonmember_Recieve_1\");
        const btnHide1 = document.getElementById(\"nonmember_Recieve_2\");
        const address = document.getElementById(\"address\");
        const shiharai = document.getElementById(\"shiharai\");
        const deliverytime = document.getElementById(\"deliverytime\");
        const delivery = document.getElementById(\"delivery\");
        const visit = document.getElementById(\"visit\");
        const address2 = document.getElementById(\"address2\");
        const uketori = document.getElementById(\"uketori\");

        if (btnHide && btnHide.checked) {
            address.style.display = \"none\";
            shiharai.style.display = \"none\";
            deliverytime.style.display = \"none\";
            delivery.style.display = \"none\";
            visit.style.display = \"\";
            address2.style.display = \"none\";
            uketori.style.display = \"\";
        } else if (btnHide1 && btnHide1.checked) {
            address.style.display = \"\";
            shiharai.style.display = \"\";
            deliverytime.style.display = \"\";
            delivery.style.display = \"\";
            visit.style.display = \"none\";
            address2.style.display = \"\";
            uketori.style.display = \"none\";
        } else {
            address.style.display = \"\";
            shiharai.style.display = \"\";
            deliverytime.style.display = \"\";
            delivery.style.display = \"\";
            visit.style.display = \"\";
            address2.style.display = \"\";
            uketori.style.display = \"\";
        }
    }
</script>
";
    }

    // line 61
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "<style>
    dl.hiddenItem {
        display: none;
    }
    .hiddenItem {
        display: none;
    }

</style>

<div class=\"ec-customerRole\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報の入力"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 79
        $context["step"] = 1;
        // line 80
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 81
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 82
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 86
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 87
            echo "                    <li class=\"ec-progress__item is-complete\">
                        <div class=\"ec-progress__number\">";
            // line 88
            echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
            // line 89
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 94
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 95
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 96
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 101
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 102
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 107
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
        // line 108
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>
    </div>
    ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 115), "flashbag", [], "any", false, false, false, 115), "has", [0 => "error"], "method", false, false, false, 115)) {
            // line 116
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 117), "flashbag", [], "any", false, false, false, 117), "get", [0 => "error"], "method", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 118
                echo "                <p>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い方法が選択されていません。"), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "            </div>
            ";
        }
        // line 122
        echo "    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <form method=\"post\" action=\"";
        // line 124
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_nonmember");
        echo "\" class=\"h-adr\">
            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 126), 'widget');
        echo "
            <div class=\"ec-borderedDefs\">
                <dl>
                    <dt>
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 130), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前（漢字）"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 133
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 133), "name01", [], "any", false, false, false, 133), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 133), "name02", [], "any", false, false, false, 133))) ? (" error") : (""));
        echo "\">
                            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 134), "name01", [], "any", false, false, false, 134), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 135), "name02", [], "any", false, false, false, 135), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 136), "name01", [], "any", false, false, false, 136), 'errors');
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 137), "name02", [], "any", false, false, false, 137), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 143), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 146
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 146), "kana01", [], "any", false, false, false, 146), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 146), "kana02", [], "any", false, false, false, 146))) ? (" error") : (""));
        echo "\">
                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 147), "kana01", [], "any", false, false, false, 147), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 148), "kana02", [], "any", false, false, false, 148), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 149), "kana01", [], "any", false, false, false, 149), 'errors');
        echo "
                            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 150), "kana02", [], "any", false, false, false, 150), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shain_flg", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "社員の方はチェックしてください。"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-checkbox\">
                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shain_flg", [], "any", false, false, false, 160), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("社員")]);
        echo "
                            <font color=\"red\">※注文者が社員（パート・バイト含む）ならチェックを入れる</font>
                        </div>
                    </dd>
                </dl>
                ";
        // line 166
        echo "                 <dl>
                    <dt>
                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Recieve", [], "any", false, false, false, 168), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "受取方法"]);
        echo "</br>
                        <font color=\"red\">最初に必ず選択してください。</font>
                    </dt>
                    <dd>
                        <div class=\"ec-radio\" name=\"店頭受取\" onclick=\"buttonClick()\" >
                            ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Recieve", [], "any", false, false, false, 173));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 174
            echo "                                <div style=\"display: block;\" >
                                ";
            // line 175
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["checked" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 175), "value", [], "any", false, false, false, 175) == "店頭受取")]]);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Recieve", [], "any", false, false, false, 178), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <!--
                <dl>
                    <dt>
                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 185), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 188
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 188))) ? (" error") : (""));
        echo "\">
                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 189), 'widget');
        echo "
                            ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 190), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                -->
                ";
        // line 195
        if (twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_delivery_address_use", [], "any", false, false, false, 195)) {
            // line 196
            echo "                <dl id = \"address\" >
                    <dt>
                        ";
            // line 198
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 198), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "ご注文者様住所"]);
            echo " <font color=\"red\">※入力必須</font><br>
                        <font color=\"red\">※配送の場合のみ記入してください。</font>
                    </dt>
                    <dd>
                        <form class=\"h-adr\">
                        <div class=\"ec-zipInput";
            // line 203
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 203))) ? (" error") : (""));
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            ";
            // line 205
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 205), 'widget');
            echo "
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img
                                                src=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span></a>
                            </div>
                            ";
            // line 213
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 213), 'errors');
            echo "
                        </div>
                        <div class=\"ec-select";
            // line 215
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 215), "pref", [], "any", false, false, false, 215))) ? (" error") : (""));
            echo "\">
                            ";
            // line 216
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 216), "pref", [], "any", false, false, false, 216), 'widget');
            echo "
                            ";
            // line 217
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 217), "pref", [], "any", false, false, false, 217), 'errors');
            echo "
                        </div>
                        <div class=\"ec-input";
            // line 219
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 219), "addr01", [], "any", false, false, false, 219))) ? (" error") : (""));
            echo "\">
                            ";
            // line 220
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 220), "addr01", [], "any", false, false, false, 220), 'widget', ["attr" => ["placeholder" => "市区町村名・番地(例：大阪市北区1-1-1)"]]);
            echo "
                            ";
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 221), "addr01", [], "any", false, false, false, 221), 'errors');
            echo "
                        </div>
                        <div class=\"ec-input";
            // line 223
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 223), "addr02", [], "any", false, false, false, 223))) ? (" error") : (""));
            echo "\">
                            ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 224), "addr02", [], "any", false, false, false, 224), 'widget', ["attr" => ["placeholder" => "アパート・マンション名(例：〇〇マンション〇〇号室)"]]);
            echo "
                            ";
            // line 225
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 225), "addr02", [], "any", false, false, false, 225), 'errors');
            echo "
                        </div>
                    </dd>
                 </dl>
                 ";
            // line 230
            echo "                 <dl id=\"address2\">
                    <dt>
                        ";
            // line 232
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 232), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お届け先住所"]);
            echo "</span><span> <font color=\"red\">※入力必須</font></span><br>
                        <font color=\"red\">※配送の場合のみ記入してください。</font><br>
                    </dt>
                   <dd>
                        ";
            // line 236
            echo "＜お名前(漢字)＞";
            echo "
                        <div class=\"ec-halfInput\">
                            ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "h_name1", [], "any", false, false, false, 238), 'widget', ["attr" => ["placeholder" => "姓"]]);
            echo "
                            ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "h_name2", [], "any", false, false, false, 239), 'widget', ["attr" => ["placeholder" => "名"]]);
            echo "
                        </div>
                        ";
            // line 241
            echo "＜お名前(カナ)＞";
            echo "
                        <div class=\"ec-halfInput\">
                            ";
            // line 243
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "h_kana1", [], "any", false, false, false, 243), 'widget', ["attr" => ["placeholder" => "セイ"]]);
            echo "
                            ";
            // line 244
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "h_kana2", [], "any", false, false, false, 244), 'widget', ["attr" => ["placeholder" => "メイ"]]);
            echo "
                        </div>
                        ";
            // line 247
            echo "                        ";
            echo "＜お届け先住所＞";
            echo "<font color =\"red\"font size=\"3\">※配送先住所は手入力をして下さい。</font><br>
                        <div class=\"ec-zipInput\"><span>";
            // line 248
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                            ";
            // line 249
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "h_postal_code", [], "any", false, false, false, 249), 'widget', ["attr" => ["placeholder" => "例：5300000"]]);
            echo "
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img src=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                </div>
                                <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span></a>
                            </div>
                        </div>
                        <div class=\"ec-select\">
                            ";
            // line 258
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Hpref", [], "any", false, false, false, 258), 'widget');
            echo "
                        <div class=\"ec-input\">
                            ";
            // line 260
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "h_addr1", [], "any", false, false, false, 260), 'widget', ["attr" => ["placeholder" => "市区町村名・番地(例：大阪市北区1-1-1)"]]);
            echo "
                        <div class=\"ec-input\">
                            ";
            // line 262
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "h_addr2", [], "any", false, false, false, 262), 'widget', ["attr" => ["placeholder" => "アパート・マンション名(例：〇〇マンション〇〇号室)"]]);
            echo "
                        </div>
                        ";
            // line 264
            echo "＜お届け先電話番号＞";
            echo "<br>
                        <div class=\"ec-telInput\">
                            ";
            // line 266
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "h_phone_number", [], "any", false, false, false, 266), 'widget');
            echo "
                        </div>
                    </dd>
                 </dl>
                 ";
            // line 271
            echo "                 <dl id= \"shiharai\" >
                    <dt>
                        ";
            // line 273
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shiharai", [], "any", false, false, false, 273), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "支払い状況"]);
            echo "
                    </dt>
                    <dd>
                        <div class=\"ec-radio\"name=\"shiharai\">
                           ";
            // line 277
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shiharai", [], "any", false, false, false, 277), 'widget', ["data" => "1"]);
            echo " 
                        </div>
                    </dd>
                </dl>
                ";
        }
        // line 282
        echo "                <!--
                <input type=\"hidden\" name=\"nonmember[name][name01]\" value=\"";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 283), "name01", [], "any", false, false, false, 283), 'widget');
        echo "\">
                <input type=\"hidden\" name=\"nonmember[name][name02]\" value=\"";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 284), "name02", [], "any", false, false, false, 284), 'widget');
        echo "\">
                -->
                ";
        // line 291
        echo "                <input type=\"hidden\" name=\"nonmember[email][first]\" value=\"dummy@dummy.com\">
                <input type=\"hidden\" name=\"nonmember[email][second]\" value=\"dummy@dummy.com\">
                <dl>
                    <dt>
                        ";
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 295), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-telInput";
        // line 298
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 298))) ? (" error") : (""));
        echo "\">
                            ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 299), 'widget');
        echo "
                            ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 300), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl id =\"delivery\">
                    <dt>
                        ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shipping_delivery_date", [], "any", false, false, false, 306), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お届け日"]);
        echo " <font color=\"red\" font size=\"2\"> 必須</font><br>
                        <font color=\"red\" font size=\"2\">※配送の場合は必ずお届け予定・お届け希望時間帯を選択してください。</font><br> 
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__delivery\">
                            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shipping_delivery_date", [], "any", false, false, false, 311), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shipping_delivery_date", [], "any", false, false, false, 312), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl id = \"deliverytime\">
                    <dt>
                        ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DeliveryTime", [], "any", false, false, false, 318), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お届けご希望時間帯"]);
        echo " <font color=\"red\" font size=\"2\"> 必須</font><br>
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DeliveryTime", [], "any", false, false, false, 322), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "DeliveryTime", [], "any", false, false, false, 323), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl id = \"paymentstatus\">
                    <dt>
                        ";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 329), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お支払い方法"]);
        echo " <font color=\"red\" font size=\"2\"> 必須</font><br>
                    <dd>
                        <div class=\"ec-radio\"name=\"paymentstatus\">
                            ";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 332));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 333
            echo "                                <div style=\"display: block;\">
                                    ";
            // line 334
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["data" => "1"]);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 337), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                ";
        // line 342
        echo "                <dl id =\"uketori\">
                    <dt>
                        ";
        // line 344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shipping_delivery_date", [], "any", false, false, false, 344), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "来店受取日"]);
        echo " <font color=\"red\" font size=\"2\"> 必須</font><br>
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            ";
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Ukedate", [], "any", false, false, false, 348), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </dd>
                </dl>
               <dl id=\"visit\">
                <dt>
                    ";
        // line 355
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Visit", [], "any", false, false, false, 355), 'label', ["label" => "来店時間"]);
        echo " <font color=\"red\" size=\"2\">必須</font><br>
                </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            ";
        // line 359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Visit", [], "any", false, false, false, 359), 'widget');
        echo "
                            ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Visit", [], "any", false, false, false, 360), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                <dt>
                    ";
        // line 367
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tenpos", [], "any", false, false, false, 367), 'label', ["label" => "受付店鋪"]);
        echo "
                </dt>
                    <dd>
                        <div class=\"ec-select\">
                            ";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tenpos", [], "any", false, false, false, 371), 'widget');
        echo "
                            ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tenpos", [], "any", false, false, false, 372), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uketsuke_name", [], "any", false, false, false, 378), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "受付担当"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 381
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uketsuke_name", [], "any", false, false, false, 381))) ? (" error") : (""));
        echo "\">
                            ";
        // line 382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uketsuke_name", [], "any", false, false, false, 382), 'widget');
        echo "
                            ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uketsuke_name", [], "any", false, false, false, 383), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl class=\"hiddenItem\">
                    <dt>
                        ";
        // line 389
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shoukai_name", [], "any", false, false, false, 389), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "紹介者"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 392
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shoukai_name", [], "any", false, false, false, 392))) ? (" error") : (""));
        echo "\">
                            ";
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shoukai_name", [], "any", false, false, false, 393), 'widget');
        echo "
                            ";
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shoukai_name", [], "any", false, false, false, 394), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 400), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "備考（3,000文字以内）"]);
        echo "<br>
                    </dt>
                    <dd>
                        <div class=\"ec-input";
        // line 403
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 403))) ? (" error") : (""));
        echo "\">
                            ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 404), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(3000文字まで)"), "rows" => "6"]]);
        echo "
                            ";
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 405), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
            </div>
            <div class=\"ec-RegisterRole__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次へ"), "html", null, true);
        echo "</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 414
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Shopping/nonmember.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 414,  823 => 413,  812 => 405,  808 => 404,  804 => 403,  798 => 400,  789 => 394,  785 => 393,  781 => 392,  775 => 389,  766 => 383,  762 => 382,  758 => 381,  752 => 378,  743 => 372,  739 => 371,  731 => 367,  722 => 360,  718 => 359,  710 => 355,  701 => 348,  694 => 344,  690 => 342,  682 => 337,  673 => 334,  670 => 333,  666 => 332,  660 => 329,  651 => 323,  647 => 322,  640 => 318,  631 => 312,  627 => 311,  619 => 306,  610 => 300,  606 => 299,  602 => 298,  596 => 295,  590 => 291,  585 => 284,  581 => 283,  578 => 282,  570 => 277,  563 => 273,  559 => 271,  552 => 266,  547 => 264,  542 => 262,  537 => 260,  532 => 258,  525 => 254,  520 => 252,  514 => 249,  510 => 248,  505 => 247,  500 => 244,  496 => 243,  491 => 241,  486 => 239,  482 => 238,  477 => 236,  470 => 232,  466 => 230,  459 => 225,  455 => 224,  451 => 223,  446 => 221,  442 => 220,  438 => 219,  433 => 217,  429 => 216,  425 => 215,  420 => 213,  415 => 211,  410 => 209,  403 => 205,  396 => 203,  388 => 198,  384 => 196,  382 => 195,  374 => 190,  370 => 189,  366 => 188,  360 => 185,  349 => 178,  340 => 175,  337 => 174,  333 => 173,  325 => 168,  321 => 166,  313 => 160,  306 => 156,  297 => 150,  293 => 149,  289 => 148,  285 => 147,  281 => 146,  275 => 143,  266 => 137,  262 => 136,  258 => 135,  254 => 134,  250 => 133,  244 => 130,  237 => 126,  232 => 124,  228 => 122,  224 => 120,  215 => 118,  211 => 117,  208 => 116,  206 => 115,  197 => 109,  194 => 108,  191 => 107,  184 => 103,  181 => 102,  178 => 101,  171 => 97,  168 => 96,  165 => 95,  162 => 94,  155 => 90,  152 => 89,  149 => 88,  146 => 87,  144 => 86,  138 => 83,  135 => 82,  132 => 81,  129 => 80,  127 => 79,  119 => 74,  105 => 62,  101 => 61,  59 => 21,  56 => 19,  52 => 17,  47 => 11,  45 => 15,  43 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/nonmember.twig", "/var/www/htdocs/ec922501/app/template/default/Shopping/nonmember.twig");
    }
}
