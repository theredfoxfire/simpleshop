<?php

namespace Ss\SsBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PesananRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PesananRepository extends EntityRepository
{
	public function getPesanan($p)
	{
		$query = $this->createQueryBuilder('c')
		 ->select('c')
		 ->where('c.orderers = :p')
		 ->setParameter('p', $p)
		 ;
		 
		return $query->getQuery()->getResult();
	}
}
