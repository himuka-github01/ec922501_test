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

/* @ProductOption/default/Product/detail_js.twig */
class __TwigTemplate_e2560076c4661019476a2eb6df07df4cc0ae67c93235c9dc3576c3ae330313e8 extends \Eccube\Twig\Template
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
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('javascript', $context, $blocks);
    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<script>onOptionChange(\$(\"#form1\"));</script>
";
    }

    public function getTemplateName()
    {
        return "@ProductOption/default/Product/detail_js.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  41 => 11,  38 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ProductOption/default/Product/detail_js.twig", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/template/default/Product/detail_js.twig");
    }
}
