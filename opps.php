<?php 

class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color()."<br>";






for($i=0;$i<=5;$i++){  
  for($j=5-$i;$j>=1;$j--){  
  echo "* ";  
  }  
  echo "<br>";  
  }  







  echo readfile('phpmain.php');


  error_reporting(E_ALL);
  ini_set('display_errors', 1);


  throw new Exception("This is an example exception.");






 



 
