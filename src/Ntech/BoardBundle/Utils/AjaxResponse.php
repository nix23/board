<?php
namespace Ntech\BoardBundle\Utils;

use Symfony\Component\HttpFoundation\JsonResponse;

class AjaxResponse
{
	private $result;
	private $errors;
	private $callback;
	private $data;

	public function __construct()
	{
		$this->result = "errors";
		$this->errors = array();
		$this->callback = "none";
		$this->data = array();
	}

	public function setSuccessfulResult()
	{
		$this->result = "ok";
	}

	public function setError($errorName, $errorText)
	{
		$this->errors[$errorName] = $errorText;
	}

	public function setCallback($jsFunctionName)
	{
		$this->callback = $jsFunctionName;
	}

	public function setData($key, $value)
	{
		$this->data[$key] = $value;
	}

	public function getResponse()
	{
		$response = new JsonResponse();
		$response->setData(array(
			"result"   => $this->result,
			"errors"   => $this->errors,
			"callback" => $this->callback,
			"data"     => $this->data
		));

		return $response;
	}
}