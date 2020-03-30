<?php

namespace Controller\Post;

use function Horizon\dd;
use function Horizon\view;
use function Horizon\request;
use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("index");

function index(){
	$request = request();
	$method = $request->server->requestMethod;

	return view("post.index");
}
