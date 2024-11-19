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

/* @admin/Product/product.twig */
class __TwigTemplate_510349baf7a72baf6e79eb1a98ad4e8e985a56a99d48ef5dab28dad0d1acaf70 extends \Eccube\Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/product.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload-ui.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        #thumb div {
            float: left;
            margin: 4px
        }

        .ui-state-highlight {
            height: 70px;
            width: 70px;
            border: dashed 1px #ccc;
            background: #fff;
        }

        .wari-use {
            ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_wari_use", [], "any", true, true, false, 38) && (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 38, $this->source); })()), "hdn_wari_use", [], "any", false, false, false, 38) == false))) {
            // line 39
            echo "                display: none;
            ";
        }
        // line 41
        echo "        }

        .matome-block {
            display: flex;
        }  
        
        .matome-item {
            width: 80px;
        }

        .label-flg-use {
            ";
        // line 52
        if (( !twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_label_flg_use", [], "any", true, true, false, 52) || (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 52, $this->source); })()), "hdn_label_flg_use", [], "any", false, false, false, 52) == false))) {
            // line 53
            echo "                display: none;
            ";
        }
        // line 55
        echo "        }

        .hiddenItem {
            display: none;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 64
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/vendor/jquery.ui.widget.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.iframe-transport.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-process.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-validate.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });
        \$(function() {
            // Todo: fix drag&drop style
            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function(event, ui) {
                    updateSortNo();
                }
            });
            ";
        // line 86
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 86, $this->source); })()) == false)) {
            echo " //在庫数が無制限かどうか
            if (\$(\"#";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "class", [], "any", false, false, false, 87), "stock_unlimited", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
            echo "\").prop(\"checked\")) {
                \$(\"#";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "class", [], "any", false, false, false, 88), "stock", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
                \$(\"#";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "class", [], "any", false, false, false, 89), "one_day_limit", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "class", [], "any", false, false, false, 91), "stock", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91), "html", null, true);
            echo "\").removeAttr(\"disabled\");
                \$(\"#";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "class", [], "any", false, false, false, 92), "one_day_limit", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
            echo "\").removeAttr(\"disabled\");
            }
            \$(\"#";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "class", [], "any", false, false, false, 94), "stock_unlimited", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
            echo "\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "class", [], "any", false, false, false, 96), "stock", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
                    \$(\"#";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "class", [], "any", false, false, false, 97), "one_day_limit", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "class", [], "any", false, false, false, 99), "stock", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\").removeAttr(\"disabled\");
                    \$(\"#";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "class", [], "any", false, false, false, 100), "one_day_limit", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100), "html", null, true);
            echo "\").removeAttr(\"disabled\");
                }
            });
            ";
        }
        // line 104
        echo "            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' +
                '</div>';
            var proto_add = '";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "add_images", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "prototype", [], "any", false, false, false, 107), 'widget');
        echo "';
            var proto_del = '";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "delete_images", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "prototype", [], "any", false, false, false, 108), 'widget');
        echo "';
            ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "images", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 110
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 110), "value", [], "any", false, false, false, 110), "save_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["image"], 'widget');
            echo "');
            \$widget.val('";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 112), "value", [], "any", false, false, false, 112), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "add_images", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 116
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "temp_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
            \$widget.val('";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "delete_images", [], "any", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 122
            echo "            \$(\"#thumb\").append('";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "            var hideThumbnail = function() {
                if (\$(\"#thumb div\").length > 0) {
                    \$(\"#icon_no_image\").css(\"display\", \"none\");
                    \$('#message').html(\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "\");
                } else {
                    \$(\"#icon_no_image\").css(\"display\", \"\");
                    \$('#message').empty();
                }
            };
            // Todo: fix update sort by drag&drop
            var updateSortNo = function() {
                \$(\"#thumb div\").each(function(index) {
                    \$(this).find(\".sort_no_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    \$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
                    \$sortNo.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$sortNo);
                });
            };
            hideThumbnail();
            updateSortNo();
            // Delete of images
            var count_del = 0;
            \$(\"#thumb\").on(\"click\", '.delete-image', function() {
                var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                var src = \$(thumbnail).find('input').val();
                \$new_delete_image.val(src);
                \$(\"#thumb\").append(\$new_delete_image);
                \$(thumbnail).remove();
                hideThumbnail();
                updateSortNo();
                count_del++;
            });
            var count_add = ";
        // line 158
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "add_images", [], "any", false, false, false, 158)), 0), "html", null, true);
        echo ";
            \$('#";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "product_image", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159), "html", null, true);
        echo "').fileupload({
                url: \"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_image_add");
        echo "\",
                type: \"post\",
                sequentialUploads: true,
                dataType: 'json',
                dropZone: \$('#upload-zone'),
                done: function(e, data) {
                    \$('.progress').hide();
                    \$.each(data.result.files, function(index, file) {
                        var path = '";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "temp_image"), "html", null, true);
        echo "' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$('#thumb').append(\$child);
                        count_add++;
                    });
                    hideThumbnail();
                    updateSortNo();
                },
                fail: function(e, data) {
                    alert(\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                },
                always: function(e, data) {
                    \$('.progress').hide();
                    \$('.progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    \$('.progress').show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('.progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                    }
                }
            });
            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "product_image", [], "any", false, false, false, 207), "vars", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207), "html", null, true);
        echo "').click();
            });

            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });

        \$('#admin_product_description_detail').on('change', function() {
            var val = \$(this).val();
            if (\$(\"#admin_product_description_list\").val() == '') {
                \$(\"#admin_product_description_list\").val(val);
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 266
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 267
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "_token", [], "any", false, false, false, 293), 'widget');
        echo "
        ";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "return_link", [], "any", false, false, false, 294), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        ";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product__card_title"), "html", null, true);
        echo "
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                ";
        // line 318
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 318, $this->source); })()), "id", [], "any", false, false, false, 318)) {
            // line 319
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 322
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 327, $this->source); })()), "id", [], "any", false, false, false, 327), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 331
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
        echo "</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                ";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "name", [], "any", false, false, false, 341), 'widget');
        echo "
                                        ";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "name", [], "any", false, false, false, 342), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_ryaku_name"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 352
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "product_ryaku_name", [], "any", false, false, false, 352), 'widget');
        echo "
                                        ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "product_ryaku_name", [], "any", false, false, false, 353), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 356
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 356, $this->source); })()) == false)) {
            // line 357
            echo "                                    <div class=\"row hiddenItem\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 359
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_type"), "html", null, true);
            echo "\">
                                                <span>";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 363
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            ";
            // line 368
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "class", [], "any", false, false, false, 368), "sale_type", [], "any", false, false, false, 368), 'widget');
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 372
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.image"), "html", null, true);
        echo "\">
                                            <span>";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            <br>";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image_size"), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div class=\"progress\" style=\"display: none;\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                            <div class=\"media-body\">
                                                <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                                ";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "
                                                ";
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "product_image", [], "any", false, false, false, 390), 'widget', ["attr" => ["accept" => "image/*", "style" => "display:none;"]]);
        echo "
                                                ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), "product_image", [], "any", false, false, false, 391), 'errors');
        echo "
                                                <a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#admin_product_product_image').click()\">
                                                    ";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "
                                                </a>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_detail"), "html", null, true);
        echo "\">
                                            <span>";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_detail"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 408, $this->source); })()), "description_detail", [], "any", false, false, false, 408), 'widget', ["attr" => ["rows" => "3"]]);
        echo "
                                        ";
        // line 409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), "description_detail", [], "any", false, false, false, 409), 'errors');
        echo "
                                        <!--
                                        <div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                                <span class=\"font-weight-bold text-ec-black\">
                                                    ";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list__add"), "html", null, true);
        echo "
                                                </span>
                                            </a>
                                        </div>
                                        -->
                                    </div>
                                </div>
                                <div class=\"collapse show ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_list"), "html", null, true);
        echo "\">
                                                <span>";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list"), "html", null, true);
        echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                ";
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 434, $this->source); })()), "description_list", [], "any", false, false, false, 434), 'widget', ["attr" => ["rows" => "3"]]);
        echo "
                                                ";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "description_list", [], "any", false, false, false, 435), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 441
        echo "                                <div class=\"row hiddenItem\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("部門コード"), "html", null, true);
        echo "</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                ";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "bumon_cd", [], "any", false, false, false, 452), 'widget');
        echo "
                                            ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "bumon_cd", [], "any", false, false, false, 453), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 458
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("部門"), "html", null, true);
        echo "</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                ";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 469, $this->source); })()), "Bumon", [], "any", false, false, false, 469), 'widget');
        echo "
                                            ";
        // line 470
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 470, $this->source); })()), "Bumon", [], "any", false, false, false, 470), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 474
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 474, $this->source); })()) == false)) {
            // line 475
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 478
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_code"), "html", null, true);
            echo "\">
                                                <span>";
            // line 479
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 481
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 488
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 488, $this->source); })()), "class", [], "any", false, false, false, 488), "code", [], "any", false, false, false, 488), 'widget');
            echo "
                                                ";
            // line 489
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 489, $this->source); })()), "class", [], "any", false, false, false, 489), "code", [], "any", false, false, false, 489), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 494
        echo "                                ";
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 494, $this->source); })()) == false)) {
            // line 495
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 498
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 500
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 506
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 506, $this->source); })()), "class", [], "any", false, false, false, 506), "price02", [], "any", false, false, false, 506), 'widget');
            echo "
                                                ";
            // line 507
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 507, $this->source); })()), "class", [], "any", false, false, false, 507), "price02", [], "any", false, false, false, 507), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 514
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.normal_price"), "html", null, true);
            echo "\">
                                                <span>";
            // line 515
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 521
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 521, $this->source); })()), "class", [], "any", false, false, false, 521), "price01", [], "any", false, false, false, 521), 'widget');
            echo "
                                                ";
            // line 522
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "class", [], "any", false, false, false, 522), "price01", [], "any", false, false, false, 522), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 529
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 531
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                ";
            // line 537
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 537, $this->source); })()), "class", [], "any", false, false, false, 537), "stock", [], "any", false, false, false, 537), 'widget');
            echo "
                                                ";
            // line 538
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 538, $this->source); })()), "class", [], "any", false, false, false, 538), "stock", [], "any", false, false, false, 538), 'errors');
            echo "
                                                ";
            // line 540
            echo "                                                ";
            // line 541
            echo "                                                ";
            // line 542
            echo "                                                ";
            // line 543
            echo "                                                ";
            // line 544
            echo "                                                ";
            // line 545
            echo "                                                ";
            // line 546
            echo "                                                ";
            // line 547
            echo "                                                ";
            // line 548
            echo "                                                ";
            // line 549
            echo "                                                ";
            // line 550
            echo "                                                ";
            // line 551
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 551, $this->source); })()), "class", [], "any", false, false, false, 551), "stock_unlimited", [], "any", false, false, false, 551), 'widget');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 558
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.one_day_limit"), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            ";
            // line 562
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 562, $this->source); })()), "class", [], "any", false, false, false, 562), "one_day_limit", [], "any", false, false, false, 562), 'widget');
            echo "
                                            ";
            // line 563
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 563, $this->source); })()), "class", [], "any", false, false, false, 563), "one_day_limit", [], "any", false, false, false, 563), 'errors');
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 567
        echo "
                                ";
        // line 568
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 568, $this->source); })()) == false)) {
            // line 569
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 572
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_limit"), "html", null, true);
            echo "\">
                                                <span>";
            // line 573
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 579
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 579, $this->source); })()), "class", [], "any", false, false, false, 579), "sale_limit", [], "any", false, false, false, 579), 'widget');
            echo "
                                                ";
            // line 580
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 580, $this->source); })()), "class", [], "any", false, false, false, 580), "sale_limit", [], "any", false, false, false, 580), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row hiddenItem\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 587
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.delivery_duration"), "html", null, true);
            echo "\">
                                                <span>";
            // line 588
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 594
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 594, $this->source); })()), "class", [], "any", false, false, false, 594), "delivery_duration", [], "any", false, false, false, 594), 'widget');
            echo "
                                                ";
            // line 595
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 595, $this->source); })()), "class", [], "any", false, false, false, 595), "delivery_duration", [], "any", false, false, false, 595), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 600
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 600, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, false, 600)) {
                // line 601
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 604
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 609
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })()), "class", [], "any", false, false, false, 609), "delivery_fee", [], "any", false, false, false, 609), 'widget');
                echo "
                                                    ";
                // line 610
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 610, $this->source); })()), "class", [], "any", false, false, false, 610), "delivery_fee", [], "any", false, false, false, 610), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 615
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 615, $this->source); })()), "option_product_tax_rule", [], "any", false, false, false, 615)) {
                // line 616
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 619
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 624
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 624, $this->source); })()), "class", [], "any", false, false, false, 624), "tax_rate", [], "any", false, false, false, 624), 'widget');
                echo "
                                                    ";
                // line 625
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 625, $this->source); })()), "class", [], "any", false, false, false, 625), "tax_rate", [], "any", false, false, false, 625), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 630
            echo "                                ";
        }
        // line 631
        echo "                                ";
        // line 632
        echo "                                <div class=\"row wari-use\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("割引"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col-9 row\">
                                        <div class=\"col-2 mb-2\">
                                            ";
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 640, $this->source); })()), "wari_a_flg", [], "any", false, false, false, 640), 'widget');
        echo "
                                            ";
        // line 641
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 641, $this->source); })()), "wari_a_flg", [], "any", false, false, false, 641), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-2 mb-2\">
                                            ";
        // line 644
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 644, $this->source); })()), "wari_b_flg", [], "any", false, false, false, 644), 'widget');
        echo "
                                            ";
        // line 645
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 645, $this->source); })()), "wari_b_flg", [], "any", false, false, false, 645), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-2 mb-2\">
                                            ";
        // line 648
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 648, $this->source); })()), "wari_kikan_flg", [], "any", false, false, false, 648), 'widget');
        echo "
                                            ";
        // line 649
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 649, $this->source); })()), "wari_kikan_flg", [], "any", false, false, false, 649), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row wari-use\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("まとめ割"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col-9 row\">
                                        <div class=\"col-2 mb-2 align-self-center\">
                                            ";
        // line 661
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 661, $this->source); })()), "wari_matome_flg", [], "any", false, false, false, 661), 'widget');
        echo "
                                            ";
        // line 662
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 662, $this->source); })()), "wari_matome_flg", [], "any", false, false, false, 662), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-2 mb-2 matome-block\">
                                            <div class=\"matome-item align-self-center\">
                                                <span>";
        // line 666
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("個数"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"matome-form\">
                                                ";
        // line 669
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 669, $this->source); })()), "wari_matome_limit1", [], "any", false, false, false, 669), 'widget');
        echo "
                                                ";
        // line 670
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 670, $this->source); })()), "wari_matome_limit1", [], "any", false, false, false, 670), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-2 mb-2 matome-block\">
                                            <div class=\"matome-item align-self-center\">
                                                <span>";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("割引"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"matome-form\">
                                                ";
        // line 678
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 678, $this->source); })()), "wari_matome_value1", [], "any", false, false, false, 678), 'widget');
        echo "
                                                ";
        // line 679
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 679, $this->source); })()), "wari_matome_value1", [], "any", false, false, false, 679), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"col-2 mb-2 align-self-center\">
                                            ";
        // line 683
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 683, $this->source); })()), "wari_matome_israte", [], "any", false, false, false, 683), 'widget');
        echo "
                                            ";
        // line 684
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 684, $this->source); })()), "wari_matome_israte", [], "any", false, false, false, 684), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-3 mb-2 matome-block\">
                                            <div class=\"matome-item align-self-center\">
                                                <span>";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("グループ"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"matome-form\">
                                                ";
        // line 691
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 691, $this->source); })()), "wari_matome_group", [], "any", false, false, false, 691), 'widget');
        echo "
                                                ";
        // line 692
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 692, $this->source); })()), "wari_matome_group", [], "any", false, false, false, 692), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 698
        echo "                                <div class=\"row label-flg-use\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ラベル要否"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 706
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 706, $this->source); })()), "label_flg", [], "any", false, false, false, 706), 'widget');
        echo "
                                            ";
        // line 707
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 707, $this->source); })()), "label_flg", [], "any", false, false, false, 707), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.search_word"), "html", null, true);
        echo "\">
                                            <span>";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_word"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 721
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 721, $this->source); })()), "search_word", [], "any", false, false, false, 721), 'widget');
        echo "
                                            ";
        // line 722
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 722, $this->source); })()), "search_word", [], "any", false, false, false, 722), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 728
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 728, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 728), "eccube_form_options", [], "any", false, false, false, 728), "auto_render", [], "any", false, false, false, 728); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 729
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 729), "eccube_form_options", [], "any", false, false, false, 729), "form_theme", [], "any", false, false, false, 729)) {
                // line 730
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 730), "eccube_form_options", [], "any", false, false, false, 730), "form_theme", [], "any", false, false, false, 730)], true);
                // line 731
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            } else {
                // line 733
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>";
                // line 735
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 735), "label", [], "any", false, false, false, 735)), "html", null, true);
                echo "</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 739
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                    ";
                // line 740
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 745
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 746
        echo "
                                ";
        // line 747
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 747, $this->source); })()) == false)) {
            // line 748
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 748, $this->source); })()), "class", [], "any", false, false, false, 748), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 748), "eccube_form_options", [], "any", false, false, false, 748), "auto_render", [], "any", false, false, false, 748); }));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 749
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 749), "eccube_form_options", [], "any", false, false, false, 749), "form_theme", [], "any", false, false, false, 749)) {
                    // line 750
                    echo "                                            ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 750), "eccube_form_options", [], "any", false, false, false, 750), "form_theme", [], "any", false, false, false, 750)], true);
                    // line 751
                    echo "                                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                        ";
                } else {
                    // line 753
                    echo "                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>";
                    // line 755
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 755), "label", [], "any", false, false, false, 755)), "html", null, true);
                    echo "</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        ";
                    // line 759
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                        ";
                    // line 760
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                // line 765
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 766
            echo "                                ";
        }
        // line 767
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 771
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 771, $this->source); })()))) {
            // line 772
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
            // line 777
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_class"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 779
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__card_title"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\"
                                           aria-controls=\"standardConfig\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
                                <div class=\"card-body\">
                                    ";
            // line 794
            if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 794, $this->source); })()) == true)) {
                // line 795
                echo "                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"pl-3 pt-2 pb-2\">";
                // line 797
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 798
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 799
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 800
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 801
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.one_day_limit"), "html", null, true);
                echo "</th><!--上限数-->
                                            <th class=\"pr-3 pt-2 pb-2\">";
                // line 802
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 805
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 805, $this->source); })()), "ProductClasses", [], "any", false, false, false, 805));
                foreach ($context['_seq'] as $context["_key"] => $context["Class"]) {
                    // line 806
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Class"], "visible", [], "any", false, false, false, 806) == 1)) {
                        // line 807
                        echo "                                                    <tr>
                                                        <td class=\"pl-3\">";
                        // line 808
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory1", [], "any", false, false, false, 808)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory1", [], "any", false, false, false, 808), "name", [], "any", false, false, false, 808), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 809
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory2", [], "any", false, false, false, 809)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory2", [], "any", false, false, false, 809), "name", [], "any", false, false, false, 809), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 810
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "code", [], "any", false, false, false, 810), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 811
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [], "any", false, false, false, 811)) {
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "stock", [], "any", false, false, false, 811), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 812
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [], "any", false, false, false, 812)) {
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "one_day_limit", [], "any", false, false, false, 812), "html", null, true);
                        }
                        echo "</td><!--上限数-->
                                                        <td class=\"pr-3\">";
                        // line 813
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Class"], "price02", [], "any", false, false, false, 813)), "html", null, true);
                        echo "</td>
                                                    </tr>
                                                ";
                    }
                    // line 816
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 817
                echo "                                            </tbody>
                                        </table>
                                    ";
            }
            // line 820
            echo "
                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"";
            // line 822
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_product_class", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 822, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"";
            // line 823
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration")]), "html", null, true);
            // line 825
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm_of_product"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 831
        echo "                    <div class=\"card rounded border-0 mb-4 hiddenItem\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.free_area"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area__card_title"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\"
                                       aria-controls=\"freeArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 853
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            ";
        // line 857
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 857, $this->source); })()), "free_area", [], "any", false, false, false, 857), 'widget', ["id" => "wysiwyg-area", "attr" => ["rows" => "8"]]);
        echo "
                                            ";
        // line 858
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 858, $this->source); })()), "free_area", [], "any", false, false, false, 858), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    ";
        // line 870
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 870, $this->source); })()))) {
            // line 871
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn btn-block btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"";
            // line 877
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 877, $this->source); })())]), "html", null, true);
            echo "\"
                                           title=\"";
            // line 878
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 884
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 889
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category__product_card_title"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"form-row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\" id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"";
        // line 912
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_category"), "html", null, true);
        echo "\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 931
        echo "
                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    ";
        // line 933
        $macros["renderMacro"] = $this;
        // line 934
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 934, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 935
            echo "                                        <ul class=\"list-unstyled\">
                                            ";
            // line 936
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [(isset($context["ChoicedCategoryIds"]) || array_key_exists("ChoicedCategoryIds", $context) ? $context["ChoicedCategoryIds"] : (function () { throw new RuntimeError('Variable "ChoicedCategoryIds" does not exist.', 936, $this->source); })()), $context["TopCategory"], twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 936, $this->source); })()), "Category", [], "any", false, false, false, 936)], 936, $context, $this->getSourceContext());
            echo "
                                        </ul>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 939
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 939, $this->source); })()), "Category", [], "any", false, false, false, 939), 'errors');
        echo "
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"";
        // line 944
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category");
        echo "\"
                                       title=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management")]), "html", null, true);
        // line 946
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_category"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            ";
        // line 957
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag__product_card_title"), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                ";
        // line 971
        if ((twig_length_filter($this->env, (isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 971, $this->source); })())) > 0)) {
            // line 972
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 972, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 973
                echo "                                        <div class=\"d-inline-block mb-2 mr-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">";
                // line 974
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 974), "html", null, true);
                echo "</button>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 977
            echo "                                ";
        }
        // line 978
        echo "
                                <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                        <span class=\"font-weight-bold\">";
        // line 983
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.save_tag"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        ";
        // line 988
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 988, $this->source); })()), "Tag", [], "any", false, false, false, 988), 'widget');
        echo "
                                    </div>
                                    ";
        // line 990
        if ((twig_length_filter($this->env, (isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 990, $this->source); })())) > 0)) {
            // line 991
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 991, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 992
                echo "                                            <div class=\"d-inline-block mb-2 mr-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"";
                // line 994
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 994), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 994), "html", null, true);
                echo "</button>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 997
            echo "                                    ";
        }
        // line 998
        echo "
                                    <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"";
        // line 1004
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_tag");
        echo "\"
                                       class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"";
        // line 1007
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management")]), "html", null, true);
        // line 1008
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_tag"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 1017
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.create_date__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag mr-1\"></i>
                                        <span>";
        // line 1032
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 1035
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1035, $this->source); })()), "create_date", [], "any", false, false, false, 1035)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh mr-1\"></i>
                                        <span>";
        // line 1041
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 1044
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1044, $this->source); })()), "update_date", [], "any", false, false, false, 1044)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user mr-1\"></i>
                                        <span>";
        // line 1050
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 1053
        ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1053, $this->source); })()), "Creator", [], "any", false, false, false, 1053)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1053, $this->source); })()), "Creator", [], "any", false, false, false, 1053), "name", [], "any", false, false, false, 1053), "html", null, true))) : (print ("")));
        echo "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 1064
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">
                                            ";
        // line 1066
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                ";
        // line 1081
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1081, $this->source); })()), "note", [], "any", false, false, false, 1081), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                ";
        // line 1082
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1082, $this->source); })()), "note", [], "any", false, false, false, 1082), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 1094
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 1094), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true, false, 1094)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 1094), "get", [0 => "eccube.admin.product.search.page_no"], "method", false, false, false, 1094), "1")) : ("1"))]), "html", null, true);
        echo "\"
                               data-action=\"confirm\" title=\"";
        // line 1095
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list")]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 1096
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 1103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1103, $this->source); })()), "Status", [], "any", false, false, false, 1103), 'widget');
        echo "
                                ";
        // line 1104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1104, $this->source); })()), "Status", [], "any", false, false, false, 1104), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 1107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 919
    public function macro_tree($__ChoicedIds__ = null, $__Category__ = null, $__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "ChoicedIds" => $__ChoicedIds__,
            "Category" => $__Category__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 920
            echo "                                    ";
            $macros["selfMacro"] = $this;
            // line 921
            echo "                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_";
            // line 922
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 922, $this->source); })()), "id", [], "any", false, false, false, 922), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 922, $this->source); })()), "id", [], "any", false, false, false, 922), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 922, $this->source); })()), "id", [], "any", false, false, false, 922), (isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 922, $this->source); })()))) {
                echo "checked";
            }
            echo ">
                                        <label for=\"admin_product_category_";
            // line 923
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 923, $this->source); })()), "id", [], "any", false, false, false, 923), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 923, $this->source); })()), "name", [], "any", false, false, false, 923), "html", null, true);
            echo "</label>
                                        <ul class=\"list-unstyled\">
                                            ";
            // line 925
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 925, $this->source); })()), "children", [], "any", false, false, false, 925));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 926
                echo "                                                ";
                echo twig_call_macro($macros["selfMacro"], "macro_tree", [(isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 926, $this->source); })()), $context["ChildCategory"], (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 926, $this->source); })())], 926, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 928
            echo "                                        </ul>
                                    </li>
                                ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@admin/Product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2119 => 928,  2110 => 926,  2106 => 925,  2099 => 923,  2089 => 922,  2086 => 921,  2083 => 920,  2062 => 919,  2043 => 1107,  2037 => 1104,  2033 => 1103,  2023 => 1096,  2019 => 1095,  2015 => 1094,  2000 => 1082,  1996 => 1081,  1978 => 1066,  1973 => 1064,  1959 => 1053,  1953 => 1050,  1944 => 1044,  1938 => 1041,  1929 => 1035,  1923 => 1032,  1905 => 1017,  1892 => 1008,  1890 => 1007,  1884 => 1004,  1876 => 998,  1873 => 997,  1862 => 994,  1858 => 992,  1853 => 991,  1851 => 990,  1846 => 988,  1838 => 983,  1831 => 978,  1828 => 977,  1819 => 974,  1816 => 973,  1811 => 972,  1809 => 971,  1792 => 957,  1777 => 946,  1775 => 945,  1771 => 944,  1762 => 939,  1753 => 936,  1750 => 935,  1745 => 934,  1743 => 933,  1739 => 931,  1729 => 912,  1703 => 889,  1696 => 884,  1685 => 878,  1681 => 877,  1673 => 871,  1671 => 870,  1656 => 858,  1652 => 857,  1645 => 853,  1626 => 837,  1622 => 836,  1615 => 831,  1605 => 825,  1603 => 823,  1599 => 822,  1595 => 820,  1590 => 817,  1584 => 816,  1578 => 813,  1570 => 812,  1562 => 811,  1558 => 810,  1552 => 809,  1546 => 808,  1543 => 807,  1540 => 806,  1536 => 805,  1530 => 802,  1526 => 801,  1522 => 800,  1518 => 799,  1514 => 798,  1510 => 797,  1506 => 795,  1504 => 794,  1486 => 779,  1481 => 777,  1474 => 772,  1472 => 771,  1466 => 767,  1463 => 766,  1457 => 765,  1449 => 760,  1445 => 759,  1438 => 755,  1434 => 753,  1428 => 751,  1425 => 750,  1422 => 749,  1417 => 748,  1415 => 747,  1412 => 746,  1406 => 745,  1398 => 740,  1394 => 739,  1387 => 735,  1383 => 733,  1377 => 731,  1374 => 730,  1371 => 729,  1366 => 728,  1358 => 722,  1354 => 721,  1345 => 715,  1341 => 714,  1331 => 707,  1327 => 706,  1319 => 701,  1314 => 698,  1306 => 692,  1302 => 691,  1296 => 688,  1289 => 684,  1285 => 683,  1278 => 679,  1274 => 678,  1268 => 675,  1260 => 670,  1256 => 669,  1250 => 666,  1243 => 662,  1239 => 661,  1231 => 656,  1221 => 649,  1217 => 648,  1211 => 645,  1207 => 644,  1201 => 641,  1197 => 640,  1189 => 635,  1184 => 632,  1182 => 631,  1179 => 630,  1171 => 625,  1167 => 624,  1159 => 619,  1154 => 616,  1151 => 615,  1143 => 610,  1139 => 609,  1131 => 604,  1126 => 601,  1124 => 600,  1116 => 595,  1112 => 594,  1103 => 588,  1099 => 587,  1089 => 580,  1085 => 579,  1076 => 573,  1072 => 572,  1067 => 569,  1065 => 568,  1062 => 567,  1055 => 563,  1051 => 562,  1044 => 558,  1033 => 551,  1031 => 550,  1029 => 549,  1027 => 548,  1025 => 547,  1023 => 546,  1021 => 545,  1019 => 544,  1017 => 543,  1015 => 542,  1013 => 541,  1011 => 540,  1007 => 538,  1003 => 537,  994 => 531,  989 => 529,  979 => 522,  975 => 521,  966 => 515,  962 => 514,  952 => 507,  948 => 506,  939 => 500,  934 => 498,  929 => 495,  926 => 494,  918 => 489,  914 => 488,  904 => 481,  899 => 479,  895 => 478,  890 => 475,  888 => 474,  881 => 470,  877 => 469,  868 => 463,  863 => 461,  858 => 458,  851 => 453,  847 => 452,  838 => 446,  833 => 444,  828 => 441,  820 => 435,  816 => 434,  807 => 428,  803 => 427,  789 => 416,  779 => 409,  775 => 408,  767 => 403,  763 => 402,  751 => 393,  746 => 391,  742 => 390,  738 => 389,  723 => 377,  718 => 375,  714 => 374,  710 => 372,  703 => 368,  695 => 363,  689 => 360,  685 => 359,  681 => 357,  679 => 356,  673 => 353,  669 => 352,  662 => 348,  653 => 342,  649 => 341,  641 => 336,  636 => 334,  631 => 331,  624 => 327,  616 => 322,  612 => 321,  608 => 319,  606 => 318,  589 => 304,  576 => 294,  572 => 293,  562 => 286,  556 => 283,  543 => 273,  535 => 267,  525 => 266,  457 => 207,  448 => 201,  424 => 180,  409 => 168,  398 => 160,  394 => 159,  390 => 158,  356 => 127,  351 => 124,  342 => 122,  337 => 121,  328 => 118,  324 => 117,  319 => 116,  314 => 115,  305 => 112,  301 => 111,  296 => 110,  292 => 109,  288 => 108,  284 => 107,  279 => 104,  272 => 100,  268 => 99,  263 => 97,  259 => 96,  254 => 94,  249 => 92,  245 => 91,  240 => 89,  236 => 88,  232 => 87,  228 => 86,  207 => 68,  203 => 67,  199 => 66,  195 => 65,  190 => 64,  180 => 63,  164 => 55,  160 => 53,  158 => 52,  145 => 41,  141 => 39,  139 => 38,  120 => 22,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['product', 'product_edit'] %}

{% block title %}{{ 'admin.product.product_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fileupload/jquery.fileupload.css', 'admin') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fileupload/jquery.fileupload-ui.css', 'admin') }}\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        #thumb div {
            float: left;
            margin: 4px
        }

        .ui-state-highlight {
            height: 70px;
            width: 70px;
            border: dashed 1px #ccc;
            background: #fff;
        }

        .wari-use {
            {% if eccube_config.hdn_wari_use is defined and eccube_config.hdn_wari_use == false %}
                display: none;
            {% endif %}
        }

        .matome-block {
            display: flex;
        }  
        
        .matome-item {
            width: 80px;
        }

        .label-flg-use {
            {% if eccube_config.hdn_label_flg_use is not defined or eccube_config.hdn_label_flg_use == false %}
                display: none;
            {% endif %}
        }

        .hiddenItem {
            display: none;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/fileupload/vendor/jquery.ui.widget.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.iframe-transport.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload-process.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload-validate.js', 'admin') }}\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });
        \$(function() {
            // Todo: fix drag&drop style
            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function(event, ui) {
                    updateSortNo();
                }
            });
            {% if has_class == false %} //在庫数が無制限かどうか
            if (\$(\"#{{ form.class.stock_unlimited.vars.id }}\").prop(\"checked\")) {
                \$(\"#{{ form.class.stock.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
                \$(\"#{{ form.class.one_day_limit.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#{{ form.class.stock.vars.id }}\").removeAttr(\"disabled\");
                \$(\"#{{ form.class.one_day_limit.vars.id }}\").removeAttr(\"disabled\");
            }
            \$(\"#{{ form.class.stock_unlimited.vars.id }}\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#{{ form.class.stock.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
                    \$(\"#{{ form.class.one_day_limit.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#{{ form.class.stock.vars.id }}\").removeAttr(\"disabled\");
                    \$(\"#{{ form.class.one_day_limit.vars.id }}\").removeAttr(\"disabled\");
                }
            });
            {% endif %}
            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' +
                '</div>';
            var proto_add = '{{ form_widget(form.add_images.vars.prototype) }}';
            var proto_del = '{{ form_widget(form.delete_images.vars.prototype) }}';
            {% for image in form.images %}
            var \$img = \$(proto_img.replace(/__path__/g, '{{ asset(image.vars.value, 'save_image') }}'));
            var \$widget = \$('{{ form_widget(image) }}');
            \$widget.val('{{ image.vars.value }}');
            \$(\"#thumb\").append(\$img.append(\$widget));
            {% endfor %}
            {% for add_image in form.add_images %}
            var \$img = \$(proto_img.replace(/__path__/g, '{{ asset(add_image.vars.value, 'temp_image') }}'));
            var \$widget = \$('{{ form_widget(add_image) }}');
            \$widget.val('{{ add_image.vars.value }}');
            \$(\"#thumb\").append(\$img.append(\$widget));
            {% endfor %}
            {% for delete_image in form.delete_images %}
            \$(\"#thumb\").append('{{ form_widget(delete_image) }}');
            {% endfor %}
            var hideThumbnail = function() {
                if (\$(\"#thumb div\").length > 0) {
                    \$(\"#icon_no_image\").css(\"display\", \"none\");
                    \$('#message').html(\"{{ 'admin.common.drag_and_drop_description'|trans }}\");
                } else {
                    \$(\"#icon_no_image\").css(\"display\", \"\");
                    \$('#message').empty();
                }
            };
            // Todo: fix update sort by drag&drop
            var updateSortNo = function() {
                \$(\"#thumb div\").each(function(index) {
                    \$(this).find(\".sort_no_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    \$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
                    \$sortNo.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$sortNo);
                });
            };
            hideThumbnail();
            updateSortNo();
            // Delete of images
            var count_del = 0;
            \$(\"#thumb\").on(\"click\", '.delete-image', function() {
                var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                var src = \$(thumbnail).find('input').val();
                \$new_delete_image.val(src);
                \$(\"#thumb\").append(\$new_delete_image);
                \$(thumbnail).remove();
                hideThumbnail();
                updateSortNo();
                count_del++;
            });
            var count_add = {{ form.add_images|length|default(0) }};
            \$('#{{ form.product_image.vars.id }}').fileupload({
                url: \"{{ url('admin_product_image_add') }}\",
                type: \"post\",
                sequentialUploads: true,
                dataType: 'json',
                dropZone: \$('#upload-zone'),
                done: function(e, data) {
                    \$('.progress').hide();
                    \$.each(data.result.files, function(index, file) {
                        var path = '{{ asset('', 'temp_image') }}' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$('#thumb').append(\$child);
                        count_add++;
                    });
                    hideThumbnail();
                    updateSortNo();
                },
                fail: function(e, data) {
                    alert(\"{{ 'admin.common.upload_error'|trans }}\");
                },
                always: function(e, data) {
                    \$('.progress').hide();
                    \$('.progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    \$('.progress').show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('.progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"{{ 'admin.common.upload_error'|trans }}\");
                    }
                }
            });
            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#{{ form.product_image.vars.id }}').click();
            });

            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });

        \$('#admin_product_description_detail').on('change', function() {
            var val = \$(this).val();
            if (\$(\"#admin_product_description_list\").val() == '') {
                \$(\"#admin_product_description_list\").val(val);
            }
        });
    </script>
{% endblock javascript %}

{% block main %}
    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ 'admin.common.move_to_confirm_title'|trans }}</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_save_and_move'|trans }}
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_move_only'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.return_link) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        {{ 'admin.product.product__card_title'|trans }}
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                {% if Product.id %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.product_id'|trans }}\">
                                                <span>{{ 'admin.product.product_id'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>{{ Product.id }}</p>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.name'|trans }}</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                {{ 'admin.common.required'|trans }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.name) }}
                                        {{ form_errors(form.name) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.product_ryaku_name'|trans }}</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.product_ryaku_name) }}
                                        {{ form_errors(form.product_ryaku_name) }}
                                    </div>
                                </div>
                                {% if has_class == false %}
                                    <div class=\"row hiddenItem\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.sale_type'|trans }}\">
                                                <span>{{ 'admin.product.sale_type'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                                <span class=\"badge badge-primary ml-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            {{ form_widget(form.class.sale_type) }}
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.image'|trans }}\">
                                            <span>{{ 'admin.product.image'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            <br>{{ 'admin.product.image_size'|trans }}
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div class=\"progress\" style=\"display: none;\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                            <div class=\"media-body\">
                                                <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                                {{ 'admin.common.drag_and_drop_image_description'|trans }}
                                                {{ form_widget(form.product_image, { attr : { accept : 'image/*', style : 'display:none;' } }) }}
                                                {{ form_errors(form.product_image) }}
                                                <a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#admin_product_product_image').click()\">
                                                    {{ 'admin.common.file_select'|trans }}
                                                </a>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"{{ 'tooltip.product.description_detail'|trans }}\">
                                            <span>{{ 'admin.product.description_detail'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.description_detail, { attr : { rows : \"3\"} }) }}
                                        {{ form_errors(form.description_detail) }}
                                        <!--
                                        <div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                                <span class=\"font-weight-bold text-ec-black\">
                                                    {{ 'admin.product.description_list__add'|trans }}
                                                </span>
                                            </a>
                                        </div>
                                        -->
                                    </div>
                                </div>
                                <div class=\"collapse show ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.description_list'|trans }}\">
                                                <span>{{ 'admin.product.description_list'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                {{ form_widget(form.description_list, { attr : { rows : \"3\"} }) }}
                                                {{ form_errors(form.description_list) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {# (HDN) 部門コード #}
                                <div class=\"row hiddenItem\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ '部門コード'|trans }}</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                {{ 'admin.common.required'|trans }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            {{ form_widget(form.bumon_cd) }}
                                            {{ form_errors(form.bumon_cd) }}
                                        </div>
                                    </div>
                                </div>
                                {# (HDN) 部門 #}
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ '部門'|trans }}</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                {{ 'admin.common.required'|trans }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            {{ form_widget(form.Bumon) }}
                                            {{ form_errors(form.Bumon) }}
                                        </div>
                                    </div>
                                </div>
                                {% if has_class == false %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.product_code'|trans }}\">
                                                <span>{{ 'admin.product.product_code'|trans }}</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.code) }}
                                                {{ form_errors(form.class.code) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                                {% if has_class == false %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>{{ 'admin.product.sale_price'|trans }}</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.price02) }}
                                                {{ form_errors(form.class.price02) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.normal_price'|trans }}\">
                                                <span>{{ 'admin.product.normal_price'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.price01) }}
                                                {{ form_errors(form.class.price01) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>{{ 'admin.product.stock'|trans }}</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                {{ form_widget(form.class.stock) }}
                                                {{ form_errors(form.class.stock) }}
                                                {# TODO: form_layoutの調整 #}
                                                {#<div class=\"form-check mb-2\">#}
                                                {#<input class=\"form-check-input\"#}
                                                {#id=\"{{ form.class.stock_unlimited.vars.id }}\"#}
                                                {#name=\"{{ form.class.stock_unlimited.vars.full_name }}\"#}
                                                {#type=\"checkbox\"#}
                                                {#value=\"{{ form.class.stock_unlimited.vars.value }}\">#}
                                                {#<label class=\"form-check-label\"#}
                                                {#for=\"{{ form.class.stock_unlimited.vars.id }}\">#}
                                                {#{{ 'admin.product.product.stock_unlimited'|trans }}#}
                                                {#</label>#}
                                                {#</div>#}
                                                {{ form_widget(form.class.stock_unlimited) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>{{ 'admin.product.one_day_limit'|trans }}</span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            {{ form_widget(form.class.one_day_limit) }}
                                            {{ form_errors(form.class.one_day_limit) }}
                                        </div>
                                    </div>
                                {% endif %}

                                {% if has_class == false %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.sale_limit'|trans }}\">
                                                <span>{{ 'admin.product.sale_limit'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.sale_limit) }}
                                                {{ form_errors(form.class.sale_limit) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row hiddenItem\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.delivery_duration'|trans }}\">
                                                <span>{{ 'admin.product.delivery_duration'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.delivery_duration) }}
                                                {{ form_errors(form.class.delivery_duration) }}
                                            </div>
                                        </div>
                                    </div>

                                    {% if BaseInfo.option_product_delivery_fee %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>{{ 'admin.product.delivery_fee'|trans }}</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(form.class.delivery_fee) }}
                                                    {{ form_errors(form.class.delivery_fee) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if BaseInfo.option_product_tax_rule %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>{{ 'admin.product.tax_rate'|trans }}</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(form.class.tax_rate) }}
                                                    {{ form_errors(form.class.tax_rate) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endif %}
                                {# (HDN) 割引関連 #}
                                <div class=\"row wari-use\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ '割引'|trans }}</span>
                                        </div>
                                    </div>
                                    <div class=\"col-9 row\">
                                        <div class=\"col-2 mb-2\">
                                            {{ form_widget(form.wari_a_flg) }}
                                            {{ form_errors(form.wari_a_flg) }}
                                        </div>
                                        <div class=\"col-2 mb-2\">
                                            {{ form_widget(form.wari_b_flg) }}
                                            {{ form_errors(form.wari_b_flg) }}
                                        </div>
                                        <div class=\"col-2 mb-2\">
                                            {{ form_widget(form.wari_kikan_flg) }}
                                            {{ form_errors(form.wari_kikan_flg) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row wari-use\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'まとめ割'|trans }}</span>
                                        </div>
                                    </div>
                                    <div class=\"col-9 row\">
                                        <div class=\"col-2 mb-2 align-self-center\">
                                            {{ form_widget(form.wari_matome_flg) }}
                                            {{ form_errors(form.wari_matome_flg) }}
                                        </div>
                                        <div class=\"col-2 mb-2 matome-block\">
                                            <div class=\"matome-item align-self-center\">
                                                <span>{{ '個数'|trans }}</span>
                                            </div>
                                            <div class=\"matome-form\">
                                                {{ form_widget(form.wari_matome_limit1) }}
                                                {{ form_errors(form.wari_matome_limit1) }}
                                            </div>
                                        </div>
                                        <div class=\"col-2 mb-2 matome-block\">
                                            <div class=\"matome-item align-self-center\">
                                                <span>{{ '割引'|trans }}</span>
                                            </div>
                                            <div class=\"matome-form\">
                                                {{ form_widget(form.wari_matome_value1) }}
                                                {{ form_errors(form.wari_matome_value1) }}
                                            </div>
                                        </div>
                                        <div class=\"col-2 mb-2 align-self-center\">
                                            {{ form_widget(form.wari_matome_israte) }}
                                            {{ form_errors(form.wari_matome_israte) }}
                                        </div>
                                        <div class=\"col-3 mb-2 matome-block\">
                                            <div class=\"matome-item align-self-center\">
                                                <span>{{ 'グループ'|trans }}</span>
                                            </div>
                                            <div class=\"matome-form\">
                                                {{ form_widget(form.wari_matome_group) }}
                                                {{ form_errors(form.wari_matome_group) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {# (HDN) ラベル要否 #}
                                <div class=\"row label-flg-use\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'ラベル要否'|trans }}</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            {{ form_widget(form.label_flg) }}
                                            {{ form_errors(form.label_flg) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"{{ 'tooltip.product.search_word'|trans }}\">
                                            <span>{{ 'admin.product.search_word'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            {{ form_widget(form.search_word) }}
                                            {{ form_errors(form.search_word) }}
                                        </div>
                                    </div>
                                </div>

                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>{{ f.vars.label|trans }}</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(f) }}
                                                    {{ form_errors(f) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                                {% if has_class == false %}
                                    {% for f in form.class|filter(f => f.vars.eccube_form_options.auto_render) %}
                                        {% if f.vars.eccube_form_options.form_theme %}
                                            {% form_theme f f.vars.eccube_form_options.form_theme %}
                                            {{ form_row(f) }}
                                        {% else %}
                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>{{ f.vars.label|trans }}</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        {{ form_widget(f) }}
                                                        {{ form_errors(f) }}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}

                            </div>
                        </div>
                    </div>
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"{{ 'tooltip.product.product_class'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.product.product_class__card_title'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\"
                                           aria-controls=\"standardConfig\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
                                <div class=\"card-body\">
                                    {% if has_class == true %}
                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"pl-3 pt-2 pb-2\">{{ 'admin.product.class_category1__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.class_category2__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.stock'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.one_day_limit'|trans }}</th><!--上限数-->
                                            <th class=\"pr-3 pt-2 pb-2\">{{ 'admin.product.price'|trans }}</th>
                                            </thead>
                                            <tbody>
                                            {% for Class in Product.ProductClasses %}
                                                {% if Class.visible == 1 %}
                                                    <tr>
                                                        <td class=\"pl-3\">{% if Class.hasClassCategory1 %}{{ Class.ClassCategory1.name }}{% endif %}</td>
                                                        <td>{% if Class.hasClassCategory2 %}{{ Class.ClassCategory2.name }}{% endif %}</td>
                                                        <td>{{ Class.code }}</td>
                                                        <td>{% if Class.stock_unlimited %}{{ 'admin.product.stock_unlimited__short'|trans }}{% else %}{{ Class.stock }}{% endif %}</td>
                                                        <td>{% if Class.stock_unlimited %}{{ 'admin.product.stock_unlimited__short'|trans }}{% else %}{{ Class.one_day_limit }}{% endif %}</td><!--上限数-->
                                                        <td class=\"pr-3\">{{ Class.price02|price }}</td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    {% endif %}

                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"{{ path('admin_product_product_class', { 'id' : id }) }}\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                               '%name%' : 'admin.product.product_class_registration'|trans
                                           }) }}\">{{ 'admin.product.product_class__confirm_of_product'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"card rounded border-0 mb-4 hiddenItem\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"{{ 'tooltip.product.free_area'|trans }}\">
                                        <span class=\"card-title\">{{ 'admin.product.free_area__card_title'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\"
                                       aria-controls=\"freeArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.product.free_area'|trans }}</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            {{ form_widget(form.free_area, {id: 'wysiwyg-area', attr : { rows : \"8\"} }) }}
                                            {{ form_errors(form.free_area) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn btn-block btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"{{ url('product_detail', {id:id}) }}\"
                                           title=\"{{ 'admin.product.preview'|trans }}\">{{ 'admin.product.preview'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">{{ 'admin.product.category__product_card_title'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"form-row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\" id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"{{ 'admin.product.search_category'|trans }}\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {% macro tree(ChoicedIds, Category, form) %}
                                    {% import _self as selfMacro %}
                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_{{ Category.id }}\" name=\"admin_product[Category][]\" value=\"{{ Category.id }}\" {% if Category.id in ChoicedIds %}checked{% endif %}>
                                        <label for=\"admin_product_category_{{ Category.id }}\">{{ Category.name }}</label>
                                        <ul class=\"list-unstyled\">
                                            {% for child,ChildCategory in Category.children %}
                                                {{ selfMacro.tree(ChoicedIds, ChildCategory, form) }}
                                            {% endfor %}
                                        </ul>
                                    </li>
                                {% endmacro %}

                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    {% import _self as renderMacro %}
                                    {% for TopCategory in TopCategories %}
                                        <ul class=\"list-unstyled\">
                                            {{ renderMacro.tree(ChoicedCategoryIds, TopCategory, form.Category) }}
                                        </ul>
                                    {% endfor %}
                                    {{ form_errors(form.Category) }}
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"{{ path('admin_product_category') }}\"
                                       title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                           '%name%' : 'admin.product.category_management'|trans}) }}\">{{ 'admin.product.move_to_category'|trans }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            {{ 'admin.product.tag__product_card_title'|trans }}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                {% if(Tags|length > 0) %}
                                    {% for Tag in Tags %}
                                        <div class=\"d-inline-block mb-2 mr-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">{{ Tag.name }}</button>
                                        </div>
                                    {% endfor %}
                                {% endif %}

                                <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                        <span class=\"font-weight-bold\">{{ 'admin.product.save_tag'|trans }}</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        {{ form_widget(form.Tag) }}
                                    </div>
                                    {% if(TagsList|length > 0) %}
                                        {% for Tag in TagsList %}
                                            <div class=\"d-inline-block mb-2 mr-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"{{ Tag.id }}\">{{ Tag.name }}</button>
                                            </div>
                                        {% endfor %}
                                    {% endif %}

                                    <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"{{ path('admin_product_tag') }}\"
                                       class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                           '%name%' : 'admin.product.tag_management'|trans }) }}\">{{ 'admin.product.move_to_tag'|trans }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">{{ 'admin.product.create_date__card_title'|trans }}</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag mr-1\"></i>
                                        <span>{{ 'admin.common.create_date'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.create_date|date_min }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh mr-1\"></i>
                                        <span>{{ 'admin.common.update_date'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.update_date|date_min }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user mr-1\"></i>
                                        <span>{{ 'admin.common.last_updater'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.Creator ? Product.Creator.name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"{{ 'tooltip.product.shop_memo'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.common.shop_memo'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                {{ form_widget(form.note, { attr : { rows : \"8\"} }) }}
                                {{ form_errors(form.note) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ path('admin_product_page', { page_no : app.session.get('eccube.admin.product.search.page_no')|default('1') } ) }}\"
                               data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.product.product_list'|trans }) }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.product.product_list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                {{ form_widget(form.Status) }}
                                {{ form_errors(form.Status) }}
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Product/product.twig", "/var/www/htdocs/ec922501/app/template/admin/Product/product.twig");
    }
}
