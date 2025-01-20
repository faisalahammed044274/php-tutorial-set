<?php

$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip()
{
    global $user_ip;
    $string = "Your IP address is: " . $user_ip;
    echo $string;
}

function local_ip()
{
    global $user_ip;
    $local = "Your local IP address is: " . $user_ip;
    echo $local;
}

echo_ip();
echo "<br>";
local_ip();
