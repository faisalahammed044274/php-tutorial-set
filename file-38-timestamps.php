<?php

$t = time();
echo  "Date : ".date("Y-m-d",$t); // Outputs the current date
echo "<br>";
echo  "Time : ".date("H:i:s",$t); // Outputs the current time
echo "<br>";
$tz=timezone_open("Asia/Taipei");
echo "Timezone : ".timezone_name_get($tz)."<br>";