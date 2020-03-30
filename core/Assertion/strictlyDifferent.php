<?php

namespace Horizon\Assertion;

if (!function_exists("strictlyDifferent")) {
	function strictlyDifferent($actual, $expected): void {
		assert($actual !== $expected, "expected $actual to be strictly different than $expected");
	}
}