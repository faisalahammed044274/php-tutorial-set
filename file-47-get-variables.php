<?php

// 1. Does it exist ? or "Has been submitted?"
// 2. Is it empty? or "Does value == NULL"
// 3. Display back to user


if(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])){
    $day = htmlentities($_GET['day']);
    $month = htmlentities($_GET['month']);
    $year = htmlentities($_GET['year']);
    if(!empty($day) && !empty($month) && !empty($year)){
        echo 'Today is '.$day.'/'.$month.'/'.$year;
    }else{
        echo 'Please fill in all fields';
    }
}

?>
<form action="" method="get">
    Day : <br> <input type="text" name="day"> <br>
    Month : <br> <input type="text" name="month"> <br>  
    Year : <br> <input type="text" name="year"> <br> <br>
    <input type="submit" value="Submit">
</form>