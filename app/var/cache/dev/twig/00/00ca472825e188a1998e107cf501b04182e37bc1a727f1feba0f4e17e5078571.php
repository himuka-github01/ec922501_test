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

/* @admin/Store/plugin_confirm_uninstall_panel.twig */
class __TwigTemplate_00ee9dbe09f158e0bade8adeea3d079da8b31d206bd9e0f7a7f93faf17a7ed9c extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm_uninstall_panel.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm_uninstall_panel.twig"));

        // line 11
        $context["is_supported_eccube_version"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "is_supported_eccube_version", [], "any", false, false, false, 11);
        // line 12
        echo "<div class=\"plugin-panel ";
        if (((isset($context["is_supported_eccube_version"]) || array_key_exists("is_supported_eccube_version", $context) ? $context["is_supported_eccube_version"] : (function () { throw new RuntimeError('Variable "is_supported_eccube_version" does not exist.', 12, $this->source); })()) == 0)) {
            echo "plugin-panel-not";
        }
        echo "\">
    <div class=\"plugin-logo\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "product_url", [], "any", false, false, false, 14), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"img-rounded\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "product_image_url", [], "any", false, false, false, 14), "html", null, true);
        echo "\"></a>
    </div>
    <div class=\"plugin-content-top\">
        <div class=\"plugin-title\">
            <a class=\"plugin-name\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "product_url", [], "any", false, false, false, 18), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</a>
        </div>
        <div class=\"plugin-description\">
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "summary", [], "any", false, false, false, 21), "html", null, true);
        echo "
        </div>
        <div class=\"plugin-description\">
            ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "promotion", [], "any", false, false, false, 24) == 1)) {
            // line 25
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getEllipsis(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 500), "html", null, true);
            echo "
            ";
        } else {
            // line 27
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getEllipsis(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 400), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"plugin-content-bottom\">
        <dl class=\"plugin-meta dl-horizontal\">
            <dt class=\"plugin-price\">価格</dt><dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34)), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-download\">DL数</dt><dd>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "download_number", [], "any", false, false, false, 35), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-version\">プラグインバージョン</dt><dd>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "version", [], "any", false, false, false, 36), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-update\">最終更新日</dt><dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getTimeAgo(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "last_update_date", [], "any", false, false, false, 37)), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-eccubeversion\">EC-CUBE対応バージョン</dt><dd>";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "eccube_version", [], "any", false, false, false, 38));
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
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 38) == false)) {
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
            <dt class=\"plugin-licence\">ライセンス</dt><dd>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "licence", [], "any", false, false, false, 39), "html", null, true);
        echo "</dd>
        </dl>
        ";
        // line 41
        if (((isset($context["is_supported_eccube_version"]) || array_key_exists("is_supported_eccube_version", $context) ? $context["is_supported_eccube_version"] : (function () { throw new RuntimeError('Variable "is_supported_eccube_version" does not exist.', 41, $this->source); })()) == 0)) {
            // line 42
            echo "            <p class=\"text-danger\">このプラグインはEC-CUBE ";
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
            echo "をサポートしていないため、正常に動作しない可能性があります。</p>
        ";
        }
        // line 44
        echo "        <p class=\"plugin-developer\">
            <strong>制作者</strong> : ";
        // line 45
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "developer_url", [], "any", false, false, false, 45))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "developer_url", [], "any", false, false, false, 45), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "developer", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "developer", [], "any", false, false, false, 45), "html", null, true);
        }
        // line 46
        echo "        </p>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_confirm_uninstall_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 46,  164 => 45,  161 => 44,  155 => 42,  153 => 41,  148 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  90 => 29,  84 => 27,  78 => 25,  76 => 24,  70 => 21,  62 => 18,  53 => 14,  45 => 12,  43 => 11,);
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
{% set is_supported_eccube_version = item.is_supported_eccube_version  %}
<div class=\"plugin-panel {% if is_supported_eccube_version == 0 %}plugin-panel-not{% endif %}\">
    <div class=\"plugin-logo\">
        <a href=\"{{ item.product_url }}\" target=\"_blank\"><img class=\"img-rounded\" src=\"{{ item.product_image_url }}\"></a>
    </div>
    <div class=\"plugin-content-top\">
        <div class=\"plugin-title\">
            <a class=\"plugin-name\" href=\"{{ item.product_url }}\" target=\"_blank\">{{ item.name }}</a>
        </div>
        <div class=\"plugin-description\">
            {{ item.summary }}
        </div>
        <div class=\"plugin-description\">
            {% if item.promotion == 1 %}
                {{ item.description|ellipsis(500) }}
            {% else %}
                {{ item.description|ellipsis(400) }}
            {% endif %}
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"plugin-content-bottom\">
        <dl class=\"plugin-meta dl-horizontal\">
            <dt class=\"plugin-price\">価格</dt><dd>{{ item.price|price }}</dd>
            <dt class=\"plugin-download\">DL数</dt><dd>{{ item.download_number }}</dd>
            <dt class=\"plugin-version\">プラグインバージョン</dt><dd>{{ item.version }}</dd>
            <dt class=\"plugin-update\">最終更新日</dt><dd>{{ item.last_update_date|time_ago }}</dd>
            <dt class=\"plugin-eccubeversion\">EC-CUBE対応バージョン</dt><dd>{% for version in item.eccube_version %}{{ version }} {%- if loop.last == false%}, {% endif -%}{% endfor %}</dd>
            <dt class=\"plugin-licence\">ライセンス</dt><dd>{{ item.licence }}</dd>
        </dl>
        {% if is_supported_eccube_version == 0 %}
            <p class=\"text-danger\">このプラグインはEC-CUBE {{ constant('Eccube\\\\Common\\\\Constant::VERSION') }}をサポートしていないため、正常に動作しない可能性があります。</p>
        {% endif %}
        <p class=\"plugin-developer\">
            <strong>制作者</strong> : {% if item.developer_url is not null %}<a href=\"{{ item.developer_url }}\" target=\"_blank\">{{ item.developer }}</a>{% else %}{{ item.developer }}{% endif %}
        </p>
    </div>
</div>
", "@admin/Store/plugin_confirm_uninstall_panel.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/plugin_confirm_uninstall_panel.twig");
    }
}
