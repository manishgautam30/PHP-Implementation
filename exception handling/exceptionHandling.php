<?php

/*
$num=0;
echo 5/0;  // gives error Division by zero
*/

// to solve thi exception
/*
$num=0;
if($num>0){
	echo 5/$num;
}
else{
	echo "please provide the value of num greater than zero";
}
*/

$num=0;
try{
	if ($num==0) {
		throw new Exception("Please provide the value of num greater than zero <br> " );
		
	}
	if ($num==10) {
		throw new Exception('this is my exception'); // created user defined exception named Number10Exception
		
		
	}
	

}
// catch(Exception $e){
// 	echo $e->getMessage();

// }
catch(Exception $num10exep){
	echo "created the exception is this here : ".$num10exep->getMessage()."<br>";
}
 
finally{
	echo "this is the finally block here <br>";
}

?>