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

/* MigrationSample/PluginManager.php */
class __TwigTemplate_20396babb142dfa31b20bb7086bd2a212927c1aa61e587c0d8ecc9bf2d79e593 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MigrationSample/PluginManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MigrationSample/PluginManager.php"));

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

namespace Plugin\\MigrationSample;

use Eccube\\Plugin\\AbstractPluginManager;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * Class PluginManager.
 */
class PluginManager extends AbstractPluginManager
{
    const VERSION = '1.0.0';
    /**
     * Install the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function install(array \$meta, ContainerInterface \$container)
    {
        dump('install '.self::VERSION);
    }

    /**
     * Update the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function update(array \$meta, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        dump('update '.self::VERSION);
        \$this->migration(\$entityManager->getConnection(), \$meta['code']);
    }

    /**
     * Enable the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function enable(array \$meta, ContainerInterface \$container)
    {
        dump('enable '.self::VERSION);
    }

    /**
     * Disable the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function disable(array \$meta, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        dump('disable '.self::VERSION);
        \$this->migration(\$entityManager->getConnection(), \$meta['code'], '0');
    }

    /**
     * Uninstall the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function uninstall(array \$meta, ContainerInterface \$container)
    {
        dump('uninstall '.self::VERSION);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MigrationSample/PluginManager.php";
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

namespace Plugin\\MigrationSample;

use Eccube\\Plugin\\AbstractPluginManager;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;

/**
 * Class PluginManager.
 */
class PluginManager extends AbstractPluginManager
{
    const VERSION = '1.0.0';
    /**
     * Install the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function install(array \$meta, ContainerInterface \$container)
    {
        dump('install '.self::VERSION);
    }

    /**
     * Update the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function update(array \$meta, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        dump('update '.self::VERSION);
        \$this->migration(\$entityManager->getConnection(), \$meta['code']);
    }

    /**
     * Enable the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function enable(array \$meta, ContainerInterface \$container)
    {
        dump('enable '.self::VERSION);
    }

    /**
     * Disable the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function disable(array \$meta, ContainerInterface \$container)
    {
        \$entityManager = \$container->get('doctrine')->getManager();
        dump('disable '.self::VERSION);
        \$this->migration(\$entityManager->getConnection(), \$meta['code'], '0');
    }

    /**
     * Uninstall the plugin.
     *
     * @param array \$meta
     * @param ContainerInterface \$container
     */
    public function uninstall(array \$meta, ContainerInterface \$container)
    {
        dump('uninstall '.self::VERSION);
    }
}
", "MigrationSample/PluginManager.php", "/var/www/htdocs/ec922501/app/Plugin/MigrationSample/PluginManager.php");
    }
}
