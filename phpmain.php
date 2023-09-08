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




//index array array with a numaric index





// $fruits = array("apple", "banana", "orange");
$fruits = ["apple", "banana","orange"];

print_r($fruits);




// assocative array  array with name and keys
$person = array("first_name" => "vishal", "last_name" => "singh", "age" => 27);


print_r($person);


// multidimsion array containg one or more array

$books = array(
    array(
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "year" => 1925
    ),
    array(
        "title" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "year" => 1960
    ),
    array(
        "title" => "1984",
        "author" => "George Orwell",
        "year" => 1949
    ),
    // Add more books here
);


// Accessing elements in the multidimensional array
print_r($books[2]);



$multidimensionalArray = array(
    array(1, 2, 3),
    array('apple', 'banana', 'cherry'),
    array('John' => 25, 'Jane' => 30),
);
print_r($multidimensionalArray[1]);







// date and time 
echo time();
$currenttime = time();
echo $currenttime - 60 * 60 *24 ."<br>";

echo date("m/d/y");


echo  readfile("text.tex");





// if esle constion use

$temperature = 25;
if($temperature >= 30){
    echo "it is hotoutside";
}
elseif ($temperature >= 20 && $temperature < 30) {
    echo "It's a pleasant day.";
} else {
    echo "It's cold outside.";
}



$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo "$number is even.<br>";
    } else {
        echo "$number is odd.<br>";
    }
}
