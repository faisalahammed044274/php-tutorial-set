<?php

function helloWorld(){
    echo "Hello World!";
}

echo "Program says :";
echo PHP_EOL;
 helloWorld();

echo PHP_EOL;

//Functions with Argument


function hello($name){
    echo $name;
}

echo "His name is :";
echo PHP_EOL;
hello("John");

echo PHP_EOL;

//Functions with Return Value
function add($a, $b){
    return $a + $b;
}
//calling the function
echo "The sum is :";
echo PHP_EOL;
echo add(5, 10);

echo PHP_EOL;

//Functions with Default Argument Value
function welcome($name = "Guest"){
    echo "Welcome $name";
}
//calling the function
echo "Program says :";
echo PHP_EOL;
welcome("John");

echo PHP_EOL;

echo "Program says :";
echo PHP_EOL;
welcome();

echo PHP_EOL;

//Functions with Multiple Return Values
function getDetails(){
    $name = "John";
    $age = 25;
    return array($name, $age);
}
//calling the function
list($name, $age) = getDetails();
echo "Name is $name and age is $age";

echo PHP_EOL;


function displayDate($day, $date, $year){
    echo "Date is ". $day ." ".$date." ".$year;
}

//calling the function
displayDate(16, "January", 2025);





?>