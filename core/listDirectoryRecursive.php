<?php

namespace Horizon;

use function Horizon\dd;

if (!\function_exists("listDirectoryRecursive")) {
	function listDirectoryRecursive(string $directoryPath) {
		$files = array_map(fn ($path) => "$directoryPath/$path", array_diff(scandir($directoryPath), [".", ".."]));
		$paths = [];

		foreach ($files as $file) {
			if (is_dir($file)) {
				$subFiles = listDirectoryRecursive($file);

				foreach ($subFiles as $subFile) {
					$paths[] = $subFile;
				}
			} else {
				$paths[] = $file;
			}
		}

		return $paths;
	}
}
