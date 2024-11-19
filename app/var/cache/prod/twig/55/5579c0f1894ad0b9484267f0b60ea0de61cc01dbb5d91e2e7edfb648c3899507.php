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

/* Block/logo.twig */
class __TwigTemplate_68e412eca1c68018fa503e0768f7915fec7cf51aa310a5114dab734d7f299853 extends \Eccube\Twig\Template
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
        echo "<div class=\"ec-headerRole\">
    <div class=\"ec-headerRole__title\">
        <div class=\"ec-headerTitle\">
            <div class=\"ec-headerTitle__title\">
                <h1>
                    ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "url", [], "any", false, false, false, 16) == "start/list_saiji")) {
            // line 17
            echo "                        <a href=\"\">
                            ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("イベントを選択してください"), "html", null, true);
            echo "
                        </a>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 20
($context["Page"] ?? null), "url", [], "any", false, false, false, 20) == "start/list_tenpo")) {
            // line 21
            echo "                        <a href=\"\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お引渡し店舗を選択してください"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 25
            echo "                        <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
            echo "\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 29
        echo "                </h1>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  70 => 26,  65 => 25,  59 => 22,  56 => 21,  54 => 20,  49 => 18,  46 => 17,  44 => 16,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/logo.twig", "/var/www/htdocs/ec922501/app/template/default/Block/logo.twig");
    }
}
