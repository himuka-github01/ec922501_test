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

/* /start/list_saiji.twig */
class __TwigTemplate_fb0325e567089ac641e457326bbb364d1cde0ae7e410addebd582eb895e3d070 extends \Eccube\Twig\Template
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
        // line 13
        $context["body_class"] = "front_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "/start/list_saiji.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
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

        .saiji-group-item {
            list-style: none;
            margin: 30px;
        }

        .saiji-list {
            background-color: #55acee;
            border: 2px solid #008BBB;
            border-radius: 1em;
            text-align: center;
            color: #fff;
            height: 70px;
        }

        .saiji-list:hover {
            background-color: #008BBB;
        }

        .saiji-name {
            color: #fff;
        }

        .saiji-name:hover {
            color: #fff;
            text-decoration: none;
        }

        .saijiName-text {
            padding: 10px;
        }
    </style>
";
    }

    // line 124
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
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
    }

    // line 137
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "    <div class=\"ec-sliderRole\">
        <div class=\"ec-layoutRole\">
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Saijies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Saiji"]) {
            // line 141
            echo "                <li id=\"ex-category-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Saiji"], "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\" class=\"sortable-item saiji-group-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Saiji"], "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Saiji"], "sort_no", [], "any", false, false, false, 141), "html", null, true);
            echo "\">
                    <div class=\"row justify-content-around mode-view saiji-list\">
                        <!--
                        <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                        -->
                        <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("start/choice_saiji", ["saiji_id" => twig_get_attribute($this->env, $this->source, $context["Saiji"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            echo "\" class=\"saiji-name\">
                            <div class=\"saijiName-text\">
                                <div class=\"col d-flex align-items-center\">
                                    ";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Saiji"], "name", [], "any", false, false, false, 149), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Saiji"], "saijiCd", [], "any", false, false, false, 149), "html", null, true);
            echo ")
                                </div>
                                <div class=\"col-auto d-flex align-items-center\">
                                    ";
            // line 152
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Saiji"], "dispStartDt", [], "any", false, false, false, 152), "Y/m/d"), "html", null, true);
            echo "~";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Saiji"], "dispEndDt", [], "any", false, false, false, 152), "Y/m/d"), "html", null, true);
            echo "
                                </div>
                            </div>
                        </a>                                               
                    </div>                               
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Saiji'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        </div><!-- ec-layoutRole -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "/start/list_saiji.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 159,  222 => 152,  214 => 149,  208 => 146,  195 => 141,  191 => 140,  187 => 138,  183 => 137,  169 => 125,  165 => 124,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "/start/list_saiji.twig", "/var/www/htdocs/ec922501/app/template/default/start/list_saiji.twig");
    }
}
