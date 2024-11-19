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

/* @admin/Product/index.twig */
class __TwigTemplate_28d14fe423144e3494ee129e84bc8e6ecfc01728686ebe712b3917305bb7cb2a extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/index.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/index.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
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
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
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
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 48, $this->source); })()), "locale", [], "any", false, false, false, 48), "html", null, true);
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

            \$('#bulkDelete').on('click', function() {

                var modal = \$('#bulkDeleteModal');

                // 削除中のUI変更処理
                modal.find('button').attr('disabled', 'disabled');
                \$('.modal-body p', modal).text(\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__in_progress"), "html", null, true);
        echo "\");
                \$('.progress', modal).show();

                var checkedList = \$('input[type=checkbox][data-delete-url]:checked');
                var totalCount = checkedList.length;
                var currentCount = 0;

                var promises = checkedList.map(function() {
                    return \$.ajax({
                        'url': \$(this).data('delete-url'),
                        'type': 'delete',
                        'data': {'_token': \$(this).attr('token-for-anchor')}
                    }).always(function() {
                        \$('.progress-bar', modal).css('width', (++currentCount / totalCount * 100) + '%');
                    });
                });

                var addError = function(errorMessage) {
                    \$('<li><span class=\"badge badge-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(errorMessage))
                        .appendTo('#bulkErrors');
                };

                \$.when.apply(\$, promises)
                    .done(function() {
                        // 削除できなかった場合はエラーメッセージを表示
                        var args = promises.length === 1 ? [arguments[0]] : [].slice.call(arguments).map(function(result) {
                            return result[0];
                        });
                        args.filter(function(result) {
                            return result.success === false;
                        }).forEach(function(result) {
                            addError(result.message);
                        });
                    })
                    .fail(function() {
                        // システムエラー
                        addError(\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__system_error"), "html", null, true);
        echo "\");
                    })
                    .always(function() {
                        \$('.progress', modal).hide();
                        \$('.modal-body p', modal).text(\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__complete_message"), "html", null, true);
        echo "\");
                        modal.find('button').removeAttr('disabled').toggle();
                    })
            });

            \$('#bulkDeleteDone').on('click', function() {
                location.reload(true);
            });

            toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#trigger_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#trigger_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#form_bulk').find('.action-submit').on('click', function(event) {
                event.preventDefault();
                var form = \$(this).closest('form');
                if (!form.find('input:checkbox[name^=\"ids\"]:checked').length) {
                    ";
        // line 139
        echo "                    alert('please check');
                    return false;
                }

                \$('<input />').attr('type', 'hidden').attr('name', '";
        // line 143
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
        echo "')
                    .val(\$(this).attr('token-for-anchor'))
                    .appendTo(form);
                form.attr('action', \$(this).data('action')).submit();
                return false;
            });

            var dataClass = [];
            var modalClass = \$('#productClassesModal');
            \$('form#form_bulk').on('click', 'table.table button[data-class-url]', function() {
                var btnClass = \$(this);
                btnClass.attr('disabled', true);
                var productId = btnClass.data('product-id');

                if (dataClass[productId] != undefined) {
                    renderClass(dataClass[productId], btnClass);
                    return;
                }

                \$.ajax({
                    url: btnClass.data('class-load'),
                    type: 'GET',
                }).done(function(data) {
                    dataClass[productId] = data;
                    renderClass(dataClass[productId], btnClass);
                }).fail(function() {
                    alert('Failed');
                });
            });

            // Append html and show popup
            function renderClass(data, btnClass) {
                \$('div.modal-body', modalClass).html(data);
                \$('h5.modal-title', modalClass).text(btnClass.data('message'));
                \$('a.btn-ec-conversion', modalClass).attr('href', btnClass.data('class-url'));
                modalClass.modal('show');
                btnClass.attr('disabled', false);
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 185
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 186
        echo "    <div class=\"c-outsideBlock\">
        <form id='search_form' method=\"post\" action=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product");
        echo "\">
            ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 188, $this->source); })()), "_token", [], "any", false, false, false, 188), 'widget');
        echo "
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">

                    <div class=\"col-4\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 195, $this->source); })()), "id", [], "any", false, false, false, 195), 'widget');
        echo "
                            ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 196, $this->source); })()), "id", [], "any", false, false, false, 196), 'errors');
        echo "
                        </div>
                        <div class=\"d-inline-block mb-3\" data-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span
                                        class=\"font-weight-bold\">";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-4 order-search\">
                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.saiji_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.saiji_id_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                        ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 206, $this->source); })()), "saiji_id", [], "any", false, false, false, 206), 'widget');
        echo "
                        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 207, $this->source); })()), "saiji_id", [], "any", false, false, false, 207), 'errors');
        echo "
                    </div>
                    <div class=\"col-4 order-search\">
                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.bumon_id_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.bumon_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 211, $this->source); })()), "bumon_id", [], "any", false, false, false, 211), 'widget');
        echo "
                        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 212, $this->source); })()), "bumon_id", [], "any", false, false, false, 212), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse";
        // line 216
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 216, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6\">
                        <div class=\"form-row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category"), "html", null, true);
        echo "</label>
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 222, $this->source); })()), "category_id", [], "any", false, false, false, 222), 'widget');
        echo "
                                ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 223, $this->source); })()), "category_id", [], "any", false, false, false, 223), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status"), "html", null, true);
        echo "</p>
                                ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 229, $this->source); })()), "status", [], "any", false, false, false, 229), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 230, $this->source); })()), "status", [], "any", false, false, false, 230), 'errors', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form-row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock__short"), "html", null, true);
        echo "</p>
                                ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 236, $this->source); })()), "stock", [], "any", false, false, false, 236), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 237, $this->source); })()), "stock", [], "any", false, false, false, 237), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">
                                ";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "
                            </label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 249
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 249, $this->source); })()), "create_datetime_start", [], "any", false, false, false, 249), 'widget');
        echo "
                                    ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 250, $this->source); })()), "create_datetime_start", [], "any", false, false, false, 250), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    ";
        // line 255
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 255, $this->source); })()), "create_datetime_end", [], "any", false, false, false, 255), 'widget');
        echo "
                                    ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 256, $this->source); })()), "create_datetime_end", [], "any", false, false, false, 256), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 265
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 265, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 265), 'widget');
        echo "
                                    ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 266, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 266), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto\"><span>";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 270, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 270), 'widget');
        echo "
                                    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 271, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 271), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 278
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 278, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 278), "eccube_form_options", [], "any", false, false, false, 278), "auto_render", [], "any", false, false, false, 278); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 279
            echo "                    ";
            // line 280
            echo "                    <div class=\"row mb-2\">
                        ";
            // line 281
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 281), "eccube_form_options", [], "any", false, false, false, 281), "form_theme", [], "any", false, false, false, 281)) {
                // line 282
                echo "                            ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 282), "eccube_form_options", [], "any", false, false, false, 282), "form_theme", [], "any", false, false, false, 282)], true);
                // line 283
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                        ";
            } else {
                // line 285
                echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                // line 287
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 287), "label", [], "any", false, false, false, 287)), "html", null, true);
                echo "</label>
                                    ";
                // line 288
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                    ";
                // line 289
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 293
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                ";
        // line 298
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 298, $this->source); })())) {
            // line 299
            echo "                    <span class=\"font-weight-bold ml-2\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 299, $this->source); })()), "totalItemCount", [], "any", false, false, false, 299)]);
            echo "</span>
                ";
        }
        // line 301
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 303
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 303, $this->source); })())], true, true);
        echo "
            </div>
        </form>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 310
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 310, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 310, $this->source); })()), "totalItemCount", [], "any", false, false, false, 310))) {
            // line 311
            echo "                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-5\">
                                <div id=\"btn_bulk\" class=\"d-none\">
                                    <label class=\"mr-2\">";
            // line 315
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_actions"), "html", null, true);
            echo "</label>
                                    <div class=\"btn-group mr-2\" role=\"group\">
                                        <button ";
            // line 317
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>";
            // line 318
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__show"), "html", null, true);
            echo "</span>
                                        </button>
                                        <button ";
            // line 320
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_HIDE")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__hide"), "html", null, true);
            echo "</span>
                                        </button>
                                    </div>
                                    <button ";
            // line 324
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_ABOLISHED")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular mr-2 action-submit\">
                                        ";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__abolished"), "html", null, true);
            echo "
                                    </button>
                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#bulkDeleteModal\" class=\"btn btn-ec-delete\">";
            // line 327
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete"), "html", null, true);
            echo "</button>
                                </div>
                            </div>
                            <div class=\"col-6 text-right\">
                                <div class=\"d-inline-block mr-2\">
                                    <div>
                                        <select class=\"custom-select\" onchange=\"location = this.value;\">
                                            ";
            // line 334
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 334, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 335
                echo "                                                <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 335) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 335, $this->source); })()))) {
                    echo "selected=\"\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 335)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 335)]), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 337
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 342
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_export");
            echo "\">
                                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>";
            // line 343
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 345
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_PRODUCT")]), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-cog mr-1 text-secondary\"></i><span>";
            // line 346
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 348
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_export4import");
            echo "\">
                                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>";
            // line 349
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("更新用CSV"), "html", null, true);
            echo "</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pl-3 pt-2 pb-2\">
                                            <input type=\"checkbox\" name=\"filter\" value=\"open\" id=\"trigger_check_all\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 363
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image__short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 364
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 365
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 366
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 367
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price_tax"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 368
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.bumon"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 369
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</th>
                                    ";
            // line 370
            if ((twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_label_flg_use", [], "any", true, true, false, 370) && (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 370, $this->source); })()), "hdn_label_flg_use", [], "any", false, false, false, 370) == true))) {
                // line 371
                echo "                                        <th class=\"border-top-0 pt-2 pb-2\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.label_flg"), "html", null, true);
                echo "</th>
                                    ";
            }
            // line 373
            echo "                                    ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_wari_use", [], "any", true, true, false, 373) || (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 373, $this->source); })()), "hdn_wari_use", [], "any", false, false, false, 373) == true))) {
                // line 374
                echo "                                        <th class=\"border-top-0 pt-2 pb-2\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.fc"), "html", null, true);
                echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
                // line 375
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sya"), "html", null, true);
                echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
                // line 376
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.haya"), "html", null, true);
                echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
                // line 377
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.matome"), "html", null, true);
                echo "</th>
                                    ";
            }
            // line 379
            echo "                                        <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.status"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 380
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 381
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 pr-3\" colspan=\"3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 386
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 386, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 387
                echo "                                        <tr id=\"ex-product-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 387), "html", null, true);
                echo "\">
                                            <td class=\"align-middle pl-3\">
                                                <input type=\"checkbox\" name=\"ids[]\" value=\"";
                // line 389
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 389), "html", null, true);
                echo "\" id=\"check_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 389), "html", null, true);
                echo "\" data-delete-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 389)]), "html", null, true);
                echo "\">
                                            </td>
                                            ";
                // line 392
                echo "                                            <td class=\"align-middle\">
                                                <a href=\"";
                // line 393
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 393)]), "html", null, true);
                echo "\">
                                                    <img src=\"";
                // line 394
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "mainFileName", [], "any", false, false, false, 394)), "save_image"), "html", null, true);
                echo "\"
                                                         style=\"max-width: 50px\">
                                                </a>
                                            </td>
                                            <td class=\"align-middle\"><a
                                                        href=\"";
                // line 399
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 399)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 399), "html", null, true);
                echo "</a>
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 402
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 402), "html", null, true);
                echo "
                                                ";
                // line 403
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 403) != twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, false, 403))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, false, 403), "html", null, true);
                    echo "
                                                ";
                }
                // line 405
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 407
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "price02_min", [], "any", false, false, false, 407)), "html", null, true);
                echo "
                                                ";
                // line 408
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "price02_min", [], "any", false, false, false, 408) != twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, false, 408))) {
                    // line 409
                    echo "                                                    <br>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, false, 409)), "html", null, true);
                    echo "
                                                ";
                }
                // line 411
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 413
                echo twig_escape_filter($this->env, twig_round((((twig_get_attribute($this->env, $this->source, $context["Product"], "Price02IncTaxMax", [], "any", false, false, false, 413) - twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, false, 413)) / twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, false, 413)) * 100)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 416
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "Bumon", [], "any", false, false, false, 416), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 419
                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 419)) {
                    // line 420
                    echo "                                                    <button type=\"button\" class=\"btn page-link text-dark d-inline-block\"
                                                            data-product-id=\"";
                    // line 421
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 421), "html", null, true);
                    echo "\"
                                                            data-message=\"";
                    // line 422
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_product_class__confirm_title", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 422)]), "html", null, true);
                    echo "\"
                                                            data-class-load=\"";
                    // line 423
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_classes_load", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 423)]), "html", null, true);
                    echo "\"
                                                            data-class-url=\"";
                    // line 424
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 424), "return_product_list" => true]), "html", null, true);
                    echo "\">
                                                        ";
                    // line 425
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm"), "html", null, true);
                    echo "
                                                    </button>
                                                ";
                } else {
                    // line 428
                    echo "                                                    ";
                    // line 429
                    echo "                                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "stockunlimited_min", [], "any", false, false, false, 429)) {
                        // line 430
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 432
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "stock_min", [], "any", false, false, false, 432), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 434
                    echo "                                                ";
                }
                // line 435
                echo "                                            </td>
                                        ";
                // line 436
                if ((twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_label_flg_use", [], "any", true, true, false, 436) && (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 436, $this->source); })()), "hdn_label_flg_use", [], "any", false, false, false, 436) == true))) {
                    // line 437
                    echo "                                            <td class=\"align-middle\">
                                                ";
                    // line 438
                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "label_flg", [], "any", false, false, false, 438) == true)) {
                        // line 439
                        echo "                                                    ○
                                                ";
                    } else {
                        // line 441
                        echo "                                                    -
                                                ";
                    }
                    // line 443
                    echo "                                            </td>
                                        ";
                }
                // line 445
                echo "                                        ";
                if (( !twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_wari_use", [], "any", true, true, false, 445) || (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 445, $this->source); })()), "hdn_wari_use", [], "any", false, false, false, 445) == true))) {
                    // line 446
                    echo "                                            <td class=\"align-middle\">
                                                ";
                    // line 447
                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "wari_a_flg", [], "any", false, false, false, 447) == true)) {
                        // line 448
                        echo "                                                    ○
                                                ";
                    } else {
                        // line 450
                        echo "                                                    -
                                                ";
                    }
                    // line 452
                    echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                    // line 454
                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "wari_b_flg", [], "any", false, false, false, 454) == true)) {
                        // line 455
                        echo "                                                    ○
                                                ";
                    } else {
                        // line 457
                        echo "                                                    -
                                                ";
                    }
                    // line 459
                    echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                    // line 461
                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "wari_kikan_flg", [], "any", false, false, false, 461) == true)) {
                        // line 462
                        echo "                                                    ○
                                                ";
                    } else {
                        // line 464
                        echo "                                                    -
                                                ";
                    }
                    // line 466
                    echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                    // line 468
                    if ((twig_get_attribute($this->env, $this->source, $context["Product"], "wari_matome_flg", [], "any", false, false, false, 468) == true)) {
                        // line 469
                        echo "                                                    ○
                                                ";
                    } else {
                        // line 471
                        echo "                                                    -
                                                ";
                    }
                    // line 473
                    echo "                                            </td>
                                        ";
                }
                // line 475
                echo "                                            <td class=\"align-middle\">
                                                ";
                // line 476
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "status", [], "any", false, false, false, 476), "name", [], "any", false, false, false, 476) == "非公開")) {
                    // line 477
                    echo "                                                    非
                                                ";
                }
                // line 479
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 481
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "create_date", [], "any", false, false, false, 481)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 484
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "update_date", [], "any", false, false, false, 484)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle pr-3\" colspan=\"3\">
                                                <div class=\"text-right\">
                                                    <div class=\"px-1 d-inline-block text-center\" data-tooltip=\"true\"
                                                         data-placement=\"top\"
                                                         title=\"";
                // line 490
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.display"), "html", null, true);
                echo "\"><a class=\"btn btn-ec-actionIcon\"
                                                                                                       href=\"";
                // line 491
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 491)]), "html", null, true);
                echo "\"
                                                                                                       target=\"_blank\"><i
                                                                    class=\"fa fa-eye fa-lg text-secondary\"
                                                                    aria-hidden=\"true\"></i></a></div>
                                                    <div class=\"px-1 d-inline-block text-center\" data-tooltip=\"true\"
                                                         data-placement=\"top\"
                                                         title=\"";
                // line 497
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy"), "html", null, true);
                echo "\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                                           data-toggle=\"modal\"
                                                           data-target=\"#confirmModal-";
                // line 500
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 500), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-files-o fa-lg text-secondary\"
                                                               aria-hidden=\"true\"></i></a>
                                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 503
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 503), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-";
                // line 505
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 505), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">
                                                                            ";
                // line 510
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy__confirm_title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"close\" type=\"button\"
                                                                                data-dismiss=\"modal\"
                                                                                aria-label=\"Close\"><span
                                                                                    aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">
                                                                            ";
                // line 519
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy__confirm_message"), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                                data-dismiss=\"modal\">";
                // line 523
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                        </button>
                                                                        <a
                                                                                href=\"";
                // line 526
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_copy", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 526)]), "html", null, true);
                echo "\"
                                                                                class=\"btn btn-ec-conversion\"
                                                                                data-confirm=\"false\"
                                                                                ";
                // line 529
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                                data-method=\"post\">
                                                                            ";
                // line 531
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 542
            echo "
                                    </tbody>
                                </table>
                            </div>
                            ";
            // line 546
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 546, $this->source); })()), "totalItemCount", [], "any", false, false, false, 546) > 0)) {
                // line 547
                echo "                                <div class=\"row justify-content-md-center mb-4 pb-4\">
                                    ";
                // line 548
                $this->loadTemplate("@admin/pager.twig", "@admin/Product/index.twig", 548)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 548, $this->source); })()), "paginationData", [], "any", false, false, false, 548), "routes" => "admin_product_page"]));
                // line 549
                echo "                                </div>
                            ";
            }
            // line 551
            echo "                        </div>
                    </form>
                ";
        } elseif (        // line 553
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 553, $this->source); })())) {
            // line 554
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 556
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 557
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 561
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 563
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 564
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 565
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 569
        echo "            </div>

            <!-- 完全に削除の確認モーダル-->
            <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title font-weight-bold\">";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__confirm_title"), "html", null, true);
        echo "</h5>
                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                        </div>
                        <div class=\"modal-body text-left\">
                            <p class=\"text-left\">";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__confirm_message"), "html", null, true);
        echo "</p>
                            <ul id=\"bulkErrors\"></ul>
                            <div class=\"progress\" style=\"display: none\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-ec-delete\" type=\"button\" id=\"bulkDelete\">";
        // line 588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-ec-regular\" id=\"bulkDeleteDone\" style=\"display: none\" type=\"button\" data-dismiss=\"modal\">";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__complete"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"modal fade\" id=\"productClassesModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productClassesModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title font-weight-bold\">";
        // line 602
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 608
        echo "                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-v-sub\" type=\"button\" data-dismiss=\"modal\">
                        ";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                    </button>
                    <a class=\"btn btn-ec-conversion\"
                       href=\"#\">
                        ";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_product_class"), "html", null, true);
        echo "
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#productClassesModal -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Product/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1276 => 615,  1269 => 611,  1264 => 608,  1257 => 602,  1241 => 589,  1237 => 588,  1233 => 587,  1223 => 580,  1216 => 576,  1207 => 569,  1200 => 565,  1196 => 564,  1192 => 563,  1188 => 561,  1181 => 557,  1177 => 556,  1173 => 554,  1171 => 553,  1167 => 551,  1163 => 549,  1161 => 548,  1158 => 547,  1156 => 546,  1150 => 542,  1133 => 531,  1128 => 529,  1122 => 526,  1116 => 523,  1109 => 519,  1097 => 510,  1089 => 505,  1084 => 503,  1078 => 500,  1072 => 497,  1063 => 491,  1059 => 490,  1050 => 484,  1044 => 481,  1040 => 479,  1036 => 477,  1034 => 476,  1031 => 475,  1027 => 473,  1023 => 471,  1019 => 469,  1017 => 468,  1013 => 466,  1009 => 464,  1005 => 462,  1003 => 461,  999 => 459,  995 => 457,  991 => 455,  989 => 454,  985 => 452,  981 => 450,  977 => 448,  975 => 447,  972 => 446,  969 => 445,  965 => 443,  961 => 441,  957 => 439,  955 => 438,  952 => 437,  950 => 436,  947 => 435,  944 => 434,  938 => 432,  932 => 430,  929 => 429,  927 => 428,  921 => 425,  917 => 424,  913 => 423,  909 => 422,  905 => 421,  902 => 420,  900 => 419,  894 => 416,  888 => 413,  884 => 411,  877 => 409,  875 => 408,  871 => 407,  867 => 405,  860 => 403,  856 => 402,  848 => 399,  840 => 394,  836 => 393,  833 => 392,  824 => 389,  818 => 387,  814 => 386,  806 => 381,  802 => 380,  797 => 379,  792 => 377,  788 => 376,  784 => 375,  779 => 374,  776 => 373,  770 => 371,  768 => 370,  764 => 369,  760 => 368,  756 => 367,  752 => 366,  748 => 365,  744 => 364,  740 => 363,  723 => 349,  719 => 348,  714 => 346,  710 => 345,  705 => 343,  701 => 342,  694 => 337,  679 => 335,  675 => 334,  665 => 327,  660 => 325,  654 => 324,  648 => 321,  642 => 320,  637 => 318,  631 => 317,  626 => 315,  620 => 311,  618 => 310,  608 => 303,  604 => 301,  598 => 299,  596 => 298,  592 => 297,  588 => 295,  581 => 293,  574 => 289,  570 => 288,  566 => 287,  562 => 285,  556 => 283,  553 => 282,  551 => 281,  548 => 280,  546 => 279,  541 => 278,  532 => 271,  528 => 270,  523 => 268,  518 => 266,  513 => 265,  507 => 261,  499 => 256,  495 => 255,  489 => 252,  484 => 250,  479 => 249,  472 => 244,  462 => 237,  458 => 236,  454 => 235,  446 => 230,  442 => 229,  438 => 228,  430 => 223,  426 => 222,  422 => 221,  414 => 216,  407 => 212,  403 => 211,  397 => 210,  391 => 207,  387 => 206,  381 => 205,  374 => 201,  366 => 196,  362 => 195,  356 => 194,  347 => 188,  343 => 187,  340 => 186,  330 => 185,  279 => 143,  273 => 139,  241 => 109,  234 => 105,  194 => 68,  171 => 48,  158 => 38,  154 => 37,  149 => 36,  139 => 35,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['product', 'product_master'] %}

{% block title %}{{ 'admin.product.product_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

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

            \$('#bulkDelete').on('click', function() {

                var modal = \$('#bulkDeleteModal');

                // 削除中のUI変更処理
                modal.find('button').attr('disabled', 'disabled');
                \$('.modal-body p', modal).text(\"{{ 'admin.product.permanently_delete__in_progress'|trans }}\");
                \$('.progress', modal).show();

                var checkedList = \$('input[type=checkbox][data-delete-url]:checked');
                var totalCount = checkedList.length;
                var currentCount = 0;

                var promises = checkedList.map(function() {
                    return \$.ajax({
                        'url': \$(this).data('delete-url'),
                        'type': 'delete',
                        'data': {'_token': \$(this).attr('token-for-anchor')}
                    }).always(function() {
                        \$('.progress-bar', modal).css('width', (++currentCount / totalCount * 100) + '%');
                    });
                });

                var addError = function(errorMessage) {
                    \$('<li><span class=\"badge badge-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(errorMessage))
                        .appendTo('#bulkErrors');
                };

                \$.when.apply(\$, promises)
                    .done(function() {
                        // 削除できなかった場合はエラーメッセージを表示
                        var args = promises.length === 1 ? [arguments[0]] : [].slice.call(arguments).map(function(result) {
                            return result[0];
                        });
                        args.filter(function(result) {
                            return result.success === false;
                        }).forEach(function(result) {
                            addError(result.message);
                        });
                    })
                    .fail(function() {
                        // システムエラー
                        addError(\"{{ 'admin.product.permanently_delete__system_error'|trans }}\");
                    })
                    .always(function() {
                        \$('.progress', modal).hide();
                        \$('.modal-body p', modal).text(\"{{ 'admin.product.permanently_delete__complete_message'|trans }}\");
                        modal.find('button').removeAttr('disabled').toggle();
                    })
            });

            \$('#bulkDeleteDone').on('click', function() {
                location.reload(true);
            });

            toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#trigger_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#trigger_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#form_bulk').find('.action-submit').on('click', function(event) {
                event.preventDefault();
                var form = \$(this).closest('form');
                if (!form.find('input:checkbox[name^=\"ids\"]:checked').length) {
                    {# TODO: should use modal instead of alert #}
                    alert('please check');
                    return false;
                }

                \$('<input />').attr('type', 'hidden').attr('name', '{{ constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME') }}')
                    .val(\$(this).attr('token-for-anchor'))
                    .appendTo(form);
                form.attr('action', \$(this).data('action')).submit();
                return false;
            });

            var dataClass = [];
            var modalClass = \$('#productClassesModal');
            \$('form#form_bulk').on('click', 'table.table button[data-class-url]', function() {
                var btnClass = \$(this);
                btnClass.attr('disabled', true);
                var productId = btnClass.data('product-id');

                if (dataClass[productId] != undefined) {
                    renderClass(dataClass[productId], btnClass);
                    return;
                }

                \$.ajax({
                    url: btnClass.data('class-load'),
                    type: 'GET',
                }).done(function(data) {
                    dataClass[productId] = data;
                    renderClass(dataClass[productId], btnClass);
                }).fail(function() {
                    alert('Failed');
                });
            });

            // Append html and show popup
            function renderClass(data, btnClass) {
                \$('div.modal-body', modalClass).html(data);
                \$('h5.modal-title', modalClass).text(btnClass.data('message'));
                \$('a.btn-ec-conversion', modalClass).attr('href', btnClass.data('class-url'));
                modalClass.modal('show');
                btnClass.attr('disabled', false);
            }
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-outsideBlock\">
        <form id='search_form' method=\"post\" action=\"{{ url('admin_product') }}\">
            {{ form_widget(searchForm._token) }}
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">

                    <div class=\"col-4\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.multi_search_label'|trans }}\">{{ 'admin.product.multi_search_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            {{ form_widget(searchForm.id) }}
                            {{ form_errors(searchForm.id) }}
                        </div>
                        <div class=\"d-inline-block mb-3\" data-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span
                                        class=\"font-weight-bold\">{{ 'admin.common.search_detail'|trans }}</span></a>
                        </div>
                    </div>
                    <div class=\"col-4 order-search\">
                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.saiji_id_label'|trans }}\">{{ 'admin.order.saiji_id_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                        {{ form_widget(searchForm.saiji_id) }}
                        {{ form_errors(searchForm.saiji_id) }}
                    </div>
                    <div class=\"col-4 order-search\">
                        <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.order.bumon_id_label'|trans }}\">{{ 'admin.order.bumon_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                        {{ form_widget(searchForm.bumon_id) }}
                        {{ form_errors(searchForm.bumon_id) }}
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse{{ has_errors ? ' show' }}\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6\">
                        <div class=\"form-row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">{{ 'admin.product.category'|trans }}</label>
                                {{ form_widget(searchForm.category_id) }}
                                {{ form_errors(searchForm.category_id) }}
                            </div>
                        </div>
                        <div class=\"form-row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.product.display_status'|trans }}</p>
                                {{ form_widget(searchForm.status, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.status, {'label_attr': {'class': 'checkbox-inline'}}) }}
                            </div>
                        </div>
                        <div class=\"form-row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.product.stock__short'|trans }}</p>
                                {{ form_widget(searchForm.stock, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.stock) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">
                                {{ 'admin.common.create_date'|trans }}
                            </label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {# TODO: カレンダー表示の調整 #}
                                    {{ form_widget(searchForm.create_datetime_start) }}
                                    {{ form_errors(searchForm.create_datetime_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span>
                                </div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.create_datetime_end) }}
                                    {{ form_errors(searchForm.create_datetime_end) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">{{ 'admin.common.update_date'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {# TODO: カレンダー表示の調整 #}
                                    {{ form_widget(searchForm.update_datetime_start) }}
                                    {{ form_errors(searchForm.update_datetime_start) }}
                                </div>
                                <div class=\"col-auto\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.update_datetime_end) }}
                                    {{ form_errors(searchForm.update_datetime_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
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
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.search'|trans }}</button>
                {% if pagination %}
                    <span class=\"font-weight-bold ml-2\">{{ 'admin.common.search_result'|trans({\"%count%\":pagination.totalItemCount})|raw }}</span>
                {% endif %}
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                {{ include('@admin/search_items.twig', { 'form': searchForm }, ignore_missing = true) }}
            </div>
        </form>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if pagination and pagination.totalItemCount %}
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-5\">
                                <div id=\"btn_bulk\" class=\"d-none\">
                                    <label class=\"mr-2\">{{ 'admin.common.bulk_actions'|trans }}</label>
                                    <div class=\"btn-group mr-2\" role=\"group\">
                                        <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_SHOW')}) }}\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>{{ 'admin.product.display_status__show'|trans }}</span>
                                        </button>
                                        <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_HIDE')}) }}\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>{{ 'admin.product.display_status__hide'|trans }}</span>
                                        </button>
                                    </div>
                                    <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_ABOLISHED')}) }}\" class=\"btn btn-ec-regular mr-2 action-submit\">
                                        {{ 'admin.product.display_status__abolished'|trans }}
                                    </button>
                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#bulkDeleteModal\" class=\"btn btn-ec-delete\">{{ 'admin.product.permanently_delete'|trans }}</button>
                                </div>
                            </div>
                            <div class=\"col-6 text-right\">
                                <div class=\"d-inline-block mr-2\">
                                    <div>
                                        <select class=\"custom-select\" onchange=\"location = this.value;\">
                                            {% for pageMax in pageMaxis %}
                                                <option {% if pageMax.name == page_count %}selected=\"\"{% endif %} value=\"{{ path('admin_product_page', {'page_no': 1, 'page_count': pageMax.name}) }}\">{{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_export') }}\">
                                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>{{ 'admin.common.csv_download'|trans }}</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_PRODUCT') }) }}\">
                                            <i class=\"fa fa-cog mr-1 text-secondary\"></i><span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_export4import') }}\">
                                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>{{ '更新用CSV'|trans }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pl-3 pt-2 pb-2\">
                                            <input type=\"checkbox\" name=\"filter\" value=\"open\" id=\"trigger_check_all\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.image__short'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.name'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.price'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.price_tax'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.bumon'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.stock'|trans }}</th>
                                    {% if eccube_config.hdn_label_flg_use is defined and eccube_config.hdn_label_flg_use == true %}
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.label_flg'|trans }}</th>
                                    {% endif %}
                                    {% if eccube_config.hdn_wari_use is not defined or eccube_config.hdn_wari_use == true %}
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.fc'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.sya'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.haya'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.matome'|trans }}</th>
                                    {% endif %}
                                        <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">{{ 'admin.product.status'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.common.create_date'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.common.update_date'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 pr-3\" colspan=\"3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for Product in pagination %}
                                        <tr id=\"ex-product-{{ Product.id }}\">
                                            <td class=\"align-middle pl-3\">
                                                <input type=\"checkbox\" name=\"ids[]\" value=\"{{ Product.id }}\" id=\"check_{{ Product.id }}\" data-delete-url=\"{{ url('admin_product_product_delete', { id: Product.id }) }}\">
                                            </td>
                                            {# TODO: 画像のサイズをベタ指定しているので、styleguide側を直す #}
                                            <td class=\"align-middle\">
                                                <a href=\"{{ url('admin_product_product_edit', { id : Product.id }) }}\">
                                                    <img src=\"{{ asset(Product.mainFileName|no_image_product, 'save_image') }}\"
                                                         style=\"max-width: 50px\">
                                                </a>
                                            </td>
                                            <td class=\"align-middle\"><a
                                                        href=\"{{ url('admin_product_product_edit', { id : Product.id }) }}\">{{ Product.name }}</a>
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.code_min }}
                                                {% if Product.code_min != Product.code_max %}{{ 'admin.common.separator__range'|trans }}{{ Product.code_max }}
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.price02_min|price }}
                                                {% if Product.price02_min != Product.price02_max %}
                                                    <br>{{ 'admin.common.separator__range'|trans }}{{ Product.price02_max|price }}
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ ((Product.Price02IncTaxMax - Product.price02_max) / Product.price02_max * 100)|round }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.Bumon }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {% if Product.hasProductClass %}
                                                    <button type=\"button\" class=\"btn page-link text-dark d-inline-block\"
                                                            data-product-id=\"{{ Product.id }}\"
                                                            data-message=\"{{ 'admin.product.move_to_product_class__confirm_title'|trans({'%name%': Product.name}) }}\"
                                                            data-class-load=\"{{ url('admin_product_classes_load', { 'id' : Product.id }) }}\"
                                                            data-class-url=\"{{ url('admin_product_product_class', { 'id' : Product.id, 'return_product_list' : true }) }}\">
                                                        {{ 'admin.product.product_class__confirm'|trans }}
                                                    </button>
                                                {% else %}
                                                    {# 規格なし商品 は在庫数を表示 #}
                                                    {% if Product.stockunlimited_min %}
                                                        {{ 'admin.product.stock_unlimited__short'|trans }}
                                                    {% else %}
                                                        {{ Product.stock_min }}
                                                    {% endif %}
                                                {% endif %}
                                            </td>
                                        {% if eccube_config.hdn_label_flg_use is defined and eccube_config.hdn_label_flg_use == true %}
                                            <td class=\"align-middle\">
                                                {% if Product.label_flg == TRUE %}
                                                    ○
                                                {% else %}
                                                    -
                                                {% endif %}
                                            </td>
                                        {% endif %}
                                        {% if eccube_config.hdn_wari_use is not defined or eccube_config.hdn_wari_use == true %}
                                            <td class=\"align-middle\">
                                                {% if Product.wari_a_flg == TRUE %}
                                                    ○
                                                {% else %}
                                                    -
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {% if Product.wari_b_flg == TRUE %}
                                                    ○
                                                {% else %}
                                                    -
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {% if Product.wari_kikan_flg == TRUE %}
                                                    ○
                                                {% else %}
                                                    -
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {% if Product.wari_matome_flg == TRUE %}
                                                    ○
                                                {% else %}
                                                    -
                                                {% endif %}
                                            </td>
                                        {% endif %}
                                            <td class=\"align-middle\">
                                                {% if Product.status.name == \"非公開\" %}
                                                    非
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.create_date|date_min }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.update_date|date_min }}
                                            </td>
                                            <td class=\"align-middle pr-3\" colspan=\"3\">
                                                <div class=\"text-right\">
                                                    <div class=\"px-1 d-inline-block text-center\" data-tooltip=\"true\"
                                                         data-placement=\"top\"
                                                         title=\"{{ 'admin.common.display'|trans }}\"><a class=\"btn btn-ec-actionIcon\"
                                                                                                       href=\"{{ url('product_detail', {id:Product.id}) }}\"
                                                                                                       target=\"_blank\"><i
                                                                    class=\"fa fa-eye fa-lg text-secondary\"
                                                                    aria-hidden=\"true\"></i></a></div>
                                                    <div class=\"px-1 d-inline-block text-center\" data-tooltip=\"true\"
                                                         data-placement=\"top\"
                                                         title=\"{{ 'admin.common.copy'|trans }}\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                                           data-toggle=\"modal\"
                                                           data-target=\"#confirmModal-{{ Product.id }}\">
                                                            <i class=\"fa fa-files-o fa-lg text-secondary\"
                                                               aria-hidden=\"true\"></i></a>
                                                        <div class=\"modal fade\" id=\"confirmModal-{{ Product.id }}\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-{{ Product.id }}\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">
                                                                            {{ 'admin.product.copy__confirm_title'|trans }}</h5>
                                                                        <button class=\"close\" type=\"button\"
                                                                                data-dismiss=\"modal\"
                                                                                aria-label=\"Close\"><span
                                                                                    aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">
                                                                            {{ 'admin.product.copy__confirm_message'|trans }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                                data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}
                                                                        </button>
                                                                        <a
                                                                                href=\"{{ url('admin_product_product_copy', {'id' : Product.id}) }}\"
                                                                                class=\"btn btn-ec-conversion\"
                                                                                data-confirm=\"false\"
                                                                                {{ csrf_token_for_anchor() }}
                                                                                data-method=\"post\">
                                                                            {{ 'admin.common.copy'|trans }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}

                                    </tbody>
                                </table>
                            </div>
                            {% if pagination.totalItemCount > 0 %}
                                <div class=\"row justify-content-md-center mb-4 pb-4\">
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_product_page' } %}
                                </div>
                            {% endif %}
                        </div>
                    </form>
                {% elseif has_errors %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_invalid_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_no_result'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_advanced_search'|trans }}</div>
                        </div>
                    </div>
                {% endif %}
            </div>

            <!-- 完全に削除の確認モーダル-->
            <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title font-weight-bold\">{{ 'admin.product.permanently_delete__confirm_title'|trans }}</h5>
                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                        </div>
                        <div class=\"modal-body text-left\">
                            <p class=\"text-left\">{{ 'admin.product.permanently_delete__confirm_message'|trans }}</p>
                            <ul id=\"bulkErrors\"></ul>
                            <div class=\"progress\" style=\"display: none\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                            <button class=\"btn btn-ec-delete\" type=\"button\" id=\"bulkDelete\">{{ 'admin.product.permanently_delete' | trans }}</button>
                            <button class=\"btn btn-ec-regular\" id=\"bulkDeleteDone\" style=\"display: none\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.product.permanently_delete__complete'|trans }}</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"modal fade\" id=\"productClassesModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productClassesModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title font-weight-bold\">{# Title #}</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {# Append data list #}
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-v-sub\" type=\"button\" data-dismiss=\"modal\">
                        {{ 'admin.common.cancel'|trans }}
                    </button>
                    <a class=\"btn btn-ec-conversion\"
                       href=\"#\">
                        {{ 'admin.product.move_to_product_class'|trans }}
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#productClassesModal -->
{% endblock %}

", "@admin/Product/index.twig", "/var/www/htdocs/ec922501/app/template/admin/Product/index.twig");
    }
}
