<?php

// Variable Global Scope
$name = "Rangga";

function sayName()
{
    global $name; // Global keyword
    echo "Hello $name" . PHP_EOL;
}

sayName();

// Variable Local Scope
function createName()
{
    $name = "Rangga" . PHP_EOL;
}

createName();
echo $name . PHP_EOL;

// Variable Static Scope
function increment()
{
    static $counter = 1;

    echo "Counter : $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();