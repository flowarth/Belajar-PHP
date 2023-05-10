<?php

$first = [
    "first_name" => "Rangga"
];

$last = [
    "last_name" => "Setiawan"
];

var_dump($first + $last);

$a = [
    "first_name" => "Rangga",
    "last_name" => "Setiawan"
];

$b = [
    "last_name" => "Setiawan",
    "first_name" => "Rangga",
];

var_dump($a == $b);
var_dump($a === $b);
