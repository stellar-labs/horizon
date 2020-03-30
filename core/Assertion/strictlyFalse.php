<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("strictlyFalse");

function strictlyFalse($actual): void {
	assert($actual === false, "expected $actual to be strictly false");
}
