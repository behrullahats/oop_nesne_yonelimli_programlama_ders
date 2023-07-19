<?php
// İnterface Arayüz tanımlama

// Sınıflardan farklı olarak Class yerine interface anahtar kelimesi sözcüğü kullanılarak içeriğinde yazılan methodların içerikleri yazılmadan tanımlanır.

//İnterface içerisinde methodlar public olarak bildirilmelidir. Method içeriklerine yer verilmez

//implements anahtar sözcüğü kullanılır

//Arayüzdeki tüm methodlar bir sınıf içerisinde tanımlanmalıdır.

//Birden fazla arayüz tanımlamasını , ile ayırarak sağlayabiliriz.

interface Ekle
{
    public function ekle($ad);
}

interface Listele
{
    public function Listele();
}

class Alt implements Ekle, Listele
{

    public $ad;
    public function ekle($ad)
    {
        return $this->ad = $ad;
    }
    public function Listele()
    {
        echo $this->ad;
    }
}

$isim = new Alt();
$isim->ekle("Seyit Behrullah Ateş");
$isim->listele();
