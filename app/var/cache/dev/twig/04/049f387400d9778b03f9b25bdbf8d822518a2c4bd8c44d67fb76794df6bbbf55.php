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

/* @ProductOption/admin/Product/product_option.twig */
class __TwigTemplate_f96eab48728c9d0074a301ecbb1e7d68a6bb5e06fbfdbbe13cb3e23f6d917b79 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/product_option.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/product_option.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "edit"];
        // line 14
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["optionForm"]) || array_key_exists("optionForm", $context) ? $context["optionForm"] : (function () { throw new RuntimeError('Variable "optionForm" does not exist.', 14, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@ProductOption/admin/Product/product_option.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.nav.product.product.option"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
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

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 20
        echo "    <script>
        \$(function () {
            \$('#check-all').click(function () {
                var addall = \$('#check-all').prop('checked');
                if (addall) {
                    \$('input[id\$=_checked]').prop('checked', true);
                } else {
                    \$('input[id\$=_checked]').prop('checked', false);
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title align-middle\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.product_name"), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["Options"]) || array_key_exists("Options", $context) ? $context["Options"] : (function () { throw new RuntimeError('Variable "Options" does not exist.', 49, $this->source); })())) > 0)) {
            // line 50
            echo "                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_option_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
            echo "\">

                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-6\">
                                        <span class=\"align-middle\"></span>
                                    </div>
                                </div>
                            </div>
                            <div id=\"ex-product_class\" class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <th class=\"pt-2 pb-2 pl-3\">
                                        <input type=\"checkbox\" id=\"check-all\">
                                    </th>
                                    <th class=\"pt-2 pb-2\">";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.backend_name"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.name"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.type"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.option.disp"), "html", null, true);
            echo "</th>

                                    </thead>
                                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["optionForm"]) || array_key_exists("optionForm", $context) ? $context["optionForm"] : (function () { throw new RuntimeError('Variable "optionForm" does not exist.', 73, $this->source); })()), "product_options", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["productOption"]) {
                // line 74
                echo "                                        <tr id=\"ex-product_class\">
                                            <td class=\"align-middle pl-3\">
                                                ";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["productOption"], "checked", [], "any", false, false, false, 76), 'widget', ["checked" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productOption"], "vars", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "checked", [], "any", false, false, false, 76)]);
                echo "
                                                ";
                // line 77
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["productOption"], "option_id", [], "any", false, false, false, 77), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productOption"], "vars", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77), "Option", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77)]);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productOption"], "vars", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80), "Option", [], "any", false, false, false, 80), "backend_name", [], "any", false, false, false, 80), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productOption"], "vars", [], "any", false, false, false, 83), "value", [], "any", false, false, false, 83), "Option", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["arrType"]) || array_key_exists("arrType", $context) ? $context["arrType"] : (function () { throw new RuntimeError('Variable "arrType" does not exist.', 86, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productOption"], "vars", [], "any", false, false, false, 86), "value", [], "any", false, false, false, 86), "Option", [], "any", false, false, false, 86), "type", [], "any", false, false, false, 86), [], "array", false, false, false, 86), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 89
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productOption"], "vars", [], "any", false, false, false, 89), "value", [], "any", false, false, false, 89), "Option", [], "any", false, false, false, 89), "description_flg", [], "any", false, false, false, 89) == 1)) {
                    echo "○";
                }
                // line 90
                echo "                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productOption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                                </table>
                            </div>
                        </div>
                        <div class=\"c-conversionArea\">
                            <div class=\"c-conversionArea__container\">
                                <div class=\"row justify-content-between align-items-center\">
                                    <div class=\"col-6\">
                                         <div class=\"c-conversionArea__leftBlockItem\">
                                            <a class=\"c-baseLink\" href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 101), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true, false, 101)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 101), "get", [0 => "eccube.admin.product.search.page_no"], "method", false, false, false, 101), "1")) : ("1"))]), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
            echo "</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                            <div class=\"col-auto\">
                                                <button class=\"btn btn-ec-conversion px-5\"
                                                        type=\"submit\">";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.save"), "html", null, true);
            echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                ";
        } else {
            // line 120
            echo "                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                     <div class=\"c-conversionArea__leftBlockItem\">
                                        <a class=\"c-baseLink\" href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 125), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true, false, 125)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 125), "get", [0 => "eccube.admin.product.search.page_no"], "method", false, false, false, 125), "1")) : ("1"))]), "html", null, true);
            echo "\">
                                            <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
            echo "</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 134
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Product/product_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 134,  307 => 126,  303 => 125,  296 => 120,  283 => 110,  272 => 102,  268 => 101,  258 => 93,  250 => 90,  246 => 89,  240 => 86,  234 => 83,  228 => 80,  222 => 77,  218 => 76,  214 => 74,  210 => 73,  204 => 70,  200 => 69,  196 => 68,  192 => 67,  173 => 51,  168 => 50,  166 => 49,  155 => 43,  146 => 36,  136 => 35,  114 => 20,  104 => 19,  85 => 17,  66 => 16,  55 => 11,  53 => 14,  51 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
#}

{% extends '@admin/default_frame.twig' %}

{% set menus = ['product', 'edit'] %}
{% form_theme optionForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block title %}{{ 'productoption.admin.nav.product.product.option'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% block javascript %}
    <script>
        \$(function () {
            \$('#check-all').click(function () {
                var addall = \$('#check-all').prop('checked');
                if (addall) {
                    \$('input[id\$=_checked]').prop('checked', true);
                } else {
                    \$('input[id\$=_checked]').prop('checked', false);
                }
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
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title align-middle\">{{ 'productoption.admin.common.product_name'|trans }}:{{ Product.name }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                {% if Options|length > 0 %}
                    <form method=\"post\" action=\"{{ url('admin_product_product_option_edit', { id : Product.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('_token') }}\">

                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-6\">
                                        <span class=\"align-middle\"></span>
                                    </div>
                                </div>
                            </div>
                            <div id=\"ex-product_class\" class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <th class=\"pt-2 pb-2 pl-3\">
                                        <input type=\"checkbox\" id=\"check-all\">
                                    </th>
                                    <th class=\"pt-2 pb-2\">{{ 'productoption.admin.product.option.backend_name'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'productoption.admin.product.option.name'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'productoption.admin.product.option.type'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'productoption.admin.product.option.option.disp'|trans }}</th>

                                    </thead>
                                    {% for productOption in optionForm.product_options %}
                                        <tr id=\"ex-product_class\">
                                            <td class=\"align-middle pl-3\">
                                                {{ form_widget(productOption.checked, {'checked' : productOption.vars.value.checked}) }}
                                                {{ form_widget(productOption.option_id, {'value' : productOption.vars.value.Option.id}) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ productOption.vars.value.Option.backend_name }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ productOption.vars.value.Option.name }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ arrType[productOption.vars.value.Option.type] }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {% if productOption.vars.value.Option.description_flg == 1 %}○{% endif %}
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </table>
                            </div>
                        </div>
                        <div class=\"c-conversionArea\">
                            <div class=\"c-conversionArea__container\">
                                <div class=\"row justify-content-between align-items-center\">
                                    <div class=\"col-6\">
                                         <div class=\"c-conversionArea__leftBlockItem\">
                                            <a class=\"c-baseLink\" href=\"{{ url('admin_product_page', { page_no : app.session.get('eccube.admin.product.search.page_no')|default('1') } ) }}\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.product.product_list'|trans }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                            <div class=\"col-auto\">
                                                <button class=\"btn btn-ec-conversion px-5\"
                                                        type=\"submit\">{{ 'productoption.admin.common.save'|trans }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                {% else %}
                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                     <div class=\"c-conversionArea__leftBlockItem\">
                                        <a class=\"c-baseLink\" href=\"{{ url('admin_product_page', { page_no : app.session.get('eccube.admin.product.search.page_no')|default('1') } ) }}\">
                                            <span>{{ 'admin.product.product_list'|trans }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

            </div>
        </div>
    </div>
{% endblock %}

", "@ProductOption/admin/Product/product_option.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Product/product_option.twig");
    }
}
