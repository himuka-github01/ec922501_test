<?php

namespace Customize\Repository;

use Customize\Entity\Recieve;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * 受け取り方法テーブルリポジトリ
 */
class RecieveRepository extends AbstractRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Recieve::class);
    }  
 }
