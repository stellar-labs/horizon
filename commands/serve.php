<?php

namespace Command;

use function Horizon\dd;
use function Horizon\request;
use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("serve");

function serve() {
	$port = 8000;
	$request = request();

	if (property_exists($request, "port") && is_numeric($request->port)) {
		$port = (int) $request->port;
	}

	exec("php -S localhost:$port -t public");
}
