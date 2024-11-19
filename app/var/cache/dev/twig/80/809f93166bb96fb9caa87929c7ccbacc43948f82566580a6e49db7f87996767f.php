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

/* Shopping/shipping.twig */
class __TwigTemplate_275c4b4a5611f406d712352bc82435698aad34c8763e5bee025988a0cb748259 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/shipping.twig"));

        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping/shipping.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_title"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-registerRole\">
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-addressRole\">
                    ";
        // line 24
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 24, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 24)) < twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 24, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, false, 24))) {
            // line 25
            echo "                        <div class=\"ec-addressRole__actions\"><a class=\"ec-inlineBtn\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping_edit", ["id" => (isset($context["shippingId"]) || array_key_exists("shippingId", $context) ? $context["shippingId"] : (function () { throw new RuntimeError('Variable "shippingId" does not exist.', 25, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_add_new_shipping"), "html", null, true);
            echo "</a></div>
                    ";
        } else {
            // line 27
            echo "                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
                                ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.customer_address_count_is_over", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 30, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, false, 30)]), "html", null, true);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 34
        echo "                    ";
        if ($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "addresses", [], "any", false, false, false, 34))) {
            // line 35
            echo "                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
                                ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_unselected"), "html", null, true);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 42
        echo "                </div>

                <form method=\"post\" action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_shipping", ["id" => (isset($context["shippingId"]) || array_key_exists("shippingId", $context) ? $context["shippingId"] : (function () { throw new RuntimeError('Variable "shippingId" does not exist.', 44, $this->source); })())]), "html", null, true);
        echo "\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "_token", [], "any", false, false, false, 45), 'widget');
        echo "
                    <div class=\"ec-addressList\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "addresses", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "choices", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 48
            echo "                            ";
            $context["Address"] = twig_get_attribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 48);
            // line 49
            echo "                        <div class=\"ec-addressList__item\">
                            <div class=\"ec-addressList__remove\">
                                ";
            // line 51
            $context["checked"] = ((Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "addresses", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51))) ? ("checked=\"checked\"") : (""));
            // line 52
            echo "                                <input type=\"radio\" id=\"address";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 52), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "addresses", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "full_name", [], "any", false, false, false, 52), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 52), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 52, $this->source); })()), "html", null, true);
            echo " />
                            </div>
                            <div class=\"ec-addressList__address\">
                                <div>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 55, $this->source); })()), "name01", [], "any", false, false, false, 55), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 55, $this->source); })()), "name02", [], "any", false, false, false, 55), "html", null, true);
            echo "</div>
                                <div>〒";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 56, $this->source); })()), "postal_code", [], "any", false, false, false, 56), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 56, $this->source); })()), "Pref", [], "any", false, false, false, 56), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 56, $this->source); })()), "addr01", [], "any", false, false, false, 56), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 56, $this->source); })()), "addr02", [], "any", false, false, false, 56), "html", null, true);
            echo "</div>
                                <div>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Address"]) || array_key_exists("Address", $context) ? $context["Address"] : (function () { throw new RuntimeError('Variable "Address" does not exist.', 57, $this->source); })()), "phone_number", [], "any", false, false, false, 57), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </div>

                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.shopping.shipping_send_selected_shipping"), "html", null, true);
        echo "</button>
                                <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 67,  196 => 66,  189 => 61,  179 => 57,  171 => 56,  165 => 55,  152 => 52,  150 => 51,  146 => 49,  143 => 48,  139 => 47,  134 => 45,  130 => 44,  126 => 42,  119 => 38,  115 => 37,  111 => 35,  108 => 34,  101 => 30,  97 => 29,  93 => 27,  85 => 25,  83 => 24,  72 => 16,  68 => 14,  58 => 13,  35 => 11,);
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
{% extends 'default_frame.twig' %}

{% block main %}
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'front.shopping.shipping_title'|trans }}</h1>
        </div>
    </div>

    <div class=\"ec-registerRole\">
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-addressRole\">
                    {% if Customer.CustomerAddresses|length < eccube_config.eccube_deliv_addr_max %}
                        <div class=\"ec-addressRole__actions\"><a class=\"ec-inlineBtn\" href=\"{{ url('shopping_shipping_edit', {'id': shippingId}) }}\">{{ 'front.shopping.shipping_add_new_shipping'|trans }}</a></div>
                    {% else %}
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"/></div>
                                {{ 'common.customer_address_count_is_over'|trans({ '%count%': eccube_config.eccube_deliv_addr_max }) }}
                            </div>
                        </div>
                    {% endif %}
                    {% if has_errors(form.addresses) %}
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__text\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"/></div>
                                {{ 'front.shopping.shipping_unselected'|trans }}
                            </div>
                        </div>
                    {% endif %}
                </div>

                <form method=\"post\" action=\"{{ url('shopping_shipping', {'id': shippingId}) }}\">
                    {{ form_widget(form._token) }}
                    <div class=\"ec-addressList\">
                        {% for choice in form.addresses.vars.choices %}
                            {% set Address = choice.data %}
                        <div class=\"ec-addressList__item\">
                            <div class=\"ec-addressList__remove\">
                                {% set checked = choice is selectedchoice(form.addresses.vars.value) ? 'checked=\"checked\"' : '' %}
                                <input type=\"radio\" id=\"address{{ choice.value }}\" name=\"{{ form.addresses.vars.full_name }}\" value=\"{{ choice.value }}\" {{ checked }} />
                            </div>
                            <div class=\"ec-addressList__address\">
                                <div>{{ Address.name01 }}&nbsp;{{ Address.name02 }}</div>
                                <div>〒{{ Address.postal_code }} {{ Address.Pref }}{{ Address.addr01 }}{{ Address.addr02 }}</div>
                                <div>{{ Address.phone_number }}</div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>

                    <div class=\"ec-registerRole__actions\">
                        <div class=\"ec-off4Grid\">
                            <div class=\"ec-off4Grid__cell\">
                                <button type=\"submit\" class=\"ec-blockBtn--action\">{{ 'front.shopping.shipping_send_selected_shipping'|trans }}</button>
                                <a class=\"ec-blockBtn--cancel\" href=\"{{ url('shopping') }}\">{{ 'common.back'|trans }}</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
{% endblock %}
", "Shopping/shipping.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Shopping/shipping.twig");
    }
}
