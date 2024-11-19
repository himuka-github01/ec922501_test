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

/* @admin/Order/index.twig */
class __TwigTemplate_04097458bfce933468fab69198959dc5b3e4db83d0b9a9519e99e87f034de0f3 extends \Eccube\Twig\Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
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
        // line 12
        $context["menus"] = [0 => "order", 1 => "order_master"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
    }

    // line 15
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <link rel=\"stylesheet\" href=\"";
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

        .order-search {
            float: left;
        }

        .order-search-clear {
            clear: both;
        }

        .hiddenItem {
            display: none !important;
        }
    </style>
";
    }

    // line 46
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function() {
            // datetimepicker で value が消えてしまうので data-value に保持しておく
            \$('input.datetimepicker-input').each(function() {
                \$(this).data('value', \$(this).val());
            });

            \$('input.datetimepicker-input').datetimepicker({
                locale: '";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, false, 59), "html", null, true);
        echo "',
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: false,
                buttons: {
                    showToday: true,
                    showClose: true
                },
            });

            // datetimepicker で value が消えてしまうので更新
            \$('input.datetimepicker-input').each(function() {
                \$(this).val(\$(this).data('value'));
            });

            toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#toggle_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
            });

            // 登録チェックボックス
            \$('#toggle_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '.btn-bulk-wrapper');
            });

            // (HDN) 受注リスト
            \$('#btn_list_juchu').on('click', function(event) {
                event.preventDefault();
                \$('#list_type').val('juchu');
                if (\$('#admin_search_order_saiji_id').val() == '') {
                    alert('イベントを指定してください');
                    return false;
                }
                \$('#search_form').attr('action', \"";
        // line 98
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_list_juchu");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 99
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order");
        echo "\");
                \$('#list_type').val('');
                return false;
            });

            // (HDN) 出荷リスト
            \$('#btn_list_shukka').on('click', function(event) {
                event.preventDefault();
                \$('#list_type').val('shukka');
                if (\$('#admin_search_order_saiji_id').val() == '') {
                    alert('イベントを指定してください');
                    return false;
                }
                \$('#search_form').attr('action', \"";
        // line 112
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_list_shukka");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 113
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order");
        echo "\");
                \$('#list_type').val('');
                return false;
            });

            // (HDN) 売上集計リスト
            \$('#btn_list_uriage').on('click', function(event) {
                event.preventDefault();
                \$('#list_type').val('uriage');
                \$('#search_form').attr('action', \"";
        // line 122
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_list_uriage");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 123
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order");
        echo "\");
                \$('#list_type').val('');
                return false;
            });

            \$('#btn_bulk_delete').on('click', function(event) {
                event.preventDefault();
                \$('#form_bulk').attr('action', \"";
        // line 130
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_bulk_delete");
        echo "\").submit();
                return false;
            });

            // PDF出力(複数)
            \$('#bulkExportPdf').on('click', function(event) {
                window.open('', 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                \$('#form_bulk').attr('action', \"";
        // line 137
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_pdf");
        echo "\");
                \$('#form_bulk').attr('target', 'newwin');
                \$('#form_bulk').submit();
                return false;
            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // 送り状番号
            var updateTrackingNumber = function(id, url, tracking_number, callback) {
                \$.ajax({
                    type: 'PUT',
                    url: url,
                    data: {'tracking_number': tracking_number}
                }).done(function(data, textStatus, jqXHR) {
                    if (data['status'] == 'OK') {
                        \$('#tracking_number_' + id).val(data['tracking_number']);
                        if (typeof callback == 'function') {
                            callback();
                        }
                    } else {
                        alert('Update failed.');
                    }
                    return true;
                }).fail(function(jqXHR, textStatus, errorThrown) {
                    var response = JSON.parse(jqXHR.responseText);
                    var messages = '';
                    for (var i = 0; i < response.messages.length; i++) {
                        messages += response.messages[i] + \"\\n\";
                    }
                    alert(messages);
                    return false;
                });
            };

            \$('button.update_tracking_number').prop('disabled', true);
            // フォームに変更があったら更新ボタンを有効にする
            \$('input.update_tracking_number').on('keyup', function(event) {
                var \$tracking_number = \$(this);
                var \$button = \$(\"button[data-target='#\" + \$tracking_number.attr('id') + \"']\");
                \$button.prop('disabled', false);
                \$button.children('i')
                    .removeClass('text-secondary')
                    .addClass('text-success');
            });
            // enter キーで更新し、次のフォームへフォーカスを移動する
            \$('input.update_tracking_number').on('keypress', function(event) {
                var \$tracking_number = \$(this);
                var \$button = \$(\"button[data-target='#\" + \$tracking_number.attr('id') + \"']\");

                var code = event.which ? event.which : event.keyCode;

                if (code == 13) { // on press to enter
                    var index = \$('input.update_tracking_number').index(this);
                    var callback = function() {
                        \$button.prop('disabled', true);
                        \$button.children('i')
                            .removeClass('text-success')
                            .addClass('text-secondary');
                        \$('input.update_tracking_number:gt(' + index + '):first').focus();
                    };
                    updateTrackingNumber(\$tracking_number.data('shipping_id'), \$tracking_number.data('url'), \$tracking_number.val(), callback);
                    event.preventDefault();
                }
            });
            // 更新ボタンの制御
            \$('button.update_tracking_number').on('click', function(event) {
                event.preventDefault();
                var \$button = \$(this);
                var \$target = \$(\$(this).data('target'));
                var tracking_number = \$target.val();
                var callback = function() {
                    \$button.prop('disabled', true);
                    \$button.children('i')
                        .removeClass('text-success')
                        .addClass('text-secondary');
                };

        updateTrackingNumber(\$target.data('shipping_id'), \$target.data('url'), tracking_number, callback);
    });

    // 完了ボタン
    \$('#bulkChangeComplete').on('click', function() {
        location.href = '";
        // line 224
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "';
    });

});
</script>

";
        // line 230
        echo twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "
";
    }

    // line 233
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form =\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 236
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, false, 240), 'widget');
        echo "
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.saiji_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_id_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "saiji_id", [], "any", false, false, false, 243), 'widget');
        echo "
                            ";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "saiji_id", [], "any", false, false, false, 244), 'errors');
        echo "
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.tenpo_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tenpo_id", [], "any", false, false, false, 248), 'widget');
        echo "
                            ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tenpo_id", [], "any", false, false, false, 249), 'errors');
        echo "
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.bumon_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "bumon_id", [], "any", false, false, false, 253), 'widget');
        echo "
                            ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "bumon_id", [], "any", false, false, false, 254), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"order-search-clear\">
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, false, 263), 'widget');
        echo "
                                ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, false, 264), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\"  data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_search_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 269
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, false, 269);
        // line 270
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "children", [], "any", false, false, false, 271));
        foreach ($context['_seq'] as $context["status_id"] => $context["child"]) {
            // line 272
            echo "                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                id=\"";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 274), "id", [], "any", false, false, false, 274), "html", null, true);
            echo "\"
                                                name=\"";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 275), "full_name", [], "any", false, false, false, 275), "html", null, true);
            echo "\"
                                                class=\"form-check-input\"
                                                value=\"";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 277), "value", [], "any", false, false, false, 277), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 277), "checked", [], "any", false, false, false, 277)) ? (" checked=\"checked\"") : (""));
            echo ">
                                            <label class=\"form-check-label\" for=\"";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 278), "id", [], "any", false, false, false, 278), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 278), "label", [], "any", false, false, false, 278), "html", null, true);
            echo "</label>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status_id'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "                                </div>
                                ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, false, 282), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <p class=\"col-form-label\">";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, false, 286), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, false, 287), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"col-6 order-search\">
                            <label class=\"col-form-label\">";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.reception_date_label"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_date_start", [], "any", false, false, false, 298), 'widget');
        echo "
                                    ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_date_start", [], "any", false, false, false, 299), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_date_end", [], "any", false, false, false, 303), 'widget');
        echo "
                                    ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_date_end", [], "any", false, false, false, 304), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 order-search\">
                            <label class=\"col-form-label\">";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ヤマト配送日"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_date_start", [], "any", false, false, false, 313), 'widget');
        echo "

                                        ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_date_start", [], "any", false, false, false, 315), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_date_end", [], "any", false, false, false, 321), 'widget');
        echo "
                                        ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_date_end", [], "any", false, false, false, 322), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"d-inline-block mb-3 collapsed order-search-clear\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\">
                            <a>
                                <i class=\"fa font-weight-bold mr-1 fa-plus-square-o\">
                                    <span class=\"font-weight-bold\">";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse";
        // line 341
        echo ((($context["has_errors"] ?? null)) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_name"), "html", null, true);
        echo "</label>
                        ";
        // line 345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "name", [], "any", false, false, false, 345), 'widget');
        echo "
                        ";
        // line 346
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "name", [], "any", false, false, false, 346), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <!-- <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 352
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, false, 352), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, false, 353), 'errors');
        echo "
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_kana"), "html", null, true);
        echo "</label>
                        ";
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "kana", [], "any", false, false, false, 361), 'widget');
        echo "
                        ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "kana", [], "any", false, false, false, 362), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <!-- <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_company_name"), "html", null, true);
        echo "</label>
                        ";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "company_name", [], "any", false, false, false, 370), 'widget');
        echo "
                        ";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "company_name", [], "any", false, false, false, 371), 'errors');
        echo "
                    </div> -->
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_start", [], "any", false, false, false, 377), 'widget');
        echo "
                                ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_start", [], "any", false, false, false, 378), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_end", [], "any", false, false, false, 382), 'widget');
        echo "
                                ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_end", [], "any", false, false, false, 383), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <!-- <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</label>
                        ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "email", [], "any", false, false, false, 391), 'widget');
        echo "
                        ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "email", [], "any", false, false, false, 392), 'errors');
        echo "
                    </div> -->
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_start", [], "any", false, false, false, 398), 'widget');
        echo "
                                ";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_start", [], "any", false, false, false, 399), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 403
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_end", [], "any", false, false, false, 403), 'widget');
        echo "
                                ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_end", [], "any", false, false, false, 404), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                        ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "phone_number", [], "any", false, false, false, 412), 'widget');
        echo "
                        ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "phone_number", [], "any", false, false, false, 413), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</label>
                        ";
        // line 421
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_no", [], "any", false, false, false, 421), 'widget');
        echo "
                        ";
        // line 422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_no", [], "any", false, false, false, 422), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_start", [], "any", false, false, false, 429), 'widget');
        echo "
                                    ";
        // line 430
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_start", [], "any", false, false, false, 430), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_end", [], "any", false, false, false, 436), 'widget');
        echo "
                                    ";
        // line 437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_end", [], "any", false, false, false, 437), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
        echo "</p>
                                ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tracking_number", [], "any", false, false, false, 448), 'widget');
        echo "
                                ";
        // line 449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tracking_number", [], "any", false, false, false, 449), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                        ";
        // line 455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_product_name", [], "any", false, false, false, 455), 'widget');
        echo "
                        ";
        // line 456
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_product_name", [], "any", false, false, false, 456), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail"), "html", null, true);
        echo "</p>
                                ";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_mail", [], "any", false, false, false, 464), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_mail", [], "any", false, false, false, 465), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\"></div>
                </div>

                ";
        // line 473
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["searchForm"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 473), "eccube_form_options", [], "any", false, false, false, 473), "auto_render", [], "any", false, false, false, 473); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 474
            echo "                    ";
            // line 475
            echo "                    <div class=\"row mb-2\">
                        ";
            // line 476
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 476), "eccube_form_options", [], "any", false, false, false, 476), "form_theme", [], "any", false, false, false, 476)) {
                // line 477
                echo "                            ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 477), "eccube_form_options", [], "any", false, false, false, 477), "form_theme", [], "any", false, false, false, 477)], true);
                // line 478
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                        ";
            } else {
                // line 480
                echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                // line 482
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 482), "label", [], "any", false, false, false, 482)), "html", null, true);
                echo "</label>
                                    ";
                // line 483
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                    ";
                // line 484
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 488
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 490
        echo "            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\" id=\"search_submit\">";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                            ";
        // line 496
        if (($context["pagination"] ?? null)) {
            // line 497
            echo "                                <span class=\"font-weight-bold ml-2\" id=\"search_total_count\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 497)]);
            echo "</span>
                            ";
        }
        // line 499
        echo "                            <input type=\"hidden\" name=\"list_type\" id=\"list_type\">
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_juchu\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.list_juchu"), "html", null, true);
        echo "</span>
                            </button>
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_shukka\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.list_shukka"), "html", null, true);
        echo "</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 513
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => ($context["searchForm"] ?? null)], true, true);
        echo "
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 522
        if ((($context["pagination"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 522))) {
            // line 523
            echo "
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"";
            // line 525
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-7\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-auto d-none btn-bulk-wrapper\">
                                        <label class=\"mr-2\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 530
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.bulk_actions"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_actions"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <!--
                                        <button id=\"bulkSendMail\" type=\"button\" class=\"btn btn-ec-regular mr-2\" data-type=\"mail\" data-bulk-update=\"true\">
                                            ";
            // line 533
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.send_mail"), "html", null, true);
            echo "
                                        </button>
                                        -->
                                        <!--
                                        <button type=\"button\" id=\"bulkExportPdf\" class=\"btn btn-ec-regular mr-2\">";
            // line 537
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note_short"), "html", null, true);
            echo "</button>
                                        -->
                                        ";
            // line 540
            echo "                                    </div>
                                    <div class=\"col d-none btn-bulk-wrapper\">
                                        <div class=\"d-inline-block mr-2\">
                                            <select class=\"custom-select\" id=\"option_bulk_status\">
                                                <option value=\"\" selected>";
            // line 544
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.change_status"), "html", null, true);
            echo "</option>
                                                ";
            // line 545
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["OrderStatuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 546
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 546), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 546), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 548
            echo "                                            </select>
                                        </div>
                                        <button type=\"button\" id=\"btn_bulk_status\" class=\"btn btn-ec-regular mr-2 progressModal\" data-type=\"status\" data-bulk-update=\"true\" data-submit=\"bulk\">
                                            ";
            // line 551
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-5 text-right\">
                                <div class=\"d-inline-block\">
                                    <select class=\"custom-select\" onchange=\"location = this.value;\">
                                        ";
            // line 559
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageMaxis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 560
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 560) == ($context["page_count"] ?? null))) {
                    echo " selected ";
                }
                // line 561
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_order_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 561)]), "html", null, true);
                echo "\">
                                                ";
                // line 562
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 562)]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 564
            echo "                                    </select>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-ec-regular\" data-toggle=\"dropdown\" id=\"csvDownloadDropDown\">
                                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                                <span>";
            // line 571
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 574
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_order");
            echo "\" id=\"orderCsvDownload\">
                                                    ";
            // line 575
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_csv"), "html", null, true);
            echo "
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 577
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_shipping");
            echo "\" id=\"shippingCsvDownload\">
                                                    ";
            // line 578
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_csv"), "html", null, true);
            echo "
                                                </a>
                                            </div>
                                        </div>

                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-ec-regular\" data-toggle=\"dropdown\" id=\"csvSettingDropDown\">
                                                <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                                                <span>";
            // line 586
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"";
            // line 589
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_ORDER")]), "html", null, true);
            echo "\" id=\"orderCsvSetting\">
                                                    ";
            // line 590
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_csv"), "html", null, true);
            echo "
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 592
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_SHIPPING")]), "html", null, true);
            echo "\" id=\"shippingCsvSetting\">
                                                    ";
            // line 593
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_csv"), "html", null, true);
            echo "
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">
                                            <input type=\"checkbox\" id=\"toggle_check_all\" name=\"filter\" value=\"open\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 609
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 610
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_id_label"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 611
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center text-nowrap\">";
            // line 612
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 613
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.reception_date_label"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 614
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date_label"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 615
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_label"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 616
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_status_label"), "html", null, true);
            echo "</th>
                                        <!-- 管理画面へ受取方法追加 2024/09/04 田中 -->
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 618
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.uketoi_label"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 619
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("受付店鋪"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 620
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.note_label"), "html", null, true);
            echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 624
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 625
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "Shippings", [], "any", false, false, false, 625));
                foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
                    // line 626
                    echo "                                            <tr>
                                                <td class=\"align-middle text-center pl-3\">
                                                    <input type=\"checkbox\" id=\"check_";
                    // line 628
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 628), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 628), "html", null, true);
                    echo "\" name=\"ids[]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 628), "html", null, true);
                    echo "\"
                                                           data-preview-notify-mail-url=\"";
                    // line 629
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 629)]), "html", null, true);
                    echo "\"
                                                           data-notify-mail-url=\"";
                    // line 630
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 630)]), "html", null, true);
                    echo "\"
                                                           data-update-status-url=\"";
                    // line 631
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_update_order_status", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 631)]), "html", null, true);
                    echo "\"
                                                    />
                                                </td>
                                                <td class=\"align-middle text-left\">
                                                    <a class=\"action-edit\" href=\"";
                    // line 635
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 635)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_no", [], "any", false, false, false, 635), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "name01", [], "any", false, false, false, 635), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "name02", [], "any", false, false, false, 635), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, false, 635)), "html", null, true);
                    echo "</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 638
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "Saiji", [], "any", false, false, false, 638) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "Saiji", [], "any", false, false, false, 638), "name", [], "any", false, false, false, 638), "html", null, true))));
                    echo "
                                                </td>
                                                <td class=\"align-middle text-right\">
                                                    ";
                    // line 641
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Order"], "payment_total", [], "any", false, false, false, 641)), "html", null, true);
                    echo "<br>
                                                    ";
                    // line 642
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Order"], "payment_date", [], "any", false, false, false, 642)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "payment_date", [], "any", false, false, false, 642), "y/m/d")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.not_payment"))), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 645
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "payment_method", [], "any", false, false, false, 645), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 648
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "order_date", [], "any", false, false, false, 648), "y/m/d"), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                ";
                    // line 651
                    if ((twig_get_attribute($this->env, $this->source, $context["Order"], "uketori", [], "any", false, false, false, 651) == "店頭受取")) {
                        // line 652
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "ukedate", [], "any", false, false, false, 652), "y/m/d"), "html", null, true);
                        echo "<br>
                                                    ";
                        // line 653
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "visit_t", [], "any", false, false, false, 653), "html", null, true);
                        echo "
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 654
$context["Order"], "uketori", [], "any", false, false, false, 654) == "ヤマト配送")) {
                        // line 655
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 655), "y/m/d"), "html", null, true);
                        echo "<br>
                                                    ";
                        // line 656
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, false, 656), "html", null, true);
                        echo "
                                                ";
                    } else {
                        // line 658
                        echo "                                                    ";
                        echo "ー";
                        echo "
                                                ";
                    }
                    // line 660
                    echo "                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 662
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "Tenpo", [], "any", false, false, false, 662) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "Tenpo", [], "any", false, false, false, 662), "tenpoName", [], "any", false, false, false, 662), "html", null, true))));
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 665
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, false, 665), "id", [], "any", false, false, false, 665) == 3)) {
                        // line 666
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, false, 666), "name", [], "any", false, false, false, 666)), "html", null, true);
                        echo "
                                                    ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 667
$context["Order"], "is_multiple", [], "any", false, false, false, 667)) {
                        // line 668
                        echo "                                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 668)]), "html", null, true);
                        echo "\">
                                                            ";
                        // line 669
                        if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, false, 669)) {
                            // line 670
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, false, 670), "y/m/d"), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 672
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.unshipped"), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 674
                        echo "                                                    ";
                    } else {
                        // line 675
                        echo "                                                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, false, 675)) {
                            // line 676
                            echo "                                                            完了<br> ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, false, 676), "y/m/d"), "html", null, true);
                            echo " 
                                                        ";
                        } else {
                            // line 678
                            echo "                                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.unshipped"), "html", null, true);
                            echo "
                                                        ";
                        }
                        // line 680
                        echo "                                                    ";
                    }
                    // line 681
                    echo "                                                 
                                                    ";
                    // line 682
                    if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "mail_send_date", [], "any", false, false, false, 682)) {
                        // line 683
                        echo "                                                        ";
                        $context["send_mail_date"] = $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "mail_send_date", [], "any", false, false, false, 683));
                        // line 684
                        echo "                                                         <i class=\"fa fa-envelope fa-lg text-secondary\" aria-hidden=\"true\" data-tooltip=\"true\" data-placement=\"top\" data-original-title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail__completed", ["%date%" => ($context["send_mail_date"] ?? null)]), "html", null, true);
                        echo "\"></i>
                                                    ";
                    }
                    // line 686
                    echo "                                                    <!-- 管理画面に受取方法追加　2024/09/04 田中 -->
                                                    <td class=\"align-middle text-center\">
                                                        ";
                    // line 688
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "uketori", [], "any", false, false, false, 688), "html", null, true);
                    echo "
                                                    </td>
                                                    <!--管理画面に受付店舗追加　2024/10/10 田中 -->
                                                    <td class=\"align-middle text-center\">
                                                        ";
                    // line 692
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "Tenpos", [], "any", false, false, false, 692), "html", null, true);
                    echo "
                                                    </td>
                                                </td>
                                                <td class=\"align-middle text-center\" style=\"word-break: break-all; width: 30ch;\">
                                                    ";
                    // line 696
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "message", [], "any", false, false, false, 696), "html", null, true);
                    echo "<!--メモ保留--><br>
                                                    受付：";
                    // line 697
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "uketsuke_name", [], "any", false, false, false, 697), "html", null, true);
                    echo "　/　紹介：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shoukai_name", [], "any", false, false, false, 697), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle pr-3\">
                                                    <div class=\"text-right\">
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon confirmationModal\"
                                                               data-type=\"mail\" data-bulk-update=\"false\"
                                                               data-preview-notify-mail-url=\"";
                    // line 704
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 704)]), "html", null, true);
                    echo "\"
                                                               data-notify-mail-url=\"";
                    // line 705
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 705)]), "html", null, true);
                    echo "\"
                                                               data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    // line 706
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail_send"), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon pdf-print\" href=\"";
                    // line 711
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_pdf_y01");
                    echo "?ids[]=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 711), "html", null, true);
                    echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note_short"), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-table fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon confirmationModal\" href=\"javascript:;\"
                                                               data-id=\"";
                    // line 717
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 717), "html", null, true);
                    echo "\" data-type=\"status\" data-bulk-update=\"false\"
                                                               data-update-status-id=\"";
                    // line 718
                    echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\OrderStatus::DELIVERED"), "html", null, true);
                    echo "\"
                                                               data-update-status-url=\"";
                    // line 719
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_update_order_status", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 719)]), "html", null, true);
                    echo "\"
                                                               data-preview-notify-mail-url=\"";
                    // line 720
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 720)]), "html", null, true);
                    echo "\"
                                                               data-tooltip=\"true\" data-placement=\"top\" title data-original-title=\"";
                    // line 721
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped"), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-check fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 729
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 730
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 735
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 735) > 0)) {
                // line 736
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "@admin/Order/index.twig", 736)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 736), "routes" => "admin_order_page"]));
                // line 737
                echo "                                ";
            }
            // line 738
            echo "                            </div>
                        </div>
                    </form>
                    ";
            // line 742
            echo "                ";
        } elseif (($context["has_errors"] ?? null)) {
            // line 743
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 745
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 746
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
            // line 750
            echo "                ";
        } else {
            // line 751
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 753
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 754
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 755
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 759
        echo "
                <!-- 出荷済にする確認モーダル -->
                <div class=\"modal fade\" id=\"sentUpdateModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sentUpdateModal\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title font-weight-bold\"><!--confirmationModal_js.twig--></h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body\">
                                <p class=\"modal-message\"></p>
                                <ul id=\"bulkErrors\"></ul>
                                <div id=\"bulk-options\">
                                    <div class=\"font-weight-bold mb-2 notificationMail\">";
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                        <label class=\"form-check-label notificationMail\">
                                            ";
        // line 776
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div>
                                        <div class=\"d-inline-block\" data-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span class=\"font-weight-bold\">";
        // line 780
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bulk_action__confirm_view_mail_body"), "html", null, true);
        echo "</span></a></div>
                                        <div class=\"collapse bg-light p-4 ec-collapse bg-ec-formGray\" id=\"viewEmail\" style=\"word-wrap: break-word; word-break:break-all\">
                                            <pre></pre>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 791
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 793
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 一括削除の確認モーダル -->
                <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title font-weight-bold\">";
        // line 804
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_title"), "html", null, true);
        echo "</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body text-left\">
                                <p class=\"text-left\">";
        // line 808
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_message"), "html", null, true);
        echo "</p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-ec-delete\" type=\"button\" id=\"btn_bulk_delete\">";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Order/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1607 => 816,  1603 => 815,  1593 => 808,  1586 => 804,  1572 => 793,  1567 => 791,  1553 => 780,  1546 => 776,  1539 => 772,  1524 => 759,  1517 => 755,  1513 => 754,  1509 => 753,  1505 => 751,  1502 => 750,  1496 => 746,  1492 => 745,  1488 => 743,  1485 => 742,  1480 => 738,  1477 => 737,  1474 => 736,  1472 => 735,  1465 => 730,  1459 => 729,  1445 => 721,  1441 => 720,  1437 => 719,  1433 => 718,  1429 => 717,  1416 => 711,  1408 => 706,  1404 => 705,  1400 => 704,  1388 => 697,  1384 => 696,  1377 => 692,  1370 => 688,  1366 => 686,  1360 => 684,  1357 => 683,  1355 => 682,  1352 => 681,  1349 => 680,  1343 => 678,  1337 => 676,  1334 => 675,  1331 => 674,  1325 => 672,  1319 => 670,  1317 => 669,  1312 => 668,  1310 => 667,  1305 => 666,  1303 => 665,  1297 => 662,  1293 => 660,  1287 => 658,  1282 => 656,  1277 => 655,  1275 => 654,  1271 => 653,  1266 => 652,  1264 => 651,  1258 => 648,  1252 => 645,  1246 => 642,  1242 => 641,  1236 => 638,  1222 => 635,  1215 => 631,  1211 => 630,  1207 => 629,  1199 => 628,  1195 => 626,  1190 => 625,  1186 => 624,  1179 => 620,  1175 => 619,  1171 => 618,  1166 => 616,  1162 => 615,  1158 => 614,  1154 => 613,  1150 => 612,  1146 => 611,  1142 => 610,  1138 => 609,  1119 => 593,  1115 => 592,  1110 => 590,  1106 => 589,  1100 => 586,  1089 => 578,  1085 => 577,  1080 => 575,  1076 => 574,  1070 => 571,  1061 => 564,  1053 => 562,  1048 => 561,  1043 => 560,  1039 => 559,  1028 => 551,  1023 => 548,  1012 => 546,  1008 => 545,  1004 => 544,  998 => 540,  993 => 537,  986 => 533,  978 => 530,  968 => 525,  964 => 523,  962 => 522,  950 => 513,  940 => 506,  933 => 502,  928 => 499,  922 => 497,  920 => 496,  916 => 495,  909 => 490,  902 => 488,  895 => 484,  891 => 483,  887 => 482,  883 => 480,  877 => 478,  874 => 477,  872 => 476,  869 => 475,  867 => 474,  862 => 473,  852 => 465,  848 => 464,  844 => 463,  834 => 456,  830 => 455,  826 => 454,  818 => 449,  814 => 448,  810 => 447,  797 => 437,  793 => 436,  787 => 433,  781 => 430,  777 => 429,  770 => 425,  764 => 422,  760 => 421,  756 => 420,  746 => 413,  742 => 412,  738 => 411,  728 => 404,  724 => 403,  719 => 401,  714 => 399,  710 => 398,  704 => 395,  698 => 392,  694 => 391,  690 => 390,  680 => 383,  676 => 382,  671 => 380,  666 => 378,  662 => 377,  656 => 374,  650 => 371,  646 => 370,  642 => 369,  632 => 362,  628 => 361,  624 => 360,  614 => 353,  610 => 352,  606 => 351,  598 => 346,  594 => 345,  590 => 344,  584 => 341,  574 => 334,  559 => 322,  555 => 321,  549 => 318,  543 => 315,  538 => 313,  531 => 309,  523 => 304,  519 => 303,  514 => 301,  509 => 299,  505 => 298,  499 => 295,  488 => 287,  484 => 286,  480 => 285,  474 => 282,  471 => 281,  460 => 278,  454 => 277,  449 => 275,  445 => 274,  441 => 272,  437 => 271,  434 => 270,  432 => 269,  425 => 267,  419 => 264,  415 => 263,  409 => 262,  398 => 254,  394 => 253,  388 => 252,  382 => 249,  378 => 248,  372 => 247,  366 => 244,  362 => 243,  356 => 242,  351 => 240,  344 => 236,  340 => 234,  336 => 233,  330 => 230,  321 => 224,  231 => 137,  221 => 130,  211 => 123,  207 => 122,  195 => 113,  191 => 112,  175 => 99,  171 => 98,  129 => 59,  116 => 49,  112 => 48,  107 => 47,  103 => 46,  73 => 20,  69 => 19,  62 => 15,  55 => 14,  50 => 11,  48 => 17,  46 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/index.twig", "/var/www/htdocs/ec922501/app/template/admin/Order/index.twig");
    }
}
