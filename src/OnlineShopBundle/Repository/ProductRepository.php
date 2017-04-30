<?php

namespace OnlineShopBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAvailable()
    {
        $qb = $this->createQueryBuilder('a');
        $qb->select('a')
            ->where($qb->expr()->neq('a.quantity', 0));

        return $qb->getQuery()->getResult();
    }
    
}
