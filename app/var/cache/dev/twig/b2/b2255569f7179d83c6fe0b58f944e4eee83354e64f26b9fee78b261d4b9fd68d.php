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

/* ProductOption/Resource/config/services.yaml */
class __TwigTemplate_aa71ab49abcc6bd9549c967737930d55d2197d6d645dd2728a45d6bbef4841c3 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Resource/config/services.yaml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Resource/config/services.yaml"));

        // line 1
        echo "services:
    Eccube\\Service\\Cart\\CartItemComparator:
      class: Plugin\\ProductOption\\Service\\Cart\\ProductClassAndOptionComparator

    eccube.purchase.flow.cart.item_validators:
        class: Doctrine\\Common\\Collections\\ArrayCollection
        arguments:
            - #
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\DeliverySettingValidator'
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\StockValidator'
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\SaleLimitValidator'

    eccube.purchase.flow.shopping.item_validators:
        class: Doctrine\\Common\\Collections\\ArrayCollection
        arguments:
            - #
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\DeliverySettingValidator'
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'
    productoption.api.allow_list:
        class: ArrayObject
        tags: ['eccube.api.allow_list']
        arguments:
            - #
                Eccube\\Entity\\Product: ['ProductOptions']
                Plugin\\ProductOption\\Entity\\ProductOption: ['sort_no','Option']
                Plugin\\ProductOption\\Entity\\Option: ['id','name','backend_name','description','type','is_required','require_min','require_max','sort_no','OptionCategories']
                Plugin\\ProductOption\\Entity\\OptionCategory: ['id','name','description','disable_flg','init_flg','value','delivery_free_flg','multiple_flg','sort_no']
                Eccube\\Entity\\OrderItem: ['option_price', 'option_tax', 'OrderItemOptions']
                Plugin\\ProductOption\\Entity\\OrderItemOption: ['label','sort_no','OrderItemOptionCategories']
                Plugin\\ProductOption\\Entity\\OrderItemOptionCategory: ['price','tax','value','delivery_free_flg','sort_no','option_category_id']";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Resource/config/services.yaml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("services:
    Eccube\\Service\\Cart\\CartItemComparator:
      class: Plugin\\ProductOption\\Service\\Cart\\ProductClassAndOptionComparator

    eccube.purchase.flow.cart.item_validators:
        class: Doctrine\\Common\\Collections\\ArrayCollection
        arguments:
            - #
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\DeliverySettingValidator'
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\StockValidator'
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\SaleLimitValidator'

    eccube.purchase.flow.shopping.item_validators:
        class: Doctrine\\Common\\Collections\\ArrayCollection
        arguments:
            - #
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\DeliverySettingValidator'
                - '@Eccube\\Service\\PurchaseFlow\\Processor\\ProductStatusValidator'
    productoption.api.allow_list:
        class: ArrayObject
        tags: ['eccube.api.allow_list']
        arguments:
            - #
                Eccube\\Entity\\Product: ['ProductOptions']
                Plugin\\ProductOption\\Entity\\ProductOption: ['sort_no','Option']
                Plugin\\ProductOption\\Entity\\Option: ['id','name','backend_name','description','type','is_required','require_min','require_max','sort_no','OptionCategories']
                Plugin\\ProductOption\\Entity\\OptionCategory: ['id','name','description','disable_flg','init_flg','value','delivery_free_flg','multiple_flg','sort_no']
                Eccube\\Entity\\OrderItem: ['option_price', 'option_tax', 'OrderItemOptions']
                Plugin\\ProductOption\\Entity\\OrderItemOption: ['label','sort_no','OrderItemOptionCategories']
                Plugin\\ProductOption\\Entity\\OrderItemOptionCategory: ['price','tax','value','delivery_free_flg','sort_no','option_category_id']", "ProductOption/Resource/config/services.yaml", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/config/services.yaml");
    }
}
