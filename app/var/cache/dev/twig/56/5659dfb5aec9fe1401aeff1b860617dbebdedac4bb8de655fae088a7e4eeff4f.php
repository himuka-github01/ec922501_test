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

/* Block/new_item.twig */
class __TwigTemplate_7cf5219ac83df780006b2701dd2851b2b315ebc1a308d3fe7980eb56de873228 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/new_item.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/new_item.twig"));

        // line 11
        echo "
<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.title__en"), "html", null, true);
        echo "</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.title__ja"), "html", null, true);
        echo "</span>
                    <a class=\"ec-inlineBtn--top\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.more"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => "1"]);
        echo "\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cube-1.png", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.item_1_name"), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.item_1_price"), "html", null, true);
        echo "</p>
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => "2"]);
        echo "\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sand-1.png", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.item_2_name"), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.item_2_price"), "html", null, true);
        echo "</p>
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => "1"]);
        echo "\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.item_3_name"), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.new_item.item_3_price"), "html", null, true);
        echo "</p>
                </a>
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
        return "Block/new_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  115 => 40,  111 => 39,  107 => 38,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  60 => 20,  56 => 19,  51 => 17,  43 => 11,);
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

<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">{{ 'front.block.new_item.title__en'|trans }}</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">{{ 'front.block.new_item.title__ja'|trans }}</span>
                    <a class=\"ec-inlineBtn--top\" href=\"{{ url('product_list') }}\">{{ 'front.block.new_item.more'|trans }}</a>
                </div>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"{{ url('product_detail', {'id': '1'}) }}\">
                    <img src=\"{{ asset('cube-1.png', 'save_image') }}\">
                    <p class=\"ec-newItemRole__listItemTitle\">{{ 'front.block.new_item.item_1_name'|trans }}</p>
                    <p class=\"ec-newItemRole__listItemPrice\">{{ 'front.block.new_item.item_1_price'|trans }}</p>
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"{{ url('product_detail', {'id': '2'}) }}\">
                    <img src=\"{{ asset('sand-1.png', 'save_image') }}\">
                    <p class=\"ec-newItemRole__listItemTitle\">{{ 'front.block.new_item.item_2_name'|trans }}</p>
                    <p class=\"ec-newItemRole__listItemPrice\">{{ 'front.block.new_item.item_2_price'|trans }}</p>
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"{{ url('product_detail', {'id': '1'}) }}\">
                    <img src=\"{{ asset(''|no_image_product , 'save_image') }}\">
                    <p class=\"ec-newItemRole__listItemTitle\">{{ 'front.block.new_item.item_3_name'|trans }}</p>
                    <p class=\"ec-newItemRole__listItemPrice\">{{ 'front.block.new_item.item_3_price'|trans }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
", "Block/new_item.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Block/new_item.twig");
    }
}
