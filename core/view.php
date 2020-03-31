<?php

namespace Horizon;

use function Horizon\response;

if (!\function_exists("view")) {
	function view(string $path, $parameters) {
		$folderName = configuration("view.folder");
		$filePath = str_replace(".", DIRECTORY_SEPARATOR, $path);
		$file = __DIR__ . "/../$folderName/$filePath.php";

		if (!file_exists($file)) {
			throw new Exception("You used the view function with $path, but this view is not found");
		}

		foreach ($parameters as $key => $value) {
			$$key = $value;
		}

		ob_start();

		include $file;

		$content = ob_get_clean();

		return response(["text" => $content, "status" => 200]);
	}
}
