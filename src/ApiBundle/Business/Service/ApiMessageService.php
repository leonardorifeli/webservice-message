<?php

namespace ApiBundle\Business\Service;

use MessageBundle\Business\DependencyInjection\MessageServiceInterface;

class ApiMessageService
{
	
	private $messageService;

	public function __construct(MessageServiceInterface $messageService)
	{
		$this->messageService = $messageService;
	}

}