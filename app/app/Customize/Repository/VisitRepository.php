<?php

namespace Customize\Repository;

use Customize\Entity\Visit;
use Eccube\Repository\AbstractRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * 店頭受取時間テーブルリポジトリ
 */
class VisitRepository extends AbstractRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Visit::class);
    }  
 }