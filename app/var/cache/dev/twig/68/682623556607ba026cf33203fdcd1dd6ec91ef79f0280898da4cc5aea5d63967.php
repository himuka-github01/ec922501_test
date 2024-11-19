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

/* @admin/Store/plugin_table_official.twig */
class __TwigTemplate_688b68d907c5c225fe2aa44577a529489929ec12b20c95450230a041df49c5a7 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_table_official.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_table_official.twig"));

        // line 11
        echo "<script>
\$(function() {
    var currentPlugin = null;
    var modal = \$('#officialPluginDeleteModal');
    modal.on('show.bs.modal', function(e) {
        currentPlugin = \$(e.relatedTarget).data();
    });
    \$('#officialPluginDeleteButton').on('click', function() {

        var footer = \$('div.modal-footer', modal).hide();
        var message = \$('div.modal-body p', modal).text('「' + currentPlugin.name + ' (' + currentPlugin.version + ')」を削除中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。')
        var progress = \$('div.progress', modal).show();
        \$.ajax({url: currentPlugin['deleteUrl'], type: 'delete'}).then(
            function(data) {
                message.text('削除が完了しました。');
                \$('#deleteLog').text(data.log);
                \$('#deleteLogPane').show();
                progress.hide();
                footer.show().find('button').toggle();
            },
            function(res) {
                if (res.responseJSON.message) {
                    message.text(res.responseJSON.message);
                } else {
                    message.text('削除に失敗しました。');
                }
                if (res.responseJSON.log) {
                    \$('#deleteLog').text(res.responseJSON.log);
                }
                progress.hide();
                \$('#deleteLogPane').show();
                footer.show().find('button').toggle();
            }
        );
    });
});
</script>
";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 48, $this->source); })())) > 0)) {
            // line 49
            echo "    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 pl-3 pt-2 pb-2\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.901"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.905"), "html", null, true);
            echo "</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["Plugin"]) {
                // line 63
                echo "                ";
                $context["pluginDetail"] = ((twig_get_attribute($this->env, $this->source, ($context["officialPluginsDetail"] ?? null), $context["key"], [], "array", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["officialPluginsDetail"] ?? null), $context["key"], [], "array", false, false, false, 63), null)) : (null));
                // line 64
                echo "                <tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 64) == false)) {
                    echo "active";
                }
                echo "\">
                    <td class=\"align-middle pl-3\">
                        <a href=\"#\" target=\"_blank\" class=\"plugin-image pr-3\">
                            <img height=\"60\" src=\"";
                // line 67
                echo twig_escape_filter($this->env, (((isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 67, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 67, $this->source); })()), "image", [], "any", false, false, false, 67)) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
                echo "\" alt=\"\">
                        </a>
                        <span>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 69), "html", null, true);
                echo "</span>
                    </td>
                    <td class=\"align-middle\">";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                    <td class=\"align-middle\"><p class=\"mb-0\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 72), "html", null, true);
                echo "</p></td>
                    <td class=\"align-middle\">
                        ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 75)) {
                        // line 76
                        echo "                                <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.enabled"), "html", null, true);
                        echo "</span>
                            ";
                    } else {
                        // line 78
                        echo "                                <span class=\"text-secondary\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.disabled"), "html", null, true);
                        echo "</span>
                            ";
                    }
                    // line 80
                    echo "                        ";
                }
                // line 81
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 83
                if ((isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 83, $this->source); })())) {
                    // line 84
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "                                ";
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 85, $this->source); })()), "update_status", [], "any", false, false, false, 85) == 3)) {
                            // line 86
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_update_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                            echo "\"
                                       class=\"btn btn-ec-regular\">";
                            // line 87
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.916"), "html", null, true);
                            echo "</a>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">";
                            // line 89
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.917", ["%version%" => twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 89, $this->source); })()), "version", [], "any", false, false, false, 89)]), "html", null, true);
                            echo "</li>
                                        <li class=\"plugin-version\">
                                            ";
                            // line 91
                            $context["versions"] = "";
                            // line 92
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 92, $this->source); })()), "supported_versions", [], "any", false, false, false, 92));
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
                            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                                // line 93
                                echo "                                                ";
                                $context["versions"] = ((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 93, $this->source); })()) . $context["version"]);
                                // line 94
                                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 94) == false)) {
                                    $context["versions"] = ((isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 94, $this->source); })()) . ",");
                                }
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
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 96
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.918", ["%versions%" => (isset($context["versions"]) || array_key_exists("versions", $context) ? $context["versions"] : (function () { throw new RuntimeError('Variable "versions" does not exist.', 96, $this->source); })())]), "html", null, true);
                            echo "
                                        </li>
                                        <li class=\"plugin-update\">";
                            // line 98
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.919", ["%update_date%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getTimeAgo(twig_get_attribute($this->env, $this->source, (isset($context["pluginDetail"]) || array_key_exists("pluginDetail", $context) ? $context["pluginDetail"] : (function () { throw new RuntimeError('Variable "pluginDetail" does not exist.', 98, $this->source); })()), "update_date", [], "any", false, false, false, 98))]), "html", null, true);
                            echo "</li>
                                    </ul>
                                ";
                        } else {
                            // line 101
                            echo "                                    <p class=\"mb-0\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.920"), "html", null, true);
                            echo "。</p>
                                ";
                        }
                        // line 103
                        echo "                            ";
                    } else {
                        // line 104
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "source", [], "any", false, false, false, 104)]), "html", null, true);
                        echo "\" class=\"btn btn-ec-regular\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 106
                    echo "                        ";
                }
                // line 107
                echo "                    </td>
                    <td class=\"align-middle\">
                        ";
                // line 109
                if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 109)) {
                    // line 110
                    echo "                            <div class=\"row m-0\">
                                <div class=\"col-4\">
                                    ";
                    // line 112
                    if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 112) == false)) {
                        // line 113
                        echo "                                        <a href=\"#\"
                                           data-toggle=\"modal\"
                                           data-target=\"#officialPluginDeleteModal\"
                                           data-id=\"";
                        // line 116
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 116), "html", null, true);
                        echo "\"
                                           data-delete-url=\"";
                        // line 117
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_uninstall", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                        echo "\"
                                           data-name=\"";
                        // line 118
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 118), "html", null, true);
                        echo "\"
                                           data-version=\"";
                        // line 119
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 119), "html", null, true);
                        echo "\"
                                           class=\"btn btn-ec-actionIcon\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                        // line 121
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                        echo "\"></i>
                                        </a>

                                    ";
                    }
                    // line 125
                    echo "                                </div>
                                <div class=\"col-4\">
                                    ";
                    // line 127
                    if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 127)) {
                        // line 128
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 128)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-pause fa-lg text-secondary\" data-tooltip=\"true\"
                                               data-placement=\"top\" title=\"";
                        // line 132
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.925"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    } else {
                        // line 135
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, $context["Plugin"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo "
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-play fa-lg text-secondary\" data-tooltip=\"true\"
                                               data-placement=\"top\" title=\"";
                        // line 139
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.924"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    }
                    // line 142
                    echo "                                </div>
                                <div class=\"col-4\">
                                    ";
                    // line 144
                    if (twig_get_attribute($this->env, $this->source, ($context["configPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 144), [], "array", true, true, false, 144)) {
                        // line 145
                        echo "                                        <a class=\"btn btn-ec-actionIcon\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["configPages"]) || array_key_exists("configPages", $context) ? $context["configPages"] : (function () { throw new RuntimeError('Variable "configPages" does not exist.', 145, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 145), [], "array", false, false, false, 145), "html", null, true);
                        echo "\">
                                            <i class=\"fa fa-cog fa-lg text-secondary\" data-tooltip=\"true\"
                                               data-placement=\"top\" title=\"";
                        // line 147
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.906"), "html", null, true);
                        echo "\"></i>
                                        </a>
                                    ";
                    }
                    // line 150
                    echo "                                </div>
                            </div>
                        ";
                }
                // line 153
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['Plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "            </tbody>
        </table>
    </div>
    ";
            // line 159
            if ((twig_length_filter($this->env, (isset($context["officialPluginsDetail"]) || array_key_exists("officialPluginsDetail", $context) ? $context["officialPluginsDetail"] : (function () { throw new RuntimeError('Variable "officialPluginsDetail" does not exist.', 159, $this->source); })())) == 0)) {
                // line 160
                echo "        <p class=\"ml-3\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.help"), "html", null, true);
                echo "</p>
    ";
            }
        } else {
            // line 163
            echo "    <div class=\"card-body\">
        <div class=\"text-danger\">
            ";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table_official.923"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 169
        echo "
<div class=\"modal fade\" id=\"officialPluginDeleteModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"officialPluginDeleteModal\" aria-hidden=\"true\"
     data-keyboard=\"false\" data-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\">
                    ";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.title"), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"modal-body text-left\">
                <p class=\"text-left\">";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.popup.delete.confirm.message"), "html", null, true);
        echo "</p>
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <div id=\"deleteLogPane\" style=\"display: none;\">
                    <div class=\"d-inline-block collapsed\" data-toggle=\"collapse\" href=\"#deleteLog\" aria-expanded=\"false\" aria-controls=\"deleteLog\">
                        <a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">ログを確認</span></a>
                    </div>
                    <pre class=\"collapsed collapse\" id=\"deleteLog\"></pre>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                <button id=\"officialPluginDeleteButton\" class=\"btn btn-ec-delete\" type=\"button\">";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-ec-sub\" style=\"display: none\" onclick=\"location.reload(true);\">完了</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_table_official.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 193,  433 => 192,  418 => 180,  412 => 177,  402 => 169,  395 => 165,  391 => 163,  384 => 160,  382 => 159,  377 => 156,  369 => 153,  364 => 150,  358 => 147,  352 => 145,  350 => 144,  346 => 142,  340 => 139,  330 => 135,  324 => 132,  314 => 128,  312 => 127,  308 => 125,  301 => 121,  296 => 119,  292 => 118,  288 => 117,  284 => 116,  279 => 113,  277 => 112,  273 => 110,  271 => 109,  267 => 107,  264 => 106,  256 => 104,  253 => 103,  247 => 101,  241 => 98,  235 => 96,  219 => 94,  216 => 93,  198 => 92,  196 => 91,  191 => 89,  186 => 87,  181 => 86,  178 => 85,  175 => 84,  173 => 83,  169 => 81,  166 => 80,  160 => 78,  154 => 76,  151 => 75,  149 => 74,  144 => 72,  140 => 71,  135 => 69,  130 => 67,  121 => 64,  118 => 63,  114 => 62,  106 => 57,  102 => 56,  98 => 55,  94 => 54,  90 => 53,  84 => 49,  82 => 48,  43 => 11,);
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
<script>
\$(function() {
    var currentPlugin = null;
    var modal = \$('#officialPluginDeleteModal');
    modal.on('show.bs.modal', function(e) {
        currentPlugin = \$(e.relatedTarget).data();
    });
    \$('#officialPluginDeleteButton').on('click', function() {

        var footer = \$('div.modal-footer', modal).hide();
        var message = \$('div.modal-body p', modal).text('「' + currentPlugin.name + ' (' + currentPlugin.version + ')」を削除中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。')
        var progress = \$('div.progress', modal).show();
        \$.ajax({url: currentPlugin['deleteUrl'], type: 'delete'}).then(
            function(data) {
                message.text('削除が完了しました。');
                \$('#deleteLog').text(data.log);
                \$('#deleteLogPane').show();
                progress.hide();
                footer.show().find('button').toggle();
            },
            function(res) {
                if (res.responseJSON.message) {
                    message.text(res.responseJSON.message);
                } else {
                    message.text('削除に失敗しました。');
                }
                if (res.responseJSON.log) {
                    \$('#deleteLog').text(res.responseJSON.log);
                }
                progress.hide();
                \$('#deleteLogPane').show();
                footer.show().find('button').toggle();
            }
        );
    });
});
</script>
{% if Plugins|length > 0 %}
    <div class=\"card-body p-0\">
        <table class=\"table table-sm\">
            <thead>
            <tr>
                <th class=\"border-top-0 pl-3 pt-2 pb-2\">{{ 'admin.store.plugin_table_official.901'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.unregistered_plugin_table.942'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.unregistered_plugin_table.943'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table.901'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.store.plugin_table_official.905'|trans }}</th>
                <th class=\"border-top-0 pt-2 pb-2\">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {% for key,Plugin in Plugins %}
                {% set pluginDetail = officialPluginsDetail[key]|default(NULL) %}
                <tr class=\"{% if Plugin.enabled == false %}active{% endif %}\">
                    <td class=\"align-middle pl-3\">
                        <a href=\"#\" target=\"_blank\" class=\"plugin-image pr-3\">
                            <img height=\"60\" src=\"{{ pluginDetail ? pluginDetail.image : asset('noimage_plugin_list.png', 'save_image') }}\" alt=\"\">
                        </a>
                        <span>{{ Plugin.name }}</span>
                    </td>
                    <td class=\"align-middle\">{{ Plugin.version }}</td>
                    <td class=\"align-middle\"><p class=\"mb-0\">{{ Plugin.code }}</p></td>
                    <td class=\"align-middle\">
                        {% if Plugin.id %}
                            {% if Plugin.enabled %}
                                <span class=\"text-success\">{{ 'common.enabled'|trans }}</span>
                            {% else %}
                                <span class=\"text-secondary\">{{ 'common.disabled'|trans }}</span>
                            {% endif %}
                        {% endif %}
                    </td>
                    <td class=\"align-middle\">
                        {% if pluginDetail %}
                            {% if Plugin.id %}
                                {% if pluginDetail.update_status == 3 %}
                                    <a href=\"{{ url('admin_store_plugin_update_confirm', {'id': Plugin.id}) }}\"
                                       class=\"btn btn-ec-regular\">{{ 'admin.store.plugin_table_official.916'|trans }}</a>
                                    <ul class=\"plugin-meta dl-horizontal\">
                                        <li class=\"plugin-version\">{{ 'admin.store.plugin_table_official.917'|trans({'%version%' : pluginDetail.version}) }}</li>
                                        <li class=\"plugin-version\">
                                            {% set versions = '' %}
                                            {% for version in pluginDetail.supported_versions %}
                                                {% set versions = versions ~ version %}
                                                {%- if loop.last == false%}{% set versions = versions ~ ',' %}{% endif -%}
                                            {% endfor %}
                                            {{ 'admin.store.plugin_table_official.918'|trans({'%versions%' : versions}) }}
                                        </li>
                                        <li class=\"plugin-update\">{{ 'admin.store.plugin_table_official.919'|trans({'%update_date%' : pluginDetail.update_date|time_ago}) }}</li>
                                    </ul>
                                {% else %}
                                    <p class=\"mb-0\">{{ 'admin.store.plugin_table_official.920'|trans }}。</p>
                                {% endif %}
                            {% else %}
                                <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': Plugin.source}) }}\" class=\"btn btn-ec-regular\">{{ 'admin.store.plugin.install'|trans }}</a>
                            {% endif %}
                        {% endif %}
                    </td>
                    <td class=\"align-middle\">
                        {% if Plugin.id %}
                            <div class=\"row m-0\">
                                <div class=\"col-4\">
                                    {% if Plugin.enabled == false %}
                                        <a href=\"#\"
                                           data-toggle=\"modal\"
                                           data-target=\"#officialPluginDeleteModal\"
                                           data-id=\"{{ Plugin.id }}\"
                                           data-delete-url=\"{{ url('admin_store_plugin_api_uninstall', { id: Plugin.id }) }}\"
                                           data-name=\"{{ Plugin.name }}\"
                                           data-version=\"{{ Plugin.version }}\"
                                           class=\"btn btn-ec-actionIcon\">
                                            <i class=\"fa fa-close fa-lg text-secondary\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\"></i>
                                        </a>

                                    {% endif %}
                                </div>
                                <div class=\"col-4\">
                                    {% if Plugin.enabled %}
                                        <a href=\"{{ url('admin_store_plugin_disable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-pause fa-lg text-secondary\" data-tooltip=\"true\"
                                               data-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.925'|trans }}\"></i>
                                        </a>
                                    {% else %}
                                        <a href=\"{{ url('admin_store_plugin_enable', { id : Plugin.id }) }}\" {{ csrf_token_for_anchor() }}
                                           class=\"btn btn-ec-actionIcon\"
                                           data-method=\"post\" data-confirm=\"false\">
                                            <i class=\"fa fa-play fa-lg text-secondary\" data-tooltip=\"true\"
                                               data-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.924'|trans }}\"></i>
                                        </a>
                                    {% endif %}
                                </div>
                                <div class=\"col-4\">
                                    {% if configPages[Plugin.code] is defined %}
                                        <a class=\"btn btn-ec-actionIcon\" href=\"{{ configPages[Plugin.code] }}\">
                                            <i class=\"fa fa-cog fa-lg text-secondary\" data-tooltip=\"true\"
                                               data-placement=\"top\" title=\"{{ 'admin.store.plugin_table_official.906'|trans }}\"></i>
                                        </a>
                                    {% endif %}
                                </div>
                            </div>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    {% if officialPluginsDetail|length == 0 %}
        <p class=\"ml-3\">{{ 'admin.store.plugin.help'|trans }}</p>
    {% endif %}
{% else %}
    <div class=\"card-body\">
        <div class=\"text-danger\">
            {{ 'admin.store.plugin_table_official.923'|trans }}
        </div>
    </div>
{% endif %}

<div class=\"modal fade\" id=\"officialPluginDeleteModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"officialPluginDeleteModal\" aria-hidden=\"true\"
     data-keyboard=\"false\" data-backdrop=\"static\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title font-weight-bold\">
                    {{ 'admin.store.plugin.popup.delete.confirm.title'|trans }}</h5>
            </div>
            <div class=\"modal-body text-left\">
                <p class=\"text-left\">{{ 'admin.store.plugin.popup.delete.confirm.message'|trans }}</p>
                <div class=\"progress\" style=\"display: none\">
                    <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <div id=\"deleteLogPane\" style=\"display: none;\">
                    <div class=\"d-inline-block collapsed\" data-toggle=\"collapse\" href=\"#deleteLog\" aria-expanded=\"false\" aria-controls=\"deleteLog\">
                        <a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">ログを確認</span></a>
                    </div>
                    <pre class=\"collapsed collapse\" id=\"deleteLog\"></pre>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                <button id=\"officialPluginDeleteButton\" class=\"btn btn-ec-delete\" type=\"button\">{{ 'admin.common.delete'|trans }}</button>
                <button class=\"btn btn-ec-sub\" style=\"display: none\" onclick=\"location.reload(true);\">完了</button>
            </div>
        </div>
    </div>
</div>
", "@admin/Store/plugin_table_official.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/plugin_table_official.twig");
    }
}
