<?php
/*
class car{
public $name;
public $color;
public function setData($name1,$color1){

	$this->name=$name1;
	$this->color=$color1;

}


public function display(){

	echo $this->name; echo "<br>";
	echo $this->color;
	echo "<br>";
	echo "<br>";
}

}


$blackcar=new car();
$redcar=new car();

$blackcar->setData("maruti","blue");
$redcar->setData("bmw","black & darkbrown");

$blackcar->display();
$redcar->display();
*/

/*

class car{
public $name;
public $color;
public function __construct($name1,$color1){

// echo "welcome this is constructor";
	$this->name=$name1;
	$this->color=$color1;

}
public function __destruct(){
	echo $this->name;
	echo " ";
	echo $this->color;
	echo "<br>";
}


}
 
// $blackcar=new car();  // apne aap call ho jata hai ese 
$blackcar=new car("Mercedese","royal blue");
echo $blackcar->name;
echo "<br>";
*/

class mobile{     // ek class me construct & destruct dono hai to pehle construct call hoga
	public function __destruct(){
		echo "destructor called";
		echo "<br>";
	}

	public 	function __construct(){
		echo "constructor called";
		echo "<br>";
	}
	// public function __construct(){      // gives error that already constructor is present
	// 	echo "second constructor";
	// 	echo "<br>";
	// }

	// public function __destruct(){		// same for destructor also
	// 	echo "destructor  2 called";
	// 	echo "<br>";
	// }
}
$samsung=new mobile(); // jab bhi class ka methoda bnta hai apne aap call ho jate hai 




































?>