<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("isFalse");

function isFalse($actual): void {
	assert($actual == false, "expected $actual to be false");
}
