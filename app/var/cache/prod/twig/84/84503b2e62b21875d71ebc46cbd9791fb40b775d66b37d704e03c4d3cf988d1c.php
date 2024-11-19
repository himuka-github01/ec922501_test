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

/* Product/option_description.twig */
class __TwigTemplate_145f04ff4d2224f770144b2e67d3acb172ec129b8af77d855d48edbe11a63514 extends \Eccube\Twig\Template
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
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ProductOptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
            // line 12
            echo "    ";
            $context["Option"] = twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 12);
            // line 13
            echo "    ";
            $context["Product"] = twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Product", [], "any", false, false, false, 13);
            // line 14
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "description_flg", [], "any", false, false, false, 14) == 1)) {
                // line 15
                echo "        <div id=\"option_description_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
                echo "\" class=\"option_description\">
            <div class=\"modal-header\">
                <div class=\"plainmodal-close\">&#215;</div>
                <h4 class=\"modal-title\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</h4>
                <p>";
                // line 19
                echo nl2br(twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "description", [], "any", false, false, false, 19));
                echo "</p>
            </div>


            ";
                // line 23
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "OptionCategories", [], "any", false, false, false, 23)) > 0)) {
                    // line 24
                    echo "                ";
                    // line 25
                    echo "                ";
                    if (((((twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "type", [], "any", false, false, false, 25) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXT_TYPE")) || (twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "type", [], "any", false, false, false, 25) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXTAREA_TYPE"))) || (twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "type", [], "any", false, false, false, 25) == twig_constant("Plugin\\ProductOption\\Entity\\Option::NUMBER_TYPE"))) || (twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "type", [], "any", false, false, false, 25) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DATE_TYPE")))) {
                        // line 26
                        echo "                    <div class=\"modal-body\">
                        ";
                        // line 27
                        $context["optionCategory"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "OptionCategories", [], "any", false, false, false, 27)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
                        // line 28
                        echo "                        <div>
                            ";
                        // line 29
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["optionCategory"] ?? null), "OptionImages", [], "any", false, false, false, 29));
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
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["optionCategory"] ?? null), "value", [], "any", false, false, false, 32)) > 0)) {
                            // line 33
                            echo "                                ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["optionCategory"] ?? null), "value", [], "any", false, false, false, 33) > 0)) {
                                // line 34
                                echo "                                    <p class=\"plus\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.price"), "html", null, true);
                                echo ":";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Plugin\ProductOption\Twig\Extension\PriceIncTaxExtension']->priceIncTax(twig_get_attribute($this->env, $this->source, ($context["optionCategory"] ?? null), "value", [], "any", false, false, false, 34), ($context["Product"] ?? null))), "html", null, true);
                                echo " <span class=\"small\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.inc_tax"), "html", null, true);
                                echo "</span></p>
                                ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 35
($context["optionCategory"] ?? null), "value", [], "any", false, false, false, 35) < 0)) {
                                // line 36
                                echo "                                    <p class=\"minus\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.product.option.description.price"), "html", null, true);
                                echo ":";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Plugin\ProductOption\Twig\Extension\PriceIncTaxExtension']->priceIncTax(twig_get_attribute($this->env, $this->source, ($context["optionCategory"] ?? null), "value", [], "any", false, false, false, 36), ($context["Product"] ?? null))), "html", null, true);
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
                        if ((twig_get_attribute($this->env, $this->source, ($context["optionCategory"] ?? null), "delivery_free_flg", [], "any", false, false, false, 39) == twig_constant("Plugin\\ProductOption\\Entity\\OptionCategory::ON"))) {
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
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "OptionCategories", [], "any", false, false, false, 47));
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
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Plugin\ProductOption\Twig\Extension\PriceIncTaxExtension']->priceIncTax(twig_get_attribute($this->env, $this->source, $context["optionCategory"], "value", [], "any", false, false, false, 57), ($context["Product"] ?? null))), "html", null, true);
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
                                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($this->extensions['Plugin\ProductOption\Twig\Extension\PriceIncTaxExtension']->priceIncTax(twig_get_attribute($this->env, $this->source, $context["optionCategory"], "value", [], "any", false, false, false, 59), ($context["Product"] ?? null))), "html", null, true);
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
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Option"] ?? null), "id", [], "any", false, false, false, 65), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "Product/option_description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 72,  241 => 71,  237 => 69,  231 => 68,  220 => 65,  214 => 63,  211 => 62,  208 => 61,  198 => 59,  196 => 58,  187 => 57,  184 => 56,  182 => 55,  177 => 54,  168 => 52,  164 => 51,  160 => 50,  157 => 49,  154 => 48,  150 => 47,  147 => 46,  144 => 45,  140 => 42,  134 => 40,  131 => 39,  128 => 38,  118 => 36,  116 => 35,  107 => 34,  104 => 33,  101 => 32,  92 => 30,  88 => 29,  85 => 28,  83 => 27,  80 => 26,  77 => 25,  75 => 24,  73 => 23,  66 => 19,  62 => 18,  53 => 15,  50 => 14,  47 => 13,  44 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/option_description.twig", "/var/www/htdocs/ec922501/app/template/default/Product/option_description.twig");
    }
}
