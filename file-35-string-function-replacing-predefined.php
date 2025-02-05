<?php 

//str_replace(); predefined

$string = "This is a string and This is an example project.";

$string_new = str_replace('an example', 'a sample', $string);
$string_new = str_replace('string', 'testing', $string_new);
$string_new = str_replace('This', 'Which', $string_new);
$string_new = substr_replace($string_new, 'Other', 23, 5);
echo $string_new; // Outputs: "Th  a string, and an example."