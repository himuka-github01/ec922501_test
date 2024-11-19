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
class __TwigTemplate_46670aa84455191078ac664157096f64947bf78d031f998219a3e2fdccaa8ba8 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "start/list_tenpo.twig", 11);
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
    }

    // line 144
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 157
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "   
    <div class=\"ec-sliderRole\">
        <div class=\"ec-layoutRole tenpo-block\">
             <p> <font color=\"red\" size=\"5\">　※ヤマト配送時は一番下の「ヤマト配送（９９９）」を選択して下さい。</font></p>
            ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Tenpos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Tenpo"]) {
            // line 163
            echo "                <li id=\"ex-category-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "id", [], "any", false, false, false, 163), "html", null, true);
            echo "\" class=\"sortable-item tenpo-group-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "id", [], "any", false, false, false, 163), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "sortNo", [], "any", false, false, false, 163), "html", null, true);
            echo "\">
                    ";
            // line 164
            if ((twig_get_attribute($this->env, $this->source, $context["Tenpo"], "id", [], "any", false, false, false, 164) == ($context["tenpo_id"] ?? null))) {
                // line 165
                echo "                        <div class=\"row justify-content-around mode-view applicable-tenpo\">
                    ";
            } else {
                // line 167
                echo "                        <div class=\"row justify-content-around mode-view tenpo-list\">
                    ";
            }
            // line 169
            echo "                        <!--
                        <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                        -->
                        <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("start/choice_tenpo", ["tenpo_id" => twig_get_attribute($this->env, $this->source, $context["Tenpo"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\" class=\"tenpo-name\">
                            <div class=\"col d-flex align-items-center tenpoName-text\">
                                ";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "tenpoName", [], "any", false, false, false, 174), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tenpo"], "tenpoCd", [], "any", false, false, false, 174), "html", null, true);
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
        // line 180
        echo "        </div><!-- ec-layoutRole -->
    </div>
";
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
        return array (  260 => 180,  246 => 174,  241 => 172,  236 => 169,  232 => 167,  228 => 165,  226 => 164,  217 => 163,  213 => 162,  207 => 158,  203 => 157,  189 => 145,  185 => 144,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "start/list_tenpo.twig", "/var/www/htdocs/ec922501/app/template/default/start/list_tenpo.twig");
    }
}
