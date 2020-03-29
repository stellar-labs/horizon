<?php

namespace Framework;

use function Framework\listDirectoryRecursive;

if (!function_exists("import")) {
	function import() {
		$files = listDirectoryRecursive(__DIR__ . "/../pages");
		
		foreach ($files as $file) {
			require_once $file;
		}
	}
}
