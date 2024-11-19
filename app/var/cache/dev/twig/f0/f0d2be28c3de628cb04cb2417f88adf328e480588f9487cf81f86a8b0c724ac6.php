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

/* Help/tradelaw.twig */
class __TwigTemplate_13c4efd985e6f528d1fec0d8539cffa10abc871bb299472d6ee107aa4bfe5bb3 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Help/tradelaw.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Help/tradelaw.twig"));

        $this->parent = $this->loadTemplate("default_frame.twig", "Help/tradelaw.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1> ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.tradelaw.title"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-borderedDefs\">
                    <dl>
                        <dt>
                            <label class=\"ec-label\">販売業者</label>
                        </dt>
                        <dd></dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">代表責任者</label>
                        </dt>
                        <dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">所在地</label>
                        </dt>
                        <dd>

                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">電話番号</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">メールアドレス</label>
                        </dt>
                        <dd><a href=\"mailto:\"></a></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">URL</label>
                        </dt>
                        <dd><a href=\"\"></a></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">商品代金以外の必要料金</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">引き渡し時期</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">お支払方法</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">返品・交換について</label>
                        </dt>
                        <dd></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Help/tradelaw.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  68 => 14,  58 => 13,  35 => 11,);
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

{% block main %}
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1> {{ 'front.tradelaw.title'|trans }}</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-borderedDefs\">
                    <dl>
                        <dt>
                            <label class=\"ec-label\">販売業者</label>
                        </dt>
                        <dd></dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">代表責任者</label>
                        </dt>
                        <dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">所在地</label>
                        </dt>
                        <dd>

                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">電話番号</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">メールアドレス</label>
                        </dt>
                        <dd><a href=\"mailto:\"></a></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">URL</label>
                        </dt>
                        <dd><a href=\"\"></a></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">商品代金以外の必要料金</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">引き渡し時期</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">お支払方法</label>
                        </dt>
                        <dd></dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">返品・交換について</label>
                        </dt>
                        <dd></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Help/tradelaw.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Help/tradelaw.twig");
    }
}
