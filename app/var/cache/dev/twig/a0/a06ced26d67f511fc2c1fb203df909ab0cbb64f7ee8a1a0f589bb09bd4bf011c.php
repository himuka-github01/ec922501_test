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

/* @admin/Content/page.twig */
class __TwigTemplate_131da30ab5542a497b4ef2b594962b2ba45b3ccb995216e58b752292acf61ee4 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/page.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Content/page.twig"));

        // line 13
        $context["menus"] = [0 => "content", 1 => "page"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/page.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "    <script>
        // searchWordの実行
        \$('#search-page').on('input', function() {
            searchWord(\$(this).val(), \$('table.table tbody tr'));
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 28
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-9\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_page_new");
        echo "\">
                            ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "
                        </a>
                    </div>
                    <div class=\"col-3\">
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <div class=\"input-group mb-3\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                    </div>
                                    <input id=\"search-page\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\">
                            <thead>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_route_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_url"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_file_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 pr-3\"></th>
                            </thead>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Pages"]) || array_key_exists("Pages", $context) ? $context["Pages"] : (function () { throw new RuntimeError('Variable "Pages" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Page"]) {
            // line 62
            echo "                                <tr id=\"ex-page-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                                    <td class=\"align-middle pl-3\">
                                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_page_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</a>
                                    </td>
                                    <td class=\"align-middle pl-3 text-break\">
                                        ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "url", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                    </td>
                                    <td class=\"align-middle pl-3 text-break\">
                                        ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 70, $this->source); })()), "routecollection", [], "any", false, false, false, 70), "get", [0 => twig_get_attribute($this->env, $this->source, $context["Page"], "url", [], "any", false, false, false, 70)], "method", false, false, false, 70)) {
                // line 71
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["router"]) || array_key_exists("router", $context) ? $context["router"] : (function () { throw new RuntimeError('Variable "router" does not exist.', 71, $this->source); })()), "routecollection", [], "any", false, false, false, 71), "get", [0 => twig_get_attribute($this->env, $this->source, $context["Page"], "url", [], "any", false, false, false, 71)], "method", false, false, false, 71), "path", [], "any", false, false, false, 71), "html", null, true);
                echo "
                                        ";
            } else {
                // line 73
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "url", [], "any", false, false, false, 73), "html", null, true);
                echo "
                                        ";
            }
            // line 75
            echo "                                    </td>
                                    <td class=\"align-middle pl-3 text-break\">
                                        ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["Page"], "file_name", [], "any", false, false, false, 77)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "file_name", [], "any", false, false, false, 77), "html", null, true);
                echo ".twig";
            }
            // line 78
            echo "                                    </td>
                                    ";
            // line 80
            echo "                                    <td class=\"align-middle";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "layouts", [], "any", false, false, false, 80)) < 2)) ? (" pb-4") : (""));
            echo " text-nowrap\">
                                        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Page"], "layouts", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["Layout"]) {
                // line 82
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Layout"], "device_type", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82) == twig_constant("Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC"))) {
                    // line 83
                    echo "                                                ";
                    $context["icon"] = "fa-desktop";
                    // line 84
                    echo "                                            ";
                } else {
                    // line 85
                    echo "                                                ";
                    $context["icon"] = "fa-mobile fa-2x";
                    // line 86
                    echo "                                            ";
                }
                // line 87
                echo "                                            <div class=\"d-block\">
                                                <i class=\"fa ";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 88, $this->source); })()), "html", null, true);
                echo " mr-2\"></i>
                                                <span>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "name", [], "any", false, false, false, 89), "html", null, true);
                echo "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                                    </td>
                                    <td class=\"align-middle pr-3\">
                                        <div class=\"row justify-content-end\">
                                            ";
            // line 95
            if ((twig_get_attribute($this->env, $this->source, $context["Page"], "edit_type", [], "any", false, false, false, 95) == twig_constant("Eccube\\Entity\\Page::EDIT_TYPE_USER"))) {
                // line 96
                echo "                                                <div class=\"col-auto text-center\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 97), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"modal fade\" id=\"delete_";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                     aria-labelledby=\"delete_";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 102), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title font-weight-bold\">";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-left\">
                                                                <p class=\"text-left\">";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Page"], "name", [], "any", false, false, false, 112)]), "html", null, true);
                echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                <a class=\"btn btn-ec-delete\" href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_content_page_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                echo "\"
                                                                        ";
                // line 117
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
            }
            // line 123
            echo "                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                        </table>
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
        return "@admin/Content/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 127,  348 => 123,  337 => 117,  333 => 116,  329 => 115,  323 => 112,  314 => 106,  307 => 102,  303 => 101,  296 => 97,  291 => 96,  289 => 95,  284 => 92,  275 => 89,  271 => 88,  268 => 87,  265 => 86,  262 => 85,  259 => 84,  256 => 83,  253 => 82,  249 => 81,  244 => 80,  241 => 78,  236 => 77,  232 => 75,  226 => 73,  220 => 71,  218 => 70,  212 => 67,  204 => 64,  198 => 62,  194 => 61,  188 => 58,  184 => 57,  180 => 56,  176 => 55,  172 => 54,  149 => 34,  145 => 33,  138 => 28,  128 => 27,  112 => 19,  102 => 18,  83 => 16,  64 => 15,  53 => 11,  51 => 13,  38 => 11,);
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

{% set menus = ['content', 'page'] %}

{% block title %}{{ 'admin.content.page_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.content.contents_management'|trans }}{% endblock %}

{% block javascript %}
    <script>
        // searchWordの実行
        \$('#search-page').on('input', function() {
            searchWord(\$(this).val(), \$('table.table tbody tr'));
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-9\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_content_page_new') }}\">
                            {{ 'admin.common.create__new'|trans }}
                        </a>
                    </div>
                    <div class=\"col-3\">
                        <div class=\"form-row\">
                            <div class=\"col\">
                                <div class=\"input-group mb-3\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                    </div>
                                    <input id=\"search-page\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\">
                            <thead>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">{{ 'admin.content.page_name'|trans }}</th>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">{{ 'admin.content.page_route_name'|trans }}</th>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">{{ 'admin.content.page_url'|trans }}</th>
                            <th class=\"border-0 pt-2 pb-2 pl-3\">{{ 'admin.content.page_file_name'|trans }}</th>
                            <th class=\"border-0 pt-2 pb-2\">{{ 'admin.content.layout_name'|trans }}</th>
                            <th class=\"border-0 pt-2 pb-2 pr-3\"></th>
                            </thead>
                            {% for Page in Pages %}
                                <tr id=\"ex-page-{{ Page.id }}\">
                                    <td class=\"align-middle pl-3\">
                                        <a href=\"{{ url('admin_content_page_edit', {id : Page.id } ) }}\">{{ Page.name }}</a>
                                    </td>
                                    <td class=\"align-middle pl-3 text-break\">
                                        {{ Page.url }}
                                    </td>
                                    <td class=\"align-middle pl-3 text-break\">
                                        {% if router.routecollection.get(Page.url) %}
                                            {{ router.routecollection.get(Page.url).path }}
                                        {% else %}
                                            {{ Page.url }}
                                        {% endif %}
                                    </td>
                                    <td class=\"align-middle pl-3 text-break\">
                                        {% if Page.file_name %}{{ Page.file_name }}.twig{% endif %}
                                    </td>
                                    {# TODO レイアウトの数にかかわらず高さを揃えたい #}
                                    <td class=\"align-middle{{ Page.layouts|length < 2 ? ' pb-4' }} text-nowrap\">
                                        {% for Layout in Page.layouts %}
                                            {% if Layout.device_type.id == constant('Eccube\\\\Entity\\\\Master\\\\DeviceType::DEVICE_TYPE_PC') %}
                                                {% set icon = 'fa-desktop' %}
                                            {% else %}
                                                {% set icon = 'fa-mobile fa-2x' %}
                                            {% endif %}
                                            <div class=\"d-block\">
                                                <i class=\"fa {{ icon }} mr-2\"></i>
                                                <span>{{ Layout.name }}</span>
                                            </div>
                                        {% endfor %}
                                    </td>
                                    <td class=\"align-middle pr-3\">
                                        <div class=\"row justify-content-end\">
                                            {% if Page.edit_type == constant('Eccube\\\\Entity\\\\Page::EDIT_TYPE_USER') %}
                                                <div class=\"col-auto text-center\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_{{ Page.id }}\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"modal fade\" id=\"delete_{{ Page.id }}\" tabindex=\"-1\" role=\"dialog\"
                                                     aria-labelledby=\"delete_{{ Page.id }}\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title font-weight-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-left\">
                                                                <p class=\"text-left\">{{ 'admin.common.delete_modal__message'|trans({ '%name%' : Page.name }) }}</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                <a class=\"btn btn-ec-delete\" href=\"{{ url('admin_content_page_delete', {'id' : Page.id}) }}\"
                                                                        {{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">{{ 'admin.common.delete'|trans }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "@admin/Content/page.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Content/page.twig");
    }
}
