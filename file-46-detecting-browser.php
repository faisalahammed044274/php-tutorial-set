<?php
// if (!empty($_SERVER['HTTP_REFERER'])) {
//     $referrer = $_SERVER['HTTP_REFERER'];
//     echo "Visitor came from: " . htmlspecialchars($referrer);
// } else {
//     echo "No referrer detected.";
// }

$bowser = get_browser(null, true);
$browser = $bowser['browser'];

echo $browser;
