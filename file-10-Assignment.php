<?php
/** 
 * Assignment Operators
x = y    same as x = y
x += y   same as x = x + y
x -= y   same as x = x - y
x *= y   same as x = x * y
x /= y   same as x = x / y
x %= y   same as x = x % y
x .= y   same as x = x . y
x &= y   same as x = x & y
x |= y   same as x = x | y
x ^= y   same as x = x ^ y
*/ 


$number1 = 10;
$number2 = 20;
$number1 =- 10;
$result = $number1 - $number2;

echo $result;
echo PHP_EOL;
$text = "Hello";
$text .= " World";
echo $text;