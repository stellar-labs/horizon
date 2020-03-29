<?php

namespace Controller\Post;

use function Framework\response;

if (!function_exists("index")) {
	function index(){ 
		return response(["text" => "post index", "status" => 200]);
	}
}


