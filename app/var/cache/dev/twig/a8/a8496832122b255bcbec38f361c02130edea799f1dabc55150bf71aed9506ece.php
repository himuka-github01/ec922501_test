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

/* @admin/Order/sum_minou_item_02.twig */
class __TwigTemplate_d0b4f40cc095e552d003b553a6bfc2aa6ef61f383a8deb9d4fc568f6debaa749 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/sum_minou_item_02.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Order/sum_minou_item_02.twig"));

        // line 12
        $context["menus"] = [0 => "order", 1 => "order_sum_minou_item_02"];
        // line 17
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 17, $this->source); })()), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/sum_minou_item_02.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_sum_minou_item_02"), "html", null, true);
        
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
                \$('#search_form').attr('action', \"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_juchu");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_sum_minou_item_02");
        echo "\");
                \$('#list_type').val('');
                return false;
            });

            // (HDN) 出荷リスト
            \$('#btn_list_shukka').on('click', function(event) {
                event.preventDefault();
                \$('#list_type').val('shukka');
                \$('#search_form').attr('action', \"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_shukka");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_sum_minou_item_02");
        echo "\");
                \$('#list_type').val('');
                return false;
            });

            // (HDN) 未納リスト
            \$('#btn_list_minou').on('click', function(event) {
                event.preventDefault();
                \$('#list_type').val('minou');
                \$('#search_form').attr('action', \"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_list_minou");
        echo "\").submit();
                \$('#search_form').attr('action', \"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_sum_minou_item_02");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "';
    });

});
</script>

";
        // line 204
        echo twig_include($this->env, $context, "@admin/Order/confirmationModal_js.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 207
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 208
        echo "    <!--検索条件設定テーブルここから-->
    <div class=\"c-outsideBlock\">
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order_sum_minou_item_02");
        echo "\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 214, $this->source); })()), "_token", [], "any", false, false, false, 214), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 217, $this->source); })()), "saiji_id", [], "any", false, false, false, 217), 'widget');
        echo "
                            ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 218, $this->source); })()), "saiji_id", [], "any", false, false, false, 218), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 222, $this->source); })()), "tenpo_id", [], "any", false, false, false, 222), 'widget');
        echo "
                            ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 223, $this->source); })()), "tenpo_id", [], "any", false, false, false, 223), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 227, $this->source); })()), "bumon_id", [], "any", false, false, false, 227), 'widget');
        echo "
                            ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 228, $this->source); })()), "bumon_id", [], "any", false, false, false, 228), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 233, $this->source); })()), "multi", [], "any", false, false, false, 233), 'widget');
        echo "
                                ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 234, $this->source); })()), "multi", [], "any", false, false, false, 234), 'errors');
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
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 239, $this->source); })()), "status", [], "any", false, false, false, 239);
        // line 240
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 241, $this->source); })()), "children", [], "any", false, false, false, 241));
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
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 249, $this->source); })()), "vars", [], "any", false, false, false, 249), "order_count", [], "any", false, false, false, 249), $context["status_id"], [], "array", false, false, false, 249), "display", [], "any", false, false, false, 249)) {
                // line 250
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 250, $this->source); })()), "vars", [], "any", false, false, false, 250), "order_count", [], "any", false, false, false, 250), $context["status_id"], [], "array", false, false, false, 250), "count", [], "any", false, false, false, 250), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 255, $this->source); })()), "status", [], "any", false, false, false, 255), 'errors');
        echo "
                            </div>
                            <div class=\"order-search col-4\">
                                <p class=\"col-form-label\">";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</p>
                                ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 259, $this->source); })()), "payment", [], "any", false, false, false, 259), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 260, $this->source); })()), "payment", [], "any", false, false, false, 260), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 267, $this->source); })()), "order_datetime_start", [], "any", false, false, false, 267), 'widget');
        echo "
                                    ";
        // line 268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 268, $this->source); })()), "order_datetime_start", [], "any", false, false, false, 268), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\">";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                                <div class=\"col\">
                                    ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 272, $this->source); })()), "order_datetime_end", [], "any", false, false, false, 272), 'widget');
        echo "
                                    ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 273, $this->source); })()), "order_datetime_end", [], "any", false, false, false, 273), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 282, $this->source); })()), "shipping_delivery_datetime_start", [], "any", false, false, false, 282), 'widget');
        echo "
                                        ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 283, $this->source); })()), "shipping_delivery_datetime_start", [], "any", false, false, false, 283), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 289, $this->source); })()), "shipping_delivery_datetime_end", [], "any", false, false, false, 289), 'widget');
        echo "
                                        ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 290, $this->source); })()), "shipping_delivery_datetime_end", [], "any", false, false, false, 290), 'errors');
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
        $context["statusForm"] = twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 299, $this->source); })()), "status", [], "any", false, false, false, 299);
        // line 300
        echo "                                    <!-- 各対応状況の件数を表示する -->
                                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 301, $this->source); })()), "children", [], "any", false, false, false, 301));
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
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 309, $this->source); })()), "vars", [], "any", false, false, false, 309), "order_count", [], "any", false, false, false, 309), $context["status_id"], [], "array", false, false, false, 309), "display", [], "any", false, false, false, 309)) {
                // line 310
                echo "(<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_order", ["order_status_id" => $context["status_id"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statusForm"]) || array_key_exists("statusForm", $context) ? $context["statusForm"] : (function () { throw new RuntimeError('Variable "statusForm" does not exist.', 310, $this->source); })()), "vars", [], "any", false, false, false, 310), "order_count", [], "any", false, false, false, 310), $context["status_id"], [], "array", false, false, false, 310), "count", [], "any", false, false, false, 310), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 315, $this->source); })()), "status", [], "any", false, false, false, 315), 'errors');
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
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 330, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row\">
                    <div class=\"col\">
                        <label class=\"col-form-label\">";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer_name"), "html", null, true);
        echo "</label>
                        ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 334, $this->source); })()), "name", [], "any", false, false, false, 334), 'widget');
        echo "
                        ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 335, $this->source); })()), "name", [], "any", false, false, false, 335), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 341, $this->source); })()), "payment", [], "any", false, false, false, 341), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 342, $this->source); })()), "payment", [], "any", false, false, false, 342), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 350, $this->source); })()), "kana", [], "any", false, false, false, 350), 'widget');
        echo "
                        ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 351, $this->source); })()), "kana", [], "any", false, false, false, 351), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 359, $this->source); })()), "company_name", [], "any", false, false, false, 359), 'widget');
        echo "
                        ";
        // line 360
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 360, $this->source); })()), "company_name", [], "any", false, false, false, 360), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 366, $this->source); })()), "payment_datetime_start", [], "any", false, false, false, 366), 'widget');
        echo "
                                ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 367, $this->source); })()), "payment_datetime_start", [], "any", false, false, false, 367), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 371, $this->source); })()), "payment_datetime_end", [], "any", false, false, false, 371), 'widget');
        echo "
                                ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 372, $this->source); })()), "payment_datetime_end", [], "any", false, false, false, 372), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 380, $this->source); })()), "email", [], "any", false, false, false, 380), 'widget');
        echo "
                        ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 381, $this->source); })()), "email", [], "any", false, false, false, 381), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 387, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 387), 'widget');
        echo "
                                ";
        // line 388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 388, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 388), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto text-center\">";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</div>
                            <div class=\"col\">
                                ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 392, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 392), 'widget');
        echo "
                                ";
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 393, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 393), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 401, $this->source); })()), "phone_number", [], "any", false, false, false, 401), 'widget');
        echo "
                        ";
        // line 402
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 402, $this->source); })()), "phone_number", [], "any", false, false, false, 402), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 410, $this->source); })()), "order_no", [], "any", false, false, false, 410), 'widget');
        echo "
                        ";
        // line 411
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 411, $this->source); })()), "order_no", [], "any", false, false, false, 411), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 418, $this->source); })()), "payment_total_start", [], "any", false, false, false, 418), 'widget');
        echo "
                                    ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 419, $this->source); })()), "payment_total_start", [], "any", false, false, false, 419), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 425, $this->source); })()), "payment_total_end", [], "any", false, false, false, 425), 'widget');
        echo "
                                    ";
        // line 426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 426, $this->source); })()), "payment_total_end", [], "any", false, false, false, 426), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 437, $this->source); })()), "tracking_number", [], "any", false, false, false, 437), 'widget');
        echo "
                                ";
        // line 438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 438, $this->source); })()), "tracking_number", [], "any", false, false, false, 438), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 444, $this->source); })()), "buy_product_name", [], "any", false, false, false, 444), 'widget');
        echo "
                        ";
        // line 445
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 445, $this->source); })()), "buy_product_name", [], "any", false, false, false, 445), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 454, $this->source); })()), "shipping_mail", [], "any", false, false, false, 454), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 455, $this->source); })()), "shipping_mail", [], "any", false, false, false, 455), 'errors');
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
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_minou\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.list_minou"), "html", null, true);
        echo "</span>
                            </button>
                        </div>
                    </div>
                    <!--</div>-->
                </div>
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 488
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 488, $this->source); })())], true, true);
        echo "
            </div>
        </form>
    </div>
    <!--検索条件設定テーブルここまで-->

    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 497
        if ((isset($context["posOfTenpo"]) || array_key_exists("posOfTenpo", $context) ? $context["posOfTenpo"] : (function () { throw new RuntimeError('Variable "posOfTenpo" does not exist.', 497, $this->source); })())) {
            // line 498
            echo "                    ";
            $context["cntCols"] = twig_length_filter($this->env, (isset($context["posOfTenpo"]) || array_key_exists("posOfTenpo", $context) ? $context["posOfTenpo"] : (function () { throw new RuntimeError('Variable "posOfTenpo" does not exist.', 498, $this->source); })()));
            // line 499
            echo "
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <input type=\"hidden\" name=\"";
            // line 501
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
            echo "\">
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\" id=\"search_result\">
                                    <tbody>
                                    ";
            // line 506
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) || array_key_exists("lines", $context) ? $context["lines"] : (function () { throw new RuntimeError('Variable "lines" does not exist.', 506, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Order"]) {
                // line 507
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 507) == "header")) {
                    // line 508
                    echo "                                        <tr>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                    // line 509
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
                    echo "</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-left\">
                                                ";
                    // line 511
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 511) == null)) ? (print ("全日")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 511), "Y/m/d"), "html", null, true))));
                    echo "　
                                                【未引渡数量】
                                            </th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\" colspan=\"";
                    // line 514
                    echo twig_escape_filter($this->env, (isset($context["cntCols"]) || array_key_exists("cntCols", $context) ? $context["cntCols"] : (function () { throw new RuntimeError('Variable "cntCols" does not exist.', 514, $this->source); })()), "html", null, true);
                    echo "\">【";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 514), "html", null, true);
                    echo "】</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\"></th>
                                        </tr>
                                        <tr>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                    // line 518
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
                    echo "</th>
                                            <th class=\"border-top-0 pt-2 pb-2 text-center\">";
                    // line 519
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
                    echo "</th>
                                            ";
                    // line 520
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["posOfTenpo"]) || array_key_exists("posOfTenpo", $context) ? $context["posOfTenpo"] : (function () { throw new RuntimeError('Variable "posOfTenpo" does not exist.', 520, $this->source); })()));
                    foreach ($context['_seq'] as $context["name"] => $context["pos"]) {
                        // line 521
                        echo "                                                <th class=\"border-top-0 pt-2 pb-2 text-right\">";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "</th>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 523
                    echo "                                            <th class=\"border-top-0 pt-2 pb-2 text-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
                    echo "</th>
                                        </tr>
                                        ";
                }
                // line 526
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 526) != "header")) {
                    // line 527
                    echo "                                        <tr class='";
                    echo (((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 527) == "item")) ? ("itemLine") : ("sumLine"));
                    echo "'>
                                            <!--
                                            <td class=\"align-middle text-center pl-3\">
                                                ";
                    // line 530
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 530) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "saiji_name", [], "any", false, false, false, 530), "html", null, true))));
                    echo "
                                            </td>
                                            -->
                                            <td class=\"align-middle text-center\">
                                                ";
                    // line 534
                    (((twig_get_attribute($this->env, $this->source, $context["Order"], "bumon_name", [], "any", false, false, false, 534) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "bumon_name", [], "any", false, false, false, 534), "html", null, true))));
                    echo "
                                            </td>
                                            <td class=\"align-middle text-left\">
                                                ";
                    // line 537
                    if ((twig_get_attribute($this->env, $this->source, $context["Order"], "kbn", [], "any", false, false, false, 537) == "item")) {
                        // line 538
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "product_name", [], "any", false, false, false, 538), "html", null, true);
                        echo "<br>
                                                    <!--<span class=\"text_right\">";
                        // line 539
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "product_code", [], "any", false, false, false, 539), "html", null, true);
                        echo "</span>-->
                                                ";
                    } else {
                        // line 541
                        echo "                                                    ";
                        (((twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 541) == null)) ? (print ("全日")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Order"], "shipping_delivery_date", [], "any", false, false, false, 541), "Y/m/d"), "html", null, true))));
                        echo "　【未引渡数量】** 合計 **
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
                        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "quantity", [], "any", false, false, false, 546), $context["pos"], [], "array", false, false, false, 546) == 0)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "quantity", [], "any", false, false, false, 546), $context["pos"], [], "array", false, false, false, 546) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Order"], "shukka_quantity", [], "any", false, false, false, 546), $context["pos"], [], "array", false, false, false, 546))), "html", null, true))));
                        echo "<br/>
                                                </td>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['pos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 549
                    echo "                                            <td class=\"align-middle text-right\">
                                                    ";
                    // line 550
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["Order"], "sum_quantity", [], "any", false, false, false, 550) - twig_get_attribute($this->env, $this->source, $context["Order"], "sum_shukka_quantity", [], "any", false, false, false, 550))), "html", null, true);
                    echo "
                                            </td>
                                        </tr>
                                        ";
                }
                // line 554
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 555
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\"></div>
                            </div>
                            <div class=\"row justify-content-md-center mb-4\">
                            </div>
                        </div>
                    </form>
                    ";
            // line 564
            echo "                ";
        } elseif ((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 564, $this->source); })())) {
            // line 565
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 567
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 568
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
            // line 572
            echo "                ";
        } else {
            // line 573
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 575
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_set_saiji"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 576
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 577
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 581
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
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail"), "html", null, true);
        echo "</div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"notificationMail\">
                                        <label class=\"form-check-label notificationMail\">
                                            ";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.to_shipped__confirm_send_mail_in_same_time"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div>
                                        <div class=\"d-inline-block\" data-toggle=\"collapse\" href=\"#viewEmail\" aria-expanded=\"false\" aria-controls=\"viewEmail\"><a><i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span class=\"font-weight-bold\">";
        // line 602
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
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button id=\"bulkChange\" class=\"btn btn-ec-conversion\" type=\"button\"><!--confirmationModal_js.twig--></button>
                                <button id=\"bulkChangeComplete\" class=\"btn btn-ec-regular\" style=\"display: none\" type=\"button\">";
        // line 615
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
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_title"), "html", null, true);
        echo "</h5>
                                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                            </div>
                            <div class=\"modal-body text-left\">
                                <p class=\"text-left\">";
        // line 630
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete__confirm_message"), "html", null, true);
        echo "</p>
                                <ul id=\"bulkErrors\"></ul>
                                <div class=\"progress\" style=\"display: none\">
                                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                <button class=\"btn btn-ec-delete\" type=\"button\" id=\"btn_bulk_delete\">";
        // line 638
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
        return "@admin/Order/sum_minou_item_02.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1298 => 638,  1294 => 637,  1284 => 630,  1277 => 626,  1263 => 615,  1258 => 613,  1244 => 602,  1237 => 598,  1230 => 594,  1215 => 581,  1208 => 577,  1204 => 576,  1200 => 575,  1196 => 573,  1193 => 572,  1187 => 568,  1183 => 567,  1179 => 565,  1176 => 564,  1166 => 555,  1160 => 554,  1153 => 550,  1150 => 549,  1141 => 546,  1138 => 545,  1134 => 544,  1131 => 543,  1125 => 541,  1120 => 539,  1115 => 538,  1113 => 537,  1107 => 534,  1100 => 530,  1093 => 527,  1090 => 526,  1083 => 523,  1074 => 521,  1070 => 520,  1066 => 519,  1062 => 518,  1053 => 514,  1047 => 511,  1042 => 509,  1039 => 508,  1036 => 507,  1032 => 506,  1022 => 501,  1018 => 499,  1015 => 498,  1013 => 497,  1001 => 488,  990 => 480,  983 => 476,  976 => 472,  969 => 468,  953 => 455,  949 => 454,  945 => 453,  934 => 445,  930 => 444,  926 => 443,  918 => 438,  914 => 437,  910 => 436,  897 => 426,  893 => 425,  887 => 422,  881 => 419,  877 => 418,  870 => 414,  864 => 411,  860 => 410,  856 => 409,  846 => 402,  842 => 401,  838 => 400,  828 => 393,  824 => 392,  819 => 390,  814 => 388,  810 => 387,  804 => 384,  798 => 381,  794 => 380,  790 => 379,  780 => 372,  776 => 371,  771 => 369,  766 => 367,  762 => 366,  756 => 363,  750 => 360,  746 => 359,  742 => 358,  732 => 351,  728 => 350,  724 => 349,  714 => 342,  710 => 341,  706 => 340,  698 => 335,  694 => 334,  690 => 333,  684 => 330,  673 => 322,  663 => 315,  660 => 314,  653 => 312,  646 => 310,  644 => 309,  639 => 308,  633 => 307,  628 => 305,  624 => 304,  620 => 302,  616 => 301,  613 => 300,  611 => 299,  604 => 297,  594 => 290,  590 => 289,  584 => 286,  578 => 283,  574 => 282,  567 => 278,  559 => 273,  555 => 272,  550 => 270,  545 => 268,  541 => 267,  535 => 264,  528 => 260,  524 => 259,  520 => 258,  514 => 255,  511 => 254,  504 => 252,  497 => 250,  495 => 249,  490 => 248,  484 => 247,  479 => 245,  475 => 244,  471 => 242,  467 => 241,  464 => 240,  462 => 239,  455 => 237,  449 => 234,  445 => 233,  439 => 232,  432 => 228,  428 => 227,  422 => 226,  416 => 223,  412 => 222,  406 => 221,  400 => 218,  396 => 217,  390 => 216,  385 => 214,  378 => 210,  374 => 208,  364 => 207,  352 => 204,  343 => 198,  260 => 118,  256 => 117,  244 => 108,  240 => 107,  228 => 98,  224 => 97,  186 => 62,  173 => 52,  169 => 51,  164 => 50,  154 => 49,  115 => 20,  105 => 19,  86 => 15,  67 => 14,  56 => 11,  54 => 17,  52 => 12,  39 => 11,);
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
{% set menus = ['order', 'order_sum_minou_item_02'] %}

{% block title %}{{ 'admin.order.order_sum_minou_item_02'|trans }}{% endblock %}
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
                \$('#search_form').attr('action', \"{{ url('admin_order_list_juchu') }}\").submit();
                \$('#search_form').attr('action', \"{{ url('admin_order_sum_minou_item_02') }}\");
                \$('#list_type').val('');
                return false;
            });

            // (HDN) 出荷リスト
            \$('#btn_list_shukka').on('click', function(event) {
                event.preventDefault();
                \$('#list_type').val('shukka');
                \$('#search_form').attr('action', \"{{ url('admin_order_list_shukka') }}\").submit();
                \$('#search_form').attr('action', \"{{ url('admin_order_sum_minou_item_02') }}\");
                \$('#list_type').val('');
                return false;
            });

            // (HDN) 未納リスト
            \$('#btn_list_minou').on('click', function(event) {
                event.preventDefault();
                \$('#list_type').val('minou');
                \$('#search_form').attr('action', \"{{ url('admin_order_list_minou') }}\").submit();
                \$('#search_form').attr('action', \"{{ url('admin_order_sum_minou_item_02') }}\");
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
        <form name=\"search_form\" id=\"search_form\" method=\"POST\" action=\"{{ url('admin_order_sum_minou_item_02') }}\">
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
                            <button type=\"button\" class=\"btn btn-ec-regular\" id=\"btn_list_minou\">
                                <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                                <span>{{ 'admin.order.list_minou'|trans }}</span>
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
                                                【未引渡数量】
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
                                                {% else %}
                                                    {{ Order.shipping_delivery_date == null ? '全日' : Order.shipping_delivery_date|date(\"Y/m/d\") }}　【未引渡数量】** 合計 **
                                                {% endif %}
                                            </td>
                                            {% for name,pos in posOfTenpo %}
                                                <td class=\"align-middle text-right\">
                                                    {{ Order.quantity[pos] == 0 ? '' : ( Order.quantity[pos] - Order.shukka_quantity[pos] )|number_format }}<br/>
                                                </td>
                                            {% endfor %}
                                            <td class=\"align-middle text-right\">
                                                    {{ ( Order.sum_quantity - Order.sum_shukka_quantity )|number_format }}
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
", "@admin/Order/sum_minou_item_02.twig", "/var/www/htdocs/ec922501/app/template/admin/Order/sum_minou_item_02.twig");
    }
}
