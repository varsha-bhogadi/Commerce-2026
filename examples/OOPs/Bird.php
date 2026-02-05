<?php

class Bird
{
public $name;
public $color;
function __construct($name, $color)
{
    $this->name = $name;
    $this->color = $color;
}
function __destruct()
{
    echo "Bird is : '$this->name' and color is '$this->color'\n  ";
}
}
class parrot extends Bird
{
    function canFly(){
        echo $this->name . " can fly \n";
    }
}

class myParrot extends parrot {
    function speak(){
        echo $this->name . " can speak $this->name say hi! \n";
    }
}

//$parrotObj = new parrot("Parrot","green");
//$parrotObj->canFly();

$myParrotObj = new myParrot("ria","redgreen");
$myParrotObj->canFly();
$myParrotObj->speak();