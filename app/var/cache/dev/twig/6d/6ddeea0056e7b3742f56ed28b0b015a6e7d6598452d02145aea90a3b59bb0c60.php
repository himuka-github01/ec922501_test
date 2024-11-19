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

/* @admin/Customer/index.twig */
class __TwigTemplate_a255cd465e2aff8c581bbf15031a2cd7769281f33f70e5cf0e92fcd429673b58 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/index.twig"));

        // line 13
        $context["menus"] = [0 => "customer", 1 => "customer_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer/index.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_list"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_management"), "html", null, true);
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tempusdominus-bootstrap-4.min.css", "admin"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function() {

            // datetimepicker と競合するため HTML5 のカレンダ入力を無効に
            \$('input[type=\"date\"]').attr('type','text');

            // datetimepicker で value が消えてしまうので data-value に保持しておく
            \$('input.datetimepicker-input').each(function() {
                \$(this).data('value', \$(this).val());
            });

            \$('input.datetimepicker-input').not('#admin_search_customer_birth_start').not('#admin_search_customer_birth_end').datetimepicker({
                locale: '";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 52, $this->source); })()), "locale", [], "any", false, false, false, 52), "html", null, true);
        echo "',
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false,
                buttons: {
                    showToday: true,
                    showClose: true
                },
            });

            \$('#admin_search_customer_birth_start').datetimepicker({
                locale: '";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 62, $this->source); })()), "locale", [], "any", false, false, false, 62), "html", null, true);
        echo "',
                format: 'YYYY-MM-DD',
                useCurrent: false,
                buttons: {
                    showToday: true,
                    showClose: true
                }
            });

            \$('#admin_search_customer_birth_end').datetimepicker({
                locale: '";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 72, $this->source); })()), "locale", [], "any", false, false, false, 72), "html", null, true);
        echo "',
                format: 'YYYY-MM-DD',
                useCurrent: false,
                buttons: {
                    showToday: true,
                    showClose: true
                }
            });

            // datetimepicker で value が消えてしまうので更新
            \$('input.datetimepicker-input').each(function() {
                \$(this).val(\$(this).data('value'));
            });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 91
        echo "    <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 92, $this->source); })()), "_token", [], "any", false, false, false, 92), 'widget');
        echo "
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 99, $this->source); })()), "multi", [], "any", false, false, false, 99), 'widget');
        echo "
                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 100, $this->source); })()), "multi", [], "any", false, false, false, 100), 'errors');
        echo "
                        </div>
                        <div class=\"d-inline-block mb-3 collapsed\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a></div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse";
        // line 106
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 106, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_status"), "html", null, true);
        echo "</p>
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 112, $this->source); })()), "customer_status", [], "any", false, false, false, 112), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 113, $this->source); })()), "customer_status", [], "any", false, false, false, 113), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 120, $this->source); })()), "buy_product_name", [], "any", false, false, false, 120), 'widget');
        echo "
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 121, $this->source); })()), "buy_product_name", [], "any", false, false, false, 121), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</p>
                                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 130, $this->source); })()), "sex", [], "any", false, false, false, 130), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 131, $this->source); })()), "sex", [], "any", false, false, false, 131), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 140, $this->source); })()), "buy_total_start", [], "any", false, false, false, 140), 'widget');
        echo "
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 141, $this->source); })()), "buy_total_start", [], "any", false, false, false, 141), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 145, $this->source); })()), "buy_total_end", [], "any", false, false, false, 145), 'widget');
        echo "
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 146, $this->source); })()), "buy_total_end", [], "any", false, false, false, 146), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.birth_month"), "html", null, true);
        echo "</label>
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 158, $this->source); })()), "birth_month", [], "any", false, false, false, 158), 'widget');
        echo "
                                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 159, $this->source); })()), "birth_month", [], "any", false, false, false, 159), 'errors');
        echo "
                                </div>
                                <div class=\"col-7\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_count"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 170, $this->source); })()), "buy_times_start", [], "any", false, false, false, 170), 'widget');
        echo "
                                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 171, $this->source); })()), "buy_times_start", [], "any", false, false, false, 171), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 175, $this->source); })()), "buy_times_end", [], "any", false, false, false, 175), 'widget');
        echo "
                                    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 176, $this->source); })()), "buy_times_end", [], "any", false, false, false, 176), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 188, $this->source); })()), "birth_start", [], "any", false, false, false, 188), 'widget');
        echo "
                                    ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 189, $this->source); })()), "birth_start", [], "any", false, false, false, 189), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 193, $this->source); })()), "birth_end", [], "any", false, false, false, 193), 'widget');
        echo "
                                    ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 194, $this->source); })()), "birth_end", [], "any", false, false, false, 194), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 204, $this->source); })()), "create_datetime_start", [], "any", false, false, false, 204), 'widget');
        echo "
                                    ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 205, $this->source); })()), "create_datetime_start", [], "any", false, false, false, 205), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 209, $this->source); })()), "create_datetime_end", [], "any", false, false, false, 209), 'widget');
        echo "
                                    ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 210, $this->source); })()), "create_datetime_end", [], "any", false, false, false, 210), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.pref"), "html", null, true);
        echo "</label>
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 222, $this->source); })()), "pref", [], "any", false, false, false, 222), 'widget');
        echo "
                                    ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 223, $this->source); })()), "pref", [], "any", false, false, false, 223), 'errors');
        echo "
                                </div>
                                <div class=\"col-7\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 234, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 234), 'widget');
        echo "
                                    ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 235, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 235), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 239, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 239), 'widget');
        echo "
                                    ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 240, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 240), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"mb-3\">
                            <label>";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                            ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 250, $this->source); })()), "phone_number", [], "any", false, false, false, 250), 'widget');
        echo "
                            ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 251, $this->source); })()), "phone_number", [], "any", false, false, false, 251), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.last_buy_date"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 259, $this->source); })()), "last_buy_start", [], "any", false, false, false, 259), 'widget');
        echo "
                                    ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 260, $this->source); })()), "last_buy_start", [], "any", false, false, false, 260), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 264, $this->source); })()), "last_buy_end", [], "any", false, false, false, 264), 'widget');
        echo "
                                    ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 265, $this->source); })()), "last_buy_end", [], "any", false, false, false, 265), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 273
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 273, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 273), "eccube_form_options", [], "any", false, false, false, 273), "auto_render", [], "any", false, false, false, 273); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 274
            echo "                    ";
            // line 275
            echo "                    <div class=\"row mb-2\">
                        ";
            // line 276
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 276), "eccube_form_options", [], "any", false, false, false, 276), "form_theme", [], "any", false, false, false, 276)) {
                // line 277
                echo "                            ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 277), "eccube_form_options", [], "any", false, false, false, 277), "form_theme", [], "any", false, false, false, 277)], true);
                // line 278
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                        ";
            } else {
                // line 280
                echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                // line 282
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 282), "label", [], "any", false, false, false, 282)), "html", null, true);
                echo "</label>
                                    ";
                // line 283
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                    ";
                // line 284
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 288
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "            </div>
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
            ";
        // line 294
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 294, $this->source); })())) {
            // line 295
            echo "                <span class=\"font-weight-bold ml-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 295, $this->source); })()), "totalItemCount", [], "any", false, false, false, 295)]), "html", null, true);
            echo "</span>
            ";
        }
        // line 297
        echo "        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            ";
        // line 299
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 299, $this->source); })())], true, true);
        echo "
        </div>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    ";
        // line 304
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 304, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 304, $this->source); })()), "totalItemCount", [], "any", false, false, false, 304))) {
            // line 305
            echo "                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-right\">
                                ";
            // line 310
            echo "                                <div class=\"d-inline-block mr-2\">
                                    <select class=\"custom-select\" onchange=\"location = this.value;\">
                                        ";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 312, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 313
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 313) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 313, $this->source); })()))) {
                    echo " selected ";
                }
                // line 314
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 314)]), "html", null, true);
                echo "\">
                                                ";
                // line 315
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 315)]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "                                    </select>
                                </div>

                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 322
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_export");
            echo "\"><i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span></a>
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 323
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CUSTOMER")]), "html", null, true);
            echo "\"><i class=\"fa fa-cog mr-1 text-secondary\"></i><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-3 pl-3 text-nowrap\">";
            // line 333
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 334
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 335
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 336
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">&nbsp;</th>
                                        <th class=\"border-top-0 pt-2 pb-3 pr-3\">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 342
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 342, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Customer"]) {
                // line 343
                echo "                                        <tr id=\"ex-customer-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 343), "html", null, true);
                echo "\">
                                            <td class=\"align-middle pl-3\">";
                // line 344
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 344), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\"><a href=\"";
                // line 345
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 345)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "name01", [], "any", false, false, false, 345), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "name02", [], "any", false, false, false, 345), "html", null, true);
                echo "</a></td>
                                            <td class=\"align-middle\">";
                // line 346
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "phone_number", [], "any", false, false, false, 346), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\">";
                // line 347
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, false, 347), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\"></td>
                                            <td class=\"align-middle pr-3\">
                                                <div class=\"text-right\">
                                                    ";
                // line 351
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Customer"], "Status", [], "any", false, false, false, 351), "id", [], "any", false, false, false, 351) == twig_constant("Eccube\\Entity\\Master\\CustomerStatus::PROVISIONAL"))) {
                    // line 352
                    echo "                                                        <div class=\"px-1 d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#discontinuance_cus_";
                    // line 353
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 353), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance_cus_";
                    // line 357
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 357), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">";
                    // line 361
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend_confirm_title"), "html", null, true);
                    echo "</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">";
                    // line 367
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend_confirm_message"), "html", null, true);
                    echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                    // line 370
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                                        ";
                    // line 372
                    echo "                                                                        <a class=\"btn btn-ec-delete\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_resend", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 372)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " data-method=\"get\" data-confirm=\"false\">
                                                                            ";
                    // line 373
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.send"), "html", null, true);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 380
                echo "                                                    <div class=\"px-1 d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                        <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#discontinuance-";
                // line 381
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 381), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    </div>
                                                    <div class=\"modal fade\" id=\"discontinuance-";
                // line 385
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 385), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title font-weight-bold\">
                                                                        ";
                // line 390
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                        <span aria-hidden=\"true\">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-left\">
                                                                    <p class=\"text-left\">
                                                                        ";
                // line 397
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, false, 397)]), "html", null, true);
                echo "</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                        ";
                // line 401
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                    </button>
                                                                    <a href=\"";
                // line 403
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 403)]), "html", null, true);
                echo "\" class=\"btn btn-ec-delete\"";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">
                                                                        ";
                // line 404
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.text-right -->
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\">
                                    ";
            // line 417
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 417, $this->source); })()), "totalItemCount", [], "any", false, false, false, 417) > 0)) {
                // line 418
                echo "                                        ";
                $this->loadTemplate("@admin/pager.twig", "@admin/Customer/index.twig", 418)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 418, $this->source); })()), "paginationData", [], "any", false, false, false, 418), "routes" => "admin_customer_page"]));
                // line 419
                echo "                                    ";
            }
            // line 420
            echo "                                </div>
                            </div>
                        </div>
                    ";
        } elseif (        // line 423
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 423, $this->source); })())) {
            // line 424
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 426
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 427
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        } else {
            // line 431
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 433
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 434
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 435
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        }
        // line 439
        echo "                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Customer/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  969 => 439,  962 => 435,  958 => 434,  954 => 433,  950 => 431,  943 => 427,  939 => 426,  935 => 424,  933 => 423,  928 => 420,  925 => 419,  922 => 418,  920 => 417,  915 => 414,  899 => 404,  893 => 403,  888 => 401,  881 => 397,  871 => 390,  863 => 385,  856 => 381,  851 => 380,  841 => 373,  834 => 372,  830 => 370,  824 => 367,  815 => 361,  808 => 357,  801 => 353,  796 => 352,  794 => 351,  787 => 347,  783 => 346,  775 => 345,  771 => 344,  766 => 343,  762 => 342,  753 => 336,  749 => 335,  745 => 334,  741 => 333,  726 => 323,  720 => 322,  713 => 317,  705 => 315,  700 => 314,  695 => 313,  691 => 312,  687 => 310,  681 => 305,  679 => 304,  671 => 299,  667 => 297,  661 => 295,  659 => 294,  655 => 293,  650 => 290,  643 => 288,  636 => 284,  632 => 283,  628 => 282,  624 => 280,  618 => 278,  615 => 277,  613 => 276,  610 => 275,  608 => 274,  603 => 273,  593 => 265,  589 => 264,  584 => 262,  579 => 260,  575 => 259,  569 => 256,  561 => 251,  557 => 250,  553 => 249,  541 => 240,  537 => 239,  532 => 237,  527 => 235,  523 => 234,  517 => 231,  506 => 223,  502 => 222,  496 => 219,  484 => 210,  480 => 209,  475 => 207,  470 => 205,  466 => 204,  460 => 201,  450 => 194,  446 => 193,  441 => 191,  436 => 189,  432 => 188,  426 => 185,  414 => 176,  410 => 175,  405 => 173,  400 => 171,  396 => 170,  390 => 167,  379 => 159,  375 => 158,  369 => 155,  357 => 146,  353 => 145,  348 => 143,  343 => 141,  339 => 140,  333 => 137,  324 => 131,  320 => 130,  316 => 129,  305 => 121,  301 => 120,  297 => 119,  288 => 113,  284 => 112,  280 => 111,  272 => 106,  265 => 102,  260 => 100,  256 => 99,  250 => 98,  241 => 92,  238 => 91,  228 => 90,  201 => 72,  188 => 62,  175 => 52,  158 => 38,  154 => 37,  149 => 36,  139 => 35,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['customer', 'customer_master'] %}

{% block title %}{{ 'admin.customer.customer_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.customer.customer_management'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/tempusdominus-bootstrap-4.min.css', 'admin') }}\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\"></script>

    <script>
        \$(function() {

            // datetimepicker と競合するため HTML5 のカレンダ入力を無効に
            \$('input[type=\"date\"]').attr('type','text');

            // datetimepicker で value が消えてしまうので data-value に保持しておく
            \$('input.datetimepicker-input').each(function() {
                \$(this).data('value', \$(this).val());
            });

            \$('input.datetimepicker-input').not('#admin_search_customer_birth_start').not('#admin_search_customer_birth_end').datetimepicker({
                locale: '{{ eccube_config.locale }}',
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false,
                buttons: {
                    showToday: true,
                    showClose: true
                },
            });

            \$('#admin_search_customer_birth_start').datetimepicker({
                locale: '{{ eccube_config.locale }}',
                format: 'YYYY-MM-DD',
                useCurrent: false,
                buttons: {
                    showToday: true,
                    showClose: true
                }
            });

            \$('#admin_search_customer_birth_end').datetimepicker({
                locale: '{{ eccube_config.locale }}',
                format: 'YYYY-MM-DD',
                useCurrent: false,
                buttons: {
                    showToday: true,
                    showClose: true
                }
            });

            // datetimepicker で value が消えてしまうので更新
            \$('input.datetimepicker-input').each(function() {
                \$(this).val(\$(this).data('value'));
            });
        });

    </script>
{% endblock javascript %}

{% block main %}
    <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
        {{ form_widget(searchForm._token) }}
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.customer.multi_search_label'|trans }}\">{{ 'admin.customer.multi_search_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            {{ form_widget(searchForm.multi) }}
                            {{ form_errors(searchForm.multi) }}
                        </div>
                        <div class=\"d-inline-block mb-3 collapsed\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">{{ 'admin.common.search_detail'|trans }}</span></a></div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse{{ has_errors ? ' show' }}\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.customer.customer_status'|trans }}</p>
                                {{ form_widget(searchForm.customer_status, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.customer_status) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.order.purchase_product'|trans }}</label>
                            {{ form_widget(searchForm.buy_product_name) }}
                            {{ form_errors(searchForm.buy_product_name) }}
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.common.gender'|trans }}</p>
                                {{ form_widget(searchForm.sex, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.sex) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.order.purchase_price'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.buy_total_start) }}
                                    {{ form_errors(searchForm.buy_total_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.buy_total_end) }}
                                    {{ form_errors(searchForm.buy_total_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.customer.birth_month'|trans }}</label>
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    {{ form_widget(searchForm.birth_month) }}
                                    {{ form_errors(searchForm.birth_month) }}
                                </div>
                                <div class=\"col-7\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.order.purchase_count'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.buy_times_start) }}
                                    {{ form_errors(searchForm.buy_times_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.buy_times_end) }}
                                    {{ form_errors(searchForm.buy_times_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.common.birth_day'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.birth_start) }}
                                    {{ form_errors(searchForm.birth_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.birth_end) }}
                                    {{ form_errors(searchForm.birth_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.common.create_date'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.create_datetime_start) }}
                                    {{ form_errors(searchForm.create_datetime_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.create_datetime_end) }}
                                    {{ form_errors(searchForm.create_datetime_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.common.pref'|trans }}</label>
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    {{ form_widget(searchForm.pref) }}
                                    {{ form_errors(searchForm.pref) }}
                                </div>
                                <div class=\"col-7\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.common.update_date'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.update_datetime_start) }}
                                    {{ form_errors(searchForm.update_datetime_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.update_datetime_end) }}
                                    {{ form_errors(searchForm.update_datetime_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"mb-3\">
                            <label>{{ 'admin.common.phone_number'|trans }}</label>
                            {{ form_widget(searchForm.phone_number) }}
                            {{ form_errors(searchForm.phone_number) }}
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.order.last_buy_date'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.last_buy_start) }}
                                    {{ form_errors(searchForm.last_buy_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.last_buy_end) }}
                                    {{ form_errors(searchForm.last_buy_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {# エンティティ拡張の自動出力 #}
                {% for f in searchForm|filter(f => f.vars.eccube_form_options.auto_render) %}
                    {# TODO 1項目1行になるのを改善 #}
                    <div class=\"row mb-2\">
                        {% if f.vars.eccube_form_options.form_theme %}
                            {% form_theme f f.vars.eccube_form_options.form_theme %}
                            {{ form_row(f) }}
                        {% else %}
                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>{{ f.vars.label|trans }}</label>
                                    {{ form_widget(f) }}
                                    {{ form_errors(f) }}
                                </div>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">{{ 'admin.common.search'|trans }}</button>
            {% if pagination %}
                <span class=\"font-weight-bold ml-2\">{{ 'admin.common.search_result'|trans({'%count%':pagination.totalItemCount}) }}</span>
            {% endif %}
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            {{ include('@admin/search_items.twig', { 'form': searchForm }, ignore_missing = true) }}
        </div>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    {% if pagination and pagination.totalItemCount %}
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-right\">
                                {#Dropdown page count#}
                                <div class=\"d-inline-block mr-2\">
                                    <select class=\"custom-select\" onchange=\"location = this.value;\">
                                        {% for pageMax in pageMaxis %}
                                            <option {% if pageMax.name == page_count %} selected {% endif %}
                                                    value=\"{{ path('admin_customer_page', {'page_no': 1, 'page_count': pageMax.name }) }}\">
                                                {{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                        {% endfor %}
                                    </select>
                                </div>

                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_customer_export') }}\"><i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>{{ 'admin.common.csv_download'|trans }}</span></a>
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CUSTOMER') }) }}\"><i class=\"fa fa-cog mr-1 text-secondary\"></i><span>{{ 'admin.setting.shop.csv_setting'|trans }}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-3 pl-3 text-nowrap\">{{ 'admin.customer.customer_id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.name'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.phone_number'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.mail_address'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">&nbsp;</th>
                                        <th class=\"border-top-0 pt-2 pb-3 pr-3\">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for Customer in pagination %}
                                        <tr id=\"ex-customer-{{ Customer.id }}\">
                                            <td class=\"align-middle pl-3\">{{ Customer.id }}</td>
                                            <td class=\"align-middle\"><a href=\"{{ url('admin_customer_edit', { 'id': Customer.id}) }}\">{{ Customer.name01 }}&nbsp;{{ Customer.name02 }}</a></td>
                                            <td class=\"align-middle\">{{ Customer.phone_number }}</td>
                                            <td class=\"align-middle\">{{ Customer.email }}</td>
                                            <td class=\"align-middle\"></td>
                                            <td class=\"align-middle pr-3\">
                                                <div class=\"text-right\">
                                                    {% if Customer.Status.id == constant('Eccube\\\\Entity\\\\Master\\\\CustomerStatus::PROVISIONAL') %}
                                                        <div class=\"px-1 d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.customer.resend'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#discontinuance_cus_{{ Customer.id }}\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance_cus_{{ Customer.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">{{ 'admin.customer.resend_confirm_title'|trans }}</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">{{ 'admin.customer.resend_confirm_message'|trans }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                        {# TODO: CSSの変更は別タスクでやります #}
                                                                        <a class=\"btn btn-ec-delete\" href=\"{{ url('admin_customer_resend', {'id' : Customer.id}) }}\" {{ csrf_token_for_anchor() }} data-method=\"get\" data-confirm=\"false\">
                                                                            {{ 'admin.common.send'|trans }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                    <div class=\"px-1 d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                        <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#discontinuance-{{ Customer.id }}\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    </div>
                                                    <div class=\"modal fade\" id=\"discontinuance-{{ Customer.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title font-weight-bold\">
                                                                        {{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                        <span aria-hidden=\"true\">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-left\">
                                                                    <p class=\"text-left\">
                                                                        {{ 'admin.common.delete_modal__message'|trans({ '%name%' : Customer.email }) }}</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                        {{ 'admin.common.cancel'|trans }}
                                                                    </button>
                                                                    <a href=\"{{ url('admin_customer_delete', {'id' : Customer.id}) }}\" class=\"btn btn-ec-delete\"{{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                                                                        {{ 'admin.common.delete'|trans }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.text-right -->
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\">
                                    {% if pagination.totalItemCount > 0 %}
                                        {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_customer_page' } %}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% elseif has_errors %}
                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_invalid_condition'|trans }}</div>
                                <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_no_result'|trans }}</div>
                                <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                                <div class=\"text-center text-muted\">{{ 'admin.common.search_try_advanced_search'|trans }}</div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Customer/index.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Customer/index.twig");
    }
}
