<?php

namespace Horizon\Assertion;

if (!function_exists("strictlyFalse")) {
	function strictlyFalse($actual): void {
		assert($actual === false, "expected $actual to be strictly false");
	}
}