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

/* Mypage/delivery.twig */
class __TwigTemplate_a1853e43d4d5ac217b21ccd5349c86337f9e838bbe28cf37320eb3d8eda40bc2 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/delivery.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/delivery.twig"));

        // line 13
        $context["mypageno"] = "delivery";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/delivery.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__customer_address"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        echo twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
        </div>
        <div class=\"ec-mypageRole\">
            ";
        // line 26
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 26, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 26)) > 0)) {
            // line 27
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.customer_address_count", ["%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 27, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 27))]), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 29
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.customer_address_not_found"), "html", null, true);
            echo "</p>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <div class=\"ec-addressRole\">
                        <div class=\"ec-addressRole__actions\">
                            ";
        // line 37
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 37, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 37)) < twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 37, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, false, 37))) {
            // line 38
            echo "                                <a class=\"ec-inlineBtn\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_delivery_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.add_customer_address"), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 40
            echo "                                <span class=\"ec-errorMessage\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.customer_address_count_is_over", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 40, $this->source); })()), "eccube_deliv_addr_max", [], "any", false, false, false, 40)]), "html", null, true);
            echo "</span>
                            ";
        }
        // line 42
        echo "                        </div>
                    </div>
                    ";
        // line 44
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 44, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 44)) > 0)) {
            // line 45
            echo "                        <div class=\"ec-addressList\">
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 46, $this->source); })()), "CustomerAddresses", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                // line 47
                echo "                                <div class=\"ec-addressList__item\">
                                    <a class=\"ec-addressList__remove\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                echo "\" alt=\"remove\">
                                        </div>
                                    </a>
                                    <div class=\"ec-addressList__address\">
                                        <div>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, false, 54), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, false, 54), "html", null, true);
                echo "</div>
                                        <div>";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, false, 55), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, false, 55), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr01", [], "any", false, false, false, 55), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr02", [], "any", false, false, false, 55), "html", null, true);
                echo "</div>
                                        <div>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "phone_number", [], "any", false, false, false, 56), "html", null, true);
                echo "</div>
                                    </div>
                                    <div class=\"ec-addressList__action\">
                                        <a class=\"ec-inlineBtn\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.change"), "html", null, true);
                echo "</a>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        </div>
                    ";
        }
        // line 65
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/delivery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 65,  192 => 63,  180 => 59,  174 => 56,  165 => 55,  159 => 54,  152 => 50,  145 => 48,  142 => 47,  138 => 46,  135 => 45,  133 => 44,  129 => 42,  123 => 40,  115 => 38,  113 => 37,  105 => 31,  99 => 29,  93 => 27,  91 => 26,  85 => 23,  78 => 21,  73 => 18,  63 => 17,  52 => 11,  50 => 15,  48 => 13,  35 => 11,);
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

{% set mypageno = 'delivery' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'front.mypage.title'|trans }}/{{ 'front.mypage.nav__customer_address'|trans }}</h1>
            </div>
            {{ include('Mypage/navi.twig') }}
        </div>
        <div class=\"ec-mypageRole\">
            {% if Customer.CustomerAddresses|length > 0 %}
                <p class=\"ec-para-normal\">{{ 'front.mypage.customer_address_count'|trans({'%count%':Customer.CustomerAddresses|length}) }}</p>
            {% else %}
                <p class=\"ec-para-normal\">{{ 'front.mypage.customer_address_not_found'|trans }}</p>
            {% endif %}
        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <div class=\"ec-addressRole\">
                        <div class=\"ec-addressRole__actions\">
                            {% if Customer.CustomerAddresses|length < eccube_config.eccube_deliv_addr_max %}
                                <a class=\"ec-inlineBtn\" href=\"{{ url('mypage_delivery_new') }}\">{{ 'front.mypage.add_customer_address'|trans }}</a>
                            {% else %}
                                <span class=\"ec-errorMessage\">{{ 'common.customer_address_count_is_over'|trans({ '%count%': eccube_config.eccube_deliv_addr_max }) }}</span>
                            {% endif %}
                        </div>
                    </div>
                    {% if Customer.CustomerAddresses|length > 0 %}
                        <div class=\"ec-addressList\">
                            {% for CustomerAddress in Customer.CustomerAddresses %}
                                <div class=\"ec-addressList__item\">
                                    <a class=\"ec-addressList__remove\" href=\"{{ url('mypage_delivery_delete', { id : CustomerAddress.id }) }}\" {{ csrf_token_for_anchor() }} data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"{{ asset('assets/icon/cross.svg') }}\" alt=\"remove\">
                                        </div>
                                    </a>
                                    <div class=\"ec-addressList__address\">
                                        <div>{{ CustomerAddress.name01 }}&nbsp;{{ CustomerAddress.name02 }}</div>
                                        <div>{{ 'common.postal_symbol'|trans }}{{ CustomerAddress.postal_code }} {{ CustomerAddress.Pref }}{{ CustomerAddress.addr01 }}{{ CustomerAddress.addr02 }}</div>
                                        <div>{{ CustomerAddress.phone_number }}</div>
                                    </div>
                                    <div class=\"ec-addressList__action\">
                                        <a class=\"ec-inlineBtn\" href=\"{{ url('mypage_delivery_edit', { id : CustomerAddress.id }) }}\">{{ 'common.change'|trans }}</a>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Mypage/delivery.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mypage/delivery.twig");
    }
}
