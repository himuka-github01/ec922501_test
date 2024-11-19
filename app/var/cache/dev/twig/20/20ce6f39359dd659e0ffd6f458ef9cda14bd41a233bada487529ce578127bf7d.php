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

/* PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php */
class __TwigTemplate_b7784df67c06f8768f51e765df5cef266586937a758671b4fb0043a545c62b80 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php"));

        // line 1
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\PurchaseProcessors\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\CartFlow;
use Eccube\\Annotation\\OrderFlow;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Service\\PurchaseFlow\\InvalidItemException;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\ItemValidator;

/**
 * 商品を１個のみしか購入できないようにするサンプル
 *
 * # 使い方
 * PurchaseFlowに新しいProcessorを追加する
 *
 * ## 追加できるプロセッサ
 * 以下のクラスまたはインタフェースを継承または実装している必要がある
 * * ItemPreprocessor
 * * ItemValidator
 * * ItemHolderPreprocessor
 * * ItemHolderValidator
 * * PurchaseProcessor
 *
 * ## 追加対象のフローの指定方法
 * * カートのPurchaseFlowにProcessorを追加する場合はCartFlowアノテーションを追加
 * * 購入フローのPurchaseFlowにProcessorを追加する場合はShoppingFlowアノテーションを追加
 * * 管理画面でのPurchaseFlowにProcessorを追加する場合はOrderFlowアノテーションを追加
 *
 * @CartFlow
 * @ShoppingFlow
 * @OrderFlow
 */
class SaleLimitOneValidator extends ItemValidator
{
    /**
     * @param ItemInterface \$item
     * @param PurchaseContext \$context
     *
     * @throws InvalidItemException
     */
    protected function validate(ItemInterface \$item, PurchaseContext \$context)
    {
        if (!\$item->isProduct()) {
            return;
        }

        \$quantity = \$item->getQuantity();
        if (1 < \$quantity) {
            \$this->throwInvalidItemException('商品は１個しか購入できません。');
        }
    }

    protected function handle(ItemInterface \$item, PurchaseContext \$context)
    {
        \$item->setQuantity(1);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\PurchaseProcessors\\Service\\PurchaseFlow\\Processor;

use Eccube\\Annotation\\CartFlow;
use Eccube\\Annotation\\OrderFlow;
use Eccube\\Annotation\\ShoppingFlow;
use Eccube\\Entity\\ItemInterface;
use Eccube\\Service\\PurchaseFlow\\InvalidItemException;
use Eccube\\Service\\PurchaseFlow\\PurchaseContext;
use Eccube\\Service\\PurchaseFlow\\ItemValidator;

/**
 * 商品を１個のみしか購入できないようにするサンプル
 *
 * # 使い方
 * PurchaseFlowに新しいProcessorを追加する
 *
 * ## 追加できるプロセッサ
 * 以下のクラスまたはインタフェースを継承または実装している必要がある
 * * ItemPreprocessor
 * * ItemValidator
 * * ItemHolderPreprocessor
 * * ItemHolderValidator
 * * PurchaseProcessor
 *
 * ## 追加対象のフローの指定方法
 * * カートのPurchaseFlowにProcessorを追加する場合はCartFlowアノテーションを追加
 * * 購入フローのPurchaseFlowにProcessorを追加する場合はShoppingFlowアノテーションを追加
 * * 管理画面でのPurchaseFlowにProcessorを追加する場合はOrderFlowアノテーションを追加
 *
 * @CartFlow
 * @ShoppingFlow
 * @OrderFlow
 */
class SaleLimitOneValidator extends ItemValidator
{
    /**
     * @param ItemInterface \$item
     * @param PurchaseContext \$context
     *
     * @throws InvalidItemException
     */
    protected function validate(ItemInterface \$item, PurchaseContext \$context)
    {
        if (!\$item->isProduct()) {
            return;
        }

        \$quantity = \$item->getQuantity();
        if (1 < \$quantity) {
            \$this->throwInvalidItemException('商品は１個しか購入できません。');
        }
    }

    protected function handle(ItemInterface \$item, PurchaseContext \$context)
    {
        \$item->setQuantity(1);
    }
}
", "PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php", "/var/www/htdocs/ec922501/app/Plugin/PurchaseProcessors/Service/PurchaseFlow/Processor/SaleLimitOneValidator.php");
    }
}
