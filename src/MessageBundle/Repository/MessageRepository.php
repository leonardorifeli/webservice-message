<?php

namespace MessageBundle\Business\Repository;

use Doctrine\ORM\EntityRepository;

class MessageRepository extends EntityRepository
{

	public function findByPageAndLimitOrderedByMessage($page, $limit, $offset)
	{
		$queryBuilder = $this->createQueryBuilder('m')
		->addOrderBy('m.message', 'ASC')
		->setMaxResult($limit)
		->setFirstResult($offset);

		$entities = $queryBuilder->getQuery()->getResult();

		return $entities;
	}

}
