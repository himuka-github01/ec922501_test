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

/* Mail/shipping_notify.html.twig */
class __TwigTemplate_1a02d7a0dd84d0ef8c16e9b1cb64b042be2e2e307ed105ab177d2646cd1adbd2 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/shipping_notify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/shipping_notify.html.twig"));

        // line 11
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 17, $this->source); })()), "shop_name", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">商品を発送いたしました。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 31, $this->source); })()), "name01", [], "any", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 31, $this->source); })()), "name02", [], "any", false, false, false, 31), "html", null, true);
        echo " 様<br>
                            <br>
                            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 33, $this->source); })()), "shop_name", [], "any", false, false, false, 33), "html", null, true);
        echo "でございます。<br/>
                            お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。<br/>
                            <br/>
                            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 36, $this->source); })()), "tracking_number", [], "any", false, false, false, 36)) {
            // line 37
            echo "                                <hr style=\"border-top: 3px double #8c8b8b;\">
                                お問い合わせ番号：";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 38, $this->source); })()), "tracking_number", [], "any", false, false, false, 38), "html", null, true);
            echo "
                                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 39, $this->source); })()), "Delivery", [], "any", false, false, false, 39), "confirm_url", [], "any", false, false, false, 39)) {
                // line 40
                echo "                                    <br/>
                                    お問い合わせURL：";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 41, $this->source); })()), "Delivery", [], "any", false, false, false, 41), "confirm_url", [], "any", false, false, false, 41), "html", null, true);
                echo "
                                ";
            }
            // line 43
            echo "                                <br/>
                            ";
        }
        // line 45
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 48, $this->source); })()), "productOrderItems", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 49
            echo "                                商品コード：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 49), "html", null, true);
            echo "<br/>
                                商品名：";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 50), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 50), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 50), "html", null, true);
            echo "<br/>
                                数量：";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 51)), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 57, $this->source); })()), "name01", [], "any", false, false, false, 57), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 57, $this->source); })()), "name02", [], "any", false, false, false, 57), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 58, $this->source); })()), "kana01", [], "any", false, false, false, 58), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 58, $this->source); })()), "kana02", [], "any", false, false, false, 58), "html", null, true);
        echo " 様<br/>
                            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 59, $this->source); })()), "company_name", [], "any", false, false, false, 59)) {
            // line 60
            echo "                                会社名：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 60, $this->source); })()), "company_name", [], "any", false, false, false, 60), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 62
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "postal_code", [], "any", false, false, false, 62), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "phone_number", [], "any", false, false, false, 63), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 68, $this->source); })()), "name01", [], "any", false, false, false, 68), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 68, $this->source); })()), "name02", [], "any", false, false, false, 68), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 69, $this->source); })()), "kana01", [], "any", false, false, false, 69), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 69, $this->source); })()), "kana02", [], "any", false, false, false, 69), "html", null, true);
        echo " 様<br/>
                            ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 70, $this->source); })()), "company_name", [], "any", false, false, false, 70)) {
            // line 71
            echo "                                会社名：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 71, $this->source); })()), "company_name", [], "any", false, false, false, 71), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 73
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 73, $this->source); })()), "postal_code", [], "any", false, false, false, 73), "html", null, true);
        echo "<br/>
                            住所：";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 74, $this->source); })()), "Pref", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 74, $this->source); })()), "addr01", [], "any", false, false, false, 74), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 74, $this->source); })()), "addr02", [], "any", false, false, false, 74), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 75, $this->source); })()), "phone_number", [], "any", false, false, false, 75), "html", null, true);
        echo "<br/>
                            <br/>
                            お届け日：";
        // line 77
        ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 77, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 77))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 77, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 77)), "html", null, true))));
        echo "<br/>
                            お届け時間：";
        // line 78
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, false, 78), "指定なし")) : ("指定なし")), "html", null, true);
        echo "<br/>
                            <br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        本メールは、";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 90, $this->source); })()), "shop_name", [], "any", false, false, false, 90), "html", null, true);
        echo "より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 91, $this->source); })()), "email02", [], "any", false, false, false, 91), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 91, $this->source); })()), "email02", [], "any", false, false, false, 91), "html", null, true);
        echo "</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 93, $this->source); })()), "shop_name", [], "any", false, false, false, 93), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 94, $this->source); })()), "shop_name", [], "any", false, false, false, 94), "html", null, true);
        echo " all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mail/shipping_notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 94,  241 => 93,  234 => 91,  230 => 90,  215 => 78,  211 => 77,  206 => 75,  200 => 74,  195 => 73,  189 => 71,  187 => 70,  181 => 69,  175 => 68,  167 => 63,  162 => 62,  156 => 60,  154 => 59,  148 => 58,  142 => 57,  137 => 54,  128 => 51,  120 => 50,  115 => 49,  111 => 48,  106 => 45,  102 => 43,  97 => 41,  94 => 40,  92 => 39,  88 => 38,  85 => 37,  83 => 36,  77 => 33,  70 => 31,  51 => 17,  43 => 11,);
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
<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"{{ url('homepage') }}\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">{{ BaseInfo.shop_name }}</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">商品を発送いたしました。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            {{ Order.name01 }} {{ Order.name02 }} 様<br>
                            <br>
                            {{ BaseInfo.shop_name }}でございます。<br/>
                            お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。<br/>
                            <br/>
                            {% if Shipping.tracking_number %}
                                <hr style=\"border-top: 3px double #8c8b8b;\">
                                お問い合わせ番号：{{ Shipping.tracking_number }}
                                {% if Shipping.Delivery.confirm_url %}
                                    <br/>
                                    お問い合わせURL：{{ Shipping.Delivery.confirm_url }}
                                {% endif %}
                                <br/>
                            {% endif %}
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            {% for OrderItem in Shipping.productOrderItems %}
                                商品コード：{{ OrderItem.product_code }}<br/>
                                商品名：{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}<br/>
                                数量：{{ OrderItem.quantity|number_format }}<br/>
                                <br/>
                            {% endfor %}
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：{{ Order.name01 }} {{ Order.name02 }} 様<br/>
                            お名前(カナ)：{{ Order.kana01 }} {{ Order.kana02 }} 様<br/>
                            {% if Order.company_name %}
                                会社名：{{ Order.company_name }}<br/>
                            {% endif %}
                            郵便番号：〒{{ Order.postal_code }}<br/>
                            電話番号：{{ Order.phone_number }}<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：{{ Shipping.name01 }} {{ Shipping.name02 }} 様<br/>
                            お名前(カナ)：{{ Shipping.kana01 }} {{ Shipping.kana02 }} 様<br/>
                            {% if Shipping.company_name %}
                                会社名：{{ Shipping.company_name }}<br/>
                            {% endif %}
                            郵便番号：〒{{ Shipping.postal_code }}<br/>
                            住所：{{ Shipping.Pref.name }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}<br/>
                            電話番号：{{ Shipping.phone_number }}<br/>
                            <br/>
                            お届け日：{{ Shipping.shipping_delivery_date is empty ? '指定なし' : Shipping.shipping_delivery_date|date_day }}<br/>
                            お届け時間：{{ Shipping.shipping_delivery_time|default('指定なし') }}<br/>
                            <br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        本メールは、{{ BaseInfo.shop_name }}より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:{{ BaseInfo.email02 }}\" style=\"text-decoration:none;\">{{ BaseInfo.email02 }}</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"{{ url('homepage') }}\" style=\"color:#aaaaaa;text-decoration:none;\">{{ BaseInfo.shop_name }}</a></div>
                        <div>copyright &copy; {{ BaseInfo.shop_name }} all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>

", "Mail/shipping_notify.html.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mail/shipping_notify.html.twig");
    }
}
