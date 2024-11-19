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

/* ProductOption/Twig/Extension/PriceIncTaxExtension.php */
class __TwigTemplate_8488d2d091544aefe66075fb3b9961cc2ec126c11830c008acdfb7e0d645aae1 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Twig/Extension/PriceIncTaxExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Twig/Extension/PriceIncTaxExtension.php"));

        // line 1
        echo "<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\\ProductOption\\Twig\\Extension;

use Eccube\\Entity\\Product;
use Eccube\\Entity\\ProductClass;
use Eccube\\Service\\TaxRuleService;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class PriceIncTaxExtension extends AbstractExtension
{
    private \$taxRuleService;

    public function __construct(TaxRuleService \$taxRuleService)
    {
        \$this->taxRuleService = \$taxRuleService;
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return TwigFunction[] An array of functions
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('priceIncTax', [\$this, 'priceIncTax']),
        ];
    }

    public function priceIncTax(\$price, Product \$Product = null, ProductClass \$ProductClass = null)
    {
        return \$this->taxRuleService->getPriceIncTax(\$price,\$Product, \$ProductClass);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Twig/Extension/PriceIncTaxExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\\ProductOption\\Twig\\Extension;

use Eccube\\Entity\\Product;
use Eccube\\Entity\\ProductClass;
use Eccube\\Service\\TaxRuleService;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class PriceIncTaxExtension extends AbstractExtension
{
    private \$taxRuleService;

    public function __construct(TaxRuleService \$taxRuleService)
    {
        \$this->taxRuleService = \$taxRuleService;
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return TwigFunction[] An array of functions
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('priceIncTax', [\$this, 'priceIncTax']),
        ];
    }

    public function priceIncTax(\$price, Product \$Product = null, ProductClass \$ProductClass = null)
    {
        return \$this->taxRuleService->getPriceIncTax(\$price,\$Product, \$ProductClass);
    }
}
", "ProductOption/Twig/Extension/PriceIncTaxExtension.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Twig/Extension/PriceIncTaxExtension.php");
    }
}
