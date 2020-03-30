<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("isTrue");

function isTrue($actual): void {
	assert($actual == true, "expected $actual to be true");
}
