<?php

declare(strict_types=1);

namespace Demo;

final class Greeting
{
    public function hello(string $name): string
    {
        $name = trim($name) === '' ? 'world' : trim($name);

        return sprintf('Hello, %s! Running on PHP %s.', htmlspecialchars($name, ENT_QUOTES), PHP_VERSION);
    }
}
