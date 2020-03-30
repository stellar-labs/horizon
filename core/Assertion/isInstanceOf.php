<?php

namespace Horizon\Assertion;

use function Horizon\dd;

if (function_exists("isInstanceOf")) {
	throw new Exception("function instanceOf already exist");
}

function isInstanceOf($actual, $instance): void {
	$className = get_class($actual);

	assert($actual instanceof $instance, "expected $className to be an instance of $instance");
}
