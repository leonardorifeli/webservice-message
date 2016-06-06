<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SendMessageController extends Controller
{

	private $messageService;
	private $accessTokenSecurityService;

	private function getMessageService()
	{
		if($this->messageService) return $this->messageService;

		$this->messageService = $this->get('api.message.service');

		return $this->managerService;
	}

	private function getAccessTokenSecurityService()
	{
		if($this->accessTokenSecurityService) return $this->accessTokenSecurityService;

		$this->accessTokenSecurityService = $this->get('api.access.token.security.service');

		return $this->accessTokenSecurityService;
	}

    public function createAction(Request $request)
    {
    	try {
    		$token = $this->getAccessTokenSecurityService()->validateRequestAccessToken($request->headers);
    	} catch (\Exception $e) {
    		$dataResponse = json_encode(['error' => $e->getMessage()]);
    		$response = $this->getResponse($dataResponse);
    	}

		return $response;
    }

    private function getResponse($content)
    {
    	$response = new Response($content);
		$response->headers->set('Content-Type', 'application/json');

		return $response;
    }
}
