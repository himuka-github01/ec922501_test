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

/* Block/news.twig */
class __TwigTemplate_e8d6ad21a934349ab3e708009e910600f28cf336786d92972623c450fdde2bd3 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/news.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/news.twig"));

        // line 11
        $context["NewsList"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\News"]), "getList", [], "method", false, false, false, 11);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('javascript', $context, $blocks);
        // line 49
        echo "<div class=\"ec-role\">
    <div class=\"ec-newsRole\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.news.title__en"), "html", null, true);
        echo "</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.news.title__ja"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ec-newsRole__news\">
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NewsList"]) || array_key_exists("NewsList", $context) ? $context["NewsList"] : (function () { throw new RuntimeError('Variable "NewsList" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 58
            echo "                <div class=\"ec-newsRole__newsItem\">
                    <div class=\"ec-newsRole__newsHeading\">
                        <div class=\"ec-newsRole__newsDate\">
                            ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "publish_date", [], "any", false, false, false, 61)), "html", null, true);
            echo "
                        </div>
                        <div class=\"ec-newsRole__newsColumn\">
                            <div class=\"ec-newsRole__newsTitle\">
                                ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo "
                            </div>
                            ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, $context["News"], "description", [], "any", false, false, false, 67) || twig_get_attribute($this->env, $this->source, $context["News"], "url", [], "any", false, false, false, 67))) {
                // line 68
                echo "                                <div class=\"ec-newsRole__newsClose\">
                                    <a class=\"ec-newsRole__newsCloseBtn\">
                                        <i class=\"fas fa-angle-down\"></i>
                                    </a>
                                </div>
                            ";
            }
            // line 74
            echo "                        </div>
                    </div>
                    <div class=\"ec-newsRole__newsDescription\">
                        ";
            // line 77
            echo nl2br(twig_get_attribute($this->env, $this->source, $context["News"], "description", [], "any", false, false, false, 77));
            echo "
                        ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["News"], "url", [], "any", false, false, false, 78)) {
                // line 79
                echo "                            <br>
                            <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["News"], "url", [], "any", false, false, false, 80), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["News"], "link_method", [], "any", false, false, false, 80) == "1")) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.news.see_details"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 82
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "    <script>
        \$(function() {
            \$('.ec-newsRole__news').each(function() {
                var listLength = \$(this).find('.ec-newsRole__newsItem').length;
                if (listLength > 5) {
                    \$(this).find('.ec-newsRole__newsItem:gt(4)').each(function() {
                        \$(this).hide();
                    });
                    \$(this).append('<a id=\"news_readmore\" class=\"ec-inlineBtn--top\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.block.news.read_more"), "html", null, true);
        echo "</a>');
                    var dispNum = 5;
                    \$(this).find('#news_readmore').click(function() {
                        dispNum += 5;
                        \$(this).parent().find('.ec-newsRole__newsItem:lt(' + dispNum + ')').show();
                        if (dispNum >= listLength) {
                            \$(this).hide();
                        }
                    })
                }
            });

            \$('.ec-newsRole__newsHeading').on('click', function() {
                \$newsItem = \$(this).parent('.ec-newsRole__newsItem');
                \$newsDescription = \$newsItem.children('.ec-newsRole__newsDescription');
                if (\$newsDescription.css('display') == 'none') {
                    \$newsItem.addClass('is_active');
                    \$newsDescription.slideDown(300);
                } else {
                    \$newsItem.removeClass('is_active');
                    \$newsDescription.slideUp(300);
                }
                return false;
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Block/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 22,  154 => 14,  144 => 13,  131 => 85,  123 => 82,  112 => 80,  109 => 79,  107 => 78,  103 => 77,  98 => 74,  90 => 68,  88 => 67,  83 => 65,  76 => 61,  71 => 58,  67 => 57,  61 => 54,  56 => 52,  51 => 49,  49 => 13,  46 => 12,  44 => 11,);
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
{% set NewsList = repository('Eccube\\\\Entity\\\\News').getList() %}

{% block javascript %}
    <script>
        \$(function() {
            \$('.ec-newsRole__news').each(function() {
                var listLength = \$(this).find('.ec-newsRole__newsItem').length;
                if (listLength > 5) {
                    \$(this).find('.ec-newsRole__newsItem:gt(4)').each(function() {
                        \$(this).hide();
                    });
                    \$(this).append('<a id=\"news_readmore\" class=\"ec-inlineBtn--top\">{{ 'front.block.news.read_more'|trans }}</a>');
                    var dispNum = 5;
                    \$(this).find('#news_readmore').click(function() {
                        dispNum += 5;
                        \$(this).parent().find('.ec-newsRole__newsItem:lt(' + dispNum + ')').show();
                        if (dispNum >= listLength) {
                            \$(this).hide();
                        }
                    })
                }
            });

            \$('.ec-newsRole__newsHeading').on('click', function() {
                \$newsItem = \$(this).parent('.ec-newsRole__newsItem');
                \$newsDescription = \$newsItem.children('.ec-newsRole__newsDescription');
                if (\$newsDescription.css('display') == 'none') {
                    \$newsItem.addClass('is_active');
                    \$newsDescription.slideDown(300);
                } else {
                    \$newsItem.removeClass('is_active');
                    \$newsDescription.slideUp(300);
                }
                return false;
            });
        });
    </script>
{% endblock %}
<div class=\"ec-role\">
    <div class=\"ec-newsRole\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">{{ 'front.block.news.title__en'|trans }}</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">{{ 'front.block.news.title__ja'|trans }}</span>
        </div>
        <div class=\"ec-newsRole__news\">
            {% for News in NewsList %}
                <div class=\"ec-newsRole__newsItem\">
                    <div class=\"ec-newsRole__newsHeading\">
                        <div class=\"ec-newsRole__newsDate\">
                            {{ News.publish_date|date_day }}
                        </div>
                        <div class=\"ec-newsRole__newsColumn\">
                            <div class=\"ec-newsRole__newsTitle\">
                                {{ News.title }}
                            </div>
                            {% if News.description or News.url %}
                                <div class=\"ec-newsRole__newsClose\">
                                    <a class=\"ec-newsRole__newsCloseBtn\">
                                        <i class=\"fas fa-angle-down\"></i>
                                    </a>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"ec-newsRole__newsDescription\">
                        {{ News.description|raw|nl2br }}
                        {% if News.url %}
                            <br>
                            <a href=\"{{ News.url }}\" {% if News.link_method == '1' %}target=\"_blank\"{% endif %}>{{ 'front.block.news.see_details'|trans }}</a>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
", "Block/news.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Block/news.twig");
    }
}
