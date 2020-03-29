<?php

namespace Controller\Post;

use function Framework\response;

if (!function_exists("show")) {
	function show() {
		return response(["text" => "show post", "status" => 200]);
	}
}
