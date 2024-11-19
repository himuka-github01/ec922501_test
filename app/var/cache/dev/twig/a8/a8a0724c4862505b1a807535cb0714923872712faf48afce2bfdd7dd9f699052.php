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

/* @admin/Order/sum_bumon_item_02.twig */
class __TwigTemplate_2f831526cb9e01c8ca054aa1a437697315adf040f1777c4c1cdd0c41264f5d5a extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/sum_bumon_item_02.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/sum_bumon_item_02.twig"));

        // line 12
        $context["menus"] = [0 => "order", 1 => "order_sum_bumon_item_02"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 17, $this->source); })()), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/sum_bumon_item_02.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_sum_bumon_item_02"), "html", null, true);
        
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
            display: none;
        }

        .itemLine {}
        .sumLine { background-color: #e2e4eb; }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 50
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
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
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 62, $this->source); })()), "locale", [], "any", false, false, false, 62), "html", null, true);
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
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_juchu");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 102
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
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_shukka");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order");
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
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "';
    });

});
</script>

";
        // line 202
        echo twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 205
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 206
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_sum_bumon_item_02");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 212, $this->source); })()), "_token", [], "any", false, false, false, 212), 'widget');
        echo "
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.saiji_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_id_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 215, $this->source); })()), "saiji_id", [], "any", false, false, false, 215), 'widget');
        echo "
                            ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 216, $this->source); })()), "saiji_id", [], "any", false, false, false, 216), 'errors');
        echo "
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.tenpo_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 220, $this->source); })()), "tenpo_id", [], "any", false, false, false, 220), 'widget');
        echo "
                            ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 221, $this->source); })()), "tenpo_id", [], "any", false, false, false, 221), 'errors');
        echo "
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.bumon_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 225, $this->source); })()), "bumon_id", [], "any", false, false, false, 225), 'widget');
        echo "
                            ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 226, $this->source); })()), "bumon_id", [], "any", false, false, false, 226), 'errors');
        echo "
                        </div>
                        <div class=\"order-search-clear hiddenItem\">
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 231, $this->source); })()), "multi", [], "any", false, false, false, 231), 'widget');
        echo "
                                ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 232, $this->source); })()), "multi", [], "any", false, false, false, 232), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\"  data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_search_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 237
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 237, $this->source); })()), "status", [], "any", false, false, false, 237);
        // line 238
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 239, $this->source); })()), "children", [], "any", false, false, false, 239));
        foreach ($context['_seq'] as $context["status_id"] => $context["child"]) {
            // line 240
            echo "                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                id=\"";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 242), "id", [], "any", false, false, false, 242), "html", null, true);
            echo "\"
                                                name=\"";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 243), "full_name", [], "any", false, false, false, 243), "html", null, true);
            echo "\"
                                                class=\"form-check-input\"
                                                value=\"";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 245), "value", [], "any", false, false, false, 245), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 245), "checked", [], "any", false, false, false, 245)) ? (" checked=\"checked\"") : (""));
            echo ">
                                            <label class=\"form-check-label\" for=\"";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 246), "id", [], "any", false, false, false, 246), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 246), "label", [], "any", false, false, false, 246), "html", null, true);
            echo "</label>";
            // line 247
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 247, $this->source); })()), "vars", [], "any", false, false, false, 247), "order_count", [], "any", false, false, false, 247), $context["status_id"], [], "array", false, false, false, 247), "display", [], "any", false, false, false, 247)) {
                // line 248
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 248, $this->source); })()), "vars", [], "any", false, false, false, 248), "order_count", [], "any", false, false, false, 248), $context["status_id"], [], "array", false, false, false, 248), "count", [], "any", false, false, false, 248), "html", null, true);
                echo "</a>)";
            }
            // line 250
            echo "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status_id'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "                                </div>
                                ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 253, $this->source); })()), "status", [], "any", false, false, false, 253), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <p class=\"col-form-label\">";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 257, $this->source); })()), "payment", [], "any", false, false, false, 257), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 258, $this->source); })()), "payment", [], "any", false, false, false, 258), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"col-6 order-search hiddenItem\">
                            <label class=\"col-form-label\">";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.reception_date_label"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 265, $this->source); })()), "order_datetime_start", [], "any", false, false, false, 265), 'widget');
        echo "
                                    ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 266, $this->source); })()), "order_datetime_start", [], "any", false, false, false, 266), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 270, $this->source); })()), "order_datetime_end", [], "any", false, false, false, 270), 'widget');
        echo "
                                    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 271, $this->source); })()), "order_datetime_end", [], "any", false, false, false, 271), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 order-search hiddenItem\">
                            <label class=\"col-form-label\">";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date_label"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 280, $this->source); })()), "shipping_delivery_datetime_start", [], "any", false, false, false, 280), 'widget');
        echo "
                                        ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 281, $this->source); })()), "shipping_delivery_datetime_start", [], "any", false, false, false, 281), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 287, $this->source); })()), "shipping_delivery_datetime_end", [], "any", false, false, false, 287), 'widget');
        echo "
                                        ";
        // line 288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 288, $this->source); })()), "shipping_delivery_datetime_end", [], "any", false, false, false, 288), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row hiddenItem\">
                            <div class=\"form-group col-12\">
                                <label class=\"col-form-label\"  data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_search_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 297
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 297, $this->source); })()), "status", [], "any", false, false, false, 297);
        // line 298
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 299, $this->source); })()), "children", [], "any", false, false, false, 299));
        foreach ($context['_seq'] as $context["status_id"] => $context["child"]) {
            // line 300
            echo "                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                   id=\"";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 302), "id", [], "any", false, false, false, 302), "html", null, true);
            echo "\"
                                                   name=\"";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 303), "full_name", [], "any", false, false, false, 303), "html", null, true);
            echo "\"
                                                   class=\"form-check-input\"
                                                   value=\"";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 305), "value", [], "any", false, false, false, 305), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 305), "checked", [], "any", false, false, false, 305)) ? (" checked=\"checked\"") : (""));
            echo ">
                                            <label class=\"form-check-label\" for=\"";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 306), "id", [], "any", false, false, false, 306), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 306), "label", [], "any", false, false, false, 306), "html", null, true);
            echo "</label>";
            // line 307
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 307, $this->source); })()), "vars", [], "any", false, false, false, 307), "order_count", [], "any", false, false, false, 307), $context["status_id"], [], "array", false, false, false, 307), "display", [], "any", false, false, false, 307)) {
                // line 308
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 308, $this->source); })()), "vars", [], "any", false, false, false, 308), "order_count", [], "any", false, false, false, 308), $context["status_id"], [], "array", false, false, false, 308), "count", [], "any", false, false, false, 308), "html", null, true);
                echo "</a>)";
            }
            // line 310
            echo "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status_id'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "                                </div>
                                ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 313, $this->source); })()), "status", [], "any", false, false, false, 313), 'errors');
        echo "
                            </div>
                        </div>
                        <!--
                        <div class=\"d-inline-block mb-3 collapsed order-search-clear\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\">
                            <a>
                                <i class=\"fa font-weight-bold mr-1 fa-plus-square-o\">
                                    <span class=\"font-weight-bold\">";
        // line 320
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
        // line 328
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 328, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_name"), "html", null, true);
        echo "</label>
                        ";
        // line 332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 332, $this->source); })()), "name", [], "any", false, false, false, 332), 'widget');
        echo "
                        ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 333, $this->source); })()), "name", [], "any", false, false, false, 333), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 339
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 339, $this->source); })()), "payment", [], "any", false, false, false, 339), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 340, $this->source); })()), "payment", [], "any", false, false, false, 340), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_kana"), "html", null, true);
        echo "</label>
                        ";
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 348, $this->source); })()), "kana", [], "any", false, false, false, 348), 'widget');
        echo "
                        ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 349, $this->source); })()), "kana", [], "any", false, false, false, 349), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_company_name"), "html", null, true);
        echo "</label>
                        ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 357, $this->source); })()), "company_name", [], "any", false, false, false, 357), 'widget');
        echo "
                        ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 358, $this->source); })()), "company_name", [], "any", false, false, false, 358), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 364, $this->source); })()), "payment_datetime_start", [], "any", false, false, false, 364), 'widget');
        echo "
                                ";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 365, $this->source); })()), "payment_datetime_start", [], "any", false, false, false, 365), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 369, $this->source); })()), "payment_datetime_end", [], "any", false, false, false, 369), 'widget');
        echo "
                                ";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 370, $this->source); })()), "payment_datetime_end", [], "any", false, false, false, 370), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</label>
                        ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 378, $this->source); })()), "email", [], "any", false, false, false, 378), 'widget');
        echo "
                        ";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 379, $this->source); })()), "email", [], "any", false, false, false, 379), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 385
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 385, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 385), 'widget');
        echo "
                                ";
        // line 386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 386, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 386), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 390, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 390), 'widget');
        echo "
                                ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 391, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 391), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                        ";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 399, $this->source); })()), "phone_number", [], "any", false, false, false, 399), 'widget');
        echo "
                        ";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 400, $this->source); })()), "phone_number", [], "any", false, false, false, 400), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</label>
                        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 408, $this->source); })()), "order_no", [], "any", false, false, false, 408), 'widget');
        echo "
                        ";
        // line 409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 409, $this->source); })()), "order_no", [], "any", false, false, false, 409), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 416
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 416, $this->source); })()), "payment_total_start", [], "any", false, false, false, 416), 'widget');
        echo "
                                    ";
        // line 417
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 417, $this->source); })()), "payment_total_start", [], "any", false, false, false, 417), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 423
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 423, $this->source); })()), "payment_total_end", [], "any", false, false, false, 423), 'widget');
        echo "
                                    ";
        // line 424
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 424, $this->source); })()), "payment_total_end", [], "any", false, false, false, 424), 'errors');
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
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
        echo "</p>
                                ";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 435, $this->source); })()), "tracking_number", [], "any", false, false, false, 435), 'widget');
        echo "
                                ";
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 436, $this->source); })()), "tracking_number", [], "any", false, false, false, 436), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                        ";
        // line 442
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 442, $this->source); })()), "buy_product_name", [], "any", false, false, false, 442), 'widget');
        echo "
                        ";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 443, $this->source); })()), "buy_product_name", [], "any", false, false, false, 443), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail"), "html", null, true);
        echo "</p>
                                ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 452, $this->source); })()), "shipping_mail", [], "any", false, false, false, 452), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 453, $this->source); })()), "shipping_mail", [], "any", false, false, false, 453), 'errors');
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
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                            <input type=\"hidden\" name=\"list_type\" id=\"list_type\">
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_juchu\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.list_juchu"), "html", null, true);
        echo "</span>
                            </button>
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_shukka\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 474
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
        // line 482
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 482, $this->source); })())], true, true);
        echo "
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 491
        if ((isset($context["posOfTenpo"]) || array_key_exists("posOfTenpo", $context) ? $context["posOfTenpo"] : (function () { throw new RuntimeError('Variable "posOfTenpo" does not exist.', 491, $this->source); })())) {
            // line 492
            echo "                    ";
            $context["cntCols"] = twig_length_filter($this->env, (isset($context["posOfTenpo"]) || array_key_exists("posOfTenpo", $context) ? $context["posOfTenpo"] : (function () { throw new RuntimeError('Variable "posOfTenpo" does not exist.', 492, $this->source); })()));
            // line 493
            echo "
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"";
            // line 495
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <tbody>
                                    ";
            // line 500
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new RuntimeError('Variable "lines" does not exist.', 500, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 501
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 501) == "header")) {
                    // line 502
                    echo "                                        <tr>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                    // line 503
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
                    echo "</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-left\">
                                                ";
                    // line 505
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 505) == null)) ? (print ("全日")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 505), "Y/m/d"), "html", null, true))));
                    echo "　
                                                 ";
                    // line 506
                    if ((twig_get_attribute($this->env, $this->source, $context["Order"], "sbt", [], "any", false, false, false, 506) == "quantity")) {
                        // line 507
                        echo "                                                    【受注数量】
                                                ";
                    } else {
                        // line 509
                        echo "                                                    【税抜売上割引後】
                                                ";
                    }
                    // line 511
                    echo "                                            </th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\" colspan=\"";
                    // line 512
                    echo twig_escape_filter($this->env, (isset($context["cntCols"]) || array_key_exists("cntCols", $context) ? $context["cntCols"] : (function () { throw new RuntimeError('Variable "cntCols" does not exist.', 512, $this->source); })()), "html", null, true);
                    echo "\">【";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 512), "html", null, true);
                    echo "】</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\"></th>
                                        </tr>
                                        <tr>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                    // line 516
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
                    echo "</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                    // line 517
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
                    echo "</th>
                                            ";
                    // line 518
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfTenpo"]) || array_key_exists("posOfTenpo", $context) ? $context["posOfTenpo"] : (function () { throw new RuntimeError('Variable "posOfTenpo" does not exist.', 518, $this->source); })()));
                    foreach ($context['_seq'] as $context["name"] => $context["pos"]) {
                        // line 519
                        echo "                                                <th class=\"border-top-0 pt-2 pb-2 text-right\">";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "</th>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 521
                    echo "                                            <th class=\"border-top-0 pt-2 pb-2 text-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
                    echo "</th>
                                        </tr>
                                        ";
                }
                // line 524
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 524) != "header")) {
                    // line 525
                    echo "                                        <tr class='";
                    echo (((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 525) == "item")) ? ("itemLine") : ("sumLine"));
                    echo "'>
                                            <!--
                                            <td class=\"align-middle text-center pl-3\">
                                                ";
                    // line 528
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 528) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 528), "html", null, true))));
                    echo "
                                            </td>
                                            -->
                                            <td class=\"align-middle text-center\">
                                                ";
                    // line 532
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "bumon_name", [], "any", false, false, false, 532) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "bumon_name", [], "any", false, false, false, 532), "html", null, true))));
                    echo "
                                            </td>
                                            <td class=\"align-middle text-left\">
                                                ";
                    // line 535
                    if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 535) == "item")) {
                        // line 536
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "product_name", [], "any", false, false, false, 536), "html", null, true);
                        echo "<br>
                                                    <!--<span class=\"text_right\">";
                        // line 537
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "product_code", [], "any", false, false, false, 537), "html", null, true);
                        echo "</span>-->
                                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 538
$context["Order"], "sbt", [], "any", false, false, false, 538) == "quantity")) {
                        // line 539
                        echo "                                                    ";
                        (((twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 539) == null)) ? (print ("全日")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 539), "Y/m/d"), "html", null, true))));
                        echo "　【受注数量】** 合計 **
                                                ";
                    } else {
                        // line 541
                        echo "                                                    ";
                        (((twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 541) == null)) ? (print ("全日")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 541), "Y/m/d"), "html", null, true))));
                        echo "　【税抜売上割引後】** 合計 **
                                                ";
                    }
                    // line 543
                    echo "                                            </td>
                                            ";
                    // line 544
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfTenpo"]) || array_key_exists("posOfTenpo", $context) ? $context["posOfTenpo"] : (function () { throw new RuntimeError('Variable "posOfTenpo" does not exist.', 544, $this->source); })()));
                    foreach ($context['_seq'] as $context["name"] => $context["pos"]) {
                        // line 545
                        echo "                                                <td class=\"align-middle text-right\">
                                                    ";
                        // line 546
                        if ((twig_get_attribute($this->env, $this->source, $context["Order"], "sbt", [], "any", false, false, false, 546) == "quantity")) {
                            // line 547
                            echo "                                                        ";
                            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "quantity", [], "any", false, false, false, 547), $context["pos"], [], "array", false, false, false, 547) == 0)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "quantity", [], "any", false, false, false, 547), $context["pos"], [], "array", false, false, false, 547)), "html", null, true))));
                            echo "<br/>
                                                    ";
                        } else {
                            // line 549
                            echo "                                                        ";
                            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "kingaku", [], "any", false, false, false, 549), $context["pos"], [], "array", false, false, false, 549) == 0)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "kingaku", [], "any", false, false, false, 549), $context["pos"], [], "array", false, false, false, 549)), "html", null, true))));
                            echo "<br/>
                                                    ";
                        }
                        // line 551
                        echo "                                                </td>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 553
                    echo "                                            <td class=\"align-middle text-right\">
                                                ";
                    // line 554
                    if ((twig_get_attribute($this->env, $this->source, $context["Order"], "sbt", [], "any", false, false, false, 554) == "quantity")) {
                        // line 555
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_quantity", [], "any", false, false, false, 555)), "html", null, true);
                        echo "
                                                ";
                    } else {
                        // line 557
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_kingaku", [], "any", false, false, false, 557)), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 559
                    echo "                                            </td>
                                        </tr>
                                        ";
                }
                // line 562
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            echo "                                    </tbody>
                                </table>

                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                            </div>
                        </div>
                    </form>
                    ";
            // line 573
            echo "                ";
        } elseif ((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 573, $this->source); })())) {
            // line 574
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 576
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 577
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
            // line 581
            echo "                ";
        } else {
            // line 582
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 584
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_set_saiji"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 585
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 586
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 590
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
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                        <label class=\"form-check-label notificationMail\">
                                            ";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div>
                                        <div class=\"d-inline-block\" data-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span class=\"font-weight-bold\">";
        // line 611
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
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 624
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
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_title"), "html", null, true);
        echo "</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body text-left\">
                                <p class=\"text-left\">";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_message"), "html", null, true);
        echo "</p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-ec-delete\" type=\"button\" id=\"btn_bulk_delete\">";
        // line 647
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
        return "@admin/Order/sum_bumon_item_02.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1326 => 647,  1322 => 646,  1312 => 639,  1305 => 635,  1291 => 624,  1286 => 622,  1272 => 611,  1265 => 607,  1258 => 603,  1243 => 590,  1236 => 586,  1232 => 585,  1228 => 584,  1224 => 582,  1221 => 581,  1215 => 577,  1211 => 576,  1207 => 574,  1204 => 573,  1193 => 563,  1187 => 562,  1182 => 559,  1176 => 557,  1170 => 555,  1168 => 554,  1165 => 553,  1158 => 551,  1152 => 549,  1146 => 547,  1144 => 546,  1141 => 545,  1137 => 544,  1134 => 543,  1128 => 541,  1122 => 539,  1120 => 538,  1116 => 537,  1111 => 536,  1109 => 535,  1103 => 532,  1096 => 528,  1089 => 525,  1086 => 524,  1079 => 521,  1070 => 519,  1066 => 518,  1062 => 517,  1058 => 516,  1049 => 512,  1046 => 511,  1042 => 509,  1038 => 507,  1036 => 506,  1032 => 505,  1027 => 503,  1024 => 502,  1021 => 501,  1017 => 500,  1007 => 495,  1003 => 493,  1000 => 492,  998 => 491,  986 => 482,  975 => 474,  968 => 470,  961 => 466,  945 => 453,  941 => 452,  937 => 451,  926 => 443,  922 => 442,  918 => 441,  910 => 436,  906 => 435,  902 => 434,  889 => 424,  885 => 423,  879 => 420,  873 => 417,  869 => 416,  862 => 412,  856 => 409,  852 => 408,  848 => 407,  838 => 400,  834 => 399,  830 => 398,  820 => 391,  816 => 390,  811 => 388,  806 => 386,  802 => 385,  796 => 382,  790 => 379,  786 => 378,  782 => 377,  772 => 370,  768 => 369,  763 => 367,  758 => 365,  754 => 364,  748 => 361,  742 => 358,  738 => 357,  734 => 356,  724 => 349,  720 => 348,  716 => 347,  706 => 340,  702 => 339,  698 => 338,  690 => 333,  686 => 332,  682 => 331,  676 => 328,  665 => 320,  655 => 313,  652 => 312,  645 => 310,  638 => 308,  636 => 307,  631 => 306,  625 => 305,  620 => 303,  616 => 302,  612 => 300,  608 => 299,  605 => 298,  603 => 297,  596 => 295,  586 => 288,  582 => 287,  576 => 284,  570 => 281,  566 => 280,  559 => 276,  551 => 271,  547 => 270,  542 => 268,  537 => 266,  533 => 265,  527 => 262,  520 => 258,  516 => 257,  512 => 256,  506 => 253,  503 => 252,  496 => 250,  489 => 248,  487 => 247,  482 => 246,  476 => 245,  471 => 243,  467 => 242,  463 => 240,  459 => 239,  456 => 238,  454 => 237,  447 => 235,  441 => 232,  437 => 231,  431 => 230,  424 => 226,  420 => 225,  414 => 224,  408 => 221,  404 => 220,  398 => 219,  392 => 216,  388 => 215,  382 => 214,  377 => 212,  370 => 208,  366 => 206,  356 => 205,  344 => 202,  335 => 196,  252 => 116,  248 => 115,  232 => 102,  228 => 101,  186 => 62,  173 => 52,  169 => 51,  164 => 50,  154 => 49,  115 => 20,  105 => 19,  86 => 15,  67 => 14,  56 => 11,  54 => 17,  52 => 12,  39 => 11,);
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
{% set menus = ['order', 'order_sum_bumon_item_02'] %}

{% block title %}{{ 'admin.order.order_sum_bumon_item_02'|trans }}{% endblock %}
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
            display: none;
        }

        .itemLine {}
        .sumLine { background-color: #e2e4eb; }
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
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"{{ url('admin_order_sum_bumon_item_02') }}\">
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
                        <div class=\"order-search-clear hiddenItem\">
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
                                            {%- if statusForm.vars.order_count[status_id].display -%}
                                                (<a href=\"{{ url('admin_order', { 'order_status_id': status_id }) }}\">{{ statusForm.vars.order_count[status_id].count }}</a>)
                                            {%- endif %}
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
                        <div class=\"col-6 order-search hiddenItem\">
                            <label class=\"col-form-label\">{{ 'admin.order.reception_date_label'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.order_datetime_start) }}
                                    {{ form_errors(searchForm.order_datetime_start) }}
                                </div>
                                <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.order_datetime_end) }}
                                    {{ form_errors(searchForm.order_datetime_end) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 order-search hiddenItem\">
                            <label class=\"col-form-label\">{{ 'admin.order.delivery_date_label'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        {{ form_widget(searchForm.shipping_delivery_datetime_start) }}
                                        {{ form_errors(searchForm.shipping_delivery_datetime_start) }}
                                    </div>
                                </div>
                                <div class=\"col-auto text-center\">{{ 'admin.common.separator__range'|trans }}</div>
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        {{ form_widget(searchForm.shipping_delivery_datetime_end) }}
                                        {{ form_errors(searchForm.shipping_delivery_datetime_end) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row hiddenItem\">
                            <div class=\"form-group col-12\">
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
                                            {%- if statusForm.vars.order_count[status_id].display -%}
                                                (<a href=\"{{ url('admin_order', { 'order_status_id': status_id }) }}\">{{ statusForm.vars.order_count[status_id].count }}</a>)
                                            {%- endif %}
                                        </div>
                                    {% endfor %}
                                </div>
                                {{ form_errors(searchForm.status) }}
                            </div>
                        </div>
                        <!--
                        <div class=\"d-inline-block mb-3 collapsed order-search-clear\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\">
                            <a>
                                <i class=\"fa font-weight-bold mr-1 fa-plus-square-o\">
                                    <span class=\"font-weight-bold\">{{ 'admin.common.search_detail'|trans }}</span>
                                </i>
                            </a>
                        </div>
                        -->
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
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.common.payment_method'|trans }}</p>
                                {{ form_widget(searchForm.payment, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.payment) }}
                            </div>
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
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.order.orderer_company_name'|trans }}</label>
                        {{ form_widget(searchForm.company_name) }}
                        {{ form_errors(searchForm.company_name) }}
                    </div>
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
                    <div class=\"col\">
                        <label class=\"col-form-label\">{{ 'admin.common.mail_address'|trans }}</label>
                        {{ form_widget(searchForm.email) }}
                        {{ form_errors(searchForm.email) }}
                    </div>
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

            </div>
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <!--<div class=\"mb-4\">-->
                    <div class=\"col-12\">
                        <div class=\"col-8 p-3\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\" id=\"search_submit\">{{ 'admin.common.search'|trans }}</button>
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
                    <!--</div>-->
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
                {% if posOfTenpo %}
                    {% set cntCols = posOfTenpo|length %}

                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"{{ constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME') }}\" value=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <tbody>
                                    {% for Order in lines %}
                                        {% if Order.kbn == 'header' %}
                                        <tr>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.delivery_date'|trans }}</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-left\">
                                                {{ Order.shipping_delivery_date == null ? '全日' : Order.shipping_delivery_date|date(\"Y/m/d\") }}　
                                                 {% if Order.sbt == 'quantity' %}
                                                    【受注数量】
                                                {% else %}
                                                    【税抜売上割引後】
                                                {% endif %}
                                            </th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\" colspan=\"{{ cntCols }}\">【{{ Order.saiji_name }}】</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\"></th>
                                        </tr>
                                        <tr>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.bumon_label'|trans }}</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.purchase_product'|trans }}</th>
                                            {% for name,pos in posOfTenpo %}
                                                <th class=\"border-top-0 pt-2 pb-2 text-right\">{{ name }}</th>
                                            {% endfor %}
                                            <th class=\"border-top-0 pt-2 pb-2 text-right\">{{ 'admin.order.total'|trans }}</th>
                                        </tr>
                                        {% endif %}
                                        {% if Order.kbn != 'header' %}
                                        <tr class='{{ Order.kbn == 'item' ? 'itemLine' : 'sumLine' }}'>
                                            <!--
                                            <td class=\"align-middle text-center pl-3\">
                                                {{ Order.saiji_name == null ? '' : Order.saiji_name }}
                                            </td>
                                            -->
                                            <td class=\"align-middle text-center\">
                                                {{ Order.bumon_name == null ? '' : Order.bumon_name }}
                                            </td>
                                            <td class=\"align-middle text-left\">
                                                {% if Order.kbn == 'item' %}
                                                    {{ Order.product_name }}<br>
                                                    <!--<span class=\"text_right\">{{ Order.product_code }}</span>-->
                                                {% elseif Order.sbt == 'quantity' %}
                                                    {{ Order.shipping_delivery_date == null ? '全日' : Order.shipping_delivery_date|date(\"Y/m/d\") }}　【受注数量】** 合計 **
                                                {% else %}
                                                    {{ Order.shipping_delivery_date == null ? '全日' : Order.shipping_delivery_date|date(\"Y/m/d\") }}　【税抜売上割引後】** 合計 **
                                                {% endif %}
                                            </td>
                                            {% for name,pos in posOfTenpo %}
                                                <td class=\"align-middle text-right\">
                                                    {% if Order.sbt == 'quantity' %}
                                                        {{ Order.quantity[pos] == 0 ? '' : Order.quantity[pos]|number_format }}<br/>
                                                    {% else %}
                                                        {{ Order.kingaku[pos] == 0 ? '' : Order.kingaku[pos]|number_format }}<br/>
                                                    {% endif %}
                                                </td>
                                            {% endfor %}
                                            <td class=\"align-middle text-right\">
                                                {% if Order.sbt == 'quantity' %}
                                                    {{ Order.sum_quantity|number_format }}
                                                {% else %}
                                                    {{ Order.sum_kingaku|number_format }}
                                                {% endif %}
                                            </td>
                                        </tr>
                                        {% endif %}
                                    {% endfor %}
                                    </tbody>
                                </table>

                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
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
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_try_set_saiji'|trans }}</div>
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
", "@admin/Order/sum_bumon_item_02.twig", "/var/www/htdocs/ec922501/app/template/admin/Order/sum_bumon_item_02.twig");
    }
}
