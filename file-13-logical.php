
<?php

/** 
 * Logical Operators
 * and    And
 * or     Or
 * xor    Xor 
 * &&     And
 * ||     Or
 * !      Not
 */


$number1 = 10;
$number2 = 20;

if ($number1 == 10 and $number2 == 20) {
    echo "Number 1 is Equal to 10 and Number 2 is Equal to 20";
    echo "</br>";
} elseif ($number1 == 10 or $number2 == 20) {
    echo "Number 1 is Equal to 10 or Number 2 is Equal to 20";
    echo "</br>";
} elseif ($number1 == 10 xor $number2 == 20) {
    echo "Number 1 is Equal to 10 xor Number 2 is Equal to 20";
    echo "</br>";
} elseif ($number1 == 10 && $number2 == 20) {
    echo "Number 1 is Equal to 10 and Number 2 is Equal to 20";
    echo "</br>";
} elseif ($number1 == 10 || $number2 == 20) {
    echo "Number 1 is Equal to 10 or Number 2 is Equal to 20";
    echo "</br>";
} elseif (!($number1 == 10)) {
    echo "Number 1 is not Equal to 10";
    echo "</br>";
} else {
    echo "Invalid Input";
}