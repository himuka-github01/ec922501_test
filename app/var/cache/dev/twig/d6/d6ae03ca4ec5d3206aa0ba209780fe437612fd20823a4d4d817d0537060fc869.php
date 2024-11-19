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

/* Mypage/history.twig */
class __TwigTemplate_885bbd37f791b76ccddad25f6a8e6f807e1a3a70828b6d921f0da99367d24d41 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/history.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/history.twig"));

        // line 13
        $context["mypageno"] = "index";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/history.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.title"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.nav__history_detail"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/history.twig", 23)->display($context);
        // line 24
        echo "        </div>

        ";
        // line 26
        $context["remessage"] = false;
        // line 27
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderOrder\">
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_date"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 33, $this->source); })()), "create_date", [], "any", false, false, false, 33)), "html", null, true);
        echo "</dd>
                    </div>
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_no"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 37, $this->source); })()), "order_no", [], "any", false, false, false, 37), "html", null, true);
        echo "</dd>
                    </div>
                    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 39, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, false, 39)) {
            // line 40
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.order_status"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 42, $this->source); })()), "CustomerOrderStatus", [], "any", false, false, false, 42), "html", null, true);
            echo "</dd>
                        </div>
                    ";
        }
        // line 45
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 45, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 45)) {
            // line 46
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.use_point"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 48, $this->source); })()), "usePoint", [], "any", false, false, false, 48)), "html", null, true);
            echo " pt</dd>
                        </div>
                        <div class=\"ec-definitions\">
                            <dt>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.add_point"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 52, $this->source); })()), "addPoint", [], "any", false, false, false, 52)), "html", null, true);
            echo " pt</dd>
                        </div>
                    ";
        }
        // line 55
        echo "
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_info"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 61, $this->source); })()), "Shippings", [], "any", false, false, false, 61));
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
            // line 62
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 63
            echo "                        <div class=\"ec-orderDelivery__title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "multiple", [], "any", false, false, false, 63)) {
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 63), "html", null, true);
                echo ")";
            }
            echo "</div>
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 65
                echo "                            <div class=\"ec-orderDelivery__item\">
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        ";
                // line 68
                if ((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 68))) {
                    // line 69
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                    echo "\"/>
                                        ";
                } else {
                    // line 71
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 71), "MainListImage", [], "any", false, false, false, 71)), "save_image"), "html", null, true);
                    echo "\"
                                                 alt=\"";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 72), "html", null, true);
                    echo "\"/>
                                        ";
                }
                // line 74
                echo "                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>
                                            ";
                // line 77
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 77)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 77), "Status", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")))) {
                    // line 78
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 78), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 80
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 80), "html", null, true);
                    echo "
                                            ";
                }
                // line 81
                echo " ×";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 81), "html", null, true);
                echo " ";
                if ($this->extensions['Customize\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.reduced_tax_rate_symbol"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                // line 82
                echo "                                        </p>
                                        ";
                // line 83
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, false, 83))) {
                    // line 84
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, false, 84), "ClassCategory1", [], "any", false, false, false, 84))) {
                        // line 85
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 85), "classCategory1", [], "any", false, false, false, 85), "className", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 85), "classCategory1", [], "any", false, false, false, 85), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 87
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, false, 87), "ClassCategory2", [], "any", false, false, false, 87)) {
                        // line 88
                        echo "                                                <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 88), "classCategory2", [], "any", false, false, false, 88), "className", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 88), "classCategory2", [], "any", false, false, false, 88), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 90
                    echo "                                        ";
                }
                // line 91
                echo "                                        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [], "any", false, false, false, 91)), "html", null, true);
                echo "
                                            × ";
                // line 92
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 92)), "html", null, true);
                echo "</p>
                                        ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 93) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [], "any", false, false, false, 93) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 93), "price02IncTax", [], "any", false, false, false, 93)))) {
                    // line 94
                    echo "                                            <p class=\"ec-color-accent\">
                                                ";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.current_price"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 95), "price02IncTax", [], "any", false, false, false, 95)), "html", null, true);
                    echo "</p>
                                            ";
                    // line 96
                    $context["remessage"] = true;
                    // line 97
                    echo "                                        ";
                }
                // line 98
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                        <p>";
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 103, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.reduced_tax_rate_messeage"), "html", null, true))) : (print ("")));
            echo "</p>
                        <div class=\"ec-orderDelivery__address\">
                            <p>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, false, 105), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, false, 105), "html", null, true);
            echo "&nbsp;
                                (";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, false, 106), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, false, 106), "html", null, true);
            echo ")</p>
                            <p>";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.postal_symbol"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, false, 107), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, false, 107), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, false, 107), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, false, 107), "html", null, true);
            echo "</p>
                            <p>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, false, 108), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_provider"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, false, 112), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_date"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 116
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 116)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified")), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.delivery_time"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 120
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, false, 120), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.select__unspecified"))), "html", null, true);
            echo "</dd>
                        </div>
                    ";
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
        // line 123
        echo "                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.payment_info"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.payment"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 128, $this->source); })()), "PaymentMethod", [], "any", false, false, false, 128), "html", null, true);
        echo "</p>
                </div>
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.message"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 134
        echo nl2br(twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", true, true, false, 134)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 134), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.message_not_found"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.message_not_found"))), "html", null, true));
        echo "</p>
                </div>
                <div class=\"ec-orderMails\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.mail_list"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 140, $this->source); })()), "MailHistories", [], "any", false, false, false, 140));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
            // line 141
            echo "                        <div class=\"ec-orderMail\">
                            <div class=\"ec-orderMail__time\">";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, false, 142)), "html", null, true);
            echo "</div>
                            <div class=\"ec-orderMail__link\"><a>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 143), "html", null, true);
            echo "</a></div>
                            <div class=\"ec-orderMail__body\">";
            // line 144
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, false, 144), "html", null, true));
            echo "<p class=\"ec-orderMail__close\"><a>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.close"), "html", null, true);
            echo "</a></p></div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 147
            echo "                        <p class=\"ec-reportDescription\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.mail_not_found"), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.subtotal"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 155, $this->source); })()), "subtotal", [], "any", false, false, false, 155)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.charge"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 159, $this->source); })()), "charge", [], "any", false, false, false, 159)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.delivery_fee"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 163, $this->source); })()), "delivery_fee_total", [], "any", false, false, false, 163)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 165
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 165, $this->source); })()), "taxable_discount", [], "any", false, false, false, 165) < 0)) {
            // line 166
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.discount"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 168, $this->source); })()), "taxable_discount", [], "any", false, false, false, 168)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 171
        echo "                    <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.total"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 172, $this->source); })()), "taxable_total", [], "any", false, false, false, 172)), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo "</span></div>
                    ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 174, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, false, 174));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 175
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 180, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 180));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 181
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 181)) {
                echo "<div class=\"ec-totalBox__total\"></div>";
            }
            // line 182
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 183), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 184)), "html", null, true);
            echo "</dd>
                        </dl>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                    <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.total"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 188, $this->source); })()), "payment_total", [], "any", false, false, false, 188)), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo "</span></div>
                    ";
        // line 190
        if ((isset($context["stockOrder"]) || array_key_exists("stockOrder", $context) ? $context["stockOrder"] : (function () { throw new RuntimeError('Variable "stockOrder" does not exist.', 190, $this->source); })())) {
            // line 191
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_order", ["order_no" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 191, $this->source); })()), "order_no", [], "any", false, false, false, 191)]), "html", null, true);
            echo "\"
                       class=\"ec-blockBtn--action load-overlay\" ";
            // line 192
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"put\"
                       data-confirm=\"false\">";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.reorder"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 195
        echo "                </div>
                ";
        // line 196
        if ((isset($context["remessage"]) || array_key_exists("remessage", $context) ? $context["remessage"] : (function () { throw new RuntimeError('Variable "remessage" does not exist.', 196, $this->source); })())) {
            // line 197
            echo "                    <p class=\"ec-color-accent\">
                        <strong>";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.mypage.reorder_message"), "html", null, true);
            echo "</strong>
                    </p>
                ";
        }
        // line 201
        echo "            </div>
        </div>
        <div class=\"ec-role\">
            <a href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
        echo "\" class=\"ec-inlineBtn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 204,  640 => 201,  634 => 198,  631 => 197,  629 => 196,  626 => 195,  621 => 193,  617 => 192,  612 => 191,  610 => 190,  606 => 189,  602 => 188,  597 => 187,  580 => 184,  576 => 183,  573 => 182,  568 => 181,  550 => 180,  541 => 177,  537 => 176,  534 => 175,  530 => 174,  526 => 173,  522 => 172,  517 => 171,  511 => 168,  507 => 167,  504 => 166,  502 => 165,  497 => 163,  493 => 162,  487 => 159,  483 => 158,  477 => 155,  473 => 154,  466 => 149,  457 => 147,  447 => 144,  443 => 143,  439 => 142,  436 => 141,  431 => 140,  426 => 138,  419 => 134,  414 => 132,  405 => 128,  400 => 126,  395 => 123,  378 => 120,  374 => 119,  368 => 116,  364 => 115,  358 => 112,  354 => 111,  348 => 108,  339 => 107,  333 => 106,  327 => 105,  321 => 103,  311 => 98,  308 => 97,  306 => 96,  301 => 95,  298 => 94,  296 => 93,  292 => 92,  287 => 91,  284 => 90,  276 => 88,  273 => 87,  265 => 85,  262 => 84,  260 => 83,  257 => 82,  249 => 81,  243 => 80,  235 => 78,  233 => 77,  228 => 74,  223 => 72,  218 => 71,  212 => 69,  210 => 68,  205 => 65,  201 => 64,  191 => 63,  188 => 62,  171 => 61,  166 => 59,  160 => 55,  154 => 52,  150 => 51,  144 => 48,  140 => 47,  137 => 46,  134 => 45,  128 => 42,  124 => 41,  121 => 40,  119 => 39,  114 => 37,  110 => 36,  104 => 33,  100 => 32,  93 => 27,  91 => 26,  87 => 24,  85 => 23,  78 => 21,  73 => 18,  63 => 17,  52 => 11,  50 => 15,  48 => 13,  35 => 11,);
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
{% extends 'default_frame.twig' %}

{% set mypageno = 'index' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'front.mypage.title'|trans }}/{{ 'front.mypage.nav__history_detail'|trans }}</h1>
            </div>
            {% include 'Mypage/navi.twig' %}
        </div>

        {% set remessage = false %}

        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderOrder\">
                    <div class=\"ec-definitions\">
                        <dt>{{ 'front.mypage.order_date'|trans }}</dt>
                        <dd>{{ Order.create_date|date_sec }}</dd>
                    </div>
                    <div class=\"ec-definitions\">
                        <dt>{{ 'front.mypage.order_no'|trans }}</dt>
                        <dd>{{ Order.order_no }}</dd>
                    </div>
                    {% if BaseInfo.option_mypage_order_status_display %}
                        <div class=\"ec-definitions\">
                            <dt>{{ 'front.mypage.order_status'|trans }}</dt>
                            <dd>{{ Order.CustomerOrderStatus }}</dd>
                        </div>
                    {% endif %}
                    {% if BaseInfo.isOptionPoint %}
                        <div class=\"ec-definitions\">
                            <dt>{{ 'front.mypage.use_point'|trans }}</dt>
                            <dd>{{ Order.usePoint|number_format }} pt</dd>
                        </div>
                        <div class=\"ec-definitions\">
                            <dt>{{ 'front.mypage.add_point'|trans }}</dt>
                            <dd>{{ Order.addPoint|number_format }} pt</dd>
                        </div>
                    {% endif %}

                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'front.mypage.delivery_info'|trans }}</h2>
                    </div>
                    {% for Shipping in Order.Shippings %}
                        {% set isShowReducedTaxMess = false %}
                        <div class=\"ec-orderDelivery__title\">{{ 'front.mypage.delivery'|trans }}{% if Order.multiple %}({{ loop.index }}){% endif %}</div>
                        {% for orderItem in Shipping.productOrderItems %}
                            <div class=\"ec-orderDelivery__item\">
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        {% if orderItem.product is null %}
                                            <img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/>
                                        {% else %}
                                            <img src=\"{{ asset(orderItem.Product.MainListImage|no_image_product, 'save_image') }}\"
                                                 alt=\"{{ orderItem.productName }}\"/>
                                        {% endif %}
                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>
                                            {% if orderItem.Product is not null and orderItem.Product.Status.id == constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_SHOW') %}
                                                <a href=\"{{ url('product_detail', {'id': orderItem.Product.id}) }}\">{{ orderItem.productName }}</a>
                                            {% else %}
                                                {{ orderItem.productName }}
                                            {% endif %} ×{{ orderItem.quantity }} {% if is_reduced_tax_rate(orderItem) %}{{ 'common.reduced_tax_rate_symbol'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}
                                        </p>
                                        {% if orderItem.ProductClass is not null %}
                                            {% if orderItem.ProductClass.ClassCategory1 is not null %}
                                                {{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}
                                            {% endif %}
                                            {% if orderItem.ProductClass.ClassCategory2 %}
                                                <br>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}
                                            {% endif %}
                                        {% endif %}
                                        <p>{{ orderItem.price_inc_tax|price }}
                                            × {{ orderItem.quantity|number_format }}</p>
                                        {% if orderItem.product and orderItem.price_inc_tax != orderItem.productClass.price02IncTax %}
                                            <p class=\"ec-color-accent\">
                                                {{ 'front.mypage.current_price'|trans }}{{ orderItem.productClass.price02IncTax|price }}</p>
                                            {% set remessage = true %}
                                        {% endif %}

                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        <p>{{ isShowReducedTaxMess ? 'common.reduced_tax_rate_messeage'|trans }}</p>
                        <div class=\"ec-orderDelivery__address\">
                            <p>{{ Shipping.name01 }}&nbsp;{{ Shipping.name02 }}&nbsp;
                                ({{ Shipping.kana01 }}&nbsp;{{ Shipping.kana02 }})</p>
                            <p>{{ 'common.postal_symbol'|trans }}{{ Shipping.postal_code }} {{ Shipping.Pref }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}</p>
                            <p>{{ Shipping.phone_number }}</p>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ 'front.mypage.delivery_provider'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_name }}</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ 'front.mypage.delivery_date'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_date|date_day_with_weekday|default('common.select__unspecified'|trans) }}</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ 'front.mypage.delivery_time'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_time|default('common.select__unspecified'|trans) }}</dd>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'front.mypage.payment_info'|trans }}</h2>
                    </div>
                    <p>{{ 'front.mypage.payment'|trans }} : {{ Order.PaymentMethod }}</p>
                </div>
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'front.mypage.message'|trans }}</h2>
                    </div>
                    <p>{{ Order.message|default('front.mypage.message_not_found'|trans)|nl2br }}</p>
                </div>
                <div class=\"ec-orderMails\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'front.mypage.mail_list'|trans }}</h2>
                    </div>
                    {% for MailHistory in Order.MailHistories %}
                        <div class=\"ec-orderMail\">
                            <div class=\"ec-orderMail__time\">{{ MailHistory.send_date|date_sec }}</div>
                            <div class=\"ec-orderMail__link\"><a>{{ MailHistory.mail_subject }}</a></div>
                            <div class=\"ec-orderMail__body\">{{ MailHistory.mail_body|nl2br }}<p class=\"ec-orderMail__close\"><a>{{ 'common.close'|trans }}</a></p></div>
                        </div>
                    {% else %}
                        <p class=\"ec-reportDescription\">{{ 'front.mypage.mail_not_found'|trans }}</p>
                    {% endfor %}
                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ 'common.subtotal'|trans }}</dt>
                        <dd>{{ Order.subtotal|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ 'common.charge'|trans }}</dt>
                        <dd>{{ Order.charge|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ 'common.delivery_fee'|trans }}</dt>
                        <dd>{{ Order.delivery_fee_total|price }}</dd>
                    </dl>
                    {% if Order.taxable_discount < 0 %}
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ 'common.discount'|trans }}</dt>
                        <dd>{{ Order.taxable_discount|price }}</dd>
                    </dl>
                    {% endif %}
                    <div class=\"ec-totalBox__total\">{{ 'common.total'|trans }}<span
                                class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span
                                class=\"ec-totalBox__taxLabel\">{{ 'common.tax_include'|trans }}</span></div>
                    {% for rate, total in Order.taxable_total_by_tax_rate %}
                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>{{ 'common.tax_rate_target'|trans({ '%rate%': rate }) }}</dt>
                        <dd>{{ total|price }}</dd>
                    </dl>
                    {% endfor %}
                    {% for item in Order.tax_free_discount_items %}
                        {% if loop.first %}<div class=\"ec-totalBox__total\"></div>{% endif %}
                        <dl class=\"ec-totalBox__spec\">
                            <dt>{{ item.product_name }}</dt>
                            <dd>{{ item.total_price|price }}</dd>
                        </dl>
                    {% endfor %}
                    <div class=\"ec-totalBox__paymentTotal\">{{ 'common.total'|trans }}<span
                                class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span
                                class=\"ec-totalBox__taxLabel\">{{ 'common.tax_include'|trans }}</span></div>
                    {% if stockOrder %}
                        <a href=\"{{ url('mypage_order', {'order_no': Order.order_no }) }}\"
                       class=\"ec-blockBtn--action load-overlay\" {{ csrf_token_for_anchor() }} data-method=\"put\"
                       data-confirm=\"false\">{{ 'front.mypage.reorder'|trans }}</a>
                    {% endif %}
                </div>
                {% if remessage %}
                    <p class=\"ec-color-accent\">
                        <strong>{{ 'front.mypage.reorder_message'|trans }}</strong>
                    </p>
                {% endif %}
            </div>
        </div>
        <div class=\"ec-role\">
            <a href=\"{{ url('mypage') }}\" class=\"ec-inlineBtn\">{{ 'common.back'|trans }}</a>
        </div>
    </div>
{% endblock %}
", "Mypage/history.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mypage/history.twig");
    }
}
