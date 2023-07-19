<?php
// Çok Biçimlilik POLYMORHISM

//Bir değişkeni, fonksiyonu yada nesnenin birden çok bir biçimde ele alınabilme yeteneğini ifade eder.

interface Selamlama
{
    public function dil($ad);
}
class Turkce implements Selamlama
{
    public function dil($ad)
    {
        echo "Merhaba......:" . $ad;
    }
}

class Ingilizce implements Selamlama
{
    public function dil($ad)
    {
        echo "Hello......:" . $ad;
    }
}

$tr = new Turkce();
$tr->dil("Emrah");
echo "<br>";

$en = new Ingilizce();

$en->dil("Emrah");
