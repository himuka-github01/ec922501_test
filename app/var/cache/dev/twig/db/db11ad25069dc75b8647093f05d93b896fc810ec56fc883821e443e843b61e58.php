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

/* @admin/Setting/Shop/delivery_time_prototype.twig */
class __TwigTemplate_64e2745057fbae4c522b97045f5d0556d6a35e249e6e2c5746356d8f46b7beaf extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery_time_prototype.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/delivery_time_prototype.twig"));

        // line 11
        $context["DeliveryTime"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11);
        // line 12
        echo "<li class=\"list-group-item delivery-time-item sortable-item\">
    <div class=\"row justify-content-around mode-view\">
        <div class=\"col-auto d-flex align-items-center\">
            <i class=\"fa fa-bars text-ec-gray\"></i>
        </div>
        <div class=\"col d-flex align-items-center\">
            <a class=\"display-label\">";
        // line 18
        if (twig_test_empty((isset($context["DeliveryTime"]) || array_key_exists("DeliveryTime", $context) ? $context["DeliveryTime"] : (function () { throw new RuntimeError('Variable "DeliveryTime" does not exist.', 18, $this->source); })()))) {
            echo "__value__";
        } else {
            echo twig_escape_filter($this->env, (isset($context["DeliveryTime"]) || array_key_exists("DeliveryTime", $context) ? $context["DeliveryTime"] : (function () { throw new RuntimeError('Variable "DeliveryTime" does not exist.', 18, $this->source); })()), "html", null, true);
        }
        echo "</a>
        </div>
        <div class=\"col-auto text-right\">
            <a class=\"btn btn-ec-actionIcon mr-2 action-up\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
        echo "\">
                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-down\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
        echo "\">
                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-edit\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
        echo "\">
                <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
            </a>
            ";
        // line 33
        if (twig_test_empty((isset($context["DeliveryTime"]) || array_key_exists("DeliveryTime", $context) ? $context["DeliveryTime"] : (function () { throw new RuntimeError('Variable "DeliveryTime" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "                <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"\" data-tooltip=\"true\"
                   data-placement=\"top\" title=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide"), "html", null, true);
            echo "\">
                    <i class=\"fa fa-toggle-on fa-lg text-secondary\" aria-hidden=\"true\"></i>
                </a>
            ";
        } else {
            // line 39
            echo "                <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"\" data-tooltip=\"true\"
                   data-placement=\"top\" title=\"";
            // line 40
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["DeliveryTime"]) || array_key_exists("DeliveryTime", $context) ? $context["DeliveryTime"] : (function () { throw new RuntimeError('Variable "DeliveryTime" does not exist.', 40, $this->source); })()), "visible", [], "any", false, false, false, 40)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
            echo "\">
                    <i class=\"fa fa-toggle-";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["DeliveryTime"]) || array_key_exists("DeliveryTime", $context) ? $context["DeliveryTime"] : (function () { throw new RuntimeError('Variable "DeliveryTime" does not exist.', 41, $this->source); })()), "visible", [], "any", false, false, false, 41)) ? ("on") : ("off"));
            echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                </a>
            ";
        }
        // line 44
        echo "            <a class=\"btn btn-ec-actionIcon mr-2 remove-delivery-time-item\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "\">
                <i class=\"fa fa-close fa-lg text-secondary\"></i>
            </a>
        </div>
    </div>
    <div class=\"row justify-content-around mode-edit d-none\">
        <div class=\"col d-flex align-items-center\">
            <div class=\"form-row\">
                <div class=\"col-auto d-flex align-items-center\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "delivery_time", [], "any", false, false, false, 54), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "value", [], "any", false, false, false, 54)]]);
        echo "
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-conversion action-edit-submit\" type=\"submit\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
        echo "</button>
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"submit\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "delivery_time", [], "any", false, false, false, 62), 'errors');
        echo "
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "sort_no", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "sort-no"]]);
        echo "
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "sort_no", [], "any", false, false, false, 64), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "visible", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "visible d-none"]]);
        echo "
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "visible", [], "any", false, false, false, 66), 'errors');
        echo "
            </div>
        </div>
    </div>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/delivery_time_prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 66,  153 => 65,  149 => 64,  145 => 63,  141 => 62,  136 => 60,  130 => 57,  124 => 54,  112 => 45,  109 => 44,  103 => 41,  99 => 40,  96 => 39,  89 => 35,  86 => 34,  84 => 33,  78 => 30,  71 => 26,  64 => 22,  53 => 18,  45 => 12,  43 => 11,);
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
{% set DeliveryTime = form.vars.value %}
<li class=\"list-group-item delivery-time-item sortable-item\">
    <div class=\"row justify-content-around mode-view\">
        <div class=\"col-auto d-flex align-items-center\">
            <i class=\"fa fa-bars text-ec-gray\"></i>
        </div>
        <div class=\"col d-flex align-items-center\">
            <a class=\"display-label\">{% if DeliveryTime is empty %}__value__{% else %}{{ DeliveryTime }}{% endif %}</a>
        </div>
        <div class=\"col-auto text-right\">
            <a class=\"btn btn-ec-actionIcon mr-2 action-up\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"{{ 'admin.common.up'|trans }}\">
                <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-down\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"{{ 'admin.common.down'|trans }}\">
                <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
            </a>
            <a class=\"btn btn-ec-actionIcon mr-2 action-edit\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"{{ 'admin.common.edit'|trans }}\">
                <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
            </a>
            {% if DeliveryTime is empty %}
                <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"\" data-tooltip=\"true\"
                   data-placement=\"top\" title=\"{{ 'admin.common.to_hide'|trans }}\">
                    <i class=\"fa fa-toggle-on fa-lg text-secondary\" aria-hidden=\"true\"></i>
                </a>
            {% else %}
                <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"\" data-tooltip=\"true\"
                   data-placement=\"top\" title=\"{{ DeliveryTime.visible ? 'admin.common.to_hide'|trans : 'admin.common.to_show'|trans }}\">
                    <i class=\"fa fa-toggle-{{ DeliveryTime.visible ? 'on' : 'off' }} fa-lg text-secondary\" aria-hidden=\"true\"></i>
                </a>
            {% endif %}
            <a class=\"btn btn-ec-actionIcon mr-2 remove-delivery-time-item\" href=\"\" data-tooltip=\"true\"
               data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                <i class=\"fa fa-close fa-lg text-secondary\"></i>
            </a>
        </div>
    </div>
    <div class=\"row justify-content-around mode-edit d-none\">
        <div class=\"col d-flex align-items-center\">
            <div class=\"form-row\">
                <div class=\"col-auto d-flex align-items-center\">
                    {{ form_widget(form.delivery_time, {'attr': {'data-origin-value': form.vars.value }}) }}
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-conversion action-edit-submit\" type=\"submit\">{{ 'admin.common.decision'|trans }}</button>
                </div>
                <div class=\"col-auto d-flex align-items-center\">
                    <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"submit\">{{ 'admin.common.cancel'|trans }}</button>
                </div>
                {{ form_errors(form.delivery_time) }}
                {{ form_widget(form.sort_no, {'attr': {'class': \"sort-no\" }}) }}
                {{ form_errors(form.sort_no) }}
                {{ form_widget(form.visible, {'attr': {'class': \"visible d-none\" }}) }}
                {{ form_errors(form.visible) }}
            </div>
        </div>
    </div>
</li>
", "@admin/Setting/Shop/delivery_time_prototype.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Setting/Shop/delivery_time_prototype.twig");
    }
}
