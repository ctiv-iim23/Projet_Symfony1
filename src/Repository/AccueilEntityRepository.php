<?php

namespace App\Repository;

use App\Entity\AccueilEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AccueilEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccueilEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccueilEntity[]    findAll()
 * @method AccueilEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccueilEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccueilEntity::class);
    }

    // /**
    //  * @return AccueilEntity[] Returns an array of AccueilEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AccueilEntity
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
