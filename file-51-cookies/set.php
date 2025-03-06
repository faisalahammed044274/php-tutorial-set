<?php
// Set the cookie with a lifetime of 35 seconds
setcookie("username", "John Sina", time() + 35, "/");

// Check if the cookie is set
if (isset($_COOKIE["username"])) {
    echo "Cookie Value: " . $_COOKIE["username"] . "<br>";
    echo "Cookie will expire in 35 seconds.";
} else {
    echo "Cookie is not set.";
}

// Unset (delete) the cookie after 35 seconds
if (isset($_COOKIE["username"])) {
    // Set the cookie expiration time to past (negative value)
    setcookie("username", "", time() - 3600, "/");
    echo "<br>Cookie has been deleted.";
}
?>
