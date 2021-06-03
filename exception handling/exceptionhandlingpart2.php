<?php

// error_reporting(0);  // just to hide the error that may come

// if we want error occurs and next any part do not run we use die
/*
$num=0;
if ($num==0) {
	# code...
	die("please provide a valid number that is greater than zero");  // die function do not allow to execute next part of code
}
echo 5/$num;
*/




/*
function myfun($denom){
	// it will excute whenever the function is called.
	echo "Control inside the function but before try block <br>";

try{
	echo "inside try block before checking the exception statments <br>";
	if($denom==0){
	echo "inside if block (statments of exception before throw keyword) <br>";

		throw new Exception("number is zero --- inside throw block <br>");
		
		echo "after throw keyword <br>"; // This statmen will never execute--->>> throw se catch ke beech me jo bhi statments honge kabhi bh execute ni honge ::: beacuse throw se direct jump krta hai catch block me.

	}
}
catch(Exception $obj){
	echo "inside the catch block <br>";
	echo "this message is printed at the end after fetching the exception and the exception is -:".$obj->getMessage();  // can print error message
	
	echo "<br>";
	echo $obj->getCode();  // can print code error what error is there in code
	echo "<br>";
	echo $obj->getLine();  // can print the line where the error is present
	echo "<br>";
	echo $obj->getFile();   // can print the Filename in which the error is present 


}

finally{
	echo "this is finally part an runs always as error is there or not in code <br>";
}

echo "outside the catch block <br>";

}


//  myfun(5);  
// Control inside the function but before try block
// inside try block before checking the exception statments
// outside the catch block


myfun(0);

*/




$deno = 4;


class numberIs4Exception extends Exception{            // first this class is to be defined that extends the Exception class than the user defined exception works
function errorMessage(){
	return $this->getMessage();
}

}




try{
	if ($deno==0) {
		throw new Exception("Proivde a number greater than zero <br> ");
		
	}
	if ($deno==4) {
		throw new numberIs4Exception("Proivde a number except than 4 <br> ");  // do not gives error as class is not defined for this user defined exception
		
	}
	echo 7815/$deno;

	}

	catch(Exception $e){
		echo $e->getMessage();
	}

	catch(numberIs4Exception $e){
		echo $e->getMessage();
	}


finally{
	echo "finally is always called no matter error is there in code or not <br>";
}






?>