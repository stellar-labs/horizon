<?php

namespace Horizon;

use InvalidArgumentException;

if (!function_exists("configuration")) {
	function configuration(string $path) {
		$keys = explode(".", $path);
		$numberOfKeys = count($keys);
		$configurationFileName = $keys[0];
		$path = __DIR__ . "/../configuration/$configurationFileName.php";
		
		if (!file_exists($path)) {
			throw new InvalidArgumentException("You used the function configuration with the key $path, but the file $configurationFileName does not exists");
		}

		$value = require($path);

		for ($i = 1; $i < $numberOfKeys; $i++) {
			$keyName = $keys[$i];

			if (!isset($value[$keyName])) {
				throw new InvalidArgumentException("You used the function configuration with the key $path, but the key $keyName does not exists");
			}

			$value = $value[$keyName];
		}

		return $value;
	}
}
