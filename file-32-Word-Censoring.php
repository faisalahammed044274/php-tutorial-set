<?php

$find = array('alex', 'billy', 'charlie');
$replace = array('a**x', 'b**y', 'ch****e');

if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
    $user_input = $_POST['user_input'];
    $user_input_new = str_ireplace($find, $replace, $user_input);

    echo $user_input_new;
}
?>

<hr>
<form action="#" method="POST">
    <textarea name="user_input" rows="10" cols="50"><?php $user_input; ?></textarea>
    <input type="submit" value="Submit">
</form>