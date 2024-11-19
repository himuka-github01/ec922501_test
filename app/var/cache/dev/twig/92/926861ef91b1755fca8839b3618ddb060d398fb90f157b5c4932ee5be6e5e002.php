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

/* QueryCustomize/ServiceProvider/QueryCustomizeServiceProvider.php */
class __TwigTemplate_c381750773154c2100af57c9a820d83805c7d9bbb6959982f1b2b1615f13d8f3 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "QueryCustomize/ServiceProvider/QueryCustomizeServiceProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "QueryCustomize/ServiceProvider/QueryCustomizeServiceProvider.php"));

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

namespace Plugin\\QueryCustomize\\ServiceProvider;

use Pimple\\Container;
use Pimple\\ServiceProviderInterface;
use Plugin\\QueryCustomize\\Entity\\AdminCustomerCustomizer;
use Silex\\Api\\BootableProviderInterface;
use Silex\\Application;

class QueryCustomizeServiceProvider implements ServiceProviderInterface, BootableProviderInterface
{
    public function register(Container \$app)
    {
        \$app['plugin.query_customize.customer_search'] = function (Container \$container) {
            return new AdminCustomerCustomizer();
        };
    }

    public function boot(Application \$app)
    {
        \$app['eccube.queries']
            ->addCustomizer(\$app['plugin.query_customize.customer_search']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "QueryCustomize/ServiceProvider/QueryCustomizeServiceProvider.php";
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

namespace Plugin\\QueryCustomize\\ServiceProvider;

use Pimple\\Container;
use Pimple\\ServiceProviderInterface;
use Plugin\\QueryCustomize\\Entity\\AdminCustomerCustomizer;
use Silex\\Api\\BootableProviderInterface;
use Silex\\Application;

class QueryCustomizeServiceProvider implements ServiceProviderInterface, BootableProviderInterface
{
    public function register(Container \$app)
    {
        \$app['plugin.query_customize.customer_search'] = function (Container \$container) {
            return new AdminCustomerCustomizer();
        };
    }

    public function boot(Application \$app)
    {
        \$app['eccube.queries']
            ->addCustomizer(\$app['plugin.query_customize.customer_search']);
    }
}
", "QueryCustomize/ServiceProvider/QueryCustomizeServiceProvider.php", "/var/www/htdocs/ec922501/app/Plugin/QueryCustomize/ServiceProvider/QueryCustomizeServiceProvider.php");
    }
}
