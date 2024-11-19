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

/* @admin/Store/authentication_setting.twig */
class __TwigTemplate_f20d6bc88ee290dd821cda6b7b8013ed743c2e3b8c44d78078fdf0b39ecb8b3c extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/authentication_setting.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/authentication_setting.twig"));

        // line 13
        $context["menus"] = [0 => "store", 1 => "authentication_setting"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/authentication_setting.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store"), "html", null, true);
        
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
        echo "    <style>
        .modal #captcha_image {
            max-width: 400px;
            max-height: 50px;
            border: 1px #b9b9ba solid;
        }
    </style>
";
        
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
        echo "<script>

    function refreshCaptchaImage() {
        \$('#captcha_image').attr('src', \"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 34, $this->source); })()), "eccube_package_api_url", [], "any", false, false, false, 34), "html", null, true);
        echo "/captcha\" + '?' + new Date().getTime())
    }

    \$('#captcha').on('show.bs.modal', function() {
        refreshCaptchaImage();
    });

    \$('#generate_key').on('click', function() {
        \$.ajax({
            type: 'POST',
            url: \"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 44, $this->source); })()), "eccube_package_api_url", [], "any", false, false, false, 44), "html", null, true);
        echo "/api_key\",
            dataType: 'json',
            cache: false,
            data: {
                \"captcha\": \$('#captcha_text').val(),
                \"eccube_url\": '";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["eccubeUrl"]) || array_key_exists("eccubeUrl", $context) ? $context["eccubeUrl"] : (function () { throw new RuntimeError('Variable "eccubeUrl" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "',
                \"eccube_version\": \"";
        // line 50
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
        echo "\",
                \"eccube_shop_name\": \"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["eccubeShopName"]) || array_key_exists("eccubeShopName", $context) ? $context["eccubeShopName"] : (function () { throw new RuntimeError('Variable "eccubeShopName" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\"
            },
            xhrFields: {
                withCredentials: true
            }
        }).done(function(data) {
            \$('#captcha').modal('hide');
            \$('#admin_authentication_authentication_key').val(data.api_key);
            \$('#form').submit()
        }).fail(function(res) {
            if (res.status == 400) {
                \$('#captcha_error').show();
                refreshCaptchaImage();
            } else {
                alert('";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.system_error"), "html", null, true);
        echo "');
            }
        });
        return false;
    });
    \$('#captcha-refresh').on('click', refreshCaptchaImage);
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 76
        echo "    <form id=\"form\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_authentication_setting");
        echo "\">
    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "_token", [], "any", false, false, false, 77), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key_info"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#captcha\" type=\"button\">
                                        ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_setting"), "html", null, true);
        echo "</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_setting_info"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "authentication_key", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "label", [], "any", false, false, false, 118)), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg\" data-tooltip=\"true\" data-placement=\"top\" title=";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.api_key_tooltip"), "html", null, true);
        echo "></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "authentication_key", [], "any", false, false, false, 123), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.plugin_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class=\"modal fade\" id=\"captcha\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"captcha\" aria-hidden=\"true\">
        <form id=\"captcha-form\" method=\"post\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title font-weight-bold\">";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</h5>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <p>新しい認証キーを発行します。既に認証キーがある場合は、発行せずに既存のキーを設定してください。</p>
                        <img id=\"captcha_image\" class=\"mb-2\" src=\"#\">
                        <button id=\"captcha-refresh\" type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
                        <input type=\"text\" id=\"captcha_text\" value=\"\" class=\"form-control\" placeholder=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.captcha_message"), "html", null, true);
        echo "\"/>
                        <span id=\"captcha_error\" class=\"invalid-feedback\" style=\"display: none\">
                            <span class=\"mb-0 d-block\">
                                <span class=\"initialism form-error-icon badge badge-danger\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.captcha_error"), "html", null, true);
        echo "</span> <span class=\"form-error-message\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.invalid_captcha"), "html", null, true);
        echo "</span>
                            </span>
                        </span>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.cancel"), "html", null, true);
        echo "</button>
                        <button id=\"generate_key\" class=\"btn btn-ec-conversion\" type=\"button\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.setting.get_api_key"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/authentication_setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 175,  370 => 174,  360 => 169,  354 => 166,  344 => 159,  327 => 145,  318 => 139,  313 => 137,  296 => 123,  289 => 119,  285 => 118,  276 => 112,  267 => 106,  253 => 95,  244 => 89,  235 => 83,  226 => 77,  221 => 76,  211 => 75,  193 => 65,  176 => 51,  172 => 50,  168 => 49,  160 => 44,  147 => 34,  142 => 31,  132 => 30,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['store', 'authentication_setting'] %}

{% block title %}{{ 'admin.store.setting'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.store'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <style>
        .modal #captcha_image {
            max-width: 400px;
            max-height: 50px;
            border: 1px #b9b9ba solid;
        }
    </style>
{% endblock %}

{% block javascript %}
<script>

    function refreshCaptchaImage() {
        \$('#captcha_image').attr('src', \"{{ eccube_config.eccube_package_api_url }}/captcha\" + '?' + new Date().getTime())
    }

    \$('#captcha').on('show.bs.modal', function() {
        refreshCaptchaImage();
    });

    \$('#generate_key').on('click', function() {
        \$.ajax({
            type: 'POST',
            url: \"{{ eccube_config.eccube_package_api_url }}/api_key\",
            dataType: 'json',
            cache: false,
            data: {
                \"captcha\": \$('#captcha_text').val(),
                \"eccube_url\": '{{ eccubeUrl }}',
                \"eccube_version\": \"{{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}\",
                \"eccube_shop_name\": \"{{ eccubeShopName }}\"
            },
            xhrFields: {
                withCredentials: true
            }
        }).done(function(data) {
            \$('#captcha').modal('hide');
            \$('#admin_authentication_authentication_key').val(data.api_key);
            \$('#form').submit()
        }).fail(function(res) {
            if (res.status == 400) {
                \$('#captcha_error').show();
                refreshCaptchaImage();
            } else {
                alert('{{ 'admin.common.system_error'|trans }}');
            }
        });
        return false;
    });
    \$('#captcha-refresh').on('click', refreshCaptchaImage);
</script>
{% endblock %}


{% block main %}
    <form id=\"form\" method=\"post\" action=\"{{ url('admin_store_authentication_setting') }}\">
    {{ form_widget(form._token) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>{{'admin.store.setting.get_api_key'|trans}}</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>{{'admin.store.setting.get_api_key_info'|trans}}</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#captcha\" type=\"button\">
                                        {{ 'admin.store.setting.get_api_key'|trans }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span>{{'admin.store.setting.api_key_setting'|trans}}</span>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-12\">
                                    <span>{{'admin.store.setting.api_key_setting_info'|trans}}</span>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\">
                                        <span>{{ form.authentication_key.vars.label|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg\" data-tooltip=\"true\" data-placement=\"top\" title={{'admin.store.setting.api_key_tooltip'|trans}}></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    {{ form_widget(form.authentication_key) }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"{{ url('admin_store_plugin') }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.store.plugin.plugin_list'|trans }}</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{'admin.common.registration'|trans}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class=\"modal fade\" id=\"captcha\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"captcha\" aria-hidden=\"true\">
        <form id=\"captcha-form\" method=\"post\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title font-weight-bold\">{{ 'admin.store.setting.get_api_key'|trans }}</h5>
                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <p>新しい認証キーを発行します。既に認証キーがある場合は、発行せずに既存のキーを設定してください。</p>
                        <img id=\"captcha_image\" class=\"mb-2\" src=\"#\">
                        <button id=\"captcha-refresh\" type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></button>
                        <input type=\"text\" id=\"captcha_text\" value=\"\" class=\"form-control\" placeholder=\"{{ 'admin.store.setting.captcha_message'|trans }}\"/>
                        <span id=\"captcha_error\" class=\"invalid-feedback\" style=\"display: none\">
                            <span class=\"mb-0 d-block\">
                                <span class=\"initialism form-error-icon badge badge-danger\">{{ 'admin.store.setting.captcha_error'|trans }}</span> <span class=\"form-error-message\">{{ 'admin.store.setting.invalid_captcha'|trans }}</span>
                            </span>
                        </span>
                    </div>
                    <div class=\"modal-footer\">
                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'common.cancel'|trans }}</button>
                        <button id=\"generate_key\" class=\"btn btn-ec-conversion\" type=\"button\">{{ 'admin.store.setting.get_api_key'|trans }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
{% endblock %}", "@admin/Store/authentication_setting.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/authentication_setting.twig");
    }
}
