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

/* @ProductOption/default/Product/option_js.twig */
class __TwigTemplate_e7b65a7535db2c6cae3f0d5738a24ce70ece90bbb233159ce041284352810a9b extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/default/Product/option_js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/default/Product/option_js.twig"));

        // line 10
        echo "
";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 24
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
        echo "<style type=\"text/css\">
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

    // line 24
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 25
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../../plugin/ProductOption/assets/js/jquery.plainmodal.min.js"), "html", null, true);
        echo "\"></script>
<script>
\$(function() {
    //デフォルトのデイトタイムピッカーが存在しない場合
    if (\$('[type=\"date\"]').prop('type') !== 'date') {
        \$.getScript(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\").done(function() {
            \$.getScript(\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\").done(function() {
                \$.getScript(\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\").done(function() {
                    \$('input[type=date]').datetimepicker({
                        locale: '";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 34, $this->source); })()), "locale", [], "any", false, false, false, 34), "html", null, true);
        echo "',
                        format: 'YYYY-MM-DD',
                        useCurrent: false,
                        buttons: {
                            showToday: true,
                            showClose: true
                        }
                    });
                });
            });
        });
    }
});

var product_id;
\$(function() {
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ProductOptions"]) || array_key_exists("ProductOptions", $context) ? $context["ProductOptions"] : (function () { throw new RuntimeError('Variable "ProductOptions" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductOption"]) {
            // line 51
            echo "    ";
            $context["Option"] = twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Option", [], "any", false, false, false, 51);
            // line 52
            echo "    ";
            $context["Product"] = twig_get_attribute($this->env, $this->source, $context["ProductOption"], "Product", [], "any", false, false, false, 52);
            // line 53
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 53, $this->source); })()), "description_flg", [], "any", false, false, false, 53) == twig_constant("Plugin\\ProductOption\\Entity\\OptionCategory::ON"))) {
                // line 54
                echo "            modal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
                echo " = \$('#option_description_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
                echo "').plainModal();
            \$('#option_description_link_";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
                echo "').click(function() {
                modal";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
                echo ".plainModal('open');
                product_id = \$(this).attr('data');
                return false;
            });
        ";
            }
            // line 61
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "});

\$(function() {
    \$(\"[id^=desc_btn_]\").click(function(){
        var form_id;
        var id = \$(this).attr('id').replace(/^desc_btn_/ig, '');
        var ids = id.split('_');
        if (eccube.hasOwnProperty('productsClassCategories')) {
            form_id = product_id;
        }else{
            form_id = 1;
        }
        var \$form = \$(\"form[name=form\"+form_id+\"]\");
        func_submit(\$form,ids[0],ids[1]);
        onOptionChange(\$form)
    });
    \$(\"[name^=productoption]\").change(function(){
        \$form = \$(this).parents('form');
        onOptionChange(\$form);
    });
});

function func_submit(\$form,optionId, setValue) {
    var \$sele_option = \$form.find(\"[name=productoption\" + optionId + \"]\");
    if(\$sele_option && \$sele_option.length){
        var kind = \$sele_option.attr(\"type\");
        if(kind == 'radio'){
            \$sele_option.val([setValue]);
        }else{
            \$sele_option.val(setValue);
        }
    }else{
        var \$sele_option = \$form.find('[name=\"productoption' + optionId + '[]\"]');
        if(\$sele_option && \$sele_option.length){
            \$sele_option.each(function(){
                if(\$(this).val() == setValue){
                    \$(this).prop('checked',true);
                }
            });
        }
    }

    \$('#option_description_' + product_id + '_' + optionId).plainModal('close');
}


var optionPrice = ";
        // line 108
        echo json_encode((isset($context["optionPrices"]) || array_key_exists("optionPrices", $context) ? $context["optionPrices"] : (function () { throw new RuntimeError('Variable "optionPrices" does not exist.', 108, $this->source); })()));
        echo ";
var optionPoint = ";
        // line 109
        echo json_encode((isset($context["optionPoints"]) || array_key_exists("optionPoints", $context) ? $context["optionPoints"] : (function () { throw new RuntimeError('Variable "optionPoints" does not exist.', 109, $this->source); })()));
        echo ";
var optionMultiple = ";
        // line 110
        echo json_encode((isset($context["optionMultiples"]) || array_key_exists("optionMultiples", $context) ? $context["optionMultiples"] : (function () { throw new RuntimeError('Variable "optionMultiples" does not exist.', 110, $this->source); })()));
        echo ";
var taxRules = ";
        // line 111
        echo json_encode((isset($context["taxRules"]) || array_key_exists("taxRules", $context) ? $context["taxRules"] : (function () { throw new RuntimeError('Variable "taxRules" does not exist.', 111, $this->source); })()));
        echo ";
var default_class_id = ";
        // line 112
        echo json_encode((isset($context["default_class_id"]) || array_key_exists("default_class_id", $context) ? $context["default_class_id"] : (function () { throw new RuntimeError('Variable "default_class_id" does not exist.', 112, $this->source); })()));
        echo ";

function onOptionChange(\$form){
    var optionPriceTotal = 0;
    var optionPointTotal = 0;
    var tax_rate = null;
    var tax_rule = null;
    var product_id = \$form.find('input[name=\"product_id\"]').val();
    var \$sele1 = \$form.find('select[name=classcategory_id1]');
    var \$sele2 = \$form.find('select[name=classcategory_id2]');

    var classcat_id1 = \$sele1.val() ? \$sele1.val() : '__unselected';
    var classcat_id2 = \$sele2.val() ? \$sele2.val() : '';
    if (eccube.hasOwnProperty('productsClassCategories')) {
        // 商品一覧時
        classcat2 = eccube.productsClassCategories[product_id][classcat_id1]['#' + classcat_id2];
    } else {
        // 詳細表示時
        classcat2 = eccube.classCategories[classcat_id1]['#' + classcat_id2];
    }
    \$form.find(\"[id^=productoption]\").each(function(){
        var id = \$(this).prop(\"id\");
        var name = \$(this).attr(\"name\");
        var option_id = null;
        if(name === undefined){
            name = \$(this).find(\"input\").prop(\"id\");
        }
        option_id = name.replace(/productoption/ig,'');
        option_id = option_id.replace(/_\\d+/ig,'');
        option_id = option_id.replace(/\\[\\]/ig,'');
        if(id.match(/^productoption\\d+\$/)){
            var kind = \$(this).prop('tagName');
            var type = \$(this).attr('type');
            var value = null;
            var multi = 1;
            switch(kind){
                case 'SELECT':
                    value = \$(this).val();
                    break;
                case 'TEXTAREA':
                case 'INPUT':
                    var text = \$(this).val();
                    if(text.length > 0){
                        value = 0;
                    }
                    if(type == 'number'){
                        if(optionMultiple[product_id][option_id]){
                            multi = \$(this).val();
                            if(multi.length == 0)multi = 0;
                        }
                    }
                    break;
                default:
                    if(\$(this).find('input[type=\"checkbox\"]').length > 0){
                        value = [];
                        \$(this).find('input[type=\"checkbox\"]:checked').each(function(){
                            value.push(\$(this).val());
                        });
                    }else{
                        value = \$form.find(\"input[name='productoption\" + option_id + \"']:checked\").val();
                    }
                    break;
            }
            if(value != null){
                if(Array.isArray(value)){
                    for(var key in value){
                        optionPriceTotal += parseFloat(optionPrice[product_id][option_id][value[key]]);
                        optionPointTotal += parseFloat(optionPoint[product_id][option_id][value[key]]);
                    }
                }else{
                    optionPriceTotal += parseFloat(optionPrice[product_id][option_id][value]*multi);
                    optionPointTotal += parseFloat(optionPoint[product_id][option_id][value]*multi);
                }
            }
        }
    });

    if(classcat2){
        var product_class_id = classcat2.product_class_id;
    }else{
        var product_class_id = default_class_id[product_id];
    }

    var tax_rate = taxRules[product_class_id]['tax_rate'];
    var tax_rule = taxRules[product_class_id]['tax_rule'];

    var \$option_price = \$form.parent().find('#option_price_default').first();
    \$option_price.text(number_format(optionPriceTotal));
    var \$option_point = \$form.parent().find('#option_price_inctax_default').first();
    \$option_point.text(number_format(optionPriceTotal + sfTax(optionPriceTotal, tax_rate, tax_rule)));
}

function number_format(num) {
    return num.toString().replace(/([0-9]+?)(?=(?:[0-9]{3})+\$)/g , '\$1,');
}

function sfTax(price, tax_rate, tax_rule) {
    real_tax = tax_rate / 100;
    ret = price * real_tax;
    tax_rule = parseInt(tax_rule);
    switch (tax_rule) {
        // 四捨五入
        case ";
        // line 214
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\RoundingType::ROUND"), "html", null, true);
        echo ":
            \$ret = Math.round(ret);
            break;
        // 切り捨て
        case ";
        // line 218
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\RoundingType::FLOOR"), "html", null, true);
        echo ":
            \$ret = Math.floor(ret);
            break;
        // 切り上げ
        case ";
        // line 222
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\RoundingType::CEIL"), "html", null, true);
        echo ":
            \$ret = Math.ceil(ret);
            break;
        // デフォルト:切り上げ
        default:
            \$ret = Math.round(ret);
            break;
    }
    return \$ret;
}

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/default/Product/option_js.twig";
    }

    public function getDebugInfo()
    {
        return array (  371 => 222,  364 => 218,  357 => 214,  252 => 112,  248 => 111,  244 => 110,  240 => 109,  236 => 108,  188 => 62,  182 => 61,  172 => 56,  166 => 55,  155 => 54,  152 => 53,  149 => 52,  146 => 51,  142 => 50,  123 => 34,  118 => 32,  114 => 31,  110 => 30,  101 => 25,  91 => 24,  70 => 12,  60 => 11,  50 => 24,  48 => 11,  45 => 10,);
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
<script src=\"{{ asset('../../plugin/ProductOption/assets/js/jquery.plainmodal.min.js') }}\"></script>
<script>
\$(function() {
    //デフォルトのデイトタイムピッカーが存在しない場合
    if (\$('[type=\"date\"]').prop('type') !== 'date') {
        \$.getScript(\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\").done(function() {
            \$.getScript(\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\").done(function() {
                \$.getScript(\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\").done(function() {
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
            });
        });
    }
});

var product_id;
\$(function() {
    {% for ProductOption in ProductOptions %}
    {% set Option = ProductOption.Option %}
    {% set Product = ProductOption.Product %}
        {% if Option.description_flg == constant('Plugin\\\\ProductOption\\\\Entity\\\\OptionCategory::ON') %}
            modal{{ Product.id }}_{{ Option.id }} = \$('#option_description_{{ Product.id }}_{{ Option.id }}').plainModal();
            \$('#option_description_link_{{ Product.id }}_{{ Option.id }}').click(function() {
                modal{{ Product.id }}_{{ Option.id }}.plainModal('open');
                product_id = \$(this).attr('data');
                return false;
            });
        {% endif %}
    {% endfor %}
});

\$(function() {
    \$(\"[id^=desc_btn_]\").click(function(){
        var form_id;
        var id = \$(this).attr('id').replace(/^desc_btn_/ig, '');
        var ids = id.split('_');
        if (eccube.hasOwnProperty('productsClassCategories')) {
            form_id = product_id;
        }else{
            form_id = 1;
        }
        var \$form = \$(\"form[name=form\"+form_id+\"]\");
        func_submit(\$form,ids[0],ids[1]);
        onOptionChange(\$form)
    });
    \$(\"[name^=productoption]\").change(function(){
        \$form = \$(this).parents('form');
        onOptionChange(\$form);
    });
});

function func_submit(\$form,optionId, setValue) {
    var \$sele_option = \$form.find(\"[name=productoption\" + optionId + \"]\");
    if(\$sele_option && \$sele_option.length){
        var kind = \$sele_option.attr(\"type\");
        if(kind == 'radio'){
            \$sele_option.val([setValue]);
        }else{
            \$sele_option.val(setValue);
        }
    }else{
        var \$sele_option = \$form.find('[name=\"productoption' + optionId + '[]\"]');
        if(\$sele_option && \$sele_option.length){
            \$sele_option.each(function(){
                if(\$(this).val() == setValue){
                    \$(this).prop('checked',true);
                }
            });
        }
    }

    \$('#option_description_' + product_id + '_' + optionId).plainModal('close');
}


var optionPrice = {{ optionPrices|json_encode|raw }};
var optionPoint = {{ optionPoints|json_encode|raw }};
var optionMultiple = {{ optionMultiples|json_encode|raw }};
var taxRules = {{ taxRules|json_encode|raw }};
var default_class_id = {{ default_class_id|json_encode|raw }};

function onOptionChange(\$form){
    var optionPriceTotal = 0;
    var optionPointTotal = 0;
    var tax_rate = null;
    var tax_rule = null;
    var product_id = \$form.find('input[name=\"product_id\"]').val();
    var \$sele1 = \$form.find('select[name=classcategory_id1]');
    var \$sele2 = \$form.find('select[name=classcategory_id2]');

    var classcat_id1 = \$sele1.val() ? \$sele1.val() : '__unselected';
    var classcat_id2 = \$sele2.val() ? \$sele2.val() : '';
    if (eccube.hasOwnProperty('productsClassCategories')) {
        // 商品一覧時
        classcat2 = eccube.productsClassCategories[product_id][classcat_id1]['#' + classcat_id2];
    } else {
        // 詳細表示時
        classcat2 = eccube.classCategories[classcat_id1]['#' + classcat_id2];
    }
    \$form.find(\"[id^=productoption]\").each(function(){
        var id = \$(this).prop(\"id\");
        var name = \$(this).attr(\"name\");
        var option_id = null;
        if(name === undefined){
            name = \$(this).find(\"input\").prop(\"id\");
        }
        option_id = name.replace(/productoption/ig,'');
        option_id = option_id.replace(/_\\d+/ig,'');
        option_id = option_id.replace(/\\[\\]/ig,'');
        if(id.match(/^productoption\\d+\$/)){
            var kind = \$(this).prop('tagName');
            var type = \$(this).attr('type');
            var value = null;
            var multi = 1;
            switch(kind){
                case 'SELECT':
                    value = \$(this).val();
                    break;
                case 'TEXTAREA':
                case 'INPUT':
                    var text = \$(this).val();
                    if(text.length > 0){
                        value = 0;
                    }
                    if(type == 'number'){
                        if(optionMultiple[product_id][option_id]){
                            multi = \$(this).val();
                            if(multi.length == 0)multi = 0;
                        }
                    }
                    break;
                default:
                    if(\$(this).find('input[type=\"checkbox\"]').length > 0){
                        value = [];
                        \$(this).find('input[type=\"checkbox\"]:checked').each(function(){
                            value.push(\$(this).val());
                        });
                    }else{
                        value = \$form.find(\"input[name='productoption\" + option_id + \"']:checked\").val();
                    }
                    break;
            }
            if(value != null){
                if(Array.isArray(value)){
                    for(var key in value){
                        optionPriceTotal += parseFloat(optionPrice[product_id][option_id][value[key]]);
                        optionPointTotal += parseFloat(optionPoint[product_id][option_id][value[key]]);
                    }
                }else{
                    optionPriceTotal += parseFloat(optionPrice[product_id][option_id][value]*multi);
                    optionPointTotal += parseFloat(optionPoint[product_id][option_id][value]*multi);
                }
            }
        }
    });

    if(classcat2){
        var product_class_id = classcat2.product_class_id;
    }else{
        var product_class_id = default_class_id[product_id];
    }

    var tax_rate = taxRules[product_class_id]['tax_rate'];
    var tax_rule = taxRules[product_class_id]['tax_rule'];

    var \$option_price = \$form.parent().find('#option_price_default').first();
    \$option_price.text(number_format(optionPriceTotal));
    var \$option_point = \$form.parent().find('#option_price_inctax_default').first();
    \$option_point.text(number_format(optionPriceTotal + sfTax(optionPriceTotal, tax_rate, tax_rule)));
}

function number_format(num) {
    return num.toString().replace(/([0-9]+?)(?=(?:[0-9]{3})+\$)/g , '\$1,');
}

function sfTax(price, tax_rate, tax_rule) {
    real_tax = tax_rate / 100;
    ret = price * real_tax;
    tax_rule = parseInt(tax_rule);
    switch (tax_rule) {
        // 四捨五入
        case {{ constant('Eccube\\\\Entity\\\\Master\\\\RoundingType::ROUND') }}:
            \$ret = Math.round(ret);
            break;
        // 切り捨て
        case {{ constant('Eccube\\\\Entity\\\\Master\\\\RoundingType::FLOOR') }}:
            \$ret = Math.floor(ret);
            break;
        // 切り上げ
        case {{ constant('Eccube\\\\Entity\\\\Master\\\\RoundingType::CEIL') }}:
            \$ret = Math.ceil(ret);
            break;
        // デフォルト:切り上げ
        default:
            \$ret = Math.round(ret);
            break;
    }
    return \$ret;
}

</script>
{% endblock %}", "@ProductOption/default/Product/option_js.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/default/Product/option_js.twig");
    }
}
