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

/* @ProductOption/admin/Product/option_text_category.twig */
class __TwigTemplate_73d32eb14941e597cc7b7ec3cba4622e5c6b840e5d0ac82c0324923fa01baabc extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/option_text_category.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ProductOption/admin/Product/option_text_category.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "option"];
        // line 14
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@ProductOption/admin/Product/option_text_category.twig", 11);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload-ui.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">
    <style>
        .ui-state-highlight {
            height: 148px;
            border: dashed 1px #ccc;
            background: #fff;
        }
        .btn {
            white-space: normal;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/vendor/jquery.ui.widget.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.iframe-transport.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-process.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-validate.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(function() {
            // Todo: fix drag&drop style
            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function(event, ui) {
                    updateSortNo();
                }
            });
            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<span class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>' +
                '</div>';
            var proto_add = '";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "add_images", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "prototype", [], "any", false, false, false, 59), 'widget');
        echo "';
            var proto_del = '";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "delete_images", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "prototype", [], "any", false, false, false, 60), 'widget');
        echo "';
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "images", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 62
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 62), "value", [], "any", false, false, false, 62), "save_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["image"], 'widget');
            echo "');
            \$widget.val('";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "add_images", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 68
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68), "temp_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
            \$widget.val('";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "delete_images", [], "any", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 74
            echo "            \$(\"#thumb\").append('";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            var hideThumbnail = function() {
                if (\$(\"#thumb div\").length > 0) {
                    \$(\"#icon_no_image\").css(\"display\", \"none\");
                    \$('#message').text(\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "\");
                } else {
                    \$(\"#icon_no_image\").css(\"display\", \"\");
                    \$('#message').empty();
                }
            };
            // Todo: fix update sort by drag&drop
            var updateSortNo = function() {
                \$(\"#thumb div\").each(function(index) {
                    \$(this).find(\".sort_no_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    \$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
                    \$sortNo.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$sortNo);
                });
            };
            hideThumbnail();
            updateSortNo();
            // Delete of images
            var count_del = 0;
            \$(\"#thumb\").on(\"click\", '.delete-image', function() {
                var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                var src = \$(thumbnail).find('input').val();
                \$new_delete_image.val(src);
                \$(\"#thumb\").append(\$new_delete_image);
                \$(thumbnail).remove();
                hideThumbnail();
                updateSortNo();
                count_del++;
            });
            var count_add = ";
        // line 110
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "add_images", [], "any", false, false, false, 110)), 0), "html", null, true);
        echo ";
            \$('#";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "option_image", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        echo "').fileupload({
                url: \"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_option_text_category_image_add");
        echo "\",
                type: \"post\",
                sequentialUploads: true,
                dataType: 'json',
                done: function(e, data) {
                    \$('#progress').hide();
                    \$.each(data.result.files, function(index, file) {
                        var path = '";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "temp_image"), "html", null, true);
        echo "' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$('#thumb').append(\$child);
                        count_add++;
                    });
                    hideThumbnail();
                    updateSortNo();
                },
                fail: function(e, data) {
                    alert(\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                },
                always: function(e, data) {
                    \$('#progress').hide();
                    \$('#progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    \$('#progress').show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                    }
                }
            });
            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "option_image", [], "any", false, false, false, 158), "vars", [], "any", false, false, false, 158), "id", [], "any", false, false, false, 158), "html", null, true);
        echo "').click();
            });
            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 185
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" class=\"form-row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_option_text_category", ["option_id" => twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 210, $this->source); })()), "id", [], "any", false, false, false, 210)]), "html", null, true);
        echo "\">
        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "_token", [], "any", false, false, false, 211), 'widget');
        echo "
        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "return_link", [], "any", false, false, false, 212), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.category.detail"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 219, $this->source); })()), "backend_name", [], "any", false, false, false, 219), "html", null, true);
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
        // line 233
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "children", [], "any", false, false, false, 233), "name", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "label", [], "any", false, false, false, 233), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "name", [], "any", false, false, false, 236), 'widget');
        echo "
                                        ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "name", [], "any", false, false, false, 237), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "children", [], "any", false, false, false, 242), "value", [], "any", false, false, false, 242), "vars", [], "any", false, false, false, 242), "label", [], "any", false, false, false, 242), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "value", [], "any", false, false, false, 245), 'widget');
        echo "
                                        ";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "value", [], "any", false, false, false, 246), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 249
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 249, $this->source); })()), "type", [], "any", false, false, false, 249) == twig_constant("Plugin\\ProductOption\\Entity\\Option::NUMBER_TYPE"))) {
            // line 250
            echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "children", [], "any", false, false, false, 252), "multiple_flg", [], "any", false, false, false, 252), "vars", [], "any", false, false, false, 252), "label", [], "any", false, false, false, 252), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
            // line 255
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "multiple_flg", [], "any", false, false, false, 255), 'widget');
            echo "
                                        ";
            // line 256
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "multiple_flg", [], "any", false, false, false, 256), 'errors');
            echo "
                                    </div>
                                </div>
                                ";
        }
        // line 260
        echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "children", [], "any", false, false, false, 262), "delivery_free_flg", [], "any", false, false, false, 262), "vars", [], "any", false, false, false, 262), "label", [], "any", false, false, false, 262), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "delivery_free_flg", [], "any", false, false, false, 265), 'widget');
        echo "
                                        ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "delivery_free_flg", [], "any", false, false, false, 266), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div data-placement=\"top\">
                                            <span>";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "children", [], "any", false, false, false, 272), "option_image", [], "any", false, false, false, 272), "vars", [], "any", false, false, false, 272), "label", [], "any", false, false, false, 272), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div class=\"progress\" style=\"display: none;\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                            <div class=\"media-body\">
                                                <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                                ";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "
                                                ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "option_image", [], "any", false, false, false, 285), 'widget', ["attr" => ["accept" => "image/*", "style" => "display:none;"]]);
        echo "
                                                ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "option_image", [], "any", false, false, false, 286), 'errors');
        echo "
                                                <a class=\"btn btn-ec-regular mr-2\"
                                                   onclick=\"\$('#option_category_option_image').click()\">
                                                    ";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "
                                                </a>
                                            </div>
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
                            <a class=\"c-baseLink\" href=\"";
        // line 306
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_option");
        echo "\"
                               data-action=\"confirm\" title=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.category.list")]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.product.option.category.list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <a href=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_option_category_new", ["option_id" => twig_get_attribute($this->env, $this->source, (isset($context["Option"]) || array_key_exists("Option", $context) ? $context["Option"] : (function () { throw new RuntimeError('Variable "Option" does not exist.', 315, $this->source); })()), "id", [], "any", false, false, false, 315)]), "html", null, true);
        echo "\">
                                <button class=\"btn btn-ec-regular\"
                                        type=\"button\">";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("productoption.admin.common.new"), "html", null, true);
        echo "</button>
                                </a>
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 322
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Product/option_text_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 322,  633 => 317,  628 => 315,  618 => 308,  614 => 307,  610 => 306,  590 => 289,  584 => 286,  580 => 285,  576 => 284,  561 => 272,  552 => 266,  548 => 265,  542 => 262,  538 => 260,  531 => 256,  527 => 255,  521 => 252,  517 => 250,  515 => 249,  509 => 246,  505 => 245,  499 => 242,  491 => 237,  487 => 236,  481 => 233,  462 => 219,  452 => 212,  448 => 211,  444 => 210,  435 => 204,  429 => 201,  416 => 191,  408 => 185,  398 => 184,  363 => 158,  354 => 152,  330 => 131,  315 => 119,  305 => 112,  301 => 111,  297 => 110,  263 => 79,  258 => 76,  249 => 74,  244 => 73,  235 => 70,  231 => 69,  226 => 68,  221 => 67,  212 => 64,  208 => 63,  203 => 62,  199 => 61,  195 => 60,  191 => 59,  170 => 41,  166 => 40,  162 => 39,  158 => 38,  153 => 37,  143 => 36,  120 => 22,  115 => 21,  105 => 20,  86 => 17,  67 => 16,  56 => 11,  54 => 14,  52 => 13,  39 => 11,);
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
{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block title %}{{ 'productoption.admin.nav.product.option'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}


{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fileupload/jquery.fileupload.css', 'admin') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fileupload/jquery.fileupload-ui.css', 'admin') }}\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">
    <style>
        .ui-state-highlight {
            height: 148px;
            border: dashed 1px #ccc;
            background: #fff;
        }
        .btn {
            white-space: normal;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/fileupload/vendor/jquery.ui.widget.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.iframe-transport.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload-process.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload-validate.js', 'admin') }}\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(function() {
            // Todo: fix drag&drop style
            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function(event, ui) {
                    updateSortNo();
                }
            });
            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<span class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>' +
                '</div>';
            var proto_add = '{{ form_widget(form.add_images.vars.prototype) }}';
            var proto_del = '{{ form_widget(form.delete_images.vars.prototype) }}';
            {% for image in form.images %}
            var \$img = \$(proto_img.replace(/__path__/g, '{{ asset(image.vars.value, 'save_image') }}'));
            var \$widget = \$('{{ form_widget(image) }}');
            \$widget.val('{{ image.vars.value }}');
            \$(\"#thumb\").append(\$img.append(\$widget));
            {% endfor %}
            {% for add_image in form.add_images %}
            var \$img = \$(proto_img.replace(/__path__/g, '{{ asset(add_image.vars.value, 'temp_image') }}'));
            var \$widget = \$('{{ form_widget(add_image) }}');
            \$widget.val('{{ add_image.vars.value }}');
            \$(\"#thumb\").append(\$img.append(\$widget));
            {% endfor %}
            {% for delete_image in form.delete_images %}
            \$(\"#thumb\").append('{{ form_widget(delete_image) }}');
            {% endfor %}
            var hideThumbnail = function() {
                if (\$(\"#thumb div\").length > 0) {
                    \$(\"#icon_no_image\").css(\"display\", \"none\");
                    \$('#message').text(\"{{ 'admin.common.drag_and_drop_description'|trans }}\");
                } else {
                    \$(\"#icon_no_image\").css(\"display\", \"\");
                    \$('#message').empty();
                }
            };
            // Todo: fix update sort by drag&drop
            var updateSortNo = function() {
                \$(\"#thumb div\").each(function(index) {
                    \$(this).find(\".sort_no_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    \$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
                    \$sortNo.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$sortNo);
                });
            };
            hideThumbnail();
            updateSortNo();
            // Delete of images
            var count_del = 0;
            \$(\"#thumb\").on(\"click\", '.delete-image', function() {
                var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                var src = \$(thumbnail).find('input').val();
                \$new_delete_image.val(src);
                \$(\"#thumb\").append(\$new_delete_image);
                \$(thumbnail).remove();
                hideThumbnail();
                updateSortNo();
                count_del++;
            });
            var count_add = {{ form.add_images|length|default(0) }};
            \$('#{{ form.option_image.vars.id }}').fileupload({
                url: \"{{ url('admin_product_option_text_category_image_add') }}\",
                type: \"post\",
                sequentialUploads: true,
                dataType: 'json',
                done: function(e, data) {
                    \$('#progress').hide();
                    \$.each(data.result.files, function(index, file) {
                        var path = '{{ asset('', 'temp_image') }}' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$('#thumb').append(\$child);
                        count_add++;
                    });
                    hideThumbnail();
                    updateSortNo();
                },
                fail: function(e, data) {
                    alert(\"{{ 'admin.common.upload_error' | trans }}\");
                },
                always: function(e, data) {
                    \$('#progress').hide();
                    \$('#progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    \$('#progress').show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"{{ 'admin.common.upload_error'|trans }}\");
                    }
                }
            });
            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#{{ form.option_image.vars.id }}').click();
            });
            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });
    </script>
{% endblock javascript %}

{% block main %}
    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ 'admin.common.move_to_confirm_title'|trans }}</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_save_and_move'|trans }}
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_move_only'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" class=\"form-row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"{{ url('admin_product_option_text_category', {option_id : Option.id }) }}\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.return_link) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">{{ 'productoption.admin.product.option.category.detail'|trans }}：{{ Option.backend_name }}</span>
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
                                        <span>{{ form.children.name.vars.label }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.name) }}
                                        {{ form_errors(form.name) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ form.children.value.vars.label }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.value) }}
                                        {{ form_errors(form.value) }}
                                    </div>
                                </div>
                                {% if Option.type == constant('Plugin\\\\ProductOption\\\\Entity\\\\Option::NUMBER_TYPE') %}
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ form.children.multiple_flg.vars.label }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.multiple_flg) }}
                                        {{ form_errors(form.multiple_flg) }}
                                    </div>
                                </div>
                                {% endif %}
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>{{ form.children.delivery_free_flg.vars.label }}</span>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.delivery_free_flg) }}
                                        {{ form_errors(form.delivery_free_flg) }}
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div data-placement=\"top\">
                                            <span>{{ form.children.option_image.vars.label }}</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div class=\"progress\" style=\"display: none;\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                            <div class=\"media-body\">
                                                <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                                {{ 'admin.common.drag_and_drop_image_description'|trans }}
                                                {{ form_widget(form.option_image, { attr : { accept : 'image/*', style : 'display:none;' } }) }}
                                                {{ form_errors(form.option_image) }}
                                                <a class=\"btn btn-ec-regular mr-2\"
                                                   onclick=\"\$('#option_category_option_image').click()\">
                                                    {{ 'admin.common.file_select'|trans }}
                                                </a>
                                            </div>
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
                            <a class=\"c-baseLink\" href=\"{{ path('admin_product_option') }}\"
                               data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'productoption.admin.product.option.category.list'|trans }) }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'productoption.admin.product.option.category.list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <a href=\"{{ url('admin_product_option_category_new', {option_id: Option.id}) }}\">
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
{% endblock %}", "@ProductOption/admin/Product/option_text_category.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Product/option_text_category.twig");
    }
}
