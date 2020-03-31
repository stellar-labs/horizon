<?php

use function Command\lint;
use function Command\test;
use function Command\serve;
use function Horizon\route;
use function Horizon\listen;

listen([
	route([
		"route" => "serve",
		"callback" => fn() => serve(),
	]),
	route([
		"route" => "test",
		"callback" => fn() => test(),
	]),
	route([
		"route" => "lint",
		"callback" => fn () => lint(),
	]),
]);
