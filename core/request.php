<?php

namespace Framework;

use stdClass;
use Framework\dd;
use Framework\toCamelCase;

if (!function_exists("request")) {
	function request(): stdClass {
		$request = new stdClass;

		if (\php_sapi_name() === "cli") {
			global $argv;

			$arguments = array_slice($argv, 2);
			$numberOfArguments = count($arguments);

			for ($i = 0; $i < $numberOfArguments; $i++) {
				$argument = $arguments[$i];

				if (substr($argument, 0, 2) === "--") {
					$argumentName = substr($argument, 2);
					
					if (isset($arguments[$i + 1])) {
						$nextArgument = $arguments[$i + 1];
						$request->$argumentName = $nextArgument;
					} else {
						$request->$argumentName = true;
					}
				}
			}
		} else {
			foreach ($GLOBALS as $group => $values) {
				$groupName = substr(\strtolower($group), 1);
				$data = new stdClass;
	
				foreach ($values as $key => $value) {
					$key = toCamelCase($key);
	
					$data->$key = $value;
				}
	
				$request->$groupName = $data;
			}
		}

		return $request;
	}
}
