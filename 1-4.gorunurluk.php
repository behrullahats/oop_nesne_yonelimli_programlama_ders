<?php
// Görünürlük

//Public = Her yerden erişilebilir
//private = Sadece tanımlandığı sınıf içerisinden erişilebilir.
//protected = tanımlandıpı sınıf içerisinden yada miras alma yoluyla erişilebilir.

class Kitap
{
    public $ad = "Seyit Behrullah Ateş", $yazar = "Merhaba";
    private $fiyat = 75;
}

class Yazilim extends Kitap
{
    public function listele()
    {
        echo "Kitap Adı : " . $this->ad . "<br>";
        echo "Kitap Yazar : " . $this->yazar . "<br>";
        echo "Kitap Fiyat : " . $this->fiyat . "<br>";
    }
}

$islem = new Yazilim();

$islem->listele();
