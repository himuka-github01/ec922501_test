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

/* @admin/Store/plugin_confirm.twig */
class __TwigTemplate_c11c14ea05c3e328aeac65a91e99d7b24870c6eee9c39ad92cabe85ffeb5f580 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm.twig"));

        // line 13
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store/plugin_confirm.twig", 11);
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

        // line 16
        echo "    ";
        if ((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.title.upgrade"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.title"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.subtitle"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "<script>
\$(function() {

    var MODES = {
        'install': {
            'name': 'インストール',
            'init': function(ctx) {
                ctx.progressBar.css('width', (0.5/ctx.totalCount*100) + '%');
            },
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をインストール中');
                    ctx.log('**************** ' + ctx.plugin.pluginCode + ' ****************');
                    return \$.post(\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_install");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', ((ctx.currentCount/ctx.totalCount + 0.5/ctx.totalCount)*100) + '%');
                        ctx.log(data.log);
                    })
                });
            }
        },
        'upgrade': {
            'name': 'アップデート',
            'init': function(ctx) {},
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」を無効化中');
                    ctx.log('**************** Disable ****************');
                    return \$.post(ctx.relatedTarget.data('disable-url'), ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '10%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をアップデート中');
                    ctx.log('**************** Upgrade ****************');
                    return \$.post(\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_upgrade");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '40%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」のスキーマ更新中');
                    ctx.log('**************** Schema Update ****************');
                    return \$.post(\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_schema_update");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '60%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」の更新処理中');
                    ctx.log('**************** Update ****************');
                    return \$.post(\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_api_update");
        echo "\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '80%');
                        ctx.log(data.log);
                    })
                });
            }
        }
    };

    var mode;
    var relatedTarget;
    var modal = \$('#installModal');
    var message = \$('div.modal-body > p', modal);

    \$('#installModal').on('show.bs.modal', function(e) {
        relatedTarget = \$(e.relatedTarget);
        mode = MODES[relatedTarget.data('mode')];
        \$('.modal-title', modal).text(mode.name + '確認');
        message.text('「";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "name", [], "any", false, false, false, 98), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "version", [], "any", false, false, false, 98), "html", null, true);
        echo ")」を' + mode.name + 'しますか？');
        \$('#installBtn').text(mode.name);
    });

    \$('#installBtn').on('click', function() {
        message.text('「";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 103, $this->source); })()), "version", [], "any", false, false, false, 103), "html", null, true);
        echo ")」を' + mode.name + '中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。');
        var footer = \$('div.modal-footer', modal).hide();
        var progress = \$('div.progress', modal).show();
        var statusBar = \$('#installStatus').text('');
        var log = function(text) {
            if (text) {
                \$('#installLog').text(\$('#installLog').text() ? (\$('#installLog').text() + '\\n' + text) : text);
            }
        };

        var requires = ";
        // line 113
        echo json_encode((isset($context["requires"]) || array_key_exists("requires", $context) ? $context["requires"] : (function () { throw new RuntimeError('Variable "requires" does not exist.', 113, $this->source); })()));
        echo ";
        requires = requires.map(function(req) {
            return {'pluginCode':req.name.replace(/^ec-cube\\//, '') }
        });
        requires.push({'pluginCode': '";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "code", [], "any", false, false, false, 117), "html", null, true);
        echo "', 'version': '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "version", [], "any", false, false, false, 117), "html", null, true);
        echo "'});

        var progressBar = \$('div.progress-bar', progress);

        var d = \$.Deferred().resolve();

        var ctx = {
            'statusBar': statusBar,
            'progressBar': progressBar,
            'log': log,
            'currentCount': 0,
            'totalCount': requires.length,
            'deferred': d,
            'relatedTarget': relatedTarget
        };

        mode.init(ctx);

        requires.forEach(function(req) {
            d = mode.execute(\$.extend({}, ctx, {
                'plugin': req,
                'deferred': d
            }));
        });

        d.done(function() {
            \$('div.progress-bar', progress).css('width', '100%');

            var message_text = 'インストールが完了しました。';
            ";
        // line 146
        if (((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 146, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["Plugin"]) || array_key_exists("Plugin", $context) ? $context["Plugin"] : (function () { throw new RuntimeError('Variable "Plugin" does not exist.', 146, $this->source); })()), "enabled", [], "any", false, false, false, 146))) {
            // line 147
            echo "                message_text += 'プラグイン一覧より有効化を行って下さい。';
            ";
        }
        // line 149
        echo "            message.text(message_text);

        }).fail(function(res) {
            message.text('システムエラーが発生しました。');
            if (res.responseJSON) {
                log(res.responseJSON.log);
            }
            if (res.responseText) {
                log(res.responseText);
            }
        }).always(function() {
            statusBar.hide();
            \$('#installLogPane').show();
            \$('button', footer).hide();
            \$('a', footer).show();
            footer.show();
            progress.hide();
        });
    });
});

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 174
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div id=\"plugin-list\" class=\"card rounded mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">
                            ";
        // line 180
        if ((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 180, $this->source); })())) {
            // line 181
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.header.upgrade"), "html", null, true);
            echo "
                            ";
        } else {
            // line 183
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.header"), "html", null, true);
            echo "
                            ";
        }
        // line 185
        echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row pb-4 mb-4 border-bottom border-ec-gray\">
                        ";
        // line 189
        echo twig_include($this->env, $context, "@admin/Store/plugin_confirm_panel.twig");
        echo "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" onclick=\"return window.history.back()\">";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                                ";
        // line 195
        if ((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 195, $this->source); })())) {
            // line 196
            echo "                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#installModal\" data-mode=\"upgrade\"
                                            data-enable-url=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_enable", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Plugin"]) || array_key_exists("Plugin", $context) ? $context["Plugin"] : (function () { throw new RuntimeError('Variable "Plugin" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197), "maintenance_mode" => twig_constant("Eccube\\Service\\SystemService::AUTO_MAINTENANCE_UPDATE")]), "html", null, true);
            echo "\"
                                            data-disable-url=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_disable", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Plugin"]) || array_key_exists("Plugin", $context) ? $context["Plugin"] : (function () { throw new RuntimeError('Variable "Plugin" does not exist.', 198, $this->source); })()), "id", [], "any", false, false, false, 198), "maintenance_mode" => twig_constant("Eccube\\Service\\SystemService::AUTO_MAINTENANCE_UPDATE")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.upgrade"), "html", null, true);
            echo "</button>
                                ";
        } else {
            // line 200
            echo "                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#installModal\" data-mode=\"install\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.install"), "html", null, true);
            echo "</button>
                                ";
        }
        // line 202
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 207
        if ((((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 207, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["requires"]) || array_key_exists("requires", $context) ? $context["requires"] : (function () { throw new RuntimeError('Variable "requires" does not exist.', 207, $this->source); })())) > 0))) {
            // line 208
            echo "                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_confirm.require.header", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 210, $this->source); })()), "name", [], "any", false, false, false, 210)]), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"card-body\">
                        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requires"]) || array_key_exists("requires", $context) ? $context["requires"] : (function () { throw new RuntimeError('Variable "requires" does not exist.', 213, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 214
                echo "                            <ul>
                                <li>";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 215), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "versions", [], "any", false, false, false, 215), "html", null, true);
                echo "</li>
                            </ul>
                            ";
                // line 218
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "                    </div>
                </div>
                ";
        }
        // line 222
        echo "            </div>
        </div>
    </div>

    <div id=\"installModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"></h5>
                </div>
                <div class=\"modal-body\">
                    <p></p>
                    <div id=\"installProgress\" class=\"progress\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <div>
                        <p class=\"text-right small\" id=\"installStatus\"></p>
                    </div>
                    <div id=\"installLogPane\" style=\"display: none;\">
                        <div class=\"d-inline-block collapsed\" data-toggle=\"collapse\" href=\"#installLog\" aria-expanded=\"false\" aria-controls=\"installLog\">
                            <a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">ログを確認</span></a>
                        </div>
                        <pre class=\"collapsed collapse\" id=\"installLog\"></pre>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-ec-sub\" data-dismiss=\"modal\">";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                    <button type=\"button\" class=\"btn btn-ec-conversion\" id=\"installBtn\"></button>
                    <a href=\"";
        // line 250
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin");
        echo "\" class=\"btn btn-ec-regular\" style=\"display: none\">完了</a>
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
        return "@admin/Store/plugin_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 250,  463 => 248,  435 => 222,  430 => 219,  424 => 218,  417 => 215,  414 => 214,  410 => 213,  404 => 210,  400 => 208,  398 => 207,  391 => 202,  385 => 200,  378 => 198,  374 => 197,  371 => 196,  369 => 195,  365 => 194,  357 => 189,  351 => 185,  345 => 183,  339 => 181,  337 => 180,  329 => 174,  319 => 173,  287 => 149,  283 => 147,  281 => 146,  247 => 117,  240 => 113,  225 => 103,  215 => 98,  193 => 79,  182 => 71,  171 => 63,  145 => 40,  130 => 27,  120 => 26,  107 => 23,  97 => 22,  83 => 19,  77 => 17,  74 => 16,  64 => 15,  53 => 11,  51 => 13,  38 => 11,);
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

{% set menus = ['store', 'plugin', 'plugin_list'] %}

{% block title %}
    {% if is_update %}
        {{'admin.store.plugin_confirm.title.upgrade'|trans}}
    {% else %}
        {{'admin.store.plugin_confirm.title'|trans}}
    {% endif %}
{% endblock %}
{% block sub_title %}
    {{'admin.store.plugin_confirm.subtitle'|trans}}
{% endblock %}

{% block javascript %}
<script>
\$(function() {

    var MODES = {
        'install': {
            'name': 'インストール',
            'init': function(ctx) {
                ctx.progressBar.css('width', (0.5/ctx.totalCount*100) + '%');
            },
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をインストール中');
                    ctx.log('**************** ' + ctx.plugin.pluginCode + ' ****************');
                    return \$.post(\"{{ url('admin_store_plugin_api_install') }}\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', ((ctx.currentCount/ctx.totalCount + 0.5/ctx.totalCount)*100) + '%');
                        ctx.log(data.log);
                    })
                });
            }
        },
        'upgrade': {
            'name': 'アップデート',
            'init': function(ctx) {},
            'execute': function(ctx) {
                return ctx.deferred.then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」を無効化中');
                    ctx.log('**************** Disable ****************');
                    return \$.post(ctx.relatedTarget.data('disable-url'), ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '10%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」をアップデート中');
                    ctx.log('**************** Upgrade ****************');
                    return \$.post(\"{{ url('admin_store_plugin_api_upgrade') }}\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '40%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」のスキーマ更新中');
                    ctx.log('**************** Schema Update ****************');
                    return \$.post(\"{{ url('admin_store_plugin_api_schema_update') }}\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '60%');
                        ctx.log(data.log);
                    })
                }).then(function() {
                    ctx.statusBar.text('「' + ctx.plugin.pluginCode + '」の更新処理中');
                    ctx.log('**************** Update ****************');
                    return \$.post(\"{{ url('admin_store_plugin_api_update') }}\", ctx.plugin).then(function(data) {
                        ctx.currentCount += 1;
                        ctx.progressBar.css('width', '80%');
                        ctx.log(data.log);
                    })
                });
            }
        }
    };

    var mode;
    var relatedTarget;
    var modal = \$('#installModal');
    var message = \$('div.modal-body > p', modal);

    \$('#installModal').on('show.bs.modal', function(e) {
        relatedTarget = \$(e.relatedTarget);
        mode = MODES[relatedTarget.data('mode')];
        \$('.modal-title', modal).text(mode.name + '確認');
        message.text('「{{ item.name }} ({{ item.version }})」を' + mode.name + 'しますか？');
        \$('#installBtn').text(mode.name);
    });

    \$('#installBtn').on('click', function() {
        message.text('「{{ item.name }} ({{ item.version }})」を' + mode.name + '中。この処理には数分かかる場合があります。画面をリロードせずにこのままお待ち下さい。');
        var footer = \$('div.modal-footer', modal).hide();
        var progress = \$('div.progress', modal).show();
        var statusBar = \$('#installStatus').text('');
        var log = function(text) {
            if (text) {
                \$('#installLog').text(\$('#installLog').text() ? (\$('#installLog').text() + '\\n' + text) : text);
            }
        };

        var requires = {{ requires|json_encode|raw }};
        requires = requires.map(function(req) {
            return {'pluginCode':req.name.replace(/^ec-cube\\//, '') }
        });
        requires.push({'pluginCode': '{{ item.code }}', 'version': '{{ item.version }}'});

        var progressBar = \$('div.progress-bar', progress);

        var d = \$.Deferred().resolve();

        var ctx = {
            'statusBar': statusBar,
            'progressBar': progressBar,
            'log': log,
            'currentCount': 0,
            'totalCount': requires.length,
            'deferred': d,
            'relatedTarget': relatedTarget
        };

        mode.init(ctx);

        requires.forEach(function(req) {
            d = mode.execute(\$.extend({}, ctx, {
                'plugin': req,
                'deferred': d
            }));
        });

        d.done(function() {
            \$('div.progress-bar', progress).css('width', '100%');

            var message_text = 'インストールが完了しました。';
            {% if is_update and Plugin.enabled %}
                message_text += 'プラグイン一覧より有効化を行って下さい。';
            {% endif %}
            message.text(message_text);

        }).fail(function(res) {
            message.text('システムエラーが発生しました。');
            if (res.responseJSON) {
                log(res.responseJSON.log);
            }
            if (res.responseText) {
                log(res.responseText);
            }
        }).always(function() {
            statusBar.hide();
            \$('#installLogPane').show();
            \$('button', footer).hide();
            \$('a', footer).show();
            footer.show();
            progress.hide();
        });
    });
});

</script>
{% endblock %}

{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div id=\"plugin-list\" class=\"card rounded mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">
                            {% if is_update %}
                                {{ 'admin.store.plugin_confirm.header.upgrade'|trans }}
                            {% else %}
                                {{'admin.store.plugin_confirm.header'|trans}}
                            {% endif %}
                        </span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row pb-4 mb-4 border-bottom border-ec-gray\">
                        {{ include('@admin/Store/plugin_confirm_panel.twig') }}
                        </div>

                        <div class=\"row\">
                            <div class=\"col-12 text-right\">
                                <button class=\"btn btn-ec-sub\" type=\"button\" onclick=\"return window.history.back()\">{{ 'admin.common.cancel'|trans }}</button>
                                {% if is_update %}
                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#installModal\" data-mode=\"upgrade\"
                                            data-enable-url=\"{{ url('admin_store_plugin_enable', { id: Plugin.id , maintenance_mode: constant('Eccube\\\\Service\\\\SystemService::AUTO_MAINTENANCE_UPDATE')}) }}\"
                                            data-disable-url=\"{{ url('admin_store_plugin_disable', { id: Plugin.id , maintenance_mode: constant('Eccube\\\\Service\\\\SystemService::AUTO_MAINTENANCE_UPDATE')}) }}\">{{ 'admin.store.plugin.upgrade'|trans }}</button>
                                {% else %}
                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#installModal\" data-mode=\"install\">{{ 'admin.store.plugin.install'|trans }}</button>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                {% if is_update == false and requires|length > 0 %}
                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">{{ 'admin.store.plugin_confirm.require.header'|trans({'%name%': item.name}) }}</span>
                    </div>
                    <div class=\"card-body\">
                        {% for plugin in requires %}
                            <ul>
                                <li>{{ plugin.description }} {{ plugin.versions }}</li>
                            </ul>
                            {#{% include '@admin/Store/plugin_confirm_panel.twig' with {'item': plugin, 'is_update': is_update} only %}#}
                        {% endfor %}
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    </div>

    <div id=\"installModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" data-keyboard=\"false\" data-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\"></h5>
                </div>
                <div class=\"modal-body\">
                    <p></p>
                    <div id=\"installProgress\" class=\"progress\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <div>
                        <p class=\"text-right small\" id=\"installStatus\"></p>
                    </div>
                    <div id=\"installLogPane\" style=\"display: none;\">
                        <div class=\"d-inline-block collapsed\" data-toggle=\"collapse\" href=\"#installLog\" aria-expanded=\"false\" aria-controls=\"installLog\">
                            <a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">ログを確認</span></a>
                        </div>
                        <pre class=\"collapsed collapse\" id=\"installLog\"></pre>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-ec-sub\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                    <button type=\"button\" class=\"btn btn-ec-conversion\" id=\"installBtn\"></button>
                    <a href=\"{{ url('admin_store_plugin') }}\" class=\"btn btn-ec-regular\" style=\"display: none\">完了</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@admin/Store/plugin_confirm.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/plugin_confirm.twig");
    }
}
