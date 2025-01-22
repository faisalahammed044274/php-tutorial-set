<?php 

// $string = "This is a string, and this is another string.";
// $new_string = str_replace("string", " $ ", $string);
// $new_string = str_replace("another", " @ ", $new_string);
// echo $new_string;

//faster and Smart Way
$find = array("string", "another","this");
$replace = array(" 1 ", " 2 ", " 3 ");
$string = "This is a string, and this is another string.";

$new_string = str_replace($find,$replace, $string);

echo $new_string;