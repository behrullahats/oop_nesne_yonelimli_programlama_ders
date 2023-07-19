<?php

class Kitap
{
    public $ad;
    public $yazar;
    public $fiyat;
    public $yayinevi;


    public function ad($ad)
    {
        $this->ad = $ad;
        return $this;
    }
    public function yazar($yazar)
    {
        $this->yazar = $yazar;
        return $this;
    }
    public function fiyat($fiyat)
    {
        $this->fiyat = $fiyat;
        return $this;
    }
    public function yayinevi($yayinevi)
    {
        $this->yayinevi = $yayinevi;
        return $this;
    }

    public function listeleme()
    {
        echo $this->ad . " " . $this->yazar . " " . $this->fiyat . " " . $this->yayinevi;
    }
}

$php = new Kitap;

//Normal Çağıma Methodu
// $php->ad("Kardeşimin Hikayesi");
// $php->yazar("Zülfü Livaneli");
// $php->fiyat(50);
// $php->yayinevi("Seyit'in Kitap Evi");

// $php->listeleme();

//Zincirleme Method


$php->ad("Kardeşimin Hikayesi")->yazar("Zülfü Livaneli")->fiyat(50)->yayinevi("Seyit'in Kitap Evi")->listeleme();
