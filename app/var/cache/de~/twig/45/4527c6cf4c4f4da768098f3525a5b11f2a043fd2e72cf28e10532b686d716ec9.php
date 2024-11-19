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

/* Block/logo.twig */
class __TwigTemplate_c2c2387b9266b62ba4361260b2087327529ac16f5b692e6a2033a84887844079 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/logo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/logo.twig"));

        // line 11
        echo "<div class=\"ec-headerRole\">
    <div class=\"ec-headerRole__title\">
        <div class=\"ec-headerTitle\">
            <div class=\"ec-headerTitle__title\">
                <h1>
                    ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16) == "start/list_saiji")) {
            // line 17
            echo "                        <a href=\"\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("イベントを選択してください"), "html", null, true);
            echo "
                        </a>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20) == "start/list_tenpo")) {
            // line 21
            echo "                        <a href=\"\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お引渡し店舗を選択してください"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 25
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
            echo "\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 26, $this->source); })()), "shop_name", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 29
        echo "                </h1>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  76 => 26,  71 => 25,  65 => 22,  62 => 21,  60 => 20,  55 => 18,  52 => 17,  50 => 16,  43 => 11,);
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
<div class=\"ec-headerRole\">
    <div class=\"ec-headerRole__title\">
        <div class=\"ec-headerTitle\">
            <div class=\"ec-headerTitle__title\">
                <h1>
                    {% if Page.url == 'start/list_saiji' %}
                        <a href=\"\">
                            {{ 'イベントを選択してください'|trans }}
                        </a>
                    {% elseif Page.url == 'start/list_tenpo' %}
                        <a href=\"\">
                            {{ 'お引渡し店舗を選択してください'|trans }}
                        </a>
                    {% else %}
                        <a href=\"{{ url('homepage') }}\">
                            {{ BaseInfo.shop_name }}
                        </a>
                    {% endif %}
                </h1>
            </div>
        </div>
    </div>
</div>
", "Block/logo.twig", "/var/www/htdocs/ec922501/app/template/default/Block/logo.twig");
    }
}
