<?php

namespace Horizon\Assertion;

if (!function_exists("strictlyTrue")) {
	function strictlyTrue($actual): void {
		assert($actual === true, "expected $actual to be strictly true");
	}
}
