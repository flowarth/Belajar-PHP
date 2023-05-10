<?php

$value = array(1, 2, 3, 4);
var_dump($value);

$names = ["Rangga", "Setiawan"];
var_dump($names);

// mengakses index
$value[1];
var_dump($value);

// mengubah data array
$value[1] = 10;
var_dump($value);

// menambah data array
$value[] = 5;
var_dump($value);

// menghapus data array
unset($value[1]);
var_dump($value);

// menghitung total array
var_dump(count($value));