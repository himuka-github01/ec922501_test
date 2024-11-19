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

/* ProductOption/Repository/OptionCategoryRepository.php */
class __TwigTemplate_97d8de3d5883d3739ea8ff12e748b0a2544c3b542c35448113e23e054a3e255f extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Repository/OptionCategoryRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Repository/OptionCategoryRepository.php"));

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
use Plugin\\ProductOption\\Entity\\Option;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Entity\\ProductOption;
use Symfony\\Bridge\\Doctrine\\RegistryInterface;

class OptionCategoryRepository extends AbstractRepository
{

    public function __construct(RegistryInterface \$registry, string \$entityClass = \\Plugin\\ProductOption\\Entity\\OptionCategory::class)
    {
        parent::__construct(\$registry, \$entityClass);
    }

    public function getList(\$Option = null)
    {
        \$qb = \$this->createQueryBuilder('oc')
                ->orderBy('oc.sort_no', 'DESC');
        if (\$Option) {
            \$qb->where('oc.Option = :Option')->setParameter('Option', \$Option);
        }
        \$OptionCategories = \$qb->getQuery()
                ->getResult();

        return \$OptionCategories;
    }

    public function save(\$OptionCategory)
    {
        \$em = \$this->getEntityManager();
        \$Option = \$OptionCategory->getOption();
        try {
            if (!\$OptionCategory->getId()) {
                \$sort_no = \$this->createQueryBuilder('oc')
                        ->select('MAX(oc.sort_no)')
                        ->where('oc.Option = :Option')->setParameter('Option', \$Option)
                        ->getQuery()
                        ->getSingleScalarResult();
                if (!\$sort_no) {
                    \$sort_no = 0;
                }
                \$OptionCategory->setSortNo(\$sort_no + 1);
            }

            if(\$Option->getType() != Option::CHECKBOX_TYPE){
                if(\$OptionCategory->getInitFlg()){
                    \$qb = \$em->createQueryBuilder()
                            ->update('Plugin\\ProductOption\\Entity\\OptionCategory', 'oc')
                            ->set('oc.init_flg', 'false')
                            ->where('oc.Option = :Option')
                            ->setParameter('Option', \$Option);
                    if (\$OptionCategory->getId()) {
                        \$qb->andWhere('oc.id <> :id')
                           ->setParameter('id', \$OptionCategory->getId());
                    }
                    \$qb->getQuery()
                       ->execute();
                }
            }

            \$em->persist(\$OptionCategory);
            \$em->flush(\$OptionCategory);

        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

    public function delete(\$OptionCategory)
    {
        \$em = \$this->getEntityManager();
        try {
            \$sort_no = \$OptionCategory->getSortNo();
            \$Option = \$OptionCategory->getOption();

            \$em->createQueryBuilder()
                    ->update('Plugin\\ProductOption\\Entity\\OptionCategory', 'oc')
                    ->set('oc.sort_no', 'oc.sort_no - 1')
                    ->where('oc.sort_no > :sort_no AND oc.Option = :Option')
                    ->setParameter('sort_no', \$sort_no)
                    ->setParameter('Option', \$Option)
                    ->getQuery()
                    ->execute();

            \$em->remove(\$OptionCategory);
            \$em->flush(\$OptionCategory);
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
        return "ProductOption/Repository/OptionCategoryRepository.php";
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
use Plugin\\ProductOption\\Entity\\Option;
use Plugin\\ProductOption\\Entity\\OptionCategory;
use Plugin\\ProductOption\\Entity\\ProductOption;
use Symfony\\Bridge\\Doctrine\\RegistryInterface;

class OptionCategoryRepository extends AbstractRepository
{

    public function __construct(RegistryInterface \$registry, string \$entityClass = \\Plugin\\ProductOption\\Entity\\OptionCategory::class)
    {
        parent::__construct(\$registry, \$entityClass);
    }

    public function getList(\$Option = null)
    {
        \$qb = \$this->createQueryBuilder('oc')
                ->orderBy('oc.sort_no', 'DESC');
        if (\$Option) {
            \$qb->where('oc.Option = :Option')->setParameter('Option', \$Option);
        }
        \$OptionCategories = \$qb->getQuery()
                ->getResult();

        return \$OptionCategories;
    }

    public function save(\$OptionCategory)
    {
        \$em = \$this->getEntityManager();
        \$Option = \$OptionCategory->getOption();
        try {
            if (!\$OptionCategory->getId()) {
                \$sort_no = \$this->createQueryBuilder('oc')
                        ->select('MAX(oc.sort_no)')
                        ->where('oc.Option = :Option')->setParameter('Option', \$Option)
                        ->getQuery()
                        ->getSingleScalarResult();
                if (!\$sort_no) {
                    \$sort_no = 0;
                }
                \$OptionCategory->setSortNo(\$sort_no + 1);
            }

            if(\$Option->getType() != Option::CHECKBOX_TYPE){
                if(\$OptionCategory->getInitFlg()){
                    \$qb = \$em->createQueryBuilder()
                            ->update('Plugin\\ProductOption\\Entity\\OptionCategory', 'oc')
                            ->set('oc.init_flg', 'false')
                            ->where('oc.Option = :Option')
                            ->setParameter('Option', \$Option);
                    if (\$OptionCategory->getId()) {
                        \$qb->andWhere('oc.id <> :id')
                           ->setParameter('id', \$OptionCategory->getId());
                    }
                    \$qb->getQuery()
                       ->execute();
                }
            }

            \$em->persist(\$OptionCategory);
            \$em->flush(\$OptionCategory);

        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

    public function delete(\$OptionCategory)
    {
        \$em = \$this->getEntityManager();
        try {
            \$sort_no = \$OptionCategory->getSortNo();
            \$Option = \$OptionCategory->getOption();

            \$em->createQueryBuilder()
                    ->update('Plugin\\ProductOption\\Entity\\OptionCategory', 'oc')
                    ->set('oc.sort_no', 'oc.sort_no - 1')
                    ->where('oc.sort_no > :sort_no AND oc.Option = :Option')
                    ->setParameter('sort_no', \$sort_no)
                    ->setParameter('Option', \$Option)
                    ->getQuery()
                    ->execute();

            \$em->remove(\$OptionCategory);
            \$em->flush(\$OptionCategory);
        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }
}
", "ProductOption/Repository/OptionCategoryRepository.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Repository/OptionCategoryRepository.php");
    }
}
