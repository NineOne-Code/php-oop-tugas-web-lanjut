<?php
class Produk
{
    private $merek = "Asus";
    private function hello()
    {
        return "Ini adalah Produk";
    }
}
class Laptop extends Produk
{
    public function helloLaptop()
    {
        return $this->hello() . " Laptop " . $this->merek;
    }
}
$produk01 = new Laptop();
echo $produk01->helloLaptop();
// Fatal error:
// Uncaught Error: Call to private method Produk::hello() from context 'Laptop'