<?php

namespace Controller\Post;

use function Framework\response;
use function Framework\request;
use function Framework\dd;

if (!function_exists("index")) {
	function index(){
		$request = request();
		$method = $request->server->requestMethod;

		return response(["text" => "post index in method $method", "status" => 200]);
	}
}
