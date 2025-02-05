<?php 

//str_replace(); predefined

$string = "This is a string and This is an example project.";

$string_new = str_replace('an example', 'a sample', $string);
$string_new = str_replace('string', 'testing', $string_new);

echo $string_new; // Outputs: "Th  a string, and an example."