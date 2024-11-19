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

/* Shopping/index.twig */
class __TwigTemplate_7404e70a565fdceb9fcf82ca709a71d7308e80e3fe64886d7ef07e3e6032acda extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/index.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    <script>
        \$(function() {
            textShainFlg();
            
            var \$redirectCallback = function() {
                loadingOverlay();
                \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
                \$('#shopping-form').attr('action', '";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_redirect_to");
        echo "').submit();
                setTimeout(function () {
                    loadingOverlay(\"hide\");
                }, 2000);
            };
            \$('[data-trigger]').each(function() {
                \$(this).on(\$(this).attr('data-trigger'), \$redirectCallback);
            });

            ";
        // line 32
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 33
            echo "            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');
            var form = \$('.customer-form');

            \$('#customer').click(function() {
                \$(edit).each(function(index) {
                    //alert('hidden'+index+':'+\$(hidden[index]).attr('name'));
                    var shainFlgName = \$(hidden[index]).attr('name');
                    if(shainFlgName == 'customer_shain_flg') {
                        //var shainFlgVal = \$(this).val();
                        var wChecked = ( \$(this).text() == 1 ? 'checked' : '' ) ;
                        //alert('customer_shain_flg:'+\$(this).text()+' wChecked:'+wChecked);
                        var input = \$('<input id=\"edit' + index + '\" type=\"checkbox\" '+wChecked+' />').val(1);
                        \$(form[index]).empty().append(input);
                    } else {
                        var name = \$(this).text();
                        var input = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name);
                        \$(form[index]).empty().append(input);
                    }
                });

                \$('.non-customer-display').hide();
                \$('.non-customer-edit').show();
                \$('.mod-button').show();
            });

            \$('#customer-ok').click(function() {
                \$(form).each(function(index) {
                    var shainFlgName = \$(hidden[index]).attr('name');
                    if(shainFlgName == 'customer_shain_flg') {
                        if ( \$(form[index]).children('input').prop('checked') ) {
                            \$(hidden[index]).val('1');
                        } else {
                            \$(hidden[index]).val('0');
                        }
                        \$(form[index]).children('input').val(\$(hidden[index]).val());
                        //alert('val:'+index+':'+\$(hidden[index]).val());
                    } else {
                        \$(hidden[index]).val(\$(form[index]).children('input').val());
                        //alert('val:'+index+':'+\$(form[index]).children('input').val());
                    }
                });
                //\$('#customer-name01').val(\$('#customer-kana01').val());
                //\$('#customer-name02').val(\$('#customer-kana02').val());
                var postData = {};
                \$(hidden).each(function() {
                    postData[\$(this).attr('name')] = \$(this).val();
                });

                loadingOverlay();
                console.log(postData);

                \$.ajax({
                    url: \"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_customer");
            echo "\",
                    type: 'POST',
                    data: postData,
                    dataType: 'json'
                }).done(function(data) {
                    console.log(data);
                    if (data.status == 'OK') {
                        \$(form).each(function(index) {
                            \$(edit[index]).empty().text(\$(form[index]).children('input').val());
                            \$(form[index]).empty();
                        });

                        // kana field
                        \$(edit[2]).empty().text(data.kana01);
                        \$(edit[3]).empty().text(data.kana02);
                        \$('#customer-kana01').val(data.kana01);
                        \$('#customer-kana02').val(data.kana02);
                    }

                    textShainFlg();
                    \$('.non-customer-display').show();
                    \$('.non-customer-edit').hide();
                    \$('.mod-button').hide();

                }).fail(function(data) {
                    //console.log(data);
                    alert('更新に失敗しました。入力内容を確認してください。');
                    return false;
                }).always(function(data) {
                    // overlayを無効
                    loadingOverlay('hide');
                });

                /*
                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
                */
            });

            \$('#customer-cancel').click(function() {
                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });
            ";
        }
        // line 132
        echo "        });

        function textShainFlg() {
            let customerShainFlg = \$('#customer-shain_flg').val();
            if(customerShainFlg == 1) {
                \$('#customer-shain').text('社員');
            } else {
                \$('#customer-shain').text('一般');
            }
        }
    </script>

    <style>
    dl.hiddenItem {
        display: none !important;
    }
    .hiddenItem {
        display: none !important;
    }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 155
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 165
        $context["step"] = 1;
        // line 166
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 167, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 167, $this->source); })()) + 1);
        // line 168
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 172
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 173
            echo "                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 174, $this->source); })()), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 174, $this->source); })()) + 1);
            // line 175
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 180
        echo "                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 181, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 181, $this->source); })()) + 1);
        // line 182
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 187, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 187, $this->source); })()) + 1);
        // line 188
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 193, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 193, $this->source); })()) + 1);
        // line 194
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>

        <!-- アラートメッセージ -->
        ";
        // line 202
        echo twig_include($this->env, $context, "Shopping/alert.twig");
        echo "
    </div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_confirm");
        echo "\">
        ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "_token", [], "any", false, false, false, 206), 'widget');
        echo "
        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "redirect_to", [], "any", false, false, false, 207), 'widget');
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderAccount\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 214
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 215
            echo "                        <div class=\"ec-orderAccount__change non-customer-display\">
                            <button id=\"customer\" class=\"ec-inlineBtn\" type=\"button\">";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
            echo "</button>
                        </div>
                    ";
        }
        // line 219
        echo "                    <div class=\"ec-orderAccount__account non-customer-display\">
                        <p class=\"ec-halfInput\">お名前（漢字）：<span class=\"customer-edit customer-name01\">";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 220, $this->source); })()), "name01", [], "any", false, false, false, 220), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 220, $this->source); })()), "name02", [], "any", false, false, false, 220), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                        <p class=\"ec-halfInput\">お名前（カナ）：<span class=\"customer-edit customer-kana01\">";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 221, $this->source); })()), "kana01", [], "any", false, false, false, 221), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-kana02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 221, $this->source); })()), "kana02", [], "any", false, false, false, 221), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                        ";
        // line 223
        echo "                        <p class=\"ec-input\">受　取　方　法：<span class=\"customer-edit customer-uketori\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 223, $this->source); })()), "uketori", [], "any", false, false, false, 223), "html", null, true);
        echo "</p>
                        ";
        // line 225
        echo "                        <p class=\"ec-input\">来　店　受　取　日：<span class=\"customer-edit customer-Ukedate\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 225, $this->source); })()), "Ukedate", [], "any", false, false, false, 225), "Y年m月d日"), "html", null, true);
        echo "</p>
                        <p class=\"ec-input\">来　店　時　間：<span class=\"customer-edit customer-visit_t\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 226, $this->source); })()), "visit_t", [], "any", false, false, false, 226), "html", null, true);
        echo "</p>
                        ";
        // line 227
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 227, $this->source); })()), "uketori", [], "any", false, false, false, 227) != "店頭受取")) {
            // line 228
            echo "                        <p class=\"ec-input\">お届け先 郵便番号：<span class=\"customer-edit customer-h_postal_code\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 228, $this->source); })()), "h_postal_code", [], "any", false, false, false, 228), "html", null, true);
            echo "</p>
                        <p class=\"ec-input\">お届け先 住所：<span class=\"customer-edit customer-h_pref customer-h_addr1 customer-h_addr2\">";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 229, $this->source); })()), "h_pref", [], "any", false, false, false, 229), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 229, $this->source); })()), "h_addr1", [], "any", false, false, false, 229), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 229, $this->source); })()), "h_addr2", [], "any", false, false, false, 229), "html", null, true);
            echo "</p>
                        <p class=\"ec-nput\">お届け先　お名前（漢字）：<span class=\"customer-edit customer-h_name1 customer-name2\">";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 230, $this->source); })()), "h_name1", [], "any", false, false, false, 230), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 230, $this->source); })()), "h_name2", [], "any", false, false, false, 230), "html", null, true);
            echo "</p>
                        <p class=\"ec-halfInput\">お届け先　お名前（カナ）：<span class=\"customer-edit customer-h_kana1 customer-kana2\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 231, $this->source); })()), "h_kana1", [], "any", false, false, false, 231), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 231, $this->source); })()), "h_kana2", [], "any", false, false, false, 231), "html", null, true);
            echo "</p>
                        <p class=\"ec-telInput\">お届け先　お電話番号：<span class=\"customer-edit customer-h_phone_number\">";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 232, $this->source); })()), "h_phone_number", [], "any", false, false, false, 232), "html", null, true);
            echo "</p>
                        ";
        }
        // line 234
        echo "                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-company_name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 234, $this->source); })()), "companyName", [], "any", false, false, false, 234), "html", null, true);
        echo "</span></p>
                    ";
        // line 235
        if (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 235, $this->source); })()), "hdn_delivery_address_use", [], "any", false, false, false, 235)) {
            // line 236
            echo "                        <p class=\"ec-zipInput\">郵　便　番　号：<span class=\"customer-edit customer-postal_code\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 236, $this->source); })()), "postal_code", [], "any", false, false, false, 236), "html", null, true);
            echo "</span></p>
                        <p class=\"ec-input\">住　　　　　所：<span class=\"customer-edit customer-pref\">";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 237, $this->source); })()), "pref", [], "any", false, false, false, 237), "html", null, true);
            echo "</span><span class=\"customer-edit customer-addr01\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 237, $this->source); })()), "addr01", [], "any", false, false, false, 237), "html", null, true);
            echo "</span><span class=\"customer-edit customer-addr02\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 237, $this->source); })()), "addr02", [], "any", false, false, false, 237), "html", null, true);
            echo "</span></p>
                    ";
        } else {
            // line 239
            echo "                        <p class=\"ec-zipInput hiddenItem\">〒<span class=\"customer-edit customer-postal_code\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 239, $this->source); })()), "postal_code", [], "any", false, false, false, 239), "html", null, true);
            echo "</span></p>
                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-pref\">";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 240, $this->source); })()), "pref", [], "any", false, false, false, 240), "html", null, true);
            echo "</span><span class=\"customer-edit customer-addr01\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 240, $this->source); })()), "addr01", [], "any", false, false, false, 240), "html", null, true);
            echo "</span><span class=\"customer-edit customer-addr02\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 240, $this->source); })()), "addr02", [], "any", false, false, false, 240), "html", null, true);
            echo "</span></p>
                    ";
        }
        // line 242
        echo "                        <p class=\"ec-telInput\">電　話　番　号：<span class=\"customer-edit customer-phone_number\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 242, $this->source); })()), "phone_number", [], "any", false, false, false, 242), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-email\">";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 243, $this->source); })()), "email", [], "any", false, false, false, 243), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\">受　　付　　者：<span class=\"customer-edit customer-uketsuke_name\">";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 244, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 244), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input hiddenItem\">紹　　介　　者：<span class=\"customer-edit customer-shoukai_name\">";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 245, $this->source); })()), "shoukai_name", [], "any", false, false, false, 245), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\">社　　　　　員：<span class=\"customer-edit customer-shain_flg\">";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 246, $this->source); })()), "shain_flg", [], "any", false, false, false, 246), "html", null, true);
        echo "</span>
                            <span id=\"customer-shain\">
                            </span>
                        </p>
                    </div>
                    ";
        // line 251
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 252
            echo "                        <div class=\"ec-borderedDefs  non-customer-edit\" style=\"display:none;\">
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お名前"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-name01\"></span>
                                        <span class=\"customer-form customer-name02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お名前(カナ)"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 268
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-kana01\"></span>
                                        <span class=\"customer-form customer-kana02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl class=\"hiddenItem\">
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_company_name\">";
            // line 279
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会社名"), "html", null, true);
            echo "</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-company_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <label class=\"ec-radio required\" for=\"nonmember_uketori\">";
            // line 287
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("受取方法"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 288
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                        ";
            // line 289
            if (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 289, $this->source); })()), "hdn_delivery_address_use", [], "any", false, false, false, 289)) {
                // line 290
                echo "                            <dl>
                        ";
            } else {
                // line 292
                echo "                            <dl class=\"hiddenItem\">
                        ";
            }
            // line 294
            echo "                                <dt>
                                    <label class=\"ec-label required\">";
            // line 295
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("住所"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 296
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput\">
                                        <span>";
            // line 300
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                                        <span class=\"customer-form customer-postal_code\"></span>
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\">
                                                    <img src=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\">
                                                </div>
                                            </div>
                                            <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                <span>";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form customer-address_pref\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr01\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            ";
            // line 325
            echo "                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 327
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先住所"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 328
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput\">
                                        <span>";
            // line 332
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                                        <span class=\"customer-form customer-h_postal_code\"></span>
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\">
                                                    <img src=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\">
                                                </div>
                                            </div>
                                            <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                <span>";
            // line 341
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span>
                                            </a>
                                        </div>
                                    </div>
                                    <label class=\"ec-label required\">";
            // line 345
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先　都道府県"), "html", null, true);
            echo "</label>
                                    <div class=\"ec-select\" for=\"nonmember_h_pref\">
                                        <span class=\"customer-form customer-h_pref\"></span>
                                    </div>
                                    <label class=\"ec-label required\">";
            // line 349
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け　先住所１"), "html", null, true);
            echo "</label>
                                    <div class=\"ec-input\" for=\"nonmember_h_addr1\">
                                        <span class=\"customer-form customer-h_addr1\"></span>
                                    </div>
                                    <label class=\"ec-label required\">";
            // line 353
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け　先住所２"), "html", null, true);
            echo "</label>
                                    <div class=\"ec-input\" for=\"nonmember_h_addr2\">
                                        <span class=\"customer-form customer-h_addr2\"></span>
                                    </div>
                                    <label class=\"ec-label required\">";
            // line 357
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先　電話番号"), "html", null, true);
            echo "</label>
                                    <div class=\"ec-telInput\" for=\"nomemberh_phone_number\">
                                        <span class=\"customer-form customer-h_phone_number\"></span>
                                    </div>
                                </dd>
                            </dl>
                             <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_uketori\">";
            // line 365
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("受取方法"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 366
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-radio\">
                                        <span class=\"customer-form customer-uketori\"></span>
                                        
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\" for=\"nonmember_phone_number\">";
            // line 377
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("電話番号"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 378
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput\">
                                        <span class=\"customer-form customer-phone_number\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_shiharai\">";
            // line 388
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("支払い状況"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 389
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-radio\">
                                        <span class=\"customer-form customer-shiharai\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl class=\"hiddenItem\">
                                <dt>
                                    <label class=\"ec-label\" for =\"nomember_email\">";
            // line 399
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メールアドレス"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 400
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-email\"></span>
                                    </div>
                                </dd>
                            </dl>
                            ";
            // line 409
            echo "                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_Ukedate\">";
            // line 411
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("受取来店日"), "html", null, true);
            echo "</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form nonmember_Ukedate\"></span>
                                    </div>
                                </dd>
                            </dl>
                            ";
            // line 420
            echo "                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_visit_t\">";
            // line 422
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("来店時間"), "html", null, true);
            echo "</label>
                                    <span>";
            // line 423
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form nonmember_visit_t\"></span>
                                    </div>
                                </dd>
                            </dl>
                            ";
            // line 432
            echo "                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_tenpos\">";
            // line 434
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("受付店鋪"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 435
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form nonmember_tenpos\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_uketsuke_name\">";
            // line 445
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("受付者"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 446
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-uketsuke_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl class=\"hiddenItem\">
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_shoukai_name\">";
            // line 456
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("紹介者"), "html", null, true);
            echo "</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-shoukai_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_shain_flg\">";
            // line 466
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("社員"), "html", null, true);
            echo "</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-checkbox\">
                                        <span class=\"customer-form customer-shain_flg\"></span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class=\"mod-button\" style=\"display:none;\">
                            <span id=\"customer-ok\"><button type=\"button\" class=\"ec-inlineBtn\">";
            // line 476
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK"), "html", null, true);
            echo "</button></span>
                            <span id=\"customer-cancel\"><button type=\"button\" class=\"ec-inlineBtn\">";
            // line 477
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("キャンセル"), "html", null, true);
            echo "</button></span>
                        </div>
                        <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"";
            // line 479
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 479, $this->source); })()), "name01", [], "any", false, false, false, 479), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 480
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 480, $this->source); })()), "name02", [], "any", false, false, false, 480), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana01\" class=\"customer-in\" name=\"customer_kana01\" value=\"";
            // line 481
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 481, $this->source); })()), "kana01", [], "any", false, false, false, 481), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana02\" class=\"customer-in\" name=\"customer_kana02\" value=\"";
            // line 482
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 482, $this->source); })()), "kana02", [], "any", false, false, false, 482), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 483
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 483, $this->source); })()), "companyName", [], "any", false, false, false, 483), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-postal_code\" class=\"customer-in\" name=\"customer_postal_code\" value=\"";
            // line 484
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 484, $this->source); })()), "postal_code", [], "any", false, false, false, 484), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 485
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 485, $this->source); })()), "pref", [], "any", false, false, false, 485), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 486, $this->source); })()), "addr01", [], "any", false, false, false, 486), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 487
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 487, $this->source); })()), "addr02", [], "any", false, false, false, 487), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-phone_number\" class=\"customer-in\" name=\"customer_phone_number\" value=\"";
            // line 488
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 488, $this->source); })()), "phone_number", [], "any", false, false, false, 488), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 489
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 489, $this->source); })()), "email", [], "any", false, false, false, 489), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-uketsuke_name\" class=\"customer-in\" name=\"customer_uketsuke_name\" value=\"";
            // line 490
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 490, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 490), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-shoukai_name\" class=\"customer-in\" name=\"customer_shoukai_name\" value=\"";
            // line 491
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 491, $this->source); })()), "shoukai_name", [], "any", false, false, false, 491), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-shain_flg\" class=\"customer-in\" name=\"customer_shain_flg\" value=\"";
            // line 492
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 492, $this->source); })()), "shain_flg", [], "any", false, false, false, 492), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-uketori\" class=\"customer-in\" name=\"customer_uketori\" value=\"";
            // line 493
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 493, $this->source); })()), "uketori", [], "any", false, false, false, 493), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-shiharai\" class=\"customer-in\" name=\"customer_shiharai\" value=\"";
            // line 494
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 494, $this->source); })()), "shiharai", [], "any", false, false, false, 494), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer_Ukedate\" class=\"customer-in\" name=\"customer_Ukedate\" value=\"";
            // line 495
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 495, $this->source); })()), "Ukedate", [], "any", false, false, false, 495), "Y年m月d日"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer_visit_t\" class=\"customer-in\" name=\"customer_visit_t\" value=\"";
            // line 496
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 496, $this->source); })()), "visit_t", [], "any", false, false, false, 496), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer_tenpos\" class=\"customer-in\" name=\"customer_tenpos\" value=\"";
            // line 497
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 497, $this->source); })()), "tenpos", [], "any", false, false, false, 497), "html", null, true);
            echo "\">
                        ";
            // line 499
            echo "                        ";
            // line 500
            echo "                    ";
        }
        // line 501
        echo "                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お引渡し情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 506
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 506, $this->source); })()), "shippings", [], "any", false, false, false, 506));
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
            // line 507
            echo "                        ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 507);
            // line 508
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 509
            echo "                        <div class=\"ec-orderDelivery__actions\">
                            <div class=\"ec-selects\">
                                <div class=\"ec-select hiddenItem\">
                                    <label>";
            // line 512
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo "</label>
                                    ";
            // line 513
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 513, $this->source); })()), "Shippings", [], "any", false, false, false, 513), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 513, $this->source); })()), [], "array", false, false, false, 513), "Delivery", [], "any", false, false, false, 513), 'widget', ["attr" => ["class" => "form-control", "data-trigger" => "change"]]);
            echo "
                                    ";
            // line 515
            echo "                                </div>
                                <div class=\"ec-select ec-select__delivery\">
                                    <label>";
            // line 517
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お引渡し日"), "html", null, true);
            echo "</label>
                                    ";
            // line 518
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 518, $this->source); })()), "Shippings", [], "any", false, false, false, 518), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 518, $this->source); })()), [], "array", false, false, false, 518), "shipping_delivery_date", [], "any", false, false, false, 518), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 519
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 519, $this->source); })()), "Shippings", [], "any", false, false, false, 519), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 519, $this->source); })()), [], "array", false, false, false, 519), "shipping_delivery_date", [], "any", false, false, false, 519) == "")) {
                // line 520
                echo "                                    ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 520, $this->source); })()), "Shippings", [], "any", false, false, false, 520), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 520, $this->source); })()), [], "array", false, false, false, 520), "shipping_delivery_date", [], "any", false, false, false, 520) == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 520, $this->source); })()), "Ukedate", [], "any", false, false, false, 520), "Y年m月d日")), "html", null, true);
                echo "
                                    ";
            }
            // line 522
            echo "                                    ";
            // line 523
            echo "                                </div>
                                <div class=\"ec-select ec-select__time\">
                                    <label>";
            // line 525
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お引渡し時間"), "html", null, true);
            echo "</label>
                                    ";
            // line 526
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 526, $this->source); })()), "Shippings", [], "any", false, false, false, 526), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 526, $this->source); })()), [], "array", false, false, false, 526), "DeliveryTime", [], "any", false, false, false, 526), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 527
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 527, $this->source); })()), "Shippings", [], "any", false, false, false, 527), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 527, $this->source); })()), [], "array", false, false, false, 527), "DeliveryTime", [], "any", false, false, false, 527) == null)) {
                // line 528
                echo "                                    ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "Shippings", [], "any", false, false, false, 528), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 528, $this->source); })()), [], "array", false, false, false, 528), "DeliveryTime", [], "any", false, false, false, 528) == twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 528, $this->source); })()), "visit_t", [], "any", false, false, false, 528)), "html", null, true);
                echo "
                                    ";
            }
            // line 530
            echo "                                    ";
            // line 531
            echo "                                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        echo "                    <div class=\"ec-orderDelivery__edit hiddenItem\">
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"";
        // line 536
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_shipping_multiple");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先を追加する"), "html", null, true);
        echo "</button>
                    </div>
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 541
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法"), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"ec-radio\">
                        ";
        // line 544
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "Payment", [], "any", false, false, false, 544));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 545
            echo "                            <div style=\"display: block;\">
                                ";
            // line 546
            $context["Payment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 546, $this->source); })()), "Payment", [], "any", false, false, false, 546), "vars", [], "any", false, false, false, 546), "choices", [], "any", false, false, false, 546), $context["key"], [], "array", false, false, false, 546), "data", [], "any", false, false, false, 546);
            // line 547
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["data-trigger" => "change"]]);
            echo "
                                ";
            // line 548
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Payment"]) || array_key_exists("Payment", $context) ? $context["Payment"] : (function () { throw new RuntimeError('Variable "Payment" does not exist.', 548, $this->source); })()), "payment_image", [], "any", false, false, false, 548))) {
                // line 549
                echo "                                    <p><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["Payment"]) || array_key_exists("Payment", $context) ? $context["Payment"] : (function () { throw new RuntimeError('Variable "Payment" does not exist.', 549, $this->source); })()), "payment_image", [], "any", false, false, false, 549), "save_image"), "html", null, true);
                echo "\"></p>
                                ";
            }
            // line 551
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 553
        echo "                    </div>
                    <div class=\"ec-input ";
        // line 554
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 554, $this->source); })()), "Payment", [], "any", false, false, false, 554))) ? (" error") : (""));
        echo "\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 554, $this->source); })()), "Payment", [], "any", false, false, false, 554), 'errors');
        echo "</div>
                </div>
                ";
        // line 556
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 556, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 556) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 556, $this->source); })()), "Customer", [], "any", false, false, false, 556)))) {
            // line 557
            echo "                    <div class=\"ec-orderPayment\">
                        <div class=\"ec-rectHeading\">
                            <h2>";
            // line 559
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("利用ポイント"), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"ec-input ";
            // line 561
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 561, $this->source); })()), "use_point", [], "any", false, false, false, 561))) ? (" error") : (""));
            echo "\">
                            <p>";
            // line 562
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%point% pt が利用可能です。", ["%point%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 562, $this->source); })()), "Customer", [], "any", false, false, false, 562), "Point", [], "any", false, false, false, 562))]), "html", null, true);
            echo "</p>
                            ";
            // line 563
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 563, $this->source); })()), "use_point", [], "any", false, false, false, 563), 'widget', ["attr" => ["type" => "text", "class" => "form-control", "data-trigger" => "change"]]);
            echo "
                            ";
            // line 564
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 564, $this->source); })()), "use_point", [], "any", false, false, false, 564), 'errors');
            echo "
                        </div>
                    </div>
                ";
        }
        // line 568
        echo "                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 570
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("備考"), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"ec-input\">
                        ";
        // line 573
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 573, $this->source); })()), "message", [], "any", false, false, false, 573), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(3000文字まで)"), "rows" => "6"]]);
        echo "
                        ";
        // line 574
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 574, $this->source); })()), "message", [], "any", false, false, false, 574), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 581
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 581, $this->source); })()), "shippings", [], "any", false, false, false, 581));
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
            // line 582
            echo "                        ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 582);
            // line 583
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 584
            echo "                        <div class=\"ec-orderDelivery__title hiddenItem\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 584, $this->source); })()), "multiple", [], "any", false, false, false, 584)) {
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 584), "html", null, true);
                echo ")";
            }
            // line 585
            echo "                            <div class=\"ec-orderDelivery__change\">
                                ";
            // line 586
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 587
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 587), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_shipping", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 587)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            } else {
                // line 589
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 589), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 589)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            }
            // line 591
            echo "                            </div>
                        </div>
                        <div class=\"ec-orderDelivery__item\">
                            <ul class=\"ec-borderedList\">
                                ";
            // line 595
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, false, 595));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 596
                echo "                                    <li>
                                        <div class=\"ec-imageGrid\">
                                            <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 598
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 598))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 598), "MainListImage", [], "any", false, false, false, 598)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 598), "html", null, true);
                echo "\"></div>
                                            <div class=\"ec-imageGrid__content\">
                                                <p>";
                // line 600
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 600), "html", null, true);
                if ($this->extensions['Customize\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                                ";
                // line 601
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 601)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 601), "classCategory1", [], "any", false, false, false, 601))) {
                    // line 602
                    echo "                                                    <p class='hiddenItem'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 602), "classCategory1", [], "any", false, false, false, 602), "className", [], "any", false, false, false, 602), "name", [], "any", false, false, false, 602), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 602), "classCategory1", [], "any", false, false, false, 602), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 604
                echo "                                                ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 604)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 604), "classCategory2", [], "any", false, false, false, 604))) {
                    // line 605
                    echo "                                                    <p class='hiddenItem'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 605), "classCategory2", [], "any", false, false, false, 605), "className", [], "any", false, false, false, 605), "name", [], "any", false, false, false, 605), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 605), "classCategory2", [], "any", false, false, false, 605), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 607
                echo "                                                <p class='hiddenItem'>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, false, 607)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 607)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, false, 607)), "html", null, true);
                echo "</span></p>
                                                <p>";
                // line 608
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "price", [], "any", false, false, false, 608)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 608)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, $context["orderItem"], "price", [], "any", false, false, false, 608) * twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 608))), "html", null, true);
                echo "</span></p>
                                                <p>(";
                // line 609
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "basePrice", [], "any", false, false, false, 609)), "html", null, true);
                echo "
                                                ";
                // line 610
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariKikanGaku", [], "any", false, false, false, 610)) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariKikanGaku", [], "any", false, false, false, 610) > 0))) {
                    echo "- 早割";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariKikanGaku", [], "any", false, false, false, 610), "html", null, true);
                }
                // line 611
                echo "                                                ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariMatomeGaku", [], "any", false, false, false, 611)) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariMatomeGaku", [], "any", false, false, false, 611) > 0))) {
                    echo "- まとめ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariMatomeGaku", [], "any", false, false, false, 611), "html", null, true);
                }
                // line 612
                echo "                                                ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariAGaku", [], "any", false, false, false, 612)) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariAGaku", [], "any", false, false, false, 612) > 0))) {
                    echo "- FC割";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariAGaku", [], "any", false, false, false, 612), "html", null, true);
                }
                // line 613
                echo "                                                ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariBGaku", [], "any", false, false, false, 613)) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariBGaku", [], "any", false, false, false, 613) > 0))) {
                    echo "- 社割";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "wariBGaku", [], "any", false, false, false, 613), "html", null, true);
                }
                // line 614
                echo "                                                )</p>
                                            </div>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 619
            echo "                            </ul>
                            <p>";
            // line 620
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 620, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                        </div>
                        <div class=\"ec-orderDelivery__address hiddenItem\">
                            <p>";
            // line 623
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, false, 623), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, false, 623), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, false, 623), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, false, 623), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
            echo "</p>
                            <p hidden>";
            // line 624
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 624), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 624), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 624), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 624), "html", null, true);
            echo "</p>
                            <p hidden>";
            // line 625
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 625), "html", null, true);
            echo "</p>
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
        // line 628
        echo "                    <div class=\"ec-orderDelivery__edit hiddenItem\">
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"";
        // line 629
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_shipping_multiple");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先を追加する"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品合計"), "html", null, true);
        echo "</dt>
                        <dd class=\"ec-totalBox__specTotal\">";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 637, $this->source); })()), "subtotal", [], "any", false, false, false, 637) - twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 637, $this->source); })()), "tax", [], "any", false, false, false, 637))), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("消費税"), "html", null, true);
        echo "</dt>
                        <dd class=\"ec-totalBox__specTotal\">";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 641, $this->source); })()), "tax", [], "any", false, false, false, 641)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                        <dd class=\"ec-totalBox__specTotal\">";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 645, $this->source); })()), "subtotal", [], "any", false, false, false, 645)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 649, $this->source); })()), "charge", [], "any", false, false, false, 649)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 653, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, false, 653)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 655
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 655, $this->source); })()), "taxable_discount", [], "any", false, false, false, 655) < 0)) {
            // line 656
            echo "                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
            // line 657
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 658
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 658, $this->source); })()), "taxable_discount", [], "any", false, false, false, 658)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 661
        echo "                    <div class=\"ec-totalBox__total hiddenItem\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 661, $this->source); })()), "taxable_total", [], "any", false, false, false, 661)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 662, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, false, 662));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 663
            echo "                    <dl class=\"ec-totalBox__taxRate hiddenItem\">
                        <dt>";
            // line 664
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 665
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 668
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 668, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 668));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 669
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 669)) {
                echo "<div class=\"ec-totalBox__total\"></div>";
            }
            // line 670
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 671
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 671), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 672
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 672)), "html", null, true);
            echo "</dd>
                        </dl>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "                    <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 675, $this->source); })()), "payment_total", [], "any", false, false, false, 675)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 676
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 676, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 676) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 676, $this->source); })()), "Customer", [], "any", false, false, false, 676)))) {
            // line 677
            echo "                    <div class=\"ec-totalBox__pointBlock\">
                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 679
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 680
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 680, $this->source); })()), "UsePoint", [], "any", false, false, false, 680)), "html", null, true);
            echo " pt</dd>
                        </dl>
                        <dl class=\"ec-totalBox__spec\">
                            <dt><span class=\"ec-font-bold\">";
            // line 683
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                            <dd><span class=\"ec-font-bold\">";
            // line 684
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 684, $this->source); })()), "AddPoint", [], "any", false, false, false, 684)), "html", null, true);
            echo " pt</span></dd>
                        </dl>
                    </div>
                    ";
        }
        // line 688
        echo "                    <div class=\"ec-totalBox__btn\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 689
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認する"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 690
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに戻る"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1566 => 690,  1562 => 689,  1559 => 688,  1552 => 684,  1548 => 683,  1542 => 680,  1538 => 679,  1534 => 677,  1532 => 676,  1523 => 675,  1506 => 672,  1502 => 671,  1499 => 670,  1494 => 669,  1476 => 668,  1467 => 665,  1463 => 664,  1460 => 663,  1456 => 662,  1447 => 661,  1441 => 658,  1437 => 657,  1434 => 656,  1432 => 655,  1427 => 653,  1423 => 652,  1417 => 649,  1413 => 648,  1407 => 645,  1403 => 644,  1397 => 641,  1393 => 640,  1387 => 637,  1383 => 636,  1371 => 629,  1368 => 628,  1351 => 625,  1342 => 624,  1329 => 623,  1323 => 620,  1320 => 619,  1310 => 614,  1304 => 613,  1298 => 612,  1292 => 611,  1287 => 610,  1283 => 609,  1274 => 608,  1264 => 607,  1256 => 605,  1253 => 604,  1245 => 602,  1243 => 601,  1235 => 600,  1228 => 598,  1224 => 596,  1220 => 595,  1214 => 591,  1204 => 589,  1194 => 587,  1192 => 586,  1189 => 585,  1181 => 584,  1178 => 583,  1175 => 582,  1158 => 581,  1153 => 579,  1145 => 574,  1141 => 573,  1135 => 570,  1131 => 568,  1124 => 564,  1120 => 563,  1116 => 562,  1112 => 561,  1107 => 559,  1103 => 557,  1101 => 556,  1094 => 554,  1091 => 553,  1084 => 551,  1078 => 549,  1076 => 548,  1071 => 547,  1069 => 546,  1066 => 545,  1062 => 544,  1056 => 541,  1046 => 536,  1043 => 535,  1026 => 531,  1024 => 530,  1018 => 528,  1016 => 527,  1012 => 526,  1008 => 525,  1004 => 523,  1002 => 522,  996 => 520,  994 => 519,  990 => 518,  986 => 517,  982 => 515,  978 => 513,  974 => 512,  969 => 509,  966 => 508,  963 => 507,  946 => 506,  941 => 504,  936 => 501,  933 => 500,  931 => 499,  927 => 497,  923 => 496,  919 => 495,  915 => 494,  911 => 493,  907 => 492,  903 => 491,  899 => 490,  895 => 489,  891 => 488,  887 => 487,  883 => 486,  879 => 485,  875 => 484,  871 => 483,  867 => 482,  863 => 481,  859 => 480,  855 => 479,  850 => 477,  846 => 476,  833 => 466,  820 => 456,  807 => 446,  803 => 445,  790 => 435,  786 => 434,  782 => 432,  771 => 423,  767 => 422,  763 => 420,  752 => 411,  748 => 409,  737 => 400,  733 => 399,  720 => 389,  716 => 388,  703 => 378,  699 => 377,  685 => 366,  681 => 365,  670 => 357,  663 => 353,  656 => 349,  649 => 345,  642 => 341,  635 => 337,  627 => 332,  620 => 328,  616 => 327,  612 => 325,  594 => 309,  587 => 305,  579 => 300,  572 => 296,  568 => 295,  565 => 294,  561 => 292,  557 => 290,  555 => 289,  551 => 288,  547 => 287,  536 => 279,  522 => 268,  518 => 267,  504 => 256,  500 => 255,  495 => 252,  493 => 251,  485 => 246,  481 => 245,  477 => 244,  473 => 243,  468 => 242,  459 => 240,  454 => 239,  445 => 237,  440 => 236,  438 => 235,  433 => 234,  428 => 232,  423 => 231,  418 => 230,  412 => 229,  407 => 228,  405 => 227,  401 => 226,  396 => 225,  391 => 223,  383 => 221,  375 => 220,  372 => 219,  366 => 216,  363 => 215,  361 => 214,  356 => 212,  348 => 207,  344 => 206,  340 => 205,  334 => 202,  324 => 195,  321 => 194,  318 => 193,  311 => 189,  308 => 188,  305 => 187,  298 => 183,  295 => 182,  292 => 181,  289 => 180,  282 => 176,  279 => 175,  276 => 174,  273 => 173,  271 => 172,  265 => 169,  262 => 168,  259 => 167,  256 => 166,  254 => 165,  244 => 158,  239 => 155,  229 => 154,  199 => 132,  150 => 86,  95 => 33,  93 => 32,  81 => 23,  72 => 16,  62 => 15,  51 => 11,  49 => 13,  36 => 11,);
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

{% form_theme form 'Form/form_div_layout.twig' %}

{% block javascript %}
    <script>
        \$(function() {
            textShainFlg();
            
            var \$redirectCallback = function() {
                loadingOverlay();
                \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
                \$('#shopping-form').attr('action', '{{ url(\"shopping_redirect_to\") }}').submit();
                setTimeout(function () {
                    loadingOverlay(\"hide\");
                }, 2000);
            };
            \$('[data-trigger]').each(function() {
                \$(this).on(\$(this).attr('data-trigger'), \$redirectCallback);
            });

            {% if is_granted('ROLE_USER') == false %}
            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');
            var form = \$('.customer-form');

            \$('#customer').click(function() {
                \$(edit).each(function(index) {
                    //alert('hidden'+index+':'+\$(hidden[index]).attr('name'));
                    var shainFlgName = \$(hidden[index]).attr('name');
                    if(shainFlgName == 'customer_shain_flg') {
                        //var shainFlgVal = \$(this).val();
                        var wChecked = ( \$(this).text() == 1 ? 'checked' : '' ) ;
                        //alert('customer_shain_flg:'+\$(this).text()+' wChecked:'+wChecked);
                        var input = \$('<input id=\"edit' + index + '\" type=\"checkbox\" '+wChecked+' />').val(1);
                        \$(form[index]).empty().append(input);
                    } else {
                        var name = \$(this).text();
                        var input = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name);
                        \$(form[index]).empty().append(input);
                    }
                });

                \$('.non-customer-display').hide();
                \$('.non-customer-edit').show();
                \$('.mod-button').show();
            });

            \$('#customer-ok').click(function() {
                \$(form).each(function(index) {
                    var shainFlgName = \$(hidden[index]).attr('name');
                    if(shainFlgName == 'customer_shain_flg') {
                        if ( \$(form[index]).children('input').prop('checked') ) {
                            \$(hidden[index]).val('1');
                        } else {
                            \$(hidden[index]).val('0');
                        }
                        \$(form[index]).children('input').val(\$(hidden[index]).val());
                        //alert('val:'+index+':'+\$(hidden[index]).val());
                    } else {
                        \$(hidden[index]).val(\$(form[index]).children('input').val());
                        //alert('val:'+index+':'+\$(form[index]).children('input').val());
                    }
                });
                //\$('#customer-name01').val(\$('#customer-kana01').val());
                //\$('#customer-name02').val(\$('#customer-kana02').val());
                var postData = {};
                \$(hidden).each(function() {
                    postData[\$(this).attr('name')] = \$(this).val();
                });

                loadingOverlay();
                console.log(postData);

                \$.ajax({
                    url: \"{{ url('shopping_customer') }}\",
                    type: 'POST',
                    data: postData,
                    dataType: 'json'
                }).done(function(data) {
                    console.log(data);
                    if (data.status == 'OK') {
                        \$(form).each(function(index) {
                            \$(edit[index]).empty().text(\$(form[index]).children('input').val());
                            \$(form[index]).empty();
                        });

                        // kana field
                        \$(edit[2]).empty().text(data.kana01);
                        \$(edit[3]).empty().text(data.kana02);
                        \$('#customer-kana01').val(data.kana01);
                        \$('#customer-kana02').val(data.kana02);
                    }

                    textShainFlg();
                    \$('.non-customer-display').show();
                    \$('.non-customer-edit').hide();
                    \$('.mod-button').hide();

                }).fail(function(data) {
                    //console.log(data);
                    alert('更新に失敗しました。入力内容を確認してください。');
                    return false;
                }).always(function(data) {
                    // overlayを無効
                    loadingOverlay('hide');
                });

                /*
                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
                */
            });

            \$('#customer-cancel').click(function() {
                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });
            {% endif %}
        });

        function textShainFlg() {
            let customerShainFlg = \$('#customer-shain_flg').val();
            if(customerShainFlg == 1) {
                \$('#customer-shain').text('社員');
            } else {
                \$('#customer-shain').text('一般');
            }
        }
    </script>

    <style>
    dl.hiddenItem {
        display: none !important;
    }
    .hiddenItem {
        display: none !important;
    }
    </style>
{% endblock javascript %}

{% block main %}

    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'ご注文手続き'|trans }}</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                {% set step = 1 %}
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'カートの商品'|trans }}
                    </div>
                </li>
                {% if is_granted('ROLE_USER') == false %}
                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                        </div>
                        <div class=\"ec-progress__label\">{{ 'お客様情報'|trans }}
                        </div>
                    </li>
                {% endif %}
                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'ご注文手続き'|trans }}
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'ご注文内容確認'|trans }}
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ '完了'|trans }}
                    </div>
                </li>
            </ul>
        </div>

        <!-- アラートメッセージ -->
        {{ include('Shopping/alert.twig') }}
    </div>

    <form id=\"shopping-form\" method=\"post\" action=\"{{ url('shopping_confirm') }}\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.redirect_to) }}
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderAccount\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お客様情報'|trans }}</h2>
                    </div>
                    {% if is_granted('ROLE_USER') == false %}
                        <div class=\"ec-orderAccount__change non-customer-display\">
                            <button id=\"customer\" class=\"ec-inlineBtn\" type=\"button\">{{ '変更'|trans }}</button>
                        </div>
                    {% endif %}
                    <div class=\"ec-orderAccount__account non-customer-display\">
                        <p class=\"ec-halfInput\">お名前（漢字）：<span class=\"customer-edit customer-name01\">{{ Order.name01 }}</span> <span class=\"customer-edit customer-name02\">{{ Order.name02 }}</span>{{ ' 様'|trans }}</p>
                        <p class=\"ec-halfInput\">お名前（カナ）：<span class=\"customer-edit customer-kana01\">{{ Order.kana01 }}</span> <span class=\"customer-edit customer-kana02\">{{ Order.kana02 }}</span>{{ ' 様'|trans }}</p>
                        {# 受取方法追加　2024/08/23 田中 #}
                        <p class=\"ec-input\">受　取　方　法：<span class=\"customer-edit customer-uketori\">{{ Order.uketori }}</p>
                        {# 来店時間・お届け先情報追加　2024/09/17 田中 #}
                        <p class=\"ec-input\">来　店　受　取　日：<span class=\"customer-edit customer-Ukedate\">{{ Order.Ukedate|date(\"Y年m月d日\") }}</p>
                        <p class=\"ec-input\">来　店　時　間：<span class=\"customer-edit customer-visit_t\">{{ Order.visit_t }}</p>
                        {% if Order.uketori !='店頭受取' %}
                        <p class=\"ec-input\">お届け先 郵便番号：<span class=\"customer-edit customer-h_postal_code\">{{ Order.h_postal_code }}</p>
                        <p class=\"ec-input\">お届け先 住所：<span class=\"customer-edit customer-h_pref customer-h_addr1 customer-h_addr2\">{{ Order.h_pref }}{{ Order.h_addr1 }}{{ Order.h_addr2 }}</p>
                        <p class=\"ec-nput\">お届け先　お名前（漢字）：<span class=\"customer-edit customer-h_name1 customer-name2\">{{ Order.h_name1}}{{ Order.h_name2}}</p>
                        <p class=\"ec-halfInput\">お届け先　お名前（カナ）：<span class=\"customer-edit customer-h_kana1 customer-kana2\">{{ Order.h_kana1}}{{ Order.h_kana2}}</p>
                        <p class=\"ec-telInput\">お届け先　お電話番号：<span class=\"customer-edit customer-h_phone_number\">{{ Order.h_phone_number }}</p>
                        {% endif %}
                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-company_name\">{{ Order.companyName }}</span></p>
                    {% if eccube_config.hdn_delivery_address_use %}
                        <p class=\"ec-zipInput\">郵　便　番　号：<span class=\"customer-edit customer-postal_code\">{{ Order.postal_code }}</span></p>
                        <p class=\"ec-input\">住　　　　　所：<span class=\"customer-edit customer-pref\">{{ Order.pref }}</span><span class=\"customer-edit customer-addr01\">{{ Order.addr01 }}</span><span class=\"customer-edit customer-addr02\">{{ Order.addr02 }}</span></p>
                    {% else %}
                        <p class=\"ec-zipInput hiddenItem\">〒<span class=\"customer-edit customer-postal_code\">{{ Order.postal_code }}</span></p>
                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-pref\">{{ Order.pref }}</span><span class=\"customer-edit customer-addr01\">{{ Order.addr01 }}</span><span class=\"customer-edit customer-addr02\">{{ Order.addr02 }}</span></p>
                    {% endif %}
                        <p class=\"ec-telInput\">電　話　番　号：<span class=\"customer-edit customer-phone_number\">{{ Order.phone_number }}</span></p>
                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-email\">{{ Order.email }}</span></p>
                        <p class=\"ec-input\">受　　付　　者：<span class=\"customer-edit customer-uketsuke_name\">{{ Order.uketsuke_name }}</span></p>
                        <p class=\"ec-input hiddenItem\">紹　　介　　者：<span class=\"customer-edit customer-shoukai_name\">{{ Order.shoukai_name }}</span></p>
                        <p class=\"ec-input\">社　　　　　員：<span class=\"customer-edit customer-shain_flg\">{{ Order.shain_flg }}</span>
                            <span id=\"customer-shain\">
                            </span>
                        </p>
                    </div>
                    {% if is_granted('ROLE_USER') == false %}
                        <div class=\"ec-borderedDefs  non-customer-edit\" style=\"display:none;\">
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">{{ 'お名前'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-name01\"></span>
                                        <span class=\"customer-form customer-name02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">{{ 'お名前(カナ)'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-kana01\"></span>
                                        <span class=\"customer-form customer-kana02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl class=\"hiddenItem\">
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_company_name\">{{ '会社名'|trans }}</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-company_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <label class=\"ec-radio required\" for=\"nonmember_uketori\">{{ '受取方法'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                        {% if eccube_config.hdn_delivery_address_use %}
                            <dl>
                        {% else %}
                            <dl class=\"hiddenItem\">
                        {% endif %}
                                <dt>
                                    <label class=\"ec-label required\">{{ '住所'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput\">
                                        <span>{{ '〒'|trans }}</span>
                                        <span class=\"customer-form customer-postal_code\"></span>
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\">
                                                    <img src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                                </div>
                                            </div>
                                            <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                <span>{{ '郵便番号検索'|trans }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form customer-address_pref\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr01\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            {# お届け先住所 2024/09/17 田中 #}
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">{{ 'お届け先住所'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput\">
                                        <span>{{ '〒'|trans }}</span>
                                        <span class=\"customer-form customer-h_postal_code\"></span>
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\">
                                                    <img src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                                </div>
                                            </div>
                                            <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                <span>{{ '郵便番号検索'|trans }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <label class=\"ec-label required\">{{ 'お届け先　都道府県'|trans }}</label>
                                    <div class=\"ec-select\" for=\"nonmember_h_pref\">
                                        <span class=\"customer-form customer-h_pref\"></span>
                                    </div>
                                    <label class=\"ec-label required\">{{ 'お届け　先住所１'|trans }}</label>
                                    <div class=\"ec-input\" for=\"nonmember_h_addr1\">
                                        <span class=\"customer-form customer-h_addr1\"></span>
                                    </div>
                                    <label class=\"ec-label required\">{{ 'お届け　先住所２'|trans }}</label>
                                    <div class=\"ec-input\" for=\"nonmember_h_addr2\">
                                        <span class=\"customer-form customer-h_addr2\"></span>
                                    </div>
                                    <label class=\"ec-label required\">{{ 'お届け先　電話番号'|trans }}</label>
                                    <div class=\"ec-telInput\" for=\"nomemberh_phone_number\">
                                        <span class=\"customer-form customer-h_phone_number\"></span>
                                    </div>
                                </dd>
                            </dl>
                             <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_uketori\">{{ '受取方法'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-radio\">
                                        <span class=\"customer-form customer-uketori\"></span>
                                        
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\" for=\"nonmember_phone_number\">{{ '電話番号'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput\">
                                        <span class=\"customer-form customer-phone_number\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_shiharai\">{{ '支払い状況'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-radio\">
                                        <span class=\"customer-form customer-shiharai\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl class=\"hiddenItem\">
                                <dt>
                                    <label class=\"ec-label\" for =\"nomember_email\">{{ 'メールアドレス'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-email\"></span>
                                    </div>
                                </dd>
                            </dl>
                            {# 受取日追加　2024/09/24 田中 #}
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_Ukedate\">{{ '受取来店日'|trans }}</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form nonmember_Ukedate\"></span>
                                    </div>
                                </dd>
                            </dl>
                            {# 来店時間追加　2024/09/09 田中 #}
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_visit_t\">{{ '来店時間'|trans }}</label>
                                    <span>{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form nonmember_visit_t\"></span>
                                    </div>
                                </dd>
                            </dl>
                            {# 受付店鋪追加　2024/09/10 田中 #}
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_tenpos\">{{ '受付店鋪'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form nonmember_tenpos\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_uketsuke_name\">{{ '受付者'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-uketsuke_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl class=\"hiddenItem\">
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_shoukai_name\">{{ '紹介者'|trans }}</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-shoukai_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_shain_flg\">{{ '社員'|trans }}</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-checkbox\">
                                        <span class=\"customer-form customer-shain_flg\"></span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class=\"mod-button\" style=\"display:none;\">
                            <span id=\"customer-ok\"><button type=\"button\" class=\"ec-inlineBtn\">{{ 'OK'|trans }}</button></span>
                            <span id=\"customer-cancel\"><button type=\"button\" class=\"ec-inlineBtn\">{{ 'キャンセル'|trans }}</button></span>
                        </div>
                        <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"{{ Order.name01 }}\">
                        <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"{{ Order.name02 }}\">
                        <input type=\"hidden\" id=\"customer-kana01\" class=\"customer-in\" name=\"customer_kana01\" value=\"{{ Order.kana01 }}\">
                        <input type=\"hidden\" id=\"customer-kana02\" class=\"customer-in\" name=\"customer_kana02\" value=\"{{ Order.kana02 }}\">
                        <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"{{ Order.companyName }}\">
                        <input type=\"hidden\" id=\"customer-postal_code\" class=\"customer-in\" name=\"customer_postal_code\" value=\"{{ Order.postal_code }}\">
                        <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"{{ Order.pref }}\">
                        <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"{{ Order.addr01 }}\">
                        <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"{{ Order.addr02 }}\">
                        <input type=\"hidden\" id=\"customer-phone_number\" class=\"customer-in\" name=\"customer_phone_number\" value=\"{{ Order.phone_number }}\">
                        <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"{{ Order.email }}\">
                        <input type=\"hidden\" id=\"customer-uketsuke_name\" class=\"customer-in\" name=\"customer_uketsuke_name\" value=\"{{ Order.uketsuke_name }}\">
                        <input type=\"hidden\" id=\"customer-shoukai_name\" class=\"customer-in\" name=\"customer_shoukai_name\" value=\"{{ Order.shoukai_name }}\">
                        <input type=\"hidden\" id=\"customer-shain_flg\" class=\"customer-in\" name=\"customer_shain_flg\" value=\"{{ Order.shain_flg }}\">
                        <input type=\"hidden\" id=\"customer-uketori\" class=\"customer-in\" name=\"customer_uketori\" value=\"{{ Order.uketori }}\">
                        <input type=\"hidden\" id=\"customer-shiharai\" class=\"customer-in\" name=\"customer_shiharai\" value=\"{{ Order.shiharai }}\">
                        <input type=\"hidden\" id=\"customer_Ukedate\" class=\"customer-in\" name=\"customer_Ukedate\" value=\"{{ Order.Ukedate|date(\"Y年m月d日\")}}\">
                        <input type=\"hidden\" id=\"customer_visit_t\" class=\"customer-in\" name=\"customer_visit_t\" value=\"{{ Order.visit_t }}\">
                        <input type=\"hidden\" id=\"customer_tenpos\" class=\"customer-in\" name=\"customer_tenpos\" value=\"{{ Order.tenpos }}\">
                        {# <input type=\"hidden\" id=\"customer_DeliveryTime\" class=\"customer-in\" name=\"customer_DeliveryTime\" value=\"{{ Order.DeliveryTime }}\"> #}
                        {# <input type=\"hidden\" id =\"customer_Shipping_delivery_date\" class =\"customer_in\"name=\"customer_Shipping_delivery_date\"value=\"{{Order.Shipping_delivery_date}}\">  #}
                    {% endif %}
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お引渡し情報'|trans }}</h2>
                    </div>
                    {% for shipping in Order.shippings %}
                        {% set idx = loop.index0 %}
                        {% set isShowReducedTaxMess = false %}
                        <div class=\"ec-orderDelivery__actions\">
                            <div class=\"ec-selects\">
                                <div class=\"ec-select hiddenItem\">
                                    <label>{{ '配送方法'|trans }}</label>
                                    {{ form_widget(form.Shippings[idx].Delivery, { 'attr': { 'class': 'form-control', 'data-trigger': 'change' }}) }}
                                    {# {{ form_errors(form.Shippings[idx].Delivery) }} #}
                                </div>
                                <div class=\"ec-select ec-select__delivery\">
                                    <label>{{ 'お引渡し日'|trans }}</label>
                                    {{ form_widget(form.Shippings[idx].shipping_delivery_date, {'attr': {'class': 'form-control'}}) }}
                                    {% if form.Shippings[idx].shipping_delivery_date == '' %}
                                    {{form.Shippings[idx].shipping_delivery_date == Order.Ukedate|date(\"Y年m月d日\") }}
                                    {% endif %}
                                    {# {{ form_errors(form.Shippings[idx].shipping_delivery_date) }} #}
                                </div>
                                <div class=\"ec-select ec-select__time\">
                                    <label>{{ 'お引渡し時間'|trans }}</label>
                                    {{ form_widget(form.Shippings[idx].DeliveryTime, {'attr': {'class': 'form-control'}}) }}
                                    {% if form.Shippings[idx].DeliveryTime == null %}
                                    {{ form.Shippings[idx].DeliveryTime == Order.visit_t  }}
                                    {% endif %}
                                    {# {{ form_errors(form.Shippings[idx].DeliveryTime) }} #}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <div class=\"ec-orderDelivery__edit hiddenItem\">
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"{{ path('shopping_shipping_multiple') }}\">{{ 'お届け先を追加する'|trans }}</button>
                    </div>
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お支払方法'|trans }}</h2>
                    </div>
                    <div class=\"ec-radio\">
                        {% for key, child in form.Payment %}
                            <div style=\"display: block;\">
                                {% set Payment = form.Payment.vars.choices[key].data %}
                                {{ form_widget(child, { 'attr': { 'data-trigger': 'change' }}) }}
                                {% if Payment.payment_image is not null %}
                                    <p><img src=\"{{ asset(Payment.payment_image, 'save_image') }}\"></p>
                                {% endif %}
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"ec-input {{ has_errors(form.Payment) ? ' error' }}\">{{ form_errors(form.Payment) }}</div>
                </div>
                {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                    <div class=\"ec-orderPayment\">
                        <div class=\"ec-rectHeading\">
                            <h2>{{ '利用ポイント'|trans }}</h2>
                        </div>
                        <div class=\"ec-input {{ has_errors(form.use_point) ? ' error' }}\">
                            <p>{{ '%point% pt が利用可能です。'|trans({ '%point%': Order.Customer.Point|number_format }) }}</p>
                            {{ form_widget(form.use_point, { 'attr': { 'type': 'text', 'class': 'form-control', 'data-trigger': 'change' }}) }}
                            {{ form_errors(form.use_point) }}
                        </div>
                    </div>
                {% endif %}
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ '備考'|trans }}</h2>
                    </div>
                    <div class=\"ec-input\">
                        {{ form_widget(form.message, {'attr': {'class': 'form-control', 'placeholder': '(3000文字まで)'|trans, 'rows': '6'}}) }}
                        {{ form_errors(form.message) }}
                    </div>
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ '商品情報'|trans }}</h2>
                    </div>
                    {% for shipping in Order.shippings %}
                        {% set idx = loop.index0 %}
                        {% set isShowReducedTaxMess = false %}
                        <div class=\"ec-orderDelivery__title hiddenItem\">{{ 'お届け先'|trans }}{% if Order.multiple %}({{ loop.index }}){% endif %}
                            <div class=\"ec-orderDelivery__change\">
                                {% if is_granted('ROLE_USER') %}
                                    <button class=\"ec-inlineBtn\" data-id=\"{{ shipping.id }}\" data-trigger=\"click\" data-path=\"{{ path('shopping_shipping', {'id': shipping.id}) }}\">{{ '変更'|trans }}</button>
                                {% else %}
                                    <button class=\"ec-inlineBtn\" data-id=\"{{ shipping.id }}\" data-trigger=\"click\" data-path=\"{{ path('shopping_shipping_edit', {'id': shipping.id}) }}\">{{ '変更'|trans }}</button>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"ec-orderDelivery__item\">
                            <ul class=\"ec-borderedList\">
                                {% for orderItem in shipping.productOrderItems %}
                                    <li>
                                        <div class=\"ec-imageGrid\">
                                            <div class=\"ec-imageGrid__img\"><img src=\"{{ asset((orderItem.product is null ? null : orderItem.product.MainListImage)|no_image_product, 'save_image') }}\" alt=\"{{ orderItem.productName }}\"></div>
                                            <div class=\"ec-imageGrid__content\">
                                                <p>{{ orderItem.productName }}{% if is_reduced_tax_rate(orderItem) %}{{ '※'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}</p>
                                                {% if orderItem.productClass is not null and orderItem.productClass.classCategory1 %}
                                                    <p class='hiddenItem'>{{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}</p>
                                                {% endif %}
                                                {% if orderItem.productClass is not null and orderItem.productClass.classCategory2 %}
                                                    <p class='hiddenItem'>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}</p>
                                                {% endif %}
                                                <p class='hiddenItem'>{{ orderItem.priceIncTax|price }} × {{ orderItem.quantity|number_format }}<span>{{ '小計：'|trans }}{{ orderItem.totalPrice|price }}</span></p>
                                                <p>{{ orderItem.price|price }} × {{ orderItem.quantity|number_format }}<span>{{ '小計：'|trans }}{{ (orderItem.price*orderItem.quantity)|price }}</span></p>
                                                <p>({{ orderItem.basePrice|price }}
                                                {% if orderItem.wariKikanGaku is not null and orderItem.wariKikanGaku > 0 %}- 早割{{ orderItem.wariKikanGaku }}{% endif %}
                                                {% if orderItem.wariMatomeGaku is not null and orderItem.wariMatomeGaku > 0 %}- まとめ{{ orderItem.wariMatomeGaku }}{% endif %}
                                                {% if orderItem.wariAGaku is not null and orderItem.wariAGaku > 0 %}- FC割{{ orderItem.wariAGaku }}{% endif %}
                                                {% if orderItem.wariBGaku is not null and orderItem.wariBGaku > 0 %}- 社割{{ orderItem.wariBGaku }}{% endif %}
                                                )</p>
                                            </div>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                            <p>{{ isShowReducedTaxMess ? '※ は軽減税率対象商品です。'|trans }}</p>
                        </div>
                        <div class=\"ec-orderDelivery__address hiddenItem\">
                            <p>{{ ''|trans }}{{ shipping.name01 }} {{ shipping.name02 }} ({{ shipping.kana01 }} {{ shipping.kana02 }}){{ ' 様'|trans }}</p>
                            <p hidden>{{ '〒'|trans }}{{ shipping.postal_code }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}</p>
                            <p hidden>{{ shipping.phone_number }}</p>
                        </div>
                    {% endfor %}
                    <div class=\"ec-orderDelivery__edit hiddenItem\">
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"{{ path('shopping_shipping_multiple') }}\">{{ 'お届け先を追加する'|trans }}</button>
                    </div>
                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '商品合計'|trans }}</dt>
                        <dd class=\"ec-totalBox__specTotal\">{{ (Order.subtotal-Order.tax)|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '消費税'|trans }}</dt>
                        <dd class=\"ec-totalBox__specTotal\">{{ Order.tax|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>{{ '小計'|trans }}</dt>
                        <dd class=\"ec-totalBox__specTotal\">{{ Order.subtotal|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>{{ '手数料'|trans }}</dt>
                        <dd>{{ Order.charge|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>{{ '送料'|trans }}</dt>
                        <dd>{{ Order.deliveryFeeTotal|price }}</dd>
                    </dl>
                    {% if Order.taxable_discount < 0 %}
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>{{ '値引き'|trans }}</dt>
                        <dd>{{ Order.taxable_discount|price }}</dd>
                    </dl>
                    {% endif %}
                    <div class=\"ec-totalBox__total hiddenItem\">{{ '合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                    {% for rate, total in Order.taxable_total_by_tax_rate %}
                    <dl class=\"ec-totalBox__taxRate hiddenItem\">
                        <dt>{{ '税率 %rate% %対象'|trans({ '%rate%': rate }) }}</dt>
                        <dd>{{ total|price }}</dd>
                    </dl>
                    {% endfor %}
                    {% for item in Order.tax_free_discount_items %}
                        {% if loop.first %}<div class=\"ec-totalBox__total\"></div>{% endif %}
                        <dl class=\"ec-totalBox__spec\">
                            <dt>{{ item.product_name }}</dt>
                            <dd>{{ item.total_price|price }}</dd>
                        </dl>
                    {% endfor %}
                    <div class=\"ec-totalBox__paymentTotal\">{{ 'お支払い合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                    {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                    <div class=\"ec-totalBox__pointBlock\">
                        <dl class=\"ec-totalBox__spec\">
                            <dt>{{ 'ご利用ポイント'|trans }}</dt>
                            <dd>{{ Order.UsePoint|number_format }} pt</dd>
                        </dl>
                        <dl class=\"ec-totalBox__spec\">
                            <dt><span class=\"ec-font-bold\">{{ '加算ポイント'|trans }}</span></dt>
                            <dd><span class=\"ec-font-bold\">{{ Order.AddPoint|number_format }} pt</span></dd>
                        </dl>
                    </div>
                    {% endif %}
                    <div class=\"ec-totalBox__btn\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">{{ '確認する'|trans }}</button>
                        <a href=\"{{ url(\"cart\") }}\" class=\"ec-blockBtn--cancel\">{{ 'カートに戻る'|trans }}</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "Shopping/index.twig", "/var/www/htdocs/ec922501/app/template/default/Shopping/index.twig");
    }
}
