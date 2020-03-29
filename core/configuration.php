<?php

namespace Horizon;

if (!function_exists("configuration")) {
	function configuration(string $path) {
		$keys = explode(".", $path);
		$numberOfKeys = count($keys);
		$configurationFileName = $keys[0];
		$value = require(__DIR__ . "/../configuration/$configurationFileName.php");

		for ($i = 1; $i < $numberOfKeys; $i++) {
			$keyName = $keys[$i];

			if (!isset($keyName)) {
				throw new InvalidArgumentException("You used the function configuration with the key $path, but the key $keyName does not exists");
			}

			$value = $value[$keyName];
		}

		return $value;
	}
}
