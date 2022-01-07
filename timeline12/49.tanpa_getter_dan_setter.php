<?php
class Produk
{
    public $merek;
    public $stok;
}
$produk01 = new Produk();
$produk01->merek = "Acer";
$produk01->stok = 10;
echo $produk01->merek;
echo "\n";
echo $produk01->stok;
