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

/* @admin/Order/search_product.twig */
class __TwigTemplate_ba3fa0347fac23f00fbdb72a4e15054938b8915eea7e6a5e7e51cece51b28010 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/search_product.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/search_product.twig"));

        // line 11
        echo "<script>
    // 商品規格情報. 規格2のプルダウンリストの設定に利用する,
    var productsClassCategories = {
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 14, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 15
            echo "        \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 15), "js"), "html", null, true);
            echo "\": ";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($context["Product"], false);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 15) == false)) {
                echo ", ";
            }
            // line 16
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    };

    // 規格1が選択された際に, 規格2のプルダウンリストを設定する,
    function fnSetClassCategory2(select, product_id) {
        // 規格1の要素を取得
        var \$sele1 = \$(select);
        // 規格2の要素を取得
        var \$sele2 = \$sele1.parents(\".align-middle\").find('select[name=classcategory_id2]');

        // 規格1の選択肢
        var classcat_id1 = \$sele1.val() ? \$sele1.val() : '';

        // 規格2がある場合は選択肢を書き換える
        if (\$sele2 && \$sele2.length) {
            // 規格2の選択肢をクリア
            \$sele2.children().remove();
            var classcat2 = productsClassCategories[product_id][classcat_id1];

            // 規格2の要素を設定
            for (var key in classcat2) {
                if (classcat2.hasOwnProperty(key)) {
                    var id = classcat2[key].classcategory_id2;
                    var name = classcat2[key].name;
                    var option = \$('<option />').val(id ? id : '').text(name);
                    \$sele2.append(option);
                }
            }
        }
    }

    // 受注明細行を追加する.
    function fnAddOrderItem(\$row, product_id, type, product_name) {
        // 規格1の要素を取得
        var \$sele1 = \$row.find('select[name=classcategory_id1]');
        // 規格2の要素を取得
        var \$sele2 = \$row.find('select[name=classcategory_id2]');

        var product_class_id = null;
        var price = 0;
        var quantity = 1;

        // 規格なし商品の場合
        if (!\$sele1.length && !\$sele2.length) {
            var product = productsClassCategories[product_id]['__unselected2']['#'];
            product_class_id = product['product_class_id'];
            price = product['price02'];
            // 規格が登録されている商品の場合
        } else if (\$sele1.length) {
            if (\$sele2.length) {
                var class_category_id1 = \$sele1.val();
                var class_cateogry_id2 = \$sele2.val();
                if (class_category_id1 == '__unselected' || !class_cateogry_id2) {
                    alert('";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.unselected_class"), "html", null, true);
        echo "');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#' + class_cateogry_id2];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            } else {
                var class_category_id1 = \$sele1.val();
                if (class_category_id1 == '__unselected') {
                    alert('";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.unselected_class"), "html", null, true);
        echo "');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#'];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            }
        }

        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        \$collectionHolder.children('tbody').append(newForm);
        var \$lastRow = \$collectionHolder.children('tbody').children('tr').last();

        \$(\$lastRow).find(formIdPrefix + index + '_ProductClass').val(product_class_id);
        \$(\$lastRow).find(formIdPrefix + index + '_price').val(price);
        \$(\$lastRow).find(formIdPrefix + index + '_quantity').val(quantity);
        \$(\$lastRow).find(formIdPrefix + index + '_order_item_type').val(type);
        \$(\$lastRow).find(formIdPrefix + index + '_product_name').val(product_name);

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }

    // 商品検索
    \$('#product_pagination a').on('click', function(event) {
        if (!\$(this).parent().is('.active')) {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        }

        event.preventDefault();
    });
</script>


<table class=\"table table-striped table-sm mb-3\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 pl-3\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pl-3\">";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__short"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pr-3\"></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 143
            echo "        <form name=\"product_form";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 143), "html", null, true);
            echo "\">
            ";
            // line 144
            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 144, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 144), [], "array", false, false, false, 144);
            // line 145
            echo "            <tr>
                <td class=\"align-middle pl-3\">
                    ";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 147), "html", null, true);
            echo "
                </td>
                <td class=\"align-middle pl-3\">
                    <p class=\"m-0\"> ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 150), "html", null, true);
            echo "</p>
                    <span>
                        ";
            // line 152
            if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 152)) {
                // line 153
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 153), "html", null, true);
                echo "～";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, false, 153), "html", null, true);
                echo "
                        ";
            } else {
                // line 155
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 155), "html", null, true);
                echo "
                        ";
            }
            // line 157
            echo "                    </span>
                </td>
                <td class=\"align-middle\">
                    ";
            // line 160
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 160)) {
                // line 161
                echo "                        <div class=\"row mb-2\">
                            <div class=\"col-4 pr-0\"><span>";
                // line 162
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 162), 'label');
                echo "</span></div>
                            <div class=\"col-8 text-left pl-0\">
                                ";
                // line 164
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 164), 'widget', ["attr" => ["onchange" => (("fnSetClassCategory2(this," . twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 164)) . ")")]]);
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 168
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 168)) {
                // line 169
                echo "                        <div class=\"row\">
                            <div class=\"col-4 pr-0\"><span>";
                // line 170
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 170), 'label');
                echo "</span></div>
                            <div class=\"col-8 text-left pl-0\">
                                ";
                // line 172
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 172), 'widget', ["id" => ""]);
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 176
            echo "                </td>
                ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, $context["Product"], "stock_find", [], "any", false, false, false, 177)) {
                // line 178
                echo "                    <td class=\"align-middle pr-3 text-right\">
                        <button type=\"button\" class=\"btn btn-ec-actionIcon\" onclick=\"fnAddOrderItem(\$(this).parent().parent(), ";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 179), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\OrderItemType::PRODUCT"), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 179), "js"), "html", null, true);
                echo "')\" name=\"mode\" value=\"modal\">
                            <i class=\"fa fa-plus fa-lg font-weight-bold text-secondary\"></i>
                        </button>
                    </td>
                ";
            } else {
                // line 184
                echo "                    <td class=\"align-middle pr-3 text-right\">
                        ";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.out_of_stock_label"), "html", null, true);
                echo "
                    </td>
                ";
            }
            // line 188
            echo "            </tr>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "    </tbody>
</table>
";
        // line 193
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 193, $this->source); })()), "totalItemCount", [], "any", false, false, false, 193) > 0)) {
            // line 194
            echo "    <div id=\"product_pagination\" class=\"row justify-content-md-center mb-4\">
        ";
            // line 195
            $this->loadTemplate("@admin/pager.twig", "@admin/Order/search_product.twig", 195)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 195, $this->source); })()), "paginationData", [], "any", false, false, false, 195), "routes" => "admin_order_search_product_page"]));
            // line 196
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Order/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 196,  357 => 195,  354 => 194,  352 => 193,  348 => 191,  340 => 188,  334 => 185,  331 => 184,  319 => 179,  316 => 178,  314 => 177,  311 => 176,  304 => 172,  299 => 170,  296 => 169,  293 => 168,  286 => 164,  281 => 162,  278 => 161,  276 => 160,  271 => 157,  265 => 155,  257 => 153,  255 => 152,  250 => 150,  244 => 147,  240 => 145,  238 => 144,  233 => 143,  229 => 142,  221 => 137,  217 => 136,  213 => 135,  154 => 79,  141 => 69,  87 => 17,  73 => 16,  65 => 15,  48 => 14,  43 => 11,);
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
<script>
    // 商品規格情報. 規格2のプルダウンリストの設定に利用する,
    var productsClassCategories = {
        {% for Product in pagination %}
        \"{{ Product.id|escape('js') }}\": {{ class_categories_as_json(Product, false)|raw }}{% if loop.last == false %}, {% endif %}
        {% endfor %}
    };

    // 規格1が選択された際に, 規格2のプルダウンリストを設定する,
    function fnSetClassCategory2(select, product_id) {
        // 規格1の要素を取得
        var \$sele1 = \$(select);
        // 規格2の要素を取得
        var \$sele2 = \$sele1.parents(\".align-middle\").find('select[name=classcategory_id2]');

        // 規格1の選択肢
        var classcat_id1 = \$sele1.val() ? \$sele1.val() : '';

        // 規格2がある場合は選択肢を書き換える
        if (\$sele2 && \$sele2.length) {
            // 規格2の選択肢をクリア
            \$sele2.children().remove();
            var classcat2 = productsClassCategories[product_id][classcat_id1];

            // 規格2の要素を設定
            for (var key in classcat2) {
                if (classcat2.hasOwnProperty(key)) {
                    var id = classcat2[key].classcategory_id2;
                    var name = classcat2[key].name;
                    var option = \$('<option />').val(id ? id : '').text(name);
                    \$sele2.append(option);
                }
            }
        }
    }

    // 受注明細行を追加する.
    function fnAddOrderItem(\$row, product_id, type, product_name) {
        // 規格1の要素を取得
        var \$sele1 = \$row.find('select[name=classcategory_id1]');
        // 規格2の要素を取得
        var \$sele2 = \$row.find('select[name=classcategory_id2]');

        var product_class_id = null;
        var price = 0;
        var quantity = 1;

        // 規格なし商品の場合
        if (!\$sele1.length && !\$sele2.length) {
            var product = productsClassCategories[product_id]['__unselected2']['#'];
            product_class_id = product['product_class_id'];
            price = product['price02'];
            // 規格が登録されている商品の場合
        } else if (\$sele1.length) {
            if (\$sele2.length) {
                var class_category_id1 = \$sele1.val();
                var class_cateogry_id2 = \$sele2.val();
                if (class_category_id1 == '__unselected' || !class_cateogry_id2) {
                    alert('{{'admin.product.unselected_class'|trans}}');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#' + class_cateogry_id2];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            } else {
                var class_category_id1 = \$sele1.val();
                if (class_category_id1 == '__unselected') {
                    alert('{{ 'admin.product.unselected_class'|trans }}');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#'];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            }
        }

        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        \$collectionHolder.children('tbody').append(newForm);
        var \$lastRow = \$collectionHolder.children('tbody').children('tr').last();

        \$(\$lastRow).find(formIdPrefix + index + '_ProductClass').val(product_class_id);
        \$(\$lastRow).find(formIdPrefix + index + '_price').val(price);
        \$(\$lastRow).find(formIdPrefix + index + '_quantity').val(quantity);
        \$(\$lastRow).find(formIdPrefix + index + '_order_item_type').val(type);
        \$(\$lastRow).find(formIdPrefix + index + '_product_name').val(product_name);

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }

    // 商品検索
    \$('#product_pagination a').on('click', function(event) {
        if (!\$(this).parent().is('.active')) {
            var list = \$('#searchProductModalList');
            list.children().remove();

            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchProductModalList').html(data);
            }).fail(function(data) {
                alert('search product failed.');
            });
        }

        event.preventDefault();
    });
</script>


<table class=\"table table-striped table-sm mb-3\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 pl-3\">{{ 'admin.product.product_id'|trans }}</th>
        <th class=\"pt-2 pb-2 pl-3\">{{ 'admin.product.product_name_and_code'|trans }}</th>
        <th class=\"pt-2 pb-2\">{{ 'admin.product.product_class__short'|trans }}</th>
        <th class=\"pt-2 pb-2 pr-3\"></th>
    </tr>
    </thead>
    <tbody>
    {% for Product in pagination %}
        <form name=\"product_form{{ Product.id }}\">
            {% set form = forms[Product.id] %}
            <tr>
                <td class=\"align-middle pl-3\">
                    {{ Product.id }}
                </td>
                <td class=\"align-middle pl-3\">
                    <p class=\"m-0\"> {{ Product.name }}</p>
                    <span>
                        {% if Product.hasProductClass %}
                            {{ Product.code_min }}～{{ Product.code_max }}
                        {% else %}
                            {{ Product.code_min }}
                        {% endif %}
                    </span>
                </td>
                <td class=\"align-middle\">
                    {% if form.classcategory_id1 is defined %}
                        <div class=\"row mb-2\">
                            <div class=\"col-4 pr-0\"><span>{{ form_label(form.classcategory_id1) }}</span></div>
                            <div class=\"col-8 text-left pl-0\">
                                {{ form_widget(form.classcategory_id1, { attr : { 'onchange' : \"fnSetClassCategory2(this,\" ~ Product.id ~ \")\" } } ) }}
                            </div>
                        </div>
                    {% endif %}
                    {% if form.classcategory_id2 is defined %}
                        <div class=\"row\">
                            <div class=\"col-4 pr-0\"><span>{{ form_label(form.classcategory_id2) }}</span></div>
                            <div class=\"col-8 text-left pl-0\">
                                {{ form_widget(form.classcategory_id2, {'id': ''}) }}
                            </div>
                        </div>
                    {% endif %}
                </td>
                {% if Product.stock_find %}
                    <td class=\"align-middle pr-3 text-right\">
                        <button type=\"button\" class=\"btn btn-ec-actionIcon\" onclick=\"fnAddOrderItem(\$(this).parent().parent(), {{ Product.id }}, {{ constant('Eccube\\\\Entity\\\\Master\\\\OrderItemType::PRODUCT') }}, '{{ Product.name|escape('js') }}')\" name=\"mode\" value=\"modal\">
                            <i class=\"fa fa-plus fa-lg font-weight-bold text-secondary\"></i>
                        </button>
                    </td>
                {% else %}
                    <td class=\"align-middle pr-3 text-right\">
                        {{ 'front.product.out_of_stock_label'|trans }}
                    </td>
                {% endif %}
            </tr>
        </form>
    {% endfor %}
    </tbody>
</table>
{% if pagination.totalItemCount > 0 %}
    <div id=\"product_pagination\" class=\"row justify-content-md-center mb-4\">
        {% include \"@admin/pager.twig\" with {'pages': pagination.paginationData, 'routes': 'admin_order_search_product_page'} %}
    </div>
{% endif %}
", "@admin/Order/search_product.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Order/search_product.twig");
    }
}
