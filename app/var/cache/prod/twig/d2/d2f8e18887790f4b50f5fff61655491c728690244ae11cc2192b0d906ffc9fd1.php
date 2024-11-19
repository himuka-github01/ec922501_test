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

/* Product/option_css.twig */
class __TwigTemplate_8135b9383fb879221f801b7d9680fd91e7f1b7b7a8905973abecf97cbffb6ae4 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('css', $context, $blocks);
    }

    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<style>
    .ec-radio .form-check-label {
        font-weight: normal;
    }
    .ec-checkbox .form-check-label {
        font-weight: normal;
    }
    .option_description {
      -moz-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
      -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
      -moz-border-radius: 6px;
      -webkit-border-radius: 6px;
      border-radius: 6px;
      display: none;
      min-width: 50%;
      max-width: 80%;
      max-height: 80%;
      background-color: #fff;
      border: 1px solid rgba(0, 0, 0, 0.2);
      overflow:auto;
      -webkit-overflow-scrolling: touch

    }
    .option_description .modal-header {
      padding: 15px;
      border-bottom: 1px solid #e5e5e5;
    }
    .option_description .modal-header .plainmodal-close {
      margin-top: -2px;
      float: right;
      font-size: 2.1rem;
      font-weight: 700;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      opacity: 0.2;
    }
    .option_description .modal-header .plainmodal-close:hover {
      opacity: 0.5;
    }

    .option_description .modal-header > p {
      margin: 1% 0 0 0;
      font-size: 1.4rem;
      line-height: 1.42857143;
    }

    .option_description .modal-title {
      color: #333333;
      font-size: 1.8rem;
      font-weight: 500;
      font-family: inherit;
      margin: 0;
    }
    .option_description .modal-body {
      padding: 3%;
      font-size: 1.4rem;
      line-height: 1.42857143;
      color: #333;
    }
    .option_description .modal-body > p {
        margin: 0 0 3%;
    }
    .option_description .modal-body > div {
        margin-bottom: 2%;
        overflow: hidden;
        padding-bottom: 2%;
    }
    .option_description .modal-body > div > p {
        margin: 2% 0 0;
    }
    .option_description img {
        float: none;
        margin: 1% auto 0;
        width: 40%;
        height: auto;
        display: block;
    }
    .option_description h3 {
        margin: 0;
        background: #efefef;
        padding: 1%;
    }
    .option_description .minus {
        color: #2980b9;
    }
    @media screen and (min-width: 768px) {
        .option_description img {
            float: left;
            margin: 1% 4% 0 0;
            width: 15%;
        }
    }

    .option_description span.small {
        font-size: 1.2rem;
    }

    .option_description .btn-info {
        width: 74px;
        float: none;
        margin: 15px auto 10px;
        border: 0;
        padding: 4px 0;
        display: block;
        background: #525263;
    }

    .option_description .btn-info:hover {
        background: #474757;
    }

    @media only screen and (min-width: 768px) {
        .option_description .btn-info {
            float: right;
            margin: 0 10px 0 0;
        }

    }
</style>
";
    }

    public function getTemplateName()
    {
        return "Product/option_css.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  41 => 11,  38 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/option_css.twig", "/var/www/htdocs/ec922501/app/template/default/Product/option_css.twig");
    }
}
