<?php 

$find = "World";
$find_length = strlen($find);
$replace = "Earth";
$string = "Hey World, Welcome to Jurassic World";
$offset = 0;

strpos($string, $find, 10);

echo PHP_EOL;
 while($string_position = strpos($string, $find, $offset)){
     echo "Found at " . $string_position . PHP_EOL;
     $offset = $string_position + $find_length;
 }
