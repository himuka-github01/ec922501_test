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

/* Shopping/shipping_multiple.twig */
class __TwigTemplate_d7f60ce72758382de11b89553784509231966e16d91b81abc6f8f2076a59bcab extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping_multiple.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping_multiple.twig"));

        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping_multiple.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "<script>
\$(function() {
    \$('.add').click(function() {
        var data = \$(this).data();
        var idx = data.idx;
        var itemIdx = 0;
        var item = \$('#item' + idx);
        var row = \$('#item' + idx + '-0');

        // 既存のお届け先のrowをコピーして雛形とする
        var addrow = \$(row).clone();

        // 追加する要素のIndexを決定
        item.find('.shipping_item').each(function() {
            itemIdx = \$(this).attr('data-itemidx');
        });
        itemIdx = 1 + parseInt(itemIdx);

        // 行のID設定
        addrow.attr('id', 'item' + idx + '-' + itemIdx);
        addrow.attr('data-itemidx', itemIdx);

        // お届け先セレクトボックスのIDとNAME設定
        addrow.find('select').attr('name', 'form[shipping_multiple][' + idx + '][shipping][' + itemIdx + '][customer_address]');
        addrow.find('select').attr('id', 'form_shipping_multiple_' + idx + '_shipping_' + itemIdx + '_customer_address');

        // 数量のINPUTのIDとNAME設定
        addrow.find('input').attr('name', 'form[shipping_multiple][' + idx + '][shipping][' + itemIdx + '][quantity]');
        addrow.find('input').attr('id', 'form_shipping_multiple_' + idx + '_shipping_' + itemIdx + '_quantity');

        // その他、divやbuttonのID設定
        addrow.find('[id*=\"multiple_list__shipping_address\"]').attr('id', 'multiple_list__shipping_address--' + idx + '_' + itemIdx + '');
        addrow.find('[id*=\"multiple_list__shipping_quantity\"]').attr('id', 'multiple_list__shipping_quantity--' + idx + '_' + itemIdx + '');
        addrow.find('button').each(function() {
            \$(this).attr('id', 'button__delete--' + idx + '_' + itemIdx + '');
            \$(this).attr('data-itemidx', idx + '-' + itemIdx);
            \$(this).data('itemidx', idx + '-' + itemIdx);
            \$(this).removeAttr('style');
        });

        \$(item).append(\$(addrow));
    });

    \$(document).on('click', '.delete', function() {
        var data = \$(this).data();
        \$('#item' + data.itemidx).remove();
    });

});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 67
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_multiple_title"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-AddAddress\">
        <form id=\"shipping-multiple-form\" method=\"post\" action=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping_multiple");
        echo "\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "_token", [], "any", false, false, false, 75), 'widget');
        echo "
            <div class=\"ec-AddAddress__info\">
                <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_multiple_message"), "html", null, true);
        echo "</p>
            </div>

            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 81
            echo "                <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 81), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
            <div class=\"ec-AddAddress__new\"><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping_multiple_edit");
        echo "\" class=\"btn ec-inlineBtn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_add_new_shipping"), "html", null, true);
        echo "</a></div>

            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["OrderItems"]) || array_key_exists("OrderItems", $context) ? $context["OrderItems"] : (function () { throw new RuntimeError('Variable "OrderItems" does not exist.', 86, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
            // line 87
            echo "                ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 87);
            // line 88
            echo "                ";
            $context["itemvalue"] = 0;
            // line 89
            echo "                <div id=\"multiple_list__item_box--";
            echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "\" class=\"ec-AddAddress__add\">
                    <div class=\"ec-AddAddress__item\">
                        <div class=\"ec-AddAddress__itemThumb\">
                            <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 92), "MainListImage", [], "any", false, false, false, 92)), "save_image"), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"ec-AddAddress__itemtContent\">
                            <div class=\"ec-AddAddress__itemtTitle\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 95), "html", null, true);
            echo "
                            </div>
                            ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 97), "classCategory1", [], "any", false, false, false, 97)) {
                // line 98
                echo "                                <div class=\"ec-AddAddress__itemtSize\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 98), "classCategory1", [], "any", false, false, false, 98), "html", null, true);
                echo "</div>
                            ";
            }
            // line 100
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 100), "classCategory2", [], "any", false, false, false, 100)) {
                // line 101
                echo "                                <div class=\"ec-AddAddress__itemtSize\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 101), "classCategory2", [], "any", false, false, false, 101), "html", null, true);
                echo "</div>
                            ";
            }
            // line 103
            echo "                            <div class=\"ec-AddAddress__itemtPrice\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.subtotal__with_separator"), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, false, 103)), "html", null, true);
            echo "</div>

                            ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["compItemQuantities"]) || array_key_exists("compItemQuantities", $context) ? $context["compItemQuantities"] : (function () { throw new RuntimeError('Variable "compItemQuantities" does not exist.', 105, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 106
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106) == $context["key"])) {
                    // line 107
                    echo "                                    <div class=\"ec-AddAddress__itemtNumber\" id=\"multiple_list__value--";
                    echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 107, $this->source); })()), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.quantity"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</div>
                                    ";
                    // line 108
                    $context["itemvalue"] = $context["value"];
                    // line 109
                    echo "                                ";
                }
                // line 110
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                        </div>
                    </div>

                    <div id=\"item";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 114, $this->source); })()), "html", null, true);
            echo "\">
                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "shipping_multiple", [], "any", false, false, false, 115), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 115, $this->source); })()), [], "array", false, false, false, 115), "shipping", [], "any", false, false, false, 115));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 116
                echo "                            <div id=\"item";
                echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 116, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 116), "html", null, true);
                echo "\" data-itemidx=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 116), "html", null, true);
                echo "\" class=\"ec-AddAddress__select shipping_item item";
                echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 116, $this->source); })()), "html", null, true);
                echo "\">
                                <div id=\"multiple_list__shipping_address--";
                // line 117
                echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 117, $this->source); })()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 117), "html", null, true);
                echo "\" class=\"ec-AddAddress__selectAddress\">
                                    <div class=\"ec-select\">
                                        <label>";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.delivery_to"), "html", null, true);
                echo "</label>
                                        ";
                // line 120
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["shipping"], "customer_address", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "shipping"]]);
                echo "
                                        ";
                // line 121
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["shipping"], "customer_address", [], "any", false, false, false, 121), 'errors');
                echo "
                                    </div>
                                </div>
                                <div id=\"multiple_list__shipping_quantity--";
                // line 124
                echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 124, $this->source); })()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 124), "html", null, true);
                echo "\" class=\"ec-AddAddress__selectNumber\">
                                    <div class=\"ec-input\">
                                        <label>";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.quantity"), "html", null, true);
                echo "</label>
                                        ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["compItemQuantities"]) || array_key_exists("compItemQuantities", $context) ? $context["compItemQuantities"] : (function () { throw new RuntimeError('Variable "compItemQuantities" does not exist.', 127, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 128
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128) == $context["key"])) {
                        // line 129
                        echo "                                                ";
                        $context["quantity"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "value", [], "any", false, false, false, 129)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "value", [], "any", false, false, false, 129)) : ($context["value"]));
                        // line 130
                        echo "                                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => "quantity"], "value" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 130, $this->source); })())]);
                        echo "
                                                ";
                        // line 131
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, false, 131), 'errors');
                        echo "
                                            ";
                    }
                    // line 133
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                                    </div>
                                </div>

                                <button id=\"button__delete--";
                // line 137
                echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 137, $this->source); })()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 137), "html", null, true);
                echo "\" type=\"button\" class=\"btn ec-inlineBtn delete\"
                                        ";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 138) == 0)) {
                    echo "style=\"display:none;\"";
                }
                // line 139
                echo "                                        data-itemidx=\"";
                echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 139, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 139), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delete"), "html", null, true);
                echo "</button>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                    </div>

                    <div id=\"multiple_list__add_button";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 144, $this->source); })()), "html", null, true);
            echo "\" class=\"ec-AddAddress__btn\">
                        <button id=\"button__add";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 145, $this->source); })()), "html", null, true);
            echo "\" type=\"button\" class=\"ec-inlineBtn add\" data-idx=\"";
            echo twig_escape_filter($this->env, (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 145, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_add_new_shipping__short"), "html", null, true);
            echo "</button>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
            <div class=\"ec-AddAddress__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button id=\"button__confirm\" type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_send_selected_shipping"), "html", null, true);
        echo "</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/shipping_multiple.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 154,  451 => 153,  445 => 149,  423 => 145,  419 => 144,  415 => 142,  393 => 139,  389 => 138,  383 => 137,  378 => 134,  372 => 133,  367 => 131,  362 => 130,  359 => 129,  356 => 128,  352 => 127,  348 => 126,  341 => 124,  335 => 121,  331 => 120,  327 => 119,  320 => 117,  309 => 116,  292 => 115,  288 => 114,  283 => 111,  277 => 110,  274 => 109,  272 => 108,  261 => 107,  258 => 106,  254 => 105,  247 => 103,  241 => 101,  238 => 100,  232 => 98,  230 => 97,  225 => 95,  219 => 92,  212 => 89,  209 => 88,  206 => 87,  189 => 86,  182 => 84,  179 => 83,  170 => 81,  166 => 80,  160 => 77,  155 => 75,  151 => 74,  143 => 69,  139 => 67,  129 => 66,  69 => 14,  59 => 13,  36 => 11,);
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
{% extends 'default_frame.twig' %}

{% block javascript %}
<script>
\$(function() {
    \$('.add').click(function() {
        var data = \$(this).data();
        var idx = data.idx;
        var itemIdx = 0;
        var item = \$('#item' + idx);
        var row = \$('#item' + idx + '-0');

        // 既存のお届け先のrowをコピーして雛形とする
        var addrow = \$(row).clone();

        // 追加する要素のIndexを決定
        item.find('.shipping_item').each(function() {
            itemIdx = \$(this).attr('data-itemidx');
        });
        itemIdx = 1 + parseInt(itemIdx);

        // 行のID設定
        addrow.attr('id', 'item' + idx + '-' + itemIdx);
        addrow.attr('data-itemidx', itemIdx);

        // お届け先セレクトボックスのIDとNAME設定
        addrow.find('select').attr('name', 'form[shipping_multiple][' + idx + '][shipping][' + itemIdx + '][customer_address]');
        addrow.find('select').attr('id', 'form_shipping_multiple_' + idx + '_shipping_' + itemIdx + '_customer_address');

        // 数量のINPUTのIDとNAME設定
        addrow.find('input').attr('name', 'form[shipping_multiple][' + idx + '][shipping][' + itemIdx + '][quantity]');
        addrow.find('input').attr('id', 'form_shipping_multiple_' + idx + '_shipping_' + itemIdx + '_quantity');

        // その他、divやbuttonのID設定
        addrow.find('[id*=\"multiple_list__shipping_address\"]').attr('id', 'multiple_list__shipping_address--' + idx + '_' + itemIdx + '');
        addrow.find('[id*=\"multiple_list__shipping_quantity\"]').attr('id', 'multiple_list__shipping_quantity--' + idx + '_' + itemIdx + '');
        addrow.find('button').each(function() {
            \$(this).attr('id', 'button__delete--' + idx + '_' + itemIdx + '');
            \$(this).attr('data-itemidx', idx + '-' + itemIdx);
            \$(this).data('itemidx', idx + '-' + itemIdx);
            \$(this).removeAttr('style');
        });

        \$(item).append(\$(addrow));
    });

    \$(document).on('click', '.delete', function() {
        var data = \$(this).data();
        \$('#item' + data.itemidx).remove();
    });

});
</script>
{% endblock javascript %}

{% block main %}
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.shopping.shipping_multiple_title'|trans }}</h1>
        </div>
    </div>

    <div class=\"ec-AddAddress\">
        <form id=\"shipping-multiple-form\" method=\"post\" action=\"{{ url('shopping_shipping_multiple') }}\">
            {{ form_widget(form._token) }}
            <div class=\"ec-AddAddress__info\">
                <p>{{ 'front.shopping.shipping_multiple_message'|trans }}</p>
            </div>

            {% for error in errors %}
                <div class=\"text-danger\">{{ error.message }}</div>
            {% endfor %}

            <div class=\"ec-AddAddress__new\"><a href=\"{{ url('shopping_shipping_multiple_edit') }}\" class=\"btn ec-inlineBtn\">{{ 'front.shopping.shipping_add_new_shipping'|trans }}</a></div>

            {% for orderItem in OrderItems %}
                {% set idx = loop.index0 %}
                {% set itemvalue = 0 %}
                <div id=\"multiple_list__item_box--{{ idx }}\" class=\"ec-AddAddress__add\">
                    <div class=\"ec-AddAddress__item\">
                        <div class=\"ec-AddAddress__itemThumb\">
                            <img src=\"{{ asset(orderItem.product.MainListImage|no_image_product, 'save_image') }}\">
                        </div>
                        <div class=\"ec-AddAddress__itemtContent\">
                            <div class=\"ec-AddAddress__itemtTitle\">{{ orderItem.productName }}
                            </div>
                            {% if orderItem.productClass.classCategory1 %}
                                <div class=\"ec-AddAddress__itemtSize\">{{ orderItem.productClass.classCategory1 }}</div>
                            {% endif %}
                            {% if orderItem.productClass.classCategory2 %}
                                <div class=\"ec-AddAddress__itemtSize\">{{ orderItem.productClass.classCategory2 }}</div>
                            {% endif %}
                            <div class=\"ec-AddAddress__itemtPrice\">{{ 'common.subtotal__with_separator'|trans }}{{ orderItem.totalPrice|price }}</div>

                            {% for key, value in compItemQuantities %}
                                {% if orderItem.productClass.id == key %}
                                    <div class=\"ec-AddAddress__itemtNumber\" id=\"multiple_list__value--{{ idx }}_{{ key }}\">{{ 'common.quantity'|trans }}：{{ value }}</div>
                                    {% set itemvalue = value %}
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>

                    <div id=\"item{{ idx }}\">
                        {% for shipping in form.shipping_multiple[idx].shipping %}
                            <div id=\"item{{ idx }}-{{ loop.index0 }}\" data-itemidx=\"{{ loop.index0 }}\" class=\"ec-AddAddress__select shipping_item item{{ idx }}\">
                                <div id=\"multiple_list__shipping_address--{{ idx }}_{{ loop.index0 }}\" class=\"ec-AddAddress__selectAddress\">
                                    <div class=\"ec-select\">
                                        <label>{{ 'front.shopping.delivery_to'|trans }}</label>
                                        {{ form_widget(shipping.customer_address, {'attr': {'class': 'shipping'}}) }}
                                        {{ form_errors(shipping.customer_address) }}
                                    </div>
                                </div>
                                <div id=\"multiple_list__shipping_quantity--{{ idx }}_{{ loop.index0 }}\" class=\"ec-AddAddress__selectNumber\">
                                    <div class=\"ec-input\">
                                        <label>{{ 'common.quantity'|trans }}</label>
                                        {% for key, value in compItemQuantities %}
                                            {% if orderItem.productClass.id == key %}
                                                {% set quantity = shipping.quantity.vars.value ?: value %}
                                                {{ form_widget(shipping.quantity, {'attr': {'class': 'quantity'}, 'value': quantity}) }}
                                                {{ form_errors(shipping.quantity) }}
                                            {% endif %}
                                        {% endfor %}
                                    </div>
                                </div>

                                <button id=\"button__delete--{{ idx }}_{{ loop.index0 }}\" type=\"button\" class=\"btn ec-inlineBtn delete\"
                                        {% if loop.index0 == 0 %}style=\"display:none;\"{% endif %}
                                        data-itemidx=\"{{ idx }}-{{ loop.index0 }}\">{{'common.delete'|trans}}</button>
                            </div>
                        {% endfor %}
                    </div>

                    <div id=\"multiple_list__add_button{{ idx }}\" class=\"ec-AddAddress__btn\">
                        <button id=\"button__add{{ idx }}\" type=\"button\" class=\"ec-inlineBtn add\" data-idx=\"{{ idx }}\">{{ 'front.shopping.shipping_add_new_shipping__short'|trans }}</button>
                    </div>
                </div>
            {% endfor %}

            <div class=\"ec-AddAddress__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button id=\"button__confirm\" type=\"submit\" class=\"ec-blockBtn--action\">{{ 'front.shopping.shipping_send_selected_shipping'|trans }}</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"{{ url('shopping') }}\">{{ 'common.back'|trans }}</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
{% endblock %}
", "Shopping/shipping_multiple.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Shopping/shipping_multiple.twig");
    }
}
