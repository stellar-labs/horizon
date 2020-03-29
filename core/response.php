<?php

namespace Framework;

if (!\function_exists("response")) {
	function response(array $parameters): void {
		["text" => $text, "status" => $status] = $parameters;
		
		if ($text === null) {
			throw new InvalidArgumentException("The function response expects an array containing a key named text");
		}

		if ($status !== null && !is_int($status)) {
			throw new InvalidArgumentException("The function response expects an array containg a key named status that is an integer");
		}

		\http_response_code($status ?? 200);
		header("Content-Type: text/html");
		echo $text;
	}
}
