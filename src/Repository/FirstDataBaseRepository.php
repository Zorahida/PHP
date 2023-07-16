<?php

namespace App\Repository;

use App\Entity\FirstDataBase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FirstDataBase>
 *
 * @method FirstDataBase|null find($id, $lockMode = null, $lockVersion = null)
 * @method FirstDataBase|null findOneBy(array $criteria, array $orderBy = null)
 * @method FirstDataBase[]    findAll()
 * @method FirstDataBase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FirstDataBaseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FirstDataBase::class);
    }

//    /**
//     * @return FirstDataBase[] Returns an array of FirstDataBase objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FirstDataBase
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
