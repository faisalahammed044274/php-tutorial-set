<?php

/**  
* Comparison Operators
 ==    Equal
 ===   Identical
 !=    Not Equal
 <>    Not Equal
 !==   Not Identical
 >     Greater than
 <     Less than
 >=    Greater than or Equal to
 <=    Less than or Equal to
<=>    Spaceship
*/

$number1 = 20;
$number2 = 20;

if ($number1 != $number2) {
    echo "Number 1 is not Equal to Number 2";
} elseif ($number1 == $number2) {   
    echo "Number 1 is Equal to Number 2";
}else {
    echo "Invalid Input";
}