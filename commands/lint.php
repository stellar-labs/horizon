<?php

namespace Command;

use function Horizon\line;
use function Horizon\listDirectoryRecursive;
use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("lint");

function lint(): void {
	$files = [
		...listDirectoryRecursive(__DIR__ . "/../commands"),
		...listDirectoryRecursive(__DIR__ . "/../configuration"),
		...listDirectoryRecursive(__DIR__ . "/../controller"),
		...listDirectoryRecursive(__DIR__ . "/../pages"),
		...listDirectoryRecursive(__DIR__ . "/../route"),
		...listDirectoryRecursive(__DIR__ . "/../test"),
		...listDirectoryRecursive(__DIR__ . "/../view"),
	];

	$numberOfFiles = count($files);

	foreach ($files as $index => $file) {
		exec("php -l $file");

		$index++;
		$fileName = pathinfo($file, PATHINFO_FILENAME) . "." . pathinfo($file, PATHINFO_EXTENSION);

		line("linted $fileName ({$index} on {$numberOfFiles})");
	}
}
