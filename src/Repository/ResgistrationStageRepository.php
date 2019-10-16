<?php

namespace App\Repository;

use App\Entity\ResgistrationStage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ResgistrationStage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResgistrationStage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResgistrationStage[]    findAll()
 * @method ResgistrationStage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResgistrationStageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResgistrationStage::class);
    }

    // /**
    //  * @return ResgistrationStage[] Returns an array of ResgistrationStage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResgistrationStage
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
