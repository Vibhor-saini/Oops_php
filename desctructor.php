<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    echo $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is {$this->name}.";
  }
}

$apple = new Fruit("Apple");
?>