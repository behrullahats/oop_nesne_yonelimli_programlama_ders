<?php
//Miras Alma : Başka bir sınıfa ait nesnelerin tanımlanan sınıf içerisinde kullanılması olarak tanımlanabilir.


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
        echo "Kitap Adı : " . $this->ad . "<br>";
        echo "Kitap Yazar : " . $this->yazar . "<br>";
        echo "Kitap Fiyat : " . $this->fiyat . "<br>";
    }
}

class Yazilim extends Kitap
{
    public function __construct()
    {
        echo "Yazılım Kitapları" . "<br>";
    }
}

$islem = new Yazilim();
$islem->insert("Seyit Behrullah Ateş", "Seyit", 50);
$islem->listele();
