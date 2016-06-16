<?php

namespace MessageBundle\Business\Service;

use MessageBundle\Business\DependencyInjection\MessageServiceInterface;
use Doctrine\ORM\EntityManager;
use MessageBundle\Entity\Message;

class MessageService implements MessageServiceInterface
{
	
	private $em;

	public function __construct(EntityManager $em) 
	{
		$this->em = $em;
	}

	private function getRepository()
	{
		return $this->em->getRepository('MessageBundle:Message');
	}
	
	public function create($data)
	{
		$message = $this->getInstance($data);

		$this->persist($message);

		return $message;
	}

	private function persist(&$entity)
	{
		$this->em->persist($entity);
		$this->em->flush();
	}

	public function get($id)
	{
		$message = $this->getRepository()->find($id);
		return $message;
	}

	public function delete($id)
	{
		$message = $this->getRepository()->find($id);

		$this->remove($message);

		return $message;
	}

	private function remove(&$entity)
	{
		$this->em->remove($entity);
		$this->em->flush();
	}

	public function getAllByToken($token)
	{
		$messages = $this->getRepository()->findBy([
			'token' => $token
		]);

		return $messages;
	}

	private function getInstance($data)
	{
		if(!$data) return null;

		$message = new Message;
		$message->setMessage($data->message);
		$message->setToken($data->token);

		$date = new \DateTime;
		$message->setCreatedAt($date);
		$message->setUpdatedAt($date);

		return $message;
	}
}