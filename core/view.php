<?php

namespace Horizon;

use function Horizon\response;

if (!\function_exists("view")) {
	function view(string $path) {
		$folderName = configuration("view.folder");
		$filePath = str_replace(".", DIRECTORY_SEPARATOR, $path);
		$file = __DIR__ . "/../$folderName/$filePath.php";

		if (!file_exists($file)) {
			throw new Exception("You used the view function with $path, but this view is not found");
		}

		return response(["text" => file_get_contents($file), "status" => 200]);
	}
}
