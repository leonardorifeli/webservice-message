<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SendMessageController extends Controller
{

	private $apiMessageService;
	private $accessTokenSecurityService;

	private function getApiMessageService()
	{
		if($this->apiMessageService) return $this->apiMessageService;

		$this->apiMessageService = $this->get('api.message.service');

		return $this->apiMessageService;
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

    		$response = $this->getApiMessageService()->create($request->get('data'), $token->getId());

    		if($request) {
    			$dataResponse = json_encode([
	    			'status' => 'success', 
	    			'message' => 'Added message'. $response->getMessage(),
	    			'hasError' => false
	    		]);

	    		$response = $this->getResponse($dataResponse);
    		}

    	} catch (\Exception $e) {
    		$dataResponse = json_encode([
    			'status' => 'error', 
    			'message' => $e->getMessage(),
    			'hasError' => true
    		]);

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
