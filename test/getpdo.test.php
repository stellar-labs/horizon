<?php

use function Horizon\getPdo;
use function Horizon\Assertion\{isInstanceOf, throws};

function setUp(): void {
	rename(__DIR__ . "/../configuration/database.php", __DIR__ . "/../configuration/database.old.php");
}

function tearDown(): void {
	rename(__DIR__ . "/../configuration/database.old.php", __DIR__ . "/../configuration/database.php");
}

function itShouldReturnAPdoObject(): void {
	$databaseFilePath = __DIR__ . "/../database/foo.sqlite";
	$configurationFilePath = __DIR__ . "/../configuration/database.php";

	file_put_contents($databaseFilePath, "");
	file_put_contents($configurationFilePath, "<?php return ['driver' => 'sqlite', 'database' => __DIR__ . '/../database/foo.sqlite', 'timeout' => 5];");

	isInstanceOf(getPdo(), PDO::class);

	unlink($databaseFilePath);
	unlink($configurationFilePath);
}

function itShouldThrowAnExceptionIfTheDriverIsNotSupported(): void {
	$configurationFilePath = __DIR__ . "/../configuration/database.php";

	file_put_contents($configurationFilePath, "<?php return ['driver' => 'mongodb', 'database' => '', 'timeout' => 5];");
	
	throws(function() {
		getPdo();
	});

	unlink($configurationFilePath);
}

setUp();
itShouldReturnAPdoObject();
itShouldThrowAnExceptionIfTheDriverIsNotSupported();
tearDown();
