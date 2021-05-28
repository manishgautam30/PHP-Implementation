<?php

$uname = $_POST['username'];
$pass=  $_POST['password'];
if(isset($_POST['save'])){
$conn=mysql_connect('localhost','root','','regis');
if(!$conn){
	echo "You are not connected to server";
}
$insertquery="INSERT INTO regis(uname,pass) VALUES('$uname','$pass')";
if (mysql_query($conn,$insertquery)) {
	echo "Record inserted Successfully";
}else

{
	echo "Record not inserted";
}
}
if(isset($_POST['display'])){
	$conn=mysql_connect('localhost','root','','regis');
if(!$conn){
	echo "You are not connected to server";
}
$displayquery="SELECT id,uname,pass FROM regis";
$result=mysql_query($conn,$displayquery);
if(mysql_num_rows($result)>0){
		while($data=mysql_fetch_assoc($result)){
			echo $data['id']." ";
			echo $data['uname']." ";
			echo $data['pass'];
			echo "<br>";
	}

}


else{
	echo "No Record Found!";
}
}







?>