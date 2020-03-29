<?php

namespace Controller\Post;

use function Horizon\view;
use function Horizon\request;
use function Horizon\dd;

if (!function_exists("index")) {
	function index(){
		$request = request();
		$method = $request->server->requestMethod;

		return view("post.index");
	}
}
