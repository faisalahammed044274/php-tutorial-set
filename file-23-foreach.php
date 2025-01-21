<?php
$food = array('Healthy'=>array('salad','vegetables','pasta'),'Unhealthy'=>array('Pizza', 'Ice cream'));

foreach($food as $element=>$inner_array){
    echo "<strong> ".$element."</strong>" . "\n<br>";
    foreach ($inner_array as $item){
        echo $item . "\n<br>";
    };
}
