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

/* ProductOption/Controller/Admin/ConfigController.php */
class __TwigTemplate_2de656f35512561a998655347d70fa1045b0d37e000c012638e9c5b99a6cdb6c extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Controller/Admin/ConfigController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Controller/Admin/ConfigController.php"));

        // line 1
        echo "<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\\ProductOption\\Controller\\Admin;

use Plugin\\ProductOption\\Repository\\ConfigRepository;
use Plugin\\ProductOption\\Entity\\DeliveryDateConfig;
use Plugin\\ProductOption\\Form\\Type\\Admin\\ConfigType;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Finder\\Finder;

class ConfigController extends \\Eccube\\Controller\\AbstractController
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
            ConfigRepository \$configRepository
            )
    {
        \$this->configRepository = \$configRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/setting/product_option/config\", name=\"product_option_admin_config\")
     * @Template(\"@ProductOption/admin/Setting/config.twig\")
     */
    public function index(Request \$request)
    {
        \$form = \$this->formFactory
            ->createBuilder(ConfigType::class)
            ->getForm();

        \$Configs = \$this->configRepository->findAll();

        foreach(\$Configs as \$config) {
            if(is_null(\$config->getValue()) || is_array(\$config->getValue())) continue;
            \$form[\$config->getName()]->setData(\$config->getValue());
        }

        if ('POST' === \$request->getMethod()) {
            \$form->handleRequest(\$request);
            if (\$form->isSubmitted() && \$form->isValid()) {
                //設定内容を一度クリア
                foreach(\$Configs as \$config){
                    \$this->entityManager->remove(\$config);
                }
                \$this->entityManager->flush();

                //設定登録
                \$Values = \$form->getData();
                foreach(\$Values as \$name => \$value){
                    \$Config = new \\Plugin\\ProductOption\\Entity\\ProductOptionConfig();
                    \$Config->setName(\$name);
                    \$Config->setValue(\$value);
                    \$this->entityManager->persist(\$Config);
                }
                \$this->entityManager->flush();
                \$this->addSuccess('admin.setting.productoption.save.complete', 'admin');
            }
        }

        return [
            'form' => \$form->createView(),
        ];
    }
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Controller/Admin/ConfigController.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\\ProductOption\\Controller\\Admin;

use Plugin\\ProductOption\\Repository\\ConfigRepository;
use Plugin\\ProductOption\\Entity\\DeliveryDateConfig;
use Plugin\\ProductOption\\Form\\Type\\Admin\\ConfigType;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Finder\\Finder;

class ConfigController extends \\Eccube\\Controller\\AbstractController
{
    /**
     * @var ConfigRepository
     */
    private \$configRepository;

    public function __construct(
            ConfigRepository \$configRepository
            )
    {
        \$this->configRepository = \$configRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/setting/product_option/config\", name=\"product_option_admin_config\")
     * @Template(\"@ProductOption/admin/Setting/config.twig\")
     */
    public function index(Request \$request)
    {
        \$form = \$this->formFactory
            ->createBuilder(ConfigType::class)
            ->getForm();

        \$Configs = \$this->configRepository->findAll();

        foreach(\$Configs as \$config) {
            if(is_null(\$config->getValue()) || is_array(\$config->getValue())) continue;
            \$form[\$config->getName()]->setData(\$config->getValue());
        }

        if ('POST' === \$request->getMethod()) {
            \$form->handleRequest(\$request);
            if (\$form->isSubmitted() && \$form->isValid()) {
                //設定内容を一度クリア
                foreach(\$Configs as \$config){
                    \$this->entityManager->remove(\$config);
                }
                \$this->entityManager->flush();

                //設定登録
                \$Values = \$form->getData();
                foreach(\$Values as \$name => \$value){
                    \$Config = new \\Plugin\\ProductOption\\Entity\\ProductOptionConfig();
                    \$Config->setName(\$name);
                    \$Config->setValue(\$value);
                    \$this->entityManager->persist(\$Config);
                }
                \$this->entityManager->flush();
                \$this->addSuccess('admin.setting.productoption.save.complete', 'admin');
            }
        }

        return [
            'form' => \$form->createView(),
        ];
    }
}", "ProductOption/Controller/Admin/ConfigController.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Controller/Admin/ConfigController.php");
    }
}
