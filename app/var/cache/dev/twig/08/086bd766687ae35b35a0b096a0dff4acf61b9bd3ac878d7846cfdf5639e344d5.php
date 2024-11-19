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

/* AnnotatedRouting/Controller/AnnotatedRoutingController.php */
class __TwigTemplate_460218bf52b84b9629b4b4dff9bdebe43beef462acb2b363650237a8a07060c2 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AnnotatedRouting/Controller/AnnotatedRoutingController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AnnotatedRouting/Controller/AnnotatedRoutingController.php"));

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

namespace Plugin\\AnnotatedRouting\\Controller;

use Eccube\\Application;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Method;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @Route(value=\"/arc\", service=AnnotatedRoutingController::class)
 */
class AnnotatedRoutingController
{
    /**
     * @Route(\"/\")
     * @Template(\"AnnotatedRouting/Resource/template/index.twig\")
     */
    public function index(Application \$app)
    {
        return [];
    }

    /**
     * @Route(\"/form\")
     * @Method(\"GET\")
     * @Template(\"AnnotatedRouting/Resource/template/form.twig\")
     */
    public function form(Application \$app)
    {
        return [];
    }

    /**
     * @Route(\"/form\")
     * @Method(\"POST\")
     */
    public function submit(Application \$app, Request \$request)
    {
        return \$app->escape('Hello, '.\$request->get('value'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AnnotatedRouting/Controller/AnnotatedRoutingController.php";
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

namespace Plugin\\AnnotatedRouting\\Controller;

use Eccube\\Application;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Method;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @Route(value=\"/arc\", service=AnnotatedRoutingController::class)
 */
class AnnotatedRoutingController
{
    /**
     * @Route(\"/\")
     * @Template(\"AnnotatedRouting/Resource/template/index.twig\")
     */
    public function index(Application \$app)
    {
        return [];
    }

    /**
     * @Route(\"/form\")
     * @Method(\"GET\")
     * @Template(\"AnnotatedRouting/Resource/template/form.twig\")
     */
    public function form(Application \$app)
    {
        return [];
    }

    /**
     * @Route(\"/form\")
     * @Method(\"POST\")
     */
    public function submit(Application \$app, Request \$request)
    {
        return \$app->escape('Hello, '.\$request->get('value'));
    }
}
", "AnnotatedRouting/Controller/AnnotatedRoutingController.php", "/var/www/htdocs/ec922501/app/Plugin/AnnotatedRouting/Controller/AnnotatedRoutingController.php");
    }
}
