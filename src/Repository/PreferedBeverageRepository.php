<?php

namespace App\Repository;

use App\Entity\PreferedBeverage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PreferedBeverage|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreferedBeverage|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreferedBeverage[]    findAll()
 * @method PreferedBeverage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreferedBeverageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PreferedBeverage::class);
    }

    // /**
    //  * @return PreferedBeverage[] Returns an array of PreferedBeverage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PreferedBeverage
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
