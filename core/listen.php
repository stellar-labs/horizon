<?php

namespace Framework;

use function Framework\response;

if (!\function_exists("listen")) {
	function listen(array $routes) {
		$method = $_SERVER["REQUEST_METHOD"];
		$url = $_SERVER["REQUEST_URI"];

		foreach ($routes as $route) {
			if ($route["route"] === $url) {
				if ($method !== $route["method"]) {
					return response(["text" => "405: method not allowed", "status" => 405]);
				}

				return $route["callback"]();
			}
		}
	}
}
