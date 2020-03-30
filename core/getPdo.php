<?php

namespace Horizon;

use PDO;
use InvalidArgumentException;
use function Horizon\configuration;

if (!\function_exists("getPdo")) {
	function getPdo(): PDO {
		$driver = configuration("database.driver");
		$timeout = configuration("database.timeout");
		$pdo = null;

		if ($driver === "sqlite") {
			$database = configuration("database.database");
			$pdo = new PDO("sqlite:$database", null, null, [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_TIMEOUT => $timeout,
			]);
		} else {
			throw new InvalidArgumentException("database driver $driver not supported");
		}

		return $pdo;
	}
}
