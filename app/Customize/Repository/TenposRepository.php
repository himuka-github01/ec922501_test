<?php

namespace Customize\Repository;

use Customize\Entity\Tenpos;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * 店鋪一覧テーブルリポジトリ
 */
class TenposRepository extends AbstractRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tenpos::class);
    }  
 }