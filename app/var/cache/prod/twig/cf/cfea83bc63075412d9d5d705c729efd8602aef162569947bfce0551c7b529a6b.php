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

/* @admin/nav.twig */
class __TwigTemplate_66baa7d35cbe4ad28c4102604ca7c025c5aa1e1184b7cfc361abc02fe890694b extends \Eccube\Twig\Template
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
        // line 11
        echo "<nav>
    <ul class=\"c-mainNavArea__nav\">
        <!-- ホーム -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle\" href=\"";
        // line 15
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage");
        echo "\">
                <i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i>
                <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home"), "html", null, true);
        echo "</span>
            </a>
        </li>
        <!-- 受注画面へ -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("start", ["tenpo_cd" => ($context["tenpo_cd"] ?? null)]), "html", null, true);
        echo "\">
                <i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i>
                <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("受注画面へ"), "html", null, true);
        echo "</span>
            </a>
        </li>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eccubeNav"] ?? null));
        foreach ($context['_seq'] as $context["key1"] => $context["level1"]) {
            // line 28
            echo "            <li class=\"c-mainNavArea__navItem\">
                ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["level1"], "children", [], "any", true, true, false, 29) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "children", [], "any", false, false, false, 29)) > 0))) {
                // line 30
                echo "                    <a class=\"c-mainNavArea__navItemTitle";
                echo ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus(($context["menus"] ?? null))) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null) != $context["key1"])) ? (" collapsed") : (""));
                echo "\"
                       data-toggle=\"collapse\" href=\"#nav-";
                // line 31
                echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                echo "\"
                       aria-expanded=\"";
                // line 32
                echo ((((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus(($context["menus"] ?? null))) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null) == $context["key1"])) ? ("true") : ("false"));
                echo "\"
                       aria-controls=\"nav-";
                // line 33
                echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                echo "\">
                        <i class=\"fa ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 34), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                        <span>";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 35)), "html", null, true);
                echo "</span>
                    </a>
                    <ul class=\"collapse ";
                // line 37
                if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus(($context["menus"] ?? null))) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null) == $context["key1"])) {
                    echo " show";
                }
                echo "\" id=\"nav-";
                echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                echo "\">
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["level1"], "children", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["key2"] => $context["level2"]) {
                    // line 39
                    echo "                            <li>
                                ";
                    // line 40
                    if ((twig_get_attribute($this->env, $this->source, $context["level2"], "children", [], "any", true, true, false, 40) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level2"], "children", [], "any", false, false, false, 40)) > 0))) {
                        // line 41
                        echo "                                    <a class=\"c-mainNavArea__navItemSubTitle";
                        echo ((((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus(($context["menus"] ?? null))) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null) != $context["key2"])) ? (" collapsed") : (""));
                        echo "\"
                                       data-toggle=\"collapse\" href=\"#nav-";
                        // line 42
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "\"
                                       aria-expanded=\"";
                        // line 43
                        echo ((((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus(($context["menus"] ?? null))) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[1] ?? null) : null) != $context["key2"])) ? ("true") : ("false"));
                        echo "\"
                                       aria-controls=\"nav-";
                        // line 44
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "\">
                                        <span>";
                        // line 45
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 45)), "html", null, true);
                        echo "</span>
                                    </a>
                                    <ul class=\"collapse";
                        // line 47
                        echo ((((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus(($context["menus"] ?? null))) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[1] ?? null) : null) == $context["key2"])) ? (" show") : (""));
                        echo "\" id=\"nav-";
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "\">
                                        ";
                        // line 48
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["level2"], "children", [], "any", false, false, false, 48));
                        foreach ($context['_seq'] as $context["key3"] => $context["level3"]) {
                            // line 49
                            echo "                                            <li>
                                                <a href=\"";
                            // line 50
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level3"], "url", [], "any", false, false, false, 50), ((twig_get_attribute($this->env, $this->source, $context["level3"], "param", [], "any", true, true, false, 50)) ? (twig_get_attribute($this->env, $this->source, $context["level3"], "param", [], "any", false, false, false, 50)) : ([]))), "html", null, true);
                            echo "\"";
                            echo ((((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus(($context["menus"] ?? null))) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[2] ?? null) : null) == $context["key3"])) ? (" class=\"is-active\"") : (""));
                            echo ">
                                                    <span>";
                            // line 51
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 51)), "html", null, true);
                            echo "</span>
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key3'], $context['level3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 57
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level2"], "url", [], "any", false, false, false, 57), ((twig_get_attribute($this->env, $this->source, $context["level2"], "param", [], "any", true, true, false, 57)) ? (twig_get_attribute($this->env, $this->source, $context["level2"], "param", [], "any", false, false, false, 57)) : ([]))), "html", null, true);
                        echo "\"";
                        echo ((((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus(($context["menus"] ?? null))) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[1] ?? null) : null) == $context["key2"])) ? (" class=\"is-active\"") : (""));
                        echo ">
                                        <span>";
                        // line 58
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 58)), "html", null, true);
                        echo "</span>
                                    </a>
                                ";
                    }
                    // line 61
                    echo "                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['level2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                    </ul>
                ";
            } else {
                // line 65
                echo "                    <a class=\"c-mainNavArea__navItemTitle\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level1"], "url", [], "any", false, false, false, 65), ((twig_get_attribute($this->env, $this->source, $context["level1"], "param", [], "any", true, true, false, 65)) ? (twig_get_attribute($this->env, $this->source, $context["level1"], "param", [], "any", false, false, false, 65)) : ([]))), "html", null, true);
                echo "\">
                        <i class=\"fa ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 66), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                        <span>";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 67)), "html", null, true);
                echo "</span>
                    </a>
                ";
            }
            // line 70
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['level1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        <!-- 情報 -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle collapsed\" data-toggle=\"collapse\" href=\"#others\" aria-expanded=\"false\"
               aria-controls=\"others\">
                <i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i>
                <span>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.info"), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"collapse\" id=\"others\">
                <li>
                    <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_official_site_url", [], "any", false, false, false, 81), "html", null, true);
        echo "\" target=\"_blank\">
                        <span>";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.info.official_site"), "html", null, true);
        echo "</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_community_site_url", [], "any", false, false, false, 86), "html", null, true);
        echo "\" target=\"_blank\">
                        <span>";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.info.community"), "html", null, true);
        echo "</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_document_url", [], "any", false, false, false, 91), "html", null, true);
        echo "\" target=\"_blank\">
                        <span>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.info.document"), "html", null, true);
        echo "</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "@admin/nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 92,  256 => 91,  249 => 87,  245 => 86,  238 => 82,  234 => 81,  227 => 77,  220 => 72,  213 => 70,  207 => 67,  203 => 66,  198 => 65,  194 => 63,  187 => 61,  181 => 58,  174 => 57,  170 => 55,  160 => 51,  154 => 50,  151 => 49,  147 => 48,  141 => 47,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  119 => 41,  117 => 40,  114 => 39,  110 => 38,  102 => 37,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  76 => 30,  74 => 29,  71 => 28,  67 => 27,  61 => 24,  56 => 22,  48 => 17,  43 => 15,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/nav.twig", "/var/www/htdocs/ec922501/app/template/admin/nav.twig");
    }
}
