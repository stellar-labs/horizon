<?php

namespace Horizon;

use InvalidArgumentException;
use function Horizon\response;
use function Horizon\dd;

if (!\function_exists("listen")) {
	function listen(array $routes) {
		if (\php_sapi_name() === "cli") {
			global $argv;
			global $argc;

			if ($argc < 2) {
				throw new InvalidArgumentException("Running php run requires at least one argument");
			}

			$inputRoute = $argv[1];
			$arguments = array_slice($argv, 2);

			foreach ($routes as $route) {
				if ($route["route"] === $inputRoute) {
					return $route["callback"]($arguments);
				}
			}

			throw new InvalidArgumentException("You ran php run $inputRoute, but there is not command matching it");
		} else {
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
}
