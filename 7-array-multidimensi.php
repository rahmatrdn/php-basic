<?php

// Mendefinisikan array multidimensi
$mahasiswa = array(
    1 => array(
        "nama" => "John",
        "umur" => 25,
        "jurusan" => "Informatika"
    ),
    2 => array(
        "nama" => "Jane",
        "umur" => 30,
        "jurusan" => "Sistem Informasi"
    ),
    3 => array(
        "nama" => "Doe",
        "umur" => 22,
        "jurusan" => "Teknik Komputer"
    )
);

// Mengakses elemen array multidimensi
echo "Nama mahasiswa 1: " . $mahasiswa[1]["nama"];
echo "<br>";
echo "Jurusan mahasiswa 2: " . $mahasiswa[2]["jurusan"];
echo "<br>";
echo "<br>";


echo "Daftar Mahasiswa <br>";
// Menggunakan perulangan untuk mengakses semua elemen array multidimensi
foreach ($mahasiswa as $nim => $data) {
    echo "================<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Nama: " . $data["nama"] . "<br>";
    echo "Umur: " . $data["umur"] . "<br>";
    echo "Jurusan: " . $data["jurusan"] . "<br>";
}