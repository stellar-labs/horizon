<?php

namespace Horizon\Assertion;

if (!function_exists("isTrue")) {
	function isTrue($actual): void {
		assert($actual == true, "expected $actual to be true");
	}
}
