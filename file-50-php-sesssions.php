<?php

session_start();

$_SESSION['name'] = 'John Doe';
$_SESSION['age'] = 30;
$_SESSION['city'] = 'New York';

echo 'Session variables are set.<br>';
print_r($_SESSION);

// session_unset();
// session_destroy();
// session_reset();



?>