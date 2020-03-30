<?php

namespace Horizon\Assertion;

use Exception;

if (!function_exists("throws")) {
	function throws(callable $function): void {
		try {
			$function();

			assert(false, "expect function to throw an exception");
		} catch (Exception $exception) {}
	}
}
