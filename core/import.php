<?php

namespace Horizon;

use function Horizon\configuration;
use function Horizon\checkFunctionDoNotExist;
use function Horizon\listDirectoryRecursive;

checkFunctionDoNotExist("import");

function import() {
	$controllerFolderName = configuration("controller.folder");
	$commandFolderName = configuration("command.folder");
	$files = listDirectoryRecursive(__DIR__ . "/../$controllerFolderName");

	foreach ($files as $file) {
		require_once $file;
	}

	$files = listDirectoryRecursive(__DIR__ . "/../$commandFolderName");
	
	foreach ($files as $file) {
		require_once $file;
	}
}
