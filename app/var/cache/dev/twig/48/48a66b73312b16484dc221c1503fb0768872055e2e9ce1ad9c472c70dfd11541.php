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

/* @admin/Store/plugin_confirm_panel.twig */
class __TwigTemplate_7a5678c79f5d7ed00fd0c313feb27b5987ef650e7e90cfc06236e7976e3e685d extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm_panel.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Store/plugin_confirm_panel.twig"));

        // line 11
        echo "<div class=\"col-4\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "store_url", [], "any", false, false, false, 12), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"w-100 img-responsive\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"\"></a>
</div>
<div class=\"col\">
    <div class=\"info\">
        <h5 class=\"font-weight-bold mb-4\">
            ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "
        </h5>
        <div>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "short_description", [], "any", false, false, false, 20), "html", null, true);
        echo "</div>
        ";
        // line 21
        if (((isset($context["is_update"]) || array_key_exists("is_update", $context) ? $context["is_update"] : (function () { throw new RuntimeError('Variable "is_update" does not exist.', 21, $this->source); })()) == false)) {
            // line 22
            echo "            <p class=\"text-danger mb-4 mt-3\"><span class=\"font-weight-bold text-body\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
            echo " </span> ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "price", [], "any", false, false, false, 22)), "html", null, true);
            echo "<small> (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
            echo ")</small></p>
        ";
        }
        // line 24
        echo "        <div class=\"row\">
            <div class=\"col-7\">
                ";
        // line 26
        echo twig_include($this->env, $context, "@admin/Store/plugin_detail_info.twig");
        echo "
            </div>
        </div>
    </div>
    ";
        // line 30
        $context["version_check"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "version_check", [], "any", false, false, false, 30);
        // line 31
        echo "    ";
        if (((isset($context["version_check"]) || array_key_exists("version_check", $context) ? $context["version_check"] : (function () { throw new RuntimeError('Variable "version_check" does not exist.', 31, $this->source); })()) == false)) {
            // line 32
            echo "        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"alert alert-danger border border-danger\">
                    <p class=\"text-danger mb-0\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.note", ["%version%" => twig_constant("Eccube\\Common\\Constant::VERSION")]), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        </div>
    ";
        }
        // line 42
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Store/plugin_confirm_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  101 => 36,  95 => 32,  92 => 31,  90 => 30,  83 => 26,  79 => 24,  69 => 22,  67 => 21,  63 => 20,  58 => 18,  50 => 13,  46 => 12,  43 => 11,);
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
<div class=\"col-4\">
    <a href=\"{{ item.store_url }}\" target=\"_blank\">
        <img class=\"w-100 img-responsive\" src=\"{{ item.image }}\" alt=\"\"></a>
</div>
<div class=\"col\">
    <div class=\"info\">
        <h5 class=\"font-weight-bold mb-4\">
            {{ item.name }}
        </h5>
        <div>{{ item.short_description }}</div>
        {% if is_update == false %}
            <p class=\"text-danger mb-4 mt-3\"><span class=\"font-weight-bold text-body\">{{ 'admin.store.plugin.price'|trans }} </span> {{ item.price|price }}<small> ({{ 'common.tax_include'|trans }})</small></p>
        {% endif %}
        <div class=\"row\">
            <div class=\"col-7\">
                {{ include('@admin/Store/plugin_detail_info.twig') }}
            </div>
        </div>
    </div>
    {% set version_check = item.version_check  %}
    {% if version_check == false %}
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"alert alert-danger border border-danger\">
                    <p class=\"text-danger mb-0\">
                        {{ 'admin.store.plugin_owners_search.modal.note'|trans({'%version%': constant('Eccube\\\\Common\\\\Constant::VERSION')}) }}
                    </p>
                </div>
            </div>
        </div>
    {% endif %}
</div>
", "@admin/Store/plugin_confirm_panel.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Store/plugin_confirm_panel.twig");
    }
}
