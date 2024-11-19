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

/* @admin/Product/product_class.twig */
class __TwigTemplate_8c1149f6dde07b50b20c28a1ae8b9d91caf7c00dcee0f9a707527d53c6e5f6a3 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product_class.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/product_class.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["clearForm"]) || array_key_exists("clearForm", $context) ? $context["clearForm"] : (function () { throw new RuntimeError('Variable "clearForm" does not exist.', 19, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/product_class.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration"), "html", null, true);
        
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

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script>
        \$(function() {

            // 無制限チェックボックス初期表示
            \$('input[id\$=_stock_unlimited]').each(function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                }
            });


            // 無制限チェックボックス
            \$('input[id\$=_stock_unlimited]').on('click', function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                    \$('#product_class_matrix_product_classes_' + index + '_one_day_limit').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                    \$('#product_class_matrix_product_classes_' + index + '_one_day_limit').prop('disabled', false);
                }
            });

            // 登録チェックボックス
            \$('#check-all').click(function() {
                var checked = \$('#check-all').prop('checked');
                if (checked) {
                    \$('input[id\$=_checked]').prop('checked', true);
                } else {
                    \$('input[id\$=_checked]').prop('checked', false);
                }
            });

            // 1行目をコピーボタン
            \$('#copy').on('click', function(event) {
                event.preventDefault();

                var check = \$('#product_class_matrix_product_classes_0_add').prop('checked');
                \$('input[id\$=_add]').prop('checked', check);

                var product_code = \$('#product_class_matrix_product_classes_0_code').val();
                \$('input[id\$=_code]').val(product_code);

                var stock = \$('#product_class_matrix_product_classes_0_stock').val();
                \$('input[id\$=_stock]').val(stock);

                var stock_unlimited = \$('#product_class_matrix_product_classes_0_stock_unlimited').prop('checked');
                // 無制限チェックボックス
                \$('input[id\$=_stock_unlimited]').each(function() {
                    var index = \$(this).attr('id').match(/\\d+/);

                    if (stock_unlimited) {
                        \$(this).prop('checked', true);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                        \$('#product_class_matrix_product_classes_' + index + '_one_day_limit').prop('disabled', true);
                    } else {
                        \$(this).prop('checked', false);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                        \$('#product_class_matrix_product_classes_' + index + '_one_day_limit').prop('disabled', false);
                    }
                });

                var one_day_limit = \$('#product_class_matrix_product_classes_0_one_day_limit').val();
                \$('input[id\$=_one_day_limit]').val(one_day_limit);

                var sale_limit = \$('#product_class_matrix_product_classes_0_sale_limit').val();
                \$('input[id\$=_sale_limit]').val(sale_limit);

                var price01 = \$('#product_class_matrix_product_classes_0_price01').val();
                \$('input[id\$=_price01]').val(price01);

                var price02 = \$('#product_class_matrix_product_classes_0_price02').val();
                \$('input[id\$=_price02]').val(price02);

                var delivery_fee = \$('#product_class_matrix_product_classes_delivery_fee').val();
                \$('input[id\$=_delivery_fee]').val(delivery_fee);

                var delivery_duration = \$('#product_class_matrix_product_classes_0_delivery_duration').val();
                \$('select[id\$=_delivery_duration]').val(delivery_duration);

                var tax_rate = \$('#product_class_matrix_product_classes_0_tax_rate').val();
                \$('input[id\$=_tax_rate]').val(tax_rate);

                var sale_type = \$('#product_class_matrix_product_classes_0_sale_type').val();
                \$('select[id\$=_sale_type]').val(sale_type);
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 120
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 121
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 125, $this->source); })()), "hasProductClass", [], "any", false, false, false, 125)) {
            // line 126
            echo "
                        ";
            // line 128
            echo "                        <div id=\"ex-product_class-header\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title align-middle\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 131, $this->source); })()), "name", [], "any", false, false, false, 131), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    ";
            // line 135
            echo "                                    <button class=\"btn btn-ec-delete\" type=\"button\"
                                            data-toggle=\"modal\"
                                            data-target=\"#initializationConfirm\">";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset"), "html", null, true);
            echo "
                                    </button>
                                    ";
            // line 140
            echo "                                    <div class=\"modal fade\" id=\"initializationConfirm\" tabindex=\"-1\"
                                         role=\"dialog\"
                                         aria-labelledby=\"deleteConfirm\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title font-weight-bold\">";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_title"), "html", null, true);
            echo "</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                            aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p class=\"text-left\">
                                                        ";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_message"), "html", null, true);
            echo "</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                            data-dismiss=\"modal\">
                                                        ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "
                                                    </button>
                                                    <form method=\"post\"
                                                          action=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class_clear", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161), "return_product_list" => (isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 161, $this->source); })())]), "html", null, true);
            echo "\">
                                                        ";
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clearForm"]) || array_key_exists("clearForm", $context) ? $context["clearForm"] : (function () { throw new RuntimeError('Variable "clearForm" does not exist.', 162, $this->source); })()), "_token", [], "any", false, false, false, 162), 'widget');
            echo "
                                                        <button class=\"btn btn-ec-delete\" type=\"submit\">
                                                            ";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_excecute"), "html", null, true);
            echo "
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"ex-product_class-body\" class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col\">
                                    <div class=\"d-inline-block mr-2\">
                                        <span>";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"d-inline-block\">
                                        <span>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName1"]) || array_key_exists("ClassName1", $context) ? $context["ClassName1"] : (function () { throw new RuntimeError('Variable "ClassName1" does not exist.', 181, $this->source); })()), "name", [], "any", false, false, false, 181), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName1"]) || array_key_exists("ClassName1", $context) ? $context["ClassName1"] : (function () { throw new RuntimeError('Variable "ClassName1" does not exist.', 181, $this->source); })()), "backend_name", [], "any", false, false, false, 181), "html", null, true);
            echo "]</span>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 185
            if ((isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 185, $this->source); })())) {
                // line 186
                echo "                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"d-inline-block mr-2\">
                                            <span>";
                // line 189
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</span>
                                        </div>
                                        <div class=\"d-inline-block\">
                                            <span>";
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 192, $this->source); })()), "name", [], "any", false, false, false, 192), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 192, $this->source); })()), "backend_name", [], "any", false, false, false, 192), "html", null, true);
                echo "]</span>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 197
            echo "                        </div>
                    ";
        } else {
            // line 199
            echo "                        ";
            // line 200
            echo "                        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 200, $this->source); })()), "id", [], "any", false, false, false, 200), "return_product_list" => (isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 200, $this->source); })())]), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
            echo "\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <span class=\"card-title align-middle\">";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 205, $this->source); })()), "name", [], "any", false, false, false, 205), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        ";
            // line 209
            echo "                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">
                                            ";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__create"), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"form-row mb-2\">
                                    ";
            // line 217
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "class_name1", [], "any", false, false, false, 217), 'widget');
            echo "
                                    ";
            // line 218
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "class_name1", [], "any", false, false, false, 218), 'errors');
            echo "
                                </div>
                                <div class=\"form-row\">
                                    ";
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "class_name2", [], "any", false, false, false, 221), 'widget');
            echo "
                                    ";
            // line 222
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "class_name2", [], "any", false, false, false, 222), 'errors');
            echo "
                                </div>
                            </div>
                        </form>
                    ";
        }
        // line 227
        echo "                </div>

                ";
        // line 229
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "product_classes", [], "any", false, false, false, 229)) > 0)) {
            // line 230
            echo "                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 230, $this->source); })()), "id", [], "any", false, false, false, 230), "return_product_list" => (isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 230, $this->source); })())]), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "class_name1", [], "any", false, false, false, 232), "vars", [], "any", false, false, false, 232), "full_name", [], "any", false, false, false, 232), "html", null, true);
            echo "\"
                               value=\"";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "class_name1", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "value", [], "any", false, false, false, 233), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "class_name2", [], "any", false, false, false, 234), "vars", [], "any", false, false, false, 234), "full_name", [], "any", false, false, false, 234), "html", null, true);
            echo "\"
                               value=\"";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "class_name2", [], "any", false, false, false, 235), "vars", [], "any", false, false, false, 235), "value", [], "any", false, false, false, 235), "html", null, true);
            echo "\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-6\">
                                        <span class=\"align-middle\">
                                            ";
            // line 241
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.procuct_class_count", ["%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 242
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "product_classes", [], "any", false, false, false, 242))]), "html", null, true);
            // line 243
            echo "</span>
                                        ";
            // line 244
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "product_classes", [], "any", false, false, false, 244), 'errors');
            echo "
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <button type=\"button\" id=\"copy\" class=\"btn btn-ec-regular\">
                                            <i class=\"fa fa-files-o mr-1\"></i>
                                            <span>";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy_first_line"), "html", null, true);
            echo "</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"ex-product_class\" class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <th class=\"pt-2 pb-2 pl-3\">
                                        <input type=\"checkbox\" id=\"check-all\">
                                    </th>
                                    <th class=\"pt-2 pb-2\">";
            // line 260
            (((isset($context["ClassName1"]) || array_key_exists("ClassName1", $context) ? $context["ClassName1"] : (function () { throw new RuntimeError('Variable "ClassName1" does not exist.', 260, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName1"]) || array_key_exists("ClassName1", $context) ? $context["ClassName1"] : (function () { throw new RuntimeError('Variable "ClassName1" does not exist.', 260, $this->source); })()), "name", [], "any", false, false, false, 260), "html", null, true))) : (print ("")));
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 261
            (((isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 261, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 261, $this->source); })()), "name", [], "any", false, false, false, 261), "html", null, true))) : (print ("")));
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 262
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 263
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock__short"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.one_day_limit"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</th>
                                    ";
            // line 268
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 268, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, false, 268)) {
                // line 269
                echo "                                        <th class=\"pt-2 pb-2\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</th>
                                    ";
            }
            // line 271
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 271, $this->source); })()), "option_product_tax_rule", [], "any", false, false, false, 271)) {
                // line 272
                echo "                                        <th class=\"pt-2 pb-2\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</th>
                                    ";
            }
            // line 274
            echo "                                    <th class=\"pt-2 pb-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2 pr-3\">";
            // line 275
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</th>

                                    ";
            // line 278
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "product_classes", [], "any", false, false, false, 278));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product_class_form"]) {
                // line 279
                echo "                                        ";
                // line 280
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 280)) {
                    // line 281
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($context["product_class_form"], function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 281), "eccube_form_options", [], "any", false, false, false, 281), "auto_render", [], "any", false, false, false, 281); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 282
                        echo "                                                <th class=\"pt-2 pb-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 282), "label", [], "any", false, false, false, 282)), "html", null, true);
                        echo "</th>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 284
                    echo "                                        ";
                }
                // line 285
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_class_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "
                                    </thead>
                                    ";
            // line 288
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "product_classes", [], "any", false, false, false, 288));
            foreach ($context['_seq'] as $context["_key"] => $context["product_class_form"]) {
                // line 289
                echo "                                        <tr id=\"ex-product_class-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, false, 289), "name", [], "any", false, false, false, 289), "html", null, true);
                echo "\">
                                            <td class=\"align-middle pl-3\">
                                                ";
                // line 291
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "checked", [], "any", false, false, false, 291), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 294
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, false, 294), "value", [], "any", false, false, false, 294), "ClassCategory1", [], "any", false, false, false, 294), "html", null, true);
                echo "
                                                ";
                // line 295
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "ClassCategory1", [], "any", false, false, false, 295), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 298
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, false, 298), "value", [], "any", false, false, false, 298), "ClassCategory2", [], "any", false, false, false, 298), "html", null, true);
                echo "
                                                ";
                // line 299
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "ClassCategory2", [], "any", false, false, false, 299), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 302
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "code", [], "any", false, false, false, 302), 'widget');
                echo "
                                                ";
                // line 303
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "code", [], "any", false, false, false, 303), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-5\">
                                                        ";
                // line 308
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock", [], "any", false, false, false, 308), 'widget');
                echo "
                                                        ";
                // line 309
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock", [], "any", false, false, false, 309), 'errors');
                echo "
                                                    </div>
                                                    <div class=\"col-auto\">
                                                        <div class=\"form-check form-check-inline\">
                                                            ";
                // line 313
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock_unlimited", [], "any", false, false, false, 313), 'widget');
                echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-6\">
                                                        ";
                // line 321
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "one_day_limit", [], "any", false, false, false, 321), 'widget');
                echo "
                                                        ";
                // line 322
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "one_day_limit", [], "any", false, false, false, 322), 'errors');
                echo "
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-6\">
                                                        ";
                // line 329
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_limit", [], "any", false, false, false, 329), 'widget');
                echo "
                                                        ";
                // line 330
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_limit", [], "any", false, false, false, 330), 'errors');
                echo "
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 335
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price01", [], "any", false, false, false, 335), 'widget');
                echo "
                                                ";
                // line 336
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price01", [], "any", false, false, false, 336), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 339
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price02", [], "any", false, false, false, 339), 'widget');
                echo "
                                                ";
                // line 340
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price02", [], "any", false, false, false, 340), 'errors');
                echo "
                                            </td>
                                            ";
                // line 342
                if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 342, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, false, 342)) {
                    // line 343
                    echo "                                                <td class=\"align-middle\">
                                                    ";
                    // line 344
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_fee", [], "any", false, false, false, 344), 'widget');
                    echo "
                                                    ";
                    // line 345
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_fee", [], "any", false, false, false, 345), 'errors');
                    echo "
                                                </td>
                                            ";
                }
                // line 348
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 348, $this->source); })()), "option_product_tax_rule", [], "any", false, false, false, 348)) {
                    // line 349
                    echo "                                                <td class=\"align-middle\">
                                                    ";
                    // line 350
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "tax_rate", [], "any", false, false, false, 350), 'widget');
                    echo "
                                                    ";
                    // line 351
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "tax_rate", [], "any", false, false, false, 351), 'errors');
                    echo "
                                                </td>
                                            ";
                }
                // line 354
                echo "                                            <td class=\"align-middle\">
                                                ";
                // line 355
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_duration", [], "any", false, false, false, 355), 'widget');
                echo "
                                                ";
                // line 356
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_duration", [], "any", false, false, false, 356), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle pr-3\">
                                                ";
                // line 359
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_type", [], "any", false, false, false, 359), 'widget');
                echo "
                                                ";
                // line 360
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_type", [], "any", false, false, false, 360), 'errors');
                echo "
                                            </td>
                                            ";
                // line 363
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($context["product_class_form"], function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 363), "eccube_form_options", [], "any", false, false, false, 363), "auto_render", [], "any", false, false, false, 363); }));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    // line 364
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 364), "eccube_form_options", [], "any", false, false, false, 364), "form_theme", [], "any", false, false, false, 364)) {
                        // line 365
                        echo "                                                    ";
                        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 365), "eccube_form_options", [], "any", false, false, false, 365), "form_theme", [], "any", false, false, false, 365)], true);
                        // line 366
                        echo "                                                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                        echo "
                                                ";
                    } else {
                        // line 368
                        echo "                                                    <td class=\"align-middle pr-3\">
                                                        ";
                        // line 369
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                        ";
                        // line 370
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                    </td>
                                                ";
                    }
                    // line 373
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_class_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            echo "                                </table>
                            </div>
                        </div>
                        <div class=\"c-conversionArea\">
                            <div class=\"c-conversionArea__container\">
                                <div class=\"row justify-content-between align-items-center\">
                                    <div class=\"col-6\">
                                        <div class=\"c-conversionArea__leftBlockItem\">
                                            ";
            // line 384
            if ((isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 384, $this->source); })())) {
                // line 385
                echo "                                                <a class=\"c-baseLink\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product", ["resume" => 1]);
                echo "\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>";
                // line 387
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
                echo "</span>
                                                </a>
                                            ";
            } else {
                // line 390
                echo "                                                <a class=\"c-baseLink\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 390, $this->source); })()), "id", [], "any", false, false, false, 390)]), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>";
                // line 392
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
                echo "</span>
                                                </a>
                                            ";
            }
            // line 395
            echo "                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                            <div class=\"col-auto\">
                                                <button class=\"btn btn-ec-conversion px-5\" name=\"";
            // line 400
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "save", [], "any", false, false, false, 400), "vars", [], "any", false, false, false, 400), "full_name", [], "any", false, false, false, 400), "html", null, true);
            echo "\" type=\"submit\">
                                                    ";
            // line 401
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
            echo "
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                ";
        } else {
            // line 412
            echo "                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\">
                                        ";
            // line 417
            if ((isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 417, $this->source); })())) {
                // line 418
                echo "                                            <a class=\"c-baseLink\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product", ["resume" => 1]);
                echo "\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>";
                // line 420
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            } else {
                // line 423
                echo "                                            <a class=\"c-baseLink\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 423, $this->source); })()), "id", [], "any", false, false, false, 423)]), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>";
                // line 425
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            }
            // line 428
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 434
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Product/product_class.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  915 => 434,  907 => 428,  901 => 425,  895 => 423,  889 => 420,  883 => 418,  881 => 417,  874 => 412,  860 => 401,  856 => 400,  849 => 395,  843 => 392,  837 => 390,  831 => 387,  825 => 385,  823 => 384,  813 => 376,  806 => 374,  800 => 373,  794 => 370,  790 => 369,  787 => 368,  781 => 366,  778 => 365,  775 => 364,  770 => 363,  765 => 360,  761 => 359,  755 => 356,  751 => 355,  748 => 354,  742 => 351,  738 => 350,  735 => 349,  732 => 348,  726 => 345,  722 => 344,  719 => 343,  717 => 342,  712 => 340,  708 => 339,  702 => 336,  698 => 335,  690 => 330,  686 => 329,  676 => 322,  672 => 321,  661 => 313,  654 => 309,  650 => 308,  642 => 303,  638 => 302,  632 => 299,  628 => 298,  622 => 295,  618 => 294,  612 => 291,  606 => 289,  602 => 288,  598 => 286,  584 => 285,  581 => 284,  572 => 282,  567 => 281,  564 => 280,  562 => 279,  544 => 278,  539 => 275,  534 => 274,  528 => 272,  525 => 271,  519 => 269,  517 => 268,  513 => 267,  509 => 266,  505 => 265,  501 => 264,  497 => 263,  493 => 262,  489 => 261,  485 => 260,  471 => 249,  463 => 244,  460 => 243,  458 => 242,  457 => 241,  448 => 235,  444 => 234,  440 => 233,  436 => 232,  432 => 231,  427 => 230,  425 => 229,  421 => 227,  413 => 222,  409 => 221,  403 => 218,  399 => 217,  389 => 210,  386 => 209,  380 => 205,  373 => 201,  368 => 200,  366 => 199,  362 => 197,  350 => 192,  344 => 189,  339 => 186,  337 => 185,  326 => 181,  320 => 178,  303 => 164,  298 => 162,  294 => 161,  288 => 158,  280 => 153,  270 => 146,  262 => 140,  257 => 137,  253 => 135,  247 => 131,  242 => 128,  239 => 126,  237 => 125,  231 => 121,  221 => 120,  116 => 22,  106 => 21,  87 => 16,  68 => 15,  57 => 11,  55 => 19,  53 => 18,  51 => 13,  38 => 11,);
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

{% set menus = ['product', 'product_edit'] %}

{% block title %}{{ 'admin.product.product_class_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme clearForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(function() {

            // 無制限チェックボックス初期表示
            \$('input[id\$=_stock_unlimited]').each(function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                }
            });


            // 無制限チェックボックス
            \$('input[id\$=_stock_unlimited]').on('click', function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                    \$('#product_class_matrix_product_classes_' + index + '_one_day_limit').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                    \$('#product_class_matrix_product_classes_' + index + '_one_day_limit').prop('disabled', false);
                }
            });

            // 登録チェックボックス
            \$('#check-all').click(function() {
                var checked = \$('#check-all').prop('checked');
                if (checked) {
                    \$('input[id\$=_checked]').prop('checked', true);
                } else {
                    \$('input[id\$=_checked]').prop('checked', false);
                }
            });

            // 1行目をコピーボタン
            \$('#copy').on('click', function(event) {
                event.preventDefault();

                var check = \$('#product_class_matrix_product_classes_0_add').prop('checked');
                \$('input[id\$=_add]').prop('checked', check);

                var product_code = \$('#product_class_matrix_product_classes_0_code').val();
                \$('input[id\$=_code]').val(product_code);

                var stock = \$('#product_class_matrix_product_classes_0_stock').val();
                \$('input[id\$=_stock]').val(stock);

                var stock_unlimited = \$('#product_class_matrix_product_classes_0_stock_unlimited').prop('checked');
                // 無制限チェックボックス
                \$('input[id\$=_stock_unlimited]').each(function() {
                    var index = \$(this).attr('id').match(/\\d+/);

                    if (stock_unlimited) {
                        \$(this).prop('checked', true);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                        \$('#product_class_matrix_product_classes_' + index + '_one_day_limit').prop('disabled', true);
                    } else {
                        \$(this).prop('checked', false);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                        \$('#product_class_matrix_product_classes_' + index + '_one_day_limit').prop('disabled', false);
                    }
                });

                var one_day_limit = \$('#product_class_matrix_product_classes_0_one_day_limit').val();
                \$('input[id\$=_one_day_limit]').val(one_day_limit);

                var sale_limit = \$('#product_class_matrix_product_classes_0_sale_limit').val();
                \$('input[id\$=_sale_limit]').val(sale_limit);

                var price01 = \$('#product_class_matrix_product_classes_0_price01').val();
                \$('input[id\$=_price01]').val(price01);

                var price02 = \$('#product_class_matrix_product_classes_0_price02').val();
                \$('input[id\$=_price02]').val(price02);

                var delivery_fee = \$('#product_class_matrix_product_classes_delivery_fee').val();
                \$('input[id\$=_delivery_fee]').val(delivery_fee);

                var delivery_duration = \$('#product_class_matrix_product_classes_0_delivery_duration').val();
                \$('select[id\$=_delivery_duration]').val(delivery_duration);

                var tax_rate = \$('#product_class_matrix_product_classes_0_tax_rate').val();
                \$('input[id\$=_tax_rate]').val(tax_rate);

                var sale_type = \$('#product_class_matrix_product_classes_0_sale_type').val();
                \$('select[id\$=_sale_type]').val(sale_type);
            });
        });
    </script>
{% endblock javascript %}


{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    {% if Product.hasProductClass %}

                        {# 規格あり商品 #}
                        <div id=\"ex-product_class-header\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title align-middle\">{{ Product.name }}</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    {# 規格の初期化ボタン #}
                                    <button class=\"btn btn-ec-delete\" type=\"button\"
                                            data-toggle=\"modal\"
                                            data-target=\"#initializationConfirm\">{{ 'admin.product.product_class__reset'|trans }}
                                    </button>
                                    {# 規格の初期化モーダル #}
                                    <div class=\"modal fade\" id=\"initializationConfirm\" tabindex=\"-1\"
                                         role=\"dialog\"
                                         aria-labelledby=\"deleteConfirm\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title font-weight-bold\">{{ 'admin.product.product_class__reset_confirm_title'|trans }}</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                            aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p class=\"text-left\">
                                                        {{ 'admin.product.product_class__reset_confirm_message'|trans }}</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                            data-dismiss=\"modal\">
                                                        {{ 'admin.common.cancel'|trans }}
                                                    </button>
                                                    <form method=\"post\"
                                                          action=\"{{ url('admin_product_product_class_clear', { id: Product.id, return_product_list: return_product_list }) }}\">
                                                        {{ form_widget(clearForm._token) }}
                                                        <button class=\"btn btn-ec-delete\" type=\"submit\">
                                                            {{ 'admin.product.product_class__reset_confirm_excecute'|trans }}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"ex-product_class-body\" class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col\">
                                    <div class=\"d-inline-block mr-2\">
                                        <span>{{ 'admin.product.class_category1__short'|trans }}</span>
                                    </div>
                                    <div class=\"d-inline-block\">
                                        <span>{{ ClassName1.name }} [{{ 'admin.product.class_name__backend_name'|trans }}{{ 'admin.common.separator__colon'|trans }}{{ ClassName1.backend_name }}]</span>
                                    </div>
                                </div>
                            </div>
                            {% if ClassName2 %}
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"d-inline-block mr-2\">
                                            <span>{{ 'admin.product.class_category2__short'|trans }}</span>
                                        </div>
                                        <div class=\"d-inline-block\">
                                            <span>{{ ClassName2.name }} [{{ 'admin.product.class_name__backend_name'|trans }}{{ 'admin.common.separator__colon'|trans }}{{ ClassName2.backend_name }}]</span>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% else %}
                        {# 規格なし商品 #}
                        <form method=\"post\" action=\"{{ url('admin_product_product_class', { id: Product.id, return_product_list: return_product_list }) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('_token') }}\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <span class=\"card-title align-middle\">{{ Product.name }}</span>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        {# 商品規格の設定ボタン #}
                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">
                                            {{ 'admin.product.product_class__create'|trans }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"form-row mb-2\">
                                    {{ form_widget(form.class_name1) }}
                                    {{ form_errors(form.class_name1) }}
                                </div>
                                <div class=\"form-row\">
                                    {{ form_widget(form.class_name2) }}
                                    {{ form_errors(form.class_name2) }}
                                </div>
                            </div>
                        </form>
                    {% endif %}
                </div>

                {% if form.product_classes|length > 0 %}
                    <form method=\"post\" action=\"{{ url('admin_product_product_class', {'id': Product.id, return_product_list: return_product_list }) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('_token') }}\">
                        <input type=\"hidden\" name=\"{{ form.class_name1.vars.full_name }}\"
                               value=\"{{ form.class_name1.vars.value }}\">
                        <input type=\"hidden\" name=\"{{ form.class_name2.vars.full_name }}\"
                               value=\"{{ form.class_name2.vars.value }}\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-6\">
                                        <span class=\"align-middle\">
                                            {{ 'admin.product.procuct_class_count'|trans({
                                                '%count%' : form.product_classes|length
                                            }) }}</span>
                                        {{ form_errors(form.product_classes) }}
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <button type=\"button\" id=\"copy\" class=\"btn btn-ec-regular\">
                                            <i class=\"fa fa-files-o mr-1\"></i>
                                            <span>{{ 'admin.product.copy_first_line'|trans }}</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"ex-product_class\" class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <th class=\"pt-2 pb-2 pl-3\">
                                        <input type=\"checkbox\" id=\"check-all\">
                                    </th>
                                    <th class=\"pt-2 pb-2\">{{ ClassName1 ? ClassName1.name }}</th>
                                    <th class=\"pt-2 pb-2\">{{ ClassName2 ? ClassName2.name }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.stock__short'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.one_day_limit'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.sale_limit'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.normal_price'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.sale_price'|trans }}</th>
                                    {% if BaseInfo.option_product_delivery_fee %}
                                        <th class=\"pt-2 pb-2\">{{ 'admin.product.delivery_fee'|trans }}</th>
                                    {% endif %}
                                    {% if BaseInfo.option_product_tax_rule %}
                                        <th class=\"pt-2 pb-2\">{{ 'admin.product.tax_rate'|trans }}</th>
                                    {% endif %}
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.delivery_duration'|trans }}</th>
                                    <th class=\"pt-2 pb-2 pr-3\">{{ 'admin.product.sale_type'|trans }}</th>

                                    {# エンティティ拡張の自動出力 #}
                                    {% for product_class_form in form.product_classes %}
                                        {# product_class_formはcollection typeなので, 1行目だけ出力する #}
                                        {% if loop.first %}
                                            {% for f in product_class_form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                                <th class=\"pt-2 pb-2\">{{ f.vars.label|trans }}</th>
                                            {% endfor %}
                                        {% endif %}
                                    {% endfor %}

                                    </thead>
                                    {% for product_class_form in form.product_classes %}
                                        <tr id=\"ex-product_class-{{ product_class_form.vars.name }}\">
                                            <td class=\"align-middle pl-3\">
                                                {{ form_widget(product_class_form.checked) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ product_class_form.vars.value.ClassCategory1 }}
                                                {{ form_widget(product_class_form.ClassCategory1) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ product_class_form.vars.value.ClassCategory2 }}
                                                {{ form_widget(product_class_form.ClassCategory2) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ form_widget(product_class_form.code) }}
                                                {{ form_errors(product_class_form.code) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-5\">
                                                        {{ form_widget(product_class_form.stock) }}
                                                        {{ form_errors(product_class_form.stock) }}
                                                    </div>
                                                    <div class=\"col-auto\">
                                                        <div class=\"form-check form-check-inline\">
                                                            {{ form_widget(product_class_form.stock_unlimited) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-6\">
                                                        {{ form_widget(product_class_form.one_day_limit) }}
                                                        {{ form_errors(product_class_form.one_day_limit) }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-6\">
                                                        {{ form_widget(product_class_form.sale_limit) }}
                                                        {{ form_errors(product_class_form.sale_limit) }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ form_widget(product_class_form.price01) }}
                                                {{ form_errors(product_class_form.price01) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ form_widget(product_class_form.price02) }}
                                                {{ form_errors(product_class_form.price02) }}
                                            </td>
                                            {% if BaseInfo.option_product_delivery_fee %}
                                                <td class=\"align-middle\">
                                                    {{ form_widget(product_class_form.delivery_fee) }}
                                                    {{ form_errors(product_class_form.delivery_fee) }}
                                                </td>
                                            {% endif %}
                                            {% if BaseInfo.option_product_tax_rule %}
                                                <td class=\"align-middle\">
                                                    {{ form_widget(product_class_form.tax_rate) }}
                                                    {{ form_errors(product_class_form.tax_rate) }}
                                                </td>
                                            {% endif %}
                                            <td class=\"align-middle\">
                                                {{ form_widget(product_class_form.delivery_duration) }}
                                                {{ form_errors(product_class_form.delivery_duration) }}
                                            </td>
                                            <td class=\"align-middle pr-3\">
                                                {{ form_widget(product_class_form.sale_type) }}
                                                {{ form_errors(product_class_form.sale_type) }}
                                            </td>
                                            {# エンティティ拡張の自動出力 #}
                                            {% for f in product_class_form|filter(f => f.vars.eccube_form_options.auto_render) %}
                                                {% if f.vars.eccube_form_options.form_theme %}
                                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                                    {{ form_row(f) }}
                                                {% else %}
                                                    <td class=\"align-middle pr-3\">
                                                        {{ form_widget(f) }}
                                                        {{ form_errors(f) }}
                                                    </td>
                                                {% endif %}
                                            {% endfor %}
                                        </tr>
                                    {% endfor %}
                                </table>
                            </div>
                        </div>
                        <div class=\"c-conversionArea\">
                            <div class=\"c-conversionArea__container\">
                                <div class=\"row justify-content-between align-items-center\">
                                    <div class=\"col-6\">
                                        <div class=\"c-conversionArea__leftBlockItem\">
                                            {% if return_product_list %}
                                                <a class=\"c-baseLink\" href=\"{{ url('admin_product', {'resume': 1}) }}\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>{{ 'admin.product.product_list'|trans }}</span>
                                                </a>
                                            {% else %}
                                                <a class=\"c-baseLink\" href=\"{{ url('admin_product_product_edit', {'id': Product.id}) }}\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>{{ 'admin.product.product_registration'|trans }}</span>
                                                </a>
                                            {% endif %}
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                            <div class=\"col-auto\">
                                                <button class=\"btn btn-ec-conversion px-5\" name=\"{{ form.save.vars.full_name }}\" type=\"submit\">
                                                    {{ 'admin.common.registration'|trans }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                {% else %}
                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\">
                                        {% if return_product_list %}
                                            <a class=\"c-baseLink\" href=\"{{ url('admin_product', {'resume': 1}) }}\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>{{ 'admin.product.product_list'|trans }}</span>
                                            </a>
                                        {% else %}
                                            <a class=\"c-baseLink\" href=\"{{ url('admin_product_product_edit', {'id': Product.id}) }}\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>{{ 'admin.product.product_registration'|trans }}</span>
                                            </a>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Product/product_class.twig", "/var/www/htdocs/ec922501/app/template/admin/Product/product_class.twig");
    }
}
