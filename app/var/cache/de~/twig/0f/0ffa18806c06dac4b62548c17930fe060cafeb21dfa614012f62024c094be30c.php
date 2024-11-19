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

/* Block/login_sp.twig */
class __TwigTemplate_de7783ac4e3a6d486201b8ad305dabbc26847e66ed61873b1e6d73204e13ea7d extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login_sp.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/login_sp.twig"));

        // line 11
        echo "
<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        <a class=\"ec-headerLink__item\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-shopping-cart fa-fw\"></i>
            </div>
            <span>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.to_cart"), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 21
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.mypage"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 27, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 27)) {
                // line 28
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.favorite"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 35
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.logout"), "html", null, true);
            echo "</span>
            </a>
        ";
        } else {
            // line 42
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("entry");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.customer_registration"), "html", null, true);
            echo "</span>
            </a>
            ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 48, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 48)) {
                // line 49
                echo "                <a class=\"ec-headerLink__item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_favorite");
                echo "\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.favorite"), "html", null, true);
                echo "</span>
                </a>
            ";
            }
            // line 56
            echo "            <a class=\"ec-headerLink__item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_login");
            echo "\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.login"), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 63
        echo "        <a class=\"ec-headerLink__item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-home fa-fw\"></i>
            </div>
            <span>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.login.to_home"), "html", null, true);
        echo "</span>
        </a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/login_sp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 67,  148 => 63,  142 => 60,  134 => 56,  128 => 53,  120 => 49,  118 => 48,  113 => 46,  105 => 42,  99 => 39,  91 => 35,  85 => 32,  77 => 28,  75 => 27,  70 => 25,  62 => 21,  60 => 20,  55 => 18,  48 => 14,  43 => 11,);
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

<div class=\"ec-headerLinkArea\">
    <div class=\"ec-headerLink__list\">
        <a class=\"ec-headerLink__item\" href=\"{{ url('cart') }}\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-shopping-cart fa-fw\"></i>
            </div>
            <span>{{ 'front.block.login.to_cart'|trans }}</span>
        </a>
        {% if is_granted('ROLE_USER') %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('mypage') }}\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>{{ 'front.block.login.mypage'|trans }}</span>
            </a>
            {% if BaseInfo.option_favorite_product %}
                <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_favorite') }}\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>{{ 'front.block.login.favorite'|trans }}</span>
                </a>
            {% endif %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('logout') }}\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>{{ 'front.block.login.logout'|trans }}</span>
            </a>
        {% else %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('entry') }}\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-user fa-fw\"></i>
                </div>
                <span>{{ 'front.block.login.customer_registration'|trans }}</span>
            </a>
            {% if BaseInfo.option_favorite_product %}
                <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_favorite') }}\">
                    <div class=\"ec-headerLink__icon\">
                        <i class=\"fas fa-heart fa-fw\"></i>
                    </div>
                    <span>{{ 'front.block.login.favorite'|trans }}</span>
                </a>
            {% endif %}
            <a class=\"ec-headerLink__item\" href=\"{{ url('mypage_login') }}\">
                <div class=\"ec-headerLink__icon\">
                    <i class=\"fas fa-lock fa-fw\"></i>
                </div>
                <span>{{ 'front.block.login.login'|trans }}</span>
            </a>
        {% endif %}
        <a class=\"ec-headerLink__item\" href=\"{{ url('homepage') }}\">
            <div class=\"ec-headerLink__icon\">
                <i class=\"fas fa-home fa-fw\"></i>
            </div>
            <span>{{ 'front.block.login.to_home'|trans }}</span>
        </a>
    </div>
</div>
", "Block/login_sp.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Block/login_sp.twig");
    }
}
