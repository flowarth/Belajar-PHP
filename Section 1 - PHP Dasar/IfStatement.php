<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A";
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B";
} elseif ($nilai >= 68 && $absen >= 68) {
    echo "Nilai Anda C";
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D";
} else {
    echo "Nilai Anda E";
}
