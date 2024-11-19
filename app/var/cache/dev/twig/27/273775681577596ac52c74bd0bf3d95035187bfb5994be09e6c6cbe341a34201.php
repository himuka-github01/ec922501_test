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

/* Mail/entry_confirm.twig */
class __TwigTemplate_707adb3955799fcdfca80a7a33aa583c1232e48e4f17b1106744184e1d3907ee extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/entry_confirm.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail/entry_confirm.twig"));

        // line 12
        echo "※本メールは自動配信メールです。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　";
        // line 16
        echo twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 16, $this->source); })()), "shop_name", [], "any", false, false, false, 16);
        echo "より会員登録を希望された方に
　お送りしています。
　もしお心当たりが無い場合はこのままこのメールを破棄していただ
　ければ会員登録はなされません。
　またその旨 ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 20, $this->source); })()), "email02", [], "any", false, false, false, 20);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

";
        // line 24
        echo twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 24, $this->source); })()), "name01", [], "any", false, false, false, 24);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 24, $this->source); })()), "name02", [], "any", false, false, false, 24);
        echo " 様

";
        // line 26
        echo twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 26, $this->source); })()), "shop_name", [], "any", false, false, false, 26);
        echo "でございます。

この度は会員登録依頼をいただきまして、有り難うございます。

現在は仮登録の状態です。
　　　~~~~~~
本会員登録を完了するには下記URLにアクセスしてください。

";
        // line 34
        echo (isset($context["activateUrl"]) || array_key_exists("activateUrl", $context) ? $context["activateUrl"] : (function () { throw new RuntimeError('Variable "activateUrl" does not exist.', 34, $this->source); })());
        echo "

上記URLにて本会員登録が完了いたしましたら改めてご登録内容ご確認
メールをお送り致します。
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mail/entry_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  70 => 26,  63 => 24,  56 => 20,  49 => 16,  43 => 12,);
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
※本メールは自動配信メールです。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　{{ BaseInfo.shop_name }}より会員登録を希望された方に
　お送りしています。
　もしお心当たりが無い場合はこのままこのメールを破棄していただ
　ければ会員登録はなされません。
　またその旨 {{ BaseInfo.email02 }} まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

{{ Customer.name01 }} {{ Customer.name02 }} 様

{{ BaseInfo.shop_name }}でございます。

この度は会員登録依頼をいただきまして、有り難うございます。

現在は仮登録の状態です。
　　　~~~~~~
本会員登録を完了するには下記URLにアクセスしてください。

{{ activateUrl }}

上記URLにて本会員登録が完了いたしましたら改めてご登録内容ご確認
メールをお送り致します。
{% endautoescape %}
", "Mail/entry_confirm.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/default/Mail/entry_confirm.twig");
    }
}
