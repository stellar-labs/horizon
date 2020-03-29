<?php

use function Framework\listen;
use function Framework\route;
use function Command\serve;

listen([
	route([
		"route" => "serve",
		"callback" => fn() => serve(),
	]),
]);
