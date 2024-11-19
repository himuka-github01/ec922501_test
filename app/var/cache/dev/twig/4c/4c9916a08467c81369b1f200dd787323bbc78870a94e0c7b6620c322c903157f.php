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

/* @admin/Order/sum_tenpo_bumon.twig */
class __TwigTemplate_5e24bb08a4e9d6637fb9b213035ae25d004e137858ac38677e48753716de11f8 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/sum_tenpo_bumon.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/sum_tenpo_bumon.twig"));

        // line 12
        $context["menus"] = [0 => "order", 1 => "order_sum_tenpo_bumon"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 17, $this->source); })()), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/sum_tenpo_bumon.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_sum_tenpo_bumon"), "html", null, true);
        
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
        .bumonLine {}
        .tenpoLine { background-color: #afeeee; }
        .nebikiLine {}
        .taxLine {}
        .paymentLine { background-color: #afeeee; }
        .paymentDetail {}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 55
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
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
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 67, $this->source); })()), "locale", [], "any", false, false, false, 67), "html", null, true);
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
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_juchu");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 107
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
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_shukka");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 121
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
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "';
    });

});
</script>

";
        // line 207
        echo twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 210
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 211
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_sum_tenpo_bumon");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 217, $this->source); })()), "_token", [], "any", false, false, false, 217), 'widget');
        echo "
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.saiji_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_id_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 220, $this->source); })()), "saiji_id", [], "any", false, false, false, 220), 'widget');
        echo "
                            ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 221, $this->source); })()), "saiji_id", [], "any", false, false, false, 221), 'errors');
        echo "
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.tenpo_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 225, $this->source); })()), "tenpo_id", [], "any", false, false, false, 225), 'widget');
        echo "
                            ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 226, $this->source); })()), "tenpo_id", [], "any", false, false, false, 226), 'errors');
        echo "
                        </div>
                        <div class=\"col-4 order-search\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.bumon_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 230, $this->source); })()), "bumon_id", [], "any", false, false, false, 230), 'widget');
        echo "
                            ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 231, $this->source); })()), "bumon_id", [], "any", false, false, false, 231), 'errors');
        echo "
                        </div>
                        <div class=\"order-search-clear hiddenItem\">
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 236, $this->source); })()), "multi", [], "any", false, false, false, 236), 'widget');
        echo "
                                ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 237, $this->source); })()), "multi", [], "any", false, false, false, 237), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <label class=\"col-form-label\"  data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_search_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 242
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 242, $this->source); })()), "status", [], "any", false, false, false, 242);
        // line 243
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 244, $this->source); })()), "children", [], "any", false, false, false, 244));
        foreach ($context['_seq'] as $context["status_id"] => $context["child"]) {
            // line 245
            echo "                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                id=\"";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 247), "id", [], "any", false, false, false, 247), "html", null, true);
            echo "\"
                                                name=\"";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 248), "full_name", [], "any", false, false, false, 248), "html", null, true);
            echo "\"
                                                class=\"form-check-input\"
                                                value=\"";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 250), "value", [], "any", false, false, false, 250), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 250), "checked", [], "any", false, false, false, 250)) ? (" checked=\"checked\"") : (""));
            echo ">
                                            <label class=\"form-check-label\" for=\"";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 251), "id", [], "any", false, false, false, 251), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 251), "label", [], "any", false, false, false, 251), "html", null, true);
            echo "</label>";
            // line 252
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 252, $this->source); })()), "vars", [], "any", false, false, false, 252), "order_count", [], "any", false, false, false, 252), $context["status_id"], [], "array", false, false, false, 252), "display", [], "any", false, false, false, 252)) {
                // line 253
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 253, $this->source); })()), "vars", [], "any", false, false, false, 253), "order_count", [], "any", false, false, false, 253), $context["status_id"], [], "array", false, false, false, 253), "count", [], "any", false, false, false, 253), "html", null, true);
                echo "</a>)";
            }
            // line 255
            echo "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status_id'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                                </div>
                                ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 258, $this->source); })()), "status", [], "any", false, false, false, 258), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <p class=\"col-form-label\">";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 262, $this->source); })()), "payment", [], "any", false, false, false, 262), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 263, $this->source); })()), "payment", [], "any", false, false, false, 263), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"col-6 order-search hiddenItem\">
                            <label class=\"col-form-label\">";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.reception_date_label"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 270, $this->source); })()), "order_datetime_start", [], "any", false, false, false, 270), 'widget');
        echo "
                                    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 271, $this->source); })()), "order_datetime_start", [], "any", false, false, false, 271), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    ";
        // line 275
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 275, $this->source); })()), "order_datetime_end", [], "any", false, false, false, 275), 'widget');
        echo "
                                    ";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 276, $this->source); })()), "order_datetime_end", [], "any", false, false, false, 276), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 order-search hiddenItem\">
                            <label class=\"col-form-label\">";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date_label"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 285, $this->source); })()), "shipping_delivery_datetime_start", [], "any", false, false, false, 285), 'widget');
        echo "
                                        ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 286, $this->source); })()), "shipping_delivery_datetime_start", [], "any", false, false, false, 286), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    <div class=\"input-group\">
                                        ";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 292, $this->source); })()), "shipping_delivery_datetime_end", [], "any", false, false, false, 292), 'widget');
        echo "
                                        ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 293, $this->source); })()), "shipping_delivery_datetime_end", [], "any", false, false, false, 293), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-row hiddenItem\">
                            <div class=\"form-group col-12\">
                                <label class=\"col-form-label\"  data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_search_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                <div id=\"admin_search_order_status\">
                                    ";
        // line 302
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 302, $this->source); })()), "status", [], "any", false, false, false, 302);
        // line 303
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 304, $this->source); })()), "children", [], "any", false, false, false, 304));
        foreach ($context['_seq'] as $context["status_id"] => $context["child"]) {
            // line 305
            echo "                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"checkbox\"
                                                   id=\"";
            // line 307
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 307), "id", [], "any", false, false, false, 307), "html", null, true);
            echo "\"
                                                   name=\"";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 308), "full_name", [], "any", false, false, false, 308), "html", null, true);
            echo "\"
                                                   class=\"form-check-input\"
                                                   value=\"";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 310), "value", [], "any", false, false, false, 310), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 310), "checked", [], "any", false, false, false, 310)) ? (" checked=\"checked\"") : (""));
            echo ">
                                            <label class=\"form-check-label\" for=\"";
            // line 311
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 311), "id", [], "any", false, false, false, 311), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 311), "label", [], "any", false, false, false, 311), "html", null, true);
            echo "</label>";
            // line 312
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 312, $this->source); })()), "vars", [], "any", false, false, false, 312), "order_count", [], "any", false, false, false, 312), $context["status_id"], [], "array", false, false, false, 312), "display", [], "any", false, false, false, 312)) {
                // line 313
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 313, $this->source); })()), "vars", [], "any", false, false, false, 313), "order_count", [], "any", false, false, false, 313), $context["status_id"], [], "array", false, false, false, 313), "count", [], "any", false, false, false, 313), "html", null, true);
                echo "</a>)";
            }
            // line 315
            echo "                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status_id'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "                                </div>
                                ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 318, $this->source); })()), "status", [], "any", false, false, false, 318), 'errors');
        echo "
                            </div>
                        </div>
                        <!--
                        <div class=\"d-inline-block mb-3 collapsed order-search-clear\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\">
                            <a>
                                <i class=\"fa font-weight-bold mr-1 fa-plus-square-o\">
                                    <span class=\"font-weight-bold\">";
        // line 325
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
        // line 333
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 333, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_name"), "html", null, true);
        echo "</label>
                        ";
        // line 337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 337, $this->source); })()), "name", [], "any", false, false, false, 337), 'widget');
        echo "
                        ";
        // line 338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 338, $this->source); })()), "name", [], "any", false, false, false, 338), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 344, $this->source); })()), "payment", [], "any", false, false, false, 344), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 345, $this->source); })()), "payment", [], "any", false, false, false, 345), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_kana"), "html", null, true);
        echo "</label>
                        ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 353, $this->source); })()), "kana", [], "any", false, false, false, 353), 'widget');
        echo "
                        ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 354, $this->source); })()), "kana", [], "any", false, false, false, 354), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_company_name"), "html", null, true);
        echo "</label>
                        ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 362, $this->source); })()), "company_name", [], "any", false, false, false, 362), 'widget');
        echo "
                        ";
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 363, $this->source); })()), "company_name", [], "any", false, false, false, 363), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 369, $this->source); })()), "payment_datetime_start", [], "any", false, false, false, 369), 'widget');
        echo "
                                ";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 370, $this->source); })()), "payment_datetime_start", [], "any", false, false, false, 370), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 374
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 374, $this->source); })()), "payment_datetime_end", [], "any", false, false, false, 374), 'widget');
        echo "
                                ";
        // line 375
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 375, $this->source); })()), "payment_datetime_end", [], "any", false, false, false, 375), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</label>
                        ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 383, $this->source); })()), "email", [], "any", false, false, false, 383), 'widget');
        echo "
                        ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 384, $this->source); })()), "email", [], "any", false, false, false, 384), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                ";
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 390, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 390), 'widget');
        echo "
                                ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 391, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 391), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 395, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 395), 'widget');
        echo "
                                ";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 396, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 396), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                        ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 404, $this->source); })()), "phone_number", [], "any", false, false, false, 404), 'widget');
        echo "
                        ";
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 405, $this->source); })()), "phone_number", [], "any", false, false, false, 405), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</label>
                        ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 413, $this->source); })()), "order_no", [], "any", false, false, false, 413), 'widget');
        echo "
                        ";
        // line 414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 414, $this->source); })()), "order_no", [], "any", false, false, false, 414), 'errors');
        echo "
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                        <div class=\"form-row align-items-center\">
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 421
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 421, $this->source); })()), "payment_total_start", [], "any", false, false, false, 421), 'widget');
        echo "
                                    ";
        // line 422
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 422, $this->source); })()), "payment_total_start", [], "any", false, false, false, 422), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    ";
        // line 428
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 428, $this->source); })()), "payment_total_end", [], "any", false, false, false, 428), 'widget');
        echo "
                                    ";
        // line 429
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 429, $this->source); })()), "payment_total_end", [], "any", false, false, false, 429), 'errors');
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
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
        echo "</p>
                                ";
        // line 440
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 440, $this->source); })()), "tracking_number", [], "any", false, false, false, 440), 'widget');
        echo "
                                ";
        // line 441
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 441, $this->source); })()), "tracking_number", [], "any", false, false, false, 441), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                        ";
        // line 447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 447, $this->source); })()), "buy_product_name", [], "any", false, false, false, 447), 'widget');
        echo "
                        ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 448, $this->source); })()), "buy_product_name", [], "any", false, false, false, 448), 'errors');
        echo "
                    </div>
                </div>

                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_mail"), "html", null, true);
        echo "</p>
                                ";
        // line 457
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 457, $this->source); })()), "shipping_mail", [], "any", false, false, false, 457), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 458
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 458, $this->source); })()), "shipping_mail", [], "any", false, false, false, 458), 'errors');
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
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                            <input type=\"hidden\" name=\"list_type\" id=\"list_type\">
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_juchu\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.list_juchu"), "html", null, true);
        echo "</span>
                            </button>
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_shukka\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 479
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
        // line 487
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 487, $this->source); })())], true, true);
        echo "
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 496
        if ((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 496, $this->source); })())) {
            // line 497
            echo "
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"";
            // line 499
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">";
            // line 505
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_id_label"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 506
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tenpo_label"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 507
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
            echo "</th>
                                        ";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 508, $this->source); })()));
            foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                // line 509
                echo "                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                echo twig_escape_filter($this->env, $context["dt"], "html", null, true);
                echo "</th>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_count"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">";
            // line 512
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pr-3\">";
            // line 513
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
            echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 517
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new RuntimeError('Variable "lines" does not exist.', 517, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 518
                echo "                                        <tr class='";
                echo (((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 518) == "bumon")) ? ("bumonLine") : ("tenpoLine"));
                echo "'>
                                            <td class=\"align-middle text-center pl-3\">
                                                ";
                // line 520
                (((twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 520) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 520), "html", null, true))));
                echo "
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                ";
                // line 523
                (((twig_get_attribute($this->env, $this->source, $context["Order"], "tenpo_name", [], "any", false, false, false, 523) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "tenpo_name", [], "any", false, false, false, 523), "html", null, true))));
                echo "
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                ";
                // line 526
                (((twig_get_attribute($this->env, $this->source, $context["Order"], "bumon_name", [], "any", false, false, false, 526) == null)) ? (print ("**売上合計**")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "bumon_name", [], "any", false, false, false, 526), "html", null, true))));
                echo "
                                            </td>
                                            ";
                // line 528
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 528, $this->source); })()));
                foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                    // line 529
                    echo "                                                <td class=\"align-middle text-right\">
                                                    ";
                    // line 530
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "base_kingaku", [], "any", false, false, false, 530), $context["pos"], [], "array", false, false, false, 530) == 0)) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "base_kingaku", [], "any", false, false, false, 530), $context["pos"], [], "array", false, false, false, 530)), "html", null, true))));
                    echo "<br/>
                                                    ";
                    // line 531
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "quantity", [], "any", false, false, false, 531), $context["pos"], [], "array", false, false, false, 531) == 0)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "quantity", [], "any", false, false, false, 531), $context["pos"], [], "array", false, false, false, 531)), "html", null, true))));
                    echo "<br/>
                                                </td>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 534
                echo "                                            <td class=\"align-middle text-right\">
                                                ";
                // line 535
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "sum_quantity", [], "any", false, false, false, 535)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                // line 538
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Order"], "sum_base_kingaku", [], "any", false, false, false, 538)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                ";
                // line 541
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Order"], "sum_kingaku", [], "any", false, false, false, 541)), "html", null, true);
                echo "
                                            </td>
                                        </tr>
                                        ";
                // line 544
                if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 544) == "tenpo")) {
                    // line 545
                    echo "                                            <tr class=\"nebikiLine\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">特典割引</td>
                                                ";
                    // line 548
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 548, $this->source); })()));
                    foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                        // line 549
                        echo "                                                    ";
                        $context["wari_else_kingaku"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "wari_a_kingaku", [], "any", false, false, false, 549), $context["pos"], [], "array", false, false, false, 549) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "wari_kikan_kingaku", [], "any", false, false, false, 549), $context["pos"], [], "array", false, false, false, 549)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "wari_matome_kingaku", [], "any", false, false, false, 549), $context["pos"], [], "array", false, false, false, 549));
                        // line 550
                        echo "                                                    <td class=\"align-middle text-right\">";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["wari_else_kingaku"]) || array_key_exists("wari_else_kingaku", $context) ? $context["wari_else_kingaku"] : (function () { throw new RuntimeError('Variable "wari_else_kingaku" does not exist.', 550, $this->source); })())), "html", null, true);
                        echo "</td>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 552
                    echo "                                                <td>&nbsp;</td>
                                                ";
                    // line 553
                    $context["sum_wari_else_kingaku"] = ((twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_a_kingaku", [], "any", false, false, false, 553) + twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_kikan_kingaku", [], "any", false, false, false, 553)) + twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_matome_kingaku", [], "any", false, false, false, 553));
                    // line 554
                    echo "                                                <td class=\"align-middle text-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["sum_wari_else_kingaku"]) || array_key_exists("sum_wari_else_kingaku", $context) ? $context["sum_wari_else_kingaku"] : (function () { throw new RuntimeError('Variable "sum_wari_else_kingaku" does not exist.', 554, $this->source); })())), "html", null, true);
                    echo "</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr class=\"nebikiLine\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">社員割引</td>
                                                ";
                    // line 560
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 560, $this->source); })()));
                    foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                        // line 561
                        echo "                                                    <td class=\"align-middle text-right\">";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "wari_b_kingaku", [], "any", false, false, false, 561), $context["pos"], [], "array", false, false, false, 561)), "html", null, true);
                        echo "</td>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 563
                    echo "                                                <td>&nbsp;</td>
                                                <td class=\"align-middle text-right\">";
                    // line 564
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Order"], "sum_wari_b_kingaku", [], "any", false, false, false, 564)), "html", null, true);
                    echo "</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr class=\"paymentLine\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">**小計**</td>
                                                ";
                    // line 570
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 570, $this->source); })()));
                    foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                        // line 571
                        echo "                                                    <td class=\"align-middle text-right\">";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "kingaku", [], "any", false, false, false, 571), $context["pos"], [], "array", false, false, false, 571)), "html", null, true);
                        echo "</td>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 573
                    echo "                                                <td>&nbsp;</td>
                                                <td class=\"align-middle text-right\">";
                    // line 574
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Order"], "sum_kingaku", [], "any", false, false, false, 574)), "html", null, true);
                    echo "</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            ";
                    // line 577
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Order"], "sumByTax", [], "any", false, false, false, 577));
                    foreach ($context['_seq'] as $context["idx"] => $context["taxDtl"]) {
                        // line 578
                        echo "                                                ";
                        if (!twig_in_filter($context["idx"], [0 => "total", 1 => "kinshu", 2 => "sum_total", 3 => "sum_kinshu"])) {
                            // line 579
                            echo "                                                <tr class=\"taxLine\">
                                                    <td colspan=\"2\">&nbsp;</td>
                                                    <td class=\"align-middle text-center\">";
                            // line 581
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxDtl"], "tax_rate", [], "any", false, false, false, 581), "html", null, true);
                            echo "％分 売上</td>
                                                    ";
                            // line 582
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 582, $this->source); })()));
                            foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                                // line 583
                                echo "                                                        <td class=\"align-middle text-right\">";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxDtl"], "kingaku", [], "any", false, false, false, 583), $context["pos"], [], "array", false, false, false, 583)), "html", null, true);
                                echo "</td>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 585
                            echo "                                                    <td>&nbsp;</td>
                                                    <td class=\"align-middle text-right\">";
                            // line 586
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["taxDtl"], "sum_kingaku", [], "any", false, false, false, 586)), "html", null, true);
                            echo "</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr class=\"taxLine\">
                                                    <td colspan=\"2\">&nbsp;</td>
                                                    <td class=\"align-middle text-center\">";
                            // line 591
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxDtl"], "tax_rate", [], "any", false, false, false, 591), "html", null, true);
                            echo "％分 税額</td>
                                                    ";
                            // line 592
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 592, $this->source); })()));
                            foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                                // line 593
                                echo "                                                        <td class=\"align-middle text-right\">";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxDtl"], "tax", [], "any", false, false, false, 593), $context["pos"], [], "array", false, false, false, 593)), "html", null, true);
                                echo "</td>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 595
                            echo "                                                    <td>&nbsp;</td>
                                                    <td class=\"align-middle text-right\">";
                            // line 596
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["taxDtl"], "sum_tax", [], "any", false, false, false, 596)), "html", null, true);
                            echo "</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                ";
                        }
                        // line 600
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['idx'], $context['taxDtl'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 601
                    echo "                                            <tr class=\"paymentLine\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">**支払合計**</td>
                                                ";
                    // line 604
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 604, $this->source); })()));
                    foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                        // line 605
                        echo "                                                    <!--
                                                    <td class=\"align-middle text-right\">";
                        // line 606
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "kingaku", [], "any", false, false, false, 606), $context["pos"], [], "array", false, false, false, 606)), "html", null, true);
                        echo "</td>
                                                    -->
                                                    <td class=\"align-middle text-right\">";
                        // line 608
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "sumByTax", [], "any", false, false, false, 608), "total", [], "any", false, false, false, 608), $context["pos"], [], "array", false, false, false, 608)), "html", null, true);
                        echo "</td>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 610
                    echo "                                                <td>&nbsp;</td>
                                                <td class=\"align-middle text-right\">";
                    // line 611
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "sumByTax", [], "any", false, false, false, 611), "sum_total", [], "any", false, false, false, 611)), "html", null, true);
                    echo "</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            ";
                    // line 614
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "sumByTax", [], "any", false, false, false, 614), "kinshu", [], "any", false, false, false, 614));
                    foreach ($context['_seq'] as $context["idx"] => $context["kinshuDtl"]) {
                        // line 615
                        echo "                                                <tr class=\"paymentDetail\">
                                                    <td colspan=\"2\">&nbsp;</td>
                                                    <td class=\"align-middle text-center\">";
                        // line 617
                        echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                        echo "</td>
                                                    ";
                        // line 618
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 618, $this->source); })()));
                        foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                            // line 619
                            echo "                                                        <td class=\"align-middle text-right\">";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["kinshuDtl"], $context["pos"], [], "array", false, false, false, 619)), "html", null, true);
                            echo "</td>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 621
                        echo "                                                    <td>&nbsp;</td>
                                                    <td class=\"align-middle text-right\">";
                        // line 622
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "sumByTax", [], "any", false, false, false, 622), "sum_kinshu", [], "any", false, false, false, 622), $context["idx"], [], "array", false, false, false, 622)), "html", null, true);
                        echo "</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['idx'], $context['kinshuDtl'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 626
                    echo "                                            <!--
                                            <tr class=\"paymentDetail\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">現金</td>
                                                ";
                    // line 630
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 630, $this->source); })()));
                    foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                        // line 631
                        echo "                                                    <td class=\"align-middle text-right\">";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "kingaku_genkin", [], "any", false, false, false, 631), $context["pos"], [], "array", false, false, false, 631)), "html", null, true);
                        echo "</td>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 633
                    echo "                                                <td colspan=\"3\">&nbsp;</td>
                                            </tr>
                                            <tr class=\"paymentDetail\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">FC電子マネー</td>
                                                ";
                    // line 638
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 638, $this->source); })()));
                    foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                        // line 639
                        echo "                                                    <td class=\"align-middle text-right\">";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "kingaku_denshi", [], "any", false, false, false, 639), $context["pos"], [], "array", false, false, false, 639)), "html", null, true);
                        echo "</td>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 641
                    echo "                                                <td colspan=\"3\">&nbsp;</td>
                                            </tr>
                                            <tr class=\"paymentDetail\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">クレジット</td>
                                                ";
                    // line 646
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfDate"]) || array_key_exists("posOfDate", $context) ? $context["posOfDate"] : (function () { throw new RuntimeError('Variable "posOfDate" does not exist.', 646, $this->source); })()));
                    foreach ($context['_seq'] as $context["dt"] => $context["pos"]) {
                        // line 647
                        echo "                                                    <td class=\"align-middle text-right\">";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "kingaku_credit", [], "any", false, false, false, 647), $context["pos"], [], "array", false, false, false, 647)), "html", null, true);
                        echo "</td>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dt'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 649
                    echo "                                                <td colspan=\"3\">&nbsp;</td>
                                            </tr>
                                            -->
                                        ";
                }
                // line 653
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 654
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                            </div>
                        </div>
                    </form>
                    ";
            // line 663
            echo "                ";
        } elseif ((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 663, $this->source); })())) {
            // line 664
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 666
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 667
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
            // line 671
            echo "                ";
        } else {
            // line 672
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 674
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_set_saiji"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 675
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 676
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 680
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
        // line 693
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                        <label class=\"form-check-label notificationMail\">
                                            ";
        // line 697
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div>
                                        <div class=\"d-inline-block\" data-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span class=\"font-weight-bold\">";
        // line 701
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
        // line 712
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 714
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
        // line 725
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_title"), "html", null, true);
        echo "</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body text-left\">
                                <p class=\"text-left\">";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_message"), "html", null, true);
        echo "</p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 736
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-ec-delete\" type=\"button\" id=\"btn_bulk_delete\">";
        // line 737
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
        return "@admin/Order/sum_tenpo_bumon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1561 => 737,  1557 => 736,  1547 => 729,  1540 => 725,  1526 => 714,  1521 => 712,  1507 => 701,  1500 => 697,  1493 => 693,  1478 => 680,  1471 => 676,  1467 => 675,  1463 => 674,  1459 => 672,  1456 => 671,  1450 => 667,  1446 => 666,  1442 => 664,  1439 => 663,  1429 => 654,  1423 => 653,  1417 => 649,  1408 => 647,  1404 => 646,  1397 => 641,  1388 => 639,  1384 => 638,  1377 => 633,  1368 => 631,  1364 => 630,  1358 => 626,  1348 => 622,  1345 => 621,  1336 => 619,  1332 => 618,  1328 => 617,  1324 => 615,  1320 => 614,  1314 => 611,  1311 => 610,  1303 => 608,  1298 => 606,  1295 => 605,  1291 => 604,  1286 => 601,  1280 => 600,  1273 => 596,  1270 => 595,  1261 => 593,  1257 => 592,  1253 => 591,  1245 => 586,  1242 => 585,  1233 => 583,  1229 => 582,  1225 => 581,  1221 => 579,  1218 => 578,  1214 => 577,  1208 => 574,  1205 => 573,  1196 => 571,  1192 => 570,  1183 => 564,  1180 => 563,  1171 => 561,  1167 => 560,  1157 => 554,  1155 => 553,  1152 => 552,  1143 => 550,  1140 => 549,  1136 => 548,  1131 => 545,  1129 => 544,  1123 => 541,  1117 => 538,  1111 => 535,  1108 => 534,  1099 => 531,  1095 => 530,  1092 => 529,  1088 => 528,  1083 => 526,  1077 => 523,  1071 => 520,  1065 => 518,  1061 => 517,  1054 => 513,  1050 => 512,  1045 => 511,  1036 => 509,  1032 => 508,  1028 => 507,  1024 => 506,  1020 => 505,  1009 => 499,  1005 => 497,  1003 => 496,  991 => 487,  980 => 479,  973 => 475,  966 => 471,  950 => 458,  946 => 457,  942 => 456,  931 => 448,  927 => 447,  923 => 446,  915 => 441,  911 => 440,  907 => 439,  894 => 429,  890 => 428,  884 => 425,  878 => 422,  874 => 421,  867 => 417,  861 => 414,  857 => 413,  853 => 412,  843 => 405,  839 => 404,  835 => 403,  825 => 396,  821 => 395,  816 => 393,  811 => 391,  807 => 390,  801 => 387,  795 => 384,  791 => 383,  787 => 382,  777 => 375,  773 => 374,  768 => 372,  763 => 370,  759 => 369,  753 => 366,  747 => 363,  743 => 362,  739 => 361,  729 => 354,  725 => 353,  721 => 352,  711 => 345,  707 => 344,  703 => 343,  695 => 338,  691 => 337,  687 => 336,  681 => 333,  670 => 325,  660 => 318,  657 => 317,  650 => 315,  643 => 313,  641 => 312,  636 => 311,  630 => 310,  625 => 308,  621 => 307,  617 => 305,  613 => 304,  610 => 303,  608 => 302,  601 => 300,  591 => 293,  587 => 292,  581 => 289,  575 => 286,  571 => 285,  564 => 281,  556 => 276,  552 => 275,  547 => 273,  542 => 271,  538 => 270,  532 => 267,  525 => 263,  521 => 262,  517 => 261,  511 => 258,  508 => 257,  501 => 255,  494 => 253,  492 => 252,  487 => 251,  481 => 250,  476 => 248,  472 => 247,  468 => 245,  464 => 244,  461 => 243,  459 => 242,  452 => 240,  446 => 237,  442 => 236,  436 => 235,  429 => 231,  425 => 230,  419 => 229,  413 => 226,  409 => 225,  403 => 224,  397 => 221,  393 => 220,  387 => 219,  382 => 217,  375 => 213,  371 => 211,  361 => 210,  349 => 207,  340 => 201,  257 => 121,  253 => 120,  237 => 107,  233 => 106,  191 => 67,  178 => 57,  174 => 56,  169 => 55,  159 => 54,  115 => 20,  105 => 19,  86 => 15,  67 => 14,  56 => 11,  54 => 17,  52 => 12,  39 => 11,);
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
{% set menus = ['order', 'order_sum_tenpo_bumon'] %}

{% block title %}{{ 'admin.order.order_sum_tenpo_bumon'|trans }}{% endblock %}
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
        .bumonLine {}
        .tenpoLine { background-color: #afeeee; }
        .nebikiLine {}
        .taxLine {}
        .paymentLine { background-color: #afeeee; }
        .paymentDetail {}
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
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"{{ url('admin_order_sum_tenpo_bumon') }}\">
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
                {% if posOfDate %}

                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"{{ constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME') }}\" value=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pl-3\">{{ 'admin.order.saiji_id_label'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.tenpo_label'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.bumon_label'|trans }}</th>
                                        {% for dt,pos in posOfDate %}
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ dt }}</th>
                                        {% endfor %}
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.purchase_count'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">{{ 'admin.order.amount'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center pr-3\">{{ 'admin.order.purchase_price'|trans }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for Order in lines %}
                                        <tr class='{{ Order.kbn == 'bumon' ? 'bumonLine' : 'tenpoLine' }}'>
                                            <td class=\"align-middle text-center pl-3\">
                                                {{ Order.saiji_name == null ? '' : Order.saiji_name }}
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                {{ Order.tenpo_name == null ? '' : Order.tenpo_name }}
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                {{ Order.bumon_name == null ? '**売上合計**' : Order.bumon_name }}
                                            </td>
                                            {% for dt,pos in posOfDate %}
                                                <td class=\"align-middle text-right\">
                                                    {{ Order.base_kingaku[pos] == 0 ? '' : Order.base_kingaku[pos]|price }}<br/>
                                                    {{ Order.quantity[pos] == 0 ? '' : Order.quantity[pos]|number_format }}<br/>
                                                </td>
                                            {% endfor %}
                                            <td class=\"align-middle text-right\">
                                                {{ Order.sum_quantity|number_format }}
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                {{ Order.sum_base_kingaku|price }}
                                            </td>
                                            <td class=\"align-middle text-right\">
                                                {{ Order.sum_kingaku|price }}
                                            </td>
                                        </tr>
                                        {% if Order.kbn == 'tenpo' %}
                                            <tr class=\"nebikiLine\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">特典割引</td>
                                                {% for dt,pos in posOfDate %}
                                                    {% set wari_else_kingaku = Order.wari_a_kingaku[pos] + Order.wari_kikan_kingaku[pos] + Order.wari_matome_kingaku[pos] %}
                                                    <td class=\"align-middle text-right\">{{ wari_else_kingaku|price }}</td>
                                                {% endfor %}
                                                <td>&nbsp;</td>
                                                {% set sum_wari_else_kingaku = Order.sum_wari_a_kingaku + Order.sum_wari_kikan_kingaku + Order.sum_wari_matome_kingaku %}
                                                <td class=\"align-middle text-right\">{{ sum_wari_else_kingaku|price }}</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr class=\"nebikiLine\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">社員割引</td>
                                                {% for dt,pos in posOfDate %}
                                                    <td class=\"align-middle text-right\">{{ Order.wari_b_kingaku[pos]|price }}</td>
                                                {% endfor %}
                                                <td>&nbsp;</td>
                                                <td class=\"align-middle text-right\">{{ Order.sum_wari_b_kingaku|price }}</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr class=\"paymentLine\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">**小計**</td>
                                                {% for dt,pos in posOfDate %}
                                                    <td class=\"align-middle text-right\">{{ Order.kingaku[pos]|price }}</td>
                                                {% endfor %}
                                                <td>&nbsp;</td>
                                                <td class=\"align-middle text-right\">{{ Order.sum_kingaku|price }}</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            {% for idx,taxDtl in Order.sumByTax %}
                                                {% if idx not in ['total','kinshu','sum_total','sum_kinshu'] %}
                                                <tr class=\"taxLine\">
                                                    <td colspan=\"2\">&nbsp;</td>
                                                    <td class=\"align-middle text-center\">{{ taxDtl.tax_rate }}％分 売上</td>
                                                    {% for dt,pos in posOfDate %}
                                                        <td class=\"align-middle text-right\">{{ taxDtl.kingaku[pos]|price }}</td>
                                                    {% endfor %}
                                                    <td>&nbsp;</td>
                                                    <td class=\"align-middle text-right\">{{ taxDtl.sum_kingaku|price }}</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr class=\"taxLine\">
                                                    <td colspan=\"2\">&nbsp;</td>
                                                    <td class=\"align-middle text-center\">{{ taxDtl.tax_rate }}％分 税額</td>
                                                    {% for dt,pos in posOfDate %}
                                                        <td class=\"align-middle text-right\">{{ taxDtl.tax[pos]|price }}</td>
                                                    {% endfor %}
                                                    <td>&nbsp;</td>
                                                    <td class=\"align-middle text-right\">{{ taxDtl.sum_tax|price }}</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                {% endif %}
                                            {% endfor %}
                                            <tr class=\"paymentLine\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">**支払合計**</td>
                                                {% for dt,pos in posOfDate %}
                                                    <!--
                                                    <td class=\"align-middle text-right\">{{ Order.kingaku[pos]|price }}</td>
                                                    -->
                                                    <td class=\"align-middle text-right\">{{ Order.sumByTax.total[pos]|price }}</td>
                                                {% endfor %}
                                                <td>&nbsp;</td>
                                                <td class=\"align-middle text-right\">{{ Order.sumByTax.sum_total|price }}</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            {% for idx,kinshuDtl in Order.sumByTax.kinshu %}
                                                <tr class=\"paymentDetail\">
                                                    <td colspan=\"2\">&nbsp;</td>
                                                    <td class=\"align-middle text-center\">{{ idx }}</td>
                                                    {% for dt,pos in posOfDate %}
                                                        <td class=\"align-middle text-right\">{{ kinshuDtl[pos]|price }}</td>
                                                    {% endfor %}
                                                    <td>&nbsp;</td>
                                                    <td class=\"align-middle text-right\">{{ Order.sumByTax.sum_kinshu[idx]|price }}</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            {% endfor %}
                                            <!--
                                            <tr class=\"paymentDetail\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">現金</td>
                                                {% for dt,pos in posOfDate %}
                                                    <td class=\"align-middle text-right\">{{ Order.kingaku_genkin[pos]|price }}</td>
                                                {% endfor %}
                                                <td colspan=\"3\">&nbsp;</td>
                                            </tr>
                                            <tr class=\"paymentDetail\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">FC電子マネー</td>
                                                {% for dt,pos in posOfDate %}
                                                    <td class=\"align-middle text-right\">{{ Order.kingaku_denshi[pos]|price }}</td>
                                                {% endfor %}
                                                <td colspan=\"3\">&nbsp;</td>
                                            </tr>
                                            <tr class=\"paymentDetail\">
                                                <td colspan=\"2\">&nbsp;</td>
                                                <td class=\"align-middle text-center\">クレジット</td>
                                                {% for dt,pos in posOfDate %}
                                                    <td class=\"align-middle text-right\">{{ Order.kingaku_credit[pos]|price }}</td>
                                                {% endfor %}
                                                <td colspan=\"3\">&nbsp;</td>
                                            </tr>
                                            -->
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
", "@admin/Order/sum_tenpo_bumon.twig", "/var/www/htdocs/ec922501/app/template/admin/Order/sum_tenpo_bumon.twig");
    }
}
