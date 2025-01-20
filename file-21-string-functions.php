<?php

$string = "This is a string.";

$string_word_count = str_word_count($string); 

echo $string_word_count;
echo "<br>";
print_r($string_word_count);

echo "<br>";

$string2 = "This is a string with multiple words & this is a php test project.";

$string_word_count2 = str_word_count($string2, 1, '&.');
// 1 is the second parameter, which is the delimiter, and &. is the third parameter

print_r($string_word_count2);

echo "<br>";
$string3 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$string_suffled = str_shuffle($string3);

echo $string_suffled;

$half = substr($string3, 0, strlen($string_suffled)/ 4);
echo "<br>";
echo $half;

$test = "Hello, This a Test Code";
$test = str_replace("Hello", "Hi", $test);
// str_replace is used to replace a word in a string with another word

echo $test;
echo "<br>";
// str_replace is used to replace a word in a string with another word
$test2 = "Hello, This a Test Code";
$test2_reversed = strrev($test2);
echo $test2_reversed;

echo "<br>";
// strrev is used to reverse a string
$image = 'image.jpeg';
$image_reversed = strrev($image);
echo $image_reversed;

echo "<br>";

$string_one = "This is my essay. I am going to be taking about php.";
$string_two = "Now i am learning php.This is my essay. I will be taking about the subject php.";

similar_text($string_one, $string_two, $result);
echo 'The Similarity between is : ' . $result . '%';
echo "<br>";
$my_string = "Hey, I am learning php now.";
$my_string_length = strlen($my_string);
// strlen is used to get the length of a string
echo $my_string_length;
echo "<br>";

$my_string_trimmed = trim($my_string, "now.");
echo $my_string_trimmed;
echo "<br>";
$my_string_rtrim = rtrim($my_string, "now.");
echo $my_string_rtrim;
echo "<br>";
$my_string_ltrim = ltrim($my_string, "Hey, ");
echo $my_string_ltrim;
echo "<br>";

$php_string = "This is a <img src='image.jpg'> string.";
//used it for sql injections passing issues security purposes
$php_string_slashes = htmlentities(addslashes($php_string));
echo $php_string_slashes;
