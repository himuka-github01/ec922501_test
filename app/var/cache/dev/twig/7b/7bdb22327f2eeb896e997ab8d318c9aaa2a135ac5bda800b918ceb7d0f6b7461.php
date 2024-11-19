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

/* Shopping/alert.twig */
class __TwigTemplate_56eb75c9af5e761434d09d9fb44265cfbf18040487a8edfac406b64b0196fc80 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/alert.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shopping/alert.twig"));

        // line 1
        if ( !(isset($context["error_only"]) || array_key_exists("error_only", $context))) {
            // line 2
            echo "    ";
            $context["error_only"] = false;
        }
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "session", [], "any", false, false, false, 4), "flashbag", [], "any", false, false, false, 4), "get", [0 => "eccube.front.error"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 5
            echo "    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
            <div class=\"ec-alert-warning__text\">
                ";
            // line 9
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
            echo "
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        if (((isset($context["error_only"]) || array_key_exists("error_only", $context) ? $context["error_only"] : (function () { throw new RuntimeError('Variable "error_only" does not exist.', 14, $this->source); })()) == false)) {
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "flashbag", [], "any", false, false, false, 15), "get", [0 => "eccube.front.warning"], "method", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                echo "    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__icon\"><img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                echo "\">
            </div>
            <div class=\"ec-alert-warning__text\">
                ";
                // line 21
                echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
                echo "
            </div>
        </div>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Shopping/alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  83 => 18,  79 => 16,  75 => 15,  73 => 14,  62 => 9,  57 => 7,  53 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if error_only is not defined %}
    {% set error_only = false %}
{% endif %}
{% for error in app.session.flashbag.get('eccube.front.error') %}
    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
            <div class=\"ec-alert-warning__text\">
                {{ error|trans|nl2br }}
            </div>
        </div>
    </div>
{% endfor %}
{% if error_only == false %}
{% for error in app.session.flashbag.get('eccube.front.warning') %}
    <div class=\"ec-cartRole__error\">
        <div class=\"ec-alert-warning\">
            <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\">
            </div>
            <div class=\"ec-alert-warning__text\">
                {{ error|trans|nl2br }}
            </div>
        </div>
    </div>
{% endfor %}
{% endif %}
", "Shopping/alert.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Shopping/alert.twig");
    }
}
