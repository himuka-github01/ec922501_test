<?php

namespace Customize\Repository;

use Customize\Entity\Hpref;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * 県情報取得テーブルリポジトリ
 */
class HprefRepository extends AbstractRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Hpref::class);
    }  
 }
