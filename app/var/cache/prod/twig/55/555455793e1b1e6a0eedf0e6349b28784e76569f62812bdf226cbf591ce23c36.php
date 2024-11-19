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
class __TwigTemplate_bbb974f7a1ed14862c6995138ff5fa401bfae17af2521ff733d7feae932c0d16 extends \Eccube\Twig\Template
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
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 12);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 12);
        echo " 様

この度はご注文いただき誠にありがとうございます。下記ご注文内容にお間違えがないかご確認下さい。

************************************************
　ご請求金額
************************************************

ご注文日時：";
        // line 20
        echo $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, false, 20));
        echo "
ご注文番号：";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, false, 21);
        echo "
お支払い合計：";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 22));
        echo "
お支払い方法：";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_method", [], "any", false, false, false, 23);
        echo "
";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 24)))) {
            // line 25
            echo "ご利用ポイント：";
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", [], "any", false, false, false, 25));
            echo " pt
加算ポイント：";
            // line 26
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addPoint", [], "any", false, false, false, 26));
            echo " pt
";
        }
        // line 28
        echo "お問い合わせ：";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 28);
        echo "


************************************************
　ご注文商品明細
************************************************

";
        // line 35
        $context["isShowReducedTaxMess"] = false;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MergedProductOrderItems", [], "any", false, false, false, 36));
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
        if (($context["isShowReducedTaxMess"] ?? null)) {
            echo "※は軽減税率対象商品です。
";
        }
        // line 46
        echo "-------------------------------------------------
小　計：";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 47));
        echo "
手数料：";
        // line 48
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, false, 48));
        echo "
送　料：";
        // line 49
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, false, 49));
        echo "
";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 50) < 0)) {
            // line 51
            echo "値引き：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 51));
            echo "
";
        }
        // line 53
        echo "-------------------------------------------------
合　計：";
        // line 54
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, false, 54));
        echo "
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total_by_tax_rate", [], "any", false, false, false, 55));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, false, 58));
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
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 63));
        echo "

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 68
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 68);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 68);
        echo " 様
お名前(カナ)：";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 69);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 69);
        echo " 様
";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 70)) {
            // line 71
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 71);
            echo "
";
        }
        // line 73
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 73);
        echo "
電話番号：";
        // line 74
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 74);
        echo "
メールアドレス：";
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 75);
        echo "

************************************************
　配送情報
************************************************

";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 81));
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
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, false, 82)) {
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, false, 105))) {
            // line 106
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, false, 106);
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
        return array (  369 => 115,  361 => 108,  356 => 106,  354 => 105,  351 => 104,  330 => 100,  322 => 99,  317 => 98,  313 => 97,  308 => 95,  304 => 94,  300 => 93,  294 => 91,  289 => 89,  283 => 87,  281 => 86,  275 => 85,  269 => 84,  266 => 83,  261 => 82,  244 => 81,  235 => 75,  231 => 74,  226 => 73,  220 => 71,  218 => 70,  212 => 69,  206 => 68,  198 => 63,  195 => 62,  185 => 60,  182 => 59,  178 => 58,  167 => 56,  163 => 55,  159 => 54,  156 => 53,  150 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 47,  133 => 46,  128 => 44,  119 => 41,  115 => 40,  112 => 39,  100 => 38,  95 => 37,  91 => 36,  89 => 35,  78 => 28,  73 => 26,  68 => 25,  66 => 24,  62 => 23,  58 => 22,  54 => 21,  50 => 20,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/order.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mail/order.twig");
    }
}
