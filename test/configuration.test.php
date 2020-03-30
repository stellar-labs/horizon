<?php

use function Horizon\Assertion\{strictlyEqual, throws};
use function Horizon\configuration;

function itShouldReturnTheConfigurationValue(): void {
	$filePath = __DIR__ . "/../configuration/foo.php";

	file_put_contents($filePath, "<?php return ['bar' => 'baz'];");
	strictlyEqual(configuration("foo.bar"), "baz");
	unlink($filePath);
}

function itShouldThrowAnExceptionIfConfigurationFileDoesNotExist(): void {
	throws(function() {
		configuration("does.not.exist");
	});
}

function itShouldThrowAnExceptionIfConfigurationKeyDoesNotExist(): void {
	$filePath = __DIR__ . "/../configuration/foo.php";

	file_put_contents($filePath, "<?php return ['bar' => 'baz'];");

	throws(function() {
		configuration("foo.not");
	});

	unlink($filePath);
}

itShouldReturnTheConfigurationValue();
itShouldThrowAnExceptionIfConfigurationFileDoesNotExist();
itShouldThrowAnExceptionIfConfigurationKeyDoesNotExist();
