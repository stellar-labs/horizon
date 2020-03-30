<?php

namespace Horizon;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("toCamelCase");

function toCamelCase(string $string): string {
	$upperCase = strtolower($string);
	$words = explode("_", $upperCase);
	$output = $words[0];
	$numberOfWords = count($words);

	for ($i = 1; $i < $numberOfWords; $i++) {
		$output .= ucfirst($words[$i]);
	}

	return $output;
}
