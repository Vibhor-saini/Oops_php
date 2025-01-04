<!-- PHP - The __construct Function
A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)!PHP - The __construct Function
A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

Notice that the construct function starts with two underscores (__)! -->


<?php

// class Bikes{
//     function __construct($bike1, $bike2)
//     {
//         echo $bike1;
//         echo "</br>";
//         echo $bike2;
//     }
// }

// $model = new Bikes("Splendor", "Bullet");

//=====================or===============

class Bikes{

    public $bike1;
    public $bike2;

    function __construct($bike1, $bike2)
    {
     $this-> bike1 = $bike1;
     $this-> bike2 = $bike2;
    }

    function getbike1(){
        // echo $this-> bike1;
        return $this->bike1;
    }
    
    function getbike2(){
        // echo $this-> bike2;
        return $this-> bike2;

    }

}

$model = new Bikes("Splendor", "Bullet");
echo "First Bike is : " . $model->getbike1();
echo "</br>";
echo "Second Bike is : " . $model->getbike2();
?>