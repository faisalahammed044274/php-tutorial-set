<?php

    $find    = ['alex', 'billy', 'dale'];
    $replace = ['A**X', 'B***Y', 'D**E'];

    if (isset($_POST['user_input']) && ! empty($_POST['user_input'])) {
        $user_input = $_POST['user_input'];

        $user_input;
        $user_input_lc       = strtolower($user_input);
        echo $user_input_new = str_ireplace($find, $replace, $user_input_lc);

    } else {
        echo "Please enter a value";
    }

?>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html, body {
        height: 100%;
        width: 100%;
    }
    form{
        padding: 10px;
    }
    input{
        background-color: chartreuse;
        color: blueviolet;
        margin-top: 10px;
        padding: 10px 20px;
    }
    textarea{
        align-items: start;
        justify-items: start;
    }

</style>
<br>
<hr>
<!-- Alex, Billy and Dale are friends, they are playing football. -->
<form action="index.php" method="POST">
        <textarea name="user_input" rows="8" cols="30">
        <?php $user_input?>
        </textarea> <br>
        <input type="submit" value="Submit">
</form>