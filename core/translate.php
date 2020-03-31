<?php

namespace Horizon;

use InvalidArgumentException;
use function Horizon\configuration;

checkFunctionDoNotExist("translate");

function translate(string $key): string {
	if (!hasConfiguration("app.lang")) {
		throw new InvalidArgumentException("You used the translate function, but no key lang was found on the file configuration/app.php");
	}

	$lang = configuration("app.lang");
	$file = __DIR__ . "/../translation/$lang.json";

	if (!file_exists($file)) {
		throw new InvalidArgumentException("You use the function translate, but ");
	}

	$translations = json_decode(file_get_contents($file), true);

	return $translations[$key] ?? $key;
}
