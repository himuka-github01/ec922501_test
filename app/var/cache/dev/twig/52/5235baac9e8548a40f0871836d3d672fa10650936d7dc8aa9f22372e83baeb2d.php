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

/* @admin/Setting/Shop/delivery_edit.twig */
class __TwigTemplate_ced6ae501c4944678f070f8bf56da5f6802a95c923109a47cfaa948f75ea719a extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery_edit.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery_edit.twig"));

        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_delivery"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/delivery_edit.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_setting"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            \$('#set_fee_all').on('click', function() {
                var fee = \$('#";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "free_all", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "').val();
                if (\$.isNumeric(fee)) {
                    \$('input[name\$=\"[fee]\"]').val(fee);
                    return;
                }
                alert(\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.fee.invalid"), "html", null, true);
        echo "\");
            });
        });
    </script>
    <script>
        // 降順にソートする
        \$(function() {
            var \$items_wrapper = \$('.sortable-container');
            var \$items = \$('.sortable-item');
            \$items.sort(function(a, b) {
                return parseInt(\$(a).find('.sort-no').val()) > parseInt(\$(b).find('.sort-no').val());
            });
            \$items.each(function() {
                \$items_wrapper.append(\$(this).remove());
            })
        });

        // 並び替え後にsort noを更新
        function updateSortNo() {
            var \$items = \$('.sortable-container').find('.sortable-item');
            \$items.each(function() {
                \$(this).find('.sort-no').val(\$items.index(this) + 1);
            });
        }

        // 最初と最後の↑↓を再描画
        function redrawDisableAllows() {
            var items = \$('.sortable-item');
            items.find('a').removeClass('disabled');
            items.first().find('a.action-up').addClass('disabled');
            items.last().find('a.action-down').addClass('disabled');
        }

        // 表示順の更新を行う
        function moveSortNo() {
            updateSortNo();
            redrawDisableAllows();
        }

        \$(function() {

            var \$collectionHolder = \$('#delivery-time-group');
            var index = \$collectionHolder.find('.delivery-time-item').length;

            redrawDisableAllows();

            // お届け時間設定の新規作成ボタンでお届け時間項目を追加する
            \$('#add-delivery-time-button').on('click', function(event) {

                // 追加するお届け時間名を取得
                var deliveryTimeName = \$('#add-delivery-time-value').val();

                if (deliveryTimeName == '') {
                    return;
                }

                var prototype = \$collectionHolder.data('prototype');

                var newForm = prototype.replace(/__name__/g, index);
                var newForm = newForm.replace(/__value__/g, deliveryTimeName);

                // 要素を追加
                var \$lastRow = \$('#delivery-time-group > li:last');
                \$lastRow.after(newForm);

                // お届け時間名を入れる
                var inputId = '#delivery_delivery_times_' + index + '_delivery_time';
                \$(inputId).val(deliveryTimeName);
                \$(inputId).attr('data-origin-value', deliveryTimeName);

                // 入力欄を初期化
                \$('#add-delivery-time-value').val('');

                // 要素数をインクリメント
                index++;

                moveSortNo();
            });

            // 明細行の削除
            \$('#delivery-time-group').on('click', '.remove-delivery-time-item', function(event) {
                event.preventDefault();

                \$(this).tooltip('hide');

                // 自身の行を削除.
                \$(event.target).parents('li').remove();

                moveSortNo();
            });

            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('#delivery-time-group').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('#delivery-time-group').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 編集
            \$('#delivery-time-group').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
                current.find('.action-edit-submit').attr('disabled', false);
                current.find('.action-edit-cancel').attr('disabled', false);
            });

            // 編集決定
            \$('#delivery-time-group').on('click', 'button.action-edit-submit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).attr('data-origin-value', value);
                });
            });
            // 編集キャンセル
            \$('#delivery-time-group').on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });
            // 編集時, エラーがあれば入力欄を表示.
            \$('#delivery-time-group').find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            // 表示・非表示の切り替え
            \$('#delivery-time-group').on('click', 'a.action-visible', function(e) {
                e.preventDefault();

                var \$this = \$(this);
                var \$i = \$this.find('i');

                if (\$i.hasClass('fa-toggle-on')) {
                    \$i.addClass('fa-toggle-off');
                    \$i.removeClass('fa-toggle-on');
                    \$this.attr('data-original-title', '";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"), "html", null, true);
        echo "');
                    \$this.parents('li').find('.visible').val('0');
                } else {
                    \$i.addClass('fa-toggle-on');
                    \$i.removeClass('fa-toggle-off');
                    \$this.attr('data-original-title', '";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
        echo "');
                    \$this.parents('li').find('.visible').val('1');
                }
                // ツールチップの表示を更新
                \$this.tooltip('show');


            });

            // FIXME 明細行のツールチップが表示されないため, ここでツールチップを有効にしている.
            \$('[data-tooltip=\"true\"]').tooltip();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 223
        echo "    <form method=\"post\" action=\"";
        (((isset($context["delivery_id"]) || array_key_exists("delivery_id", $context) ? $context["delivery_id"] : (function () { throw new RuntimeError('Variable "delivery_id" does not exist.', 223, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_edit", ["id" => (isset($context["delivery_id"]) || array_key_exists("delivery_id", $context) ? $context["delivery_id"] : (function () { throw new RuntimeError('Variable "delivery_id" does not exist.', 223, $this->source); })())]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery_new"))));
        echo "\">
        ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "_token", [], "any", false, false, false, 224), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.base_info"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_name"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "name", [], "any", false, false, false, 234), 'widget');
        echo "
                                    ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "name", [], "any", false, false, false, 235), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_sevice_name"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "service_name", [], "any", false, false, false, 241), 'widget');
        echo "
                                    ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "service_name", [], "any", false, false, false, 242), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.tracking_number_url"), "html", null, true);
        echo "\">
                                        <span>";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.tracking_number_url"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "confirm_url", [], "any", false, false, false, 253), 'widget');
        echo "
                                    ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "confirm_url", [], "any", false, false, false, 254), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.sale_type"), "html", null, true);
        echo "\">
                                        <span>";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.sale_type"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "sale_type", [], "any", false, false, false, 266), 'widget');
        echo "
                                    ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "sale_type", [], "any", false, false, false, 267), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 271
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 271), "eccube_form_options", [], "any", false, false, false, 271), "auto_render", [], "any", false, false, false, 271); }));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 272
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 272), "eccube_form_options", [], "any", false, false, false, 272), "form_theme", [], "any", false, false, false, 272)) {
                // line 273
                echo "                                    ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 273), "eccube_form_options", [], "any", false, false, false, 273), "form_theme", [], "any", false, false, false, 273)], true);
                // line 274
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                                ";
            } else {
                // line 276
                echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                // line 277
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 277), "label", [], "any", false, false, false, 277)), "html", null, true);
                echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                // line 279
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                echo "
                                            ";
                // line 280
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            }
            // line 284
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.payment_method"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-payment\" class=\"card-body\">
                            <div>
                                ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "payments", [], "any", false, false, false, 291), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "payments", [], "any", false, false, false, 292), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_time_setting"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-time\" class=\"card-body p-0\">
                            <div class=\"card rounded border-0 mb-2\">
                                <ul id=\"delivery-time-group\" class=\"list-group list-group-flush sortable-container\"
                                    data-prototype=\"";
        // line 301
        ob_start();
        echo twig_include($this->env, $context, "@admin/Setting/Shop/delivery_time_prototype.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), "delivery_times", [], "any", false, false, false, 301), "vars", [], "any", false, false, false, 301), "prototype", [], "any", false, false, false, 301)]);
        $___internal_b27bfd1a2d5931af9a2d2e788d0fd60094c804336ca0ca2850bef479360b345f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_b27bfd1a2d5931af9a2d2e788d0fd60094c804336ca0ca2850bef479360b345f_);
        echo "\">
                                    <li class=\"list-group-item\">
                                        <div class=\"form-row\">
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <input id=\"add-delivery-time-value\" class=\"form-control\" type=\"text\">
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <button id=\"add-delivery-time-button\" class=\"btn btn-ec-regular\" type=\"button\">";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                            </div>
                                        </div>
                                    </li>
                                    ";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "delivery_times", [], "any", false, false, false, 312));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 313
            echo "                                        ";
            echo twig_include($this->env, $context, "@admin/Setting/Shop/delivery_time_prototype.twig", ["form" => $context["child"]]);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class=\"mb-4\">";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.delivery_fee_by_pref"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-delivery-fee\" class=\"card-body p-0\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block align-middle\" data-tooltip=\"true\"
                                                 data-placement=\"top\" title=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.apply_to_pref"), "html", null, true);
        echo "\"><span
                                                        class=\"card-title\">";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.apply_to_pref__title"), "html", null, true);
        echo "</span><i
                                                        class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                        </div>
                                        <div class=\"col-3\">
                                            ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "free_all", [], "any", false, false, false, 333), 'widget');
        echo "
                                            ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "free_all", [], "any", false, false, false, 334), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto\">
                                            <button id=\"set_fee_all\" class=\"btn btn-ec-regular\" type=\"button\">";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery.apply_to_pref__button"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "delivery_fees", [], "any", false, false, false, 342));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 343
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 343) % 2) != 0)) {
                echo "<div class=\"row mb-2\">";
            }
            // line 344
            echo "                                        <div class=\"col";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 344)) ? ("-6") : (""));
            echo "\">
                                            <div class=\"row\">
                                                <div class=\"col-2\">
                                                    <label>";
            // line 347
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 347), "data", [], "any", false, false, false, 347), "pref", [], "any", false, false, false, 347), "html", null, true);
            echo "</label>
                                                </div>
                                                <div class=\"col pl-0\">
                                                    ";
            // line 350
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child"], "fee", [], "any", false, false, false, 350), 'widget');
            echo "
                                                    ";
            // line 351
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child"], "fee", [], "any", false, false, false, 351), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 355
            if ((((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 355) % 2) == 0) || twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 355))) {
                echo "</div>";
            }
            // line 356
            echo "                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div id=\"ex-delivery-shop\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.delivery.shop_memo"), "html", null, true);
        echo "\">
                                    <span class=\"card-title\">";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i
                                                class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#freeArea\"
                                                                 aria-expanded=\"false\" aria-controls=\"freeArea\"><i
                                                class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div>
                                    ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), "description", [], "any", false, false, false, 378), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                    ";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 379, $this->source); })()), "description", [], "any", false, false, false, 379), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 392
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_delivery");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.delivery_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "visible", [], "any", false, false, false, 400), 'widget');
        echo "
                                ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "visible", [], "any", false, false, false, 401), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 404
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
        return "@admin/Setting/Shop/delivery_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 404,  761 => 401,  757 => 400,  747 => 393,  743 => 392,  727 => 379,  723 => 378,  709 => 367,  705 => 366,  694 => 357,  680 => 356,  676 => 355,  669 => 351,  665 => 350,  659 => 347,  652 => 344,  647 => 343,  630 => 342,  622 => 337,  616 => 334,  612 => 333,  605 => 329,  601 => 328,  591 => 321,  586 => 319,  580 => 315,  563 => 313,  546 => 312,  539 => 308,  526 => 301,  519 => 297,  511 => 292,  507 => 291,  501 => 288,  496 => 285,  490 => 284,  483 => 280,  479 => 279,  474 => 277,  471 => 276,  465 => 274,  462 => 273,  459 => 272,  454 => 271,  448 => 267,  444 => 266,  436 => 261,  432 => 260,  423 => 254,  419 => 253,  412 => 249,  408 => 248,  399 => 242,  395 => 241,  390 => 239,  383 => 235,  379 => 234,  374 => 232,  368 => 229,  360 => 224,  355 => 223,  345 => 222,  321 => 207,  313 => 202,  142 => 34,  134 => 29,  127 => 25,  123 => 24,  119 => 23,  114 => 22,  104 => 21,  85 => 16,  66 => 15,  55 => 11,  53 => 18,  51 => 13,  38 => 11,);
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

{% set menus = ['setting', 'shop', 'shop_delivery'] %}

{% block title %}{{ 'admin.setting.shop.delivery_setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.setting.shop'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}


{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>
    <script>
        \$(function() {
            \$('#set_fee_all').on('click', function() {
                var fee = \$('#{{ form.free_all.vars.id }}').val();
                if (\$.isNumeric(fee)) {
                    \$('input[name\$=\"[fee]\"]').val(fee);
                    return;
                }
                alert(\"{{ 'admin.setting.shop.delivery.fee.invalid'|trans }}\");
            });
        });
    </script>
    <script>
        // 降順にソートする
        \$(function() {
            var \$items_wrapper = \$('.sortable-container');
            var \$items = \$('.sortable-item');
            \$items.sort(function(a, b) {
                return parseInt(\$(a).find('.sort-no').val()) > parseInt(\$(b).find('.sort-no').val());
            });
            \$items.each(function() {
                \$items_wrapper.append(\$(this).remove());
            })
        });

        // 並び替え後にsort noを更新
        function updateSortNo() {
            var \$items = \$('.sortable-container').find('.sortable-item');
            \$items.each(function() {
                \$(this).find('.sort-no').val(\$items.index(this) + 1);
            });
        }

        // 最初と最後の↑↓を再描画
        function redrawDisableAllows() {
            var items = \$('.sortable-item');
            items.find('a').removeClass('disabled');
            items.first().find('a.action-up').addClass('disabled');
            items.last().find('a.action-down').addClass('disabled');
        }

        // 表示順の更新を行う
        function moveSortNo() {
            updateSortNo();
            redrawDisableAllows();
        }

        \$(function() {

            var \$collectionHolder = \$('#delivery-time-group');
            var index = \$collectionHolder.find('.delivery-time-item').length;

            redrawDisableAllows();

            // お届け時間設定の新規作成ボタンでお届け時間項目を追加する
            \$('#add-delivery-time-button').on('click', function(event) {

                // 追加するお届け時間名を取得
                var deliveryTimeName = \$('#add-delivery-time-value').val();

                if (deliveryTimeName == '') {
                    return;
                }

                var prototype = \$collectionHolder.data('prototype');

                var newForm = prototype.replace(/__name__/g, index);
                var newForm = newForm.replace(/__value__/g, deliveryTimeName);

                // 要素を追加
                var \$lastRow = \$('#delivery-time-group > li:last');
                \$lastRow.after(newForm);

                // お届け時間名を入れる
                var inputId = '#delivery_delivery_times_' + index + '_delivery_time';
                \$(inputId).val(deliveryTimeName);
                \$(inputId).attr('data-origin-value', deliveryTimeName);

                // 入力欄を初期化
                \$('#add-delivery-time-value').val('');

                // 要素数をインクリメント
                index++;

                moveSortNo();
            });

            // 明細行の削除
            \$('#delivery-time-group').on('click', '.remove-delivery-time-item', function(event) {
                event.preventDefault();

                \$(this).tooltip('hide');

                // 自身の行を削除.
                \$(event.target).parents('li').remove();

                moveSortNo();
            });

            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('#delivery-time-group').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('#delivery-time-group').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 編集
            \$('#delivery-time-group').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
                current.find('.action-edit-submit').attr('disabled', false);
                current.find('.action-edit-cancel').attr('disabled', false);
            });

            // 編集決定
            \$('#delivery-time-group').on('click', 'button.action-edit-submit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).attr('data-origin-value', value);
                });
            });
            // 編集キャンセル
            \$('#delivery-time-group').on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                var value = current.find('.form-control').val();
                current.find('.display-label').text(value);
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });
            // 編集時, エラーがあれば入力欄を表示.
            \$('#delivery-time-group').find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            // 表示・非表示の切り替え
            \$('#delivery-time-group').on('click', 'a.action-visible', function(e) {
                e.preventDefault();

                var \$this = \$(this);
                var \$i = \$this.find('i');

                if (\$i.hasClass('fa-toggle-on')) {
                    \$i.addClass('fa-toggle-off');
                    \$i.removeClass('fa-toggle-on');
                    \$this.attr('data-original-title', '{{ 'admin.common.to_show'|trans }}');
                    \$this.parents('li').find('.visible').val('0');
                } else {
                    \$i.addClass('fa-toggle-on');
                    \$i.removeClass('fa-toggle-off');
                    \$this.attr('data-original-title', '{{ 'admin.common.to_hide'|trans }}');
                    \$this.parents('li').find('.visible').val('1');
                }
                // ツールチップの表示を更新
                \$this.tooltip('show');


            });

            // FIXME 明細行のツールチップが表示されないため, ここでツールチップを有効にしている.
            \$('[data-tooltip=\"true\"]').tooltip();
        });
    </script>
{% endblock javascript %}

{% block main %}
    <form method=\"post\" action=\"{{ delivery_id ? url('admin_setting_shop_delivery_edit', {'id': delivery_id}) : url('admin_setting_shop_delivery_new') }}\">
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.delivery.base_info'|trans }}</span></div>
                        <div id=\"ex-delivery-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.delivery.delivery_name'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.name) }}
                                    {{ form_errors(form.name) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>{{ 'admin.setting.shop.delivery.delivery_sevice_name'|trans }}</span></div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.service_name) }}
                                    {{ form_errors(form.service_name) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"{{ 'tooltip.setting.shop.delivery.tracking_number_url'|trans }}\">
                                        <span>{{ 'admin.setting.shop.delivery.tracking_number_url'|trans }}</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.confirm_url) }}
                                    {{ form_errors(form.confirm_url) }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"{{ 'tooltip.setting.shop.delivery.sale_type'|trans }}\">
                                        <span>{{ 'admin.setting.shop.delivery.sale_type'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.sale_type) }}
                                    {{ form_errors(form.sale_type) }}
                                </div>
                            </div>
                            {# エンティティ拡張の自動出力 #}
                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                {% if f.vars.eccube_form_options.form_theme %}
                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                    {{ form_row(f) }}
                                {% else %}
                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>{{ f.vars.label|trans }}</span></div>
                                        <div class=\"col mb-2\">
                                            {{ form_widget(f) }}
                                            {{ form_errors(f) }}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.delivery.payment_method'|trans }}</span></div>
                        <div id=\"ex-delivery-payment\" class=\"card-body\">
                            <div>
                                {{ form_widget(form.payments, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(form.payments) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-2\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.delivery.delivery_time_setting'|trans }}</span></div>
                        <div id=\"ex-delivery-time\" class=\"card-body p-0\">
                            <div class=\"card rounded border-0 mb-2\">
                                <ul id=\"delivery-time-group\" class=\"list-group list-group-flush sortable-container\"
                                    data-prototype=\"{% apply escape %}{{ include('@admin/Setting/Shop/delivery_time_prototype.twig', {'form': form.delivery_times.vars.prototype}) }}{% endapply %}\">
                                    <li class=\"list-group-item\">
                                        <div class=\"form-row\">
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <input id=\"add-delivery-time-value\" class=\"form-control\" type=\"text\">
                                            </div>
                                            <div class=\"col-auto d-flex align-items-center\">
                                                <button id=\"add-delivery-time-button\" class=\"btn btn-ec-regular\" type=\"button\">{{ 'admin.common.create__new'|trans }}</button>
                                            </div>
                                        </div>
                                    </li>
                                    {% for child in form.delivery_times %}
                                        {{ include('@admin/Setting/Shop/delivery_time_prototype.twig', {'form': child}) }}
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class=\"mb-4\">{{ 'admin.common.drag_and_drop_description'|trans }}</p>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>{{ 'admin.setting.shop.delivery.delivery_fee_by_pref'|trans }}</span></div>
                        <div id=\"ex-delivery-fee\" class=\"card-body p-0\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-start\">
                                        <div class=\"col-2\">
                                            <div class=\"d-inline-block align-middle\" data-tooltip=\"true\"
                                                 data-placement=\"top\" title=\"{{ 'tooltip.setting.shop.delivery.apply_to_pref'|trans }}\"><span
                                                        class=\"card-title\">{{ 'admin.setting.shop.delivery.apply_to_pref__title'|trans }}</span><i
                                                        class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                        </div>
                                        <div class=\"col-3\">
                                            {{ form_widget(form.free_all) }}
                                            {{ form_errors(form.free_all) }}
                                        </div>
                                        <div class=\"col-auto\">
                                            <button id=\"set_fee_all\" class=\"btn btn-ec-regular\" type=\"button\">{{ 'admin.setting.shop.delivery.apply_to_pref__button'|trans }}</button>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"list-group-item\">
                                    {% for child in form.delivery_fees %}
                                        {% if loop.index % 2 != 0 %}<div class=\"row mb-2\">{% endif %}
                                        <div class=\"col{{ loop.last ? '-6' }}\">
                                            <div class=\"row\">
                                                <div class=\"col-2\">
                                                    <label>{{ child.vars.data.pref }}</label>
                                                </div>
                                                <div class=\"col pl-0\">
                                                    {{ form_widget(child.fee) }}
                                                    {{ form_errors(child.fee) }}
                                                </div>
                                            </div>
                                        </div>
                                        {% if loop.index % 2 == 0 or loop.last %}</div>{% endif %}
                                    {% endfor %}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div id=\"ex-delivery-shop\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"{{ 'tooltip.setting.shop.delivery.shop_memo'|trans }}\">
                                    <span class=\"card-title\">{{ 'admin.common.shop_memo'|trans }}<i
                                                class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#freeArea\"
                                                                 aria-expanded=\"false\" aria-controls=\"freeArea\"><i
                                                class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div>
                                    {{ form_widget(form.description, {'attr': {'rows': 8}}) }}
                                    {{ form_errors(form.description) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_setting_shop_delivery') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.setting.shop.delivery_list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                {{ form_widget(form.visible) }}
                                {{ form_errors(form.visible) }}
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Setting/Shop/delivery_edit.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Setting/Shop/delivery_edit.twig");
    }
}
