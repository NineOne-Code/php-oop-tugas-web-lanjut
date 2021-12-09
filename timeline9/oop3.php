<?php
//cara mengakses properti dan method
class Fruit
{
    //properti
    public $name;
    public $color;
    // method
    public function buy()
    {
        return "product order";
    }
}


$apple = new Fruit();
$banana = new Fruit();
$grape = new Fruit();

$apple->name = "apel";
$apple->color = "merah";
$apple->buy();

print($apple->name);
echo "\n";
print($apple->color);
