<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("different");

function different($actual, $expected): void {
	assert($actual != $expected, "expected $actual to be different than $expected");
}
