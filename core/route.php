<?php

namespace Framework;

if (!function_exists("route")) {
	function route(array $parameters): array {
		return $parameters;
	}
}
