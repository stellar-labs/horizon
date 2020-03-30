<?php

namespace Horizon\Assertion;

if (!function_exists("isFalse")) {
	function isFalse($actual): void {
		assert($actual == false, "expected $actual to be false");
	}
}
