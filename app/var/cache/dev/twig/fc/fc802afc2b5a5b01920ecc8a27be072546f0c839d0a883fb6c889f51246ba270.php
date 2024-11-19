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

/* @ProductOption/admin/Product/option.twig */
class __TwigTemplate_29e4f15cd84f032d3dcd412dc4907114298bb85de0af26b9b3b3759866f706d0 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/option.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/option.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "option"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@ProductOption/admin/Product/option.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.nav.product.option"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
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
        echo "    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 28
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        onChangeType();
        function changeAction(action) {
            document.form1.action = action;
        }

        function onChangeType() {
            val = \$(\"select[id='option_type']\").val();
            if (val == ";
        // line 40
        echo twig_escape_filter($this->env, twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXT_TYPE"), "html", null, true);
        echo "
                  || val == ";
        // line 41
        echo twig_escape_filter($this->env, twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXTAREA_TYPE"), "html", null, true);
        echo "
                  || val == ";
        // line 42
        echo twig_escape_filter($this->env, twig_constant("Plugin\\ProductOption\\Entity\\Option::DATE_TYPE"), "html", null, true);
        echo "
                  || val == ";
        // line 43
        echo twig_escape_filter($this->env, twig_constant("Plugin\\ProductOption\\Entity\\Option::NUMBER_TYPE"), "html", null, true);
        echo "
            ) {
                \$(\"[id='option_pricedisp_flg']\").attr(\"disabled\", \"disabled\");
                \$(\"[id='option_pricedisp_flg']\").prop(\"checked\", false);
            } else {
                \$(\"[id='option_pricedisp_flg']\").removeAttr(\"disabled\");
            }
            if (val == ";
        // line 50
        echo twig_escape_filter($this->env, twig_constant("Plugin\\ProductOption\\Entity\\Option::CHECKBOX_TYPE"), "html", null, true);
        echo ") {
                \$(\"[id='require_num_label']\").text(\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.require_num"), "html", null, true);
        echo "\");
                \$(\"[id='option_require_num']\").css(\"display\", \"block\");
                \$(\"[id='option_is_required']\").css(\"display\", \"none\");
            }else if(val == ";
        // line 54
        echo twig_escape_filter($this->env, twig_constant("Plugin\\ProductOption\\Entity\\Option::NUMBER_TYPE"), "html", null, true);
        echo "){
                \$(\"[id='require_num_label']\").text(\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.input_range"), "html", null, true);
        echo "\");
                \$(\"[id='option_require_num']\").css(\"display\", \"block\");
                \$(\"[id='option_is_required']\").css(\"display\", \"block\");
            }else{
                \$(\"[id='option_require_num']\").css(\"display\", \"none\");
                \$(\"[id='option_is_required']\").css(\"display\", \"block\");
            }
        }

        \$(function () {
            \$('#copy_from_backend').click(function () {
                var val = \$('input[id=option_backend_name]').val();
                \$('input[id=option_name]').val(val);
            });
        });

        \$(function() {
            var oldSortNos = [];
            // 画面の中のsortNo一覧を保持
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            // rsort
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();

            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                    updateSortNo();
                }
            });

            var updateSortNo = function() {
                // 並び替え後にsortNoを更新
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.optionId] = oldSortNos[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_option_sort_no_move");
        echo "',
                    type: 'POST',
                    headers: {
                        'x-csrf-token': \$('meta[name=\"x-csrf-token\"]').attr('content')
                    },
                    data: newSortNos
                }).done(function() {
                    // remove class disable
                    \$('a.up.disabled').removeClass('disabled');
                    \$('a.down.disabled').removeClass('disabled');
                    // First element
                    \$('.sortable-item > li:nth-child(2) > div > div.col-auto.text-right > a.up').addClass('disabled');
                }).always(function() {
                    redrawDisableAllows();
                    \$('.modal-backdrop').remove();
                });
            };

            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a').removeClass('disabled');
                items.first().find('a.up').addClass('disabled');
                items.last().find('a.down').addClass('disabled');
            };

            \$('.sortable-item a.up').click(function(e) {
                e.preventDefault();
                var current = \$(this).parents('.list-group-item');
                current.prev().before(current);
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            });

            \$('.sortable-item a.down').click(function(e) {
                e.preventDefault();
                var current = \$(this).parents('.list-group-item');
                current.next().after(current);
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 148
        echo "    <form role=\"form\" class=\"form-row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"?\">
        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "_token", [], "any", false, false, false, 149), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.info"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#ordererInfo\"
                                       aria-expanded=\"false\" aria-controls=\"ordererInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.backend_name"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "backend_name", [], "any", false, false, false, 174), 'widget');
        echo "
                                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "backend_name", [], "any", false, false, false, 175), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.name"), "html", null, true);
        echo "</span>
                                        <span class=\"badge badge-primary ml-1\">";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "name", [], "any", false, false, false, 186), 'widget');
        echo "
                                        ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "name", [], "any", false, false, false, 187), 'errors');
        echo "
                                        <a class=\"btn-normal\" href=\"javascript:;\" id=\"copy_from_backend\"><span>";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.copy"), "html", null, true);
        echo "</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.description"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "description", [], "any", false, false, false, 198), 'widget');
        echo "
                                        ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "description", [], "any", false, false, false, 199), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.type"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "type", [], "any", false, false, false, 209), 'widget', ["attr" => ["onChange" => "onChangeType()"]]);
        echo "
                                        ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "type", [], "any", false, false, false, 210), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.description_flg"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "description_flg", [], "any", false, false, false, 220), 'widget');
        echo "
                                        ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "description_flg", [], "any", false, false, false, 221), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "pricedisp_flg", [], "any", false, false, false, 230), 'widget');
        echo "
                                        ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "pricedisp_flg", [], "any", false, false, false, 231), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\" id=\"option_is_required\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.require"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "is_required", [], "any", false, false, false, 241), 'widget');
        echo "
                                        ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "is_required", [], "any", false, false, false, 242), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\" id=\"option_require_num\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span id=\"require_num_label\">";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.require_num"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "require_min", [], "any", false, false, false, 254), 'widget');
        echo "
                                            </div>
                                            <div>～</div>
                                            <div class=\"col\">
                                                ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "require_max", [], "any", false, false, false, 258), 'widget');
        echo "
                                            </div>
                                            ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "require_min", [], "any", false, false, false, 260), 'errors');
        echo "
                                            ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "require_max", [], "any", false, false, false, 261), 'errors');
        echo "
                                        </div>
                                    </div>
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
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <a href=\"";
        // line 281
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_option_new");
        echo "\">
                                <button class=\"btn btn-ec-regular\"
                                        type=\"button\">";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.new"), "html", null, true);
        echo "</button>
                                </a>
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.save"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    ";
        // line 297
        if ((twig_length_filter($this->env, (isset($context["Options"]) || array_key_exists("Options", $context) ? $context["Options"] : (function () { throw new RuntimeError('Variable "Options" does not exist.', 297, $this->source); })())) > 0)) {
            // line 298
            echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0 mb-2\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
            // line 308
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
            echo "</strong></div>
                                        <div class=\"col-auto\"><strong>";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.option"), "html", null, true);
            echo "</strong></div>
                                    </div>
                                </li>
                                ";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Options"]) || array_key_exists("Options", $context) ? $context["Options"] : (function () { throw new RuntimeError('Variable "Options" does not exist.', 312, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Option"]) {
                // line 313
                echo "                                    ";
                $context["type"] = twig_get_attribute($this->env, $this->source, $context["Option"], "type", [], "any", false, false, false, 313);
                // line 314
                echo "                                    <li id=\"ex-class_name-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 314), "html", null, true);
                echo "\" class=\"list-group-item sortable-item\" data-option-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 314), "html", null, true);
                echo "\" data-sort-no=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "sortNo", [], "any", false, false, false, 314), "html", null, true);
                echo "\">
                                        <div class=\"row justify-content-around mode-view\">
                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-auto d-flex align-items-center\">";
                // line 317
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 317), "html", null, true);
                echo "</div>
                                            <div class=\"col d-flex align-items-center\">
                                                ";
                // line 319
                if ((((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 319, $this->source); })()) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXT_TYPE")) || (                // line 320
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 320, $this->source); })()) == twig_constant("Plugin\\ProductOption\\Entity\\Option::TEXTAREA_TYPE"))) || (                // line 321
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 321, $this->source); })()) == twig_constant("Plugin\\ProductOption\\Entity\\Option::DATE_TYPE"))) || (                // line 322
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 322, $this->source); })()) == twig_constant("Plugin\\ProductOption\\Entity\\Option::NUMBER_TYPE")))) {
                    // line 323
                    echo "                                                    ";
                    $context["category_url"] = "admin_product_option_text_category";
                    // line 324
                    echo "                                                ";
                } else {
                    // line 325
                    echo "                                                    ";
                    $context["category_url"] = "admin_product_option_category";
                    // line 326
                    echo "                                                ";
                }
                // line 327
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["category_url"]) || array_key_exists("category_url", $context) ? $context["category_url"] : (function () { throw new RuntimeError('Variable "category_url" does not exist.', 327, $this->source); })()), ["option_id" => twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 327)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "name", [], "any", false, false, false, 327), "html", null, true);
                echo "［";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.backend_name"), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "backend_name", [], "any", false, false, false, 327), "html", null, true);
                echo "］";
                if (((isset($context["category_url"]) || array_key_exists("category_url", $context) ? $context["category_url"] : (function () { throw new RuntimeError('Variable "category_url" does not exist.', 327, $this->source); })()) == "admin_product_option_category")) {
                    echo " (";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "OptionCategories", [], "any", false, false, false, 327)), "html", null, true);
                    echo ") ";
                }
                echo " </a>

                                            </div>
                                            <div class=\"col-auto text-right\">
                                                <a class=\"btn btn-ec-actionIcon mr-3 up ";
                // line 331
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 331)) {
                    echo "disabled";
                }
                echo "\" href=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.up"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-3 down ";
                // line 334
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 334)) {
                    echo "disabled";
                }
                echo "\" href=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.down"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-3 action-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 337
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.edit"), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_option_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 337)]), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-3\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"";
                // line 340
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\"
                                                   data-toggle=\"modal\" data-target=\"#delete_";
                // line 341
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 341), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                </a>

                                                <div class=\"modal fade\" id=\"delete_";
                // line 345
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 345), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                     role=\"dialog\"
                                                     aria-labelledby=\"delete_";
                // line 347
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 347), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title font-weight-bold\">
                                                                    ";
                // line 352
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.modal.header"), "html", null, true);
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
                // line 361
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.modal.body"), "html", null, true);
                echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 364
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                </button>
                                                                <a class=\"btn btn-ec-delete\" href=\"";
                // line 366
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_option_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Option"], "id", [], "any", false, false, false, 366)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                   data-method=\"delete\" data-confirm=\"false\">";
                // line 367
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 378
            echo "                            </ul>
                        </div>
                    </div>
                </div>
                <p>";
            // line 382
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.sortable"), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 387
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.no_item"), "html", null, true);
            echo "</p>
    ";
        }
        // line 389
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Product/option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 389,  782 => 387,  774 => 382,  768 => 378,  743 => 367,  737 => 366,  732 => 364,  726 => 361,  714 => 352,  706 => 347,  701 => 345,  694 => 341,  690 => 340,  682 => 337,  672 => 334,  662 => 331,  642 => 327,  639 => 326,  636 => 325,  633 => 324,  630 => 323,  628 => 322,  627 => 321,  626 => 320,  625 => 319,  620 => 317,  609 => 314,  606 => 313,  589 => 312,  583 => 309,  579 => 308,  567 => 298,  565 => 297,  553 => 288,  545 => 283,  540 => 281,  517 => 261,  513 => 260,  508 => 258,  501 => 254,  493 => 249,  483 => 242,  479 => 241,  473 => 238,  463 => 231,  459 => 230,  447 => 221,  443 => 220,  437 => 217,  427 => 210,  423 => 209,  417 => 206,  407 => 199,  403 => 198,  397 => 195,  387 => 188,  383 => 187,  379 => 186,  373 => 183,  369 => 182,  359 => 175,  355 => 174,  349 => 171,  345 => 170,  328 => 156,  318 => 149,  315 => 148,  305 => 147,  250 => 101,  201 => 55,  197 => 54,  191 => 51,  187 => 50,  177 => 43,  173 => 42,  169 => 41,  165 => 40,  153 => 31,  149 => 30,  145 => 29,  140 => 28,  130 => 27,  115 => 21,  105 => 20,  86 => 17,  67 => 16,  56 => 11,  54 => 19,  52 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
#}

{% extends '@admin/default_frame.twig' %}

{% set menus = ['product', 'option'] %}


{% block title %}{{ 'productoption.admin.nav.product.option'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% block stylesheet %}
    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
{% endblock stylesheet %}
{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>
    <script>
        onChangeType();
        function changeAction(action) {
            document.form1.action = action;
        }

        function onChangeType() {
            val = \$(\"select[id='option_type']\").val();
            if (val == {{ constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::TEXT_TYPE') }}
                  || val == {{ constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::TEXTAREA_TYPE') }}
                  || val == {{ constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DATE_TYPE') }}
                  || val == {{ constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::NUMBER_TYPE')}}
            ) {
                \$(\"[id='option_pricedisp_flg']\").attr(\"disabled\", \"disabled\");
                \$(\"[id='option_pricedisp_flg']\").prop(\"checked\", false);
            } else {
                \$(\"[id='option_pricedisp_flg']\").removeAttr(\"disabled\");
            }
            if (val == {{ constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::CHECKBOX_TYPE') }}) {
                \$(\"[id='require_num_label']\").text(\"{{ 'productoption.admin.product.option.require_num'|trans }}\");
                \$(\"[id='option_require_num']\").css(\"display\", \"block\");
                \$(\"[id='option_is_required']\").css(\"display\", \"none\");
            }else if(val == {{ constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::NUMBER_TYPE') }}){
                \$(\"[id='require_num_label']\").text(\"{{ 'productoption.admin.product.option.input_range'|trans }}\");
                \$(\"[id='option_require_num']\").css(\"display\", \"block\");
                \$(\"[id='option_is_required']\").css(\"display\", \"block\");
            }else{
                \$(\"[id='option_require_num']\").css(\"display\", \"none\");
                \$(\"[id='option_is_required']\").css(\"display\", \"block\");
            }
        }

        \$(function () {
            \$('#copy_from_backend').click(function () {
                var val = \$('input[id=option_backend_name]').val();
                \$('input[id=option_name]').val(val);
            });
        });

        \$(function() {
            var oldSortNos = [];
            // 画面の中のsortNo一覧を保持
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            // rsort
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();

            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                    updateSortNo();
                }
            });

            var updateSortNo = function() {
                // 並び替え後にsortNoを更新
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.optionId] = oldSortNos[i];
                    i++;
                });

                \$.ajax({
                    url: '{{ url('admin_product_option_sort_no_move') }}',
                    type: 'POST',
                    headers: {
                        'x-csrf-token': \$('meta[name=\"x-csrf-token\"]').attr('content')
                    },
                    data: newSortNos
                }).done(function() {
                    // remove class disable
                    \$('a.up.disabled').removeClass('disabled');
                    \$('a.down.disabled').removeClass('disabled');
                    // First element
                    \$('.sortable-item > li:nth-child(2) > div > div.col-auto.text-right > a.up').addClass('disabled');
                }).always(function() {
                    redrawDisableAllows();
                    \$('.modal-backdrop').remove();
                });
            };

            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a').removeClass('disabled');
                items.first().find('a.up').addClass('disabled');
                items.last().find('a.down').addClass('disabled');
            };

            \$('.sortable-item a.up').click(function(e) {
                e.preventDefault();
                var current = \$(this).parents('.list-group-item');
                current.prev().before(current);
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            });

            \$('.sortable-item a.down').click(function(e) {
                e.preventDefault();
                var current = \$(this).parents('.list-group-item');
                current.next().after(current);
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            });
        });

    </script>
{% endblock javascript %}

{% block main %}
    <form role=\"form\" class=\"form-row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"?\">
        {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">{{ 'productoption.admin.product.option.info'|trans }}</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#ordererInfo\"
                                       aria-expanded=\"false\" aria-controls=\"ordererInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'productoption.admin.product.option.backend_name'|trans }}</span>
                                        <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.backend_name) }}
                                        {{ form_errors(form.backend_name) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'productoption.admin.product.option.name'|trans }}</span>
                                        <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.name) }}
                                        {{ form_errors(form.name) }}
                                        <a class=\"btn-normal\" href=\"javascript:;\" id=\"copy_from_backend\"><span>{{ 'productoption.admin.product.option.copy'|trans }}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'productoption.admin.product.option.description'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.description) }}
                                        {{ form_errors(form.description) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'productoption.admin.product.option.type'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.type, { attr : { onChange : 'onChangeType()' } }) }}
                                        {{ form_errors(form.type) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'productoption.admin.product.option.description_flg'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.description_flg) }}
                                        {{ form_errors(form.description_flg) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.pricedisp_flg) }}
                                        {{ form_errors(form.pricedisp_flg) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\" id=\"option_is_required\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ 'productoption.admin.product.option.require'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.is_required) }}
                                        {{ form_errors(form.is_required) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\" id=\"option_require_num\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span id=\"require_num_label\">{{ 'productoption.admin.product.option.require_num'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                {{ form_widget(form.require_min) }}
                                            </div>
                                            <div>～</div>
                                            <div class=\"col\">
                                                {{ form_widget(form.require_max) }}
                                            </div>
                                            {{ form_errors(form.require_min) }}
                                            {{ form_errors(form.require_max) }}
                                        </div>
                                    </div>
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
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <a href=\"{{ url('admin_product_option_new') }}\">
                                <button class=\"btn btn-ec-regular\"
                                        type=\"button\">{{ 'productoption.admin.common.new'|trans }}</button>
                                </a>
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">{{ 'productoption.admin.common.save'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {% if Options|length > 0 %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0 mb-2\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>{{ 'admin.common.id'|trans }}</strong></div>
                                        <div class=\"col-auto\"><strong>{{ 'productoption.admin.common.option'|trans }}</strong></div>
                                    </div>
                                </li>
                                {% for Option in Options %}
                                    {% set type = Option.type %}
                                    <li id=\"ex-class_name-{{ Option.id }}\" class=\"list-group-item sortable-item\" data-option-id=\"{{ Option.id }}\" data-sort-no=\"{{ Option.sortNo }}\">
                                        <div class=\"row justify-content-around mode-view\">
                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-auto d-flex align-items-center\">{{ Option.id }}</div>
                                            <div class=\"col d-flex align-items-center\">
                                                {% if type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::TEXT_TYPE')
                                                   or type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::TEXTAREA_TYPE')
                                                   or type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::DATE_TYPE')
                                                   or type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::NUMBER_TYPE') %}
                                                    {% set category_url = 'admin_product_option_text_category' %}
                                                {% else %}
                                                    {% set category_url = 'admin_product_option_category' %}
                                                {% endif %}
                                                <a href=\"{{ url(category_url, {option_id : Option.id }) }}\">{{ Option.name }}［{{ 'productoption.admin.product.option.backend_name'|trans }}:{{ Option.backend_name }}］{% if category_url == 'admin_product_option_category'%} ({{ Option.OptionCategories|length }}) {% endif %} </a>

                                            </div>
                                            <div class=\"col-auto text-right\">
                                                <a class=\"btn btn-ec-actionIcon mr-3 up {% if loop.first %}disabled{% endif %}\" href=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'productoption.admin.common.up'|trans }}\">
                                                    <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-3 down {% if loop.last %}disabled{% endif %}\" href=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'productoption.admin.common.down'|trans }}\">
                                                    <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-3 action-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'productoption.admin.product.option.edit'|trans }}\" href=\"{{ url('admin_product_option_edit', {id : Option.id }) }}\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-3\" data-tooltip=\"tooltip\" data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\"
                                                   data-toggle=\"modal\" data-target=\"#delete_{{ Option.id }}\">
                                                    <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                </a>

                                                <div class=\"modal fade\" id=\"delete_{{ Option.id }}\" tabindex=\"-1\"
                                                     role=\"dialog\"
                                                     aria-labelledby=\"delete_{{ Option.id }}\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title font-weight-bold\">
                                                                    {{ 'productoption.admin.product.option.modal.header'|trans }}</h5>
                                                                <button class=\"close\" type=\"button\"
                                                                        data-dismiss=\"modal\"
                                                                        aria-label=\"Close\"><span
                                                                            aria-hidden=\"true\">×</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-left\">
                                                                <p class=\"text-left\">
                                                                    {{ 'productoption.admin.product.option.modal.body'|trans }}</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}
                                                                </button>
                                                                <a class=\"btn btn-ec-delete\" href=\"{{ url('admin_product_option_delete', {'id' : Option.id}) }}\" {{ csrf_token_for_anchor() }}
                                                                   data-method=\"delete\" data-confirm=\"false\">{{ 'admin.common.delete'|trans }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
                <p>{{ 'productoption.admin.product.option.sortable'|trans }}</p>
            </div>
        </div>
    </div>
    {% else %}
        <p>{{ 'productoption.admin.product.option.no_item'|trans }}</p>
    {% endif %}

{% endblock %}
", "@ProductOption/admin/Product/option.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Product/option.twig");
    }
}
