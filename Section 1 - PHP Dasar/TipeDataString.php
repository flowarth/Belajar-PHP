<?php

// single quote
echo 'Name : ';
echo 'Rangga Setiawan';
echo "\n";

// double quote
echo "Name : ";
echo "Rangga\t Setiawan\n";

// heredoc
echo <<<Rangga
Ini adalah contoh string yang sangat panjang, dan juga gak perlu ngetik ENTER secara manual, "bisa quote" juga 
Rangga;

// nowdoc
echo <<<'Rangga'
Ini adalah contoh string yang sangat panjang, dan juga gak perlu ngetik ENTER secarai manual, "bisa quote" juga
Rangga;