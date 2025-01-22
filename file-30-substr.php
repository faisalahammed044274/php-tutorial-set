<?php

//substr();
//substr works like substr in PHP
//substr is a function in PHP that returns a portion of a string
//substr is used to extract a part of a string
//substr_replace();
//substr_replace is a function in PHP that replaces a portion of a string
//substr_replace is used to replace a portion of a string

$string = "Hey There! This part of the string is going to be replaced.";
$replacement = "already";
$replacement_start = 38;
$replacement_end = 49;
//substr_replace($string, $replacement, $replacement_start, $replacement_end - $replacement_start
//substr_replace($string, $replacement, $replacement_start, $replacement_end - $replacement_start
echo substr_replace($string, $replacement, $replacement_start, $replacement_end - $replacement_start);
