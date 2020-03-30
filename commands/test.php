<?php

namespace Command;

use Exception;
use function Horizon\endsWith;
use function Horizon\checkFunctionDoNotExist;
use function Horizon\listDirectoryRecursive;

checkFunctionDoNotExist("test");

function test() {
	$GLOBALS["numberOfFailures"] = 0;
	$totalDuration = 0;

	assert_options(ASSERT_ACTIVE, true);
	assert_options(ASSERT_WARNING,  false);
	assert_options(ASSERT_CALLBACK, function($file, $line, $code, $message = null) {
		$GLOBALS["numberOfFailures"]++;

		echo $message . PHP_EOL;
	});

	$files = array_filter(listDirectoryRecursive(__DIR__ . "/../test"), function($path) {
		return endsWith($path, ".test.php");
	});
	
	foreach ($files as $file) {
		$start = microtime(true);
		
		include_once $file;

		$totalDuration += microtime(true) - $start;
	}

	$totalDuration = round($totalDuration, 4);

	echo "number of failures: {$GLOBALS["numberOfFailures"]}, duration: $totalDuration ms." . PHP_EOL;

	if ($GLOBALS["numberOfFailures"] > 0) {
		exit(1);
	}
}
