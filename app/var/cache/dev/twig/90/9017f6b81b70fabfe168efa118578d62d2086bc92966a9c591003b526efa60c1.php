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

/* ProductOption/Repository/ProductOptionRepository.php */
class __TwigTemplate_c0604256918a7c5d0739cfcbdf2af33920bd720533c6d59f608b740532e32e04 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Repository/ProductOptionRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Repository/ProductOptionRepository.php"));

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

namespace Plugin\\ProductOption\\Repository;

use Eccube\\Repository\\AbstractRepository;
use Symfony\\Bridge\\Doctrine\\RegistryInterface;

class ProductOptionRepository extends AbstractRepository
{
    public function __construct(RegistryInterface \$registry, string \$entityClass = \\Plugin\\ProductOption\\Entity\\ProductOption::class)
    {
        parent::__construct(\$registry, \$entityClass);
    }

    public function getListByProduct(\$Product)
    {
        \$qb = \$this->createQueryBuilder('po')
                ->where('po.Product = :product')
                ->setParameter('product', \$Product)
                ->orderBy('po.sort_no','ASC');

        return \$qb->getQuery()
                        ->getResult();
    }

    public function save(\$ProductOption)
    {
        \$em = \$this->getEntityManager();
        try {
            if (!\$ProductOption->getId()) {
                \$sort_no = \$this->createQueryBuilder('po')
                        ->select('MAX(po.sort_no)')
                        ->where('po.Product = :product')
                        ->setParameter('product', \$ProductOption->getProduct())
                        ->getQuery()
                        ->getSingleScalarResult();
                if (!\$sort_no) {
                    \$sort_no = 0;
                }
                \$ProductOption->setSortNo(\$sort_no + 1);
            }

            \$em->persist(\$ProductOption);
            \$em->flush(\$ProductOption);
        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

    public function delete(\$ProductOption)
    {
        \$em = \$this->getEntityManager();
        try {
            \$sort_no = \$ProductOption->getSortNo();
            \$Product = \$ProductOption->getProduct();

            \$em->createQueryBuilder()
                    ->update('Plugin\\ProductOption\\Entity\\ProductOption', 'po')
                    ->set('po.sort_no', 'po.sort_no - 1')
                    ->where('po.sort_no > :sort_no AND po.Product = :Product')
                    ->setParameter('sort_no', \$sort_no)
                    ->setParameter('Product', \$Product)
                    ->getQuery()
                    ->execute();
            \$em->remove(\$ProductOption);
            \$em->flush();
        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

    public function isExist(\$Product, \$Option)
    {
        \$em = \$this->getEntityManager();
        try {
            //
            \$ProductOption = \$this->findOneBy(['Product' => \$Product, 'Option' => \$Option]);
            if (!\$ProductOption) {
                throw new \\Exception();
            }
        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Repository/ProductOptionRepository.php";
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

namespace Plugin\\ProductOption\\Repository;

use Eccube\\Repository\\AbstractRepository;
use Symfony\\Bridge\\Doctrine\\RegistryInterface;

class ProductOptionRepository extends AbstractRepository
{
    public function __construct(RegistryInterface \$registry, string \$entityClass = \\Plugin\\ProductOption\\Entity\\ProductOption::class)
    {
        parent::__construct(\$registry, \$entityClass);
    }

    public function getListByProduct(\$Product)
    {
        \$qb = \$this->createQueryBuilder('po')
                ->where('po.Product = :product')
                ->setParameter('product', \$Product)
                ->orderBy('po.sort_no','ASC');

        return \$qb->getQuery()
                        ->getResult();
    }

    public function save(\$ProductOption)
    {
        \$em = \$this->getEntityManager();
        try {
            if (!\$ProductOption->getId()) {
                \$sort_no = \$this->createQueryBuilder('po')
                        ->select('MAX(po.sort_no)')
                        ->where('po.Product = :product')
                        ->setParameter('product', \$ProductOption->getProduct())
                        ->getQuery()
                        ->getSingleScalarResult();
                if (!\$sort_no) {
                    \$sort_no = 0;
                }
                \$ProductOption->setSortNo(\$sort_no + 1);
            }

            \$em->persist(\$ProductOption);
            \$em->flush(\$ProductOption);
        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

    public function delete(\$ProductOption)
    {
        \$em = \$this->getEntityManager();
        try {
            \$sort_no = \$ProductOption->getSortNo();
            \$Product = \$ProductOption->getProduct();

            \$em->createQueryBuilder()
                    ->update('Plugin\\ProductOption\\Entity\\ProductOption', 'po')
                    ->set('po.sort_no', 'po.sort_no - 1')
                    ->where('po.sort_no > :sort_no AND po.Product = :Product')
                    ->setParameter('sort_no', \$sort_no)
                    ->setParameter('Product', \$Product)
                    ->getQuery()
                    ->execute();
            \$em->remove(\$ProductOption);
            \$em->flush();
        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

    public function isExist(\$Product, \$Option)
    {
        \$em = \$this->getEntityManager();
        try {
            //
            \$ProductOption = \$this->findOneBy(['Product' => \$Product, 'Option' => \$Option]);
            if (!\$ProductOption) {
                throw new \\Exception();
            }
        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

}
", "ProductOption/Repository/ProductOptionRepository.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Repository/ProductOptionRepository.php");
    }
}
