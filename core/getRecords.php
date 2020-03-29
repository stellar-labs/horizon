<?php

namespace Horizon;

use function Horizon\getPdo;

if (!\function_exists("getRecords")) {
	function getRecords(string $table): array {
		$pdo = getPdo();
		$statement = $pdo->prepare("SELECT * FROM $table");
		$success = $statement->execute();

		if ($success === false) {
			throw new PDOException($statement->errorInfo()[2]);
		}

		return $statement->fetchAll();
	}
}
