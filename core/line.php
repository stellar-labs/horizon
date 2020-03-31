<?php

namespace Horizon;

checkFunctionDoNotExist("line");

function line($content): void {
	echo $content . PHP_EOL;
}
