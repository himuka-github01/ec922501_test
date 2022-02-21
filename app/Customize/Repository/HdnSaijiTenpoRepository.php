<?php

namespace Customize\Repository;

use Customize\Entity\HdnSaijiTenpo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HdnSaijiTenpo[]    findAll()
 * @method HdnSaijiTenpo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HdnSaijiTenpoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HdnSaijiTenpo::class);
    }

    ///**
    //* @return HdnSaijiTenpo[] Returns an array of HdnSaijiTenpo objects
    //*/
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

/*    
    public function findBySaiji($value): ?HdnSaijiTenpo
    {
        return $this->createQueryBuilder('h')
            ->addSelect('tp')
            ->leftJoin('h.Tenpo', 'tp')
            ->andWhere('h.saiji_id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }
*/
}
