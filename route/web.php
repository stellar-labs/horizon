<?php

use function Horizon\route;
use function Horizon\response;
use function Horizon\listen;
use function Controller\Post\index;
use function Controller\Post\show;
use function Controller\Employee\index as employeeIndex;

listen([
		route([
			"method" => "GET",
			"route" => "/",
			"callback" => fn() => response(["text" => "hello world", "status" => 200]),
		]),
		route([
			"method" => "GET",
			"route" => "/post",
			"callback" => fn() => index(),
		]),
		route([
			"method" => "GET",
			"route" => "/post/1",
			"callback" => fn() => show(),
		]),
		route([
			"method" => "GET",
			"route" => "/employees",
			"callback" => fn() => employeeIndex(),
		])
	],
);
