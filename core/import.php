<?php

namespace Horizon;

use function Horizon\listDirectoryRecursive;

if (!function_exists("import")) {
	function import() {
		$files = listDirectoryRecursive(__DIR__ . "/../pages");
		
		foreach ($files as $file) {
			require_once $file;
		}

		$files = listDirectoryRecursive(__DIR__ . "/../commands");
		
		foreach ($files as $file) {
			require_once $file;
		}
	}
}
