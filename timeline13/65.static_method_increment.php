<?php
class Produk
{
    private static $totalProduk = 0;
    public function __construct()
    {
        self::$totalProduk++;
        echo "class Produk dibuat, total produk = " . self::$totalProduk . "\n";
    }
}
$produkA = new Produk();
$produkB = new Produk();
$produkC = new Produk();
$produkD = new Produk();
