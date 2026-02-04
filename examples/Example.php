<?php
class Example{
    private $name;
   public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return "Name is  " . $this->name;
}

}

// creating object
$eName = new Example();

$eName->set_name("Klara");
echo $eName -> get_name();

?>
