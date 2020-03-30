<?php

namespace Horizon\Assertion;

if (!function_exists("equal")) {
	function equal($actual, $expected): void {
		assert($actual == $expected, "expected $actual to be equal to $expected");
	}
}
