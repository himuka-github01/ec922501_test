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

/* @admin/Order/sum_tenpo_bumon_02.twig */
class __TwigTemplate_26243b887833ab0d8916a1181c04a18146f6ee98b353d4c29a9c666b615af188 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "order", 1 => "order_sum_tenpo_bumon_02"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchForm"] ?? null), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/sum_tenpo_bumon_02.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_sum_tenpo_bumon_02"), "html", null, true);
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
            display: none;
        }

        .tenpoDateBumonLine {}
        .sumTenpoBumonLine {}
        .sumTenpoDateLine { background-color: #afeeee; }
        .sumTenpoLine { background-color: #afeeee; }
    </style>
";
    }

    // line 51
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
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
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, false, 64), "html", null, true);
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
        // line 103
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_list_juchu");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 104
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
        // line 117
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_list_shukka");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 118
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order");
        echo "\");
                \$('#list_type').val('');
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
        // line 198
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "';
    });

});
</script>

";
        // line 204
        echo twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "
";
    }

    // line 207
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 208
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 210
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_sum_tenpo_bumon_02");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, false, 214), 'widget');
        echo "
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.saiji_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_id_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "saiji_id", [], "any", false, false, false, 217), 'widget');
        echo "
                            ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "saiji_id", [], "any", false, false, false, 218), 'errors');
        echo "
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.tenpo_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tenpo_id", [], "any", false, false, false, 222), 'widget');
        echo "
                            ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tenpo_id", [], "any", false, false, false, 223), 'errors');
        echo "
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.bumon_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "bumon_id", [], "any", false, false, false, 227), 'widget');
        echo "
                            ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "bumon_id", [], "any", false, false, false, 228), 'errors');
        echo "
                        </div>
                        <div class=\"order-search-clear hiddenItem\">
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, false, 233), 'widget');
        echo "
                                ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "multi", [], "any", false, false, false, 234), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\"  data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_search_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 239
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, false, 239);
        // line 240
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "children", [], "any", false, false, false, 241));
        foreach ($context['_seq'] as $context["status_id"] => $context["child"]) {
            // line 242
            echo "                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                id=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 244), "id", [], "any", false, false, false, 244), "html", null, true);
            echo "\"
                                                name=\"";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 245), "full_name", [], "any", false, false, false, 245), "html", null, true);
            echo "\"
                                                class=\"form-check-input\"
                                                value=\"";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 247), "value", [], "any", false, false, false, 247), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 247), "checked", [], "any", false, false, false, 247)) ? (" checked=\"checked\"") : (""));
            echo ">
                                            <label class=\"form-check-label\" for=\"";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 248), "id", [], "any", false, false, false, 248), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 248), "label", [], "any", false, false, false, 248), "html", null, true);
            echo "</label>";
            // line 249
            if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "vars", [], "any", false, false, false, 249), "order_count", [], "any", false, false, false, 249)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["status_id"]] ?? null) : null), "display", [], "any", false, false, false, 249)) {
                // line 250
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "vars", [], "any", false, false, false, 250), "order_count", [], "any", false, false, false, 250)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["status_id"]] ?? null) : null), "count", [], "any", false, false, false, 250), "html", null, true);
                echo "</a>)";
            }
            // line 252
            echo "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status_id'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                                </div>
                                ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, false, 255), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <p class=\"col-form-label\">";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, false, 259), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, false, 260), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"col-6 order-search hiddenItem\">
                            <label class=\"col-form-label\">";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.reception_date_label"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_datetime_start", [], "any", false, false, false, 267), 'widget');
        echo "
                                    ";
        // line 268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_datetime_start", [], "any", false, false, false, 268), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_datetime_end", [], "any", false, false, false, 272), 'widget');
        echo "
                                    ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_datetime_end", [], "any", false, false, false, 273), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 order-search hiddenItem\">
                            <label class=\"col-form-label\">";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date_label"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_datetime_start", [], "any", false, false, false, 282), 'widget');
        echo "
                                        ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_datetime_start", [], "any", false, false, false, 283), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_datetime_end", [], "any", false, false, false, 289), 'widget');
        echo "
                                        ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_delivery_datetime_end", [], "any", false, false, false, 290), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row hiddenItem\">
                            <div class=\"form-group col-12\">
                                <label class=\"col-form-label\"  data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_search_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 299
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, false, 299);
        // line 300
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "children", [], "any", false, false, false, 301));
        foreach ($context['_seq'] as $context["status_id"] => $context["child"]) {
            // line 302
            echo "                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                   id=\"";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 304), "id", [], "any", false, false, false, 304), "html", null, true);
            echo "\"
                                                   name=\"";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 305), "full_name", [], "any", false, false, false, 305), "html", null, true);
            echo "\"
                                                   class=\"form-check-input\"
                                                   value=\"";
            // line 307
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 307), "value", [], "any", false, false, false, 307), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 307), "checked", [], "any", false, false, false, 307)) ? (" checked=\"checked\"") : (""));
            echo ">
                                            <label class=\"form-check-label\" for=\"";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 308), "id", [], "any", false, false, false, 308), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 308), "label", [], "any", false, false, false, 308), "html", null, true);
            echo "</label>";
            // line 309
            if (twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "vars", [], "any", false, false, false, 309), "order_count", [], "any", false, false, false, 309)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["status_id"]] ?? null) : null), "display", [], "any", false, false, false, 309)) {
                // line 310
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["statusForm"] ?? null), "vars", [], "any", false, false, false, 310), "order_count", [], "any", false, false, false, 310)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["status_id"]] ?? null) : null), "count", [], "any", false, false, false, 310), "html", null, true);
                echo "</a>)";
            }
            // line 312
            echo "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status_id'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "                                </div>
                                ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "status", [], "any", false, false, false, 315), 'errors');
        echo "
                            </div>
                        </div>
                        <!--
                        <div class=\"d-inline-block mb-3 collapsed order-search-clear\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\">
                            <a>
                                <i class=\"fa font-weight-bold mr-1 fa-plus-square-o\">
                                    <span class=\"font-weight-bold\">";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span>
                                </i>
                            </a>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse";
        // line 330
        echo ((($context["has_errors"] ?? null)) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_name"), "html", null, true);
        echo "</label>
                        ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "name", [], "any", false, false, false, 334), 'widget');
        echo "
                        ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "name", [], "any", false, false, false, 335), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, false, 341), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment", [], "any", false, false, false, 342), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_kana"), "html", null, true);
        echo "</label>
                        ";
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "kana", [], "any", false, false, false, 350), 'widget');
        echo "
                        ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "kana", [], "any", false, false, false, 351), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_company_name"), "html", null, true);
        echo "</label>
                        ";
        // line 359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "company_name", [], "any", false, false, false, 359), 'widget');
        echo "
                        ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "company_name", [], "any", false, false, false, 360), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_start", [], "any", false, false, false, 366), 'widget');
        echo "
                                ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_start", [], "any", false, false, false, 367), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_end", [], "any", false, false, false, 371), 'widget');
        echo "
                                ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_datetime_end", [], "any", false, false, false, 372), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</label>
                        ";
        // line 380
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "email", [], "any", false, false, false, 380), 'widget');
        echo "
                        ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "email", [], "any", false, false, false, 381), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_start", [], "any", false, false, false, 387), 'widget');
        echo "
                                ";
        // line 388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_start", [], "any", false, false, false, 388), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_end", [], "any", false, false, false, 392), 'widget');
        echo "
                                ";
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "update_datetime_end", [], "any", false, false, false, 393), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                        ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "phone_number", [], "any", false, false, false, 401), 'widget');
        echo "
                        ";
        // line 402
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "phone_number", [], "any", false, false, false, 402), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</label>
                        ";
        // line 410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_no", [], "any", false, false, false, 410), 'widget');
        echo "
                        ";
        // line 411
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "order_no", [], "any", false, false, false, 411), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 418
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_start", [], "any", false, false, false, 418), 'widget');
        echo "
                                    ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_start", [], "any", false, false, false, 419), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_end", [], "any", false, false, false, 425), 'widget');
        echo "
                                    ";
        // line 426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "payment_total_end", [], "any", false, false, false, 426), 'errors');
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
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
        echo "</p>
                                ";
        // line 437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tracking_number", [], "any", false, false, false, 437), 'widget');
        echo "
                                ";
        // line 438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "tracking_number", [], "any", false, false, false, 438), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                        ";
        // line 444
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_product_name", [], "any", false, false, false, 444), 'widget');
        echo "
                        ";
        // line 445
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "buy_product_name", [], "any", false, false, false, 445), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail"), "html", null, true);
        echo "</p>
                                ";
        // line 454
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_mail", [], "any", false, false, false, 454), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "shipping_mail", [], "any", false, false, false, 455), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\"></div>
                </div>

            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <!--<div class=\"mb-4\">-->
                    <div class=\"col-12\">
                        <div class=\"col-8 p-3\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\" id=\"search_submit\">";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                            <input type=\"hidden\" name=\"list_type\" id=\"list_type\">
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_juchu\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.list_juchu"), "html", null, true);
        echo "</span>
                            </button>
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_shukka\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.list_shukka"), "html", null, true);
        echo "</span>
                            </button>
                        </div>
                    </div>
                    <!--</div>-->
                </div>
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 484
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
        // line 493
        if (($context["posOfPayment"] ?? null)) {
            // line 494
            echo "
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"";
            // line 496
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                <tbody>
                                ";
            // line 501
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lines"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 502
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 502) == "header1Line")) {
                    // line 503
                    echo "                                        <tr>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">";
                    // line 504
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_label"), "html", null, true);
                    echo "</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">";
                    // line 505
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "tenpo_name", [], "any", false, false, false, 505) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "tenpo_name", [], "any", false, false, false, 505), "html", null, true))));
                    echo "</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\" colspan=\"9\">";
                    // line 506
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 506), "html", null, true);
                    echo "</th>
                                        </tr>
                                    ";
                }
                // line 509
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 509) == "header2Line")) {
                    // line 510
                    echo "                                        <tr>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">";
                    // line 511
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date_label"), "html", null, true);
                    echo "</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                    // line 512
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
                    echo "</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">税込売上</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">消費税</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">税抜売上<br>割引後</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">割引合計</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">FC割引</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">社員割引</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">早割引</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">まとめ割引</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">税抜売上<br>割引前</th>
                                            ";
                    // line 522
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["posOfPayment"] ?? null));
                    foreach ($context['_seq'] as $context["method"] => $context["pos"]) {
                        // line 523
                        echo "                                                <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                        echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                        echo "</th>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['method'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 525
                    echo "                                        </tr>
                                    ";
                }
                // line 527
                echo "                                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 527) == "tenpoDateBumonLine") || (twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 527) == "sumTenpoBumonLine"))) {
                    // line 528
                    echo "                                        <tr class='";
                    echo (((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 528) == "tenpoDateBumonLine")) ? ("tenpoDateBumonLine") : ("sumTenpoBumonLine"));
                    echo "'>
                                            <td class=\"align-middle text-center pl-3\">
                                                ";
                    // line 530
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 530) == "tenpoDateBumonLine")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 530), "html", null, true))) : (print ("**部門計**")));
                    echo "
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                ";
                    // line 533
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "bumon_name", [], "any", false, false, false, 533), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 536
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_komi", [], "any", false, false, false, 536)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 539
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_tax_gaku", [], "any", false, false, false, 539)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 542
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_kingaku", [], "any", false, false, false, 542)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 545
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "sum_base_kingaku", [], "any", false, false, false, 545) - twig_get_attribute($this->env, $this->source, $context["Order"], "sum_kingaku", [], "any", false, false, false, 545))), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 548
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_a_kingaku", [], "any", false, false, false, 548)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 551
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_b_kingaku", [], "any", false, false, false, 551)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 554
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_kikan_kingaku", [], "any", false, false, false, 554)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 557
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_matome_kingaku", [], "any", false, false, false, 557)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 560
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_base_kingaku", [], "any", false, false, false, 560)), "html", null, true);
                    echo "
                                            </td>
                                            ";
                    // line 562
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["posOfPayment"] ?? null));
                    foreach ($context['_seq'] as $context["method"] => $context["pos"]) {
                        // line 563
                        echo "                                                <td class=\"align-middle text-right\">
                                                    ";
                        // line 564
                        ((((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["Order"], "sum_payment_komi", [], "any", false, false, false, 564)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["pos"]] ?? null) : null) == 0)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["Order"], "sum_payment_komi", [], "any", false, false, false, 564)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["pos"]] ?? null) : null)), "html", null, true))));
                        echo "
                                                </td>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['method'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 567
                    echo "                                        </tr>
                                    ";
                }
                // line 569
                echo "                                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 569) == "sumTenpoDateLine") || (twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 569) == "sumTenpoLine"))) {
                    // line 570
                    echo "                                        <tr class='";
                    echo (((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 570) == "sumTenpoDateLine")) ? ("sumTenpoDateLine") : ("sumTenpoLine"));
                    echo "'>
                                            <td class=\"align-middle text-center pl-3\">
                                                ";
                    // line 572
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 572) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 572), "html", null, true))));
                    echo "
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                ";
                    // line 575
                    if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 575) == "sumTenpoDateLine")) {
                        // line 576
                        echo "                                                    **日計**
                                                ";
                    } else {
                        // line 578
                        echo "                                                   **店舗計**
                                                ";
                    }
                    // line 580
                    echo "                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 582
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_komi", [], "any", false, false, false, 582)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 585
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_tax_gaku", [], "any", false, false, false, 585)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 588
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_kingaku", [], "any", false, false, false, 588)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 591
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "sum_base_kingaku", [], "any", false, false, false, 591) - twig_get_attribute($this->env, $this->source, $context["Order"], "sum_kingaku", [], "any", false, false, false, 591))), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 594
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_a_kingaku", [], "any", false, false, false, 594)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 597
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_b_kingaku", [], "any", false, false, false, 597)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 600
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_kikan_kingaku", [], "any", false, false, false, 600)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 603
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_matome_kingaku", [], "any", false, false, false, 603)), "html", null, true);
                    echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 606
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_base_kingaku", [], "any", false, false, false, 606)), "html", null, true);
                    echo "
                                            </td>
                                            ";
                    // line 608
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["posOfPayment"] ?? null));
                    foreach ($context['_seq'] as $context["method"] => $context["pos"]) {
                        // line 609
                        echo "                                                <td class=\"align-middle text-right\">
                                                    ";
                        // line 610
                        ((((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["Order"], "sum_payment_komi", [], "any", false, false, false, 610)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[$context["pos"]] ?? null) : null) == 0)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["Order"], "sum_payment_komi", [], "any", false, false, false, 610)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[$context["pos"]] ?? null) : null)), "html", null, true))));
                        echo "
                                                </td>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['method'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 613
                    echo "                                        </tr>
                                    ";
                }
                // line 615
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 616
            echo "                                </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                            </div>
                        </div>
                    </form>
                    ";
            // line 625
            echo "                ";
        } elseif (($context["has_errors"] ?? null)) {
            // line 626
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 628
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 629
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
            // line 633
            echo "                ";
        } else {
            // line 634
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 636
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_set_saiji"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 637
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 638
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 642
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
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                        <label class=\"form-check-label notificationMail\">
                                            ";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div>
                                        <div class=\"d-inline-block\" data-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span class=\"font-weight-bold\">";
        // line 663
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
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 676
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
        // line 687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_title"), "html", null, true);
        echo "</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body text-left\">
                                <p class=\"text-left\">";
        // line 691
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_message"), "html", null, true);
        echo "</p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 698
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-ec-delete\" type=\"button\" id=\"btn_bulk_delete\">";
        // line 699
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
        return "@admin/Order/sum_tenpo_bumon_02.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1348 => 699,  1344 => 698,  1334 => 691,  1327 => 687,  1313 => 676,  1308 => 674,  1294 => 663,  1287 => 659,  1280 => 655,  1265 => 642,  1258 => 638,  1254 => 637,  1250 => 636,  1246 => 634,  1243 => 633,  1237 => 629,  1233 => 628,  1229 => 626,  1226 => 625,  1216 => 616,  1210 => 615,  1206 => 613,  1197 => 610,  1194 => 609,  1190 => 608,  1185 => 606,  1179 => 603,  1173 => 600,  1167 => 597,  1161 => 594,  1155 => 591,  1149 => 588,  1143 => 585,  1137 => 582,  1133 => 580,  1129 => 578,  1125 => 576,  1123 => 575,  1117 => 572,  1111 => 570,  1108 => 569,  1104 => 567,  1095 => 564,  1092 => 563,  1088 => 562,  1083 => 560,  1077 => 557,  1071 => 554,  1065 => 551,  1059 => 548,  1053 => 545,  1047 => 542,  1041 => 539,  1035 => 536,  1029 => 533,  1023 => 530,  1017 => 528,  1014 => 527,  1010 => 525,  1001 => 523,  997 => 522,  984 => 512,  980 => 511,  977 => 510,  974 => 509,  968 => 506,  964 => 505,  960 => 504,  957 => 503,  954 => 502,  950 => 501,  940 => 496,  936 => 494,  934 => 493,  922 => 484,  911 => 476,  904 => 472,  897 => 468,  881 => 455,  877 => 454,  873 => 453,  862 => 445,  858 => 444,  854 => 443,  846 => 438,  842 => 437,  838 => 436,  825 => 426,  821 => 425,  815 => 422,  809 => 419,  805 => 418,  798 => 414,  792 => 411,  788 => 410,  784 => 409,  774 => 402,  770 => 401,  766 => 400,  756 => 393,  752 => 392,  747 => 390,  742 => 388,  738 => 387,  732 => 384,  726 => 381,  722 => 380,  718 => 379,  708 => 372,  704 => 371,  699 => 369,  694 => 367,  690 => 366,  684 => 363,  678 => 360,  674 => 359,  670 => 358,  660 => 351,  656 => 350,  652 => 349,  642 => 342,  638 => 341,  634 => 340,  626 => 335,  622 => 334,  618 => 333,  612 => 330,  601 => 322,  591 => 315,  588 => 314,  581 => 312,  574 => 310,  572 => 309,  567 => 308,  561 => 307,  556 => 305,  552 => 304,  548 => 302,  544 => 301,  541 => 300,  539 => 299,  532 => 297,  522 => 290,  518 => 289,  512 => 286,  506 => 283,  502 => 282,  495 => 278,  487 => 273,  483 => 272,  478 => 270,  473 => 268,  469 => 267,  463 => 264,  456 => 260,  452 => 259,  448 => 258,  442 => 255,  439 => 254,  432 => 252,  425 => 250,  423 => 249,  418 => 248,  412 => 247,  407 => 245,  403 => 244,  399 => 242,  395 => 241,  392 => 240,  390 => 239,  383 => 237,  377 => 234,  373 => 233,  367 => 232,  360 => 228,  356 => 227,  350 => 226,  344 => 223,  340 => 222,  334 => 221,  328 => 218,  324 => 217,  318 => 216,  313 => 214,  306 => 210,  302 => 208,  298 => 207,  292 => 204,  283 => 198,  200 => 118,  196 => 117,  180 => 104,  176 => 103,  134 => 64,  121 => 54,  117 => 53,  112 => 52,  108 => 51,  73 => 20,  69 => 19,  62 => 15,  55 => 14,  50 => 11,  48 => 17,  46 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/sum_tenpo_bumon_02.twig", "/var/www/htdocs/ec922501/app/template/admin/Order/sum_tenpo_bumon_02.twig");
    }
}
