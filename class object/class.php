<?php
class  Btech{
	public $marks=25;
	public $mark=[2,2.25,226,"arjd",'s'];
	public $hastopper=true;
	public $hasfaliure;

}
// $obj_name=new Class_name();
$ritik=new Btech();
var_dump($ritik); //for only information  and tells type, no of elements, then the elements and their names with their size
echo $ritik->marks; //php me object operator esa hota hai   ->   
echo "<br>";
echo "<br>";
// creates a object of btech claas  named anubhav aur changed the value of marks as it is public and printing it 
$anubhav=new Btech();
$anubhav->marks=23;
echo $anubhav->marks;
echo "<br>";
echo $ritik->marks; // same 25 hi hai kyu ki jis object ke lie change karoge uske lie hi change hoga bas
echo "<br>"; 
echo $anubhav->marks;  // remains changed only here for that object
echo "<br>";

?>
