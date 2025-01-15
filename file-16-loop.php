<?php

/**While Loop
 * 
 * while (condition) {
 *  code to be executed
 * }
 */
echo "While Loop" . PHP_EOL;

    $number = 1;
    while ($number <= 10) {
        echo "The number is: $number" . PHP_EOL;
        $number++;
    }

/**
 * Do While Loop
 */
echo "Do While Loop" . PHP_EOL;

    $number = 1;
    do {
        echo "The number is: $number" . PHP_EOL;
        $number++;
    } while ($number <= 10);


/**
 * For Loop
 */
echo "For Loop" . PHP_EOL;

    for ($i = 1; $i <= 10; $i++) {
        echo "The number is: $i" . PHP_EOL;
    }   

/**
 * For Each Loop
 */
echo "For Each Loop" . PHP_EOL;

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value" . PHP_EOL;
    }

/**
 * Break and Continue
 */
echo "Break and Continue" . PHP_EOL;

    for ($i = 0; $i <= 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo "The number is: $i" . PHP_EOL;
    }

    for ($i = 0; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }
        echo "The number is: $i" . PHP_EOL;}
?>