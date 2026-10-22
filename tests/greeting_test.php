<?php

declare(strict_types=1);

require __DIR__ . '/../src/Greeting.php';

$greeting = new Demo\Greeting();
$checks = [
    str_starts_with($greeting->hello('Ada'), 'Hello, Ada!'),
    str_starts_with($greeting->hello('  '), 'Hello, world!'),
    str_contains($greeting->hello('<b>'), '&lt;b&gt;'),
];

if (in_array(false, $checks, true)) {
    fwrite(STDERR, "greeting test failed\n");
    exit(1);
}

echo "ok\n";
