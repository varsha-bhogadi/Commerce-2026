<?php
interface Animal
{
    public function makeSound();
}

class Dog implements Animal
{

    public $name;
    public function makeSound()
    {

        echo "Bark! \n" ;
    }
}

//
class Cat implements Animal
{

    public function makeSound()
    {
        echo "Meow!";
    }
}


$dog = new Dog();
$cat = new Cat();

$dog->makeSound();
$cat->makeSound();
