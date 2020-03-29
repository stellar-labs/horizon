<?php

namespace Command;

use Exception;
use function Horizon\listDirectoryRecursive;

if (!function_exists("test")) {
	function test() {
		
		assert_options(ASSERT_ACTIVE, true);
		assert_options(ASSERT_WARNING,  false);
		assert_options(ASSERT_CALLBACK, function($file, $line, $code, $message = null) {
			throw new Exception("assertion failed on file $file in line $line: $message");	
		});

		$files = listDirectoryRecursive(__DIR__ . "/../test");
		
		foreach ($files as $file) {
			include_once $file;
		}
	}
}
