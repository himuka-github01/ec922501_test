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

/* @ProductOption/admin/Product/product_edit.twig */
class __TwigTemplate_eadb659f66e6e9a47e977857d1a561a81c6d93919876de8c941b8428a49d04b1 extends \Eccube\Twig\Template
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
        if ( !(null === ($context["id"] ?? null))) {
            // line 12
            echo "<div class=\"card rounded border-0 mb-4\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                     title=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.tooltip.product.product_option"), "html", null, true);
            echo "\">
                <span class=\"card-title\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.product_option__card_title"), "html", null, true);
            echo "
                    <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                </span>
                </div>
            </div>
            <div class=\"col-4 text-right\">
                <a data-toggle=\"collapse\" href=\"#productOption\" aria-expanded=\"false\"
                   aria-controls=\"productOption\">
                    <i class=\"fa fa-angle-up fa-lg\"></i>
                </a>
            </div>
        </div>
    </div>
    <div class=\"collapse show ec-cardCollapse\" id=\"productOption\">
        <div class=\"card-body\">
            ";
            // line 34
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductOptions", [], "any", false, false, false, 34)) > 0)) {
                // line 35
                echo "                <table class=\"table table-striped\">
                    <thead class=\"table-active\">
                    <th class=\"pl-3 pt-2 pb-2\">";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.backend_name"), "html", null, true);
                echo "</th>
                    <th class=\"pt-2 pb-2\">";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.name"), "html", null, true);
                echo "</th>
                    <th class=\"pt-2 pb-2\">";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.type"), "html", null, true);
                echo "</th>
                    </thead>
                    <tbody>
                    ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductOptions", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
                    // line 43
                    echo "                        <tr>
                            <td class=\"pl-3\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 44), "backend_name", [], "any", false, false, false, 44), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 46
                    echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["arrType"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46)] ?? null) : null), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    </tbody>
                </table>
            ";
            }
            // line 52
            echo "
            <div class=\"d-block text-center text-center\">
                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_product_option", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                   title=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.option.rank.assign")]), "html", null, true);
            // line 57
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.product_option__confirm_of_product"), "html", null, true);
            echo "</a>
            </div>
            <div class=\"d-block text-center text-center\" style=\"margin-top:10px;\">
                <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_product_option_rank", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                   title=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.option.rank.sort")]), "html", null, true);
            // line 63
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.product_option_rank__confirm_of_product"), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Product/product_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  142 => 61,  138 => 60,  131 => 57,  129 => 55,  125 => 54,  121 => 52,  116 => 49,  107 => 46,  103 => 45,  99 => 44,  96 => 43,  92 => 42,  86 => 39,  82 => 38,  78 => 37,  74 => 35,  72 => 34,  54 => 19,  49 => 17,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ProductOption/admin/Product/product_edit.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Product/product_edit.twig");
    }
}
