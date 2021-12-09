<?php
//cara mengakses properti dan method
class Fruit
{
    //properti
    public $name;
    public $color;
    // method
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getColor()
    {
        return $this->color;
    }
}


$apple = new Fruit("apel", "merah");
$banana = new Fruit("pisang", "yellow");

//untuk menampilkan
echo $apple->getName();
echo "<br>";
echo $apple->getColor();
echo "<br>";
echo $banana->getName();
echo "<br>";
echo $banana->getColor();
