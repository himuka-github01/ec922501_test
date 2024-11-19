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

/* Mail/shipping_notify.twig */
class __TwigTemplate_2a82e71d442da99ca16304c052637c804f6e21c24d3db4ceca338f14561f971e extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/shipping_notify.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/shipping_notify.twig"));

        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 12, $this->source); })()), "name01", [], "any", false, false, false, 12);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 12, $this->source); })()), "name02", [], "any", false, false, false, 12);
        echo " 様

お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。

";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 16, $this->source); })()), "tracking_number", [], "any", false, false, false, 16)) {
            // line 17
            echo "お問い合わせ番号：";
            echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 17, $this->source); })()), "tracking_number", [], "any", false, false, false, 17);
            echo "
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 18, $this->source); })()), "Delivery", [], "any", false, false, false, 18), "confirm_url", [], "any", false, false, false, 18)) {
                // line 19
                echo "お問い合わせURL：";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 19, $this->source); })()), "Delivery", [], "any", false, false, false, 19), "confirm_url", [], "any", false, false, false, 19);
                echo "
";
            }
        }
        // line 22
        echo "
************************************************
　ご注文商品明細
************************************************

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 27, $this->source); })()), "productOrderItems", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 28
            echo "商品コード：";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 28);
            echo "
商品名：";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 29);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 29);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 29);
            echo "
数量：";
            // line 30
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 30));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
============================================

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 39
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 39, $this->source); })()), "name01", [], "any", false, false, false, 39);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 39, $this->source); })()), "name02", [], "any", false, false, false, 39);
        echo " 様
お名前(カナ)：";
        // line 40
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 40, $this->source); })()), "kana01", [], "any", false, false, false, 40);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 40, $this->source); })()), "kana02", [], "any", false, false, false, 40);
        echo " 様
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 41, $this->source); })()), "company_name", [], "any", false, false, false, 41)) {
            // line 42
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 42, $this->source); })()), "company_name", [], "any", false, false, false, 42);
            echo "
";
        }
        // line 44
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 44, $this->source); })()), "postal_code", [], "any", false, false, false, 44);
        echo "
電話番号：";
        // line 45
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 45, $this->source); })()), "phone_number", [], "any", false, false, false, 45);
        echo "

************************************************
　配送情報
************************************************

お名前：";
        // line 51
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 51, $this->source); })()), "name01", [], "any", false, false, false, 51);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 51, $this->source); })()), "name02", [], "any", false, false, false, 51);
        echo " 様
お名前(カナ)：";
        // line 52
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 52, $this->source); })()), "kana01", [], "any", false, false, false, 52);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 52, $this->source); })()), "kana02", [], "any", false, false, false, 52);
        echo " 様
";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 53, $this->source); })()), "company_name", [], "any", false, false, false, 53)) {
            // line 54
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 54, $this->source); })()), "company_name", [], "any", false, false, false, 54);
            echo "
";
        }
        // line 56
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 56, $this->source); })()), "postal_code", [], "any", false, false, false, 56);
        echo "
電話番号：";
        // line 57
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 57, $this->source); })()), "phone_number", [], "any", false, false, false, 57);
        echo "

お届け日：";
        // line 59
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 59, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 59))) ? ("指定なし") : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 59, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 59))));
        echo "
お届け時間：";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, false, 60), "指定なし")) : ("指定なし"));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mail/shipping_notify.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 60,  173 => 59,  168 => 57,  163 => 56,  157 => 54,  155 => 53,  149 => 52,  143 => 51,  134 => 45,  129 => 44,  123 => 42,  121 => 41,  115 => 40,  109 => 39,  101 => 33,  92 => 30,  84 => 29,  79 => 28,  75 => 27,  68 => 22,  61 => 19,  59 => 18,  54 => 17,  52 => 16,  43 => 12,);
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

お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。

{% if Shipping.tracking_number %}
お問い合わせ番号：{{ Shipping.tracking_number }}
{% if Shipping.Delivery.confirm_url %}
お問い合わせURL：{{ Shipping.Delivery.confirm_url }}
{% endif %}
{% endif %}

************************************************
　ご注文商品明細
************************************************

{% for OrderItem in Shipping.productOrderItems %}
商品コード：{{ OrderItem.product_code }}
商品名：{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}
数量：{{ OrderItem.quantity|number_format }}

{% endfor %}

============================================

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

************************************************
　配送情報
************************************************

お名前：{{ Shipping.name01 }} {{ Shipping.name02 }} 様
お名前(カナ)：{{ Shipping.kana01 }} {{ Shipping.kana02 }} 様
{% if Shipping.company_name %}
会社名：{{ Shipping.company_name }}
{% endif %}
郵便番号：〒{{ Shipping.postal_code }}
電話番号：{{ Shipping.phone_number }}

お届け日：{{ Shipping.shipping_delivery_date is empty ? '指定なし' : Shipping.shipping_delivery_date|date_day }}
お届け時間：{{ Shipping.shipping_delivery_time|default('指定なし') }}
{% endautoescape %}
", "Mail/shipping_notify.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mail/shipping_notify.twig");
    }
}
