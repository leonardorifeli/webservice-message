<?php

namespace MessageBundle\Business\DependencyInjection;

use Doctrine\ORM\EntityManager;

implements MessageServiceInterface 
{

	public function __construct(EntityManager $em);
	
}