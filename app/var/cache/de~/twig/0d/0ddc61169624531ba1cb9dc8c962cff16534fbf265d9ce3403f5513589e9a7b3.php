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

/* Block/header.twig */
class __TwigTemplate_79c650072f905021ed1597e99cbf976166dd07fd76c74c87242bf6427bad0db5 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/header.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/header.twig"));

        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 93
        echo "<div class=\"ec-headerNaviRole header-navi-role\">
    <!--<div class=\"header-navi\">-->
        <!--
        <div class=\"hiddenItem\">
            <div class=\"ec-headerNaviRole__search hiddenItem\">
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("block_search_product"));
        echo "
            </div>
            <div class=\"ec-headerRole__navSP hiddenItem\">
                ";
        // line 101
        echo twig_include($this->env, $context, "Block/nav_sp.twig");
        echo "
            </div>
        </div>
        -->
        <div class=\"ec-headerNaviRole__left\">
            <div class=\"nav-front\">
                <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_homepage");
        echo "\">管理画面</a>
            </div>
            <div class=\"nav-front\">
                <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("start");
        echo "\">催事選択</a>
            </div>
            <div class=\"nav-front\">
                <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "\">商品一覧</a>
            </div>
        </div>
        <!--<div class=\"header-navi\">-->
            <div class=\"ec-headerNaviRole__right\">
                <div class=\"front-block select-saiji\">
                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("block_select_saiji"));
        echo "
                </div>
                <div class=\"front-block select-tenpo\">
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("block_select_tenpo"));
        echo "
                </div>
                <!--
                <div class=\"ec-headerNaviRole__nav\">
                    ";
        // line 126
        echo twig_include($this->env, $context, "Block/login.twig");
        echo "
                </div>
                -->
                <div class=\"ec-headerRole__cart\">
                    ";
        // line 130
        echo twig_include($this->env, $context, "Block/cart.twig");
        echo "
                </div>
            </div>
    <!--</div>-->
</div>
<div class=\"header-space\"></div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 12
        echo "    <style>
    .header-space {
        height: 100px;
    }
    
    .header-navi-role {
        position: fixed;
        left: 50%;
        top: 5%;
        transform: translateX(-50%)
                   translateY(-50%);
        /*position: -webkit-sticky;*/
        /*position: sticky;*/
        /*top: -1px;*/
    }
    
    /*
    .header-navi {
        padding-right: 50px;
        width: 100%;
        display: flex;
        position: fixed;
        background-color: rgb(255, 255, 255);
        z-index: 9999;
    }
    */

    /*    
    .header-navi {
        position: fixed;
    }
    */

    .ec-headerNaviRole .ec-headerNaviRole__left {
        width: calc(100% / 2);
        display: flex;
        align-items: center; }
    .ec-headerNaviRole .ec-headerNaviRole__right {
        width: calc(100% * 2 / 4);
        display: flex;
        /*justify-content: flex-end;*/
        align-items: center; }
    .nav-front {
        padding: 5px;
        background-color: rgb(246, 246, 246);
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        height: 33px;
        width: 100px;
    }

    .nav-front a {
        color: #525263;
    }

    .front-block {
        margin-top: 20px;
    }

    .select-saiji {
        margin-left: 20px;
    }

    .hiddenItem {
        display: none;
    }
    @media (max-width: 767px) {
        .ec-headerNaviRole .ec-headerNaviRole__left {
            width: calc(100%);
            display: flex;
            align-items: center; 
        }
        .ec-headerNaviRole .ec-headerNaviRole__right {
            width: calc(100% / 2 / 4);
            margin-top: 70px;
            margin-right: 20px;
        }
    }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Block/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 12,  126 => 11,  109 => 130,  102 => 126,  95 => 122,  89 => 119,  80 => 113,  74 => 110,  68 => 107,  59 => 101,  53 => 98,  46 => 93,  44 => 11,);
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
{% block stylesheet %}
    <style>
    .header-space {
        height: 100px;
    }
    
    .header-navi-role {
        position: fixed;
        left: 50%;
        top: 5%;
        transform: translateX(-50%)
                   translateY(-50%);
        /*position: -webkit-sticky;*/
        /*position: sticky;*/
        /*top: -1px;*/
    }
    
    /*
    .header-navi {
        padding-right: 50px;
        width: 100%;
        display: flex;
        position: fixed;
        background-color: rgb(255, 255, 255);
        z-index: 9999;
    }
    */

    /*    
    .header-navi {
        position: fixed;
    }
    */

    .ec-headerNaviRole .ec-headerNaviRole__left {
        width: calc(100% / 2);
        display: flex;
        align-items: center; }
    .ec-headerNaviRole .ec-headerNaviRole__right {
        width: calc(100% * 2 / 4);
        display: flex;
        /*justify-content: flex-end;*/
        align-items: center; }
    .nav-front {
        padding: 5px;
        background-color: rgb(246, 246, 246);
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
        height: 33px;
        width: 100px;
    }

    .nav-front a {
        color: #525263;
    }

    .front-block {
        margin-top: 20px;
    }

    .select-saiji {
        margin-left: 20px;
    }

    .hiddenItem {
        display: none;
    }
    @media (max-width: 767px) {
        .ec-headerNaviRole .ec-headerNaviRole__left {
            width: calc(100%);
            display: flex;
            align-items: center; 
        }
        .ec-headerNaviRole .ec-headerNaviRole__right {
            width: calc(100% / 2 / 4);
            margin-top: 70px;
            margin-right: 20px;
        }
    }
    </style>
{% endblock %}
<div class=\"ec-headerNaviRole header-navi-role\">
    <!--<div class=\"header-navi\">-->
        <!--
        <div class=\"hiddenItem\">
            <div class=\"ec-headerNaviRole__search hiddenItem\">
                {{ render(path('block_search_product')) }}
            </div>
            <div class=\"ec-headerRole__navSP hiddenItem\">
                {{ include('Block/nav_sp.twig') }}
            </div>
        </div>
        -->
        <div class=\"ec-headerNaviRole__left\">
            <div class=\"nav-front\">
                <a href=\"{{ url('admin_homepage') }}\">管理画面</a>
            </div>
            <div class=\"nav-front\">
                <a href=\"{{ path('start') }}\">催事選択</a>
            </div>
            <div class=\"nav-front\">
                <a href=\"{{ url('product_list') }}\">商品一覧</a>
            </div>
        </div>
        <!--<div class=\"header-navi\">-->
            <div class=\"ec-headerNaviRole__right\">
                <div class=\"front-block select-saiji\">
                    {{ render(path('block_select_saiji')) }}
                </div>
                <div class=\"front-block select-tenpo\">
                    {{ render(path('block_select_tenpo')) }}
                </div>
                <!--
                <div class=\"ec-headerNaviRole__nav\">
                    {{ include('Block/login.twig') }}
                </div>
                -->
                <div class=\"ec-headerRole__cart\">
                    {{ include('Block/cart.twig') }}
                </div>
            </div>
    <!--</div>-->
</div>
<div class=\"header-space\"></div>
", "Block/header.twig", "/var/www/htdocs/ec922501/app/template/default/Block/header.twig");
    }
}
