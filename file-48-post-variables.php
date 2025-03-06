<?php

    $match = 'pass123';
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        if (! empty($password)) {
            if ($password == $match) {
                echo 'Password is correct!';
            } else {
                echo 'Password is incorrect!';
            }
        } else {
            echo 'Please fill in the password';
        }
    }
?>

<form method="post"><br> <br>
    Password: <br>
    <input type="password" name="password"><br> <br>
    <input type="submit" value="Submit">
</form>
