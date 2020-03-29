<?php

namespace Horizon;

if (!function_exists("expectStrictlyEqual")) {
	function expectStrictlyEqual($expected, $actual): void {
		assert($expected === $actual, "expected $expected to be strictly equal to $actual");
	}
}
