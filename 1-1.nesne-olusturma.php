<?php

class Kitap
{

    public $ad, $yazar, $fiyat;

    public function insert($ad, $yazar, $fiyat)
    {
        $this->ad = $ad;
        $this->yazar = $yazar;
        $this->fiyat = $fiyat;
    }

    public function listele()
    {
        echo "<b>Kitap Adı :</b> " . $this->ad . "<br>";
        echo "<b>Kitap Yazar :</b> " . $this->yazar . "<br>";
        echo "<b>Kitap Fiyat :</b> " . $this->fiyat;
    }
}

$php = new Kitap();

$php->insert("Kardeşimin Hikayesi", "Zülfü Livaneli", 50);
$php->listele();
