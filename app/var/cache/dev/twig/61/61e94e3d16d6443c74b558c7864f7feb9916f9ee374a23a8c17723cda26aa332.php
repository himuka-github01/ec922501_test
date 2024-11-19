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
class __TwigTemplate_f6a725c9ef5ab1d67057472d8a89be6ff8a896508abbe14b49ec109b55cbe6f6 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/edit.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/edit.twig"));

        // line 13
        $context["menus"] = [0 => "order", 1 => "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchCustomerModalForm"]) || array_key_exists("searchCustomerModalForm", $context) ? $context["searchCustomerModalForm"] : (function () { throw new RuntimeError('Variable "searchCustomerModalForm" does not exist.', 19, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 20
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 20, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_customer_html");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_product");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_search_order_item_type");
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
        echo (isset($context["shippingDeliveryTimes"]) || array_key_exists("shippingDeliveryTimes", $context) ? $context["shippingDeliveryTimes"] : (function () { throw new RuntimeError('Variable "shippingDeliveryTimes" does not exist.', 175, $this->source); })());
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 193, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 193) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 193, $this->source); })()), "Customer", [], "any", false, false, false, 193)))) {
            // line 194
            echo "            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = ";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 197, $this->source); })()), "point_conversion_rate", [], "any", false, false, false, 197), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 219
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 220
        echo "<style>
    .delivery-address-use {
        ";
        // line 222
        if (( !twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_delivery_address_use", [], "any", true, true, false, 222) || (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 222, $this->source); })()), "hdn_delivery_address_use", [], "any", false, false, false, 222) == false))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 232
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 233
        echo "    ";
        // line 234
        echo "    ";
        $context["action_disabled"] = false;
        // line 235
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 235, $this->source); })()), "OrderStatus", [], "any", false, false, false, 235)) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 235, $this->source); })()), "OrderStatus", [], "any", false, false, false, 235), "id", [], "any", false, false, false, 235), [0 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PROCESSING"), 1 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PENDING")]))) {
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 264, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 264) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 264, $this->source); })()), "Customer", [], "any", false, false, false, 264)))) {
            echo " onsubmit=\"updatePointItem()\"";
        }
        echo ">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        <input type=\"hidden\" name=\"modal\" value=\"\">
        ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "_token", [], "any", false, false, false, 267), 'widget');
        echo "
        ";
        // line 268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "return_link", [], "any", false, false, false, 268), 'widget');
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 287, $this->source); })()), "order_no", [], "any", false, false, false, 287), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_name"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 291
        (((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 291, $this->source); })()), "Saiji", [], "any", false, false, false, 291) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 291, $this->source); })()), "Saiji", [], "any", false, false, false, 291), "name", [], "any", false, false, false, 291), "html", null, true))));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_name"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 295
        (((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 295, $this->source); })()), "Tenpo", [], "any", false, false, false, 295) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 295, $this->source); })()), "Tenpo", [], "any", false, false, false, 295), "tenpoName", [], "any", false, false, false, 295), "html", null, true))));
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 300, $this->source); })()), "id", [], "any", false, false, false, 300))) {
            // line 301
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "OrderStatus", [], "any", false, false, false, 301), 'widget');
            echo "
                                                    ";
            // line 302
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "OrderStatus", [], "any", false, false, false, 302), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 309, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 309), 'widget');
        echo "
                                                ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "uketsuke_name", [], "any", false, false, false, 310), 'errors');
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
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 317, $this->source); })()), "order_date", [], "any", false, false, false, 317)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 317, $this->source); })()), "order_date", [], "any", false, false, false, 317)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3 hiddenItem\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 321
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 321, $this->source); })()), "payment_date", [], "any", false, false, false, 321)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 321, $this->source); })()), "payment_date", [], "any", false, false, false, 321)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        ";
        // line 323
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 323, $this->source); })()), "isMultiple", [], "any", false, false, false, 323)) {
            // line 324
            echo "                                            <div class=\"row mb-3 hiddenItem\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_date"), "html", null, true);
            echo "</div>
                                                <div class=\"col\">
                                                    ";
            // line 327
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 327, $this->source); })()), "Shippings", [], "any", false, false, false, 327), 0, [], "array", false, false, false, 327), "shipping_date", [], "any", false, false, false, 327)), "html", null, true);
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
        ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 333, $this->source); })()), "update_date", [], "any", false, false, false, 333)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 333, $this->source); })()), "update_date", [], "any", false, false, false, 333)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        ";
        // line 335
        if (( !twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_wari_use", [], "any", true, true, false, 335) || twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 335, $this->source); })()), "hdn_wari_use", [], "any", false, false, false, 335))) {
            // line 336
            echo "                                            <div class=\"row mb-3\">
                                                <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw mr-1 hiddenItem\" aria-hidden=\"true\"></i>";
            // line 337
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.wari_kikan_flg"), "html", null, true);
            echo "</div>
                                                ";
            // line 338
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 338, $this->source); })()), "wari_kikan_flg", [], "any", false, false, false, 338) == true)) {
                // line 339
                echo "                                                    <div class=\"col\">○対象　";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 339, $this->source); })()), "wari_kikan_value", [], "any", false, false, false, 339), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 345, $this->source); })()), "hdn_receipt_no_use", [], "any", false, false, false, 345)) {
            // line 346
            echo "                                            <div class=\"row mb-3\">
                                                <div class=\"col-3 col-form-label\">";
            // line 347
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.receipt_no"), "html", null, true);
            echo "</div>
                                                <div class=\"col\">
                                                    ";
            // line 349
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "receipt_no", [], "any", false, false, false, 349), 'widget');
            echo "
                                                    ";
            // line 350
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "receipt_no", [], "any", false, false, false, 350), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "Payment", [], "any", false, false, false, 357), 'widget');
        echo "
                                                ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 358, $this->source); })()), "Payment", [], "any", false, false, false, 358), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "shoukai_name", [], "any", false, false, false, 364), 'widget');
        echo "
                                                ";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "shoukai_name", [], "any", false, false, false, 365), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 372
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 372), "eccube_form_options", [], "any", false, false, false, 372), "auto_render", [], "any", false, false, false, 372); }));
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
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 402, $this->source); })())) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 402, $this->source); })()), "full_name_kana", [], "any", false, false, false, 402), "html", null, true);
            echo "　";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 402, $this->source); })()), "phone_number", [], "any", false, false, false, 402), "html", null, true);
        }
        echo "</div>
                                <div class=\"col-1 text-right\"><a class=\"d-block\" data-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa ";
        // line 403
        echo (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 403, $this->source); })())) ? ("fa-angle-down") : ("fa-angle-up"));
        echo " fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                ";
        // line 409
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 409, $this->source); })()), "id", [], "any", false, false, false, 409))) {
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchCustomerModalForm"]) || array_key_exists("searchCustomerModalForm", $context) ? $context["searchCustomerModalForm"] : (function () { throw new RuntimeError('Variable "searchCustomerModalForm" does not exist.', 424, $this->source); })()), "multi", [], "any", false, false, false, 424), 'widget', ["attr" => ["class" => "mb-2searchCustomerModal", "placeholder" => "admin.customer.multi_search_label"]]);
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
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "Customer", [], "any", false, false, false, 438), "vars", [], "any", false, false, false, 438), "value", [], "any", false, false, false, 438))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "Customer", [], "any", false, false, false, 438), "vars", [], "any", false, false, false, 438), "value", [], "any", false, false, false, 438)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "Customer", [], "any", false, false, false, 438), "vars", [], "any", false, false, false, 438), "value", [], "any", false, false, false, 438), "html", null, true);
            echo "</a>";
        }
        echo "</p>
                                                ";
        // line 439
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 439, $this->source); })()), "Customer", [], "any", false, false, false, 439), 'widget');
        echo "
                                                ";
        // line 440
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 440, $this->source); })()), "Customer", [], "any", false, false, false, 440), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), "name", [], "any", false, false, false, 448), "name01", [], "any", false, false, false, 448), 'widget');
        echo "
                                                        ";
        // line 449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), "name", [], "any", false, false, false, 449), "name01", [], "any", false, false, false, 449), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "name", [], "any", false, false, false, 452), "name02", [], "any", false, false, false, 452), 'widget');
        echo "
                                                        ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "name", [], "any", false, false, false, 453), "name02", [], "any", false, false, false, 453), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), "kana", [], "any", false, false, false, 463), "kana01", [], "any", false, false, false, 463), 'widget');
        echo "
                                                        ";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "kana", [], "any", false, false, false, 464), "kana01", [], "any", false, false, false, 464), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 467
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 467, $this->source); })()), "kana", [], "any", false, false, false, 467), "kana02", [], "any", false, false, false, 467), 'widget');
        echo "
                                                        ";
        // line 468
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 468, $this->source); })()), "kana", [], "any", false, false, false, 468), "kana02", [], "any", false, false, false, 468), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 476, $this->source); })()), "phone_number", [], "any", false, false, false, 476), 'widget');
        echo "
                                                ";
        // line 477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 477, $this->source); })()), "phone_number", [], "any", false, false, false, 477), 'errors');
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 482, $this->source); })()), "shain_flg", [], "any", false, false, false, 482) == true)) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), "postal_code", [], "any", false, false, false, 494), 'widget');
        echo "
                                                        ";
        // line 495
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 495, $this->source); })()), "postal_code", [], "any", false, false, false, 495), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 500
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 500, $this->source); })()), "address", [], "any", false, false, false, 500), "pref", [], "any", false, false, false, 500), 'widget');
        echo "
                                                        ";
        // line 501
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 501, $this->source); })()), "address", [], "any", false, false, false, 501), "pref", [], "any", false, false, false, 501), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 506
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 506, $this->source); })()), "address", [], "any", false, false, false, 506), "addr01", [], "any", false, false, false, 506), 'widget');
        echo "
                                                        ";
        // line 507
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 507, $this->source); })()), "address", [], "any", false, false, false, 507), "addr01", [], "any", false, false, false, 507), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 512
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "address", [], "any", false, false, false, 512), "addr02", [], "any", false, false, false, 512), 'widget');
        echo "
                                                        ";
        // line 513
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 513, $this->source); })()), "address", [], "any", false, false, false, 513), "addr02", [], "any", false, false, false, 513), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 553, $this->source); })()), "email", [], "any", false, false, false, 553), 'widget');
        echo "
                                                    ";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 554, $this->source); })()), "email", [], "any", false, false, false, 554), 'errors');
        echo "
                                                </div>
                                                <div class=\"form-group hiddenItem\">
                                                    <label class=\"col-form-label\">";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</label>
                                                    ";
        // line 558
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 558, $this->source); })()), "company_name", [], "any", false, false, false, 558), 'widget');
        echo "
                                                    ";
        // line 559
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 559, $this->source); })()), "company_name", [], "any", false, false, false, 559), 'errors');
        echo "
                                                </div>
                                                <div class=\"row form-group\">
                                                        <label class=\"col-3 col-form-label\">お問い合わせ</label>
                                                    <div class=\"col\">
                                                        <textarea id=\"order_message\" name=\"order[message]\" rows=\"8\" cols=\"8\" class=\"form-control\"></textarea>
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
        // line 577
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
        // line 584
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 584, $this->source); })()), "isMultiple", [], "any", false, false, false, 584)) {
            // line 585
            echo "                                    ";
            // line 586
            echo "                                    <div class=\"mb-3 hiddenItem\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 587
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
            // line 588
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 588, $this->source); })()), "id", [], "any", false, false, false, 588)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping"), "html", null, true);
            echo "</a>
                                        <span class=\"ml-3\">";
            // line 589
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping_description"), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 591
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 591, $this->source); })()), "Shippings", [], "any", false, false, false, 591));
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
                // line 592
                echo "                                        <div class=\"col hiddenItem\">
                                            <span class=\"mr-5\">";
                // line 593
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 593), "html", null, true);
                echo ")</span>
                                            ";
                // line 594
                $context["shipping_name"] = ((((((twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name", [], "any", false, false, false, 594) . "(") . twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name_kana", [], "any", false, false, false, 594)) . ")") .  !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, false, 594)))) ? (twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, false, 594)) : (""));
                // line 595
                echo "                                            ";
                $context["shipping_addr"] = ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 595)) . " ") . twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 595)) . twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 595)) . twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 595));
                // line 596
                echo "                                            ";
                $context["shipping_date"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, false, 596))) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, false, 596))) : (""));
                // line 597
                echo "                                            ";
                echo twig_escape_filter($this->env, (isset($context["shipping_name"]) || array_key_exists("shipping_name", $context) ? $context["shipping_name"] : (function () { throw new RuntimeError('Variable "shipping_name" does not exist.', 597, $this->source); })()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["shipping_addr"]) || array_key_exists("shipping_addr", $context) ? $context["shipping_addr"] : (function () { throw new RuntimeError('Variable "shipping_addr" does not exist.', 597, $this->source); })()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 597), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["shipping_date"]) || array_key_exists("shipping_date", $context) ? $context["shipping_date"] : (function () { throw new RuntimeError('Variable "shipping_date" does not exist.', 597, $this->source); })()), "html", null, true);
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
            // line 600
            echo "                                ";
        } else {
            // line 601
            echo "                                    ";
            // line 602
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <!--<button type=\"button\" class=\"btn btn-ec-regular copy-customer\">";
            // line 604
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.copy_orderer"), "html", null, true);
            echo "</button>-->
                                            ";
            // line 605
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 605, $this->source); })()), "id", [], "any", false, false, false, 605))) {
                // line 606
                echo "                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_pdf_y01");
                echo "?ids[]=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 606, $this->source); })()), "Shippings", [], "any", false, false, false, 606), 0, [], "array", false, false, false, 606), "id", [], "any", false, false, false, 606), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 608
            echo "                                        </div>
                                        ";
            // line 609
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 609, $this->source); })()), "id", [], "any", false, false, false, 609))) {
                // line 610
                echo "                                            <div class=\"col-6 text-right\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"";
                // line 611
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
                // line 612
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 612, $this->source); })()), "id", [], "any", false, false, false, 612)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_shipping"), "html", null, true);
                echo "</a>
                                            </div>
                                        ";
            }
            // line 615
            echo "                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6 hiddenItem\">
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 620
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 624
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 624, $this->source); })()), "Shipping", [], "any", false, false, false, 624), "name", [], "any", false, false, false, 624), "name01", [], "any", false, false, false, 624), 'widget');
            echo "
                                                            ";
            // line 625
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 625, $this->source); })()), "Shipping", [], "any", false, false, false, 625), "name", [], "any", false, false, false, 625), "name01", [], "any", false, false, false, 625), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 628
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 628, $this->source); })()), "Shipping", [], "any", false, false, false, 628), "name", [], "any", false, false, false, 628), "name02", [], "any", false, false, false, 628), 'widget');
            echo "
                                                            ";
            // line 629
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 629, $this->source); })()), "Shipping", [], "any", false, false, false, 629), "name", [], "any", false, false, false, 629), "name02", [], "any", false, false, false, 629), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 635
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 639
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 639, $this->source); })()), "Shipping", [], "any", false, false, false, 639), "kana", [], "any", false, false, false, 639), "kana01", [], "any", false, false, false, 639), 'widget');
            echo "
                                                            ";
            // line 640
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 640, $this->source); })()), "Shipping", [], "any", false, false, false, 640), "kana", [], "any", false, false, false, 640), "kana01", [], "any", false, false, false, 640), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 643
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 643, $this->source); })()), "Shipping", [], "any", false, false, false, 643), "kana", [], "any", false, false, false, 643), "kana02", [], "any", false, false, false, 643), 'widget');
            echo "
                                                            ";
            // line 644
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 644, $this->source); })()), "Shipping", [], "any", false, false, false, 644), "kana", [], "any", false, false, false, 644), "kana02", [], "any", false, false, false, 644), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 650
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col form-inline\">
                                                            ";
            // line 654
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "
                                                            ";
            // line 655
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 655, $this->source); })()), "Shipping", [], "any", false, false, false, 655), "postal_code", [], "any", false, false, false, 655), 'widget');
            echo "
                                                            ";
            // line 656
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 656, $this->source); })()), "Shipping", [], "any", false, false, false, 656), "postal_code", [], "any", false, false, false, 656), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 661
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 661, $this->source); })()), "Shipping", [], "any", false, false, false, 661), "address", [], "any", false, false, false, 661), "pref", [], "any", false, false, false, 661), 'widget');
            echo "
                                                            ";
            // line 662
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 662, $this->source); })()), "Shipping", [], "any", false, false, false, 662), "address", [], "any", false, false, false, 662), "pref", [], "any", false, false, false, 662), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 667
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 667, $this->source); })()), "Shipping", [], "any", false, false, false, 667), "address", [], "any", false, false, false, 667), "addr01", [], "any", false, false, false, 667), 'widget');
            echo "
                                                            ";
            // line 668
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 668, $this->source); })()), "Shipping", [], "any", false, false, false, 668), "address", [], "any", false, false, false, 668), "addr01", [], "any", false, false, false, 668), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 673
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 673, $this->source); })()), "Shipping", [], "any", false, false, false, 673), "address", [], "any", false, false, false, 673), "addr02", [], "any", false, false, false, 673), 'widget');
            echo "
                                                            ";
            // line 674
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 674, $this->source); })()), "Shipping", [], "any", false, false, false, 674), "address", [], "any", false, false, false, 674), "addr02", [], "any", false, false, false, 674), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6 hiddenItem\">
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 682
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    ";
            // line 684
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 684, $this->source); })()), "Shipping", [], "any", false, false, false, 684), "phone_number", [], "any", false, false, false, 684), 'widget');
            echo "
                                                    ";
            // line 685
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 685, $this->source); })()), "Shipping", [], "any", false, false, false, 685), "phone_number", [], "any", false, false, false, 685), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 690
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 692
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 692, $this->source); })()), "Shipping", [], "any", false, false, false, 692), "company_name", [], "any", false, false, false, 692), 'widget');
            echo "
                                                    ";
            // line 693
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 693, $this->source); })()), "Shipping", [], "any", false, false, false, 693), "company_name", [], "any", false, false, false, 693), 'errors');
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
            // line 702
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.tracking_number"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 704
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 704, $this->source); })()), "Shipping", [], "any", false, false, false, 704), "tracking_number", [], "any", false, false, false, 704), 'widget');
            echo "
                                                    ";
            // line 705
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 705, $this->source); })()), "Shipping", [], "any", false, false, false, 705), "tracking_number", [], "any", false, false, false, 705), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group hiddenItem\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 709
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.delivery_provider"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_provider"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\"></span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 711
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 711, $this->source); })()), "Shipping", [], "any", false, false, false, 711), "Delivery", [], "any", false, false, false, 711), 'widget');
            echo "
                                                    ";
            // line 712
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 712, $this->source); })()), "Shipping", [], "any", false, false, false, 712), "Delivery", [], "any", false, false, false, 712), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 716
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.for_delivery_date"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 718
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 718, $this->source); })()), "Shipping", [], "any", false, false, false, 718), "shipping_delivery_date", [], "any", false, false, false, 718), 'widget');
            echo "
                                                    ";
            // line 719
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 719, $this->source); })()), "Shipping", [], "any", false, false, false, 719), "shipping_delivery_date", [], "any", false, false, false, 719), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 723
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.for_delivery_time"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 725
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 725, $this->source); })()), "Shipping", [], "any", false, false, false, 725), "DeliveryTime", [], "any", false, false, false, 725), 'widget');
            echo "
                                                    ";
            // line 726
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 726, $this->source); })()), "Shipping", [], "any", false, false, false, 726), "DeliveryTime", [], "any", false, false, false, 726), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 732
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.shop_memo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shop_memo_for_delivery"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 734
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 734, $this->source); })()), "Shipping", [], "any", false, false, false, 734), "note", [], "any", false, false, false, 734), 'widget');
            echo "
                                                    ";
            // line 735
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 735, $this->source); })()), "Shipping", [], "any", false, false, false, 735), "note", [], "any", false, false, false, 735), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 741
        echo "                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 748
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
        // line 758
        echo "                                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 758, $this->source); })()), "isMultiple", [], "any", false, false, false, 758)) {
            // line 759
            echo "                                            <a class=\"btn btn-ec-regular mr-2 add\" data-toggle=\"modal\" data-target=\"#addProduct\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">";
            // line 764
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</h5>
                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            ";
            // line 768
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 768, $this->source); })()), "id", [], "any", false, false, false, 768), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
            echo "
                                                            ";
            // line 769
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchProductModalForm"]) || array_key_exists("searchProductModalForm", $context) ? $context["searchProductModalForm"] : (function () { throw new RuntimeError('Variable "searchProductModalForm" does not exist.', 769, $this->source); })()), "category_id", [], "any", false, false, false, 769), 'widget');
            echo "
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 770
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 777
        echo "                                        <a class=\"btn btn-ec-regular mr-2 hiddenItem\" data-toggle=\"modal\" data-target=\"#addOrderItemType\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">";
        // line 782
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
        // line 791
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 791, $this->source); })()), "OrderItemsErrors", [], "any", false, false, false, 791), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-5 text-right\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular mr-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"";
        // line 794
        echo (((isset($context["action_disabled"]) || array_key_exists("action_disabled", $context) ? $context["action_disabled"] : (function () { throw new RuntimeError('Variable "action_disabled" does not exist.', 794, $this->source); })())) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.update_calculation_results"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"";
        // line 798
        ob_start();
        echo twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 798, $this->source); })()), "OrderItems", [], "any", false, false, false, 798), "vars", [], "any", false, false, false, 798), "prototype", [], "any", false, false, false, 798)]);
        $___internal_f34090c5ebdebc0e5ad462cad2a71e17a95fa61b31149fbae996f64c8e17d469_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_f34090c5ebdebc0e5ad462cad2a71e17a95fa61b31149fbae996f64c8e17d469_);
        echo "\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 pl-3\">";
        // line 801
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 803
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 806
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 809
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 812
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pr-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 821
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 821, $this->source); })()), "OrderItems", [], "any", false, false, false, 821));
        foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
            // line 822
            echo "                                        ";
            $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 822), "data", [], "any", false, false, false, 822);
            // line 823
            echo "                                        <tr>
                                            ";
            // line 825
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, false, 825), 'widget');
            echo "
                                            ";
            // line 826
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, false, 826), 'widget');
            echo "
                                            ";
            // line 827
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, false, 827), 'widget');
            echo "
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 pl-3\">
                                                <p class=\"mb-0 font-weight-bold\">
                                                    ";
            // line 832
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 832, $this->source); })()), "isProduct", [], "any", false, false, false, 832) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 832, $this->source); })()), "isPoint", [], "any", false, false, false, 832))) {
                // line 833
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 833, $this->source); })()), "isProduct", [], "any", false, false, false, 833)) {
                    // line 834
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 834, $this->source); })()), "ProductClass", [], "any", false, false, false, 834), "Product", [], "any", false, false, false, 834), "id", [], "any", false, false, false, 834)]), "html", null, true);
                    echo "\" target=\"_blank\">
                                                                ";
                    // line 835
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 835, $this->source); })()), "product_name", [], "any", false, false, false, 835), "html", null, true);
                    echo "
                                                            </a>
                                                        ";
                } else {
                    // line 838
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 838, $this->source); })()), "product_name", [], "any", false, false, false, 838), "html", null, true);
                    echo "
                                                        ";
                }
                // line 840
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 840), 'widget', ["type" => "hidden"]);
                echo "
                                                    ";
            } else {
                // line 842
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 842), 'widget');
                echo "
                                                    ";
            }
            // line 844
            echo "                                                </p>
                                                <span>
                                                    ";
            // line 846
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 846, $this->source); })()), "product_code", [], "any", false, false, false, 846), "html", null, true);
            echo "
                                                    ";
            // line 847
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 847, $this->source); })()), "class_category_name1", [], "any", false, false, false, 847))) {
                // line 848
                echo "                                                        / (
                                                        ";
                // line 849
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 849, $this->source); })()), "class_name1", [], "any", false, false, false, 849), "html", null, true);
                echo "：
                                                        ";
                // line 850
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 850, $this->source); })()), "class_category_name1", [], "any", false, false, false, 850), "html", null, true);
                echo "
                                                        ";
                // line 851
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 851, $this->source); })()), "class_category_name2", [], "any", false, false, false, 851))) {
                    // line 852
                    echo "                                                            /
                                                            ";
                    // line 853
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 853, $this->source); })()), "class_name2", [], "any", false, false, false, 853), "html", null, true);
                    echo "：
                                                            ";
                    // line 854
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 854, $this->source); })()), "class_category_name2", [], "any", false, false, false, 854), "html", null, true);
                    echo "
                                                        ";
                }
                // line 856
                echo "                                                        )
                                                    ";
            }
            // line 858
            echo "                                                </span>
                                                ";
            // line 859
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 859), 'errors');
            echo "
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    ";
            // line 865
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 865, $this->source); })()), "isPoint", [], "any", false, false, false, 865)) {
                // line 866
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 866), 'widget', ["attr" => ["readonly" => "readonly", "class" => "pointPrice"]]);
                echo "
                                                    ";
            } else {
                // line 868
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 868), 'widget');
                echo "
                                                    ";
            }
            // line 870
            echo "                                                    <div class=\"text-right small\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 870, $this->source); })()), "TaxDisplayType", [], "any", false, false, false, 870), "html", null, true);
            echo ")</div>
                                                    ";
            // line 871
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 871), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 878
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 878, $this->source); })()), "isMultiple", [], "any", false, false, false, 878) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 878, $this->source); })()), "isProduct", [], "any", false, false, false, 878)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 878, $this->source); })()), "isPoint", [], "any", false, false, false, 878))) {
                // line 879
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 879), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 881
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 881), 'widget');
                echo "
                                                    ";
            }
            // line 883
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 883), 'errors');
            echo "
                                          
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 891
            echo "                                                    ";
            if ((((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 891, $this->source); })()), "isMultiple", [], "any", false, false, false, 891) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 891, $this->source); })()), "isProduct", [], "any", false, false, false, 891)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 891, $this->source); })()), "isPoint", [], "any", false, false, false, 891)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 891, $this->source); })()), "TaxType", [], "any", false, false, false, 891), "id", [], "any", false, false, false, 891) == twig_constant("Eccube\\Entity\\Master\\TaxType::NON_TAXABLE")))) {
                // line 892
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 892), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 894
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 894), 'widget');
                echo "
                                                    ";
            }
            // line 896
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 896), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    ";
            // line 902
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 902, $this->source); })()), "tax_type", [], "any", false, false, false, 902), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>";
            // line 908
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 908, $this->source); })()), "price", [], "any", false, false, false, 908) * twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 908, $this->source); })()), "quantity", [], "any", false, false, false, 908))), "html", null, true);
            echo "</span>
                                                </div>
                                                <div class=\"col hiddenItem\">
                                                    <span>";
            // line 911
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 911, $this->source); })()), "total_price", [], "any", false, false, false, 911)), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-right pr-3\">
                                                <div class=\"row justify-content-end\">
                                                    ";
            // line 917
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 917, $this->source); })()), "isMultiple", [], "any", false, false, false, 917) && twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 917, $this->source); })()), "isProduct", [], "any", false, false, false, 917)) || twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 917, $this->source); })()), "isPoint", [], "any", false, false, false, 917))) {
                // line 918
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"";
                // line 920
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    ";
            } else {
                // line 927
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"";
                // line 929
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_";
                // line 930
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 930), "id", [], "any", false, false, false, 930), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_";
                // line 935
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 935), "id", [], "any", false, false, false, 935), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 935), "id", [], "any", false, false, false, 935), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title font-weight-bold\">";
                // line 939
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                <span aria-hidden=\"true\">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-left\">
                                                                            <p class=\"text-left\">";
                // line 945
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["OrderItem"]) || array_key_exists("OrderItem", $context) ? $context["OrderItem"] : (function () { throw new RuntimeError('Variable "OrderItem" does not exist.', 945, $this->source); })()), "product_name", [], "any", false, false, false, 945)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 948
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">";
                // line 949
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 956
            echo "                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 960
        echo "                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 商品合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 965
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品合計"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 966
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 966, $this->source); })()), "subtotal", [], "any", false, false, false, 966) - twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 966, $this->source); })()), "tax", [], "any", false, false, false, 966))), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 消費税 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 970
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("消費税"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"align-middle font-weight-normal\">";
        // line 971
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 971, $this->source); })()), "tax", [], "any", false, false, false, 971)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 976
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 976, $this->source); })()), "subtotal", [], "any", false, false, false, 976)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 980
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_fee"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 981
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 981, $this->source); })()), "delivery_fee_total", [], "any", false, false, false, 981)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 985
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 986
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 986, $this->source); })()), "charge", [], "any", false, false, false, 986)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 990
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.discount"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle text-danger font-weight-normal\">";
        // line 991
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 991, $this->source); })()), "taxable_discount", [], "any", false, false, false, 991)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 996
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 997
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 997, $this->source); })()), "taxable_total", [], "any", false, false, false, 997)), "html", null, true);
        echo "</span></div>
                                </div>
                                ";
        // line 999
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 999, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, false, 999));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 1000
            echo "                                    <div class=\"row justify-content-end mb-3 hiddenItem\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 1001
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-2 text-right\"><span class=\"align-middle font-weight-normal\">";
            // line 1002
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</span></div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1005
        echo "                                <hr>
                                ";
        // line 1006
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 1006, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 1006));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 1007
            echo "                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 1008
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 1008), "html", null, true);
            echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle text-danger font-weight-normal\">";
            // line 1009
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 1009)), "html", null, true);
            echo "</span></div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1012
        echo "                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 1014
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 1015
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 1015, $this->source); })()), "payment_total", [], "any", false, false, false, 1015)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 1020
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\">
                                        <span class=\"h4 align-middle font-weight-normal\">
                                            ";
        // line 1023
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1023, $this->source); })()), "vars", [], "any", false, false, false, 1023), "value", [], "any", false, false, false, 1023), "addpoint", [], "any", false, false, false, 1023)), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 1029
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.use_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\">
                                        <span class=\"h4 align-middle font-weight-normal\">
                                            ";
        // line 1033
        echo "                                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 1033, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 1033) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 1033, $this->source); })()), "Customer", [], "any", false, false, false, 1033)))) {
            // line 1034
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1034, $this->source); })()), "use_point", [], "any", false, false, false, 1034), 'widget');
            echo "
                                            ";
        } else {
            // line 1036
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1036, $this->source); })()), "use_point", [], "any", false, false, false, 1036), 'widget', ["attr" => ["readonly" => "readonly"]]);
            echo "
                                            ";
        }
        // line 1038
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1038, $this->source); })()), "use_point", [], "any", false, false, false, 1038), 'errors');
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
        // line 1050
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
        // line 1057
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1057, $this->source); })()), "note", [], "any", false, false, false, 1057), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- メール送信履歴 -->
                    ";
        // line 1062
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1062, $this->source); })()))) {
            // line 1063
            echo "                        <div class=\"card rounded border-0 mb-4 hiddenItem\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 1067
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
            // line 1077
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send_date"), "html", null, true);
            echo "</th>
                                            <th class=\"pt-2 pb-2 pr-3\">";
            // line 1078
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
            echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 1082
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 1082, $this->source); })()), "MailHistories", [], "any", false, false, false, 1082));
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
                // line 1083
                echo "                                            <tr>
                                                <td class=\"pl-3\">";
                // line 1084
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, false, 1084)), "html", null, true);
                echo "</td>
                                                <td class=\"pr-3\">
                                                    <a class=\"text-primary\" data-toggle=\"modal\" data-target=\"#mail2-";
                // line 1086
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1086), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 1086), "html", null, true);
                echo "</a>
                                                    <div class=\"modal fade\" id=\"mail2-";
                // line 1087
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1087), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1087), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">";
                // line 1091
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 1091), "html", null, true);
                echo "</h5>
                                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        ";
                // line 1096
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, false, 1096)) > 0)) {
                    // line 1097
                    echo "                                                                            ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, false, 1097));
                    echo "
                                                                        ";
                } else {
                    // line 1099
                    echo "                                                                            ";
                    echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, false, 1099), "html", null, true));
                    echo "
                                                                        ";
                }
                // line 1101
                echo "                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-dismiss=\"modal\">";
                // line 1104
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
            // line 1112
            echo "                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 1115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail")]), "html", null, true);
            // line 1117
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 1117, $this->source); })()), "id", [], "any", false, false, false, 1117)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_create"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    ";
        }
        // line 1123
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
        // line 1132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"";
        // line 1138
        echo (((isset($context["action_disabled"]) || array_key_exists("action_disabled", $context) ? $context["action_disabled"] : (function () { throw new RuntimeError('Variable "action_disabled" does not exist.', 1138, $this->source); })())) ? (" disabled=\"disabled\"") : (""));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  2259 => 1138,  2248 => 1132,  2237 => 1123,  2225 => 1117,  2223 => 1115,  2218 => 1112,  2196 => 1104,  2191 => 1101,  2185 => 1099,  2179 => 1097,  2177 => 1096,  2169 => 1091,  2160 => 1087,  2154 => 1086,  2149 => 1084,  2146 => 1083,  2129 => 1082,  2122 => 1078,  2118 => 1077,  2103 => 1067,  2097 => 1063,  2095 => 1062,  2087 => 1057,  2075 => 1050,  2059 => 1038,  2053 => 1036,  2047 => 1034,  2044 => 1033,  2038 => 1029,  2029 => 1023,  2023 => 1020,  2015 => 1015,  2011 => 1014,  2007 => 1012,  1998 => 1009,  1994 => 1008,  1991 => 1007,  1987 => 1006,  1984 => 1005,  1975 => 1002,  1971 => 1001,  1968 => 1000,  1964 => 999,  1959 => 997,  1955 => 996,  1947 => 991,  1943 => 990,  1936 => 986,  1932 => 985,  1925 => 981,  1921 => 980,  1914 => 976,  1910 => 975,  1903 => 971,  1899 => 970,  1892 => 966,  1888 => 965,  1881 => 960,  1872 => 956,  1862 => 949,  1858 => 948,  1852 => 945,  1843 => 939,  1834 => 935,  1826 => 930,  1822 => 929,  1818 => 927,  1808 => 920,  1804 => 918,  1801 => 917,  1793 => 911,  1787 => 908,  1778 => 902,  1768 => 896,  1762 => 894,  1756 => 892,  1753 => 891,  1742 => 883,  1736 => 881,  1730 => 879,  1727 => 878,  1718 => 871,  1713 => 870,  1707 => 868,  1701 => 866,  1698 => 865,  1690 => 859,  1687 => 858,  1683 => 856,  1678 => 854,  1674 => 853,  1671 => 852,  1669 => 851,  1665 => 850,  1661 => 849,  1658 => 848,  1656 => 847,  1652 => 846,  1648 => 844,  1642 => 842,  1636 => 840,  1630 => 838,  1624 => 835,  1619 => 834,  1616 => 833,  1613 => 832,  1606 => 827,  1602 => 826,  1597 => 825,  1594 => 823,  1591 => 822,  1587 => 821,  1578 => 815,  1572 => 812,  1566 => 809,  1560 => 806,  1554 => 803,  1549 => 801,  1540 => 798,  1531 => 794,  1525 => 791,  1513 => 782,  1504 => 777,  1494 => 770,  1490 => 769,  1486 => 768,  1479 => 764,  1470 => 759,  1467 => 758,  1453 => 748,  1444 => 741,  1435 => 735,  1431 => 734,  1424 => 732,  1415 => 726,  1411 => 725,  1406 => 723,  1399 => 719,  1395 => 718,  1390 => 716,  1383 => 712,  1379 => 711,  1372 => 709,  1365 => 705,  1361 => 704,  1354 => 702,  1342 => 693,  1338 => 692,  1333 => 690,  1325 => 685,  1321 => 684,  1314 => 682,  1303 => 674,  1299 => 673,  1291 => 668,  1287 => 667,  1279 => 662,  1275 => 661,  1267 => 656,  1263 => 655,  1259 => 654,  1250 => 650,  1241 => 644,  1237 => 643,  1231 => 640,  1227 => 639,  1218 => 635,  1209 => 629,  1205 => 628,  1199 => 625,  1195 => 624,  1186 => 620,  1179 => 615,  1170 => 612,  1168 => 611,  1165 => 610,  1163 => 609,  1160 => 608,  1150 => 606,  1148 => 605,  1144 => 604,  1140 => 602,  1138 => 601,  1135 => 600,  1111 => 597,  1108 => 596,  1105 => 595,  1103 => 594,  1097 => 593,  1094 => 592,  1077 => 591,  1072 => 589,  1065 => 588,  1063 => 587,  1060 => 586,  1058 => 585,  1056 => 584,  1044 => 577,  1023 => 559,  1019 => 558,  1015 => 557,  1009 => 554,  1005 => 553,  999 => 552,  995 => 550,  986 => 513,  982 => 512,  974 => 507,  970 => 506,  962 => 501,  958 => 500,  950 => 495,  946 => 494,  942 => 493,  933 => 489,  929 => 487,  925 => 485,  921 => 483,  919 => 482,  915 => 481,  908 => 477,  904 => 476,  897 => 474,  888 => 468,  884 => 467,  878 => 464,  874 => 463,  865 => 459,  856 => 453,  852 => 452,  846 => 449,  842 => 448,  833 => 444,  826 => 440,  822 => 439,  810 => 438,  803 => 436,  797 => 432,  787 => 425,  783 => 424,  776 => 420,  765 => 412,  761 => 410,  759 => 409,  750 => 403,  742 => 402,  737 => 400,  727 => 392,  721 => 391,  712 => 385,  708 => 384,  702 => 381,  696 => 377,  690 => 375,  687 => 374,  684 => 373,  679 => 372,  670 => 365,  666 => 364,  661 => 362,  654 => 358,  650 => 357,  645 => 355,  642 => 354,  635 => 350,  631 => 349,  626 => 347,  623 => 346,  620 => 345,  616 => 343,  612 => 341,  606 => 339,  604 => 338,  600 => 337,  597 => 336,  595 => 335,  590 => 333,  586 => 332,  583 => 331,  576 => 327,  571 => 325,  568 => 324,  566 => 323,  561 => 321,  557 => 320,  551 => 317,  547 => 316,  538 => 310,  534 => 309,  529 => 307,  524 => 304,  519 => 302,  514 => 301,  512 => 300,  505 => 298,  499 => 295,  495 => 294,  489 => 291,  485 => 290,  479 => 287,  473 => 286,  458 => 276,  447 => 268,  443 => 267,  435 => 264,  426 => 258,  420 => 255,  407 => 245,  399 => 239,  396 => 237,  393 => 235,  390 => 234,  388 => 233,  378 => 232,  363 => 225,  359 => 223,  357 => 222,  353 => 220,  343 => 219,  332 => 216,  310 => 197,  305 => 194,  302 => 193,  282 => 175,  182 => 78,  159 => 58,  139 => 41,  119 => 23,  109 => 22,  90 => 16,  71 => 15,  60 => 11,  58 => 20,  56 => 19,  54 => 18,  52 => 13,  39 => 11,);
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
{% extends '@admin/default_frame.twig' %}

{% set menus = ['order', 'order_edit'] %}

{% block title %}{{ 'admin.order.order_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.order.order_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme searchCustomerModalForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme searchProductModalForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
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
                    url: '{{ url('admin_order_search_customer_html') }}',
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
                    url: '{{ url('admin_order_search_product') }}',
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
                    url: '{{ url('admin_order_search_order_item_type') }}',
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
            var times = {{ shippingDeliveryTimes|raw }};
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

        {# ポイント機能が有効かつ会員の場合のみポイントの割引金額を変更する #}
        {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = {{ BaseInfo.point_conversion_rate }};
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
        {% endif %}
    </script>
{% endblock javascript %}

{% block stylesheet %}
<style>
    .delivery-address-use {
        {% if eccube_config.hdn_delivery_address_use is not defined or eccube_config.hdn_delivery_address_use == false %}
            display: none;
        {% endif %}
    }
    .hiddenItem {
        display: none !important;
    }
</style>
{% endblock stylesheet %}

{% block main %}
    {# 決済処理中/購入処理中ステータスは登録・更新等の操作を無効にする #}
    {% set action_disabled = false %}
    {% if Order.OrderStatus is not empty and Order.OrderStatus.id in [
        constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::PROCESSING'), constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::PENDING')] -%}
        {% set action_disabled = true %}
    {%- endif %}
    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ 'admin.common.move_to_confirm_title'|trans }}</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_save_and_move'|trans }}
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_move_only'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"{% if BaseInfo.isOptionPoint and Order.Customer is not null %} onsubmit=\"updatePointItem()\"{% endif %}>
        <input type=\"hidden\" name=\"mode\" value=\"\">
        <input type=\"hidden\" name=\"modal\" value=\"\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.return_link) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.order_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.order_info'|trans }}</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.order_no'|trans }}\">{{ 'admin.order.order_no'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                            <div class=\"col\">{{ Order.order_no }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">{{ 'admin.order.saiji_name'|trans }}</div>
                                            <div class=\"col\">{{ Order.Saiji == null ? '' : Order.Saiji.name }}</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\">{{ 'admin.order.tenpo_name'|trans }}</div>
                                            <div class=\"col\">{{ Order.Tenpo == null ? '' : Order.Tenpo.tenpoName }}</div>
                                        </div>
                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.order_status'|trans }}\">{{ 'admin.order.order_status'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                            <div class=\"col\">
                                                {% if Order.id is not empty %}
                                                    {{ form_widget(form.OrderStatus) }}
                                                    {{ form_errors(form.OrderStatus) }}
                                                {% endif %}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3 form-group\">
                                            <div class=\"col-3\">{{ 'admin.common.uketsuke_name'|trans }}</div>
                                            <div class=\"col\">
                                                {{ form_widget(form.uketsuke_name) }}
                                                {{ form_errors(form.uketsuke_name) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw mr-1 hiddenItem\" aria-hidden=\"true\"></i>{{ 'admin.order.order_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.order_date ? Order.order_date|date_sec : '' }}</div>
                                        </div>
                                        <div class=\"row mb-3 hiddenItem\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw mr-1\" aria-hidden=\"true\"></i>{{ 'admin.order.payment_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.payment_date ? Order.payment_date|date_sec : '' }}</div>
                                        </div>
                                        {% if not Order.isMultiple %}
                                            <div class=\"row mb-3 hiddenItem\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw mr-1\" aria-hidden=\"true\"></i>{{ 'admin.order.shipping_date'|trans }}</div>
                                                <div class=\"col\">
                                                    {{ Order.Shippings[0].shipping_date|date_sec }}
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw mr-1 hiddenItem\" aria-hidden=\"true\"></i>{{ 'admin.common.update_date'|trans }}</div>
                                            <div class=\"col\">{{ Order.update_date ? Order.update_date|date_sec : '' }}</div>
                                        </div>
                                        {% if eccube_config.hdn_wari_use is not defined or eccube_config.hdn_wari_use %}
                                            <div class=\"row mb-3\">
                                                <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw mr-1 hiddenItem\" aria-hidden=\"true\"></i>{{ 'admin.common.wari_kikan_flg'|trans }}</div>
                                                {% if Order.wari_kikan_flg == true %}
                                                    <div class=\"col\">○対象　{{ Order.wari_kikan_value }}%</div>
                                                {% else %}
                                                    <div class=\"col\">-</div>
                                                {% endif %}
                                            </div>
                                        {% endif %}
                                        {% if eccube_config.hdn_receipt_no_use %}
                                            <div class=\"row mb-3\">
                                                <div class=\"col-3 col-form-label\">{{ 'admin.common.receipt_no'|trans }}</div>
                                                <div class=\"col\">
                                                    {{ form_widget(form.receipt_no) }}
                                                    {{ form_errors(form.receipt_no) }}
                                                </div>
                                            </div>
                                        {% endif %}
                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.payment_method'|trans }}</label>
                                            <div class=\"col\">
                                                {{ form_widget(form.Payment) }}
                                                {{ form_errors(form.Payment) }}
                                            </div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3 col-form-label\">{{ 'admin.common.shoukai.name'|trans }}</div>
                                            <div class=\"col\">
                                                {{ form_widget(form.shoukai_name) }}
                                                {{ form_errors(form.shoukai_name) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {# エンティティ拡張の自動出力 #}
                                {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-3\">
                                                        <span>{{ f.vars.label|trans }}</span>
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(f) }}
                                                        {{ form_errors(f) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">{{ 'admin.order.orderer'|trans }}</span></div>
                                </div>
                                <div class=\"col\">{% if id %}{{ Order.full_name_kana }}　{{ Order.phone_number }}{% endif %}</div>
                                <div class=\"col-1 text-right\"><a class=\"d-block\" data-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa {{ id ? 'fa-angle-down' : 'fa-angle-up' }} fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                {% if Order.id is empty %}
                                    <div class=\"row mb-3\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-ec-regular px-3\" data-toggle=\"modal\" data-target=\"#searchCustomerModal\">{{ 'admin.order.search_from_customer'|trans }}</a>
                                        </div>
                                    </div>
                                    <!-- 会員検索モーダル -->
                                    <div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCustomerModal\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title font-weight-bold\">{{ 'admin.order.search_customer_title'|trans }}</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    {{ form_widget(searchCustomerModalForm.multi, { attr : {'class': 'mb-2searchCustomerModal', placeholder : 'admin.customer.multi_search_label' }}) }}
                                                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">{{ 'admin.common.search'|trans }}</button>
                                                    <div class=\"form-group\" id=\"searchCustomerModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}

                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row hiddenItem\">
                                            <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.customer_id'|trans }}\">{{ 'admin.customer.customer_id'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">{% if form.Customer.vars.value is empty %}{{ 'admin.order.non_member'|trans }}{% else %}<a href=\"{{ url('admin_customer_edit', {'id': form.Customer.vars.value}) }}\">{{ form.Customer.vars.value }}</a>{% endif %}</p>
                                                {{ form_widget(form.Customer) }}
                                                {{ form_errors(form.Customer) }}
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.name'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.name.name01) }}
                                                        {{ form_errors(form.name.name01) }}
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(form.name.name02) }}
                                                        {{ form_errors(form.name.name02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.kana'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.kana.kana01) }}
                                                        {{ form_errors(form.kana.kana01) }}
                                                    </div>
                                                    <div class=\"col\">
                                                        {{ form_widget(form.kana.kana02) }}
                                                        {{ form_errors(form.kana.kana02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.phone_number'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                {{ form_widget(form.phone_number) }}
                                                {{ form_errors(form.phone_number) }}
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.shain_flg'|trans }}</label>
                                            {% if Order.shain_flg == true %}
                                                <div class=\"col\">○</div>
                                            {% else %}
                                                <div class=\"col\">-</div>
                                            {% endif %}
                                        </div>
                                        <div class=\"row form-group delivery-address-use\">
                                            <label class=\"col-3 col-form-label\">{{ 'admin.common.address'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col form-inline\">
                                                        {{ 'admin.common.postal_symbol'|trans }}
                                                        {{ form_widget(form.postal_code) }}
                                                        {{ form_errors(form.postal_code) }}
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.pref) }}
                                                        {{ form_errors(form.address.pref) }}
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.addr01) }}
                                                        {{ form_errors(form.address.addr01) }}
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.address.addr02) }}
                                                        {{ form_errors(form.address.addr02) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {# <div class=\"row form-group\">
                                    <label class=\"col-3 col-form-label\">{{ 'admin.common.h_adress'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col form-inline\">
                                                        {{ 'admin.common.postal_symbol'|trans }}
                                                        {{ form_widget(form.h_postal_code) }}
                                                        {{ form_errors(form.h_postal_code) }}
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.h_pref) }}
                                                        {{ form_errors(form.h_pref) }}
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.h_addr1) }}
                                                        {{ form_errors(form.h_addr1) }}
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        {{ form_widget(form.h_addr2) }}
                                                        {{ form_errors(form.h_addr2) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> #}
                                    <div class=\"col-6\">
                                                <div class=\"form-group hiddenItem\">
                                                    <label class=\"col-form-label\">{{ 'admin.common.mail_address'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                    {{ form_widget(form.email) }}
                                                    {{ form_errors(form.email) }}
                                                </div>
                                                <div class=\"form-group hiddenItem\">
                                                    <label class=\"col-form-label\">{{ 'admin.common.company_name'|trans }}</label>
                                                    {{ form_widget(form.company_name) }}
                                                    {{ form_errors(form.company_name) }}
                                                </div>
                                                <div class=\"row form-group\">
                                                        <label class=\"col-3 col-form-label\">お問い合わせ</label>
                                                    <div class=\"col\">
                                                        <textarea id=\"order_message\" name=\"order[message]\" rows=\"8\" cols=\"8\" class=\"form-control\"></textarea>
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
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.shipping_info'|trans }}</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                {% if Order.isMultiple %}
                                    {# 複数配送の場合は配送先の表示のみ #}
                                    <div class=\"mb-3 hiddenItem\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.order.shipping_registration'|trans
                                           }) }}\" href=\"{{ path(\"admin_shipping_edit\", {id: Order.id}) }}\">{{ 'admin.order.edit_multiple_shipping'|trans }}</a>
                                        <span class=\"ml-3\">{{ 'admin.order.edit_multiple_shipping_description'|trans }}</span>
                                    </div>
                                    {% for shipping in Order.Shippings %}
                                        <div class=\"col hiddenItem\">
                                            <span class=\"mr-5\">{{ 'admin.order.delivery'|trans }}({{ loop.index }})</span>
                                            {% set shipping_name = shipping.full_name ~ '(' ~ shipping.full_name_kana ~ ')' ~ shipping.company_name is not null ? shipping.company_name : '' %}
                                            {% set shipping_addr = 'admin.common.postal_symbol'|trans ~ shipping.postal_code ~ ' ' ~ shipping.pref ~ shipping.addr01 ~ shipping.addr02 %}
                                            {% set shipping_date = shipping.shipping_date is not null ? shipping.shipping_date|date_day : '' %}
                                            {{ shipping_name }} {{ shipping_addr }} {{ shipping.phone_number }} {{ shipping_date }}
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    {# 単数配送の場合は配送先の編集が可能 #}
                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <!--<button type=\"button\" class=\"btn btn-ec-regular copy-customer\">{{ 'admin.order.copy_orderer'|trans }}</button>-->
                                            {% if Order.id is not empty %}
                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"{{ url('admin_order_pdf_y01') }}?ids[]={{ Order.Shippings[0].id }}\">{{ 'admin.order.output_delivery_note'|trans }}</a>
                                            {% endif %}
                                        </div>
                                        {% if Order.id is not empty %}
                                            <div class=\"col-6 text-right\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.order.shipping_registration'|trans
                                           }) }}\" href=\"{{ path(\"admin_shipping_edit\", {id: Order.id}) }}\">{{ 'admin.order.add_shipping'|trans }}</a>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6 hiddenItem\">
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.name'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.name.name01) }}
                                                            {{ form_errors(form.Shipping.name.name01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.name.name02) }}
                                                            {{ form_errors(form.Shipping.name.name02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.kana'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.kana.kana01) }}
                                                            {{ form_errors(form.Shipping.kana.kana01) }}
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.kana.kana02) }}
                                                            {{ form_errors(form.Shipping.kana.kana02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.address'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col form-inline\">
                                                            {{ 'admin.common.postal_symbol'|trans }}
                                                            {{ form_widget(form.Shipping.postal_code) }}
                                                            {{ form_errors(form.Shipping.postal_code) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.pref) }}
                                                            {{ form_errors(form.Shipping.address.pref) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.addr01) }}
                                                            {{ form_errors(form.Shipping.address.addr01) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            {{ form_widget(form.Shipping.address.addr02) }}
                                                            {{ form_errors(form.Shipping.address.addr02) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6 hiddenItem\">
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.phone_number'|trans }}<span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.phone_number) }}
                                                    {{ form_errors(form.Shipping.phone_number) }}
                                                </div>
                                            </div>

                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">{{ 'admin.common.company_name'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.company_name) }}
                                                    {{ form_errors(form.Shipping.company_name) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12\">
                                            <hr>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 form-group hiddenItem\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.tracking_number'|trans }}\">{{ 'admin.order.tracking_number'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.tracking_number) }}
                                                    {{ form_errors(form.Shipping.tracking_number) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group hiddenItem\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.delivery_provider'|trans }}\">{{ 'admin.order.delivery_provider'|trans }}<span class=\"badge badge-primary ml-1\"></span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.Delivery) }}
                                                    {{ form_errors(form.Shipping.Delivery) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw mr-1\" aria-hidden=\"true\"></i>{{ 'admin.order.for_delivery_date'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.shipping_delivery_date) }}
                                                    {{ form_errors(form.Shipping.shipping_delivery_date) }}
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw mr-1\" aria-hidden=\"true\"></i>{{ 'admin.order.for_delivery_time'|trans }}</label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.DeliveryTime) }}
                                                    {{ form_errors(form.Shipping.DeliveryTime) }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.shipping_info.shop_memo'|trans }}\">{{ 'admin.order.shop_memo_for_delivery'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Shipping.note) }}
                                                    {{ form_errors(form.Shipping.note) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.product_info'|trans }}\"><span class=\"card-title\">{{ 'admin.order.product_info'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        {# 複数配送の場合は商品追加できない #}
                                        {% if not Order.isMultiple %}
                                            <a class=\"btn btn-ec-regular mr-2 add\" data-toggle=\"modal\" data-target=\"#addProduct\">{{ 'admin.order.add_product_item'|trans }}</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">{{ 'admin.order.add_product_item'|trans }}</h5>
                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            {{ form_widget(searchProductModalForm.id, { attr : {'class': 'mb-3', 'placeholder': 'admin.product.multi_search_label' }}) }}
                                                            {{ form_widget(searchProductModalForm.category_id) }}
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">{{ 'admin.common.search'|trans }}</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                        <a class=\"btn btn-ec-regular mr-2 hiddenItem\" data-toggle=\"modal\" data-target=\"#addOrderItemType\">{{ 'admin.order.add_other_item'|trans }}</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">{{ 'admin.order.add_other_item'|trans }}</h5>
                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <div id=\"searchOrderItemTypeList\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{ form_errors(form.OrderItemsErrors) }}
                                    </div>
                                    <div class=\"col-5 text-right\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular mr-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"{{ action_disabled ? ' disabled=\"disabled\"' }}>{{ 'admin.order.update_calculation_results'|trans }}</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"{% apply escape %}{{ include('@admin/Order/order_item_prototype.twig', {'orderItemForm': form.OrderItems.vars.prototype}) }}{% endapply %}\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 pl-3\">{{ 'admin.product.product_name_and_code'|trans }}</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.amount'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.quantity'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.tax_rate'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.tax_type'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">{{ 'admin.order.subtotal'|trans }}</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pr-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for orderItemForm in form.OrderItems %}
                                        {% set OrderItem = orderItemForm.vars.data %}
                                        <tr>
                                            {# hidden values #}
                                            {{ form_widget(orderItemForm.ProductClass) }}
                                            {{ form_widget(orderItemForm.order_item_type) }}
                                            {{ form_widget(orderItemForm.tax_type) }}
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 pl-3\">
                                                <p class=\"mb-0 font-weight-bold\">
                                                    {# 商品とポイント値引きは名前変更できない #}
                                                    {% if OrderItem.isProduct or OrderItem.isPoint %}
                                                        {% if OrderItem.isProduct %}
                                                            <a href=\"{{ url('admin_product_product_edit', {id: OrderItem.ProductClass.Product.id}) }}\" target=\"_blank\">
                                                                {{ OrderItem.product_name }}
                                                            </a>
                                                        {% else %}
                                                            {{ OrderItem.product_name }}
                                                        {% endif %}
                                                        {{ form_widget(orderItemForm.product_name, { 'type': 'hidden' }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.product_name) }}
                                                    {% endif %}
                                                </p>
                                                <span>
                                                    {{ OrderItem.product_code }}
                                                    {% if OrderItem.class_category_name1 is not empty %}
                                                        / (
                                                        {{ OrderItem.class_name1 }}：
                                                        {{ OrderItem.class_category_name1 }}
                                                        {% if OrderItem.class_category_name2 is not empty %}
                                                            /
                                                            {{ OrderItem.class_name2 }}：
                                                            {{ OrderItem.class_category_name2 }}
                                                        {% endif %}
                                                        )
                                                    {% endif %}
                                                </span>
                                                {{ form_errors(orderItemForm.product_name) }}
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    {# ポイント値引きは価格変更できない #}
                                                    {% if OrderItem.isPoint %}
                                                        {{ form_widget(orderItemForm.price, {'attr': { 'readonly': 'readonly', 'class': 'pointPrice' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.price) }}
                                                    {% endif %}
                                                    <div class=\"text-right small\">({{ OrderItem.TaxDisplayType }})</div>
                                                    {{ form_errors(orderItemForm.price) }}
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    {# 複数配送の場合は商品の個数を変更できない、ポイントの場合も個数を変更できない #}
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint %}
                                                        {{ form_widget(orderItemForm.quantity, { 'attr': { 'readonly': 'readonly' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.quantity) }}
                                                    {% endif %}
                                                    {{ form_errors(orderItemForm.quantity) }}
                                          
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    {# 複数配送・ポイント明細・不課税明細は商品の税率を変更できない #}
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint or OrderItem.TaxType.id == constant('Eccube\\\\Entity\\\\Master\\\\TaxType::NON_TAXABLE') %}
                                                        {{ form_widget(orderItemForm.tax_rate, { 'attr': { 'readonly': 'readonly' } }) }}
                                                    {% else %}
                                                        {{ form_widget(orderItemForm.tax_rate) }}
                                                    {% endif %}
                                                    {{ form_errors(orderItemForm.tax_rate) }}
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    {{ OrderItem.tax_type }}
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>{{ (OrderItem.price*OrderItem.quantity)|price }}</span>
                                                </div>
                                                <div class=\"col hiddenItem\">
                                                    <span>{{ OrderItem.total_price|price }}</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-right pr-3\">
                                                <div class=\"row justify-content-end\">
                                                    {# 複数配送の場合は商品を削除できない #}
                                                    {% if (Order.isMultiple and OrderItem.isProduct) or OrderItem.isPoint %}
                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    {% else %}
                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_{{ orderItemForm.vars.id }}\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_{{ orderItemForm.vars.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_{{ orderItemForm.vars.id }}\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title font-weight-bold\">{{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                <span aria-hidden=\"true\">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-left\">
                                                                            <p class=\"text-left\">{{ 'admin.order.delete_item__confirm_message'|trans({ '%name%' : OrderItem.product_name }) }}</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">{{ 'admin.common.delete'|trans }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 商品合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ '商品合計'|trans }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">{{ (Order.subtotal-Order.tax)|price }}</span></div>
                                </div>
                                <!-- 消費税 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ '消費税'|trans }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"align-middle font-weight-normal\">{{ Order.tax|price }}</span></div>
                                </div>
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.subtotal'|trans }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">{{ Order.subtotal|price }}</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.delivery_fee'|trans }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">{{ Order.delivery_fee_total|price }}</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.common.charge'|trans }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">{{ Order.charge|price }}</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.discount'|trans }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle text-danger font-weight-normal\">{{ Order.taxable_discount|price }}</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.total'|trans }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">{{ Order.taxable_total|price }}</span></div>
                                </div>
                                {% for rate, total in Order.taxable_total_by_tax_rate %}
                                    <div class=\"row justify-content-end mb-3 hiddenItem\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">{{ 'common.tax_rate_target'|trans({ '%rate%': rate }) }}</span></div>
                                        <div class=\"col-2 text-right\"><span class=\"align-middle font-weight-normal\">{{ total|price }}</span></div>
                                    </div>
                                {% endfor %}
                                <hr>
                                {% for item in Order.tax_free_discount_items %}
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ item.product_name }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle text-danger font-weight-normal\">{{ item.total_price|price }}</span></div>
                                </div>
                                {% endfor %}
                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.payment_total'|trans }}</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">{{ Order.payment_total|price }}</span></div>
                                </div>
                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.add_point'|trans }}</span></div>
                                    <div class=\"col-2 text-right\">
                                        <span class=\"h4 align-middle font-weight-normal\">
                                            {{ form.vars.value.addpoint|number_format }}
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3 hiddenItem\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">{{ 'admin.order.use_point'|trans }}</span></div>
                                    <div class=\"col-2 text-right\">
                                        <span class=\"h4 align-middle font-weight-normal\">
                                            {# ポイント機能が有効かつ会員の場合のみポイントを編集可能とする #}
                                            {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                                                {{ form_widget(form.use_point) }}
                                            {% else %}
                                                {{ form_widget(form.use_point, {'attr': { 'readonly': 'readonly' } }) }}
                                            {% endif %}
                                            {{ form_errors(form.use_point) }}
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
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.shop_memo'|trans }}\"><span class=\"card-title\">{{ 'admin.common.shop_memo'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                {{ form_widget(form.note, {'attr': {'rows': 8}}) }}
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- メール送信履歴 -->
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4 hiddenItem\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.mail_history'|trans }}\"><span class=\"card-title\">{{ 'admin.order.mail_history'|trans }}</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                    </div>
                                    <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#mailHistory\" aria-expanded=\"false\" aria-controls=\"mailHistory\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"mailHistory\">
                                <div class=\"card-body\">
                                    <table class=\"table table-striped\">
                                        <thead class=\"table-active\">
                                        <tr>
                                            <th class=\"pt-2 pb-2 pl-3\">{{ 'admin.order.mail_send_date'|trans }}</th>
                                            <th class=\"pt-2 pb-2 pr-3\">{{ 'admin.order.mail_subject'|trans }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for MailHistory in Order.MailHistories %}
                                            <tr>
                                                <td class=\"pl-3\">{{ MailHistory.send_date|date_min }}</td>
                                                <td class=\"pr-3\">
                                                    <a class=\"text-primary\" data-toggle=\"modal\" data-target=\"#mail2-{{ loop.index }}\">{{ MailHistory.mail_subject }}</a>
                                                    <div class=\"modal fade\" id=\"mail2-{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-{{ loop.index }}\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">{{ MailHistory.mail_subject }}</h5>
                                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        {% if MailHistory.mail_html_body|length > 0 %}
                                                                            {{ MailHistory.mail_html_body|trans|raw }}
                                                                        {% else %}
                                                                            {{ MailHistory.mail_body|nl2br }}
                                                                        {% endif %}
                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.close'|trans }}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                               '%name%' : 'admin.order.mail'|trans
                                           }) }}\" href=\"{{ path('admin_order_mail', { id : Order.id }) }}\">{{ 'admin.order.mail_create'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    {% endif %}
                </div>
            </div>
        </div>
        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_order', { 'resume': 1 }) }}\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.order.order_list'|trans }}</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"{{ action_disabled ? ' disabled=\"disabled\"' }}>{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Order/edit.twig", "/var/www/htdocs/ec922501/app/template/admin/Order/edit.twig");
    }
}
