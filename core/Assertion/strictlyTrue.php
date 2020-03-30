<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("strictlyTrue");

function strictlyTrue($actual): void {
	assert($actual === true, "expected $actual to be strictly true");
}
