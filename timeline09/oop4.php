<?php
//cara mengakses properti dan method
class Fruit
{
    //properti
    public $name;
    public $color;
    // method
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}


$apple = new Fruit();
$banana = new Fruit();
// $banana = new Fruit("banana","yellow");
// $grape = new Fruit();

$apple->setName("apel");
$banana->setName("banana");



//untuk menampilkan
echo $apple->getName();
echo "<br>";
echo $banana->getName();
