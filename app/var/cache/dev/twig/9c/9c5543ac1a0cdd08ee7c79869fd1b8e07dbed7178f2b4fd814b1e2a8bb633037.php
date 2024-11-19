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

/* @admin/Setting/Shop/mail_view.twig */
class __TwigTemplate_227b5bdbabd954b7d15c02502c9c65404c6a190ccf96124681f3a92a7074c8f1 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/mail_view.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Setting/Shop/mail_view.twig"));

        // line 11
        echo "<style media=\"print\" type=\"text/css\">
    .modal-open .modal {
        position: absolute;
        display: block;
        overflow: visible;
    }
    #table1 {
        width: 100% !important;
    }
    #table2 {
        width: 100% !important;
    }
    .modal-open #main {
        visibility:hidden;
    }
</style>

<small>";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["html_body"]) || array_key_exists("html_body", $context) ? $context["html_body"] : (function () { throw new RuntimeError('Variable "html_body" does not exist.', 28, $this->source); })()));
        echo "</small>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/mail_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 28,  43 => 11,);
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
<style media=\"print\" type=\"text/css\">
    .modal-open .modal {
        position: absolute;
        display: block;
        overflow: visible;
    }
    #table1 {
        width: 100% !important;
    }
    #table2 {
        width: 100% !important;
    }
    .modal-open #main {
        visibility:hidden;
    }
</style>

<small>{{ html_body|trans|raw }}</small>
", "@admin/Setting/Shop/mail_view.twig", "/var/www/htdocs/ec922501/src/Eccube/Resource/template/admin/Setting/Shop/mail_view.twig");
    }
}
