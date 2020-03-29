<?php

namespace Controller\Post;

use function Horizon\view;

if (!function_exists("show")) {
	function show() {
		return view("post.show");
	}
}
