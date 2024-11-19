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
class __TwigTemplate_5a869db2799574711dd518f5f8b35e6350e1afebf8ac511355db60a15e2461d0 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/nav.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/nav.twig"));

        // line 11
        echo "<nav>
    <ul class=\"c-mainNavArea__nav\">
        <!-- ホーム -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_homepage");
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("start", ["tenpo_cd" => (isset($context["tenpo_cd"]) || array_key_exists("tenpo_cd", $context) ? $context["tenpo_cd"] : (function () { throw new RuntimeError('Variable "tenpo_cd" does not exist.', 22, $this->source); })())]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["eccubeNav"]) || array_key_exists("eccubeNav", $context) ? $context["eccubeNav"] : (function () { throw new RuntimeError('Variable "eccubeNav" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["key1"] => $context["level1"]) {
            // line 28
            echo "            <li class=\"c-mainNavArea__navItem\">
                ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["level1"], "children", [], "any", true, true, false, 29) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level1"], "children", [], "any", false, false, false, 29)) > 0))) {
                // line 30
                echo "                    <a class=\"c-mainNavArea__navItemTitle";
                echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 30, $this->source); })())), 0, [], "array", false, false, false, 30) != $context["key1"])) ? (" collapsed") : (""));
                echo "\"
                       data-toggle=\"collapse\" href=\"#nav-";
                // line 31
                echo twig_escape_filter($this->env, $context["key1"], "html", null, true);
                echo "\"
                       aria-expanded=\"";
                // line 32
                echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 32, $this->source); })())), 0, [], "array", false, false, false, 32) == $context["key1"])) ? ("true") : ("false"));
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
                if ((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 37, $this->source); })())), 0, [], "array", false, false, false, 37) == $context["key1"])) {
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
                        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 41, $this->source); })())), 1, [], "array", false, false, false, 41) != $context["key2"])) ? (" collapsed") : (""));
                        echo "\"
                                       data-toggle=\"collapse\" href=\"#nav-";
                        // line 42
                        echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                        echo "\"
                                       aria-expanded=\"";
                        // line 43
                        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 43, $this->source); })())), 1, [], "array", false, false, false, 43) != $context["key2"])) ? ("true") : ("false"));
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
                        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 47, $this->source); })())), 1, [], "array", false, false, false, 47) == $context["key2"])) ? (" show") : (""));
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
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level3"], "url", [], "any", false, false, false, 50), ((twig_get_attribute($this->env, $this->source, $context["level3"], "param", [], "any", true, true, false, 50)) ? (twig_get_attribute($this->env, $this->source, $context["level3"], "param", [], "any", false, false, false, 50)) : ([]))), "html", null, true);
                            echo "\"";
                            echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 50, $this->source); })())), 2, [], "array", false, false, false, 50) == $context["key3"])) ? (" class=\"is-active\"") : (""));
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
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level2"], "url", [], "any", false, false, false, 57), ((twig_get_attribute($this->env, $this->source, $context["level2"], "param", [], "any", true, true, false, 57)) ? (twig_get_attribute($this->env, $this->source, $context["level2"], "param", [], "any", false, false, false, 57)) : ([]))), "html", null, true);
                        echo "\"";
                        echo (((twig_get_attribute($this->env, $this->source, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getActiveMenus((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 57, $this->source); })())), 1, [], "array", false, false, false, 57) == $context["key2"])) ? (" class=\"is-active\"") : (""));
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["level1"], "url", [], "any", false, false, false, 65), ((twig_get_attribute($this->env, $this->source, $context["level1"], "param", [], "any", true, true, false, 65)) ? (twig_get_attribute($this->env, $this->source, $context["level1"], "param", [], "any", false, false, false, 65)) : ([]))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 81, $this->source); })()), "eccube_official_site_url", [], "any", false, false, false, 81), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 86, $this->source); })()), "eccube_community_site_url", [], "any", false, false, false, 86), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 91, $this->source); })()), "eccube_document_url", [], "any", false, false, false, 91), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  266 => 92,  262 => 91,  255 => 87,  251 => 86,  244 => 82,  240 => 81,  233 => 77,  226 => 72,  219 => 70,  213 => 67,  209 => 66,  204 => 65,  200 => 63,  193 => 61,  187 => 58,  180 => 57,  176 => 55,  166 => 51,  160 => 50,  157 => 49,  153 => 48,  147 => 47,  142 => 45,  138 => 44,  134 => 43,  130 => 42,  125 => 41,  123 => 40,  120 => 39,  116 => 38,  108 => 37,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  82 => 30,  80 => 29,  77 => 28,  73 => 27,  67 => 24,  62 => 22,  54 => 17,  49 => 15,  43 => 11,);
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
<nav>
    <ul class=\"c-mainNavArea__nav\">
        <!-- ホーム -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle\" href=\"{{ url('admin_homepage') }}\">
                <i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i>
                <span>{{ 'admin.home'|trans }}</span>
            </a>
        </li>
        <!-- 受注画面へ -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle\" href=\"{{ path('start', {'tenpo_cd': tenpo_cd}) }}\">
                <i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i>
                <span>{{ '受注画面へ'|trans }}</span>
            </a>
        </li>
        {% for key1, level1 in eccubeNav %}
            <li class=\"c-mainNavArea__navItem\">
                {% if level1.children is defined and level1.children|length > 0 %}
                    <a class=\"c-mainNavArea__navItemTitle{{ active_menus(menus)[0] != key1 ? ' collapsed' }}\"
                       data-toggle=\"collapse\" href=\"#nav-{{ key1 }}\"
                       aria-expanded=\"{{ active_menus(menus)[0] == key1 ? 'true' : 'false' }}\"
                       aria-controls=\"nav-{{ key1 }}\">
                        <i class=\"fa {{ level1.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        <span>{{ level1.name|trans }}</span>
                    </a>
                    <ul class=\"collapse {% if active_menus(menus)[0] == key1 %} show{% endif %}\" id=\"nav-{{ key1 }}\">
                        {% for key2, level2 in level1.children %}
                            <li>
                                {% if level2.children is defined and level2.children|length > 0 %}
                                    <a class=\"c-mainNavArea__navItemSubTitle{{ active_menus(menus)[1] != key2 ? ' collapsed' }}\"
                                       data-toggle=\"collapse\" href=\"#nav-{{ key2 }}\"
                                       aria-expanded=\"{{ active_menus(menus)[1] != key2 ? 'true' : 'false' }}\"
                                       aria-controls=\"nav-{{ key2 }}\">
                                        <span>{{ level2.name|trans }}</span>
                                    </a>
                                    <ul class=\"collapse{{ active_menus(menus)[1] == key2 ? ' show' }}\" id=\"nav-{{ key2 }}\">
                                        {% for key3, level3 in level2.children %}
                                            <li>
                                                <a href=\"{{ url(level3.url, level3.param is defined ? level3.param : []) }}\"{{ active_menus(menus)[2] == key3 ? ' class=\"is-active\"' }}>
                                                    <span>{{ level3.name|trans }}</span>
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    <a href=\"{{ url(level2.url, level2.param is defined ? level2.param : []) }}\"{{ active_menus(menus)[1] == key2 ? ' class=\"is-active\"' }}>
                                        <span>{{ level2.name|trans }}</span>
                                    </a>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <a class=\"c-mainNavArea__navItemTitle\" href=\"{{ url(level1.url, level1.param is defined ? level1.param : []) }}\">
                        <i class=\"fa {{ level1.icon }}\" aria-hidden=\"true\"></i>
                        <span>{{ level1.name|trans }}</span>
                    </a>
                {% endif %}
            </li>
        {% endfor %}
        <!-- 情報 -->
        <li class=\"c-mainNavArea__navItem\">
            <a class=\"c-mainNavArea__navItemTitle collapsed\" data-toggle=\"collapse\" href=\"#others\" aria-expanded=\"false\"
               aria-controls=\"others\">
                <i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i>
                <span>{{ 'admin.info'|trans }}</span>
            </a>
            <ul class=\"collapse\" id=\"others\">
                <li>
                    <a href=\"{{ eccube_config.eccube_official_site_url }}\" target=\"_blank\">
                        <span>{{ 'admin.info.official_site'|trans }}</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ eccube_config.eccube_community_site_url }}\" target=\"_blank\">
                        <span>{{ 'admin.info.community'|trans }}</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ eccube_config.eccube_document_url }}\" target=\"_blank\">
                        <span>{{ 'admin.info.document'|trans }}</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
", "@admin/nav.twig", "/var/www/htdocs/ec922501/app/template/admin/nav.twig");
    }
}
