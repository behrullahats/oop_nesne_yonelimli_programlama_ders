<?php
//Final Anahtar sözcüğü ile başlarsak bu sınıf genişleyemez...


//Şimdi bir örnek verelim bakalım ve yapınca nasıl bir hata verecek ona bakalım :)

//  ( Class Kurs2 cannot extend final class Kurs in ) bana bu şekilde bir hata döndürdü bunun sebebi final olan sınıflar başka bir sınıfa entegre edilemez.

final class Kurs
{
    public function ders()
    {
        echo "ders";
    }
}

// class Kurs2 extends Kurs
// {
// }
