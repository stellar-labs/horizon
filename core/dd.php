<?php

declare(strict_types=1);

namespace Horizon;

use php_sapi_name;

if (function_exists("dd")) {
    throw new Exception("The dd function has already been defined.");
}

/**
 * Debug and die
 * @param mixed $input The value to debug
 * @return void
 */
function dd($input): void
{
    if (getType($input) === "array") {
        // If this is an array
        $code = print_r($input, true);
    } else {
        // If this is not an array
        ob_start();

        // Debug the array
        var_dump($input);

        // Store the standard output
        $code = ob_get_clean();
    }

    if (php_sapi_name() === "cli") {
        // If we are in CLI
        echo $code . PHP_EOL;
    } else {
        // If we are not in CLI
        echo "<pre><code>$code</code></pre>";
    }

    // Stop the PHP script
    die();
}
