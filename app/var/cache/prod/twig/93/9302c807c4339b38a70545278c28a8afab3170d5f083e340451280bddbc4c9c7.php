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
class __TwigTemplate_86b1393dec4e4235f863177fcb3a82b85905b46859e29bb954556fd91c37c144 extends \Eccube\Twig\Template
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
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <script>
        \$(function() {
            textShainFlg();
            
            var \$redirectCallback = function() {
                loadingOverlay();
                \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
                \$('#shopping-form').attr('action', '";
        // line 23
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_redirect_to");
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
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_customer");
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
    }

    // line 154
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
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
            echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
            $context["step"] = (($context["step"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["step"] ?? null), "html", null, true);
        $context["step"] = (($context["step"] ?? null) + 1);
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_confirm");
        echo "\">
        ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 206), 'widget');
        echo "
        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "redirect_to", [], "any", false, false, false, 207), 'widget');
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 220), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 220), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                        <p class=\"ec-halfInput\">お名前（カナ）：<span class=\"customer-edit customer-kana01\">";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 221), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-kana02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 221), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                        ";
        // line 223
        echo "                        <p class=\"ec-input\">受　取　方　法：<span class=\"customer-edit customer-uketori\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "uketori", [], "any", false, false, false, 223), "html", null, true);
        echo "</p>
                        ";
        // line 225
        echo "                        <p class=\"ec-input\">来　店　受　取　日：<span class=\"customer-edit customer-Ukedate\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Ukedate", [], "any", false, false, false, 225), "Y年m月d日"), "html", null, true);
        echo "</p>
                        <p class=\"ec-input\">来　店　時　間：<span class=\"customer-edit customer-visit_t\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "visit_t", [], "any", false, false, false, 226), "html", null, true);
        echo "</p>
                        ";
        // line 227
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "uketori", [], "any", false, false, false, 227) != "店頭受取")) {
            // line 228
            echo "                        <p class=\"ec-input\">お届け先 郵便番号：<span class=\"customer-edit customer-h_postal_code\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_postal_code", [], "any", false, false, false, 228), "html", null, true);
            echo "</p>
                        <p class=\"ec-input\">お届け先 住所：<span class=\"customer-edit customer-h_pref customer-h_addr1 customer-h_addr2\">";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_pref", [], "any", false, false, false, 229), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_addr1", [], "any", false, false, false, 229), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_addr2", [], "any", false, false, false, 229), "html", null, true);
            echo "</p>
                        <p class=\"ec-nput\">お届け先　お名前（漢字）：<span class=\"customer-edit customer-h_name1 customer-name2\">";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_name1", [], "any", false, false, false, 230), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_name2", [], "any", false, false, false, 230), "html", null, true);
            echo "</p>
                        <p class=\"ec-halfInput\">お届け先　お名前（カナ）：<span class=\"customer-edit customer-h_kana1 customer-kana2\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_kana1", [], "any", false, false, false, 231), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_kana2", [], "any", false, false, false, 231), "html", null, true);
            echo "</p>
                        <p class=\"ec-telInput\">お届け先　お電話番号：<span class=\"customer-edit customer-h_phone_number\">";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "h_phone_number", [], "any", false, false, false, 232), "html", null, true);
            echo "</p>
                        ";
        }
        // line 234
        echo "                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-company_name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "companyName", [], "any", false, false, false, 234), "html", null, true);
        echo "</span></p>
                    ";
        // line 235
        if (twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_delivery_address_use", [], "any", false, false, false, 235)) {
            // line 236
            echo "                        <p class=\"ec-zipInput\">郵　便　番　号：<span class=\"customer-edit customer-postal_code\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 236), "html", null, true);
            echo "</span></p>
                        <p class=\"ec-input\">住　　　　　所：<span class=\"customer-edit customer-pref\">";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, false, 237), "html", null, true);
            echo "</span><span class=\"customer-edit customer-addr01\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 237), "html", null, true);
            echo "</span><span class=\"customer-edit customer-addr02\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 237), "html", null, true);
            echo "</span></p>
                    ";
        } else {
            // line 239
            echo "                        <p class=\"ec-zipInput hiddenItem\">〒<span class=\"customer-edit customer-postal_code\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 239), "html", null, true);
            echo "</span></p>
                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-pref\">";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, false, 240), "html", null, true);
            echo "</span><span class=\"customer-edit customer-addr01\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 240), "html", null, true);
            echo "</span><span class=\"customer-edit customer-addr02\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 240), "html", null, true);
            echo "</span></p>
                    ";
        }
        // line 242
        echo "                        <p class=\"ec-telInput\">電　話　番　号：<span class=\"customer-edit customer-phone_number\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 242), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input hiddenItem\"><span class=\"customer-edit customer-email\">";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 243), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\">受　　付　　者：<span class=\"customer-edit customer-uketsuke_name\">";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "uketsuke_name", [], "any", false, false, false, 244), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input hiddenItem\">紹　　介　　者：<span class=\"customer-edit customer-shoukai_name\">";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shoukai_name", [], "any", false, false, false, 245), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\">社　　　　　員：<span class=\"customer-edit customer-shain_flg\">";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shain_flg", [], "any", false, false, false, 246), "html", null, true);
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
            if (twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_delivery_address_use", [], "any", false, false, false, 289)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 479), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 480
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 480), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana01\" class=\"customer-in\" name=\"customer_kana01\" value=\"";
            // line 481
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 481), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana02\" class=\"customer-in\" name=\"customer_kana02\" value=\"";
            // line 482
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 482), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 483
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "companyName", [], "any", false, false, false, 483), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-postal_code\" class=\"customer-in\" name=\"customer_postal_code\" value=\"";
            // line 484
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 484), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 485
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, false, 485), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 486
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 486), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 487
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 487), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-phone_number\" class=\"customer-in\" name=\"customer_phone_number\" value=\"";
            // line 488
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 488), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 489
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 489), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-uketsuke_name\" class=\"customer-in\" name=\"customer_uketsuke_name\" value=\"";
            // line 490
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "uketsuke_name", [], "any", false, false, false, 490), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-shoukai_name\" class=\"customer-in\" name=\"customer_shoukai_name\" value=\"";
            // line 491
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shoukai_name", [], "any", false, false, false, 491), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-shain_flg\" class=\"customer-in\" name=\"customer_shain_flg\" value=\"";
            // line 492
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shain_flg", [], "any", false, false, false, 492), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-uketori\" class=\"customer-in\" name=\"customer_uketori\" value=\"";
            // line 493
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "uketori", [], "any", false, false, false, 493), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-shiharai\" class=\"customer-in\" name=\"customer_shiharai\" value=\"";
            // line 494
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shiharai", [], "any", false, false, false, 494), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer_Ukedate\" class=\"customer-in\" name=\"customer_Ukedate\" value=\"";
            // line 495
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Ukedate", [], "any", false, false, false, 495), "Y年m月d日"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer_visit_t\" class=\"customer-in\" name=\"customer_visit_t\" value=\"";
            // line 496
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "visit_t", [], "any", false, false, false, 496), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer_tenpos\" class=\"customer-in\" name=\"customer_tenpos\" value=\"";
            // line 497
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tenpos", [], "any", false, false, false, 497), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shippings", [], "any", false, false, false, 506));
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 513)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["idx"] ?? null)] ?? null) : null), "Delivery", [], "any", false, false, false, 513), 'widget', ["attr" => ["class" => "form-control", "data-trigger" => "change"]]);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 518)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, false, 518), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 519
            if ((twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 519)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, false, 519) == "")) {
                // line 520
                echo "                                    ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 520)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["idx"] ?? null)] ?? null) : null), "shipping_delivery_date", [], "any", false, false, false, 520) == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Ukedate", [], "any", false, false, false, 520), "Y年m月d日")), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 526)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["idx"] ?? null)] ?? null) : null), "DeliveryTime", [], "any", false, false, false, 526), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 527
            if ((twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 527)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["idx"] ?? null)] ?? null) : null), "DeliveryTime", [], "any", false, false, false, 527) == null)) {
                // line 528
                echo "                                    ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shippings", [], "any", false, false, false, 528)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[($context["idx"] ?? null)] ?? null) : null), "DeliveryTime", [], "any", false, false, false, 528) == twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "visit_t", [], "any", false, false, false, 528)), "html", null, true);
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping_multiple");
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 544));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 545
            echo "                            <div style=\"display: block;\">
                                ";
            // line 546
            $context["Payment"] = twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 546), "vars", [], "any", false, false, false, 546), "choices", [], "any", false, false, false, 546)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["key"]] ?? null) : null), "data", [], "any", false, false, false, 546);
            // line 547
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["data-trigger" => "change"]]);
            echo "
                                ";
            // line 548
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["Payment"] ?? null), "payment_image", [], "any", false, false, false, 548))) {
                // line 549
                echo "                                    <p><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["Payment"] ?? null), "payment_image", [], "any", false, false, false, 549), "save_image"), "html", null, true);
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
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 554))) ? (" error") : (""));
        echo "\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 554), 'errors');
        echo "</div>
                </div>
                ";
        // line 556
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 556) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 556)))) {
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
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 561))) ? (" error") : (""));
            echo "\">
                            <p>";
            // line 562
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%point% pt が利用可能です。", ["%point%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 562), "Point", [], "any", false, false, false, 562))]), "html", null, true);
            echo "</p>
                            ";
            // line 563
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 563), 'widget', ["attr" => ["type" => "text", "class" => "form-control", "data-trigger" => "change"]]);
            echo "
                            ";
            // line 564
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 564), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 573), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(3000文字まで)"), "rows" => "6"]]);
        echo "
                        ";
        // line 574
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 574), 'errors');
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shippings", [], "any", false, false, false, 581));
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
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, false, 584)) {
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
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 587)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            } else {
                // line 589
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 589), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 589)]), "html", null, true);
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
            ((($context["isShowReducedTaxMess"] ?? null)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("shopping_shipping_multiple");
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
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 637) - twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax", [], "any", false, false, false, 637))), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("消費税"), "html", null, true);
        echo "</dt>
                        <dd class=\"ec-totalBox__specTotal\">";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax", [], "any", false, false, false, 641)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                        <dd class=\"ec-totalBox__specTotal\">";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 645)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, false, 649)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "deliveryFeeTotal", [], "any", false, false, false, 653)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 655
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 655) < 0)) {
            // line 656
            echo "                    <dl class=\"ec-totalBox__spec hiddenItem\">
                        <dt>";
            // line 657
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 658
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 658)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 661
        echo "                    <div class=\"ec-totalBox__total hiddenItem\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, false, 661)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 662
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total_by_tax_rate", [], "any", false, false, false, 662));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, false, 668));
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
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 675)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 676
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 676) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 676)))) {
            // line 677
            echo "                    <div class=\"ec-totalBox__pointBlock\">
                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 679
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 680
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "UsePoint", [], "any", false, false, false, 680)), "html", null, true);
            echo " pt</dd>
                        </dl>
                        <dl class=\"ec-totalBox__spec\">
                            <dt><span class=\"ec-font-bold\">";
            // line 683
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                            <dd><span class=\"ec-font-bold\">";
            // line 684
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "AddPoint", [], "any", false, false, false, 684)), "html", null, true);
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに戻る"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
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
        return array (  1536 => 690,  1532 => 689,  1529 => 688,  1522 => 684,  1518 => 683,  1512 => 680,  1508 => 679,  1504 => 677,  1502 => 676,  1493 => 675,  1476 => 672,  1472 => 671,  1469 => 670,  1464 => 669,  1446 => 668,  1437 => 665,  1433 => 664,  1430 => 663,  1426 => 662,  1417 => 661,  1411 => 658,  1407 => 657,  1404 => 656,  1402 => 655,  1397 => 653,  1393 => 652,  1387 => 649,  1383 => 648,  1377 => 645,  1373 => 644,  1367 => 641,  1363 => 640,  1357 => 637,  1353 => 636,  1341 => 629,  1338 => 628,  1321 => 625,  1312 => 624,  1299 => 623,  1293 => 620,  1290 => 619,  1280 => 614,  1274 => 613,  1268 => 612,  1262 => 611,  1257 => 610,  1253 => 609,  1244 => 608,  1234 => 607,  1226 => 605,  1223 => 604,  1215 => 602,  1213 => 601,  1205 => 600,  1198 => 598,  1194 => 596,  1190 => 595,  1184 => 591,  1174 => 589,  1164 => 587,  1162 => 586,  1159 => 585,  1151 => 584,  1148 => 583,  1145 => 582,  1128 => 581,  1123 => 579,  1115 => 574,  1111 => 573,  1105 => 570,  1101 => 568,  1094 => 564,  1090 => 563,  1086 => 562,  1082 => 561,  1077 => 559,  1073 => 557,  1071 => 556,  1064 => 554,  1061 => 553,  1054 => 551,  1048 => 549,  1046 => 548,  1041 => 547,  1039 => 546,  1036 => 545,  1032 => 544,  1026 => 541,  1016 => 536,  1013 => 535,  996 => 531,  994 => 530,  988 => 528,  986 => 527,  982 => 526,  978 => 525,  974 => 523,  972 => 522,  966 => 520,  964 => 519,  960 => 518,  956 => 517,  952 => 515,  948 => 513,  944 => 512,  939 => 509,  936 => 508,  933 => 507,  916 => 506,  911 => 504,  906 => 501,  903 => 500,  901 => 499,  897 => 497,  893 => 496,  889 => 495,  885 => 494,  881 => 493,  877 => 492,  873 => 491,  869 => 490,  865 => 489,  861 => 488,  857 => 487,  853 => 486,  849 => 485,  845 => 484,  841 => 483,  837 => 482,  833 => 481,  829 => 480,  825 => 479,  820 => 477,  816 => 476,  803 => 466,  790 => 456,  777 => 446,  773 => 445,  760 => 435,  756 => 434,  752 => 432,  741 => 423,  737 => 422,  733 => 420,  722 => 411,  718 => 409,  707 => 400,  703 => 399,  690 => 389,  686 => 388,  673 => 378,  669 => 377,  655 => 366,  651 => 365,  640 => 357,  633 => 353,  626 => 349,  619 => 345,  612 => 341,  605 => 337,  597 => 332,  590 => 328,  586 => 327,  582 => 325,  564 => 309,  557 => 305,  549 => 300,  542 => 296,  538 => 295,  535 => 294,  531 => 292,  527 => 290,  525 => 289,  521 => 288,  517 => 287,  506 => 279,  492 => 268,  488 => 267,  474 => 256,  470 => 255,  465 => 252,  463 => 251,  455 => 246,  451 => 245,  447 => 244,  443 => 243,  438 => 242,  429 => 240,  424 => 239,  415 => 237,  410 => 236,  408 => 235,  403 => 234,  398 => 232,  393 => 231,  388 => 230,  382 => 229,  377 => 228,  375 => 227,  371 => 226,  366 => 225,  361 => 223,  353 => 221,  345 => 220,  342 => 219,  336 => 216,  333 => 215,  331 => 214,  326 => 212,  318 => 207,  314 => 206,  310 => 205,  304 => 202,  294 => 195,  291 => 194,  288 => 193,  281 => 189,  278 => 188,  275 => 187,  268 => 183,  265 => 182,  262 => 181,  259 => 180,  252 => 176,  249 => 175,  246 => 174,  243 => 173,  241 => 172,  235 => 169,  232 => 168,  229 => 167,  226 => 166,  224 => 165,  214 => 158,  209 => 155,  205 => 154,  181 => 132,  132 => 86,  77 => 33,  75 => 32,  63 => 23,  54 => 16,  50 => 15,  45 => 11,  43 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping/index.twig", "/var/www/htdocs/ec922501/app/template/default/Shopping/index.twig");
    }
}
