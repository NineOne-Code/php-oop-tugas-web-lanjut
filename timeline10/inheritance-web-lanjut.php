<?php
class Produk
{
    public $merek = "Sharp";
    public $stok = 50;

    public function cekStok()
    {
        return "Sisa stok: " . $this->stok;
    }
}
class Televisi extends Produk
{
    public $jenis = "Televisi";
    public function cekStokTelevisi()
    {
        return $this->jenis . " " . $this->merek . ", " . $this->cekStok();
    }
}


$produk = new Televisi();

echo $produk->cekStok();
