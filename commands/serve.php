<?php

namespace Command;

use function Framework\dd;
use function Framework\request;

if (!function_exists("serve")) {
	function serve() {
		$port = 8000;
		$request = request();

		if (property_exists($request, "port") && is_numeric($request->port)) {
			$port = (int) $request->port;
		}

		exec("php -S localhost:$port -t public");
	}
}
