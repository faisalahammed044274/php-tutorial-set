<?php 

//str_replace(); predefined


$find = array('This', 'string','example');
$replace = array('There', 'integer', 'Math');

$string = "This is a string and This is an example project.";

$new_string = str_replace($find, $replace, $string);

echo $new_string;

