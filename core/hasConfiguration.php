<?php

namespace Horizon;

checkFunctionDoNotExist("hasConfiguration");

function hasConfiguration(string $key) {
	$keys = explode(".", $key);
	$numberOfKeys = count($keys);
	$configurationFileName = $keys[0];
	$path = __DIR__ . "/../configuration/$configurationFileName.php";
	
	if (!file_exists($path)) {
		return false;	
	}

	$value = require($path);

	for ($i = 1; $i < $numberOfKeys; $i++) {
		$keyName = $keys[$i];

		if (!isset($value[$keyName])) {
			return false;
		}
	}

	return true;
}
