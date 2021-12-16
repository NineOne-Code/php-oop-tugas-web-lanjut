<?php
class Person
{
    public $name = 'Ahmad';
    public $age = 90;

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Doctor extends Person
{
    public $job = 'Doctor';
    public function whoAmI()
    {
        return 'Hello my name is ' . $this->getName() . '. I am ' . $this->getAge() . ' olds' . ' and I am is a ' . $this->job;
    }
}

$ahmad = new Doctor();
echo $ahmad->whoAmI();
