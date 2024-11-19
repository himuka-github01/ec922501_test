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

/* start/list_tenpo.twig */
class __TwigTemplate_9c2ee643f664fa932c5c15087ce1af92e38f3fc7fbf2842f539b689e6cd41a1e extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "start/list_tenpo.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "start/list_tenpo.twig"));

        // line 13
        $context["body_class"] = "front_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "start/list_tenpo.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "    <style>
        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

        .tenpo-block {
            display: flex;
            flex-wrap:wrap;
        }

        .tenpo-group-item {
            list-style: none;
            width: 50%;
            padding: 15px 30px;
            box-sizing: border-box;
        }

        .applicable-tenpo {
            background-color: #FFCC66;
            border: 2px solid #FFCC00;
            border-radius: 1em;
            text-align: center;
            color: #fff;
            height: 70px;
        }

        .applicable-tenpo:hover {
            background-color: #FFCC00;
        }

        .tenpo-list {
            background-color: #55acee;
            border: 2px solid #008BBB;
            border-radius: 1em;
            text-align: center;
            color: #fff;
            height: 70px;
        }

        .tenpo-list:hover {
            background-color: #008BBB;
        }

        .tenpo-name {
            color: #fff;
        }

        .tenpo-name:hover {
            color: #fff;
            text-decoration: none;
        }

        .tenpoName-text {
            padding: 20px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 145
        echo "    <script>
        \$(function() {
            \$('.main_visual').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                speed: 300
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 158
        echo "    <div class=\"ec-sliderRole\">
        <div class=\"ec-layoutRole tenpo-block\">
            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Tenpos"]) || array_key_exists("Tenpos", $context) ? $context["Tenpos"] : (function () { throw new RuntimeError('Variable "Tenpos" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Tenpo"]) {
            // line 161
            echo "                <li id=\"ex-category-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "id", [], "any", false, false, false, 161), "html", null, true);
            echo "\" class=\"sortable-item tenpo-group-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "id", [], "any", false, false, false, 161), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "sortNo", [], "any", false, false, false, 161), "html", null, true);
            echo "\">
                    ";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, $context["Tenpo"], "id", [], "any", false, false, false, 162) == (isset($context["tenpo_id"]) || array_key_exists("tenpo_id", $context) ? $context["tenpo_id"] : (function () { throw new RuntimeError('Variable "tenpo_id" does not exist.', 162, $this->source); })()))) {
                // line 163
                echo "                        <div class=\"row justify-content-around mode-view applicable-tenpo\">
                    ";
            } else {
                // line 165
                echo "                        <div class=\"row justify-content-around mode-view tenpo-list\">
                    ";
            }
            // line 167
            echo "                        <!--
                        <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                        -->
                        <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("start/choice_tenpo", ["tenpo_id" => twig_get_attribute($this->env, $this->source, $context["Tenpo"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            echo "\" class=\"tenpo-name\">
                            <div class=\"col d-flex align-items-center tenpoName-text\">
                                ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "tenpoName", [], "any", false, false, false, 172), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "tenpoCd", [], "any", false, false, false, 172), "html", null, true);
            echo ")
                            </div>
                        </a>                                               
                    </div>                               
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tenpo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "        </div><!-- ec-layoutRole -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "start/list_tenpo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 178,  286 => 172,  281 => 170,  276 => 167,  272 => 165,  268 => 163,  266 => 162,  257 => 161,  253 => 160,  249 => 158,  239 => 157,  219 => 145,  209 => 144,  73 => 16,  63 => 15,  52 => 11,  50 => 13,  37 => 11,);
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

{% set body_class = 'front_page' %}

{% block stylesheet %}
    <style>
        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

        .tenpo-block {
            display: flex;
            flex-wrap:wrap;
        }

        .tenpo-group-item {
            list-style: none;
            width: 50%;
            padding: 15px 30px;
            box-sizing: border-box;
        }

        .applicable-tenpo {
            background-color: #FFCC66;
            border: 2px solid #FFCC00;
            border-radius: 1em;
            text-align: center;
            color: #fff;
            height: 70px;
        }

        .applicable-tenpo:hover {
            background-color: #FFCC00;
        }

        .tenpo-list {
            background-color: #55acee;
            border: 2px solid #008BBB;
            border-radius: 1em;
            text-align: center;
            color: #fff;
            height: 70px;
        }

        .tenpo-list:hover {
            background-color: #008BBB;
        }

        .tenpo-name {
            color: #fff;
        }

        .tenpo-name:hover {
            color: #fff;
            text-decoration: none;
        }

        .tenpoName-text {
            padding: 20px;
        }
    </style>
{% endblock %}

{% block javascript %}
    <script>
        \$(function() {
            \$('.main_visual').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                speed: 300
            });
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"ec-sliderRole\">
        <div class=\"ec-layoutRole tenpo-block\">
            {% for Tenpo in Tenpos %}
                <li id=\"ex-category-{{ Tenpo.id }}\" class=\"sortable-item tenpo-group-item\" data-id=\"{{ Tenpo.id }}\" data-sort-no=\"{{ Tenpo.sortNo }}\">
                    {% if Tenpo.id == tenpo_id %}
                        <div class=\"row justify-content-around mode-view applicable-tenpo\">
                    {% else %}
                        <div class=\"row justify-content-around mode-view tenpo-list\">
                    {% endif %}
                        <!--
                        <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                        -->
                        <a href=\"{{ url('start/choice_tenpo',  { tenpo_id : Tenpo.id }) }}\" class=\"tenpo-name\">
                            <div class=\"col d-flex align-items-center tenpoName-text\">
                                {{ Tenpo.tenpoName }}({{ Tenpo.tenpoCd }})
                            </div>
                        </a>                                               
                    </div>                               
                </li>
            {% endfor %}
        </div><!-- ec-layoutRole -->
    </div>
{% endblock %}
", "start/list_tenpo.twig", "/var/www/htdocs/ec922501/app/template/default/start/list_tenpo.twig");
    }
}
