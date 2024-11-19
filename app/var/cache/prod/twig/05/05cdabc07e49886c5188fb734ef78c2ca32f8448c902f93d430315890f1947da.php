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

/* @ProductOption/default/Cart/cart_option.twig */
class __TwigTemplate_52f968162bbfcbc42d7bd8d50bf73108f46a4be094aeee8ea8dfe96d87c35ed8 extends \Eccube\Twig\Template
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
        // line 10
        echo "<style>
.ec-cartRow .ec-cartRow__summary .ec-cartRow__name {
word-break: break-all;
}
</style>

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["CartItem"] ?? null), "CartItemOptions", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["CartItemOption"]) {
            // line 17
            echo "    <br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItemOption"], "label", [], "any", false, false, false, 17), "html", null, true);
            echo ":";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["CartItemOption"], "CartItemOptionCategories", [], "any", false, false, false, 17));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["CartItemOptionCategory"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItemOptionCategory"], "value", [], "any", false, false, false, 17), "html", null, true);
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 17) == false)) {
                    echo ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItemOptionCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItemOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ProductOption/default/Cart/cart_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  45 => 16,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ProductOption/default/Cart/cart_option.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/default/Cart/cart_option.twig");
    }
}
