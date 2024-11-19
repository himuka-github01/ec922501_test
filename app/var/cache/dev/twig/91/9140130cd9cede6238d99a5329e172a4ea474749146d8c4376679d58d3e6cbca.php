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

/* @admin/Setting/Shop/csv.twig */
class __TwigTemplate_f9b670bee00353916233b8371611fd2cf69c8b1d2c4c8437940adf9915c19ff2 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/csv.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/csv.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_csv"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/csv.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
        
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
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "    <script>
        \$(function() {

            function add(event) {
                \$('#' + event.data.from + ' option:selected')
                    .appendTo(\$('#' + event.data.to))
                    .prop('selected', false);
            }

            function addAll(event) {
                \$('#' + event.data.from + ' option').each(function() {
                    \$(this).appendTo(\$('#' + event.data.to));
                    \$(this).prop('selected', false);// 選択状態の解除
                });
            }

            \$('#add').on('click', {from: 'csv-not-output', to: 'csv-output'}, add);
            \$('#add-all').on('click', {from: 'csv-not-output', to: 'csv-output'}, addAll);
            \$('#remove').on('click', {from: 'csv-output', to: 'csv-not-output'}, add);
            \$('#remove-all').on('click', {from: 'csv-output', to: 'csv-not-output'}, addAll);

            \$('.move').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'up' ? \$op.first().prev().before(\$op) : \$op.last().next().after(\$op);
                }
            });

            \$('.move-most').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'top' ? \$op.prependTo('#csv-output') : \$op.appendTo('#csv-output');
                }
            });

            \$('#csv-type').on('change', function() {
                var id = \$(this).val();
                var href = '";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv");
        echo "' + '/' + id;
                location.href = href;
                return false;
            });

            \$('#csv-form').submit(function() {
                \$('#csv-not-output').children().prop('selected', true);
                \$('#csv-output').children().prop('selected', true);
            })
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 74
        echo "    <form id=\"csv-form\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 74, $this->source); })())]), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
        echo "\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.csv.csv_columns"), "html", null, true);
        echo "\">
                                <span>";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.csv_columns"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row mb-4 justify-content-between\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.csv.csv_type"), "html", null, true);
        echo "\">
                                        <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.csv_type"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "csv_type", [], "any", false, false, false, 94), 'widget', ["id" => "csv-type"]);
        echo "
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"FormControlSelect1\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.non_output_colmuns"), "html", null, true);
        echo "</label>
                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "csv_not_output", [], "any", false, false, false, 102), 'widget', ["id" => "csv-not-output", "attr" => ["size" => "30"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation"), "html", null, true);
        echo "</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"add\"><i class=\"fa fa-arrow-right\"
                                                                                                  aria-hidden=\"true\"></i><span>&nbsp;";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__output"), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"remove\"><i class=\"fa fa-arrow-left\"
                                                                                                     aria-hidden=\"true\"><span>&nbsp;";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__release"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"add-all\"><i
                                                        class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"><span>&nbsp;";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__all_output"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"remove-all\"><i class=\"fa fa-arrow-circle-left\"
                                                                                                         aria-hidden=\"true\"><span>&nbsp;";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__all_release"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"FormControlSelect2\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.output_colmuns"), "html", null, true);
        echo "</label>
                                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "csv_output", [], "any", false, false, false, 141), 'widget', ["id" => "csv-output", "attr" => ["size" => "30"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order"), "html", null, true);
        echo "</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move\" data-value=\"up\"><i class=\"fa fa-arrow-up\"
                                                                                                              aria-hidden=\"true\"><span>&nbsp;";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__up"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move\" data-value=\"down\"><i class=\"fa fa-arrow-down\"
                                                                                                                aria-hidden=\"true\"><span>&nbsp;";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__down"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move-most\" data-value=\"top\"><i class=\"fa fa-arrow-circle-up\"
                                                                                                                    aria-hidden=\"true\"><span>&nbsp;";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__top"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move-most\" data-value=\"bottom\"><i class=\"fa fa-arrow-circle-down\"
                                                                                                                       aria-hidden=\"true\"><span>&nbsp;";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__bottom"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            ";
        // line 179
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.how_to_use"), "html", null, true));
        echo "
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
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 195
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

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/csv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 195,  356 => 179,  346 => 172,  336 => 165,  326 => 158,  316 => 151,  308 => 146,  300 => 141,  296 => 140,  286 => 133,  276 => 126,  266 => 119,  256 => 112,  248 => 107,  240 => 102,  236 => 101,  226 => 94,  218 => 89,  214 => 88,  205 => 82,  201 => 81,  192 => 75,  187 => 74,  177 => 73,  155 => 60,  114 => 21,  104 => 20,  85 => 16,  66 => 15,  55 => 11,  53 => 18,  51 => 13,  38 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_csv'] %}

{% block title %}{{ 'admin.setting.shop.csv_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(function() {

            function add(event) {
                \$('#' + event.data.from + ' option:selected')
                    .appendTo(\$('#' + event.data.to))
                    .prop('selected', false);
            }

            function addAll(event) {
                \$('#' + event.data.from + ' option').each(function() {
                    \$(this).appendTo(\$('#' + event.data.to));
                    \$(this).prop('selected', false);// 選択状態の解除
                });
            }

            \$('#add').on('click', {from: 'csv-not-output', to: 'csv-output'}, add);
            \$('#add-all').on('click', {from: 'csv-not-output', to: 'csv-output'}, addAll);
            \$('#remove').on('click', {from: 'csv-output', to: 'csv-not-output'}, add);
            \$('#remove-all').on('click', {from: 'csv-output', to: 'csv-not-output'}, addAll);

            \$('.move').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'up' ? \$op.first().prev().before(\$op) : \$op.last().next().after(\$op);
                }
            });

            \$('.move-most').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'top' ? \$op.prependTo('#csv-output') : \$op.appendTo('#csv-output');
                }
            });

            \$('#csv-type').on('change', function() {
                var id = \$(this).val();
                var href = '{{ url('admin_setting_shop_csv') }}' + '/' + id;
                location.href = href;
                return false;
            });

            \$('#csv-form').submit(function() {
                \$('#csv-not-output').children().prop('selected', true);
                \$('#csv-output').children().prop('selected', true);
            })
        });
    </script>
{% endblock javascript %}

{% block main %}
    <form id=\"csv-form\" method=\"post\" action=\"{{ url('admin_setting_shop_csv', {'id': id}) }}\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('_token') }}\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.setting.shop.csv.csv_columns'|trans }}\">
                                <span>{{ 'admin.setting.shop.csv.csv_columns'|trans }}</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row mb-4 justify-content-between\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.setting.shop.csv.csv_type'|trans }}\">
                                        <span>{{ 'admin.setting.shop.csv.csv_type'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    {{ form_widget(form.csv_type, {'id': 'csv-type'}) }}
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"FormControlSelect1\">{{ 'admin.setting.shop.csv.non_output_colmuns'|trans }}</label>
                                        {{ form_widget(form.csv_not_output, {'id': 'csv-not-output', 'attr': {'size': '30'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>{{ 'admin.setting.shop.csv.operation'|trans }}</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"add\"><i class=\"fa fa-arrow-right\"
                                                                                                  aria-hidden=\"true\"></i><span>&nbsp;{{ 'admin.setting.shop.csv.operation__output'|trans }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"remove\"><i class=\"fa fa-arrow-left\"
                                                                                                     aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.operation__release'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"add-all\"><i
                                                        class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.operation__all_output'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"remove-all\"><i class=\"fa fa-arrow-circle-left\"
                                                                                                         aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.operation__all_release'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"FormControlSelect2\">{{ 'admin.setting.shop.csv.output_colmuns'|trans }}</label>
                                        {{ form_widget(form.csv_output, {'id': 'csv-output', 'attr': {'size': '30'}}) }}
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>{{ 'admin.setting.shop.csv.order'|trans }}</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move\" data-value=\"up\"><i class=\"fa fa-arrow-up\"
                                                                                                              aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.order__up'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move\" data-value=\"down\"><i class=\"fa fa-arrow-down\"
                                                                                                                aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.order__down'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move-most\" data-value=\"top\"><i class=\"fa fa-arrow-circle-up\"
                                                                                                                    aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.order__top'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move-most\" data-value=\"bottom\"><i class=\"fa fa-arrow-circle-down\"
                                                                                                                       aria-hidden=\"true\"><span>&nbsp;{{ 'admin.setting.shop.csv.order__bottom'|trans }}</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            {{ 'admin.setting.shop.csv.how_to_use'|trans|nl2br }}
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
{% endblock %}
", "@admin/Setting/Shop/csv.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Setting/Shop/csv.twig");
    }
}
