<?php

use function Horizon\listen;
use function Horizon\route;
use function Command\serve;
use function Command\test;

listen([
	route([
		"route" => "serve",
		"callback" => fn() => serve(),
	]),
	route([
		"route" => "test",
		"callback" => fn() => test(),
	]),
]);
