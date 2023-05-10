<?php

$names = ["Rangga", "Setiawan"];

foreach ($names as $nama) {
    echo "Hello $nama" . PHP_EOL;
}

$person = [
    "first_name" => "Rangga",
    "last_name" => "Setiawan"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
