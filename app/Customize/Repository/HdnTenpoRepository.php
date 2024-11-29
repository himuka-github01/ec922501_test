<?php

namespace Customize\Repository;

use Customize\Entity\HdnTenpo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HdnTenpo|null find($id, $lockMode = null, $lockVersion = null)
 * @method HdnTenpo|null findOneBy(array $criteria, array $orderBy = null)
 * @method HdnTenpo[]    findAll()
 * @method HdnTenpo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HdnTenpoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HdnTenpo::class);
    }

    /**
     * 店舗の一覧を取得します.
     *
     * @param string $TenpoCd 指定しない場合は、すべての店舗を対象に取得します.
     *
     * @return array 店舗の配列
     */
    public function getList($TenpoCd = null)
    {
        $qb = $this->createQueryBuilder('ht')
            ->orderBy('ht.sort_no', 'DESC');
        if ($TenpoCd) {
            $qb->where('ht.tenpo_cd = :TenpoCd')->setParameter('TenpoCd', $TenpoCd);
        }
        $HdnTenpos = $qb->getQuery()
            ->getResult();

        return $HdnTenpos;
    }

    public function findBySaiji($value)
    {
        return $this->createQueryBuilder('tp')
            ->leftJoin('tp.SaijiTenpos', 'st')
            ->andWhere('st.saiji_id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
        ;
    }
    //追加検索方法　店鋪名取得 田中　2024/09/10
    public function findByTenpoName($value)
    {
        return $this->createQueryBuilder('tn')
        //->leftJoin('tn.','') //必要であれば関連するEntityを追加
        ->Where('tn.tenpoName= :tenpoName')
        ->setParameter('tenpoName', $value)
        ->getQuery()
        ->getResult()
        ;
    }

    // /**
    //  * @return HdnTenpo[] Returns an array of HdnTenpo objects
    //  */
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
    public function findOneBySomeField($value): ?HdnTenpo
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
