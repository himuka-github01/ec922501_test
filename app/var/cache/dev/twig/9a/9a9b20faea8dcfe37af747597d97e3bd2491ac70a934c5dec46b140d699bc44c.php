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
class __TwigTemplate_8d3efb6833a9f1d5df111e1a03c52905aa0dcb8d6f66d7321596acf314a3a8af extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/index.twig"));

        // line 12
        $context["menus"] = [0 => "order", 1 => "order_master"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 17, $this->source); })()), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
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

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 59, $this->source); })()), "locale", [], "any", false, false, false, 59), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_juchu");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_shukka");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_uriage");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order");
        echo "\");
                \$('#list_type').val('');
                return false;
            });

            \$('#btn_bulk_delete').on('click', function(event) {
                event.preventDefault();
                \$('#form_bulk').attr('action', \"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_bulk_delete");
        echo "\").submit();
                return false;
            });

            // PDF出力(複数)
            \$('#bulkExportPdf').on('click', function(event) {
                window.open('', 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                \$('#form_bulk').attr('action', \"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_export_pdf");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "';
    });

});
</script>

";
        // line 230
        echo twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 233
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 234
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form =\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 240, $this->source); })()), "_token", [], "any", false, false, false, 240), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 243, $this->source); })()), "saiji_id", [], "any", false, false, false, 243), 'widget');
        echo "
                            ";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 244, $this->source); })()), "saiji_id", [], "any", false, false, false, 244), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 248, $this->source); })()), "tenpo_id", [], "any", false, false, false, 248), 'widget');
        echo "
                            ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 249, $this->source); })()), "tenpo_id", [], "any", false, false, false, 249), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 253, $this->source); })()), "bumon_id", [], "any", false, false, false, 253), 'widget');
        echo "
                            ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 254, $this->source); })()), "bumon_id", [], "any", false, false, false, 254), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 263, $this->source); })()), "multi", [], "any", false, false, false, 263), 'widget');
        echo "
                                ";
        // line 264
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 264, $this->source); })()), "multi", [], "any", false, false, false, 264), 'errors');
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
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 269, $this->source); })()), "status", [], "any", false, false, false, 269);
        // line 270
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 271, $this->source); })()), "children", [], "any", false, false, false, 271));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 282, $this->source); })()), "status", [], "any", false, false, false, 282), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <p class=\"col-form-label\">";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 286, $this->source); })()), "payment", [], "any", false, false, false, 286), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 287, $this->source); })()), "payment", [], "any", false, false, false, 287), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 298, $this->source); })()), "order_date_start", [], "any", false, false, false, 298), 'widget');
        echo "
                                    ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 299, $this->source); })()), "order_date_start", [], "any", false, false, false, 299), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 303, $this->source); })()), "order_date_end", [], "any", false, false, false, 303), 'widget');
        echo "
                                    ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 304, $this->source); })()), "order_date_end", [], "any", false, false, false, 304), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 order-search\">
                            <label class=\"col-form-label\">";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date_label"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 313, $this->source); })()), "shipping_delivery_date_start", [], "any", false, false, false, 313), 'widget');
        echo "

                                        ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 315, $this->source); })()), "shipping_delivery_date_start", [], "any", false, false, false, 315), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 321, $this->source); })()), "shipping_delivery_date_end", [], "any", false, false, false, 321), 'widget');
        echo "
                                        ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 322, $this->source); })()), "shipping_delivery_date_end", [], "any", false, false, false, 322), 'errors');
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
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 341, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_name"), "html", null, true);
        echo "</label>
                        ";
        // line 345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 345, $this->source); })()), "name", [], "any", false, false, false, 345), 'widget');
        echo "
                        ";
        // line 346
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 346, $this->source); })()), "name", [], "any", false, false, false, 346), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 352, $this->source); })()), "payment", [], "any", false, false, false, 352), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 353, $this->source); })()), "payment", [], "any", false, false, false, 353), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 361, $this->source); })()), "kana", [], "any", false, false, false, 361), 'widget');
        echo "
                        ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 362, $this->source); })()), "kana", [], "any", false, false, false, 362), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 370, $this->source); })()), "company_name", [], "any", false, false, false, 370), 'widget');
        echo "
                        ";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 371, $this->source); })()), "company_name", [], "any", false, false, false, 371), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 377, $this->source); })()), "payment_datetime_start", [], "any", false, false, false, 377), 'widget');
        echo "
                                ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 378, $this->source); })()), "payment_datetime_start", [], "any", false, false, false, 378), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 382, $this->source); })()), "payment_datetime_end", [], "any", false, false, false, 382), 'widget');
        echo "
                                ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 383, $this->source); })()), "payment_datetime_end", [], "any", false, false, false, 383), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 391, $this->source); })()), "email", [], "any", false, false, false, 391), 'widget');
        echo "
                        ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 392, $this->source); })()), "email", [], "any", false, false, false, 392), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 398, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 398), 'widget');
        echo "
                                ";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 399, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 399), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 403
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 403, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 403), 'widget');
        echo "
                                ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 404, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 404), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 412, $this->source); })()), "phone_number", [], "any", false, false, false, 412), 'widget');
        echo "
                        ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 413, $this->source); })()), "phone_number", [], "any", false, false, false, 413), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 421, $this->source); })()), "order_no", [], "any", false, false, false, 421), 'widget');
        echo "
                        ";
        // line 422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 422, $this->source); })()), "order_no", [], "any", false, false, false, 422), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 429, $this->source); })()), "payment_total_start", [], "any", false, false, false, 429), 'widget');
        echo "
                                    ";
        // line 430
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 430, $this->source); })()), "payment_total_start", [], "any", false, false, false, 430), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 436, $this->source); })()), "payment_total_end", [], "any", false, false, false, 436), 'widget');
        echo "
                                    ";
        // line 437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 437, $this->source); })()), "payment_total_end", [], "any", false, false, false, 437), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 448, $this->source); })()), "tracking_number", [], "any", false, false, false, 448), 'widget');
        echo "
                                ";
        // line 449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 449, $this->source); })()), "tracking_number", [], "any", false, false, false, 449), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 455, $this->source); })()), "buy_product_name", [], "any", false, false, false, 455), 'widget');
        echo "
                        ";
        // line 456
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 456, $this->source); })()), "buy_product_name", [], "any", false, false, false, 456), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 464, $this->source); })()), "shipping_mail", [], "any", false, false, false, 464), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 465, $this->source); })()), "shipping_mail", [], "any", false, false, false, 465), 'errors');
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
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 473, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 473), "eccube_form_options", [], "any", false, false, false, 473), "auto_render", [], "any", false, false, false, 473); }));
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
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 496, $this->source); })())) {
            // line 497
            echo "                                <span class=\"font-weight-bold ml-2\" id=\"search_total_count\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 497, $this->source); })()), "totalItemCount", [], "any", false, false, false, 497)]);
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
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 513, $this->source); })())], true, true);
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
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 522, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 522, $this->source); })()), "totalItemCount", [], "any", false, false, false, 522))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["OrderStatuses"]) || array_key_exists("OrderStatuses", $context) ? $context["OrderStatuses"] : (function () { throw new RuntimeError('Variable "OrderStatuses" does not exist.', 545, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 559, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 560
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 560) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 560, $this->source); })()))) {
                    echo " selected ";
                }
                // line 561
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 561)]), "html", null, true);
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_export_order");
            echo "\" id=\"orderCsvDownload\">
                                                    ";
            // line 575
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_csv"), "html", null, true);
            echo "
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 577
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_export_shipping");
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_ORDER")]), "html", null, true);
            echo "\" id=\"orderCsvSetting\">
                                                    ";
            // line 590
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_csv"), "html", null, true);
            echo "
                                                </a>
                                                <a class=\"dropdown-item\" href=\"";
            // line 592
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_SHIPPING")]), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 624, $this->source); })()));
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 629)]), "html", null, true);
                    echo "\"
                                                           data-notify-mail-url=\"";
                    // line 630
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 630)]), "html", null, true);
                    echo "\"
                                                           data-update-status-url=\"";
                    // line 631
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_update_order_status", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 631)]), "html", null, true);
                    echo "\"
                                                    />
                                                </td>
                                                <td class=\"align-middle text-left\">
                                                    <a class=\"action-edit\" href=\"";
                    // line 635
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 635)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 651), "y/m/d"), "html", null, true);
                    echo "<br>
                                                    ";
                    // line 652
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, false, 652), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 655
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "Tenpo", [], "any", false, false, false, 655) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "Tenpo", [], "any", false, false, false, 655), "tenpoName", [], "any", false, false, false, 655), "html", null, true))));
                    echo "
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    ";
                    // line 658
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, false, 658), "id", [], "any", false, false, false, 658) == 3)) {
                        // line 659
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "OrderStatus", [], "any", false, false, false, 659), "name", [], "any", false, false, false, 659)), "html", null, true);
                        echo "
                                                    ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 660
$context["Order"], "is_multiple", [], "any", false, false, false, 660)) {
                        // line 661
                        echo "                                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Order"], "id", [], "any", false, false, false, 661)]), "html", null, true);
                        echo "\">
                                                            ";
                        // line 662
                        if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, false, 662)) {
                            // line 663
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, false, 663), "y/m/d"), "html", null, true);
                            echo "
                                                            ";
                        } else {
                            // line 665
                            echo "                                                                ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.unshipped"), "html", null, true);
                            echo "
                                                            ";
                        }
                        // line 667
                        echo "                                                    ";
                    } else {
                        // line 668
                        echo "                                                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, false, 668)) {
                            // line 669
                            echo "                                                            完了<br> ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_date", [], "any", false, false, false, 669), "y/m/d"), "html", null, true);
                            echo " 
                                                        ";
                        } else {
                            // line 671
                            echo "                                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.unshipped"), "html", null, true);
                            echo "
                                                        ";
                        }
                        // line 673
                        echo "                                                    ";
                    }
                    // line 674
                    echo "                                                 
                                                    ";
                    // line 675
                    if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "mail_send_date", [], "any", false, false, false, 675)) {
                        // line 676
                        echo "                                                        ";
                        $context["send_mail_date"] = $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "mail_send_date", [], "any", false, false, false, 676));
                        // line 677
                        echo "                                                         <i class=\"fa fa-envelope fa-lg text-secondary\" aria-hidden=\"true\" data-tooltip=\"true\" data-placement=\"top\" data-original-title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail__completed", ["%date%" => (isset($context["send_mail_date"]) || array_key_exists("send_mail_date", $context) ? $context["send_mail_date"] : (function () { throw new RuntimeError('Variable "send_mail_date" does not exist.', 677, $this->source); })())]), "html", null, true);
                        echo "\"></i>
                                                    ";
                    }
                    // line 679
                    echo "                                                    <!-- 管理画面に受取方法追加　2024/09/04 田中 -->
                                                    <td class=\"align-middle text-center\">
                                                        ";
                    // line 681
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "uketori", [], "any", false, false, false, 681), "html", null, true);
                    echo "
                                                    </td>
                                                    <!--管理画面に受付店舗追加　2024/10/10 田中 -->
                                                    <td class=\"align-middle text-center\">
                                                        ";
                    // line 685
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "Tenpos", [], "any", false, false, false, 685), "html", null, true);
                    echo "
                                                    </td>
                                                </td>
                                                <td class=\"align-middle text-center\" style=\"word-break: break-all; width: 30ch;\">
                                                    ";
                    // line 689
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "message", [], "any", false, false, false, 689), "html", null, true);
                    echo "<!--メモ保留--><br>
                                                    受付：";
                    // line 690
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "uketsuke_name", [], "any", false, false, false, 690), "html", null, true);
                    echo "　/　紹介：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shoukai_name", [], "any", false, false, false, 690), "html", null, true);
                    echo "
                                                </td>
                                                <td class=\"align-middle pr-3\">
                                                    <div class=\"text-right\">
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon confirmationModal\"
                                                               data-type=\"mail\" data-bulk-update=\"false\"
                                                               data-preview-notify-mail-url=\"";
                    // line 697
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 697)]), "html", null, true);
                    echo "\"
                                                               data-notify-mail-url=\"";
                    // line 698
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 698)]), "html", null, true);
                    echo "\"
                                                               data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    // line 699
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail_send"), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon pdf-print\" href=\"";
                    // line 704
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_pdf_y01");
                    echo "?ids[]=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 704), "html", null, true);
                    echo "\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note_short"), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-table fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon confirmationModal\" href=\"javascript:;\"
                                                               data-id=\"";
                    // line 710
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 710), "html", null, true);
                    echo "\" data-type=\"status\" data-bulk-update=\"false\"
                                                               data-update-status-id=\"";
                    // line 711
                    echo twig_escape_filter($this->env, twig_constant("Eccube\\Entity\\Master\\OrderStatus::DELIVERED"), "html", null, true);
                    echo "\"
                                                               data-update-status-url=\"";
                    // line 712
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_update_order_status", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 712)]), "html", null, true);
                    echo "\"
                                                               data-preview-notify-mail-url=\"";
                    // line 713
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_shipping_preview_notify_mail", ["id" => twig_get_attribute($this->env, $this->source, $context["Shipping"], "id", [], "any", false, false, false, 713)]), "html", null, true);
                    echo "\"
                                                               data-tooltip=\"true\" data-placement=\"top\" title data-original-title=\"";
                    // line 714
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
                // line 722
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 723
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 728
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 728, $this->source); })()), "totalItemCount", [], "any", false, false, false, 728) > 0)) {
                // line 729
                echo "                                    ";
                $this->loadTemplate("@admin/pager.twig", "@admin/Order/index.twig", 729)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 729, $this->source); })()), "paginationData", [], "any", false, false, false, 729), "routes" => "admin_order_page"]));
                // line 730
                echo "                                ";
            }
            // line 731
            echo "                            </div>
                        </div>
                    </form>
                    ";
            // line 735
            echo "                ";
        } elseif ((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 735, $this->source); })())) {
            // line 736
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 738
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 739
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
            // line 743
            echo "                ";
        } else {
            // line 744
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 746
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 747
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 748
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 752
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
        // line 765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                        <label class=\"form-check-label notificationMail\">
                                            ";
        // line 769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div>
                                        <div class=\"d-inline-block\" data-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span class=\"font-weight-bold\">";
        // line 773
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
        // line 784
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 786
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
        // line 797
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_title"), "html", null, true);
        echo "</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body text-left\">
                                <p class=\"text-left\">";
        // line 801
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_message"), "html", null, true);
        echo "</p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 808
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-ec-delete\" type=\"button\" id=\"btn_bulk_delete\">";
        // line 809
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1650 => 809,  1646 => 808,  1636 => 801,  1629 => 797,  1615 => 786,  1610 => 784,  1596 => 773,  1589 => 769,  1582 => 765,  1567 => 752,  1560 => 748,  1556 => 747,  1552 => 746,  1548 => 744,  1545 => 743,  1539 => 739,  1535 => 738,  1531 => 736,  1528 => 735,  1523 => 731,  1520 => 730,  1517 => 729,  1515 => 728,  1508 => 723,  1502 => 722,  1488 => 714,  1484 => 713,  1480 => 712,  1476 => 711,  1472 => 710,  1459 => 704,  1451 => 699,  1447 => 698,  1443 => 697,  1431 => 690,  1427 => 689,  1420 => 685,  1413 => 681,  1409 => 679,  1403 => 677,  1400 => 676,  1398 => 675,  1395 => 674,  1392 => 673,  1386 => 671,  1380 => 669,  1377 => 668,  1374 => 667,  1368 => 665,  1362 => 663,  1360 => 662,  1355 => 661,  1353 => 660,  1348 => 659,  1346 => 658,  1340 => 655,  1334 => 652,  1330 => 651,  1324 => 648,  1318 => 645,  1312 => 642,  1308 => 641,  1302 => 638,  1288 => 635,  1281 => 631,  1277 => 630,  1273 => 629,  1265 => 628,  1261 => 626,  1256 => 625,  1252 => 624,  1245 => 620,  1241 => 619,  1237 => 618,  1232 => 616,  1228 => 615,  1224 => 614,  1220 => 613,  1216 => 612,  1212 => 611,  1208 => 610,  1204 => 609,  1185 => 593,  1181 => 592,  1176 => 590,  1172 => 589,  1166 => 586,  1155 => 578,  1151 => 577,  1146 => 575,  1142 => 574,  1136 => 571,  1127 => 564,  1119 => 562,  1114 => 561,  1109 => 560,  1105 => 559,  1094 => 551,  1089 => 548,  1078 => 546,  1074 => 545,  1070 => 544,  1064 => 540,  1059 => 537,  1052 => 533,  1044 => 530,  1034 => 525,  1030 => 523,  1028 => 522,  1016 => 513,  1006 => 506,  999 => 502,  994 => 499,  988 => 497,  986 => 496,  982 => 495,  975 => 490,  968 => 488,  961 => 484,  957 => 483,  953 => 482,  949 => 480,  943 => 478,  940 => 477,  938 => 476,  935 => 475,  933 => 474,  928 => 473,  918 => 465,  914 => 464,  910 => 463,  900 => 456,  896 => 455,  892 => 454,  884 => 449,  880 => 448,  876 => 447,  863 => 437,  859 => 436,  853 => 433,  847 => 430,  843 => 429,  836 => 425,  830 => 422,  826 => 421,  822 => 420,  812 => 413,  808 => 412,  804 => 411,  794 => 404,  790 => 403,  785 => 401,  780 => 399,  776 => 398,  770 => 395,  764 => 392,  760 => 391,  756 => 390,  746 => 383,  742 => 382,  737 => 380,  732 => 378,  728 => 377,  722 => 374,  716 => 371,  712 => 370,  708 => 369,  698 => 362,  694 => 361,  690 => 360,  680 => 353,  676 => 352,  672 => 351,  664 => 346,  660 => 345,  656 => 344,  650 => 341,  640 => 334,  625 => 322,  621 => 321,  615 => 318,  609 => 315,  604 => 313,  597 => 309,  589 => 304,  585 => 303,  580 => 301,  575 => 299,  571 => 298,  565 => 295,  554 => 287,  550 => 286,  546 => 285,  540 => 282,  537 => 281,  526 => 278,  520 => 277,  515 => 275,  511 => 274,  507 => 272,  503 => 271,  500 => 270,  498 => 269,  491 => 267,  485 => 264,  481 => 263,  475 => 262,  464 => 254,  460 => 253,  454 => 252,  448 => 249,  444 => 248,  438 => 247,  432 => 244,  428 => 243,  422 => 242,  417 => 240,  410 => 236,  406 => 234,  396 => 233,  384 => 230,  375 => 224,  285 => 137,  275 => 130,  265 => 123,  261 => 122,  249 => 113,  245 => 112,  229 => 99,  225 => 98,  183 => 59,  170 => 49,  166 => 48,  161 => 47,  151 => 46,  115 => 20,  105 => 19,  86 => 15,  67 => 14,  56 => 11,  54 => 17,  52 => 12,  39 => 11,);
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
{% set menus = ['order', 'order_master'] %}

{% block title %}{{ 'admin.order.order_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.order.order_management'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_layout.html.twig' %}

{% block stylesheet %}
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
{% endblock stylesheet %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\"></script>

    <script>
        \$(function() {
            // datetimepicker で value が消えてしまうので data-value に保持しておく
            \$('input.datetimepicker-input').each(function() {
                \$(this).data('value', \$(this).val());
            });

            \$('input.datetimepicker-input').datetimepicker({
                locale: '{{ eccube_config.locale }}',
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
                \$('#search_form').attr('action', \"{{ url('admin_order_list_juchu') }}\").submit();
                \$('#search_form').attr('action', \"{{ url('admin_order') }}\");
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
                \$('#search_form').attr('action', \"{{ url('admin_order_list_shukka') }}\").submit();
                \$('#search_form').attr('action', \"{{ url('admin_order') }}\");
                \$('#list_type').val('');
                return false;
            });

            // (HDN) 売上集計リスト
            \$('#btn_list_uriage').on('click', function(event) {
                event.preventDefault();
                \$('#list_type').val('uriage');
                \$('#search_form').attr('action', \"{{ url('admin_order_list_uriage') }}\").submit();
                \$('#search_form').attr('action', \"{{ url('admin_order') }}\");
                \$('#list_type').val('');
                return false;
            });

            \$('#btn_bulk_delete').on('click', function(event) {
                event.preventDefault();
                \$('#form_bulk').attr('action', \"{{ url('admin_order_bulk_delete') }}\").submit();
                return false;
            });

            // PDF出力(複数)
            \$('#bulkExportPdf').on('click', function(event) {
                window.open('', 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                \$('#form_bulk').attr('action', \"{{ url('admin_order_export_pdf') }}\");
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
        location.href = '{{ url('admin_order', { 'resume': 1 }) }}';
    });

});
</script>

{{ include('@admin/Order/confirmationModal_js.twig') }}
{% endblock javascript %}

{% block main %}
    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form =\"search_form\" id=\"search_form\" method=\"POST\" action=\"{{ url('admin_order') }}\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        {{ form_widget(searchForm._token) }}
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.saiji_id_label'|trans }}\">{{ 'admin.order.saiji_id_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            {{ form_widget(searchForm.saiji_id) }}
                            {{ form_errors(searchForm.saiji_id) }}
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.tenpo_id_label'|trans }}\">{{ 'admin.order.tenpo_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            {{ form_widget(searchForm.tenpo_id) }}
                            {{ form_errors(searchForm.tenpo_id) }}
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.bumon_id_label'|trans }}\">{{ 'admin.order.bumon_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            {{ form_widget(searchForm.bumon_id) }}
                            {{ form_errors(searchForm.bumon_id) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"order-search-clear\">
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.multi_search_label'|trans }}\">{{ 'admin.order.multi_search_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                {{ form_widget(searchForm.multi) }}
                                {{ form_errors(searchForm.multi) }}
                            </div>
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\"  data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.order_search_status'|trans }}\">{{ 'admin.order.order_status'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    {% set statusForm = searchForm.status %}
                                    <!-- 各対応状況の件数を表示する -->
                                    {% for status_id, child in statusForm.children %}
                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                id=\"{{ child.vars.id }}\"
                                                name=\"{{ child.vars.full_name }}\"
                                                class=\"form-check-input\"
                                                value=\"{{ child.vars.value }}\"{{ child.vars.checked ? ' checked=\"checked\"' }}>
                                            <label class=\"form-check-label\" for=\"{{ child.vars.id }}\">{{ child.vars.label }}</label>
                                        </div>
                                    {% endfor %}
                                </div>
                                {{ form_errors(searchForm.status) }}
                            </div>
                            <div class=\"order-search col-4\">
                                <p class=\"col-form-label\">{{ 'admin.common.payment_method'|trans }}</p>
                                {{ form_widget(searchForm.payment, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.payment) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"col-6 order-search\">
                            <label class=\"col-form-label\">{{ 'admin.order.reception_date_label'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.order_date_start) }}
                                    {{ form_errors(searchForm.order_date_start) }}
                                </div>
                                <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.order_date_end) }}
                                    {{ form_errors(searchForm.order_date_end) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 order-search\">
                            <label class=\"col-form-label\">{{ 'admin.order.delivery_date_label'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        {{ form_widget(searchForm.shipping_delivery_date_start) }}

                                        {{ form_errors(searchForm.shipping_delivery_date_start) }}
                                    </div>
                                </div>
                                <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        {{ form_widget(searchForm.shipping_delivery_date_end) }}
                                        {{ form_errors(searchForm.shipping_delivery_date_end) }}
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
                                    <span class=\"font-weight-bold\">{{ 'admin.common.search_detail'|trans }}</span>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse{{ has_errors ? ' show' }}\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.orderer_name'|trans }}</label>
                        {{ form_widget(searchForm.name) }}
                        {{ form_errors(searchForm.name) }}
                    </div>
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <!-- <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.common.payment_method'|trans }}</p>
                                {{ form_widget(searchForm.payment, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.payment) }}
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.orderer_kana'|trans }}</label>
                        {{ form_widget(searchForm.kana) }}
                        {{ form_errors(searchForm.kana) }}
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <!-- <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.orderer_company_name'|trans }}</label>
                        {{ form_widget(searchForm.company_name) }}
                        {{ form_errors(searchForm.company_name) }}
                    </div> -->
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.payment_date'|trans }}</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.payment_datetime_start) }}
                                {{ form_errors(searchForm.payment_datetime_start) }}
                            </div>
                            <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.payment_datetime_end) }}
                                {{ form_errors(searchForm.payment_datetime_end) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <!-- <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.common.mail_address'|trans }}</label>
                        {{ form_widget(searchForm.email) }}
                        {{ form_errors(searchForm.email) }}
                    </div> -->
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.common.update_date'|trans }}</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                {{ form_widget(searchForm.update_datetime_start) }}
                                {{ form_errors(searchForm.update_datetime_start) }}
                            </div>
                            <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                            <div class=\"col\">
                                {{ form_widget(searchForm.update_datetime_end) }}
                                {{ form_errors(searchForm.update_datetime_end) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.common.phone_number'|trans }}</label>
                        {{ form_widget(searchForm.phone_number) }}
                        {{ form_errors(searchForm.phone_number) }}
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.order_no'|trans }}</label>
                        {{ form_widget(searchForm.order_no) }}
                        {{ form_errors(searchForm.order_no) }}
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.purchase_price'|trans }}</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    {{ form_widget(searchForm.payment_total_start) }}
                                    {{ form_errors(searchForm.payment_total_start) }}
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    {{ form_widget(searchForm.payment_total_end) }}
                                    {{ form_errors(searchForm.payment_total_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.order.tracking_number'|trans }}</p>
                                {{ form_widget(searchForm.tracking_number) }}
                                {{ form_errors(searchForm.tracking_number) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.purchase_product'|trans }}</label>
                        {{ form_widget(searchForm.buy_product_name) }}
                        {{ form_errors(searchForm.buy_product_name) }}
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.order.shipping_mail'|trans }}</p>
                                {{ form_widget(searchForm.shipping_mail,  { 'label_attr': { 'class': 'checkbox-inline' }}) }}
                                {{ form_errors(searchForm.shipping_mail) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col\"></div>
                </div>

                {# エンティティ拡張の自動出力 #}
                {% for f in searchForm|filter(f => f.vars.eccube_form_options.auto_render) %}
                    {# TODO 1項目1行になるのを改善 #}
                    <div class=\"row mb-2\">
                        {% if f.vars.eccube_form_options.form_theme %}
                            {% form_theme f f.vars.eccube_form_options.form_theme %}
                            {{ form_row(f) }}
                        {% else %}
                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>{{ f.vars.label|trans }}</label>
                                    {{ form_widget(f) }}
                                    {{ form_errors(f) }}
                                </div>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"mb-4\">
                        <div class=\"col-12\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\" id=\"search_submit\">{{ 'admin.common.search'|trans }}</button>
                            {% if pagination %}
                                <span class=\"font-weight-bold ml-2\" id=\"search_total_count\">{{ 'admin.common.search_result'|trans({\"%count%\":pagination.totalItemCount})|raw }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"list_type\" id=\"list_type\">
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_juchu\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>{{ 'admin.order.list_juchu'|trans }}</span>
                            </button>
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_shukka\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>{{ 'admin.order.list_shukka'|trans }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                {{ include('@admin/search_items.twig', { 'form': searchForm }, ignore_missing = true) }}
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if pagination and pagination.totalItemCount %}

                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"{{ constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME') }}\" value=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-7\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-auto d-none btn-bulk-wrapper\">
                                        <label class=\"mr-2\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.bulk_actions'|trans }}\">{{ 'admin.common.bulk_actions'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                        <!--
                                        <button id=\"bulkSendMail\" type=\"button\" class=\"btn btn-ec-regular mr-2\" data-type=\"mail\" data-bulk-update=\"true\">
                                            {{ 'admin.order.send_mail'|trans }}
                                        </button>
                                        -->
                                        <!--
                                        <button type=\"button\" id=\"bulkExportPdf\" class=\"btn btn-ec-regular mr-2\">{{ 'admin.order.output_delivery_note_short'|trans }}</button>
                                        -->
                                        {# TODO 削除処理は将来バージョンで対応 <button type=\"button\" class=\"btn btn-ec-delete\" data-toggle=\"modal\" data-target=\"#bulkDeleteModal\">{{ 'admin.common.delete'|trans }}</button> #}
                                    </div>
                                    <div class=\"col d-none btn-bulk-wrapper\">
                                        <div class=\"d-inline-block mr-2\">
                                            <select class=\"custom-select\" id=\"option_bulk_status\">
                                                <option value=\"\" selected>{{ 'admin.order.change_status'|trans }}</option>
                                                {% for status in OrderStatuses %}
                                                    <option value=\"{{ status.id }}\">{{ status.name }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                        <button type=\"button\" id=\"btn_bulk_status\" class=\"btn btn-ec-regular mr-2 progressModal\" data-type=\"status\" data-bulk-update=\"true\" data-submit=\"bulk\">
                                            {{ 'admin.common.decision'|trans }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-5 text-right\">
                                <div class=\"d-inline-block\">
                                    <select class=\"custom-select\" onchange=\"location = this.value;\">
                                        {% for pageMax in pageMaxis %}
                                            <option {% if pageMax.name == page_count %} selected {% endif %}
                                                    value=\"{{ path('admin_order_page', {'page_no': 1, 'page_count': pageMax.name}) }}\">
                                                {{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-ec-regular\" data-toggle=\"dropdown\" id=\"csvDownloadDropDown\">
                                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                                <span>{{ 'admin.common.csv_download'|trans }}</span>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ url('admin_order_export_order') }}\" id=\"orderCsvDownload\">
                                                    {{ 'admin.order.order_csv'|trans }}
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ url('admin_order_export_shipping') }}\" id=\"shippingCsvDownload\">
                                                    {{ 'admin.order.shipping_csv'|trans }}
                                                </a>
                                            </div>
                                        </div>

                                        <div class=\"btn-group\" role=\"group\">
                                            <button type=\"button\" class=\"btn btn-ec-regular\" data-toggle=\"dropdown\" id=\"csvSettingDropDown\">
                                                <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                                                <span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_ORDER') }) }}\" id=\"orderCsvSetting\">
                                                    {{ 'admin.order.order_csv'|trans }}
                                                </a>
                                                <a class=\"dropdown-item\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_SHIPPING') }) }}\" id=\"shippingCsvSetting\">
                                                    {{ 'admin.order.shipping_csv'|trans }}
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
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.orderer'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.saiji_id_label'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.purchase_price'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center text-nowrap\">{{ 'admin.common.payment_method'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.reception_date_label'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.delivery_date_label'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.tenpo_label'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.delivery_status_label'|trans }}</th>
                                        <!-- 管理画面へ受取方法追加 2024/09/04 田中 -->
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.uketoi_label'| trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ '受付店鋪'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.note_label'|trans }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for Order in pagination %}
                                        {% for Shipping in Order.Shippings %}
                                            <tr>
                                                <td class=\"align-middle text-center pl-3\">
                                                    <input type=\"checkbox\" id=\"check_{{ Shipping.id }}\" data-id=\"{{ Shipping.id }}\" name=\"ids[]\" value=\"{{ Shipping.id }}\"
                                                           data-preview-notify-mail-url=\"{{ url('admin_shipping_preview_notify_mail', { id: Shipping.id}) }}\"
                                                           data-notify-mail-url=\"{{ url('admin_shipping_notify_mail', { id: Shipping.id}) }}\"
                                                           data-update-status-url=\"{{ url('admin_shipping_update_order_status', { id: Shipping.id}) }}\"
                                                    />
                                                </td>
                                                <td class=\"align-middle text-left\">
                                                    <a class=\"action-edit\" href=\"{{ url('admin_order_edit', { id : Order.id }) }}\">{{ Order.order_no }}<br>{{ Order.name01}} {{Order.name02 }}<br>{{ Order.order_date|date_min }}</a>
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ Order.Saiji == null ? '' : Order.Saiji.name }}
                                                </td>
                                                <td class=\"align-middle text-right\">
                                                    {{ Order.payment_total|price }}<br>
                                                    {{ Order.payment_date ? Order.payment_date|date(\"y/m/d\") : 'admin.order.not_payment'|trans }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ Order.payment_method }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ Order.order_date|date(\"y/m/d\") }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ Shipping.shipping_delivery_date|date(\"y/m/d\") }}<br>
                                                    {{ Shipping.shipping_delivery_time }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {{ Order.Tenpo == null ? '' : Order.Tenpo.tenpoName }}
                                                </td>
                                                <td class=\"align-middle text-center\">
                                                    {% if Order.OrderStatus.id == 3 %}
                                                        {{ Order.OrderStatus.name|trans }}
                                                    {% elseif Order.is_multiple %}
                                                        <a href=\"{{ url('admin_shipping_edit', { id: Order.id }) }}\">
                                                            {% if Shipping.shipping_date %}
                                                                {{ Shipping.shipping_date|date(\"y/m/d\") }}
                                                            {% else %}
                                                                {{ 'admin.order.unshipped'|trans }}
                                                            {% endif %}
                                                    {% else %}
                                                        {% if Shipping.shipping_date %}
                                                            完了<br> {{ Shipping.shipping_date|date(\"y/m/d\") }} 
                                                        {% else %}
                                                            {{ 'admin.order.unshipped'|trans }}
                                                        {% endif %}
                                                    {% endif %}
                                                 
                                                    {% if Shipping.mail_send_date %}
                                                        {% set send_mail_date = Shipping.mail_send_date|date_min %}
                                                         <i class=\"fa fa-envelope fa-lg text-secondary\" aria-hidden=\"true\" data-tooltip=\"true\" data-placement=\"top\" data-original-title=\"{{ 'admin.order.shipping_mail__completed'|trans({'%date%': send_mail_date}) }}\"></i>
                                                    {% endif %}
                                                    <!-- 管理画面に受取方法追加　2024/09/04 田中 -->
                                                    <td class=\"align-middle text-center\">
                                                        {{ Order.uketori }}
                                                    </td>
                                                    <!--管理画面に受付店舗追加　2024/10/10 田中 -->
                                                    <td class=\"align-middle text-center\">
                                                        {{ Order.Tenpos }}
                                                    </td>
                                                </td>
                                                <td class=\"align-middle text-center\" style=\"word-break: break-all; width: 30ch;\">
                                                    {{ Order.message }}<!--メモ保留--><br>
                                                    受付：{{ Order.uketsuke_name }}　/　紹介：{{ Order.shoukai_name }}
                                                </td>
                                                <td class=\"align-middle pr-3\">
                                                    <div class=\"text-right\">
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon confirmationModal\"
                                                               data-type=\"mail\" data-bulk-update=\"false\"
                                                               data-preview-notify-mail-url=\"{{ url('admin_shipping_preview_notify_mail', { id: Shipping.id}) }}\"
                                                               data-notify-mail-url=\"{{ url('admin_shipping_notify_mail', { id: Shipping.id}) }}\"
                                                               data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.order.shipping_mail_send'|trans }}\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon pdf-print\" href=\"{{ url('admin_order_pdf_y01') }}?ids[]={{ Shipping.id }}\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.order.output_delivery_note_short'|trans }}\">
                                                                <i class=\"fa fa-table fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"px-1 d-inline-block\">
                                                            <a class=\"btn btn-ec-actionIcon confirmationModal\" href=\"javascript:;\"
                                                               data-id=\"{{ Shipping.id }}\" data-type=\"status\" data-bulk-update=\"false\"
                                                               data-update-status-id=\"{{ constant('Eccube\\\\Entity\\\\Master\\\\OrderStatus::DELIVERED') }}\"
                                                               data-update-status-url=\"{{ url('admin_shipping_update_order_status', { id: Shipping.id}) }}\"
                                                               data-preview-notify-mail-url=\"{{ url('admin_shipping_preview_notify_mail', { id: Shipping.id}) }}\"
                                                               data-tooltip=\"true\" data-placement=\"top\" title data-original-title=\"{{ 'admin.order.to_shipped'|trans }}\">
                                                                <i class=\"fa fa-check fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                                {% if pagination.totalItemCount > 0 %}
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_order_page' } %}
                                {% endif %}
                            </div>
                        </div>
                    </form>
                    {# 検索条件エラー時 #}
                {% elseif has_errors %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_invalid_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                        </div>
                    </div>
                    {# 検索結果なし #}
                {% else %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_no_result'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_advanced_search'|trans }}</div>
                        </div>
                    </div>
                {% endif %}

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
                                    <div class=\"font-weight-bold mb-2 notificationMail\">{{ 'admin.order.to_shipped__confirm_send_mail'|trans }}</div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                        <label class=\"form-check-label notificationMail\">
                                            {{ 'admin.order.to_shipped__confirm_send_mail_in_same_time'|trans }}
                                        </label>
                                    </div>
                                    <div>
                                        <div class=\"d-inline-block\" data-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span class=\"font-weight-bold\">{{ 'admin.order.bulk_action__confirm_view_mail_body'|trans }}</span></a></div>
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
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">{{ 'admin.common.close'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 一括削除の確認モーダル -->
                <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title font-weight-bold\">{{ 'admin.order.delete__confirm_title'|trans }}</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body text-left\">
                                <p class=\"text-left\">{{ 'admin.order.delete__confirm_message'|trans }}</p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                <button class=\"btn btn-ec-delete\" type=\"button\" id=\"btn_bulk_delete\">{{ 'admin.common.delete' | trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Order/index.twig", "/var/www/htdocs/ec922501/app/template/admin/Order/index.twig");
    }
}
