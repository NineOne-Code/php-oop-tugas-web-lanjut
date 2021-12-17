<?php
class Produk
{
    private $merek;
    private function hello()
    {
        return "Ini adalah Produk";
    }
}
$produk01 = new Produk();
// Fatal error: Uncaught Error: Cannot access private property Produk::$merek
$produk01->merek = "Asus";
// Fatal error: Uncaught Error: Cannot access private property Produk::$merek
echo $produk01->merek;
// Fatal error: Uncaught Error: Call to private method Produk::hello()
echo $produk01->hello();
