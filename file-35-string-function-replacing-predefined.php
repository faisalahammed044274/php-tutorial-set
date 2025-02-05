<?php 

//str_replace(); predefined


$find = array('This', 'a string','an example');
$replace = array('THERE', 'AN INTEGER', 'A MATHMETICS');

$string = "This is a string and This is an example project.";

$new_string = str_replace($find, $replace, $string);

echo $new_string;

