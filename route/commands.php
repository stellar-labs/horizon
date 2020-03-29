<?php

use function Horizon\listen;
use function Horizon\route;
use function Command\serve;

listen([
	route([
		"route" => "serve",
		"callback" => fn() => serve(),
	]),
]);
