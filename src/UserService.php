<?php

namespace Microservices;

use Microservices\User;
use Illuminate\Support\Facades\Http;

class UserService{

	private $endpoint;

	public function __construct()
	{
		$this->endpoint = env('USER_SERVICE_URL');
	}
	
	public function headers()
	{
		$headers = [];
        if($jwt = request()->cookie('jwt')){
            $headers['Authorization'] = "Bearer {$jwt}";
        }

		if(request()->headers->get('Authorization')){
			$headers['Authorization'] = request()->headers->get('Authorization');
		}

		return $headers;
	}

	public function request()
	{
		return Http::withHeaders($this->headers());
	}

	public function getUser(): User
	{
        $json = $this->request()->get($this->endpoint."/user")->json();

		return new User($json);
	}
}