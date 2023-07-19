<?php

class Kitap
{

    //Özellik Tanımlaması

    public $ad, $yazar, $fiyat;

    //Method

    public function insert($ad, $yazar, $fiyat)
    {
        $this->ad = $ad;
        $this->yazar = $yazar;
        $this->fiyat = $fiyat;
    }

    public function Listele()
    {
        echo "Kitap Adı : " . $this->ad;
        echo "Kitap Yazarı : " . $this->yazar;
        echo "Kitap Fiyatı : " . $this->fiyat;
    }
}
