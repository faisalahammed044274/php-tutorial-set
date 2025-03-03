<?php
$redirect_page = 'single.php';
$redirect = false;
if ($redirect == true) {
header('Location: ' . $redirect_page);
} else {
echo "<h2> This is a Index Page </h2>";
}
?>