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

/* Mail/order.twig */
class __TwigTemplate_eb5795c7f1254f49fe27fbc79d4c7a38ffb2e25c201c1c4440efb39b4de5ec8d extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/order.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/order.twig"));

        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 12, $this->source); })()), "name01", [], "any", false, false, false, 12);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 12, $this->source); })()), "name02", [], "any", false, false, false, 12);
        echo " 様

この度はご注文いただき誠にありがとうございます。下記ご注文内容にお間違えがないかご確認下さい。

************************************************
　ご請求金額
************************************************

ご注文日時：";
        // line 20
        echo $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 20, $this->source); })()), "order_date", [], "any", false, false, false, 20));
        echo "
ご注文番号：";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 21, $this->source); })()), "order_no", [], "any", false, false, false, 21);
        echo "
お支払い合計：";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 22, $this->source); })()), "payment_total", [], "any", false, false, false, 22));
        echo "
お支払い方法：";
        // line 23
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 23, $this->source); })()), "payment_method", [], "any", false, false, false, 23);
        echo "
";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 24, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 24, $this->source); })()), "Customer", [], "any", false, false, false, 24)))) {
            // line 25
            echo "ご利用ポイント：";
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 25, $this->source); })()), "usePoint", [], "any", false, false, false, 25));
            echo " pt
加算ポイント：";
            // line 26
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 26, $this->source); })()), "addPoint", [], "any", false, false, false, 26));
            echo " pt
";
        }
        // line 28
        echo "お問い合わせ：";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 28, $this->source); })()), "message", [], "any", false, false, false, 28);
        echo "


************************************************
　ご注文商品明細
************************************************

";
        // line 35
        $context["isShowReducedTaxMess"] = false;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 36, $this->source); })()), "MergedProductOrderItems", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 37
            echo "商品コード：";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 37);
            echo "
商品名：";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 38);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 38);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 38);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 38);
            if ($this->extensions['Customize\Twig\Extension\TaxExtension']->isReducedTaxRate($context["OrderItem"])) {
                echo "※";
                $context["isShowReducedTaxMess"] = true;
            }
            // line 39
            echo "
単価：";
            // line 40
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inctax", [], "any", false, false, false, 40));
            echo "
数量：";
            // line 41
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 41));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        if ((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 44, $this->source); })())) {
            echo "※は軽減税率対象商品です。
";
        }
        // line 46
        echo "-------------------------------------------------
小　計：";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 47, $this->source); })()), "subtotal", [], "any", false, false, false, 47));
        echo "
手数料：";
        // line 48
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 48, $this->source); })()), "charge", [], "any", false, false, false, 48));
        echo "
送　料：";
        // line 49
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 49, $this->source); })()), "delivery_fee_total", [], "any", false, false, false, 49));
        echo "
";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 50, $this->source); })()), "taxable_discount", [], "any", false, false, false, 50) < 0)) {
            // line 51
            echo "値引き：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 51, $this->source); })()), "taxable_discount", [], "any", false, false, false, 51));
            echo "
";
        }
        // line 53
        echo "-------------------------------------------------
合　計：";
        // line 54
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 54, $this->source); })()), "taxable_total", [], "any", false, false, false, 54));
        echo "
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 55, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 56
            echo "    (";
            echo $context["rate"];
            echo " %対象：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]);
            echo ")
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 58, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "-------------------------------------------------
";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 60);
            echo "：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 60));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "============================================
お支払い合計：";
        // line 63
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "payment_total", [], "any", false, false, false, 63));
        echo "

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 68
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 68, $this->source); })()), "name01", [], "any", false, false, false, 68);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 68, $this->source); })()), "name02", [], "any", false, false, false, 68);
        echo " 様
お名前(カナ)：";
        // line 69
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 69, $this->source); })()), "kana01", [], "any", false, false, false, 69);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 69, $this->source); })()), "kana02", [], "any", false, false, false, 69);
        echo " 様
";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 70, $this->source); })()), "company_name", [], "any", false, false, false, 70)) {
            // line 71
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 71, $this->source); })()), "company_name", [], "any", false, false, false, 71);
            echo "
";
        }
        // line 73
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 73, $this->source); })()), "postal_code", [], "any", false, false, false, 73);
        echo "
電話番号：";
        // line 74
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 74, $this->source); })()), "phone_number", [], "any", false, false, false, 74);
        echo "
メールアドレス：";
        // line 75
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 75, $this->source); })()), "email", [], "any", false, false, false, 75);
        echo "

************************************************
　配送情報
************************************************

";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 81, $this->source); })()), "Shippings", [], "any", false, false, false, 81));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 82
            echo "◎お届け先";
            if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 82, $this->source); })()), "multiple", [], "any", false, false, false, 82)) {
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 82);
            }
            // line 83
            echo "
お名前：";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, false, 84);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, false, 84);
            echo " 様
お名前(カナ)：";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, false, 85);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, false, 85);
            echo " 様
";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, false, 86)) {
                // line 87
                echo "会社名：";
                echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, false, 87);
                echo "
";
            }
            // line 89
            echo "郵便番号：〒";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, false, 89);
            echo "
";
            // line 91
            echo "電話番号：";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, false, 91);
            echo "

配送方法：";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, false, 93);
            echo "
お届け日：";
            // line 94
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 94))) ? ("指定なし") : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 94))));
            echo "
お届け時間：";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, false, 95)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, false, 95), "指定なし")) : ("指定なし"));
            echo "

";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, false, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                // line 98
                echo "商品コード：";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 98);
                echo "
商品名：";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 99);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 99);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 99);
                echo "
数量：";
                // line 100
                echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 100));
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
";
        // line 105
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 105, $this->source); })()), "complete_mail_message", [], "any", false, false, false, 105))) {
            // line 106
            echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 106, $this->source); })()), "complete_mail_message", [], "any", false, false, false, 106);
            echo "
";
        }
        // line 108
        echo "
============================================

このメッセージはお客様へのお知らせ専用ですので、
このメッセージへの返信としてご質問をお送りいただいても回答できません。
ご了承ください。
";
        // line 115
        echo "

Mail/order.twig";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mail/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 115,  367 => 108,  362 => 106,  360 => 105,  357 => 104,  336 => 100,  328 => 99,  323 => 98,  319 => 97,  314 => 95,  310 => 94,  306 => 93,  300 => 91,  295 => 89,  289 => 87,  287 => 86,  281 => 85,  275 => 84,  272 => 83,  267 => 82,  250 => 81,  241 => 75,  237 => 74,  232 => 73,  226 => 71,  224 => 70,  218 => 69,  212 => 68,  204 => 63,  201 => 62,  191 => 60,  188 => 59,  184 => 58,  173 => 56,  169 => 55,  165 => 54,  162 => 53,  156 => 51,  154 => 50,  150 => 49,  146 => 48,  142 => 47,  139 => 46,  134 => 44,  125 => 41,  121 => 40,  118 => 39,  106 => 38,  101 => 37,  97 => 36,  95 => 35,  84 => 28,  79 => 26,  74 => 25,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  56 => 20,  43 => 12,);
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
{% autoescape false %}
{{ Order.name01 }} {{ Order.name02 }} 様

この度はご注文いただき誠にありがとうございます。下記ご注文内容にお間違えがないかご確認下さい。

************************************************
　ご請求金額
************************************************

ご注文日時：{{ Order.order_date|date_sec }}
ご注文番号：{{ Order.order_no }}
お支払い合計：{{ Order.payment_total|price}}
お支払い方法：{{ Order.payment_method }}
{% if BaseInfo.isOptionPoint and Order.Customer is not null %}
ご利用ポイント：{{ Order.usePoint|number_format }} pt
加算ポイント：{{ Order.addPoint|number_format }} pt
{% endif %}
お問い合わせ：{{ Order.message }}


************************************************
　ご注文商品明細
************************************************

{% set isShowReducedTaxMess = false %}
{% for OrderItem in Order.MergedProductOrderItems %}
商品コード：{{ OrderItem.product_code }}
商品名：{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }} {{ OrderItem.classcategory_name2 }}{% if is_reduced_tax_rate(OrderItem) %}※{% set isShowReducedTaxMess = true %}{% endif %}

単価：{{ OrderItem.price_inctax|price }}
数量：{{ OrderItem.quantity|number_format }}

{% endfor %}
{% if isShowReducedTaxMess %}※は軽減税率対象商品です。
{% endif %}
-------------------------------------------------
小　計：{{ Order.subtotal|price }}
手数料：{{ Order.charge|price }}
送　料：{{ Order.delivery_fee_total|price}}
{% if Order.taxable_discount < 0 %}
値引き：{{ Order.taxable_discount|price }}
{% endif %}
-------------------------------------------------
合　計：{{ Order.taxable_total|price }}
    {% for rate, total in Order.taxable_total_by_tax_rate %}
    ({{ rate }} %対象：{{ total|price }})
    {% endfor %}
{% for item in Order.tax_free_discount_items %}
-------------------------------------------------
{{ item.product_name }}：{{ item.total_price|price }}
{% endfor %}
============================================
お支払い合計：{{ Order.payment_total|price }}

************************************************
　ご注文者情報
************************************************
お名前：{{ Order.name01 }} {{ Order.name02 }} 様
お名前(カナ)：{{ Order.kana01 }} {{ Order.kana02 }} 様
{% if Order.company_name %}
会社名：{{ Order.company_name }}
{% endif %}
郵便番号：〒{{ Order.postal_code }}
電話番号：{{ Order.phone_number }}
メールアドレス：{{ Order.email }}

************************************************
　配送情報
************************************************

{%  for Shipping in Order.Shippings %}
◎お届け先{% if Order.multiple %}{{ loop.index }}{% endif %}

お名前：{{ Shipping.name01 }} {{ Shipping.name02 }} 様
お名前(カナ)：{{ Shipping.kana01 }} {{ Shipping.kana02 }} 様
{% if Shipping.company_name %}
会社名：{{ Shipping.company_name }}
{% endif %}
郵便番号：〒{{ Shipping.postal_code }}
{# 住所：{{ Shipping.Pref.name }}{{ Shipping.addr01 }}{{ Shipping.addr02 }} #}
電話番号：{{ Shipping.phone_number }}

配送方法：{{ Shipping.shipping_delivery_name }}
お届け日：{{ Shipping.shipping_delivery_date is empty ? '指定なし' : Shipping.shipping_delivery_date|date_day }}
お届け時間：{{ Shipping.shipping_delivery_time|default('指定なし') }}

{%  for OrderItem in Shipping.productOrderItems %}
商品コード：{{ OrderItem.product_code }}
商品名：{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}
数量：{{ OrderItem.quantity|number_format }}

{% endfor %}
{% endfor %}

{% if Order.complete_mail_message is not empty %}
{{ Order.complete_mail_message }}
{% endif %}

============================================

このメッセージはお客様へのお知らせ専用ですので、
このメッセージへの返信としてご質問をお送りいただいても回答できません。
ご了承ください。
{% endautoescape %}


Mail/order.twig", "Mail/order.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mail/order.twig");
    }
}
