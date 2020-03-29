<?php

use function Horizon\expectStrictlyEqual;
use function Horizon\toCamelCase;

function itShouldReturnAnEmptyString(): void {
	expectStrictlyEqual("", toCamelCase(""));
}

function itShouldReturnTheSameString(): void {
	expectStrictlyEqual("foo", toCamelCase("foo"));
}

function itShouldTurnSnakeCase(): void {
	expectStrictlyEqual("fooBar", toCamelCase("foo_bar"));
}

function itShouldTurnUppercasedSnakeCase(): void {
	expectStrictlyEqual("fooBar", toCamelCase("FOO_BAR"));
}

itShouldReturnAnEmptyString();
itShouldReturnTheSameString();
itShouldTurnSnakeCase();
itShouldTurnUppercasedSnakeCase();
