<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $name . '<br>';
    echo $email . '<br>';
    echo $password . '<br>';

}else {
    echo 'You can not browse this page directly';
}

?>

<form action="" method="post">
    <input type="text" name="name"><br>
    <input type="email" name="email"> <br>
    <input type="password" name="password" id=""><br>
    <input type="submit" value="Submit">
</form>