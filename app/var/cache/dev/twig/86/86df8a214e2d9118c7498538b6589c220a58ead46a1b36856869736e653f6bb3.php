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

/* Mypage/navi.twig */
class __TwigTemplate_b632006597db5e6c8f1c989ca81f9653810a8af06b118dd5a3540ad184a4af6c extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/navi.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/navi.twig"));

        // line 11
        echo "<div class=\"ec-navlistRole\">
    <ul class=\"ec-navlistRole__navlist\">
        <li class=\"ec-navlistRole__item ";
        // line 13
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 13, $this->source); })()), "")) : ("")) == "index")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__history"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 16, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 16)) {
            // line 17
            echo "            <li class=\"ec-navlistRole__item ";
            if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 17, $this->source); })()), "")) : ("")) == "favorite")) {
                echo "active";
            }
            echo "\">
                <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__favorite"), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        // line 21
        echo "        <li class=\"ec-navlistRole__item ";
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 21, $this->source); })()), "")) : ("")) == "change")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_change");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__customer"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 24
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 24, $this->source); })()), "")) : ("")) == "delivery")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_delivery");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__customer_address"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"ec-navlistRole__item ";
        // line 27
        if (((((isset($context["mypageno"]) || array_key_exists("mypageno", $context))) ? (_twig_default_filter((isset($context["mypageno"]) || array_key_exists("mypageno", $context) ? $context["mypageno"] : (function () { throw new RuntimeError('Variable "mypageno" does not exist.', 27, $this->source); })()), "")) : ("")) == "withdraw")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_withdraw");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__withdrow"), "html", null, true);
        echo "</a>
        </li>
    </ul>
</div>

<div class=\"ec-welcomeMsg\">
    <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.welcome", ["%last_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "name01", [], "any", false, false, false, 34), "%first_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "name02", [], "any", false, false, false, 34)]), "html", null, true);
        echo "</p>
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 35, $this->source); })()), "option_point", [], "any", false, false, false, 35)) {
            // line 36
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.welcome__point", ["%point%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "point", [], "any", false, false, false, 36))]), "html", null, true);
            echo "</p>
    ";
        }
        // line 38
        echo "</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/navi.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 38,  127 => 36,  125 => 35,  121 => 34,  110 => 28,  104 => 27,  97 => 25,  91 => 24,  84 => 22,  77 => 21,  69 => 18,  62 => 17,  60 => 16,  53 => 14,  47 => 13,  43 => 11,);
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
<div class=\"ec-navlistRole\">
    <ul class=\"ec-navlistRole__navlist\">
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'index' %}active{% endif %}\">
            <a href=\"{{ url('mypage') }}\">{{ 'front.mypage.nav__history'|trans }}</a>
        </li>
        {% if BaseInfo.option_favorite_product %}
            <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'favorite' %}active{% endif %}\">
                <a href=\"{{ url('mypage_favorite') }}\">{{ 'front.mypage.nav__favorite'|trans }}</a>
            </li>
        {% endif %}
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'change' %}active{% endif %}\">
            <a href=\"{{ url('mypage_change') }}\">{{ 'front.mypage.nav__customer'|trans }}</a>
        </li>
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'delivery' %}active{% endif %}\">
            <a href=\"{{ url('mypage_delivery') }}\">{{ 'front.mypage.nav__customer_address'|trans }}</a>
        </li>
        <li class=\"ec-navlistRole__item {% if mypageno|default('') == 'withdraw' %}active{% endif %}\">
            <a href=\"{{ url('mypage_withdraw') }}\">{{ 'front.mypage.nav__withdrow'|trans }}</a>
        </li>
    </ul>
</div>

<div class=\"ec-welcomeMsg\">
    <p>{{ 'front.mypage.welcome'|trans({ '%last_name%': app.user.name01, '%first_name%': app.user.name02 }) }}</p>
    {% if BaseInfo.option_point %}
        <p>{{ 'front.mypage.welcome__point'|trans({ '%point%': app.user.point|number_format}) }}</p>
    {% endif %}
</div>

", "Mypage/navi.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mypage/navi.twig");
    }
}
