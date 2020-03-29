<?php

namespace Controller\Post;

use function Horizon\response;
use function Horizon\request;
use function Horizon\dd;

if (!function_exists("index")) {
	function index(){
		$request = request();
		$method = $request->server->requestMethod;

		return response(["text" => "post index in method $method", "status" => 200]);
	}
}
