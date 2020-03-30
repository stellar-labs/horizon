<?php

use function Horizon\checkFunctionDoNotExist;
use function Horizon\Assertion\{dontThrows, throws};

function itShouldNotThrowIfFunctionIsNew(): void {
	dontThrows(function() {
		checkFunctionDoNotExist("foo");
	});
}

function itShouldThrowIfFunctionAlreadyExist(): void {
	function foo() {}

	throws(function() {
		checkFunctionDoNotExist("foo");
	});
}

itShouldNotThrowIfFunctionIsNew();
itShouldThrowIfFunctionAlreadyExist();
