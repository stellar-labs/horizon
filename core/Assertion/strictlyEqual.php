<?php

namespace Horizon\Assertion;

if (!function_exists("strictlyEqual")) {
	function strictlyEqual($actual, $expected): void {
		assert($actual === $expected, "expected $actual to be strictly equal to $expected");
	}
}
