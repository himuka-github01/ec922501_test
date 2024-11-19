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

/* @ProductOption/default/Product/option.twig */
class __TwigTemplate_385388453bdd9bd50429d29d9172b3a62a40045f6475002fe5d8ad718fcd37da extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/default/Product/option.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/default/Product/option.twig"));

        // line 10
        echo "
";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 11, $this->source); })()), "ProductOptions", [], "any", false, false, false, 11)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 12, $this->source); })()), "ProductOptions", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                // line 13
                echo "            ";
                $context["value"] = ("productoption" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13));
                // line 14
                echo "            ";
                // line 15
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15) == twig_constant("Plugin\\ProductOption\\Entity\\Option::RADIO_TYPE"))) {
                    // line 16
                    echo "                <div class=\"ec-radio\" style=\"margin-top: 10px;\">
                    <div>
                        <label for=\"productoption";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), [], "array", false, false, false, 18), "vars", [], "any", false, false, false, 18), "label", [], "any", false, false, false, 18), "html", null, true);
                    echo "</label>";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 18, $this->source); })()), [], "array", false, false, false, 18), "vars", [], "any", false, false, false, 18), "required", [], "any", false, false, false, 18)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 19
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 19), "description_flg", [], "any", false, false, false, 19) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 20
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                        ";
                    }
                    // line 22
                    echo "                    </div>
                    ";
                    // line 23
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23), 'widget');
                    echo "
                </div>
            ";
                    // line 26
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 26), "type", [], "any", false, false, false, 26) == twig_constant("Plugin\\ProductOption\\Entity\\Option::CHECKBOX_TYPE"))) {
                    // line 27
                    echo "                <div class=\"ec-checkbox\" style=\"margin-top: 10px;\">
                    <div>
                        <label for=\"productoption";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29), "vars", [], "any", false, false, false, 29), "label", [], "any", false, false, false, 29), "html", null, true);
                    echo "</label>";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 29), "require_min", [], "any", false, false, false, 29) > 0)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 30
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 30), "description_flg", [], "any", false, false, false, 30) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 31
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                        ";
                    }
                    // line 33
                    echo "                    </div>
                    ";
                    // line 34
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), 'widget');
                    echo "
                </div>
            ";
                    // line 37
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 37), "type", [], "any", false, false, false, 37) == twig_constant("Plugin\\ProductOption\\Entity\\Option::SELECT_TYPE"))) {
                    // line 38
                    echo "                <div class=\"ec-select\" style=\"margin-top: 10px;\">
                    <div>
                        ";
                    // line 40
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 40, $this->source); })()), [], "array", false, false, false, 40), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 40, $this->source); })()), [], "array", false, false, false, 40), "vars", [], "any", false, false, false, 40), "required", [], "any", false, false, false, 40)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 41
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 41), "description_flg", [], "any", false, false, false, 41) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 42
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 44
                    echo "                    </div>
                    <div ";
                    // line 45
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 45, $this->source); })()), [], "array", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45))) {
                        echo "class=\"has-error\"";
                    }
                    echo ">
                        ";
                    // line 46
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 46, $this->source); })()), [], "array", false, false, false, 46), 'widget');
                    echo "
                    ";
                    // line 47
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 47, $this->source); })()), [], "array", false, false, false, 47), 'errors');
                    echo "
                    </div>
                </div>
            ";
                    // line 51
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51) == twig_constant("Plugin\\ProductOption\\Entity\\Option::NUMBER_TYPE"))) {
                    // line 52
                    echo "                <div class=\"ec-numberInput\">
                    <div>
                    ";
                    // line 54
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 54, $this->source); })()), [], "array", false, false, false, 54), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 54, $this->source); })()), [], "array", false, false, false, 54), "vars", [], "any", false, false, false, 54), "required", [], "any", false, false, false, 54)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 55
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 55), "description_flg", [], "any", false, false, false, 55) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 56
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 58
                    echo "                    </div>
                    <div ";
                    // line 59
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 59, $this->source); })()), [], "array", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59))) {
                        echo "class=\"has-error\"";
                    }
                    echo ">
                        ";
                    // line 60
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 60, $this->source); })()), [], "array", false, false, false, 60), 'widget');
                    echo "
                    ";
                    // line 61
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()), [], "array", false, false, false, 61), 'errors');
                    echo "
                    </div>
                </div>
            ";
                    // line 65
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 65), "type", [], "any", false, false, false, 65) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DATE_TYPE"))) {
                    // line 66
                    echo "                <div class=\"ec-input\">
                    <div>
                    ";
                    // line 68
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })()), [], "array", false, false, false, 68), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 68, $this->source); })()), [], "array", false, false, false, 68), "vars", [], "any", false, false, false, 68), "required", [], "any", false, false, false, 68)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 69
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 69), "description_flg", [], "any", false, false, false, 69) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 70
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 72
                    echo "                    </div>
                    <div ";
                    // line 73
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 73, $this->source); })()), [], "array", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73))) {
                        echo "class=\"has-error\"";
                    }
                    echo " style=\"position: relative\">
                        ";
                    // line 74
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 74, $this->source); })()), [], "array", false, false, false, 74), 'widget', ["attr" => ["data-target" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 74, $this->source); })()), [], "array", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74))]]);
                    echo "
                    ";
                    // line 75
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 75, $this->source); })()), [], "array", false, false, false, 75), 'errors');
                    echo "
                    </div>
                </div>
            ";
                    // line 79
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 79), "type", [], "any", false, false, false, 79) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXT_TYPE"))) {
                    // line 80
                    echo "                <div class=\"ec-input\" style=\"margin-top: 10px;\">
                    <div>
                    ";
                    // line 82
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 82, $this->source); })()), [], "array", false, false, false, 82), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 82, $this->source); })()), [], "array", false, false, false, 82), "vars", [], "any", false, false, false, 82), "required", [], "any", false, false, false, 82)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 83
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 83), "description_flg", [], "any", false, false, false, 83) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 84
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 86
                    echo "                    </div>
                    <div ";
                    // line 87
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 87, $this->source); })()), [], "array", false, false, false, 87), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87))) {
                        echo "class=\"has-error\"";
                    }
                    echo ">
                        ";
                    // line 88
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 88, $this->source); })()), [], "array", false, false, false, 88), 'widget');
                    echo "
                    ";
                    // line 89
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 89, $this->source); })()), [], "array", false, false, false, 89), 'errors');
                    echo "
                    </div>
                </div>
            ";
                    // line 93
                    echo "            ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 93), "type", [], "any", false, false, false, 93) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXTAREA_TYPE"))) {
                    // line 94
                    echo "                <div class=\"ec-input\"　style=\"margin-top: 10px;\">
                    <div>
                        ";
                    // line 96
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 96, $this->source); })()), [], "array", false, false, false, 96), 'label');
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 96, $this->source); })()), [], "array", false, false, false, 96), "vars", [], "any", false, false, false, 96), "required", [], "any", false, false, false, 96)) {
                        echo "<span class=\"ec-required\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.required"), "html", null, true);
                        echo "</span>";
                    }
                    // line 97
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 97), "description_flg", [], "any", false, false, false, 97) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DISP_ON"))) {
                        // line 98
                        echo "                        &nbsp;<a href=\"?\" id=\"option_description_link_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98), "html", null, true);
                        echo "\"><span class=\"ec-link ec-font-size-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.title"), "html", null, true);
                        echo "</span></a>
                    ";
                    }
                    // line 100
                    echo "                    </div>
                    <div ";
                    // line 101
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 101, $this->source); })()), [], "array", false, false, false, 101), "vars", [], "any", false, false, false, 101), "errors", [], "any", false, false, false, 101))) {
                        echo "class=\"has-error\"";
                    }
                    echo ">
                        ";
                    // line 102
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 102, $this->source); })()), [], "array", false, false, false, 102), 'widget');
                    echo "
                    ";
                    // line 103
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 103, $this->source); })()), [], "array", false, false, false, 103), 'errors');
                    echo "
                    </div>
                </div>
            ";
                }
                // line 107
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/default/Product/option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 107,  372 => 103,  368 => 102,  362 => 101,  359 => 100,  347 => 98,  344 => 97,  337 => 96,  333 => 94,  330 => 93,  324 => 89,  320 => 88,  314 => 87,  311 => 86,  299 => 84,  296 => 83,  289 => 82,  285 => 80,  282 => 79,  276 => 75,  272 => 74,  266 => 73,  263 => 72,  251 => 70,  248 => 69,  241 => 68,  237 => 66,  234 => 65,  228 => 61,  224 => 60,  218 => 59,  215 => 58,  203 => 56,  200 => 55,  193 => 54,  189 => 52,  186 => 51,  180 => 47,  176 => 46,  170 => 45,  167 => 44,  155 => 42,  152 => 41,  145 => 40,  141 => 38,  138 => 37,  133 => 34,  130 => 33,  118 => 31,  115 => 30,  105 => 29,  101 => 27,  98 => 26,  93 => 23,  90 => 22,  78 => 20,  75 => 19,  65 => 18,  61 => 16,  58 => 15,  56 => 14,  53 => 13,  48 => 12,  46 => 11,  43 => 10,);
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

{% if Product.ProductOptions %}
        {% for ProductOption in Product.ProductOptions %}
            {% set value = 'productoption' ~ ProductOption.Option.id %}
            {# ラジオボタン #}
            {% if ProductOption.Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::RADIO_TYPE') %}
                <div class=\"ec-radio\" style=\"margin-top: 10px;\">
                    <div>
                        <label for=\"productoption{{ ProductOption.Option.id }}\">{{ form[value].vars.label }}</label>{% if form[value].vars.required %}<span class=\"ec-required\">{{'common.required'|trans}}</span>{% endif %}
                        {% if ProductOption.Option.description_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DISP_ON') %}
                        &nbsp;<a href=\"?\" id=\"option_description_link_{{ Product.id }}_{{ ProductOption.Option.id }}\" data=\"{{ Product.id }}\"><span class=\"ec-link ec-font-size-2\">{{'productoption.product.option.description.title'|trans}}</span></a>
                        {% endif %}
                    </div>
                    {{ form_widget(form[value]) }}
                </div>
            {# チェックボックス #}
            {% elseif ProductOption.Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::CHECKBOX_TYPE')%}
                <div class=\"ec-checkbox\" style=\"margin-top: 10px;\">
                    <div>
                        <label for=\"productoption{{ ProductOption.Option.id }}\">{{ form[value].vars.label }}</label>{% if ProductOption.Option.require_min > 0 %}<span class=\"ec-required\">{{'common.required'|trans}}</span>{% endif %}
                        {% if ProductOption.Option.description_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DISP_ON') %}
                        &nbsp;<a href=\"?\" id=\"option_description_link_{{ Product.id }}_{{ ProductOption.Option.id }}\" data=\"{{ Product.id }}\"><span class=\"ec-link ec-font-size-2\">{{'productoption.product.option.description.title'|trans}}</span></a>
                        {% endif %}
                    </div>
                    {{ form_widget(form[value]) }}
                </div>
            {# プルダウンタイプ #}
            {% elseif  ProductOption.Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::SELECT_TYPE')%}
                <div class=\"ec-select\" style=\"margin-top: 10px;\">
                    <div>
                        {{ form_label(form[value]) }}{% if form[value].vars.required %}<span class=\"ec-required\">{{'common.required'|trans}}</span>{% endif %}
                    {% if ProductOption.Option.description_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DISP_ON') %}
                        &nbsp;<a href=\"?\" id=\"option_description_link_{{ Product.id }}_{{ ProductOption.Option.id }}\" data=\"{{ Product.id }}\"><span class=\"ec-link ec-font-size-2\">{{'productoption.product.option.description.title'|trans}}</span></a>
                    {% endif %}
                    </div>
                    <div {% if form[value].vars.errors is not empty %}class=\"has-error\"{% endif %}>
                        {{ form_widget(form[value]) }}
                    {{ form_errors(form[value]) }}
                    </div>
                </div>
            {# 数値入力タイプ #}
            {% elseif ProductOption.Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::NUMBER_TYPE') %}
                <div class=\"ec-numberInput\">
                    <div>
                    {{ form_label(form[value]) }}{% if form[value].vars.required %}<span class=\"ec-required\">{{'common.required'|trans}}</span>{% endif %}
                    {% if ProductOption.Option.description_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DISP_ON') %}
                        &nbsp;<a href=\"?\" id=\"option_description_link_{{ Product.id }}_{{ ProductOption.Option.id }}\" data=\"{{ Product.id }}\"><span class=\"ec-link ec-font-size-2\">{{'productoption.product.option.description.title'|trans}}</span></a>
                    {% endif %}
                    </div>
                    <div {% if form[value].vars.errors is not empty %}class=\"has-error\"{% endif %}>
                        {{ form_widget(form[value]) }}
                    {{ form_errors(form[value]) }}
                    </div>
                </div>
            {# 日付タイプ #}
            {% elseif ProductOption.Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DATE_TYPE') %}
                <div class=\"ec-input\">
                    <div>
                    {{ form_label(form[value]) }}{% if form[value].vars.required %}<span class=\"ec-required\">{{'common.required'|trans}}</span>{% endif %}
                    {% if ProductOption.Option.description_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DISP_ON') %}
                        &nbsp;<a href=\"?\" id=\"option_description_link_{{ Product.id }}_{{ ProductOption.Option.id }}\" data=\"{{ Product.id }}\"><span class=\"ec-link ec-font-size-2\">{{'productoption.product.option.description.title'|trans}}</span></a>
                    {% endif %}
                    </div>
                    <div {% if form[value].vars.errors is not empty %}class=\"has-error\"{% endif %} style=\"position: relative\">
                        {{ form_widget(form[value], { attr : { 'data-target' : '#'~form[value].vars.id }}) }}
                    {{ form_errors(form[value]) }}
                    </div>
                </div>
            {# テキストボックスタイプ #}
            {% elseif ProductOption.Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::TEXT_TYPE') %}
                <div class=\"ec-input\" style=\"margin-top: 10px;\">
                    <div>
                    {{ form_label(form[value]) }}{% if form[value].vars.required %}<span class=\"ec-required\">{{'common.required'|trans}}</span>{% endif %}
                    {% if ProductOption.Option.description_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DISP_ON') %}
                        &nbsp;<a href=\"?\" id=\"option_description_link_{{ Product.id }}_{{ ProductOption.Option.id }}\" data=\"{{ Product.id }}\"><span class=\"ec-link ec-font-size-2\">{{'productoption.product.option.description.title'|trans}}</span></a>
                    {% endif %}
                    </div>
                    <div {% if form[value].vars.errors is not empty %}class=\"has-error\"{% endif %}>
                        {{ form_widget(form[value]) }}
                    {{ form_errors(form[value]) }}
                    </div>
                </div>
            {# テキストエリアタイプ #}
            {% elseif ProductOption.Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::TEXTAREA_TYPE')%}
                <div class=\"ec-input\"　style=\"margin-top: 10px;\">
                    <div>
                        {{ form_label(form[value]) }}{% if form[value].vars.required %}<span class=\"ec-required\">{{'common.required'|trans}}</span>{% endif %}
                    {% if ProductOption.Option.description_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DISP_ON') %}
                        &nbsp;<a href=\"?\" id=\"option_description_link_{{ Product.id }}_{{ ProductOption.Option.id }}\" data=\"{{ Product.id }}\"><span class=\"ec-link ec-font-size-2\">{{'productoption.product.option.description.title'|trans}}</span></a>
                    {% endif %}
                    </div>
                    <div {% if form[value].vars.errors is not empty %}class=\"has-error\"{% endif %}>
                        {{ form_widget(form[value]) }}
                    {{ form_errors(form[value]) }}
                    </div>
                </div>
            {% endif %}
        {% endfor %}
{% endif %}
", "@ProductOption/default/Product/option.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/default/Product/option.twig");
    }
}
