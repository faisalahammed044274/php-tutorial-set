<?php 
$offset = 0;
$find = "PHP";
$find_length = strlen($find);
$string = "Learn PHP with your best friend, PHP is a great language to learn.";
// echo strpos($string, $find);
// echo strpos($string, $find,12);

while($string_position = strpos($string, $find, $offset)){
    echo "<strong>".$find."</strong> " . "Found at position: " . $string_position . "<br>";
    $offset = $string_position + $find_length;
}

