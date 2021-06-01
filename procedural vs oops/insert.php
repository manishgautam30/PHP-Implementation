<?php
$uname=$_POST['uname'];
$pass=$_POST['pwd'];

$hostname='localhost';
$username='root';
$password='';

$conn = new mysqli($hostname,$username);
if($conn->mysqli_connect_error){
	echo "connection failed";
}
else{
	echo "connection created";
}
$insertquery="INSERT INTO regis(uname,pass) VALUES('$username','$password')";
if ($conn->query($insertquery)==True) {
	echo "data inserted successfully";
}
echo "query not inserted";

?>