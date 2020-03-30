<?php

namespace Horizon\Assertion;

if (!function_exists("different")) {
	function different($actual, $expected): void {
		assert($actual != $expected, "expected $actual to be different than $expected");
	}
}
