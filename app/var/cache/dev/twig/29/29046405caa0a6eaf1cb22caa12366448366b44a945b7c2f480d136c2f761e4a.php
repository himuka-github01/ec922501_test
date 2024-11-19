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

/* @admin/Customer/edit.twig */
class __TwigTemplate_68932b8e9a3929679b8bdd978b2e1c84d96c4a38d3281c694823c2c4946f1368 extends \Eccube\Twig\Template
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
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/edit.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer/edit.twig"));

        // line 14
        $context["menus"] = [0 => "customer", 1 => "customer_edit"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer/edit.twig", 12);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_registration"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <form name=\"customer_form\" role=\"form\" id=\"customer_form\" method=\"post\" class=\"h-adr\"
          action=\"";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_new");
        }
        echo "\"
          novalidate>
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "_token", [], "any", false, false, false, 30), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_info"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#ordererInfo\"
                                       aria-expanded=\"false\" aria-controls=\"ordererInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <div class=\"card-body\">
                                ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)) {
            // line 50
            echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.customer_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 63
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71), "name01", [], "any", false, false, false, 71), 'widget');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74), "name02", [], "any", false, false, false, 74), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79), "name01", [], "any", false, false, false, 79), 'errors');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82), "name02", [], "any", false, false, false, 82), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "kana", [], "any", false, false, false, 95), "kana01", [], "any", false, false, false, 95), 'widget');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "kana", [], "any", false, false, false, 98), "kana02", [], "any", false, false, false, 98), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "kana", [], "any", false, false, false, 103), "kana01", [], "any", false, false, false, 103), 'errors');
        echo "
                                            </div>
                                            <div class=\"col\">
                                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "kana", [], "any", false, false, false, 106), "kana02", [], "any", false, false, false, 106), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "company_name", [], "any", false, false, false, 116), 'widget');
        echo "
                                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "company_name", [], "any", false, false, false, 117), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\"><span>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "</span><span
                                                class=\"badge badge-primary ml-1\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto pr-0 align-self-center\"><span>";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span></div>
                                                <div class=\"col-2\">
                                                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "postal_code", [], "any", false, false, false, 129), 'widget');
        echo "

                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "postal_code", [], "any", false, false, false, 135), 'errors');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto\">
                                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "address", [], "any", false, false, false, 142), "pref", [], "any", false, false, false, 142), 'widget');
        echo "
                                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "address", [], "any", false, false, false, 143), "pref", [], "any", false, false, false, 143), 'errors');
        echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "address", [], "any", false, false, false, 148), "addr01", [], "any", false, false, false, 148), 'widget', ["attr" => ["placeholder" => "admin.common.address_sample_01"]]);
        echo "
                                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "address", [], "any", false, false, false, 149), "addr01", [], "any", false, false, false, 149), 'errors');
        echo "
                                        </div>
                                        <div class=\"mb-3\">
                                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "address", [], "any", false, false, false, 152), "addr02", [], "any", false, false, false, 152), 'widget', ["attr" => ["placeholder" => "admin.common.address_sample_02"]]);
        echo "
                                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "address", [], "any", false, false, false, 153), "addr02", [], "any", false, false, false, 153), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "email", [], "any", false, false, false, 163), 'widget');
        echo "
                                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "email", [], "any", false, false, false, 164), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "phone_number", [], "any", false, false, false, 173), 'widget');
        echo "
                                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "phone_number", [], "any", false, false, false, 174), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.password"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "password", [], "any", false, false, false, 183), "first", [], "any", false, false, false, 183), 'widget', ["type" => "password"]);
        echo "
                                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "password", [], "any", false, false, false, 184), "first", [], "any", false, false, false, 184), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.password_for_confirmation"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "password", [], "any", false, false, false, 193), "second", [], "any", false, false, false, 193), 'widget', ["type" => "password"]);
        echo "
                                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "password", [], "any", false, false, false, 194), "second", [], "any", false, false, false, 194), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "sex", [], "any", false, false, false, 202), 'widget', ["label_attr" => ["class" => "radio-inline"]]);
        echo "
                                        ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "sex", [], "any", false, false, false, 203), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.job"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "job", [], "any", false, false, false, 211), 'widget');
        echo "
                                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "job", [], "any", false, false, false, 212), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "birth", [], "any", false, false, false, 220), 'widget');
        echo "
                                        ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "birth", [], "any", false, false, false, 221), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.point"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "point", [], "any", false, false, false, 229), 'widget');
        echo "
                                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "point", [], "any", false, false, false, 230), 'errors');
        echo "
                                    </div>
                                </div>

                                ";
        // line 235
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 235), "eccube_form_options", [], "any", false, false, false, 235), "auto_render", [], "any", false, false, false, 235); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 236
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 236), "eccube_form_options", [], "any", false, false, false, 236), "form_theme", [], "any", false, false, false, 236)) {
                // line 237
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 237), "eccube_form_options", [], "any", false, false, false, 237), "form_theme", [], "any", false, false, false, 237)], true);
                // line 238
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            } else {
                // line 240
                echo "                                        <div class=\"row mb-2\">
                                            <div class=\"col-3\">
                                                <span>";
                // line 242
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 242), "label", [], "any", false, false, false, 242)), "html", null, true);
                echo "</span>
                                            </div>
                                            <div class=\"col\">
                                                ";
                // line 245
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                ";
                // line 246
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            // line 250
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "
                            </div>
                        </div>
                    </div>

                    ";
        // line 256
        if (twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 256, $this->source); })()), "id", [], "any", false, false, false, 256)) {
            // line 257
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.customer_address"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#delivery\" aria-expanded=\"false\"
                                           aria-controls=\"delivery\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"delivery\">
                                ";
            // line 278
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 278, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 278)) > 0)) {
                // line 279
                echo "                                    <div class=\"card-body\">
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 282
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 283
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pr-3\">";
                // line 284
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pr-3\"></th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 288
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 288, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 288));
                foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                    // line 289
                    echo "                                                <tr>
                                                    <td class=\"align-middle\">
                                                        ";
                    // line 291
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, false, 291), "html", null, true);
                    echo "&nbsp;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, false, 291), "html", null, true);
                    echo "
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"";
                    // line 294
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 294, $this->source); })()), "id", [], "any", false, false, false, 294), "did" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 294)]), "html", null, true);
                    echo "\">
                                                            ";
                    // line 295
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, false, 295), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, false, 295), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr01", [], "any", false, false, false, 295), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr02", [], "any", false, false, false, 295), "html", null, true);
                    echo "
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        ";
                    // line 299
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "phone_number", [], "any", false, false, false, 299), "html", null, true);
                    echo "
                                                    </td>
                                                    <td>
                                                        <div class=\"text-center\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    // line 302
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\"
                                                               data-target=\"#discontinuance-";
                    // line 304
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 304), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-close text-secondary\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance-";
                    // line 309
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 309), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">
                                                                            ";
                    // line 314
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                    echo "</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">
                                                                            ";
                    // line 321
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, false, 321)) . twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, false, 321)) . " ") . twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, false, 321)) . twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, false, 321))]), "html", null, true);
                    echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                            ";
                    // line 325
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "
                                                                        </button>
                                                                        <a href=\"";
                    // line 327
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 327, $this->source); })()), "id", [], "any", false, false, false, 327), "did" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 327)]), "html", null, true);
                    echo "\" class=\"btn btn-ec-delete\"";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " data-method=\"delete\" data-confirm=\"false\">
                                                                            ";
                    // line 328
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 337
                echo "                                            </tbody>
                                        </table>

                                        ";
                // line 341
                echo "                                        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 341, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 341)) < twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 341, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, false, 341))) {
                    // line 342
                    echo "                                            <div class=\"d-block text-center\">
                                                <a href=\"";
                    // line 343
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 343, $this->source); })()), "id", [], "any", false, false, false, 343)]), "html", null, true);
                    echo "\"
                                                   class=\"btn btn-ec-regular\">";
                    // line 344
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address__add"), "html", null, true);
                    echo "</a>
                                            </div>
                                        ";
                } else {
                    // line 347
                    echo "                                            <span class=\"ec-errorMessage\">
                                                ";
                    // line 348
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address_count_is_over", ["%eccube_deliv_addr_max%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 348, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, false, 348)]), "html", null, true);
                    echo "
                                            </span>
                                        ";
                }
                // line 351
                echo "                                    </div>
                                ";
            } else {
                // line 353
                echo "                                    <div class=\"card-body\">
                                        <div id=\"address_box\" class=\"data-empty\">
                                            <span>";
                // line 355
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.no_customer_address"), "html", null, true);
                echo "</span>
                                        </div>

                                        <div class=\"d-block text-center\">
                                            <a href=\"";
                // line 359
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 359, $this->source); })()), "id", [], "any", false, false, false, 359)]), "html", null, true);
                echo "\"
                                               class=\"btn btn-ec-regular\">";
                // line 360
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address__add"), "html", null, true);
                echo "</a>
                                        </div>

                                    </div>
                                ";
            }
            // line 365
            echo "                            </div>
                        </div>
                    ";
        }
        // line 368
        echo "
                    ";
        // line 369
        if (twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 369, $this->source); })()), "id", [], "any", false, false, false, 369)) {
            // line 370
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
            // line 375
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.purchase_history"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 377
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.purchase_history"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#orderHistory\" aria-expanded=\"false\"
                                           aria-controls=\"orderHistory\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"orderHistory\">
                                ";
            // line 391
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 391, $this->source); })()), "Orders", [], "any", false, false, false, 391)) > 0)) {
                // line 392
                echo "                                    <div class=\"card-body\">
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2 pl-3\">";
                // line 395
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 396
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2\">";
                // line 397
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
                echo "</th>
                                            <th class=\"align-middle pt-2 pb-2 pr-3\">";
                // line 398
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 401
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 401, $this->source); })()), "Orders", [], "any", false, false, false, 401));
                foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                    // line 402
                    echo "                                                <tr>
                                                    <td class=\"align-middle pl-3\">";
                    // line 403
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, false, 403)), "html", null, true);
                    echo "</td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"";
                    // line 405
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 405)]), "html", null, true);
                    echo "\">
                                                            ";
                    // line 406
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, false, 406), "html", null, true);
                    echo "
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">";
                    // line 409
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Order"], "total", [], "any", false, false, false, 409)), "html", null, true);
                    echo "</td>
                                                    <td class=\"align-middle pr-3\">
                                                        <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
                    // line 411
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, false, 411), "html", null, true);
                    echo "; border-color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatusColor", [], "any", false, false, false, 411), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, false, 411), "html", null, true);
                    echo "</span>
                                                    </td>
                                                </tr>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 415
                echo "                                            </tbody>
                                        </table>
                                    </div>
                                ";
            } else {
                // line 419
                echo "                                    <div class=\"card-body\">
                                        <div id=\"history_box\" class=\"data-empty\">
                                        <span>
                                            ";
                // line 422
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.no_purchase_history"), "html", null, true);
                echo "
                                        </span>
                                        </div>
                                    </div>
                                ";
            }
            // line 427
            echo "                            </div>
                        </div>
                    ";
        }
        // line 430
        echo "
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
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
        // line 451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 451, $this->source); })()), "note", [], "any", false, false, false, 451), 'widget', ["attr" => ["row" => 8]]);
        echo "
                                ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "note", [], "any", false, false, false, 452), 'errors');
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
                            <a class=\"c-baseLink\"
                               href=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 466), "get", [0 => "eccube.admin.customer.search.page_no"], "method", true, true, false, 466)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 466), "get", [0 => "eccube.admin.customer.search.page_no"], "method", false, false, false, 466), "1")) : ("1"))]), "html", null, true);
        echo "?resume=1\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 475
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), "status", [], "any", false, false, false, 475), 'widget');
        echo "
                                ";
        // line 476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 476, $this->source); })()), "status", [], "any", false, false, false, 476), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 480
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
        return "@admin/Customer/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1002 => 480,  995 => 476,  991 => 475,  981 => 468,  976 => 466,  959 => 452,  955 => 451,  938 => 437,  934 => 436,  926 => 430,  921 => 427,  913 => 422,  908 => 419,  902 => 415,  888 => 411,  883 => 409,  877 => 406,  873 => 405,  868 => 403,  865 => 402,  861 => 401,  855 => 398,  851 => 397,  847 => 396,  843 => 395,  838 => 392,  836 => 391,  819 => 377,  814 => 375,  807 => 370,  805 => 369,  802 => 368,  797 => 365,  789 => 360,  785 => 359,  778 => 355,  774 => 353,  770 => 351,  764 => 348,  761 => 347,  755 => 344,  751 => 343,  748 => 342,  745 => 341,  740 => 337,  725 => 328,  719 => 327,  714 => 325,  707 => 321,  697 => 314,  689 => 309,  681 => 304,  676 => 302,  670 => 299,  658 => 295,  654 => 294,  646 => 291,  642 => 289,  638 => 288,  631 => 284,  627 => 283,  623 => 282,  618 => 279,  616 => 278,  599 => 264,  594 => 262,  587 => 257,  585 => 256,  578 => 251,  572 => 250,  565 => 246,  561 => 245,  555 => 242,  551 => 240,  545 => 238,  542 => 237,  539 => 236,  534 => 235,  527 => 230,  523 => 229,  517 => 226,  509 => 221,  505 => 220,  499 => 217,  491 => 212,  487 => 211,  481 => 208,  473 => 203,  469 => 202,  463 => 199,  455 => 194,  451 => 193,  445 => 190,  441 => 189,  433 => 184,  429 => 183,  423 => 180,  419 => 179,  411 => 174,  407 => 173,  401 => 170,  397 => 169,  389 => 164,  385 => 163,  379 => 160,  375 => 159,  366 => 153,  362 => 152,  356 => 149,  352 => 148,  344 => 143,  340 => 142,  330 => 135,  321 => 129,  316 => 127,  308 => 122,  304 => 121,  297 => 117,  293 => 116,  287 => 113,  277 => 106,  271 => 103,  263 => 98,  257 => 95,  249 => 90,  245 => 89,  235 => 82,  229 => 79,  221 => 74,  215 => 71,  207 => 66,  203 => 65,  199 => 63,  192 => 59,  184 => 54,  180 => 53,  175 => 50,  173 => 49,  158 => 37,  148 => 30,  138 => 27,  135 => 26,  125 => 25,  114 => 22,  104 => 21,  85 => 17,  66 => 16,  55 => 12,  53 => 19,  51 => 14,  38 => 12,);
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

{% set menus = ['customer', 'customer_edit'] %}

{% block title %}{{ 'admin.customer.customer_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.customer.customer_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}
    <form name=\"customer_form\" role=\"form\" id=\"customer_form\" method=\"post\" class=\"h-adr\"
          action=\"{%- if Customer.id %}{{ url('admin_customer_edit', { id : Customer.id }) }}{% else %}{{ url('admin_customer_new') }}{% endif -%}\"
          novalidate>
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">{{ 'admin.customer.customer_info'|trans }}</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#ordererInfo\"
                                       aria-expanded=\"false\" aria-controls=\"ordererInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <div class=\"card-body\">
                                {% if Customer.id %}
                                    <div class=\"row mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.customer.customer_id'|trans }}\">
                                                <span>{{ 'admin.customer.customer_id'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>{{ Customer.id }}</p>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.name'|trans }}</span>
                                        <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_widget(form.name.name01) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_widget(form.name.name02) }}
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_errors(form.name.name01) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_errors(form.name.name02) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.kana'|trans }}</span>
                                        <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_widget(form.kana.kana01) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_widget(form.kana.kana02) }}
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_errors(form.kana.kana01) }}
                                            </div>
                                            <div class=\"col\">
                                                {{ form_errors(form.kana.kana02) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.company_name'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.company_name) }}
                                        {{ form_errors(form.company_name) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\"><span>{{ 'admin.common.address'|trans }}</span><span
                                                class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto pr-0 align-self-center\"><span>{{ 'admin.common.postal_symbol'|trans }}</span></div>
                                                <div class=\"col-2\">
                                                    {{ form_widget(form.postal_code) }}

                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    {{ form_errors(form.postal_code) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            <div class=\"row justify-content-start\">
                                                <div class=\"col-auto\">
                                                    {{ form_widget(form.address.pref) }}
                                                    {{ form_errors(form.address.pref) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"mb-3\">
                                            {{ form_widget(form.address.addr01, { attr : { placeholder : 'admin.common.address_sample_01' }} ) }}
                                            {{ form_errors(form.address.addr01) }}
                                        </div>
                                        <div class=\"mb-3\">
                                            {{ form_widget(form.address.addr02, { attr : { placeholder : 'admin.common.address_sample_02' }}) }}
                                            {{ form_errors(form.address.addr02) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.mail_address'|trans }}</span>
                                        <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.email) }}
                                        {{ form_errors(form.email) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.phone_number'|trans }}</span>
                                        <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.phone_number) }}
                                        {{ form_errors(form.phone_number) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.password'|trans }}</span>
                                        <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.password.first, { type : 'password'}) }}
                                        {{ form_errors(form.password.first) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.password_for_confirmation'|trans }}</span>
                                        <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.password.second, { type : 'password'}) }}
                                        {{ form_errors(form.password.second) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.gender'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.sex,  {'label_attr': {'class': 'radio-inline'}}) }}
                                        {{ form_errors(form.sex) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.job'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.job) }}
                                        {{ form_errors(form.job) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.birth_day'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.birth) }}
                                        {{ form_errors(form.birth) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.common.point'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.point) }}
                                        {{ form_errors(form.point) }}
                                    </div>
                                </div>

                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row mb-2\">
                                            <div class=\"col-3\">
                                                <span>{{ f.vars.label|trans }}</span>
                                            </div>
                                            <div class=\"col\">
                                                {{ form_widget(f) }}
                                                {{ form_errors(f) }}
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                            </div>
                        </div>
                    </div>

                    {% if Customer.id %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"{{ 'tooltip.customer.customer_address'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.customer.customer_address'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#delivery\" aria-expanded=\"false\"
                                           aria-controls=\"delivery\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"delivery\">
                                {% if Customer.CustomerAddresses|length > 0 %}
                                    <div class=\"card-body\">
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2\">{{ 'admin.common.name'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2\">{{ 'admin.common.address'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2 pr-3\">{{ 'admin.common.phone_number'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2 pr-3\"></th>
                                            </thead>
                                            <tbody>
                                            {% for CustomerAddress in Customer.CustomerAddresses %}
                                                <tr>
                                                    <td class=\"align-middle\">
                                                        {{ CustomerAddress.name01 }}&nbsp;{{ CustomerAddress.name02 }}
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"{{ url('admin_customer_delivery_edit', { 'id': Customer.id, 'did': CustomerAddress.id }) }}\">
                                                            {{ 'admin.common.postal_symbol'|trans }}{{ CustomerAddress.postal_code }} {{ CustomerAddress.Pref }}{{ CustomerAddress.addr01 }}{{ CustomerAddress.addr02 }}
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">
                                                        {{ CustomerAddress.phone_number }}
                                                    </td>
                                                    <td>
                                                        <div class=\"text-center\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\"
                                                               data-target=\"#discontinuance-{{ CustomerAddress.id }}\">
                                                                <i class=\"fa fa-close text-secondary\"
                                                                   aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance-{{ CustomerAddress.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
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
                                                                            {{ 'admin.common.delete_modal__message'|trans({ '%name%' : 'admin.common.postal_symbol'|trans ~ CustomerAddress.postal_code ~ CustomerAddress.Pref ~ ' ' ~ CustomerAddress.name01 ~ CustomerAddress.name02 }) }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                            {{ 'admin.common.cancel'|trans }}
                                                                        </button>
                                                                        <a href=\"{{ url('admin_customer_delivery_delete', {'id' : Customer.id, 'did':  CustomerAddress.id}) }}\" class=\"btn btn-ec-delete\"{{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                                                                            {{ 'admin.common.delete'|trans }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>

                                        {# TODO: 新規追加ボタンと文言のデザインを整える #}
                                        {% if Customer.CustomerAddresses|length < eccube_config.eccube_deliv_addr_max %}
                                            <div class=\"d-block text-center\">
                                                <a href=\"{{ url('admin_customer_delivery_new', { id: Customer.id }) }}\"
                                                   class=\"btn btn-ec-regular\">{{ 'admin.customer.customer_address__add'|trans }}</a>
                                            </div>
                                        {% else %}
                                            <span class=\"ec-errorMessage\">
                                                {{ 'admin.customer.customer_address_count_is_over'|trans({\"%eccube_deliv_addr_max%\":eccube_config.eccube_deliv_addr_max}) }}
                                            </span>
                                        {% endif %}
                                    </div>
                                {% else %}
                                    <div class=\"card-body\">
                                        <div id=\"address_box\" class=\"data-empty\">
                                            <span>{{ 'admin.customer.no_customer_address'|trans }}</span>
                                        </div>

                                        <div class=\"d-block text-center\">
                                            <a href=\"{{ url('admin_customer_delivery_new', { id: Customer.id }) }}\"
                                               class=\"btn btn-ec-regular\">{{ 'admin.customer.customer_address__add'|trans }}</a>
                                        </div>

                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    {% if Customer.id %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"{{ 'tooltip.customer.purchase_history'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.customer.purchase_history'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#orderHistory\" aria-expanded=\"false\"
                                           aria-controls=\"orderHistory\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"orderHistory\">
                                {% if Customer.Orders|length > 0 %}
                                    <div class=\"card-body\">
                                        <table class=\"table table-striped table-sm\">
                                            <thead class=\"table-active\">
                                            <th class=\"align-middle pt-2 pb-2 pl-3\">{{ 'admin.order.order_date'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2\">{{ 'admin.order.order_no'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2\">{{ 'admin.order.purchase_price'|trans }}</th>
                                            <th class=\"align-middle pt-2 pb-2 pr-3\">{{ 'admin.order.order_status'|trans }}</th>
                                            </thead>
                                            <tbody>
                                            {% for Order in Customer.Orders %}
                                                <tr>
                                                    <td class=\"align-middle pl-3\">{{ Order.order_date|date_min }}</td>
                                                    <td class=\"align-middle\">
                                                        <a href=\"{{ url('admin_order_edit', { 'id' : Order.id }) }}\">
                                                            {{ Order.order_no }}
                                                        </a>
                                                    </td>
                                                    <td class=\"align-middle\">{{ Order.total|price }}</td>
                                                    <td class=\"align-middle pr-3\">
                                                        <span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: {{ Order.OrderStatusColor }}; border-color: {{ Order.OrderStatusColor }}\">{{ Order.OrderStatus }}</span>
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                {% else %}
                                    <div class=\"card-body\">
                                        <div id=\"history_box\" class=\"data-empty\">
                                        <span>
                                            {{ 'admin.customer.no_purchase_history'|trans }}
                                        </span>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endif %}

                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"{{ 'tooltip.customer.shop_memo'|trans }}\">
                                        <span class=\"card-title\">{{ 'admin.common.shop_memo'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
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
                                {{ form_widget(form.note, { 'attr': { 'row': 8 }}) }}
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
                            <a class=\"c-baseLink\"
                               href=\"{{ url('admin_customer_page', { page_no : app.session.get('eccube.admin.customer.search.page_no')|default('1') } ) }}?resume=1\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.customer.customer_list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                {{ form_widget(form.status) }}
                                {{ form_errors(form.status) }}
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Customer/edit.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Customer/edit.twig");
    }
}
