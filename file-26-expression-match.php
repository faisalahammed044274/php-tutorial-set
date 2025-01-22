<?php
$string = "This is a string";

if(preg_match("/string/",$string)){
    echo "Match found!";
}else{
    echo "No match found!";
}


echo PHP_EOL;


function has_space($string){
    if(preg_match('/ /', $string))
    {
        return true;
    }else{
        return false;
    }       
}

$string2 = "This does have space";
if(has_space($string2)){
    echo "Has at least one space!";}
else{
    echo "Has no space!";
}


?>