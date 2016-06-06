<?php

namespace MessageBundle\Business\DependencyInjection;

use Doctrine\ORM\EntityManager;

interface MessageServiceInterface 
{

	public function __construct(EntityManager $em);
	
}