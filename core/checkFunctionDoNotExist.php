<?php

namespace Horizon;

use Exception;

if (function_exists("checkFunctionDoNotExist")) {
	throw new Exception("the checkFunctionDoNotExist function has already been defined.");
}

function checkFunctionDoNotExist(string $functionName): void {
	if (function_exists($functionName)) {
		throw new Exception("the $functionName function has already been defined.");
	}
}
