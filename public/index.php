<?php

declare(strict_types=1);

require __DIR__ . '/../src/Greeting.php';

header('Content-Type: text/plain; charset=utf-8');
echo (new Demo\Greeting())->hello((string) ($_GET['name'] ?? ''));
