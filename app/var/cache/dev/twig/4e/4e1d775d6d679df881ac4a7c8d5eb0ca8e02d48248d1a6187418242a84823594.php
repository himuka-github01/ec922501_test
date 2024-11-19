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

/* @admin/Product/csv_product_y01.twig */
class __TwigTemplate_190b0bbb285e5b47df758ee30d647f17d10b79b779c33edf5259014225887287 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/csv_product_y01.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product/csv_product_y01.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_csv_import_y01"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/csv_product_y01.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_csv_upload_y01"), "html", null, true);
        
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
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "    <script>
        \$(function() {
            \$('#importCsv').on('click', function() {

                var setupModal = function (modal) {
                    modal.find('button').attr('disabled', 'disabled');
                    \$('.modal-body p', modal).text(\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload_in_progress"), "html", null, true);
        echo "\");
                    \$('.progress', modal).show();
                    return (new \$.Deferred).resolve().promise();
                }

                var addError = function(message) {
                    \$('<li><span class=\"badge badge-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(message))
                        .prependTo('#bulkMessages');
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                };

                var addSuccess = function(message) {
                    \$('<li><span class=\"badge badge-success\">SUCCESS</span> </li>')
                        .append(\$('<span></span>').text(message))
                        .prependTo('#bulkMessages');
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                };

                var split = function(formData) {
                    return function() {
                        var d = new \$.Deferred();
                        \$.ajax({
                            url: '";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_csv_split");
        echo "',
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            cache: false,
                        })
                        .then(function(data) {
                            if (data.success) {
                                d.resolve(data)
                            } else {
                                data.message.forEach(function(error) {
                                    addError(error.message)
                                })
                                d.reject(data)
                            }
                        })
                        .catch(function() {
                            d.reject()
                        })
                        return d.promise();
                    }
                }

                var upload = function(file_name, current, total) {
                    return function() {
                        var d = new \$.Deferred();
                        \$.ajax({
                            url: '";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_csv_split_import_y01");
        echo "',
                            type: 'POST',
                            data: {
                                file_name: file_name + current + '.csv',
                                file_no: current
                            },
                        })
                        .then(function(data) {
                            if (data.success) {
                                addSuccess(data.success_message)
                                \$('.progress-bar', modal).css('width', (current / total * 100) + '%');
                                d.resolve(data)
                            } else {
                                \$('.modal-body p', modal)
                                    .text(data.error_message)

                                data.errors.forEach(function (error) {
                                    addError(error)
                                });

                                \$('.progress-bar', modal)
                                    .clone()
                                    .addClass('bg-danger')
                                    .css('width', 100 - ((current - 1) / total * 100) + '%')
                                    .appendTo('.progress', modal)

                                \$('.progress-bar', modal).addClass('bg-success')

                                // エラー発生以降の分割ファイルをクリア
                                var files = []
                                for (var i = current + 1; i <= total; i++) {
                                    files.push(file_name + i + '.csv')
                                }
                                if (files.length > 0) {
                                    \$.post('";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_csv_split_cleanup");
        echo "', { files: files })
                                }

                                d.reject(data);
                            }
                        }, function(data) {
                            d.reject(data)
                        })
                        return d.promise()
                    }
                }

                var modal = \$('#importCsvModal')
                var formData = new FormData(\$('#upload-form').get(0))

                setupModal(modal)
                    // CSV分割
                    .then(split(formData))
                    .catch(function() {
                        \$('.modal-body p', modal).text(\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload_error"), "html", null, true);
        echo "\")
                        \$('.progress-bar', modal).css('width', '100%')
                        \$('.progress-bar', modal).addClass('bg-danger')
                        return \$.Deferred().reject();
                    })
                    // 分割したCSVを登録
                    .then(function(data) {
                        var d = \$.Deferred().resolve();
                        for (var i = 1; i <= data.max_file_no; i++) {
                            d = d.then(upload(data.file_name, i, data.max_file_no))
                        }
                        return d.promise()
                    })
                    // 完了メッセージ
                    .then(function() {
                        \$('.modal-body p', modal).text(\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload_complete"), "html", null, true);
        echo "\")
                        \$('.progress-bar', modal).addClass('bg-success');
                    })
                    // モーダルのロック解除
                    .always(function() {
                        \$('.progress-bar', modal).removeClass('progress-bar-animated')
                        // メッセージ行が複数ある場合に詳細表示
                        if (\$('#bulkMessages li').length > 1) {
                            \$('#toggleMessages').show()
                        }
                        modal.find('button').removeAttr('disabled').toggle()
                    })
            })

            \$('#toggleMessages').on('click', function() {
                var display = \$('#bulkMessages li:last').css('display')
                if (display == 'none') {
                    \$('#bulkMessages li').show();
                    \$('#toggleMessages span').text(\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close_detail"), "html", null, true);
        echo "\")
                    \$('#toggleMessages i').removeClass('fa-plus-square-o')
                    \$('#toggleMessages i').addClass('fa-minus-square-o')
                } else {
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                    \$('#toggleMessages span').text(\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.open_detail"), "html", null, true);
        echo "\")
                    \$('#toggleMessages i').removeClass('fa-minus-square-o')
                    \$('#toggleMessages i').addClass('fa-plus-square-o')
                }
            })

            \$('#importCsvDone').on('click', function() {
                location.reload(true);
            });

            \$('#file-select').click(function() {
                \$('#admin_csv_import_import_file').click();
                \$('#admin_csv_import_import_file').on('change', function() {
                    var files = \$(this).prop('files');
                    if (files.length) {
                        \$('#admin_csv_import_import_file_name').text(files[0].name);
                        \$('#upload-button').prop('disabled', false);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 194
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.csv_upload"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i></div>
                    </div>
                    <div id=\"ex-csv_product-upload\" class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\"><span>";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_select"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <form id=\"upload-form\" method=\"post\" action=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_csv_split");
        echo "\" enctype=\"multipart/form-data\">
                                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "_token", [], "any", false, false, false, 206), 'widget');
        echo "
                                    <div class=\"mb-2\">
                                        <span id=\"file-select\" class=\"btn btn-ec-regular mr-2\">";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "</span>
                                        <span id=\"admin_csv_import_import_file_name\">";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select_empty"), "html", null, true);
        echo "</span>
                                        ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "import_file", [], "any", false, false, false, 210), 'widget', ["attr" => ["accept" => "text/csv,text/tsv", "class" => "d-none"]]);
        echo "
                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "import_file", [], "any", false, false, false, 211), 'errors');
        echo "
                                    </div>
                                    <button class=\"btn btn-ec-conversion\" id=\"upload-button\" type=\"button\" data-toggle=\"modal\" data-target=\"#importCsvModal\" disabled>";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_registration"), "html", null, true);
        echo "</button>
                                    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 214, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 215
            echo "                                        <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row justify-content-between\">
                            <div class=\"col-6\">
                                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.csv_format"), "html", null, true);
        echo "\"><span class=\"align-middle\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_format"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i></div>
                            </div>
                            <div class=\"col-4 text-right\">
                                <a href=\"";
        // line 229
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_csv_template_y01", ["type" => "product"]);
        echo "\" class=\"btn btn-ec-regular\" id=\"download-button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_skeleton_download"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                    <div id=\"ex-csv_product-format\" class=\"card-body\">
                        <table class=\"table table-striped table-bordered\">
                            <tbody>
                            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 236, $this->source); })()));
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
        foreach ($context['_seq'] as $context["header"] => $context["key"]) {
            // line 237
            echo "                                <tr>
                                    <th class=\"w-25 align-middle table-ec-lightGray\" id=\"file_format_box__header--";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 238), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
            echo "
                                        ";
            // line 239
            if (twig_get_attribute($this->env, $this->source, $context["key"], "required", [], "any", false, false, false, 239)) {
                // line 240
                echo "                                            <span class=\"badge badge-primary ml-1\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 242
            echo "                                    </th>
                                    <td class=\"align-middle\">
                                        ";
            // line 244
            if (twig_get_attribute($this->env, $this->source, $context["key"], "description", [], "any", false, false, false, 244)) {
                // line 245
                echo "                                            ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["key"], "description", [], "any", false, false, false, 245));
                echo "
                                        ";
            }
            // line 247
            echo "                                    </td>
                                </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['header'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"importCsvModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"importCsvModal\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title font-weight-bold\">";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_csv_upload__title"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body text-left\">
                    <span class=\"badge\"></span>
                    <p class=\"text-left\">";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_csv_upload__message"), "html", null, true);
        echo "</p>
                    <div class=\"progress mb-1\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <ul id=\"bulkMessages\"></ul>
                    <div id=\"toggleMessages\" style=\"display: none;\">
                        <i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span>";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.open_detail"), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-ec-conversion\" type=\"button\" id=\"importCsv\">";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_registration"), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-ec-regular\" id=\"importCsvDone\" style=\"display: none\" type=\"button\" data-dismiss=\"modal\">";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
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
        return "@admin/Product/csv_product_y01.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 278,  526 => 277,  522 => 276,  515 => 272,  506 => 266,  498 => 261,  485 => 250,  469 => 247,  463 => 245,  461 => 244,  457 => 242,  451 => 240,  449 => 239,  443 => 238,  440 => 237,  423 => 236,  411 => 229,  403 => 226,  392 => 217,  383 => 215,  379 => 214,  375 => 213,  370 => 211,  366 => 210,  362 => 209,  358 => 208,  353 => 206,  349 => 205,  344 => 203,  335 => 199,  328 => 194,  318 => 193,  285 => 169,  277 => 164,  256 => 146,  238 => 131,  216 => 112,  179 => 78,  148 => 50,  122 => 27,  114 => 21,  104 => 20,  85 => 16,  66 => 15,  55 => 11,  53 => 18,  51 => 13,  38 => 11,);
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

{% set menus = ['product', 'product_csv_import_y01'] %}

{% block title %}{{ 'admin.product.product_csv_upload_y01'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(function() {
            \$('#importCsv').on('click', function() {

                var setupModal = function (modal) {
                    modal.find('button').attr('disabled', 'disabled');
                    \$('.modal-body p', modal).text(\"{{ 'admin.common.csv_upload_in_progress'|trans }}\");
                    \$('.progress', modal).show();
                    return (new \$.Deferred).resolve().promise();
                }

                var addError = function(message) {
                    \$('<li><span class=\"badge badge-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(message))
                        .prependTo('#bulkMessages');
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                };

                var addSuccess = function(message) {
                    \$('<li><span class=\"badge badge-success\">SUCCESS</span> </li>')
                        .append(\$('<span></span>').text(message))
                        .prependTo('#bulkMessages');
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                };

                var split = function(formData) {
                    return function() {
                        var d = new \$.Deferred();
                        \$.ajax({
                            url: '{{ url('admin_product_csv_split') }}',
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            cache: false,
                        })
                        .then(function(data) {
                            if (data.success) {
                                d.resolve(data)
                            } else {
                                data.message.forEach(function(error) {
                                    addError(error.message)
                                })
                                d.reject(data)
                            }
                        })
                        .catch(function() {
                            d.reject()
                        })
                        return d.promise();
                    }
                }

                var upload = function(file_name, current, total) {
                    return function() {
                        var d = new \$.Deferred();
                        \$.ajax({
                            url: '{{ url('admin_product_csv_split_import_y01') }}',
                            type: 'POST',
                            data: {
                                file_name: file_name + current + '.csv',
                                file_no: current
                            },
                        })
                        .then(function(data) {
                            if (data.success) {
                                addSuccess(data.success_message)
                                \$('.progress-bar', modal).css('width', (current / total * 100) + '%');
                                d.resolve(data)
                            } else {
                                \$('.modal-body p', modal)
                                    .text(data.error_message)

                                data.errors.forEach(function (error) {
                                    addError(error)
                                });

                                \$('.progress-bar', modal)
                                    .clone()
                                    .addClass('bg-danger')
                                    .css('width', 100 - ((current - 1) / total * 100) + '%')
                                    .appendTo('.progress', modal)

                                \$('.progress-bar', modal).addClass('bg-success')

                                // エラー発生以降の分割ファイルをクリア
                                var files = []
                                for (var i = current + 1; i <= total; i++) {
                                    files.push(file_name + i + '.csv')
                                }
                                if (files.length > 0) {
                                    \$.post('{{ url('admin_product_csv_split_cleanup') }}', { files: files })
                                }

                                d.reject(data);
                            }
                        }, function(data) {
                            d.reject(data)
                        })
                        return d.promise()
                    }
                }

                var modal = \$('#importCsvModal')
                var formData = new FormData(\$('#upload-form').get(0))

                setupModal(modal)
                    // CSV分割
                    .then(split(formData))
                    .catch(function() {
                        \$('.modal-body p', modal).text(\"{{ 'admin.common.csv_upload_error'|trans }}\")
                        \$('.progress-bar', modal).css('width', '100%')
                        \$('.progress-bar', modal).addClass('bg-danger')
                        return \$.Deferred().reject();
                    })
                    // 分割したCSVを登録
                    .then(function(data) {
                        var d = \$.Deferred().resolve();
                        for (var i = 1; i <= data.max_file_no; i++) {
                            d = d.then(upload(data.file_name, i, data.max_file_no))
                        }
                        return d.promise()
                    })
                    // 完了メッセージ
                    .then(function() {
                        \$('.modal-body p', modal).text(\"{{ 'admin.common.csv_upload_complete'|trans }}\")
                        \$('.progress-bar', modal).addClass('bg-success');
                    })
                    // モーダルのロック解除
                    .always(function() {
                        \$('.progress-bar', modal).removeClass('progress-bar-animated')
                        // メッセージ行が複数ある場合に詳細表示
                        if (\$('#bulkMessages li').length > 1) {
                            \$('#toggleMessages').show()
                        }
                        modal.find('button').removeAttr('disabled').toggle()
                    })
            })

            \$('#toggleMessages').on('click', function() {
                var display = \$('#bulkMessages li:last').css('display')
                if (display == 'none') {
                    \$('#bulkMessages li').show();
                    \$('#toggleMessages span').text(\"{{ 'admin.common.close_detail'|trans }}\")
                    \$('#toggleMessages i').removeClass('fa-plus-square-o')
                    \$('#toggleMessages i').addClass('fa-minus-square-o')
                } else {
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                    \$('#toggleMessages span').text(\"{{ 'admin.common.open_detail'|trans }}\")
                    \$('#toggleMessages i').removeClass('fa-minus-square-o')
                    \$('#toggleMessages i').addClass('fa-plus-square-o')
                }
            })

            \$('#importCsvDone').on('click', function() {
                location.reload(true);
            });

            \$('#file-select').click(function() {
                \$('#admin_csv_import_import_file').click();
                \$('#admin_csv_import_import_file').on('change', function() {
                    var files = \$(this).prop('files');
                    if (files.length) {
                        \$('#admin_csv_import_import_file_name').text(files[0].name);
                        \$('#upload-button').prop('disabled', false);
                    }
                });
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.csv_upload'|trans }}\"><span>{{ 'admin.common.csv_upload'|trans }}</span><i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i></div>
                    </div>
                    <div id=\"ex-csv_product-upload\" class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\"><span>{{ 'admin.common.csv_select'|trans }}</span></div>
                            <div class=\"col\">
                                <form id=\"upload-form\" method=\"post\" action=\"{{ url('admin_product_csv_split') }}\" enctype=\"multipart/form-data\">
                                    {{ form_widget(form._token) }}
                                    <div class=\"mb-2\">
                                        <span id=\"file-select\" class=\"btn btn-ec-regular mr-2\">{{ 'admin.common.file_select'|trans }}</span>
                                        <span id=\"admin_csv_import_import_file_name\">{{ 'admin.common.file_select_empty'|trans }}</span>
                                        {{ form_widget(form.import_file, {'attr': {'accept': 'text/csv,text/tsv', 'class': 'd-none'}}) }}
                                        {{ form_errors(form.import_file) }}
                                    </div>
                                    <button class=\"btn btn-ec-conversion\" id=\"upload-button\" type=\"button\" data-toggle=\"modal\" data-target=\"#importCsvModal\" disabled>{{ 'admin.common.bulk_registration'|trans }}</button>
                                    {% for error in errors %}
                                        <div class=\"text-danger\">{{ error }}</div>
                                    {% endfor %}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row justify-content-between\">
                            <div class=\"col-6\">
                                <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.csv_format'|trans }}\"><span class=\"align-middle\">{{ 'admin.common.csv_format'|trans }}</span><i class=\"fa fa-question-circle fa-lg fa-lg ml-1\"></i></div>
                            </div>
                            <div class=\"col-4 text-right\">
                                <a href=\"{{ url('admin_product_csv_template_y01', {'type': 'product'}) }}\" class=\"btn btn-ec-regular\" id=\"download-button\">{{ 'admin.common.csv_skeleton_download'|trans }}</a>
                            </div>
                        </div>
                    </div>
                    <div id=\"ex-csv_product-format\" class=\"card-body\">
                        <table class=\"table table-striped table-bordered\">
                            <tbody>
                            {% for header, key in headers %}
                                <tr>
                                    <th class=\"w-25 align-middle table-ec-lightGray\" id=\"file_format_box__header--{{ loop.index }}\">{{ header }}
                                        {% if key.required %}
                                            <span class=\"badge badge-primary ml-1\">{{ 'admin.common.required'|trans }}</span>
                                        {% endif %}
                                    </th>
                                    <td class=\"align-middle\">
                                        {% if key.description %}
                                            {{ key.description|trans|raw }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"importCsvModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"importCsvModal\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title font-weight-bold\">{{ 'admin.product.product_csv_upload__title'|trans }}</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                </div>
                <div class=\"modal-body text-left\">
                    <span class=\"badge\"></span>
                    <p class=\"text-left\">{{ 'admin.product.product_csv_upload__message'|trans }}</p>
                    <div class=\"progress mb-1\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <ul id=\"bulkMessages\"></ul>
                    <div id=\"toggleMessages\" style=\"display: none;\">
                        <i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span>{{ 'admin.common.open_detail'|trans }}</span>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                    <button class=\"btn btn-ec-conversion\" type=\"button\" id=\"importCsv\">{{ 'admin.common.bulk_registration' | trans }}</button>
                    <button class=\"btn btn-ec-regular\" id=\"importCsvDone\" style=\"display: none\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.close'|trans }}</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Product/csv_product_y01.twig", "/var/www/htdocs/ec922501/app/template/admin/Product/csv_product_y01.twig");
    }
}
