<?php

use function Horizon\endsWith;
use function Horizon\Assertion\{isTrue, isFalse};

function itShouldReturnTrueForEmptyStrings(): void {
	isTrue(endsWith("foo", ""));
}

function itShouldReturnTrueIfStringEndsWithString(): void {
	isTrue(endsWith("configuration.php", ".php"));
}

function itShouldReturnFalseIfStringDoesNotEndsWithString(): void {
	isFalse(endsWith("configuration.php", ".js"));
}

itShouldReturnTrueForEmptyStrings();
itShouldReturnTrueIfStringEndsWithString();
itShouldReturnFalseIfStringDoesNotEndsWithString();
