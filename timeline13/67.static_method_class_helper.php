<?php
class ProdukHelper
{
    public static function cekValidSKU($sku)
    {
        return preg_match("/^[A-Z]{3}[0-9]{3}$/", $sku);
    }
    public static function cekValidMerek($merek)
    {
        $semuaMerek = ["Samsung", "LG", "Sony", "Philips", "Sharp", "Sanken"];
        return in_array($merek, $semuaMerek);
    }
}
if (ProdukHelper::cekValidSKU("AAA545")) {
    echo "Merek AAA545 valid \n";
}
if (ProdukHelper::cekValidSKU("AAa545")) {
    echo "Merek AAa545 valid \n";
}
if (ProdukHelper::cekValidMerek("Sharp")) {
    echo "Merek Sharp tersedia \n";
}
if (ProdukHelper::cekValidMerek("Samsung")) {
    echo "Merek Samsung tersedia \n";
}
if (ProdukHelper::cekValidMerek("Asus")) {
    echo "Merek Asus tersedia \n";
}
