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

/* @ProductOption/admin/Order/orderitem_option.twig */
class __TwigTemplate_dbe31f337ba5d477d631901188a72c7b2b141f04273335def103a76b8a029e3a extends \Eccube\Twig\Template
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
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "OrderItemOptions", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItemOption"]) {
            // line 12
            echo "    <br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItemOption"], "label", [], "any", false, false, false, 12), "html", null, true);
            echo ":";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["OrderItemOption"], "OrderItemOptionCategories", [], "any", false, false, false, 12));
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
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItemOptionCategory"]) {
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItemOptionCategory"], "value", [], "any", false, false, false, 12), "html", null, true));
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12) == false)) {
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItemOptionCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItemOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ProductOption/admin/Order/orderitem_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ProductOption/admin/Order/orderitem_option.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/admin/Order/orderitem_option.twig");
    }
}
