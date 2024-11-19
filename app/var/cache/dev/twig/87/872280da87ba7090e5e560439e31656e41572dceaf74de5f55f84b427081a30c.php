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

/* @admin/Setting/Shop/mail.twig */
class __TwigTemplate_235a17dfc3e45e067d0c40d069c0fa9c2455a1461f5cea1179469fad1d4f7a62 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/mail.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/mail.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_mail"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/mail.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail_setting"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
        
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
        echo "    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 31
        echo "    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-language_tools.js\"></script>
    <script>
        \$(function() {
            \$('#mail_template').on('change', function() {
                var id = \$(this).val()
                if (id) {
                    location.href = '";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_mail");
        echo "/' + id;
                } else {
                    location.href = '";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_mail");
        echo "';
                }
            });

            ace.require('ace/ext/language_tools');
            var editor = ace.edit('editor');
            editor.session.setMode('ace/mode/twig');
            editor.setTheme('ace/theme/tomorrow');
            editor.setValue(\"";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "tpl_data", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49), "js"), "html", null, true);
        echo "\");
            editor.setOptions({
                enableBasicAutocompletion: true,
                enableSnippets: true,
                enableLiveAutocompletion: true,
                showInvisibles: true
            });

            ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57)) {
            // line 58
            echo "                var html_editor = ace.edit('html_editor');
                html_editor.session.setMode('ace/mode/twig');
                html_editor.setTheme('ace/theme/tomorrow');
                html_editor.setValue(\"";
            // line 61
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "value", [], "any", false, false, false, 61), "js"), "html", null, true);
            echo "\");
                html_editor.setOptions({
                    enableBasicAutocompletion: true,
                    enableSnippets: true,
                    enableLiveAutocompletion: true,
                    showInvisibles: true
                });
            ";
        }
        // line 69
        echo "
            \$(\"#editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$(\"#html_editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$('#form1').on('submit', function() {
                \$('#mail_tpl_data').val(editor.getValue());
                ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84)) {
            // line 85
            echo "                    \$('#mail_html_tpl_data').val(html_editor.getValue());
                ";
        }
        // line 87
        echo "            });

            // HTMLメールモーダル表示
            \$('#htmlPreviewModal').on('show.bs.modal', function (event) {
                var html = \$('#viewEmail');
                html.children().remove();

                // HTMLを読み込んでモーダルに表示
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'html_body' : html_editor.getValue(),
                    },
                    url: '";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_mail_preview");
        echo "',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#viewEmail').html(data);
                    },
                    error: function() {
                        alert('preview html mail failed.');
                    }
                });
            });

            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                var activated_tab = e.target;
                var id = \$(activated_tab).attr('id');
                if (id == 'menu__";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
        echo "') {
                    \$('#preview_button').attr('style', 'display:blocked;');
                } else {
                    \$('#preview_button').attr('style', 'display:none;');
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 126
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "_token", [], "any", false, false, false, 127), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template_edit"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.mail.mail_template"), "html", null, true);
        echo "\">
                                        <span>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_template"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-10\">
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "template", [], "any", false, false, false, 141), 'widget');
        echo "
                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "template", [], "any", false, false, false, 142), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_subject"), "html", null, true);
        echo "</span><span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "mail_subject", [], "any", false, false, false, 148), 'widget');
        echo "
                                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "mail_subject", [], "any", false, false, false, 149), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_body"), "html", null, true);
        echo "</span><span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-10\">
                                    ";
        // line 156
        echo "                                    ";
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 156, $this->source); })()))) {
            // line 157
            echo "                                    <ul class=\"nav nav-tabs text-center\" role=\"tablist\">
                                        <li class=\"nav-item\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "tpl_data", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159), "html", null, true);
            echo "\" href=\"#detail_box__tpl_data\" class=\"nav-link active\" data-toggle=\"tab\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_text"), "html", null, true);
            echo "</span></a>
                                        </li>
                                        ";
            // line 161
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "value", [], "any", false, false, false, 161)) {
                // line 162
                echo "                                        <li class=\"nav-item\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 163), "vars", [], "any", false, false, false, 163), "id", [], "any", false, false, false, 163), "html", null, true);
                echo "\" href=\"#detail_box__html_tpl_data\" class=\"nav-link\" data-toggle=\"tab\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.mail_html"), "html", null, true);
                echo "</span></a>
                                        </li>
                                        ";
            }
            // line 166
            echo "                                        <div class=\"col-1\">
                                            <div class=\"d-inline-block\">
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button type=\"button\" id=\"preview_button\" class=\"btn btn-block text-nowrap btn-ec-regular\" style=\"display:none;\" data-toggle=\"modal\" data-target=\"#htmlPreviewModal\">
                                                        ";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.preview"), "html", null, true);
            echo "
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                    ";
        }
        // line 177
        echo "                                    <div class=\"tab-content\">
                                        <div id=\"detail_box__tpl_data\" class=\"form-group tab-pane active\">
                                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "tpl_data", [], "any", false, false, false, 179), 'label');
        echo "
                                            <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 180
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "tpl_data", [], "any", false, false, false, 180))) ? (" is-invalid") : (""));
        echo "\"></div>
                                            <div style=\"display: none\">";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "tpl_data", [], "any", false, false, false, 181), 'widget');
        echo "</div>
                                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "tpl_data", [], "any", false, false, false, 182), 'errors');
        echo "
                                        </div>
                                        ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 184), "vars", [], "any", false, false, false, 184), "value", [], "any", false, false, false, 184)) {
            // line 185
            echo "                                        <div id=\"detail_box__html_tpl_data\" class=\"form-group tab-pane\">
                                            ";
            // line 186
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 186), 'label');
            echo "
                                            <div id=\"html_editor\" style=\"height: 480px\" class=\"form-control";
            // line 187
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 187))) ? (" is-invalid") : (""));
            echo "\"></div>
                                            <div style=\"display: none\">";
            // line 188
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 188), 'widget');
            echo "</div>
                                            ";
            // line 189
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "html_tpl_data", [], "any", false, false, false, 189), 'errors');
            echo "
                                        </div>
                                        ";
        }
        // line 192
        echo "                                    </div>
                                </div>
                            </div>
                            ";
        // line 196
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 196), "eccube_form_options", [], "any", false, false, false, 196), "auto_render", [], "any", false, false, false, 196); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 197
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 197), "eccube_form_options", [], "any", false, false, false, 197), "form_theme", [], "any", false, false, false, 197)) {
                // line 198
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 198), "eccube_form_options", [], "any", false, false, false, 198), "form_theme", [], "any", false, false, false, 198)], true);
                // line 199
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                                ";
            } else {
                // line 201
                echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>";
                // line 202
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 202), "label", [], "any", false, false, false, 202)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col-10\">
                                            ";
                // line 204
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                            ";
                // line 205
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 209
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\" id=\"aside_column\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- HTMLメールを確認するモーダル -->
    <div class=\"modal fade\" id=\"htmlPreviewModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"htmlPreviewModal\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title font-weight-bold\">";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.mail.preview"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"bg-light p-4 bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
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
        return "@admin/Setting/Shop/mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 248,  515 => 239,  498 => 225,  481 => 210,  475 => 209,  468 => 205,  464 => 204,  459 => 202,  456 => 201,  450 => 199,  447 => 198,  444 => 197,  439 => 196,  434 => 192,  428 => 189,  424 => 188,  420 => 187,  416 => 186,  413 => 185,  411 => 184,  406 => 182,  402 => 181,  398 => 180,  394 => 179,  390 => 177,  380 => 170,  374 => 166,  366 => 163,  363 => 162,  361 => 161,  354 => 159,  350 => 157,  347 => 156,  340 => 153,  333 => 149,  329 => 148,  322 => 146,  315 => 142,  311 => 141,  304 => 137,  300 => 136,  293 => 132,  285 => 127,  282 => 126,  272 => 125,  253 => 115,  236 => 101,  220 => 87,  216 => 85,  214 => 84,  197 => 69,  186 => 61,  181 => 58,  179 => 57,  168 => 49,  157 => 41,  152 => 39,  142 => 31,  132 => 30,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_mail'] %}

{% block title %}{{ 'admin.setting.shop.mail_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <style>
        .ui-resizable-se {
            right: -3px;
            bottom: -3px;
        }
    </style>
{% endblock %}

{% block javascript %}
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-language_tools.js\"></script>
    <script>
        \$(function() {
            \$('#mail_template').on('change', function() {
                var id = \$(this).val()
                if (id) {
                    location.href = '{{ url('admin_setting_shop_mail') }}/' + id;
                } else {
                    location.href = '{{ url('admin_setting_shop_mail') }}';
                }
            });

            ace.require('ace/ext/language_tools');
            var editor = ace.edit('editor');
            editor.session.setMode('ace/mode/twig');
            editor.setTheme('ace/theme/tomorrow');
            editor.setValue(\"{{ form.tpl_data.vars.value|escape('js') }}\");
            editor.setOptions({
                enableBasicAutocompletion: true,
                enableSnippets: true,
                enableLiveAutocompletion: true,
                showInvisibles: true
            });

            {% if form.html_tpl_data.vars.value %}
                var html_editor = ace.edit('html_editor');
                html_editor.session.setMode('ace/mode/twig');
                html_editor.setTheme('ace/theme/tomorrow');
                html_editor.setValue(\"{{ form.html_tpl_data.vars.value|escape('js') }}\");
                html_editor.setOptions({
                    enableBasicAutocompletion: true,
                    enableSnippets: true,
                    enableLiveAutocompletion: true,
                    showInvisibles: true
                });
            {% endif %}

            \$(\"#editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$(\"#html_editor\").resizable({
                resize: function (event, ui) {
                    editor.resize();
                }
            });

            \$('#form1').on('submit', function() {
                \$('#mail_tpl_data').val(editor.getValue());
                {% if form.html_tpl_data.vars.value %}
                    \$('#mail_html_tpl_data').val(html_editor.getValue());
                {% endif %}
            });

            // HTMLメールモーダル表示
            \$('#htmlPreviewModal').on('show.bs.modal', function (event) {
                var html = \$('#viewEmail');
                html.children().remove();

                // HTMLを読み込んでモーダルに表示
                \$.ajax({
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'html_body' : html_editor.getValue(),
                    },
                    url: '{{ url('admin_setting_shop_mail_preview') }}',
                    success: function(data) {
                        // モーダルに結果を書き出し.
                        \$('#viewEmail').html(data);
                    },
                    error: function() {
                        alert('preview html mail failed.');
                    }
                });
            });

            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                var activated_tab = e.target;
                var id = \$(activated_tab).attr('id');
                if (id == 'menu__{{ form.html_tpl_data.vars.id }}') {
                    \$('#preview_button').attr('style', 'display:blocked;');
                } else {
                    \$('#preview_button').attr('style', 'display:none;');
                }
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"\">
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">{{ 'admin.setting.shop.mail.mail_template_edit'|trans }}</span></div>
                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.setting.shop.mail.mail_template'|trans }}\">
                                        <span>{{ 'admin.setting.shop.mail.mail_template'|trans }}</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-10\">
                                    {{ form_widget(form.template) }}
                                    {{ form_errors(form.template) }}
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>{{ 'admin.setting.shop.mail.mail_subject'|trans }}</span><span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col-10\">
                                    {{ form_widget(form.mail_subject) }}
                                    {{ form_errors(form.mail_subject) }}
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>{{ 'admin.setting.shop.mail.mail_body'|trans }}</span><span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></div>
                                <div class=\"col-10\">
                                    {# タブ表示 #}
                                    {% if id is not null %}
                                    <ul class=\"nav nav-tabs text-center\" role=\"tablist\">
                                        <li class=\"nav-item\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__{{ form.tpl_data.vars.id }}\" href=\"#detail_box__tpl_data\" class=\"nav-link active\" data-toggle=\"tab\"><span>{{ 'admin.setting.shop.mail.mail_text'|trans }}</span></a>
                                        </li>
                                        {% if form.html_tpl_data.vars.value %}
                                        <li class=\"nav-item\" style=\"border: 1px solid #ced4da; padding:0;\">
                                            <a id=\"menu__{{ form.html_tpl_data.vars.id }}\" href=\"#detail_box__html_tpl_data\" class=\"nav-link\" data-toggle=\"tab\"><span>{{ 'admin.setting.shop.mail.mail_html'|trans }}</span></a>
                                        </li>
                                        {% endif %}
                                        <div class=\"col-1\">
                                            <div class=\"d-inline-block\">
                                                <div class=\"btn-group\" role=\"group\">
                                                    <button type=\"button\" id=\"preview_button\" class=\"btn btn-block text-nowrap btn-ec-regular\" style=\"display:none;\" data-toggle=\"modal\" data-target=\"#htmlPreviewModal\">
                                                        {{ 'admin.setting.shop.mail.preview'|trans }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                    {% endif %}
                                    <div class=\"tab-content\">
                                        <div id=\"detail_box__tpl_data\" class=\"form-group tab-pane active\">
                                            {{ form_label(form.tpl_data) }}
                                            <div id=\"editor\" style=\"height: 480px\" class=\"form-control{{ has_errors(form.tpl_data) ? ' is-invalid' }}\"></div>
                                            <div style=\"display: none\">{{ form_widget(form.tpl_data) }}</div>
                                            {{ form_errors(form.tpl_data) }}
                                        </div>
                                        {% if form.html_tpl_data.vars.value %}
                                        <div id=\"detail_box__html_tpl_data\" class=\"form-group tab-pane\">
                                            {{ form_label(form.html_tpl_data) }}
                                            <div id=\"html_editor\" style=\"height: 480px\" class=\"form-control{{ has_errors(form.html_tpl_data) ? ' is-invalid' }}\"></div>
                                            <div style=\"display: none\">{{ form_widget(form.html_tpl_data) }}</div>
                                            {{ form_errors(form.html_tpl_data) }}
                                        </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            {# エンティティ拡張の自動出力 #}
                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                {% if f.vars.eccube_form_options.form_theme %}
                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                    {{ form_row(f) }}
                                {% else %}
                                    <div class=\"row mb-2\">
                                        <div class=\"col-2\"><span>{{ f.vars.label|trans }}</span></div>
                                        <div class=\"col-10\">
                                            {{ form_widget(f) }}
                                            {{ form_errors(f) }}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\" id=\"aside_column\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- HTMLメールを確認するモーダル -->
    <div class=\"modal fade\" id=\"htmlPreviewModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"htmlPreviewModal\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title font-weight-bold\">{{ 'admin.setting.shop.mail.preview'|trans }}</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"bg-light p-4 bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">

                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.close'|trans }}</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Setting/Shop/mail.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Setting/Shop/mail.twig");
    }
}
