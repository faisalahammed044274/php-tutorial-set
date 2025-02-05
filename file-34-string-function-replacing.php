<?php 

$string = 'This part don\'t search. This part search';

//substr_replace(string, replace, offset, length);
$string_new = substr_replace($string, 'Test', 29, 4);

echo $string_new;




?>