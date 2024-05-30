<?php

// Variable $a dan $b adalah Parameter (variable yang di proses didalam Function)
function penjumlahan($a, $b) {
    $hasil = $a + $b;

    return $hasil;
}

$nilai1 = 20;
$nilai2 = 30;
$hasilPenjumlahan = penjumlahan($nilai1, $nilai2);

echo "Nilai 1: " . $nilai1 . "<br>";
echo "Nilai 2: " . $nilai2 . "<br>";
echo "Hasil Penjumlahan : " . $hasilPenjumlahan;

echo "<br>";
echo "<br>";

// ----
// Fungsi bawaan dari PHP
$teks = "Hello, World!";
echo $teks . "<br>";
$panjang = strlen($teks); // strlen : untuk menghitung jumlah huruf
echo "Panjang string diatas adalah: " . $panjang; 