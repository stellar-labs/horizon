<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("equal");

function equal($actual, $expected): void {
	assert($actual == $expected, "expected $actual to be equal to $expected");
}
