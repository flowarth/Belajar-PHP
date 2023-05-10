<?php

$name = "Rangga Setiawan";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100  . PHP_EOL;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

$name = "Rangga";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;

echo "Hello $name, Selamat Belajar" . PHP_EOL;

echo "This is {$name} Setiawan" . PHP_EOL;
