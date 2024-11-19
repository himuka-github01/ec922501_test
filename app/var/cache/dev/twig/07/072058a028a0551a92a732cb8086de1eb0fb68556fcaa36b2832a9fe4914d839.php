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

/* ProductOption/Repository/OptionRepository.php */
class __TwigTemplate_a9d70c46ca0f8a60015f57e9f072afd2a0bb82e0cae0b7a4868e48212d34a51e extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Repository/OptionRepository.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Repository/OptionRepository.php"));

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
use Symfony\\Bridge\\Doctrine\\RegistryInterface;

class OptionRepository extends AbstractRepository
{

    public function __construct(RegistryInterface \$registry, string \$entityClass = Option::class)
    {
        parent::__construct(\$registry, \$entityClass);
    }

    public function getList()
    {
        \$qb = \$this->createQueryBuilder('o')
                ->orderBy('o.sort_no', 'DESC');
        \$Options = \$qb->getQuery()
                ->getResult();

        return \$Options;
    }

    public function getIds()
    {
        \$qb = \$this->createQueryBuilder('o')
                ->select('o.id')
                ->orderBy('o.sort_no', 'DESC');
        \$results = \$qb->getQuery()
                ->getResult();

        \$Ids = [];
        foreach(\$results as \$result){
            \$Ids[] = \$result['id'];
        }
        return \$Ids;
    }

    public function save(\$Option)
    {
        \$em = \$this->getEntityManager();
        try {
            if (!\$Option->getId()) {
                \$sort_no = \$this->createQueryBuilder('o')
                        ->select('MAX(o.sort_no)')
                        ->getQuery()
                        ->getSingleScalarResult();
                if (!\$sort_no) {
                    \$sort_no = 0;
                }
                \$Option->setSortNo(\$sort_no + 1);
            }

            if(\$Option->getType() == Option::CHECKBOX_TYPE){
                \$Option->setIsRequired(false);
            }elseif(\$Option->getType() == Option::NUMBER_TYPE){
            }else{
                \$Option->setRequireMin(null);
                \$Option->setRequireMax(null);
            }

            \$em->persist(\$Option);
            \$em->flush(\$Option);

        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

    public function delete(\$Option)
    {
        \$em = \$this->getEntityManager();
        try {
            \$ProductOptions = \$em->createQueryBuilder()
                                 ->from('Plugin\\ProductOption\\Entity\\ProductOption','po')
                                 ->select('po')
                                 ->where('po.Option = :Option')
                                 ->setParameter('Option',\$Option)
                                 ->getQuery()
                                 ->getResult();

            if (count(\$ProductOptions) > 0) {
                foreach(\$ProductOptions as \$ProductOption){
                    \$em->getRepository('Plugin\\ProductOption\\Entity\\ProductOption')
                                ->delete(\$ProductOption);
                }
            }

            \$sort_no = \$Option->getSortNo();
            \$em->createQueryBuilder()
                    ->update('Plugin\\ProductOption\\Entity\\Option', 'o')
                    ->set('o.sort_no', 'o.sort_no - 1')
                    ->where('o.sort_no > :sort_no')->setParameter('sort_no', \$sort_no)
                    ->getQuery()
                    ->execute();

            \$em->remove(\$Option);
            \$em->flush();
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
        return "ProductOption/Repository/OptionRepository.php";
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
use Symfony\\Bridge\\Doctrine\\RegistryInterface;

class OptionRepository extends AbstractRepository
{

    public function __construct(RegistryInterface \$registry, string \$entityClass = Option::class)
    {
        parent::__construct(\$registry, \$entityClass);
    }

    public function getList()
    {
        \$qb = \$this->createQueryBuilder('o')
                ->orderBy('o.sort_no', 'DESC');
        \$Options = \$qb->getQuery()
                ->getResult();

        return \$Options;
    }

    public function getIds()
    {
        \$qb = \$this->createQueryBuilder('o')
                ->select('o.id')
                ->orderBy('o.sort_no', 'DESC');
        \$results = \$qb->getQuery()
                ->getResult();

        \$Ids = [];
        foreach(\$results as \$result){
            \$Ids[] = \$result['id'];
        }
        return \$Ids;
    }

    public function save(\$Option)
    {
        \$em = \$this->getEntityManager();
        try {
            if (!\$Option->getId()) {
                \$sort_no = \$this->createQueryBuilder('o')
                        ->select('MAX(o.sort_no)')
                        ->getQuery()
                        ->getSingleScalarResult();
                if (!\$sort_no) {
                    \$sort_no = 0;
                }
                \$Option->setSortNo(\$sort_no + 1);
            }

            if(\$Option->getType() == Option::CHECKBOX_TYPE){
                \$Option->setIsRequired(false);
            }elseif(\$Option->getType() == Option::NUMBER_TYPE){
            }else{
                \$Option->setRequireMin(null);
                \$Option->setRequireMax(null);
            }

            \$em->persist(\$Option);
            \$em->flush(\$Option);

        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

    public function delete(\$Option)
    {
        \$em = \$this->getEntityManager();
        try {
            \$ProductOptions = \$em->createQueryBuilder()
                                 ->from('Plugin\\ProductOption\\Entity\\ProductOption','po')
                                 ->select('po')
                                 ->where('po.Option = :Option')
                                 ->setParameter('Option',\$Option)
                                 ->getQuery()
                                 ->getResult();

            if (count(\$ProductOptions) > 0) {
                foreach(\$ProductOptions as \$ProductOption){
                    \$em->getRepository('Plugin\\ProductOption\\Entity\\ProductOption')
                                ->delete(\$ProductOption);
                }
            }

            \$sort_no = \$Option->getSortNo();
            \$em->createQueryBuilder()
                    ->update('Plugin\\ProductOption\\Entity\\Option', 'o')
                    ->set('o.sort_no', 'o.sort_no - 1')
                    ->where('o.sort_no > :sort_no')->setParameter('sort_no', \$sort_no)
                    ->getQuery()
                    ->execute();

            \$em->remove(\$Option);
            \$em->flush();
        } catch (\\Exception \$e) {
            return false;
        }

        return true;
    }

}
", "ProductOption/Repository/OptionRepository.php", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Repository/OptionRepository.php");
    }
}
