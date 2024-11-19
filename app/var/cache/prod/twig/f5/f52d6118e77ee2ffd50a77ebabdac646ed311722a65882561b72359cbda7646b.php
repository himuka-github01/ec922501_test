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

/* @admin/Product/category.twig */
class __TwigTemplate_6362c42ef6b0eff7c232d09454a8692ce4862ddace16dea1c5106f57eed1b773 extends \Eccube\Twig\Template
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
        if (( !(null === ($context["Parent"] ?? null)) && (twig_get_attribute($this->env, $this->source, ($context["Parent"] ?? null), "getId", [], "method", false, false, false, 13) == 7))) {
            // line 15
            $context["menus"] = [0 => "product", 1 => "class_saiji"];
            // line 16
            $context["block_title"] = "admin.product.saiji_management";
        } else {
            // line 20
            $context["menus"] = [0 => "product", 1 => "class_category"];
            // line 21
            $context["block_title"] = "admin.product.category_management";
        }
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/category.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["block_title"] ?? null)), "html", null, true);
    }

    // line 26
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 30
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 54
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.action-up').removeClass('disabled');
                items.find('a.action-down').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            var groupItem = \$('.list-group-item');
            groupItem.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            groupItem.on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });

            groupItem.find('.is-invalid').each(function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
    }

    // line 140
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "    ";
        // line 142
        echo "    <style>
        .c-directoryTree ul > li > ul li:not(:last-of-type) > label:before,
        .c-directoryTree ul > li > ul li:last-of-type > label:before {
            margin-right: 1.6em;
        }
        ";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "hdn_saiji_by_tenpo_use", [], "any", false, false, false, 147)) {
            // line 148
            echo "            .hiddenTenpo {}
        ";
        } else {
            // line 150
            echo "            .hiddenTenpo {
                display: none;
            }
        ";
        }
        // line 154
        echo "    </style>
";
    }

    // line 157
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb mb-2 p-0\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 165
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category");
        echo "\">
                                    ";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_all"), "html", null, true);
        echo "
                                </a>
                            </li>
                            ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "path", [], "any", false, false, false, 169));
        foreach ($context['_seq'] as $context["_key"] => $context["ParentCategory"]) {
            // line 170
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 170))) {
                // line 171
                echo "                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 172)]), "html", null, true);
                echo "\">
                                            ";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "name", [], "any", false, false, false, 173), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            // line 177
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ParentCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                        </ol>
                    </nav>
                </div>
                <div class=\"col-6 text-right\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 183
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_export");
        echo "\">
                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                            <span>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
        echo "</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY")]), "html", null, true);
        echo "\">
                            <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                            <span>";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div id=\"ex-primaryCol\" class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\"
                                          action=\"";
        // line 205
        if (twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 205)) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 205)]), "html", null, true);
        } elseif (($context["Parent"] ?? null)) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, ($context["Parent"] ?? null), "id", [], "any", false, false, false, 205)]), "html", null, true);
        } else {
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category");
        }
        echo "\"
                                          enctype=\"multipart/form-data\">
                                        ";
        // line 207
        if ((twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "hierarchy", [], "any", false, false, false, 207) <= twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_category_nest_level", [], "any", false, false, false, 207))) {
            // line 208
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 208), 'widget');
            echo "
                                            <div class=\"form-row mb-3\">
                                                <div class=\"col-auto\">
                                                    ";
            // line 211
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 211), 'widget');
            echo "
                                                    ";
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 212), 'errors');
            echo "
                                                </div>
                                                <div class=\"col-auto\">
                                                    <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                        ";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
            echo "
                                                    </button>
                                                </div>
                                            </div>
                                            ";
            // line 221
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["form"] ?? null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 221), "eccube_form_options", [], "any", false, false, false, 221), "auto_render", [], "any", false, false, false, 221); }));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 222
                echo "                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 222), "eccube_form_options", [], "any", false, false, false, 222), "form_theme", [], "any", false, false, false, 222)) {
                    // line 223
                    echo "                                                    ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 223), "eccube_form_options", [], "any", false, false, false, 223), "form_theme", [], "any", false, false, false, 223)], true);
                    // line 224
                    echo "                                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                                ";
                } else {
                    // line 226
                    echo "                                                    <div class=\"form-row mb-3\">
                                                        <div class=\"col-3\">
                                                            <span>";
                    // line 228
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 228), "label", [], "any", false, false, false, 228)), "html", null, true);
                    echo "</span>
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
                    // line 231
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                            ";
                    // line 232
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 236
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                                            <div class=\"form-row mb-3 hiddenTenpo\">
                                                <div class=\"col-3\">
                                                    <span>";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("対象店舗"), "html", null, true);
            echo "</span>
                                                </div>
                                                <div class=\"col\">
                                                    ";
            // line 242
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tenpo", [], "any", false, false, false, 242), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
            echo "
                                                    ";
            // line 243
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tenpo", [], "any", false, false, false, 243), 'errors');
            echo "
                                                </div>
                                            </div>
                                        ";
        }
        // line 247
        echo "                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-around mode-view\">
                                        <div class=\"col-3 row\">
                                            <div class=\"col-2\"><strong>&nbsp;</strong></div>
                                            <div class=\"col-2\"><strong>";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                            <div class=\"col-8\" align=\"left\"><strong>";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category"), "html", null, true);
        echo "</strong></div>
                                        </div>
                                        <div class=\"col-3 row\">
                                            <div class=\"col-4\" align=\"left\"><strong>表示開始日</strong></div>
                                            <div class=\"col-4\" align=\"left\"><strong>終了日</strong></div>
                                            <div class=\"col-4\" align=\"left\"><strong>コード</strong></div>
                                        </div>
                                        <!--
                                        <div class=\"col-3 row\">
                                            <div class=\"col-3\" align=\"left\"><strong>FC%</strong></div>
                                            <div class=\"col-3\" align=\"left\"><strong>社%</strong></div>
                                            <div class=\"col-3\" align=\"left\"><strong>早%</strong></div>
                                            <div class=\"col-3\" align=\"left\"><strong>早締日</strong></div>
                                        </div>
                                        -->
                                        <div class=\"col-3 row\">
                                            <div class=\"col-4\" align=\"left\"><strong>受渡開始日</strong></div>
                                            <div class=\"col-4\" align=\"left\"><strong>終了日</strong></div>
                                        </div>
                                        <div class=\"col-3\">
                                        </div>
                                    </div>
                                </li>
                                ";
        // line 277
        if ((twig_length_filter($this->env, ($context["Categories"] ?? null)) > 0)) {
            // line 278
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 279
                echo "                                        <li id=\"ex-category-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 279), "html", null, true);
                echo "\" class=\"list-group-item sortable-item\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 279), "html", null, true);
                echo "\" data-sort-no=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "sort_no", [], "any", false, false, false, 279), "html", null, true);
                echo "\">
                                            ";
                // line 280
                if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 280) != twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 280))) {
                    // line 281
                    echo "                                                <div class=\"row justify-content-around mode-view\">
                                                    <div class=\"col-3 row\">
                                                        <div class=\"col-2 d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                        <div class=\"col-2 d-flex align-items-center\">";
                    // line 284
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 284), "html", null, true);
                    echo "</div>
                                                        <div class=\"col-8 d-flex align-items-center\">
                                                            <a href=\"";
                    // line 286
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 286)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 286), "html", null, true);
                    echo "</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-3 row\">
                                                        <div class=\"col-4 d-flex align-items-center\">";
                    // line 290
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "dispStartDt", [], "any", false, false, false, 290), "Y/m/d"), "html", null, true);
                    echo "</div>
                                                        <div class=\"col-4 d-flex align-items-center\">";
                    // line 291
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "dispEndDt", [], "any", false, false, false, 291), "Y/m/d"), "html", null, true);
                    echo "</div>
                                                        <div class=\"col-4 d-flex align-items-center\">";
                    // line 292
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "saijiCd", [], "any", false, false, false, 292), "html", null, true);
                    echo "</div>
                                                    </div>
                                                    <!--
                                                    <div class=\"col-3 row\">
                                                        <div class=\"col-3 d-flex align-items-center\">";
                    // line 296
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "wari_a_value", [], "any", false, false, false, 296), "html", null, true);
                    echo "</div>
                                                        <div class=\"col-3 d-flex align-items-center\">";
                    // line 297
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "wari_b_value", [], "any", false, false, false, 297), "html", null, true);
                    echo "</div>
                                                        <div class=\"col-3 d-flex align-items-center\">";
                    // line 298
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "wari_kikan_value", [], "any", false, false, false, 298), "html", null, true);
                    echo "</div>
                                                        <div class=\"col-3 d-flex align-items-center\">";
                    // line 299
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "wari_kikan_end_dt", [], "any", false, false, false, 299), "Y/m/d"), "html", null, true);
                    echo "</div>
                                                    </div>
                                                    -->
                                                    <div class=\"col-3 row\">
                                                        <div class=\"col-4 d-flex align-items-center\">
                                                            ";
                    // line 304
                    if (twig_get_attribute($this->env, $this->source, $context["Category"], "deliveryStartDt", [], "any", false, false, false, 304)) {
                        // line 305
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "deliveryStartDt", [], "any", false, false, false, 305), "Y/m/d"), "html", null, true);
                        echo "
                                                            ";
                    }
                    // line 307
                    echo "                                                        </div>
                                                        <div class=\"col-4 d-flex align-items-center\">
                                                            ";
                    // line 309
                    if (twig_get_attribute($this->env, $this->source, $context["Category"], "deliveryEndDt", [], "any", false, false, false, 309)) {
                        // line 310
                        echo "                                                                ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "deliveryEndDt", [], "any", false, false, false, 310), "Y/m/d"), "html", null, true);
                        echo "
                                                            ";
                    }
                    // line 312
                    echo "                                                        </div>
                                                    </div>
                                                    <div class=\"col-3 text-right\">
                                                        <a class=\"btn btn-ec-actionIcon action-up mr-2 ";
                    // line 315
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 315)) {
                        echo " disabled ";
                    }
                    echo "\" href=\"\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"";
                    // line 317
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon action-down mr-2 ";
                    // line 320
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 320)) {
                        echo " disabled ";
                    }
                    echo "\" href=\"\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"";
                    // line 322
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon mr-2 action-edit\"
                                                           href=\"";
                    // line 326
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 326)]), "html", null, true);
                    echo "\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"";
                    // line 328
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                             title=\"";
                    // line 332
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon";
                    // line 333
                    if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "Children", [], "any", false, false, false, 333)) > 0) || twig_get_attribute($this->env, $this->source, $context["Category"], "hasProductCategories", [], "any", false, false, false, 333))) {
                        echo " disabled";
                    }
                    echo "\"
                                                               data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                               data-url=\"";
                    // line 335
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 335)]), "html", null, true);
                    echo "\"
                                                               data-message=\"";
                    // line 336
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 336)]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class=\"form-row d-none mode-edit\" method=\"POST\" action=\"";
                    // line 342
                    (((($context["Parent"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["Parent"] ?? null), "id", [], "any", false, false, false, 342))) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, ($context["Parent"] ?? null), "id", [], "any", false, false, false, 342)]), "html", null, true))) : (print ($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category"))));
                    echo "\" enctype=\"multipart/form-data\">
                                                    ";
                    // line 343
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["forms"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 343)] ?? null) : null), "_token", [], "any", false, false, false, 343), 'widget');
                    echo "
                                                    <div class=\"col-auto align-items-center\">
                                                        ";
                    // line 345
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["forms"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 345)] ?? null) : null), "name", [], "any", false, false, false, 345), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["forms"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 345)] ?? null) : null), "name", [], "any", false, false, false, 345), "vars", [], "any", false, false, false, 345), "value", [], "any", false, false, false, 345)]]);
                    echo "
                                                        ";
                    // line 346
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["forms"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 346)] ?? null) : null), "name", [], "any", false, false, false, 346), 'errors');
                    echo "
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">";
                    // line 349
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
                    echo "</button>
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
                    // line 352
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                    </div>
                                                    ";
                    // line 355
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["forms"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 355)] ?? null) : null), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 355), "eccube_form_options", [], "any", false, false, false, 355), "auto_render", [], "any", false, false, false, 355); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 356
                        echo "                                                    <div class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>";
                        // line 359
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 359), "label", [], "any", false, false, false, 359)), "html", null, true);
                        echo "</span>
                                                            </div>
                                                            <div class=\"col-9\">
                                                                ";
                        // line 362
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                                ";
                        // line 363
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 368
                    echo "                                                    <div class=\"col-auto align-items-center hiddenTenpo\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>";
                    // line 371
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("対象店舗"), "html", null, true);
                    echo "</span>
                                                            </div>
                                                            <div class=\"col\">
                                                                ";
                    // line 374
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["forms"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 374)] ?? null) : null), "Tenpo", [], "any", false, false, false, 374), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
                    echo "
                                                                ";
                    // line 375
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["forms"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 375)] ?? null) : null), "Tenpo", [], "any", false, false, false, 375), 'errors');
                    echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            ";
                }
                // line 381
                echo "                                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 383
            echo "                                ";
        }
        // line 384
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title font-weight-bold\">
                                                ";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                            </h5>
                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body text-left\">
                                            <p class=\"text-left modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                ";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 405
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 442
        echo "
        <div class=\"c-contentsArea__secondaryCol\">
            <div id=\"ex-secondaryCol\" class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\"><a
                                    href=\"";
        // line 448
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_all"), "html", null, true);
        echo "</a></span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"c-directoryTree mb-3\">
                            ";
        // line 452
        $macros["renderMacro"] = $this;
        // line 453
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TopCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 454
            echo "                                <ul class=\"list-unstyled\">
                                    ";
            // line 455
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [$context["TopCategory"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 455), "id", [], "any", true, true, false, 455)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 455), "id", [], "any", false, false, false, 455), null)) : (null)), 0, ($context["Ids"] ?? null)], 455, $context, $this->getSourceContext());
            echo "
                                </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 420
    public function macro_tree($__Category__ = null, $__TargetId__ = null, $__level__ = null, $__Ids__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "TargetId" => $__TargetId__,
            "level" => $__level__,
            "Ids" => $__Ids__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 421
            echo "            ";
            $macros["selfMacro"] = $this;
            // line 422
            echo "            ";
            $context["level"] = (($context["level"] ?? null) + 1);
            // line 423
            echo "            <li>
                <label ";
            // line 424
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 424)) > 0) && !twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 424), ($context["Ids"] ?? null)))) {
                echo "class=\"collapsed\"
                       ";
            }
            // line 425
            echo "data-toggle=\"collapse\"
                       href=\"#directory_category";
            // line 426
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 426), "html", null, true);
            echo "\"
                       aria-expanded=\"";
            // line 427
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 427), ($context["Ids"] ?? null))) {
                echo "true";
            }
            echo "\"
                       aria-controls=\"directory_category";
            // line 428
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 428), "html", null, true);
            echo "\"></label>
                <span>
                    <a href=\"";
            // line 430
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 430)]), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 430) == ($context["TargetId"] ?? null))) {
                echo " class=\"font-weight-bold\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 430), "html", null, true);
            echo "
                        (";
            // line 431
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 431)), "html", null, true);
            echo ")</a></span>
                ";
            // line 432
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 432)) > 0)) {
                // line 433
                echo "                    <ul class=\"collapse list-unstyled ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 433), ($context["Ids"] ?? null))) {
                    echo "show";
                }
                echo "\"
                        id=\"directory_category";
                // line 434
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 434), "html", null, true);
                echo "\">
                        ";
                // line 435
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 435));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 436
                    echo "                            ";
                    echo twig_call_macro($macros["selfMacro"], "macro_tree", [$context["ChildCategory"], ($context["TargetId"] ?? null), ($context["level"] ?? null), ($context["Ids"] ?? null)], 436, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 438
                echo "                    </ul>
                ";
            }
            // line 440
            echo "            </li>
        ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@admin/Product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  937 => 440,  933 => 438,  924 => 436,  920 => 435,  916 => 434,  909 => 433,  907 => 432,  903 => 431,  893 => 430,  888 => 428,  882 => 427,  878 => 426,  875 => 425,  870 => 424,  867 => 423,  864 => 422,  861 => 421,  845 => 420,  835 => 458,  826 => 455,  823 => 454,  818 => 453,  816 => 452,  807 => 448,  799 => 442,  792 => 416,  780 => 407,  775 => 405,  770 => 403,  756 => 392,  746 => 384,  743 => 383,  728 => 381,  719 => 375,  715 => 374,  709 => 371,  704 => 368,  693 => 363,  689 => 362,  683 => 359,  678 => 356,  673 => 355,  668 => 352,  662 => 349,  656 => 346,  652 => 345,  647 => 343,  643 => 342,  634 => 336,  630 => 335,  623 => 333,  619 => 332,  612 => 328,  607 => 326,  600 => 322,  593 => 320,  587 => 317,  580 => 315,  575 => 312,  569 => 310,  567 => 309,  563 => 307,  557 => 305,  555 => 304,  547 => 299,  543 => 298,  539 => 297,  535 => 296,  528 => 292,  524 => 291,  520 => 290,  511 => 286,  506 => 284,  501 => 281,  499 => 280,  490 => 279,  472 => 278,  470 => 277,  444 => 254,  440 => 253,  432 => 247,  425 => 243,  421 => 242,  415 => 239,  411 => 237,  405 => 236,  398 => 232,  394 => 231,  388 => 228,  384 => 226,  378 => 224,  375 => 223,  372 => 222,  367 => 221,  360 => 216,  353 => 212,  349 => 211,  342 => 208,  340 => 207,  329 => 205,  310 => 189,  305 => 187,  300 => 185,  295 => 183,  288 => 178,  282 => 177,  275 => 173,  271 => 172,  268 => 171,  265 => 170,  261 => 169,  255 => 166,  251 => 165,  242 => 158,  238 => 157,  233 => 154,  227 => 150,  223 => 148,  221 => 147,  214 => 142,  212 => 141,  208 => 140,  119 => 54,  96 => 34,  92 => 33,  88 => 32,  83 => 31,  79 => 30,  72 => 26,  65 => 25,  60 => 11,  58 => 28,  55 => 21,  53 => 20,  50 => 16,  48 => 15,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/category.twig", "/var/www/htdocs/ec922501/app/template/admin/Product/category.twig");
    }
}
