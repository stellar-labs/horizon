<?php

namespace Horizon\Assertion;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("dontThrows");

function dontThrows(callable $function): void {
	try {
		$function();
	} catch (Exception $exception) {
		assert(false, "expected function to not throw but got {$exception->getMessage()}");
	}
}
