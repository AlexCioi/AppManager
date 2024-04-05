<?php

namespace App\Repository;

use App\Entity\EndpointSettings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EndpointSettings>
 *
 * @method EndpointSettings|null find($id, $lockMode = null, $lockVersion = null)
 * @method EndpointSettings|null findOneBy(array $criteria, array $orderBy = null)
 * @method EndpointSettings[]    findAll()
 * @method EndpointSettings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EndpointSettingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EndpointSettings::class);
    }

    //    /**
    //     * @return EndpointSettings[] Returns an array of EndpointSettings objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?EndpointSettings
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
