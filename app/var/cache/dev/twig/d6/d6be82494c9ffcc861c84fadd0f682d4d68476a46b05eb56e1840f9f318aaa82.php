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

/* MigrationSample/composer.json */
class __TwigTemplate_fc4d4fe2a543bf2f74d9510bc6b67738836c0768e4439d334ac6f3cb8dea2f60 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MigrationSample/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MigrationSample/composer.json"));

        // line 1
        echo "{
  \"name\": \"ec-cube/MigrationSample\",
  \"version\": \"1.0.0\",
  \"description\": \"マイグレーションのサンプルプラグイン\",
  \"type\": \"eccube-plugin\",
  \"require\": {
    \"ec-cube/plugin-installer\": \"~0.0.6\"
  },
  \"extra\": {
    \"code\": \"MigrationSample\"
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MigrationSample/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"ec-cube/MigrationSample\",
  \"version\": \"1.0.0\",
  \"description\": \"マイグレーションのサンプルプラグイン\",
  \"type\": \"eccube-plugin\",
  \"require\": {
    \"ec-cube/plugin-installer\": \"~0.0.6\"
  },
  \"extra\": {
    \"code\": \"MigrationSample\"
  }
}
", "MigrationSample/composer.json", "/var/www/htdocs/ec922501/app/Plugin/MigrationSample/composer.json");
    }
}
