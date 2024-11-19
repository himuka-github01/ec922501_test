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

/* Shopping/shipping_edit.twig */
class __TwigTemplate_f84d9d98a53a759fc34e89b0610bcb9230458091d381db37c3a2c8aacfd064bc extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping_edit.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping_edit.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 15
        $context["body_class"] = "cart_page";
        // line 17
        if (twig_test_empty($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 18
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_edit_title_nomember");
        }
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 26
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 30
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_edit_header_customer"), "html", null, true);
            echo "</h1>
            ";
        } else {
            // line 32
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_edit_header_nonmember"), "html", null, true);
            echo "</h1>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-registerRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <form method=\"post\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping_edit", ["id" => (isset($context["shippingId"]) || array_key_exists("shippingId", $context) ? $context["shippingId"] : (function () { throw new RuntimeError('Variable "shippingId" does not exist.', 41, $this->source); })())]), "html", null, true);
        echo "\" class=\"h-adr\">
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "_token", [], "any", false, false, false, 43), 'widget');
        echo "
                        <div class=\"ec-borderedDefs\">
                            <dl>
                                <dt>
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.name"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 50
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "name01", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "name02", [], "any", false, false, false, 50))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "name01", [], "any", false, false, false, 51), 'widget', ["attr" => ["placeholder" => "common.last_name"]]);
        echo "
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "name02", [], "any", false, false, false, 52), 'widget', ["attr" => ["placeholder" => "common.first_name"]]);
        echo "
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "name01", [], "any", false, false, false, 53), 'errors');
        echo "
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "name02", [], "any", false, false, false, 54), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "kana", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.kana"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 63
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "kana", [], "any", false, false, false, 63), "kana01", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "kana", [], "any", false, false, false, 63), "kana02", [], "any", false, false, false, 63))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "kana", [], "any", false, false, false, 64), "kana01", [], "any", false, false, false, 64), 'widget', ["attr" => ["placeholder" => "common.last_name_kana"]]);
        echo "
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "kana", [], "any", false, false, false, 65), "kana02", [], "any", false, false, false, 65), 'widget', ["attr" => ["placeholder" => "common.first_name_kana"]]);
        echo "
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "kana", [], "any", false, false, false, 66), "kana01", [], "any", false, false, false, 66), 'errors');
        echo "
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "kana", [], "any", false, false, false, 67), "kana02", [], "any", false, false, false, 67), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "company_name", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.company_name"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 76
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "company_name", [], "any", false, false, false, 76))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "company_name", [], "any", false, false, false, 77), 'widget');
        echo "
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "company_name", [], "any", false, false, false, 78), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "address", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.address"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput";
        // line 87
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "postal_code", [], "any", false, false, false, 87))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
        echo "</span>
                                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "postal_code", [], "any", false, false, false, 88), 'widget');
        echo "
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\"><img
                                                            src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                            </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.search_postal_code"), "html", null, true);
        echo "</span></a>
                                        </div>
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "postal_code", [], "any", false, false, false, 96), 'errors');
        echo "
                                    </div>

                                    <div class=\"ec-select";
        // line 99
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "address", [], "any", false, false, false, 99), "pref", [], "any", false, false, false, 99))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "address", [], "any", false, false, false, 100), "pref", [], "any", false, false, false, 100), 'widget');
        echo "
                                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "address", [], "any", false, false, false, 101), "pref", [], "any", false, false, false, 101), 'errors');
        echo "
                                    </div>
                                    <div class=\"ec-input";
        // line 103
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "address", [], "any", false, false, false, 103), "addr01", [], "any", false, false, false, 103))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "address", [], "any", false, false, false, 104), "addr01", [], "any", false, false, false, 104), 'widget', ["attr" => ["placeholder" => "common.address_sample_01"]]);
        echo "
                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "address", [], "any", false, false, false, 105), "addr01", [], "any", false, false, false, 105), 'errors');
        echo "
                                    </div>
                                    <div class=\"ec-input";
        // line 107
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "address", [], "any", false, false, false, 107), "addr02", [], "any", false, false, false, 107))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "address", [], "any", false, false, false, 108), "addr02", [], "any", false, false, false, 108), 'widget', ["attr" => ["placeholder" => "common.address_sample_02"]]);
        echo "
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "address", [], "any", false, false, false, 109), "addr02", [], "any", false, false, false, 109), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "phone_number", [], "any", false, false, false, 115), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "common.phone_number"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput";
        // line 118
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "phone_number", [], "any", false, false, false, 118))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "phone_number", [], "any", false, false, false, 119), 'widget');
        echo "
                                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "phone_number", [], "any", false, false, false, 120), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            ";
        // line 125
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 125), "eccube_form_options", [], "any", false, false, false, 125), "auto_render", [], "any", false, false, false, 125); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 126
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 126), "eccube_form_options", [], "any", false, false, false, 126), "form_theme", [], "any", false, false, false, 126)) {
                // line 127
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 127), "eccube_form_options", [], "any", false, false, false, 127), "form_theme", [], "any", false, false, false, 127)], true);
                // line 128
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                                ";
            } else {
                // line 130
                echo "                                    <dl>
                                        <dt>
                                            ";
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'label');
                echo "
                                        </dt>
                                        <dd>
                                            <div class=\"";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 135), "eccube_form_options", [], "any", false, false, false, 135), "style_class", [], "any", false, false, false, 135), "html", null, true);
                echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($context["f"])) ? (" error") : (""));
                echo "\">
                                                ";
                // line 136
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                ";
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                            </div>
                                        </dd>
                                    </dl>
                                ";
            }
            // line 142
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                        </div>
                        <div class=\"ec-RegisterRole__actions\">
                            <div class=\"ec-off4Grid\">
                                <div class=\"ec-off4Grid__cell\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.registration"), "html", null, true);
        echo "</button>
                                    ";
        // line 148
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 149
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping", ["id" => (isset($context["shippingId"]) || array_key_exists("shippingId", $context) ? $context["shippingId"] : (function () { throw new RuntimeError('Variable "shippingId" does not exist.', 149, $this->source); })())]), "html", null, true);
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
            echo "</a>
                                    ";
        } else {
            // line 151
            echo "                                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 153
        echo "                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/shipping_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 153,  394 => 151,  386 => 149,  384 => 148,  380 => 147,  374 => 143,  368 => 142,  360 => 137,  356 => 136,  351 => 135,  345 => 132,  341 => 130,  335 => 128,  332 => 127,  329 => 126,  324 => 125,  317 => 120,  313 => 119,  309 => 118,  303 => 115,  294 => 109,  290 => 108,  286 => 107,  281 => 105,  277 => 104,  273 => 103,  268 => 101,  264 => 100,  260 => 99,  254 => 96,  249 => 94,  244 => 92,  237 => 88,  231 => 87,  225 => 84,  216 => 78,  212 => 77,  208 => 76,  202 => 73,  193 => 67,  189 => 66,  185 => 65,  181 => 64,  177 => 63,  171 => 60,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  140 => 47,  133 => 43,  128 => 41,  119 => 34,  113 => 32,  107 => 30,  105 => 29,  100 => 26,  90 => 25,  79 => 22,  69 => 21,  58 => 11,  55 => 18,  53 => 17,  51 => 15,  49 => 13,  36 => 11,);
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

{% set body_class = 'cart_page' %}
{# ログイン状態によって、表示内容を切替 #}
{% if is_granted('ROLE_USER') is empty %}
    {% set title = 'front.shopping.shipping_edit_title_nomember'|trans %}
{% endif %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}

    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            {% if is_granted('ROLE_USER') %}
                <h1>{{ 'front.shopping.shipping_edit_header_customer'|trans }}</h1>
            {% else %}
                <h1>{{ 'front.shopping.shipping_edit_header_nonmember'|trans }}</h1>
            {% endif %}
        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-registerRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <form method=\"post\" action=\"{{ url('shopping_shipping_edit', {'id': shippingId}) }}\" class=\"h-adr\">
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                        {{ form_widget(form._token) }}
                        <div class=\"ec-borderedDefs\">
                            <dl>
                                <dt>
                                    {{ form_label(form.name, 'common.name', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput{{ has_errors(form.name.name01, form.name.name02) ? ' error'}}\">
                                        {{ form_widget(form.name.name01, { 'attr': { 'placeholder': 'common.last_name' }}) }}
                                        {{ form_widget(form.name.name02, { 'attr': { 'placeholder': 'common.first_name' }}) }}
                                        {{ form_errors(form.name.name01) }}
                                        {{ form_errors(form.name.name02) }}
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    {{ form_label(form.kana, 'common.kana', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput{{ has_errors(form.kana.kana01, form.kana.kana02) ? ' error'}}\">
                                        {{ form_widget(form.kana.kana01, { 'attr': { 'placeholder': 'common.last_name_kana' }}) }}
                                        {{ form_widget(form.kana.kana02, { 'attr': { 'placeholder': 'common.first_name_kana' }}) }}
                                        {{ form_errors(form.kana.kana01) }}
                                        {{ form_errors(form.kana.kana02) }}
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    {{ form_label(form.company_name, 'common.company_name', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput{{ has_errors(form.company_name) ? ' error' }}\">
                                        {{ form_widget(form.company_name) }}
                                        {{ form_errors(form.company_name) }}
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    {{ form_label(form.address, 'common.address', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput{{ has_errors(form.postal_code) ? ' error' }}\"><span>{{ 'common.postal_symbol'|trans }}</span>
                                        {{ form_widget(form.postal_code) }}
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\"><img
                                                            src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                                </div>
                                            </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>{{ 'common.search_postal_code'|trans }}</span></a>
                                        </div>
                                        {{ form_errors(form.postal_code) }}
                                    </div>

                                    <div class=\"ec-select{{ has_errors(form.address.pref) ? ' error' }}\">
                                        {{ form_widget(form.address.pref) }}
                                        {{ form_errors(form.address.pref) }}
                                    </div>
                                    <div class=\"ec-input{{ has_errors(form.address.addr01) ? ' error' }}\">
                                        {{ form_widget(form.address.addr01, { 'attr': { 'placeholder': 'common.address_sample_01' }}) }}
                                        {{ form_errors(form.address.addr01) }}
                                    </div>
                                    <div class=\"ec-input{{ has_errors(form.address.addr02) ? ' error' }}\">
                                        {{ form_widget(form.address.addr02,  { 'attr': { 'placeholder': 'common.address_sample_02' }}) }}
                                        {{ form_errors(form.address.addr02) }}
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    {{ form_label(form.phone_number, 'common.phone_number', { 'label_attr': { 'class': 'ec-label' }}) }}
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput{{ has_errors(form.phone_number) ? ' error' }}\">
                                        {{ form_widget(form.phone_number) }}
                                        {{ form_errors(form.phone_number) }}
                                    </div>
                                </dd>
                            </dl>
                            {# エンティティ拡張の自動出力 #}
                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                {% if f.vars.eccube_form_options.form_theme %}
                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                    {{ form_row(f) }}
                                {% else %}
                                    <dl>
                                        <dt>
                                            {{ form_label(f) }}
                                        </dt>
                                        <dd>
                                            <div class=\"{{ f.vars.eccube_form_options.style_class }}{{ has_errors(f) ? ' error' }}\">
                                                {{ form_widget(f) }}
                                                {{ form_errors(f) }}
                                            </div>
                                        </dd>
                                    </dl>
                                {% endif %}
                            {% endfor %}
                        </div>
                        <div class=\"ec-RegisterRole__actions\">
                            <div class=\"ec-off4Grid\">
                                <div class=\"ec-off4Grid__cell\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action\">{{ 'common.registration'|trans }}</button>
                                    {% if is_granted('ROLE_USER') %}
                                    <a href=\"{{ url('shopping_shipping', { 'id': shippingId }) }}\" class=\"ec-blockBtn--cancel\">{{ 'common.back'|trans }}</a>
                                    {% else %}
                                        <a href=\"{{ url('shopping') }}\" class=\"ec-blockBtn--cancel\">{{ 'common.back'|trans }}</a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Shopping/shipping_edit.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Shopping/shipping_edit.twig");
    }
}
