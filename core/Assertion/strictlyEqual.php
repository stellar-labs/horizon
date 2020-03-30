<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("strictlyEqual");

function strictlyEqual($actual, $expected): void {
	assert($actual === $expected, "expected $actual to be strictly equal to $expected");
}
