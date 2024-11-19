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
class __TwigTemplate_0788c9553c561a5a9be12a672008b4610a397fcbc3777c161b7d574f14023d62 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/nonmember.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/nonmember.twig"));

        // line 13
        $context["body_class"] = "cart_page";
        // line 15
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/nonmember.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 81, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 81, $this->source); })()) + 1);
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
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 88, $this->source); })()), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 88, $this->source); })()) + 1);
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
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 95, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 95, $this->source); })()) + 1);
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
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 101, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 101, $this->source); })()) + 1);
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
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 107, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 107, $this->source); })()) + 1);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "session", [], "any", false, false, false, 115), "flashbag", [], "any", false, false, false, 115), "has", [0 => "error"], "method", false, false, false, 115)) {
            // line 116
            echo "            <div class=\"alert alert-danger\">
            ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "session", [], "any", false, false, false, 117), "flashbag", [], "any", false, false, false, 117), "get", [0 => "error"], "method", false, false, false, 117));
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_nonmember");
        echo "\" class=\"h-adr\">
            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "_token", [], "any", false, false, false, 126), 'widget');
        echo "
            <div class=\"ec-borderedDefs\">
                <dl>
                    <dt>
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "name", [], "any", false, false, false, 130), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前（漢字）"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 133
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "name", [], "any", false, false, false, 133), "name01", [], "any", false, false, false, 133), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "name", [], "any", false, false, false, 133), "name02", [], "any", false, false, false, 133))) ? (" error") : (""));
        echo "\">
                            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "name", [], "any", false, false, false, 134), "name01", [], "any", false, false, false, 134), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), "name02", [], "any", false, false, false, 135), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "name", [], "any", false, false, false, 136), "name01", [], "any", false, false, false, 136), 'errors');
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "name", [], "any", false, false, false, 137), "name02", [], "any", false, false, false, 137), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "kana", [], "any", false, false, false, 143), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 146
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "kana", [], "any", false, false, false, 146), "kana01", [], "any", false, false, false, 146), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "kana", [], "any", false, false, false, 146), "kana02", [], "any", false, false, false, 146))) ? (" error") : (""));
        echo "\">
                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "kana", [], "any", false, false, false, 147), "kana01", [], "any", false, false, false, 147), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "kana", [], "any", false, false, false, 148), "kana02", [], "any", false, false, false, 148), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "kana", [], "any", false, false, false, 149), "kana01", [], "any", false, false, false, 149), 'errors');
        echo "
                            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "kana", [], "any", false, false, false, 150), "kana02", [], "any", false, false, false, 150), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "shain_flg", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "社員の方はチェックしてください。"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-checkbox\">
                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "shain_flg", [], "any", false, false, false, 160), 'widget', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("社員")]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "Recieve", [], "any", false, false, false, 168), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "受取方法"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-radio\" name=\"店頭受取\" onclick=\"buttonClick()\" >
                            ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "Recieve", [], "any", false, false, false, 172));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 173
            echo "                                <div style=\"display: block;\" >
                                ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["checked" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 174), "value", [], "any", false, false, false, 174) == "店頭受取")]]);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "Recieve", [], "any", false, false, false, 177), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <!--
                <dl>
                    <dt>
                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "company_name", [], "any", false, false, false, 184), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 187
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "company_name", [], "any", false, false, false, 187))) ? (" error") : (""));
        echo "\">
                            ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "company_name", [], "any", false, false, false, 188), 'widget');
        echo "
                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "company_name", [], "any", false, false, false, 189), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                -->
                ";
        // line 194
        if (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 194, $this->source); })()), "hdn_delivery_address_use", [], "any", false, false, false, 194)) {
            // line 195
            echo "                <dl id = \"address\" >
                    <dt>
                        ";
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "address", [], "any", false, false, false, 197), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "ご注文者様住所"]);
            echo "<br>
                        <font color=\"red\">※配送の場合のみ記入してください。</font>
                    </dt>
                    <dd>
                        <form class=\"h-adr\">
                        <div class=\"ec-zipInput";
            // line 202
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "postal_code", [], "any", false, false, false, 202))) ? (" error") : (""));
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            ";
            // line 204
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "postal_code", [], "any", false, false, false, 204), 'widget');
            echo "
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img
                                                src=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span></a>
                            </div>
                            ";
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "postal_code", [], "any", false, false, false, 212), 'errors');
            echo "
                        </div>
                        <div class=\"ec-select";
            // line 214
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "address", [], "any", false, false, false, 214), "pref", [], "any", false, false, false, 214))) ? (" error") : (""));
            echo "\">
                            ";
            // line 215
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "address", [], "any", false, false, false, 215), "pref", [], "any", false, false, false, 215), 'widget');
            echo "
                            ";
            // line 216
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "address", [], "any", false, false, false, 216), "pref", [], "any", false, false, false, 216), 'errors');
            echo "
                        </div>
                        <div class=\"ec-input";
            // line 218
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "address", [], "any", false, false, false, 218), "addr01", [], "any", false, false, false, 218))) ? (" error") : (""));
            echo "\">
                            ";
            // line 219
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "address", [], "any", false, false, false, 219), "addr01", [], "any", false, false, false, 219), 'widget', ["attr" => ["placeholder" => "市区町村名・番地(例：大阪市北区1-1-1)"]]);
            echo "
                            ";
            // line 220
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "address", [], "any", false, false, false, 220), "addr01", [], "any", false, false, false, 220), 'errors');
            echo "
                        </div>
                        <div class=\"ec-input";
            // line 222
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "address", [], "any", false, false, false, 222), "addr02", [], "any", false, false, false, 222))) ? (" error") : (""));
            echo "\">
                            ";
            // line 223
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "address", [], "any", false, false, false, 223), "addr02", [], "any", false, false, false, 223), 'widget', ["attr" => ["placeholder" => "アパート・マンション名(例：〇〇マンション〇〇号室)"]]);
            echo "
                            ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "address", [], "any", false, false, false, 224), "addr02", [], "any", false, false, false, 224), 'errors');
            echo "
                        </div>
                    </dd>
                 </dl>
                 ";
            // line 229
            echo "                 <dl id=\"address2\">
                    <dt>
                        ";
            // line 231
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "address", [], "any", false, false, false, 231), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お届け先住所"]);
            echo "</span><br>
                        <font color=\"red\">※配送の場合のみ記入してください。</font><br>
                        <font color=\"red\">※入力必須</font>
                    </dt>
                   <dd>
                        ";
            // line 236
            echo "＜お名前(漢字)＞";
            echo "
                        <div class=\"ec-halfInput\">
                            ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "h_name1", [], "any", false, false, false, 238), 'widget', ["attr" => ["placeholder" => "姓"]]);
            echo "
                            ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "h_name2", [], "any", false, false, false, 239), 'widget', ["attr" => ["placeholder" => "名"]]);
            echo "
                        </div>
                        ";
            // line 241
            echo "＜お名前(カナ)＞";
            echo "
                        <div class=\"ec-halfInput\">
                            ";
            // line 243
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "h_kana1", [], "any", false, false, false, 243), 'widget', ["attr" => ["placeholder" => "セイ"]]);
            echo "
                            ";
            // line 244
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "h_kana2", [], "any", false, false, false, 244), 'widget', ["attr" => ["placeholder" => "メイ"]]);
            echo "
                        </div>
                        ";
            // line 247
            echo "                        ";
            echo "＜お届け先住所＞";
            echo "<font color =\"red\"font size=\"3\">※配送先住所は手入力をして下さい。</font><br>
                        <font color=\"red\">※入力必須</font>
                        <div class=\"ec-zipInput\"><span>";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                            ";
            // line 250
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "h_postal_code", [], "any", false, false, false, 250), 'widget', ["attr" => ["placeholder" => "例：5300000"]]);
            echo "
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img src=\"";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\"></div>
                                </div>
                                <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span></a>
                            </div>
                        </div>
                        <div class=\"ec-select\">
                            ";
            // line 259
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "Hpref", [], "any", false, false, false, 259), 'widget');
            echo "
                        <div class=\"ec-input\">
                            ";
            // line 261
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "h_addr1", [], "any", false, false, false, 261), 'widget', ["attr" => ["placeholder" => "市区町村名・番地(例：大阪市北区1-1-1)"]]);
            echo "
                        <div class=\"ec-input\">
                            ";
            // line 263
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "h_addr2", [], "any", false, false, false, 263), 'widget', ["attr" => ["placeholder" => "アパート・マンション名(例：〇〇マンション〇〇号室)"]]);
            echo "
                        </div>
                        ";
            // line 265
            echo "＜お届け先電話番号＞";
            echo "<br>
                        <div class=\"ec-telInput\">
                            ";
            // line 267
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "h_phone_number", [], "any", false, false, false, 267), 'widget');
            echo "
                        </div>
                    </dd>
                 </dl>
                 ";
            // line 272
            echo "                 <dl id= \"shiharai\" >
                    <dt>
                        ";
            // line 274
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "Shiharai", [], "any", false, false, false, 274), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "支払い状況"]);
            echo "
                    </dt>
                    <dd>
                        <div class=\"ec-radio\"name=\"shiharai\">
                           ";
            // line 278
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "Shiharai", [], "any", false, false, false, 278), 'widget', ["data" => "1"]);
            echo " 
                        </div>
                    </dd>
                </dl>
                ";
        }
        // line 283
        echo "                <!--
                <input type=\"hidden\" name=\"nonmember[name][name01]\" value=\"";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "name", [], "any", false, false, false, 284), "name01", [], "any", false, false, false, 284), 'widget');
        echo "\">
                <input type=\"hidden\" name=\"nonmember[name][name02]\" value=\"";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "name", [], "any", false, false, false, 285), "name02", [], "any", false, false, false, 285), 'widget');
        echo "\">
                -->
                ";
        // line 292
        echo "                <input type=\"hidden\" name=\"nonmember[email][first]\" value=\"dummy@dummy.com\">
                <input type=\"hidden\" name=\"nonmember[email][second]\" value=\"dummy@dummy.com\">
                <dl>
                    <dt>
                        ";
        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "phone_number", [], "any", false, false, false, 296), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-telInput";
        // line 299
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "phone_number", [], "any", false, false, false, 299))) ? (" error") : (""));
        echo "\">
                            ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "phone_number", [], "any", false, false, false, 300), 'widget');
        echo "
                            ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "phone_number", [], "any", false, false, false, 301), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl id =\"delivery\">
                    <dt>
                        ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 307), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お届け日"]);
        echo " <font color=\"red\" font size=\"2\"> 必須</font><br>
                        <font color=\"red\" font size=\"2\">※配送の場合は必ずお届け予定・お届け希望時間帯を選択してください。</font><br> 
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__delivery\">
                            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 312), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 313), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl id = \"deliverytime\">
                    <dt>
                        ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "DeliveryTime", [], "any", false, false, false, 319), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お届けご希望時間帯"]);
        echo " <font color=\"red\" font size=\"2\"> 必須</font><br>
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "DeliveryTime", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "DeliveryTime", [], "any", false, false, false, 324), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl id = \"paymentstatus\">
                    <dt>
                        ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), "Payment", [], "any", false, false, false, 330), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お支払い方法"]);
        echo " <font color=\"red\" font size=\"2\"> 必須</font><br>
                    <dd>
                        <div class=\"ec-radio\"name=\"paymentstatus\">
                            ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "Payment", [], "any", false, false, false, 333));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 334
            echo "                                <div style=\"display: block;\">
                                    ";
            // line 335
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["data" => "1"]);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "Payment", [], "any", false, false, false, 338), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                ";
        // line 343
        echo "                <dl id =\"uketori\">
                    <dt>
                        ";
        // line 345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 345), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "来店受取日"]);
        echo " <font color=\"red\" font size=\"2\"> 必須</font><br>
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "Ukedate", [], "any", false, false, false, 349), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </dd>
                </dl>
               <dl id=\"visit\">
                <dt>
                    ";
        // line 356
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "Visit", [], "any", false, false, false, 356), 'label', ["label" => "来店時間"]);
        echo " <font color=\"red\" size=\"2\">必須</font><br>
                </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 360, $this->source); })()), "Visit", [], "any", false, false, false, 360), 'widget');
        echo "
                            ";
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "Visit", [], "any", false, false, false, 361), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                <dt>
                    ";
        // line 368
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "Tenpos", [], "any", false, false, false, 368), 'label', ["label" => "受付店鋪"]);
        echo "
                </dt>
                    <dd>
                        <div class=\"ec-select\">
                            ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "Tenpos", [], "any", false, false, false, 372), 'widget');
        echo "
                            ";
        // line 373
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "Tenpos", [], "any", false, false, false, 373), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 379, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 379), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "受付担当"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 382
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 382))) ? (" error") : (""));
        echo "\">
                            ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 383), 'widget');
        echo "
                            ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 384), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl class=\"hiddenItem\">
                    <dt>
                        ";
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "shoukai_name", [], "any", false, false, false, 390), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "紹介者"]);
        echo "
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput";
        // line 393
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "shoukai_name", [], "any", false, false, false, 393))) ? (" error") : (""));
        echo "\">
                            ";
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "shoukai_name", [], "any", false, false, false, 394), 'widget');
        echo "
                            ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), "shoukai_name", [], "any", false, false, false, 395), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "message", [], "any", false, false, false, 401), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "備考（3,000文字以内）"]);
        echo "<br>
                    </dt>
                    <dd>
                        <div class=\"ec-input";
        // line 404
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "message", [], "any", false, false, false, 404))) ? (" error") : (""));
        echo "\">
                            ";
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "message", [], "any", false, false, false, 405), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(3000文字まで)"), "rows" => "6"]]);
        echo "
                            ";
        // line 406
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "message", [], "any", false, false, false, 406), 'errors');
        echo "
                        </div>
                    </dd>
                </dl>
            </div>
            <div class=\"ec-RegisterRole__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次へ"), "html", null, true);
        echo "</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 415
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  858 => 415,  854 => 414,  843 => 406,  839 => 405,  835 => 404,  829 => 401,  820 => 395,  816 => 394,  812 => 393,  806 => 390,  797 => 384,  793 => 383,  789 => 382,  783 => 379,  774 => 373,  770 => 372,  762 => 368,  753 => 361,  749 => 360,  741 => 356,  732 => 349,  725 => 345,  721 => 343,  713 => 338,  704 => 335,  701 => 334,  697 => 333,  691 => 330,  682 => 324,  678 => 323,  671 => 319,  662 => 313,  658 => 312,  650 => 307,  641 => 301,  637 => 300,  633 => 299,  627 => 296,  621 => 292,  616 => 285,  612 => 284,  609 => 283,  601 => 278,  594 => 274,  590 => 272,  583 => 267,  578 => 265,  573 => 263,  568 => 261,  563 => 259,  556 => 255,  551 => 253,  545 => 250,  541 => 249,  535 => 247,  530 => 244,  526 => 243,  521 => 241,  516 => 239,  512 => 238,  507 => 236,  499 => 231,  495 => 229,  488 => 224,  484 => 223,  480 => 222,  475 => 220,  471 => 219,  467 => 218,  462 => 216,  458 => 215,  454 => 214,  449 => 212,  444 => 210,  439 => 208,  432 => 204,  425 => 202,  417 => 197,  413 => 195,  411 => 194,  403 => 189,  399 => 188,  395 => 187,  389 => 184,  378 => 177,  369 => 174,  366 => 173,  362 => 172,  355 => 168,  351 => 166,  343 => 160,  336 => 156,  327 => 150,  323 => 149,  319 => 148,  315 => 147,  311 => 146,  305 => 143,  296 => 137,  292 => 136,  288 => 135,  284 => 134,  280 => 133,  274 => 130,  267 => 126,  262 => 124,  258 => 122,  254 => 120,  245 => 118,  241 => 117,  238 => 116,  236 => 115,  227 => 109,  224 => 108,  221 => 107,  214 => 103,  211 => 102,  208 => 101,  201 => 97,  198 => 96,  195 => 95,  192 => 94,  185 => 90,  182 => 89,  179 => 88,  176 => 87,  174 => 86,  168 => 83,  165 => 82,  162 => 81,  159 => 80,  157 => 79,  149 => 74,  135 => 62,  125 => 61,  77 => 21,  74 => 19,  64 => 17,  53 => 11,  51 => 15,  49 => 13,  36 => 11,);
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

{% form_theme form 'Form/form_div_layout.twig' %}

{% block javascript %}
{# <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script> #}
<script>
    {# 受取方法の分岐追加 240724 田中 #}
    function buttonClick() {
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
{% endblock javascript %}

{% block main %}
<style>
    dl.hiddenItem {
        display: none;
    }
    .hiddenItem {
        display: none;
    }

</style>

<div class=\"ec-customerRole\">
    <div class=\"ec-pageHeader\">
        <h1>{{ 'お客様情報の入力'|trans }}</h1>
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
                    <li class=\"ec-progress__item is-complete\">
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
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ '完了'|trans }}
                    </div>
                </li>
            </ul>
        </div>
    </div>
    {% if app.session.flashbag.has('error') %}
            <div class=\"alert alert-danger\">
            {% for message in app.session.flashbag.get('error') %}
                <p>{{ 'お支払い方法が選択されていません。'|trans }}</p>
            {% endfor %}
            </div>
            {% endif %}
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <form method=\"post\" action=\"{{ url('shopping_nonmember') }}\" class=\"h-adr\">
            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
            {{ form_widget(form._token) }}
            <div class=\"ec-borderedDefs\">
                <dl>
                    <dt>
                        {{ form_label(form.name, 'お名前（漢字）', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput{{ has_errors(form.name.name01, form.name.name02) ? ' error'}}\">
                            {{ form_widget(form.name.name01, { 'attr': { 'placeholder': '姓' }}) }}
                            {{ form_widget(form.name.name02, { 'attr': { 'placeholder': '名' }}) }}
                            {{ form_errors(form.name.name01) }}
                            {{ form_errors(form.name.name02) }}
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        {{ form_label(form.kana, 'お名前(カナ)', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput{{ has_errors(form.kana.kana01, form.kana.kana02) ? ' error'}}\">
                            {{ form_widget(form.kana.kana01, { 'attr': { 'placeholder': 'セイ' }}) }}
                            {{ form_widget(form.kana.kana02, { 'attr': { 'placeholder': 'メイ' }}) }}
                            {{ form_errors(form.kana.kana01) }}
                            {{ form_errors(form.kana.kana02) }}
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        {{ form_label(form.shain_flg, '社員の方はチェックしてください。', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-checkbox\">
                            {{ form_widget(form.shain_flg, { 'label': '社員'|trans }) }}
                            <font color=\"red\">※注文者が社員（パート・バイト含む）ならチェックを入れる</font>
                        </div>
                    </dd>
                </dl>
                {# 受取方法の追加 2024/08/23 田中 #}
                 <dl>
                    <dt>
                        {{ form_label(form.Recieve, '受取方法', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-radio\" name=\"店頭受取\" onclick=\"buttonClick()\" >
                            {% for key, child in form.Recieve %}
                                <div style=\"display: block;\" >
                                {{ form_widget(child, { 'attr': {'checked': child.vars.value == '店頭受取'} }) }}
                                </div>
                            {% endfor %}
                            {{ form_errors(form.Recieve) }}
                        </div>
                    </dd>
                </dl>
                <!--
                <dl>
                    <dt>
                        {{ form_label(form.company_name, '会社名', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput{{ has_errors(form.company_name) ? ' error' }}\">
                            {{ form_widget(form.company_name) }}
                            {{ form_errors(form.company_name) }}
                        </div>
                    </dd>
                </dl>
                -->
                {% if eccube_config.hdn_delivery_address_use %}
                <dl id = \"address\" >
                    <dt>
                        {{ form_label(form.address, 'ご注文者様住所', { 'label_attr': { 'class': 'ec-label' }}) }}<br>
                        <font color=\"red\">※配送の場合のみ記入してください。</font>
                    </dt>
                    <dd>
                        <form class=\"h-adr\">
                        <div class=\"ec-zipInput{{ has_errors(form.postal_code) ? ' error' }}\"><span>{{ '〒'|trans }}</span>
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            {{ form_widget(form.postal_code) }}
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img
                                                src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                    </div>
                                </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>{{ '郵便番号検索'|trans }}</span></a>
                            </div>
                            {{ form_errors(form.postal_code) }}
                        </div>
                        <div class=\"ec-select{{ has_errors(form.address.pref) ? ' error' }}\">
                            {{ form_widget(form.address.pref) }}
                            {{ form_errors(form.address.pref) }}
                        </div>
                        <div class=\"ec-input{{ has_errors(form.address.addr01) ? ' error' }}\">
                            {{ form_widget(form.address.addr01, { 'attr': { 'placeholder': '市区町村名・番地(例：大阪市北区1-1-1)' }}) }}
                            {{ form_errors(form.address.addr01) }}
                        </div>
                        <div class=\"ec-input{{ has_errors(form.address.addr02) ? ' error' }}\">
                            {{ form_widget(form.address.addr02,  { 'attr': { 'placeholder': 'アパート・マンション名(例：〇〇マンション〇〇号室)' }}) }}
                            {{ form_errors(form.address.addr02) }}
                        </div>
                    </dd>
                 </dl>
                 {# 配送先住所追加 2024/09/11 田中 #}
                 <dl id=\"address2\">
                    <dt>
                        {{ form_label(form.address, 'お届け先住所', { 'label_attr': { 'class': 'ec-label' }}) }}</span><br>
                        <font color=\"red\">※配送の場合のみ記入してください。</font><br>
                        <font color=\"red\">※入力必須</font>
                    </dt>
                   <dd>
                        {{ '＜お名前(漢字)＞' }}
                        <div class=\"ec-halfInput\">
                            {{ form_widget(form.h_name1,{ 'attr': { 'placeholder': '姓' }}) }}
                            {{ form_widget(form.h_name2,{ 'attr': { 'placeholder': '名' }}) }}
                        </div>
                        {{ '＜お名前(カナ)＞' }}
                        <div class=\"ec-halfInput\">
                            {{ form_widget(form.h_kana1,{ 'attr': { 'placeholder': 'セイ' }}) }}
                            {{ form_widget(form.h_kana2,{ 'attr': { 'placeholder': 'メイ' }}) }}
                        </div>
                        {# 配送先記述変更 2024/09/13 田中 #}
                        {{ '＜お届け先住所＞' }}<font color =\"red\"font size=\"3\">※配送先住所は手入力をして下さい。</font><br>
                        <font color=\"red\">※入力必須</font>
                        <div class=\"ec-zipInput\"><span>{{ '〒'|trans }}</span>
                            {{ form_widget(form.h_postal_code, {'attr': { 'placeholder': '例：5300000' }}) }}
                            <div class=\"ec-zipInputHelp\">
                                <div class=\"ec-zipInputHelp__icon\">
                                    <div class=\"ec-icon\"><img src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\"></div>
                                </div>
                                <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>{{ '郵便番号検索'|trans }}</span></a>
                            </div>
                        </div>
                        <div class=\"ec-select\">
                            {{ form_widget(form.Hpref) }}
                        <div class=\"ec-input\">
                            {{ form_widget(form.h_addr1,{ 'attr': { 'placeholder': '市区町村名・番地(例：大阪市北区1-1-1)' }}) }}
                        <div class=\"ec-input\">
                            {{ form_widget(form.h_addr2, { 'attr': { 'placeholder': 'アパート・マンション名(例：〇〇マンション〇〇号室)'}}) }}
                        </div>
                        {{ '＜お届け先電話番号＞' }}<br>
                        <div class=\"ec-telInput\">
                            {{ form_widget(form.h_phone_number) }}
                        </div>
                    </dd>
                 </dl>
                 {# 支払い状況の追加 2024/09/02 田中 #}
                 <dl id= \"shiharai\" >
                    <dt>
                        {{ form_label(form.Shiharai, '支払い状況', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-radio\"name=\"shiharai\">
                           {{ form_widget(form.Shiharai, { 'data': '1'}) }} 
                        </div>
                    </dd>
                </dl>
                {% endif %}
                <!--
                <input type=\"hidden\" name=\"nonmember[name][name01]\" value=\"{{ form_widget(form.name.name01) }}\">
                <input type=\"hidden\" name=\"nonmember[name][name02]\" value=\"{{ form_widget(form.name.name02) }}\">
                -->
                {# {% if eccube_config.hdn_delivery_address_use != true %}
                    <input type=\"hidden\" name=\"nonmember[postal_code]\" value=\"\">
                    <input type=\"hidden\" name=\"nonmember[address][pref]\" value=\"45\">
                    <input type=\"hidden\" name=\"nonmember[address][addr01]\" value=\"\">
                {% endif %} #}
                <input type=\"hidden\" name=\"nonmember[email][first]\" value=\"dummy@dummy.com\">
                <input type=\"hidden\" name=\"nonmember[email][second]\" value=\"dummy@dummy.com\">
                <dl>
                    <dt>
                        {{ form_label(form.phone_number, '電話番号', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-telInput{{ has_errors(form.phone_number) ? ' error' }}\">
                            {{ form_widget(form.phone_number) }}
                            {{ form_errors(form.phone_number) }}
                        </div>
                    </dd>
                </dl>
                <dl id =\"delivery\">
                    <dt>
                        {{ form_label(form.shipping_delivery_date, 'お届け日', { 'label_attr': { 'class': 'ec-label' }}) }} <font color=\"red\" font size=\"2\"> 必須</font><br>
                        <font color=\"red\" font size=\"2\">※配送の場合は必ずお届け予定・お届け希望時間帯を選択してください。</font><br> 
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__delivery\">
                            {{ form_widget(form.shipping_delivery_date, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.shipping_delivery_date) }}
                        </div>
                    </dd>
                </dl>
                <dl id = \"deliverytime\">
                    <dt>
                        {{ form_label(form.DeliveryTime, 'お届けご希望時間帯', { 'label_attr': { 'class': 'ec-label' }}) }} <font color=\"red\" font size=\"2\"> 必須</font><br>
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            {{ form_widget(form.DeliveryTime, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.DeliveryTime) }}
                        </div>
                    </dd>
                </dl>
                <dl id = \"paymentstatus\">
                    <dt>
                        {{ form_label(form.Payment, 'お支払い方法' , { 'label_attr': { 'class': 'ec-label' }}) }} <font color=\"red\" font size=\"2\"> 必須</font><br>
                    <dd>
                        <div class=\"ec-radio\"name=\"paymentstatus\">
                            {% for key, child in form.Payment %}
                                <div style=\"display: block;\">
                                    {{ form_widget(child, { 'data': '1'}) }}
                                </div>
                            {% endfor %}
                            {{ form_errors(form.Payment) }}
                        </div>
                    </dd>
                </dl>
                {# 来店受取日追加 2024/09/19 田中 #}
                <dl id =\"uketori\">
                    <dt>
                        {{ form_label(form.shipping_delivery_date, '来店受取日', { 'label_attr': { 'class': 'ec-label' }}) }} <font color=\"red\" font size=\"2\"> 必須</font><br>
                    </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            {{ form_widget(form.Ukedate,  {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </dd>
                </dl>
               <dl id=\"visit\">
                <dt>
                    {# 来店時間追加 2024/09/09 田中 Formで設定した文字列と同じにしなければならない。（例：Form側->Visitであればtwig側も先頭大文字で記述）#}
                    {{ form_label(form.Visit, '来店時間') }} <font color=\"red\" size=\"2\">必須</font><br>
                </dt>
                    <dd>
                        <div class=\"ec-select ec-select__time\">
                            {{ form_widget(form.Visit) }}
                            {{ form_errors(form.Visit) }}
                        </div>
                    </dd>
                </dl>
                <dl>
                <dt>
                    {# 受付店鋪追加 2024/09/10 田中 #}
                    {{ form_label(form.Tenpos, '受付店鋪') }}
                </dt>
                    <dd>
                        <div class=\"ec-select\">
                            {{ form_widget(form.Tenpos) }}
                            {{ form_errors(form.Tenpos) }}
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        {{ form_label(form.uketsuke_name, '受付担当', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput{{ has_errors(form.uketsuke_name) ? ' error' }}\">
                            {{ form_widget(form.uketsuke_name) }}
                            {{ form_errors(form.uketsuke_name) }}
                        </div>
                    </dd>
                </dl>
                <dl class=\"hiddenItem\">
                    <dt>
                        {{ form_label(form.shoukai_name, '紹介者', { 'label_attr': { 'class': 'ec-label' }}) }}
                    </dt>
                    <dd>
                        <div class=\"ec-halfInput{{ has_errors(form.shoukai_name) ? ' error' }}\">
                            {{ form_widget(form.shoukai_name) }}
                            {{ form_errors(form.shoukai_name) }}
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        {{ form_label(form.message, '備考（3,000文字以内）', { 'label_attr': { 'class': 'ec-label' }}) }}<br>
                    </dt>
                    <dd>
                        <div class=\"ec-input{{ has_errors(form.message) ? ' error' }}\">
                            {{ form_widget(form.message, {'attr': {'class': 'form-control', 'placeholder': '(3000文字まで)'|trans, 'rows': '6'}}) }}
                            {{ form_errors(form.message) }}
                        </div>
                    </dd>
                </dl>
            </div>
            <div class=\"ec-RegisterRole__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">{{ '次へ'|trans }}</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"{{ url('cart') }}\">{{ '戻る'|trans }}</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
{% endblock %}
", "Shopping/nonmember.twig", "/var/www/htdocs/ec922501/app/template/default/Shopping/nonmember.twig");
    }
}
