<?php

use function Horizon\view;
use function Horizon\route;
use function Horizon\listen;

listen([
		route([
			"method" => "GET",
			"route" => "/",
			"callback" => fn() => view("index", [
				"menus" => [
					[
						"text" => "Documentation",
						"href" => "https://github.com/stellar-labs/horizon"
					],
					[
						"text" => "Support",
						"href" => "https://github.com/stellar-labs/horizon/issues",
					],
				],
			]),
		]),
	],
);
