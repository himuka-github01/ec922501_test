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

/* @admin/Store/plugin_search_panel.twig */
class __TwigTemplate_95a973db96e1e9538bf2ed17b75e986457cb5c42814e9f5510e16547a65a744e extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search_panel.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_search_panel.twig"));

        // line 11
        echo "
<div class=\"col-sm-2 pr-2 pr-sm-3\">
    <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\" data-code=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "code", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        <img class=\"w-100 img-responsive\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 14), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
    </a>
</div>
<div class=\"col-sm-6 col-md-7\">
    <div class=\"info\">
        <h5>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "store_url", [], "any", false, false, false, 20), "html", null, true);
        echo "\" class=\"font-weight-bold\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</a>（";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.latest"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "version", [], "any", false, false, false, 20), "html", null, true);
        echo "）
        </h5>
        <h6>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "short_description", [], "any", false, false, false, 22), "html", null, true);
        echo "</h6>
    </div>
    <div class=\"row\">
        <div class=\"col-auto col-md-5 col-lg-6\">
            <p class=\"plg-prices text-danger\"><span class=\"font-weight-bold text-dark\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
        echo " </span> ";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26)), "html", null, true);
        echo "<small> (";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo ")</small></p>
        </div>
        <div class=\"col-auto col-md-7 col-lg-2\">
            ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "price", [], "any", false, false, false, 29)) {
            // line 30
            echo "            <dl class=\"text-dark\">
                <dd class=\"d-inline-block\"><span class=\"pr-1 font-weight-bold\">";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.dl"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "downloads", [], "any", false, false, false, 31)), "html", null, true);
            echo "</dd>
            </dl>
            ";
        }
        // line 34
        echo "        </div>
        <div class=\"col-auto col-md-7 col-lg-4\">
            <dl class=\"text-dark\">
                <dd class=\"d-inline-block ml-4\"><span class=\"pr-1 font-weight-bold\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.support"), "html", null, true);
        echo "</span> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "supported_versions", [], "any", false, false, false, 37));
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
            echo twig_escape_filter($this->env, $context["version"], "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37) == false)) {
                echo ", ";
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
        echo "</dd>
            </dl>
        </div>
    </div>
</div>
<div class=\"col-sm-4 col-md-3 text-right\">
    <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 43, $this->source); })()), "eccube_owners_store_url", [], "any", false, false, false, 43), "html", null, true);
        echo "/gateway/purchase/?product_id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "\" method=\"post\" target=\"_blank\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "\" class=\"btn btn-ec-regular\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.detail"), "html", null, true);
        echo "</a>
        ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "update_status", [], "any", false, false, false, 45) == 1)) {
            // line 46
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.free"), "html", null, true);
            echo "
            </a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "update_status", [], "any", false, false, false, 49) == 2)) {
            // line 50
            echo "            <a href=\"#\" class=\"btn btn-ec-regular\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.installed"), "html", null, true);
            echo "</a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "update_status", [], "any", false, false, false, 51) == 3)) {
            // line 52
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.update"), "html", null, true);
            echo "
            </a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "update_status", [], "any", false, false, false, 55) == 4)) {
            // line 56
            echo "            <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
            <input type=\"hidden\" name=\"public_key\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 57, $this->source); })()), "authentication_key", [], "any", false, false, false, 57), "html", null, true);
            echo "\" />
            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.fee"), "html", null, true);
            echo "\" />
        ";
        }
        // line 60
        echo "    </form>
</div>

<!-- Modal -->
";
        // line 64
        echo twig_include($this->env, $context, "@admin/Store/plugin_detail_modal.twig");
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_search_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 64,  208 => 60,  203 => 58,  199 => 57,  196 => 56,  194 => 55,  189 => 53,  184 => 52,  182 => 51,  177 => 50,  175 => 49,  170 => 47,  165 => 46,  163 => 45,  157 => 44,  151 => 43,  109 => 37,  104 => 34,  96 => 31,  93 => 30,  91 => 29,  81 => 26,  74 => 22,  64 => 20,  53 => 14,  47 => 13,  43 => 11,);
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

<div class=\"col-sm-2 pr-2 pr-sm-3\">
    <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-{{ item.id }}\" data-code=\"{{ item.code }}\">
        <img class=\"w-100 img-responsive\" src=\"{{ item.image|default(asset('noimage_plugin_list.png', 'save_image')) }}\" alt=\"{{ item.name }}\">
    </a>
</div>
<div class=\"col-sm-6 col-md-7\">
    <div class=\"info\">
        <h5>
            <a href=\"{{ item.store_url }}\" class=\"font-weight-bold\" target=\"_blank\">{{ item.name }}</a>（{{ 'admin.store.plugin_owners_search.latest'|trans }}{{ item.version }}）
        </h5>
        <h6>{{ item.short_description }}</h6>
    </div>
    <div class=\"row\">
        <div class=\"col-auto col-md-5 col-lg-6\">
            <p class=\"plg-prices text-danger\"><span class=\"font-weight-bold text-dark\">{{ 'admin.store.plugin.price'|trans }} </span> {{ item.price|price }}<small> ({{ 'common.tax_include'|trans }})</small></p>
        </div>
        <div class=\"col-auto col-md-7 col-lg-2\">
            {% if not item.price %}
            <dl class=\"text-dark\">
                <dd class=\"d-inline-block\"><span class=\"pr-1 font-weight-bold\">{{'admin.store.plugin_owners_search.dl'|trans}}</span> {{ item.downloads|number_format }}</dd>
            </dl>
            {% endif %}
        </div>
        <div class=\"col-auto col-md-7 col-lg-4\">
            <dl class=\"text-dark\">
                <dd class=\"d-inline-block ml-4\"><span class=\"pr-1 font-weight-bold\">{{ 'admin.store.plugin_owners_search.support'|trans }}</span> {% for version in item.supported_versions %}{{ version }} {%- if loop.last == false%}, {% endif -%}{% endfor %}</dd>
            </dl>
        </div>
    </div>
</div>
<div class=\"col-sm-4 col-md-3 text-right\">
    <form action=\"{{ eccube_config.eccube_owners_store_url }}/gateway/purchase/?product_id={{ item.id }}\" method=\"post\" target=\"_blank\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-{{ item.id }}\" class=\"btn btn-ec-regular\">{{'admin.store.plugin_owners_search.detail'|trans}}</a>
        {% if item.update_status == 1 %}
            <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': item.id}) }}\" class=\"btn btn-primary\">
                {{ 'admin.store.plugin_owners_search.install.free'|trans }}
            </a>
        {% elseif item.update_status == 2 %}
            <a href=\"#\" class=\"btn btn-ec-regular\">{{ 'admin.store.plugin.installed'|trans }}</a>
        {% elseif item.update_status == 3 %}
            <a href=\"{{ url('admin_store_plugin_install_confirm', {'id': item.id}) }}\" class=\"btn btn-primary\">
                {{ 'admin.store.plugin.update'|trans }}
            </a>
        {% elseif item.update_status == 4 %}
            <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
            <input type=\"hidden\" name=\"public_key\" value=\"{{ BaseInfo.authentication_key }}\" />
            <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'admin.store.plugin_owners_search.install.fee'|trans }}\" />
        {% endif %}
    </form>
</div>

<!-- Modal -->
{{ include('@admin/Store/plugin_detail_modal.twig') }}", "@admin/Store/plugin_search_panel.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/plugin_search_panel.twig");
    }
}
