<?php

// date_default_timezone_set("Asia/Taipei");
// Get the current timestamp

$t = time();
echo  "Date : ".date("Y-m-d",$t); // Outputs the current date
echo "<br>";
echo  "Time : ".date("H:i:s",$t); // Outputs the current time
echo "<br>";
echo  "Full Date/Time : ".date("Y-m-d H:i:s",$t);
echo "<br>";
$tz=timezone_open("Asia/Taipei");
echo "Timezone : ".timezone_name_get($tz)."<br>"; // Outputs the timezone name
echo "Timezone : ".date_default_timezone_get()."<br>"; // Outputs the default timezonename
echo "Timezone : ".date_default_timezone_set("Asia/Taipei")."<br>"; // Outputs the default timezonename
echo "Timezone : ".date_default_timezone_get()."<br>"; // Outputs the default timezonename 

// Modifying the timezone
date_default_timezone_set("Asia/Taipei");
$t = time();
echo  "Date : ".date("Y-m-d",$t); // Outputs the current date
echo "<br>";
echo  "Time : ".date("H:i:s",$t); // Outputs the current time
echo "<br>";
$tz=timezone_open("Asia/Taipei");
echo "Timezone : ".timezone_name_get($tz)."<br>"; // Outputs the timezone name