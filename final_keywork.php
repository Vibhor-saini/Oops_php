<!-- PHP - The final Keyword
The final keyword can be used to prevent class inheritance or to prevent method overriding. -->


<?php

// final class class1{
// }

// // will result in error
// class class2 extends class1{
// }


// The following example shows how to prevent method overriding:============

class Fruit {
   final public function intro() {
    
  }
}

class Strawberry extends Fruit {
  // will result in error
  public function intro() {
    echo "this is public that's why showing if final than not";
  }
}

$obj = new Strawberry();
$obj->intro();

?>
