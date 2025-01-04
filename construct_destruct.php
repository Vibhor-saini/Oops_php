<?php

class mycolor
{

  public $name1;
  public $name2;

  function __construct($name1,$name2)
  {
   echo "First name: ". $this->name1=$name1;
   echo "<br>";
   echo "second name: ".$this->name2=$name2;
   echo "<br>";
  }

  // function set()
  // {
  //  return "set First name: ". $this->name1 . "<br>" . "set second name: ".$this->name2;
  // }

 
  function __destruct()
  {
    echo $this->name1 ."<br>". $this->name2; 
    echo "<br>";
    echo "Finish code";
  }



}

$obj = new mycolor("Manku","vibhor");

?>
