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

/* Block/topic.twig */
class __TwigTemplate_0026e047a026f1cff717c5c406fd5e137db89085228f08987c3bae12caca3dd0 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/topic.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/topic.twig"));

        // line 11
        echo "
<div class=\"ec-topicRole\">
    <div class=\"ec-role\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.topic.topic__en"), "html", null, true);
        echo "</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.topic.topic__ja"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ec-topicRole__list\">
            <div class=\"ec-topicRole__listItem\">
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=1\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_bnr01.jpg"), "html", null, true);
        echo "\">
                </a>
                <p class=\"ec-topicRole__listItemTitle\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.topic.title__gelato"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"ec-topicRole__listItem\">
                <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=5\">
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/top/img_bnr02.jpg"), "html", null, true);
        echo "\">
                </a>
                <p class=\"ec-topicRole__listItemTitle\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.topic.title__ice"), "html", null, true);
        echo "</p>
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
        return "Block/topic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  80 => 28,  76 => 27,  70 => 24,  65 => 22,  61 => 21,  54 => 17,  49 => 15,  43 => 11,);
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

<div class=\"ec-topicRole\">
    <div class=\"ec-role\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">{{ 'front.block.topic.topic__en'|trans }}</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">{{ 'front.block.topic.topic__ja'|trans }}</span>
        </div>
        <div class=\"ec-topicRole__list\">
            <div class=\"ec-topicRole__listItem\">
                <a href=\"{{ url('product_list') }}?category_id=1\">
                    <img src=\"{{ asset('assets/img/top/img_bnr01.jpg') }}\">
                </a>
                <p class=\"ec-topicRole__listItemTitle\">{{ 'front.block.topic.title__gelato'|trans }}</p>
            </div>
            <div class=\"ec-topicRole__listItem\">
                <a href=\"{{ url('product_list') }}?category_id=5\">
                    <img src=\"{{ asset('assets/img/top/img_bnr02.jpg') }}\">
                </a>
                <p class=\"ec-topicRole__listItemTitle\">{{ 'front.block.topic.title__ice'|trans }}</p>
            </div>
        </div>
    </div>
</div>
", "Block/topic.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Block/topic.twig");
    }
}
