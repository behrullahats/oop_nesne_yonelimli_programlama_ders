<?php

// Method_Exists() Method var mı yok mu onu kontrol eder.
class Sinif
{
    public function ders()
    {
        echo "Ders Methodu";
    }
}

// class_exists() 
if (class_exists("Sinif")) {
    $a = new Sinif();
} else {
    echo "Yoktur";
}

// Method_Exists() 
if (method_exists($a, "ders")) {
    echo "Evet var <br>";
    $a->ders();
} else {
    echo "Yoktur";
}
