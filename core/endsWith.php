<?php

namespace Horizon;

if (!function_exists("endsWith")) {
	function endsWith(string $string, string $end): bool {
		return strlen($end) === 0 ? true : substr($string, -strlen($end)) === $end;
	}
}
