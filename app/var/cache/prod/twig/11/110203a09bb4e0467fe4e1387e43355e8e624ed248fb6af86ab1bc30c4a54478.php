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

/* @admin/Order/edit.twig */
class __TwigTemplate_cad3faaa6d8d304e2dcd8cb2619787cb18fa8bc1f701e3a96ee568b5155be72e extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "order", 1 => "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchCustomerModalForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 20
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchProductModalForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
    }

    // line 22
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
    <script>
        \$(function() {
            // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
            \$('input').on('keydown', function(e) {
                if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                    return false;
                } else {
                    return true;
                }
            });

            // 会員検索
            \$('#searchCustomerModalButton').on('click', function() {
                var list = \$('#searchCustomerModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_customer_html");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {'search_word': \$('#admin_search_customer_multi').val()}
                }).done(function(data) {
                    \$('#searchCustomerModalList').html(data);
                }).fail(function(data) {
                    alert('search customer failed.');
                });
            });

            // 商品検索
            \$('#searchProductModalButton').on('click', function() {
                var list = \$('#searchProductModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 58
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_product");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'id': \$('#admin_search_product_id').val(),
                        'category_id': \$('#admin_search_product_category_id').val()
                    }
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // その他明細
            \$('#addOrderItemType').on('show.bs.modal', function(e) {
                var list = \$('#searchOrderItemTypeList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 78
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_order_item_type");
        echo "',
                    type: 'POST',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchOrderItemTypeList').html(data);
                }).fail(function(data) {
                    alert('search order item type failed.');
                });
            });

            // ページング処理
            \$(document).on('click', '#searchProductModalList ul.pagination li.page-item a.page-link', function(e) {
                e.preventDefault();
                var list = \$('#searchProductModalList');
                list.children().remove();
                var url = \$(this).attr('href');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // 商品追加
            \$collectionHolder = \$('#table-form-field');
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#order_OrderItems_';

            \$(document).on('click', '.delete', function(e) {
                // 商品削除
                \$(this).parents('tr').remove();
                index--;
                \$(\"#calculate\").trigger('click');
            });

            // 計算結果の更新が押されたらページ内リンクさせる
            \$('.btn').click(function() {
                var data = \$(this).data();
                if (data.link) {
                    \$('#form1').attr('action', '#' + data.link).submit();
                    return false;
                }
            });

            // 注文者情報をコピー
            \$('.copy-customer').on('click', function() {
                \$('#order_Shipping_name_name01').val(\$('#order_name_name01').val());
                \$('#order_Shipping_name_name02').val(\$('#order_name_name02').val());
                \$('#order_Shipping_kana_kana01').val(\$('#order_kana_kana01').val());
                \$('#order_Shipping_kana_kana02').val(\$('#order_kana_kana02').val());
                \$('#order_Shipping_postal_code').val(\$('#order_postal_code').val());
                \$('#order_Shipping_address_pref').val(\$('#order_address_pref').val());
                \$('#order_Shipping_address_addr01').val(\$('#order_address_addr01').val());
                \$('#order_Shipping_address_addr02').val(\$('#order_address_addr02').val());
                \$('#order_Shipping_email').val(\$('#order_email').val());
                \$('#order_Shipping_phone_number').val(\$('#order_phone_number').val());
                \$('#order_Shipping_company_name').val(\$('#order_company_name').val());

            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // お届け時間の初期表示
            \$('#order_Shipping_Delivery').change();

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    \$('#form1').append('<input type=\"hidden\" name=\"mode\" value=\"register\">');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))

            // 配送業者選択時にお届け時間を設定
            var times = ";
        // line 175
        echo ($context["shippingDeliveryTimes"] ?? null);
        echo ";
            \$('#order_Shipping_Delivery').change(function() {
                var deliveryId = \$(this).val();
                var \$shippingDeliveryTime = \$('#order_Shipping_DeliveryTime');
                \$shippingDeliveryTime.find('option').remove();
                \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));
                if (typeof(times[deliveryId]) !== 'undefined') {
                    for (var timeId in times[deliveryId]) {
                        timeValue = times[deliveryId][timeId];
                        \$shippingDeliveryTime.append(\$('<option></option>')
                            .val(timeId)
                            .text(timeValue));
                    }
                }
            });
        });

        ";
        // line 193
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 193) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 193)))) {
            // line 194
            echo "            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = ";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "point_conversion_rate", [], "any", false, false, false, 197), "html", null, true);
            echo ";
                // 利用ポイント
                var usePoint = \$('#order_use_point').val();

                // 利用ポイントが数値以外の時は割引金額を更新しない
                if (isNaN(usePoint)) return;

                // 割引金額を計算
                var discountPrice = (-1) * pointConversionRate * usePoint;

                // ポイント明細の金額の要素を取得
                var \$pointPrice = \$('.pointPrice');

                // ポイント明細の金額の要素がある場合はポイントの更新
                if (\$pointPrice.length) {
                    \$pointPrice.val(discountPrice);
                }
            }
        ";
        }
        // line 216
        echo "    </script>
";
    }

    // line 219
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        echo "<style>
    .delivery-address-use {
        ";
        // line 222
        if (( !twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_delivery_address_use", [], "any", true, true, false, 222) || (twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_delivery_address_use", [], "any", false, false, false, 222) == false))) {
            // line 223
            echo "            display: none;
        ";
        }
        // line 225
        echo "    }
    .hiddenItem {
        display: none !important;
    }
</style>
";
    }

    // line 232
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        echo "    ";
        // line 234
        echo "    ";
        $context["action_disabled"] = false;
        // line 235
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, false, 235)) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, false, 235), "id", [], "any", false, false, false, 235), [0 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PROCESSING"), 1 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PENDING")]))) {
            // line 237
            $context["action_disabled"] = true;
        }
        // line 239
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"";
        // line 264
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 264) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 264)))) {
            echo " onsubmit=\"updatePointItem()\"";
        }
        echo ">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        <input type=\"hidden\" name=\"modal\" value=\"\">
        ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 267), 'widget');
        echo "
        ";
        // line 268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "return_link", [], "any", false, false, false, 268), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_no"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                            <div class=\"col\">";
        // line 287
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, false, 287), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_name"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 291
        (((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Saiji", [], "any", false, false, false, 291) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Saiji", [], "any", false, false, false, 291), "name", [], "any", false, false, false, 291), "html", null, true))));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_name"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 295
        (((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Tenpo", [], "any", false, false, false, 295) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Tenpo", [], "any", false, false, false, 295), "tenpoName", [], "any", false, false, false, 295), "html", null, true))));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                            <div class=\"col\">
                                                ";
        // line 300
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 300))) {
            // line 301
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderStatus", [], "any", false, false, false, 301), 'widget');
            echo "
                                                    ";
            // line 302
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderStatus", [], "any", false, false, false, 302), 'errors');
            echo "
                                                ";
        }
        // line 304
        echo "                                            </div>
                                        </div>
                                        <div class=\"row mb-3 form-group\">
                                            <div class=\"col-3\">";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.uketsuke_name"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">
                                                ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uketsuke_name", [], "any", false, false, false, 309), 'widget');
        echo "
                                                ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "uketsuke_name", [], "any", false, false, false, 310), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw mr-1 hiddenItem\" aria-hidden=\"true\"></i>";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 317
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, false, 317)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, false, 317)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3 hiddenItem\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 321
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_date", [], "any", false, false, false, 321)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_date", [], "any", false, false, false, 321)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        ";
        // line 323
        if ( !twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 323)) {
            // line 324
            echo "                                            <div class=\"row mb-3 hiddenItem\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_date"), "html", null, true);
            echo "</div>
                                                <div class=\"col\">
                                                    ";
            // line 327
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 327)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "shipping_date", [], "any", false, false, false, 327)), "html", null, true);
            echo "
                                                </div>
                                            </div>
                                        ";
        }
        // line 331
        echo "                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw mr-1 hiddenItem\" aria-hidden=\"true\"></i>";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 333
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "update_date", [], "any", false, false, false, 333)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "update_date", [], "any", false, false, false, 333)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        ";
        // line 335
        if (( !twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_wari_use", [], "any", true, true, false, 335) || twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_wari_use", [], "any", false, false, false, 335))) {
            // line 336
            echo "                                            <div class=\"row mb-3\">
                                                <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw mr-1 hiddenItem\" aria-hidden=\"true\"></i>";
            // line 337
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.wari_kikan_flg"), "html", null, true);
            echo "</div>
                                                ";
            // line 338
            if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "wari_kikan_flg", [], "any", false, false, false, 338) == true)) {
                // line 339
                echo "                                                    <div class=\"col\">○対象　";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "wari_kikan_value", [], "any", false, false, false, 339), "html", null, true);
                echo "%</div>
                                                ";
            } else {
                // line 341
                echo "                                                    <div class=\"col\">-</div>
                                                ";
            }
            // line 343
            echo "                                            </div>
                                        ";
        }
        // line 345
        echo "                                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_receipt_no_use", [], "any", false, false, false, 345)) {
            // line 346
            echo "                                            <div class=\"row mb-3\">
                                                <div class=\"col-3 col-form-label\">";
            // line 347
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.receipt_no"), "html", null, true);
            echo "</div>
                                                <div class=\"col\">
                                                    ";
            // line 349
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "receipt_no", [], "any", false, false, false, 349), 'widget');
            echo "
                                                    ";
            // line 350
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "receipt_no", [], "any", false, false, false, 350), 'errors');
            echo "
                                                </div>
                                            </div>
                                        ";
        }
        // line 354
        echo "                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 357), 'widget');
        echo "
                                                ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 358), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3 col-form-label\">";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shoukai.name"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">
                                                ";
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shoukai_name", [], "any", false, false, false, 364), 'widget');
        echo "
                                                ";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shoukai_name", [], "any", false, false, false, 365), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 372
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 372), "eccube_form_options", [], "any", false, false, false, 372), "auto_render", [], "any", false, false, false, 372); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 373
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 373), "eccube_form_options", [], "any", false, false, false, 373), "form_theme", [], "any", false, false, false, 373)) {
                // line 374
                echo "                                        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 374), "eccube_form_options", [], "any", false, false, false, 374), "form_theme", [], "any", false, false, false, 374)], true);
                // line 375
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                                    ";
            } else {
                // line 377
                echo "                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-3\">
                                                        <span>";
                // line 381
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 381), "label", [], "any", false, false, false, 381)), "html", null, true);
                echo "</span>
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
                // line 384
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                                        ";
                // line 385
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 391
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                                </div>
                                <div class=\"col\">";
        // line 402
        if (($context["id"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "full_name_kana", [], "any", false, false, false, 402), "html", null, true);
            echo "　";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 402), "html", null, true);
        }
        echo "</div>
                                <div class=\"col-1 text-right\"><a class=\"d-block\" data-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa ";
        // line 403
        echo ((($context["id"] ?? null)) ? ("fa-angle-down") : ("fa-angle-up"));
        echo " fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                ";
        // line 409
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 409))) {
            // line 410
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-ec-regular px-3\" data-toggle=\"modal\" data-target=\"#searchCustomerModal\">";
            // line 412
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_from_customer"), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                    <!-- 会員検索モーダル -->
                                    <div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCustomerModal\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title font-weight-bold\">";
            // line 420
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_customer_title"), "html", null, true);
            echo "</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    ";
            // line 424
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchCustomerModalForm"] ?? null), "multi", [], "any", false, false, false, 424), 'widget', ["attr" => ["class" => "mb-2searchCustomerModal", "placeholder" => "admin.customer.multi_search_label"]]);
            echo "
                                                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 425
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                    <div class=\"form-group\" id=\"searchCustomerModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 432
        echo "
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row hiddenItem\">
                                            <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.customer_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">";
        // line 438
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 438), "vars", [], "any", false, false, false, 438), "value", [], "any", false, false, false, 438))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 438), "vars", [], "any", false, false, false, 438), "value", [], "any", false, false, false, 438)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 438), "vars", [], "any", false, false, false, 438), "value", [], "any", false, false, false, 438), "html", null, true);
            echo "</a>";
        }
        echo "</p>
                                                ";
        // line 439
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 439), 'widget');
        echo "
                                                ";
        // line 440
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 440), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 448), "name01", [], "any", false, false, false, 448), 'widget');
        echo "
                                                        ";
        // line 449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 449), "name01", [], "any", false, false, false, 449), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 452), "name02", [], "any", false, false, false, 452), 'widget');
        echo "
                                                        ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 453), "name02", [], "any", false, false, false, 453), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 463), "kana01", [], "any", false, false, false, 463), 'widget');
        echo "
                                                        ";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 464), "kana01", [], "any", false, false, false, 464), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 467
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 467), "kana02", [], "any", false, false, false, 467), 'widget');
        echo "
                                                        ";
        // line 468
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 468), "kana02", [], "any", false, false, false, 468), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 476), 'widget');
        echo "
                                                ";
        // line 477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 477), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shain_flg"), "html", null, true);
        echo "</label>
                                            ";
        // line 482
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "shain_flg", [], "any", false, false, false, 482) == true)) {
            // line 483
            echo "                                                <div class=\"col\">○</div>
                                            ";
        } else {
            // line 485
            echo "                                                <div class=\"col\">-</div>
                                            ";
        }
        // line 487
        echo "                                        </div>
                                        <div class=\"row form-group delivery-address-use\">
                                            <label class=\"col-3 col-form-label\">";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col form-inline\">
                                                        ";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "
                                                        ";
        // line 494
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 494), 'widget');
        echo "
                                                        ";
        // line 495
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 495), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 500), "pref", [], "any", false, false, false, 500), 'widget');
        echo "
                                                        ";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 501), "pref", [], "any", false, false, false, 501), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 506
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 506), "addr01", [], "any", false, false, false, 506), 'widget');
        echo "
                                                        ";
        // line 507
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 507), "addr01", [], "any", false, false, false, 507), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 512
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 512), "addr02", [], "any", false, false, false, 512), 'widget');
        echo "
                                                        ";
        // line 513
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 513), "addr02", [], "any", false, false, false, 513), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 550
        echo "                                    <div class=\"col-6\">
                                                <div class=\"form-group hiddenItem\">
                                                    <label class=\"col-form-label\">";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                                    ";
        // line 553
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 553), 'widget');
        echo "
                                                    ";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 554), 'errors');
        echo "
                                                </div>
                                                <div class=\"form-group hiddenItem\">
                                                    <label class=\"col-form-label\">";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</label>
                                                    ";
        // line 558
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 558), 'widget');
        echo "
                                                    ";
        // line 559
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 559), 'errors');
        echo "
                                                </div>
                                                <div class=\"row form-group\">
                                                        <label class=\"col-3 col-form-label\">お問い合わせ</label>
                                                    <div class=\"col\">
                                                        <textarea id=\"order_message\" name=\"order[message]\" rows=\"8\" cols=\"8\" class=\"form-control\"> ";
        // line 564
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 564), "html", null, true);
        echo "</textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                ";
        // line 585
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 585)) {
            // line 586
            echo "                                    ";
            // line 587
            echo "                                    <div class=\"mb-3 hiddenItem\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 588
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
            // line 589
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 589)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping"), "html", null, true);
            echo "</a>
                                        <span class=\"ml-3\">";
            // line 590
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping_description"), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 592
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 592));
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
                // line 593
                echo "                                        <div class=\"col hiddenItem\">
                                            <span class=\"mr-5\">";
                // line 594
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 594), "html", null, true);
                echo ")</span>
                                            ";
                // line 595
                $context["shipping_name"] = ((((((twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name", [], "any", false, false, false, 595) . "(") . twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name_kana", [], "any", false, false, false, 595)) . ")") .  !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, false, 595)))) ? (twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, false, 595)) : (""));
                // line 596
                echo "                                            ";
                $context["shipping_addr"] = ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 596)) . " ") . twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 596)) . twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 596)) . twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 596));
                // line 597
                echo "                                            ";
                $context["shipping_date"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, false, 597))) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, false, 597))) : (""));
                // line 598
                echo "                                            ";
                echo twig_escape_filter($this->env, ($context["shipping_name"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["shipping_addr"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 598), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["shipping_date"] ?? null), "html", null, true);
                echo "
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
            // line 601
            echo "                                ";
        } else {
            // line 602
            echo "                                    ";
            // line 603
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <!--<button type=\"button\" class=\"btn btn-ec-regular copy-customer\">";
            // line 605
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.copy_orderer"), "html", null, true);
            echo "</button>-->
                                            ";
            // line 606
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 606))) {
                // line 607
                echo "                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_pdf_y01");
                echo "?ids[]=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 607)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "id", [], "any", false, false, false, 607), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 609
            echo "                                        </div>
                                        ";
            // line 610
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 610))) {
                // line 611
                echo "                                            <div class=\"col-6 text-right\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"";
                // line 612
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
                // line 613
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 613)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_shipping"), "html", null, true);
                echo "</a>
                                            </div>
                                        ";
            }
            // line 616
            echo "                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6 hiddenItem\">
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 621
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 625
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 625), "name", [], "any", false, false, false, 625), "name01", [], "any", false, false, false, 625), 'widget');
            echo "
                                                            ";
            // line 626
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 626), "name", [], "any", false, false, false, 626), "name01", [], "any", false, false, false, 626), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 629
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 629), "name", [], "any", false, false, false, 629), "name02", [], "any", false, false, false, 629), 'widget');
            echo "
                                                            ";
            // line 630
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 630), "name", [], "any", false, false, false, 630), "name02", [], "any", false, false, false, 630), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 636
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 640
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 640), "kana", [], "any", false, false, false, 640), "kana01", [], "any", false, false, false, 640), 'widget');
            echo "
                                                            ";
            // line 641
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 641), "kana", [], "any", false, false, false, 641), "kana01", [], "any", false, false, false, 641), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 644
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 644), "kana", [], "any", false, false, false, 644), "kana02", [], "any", false, false, false, 644), 'widget');
            echo "
                                                            ";
            // line 645
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 645), "kana", [], "any", false, false, false, 645), "kana02", [], "any", false, false, false, 645), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 651
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col form-inline\">
                                                            ";
            // line 655
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "
                                                            ";
            // line 656
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 656), "postal_code", [], "any", false, false, false, 656), 'widget');
            echo "
                                                            ";
            // line 657
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 657), "postal_code", [], "any", false, false, false, 657), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 662
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 662), "address", [], "any", false, false, false, 662), "pref", [], "any", false, false, false, 662), 'widget');
            echo "
                                                            ";
            // line 663
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 663), "address", [], "any", false, false, false, 663), "pref", [], "any", false, false, false, 663), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 668
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 668), "address", [], "any", false, false, false, 668), "addr01", [], "any", false, false, false, 668), 'widget');
            echo "
                                                            ";
            // line 669
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 669), "address", [], "any", false, false, false, 669), "addr01", [], "any", false, false, false, 669), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 674
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 674), "address", [], "any", false, false, false, 674), "addr02", [], "any", false, false, false, 674), 'widget');
            echo "
                                                            ";
            // line 675
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 675), "address", [], "any", false, false, false, 675), "addr02", [], "any", false, false, false, 675), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6 hiddenItem\">
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 683
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    ";
            // line 685
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 685), "phone_number", [], "any", false, false, false, 685), 'widget');
            echo "
                                                    ";
            // line 686
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 686), "phone_number", [], "any", false, false, false, 686), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 691
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 693
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 693), "company_name", [], "any", false, false, false, 693), 'widget');
            echo "
                                                    ";
            // line 694
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 694), "company_name", [], "any", false, false, false, 694), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12\">
                                            <hr>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 form-group hiddenItem\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 703
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.tracking_number"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 705
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 705), "tracking_number", [], "any", false, false, false, 705), 'widget');
            echo "
                                                    ";
            // line 706
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 706), "tracking_number", [], "any", false, false, false, 706), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group hiddenItem\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 710
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.delivery_provider"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_provider"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\"></span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 712
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 712), "Delivery", [], "any", false, false, false, 712), 'widget');
            echo "
                                                    ";
            // line 713
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 713), "Delivery", [], "any", false, false, false, 713), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 717
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.for_delivery_date"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 719
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 719), "shipping_delivery_date", [], "any", false, false, false, 719), 'widget');
            echo "
                                                    ";
            // line 720
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 720), "shipping_delivery_date", [], "any", false, false, false, 720), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 724
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.for_delivery_time"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 726
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 726), "DeliveryTime", [], "any", false, false, false, 726), 'widget');
            echo "
                                                    ";
            // line 727
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 727), "DeliveryTime", [], "any", false, false, false, 727), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 733
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.shop_memo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shop_memo_for_delivery"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 735
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 735), "note", [], "any", false, false, false, 735), 'widget');
            echo "
                                                    ";
            // line 736
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 736), "note", [], "any", false, false, false, 736), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 742
        echo "                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.product_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.product_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        ";
        // line 759
        echo "                                        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 759)) {
            // line 760
            echo "                                            <a class=\"btn btn-ec-regular mr-2 add\" data-toggle=\"modal\" data-target=\"#addProduct\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">";
            // line 765
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</h5>
                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            ";
            // line 769
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "id", [], "any", false, false, false, 769), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
            echo "
                                                            ";
            // line 770
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "category_id", [], "any", false, false, false, 770), 'widget');
            echo "
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 771
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 778
        echo "                                        <a class=\"btn btn-ec-regular mr-2 hiddenItem\" data-toggle=\"modal\" data-target=\"#addOrderItemType\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">";
        // line 783
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</h5>
                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <div id=\"searchOrderItemTypeList\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 792
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItemsErrors", [], "any", false, false, false, 792), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-5 text-right\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular mr-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"";
        // line 795
        echo ((($context["action_disabled"] ?? null)) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.update_calculation_results"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"";
        // line 799
        ob_start(function () { return ''; });
        echo twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItems", [], "any", false, false, false, 799), "vars", [], "any", false, false, false, 799), "prototype", [], "any", false, false, false, 799)]);
        $___internal_a894da1b5cb41e14bdb25d486655ebffc99318d199b96f4eaf6aaaae09588e48_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_a894da1b5cb41e14bdb25d486655ebffc99318d199b96f4eaf6aaaae09588e48_);
        echo "\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 pl-3\">";
        // line 802
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 804
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 807
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 810
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 813
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pr-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 822
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItems", [], "any", false, false, false, 822));
        foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
            // line 823
            echo "                                        ";
            $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 823), "data", [], "any", false, false, false, 823);
            // line 824
            echo "                                        <tr>
                                            ";
            // line 826
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, false, 826), 'widget');
            echo "
                                            ";
            // line 827
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, false, 827), 'widget');
            echo "
                                            ";
            // line 828
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, false, 828), 'widget');
            echo "
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 pl-3\">
                                                <p class=\"mb-0 font-weight-bold\">
                                                    ";
            // line 833
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 833) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 833))) {
                // line 834
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 834)) {
                    // line 835
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "ProductClass", [], "any", false, false, false, 835), "Product", [], "any", false, false, false, 835), "id", [], "any", false, false, false, 835)]), "html", null, true);
                    echo "\" target=\"_blank\">
                                                                ";
                    // line 836
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, false, 836), "html", null, true);
                    echo "
                                                            </a>
                                                        ";
                } else {
                    // line 839
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, false, 839), "html", null, true);
                    echo "
                                                        ";
                }
                // line 841
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 841), 'widget', ["type" => "hidden"]);
                echo "
                                                    ";
            } else {
                // line 843
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 843), 'widget');
                echo "
                                                    ";
            }
            // line 845
            echo "                                                </p>
                                                <span>
                                                    ";
            // line 847
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_code", [], "any", false, false, false, 847), "html", null, true);
            echo "
                                                    ";
            // line 848
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name1", [], "any", false, false, false, 848))) {
                // line 849
                echo "                                                        / (
                                                        ";
                // line 850
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_name1", [], "any", false, false, false, 850), "html", null, true);
                echo "：
                                                        ";
                // line 851
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name1", [], "any", false, false, false, 851), "html", null, true);
                echo "
                                                        ";
                // line 852
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name2", [], "any", false, false, false, 852))) {
                    // line 853
                    echo "                                                            /
                                                            ";
                    // line 854
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_name2", [], "any", false, false, false, 854), "html", null, true);
                    echo "：
                                                            ";
                    // line 855
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name2", [], "any", false, false, false, 855), "html", null, true);
                    echo "
                                                        ";
                }
                // line 857
                echo "                                                        )
                                                    ";
            }
            // line 859
            echo "                                                </span>
                                                ";
            // line 860
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 860), 'errors');
            echo "
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    ";
            // line 866
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 866)) {
                // line 867
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 867), 'widget', ["attr" => ["readonly" => "readonly", "class" => "pointPrice"]]);
                echo "
                                                    ";
            } else {
                // line 869
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 869), 'widget');
                echo "
                                                    ";
            }
            // line 871
            echo "                                                    <div class=\"text-right small\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "TaxDisplayType", [], "any", false, false, false, 871), "html", null, true);
            echo ")</div>
                                                    ";
            // line 872
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 872), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 879
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 879) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 879)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 879))) {
                // line 880
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 880), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 882
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 882), 'widget');
                echo "
                                                    ";
            }
            // line 884
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 884), 'errors');
            echo "
                                          
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 892
            echo "                                                    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 892) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 892)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 892)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "TaxType", [], "any", false, false, false, 892), "id", [], "any", false, false, false, 892) == twig_constant("Eccube\\Entity\\Master\\TaxType::NON_TAXABLE")))) {
                // line 893
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 893), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 895
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 895), 'widget');
                echo "
                                                    ";
            }
            // line 897
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 897), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    ";
            // line 903
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "tax_type", [], "any", false, false, false, 903), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>";
            // line 909
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "price", [], "any", false, false, false, 909) * twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "quantity", [], "any", false, false, false, 909))), "html", null, true);
            echo "</span>
                                                </div>
                                                <div class=\"col hiddenItem\">
                                                    <span>";
            // line 912
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "total_price", [], "any", false, false, false, 912)), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-right pr-3\">
                                                <div class=\"row justify-content-end\">
                                                    ";
            // line 918
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 918) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 918)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 918))) {
                // line 919
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"";
                // line 921
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    ";
            } else {
                // line 928
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"";
                // line 930
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_";
                // line 931
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 931), "id", [], "any", false, false, false, 931), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_";
                // line 936
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 936), "id", [], "any", false, false, false, 936), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 936), "id", [], "any", false, false, false, 936), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title font-weight-bold\">";
                // line 940
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                <span aria-hidden=\"true\">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-left\">
                                                                            <p class=\"text-left\">";
                // line 946
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, false, 946)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 949
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">";
                // line 950
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 957
            echo "                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 961
        echo "                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 商品合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 966
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品合計"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 967
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 967) - twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax", [], "any", false, false, false, 967))), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 消費税 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 971
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("消費税"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"align-middle font-weight-normal\">";
        // line 972
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax", [], "any", false, false, false, 972)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 976
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 977
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 977)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 981
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_fee"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 982
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, false, 982)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 986
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 987
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, false, 987)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 991
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.discount"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle text-danger font-weight-normal\">";
        // line 992
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 992)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 997
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 998
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, false, 998)), "html", null, true);
        echo "</span></div>
                                </div>
                                ";
        // line 1000
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total_by_tax_rate", [], "any", false, false, false, 1000));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 1001
            echo "                                    <div class=\"row justify-content-end mb-3 hiddenItem\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 1002
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-2 text-right\"><span class=\"align-middle font-weight-normal\">";
            // line 1003
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</span></div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1006
        echo "                                <hr>
                                ";
        // line 1007
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, false, 1007));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1008
            echo "                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 1009
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 1009), "html", null, true);
            echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle text-danger font-weight-normal\">";
            // line 1010
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 1010)), "html", null, true);
            echo "</span></div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1013
        echo "                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 1015
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 1016
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 1016)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 1021
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\">
                                        <span class=\"h4 align-middle font-weight-normal\">
                                            ";
        // line 1024
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 1024), "value", [], "any", false, false, false, 1024), "addpoint", [], "any", false, false, false, 1024)), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 1030
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.use_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\">
                                        <span class=\"h4 align-middle font-weight-normal\">
                                            ";
        // line 1034
        echo "                                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 1034) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 1034)))) {
            // line 1035
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 1035), 'widget');
            echo "
                                            ";
        } else {
            // line 1037
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 1037), 'widget', ["attr" => ["readonly" => "readonly"]]);
            echo "
                                            ";
        }
        // line 1039
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 1039), 'errors');
        echo "
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 1051
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shop_memo"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                ";
        // line 1058
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 1058), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- メール送信履歴 -->
                    ";
        // line 1063
        if ( !(null === ($context["id"] ?? null))) {
            // line 1064
            echo "                        <div class=\"card rounded border-0 mb-4 hiddenItem\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 1068
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.mail_history"), "html", null, true);
            echo "\"><span class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_history"), "html", null, true);
            echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                    </div>
                                    <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#mailHistory\" aria-expanded=\"false\" aria-controls=\"mailHistory\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"mailHistory\">
                                <div class=\"card-body\">
                                    <table class=\"table table-striped\">
                                        <thead class=\"table-active\">
                                        <tr>
                                            <th class=\"pt-2 pb-2 pl-3\">";
            // line 1078
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send_date"), "html", null, true);
            echo "</th>
                                            <th class=\"pt-2 pb-2 pr-3\">";
            // line 1079
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
            echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 1083
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MailHistories", [], "any", false, false, false, 1083));
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
            foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
                // line 1084
                echo "                                            <tr>
                                                <td class=\"pl-3\">";
                // line 1085
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, false, 1085)), "html", null, true);
                echo "</td>
                                                <td class=\"pr-3\">
                                                    <a class=\"text-primary\" data-toggle=\"modal\" data-target=\"#mail2-";
                // line 1087
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1087), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 1087), "html", null, true);
                echo "</a>
                                                    <div class=\"modal fade\" id=\"mail2-";
                // line 1088
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1088), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1088), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">";
                // line 1092
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 1092), "html", null, true);
                echo "</h5>
                                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        ";
                // line 1097
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, false, 1097)) > 0)) {
                    // line 1098
                    echo "                                                                            ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, false, 1098));
                    echo "
                                                                        ";
                } else {
                    // line 1100
                    echo "                                                                            ";
                    echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, false, 1100), "html", null, true));
                    echo "
                                                                        ";
                }
                // line 1102
                echo "                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-dismiss=\"modal\">";
                // line 1105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
                echo "</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1113
            echo "                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 1116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail")]), "html", null, true);
            // line 1118
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 1118)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_create"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    ";
        }
        // line 1124
        echo "                </div>
            </div>
        </div>
        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 1133
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"";
        // line 1139
        echo ((($context["action_disabled"] ?? null)) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@admin/Order/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2197 => 1139,  2186 => 1133,  2175 => 1124,  2163 => 1118,  2161 => 1116,  2156 => 1113,  2134 => 1105,  2129 => 1102,  2123 => 1100,  2117 => 1098,  2115 => 1097,  2107 => 1092,  2098 => 1088,  2092 => 1087,  2087 => 1085,  2084 => 1084,  2067 => 1083,  2060 => 1079,  2056 => 1078,  2041 => 1068,  2035 => 1064,  2033 => 1063,  2025 => 1058,  2013 => 1051,  1997 => 1039,  1991 => 1037,  1985 => 1035,  1982 => 1034,  1976 => 1030,  1967 => 1024,  1961 => 1021,  1953 => 1016,  1949 => 1015,  1945 => 1013,  1936 => 1010,  1932 => 1009,  1929 => 1008,  1925 => 1007,  1922 => 1006,  1913 => 1003,  1909 => 1002,  1906 => 1001,  1902 => 1000,  1897 => 998,  1893 => 997,  1885 => 992,  1881 => 991,  1874 => 987,  1870 => 986,  1863 => 982,  1859 => 981,  1852 => 977,  1848 => 976,  1841 => 972,  1837 => 971,  1830 => 967,  1826 => 966,  1819 => 961,  1810 => 957,  1800 => 950,  1796 => 949,  1790 => 946,  1781 => 940,  1772 => 936,  1764 => 931,  1760 => 930,  1756 => 928,  1746 => 921,  1742 => 919,  1739 => 918,  1731 => 912,  1725 => 909,  1716 => 903,  1706 => 897,  1700 => 895,  1694 => 893,  1691 => 892,  1680 => 884,  1674 => 882,  1668 => 880,  1665 => 879,  1656 => 872,  1651 => 871,  1645 => 869,  1639 => 867,  1636 => 866,  1628 => 860,  1625 => 859,  1621 => 857,  1616 => 855,  1612 => 854,  1609 => 853,  1607 => 852,  1603 => 851,  1599 => 850,  1596 => 849,  1594 => 848,  1590 => 847,  1586 => 845,  1580 => 843,  1574 => 841,  1568 => 839,  1562 => 836,  1557 => 835,  1554 => 834,  1551 => 833,  1544 => 828,  1540 => 827,  1535 => 826,  1532 => 824,  1529 => 823,  1525 => 822,  1516 => 816,  1510 => 813,  1504 => 810,  1498 => 807,  1492 => 804,  1487 => 802,  1478 => 799,  1469 => 795,  1463 => 792,  1451 => 783,  1442 => 778,  1432 => 771,  1428 => 770,  1424 => 769,  1417 => 765,  1408 => 760,  1405 => 759,  1391 => 749,  1382 => 742,  1373 => 736,  1369 => 735,  1362 => 733,  1353 => 727,  1349 => 726,  1344 => 724,  1337 => 720,  1333 => 719,  1328 => 717,  1321 => 713,  1317 => 712,  1310 => 710,  1303 => 706,  1299 => 705,  1292 => 703,  1280 => 694,  1276 => 693,  1271 => 691,  1263 => 686,  1259 => 685,  1252 => 683,  1241 => 675,  1237 => 674,  1229 => 669,  1225 => 668,  1217 => 663,  1213 => 662,  1205 => 657,  1201 => 656,  1197 => 655,  1188 => 651,  1179 => 645,  1175 => 644,  1169 => 641,  1165 => 640,  1156 => 636,  1147 => 630,  1143 => 629,  1137 => 626,  1133 => 625,  1124 => 621,  1117 => 616,  1108 => 613,  1106 => 612,  1103 => 611,  1101 => 610,  1098 => 609,  1088 => 607,  1086 => 606,  1082 => 605,  1078 => 603,  1076 => 602,  1073 => 601,  1049 => 598,  1046 => 597,  1043 => 596,  1041 => 595,  1035 => 594,  1032 => 593,  1015 => 592,  1010 => 590,  1003 => 589,  1001 => 588,  998 => 587,  996 => 586,  994 => 585,  982 => 578,  965 => 564,  957 => 559,  953 => 558,  949 => 557,  943 => 554,  939 => 553,  933 => 552,  929 => 550,  920 => 513,  916 => 512,  908 => 507,  904 => 506,  896 => 501,  892 => 500,  884 => 495,  880 => 494,  876 => 493,  867 => 489,  863 => 487,  859 => 485,  855 => 483,  853 => 482,  849 => 481,  842 => 477,  838 => 476,  831 => 474,  822 => 468,  818 => 467,  812 => 464,  808 => 463,  799 => 459,  790 => 453,  786 => 452,  780 => 449,  776 => 448,  767 => 444,  760 => 440,  756 => 439,  744 => 438,  737 => 436,  731 => 432,  721 => 425,  717 => 424,  710 => 420,  699 => 412,  695 => 410,  693 => 409,  684 => 403,  676 => 402,  671 => 400,  661 => 392,  655 => 391,  646 => 385,  642 => 384,  636 => 381,  630 => 377,  624 => 375,  621 => 374,  618 => 373,  613 => 372,  604 => 365,  600 => 364,  595 => 362,  588 => 358,  584 => 357,  579 => 355,  576 => 354,  569 => 350,  565 => 349,  560 => 347,  557 => 346,  554 => 345,  550 => 343,  546 => 341,  540 => 339,  538 => 338,  534 => 337,  531 => 336,  529 => 335,  524 => 333,  520 => 332,  517 => 331,  510 => 327,  505 => 325,  502 => 324,  500 => 323,  495 => 321,  491 => 320,  485 => 317,  481 => 316,  472 => 310,  468 => 309,  463 => 307,  458 => 304,  453 => 302,  448 => 301,  446 => 300,  439 => 298,  433 => 295,  429 => 294,  423 => 291,  419 => 290,  413 => 287,  407 => 286,  392 => 276,  381 => 268,  377 => 267,  369 => 264,  360 => 258,  354 => 255,  341 => 245,  333 => 239,  330 => 237,  327 => 235,  324 => 234,  322 => 233,  318 => 232,  309 => 225,  305 => 223,  303 => 222,  299 => 220,  295 => 219,  290 => 216,  268 => 197,  263 => 194,  260 => 193,  240 => 175,  140 => 78,  117 => 58,  97 => 41,  77 => 23,  73 => 22,  66 => 16,  59 => 15,  54 => 11,  52 => 20,  50 => 19,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/edit.twig", "/var/www/htdocs/ec922501/app/template/admin/Order/edit.twig");
    }
}
