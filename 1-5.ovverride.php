<?php
// Geçersiz Kılma

//Override = Geçersiz Kılma. Yani daha önceden tanımlanmış olan bir methodun miras yoluyla elde edildiği sınıfta tekrar tanımlanmayarak daha önceki işleminin geçersiz kılınmasıdır.

class Ekmek
{
    protected $kdv;

    public function Kdv($fiyat)
    {
        $this->kdv = 0.08;
        return $this->kdv * $fiyat;
    }
}

class Mazot extends Ekmek
{
    public $kdv;

    public function Kdv($fiyat)
    {
        $this->kdv = 0.18;
        return $this->kdv * $fiyat;
    }
}

$ekmek = new Ekmek();

echo "Ekmek KDV ........" . $ekmek->Kdv(10) . "<br>";

$mazot = new Mazot();

echo "Mazot KDV ........" . $mazot->Kdv(10);
