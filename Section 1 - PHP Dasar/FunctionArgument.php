<?php

function sayHello($name = "Budi")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Rangga");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false);

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    echo "Total " . implode("+", $values) . " = $total" . PHP_EOL;
}

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);
