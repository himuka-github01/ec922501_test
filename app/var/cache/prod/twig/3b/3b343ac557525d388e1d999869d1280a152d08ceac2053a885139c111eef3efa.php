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
class __TwigTemplate_350b88f0cf4a52a06ea425e51bf5030b4ff19718207e75951389106ebf1f8d95 extends \Eccube\Twig\Template
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("block_search_product"));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage");
        echo "\">管理画面</a>
            </div>
            <div class=\"nav-front\">
                <a href=\"";
        // line 110
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("start");
        echo "\">催事選択</a>
            </div>
            <div class=\"nav-front\">
                <a href=\"";
        // line 113
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "\">商品一覧</a>
            </div>
        </div>
        <!--<div class=\"header-navi\">-->
            <div class=\"ec-headerNaviRole__right\">
                <div class=\"front-block select-saiji\">
                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("block_select_saiji"));
        echo "
                </div>
                <div class=\"front-block select-tenpo\">
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("block_select_tenpo"));
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
    }

    // line 11
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  118 => 12,  114 => 11,  103 => 130,  96 => 126,  89 => 122,  83 => 119,  74 => 113,  68 => 110,  62 => 107,  53 => 101,  47 => 98,  40 => 93,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/header.twig", "/var/www/htdocs/ec922501/app/template/default/Block/header.twig");
    }
}
