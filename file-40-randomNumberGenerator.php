<?php
// $rand = rand();
// $max = getrandmax(); 

// echo $rand . '/' . $max;

if (isset($_POST['roll'])) {
    $rand = rand(1, 20);
    echo "<h3>You rolled :  $rand </h3>";
}else {
    echo "Press the button to roll the dice.";
}

?>

<form action="" method="POST"><br>
    <input type="submit" name="roll" value="Role dice.">
</form>

