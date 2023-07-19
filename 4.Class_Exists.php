<?php

//Class_Exists() Bir Sınıf fonksiyonun tanımlı olup olmadığını kontrol eder .

class Sinif
{
    public function ders()
    {
        echo "Ders Methodu";
    }
}

if (class_exists("Sinif")) {
    echo "Sinif Adı altında vardır";
} else {
    echo "Yoktur";
}
