<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Rangga");
$sayHello("Budi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Rangga", function (string $name) {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Rangga", $filterFunction);

$firstName = "Rangga";
$lastName = "Setiawan";

$sayHelloRangga = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloRangga();
