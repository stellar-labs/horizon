<?php

namespace Horizon\Assertion;

use Exception;
use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("throws");

function throws(callable $function): void {
	try {
		$function();

		assert(false, "expect function to throw an exception");
	} catch (Exception $exception) {}
}
