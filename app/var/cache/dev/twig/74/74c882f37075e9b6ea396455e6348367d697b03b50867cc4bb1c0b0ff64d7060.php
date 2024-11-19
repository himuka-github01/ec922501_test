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

/* @ProductOption/default/Product/option_description.twig */
class __TwigTemplate_1900d432e9040caf7953edcc9ef9c18dea766ee6d24da0ee7f1e275ab7002854 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/default/Product/option_description.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/default/Product/option_description.twig"));

        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ProductOptions"]) || array_key_exists("ProductOptions", $context) ? $context["ProductOptions"] : (function () { throw new RuntimeError('Variable "ProductOptions" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
            // line 12
            echo "    ";
            $context["Option"] = twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 12);
            // line 13
            echo "    ";
            $context["Product"] = twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Product", [], "any", false, false, false, 13);
            // line 14
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 14, $this->source); })()), "description_flg", [], "any", false, false, false, 14) == 1)) {
                // line 15
                echo "        <div id=\"option_description_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
                echo "\" class=\"option_description\">
            <div class=\"modal-header\">
                <div class=\"plainmodal-close\">&#215;</div>
                <h4 class=\"modal-title\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</h4>
                <p>";
                // line 19
                echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19));
                echo "</p>
            </div>


            ";
                // line 23
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 23, $this->source); })()), "OptionCategories", [], "any", false, false, false, 23)) > 0)) {
                    // line 24
                    echo "                ";
                    // line 25
                    echo "                ";
                    if (((((twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXT_TYPE")) || (twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXTAREA_TYPE"))) || (twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25) == twig_constant("Plugin\\ProductOption\\Entity\\Option::NUMBER_TYPE"))) || (twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DATE_TYPE")))) {
                        // line 26
                        echo "                    <div class=\"modal-body\">
                        ";
                        // line 27
                        $context["optionCategory"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 27, $this->source); })()), "OptionCategories", [], "any", false, false, false, 27), 0, [], "array", false, false, false, 27);
                        // line 28
                        echo "                        <div>
                            ";
                        // line 29
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["optionCategory"]) || array_key_exists("optionCategory", $context) ? $context["optionCategory"] : (function () { throw new RuntimeError('Variable "optionCategory" does not exist.', 29, $this->source); })()), "OptionImages", [], "any", false, false, false, 29));
                        foreach ($context['_seq'] as $context["_key"] => $context["OptionImage"]) {
                            // line 30
                            echo "                                <img src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["OptionImage"], "save_image"), "html", null, true);
                            echo "\"/>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OptionImage'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                            ";
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["optionCategory"]) || array_key_exists("optionCategory", $context) ? $context["optionCategory"] : (function () { throw new RuntimeError('Variable "optionCategory" does not exist.', 32, $this->source); })()), "value", [], "any", false, false, false, 32)) > 0)) {
                            // line 33
                            echo "                                ";
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["optionCategory"]) || array_key_exists("optionCategory", $context) ? $context["optionCategory"] : (function () { throw new RuntimeError('Variable "optionCategory" does not exist.', 33, $this->source); })()), "value", [], "any", false, false, false, 33) > 0)) {
                                // line 34
                                echo "                                    <p class=\"plus\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.price"), "html", null, true);
                                echo ":";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Plugin\ProductOption\Twig\Extension\PriceIncTaxExtension']->priceIncTax(twig_get_attribute($this->env, $this->source, (isset($context["optionCategory"]) || array_key_exists("optionCategory", $context) ? $context["optionCategory"] : (function () { throw new RuntimeError('Variable "optionCategory" does not exist.', 34, $this->source); })()), "value", [], "any", false, false, false, 34), (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 34, $this->source); })()))), "html", null, true);
                                echo " <span class=\"small\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.inc_tax"), "html", null, true);
                                echo "</span></p>
                                ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 35
(isset($context["optionCategory"]) || array_key_exists("optionCategory", $context) ? $context["optionCategory"] : (function () { throw new RuntimeError('Variable "optionCategory" does not exist.', 35, $this->source); })()), "value", [], "any", false, false, false, 35) < 0)) {
                                // line 36
                                echo "                                    <p class=\"minus\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.price"), "html", null, true);
                                echo ":";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Plugin\ProductOption\Twig\Extension\PriceIncTaxExtension']->priceIncTax(twig_get_attribute($this->env, $this->source, (isset($context["optionCategory"]) || array_key_exists("optionCategory", $context) ? $context["optionCategory"] : (function () { throw new RuntimeError('Variable "optionCategory" does not exist.', 36, $this->source); })()), "value", [], "any", false, false, false, 36), (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 36, $this->source); })()))), "html", null, true);
                                echo " <span class=\"small\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.inc_tax"), "html", null, true);
                                echo "</span></p>
                                ";
                            }
                            // line 38
                            echo "                            ";
                        }
                        // line 39
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["optionCategory"]) || array_key_exists("optionCategory", $context) ? $context["optionCategory"] : (function () { throw new RuntimeError('Variable "optionCategory" does not exist.', 39, $this->source); })()), "delivery_free_flg", [], "any", false, false, false, 39) == twig_constant("Plugin\\ProductOption\\Entity\\OptionCategory::ON"))) {
                            // line 40
                            echo "                                <p>";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.common.delivery_free"), "html", null, true);
                            echo "</p>
                            ";
                        }
                        // line 42
                        echo "                        </div>
                    </div>
                ";
                        // line 45
                        echo "                ";
                    } else {
                        // line 46
                        echo "                    <div class=\"modal-body\">
                        ";
                        // line 47
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 47, $this->source); })()), "OptionCategories", [], "any", false, false, false, 47));
                        foreach ($context['_seq'] as $context["_key"] => $context["optionCategory"]) {
                            // line 48
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["optionCategory"], "disable_flg", [], "any", false, false, false, 48) != twig_constant("Plugin\\ProductOption\\Entity\\OptionCategory::ON"))) {
                                // line 49
                                echo "                                <div>
                                    <h3>";
                                // line 50
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionCategory"], "name", [], "any", false, false, false, 50), "html", null, true);
                                echo "</h3>
                                    ";
                                // line 51
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["optionCategory"], "OptionImages", [], "any", false, false, false, 51));
                                foreach ($context['_seq'] as $context["_key"] => $context["OptionImage"]) {
                                    // line 52
                                    echo "                                        <img src=\"";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["OptionImage"], "save_image"), "html", null, true);
                                    echo "\"/>
                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OptionImage'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 54
                                echo "                                    <p>";
                                echo nl2br(twig_get_attribute($this->env, $this->source, $context["optionCategory"], "description", [], "any", false, false, false, 54));
                                echo "</p>
                                    ";
                                // line 55
                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionCategory"], "value", [], "any", false, false, false, 55)) > 0)) {
                                    // line 56
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["optionCategory"], "value", [], "any", false, false, false, 56) > 0)) {
                                        // line 57
                                        echo "                                            <p class=\"plus\">";
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.price"), "html", null, true);
                                        echo ":";
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Plugin\ProductOption\Twig\Extension\PriceIncTaxExtension']->priceIncTax(twig_get_attribute($this->env, $this->source, $context["optionCategory"], "value", [], "any", false, false, false, 57), (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 57, $this->source); })()))), "html", null, true);
                                        echo " <span class=\"small\">";
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.inc_tax"), "html", null, true);
                                        echo "</span></p>
                                        ";
                                    } elseif ((twig_get_attribute($this->env, $this->source,                                     // line 58
$context["optionCategory"], "value", [], "any", false, false, false, 58) < 0)) {
                                        // line 59
                                        echo "                                            <p class=\"minus\">";
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.price"), "html", null, true);
                                        echo ":";
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Plugin\ProductOption\Twig\Extension\PriceIncTaxExtension']->priceIncTax(twig_get_attribute($this->env, $this->source, $context["optionCategory"], "value", [], "any", false, false, false, 59), (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 59, $this->source); })()))), "html", null, true);
                                        echo " <span class=\"small\">";
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.inc_tax"), "html", null, true);
                                        echo "</span></p>
                                        ";
                                    }
                                    // line 61
                                    echo "                                    ";
                                }
                                // line 62
                                echo "                                    ";
                                if ((twig_get_attribute($this->env, $this->source, $context["optionCategory"], "delivery_free_flg", [], "any", false, false, false, 62) == twig_constant("Plugin\\ProductOption\\Entity\\OptionCategory::ON"))) {
                                    // line 63
                                    echo "                                        <p>";
                                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.common.delivery_free"), "html", null, true);
                                    echo "</p>
                                    ";
                                }
                                // line 65
                                echo "                                    <button class=\"btn-info\" id=\"desc_btn_";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
                                echo "_";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionCategory"], "id", [], "any", false, false, false, 65), "html", null, true);
                                echo "\" >";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.select"), "html", null, true);
                                echo "</button>
                                </div>
                            ";
                            }
                            // line 68
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionCategory'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "                    </div>
                ";
                    }
                    // line 71
                    echo "            ";
                }
                // line 72
                echo "        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/default/Product/option_description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 72,  247 => 71,  243 => 69,  237 => 68,  226 => 65,  220 => 63,  217 => 62,  214 => 61,  204 => 59,  202 => 58,  193 => 57,  190 => 56,  188 => 55,  183 => 54,  174 => 52,  170 => 51,  166 => 50,  163 => 49,  160 => 48,  156 => 47,  153 => 46,  150 => 45,  146 => 42,  140 => 40,  137 => 39,  134 => 38,  124 => 36,  122 => 35,  113 => 34,  110 => 33,  107 => 32,  98 => 30,  94 => 29,  91 => 28,  89 => 27,  86 => 26,  83 => 25,  81 => 24,  79 => 23,  72 => 19,  68 => 18,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  46 => 11,  43 => 10,);
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

{% for ProductOption in ProductOptions %}
    {% set Option = ProductOption.Option %}
    {% set Product = ProductOption.Product %}
    {% if Option.description_flg == 1 %}
        <div id=\"option_description_{{ Product.id }}_{{ Option.id }}\" class=\"option_description\">
            <div class=\"modal-header\">
                <div class=\"plainmodal-close\">&#215;</div>
                <h4 class=\"modal-title\">{{ Option.name }}</h4>
                <p>{{ Option.description|raw|nl2br }}</p>
            </div>


            {% if Option.OptionCategories|length > 0%}
                {# テキストボックス、テキストエリア、日付、数値入力タイプの場合 #}
                {% if Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::TEXT_TYPE') or Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::TEXTAREA_TYPE') or Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::NUMBER_TYPE') or Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DATE_TYPE') %}
                    <div class=\"modal-body\">
                        {% set optionCategory = Option.OptionCategories[0] %}
                        <div>
                            {% for OptionImage in optionCategory.OptionImages %}
                                <img src=\"{{ asset(OptionImage, 'save_image') }}\"/>
                            {% endfor %}
                            {% if optionCategory.value|length > 0  %}
                                {% if optionCategory.value > 0  %}
                                    <p class=\"plus\">{{'productoption.product.option.description.price'|trans}}:{{ priceIncTax(optionCategory.value, Product)|price }} <span class=\"small\">{{'productoption.product.option.description.inc_tax'|trans}}</span></p>
                                {% elseif optionCategory.value < 0 %}
                                    <p class=\"minus\">{{'productoption.product.option.description.price'|trans}}:{{ priceIncTax(optionCategory.value, Product)|price }} <span class=\"small\">{{'productoption.product.option.description.inc_tax'|trans}}</span></p>
                                {% endif %}
                            {% endif %}
                            {% if optionCategory.delivery_free_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\OptionCategory::ON') %}
                                <p>{{'productoption.common.delivery_free'|trans}}</p>
                            {% endif %}
                        </div>
                    </div>
                {# プルダウン、ラジオボタン、チェックボックスタイプの場合 #}
                {% else %}
                    <div class=\"modal-body\">
                        {% for optionCategory in Option.OptionCategories %}
                            {% if optionCategory.disable_flg != constant('Plugin\\\\ProductOption\\\\Entity\\\\OptionCategory::ON') %}
                                <div>
                                    <h3>{{ optionCategory.name }}</h3>
                                    {% for OptionImage in optionCategory.OptionImages %}
                                        <img src=\"{{ asset(OptionImage, 'save_image') }}\"/>
                                    {% endfor %}
                                    <p>{{ optionCategory.description|raw|nl2br }}</p>
                                    {% if optionCategory.value|length > 0  %}
                                        {% if optionCategory.value > 0  %}
                                            <p class=\"plus\">{{'productoption.product.option.description.price'|trans}}:{{ priceIncTax(optionCategory.value, Product)|price }} <span class=\"small\">{{'productoption.product.option.description.inc_tax'|trans}}</span></p>
                                        {% elseif optionCategory.value < 0 %}
                                            <p class=\"minus\">{{'productoption.product.option.description.price'|trans}}:{{ priceIncTax(optionCategory.value, Product)|price }} <span class=\"small\">{{'productoption.product.option.description.inc_tax'|trans}}</span></p>
                                        {% endif %}
                                    {% endif %}
                                    {% if optionCategory.delivery_free_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\OptionCategory::ON') %}
                                        <p>{{'productoption.common.delivery_free'|trans}}</p>
                                    {% endif %}
                                    <button class=\"btn-info\" id=\"desc_btn_{{ Option.id }}_{{ optionCategory.id }}\" >{{'productoption.product.option.description.select'|trans}}</button>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% endif %}
            {% endif %}
        </div>
    {% endif %}
{% endfor %}", "@ProductOption/default/Product/option_description.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/default/Product/option_description.twig");
    }
}
