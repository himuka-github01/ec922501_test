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

/* ProductOption/Service/Cart/ProductClassAndOptionComparator.php */
class __TwigTemplate_5968940f7c85114a22cf57cc11d5fa02f4e3fffced5b10199a269483acff28d2 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/Cart/ProductClassAndOptionComparator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Service/Cart/ProductClassAndOptionComparator.php"));

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

namespace Plugin\\ProductOption\\Service\\Cart;

use Eccube\\Entity\\CartItem;
use Eccube\\Service\\Cart\\CartItemComparator;
use Plugin\\ProductOption\\Util\\CommonUtil;

class ProductClassAndOptionComparator implements CartItemComparator
{
    /**
     * @param CartItem \$Item1 明細1
     * @param CartItem \$Item2 明細2
     *
     * @return boolean 同じ明細になる場合はtrue
     */
    public function compare(CartItem \$Item1, CartItem \$Item2)
    {
        \$ProductClass1 = \$Item1->getProductClass();
        \$ProductClass2 = \$Item2->getProductClass();
        \$product_class_id1 = \$ProductClass1 ? (string) \$ProductClass1->getId() : null;
        \$product_class_id2 = \$ProductClass2 ? (string) \$ProductClass2->getId() : null;

        if (\$product_class_id1 === \$product_class_id2) {
            if(method_exists(\$Item1, 'getOptionSerial')){
                return CommonUtil::compareArray(unserialize(\$Item1->getOptionSerial()),unserialize(\$Item2->getOptionSerial()));
            }else{
                return true;
            }
        }
        return false;
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Service/Cart/ProductClassAndOptionComparator.php";
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

namespace Plugin\\ProductOption\\Service\\Cart;

use Eccube\\Entity\\CartItem;
use Eccube\\Service\\Cart\\CartItemComparator;
use Plugin\\ProductOption\\Util\\CommonUtil;

class ProductClassAndOptionComparator implements CartItemComparator
{
    /**
     * @param CartItem \$Item1 明細1
     * @param CartItem \$Item2 明細2
     *
     * @return boolean 同じ明細になる場合はtrue
     */
    public function compare(CartItem \$Item1, CartItem \$Item2)
    {
        \$ProductClass1 = \$Item1->getProductClass();
        \$ProductClass2 = \$Item2->getProductClass();
        \$product_class_id1 = \$ProductClass1 ? (string) \$ProductClass1->getId() : null;
        \$product_class_id2 = \$ProductClass2 ? (string) \$ProductClass2->getId() : null;

        if (\$product_class_id1 === \$product_class_id2) {
            if(method_exists(\$Item1, 'getOptionSerial')){
                return CommonUtil::compareArray(unserialize(\$Item1->getOptionSerial()),unserialize(\$Item2->getOptionSerial()));
            }else{
                return true;
            }
        }
        return false;
    }
}", "ProductOption/Service/Cart/ProductClassAndOptionComparator.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Service/Cart/ProductClassAndOptionComparator.php");
    }
}
