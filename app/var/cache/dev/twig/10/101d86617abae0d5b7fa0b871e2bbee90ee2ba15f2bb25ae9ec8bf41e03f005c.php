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
class __TwigTemplate_2544d0c9bf9d98eb80b8899c8043575720635b088590dc6f15b778af016d4fd8 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/category.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/category.twig"));

        // line 13
        if (( !(null === (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 13, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 13, $this->source); })()), "getId", [], "method", false, false, false, 13) == 7))) {
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/category.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["block_title"]) || array_key_exists("block_title", $context) ? $context["block_title"] : (function () { throw new RuntimeError('Variable "block_title" does not exist.', 25, $this->source); })())), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
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

    // line 30
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_sort_no_move");
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 147, $this->source); })()), "hdn_saiji_by_tenpo_use", [], "any", false, false, false, 147)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 169, $this->source); })()), "path", [], "any", false, false, false, 169));
        foreach ($context['_seq'] as $context["_key"] => $context["ParentCategory"]) {
            // line 170
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 170))) {
                // line 171
                echo "                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 172)]), "html", null, true);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_export");
        echo "\">
                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                            <span>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
        echo "</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY")]), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 205, $this->source); })()), "id", [], "any", false, false, false, 205)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 205, $this->source); })()), "id", [], "any", false, false, false, 205)]), "html", null, true);
        } elseif ((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 205, $this->source); })())) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 205, $this->source); })()), "id", [], "any", false, false, false, 205)]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        }
        echo "\"
                                          enctype=\"multipart/form-data\">
                                        ";
        // line 207
        if ((twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 207, $this->source); })()), "hierarchy", [], "any", false, false, false, 207) <= twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 207, $this->source); })()), "eccube_category_nest_level", [], "any", false, false, false, 207))) {
            // line 208
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "_token", [], "any", false, false, false, 208), 'widget');
            echo "
                                            <div class=\"form-row mb-3\">
                                                <div class=\"col-auto\">
                                                    ";
            // line 211
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "name", [], "any", false, false, false, 211), 'widget');
            echo "
                                                    ";
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "name", [], "any", false, false, false, 212), 'errors');
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
            $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 221), "eccube_form_options", [], "any", false, false, false, 221), "auto_render", [], "any", false, false, false, 221); }));
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "Tenpo", [], "any", false, false, false, 242), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
            echo "
                                                    ";
            // line 243
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "Tenpo", [], "any", false, false, false, 243), 'errors');
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
        if ((twig_length_filter($this->env, (isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 277, $this->source); })())) > 0)) {
            // line 278
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 278, $this->source); })()));
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
                if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 280) != twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280))) {
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 286)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 326)]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 335)]), "html", null, true);
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
                    ((((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 342, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 342, $this->source); })()), "id", [], "any", false, false, false, 342))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 342, $this->source); })()), "id", [], "any", false, false, false, 342)]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category"))));
                    echo "\" enctype=\"multipart/form-data\">
                                                    ";
                    // line 343
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 343, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 343), [], "array", false, false, false, 343), "_token", [], "any", false, false, false, 343), 'widget');
                    echo "
                                                    <div class=\"col-auto align-items-center\">
                                                        ";
                    // line 345
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 345, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 345), [], "array", false, false, false, 345), "name", [], "any", false, false, false, 345), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 345, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 345), [], "array", false, false, false, 345), "name", [], "any", false, false, false, 345), "vars", [], "any", false, false, false, 345), "value", [], "any", false, false, false, 345)]]);
                    echo "
                                                        ";
                    // line 346
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 346, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 346), [], "array", false, false, false, 346), "name", [], "any", false, false, false, 346), 'errors');
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
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 355, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 355), [], "array", false, false, false, 355), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 355), "eccube_form_options", [], "any", false, false, false, 355), "auto_render", [], "any", false, false, false, 355); }));
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
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 374, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 374), [], "array", false, false, false, 374), "Tenpo", [], "any", false, false, false, 374), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
                    echo "
                                                                ";
                    // line 375
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 375, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 375), [], "array", false, false, false, 375), "Tenpo", [], "any", false, false, false, 375), 'errors');
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 453, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 454
            echo "                                <ul class=\"list-unstyled\">
                                    ";
            // line 455
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [$context["TopCategory"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 455), "id", [], "any", true, true, false, 455)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 455), "id", [], "any", false, false, false, 455), null)) : (null)), 0, (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 455, $this->source); })())], 455, $context, $this->getSourceContext());
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 421
            echo "            ";
            $macros["selfMacro"] = $this;
            // line 422
            echo "            ";
            $context["level"] = ((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 422, $this->source); })()) + 1);
            // line 423
            echo "            <li>
                <label ";
            // line 424
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 424, $this->source); })()), "children", [], "any", false, false, false, 424)) > 0) && !twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 424, $this->source); })()), "id", [], "any", false, false, false, 424), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 424, $this->source); })())))) {
                echo "class=\"collapsed\"
                       ";
            }
            // line 425
            echo "data-toggle=\"collapse\"
                       href=\"#directory_category";
            // line 426
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 426, $this->source); })()), "id", [], "any", false, false, false, 426), "html", null, true);
            echo "\"
                       aria-expanded=\"";
            // line 427
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 427, $this->source); })()), "id", [], "any", false, false, false, 427), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 427, $this->source); })()))) {
                echo "true";
            }
            echo "\"
                       aria-controls=\"directory_category";
            // line 428
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 428, $this->source); })()), "id", [], "any", false, false, false, 428), "html", null, true);
            echo "\"></label>
                <span>
                    <a href=\"";
            // line 430
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 430, $this->source); })()), "id", [], "any", false, false, false, 430)]), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 430, $this->source); })()), "id", [], "any", false, false, false, 430) == (isset($context["TargetId"]) || array_key_exists("TargetId", $context) ? $context["TargetId"] : (function () { throw new RuntimeError('Variable "TargetId" does not exist.', 430, $this->source); })()))) {
                echo " class=\"font-weight-bold\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 430, $this->source); })()), "name", [], "any", false, false, false, 430), "html", null, true);
            echo "
                        (";
            // line 431
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 431, $this->source); })()), "children", [], "any", false, false, false, 431)), "html", null, true);
            echo ")</a></span>
                ";
            // line 432
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 432, $this->source); })()), "children", [], "any", false, false, false, 432)) > 0)) {
                // line 433
                echo "                    <ul class=\"collapse list-unstyled ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 433, $this->source); })()), "id", [], "any", false, false, false, 433), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 433, $this->source); })()))) {
                    echo "show";
                }
                echo "\"
                        id=\"directory_category";
                // line 434
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 434, $this->source); })()), "id", [], "any", false, false, false, 434), "html", null, true);
                echo "\">
                        ";
                // line 435
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 435, $this->source); })()), "children", [], "any", false, false, false, 435));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 436
                    echo "                            ";
                    echo twig_call_macro($macros["selfMacro"], "macro_tree", [$context["ChildCategory"], (isset($context["TargetId"]) || array_key_exists("TargetId", $context) ? $context["TargetId"] : (function () { throw new RuntimeError('Variable "TargetId" does not exist.', 436, $this->source); })()), (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 436, $this->source); })()), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 436, $this->source); })())], 436, $context, $this->getSourceContext());
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
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


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
        return array (  1015 => 440,  1011 => 438,  1002 => 436,  998 => 435,  994 => 434,  987 => 433,  985 => 432,  981 => 431,  971 => 430,  966 => 428,  960 => 427,  956 => 426,  953 => 425,  948 => 424,  945 => 423,  942 => 422,  939 => 421,  917 => 420,  901 => 458,  892 => 455,  889 => 454,  884 => 453,  882 => 452,  873 => 448,  865 => 442,  858 => 416,  846 => 407,  841 => 405,  836 => 403,  822 => 392,  812 => 384,  809 => 383,  794 => 381,  785 => 375,  781 => 374,  775 => 371,  770 => 368,  759 => 363,  755 => 362,  749 => 359,  744 => 356,  739 => 355,  734 => 352,  728 => 349,  722 => 346,  718 => 345,  713 => 343,  709 => 342,  700 => 336,  696 => 335,  689 => 333,  685 => 332,  678 => 328,  673 => 326,  666 => 322,  659 => 320,  653 => 317,  646 => 315,  641 => 312,  635 => 310,  633 => 309,  629 => 307,  623 => 305,  621 => 304,  613 => 299,  609 => 298,  605 => 297,  601 => 296,  594 => 292,  590 => 291,  586 => 290,  577 => 286,  572 => 284,  567 => 281,  565 => 280,  556 => 279,  538 => 278,  536 => 277,  510 => 254,  506 => 253,  498 => 247,  491 => 243,  487 => 242,  481 => 239,  477 => 237,  471 => 236,  464 => 232,  460 => 231,  454 => 228,  450 => 226,  444 => 224,  441 => 223,  438 => 222,  433 => 221,  426 => 216,  419 => 212,  415 => 211,  408 => 208,  406 => 207,  395 => 205,  376 => 189,  371 => 187,  366 => 185,  361 => 183,  354 => 178,  348 => 177,  341 => 173,  337 => 172,  334 => 171,  331 => 170,  327 => 169,  321 => 166,  317 => 165,  308 => 158,  298 => 157,  287 => 154,  281 => 150,  277 => 148,  275 => 147,  268 => 142,  266 => 141,  256 => 140,  161 => 54,  138 => 34,  134 => 33,  130 => 32,  125 => 31,  115 => 30,  96 => 26,  77 => 25,  66 => 11,  64 => 28,  61 => 21,  59 => 20,  56 => 16,  54 => 15,  52 => 13,  39 => 11,);
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

{% if Parent is not null and Parent.getId() == 7 %}

    {% set menus = ['product', 'class_saiji'] %}
    {% set block_title = 'admin.product.saiji_management' %}

{% else %}

    {% set menus = ['product', 'class_category'] %}
    {% set block_title = 'admin.product.category_management' %}

{% endif %}

{% block title %}{{ block_title|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>
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
                    url: '{{ url('admin_product_category_sort_no_move') }}',
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
{% endblock %}

{% block stylesheet %}
    {#TODO: Move to css file#}
    <style>
        .c-directoryTree ul > li > ul li:not(:last-of-type) > label:before,
        .c-directoryTree ul > li > ul li:last-of-type > label:before {
            margin-right: 1.6em;
        }
        {% if eccube_config.hdn_saiji_by_tenpo_use %}
            .hiddenTenpo {}
        {% else %}
            .hiddenTenpo {
                display: none;
            }
        {% endif %}
    </style>
{% endblock %}

{% block main %}
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb mb-2 p-0\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ url('admin_product_category') }}\">
                                    {{ 'admin.product.category_all'|trans }}
                                </a>
                            </li>
                            {% for ParentCategory in TargetCategory.path %}
                                {% if ParentCategory.id is not null %}
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"{{ url('admin_product_category_show', { parent_id : ParentCategory.id }) }}\">
                                            {{ ParentCategory.name }}
                                        </a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ol>
                    </nav>
                </div>
                <div class=\"col-6 text-right\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_category_export') }}\">
                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                            <span>{{ 'admin.common.csv_download'|trans }}</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CATEGORY') }) }}\">
                            <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                            <span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
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
                                          action=\"{% if TargetCategory.id %}{{ path('admin_product_category_edit', {id: TargetCategory.id}) }}{% elseif Parent %}{{ url('admin_product_category_show', {'parent_id': Parent.id}) }}{% else %}{{ url('admin_product_category') }}{% endif %}\"
                                          enctype=\"multipart/form-data\">
                                        {% if TargetCategory.hierarchy <= eccube_config.eccube_category_nest_level %}
                                            {{ form_widget(form._token) }}
                                            <div class=\"form-row mb-3\">
                                                <div class=\"col-auto\">
                                                    {{ form_widget(form.name) }}
                                                    {{ form_errors(form.name) }}
                                                </div>
                                                <div class=\"col-auto\">
                                                    <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                        {{ 'admin.common.create__new'|trans }}
                                                    </button>
                                                </div>
                                            </div>
                                            {# エンティティ拡張の自動出力 #}
                                            {% for f in form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                                {% if f.vars.eccube_form_options.form_theme %}
                                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                                    {{ form_row(f) }}
                                                {% else %}
                                                    <div class=\"form-row mb-3\">
                                                        <div class=\"col-3\">
                                                            <span>{{ f.vars.label|trans }}</span>
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(f) }}
                                                            {{ form_errors(f) }}
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                            <div class=\"form-row mb-3 hiddenTenpo\">
                                                <div class=\"col-3\">
                                                    <span>{{ '対象店舗'|trans }}</span>
                                                </div>
                                                <div class=\"col\">
                                                    {{ form_widget(form.Tenpo, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                                    {{ form_errors(form.Tenpo) }}
                                                </div>
                                            </div>
                                        {% endif %}
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row justify-content-around mode-view\">
                                        <div class=\"col-3 row\">
                                            <div class=\"col-2\"><strong>&nbsp;</strong></div>
                                            <div class=\"col-2\"><strong>{{ 'admin.common.id'|trans }}</strong></div>
                                            <div class=\"col-8\" align=\"left\"><strong>{{ 'admin.product.category'|trans }}</strong></div>
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
                                {% if Categories|length > 0 %}
                                    {% for Category in Categories %}
                                        <li id=\"ex-category-{{ Category.id }}\" class=\"list-group-item sortable-item\" data-id=\"{{ Category.id }}\" data-sort-no=\"{{ Category.sort_no }}\">
                                            {% if Category.id != TargetCategory.id %}
                                                <div class=\"row justify-content-around mode-view\">
                                                    <div class=\"col-3 row\">
                                                        <div class=\"col-2 d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                        <div class=\"col-2 d-flex align-items-center\">{{ Category.id }}</div>
                                                        <div class=\"col-8 d-flex align-items-center\">
                                                            <a href=\"{{ url('admin_product_category_show',  { parent_id : Category.id }) }}\">{{ Category.name }}</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-3 row\">
                                                        <div class=\"col-4 d-flex align-items-center\">{{ Category.dispStartDt|date(\"Y/m/d\") }}</div>
                                                        <div class=\"col-4 d-flex align-items-center\">{{ Category.dispEndDt|date(\"Y/m/d\") }}</div>
                                                        <div class=\"col-4 d-flex align-items-center\">{{ Category.saijiCd }}</div>
                                                    </div>
                                                    <!--
                                                    <div class=\"col-3 row\">
                                                        <div class=\"col-3 d-flex align-items-center\">{{ Category.wari_a_value }}</div>
                                                        <div class=\"col-3 d-flex align-items-center\">{{ Category.wari_b_value }}</div>
                                                        <div class=\"col-3 d-flex align-items-center\">{{ Category.wari_kikan_value }}</div>
                                                        <div class=\"col-3 d-flex align-items-center\">{{ Category.wari_kikan_end_dt|date(\"Y/m/d\") }}</div>
                                                    </div>
                                                    -->
                                                    <div class=\"col-3 row\">
                                                        <div class=\"col-4 d-flex align-items-center\">
                                                            {% if Category.deliveryStartDt %}
                                                                {{ Category.deliveryStartDt|date(\"Y/m/d\") }}
                                                            {% endif %}
                                                        </div>
                                                        <div class=\"col-4 d-flex align-items-center\">
                                                            {% if Category.deliveryEndDt %}
                                                                {{ Category.deliveryEndDt|date(\"Y/m/d\") }}
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                    <div class=\"col-3 text-right\">
                                                        <a class=\"btn btn-ec-actionIcon action-up mr-2 {% if loop.first %} disabled {% endif %}\" href=\"\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"{{ 'admin.common.up'|trans }}\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon action-down mr-2 {% if loop.last %} disabled {% endif %}\" href=\"\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"{{ 'admin.common.down'|trans }}\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon mr-2 action-edit\"
                                                           href=\"{{ url('admin_product_category_edit', {id: Category.id}) }}\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"{{ 'admin.common.edit'|trans }}\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                             title=\"{{ 'admin.common.delete'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon{% if Category.Children|length > 0 or Category.hasProductCategories %} disabled{% endif %}\"
                                                               data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                               data-url=\"{{ url('admin_product_category_delete', {id: Category.id}) }}\"
                                                               data-message=\"{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : Category.name }) }}\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class=\"form-row d-none mode-edit\" method=\"POST\" action=\"{{ (Parent and Parent.id) ? url('admin_product_category_show', {'parent_id': Parent.id}) : url('admin_product_category') }}\" enctype=\"multipart/form-data\">
                                                    {{ form_widget(forms[Category.id]._token) }}
                                                    <div class=\"col-auto align-items-center\">
                                                        {{ form_widget(forms[Category.id].name, {'attr': {'data-origin-value': forms[Category.id].name.vars.value}}) }}
                                                        {{ form_errors(forms[Category.id].name) }}
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">{{ 'admin.common.decision'|trans }}</button>
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">{{ 'admin.common.cancel'|trans }}</button>
                                                    </div>
                                                    {# エンティティ拡張の自動出力 #}
                                                    {% for f in forms[Category.id]|filter(f => f.vars.eccube_form_options.auto_render) %}
                                                    <div class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>{{ f.vars.label|trans }}</span>
                                                            </div>
                                                            <div class=\"col-9\">
                                                                {{ form_widget(f) }}
                                                                {{ form_errors(f) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {% endfor %}
                                                    <div class=\"col-auto align-items-center hiddenTenpo\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>{{ '対象店舗'|trans }}</span>
                                                            </div>
                                                            <div class=\"col\">
                                                                {{ form_widget(forms[Category.id].Tenpo, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                                                {{ form_errors(forms[Category.id].Tenpo) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            {% endif %}
                                        </li>
                                    {% endfor %}
                                {% endif %}
                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title font-weight-bold\">
                                                {{ 'admin.common.delete_modal__title'|trans }}
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
                                                {{ 'admin.common.cancel'|trans }}
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" {{ csrf_token_for_anchor() }}
                                               data-method=\"delete\" data-confirm=\"false\">
                                                {{ 'admin.common.delete'|trans }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>{{ 'admin.common.drag_and_drop_description'|trans }}</p>
            </div>
        </div>

        {% macro tree(Category, TargetId, level, Ids) %}
            {% import _self as selfMacro %}
            {% set level = level + 1 %}
            <li>
                <label {% if (Category.children|length > 0) and (Category.id not in Ids) %}class=\"collapsed\"
                       {% endif %}data-toggle=\"collapse\"
                       href=\"#directory_category{{ Category.id }}\"
                       aria-expanded=\"{% if Category.id in Ids %}true{% endif %}\"
                       aria-controls=\"directory_category{{ Category.id }}\"></label>
                <span>
                    <a href=\"{{ url('admin_product_category_show', { parent_id : Category.id }) }}\"{%if (Category.id == TargetId) %} class=\"font-weight-bold\"{% endif %}>{{ Category.name }}
                        ({{ Category.children|length }})</a></span>
                {% if Category.children|length > 0 %}
                    <ul class=\"collapse list-unstyled {% if Category.id in Ids %}show{% endif %}\"
                        id=\"directory_category{{ Category.id }}\">
                        {% for ChildCategory in Category.children %}
                            {{ selfMacro.tree(ChildCategory, TargetId, level, Ids) }}
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endmacro %}

        <div class=\"c-contentsArea__secondaryCol\">
            <div id=\"ex-secondaryCol\" class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\"><a
                                    href=\"{{ url('admin_product_category') }}\">{{ 'admin.product.category_all'|trans }}</a></span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"c-directoryTree mb-3\">
                            {% import _self as renderMacro %}
                            {% for TopCategory in TopCategories %}
                                <ul class=\"list-unstyled\">
                                    {{ renderMacro.tree(TopCategory, TargetCategory.Parent.id | default(null), 0, Ids) }}
                                </ul>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Product/category.twig", "/var/www/htdocs/ec922501/app/template/admin/Product/category.twig");
    }
}
