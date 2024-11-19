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

/* Block/cart.twig */
class __TwigTemplate_7b8ccae38872be6b5c69f80f80d7dab054c21b130258e74d145b0accb93651f0 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/cart.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/cart.twig"));

        // line 11
        echo "<style>
    .ec-headerRole {
        position: static;
    }
</style>
";
        // line 16
        $context["Carts"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_all_carts();
        // line 17
        $context["totalPrice"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_carts_total_price();
        // line 18
        $context["totalQuantity"] = $this->extensions['Eccube\Twig\Extension\CartServiceExtension']->get_carts_total_quantity();
        // line 19
        echo "<div class=\"ec-cartNaviWrap\">
    <div class=\"ec-cartNavi\">
        <i class=\"ec-cartNavi__icon fas fa-shopping-cart\">
            <span class=\"ec-cartNavi__badge\">";
        // line 22
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 22, $this->source); })())), "html", null, true);
        echo "</span>
        </i>
        <div class=\"ec-cartNavi__label\">
            <div class=\"ec-cartNavi__price\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 25, $this->source); })())), "html", null, true);
        echo "</div>
        </div>
    </div>
    ";
        // line 28
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 28, $this->source); })()) > 0)) {
            // line 29
            echo "        <div class=\"ec-cartNaviIsset\">
            <div class=\"ec-cartNaviIsset__action\">
                <a class=\"ec-blockBtn--action\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.cart.go_to_cart"), "html", null, true);
            echo "</a>
                <a class=\"ec-blockBtn ec-cartNavi--cancel\">";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
            echo "</a>
            </div>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Cart"]) {
                // line 35
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                    // line 36
                    echo "                    ";
                    $context["ProductClass"] = twig_get_attribute($this->env, $this->source, $context["CartItem"], "ProductClass", [], "any", false, false, false, 36);
                    // line 37
                    echo "                    ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 37, $this->source); })()), "Product", [], "any", false, false, false, 37);
                    // line 38
                    echo "                    <div class=\"ec-cartNaviIsset__cart\">
                        <div class=\"ec-cartNaviIsset__cartImage\">
                            <img src=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 40, $this->source); })()), "MainListImage", [], "any", false, false, false, 40)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "\">
                        </div>
                        <div class=\"ec-cartNaviIsset__cartContent\">
                            <div class=\"ec-cartNaviIsset__cartContentTitle\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
                    echo "
                                <div class=\"ec-font-size-1\">
                                    ";
                    // line 45
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 45, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 45) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 45, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45))) {
                        // line 46
                        echo "                                        <!--
                                        ";
                        // line 47
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 47, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 47), "ClassName", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 47, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 47), "html", null, true);
                        echo "
                                        -->
                                    ";
                    }
                    // line 50
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 50, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 50) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 50, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50))) {
                        // line 51
                        echo "                                        <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 51, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 51), "ClassName", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 51, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 51), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 53
                    echo "                                </div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentPrice\">
                                ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "price", [], "any", false, false, false, 56)), "html", null, true);
                    echo "
                                <div class=\"ec-cartNaviIsset__cartContentTax\">";
                    // line 57
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentNumber\">";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.quantity"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 59)), "html", null, true);
                    echo "</div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        } else {
            // line 66
            echo "        <div class=\"ec-cartNaviNull\">
            <div class=\"ec-cartNaviNull__message\">
                <p>";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.cart.no_item"), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
        }
        // line 72
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 72,  186 => 68,  182 => 66,  178 => 64,  172 => 63,  160 => 59,  155 => 57,  151 => 56,  146 => 53,  138 => 51,  135 => 50,  127 => 47,  124 => 46,  122 => 45,  117 => 43,  109 => 40,  105 => 38,  102 => 37,  99 => 36,  94 => 35,  90 => 34,  85 => 32,  79 => 31,  75 => 29,  73 => 28,  67 => 25,  61 => 22,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  43 => 11,);
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
<style>
    .ec-headerRole {
        position: static;
    }
</style>
{% set Carts = get_all_carts() %}
{% set totalPrice = get_carts_total_price() %}
{% set totalQuantity = get_carts_total_quantity() %}
<div class=\"ec-cartNaviWrap\">
    <div class=\"ec-cartNavi\">
        <i class=\"ec-cartNavi__icon fas fa-shopping-cart\">
            <span class=\"ec-cartNavi__badge\">{{ totalQuantity|number_format }}</span>
        </i>
        <div class=\"ec-cartNavi__label\">
            <div class=\"ec-cartNavi__price\">{{ totalPrice|price }}</div>
        </div>
    </div>
    {% if totalQuantity > 0 %}
        <div class=\"ec-cartNaviIsset\">
            <div class=\"ec-cartNaviIsset__action\">
                <a class=\"ec-blockBtn--action\" href=\"{{ url('cart') }}\">{{ 'front.block.cart.go_to_cart'|trans }}</a>
                <a class=\"ec-blockBtn ec-cartNavi--cancel\">{{ 'common.cancel'|trans }}</a>
            </div>
            {% for Cart in Carts %}
                {% for CartItem in Cart.CartItems %}
                    {% set ProductClass = CartItem.ProductClass %}
                    {% set Product = ProductClass.Product %}
                    <div class=\"ec-cartNaviIsset__cart\">
                        <div class=\"ec-cartNaviIsset__cartImage\">
                            <img src=\"{{ asset(Product.MainListImage|no_image_product, 'save_image') }}\" alt=\"{{ Product.name }}\">
                        </div>
                        <div class=\"ec-cartNaviIsset__cartContent\">
                            <div class=\"ec-cartNaviIsset__cartContentTitle\">{{ Product.name }}
                                <div class=\"ec-font-size-1\">
                                    {% if ProductClass.ClassCategory1 and ProductClass.ClassCategory1.id %}
                                        <!--
                                        {{ ProductClass.ClassCategory1.ClassName.name }}：{{ ProductClass.ClassCategory1 }}
                                        -->
                                    {% endif %}
                                    {% if ProductClass.ClassCategory2 and ProductClass.ClassCategory2.id %}
                                        <br>{{ ProductClass.ClassCategory2.ClassName.name }}：{{ ProductClass.ClassCategory2 }}
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentPrice\">
                                {{ CartItem.price|price }}
                                <div class=\"ec-cartNaviIsset__cartContentTax\">{{ 'common.tax_include'|trans }}</div>
                            </div>
                            <div class=\"ec-cartNaviIsset__cartContentNumber\">{{ 'common.quantity'|trans }} {{ CartItem.quantity|number_format }}</div>
                        </div>
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
    {% else %}
        <div class=\"ec-cartNaviNull\">
            <div class=\"ec-cartNaviNull__message\">
                <p>{{ 'front.block.cart.no_item'|trans }}</p>
            </div>
        </div>
    {% endif %}
</div>
", "Block/cart.twig", "/var/www/htdocs/ec922501/app/template/default/Block/cart.twig");
    }
}
