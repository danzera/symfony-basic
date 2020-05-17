<?php

namespace App\Repository;

use App\Entity\VictoriusKangaroo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method VictoriusKangaroo|null find($id, $lockMode = null, $lockVersion = null)
 * @method VictoriusKangaroo|null findOneBy(array $criteria, array $orderBy = null)
 * @method VictoriusKangaroo[]    findAll()
 * @method VictoriusKangaroo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VictoriusKangarooRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VictoriusKangaroo::class);
    }

    // /**
    //  * @return VictoriusKangaroo[] Returns an array of VictoriusKangaroo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VictoriusKangaroo
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
