<!-- PHP - What is Inheritance?
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword. -->

<?php


// example1==================

// class class1{
//     function fun1(){
//         echo "function1";
//         echo"<br>";
//     }
// }

// class class2 extends class1 {  
//     function fun2(){
// echo "=========example 1==========";
// echo"<br>";
//         echo "function2";
//         echo"<br>";
//     }
// }


// $obj1 = new class2();
// // $obj1->fun1();
// $obj1->fun2();


//example2==========================

// class class1{

//     function __construct(){
//         echo "__construct 1";
//     }
// }

// class class2 extends class1{
//     function __construct(){
// echo "=========example 2==========";
// echo"<br>";
//         echo "__construct 2";
//     }
// }

// $obj = new  class2(); 



//example3==========================

// class class1{

//     function __construct(){
//         echo "__construct 1";
//         echo"<br>";
//     }

//     function fun1(){
//     echo "function but in first class => fun 1";
//     echo"<br>";
//     }
// }

// class class2 extends class1{
//     function __construct(){
// echo "=========example 3==========";
// echo"<br>";
//         echo "__construct 2";
//         echo"<br>";
//     }

//     function fun1(){
//         echo "same function but in second class => fun 1";
//         echo"<br>";
//     }
// }

// $obj = new  class2(); 
// $obj->fun1();



//example 4==========================

// class class1{
//     function __construct(){
// echo "=========example 4==========";
// echo"<br>";
//         echo "__construct 1";
//         echo"<br>";
//     }

//     function fun1(){
//     echo "function but in first class => fun 1";
//     echo"<br>";
//     }
// }

// class class2 extends class1{
//     function __construct(){
//         parent::__construct();
//         echo "__construct 2";
//         echo"<br>";
//     }

//     function fun1(){
//         parent::fun1();
//         echo "same function but in second class => fun 1";
//         echo"<br>";
//     }
// }

// $obj = new  class2(); 
// $obj->fun1();


//example 5==========================

class class1
{
    public $num;
    function __construct()
    {
        $this->num = 1;
        echo "=========example 5==========";
        echo "<br>";
        echo "__construct 1";
        echo "<br>";
    }

    function fun1()
    {
        echo "function but in first class => fun 1";
        echo "<br>";
    }
}

class class2 extends class1
{
    function __construct()
    {
        // $this->num=2;
        parent::__construct();
        $this->num = 2;
        echo "<br>";
        echo "__construct 2";
        echo "<br>";
    }

    function fun1()
    {
        parent::fun1();
        echo "same function but in second class => fun 1";
        echo "<br>";
    }
}

$obj = new  class2();
$obj->fun1();
echo $obj->num;



// example 6======================================

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "<br>";
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();
?>