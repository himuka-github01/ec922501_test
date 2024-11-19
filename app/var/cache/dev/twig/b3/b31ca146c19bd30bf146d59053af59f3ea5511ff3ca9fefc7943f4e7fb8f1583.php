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

/* @admin/Setting/Shop/tax_rule.twig */
class __TwigTemplate_b98f7d55431f758e1e8cb5cbcb5ba36010367c282d417a99d9765aaf64150d89 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/tax_rule.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/tax_rule.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_tax"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/tax_rule.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax_setting"), "html", null, true);
        
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
        echo "    <style type=\"text/css\">
        .edit {
            display: none;
        }

        .has-error .list {
            display: none;
        }

        .has-error .edit {
            display: block;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 37
        echo "    <script type=\"text/javascript\">
        \$(function() {
            \$('.tax_rule_list_item td.action a.edit-button').click(function() {
                var id = \$(this).data('id');
                var tr = \$('#ex-tax_rule-' + id);
                \$(tr).find('.list').hide();
                \$(tr).find('.edit').show();
            });

            \$('.tax_rule_list_item .cancel').click(function() {
                var id = \$(this).data('id');
                var tr = \$('#ex-tax_rule-' + id);
                \$(tr).find('.edit').hide();
                \$(tr).find('.list').show();
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 57
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.tax_setting"), "html", null, true);
        echo "\">
                            <span>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax_setting"), "html", null, true);
        echo "</span>
                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table tabel-sm\">
                            <colgroup>
                                <col width=\"5%\">
                                <col width=\"\">
                                <col width=\"15%\">
                                <col width=\"35%\">
                                <col width=\"5%\">
                                <col width=\"\">
                            </colgroup>
                            <thead>
                            <tr>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.tax_rate"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.rounding_type"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\">";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.apply_date"), "html", null, true);
        echo "</th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\"></th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3 pr-5\"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr id=\"tax_rule_item_new\">
                                <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_tax_new");
        echo "\">
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "_token", [], "any", false, false, false, 91), 'widget');
        echo "
                                    <td class=\"align-middle pl-3\"></td>
                                    <td class=\"align-middle\" style=\"width:230px;\">
                                        <div class=\"input-group\">
                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "tax_rate", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "col-auto text-right"]]);
        echo "
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">%</span>
                                            </div>
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "tax_rate", [], "any", false, false, false, 99), 'errors');
        echo "
                                        </div>
                                    </td>
                                    <td class=\"align-middle\">
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "rounding_type", [], "any", false, false, false, 103), 'widget');
        echo "
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "rounding_type", [], "any", false, false, false, 104), 'errors');
        echo "
                                    </td>
                                    <td class=\"align-middle\">
                                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "apply_date", [], "any", false, false, false, 107), 'widget');
        echo "
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "apply_date", [], "any", false, false, false, 108), 'errors');
        echo "
                                    </td>
                                    <td class=\"align-middle\"></td>
                                    <td class=\"align-middle pr-5\">
                                        <div class=\"row justify-content-end\">
                                            <button class=\"btn btn-ec-regular px-4\" type=\"submit\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                        </div>
                                    </td>
                                </form>
                            </tr>

                            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TaxRules"]) || array_key_exists("TaxRules", $context) ? $context["TaxRules"] : (function () { throw new RuntimeError('Variable "TaxRules" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TaxRule"]) {
            // line 120
            echo "                                <tr id=\"ex-tax_rule-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 120), "html", null, true);
            echo "\" class=\"tax_rule_list_item ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 120, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 120), [], "array", false, false, false, 120)) {
                echo "has-error";
            }
            echo "\">
                                    <form name=\"edit-form\" id=\"edit-form_";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 121), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_tax");
            echo "\">
                                        ";
            // line 122
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 122, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 122), [], "array", false, false, false, 122), "_token", [], "any", false, false, false, 122), 'widget');
            echo "
                                        <input type=\"hidden\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\" name=\"tax_rule_id\">
                                        <input type=\"hidden\" value=\"edit_inline\" name=\"mode\"/>
                                        <td class=\"align-middle pl-3\"><span>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 125), "html", null, true);
            echo "</span></td>
                                        <td class=\"align-middle text-right\" style=\"width:230px;\">
                                            <div class=\"edit justify-content-end\">
                                                <div class=\"input-group\">
                                                    ";
            // line 129
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 129, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 129), [], "array", false, false, false, 129), "tax_rate", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "col-auto text-right"]]);
            echo "
                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">%</span>
                                                    </div>
                                                    ";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 133, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 133), [], "array", false, false, false, 133), "tax_rate", [], "any", false, false, false, 133), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"list\">
                                                <span class=\"col-6 text-right pr-0\">";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "tax_rate", [], "any", false, false, false, 137), "html", null, true);
            echo "</span><span class=\"col-6 pl-1\">%</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                ";
            // line 142
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 142, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 142), [], "array", false, false, false, 142), "rounding_type", [], "any", false, false, false, 142), 'widget');
            echo "
                                            </div>
                                            <div class=\"list\">
                                                <span>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "rounding_type", [], "any", false, false, false, 145), "html", null, true);
            echo "</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                ";
            // line 150
            if (twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, false, 150)) {
                // line 151
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.base_rate_setting"), "html", null, true);
                echo "
                                                ";
            } else {
                // line 153
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 153, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 153), [], "array", false, false, false, 153), "apply_date", [], "any", false, false, false, 153), 'widget');
                echo "
                                                    ";
                // line 154
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 154, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 154), [], "array", false, false, false, 154), "apply_date", [], "any", false, false, false, 154), 'errors');
                echo "
                                                ";
            }
            // line 156
            echo "                                            </div>
                                            <div class=\"list\">
                                                <span>";
            // line 158
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, false, 158)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.tax.base_rate_setting")) : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "apply_date", [], "any", false, false, false, 158)))), "html", null, true);
            echo "</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                <button type=\"submit\" class=\"btn text-nowrap btn-ec-conversion\">";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                                <button type=\"button\" class=\"btn text-nowrap btn-ec-sub cancel\" data-id=\"";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 164), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                            </div>
                                        </td>
                                        <td class=\"align-middle action\">
                                            <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 pull-right\">
                                                <div class=\"row pr-2\">
                                                    <div class=\"col-6 text-center pr-0\"><a class=\"btn btn-ec-actionIcon edit-button\" data-tooltip=\"true\" data-id=\"";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 170), "html", null, true);
            echo "\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\"><i class=\"fa fa-pencil fa-lg text-secondary\" aria-hidden=\"true\"></i></a></div>

                                                    <div class=\"col-6 text-center\">
                                                        ";
            // line 173
            if ( !twig_get_attribute($this->env, $this->source, $context["TaxRule"], "default_tax_rule", [], "any", false, false, false, 173)) {
                // line 174
                echo "                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\" data-placement=\"top\"
                                                                 title=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#DeleteModal_";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 176), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 削除モーダル -->
                                                            <div class=\"modal fade\" id=\"DeleteModal_";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 181), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                                 aria-labelledby=\"DeleteModal_";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 182), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title font-weight-bold\">
                                                                                ";
                // line 187
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "
                                                                            </h5>
                                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                <span aria-hidden=\"true\">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-left\">
                                                                            <p class=\"text-left modal-message\">";
                // line 194
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 194)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                                ";
                // line 198
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                            </button>
                                                                            <a class=\"btn btn-ec-delete\" href=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_tax_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["TaxRule"], "id", [], "any", false, false, false, 200)]), "html", null, true);
                echo "\"
                                                                                ";
                // line 201
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">
                                                                                ";
                // line 202
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
            }
            // line 209
            echo "                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TaxRule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                            </tbody>
                        </table>
                    </div>
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
        return "@admin/Setting/Shop/tax_rule.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 216,  487 => 209,  477 => 202,  473 => 201,  469 => 200,  464 => 198,  457 => 194,  447 => 187,  439 => 182,  435 => 181,  427 => 176,  423 => 175,  420 => 174,  418 => 173,  410 => 170,  399 => 164,  395 => 163,  387 => 158,  383 => 156,  378 => 154,  373 => 153,  367 => 151,  365 => 150,  357 => 145,  351 => 142,  343 => 137,  336 => 133,  329 => 129,  322 => 125,  317 => 123,  313 => 122,  307 => 121,  298 => 120,  294 => 119,  285 => 113,  277 => 108,  273 => 107,  267 => 104,  263 => 103,  256 => 99,  249 => 95,  242 => 91,  238 => 90,  227 => 82,  223 => 81,  219 => 80,  215 => 79,  196 => 63,  192 => 62,  185 => 57,  175 => 56,  148 => 37,  138 => 36,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_tax'] %}

{% block title %}{{ 'admin.setting.shop.tax_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <style type=\"text/css\">
        .edit {
            display: none;
        }

        .has-error .list {
            display: none;
        }

        .has-error .edit {
            display: block;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script type=\"text/javascript\">
        \$(function() {
            \$('.tax_rule_list_item td.action a.edit-button').click(function() {
                var id = \$(this).data('id');
                var tr = \$('#ex-tax_rule-' + id);
                \$(tr).find('.list').hide();
                \$(tr).find('.edit').show();
            });

            \$('.tax_rule_list_item .cancel').click(function() {
                var id = \$(this).data('id');
                var tr = \$('#ex-tax_rule-' + id);
                \$(tr).find('.edit').hide();
                \$(tr).find('.list').show();
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.setting.shop.tax_setting'|trans }}\">
                            <span>{{ 'admin.setting.shop.tax_setting'|trans }}</span>
                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <table class=\"table tabel-sm\">
                            <colgroup>
                                <col width=\"5%\">
                                <col width=\"\">
                                <col width=\"15%\">
                                <col width=\"35%\">
                                <col width=\"5%\">
                                <col width=\"\">
                            </colgroup>
                            <thead>
                            <tr>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\">{{ 'admin.common.id'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\">{{ 'admin.setting.shop.tax.tax_rate'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\">{{ 'admin.setting.shop.tax.rounding_type'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\">{{ 'admin.setting.shop.tax.apply_date'|trans }}</th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3\"></th>
                                <th class=\"border-top-0 pt-2 pb-2 pl-3 pr-5\"></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr id=\"tax_rule_item_new\">
                                <form name=\"form1\" role=\"form\" class=\"form-horizontal\" id=\"form1\" method=\"post\" action=\"{{ url('admin_setting_shop_tax_new') }}\">
                                    {{ form_widget(form._token) }}
                                    <td class=\"align-middle pl-3\"></td>
                                    <td class=\"align-middle\" style=\"width:230px;\">
                                        <div class=\"input-group\">
                                            {{ form_widget(form.tax_rate, {attr: {class: 'col-auto text-right'}}) }}
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">%</span>
                                            </div>
                                            {{ form_errors(form.tax_rate) }}
                                        </div>
                                    </td>
                                    <td class=\"align-middle\">
                                        {{ form_widget(form.rounding_type) }}
                                        {{ form_errors(form.rounding_type) }}
                                    </td>
                                    <td class=\"align-middle\">
                                        {{ form_widget(form.apply_date) }}
                                        {{ form_errors(form.apply_date) }}
                                    </td>
                                    <td class=\"align-middle\"></td>
                                    <td class=\"align-middle pr-5\">
                                        <div class=\"row justify-content-end\">
                                            <button class=\"btn btn-ec-regular px-4\" type=\"submit\">{{ 'admin.common.create__new'|trans }}</button>
                                        </div>
                                    </td>
                                </form>
                            </tr>

                            {% for TaxRule in TaxRules %}
                                <tr id=\"ex-tax_rule-{{ TaxRule.id }}\" class=\"tax_rule_list_item {% if errors[TaxRule.id] %}has-error{% endif %}\">
                                    <form name=\"edit-form\" id=\"edit-form_{{ TaxRule.id }}\" method=\"post\" action=\"{{ url('admin_setting_shop_tax') }}\">
                                        {{ form_widget(forms[TaxRule.id]._token) }}
                                        <input type=\"hidden\" value=\"{{ TaxRule.id }}\" name=\"tax_rule_id\">
                                        <input type=\"hidden\" value=\"edit_inline\" name=\"mode\"/>
                                        <td class=\"align-middle pl-3\"><span>{{ TaxRule.id }}</span></td>
                                        <td class=\"align-middle text-right\" style=\"width:230px;\">
                                            <div class=\"edit justify-content-end\">
                                                <div class=\"input-group\">
                                                    {{ form_widget(forms[TaxRule.id].tax_rate, {attr: {class: 'col-auto text-right'}}) }}
                                                    <div class=\"input-group-append\">
                                                        <span class=\"input-group-text\">%</span>
                                                    </div>
                                                    {{ form_errors(forms[TaxRule.id].tax_rate) }}
                                                </div>
                                            </div>
                                            <div class=\"list\">
                                                <span class=\"col-6 text-right pr-0\">{{ TaxRule.tax_rate }}</span><span class=\"col-6 pl-1\">%</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                {{ form_widget(forms[TaxRule.id].rounding_type) }}
                                            </div>
                                            <div class=\"list\">
                                                <span>{{ TaxRule.rounding_type }}</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                {% if TaxRule.default_tax_rule %}
                                                    {{ 'admin.setting.shop.tax.base_rate_setting'|trans }}
                                                {% else %}
                                                    {{ form_widget(forms[TaxRule.id].apply_date) }}
                                                    {{ form_errors(forms[TaxRule.id].apply_date) }}
                                                {% endif %}
                                            </div>
                                            <div class=\"list\">
                                                <span>{{ TaxRule.default_tax_rule  ? 'admin.setting.shop.tax.base_rate_setting'|trans : TaxRule.apply_date|date_min }}</span>
                                            </div>
                                        </td>
                                        <td class=\"align-middle\">
                                            <div class=\"edit\">
                                                <button type=\"submit\" class=\"btn text-nowrap btn-ec-conversion\">{{ 'admin.common.decision'|trans }}</button>
                                                <button type=\"button\" class=\"btn text-nowrap btn-ec-sub cancel\" data-id=\"{{ TaxRule.id }}\">{{ 'admin.common.cancel'|trans }}</button>
                                            </div>
                                        </td>
                                        <td class=\"align-middle action\">
                                            <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 pull-right\">
                                                <div class=\"row pr-2\">
                                                    <div class=\"col-6 text-center pr-0\"><a class=\"btn btn-ec-actionIcon edit-button\" data-tooltip=\"true\" data-id=\"{{ TaxRule.id }}\" data-placement=\"top\" title=\"{{ 'admin.common.edit'|trans }}\"><i class=\"fa fa-pencil fa-lg text-secondary\" aria-hidden=\"true\"></i></a></div>

                                                    <div class=\"col-6 text-center\">
                                                        {% if not TaxRule.default_tax_rule %}
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\" data-placement=\"top\"
                                                                 title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#DeleteModal_{{ TaxRule.id }}\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 削除モーダル -->
                                                            <div class=\"modal fade\" id=\"DeleteModal_{{ TaxRule.id }}\" tabindex=\"-1\" role=\"dialog\"
                                                                 aria-labelledby=\"DeleteModal_{{ TaxRule.id }}\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title font-weight-bold\">
                                                                                {{ 'admin.common.delete_modal__title'|trans }}
                                                                            </h5>
                                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                <span aria-hidden=\"true\">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-left\">
                                                                            <p class=\"text-left modal-message\">{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : TaxRule.id }) }}</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                                {{ 'admin.common.cancel'|trans }}
                                                                            </button>
                                                                            <a class=\"btn btn-ec-delete\" href=\"{{ url('admin_setting_shop_tax_delete', { id : TaxRule.id }) }}\"
                                                                                {{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                                                                                {{ 'admin.common.delete'|trans }}
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Setting/Shop/tax_rule.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Setting/Shop/tax_rule.twig");
    }
}
