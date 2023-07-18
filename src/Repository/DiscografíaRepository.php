<?php

namespace App\Repository;

use App\Entity\Discografía;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Discografía>
 *
 * @method Discografía|null find($id, $lockMode = null, $lockVersion = null)
 * @method Discografía|null findOneBy(array $criteria, array $orderBy = null)
 * @method Discografía[]    findAll()
 * @method Discografía[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DiscografíaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Discografía::class);
    }

//    /**
//     * @return Discografía[] Returns an array of Discografía objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Discografía
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
