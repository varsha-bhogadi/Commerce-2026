<?php

class Lap
{
public $name;
public $age;

function __construct($name, $age)
{
    $this->name = $name;
    $this->age = $age;
}
function __destruct()
{
echo "Name : " . $this->name . ", Age : " . $this->age . "\n";
}
}

$lap1 = new Lap("Nano" , 3);
$lap2 = new Lap("Canon" , 2);

?>