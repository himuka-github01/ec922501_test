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
class __TwigTemplate_a28191b19f051674ed96c51eb7cd17e0ee1cafb24be953ae2b10b858dfe50878 extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalQuantity"] ?? null)), "html", null, true);
        echo "</span>
        </i>
        <div class=\"ec-cartNavi__label\">
            <div class=\"ec-cartNavi__price\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["totalPrice"] ?? null)), "html", null, true);
        echo "</div>
        </div>
    </div>
    ";
        // line 28
        if ((($context["totalQuantity"] ?? null) > 0)) {
            // line 29
            echo "        <div class=\"ec-cartNaviIsset\">
            <div class=\"ec-cartNaviIsset__action\">
                <a class=\"ec-blockBtn--action\" href=\"";
            // line 31
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
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
            $context['_seq'] = twig_ensure_traversable(($context["Carts"] ?? null));
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
                    $context["Product"] = twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "Product", [], "any", false, false, false, 37);
                    // line 38
                    echo "                    <div class=\"ec-cartNaviIsset__cart\">
                        <div class=\"ec-cartNaviIsset__cartImage\">
                            <img src=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "MainListImage", [], "any", false, false, false, 40)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "\">
                        </div>
                        <div class=\"ec-cartNaviIsset__cartContent\">
                            <div class=\"ec-cartNaviIsset__cartContentTitle\">";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 43), "html", null, true);
                    echo "
                                <div class=\"ec-font-size-1\">
                                    ";
                    // line 45
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 45) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45))) {
                        // line 46
                        echo "                                        <!--
                                        ";
                        // line 47
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 47), "ClassName", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory1", [], "any", false, false, false, 47), "html", null, true);
                        echo "
                                        -->
                                    ";
                    }
                    // line 50
                    echo "                                    ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 50) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50))) {
                        // line 51
                        echo "                                        <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 51), "ClassName", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ProductClass"] ?? null), "ClassCategory2", [], "any", false, false, false, 51), "html", null, true);
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
        return array (  187 => 72,  180 => 68,  176 => 66,  172 => 64,  166 => 63,  154 => 59,  149 => 57,  145 => 56,  140 => 53,  132 => 51,  129 => 50,  121 => 47,  118 => 46,  116 => 45,  111 => 43,  103 => 40,  99 => 38,  96 => 37,  93 => 36,  88 => 35,  84 => 34,  79 => 32,  73 => 31,  69 => 29,  67 => 28,  61 => 25,  55 => 22,  50 => 19,  48 => 18,  46 => 17,  44 => 16,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/cart.twig", "/var/www/htdocs/ec922501/app/template/default/Block/cart.twig");
    }
}
