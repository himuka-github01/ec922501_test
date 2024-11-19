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

/* ProductOption/Controller/Admin/ProductOptionRankController.php */
class __TwigTemplate_28746072a625892c04fc3e15a54299b4766802cfebe6024398c5d059427d1361 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Controller/Admin/ProductOptionRankController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Controller/Admin/ProductOptionRankController.php"));

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

use Plugin\\ProductOption\\Entity\\ProductOption;
use Plugin\\ProductOption\\Repository\\ProductOptionRepository;
use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;

class ProductOptionRankController extends \\Eccube\\Controller\\AbstractController
{
    /**
     * @var ProductRepository
     */
    private \$productRepository;

    /**
     * @var ProductOptionRepository
     */
    private \$productOptionRepository;

    /**
     * OptionController constructor.
     * @param ProductRepository \$productRepository
     * @param OptionRepository \$optionRepository
     * @param ProductOptionRepository \$productOptionRepository
     */
    public function __construct(\\Eccube\\Repository\\ProductRepository \$productRepository, ProductOptionRepository \$productOptionRepository)
    {
        \$this->productRepository = \$productRepository;
        \$this->productOptionRepository = \$productOptionRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/product/product/option/rank/{id}\", requirements={\"id\" = \"\\d+\"} , name=\"admin_product_product_option_rank\")
     * @Template(\"@ProductOption/admin/Product/product_option_rank.twig\")
     */
    public function index(Request \$request, \$id)
    {

        \$Product = \$this->productRepository->find(\$id);

        if (!\$Product) {
            throw new NotFoundHttpException();
        }

        \$ProductOptions = \$Product->getProductOptions();

        return [
                    'Product' => \$Product,
                    'ProductOptions' => \$ProductOptions,
        ];
    }

    /**
     * @Route(\"/%eccube_admin_route%/product/product_option/sort_no/move\" , name=\"admin_product_product_option_sort_no_move\",methods={\"POST\"})
     */
    public function moveSortNo(Request \$request)
    {
        if (\$request->isXmlHttpRequest()) {
            \$sortNos = \$request->request->all();
            foreach (\$sortNos as \$productOptionId => \$sortNo) {
                \$ProductOption = \$this->productOptionRepository
                        ->find(\$productOptionId);
                \$ProductOption->setSortNo(\$sortNo);
                \$this->entityManager->persist(\$ProductOption);
            }
            \$this->entityManager->flush();
        }
        return new Response();
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Controller/Admin/ProductOptionRankController.php";
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

use Plugin\\ProductOption\\Entity\\ProductOption;
use Plugin\\ProductOption\\Repository\\ProductOptionRepository;
use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\Annotation\\Route;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Template;

class ProductOptionRankController extends \\Eccube\\Controller\\AbstractController
{
    /**
     * @var ProductRepository
     */
    private \$productRepository;

    /**
     * @var ProductOptionRepository
     */
    private \$productOptionRepository;

    /**
     * OptionController constructor.
     * @param ProductRepository \$productRepository
     * @param OptionRepository \$optionRepository
     * @param ProductOptionRepository \$productOptionRepository
     */
    public function __construct(\\Eccube\\Repository\\ProductRepository \$productRepository, ProductOptionRepository \$productOptionRepository)
    {
        \$this->productRepository = \$productRepository;
        \$this->productOptionRepository = \$productOptionRepository;
    }

    /**
     * @Route(\"/%eccube_admin_route%/product/product/option/rank/{id}\", requirements={\"id\" = \"\\d+\"} , name=\"admin_product_product_option_rank\")
     * @Template(\"@ProductOption/admin/Product/product_option_rank.twig\")
     */
    public function index(Request \$request, \$id)
    {

        \$Product = \$this->productRepository->find(\$id);

        if (!\$Product) {
            throw new NotFoundHttpException();
        }

        \$ProductOptions = \$Product->getProductOptions();

        return [
                    'Product' => \$Product,
                    'ProductOptions' => \$ProductOptions,
        ];
    }

    /**
     * @Route(\"/%eccube_admin_route%/product/product_option/sort_no/move\" , name=\"admin_product_product_option_sort_no_move\",methods={\"POST\"})
     */
    public function moveSortNo(Request \$request)
    {
        if (\$request->isXmlHttpRequest()) {
            \$sortNos = \$request->request->all();
            foreach (\$sortNos as \$productOptionId => \$sortNo) {
                \$ProductOption = \$this->productOptionRepository
                        ->find(\$productOptionId);
                \$ProductOption->setSortNo(\$sortNo);
                \$this->entityManager->persist(\$ProductOption);
            }
            \$this->entityManager->flush();
        }
        return new Response();
    }

}
", "ProductOption/Controller/Admin/ProductOptionRankController.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Controller/Admin/ProductOptionRankController.php");
    }
}
