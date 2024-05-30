<?php

class Kucing {
    public function berlari() {
        return "Kucing sedang Berlari";
    }

    public function makan() {
        return "Kucing sedang Makan";
    }

    public function tidur() {
        return "Kucing sedang Tidur";
    }
}

$kucingKu = new Kucing();
echo $kucingKu->berlari();
