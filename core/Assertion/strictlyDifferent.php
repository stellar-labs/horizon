<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("strictlyDifferent");

function strictlyDifferent($actual, $expected): void {
	assert($actual !== $expected, "expected $actual to be strictly different than $expected");
}