<?php

namespace Framework;

if (!function_exists("dd")) {
	function dd($mixed) {
		if (\php_sapi_name() !== "cli") {
			echo "<pre>";
		}

		print_r($mixed);

		if (\php_sapi_name() !== "cli") {
			echo "</pre>";
		}

		die(1);
	}
}