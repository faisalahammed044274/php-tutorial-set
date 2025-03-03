<?php 

ob_start();

$redirect_page = 'product.php';
$redirect = false;
if ($redirect == true) {
header('Location: ' . $redirect_page);
} else {
echo "<h2> This is a Index Page </h2>";
}

ob_end_flush();
// ob_end_clean();
?>




