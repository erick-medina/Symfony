<?php

namespace App\Repository;

use App\Entity\ShowMyName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ShowMyName|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShowMyName|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShowMyName[]    findAll()
 * @method ShowMyName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShowMyNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShowMyName::class);
    }

    // /**
    //  * @return ShowMyName[] Returns an array of ShowMyName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ShowMyName
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
