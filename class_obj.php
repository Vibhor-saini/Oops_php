<?php

class myname{

    public $name = "Gaurav Saini";
    function firstname(){
        echo "Firstname is written:" . " ";
        echo $this->name;
        echo "<br/>";
    }
  
    function Secondname($name2){
        echo "Name is written:" . " ";
        echo $name2;
        echo "<br/>";
    }
}

$obj1 = new myname();
$obj1->firstname();

$obj1= new myname();
$obj1->Secondname("Sugandha Saini");

$obj2 = new myname();
$obj2->Secondname("Sugandha Saini");

?>