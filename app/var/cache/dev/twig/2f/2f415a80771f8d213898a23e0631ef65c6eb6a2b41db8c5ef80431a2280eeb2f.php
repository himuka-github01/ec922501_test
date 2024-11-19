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

/* @admin/Store/unregisterd_plugin_table.twig */
class __TwigTemplate_37877cd236ad1587c73670709064edcb6103673ec0fdf7aaa5f91d82f2aa60c1 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/unregisterd_plugin_table.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/unregisterd_plugin_table.twig"));

        // line 11
        echo "<div class=\"card-body p-0\">
    <table class=\"table table-sm\">
        <thead>
        <tr>
            <th class=\"border-top-0 pl-3 pt-2 pb-2\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.941"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.944"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.945"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Plugins"]) || array_key_exists("Plugins", $context) ? $context["Plugins"] : (function () { throw new RuntimeError('Variable "Plugins" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
            // line 24
            echo "            <form id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\" method=\"post\" action=\"\">
                <tr class=\"";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 25) == false)) {
                echo "active";
            }
            echo "\">
                    ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", true, true, false, 26)) {
                // line 27
                echo "                        <td class=\"align-middle pl-3\">
                            <strong>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</strong>
                        </td>
                    ";
            } else {
                // line 31
                echo "                        <td class=\"align-middle pl-3\">
                            <strong>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.946"), "html", null, true);
                echo "</strong>
                        </td>
                    ";
            }
            // line 35
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", true, true, false, 35)) {
                // line 36
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 38
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.947"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 40
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", true, true, false, 40)) {
                // line 41
                echo "                        <td class=\"align-middle\"><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 41), "html", null, true);
                echo "</p>
                            ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "config", [], "any", false, true, false, 42), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 42), [], "array", false, true, false, 42), "const", [], "any", false, true, false, 42), "readme", [], "any", true, true, false, 42)) {
                    // line 43
                    echo "                                <a href=\"#\" class=\"view_readme\" data-toggle=\"modal\" data-target=\"#readmeModal\" data-name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" data-readme=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "config", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 43), [], "array", false, false, false, 43), "const", [], "any", false, false, false, 43), "readme", [], "any", false, false, false, 43), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.897"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 45
                echo "                        </td>
                    ";
            } else {
                // line 47
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.949"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 49
            echo "                    <td class=\"align-middle\">
                        &nbsp;-&nbsp;
                    </td>
                    <td class=\"align-middle\">
                        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["unregisteredPluginsConfigPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 53), [], "array", true, true, false, 53)) {
                // line 54
                echo "                            <a href='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["unregisteredPluginsConfigPages"]) || array_key_exists("unregisteredPluginsConfigPages", $context) ? $context["unregisteredPluginsConfigPages"] : (function () { throw new RuntimeError('Variable "unregisteredPluginsConfigPages" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.950"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 56
                echo "                            &nbsp;-&nbsp;
                        ";
            }
            // line 58
            echo "                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/unregisterd_plugin_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 62,  174 => 58,  170 => 56,  162 => 54,  160 => 53,  154 => 49,  148 => 47,  144 => 45,  134 => 43,  132 => 42,  127 => 41,  124 => 40,  118 => 38,  112 => 36,  109 => 35,  103 => 32,  100 => 31,  94 => 28,  91 => 27,  89 => 26,  83 => 25,  76 => 24,  72 => 23,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  43 => 11,);
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
<div class=\"card-body p-0\">
    <table class=\"table table-sm\">
        <thead>
        <tr>
            <th class=\"border-top-0 pl-3 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.941'|trans}}</th>
            <th class=\"border-top-0 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.942'|trans}}</th>
            <th class=\"border-top-0 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.943'|trans}}</th>
            <th class=\"border-top-0 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.944'|trans}}</th>
            <th class=\"border-top-0 pt-2 pb-2\">{{'admin.store.unregistered_plugin_table.945'|trans}}</th>
        </tr>
        </thead>
        <tbody>
        {% for Plugin in Plugins %}
            <form id=\"{{ Plugin.name }}\" name=\"{{ Plugin.name }}\" method=\"post\" action=\"\">
                <tr class=\"{% if Plugin.enabled == false %}active{% endif %}\">
                    {% if Plugin.name is defined %}
                        <td class=\"align-middle pl-3\">
                            <strong>{{ Plugin.name }}</strong>
                        </td>
                    {% else %}
                        <td class=\"align-middle pl-3\">
                            <strong>{{'admin.store.unregistered_plugin_table.946'|trans}}</strong>
                        </td>
                    {% endif %}
                    {% if Plugin.version is defined %}
                        <td class=\"align-middle\">{{ Plugin.version }}</td>
                    {% else %}
                        <td class=\"align-middle\">{{'admin.store.unregistered_plugin_table.947'|trans}}</td>
                    {% endif %}
                    {% if Plugin.code is defined %}
                        <td class=\"align-middle\"><p>{{ Plugin.code }}</p>
                            {% if attribute(app.config[Plugin.code].const, 'readme') is defined %}
                                <a href=\"#\" class=\"view_readme\" data-toggle=\"modal\" data-target=\"#readmeModal\" data-name=\"{{ Plugin.name }}\" data-readme=\"{{ attribute(app.config[Plugin.code].const, 'readme')  }}\">{{ 'admin.store.plugin_table.897'|trans }}</a>
                            {% endif %}
                        </td>
                    {% else %}
                        <td class=\"align-middle\">{{'admin.store.unregistered_plugin_table.949'|trans}}</td>
                    {% endif %}
                    <td class=\"align-middle\">
                        &nbsp;-&nbsp;
                    </td>
                    <td class=\"align-middle\">
                        {% if unregisteredPluginsConfigPages[Plugin.code] is defined %}
                            <a href='{{ unregisteredPluginsConfigPages[Plugin.code]}}'>{{'admin.store.unregistered_plugin_table.950'|trans}}</a>
                        {% else %}
                            &nbsp;-&nbsp;
                        {% endif %}
                    </td>
                </tr>
            </form>
        {% endfor %}
        </tbody>
    </table>
</div>
", "@admin/Store/unregisterd_plugin_table.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/unregisterd_plugin_table.twig");
    }
}
