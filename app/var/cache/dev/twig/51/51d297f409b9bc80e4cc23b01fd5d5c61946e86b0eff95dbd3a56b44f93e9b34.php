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

/* @ProductOption/admin/Order/search_product_js.twig */
class __TwigTemplate_a1f4ee931c2bf36c68e1581e49f45fa63a52aa0070def6eda157acbbd34fb617 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Order/search_product_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Order/search_product_js.twig"));

        // line 10
        echo "
";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 25
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tempusdominus-bootstrap-4.min.css", "admin"), "html", null, true);
        echo "\">
<style type=\"text/css\">
    .datepicker-days th.dow:first-child,
    .datepicker-days td:first-child {
        color: #f00;
    }

    .datepicker-days th.dow:last-child,
    .datepicker-days td:last-child {
        color: #00f;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 26
        echo "<script>
    \$(function() {
        if (\$('[type=\"date\"]').prop('type') != 'date' && \$('[type=\"date\"]').prop('name').match(/productoption\\d+/) != null) {
            // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
            \$.when(
                \$.getScript(\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
                \$.getScript(\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
                \$.getScript(\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
            ).done(function() {
                \$('input[type=date]').datetimepicker({
                    locale: '";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 36, $this->source); })()), "locale", [], "any", false, false, false, 36), "html", null, true);
        echo "',
                    format: 'YYYY-MM-DD',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    }
                });
            });
        }
    });

    optionPrices = ";
        // line 48
        echo json_encode((isset($context["optionPrices"]) || array_key_exists("optionPrices", $context) ? $context["optionPrices"] : (function () { throw new RuntimeError('Variable "optionPrices" does not exist.', 48, $this->source); })()));
        echo ";
    optionMultiples = ";
        // line 49
        echo json_encode((isset($context["optionMultiples"]) || array_key_exists("optionMultiples", $context) ? $context["optionMultiples"] : (function () { throw new RuntimeError('Variable "optionMultiples" does not exist.', 49, $this->source); })()));
        echo ";
    optionDefaults = ";
        // line 50
        echo json_encode((isset($context["optionDefaults"]) || array_key_exists("optionDefaults", $context) ? $context["optionDefaults"] : (function () { throw new RuntimeError('Variable "optionDefaults" does not exist.', 50, $this->source); })()));
        echo ";
    // 受注明細行を追加する.
    function fnAddOrderItemOption(\$row, product_id, type, product_name) {
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
        // line 73
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
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.unselected_class"), "html", null, true);
        echo "');
                    return;
                }
                var product = productsClassCategories[product_id][class_category_id1]['#'];

                product_class_id = product['product_class_id'];
                price = product['price02'];
            }
        }

        // オプション情報の取得
        var option_id = null;
        var options = {};

        price = parseFloat(price.replace(/,/g,''));
        \$form = \$(\"form[name=product_form\"+product_id+\"]\");
        \$form.next().find(\"[name^=productoption]\").each(function(){
            var option_id = \$(this).attr('name').replace(/productoption/ig,'');
            var id = \$(this).prop(\"id\");
            if(id.match(/^productoption\\d[\\d_]*\\d\$/)){
                var type = \$(this).attr('type');
                var kind = \$(this).prop('tagName');
                var value = null;
                if(type == 'radio'){
                    if(\$(this).prop('checked')){
                        value = parseFloat(\$(this).val());
                        if(!optionDefaults[product_id][option_id][value])options[option_id] = value;
                        price += parseFloat(optionPrices[product_id][option_id][value]);
                    }
                }else if(type == 'checkbox'){
                    option_id = option_id.replace('[]','');
                    if(\$(this).prop('checked')){
                        if(options[option_id] == undefined){
                            options[option_id] = [];
                        }
                        value = parseFloat(\$(this).val());
                        options[option_id].push(value);
                        price += parseFloat(optionPrices[product_id][option_id][value]);
                    }
                }else{
                    value = \$(this).val();
                    if(value.length > 0){
                        var kind = \$(this).prop('tagName');
                        if(kind == 'SELECT'){
                            if(!optionDefaults[product_id][option_id][value])options[option_id] = value;
                            price += parseFloat(optionPrices[product_id][option_id][value]);
                        }else{
                            var multi = 1;
                            if(type == 'number'){
                                if(optionMultiples[product_id][option_id]){
                                    multi = parseFloat(value);
                                }
                            }
                            price += parseFloat(optionPrices[product_id][option_id][0]*multi);
                            options[option_id] = value;
                        }
                    }
                }
            }
        });

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
        \$(\$lastRow).find(formIdPrefix + index + '_option_serial').val(JSON.stringify(options));

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Order/search_product_js.twig";
    }

    public function getDebugInfo()
    {
        return array (  187 => 83,  174 => 73,  148 => 50,  144 => 49,  140 => 48,  125 => 36,  119 => 33,  115 => 32,  111 => 31,  104 => 26,  94 => 25,  70 => 12,  60 => 11,  50 => 25,  48 => 11,  45 => 10,);
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

{% block css %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/tempusdominus-bootstrap-4.min.css', 'admin') }}\">
<style type=\"text/css\">
    .datepicker-days th.dow:first-child,
    .datepicker-days td:first-child {
        color: #f00;
    }

    .datepicker-days th.dow:last-child,
    .datepicker-days td:last-child {
        color: #00f;
    }
</style>
{% endblock %}
{% block javascript %}
<script>
    \$(function() {
        if (\$('[type=\"date\"]').prop('type') != 'date' && \$('[type=\"date\"]').prop('name').match(/productoption\\d+/) != null) {
            // input type属性でdateが利用できるかどうか(カレンダー表示できないブラウザ対応)
            \$.when(
                \$.getScript(\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\"),
                \$.getScript(\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\"),
                \$.getScript(\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\")
            ).done(function() {
                \$('input[type=date]').datetimepicker({
                    locale: '{{ eccube_config.locale }}',
                    format: 'YYYY-MM-DD',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    }
                });
            });
        }
    });

    optionPrices = {{ optionPrices|json_encode|raw }};
    optionMultiples = {{ optionMultiples|json_encode|raw }};
    optionDefaults = {{ optionDefaults|json_encode|raw }};
    // 受注明細行を追加する.
    function fnAddOrderItemOption(\$row, product_id, type, product_name) {
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

        // オプション情報の取得
        var option_id = null;
        var options = {};

        price = parseFloat(price.replace(/,/g,''));
        \$form = \$(\"form[name=product_form\"+product_id+\"]\");
        \$form.next().find(\"[name^=productoption]\").each(function(){
            var option_id = \$(this).attr('name').replace(/productoption/ig,'');
            var id = \$(this).prop(\"id\");
            if(id.match(/^productoption\\d[\\d_]*\\d\$/)){
                var type = \$(this).attr('type');
                var kind = \$(this).prop('tagName');
                var value = null;
                if(type == 'radio'){
                    if(\$(this).prop('checked')){
                        value = parseFloat(\$(this).val());
                        if(!optionDefaults[product_id][option_id][value])options[option_id] = value;
                        price += parseFloat(optionPrices[product_id][option_id][value]);
                    }
                }else if(type == 'checkbox'){
                    option_id = option_id.replace('[]','');
                    if(\$(this).prop('checked')){
                        if(options[option_id] == undefined){
                            options[option_id] = [];
                        }
                        value = parseFloat(\$(this).val());
                        options[option_id].push(value);
                        price += parseFloat(optionPrices[product_id][option_id][value]);
                    }
                }else{
                    value = \$(this).val();
                    if(value.length > 0){
                        var kind = \$(this).prop('tagName');
                        if(kind == 'SELECT'){
                            if(!optionDefaults[product_id][option_id][value])options[option_id] = value;
                            price += parseFloat(optionPrices[product_id][option_id][value]);
                        }else{
                            var multi = 1;
                            if(type == 'number'){
                                if(optionMultiples[product_id][option_id]){
                                    multi = parseFloat(value);
                                }
                            }
                            price += parseFloat(optionPrices[product_id][option_id][0]*multi);
                            options[option_id] = value;
                        }
                    }
                }
            }
        });

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
        \$(\$lastRow).find(formIdPrefix + index + '_option_serial').val(JSON.stringify(options));

        // モーダル閉じる.
        \$('#searchProductModal').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }
</script>
{% endblock %}", "@ProductOption/admin/Order/search_product_js.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Order/search_product_js.twig");
    }
}
