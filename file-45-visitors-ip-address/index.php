<?php

// require 'conf.inc.php';

// foreach ($ip_blocked as $ip) {
//     if ($ip == $ip_address) {
//         die('Your IP address has been blocked');
//     }
// }

// echo "Your IP Address is: $ip_address";

// $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
// $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
// $remote_addr = $_SERVER['REMOTE_ADDR'];
// // $ip_address = $http_client_ip ? $http_client_ip : ($http_x_forwarded_for ? $http_x_forwarded_for : $remote_addr);
// if(!empty($http_client_ip)){
//     $ip_address = $http_client_ip;
// } elseif (!empty($http_x_forwarded_for)){
//     $ip_address = $http_x_forwarded_for;
// } else {
//     $ip_address = $remote_addr;
// }

// echo "Your IP Address is: $ip_address";


function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP)) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_list = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        foreach ($ip_list as $ip) {
            $ip = trim($ip);
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    return $_SERVER['REMOTE_ADDR'];
}

$ip_address = getRealIP();
echo "Your IP Address is: $ip_address";

?>