<?php

namespace Framework;

use stdClass;
use Framework\dd;
use Framework\toCamelCase;

if (!function_exists("request")) {
	function request(): stdClass {
		$request = new stdClass;

		foreach ($GLOBALS as $group => $values) {
			$groupName = substr(\strtolower($group), 1);
			$data = new stdClass;

			foreach ($values as $key => $value) {
				$key = toCamelCase($key);

				$data->$key = $value;
			}

			$request->$groupName = $data;
		}

		return $request;
	}
}
