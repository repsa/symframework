<?php
namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\EventDispatcher\Event;

calss ResponseEvent extends Event
{
	private $request;
	private $response;

	function __cunstruct(Response $response, Request $request)
	{
		$this->response = $resposne;
		$this->request = $request;		
	}

	function getResponse()
	{
		return $this->response;
	}

	function getRequest()
	{
		return $this->request;
	}
}