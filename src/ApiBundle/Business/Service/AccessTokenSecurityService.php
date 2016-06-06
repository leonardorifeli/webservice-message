<?php

namespace ApiBundle\Business\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\HeaderBag;

class AccessTokenSecurityService
{
	
	private $em;

	public function __construct(EntityManager $em) 
	{
		$this->em = $em;
	}

	private function getRepository()
	{
		return $this->em->getRepository('ApiBundle:AccessToken');
	}
	
	public function validateRequestAccessToken(HeaderBag $headerBag)
	{
		$requestToken = $headerBag->get('token');
		if(!$requestToken) throw new \Exception("Access Token uninformed. Please, check.", 1);

		var_dump($this->getRepository());
		die;
		$token = $this->getAccessTokenByToken($requestToken);

		return $token;
	}

	private function getAccessTokenByToken($token)
	{
		$token = $this->getRepository()->findOneBy(['token' => $token]);
		if(!$token) throw new \Exception("Invalid Access Token", 1);

		return $token;
	}
}