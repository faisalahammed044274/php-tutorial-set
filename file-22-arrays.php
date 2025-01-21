<?php
$food = array("pizza", "sushi", "tacos", "curry", "steak");
echo $food[0];
echo "<br>";
print_r($food);

echo "<br>";

// Associative Arrays
$person = array("name" => "John", "age" => 30, "city"=> "Dhaka");
echo $person["name"];

//Multidimensional Arrays
echo PHP_EOL;
$food = array('Healthy'=>array("Salad","Vegetable","Pasta"), 'Unhealthy'=>array("Pizza","Burger","Fries"));

echo $food['Healthy'][1];
echo PHP_EOL;
echo $food['Unhealthy'][0];