<?php

namespace ReverseAuction\ReverseAuctionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * BidsInfoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BidsInfoRepository extends EntityRepository
{
    
     public function findbidWinnerQuery($productId) {
              return $this->getEntityManager()
                        ->createQuery("SELECT w FROM ReverseAuctionReverseAuctionBundle:BidsInfo w where w.ProductInfo = $productId GROUP BY w.bAmount HAVING COUNT(w) = 1")
                        ->setMaxResults(1)     
                        ->getResult() 
                     
                ;
    }
}
