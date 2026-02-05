<?php

abstract class Car
{
public $name;

public function __construct($name)
{
    $this->name = $name;
}

    abstract public function aboutCar();
}

// Child class that extends the abstract class
class Audi extends Car {
    public function aboutCar() {
        return "name is $this->name! and I'm super good";
    }
}

class Benz extends Car {
    public function aboutCar() {
        return "name is $this->name! and I'm unbeatable";
    }
}

// Create objects of the child classes
$audi = new Audi("Audi");
echo $audi->aboutCar();
echo "\n";

$benz = new Benz("Benz");
echo $benz->aboutCar();
?>
