<?php

namespace Horizon;

use function Horizon\checkFunctionDoNotExist;

checkFunctionDoNotExist("route");

function route(array $parameters): array {
	return $parameters;
}
