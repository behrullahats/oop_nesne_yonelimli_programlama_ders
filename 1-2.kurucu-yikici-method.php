<?php

//Kurucu Method __construct() bu şekilde yazılıyor.
//Peki bu Kurucu Method nedir?
//Sınıf Çağrıldığında devreye girererk tanımlanan işlemleri gerçekleştirir. Aynı zamanda kurucu method parametre alarakta işlem yapılabilir.
//Yıkıcı Method __destruct() bu şekilde yazılıyor.
//Peki bu Yıkıcı Method nedir?
//Anahtar Kelimesiyle tanımlandıktan sonra sınıfımızın işlemi bittiği andan itibaren tanımlanan işlemlerdir.

class KurucuYikici
{

    public function __construct()
    {
        echo "Başladı";
    }

    public function __destruct()
    {
        echo "Bitti";
    }
}

$islem = new KurucuYikici();
