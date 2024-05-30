<?php

class Kucing2 {
    // Properti (data yang dimasukkan)
    public $nama;

    // Constructor (proses pemanggilan data)
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function berlari() {
        return $this->nama . " sedang Berlari";
    }

    public function makan() {
        return $this->nama . " sedang Makan";
    }

    public function tidur() {
        return $this->nama . " sedang Tidur";
    }
}

$kucingKu = new Kucing2("Boyen");
echo $kucingKu->berlari();