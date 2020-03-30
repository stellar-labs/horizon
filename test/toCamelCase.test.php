<?php

use function Horizon\Assertion\strictlyEqual;
use function Horizon\toCamelCase;

function itShouldReturnAnEmptyString(): void {
	strictlyEqual("", toCamelCase(""));
}

function itShouldReturnTheSameString(): void {
	strictlyEqual("foo", toCamelCase("foo"));
}

function itShouldTurnSnakeCase(): void {
	strictlyEqual("fooBar", toCamelCase("foo_bar"));
}

function itShouldTurnUppercasedSnakeCase(): void {
	strictlyEqual("fooBar", toCamelCase("FOO_BAR"));
}

itShouldReturnAnEmptyString();
itShouldReturnTheSameString();
itShouldTurnSnakeCase();
itShouldTurnUppercasedSnakeCase();
