<?php


echo "Today is " . date("Y/m/d") . "<br>";?>
&copy; 2010-<?php echo date("Y");
echo "The time is " . date("h:i:sa");


function functionname(){
    echo "helow word";
}
functionname();


function some(){
    echo "Welcome to my home page";
}
some();


$cars =  array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

echo '<pre>';
print_r($cars);




$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo '<pre>';
print_r($age);
echo '</pre>';
// php data type string, integers, float, boollans, array obejct and null and resource
// 



$a = 4;
$b = 8;
if($a == $b){
    echo "a and b are equal";
}else{
    echo "a and b are not equal.";
}


$aa = 10;
$bb = 10;
if($aa == $bb ){
    echo "aa is equal to bb";
    
}else{
    echo "aa is not equal to bb";
}




