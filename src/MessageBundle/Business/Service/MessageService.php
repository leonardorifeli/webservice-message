<?php

namespace MessageBundle\Business\Service;

use MessageBundle\Business\DependencyInjection\MessageServiceInterface;

class MessageService implements MessageServiceInterface
{
	
	private $em;

	public function __construct(EntityManager $em) 
	{
		$this->em = $em;
	}
	
}