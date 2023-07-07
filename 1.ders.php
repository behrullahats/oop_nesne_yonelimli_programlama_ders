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
        echo 'Kitap Adı: ' . $this->ad . '<br>';
        echo 'Kitap Yazar: ' . $this->yazar . '<br>';
        echo 'Kitap Fiyat: ' . $this->fiyat . '<br>';
    }
}

$php = new Kitap();
$php->insert("PHP EĞİTİM KURSU KİTABI", "Seyit Behrullah Ateş", 55);
$php->listele();
