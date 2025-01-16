<?php

// echo "Hello";
// die("page died!");
// echo "World";

// echo PHP_EOL;
// echo "Hey";
// exit("ERROR 404 ! PAGE ENDED");
// echo "There";

mysqli_connect("localhost", "root", "") or die("Could not connect to database");

echo "Connected to database with Die";
echo PHP_EOL;
mysqli_connect("localhost", "root", "") or exit("Could not connect to database");

echo "Connected to database with Exit";






?>