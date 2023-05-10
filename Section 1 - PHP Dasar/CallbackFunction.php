<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rangga", function ($name) {
    return strtoupper($name);
});
sayHello("Rangga", fn ($name) => strtoupper($name));
sayHello("Rangga", "strtoupper");
sayHello("Rangga", "strtolower");
