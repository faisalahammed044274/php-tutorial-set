<?php

/**While Loop
 * 
 * while (condition) {
 *  code to be executed
 * }
 */
echo "While Loop => <br>" . PHP_EOL;

    $number = 1;
    while ($number <= 10) {
        echo "The number is: $number <br>" . PHP_EOL;
        $number++;
    }

    echo "<br>";

/**
 * Do While Loop
 */
echo "Do While Loop => <br>" . PHP_EOL;

    $number = 1;
    do {
        echo "The number is: $number <br>" . PHP_EOL;
        $number++;
    } while ($number <= 10);

    echo "<br>";
/**
 * For Loop
 */
echo "For Loop => <br>" . PHP_EOL;

    for ($i = 1; $i <= 10; $i++) {
        echo "The number is: $i <br>" . PHP_EOL;
    }   
    echo "<br>";
/**
 * For Each Loop
 */
echo "For Each Loop => <br>" . PHP_EOL;

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>" . PHP_EOL;
    }
    echo "<br>";
/**
 * Break and Continue
 */
echo "Break and Continue => <br>" . PHP_EOL;

    for ($i = 0; $i <= 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo "The number is: $i <br>" . PHP_EOL;
    }

    for ($i = 0; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        }
        echo "The number is: $i <br>" . PHP_EOL;}
?>