<?php

$name = "Alex";
$age = 21;

if (strtolower($name) ==='alex'){
	if ($age>=21){
		echo "You are over 21";
	if(1===1){
		echo "Yes, 1 is equal to 1!";
	}
	}
	} else{
		echo "You are not Alex!";
	} 
	
	
echo "<br>";

$payment = 1;

if($payment == true){
	echo "Payment Completed!";
} elseif($payment == false){
	echo "Payment Rejected!";
}else{
	echo "No request found!";
}

echo "</br>";
switch($payment){
	case true:
		echo "Payment Successful!";
	break;
	case false:
		echo "Payment Unsuccessful!";
	break;
	default:
		echo "No Request Found!";
}

?>
