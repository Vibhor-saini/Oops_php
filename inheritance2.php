<!-- protected properties or methods can be accessed within the class and by classes 
derived from that class. What does that mean? -->

<?php
class Fruit {
  public $name;
  public $color;

   function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

   protected function intro() {
   //public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
  
}

class Strawberry extends Fruit {
   function message() {
    echo "Am I a fruit or a berry? ";
    echo"<br>";
    $this -> intro();  //need to call here not from global scope
    echo"<br>";
  }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public

$strawberry->message(); // OK. message() is public
// $strawberry->intro(); // ERROR. intro() is protected but can call is the method is public


// we see that if we try to call a protected method (intro()) from outside the class,
//  we will receive an error. public methods will work fine!
?>