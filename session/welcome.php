<?php 
$username='admin';
$password='root';

session_start();

if (isset($_SESSION["username"])) {
	 echo "<h1>WELCOME ". $_SESSION["username"]."!<h1>";
}else{
if ($_POST['uname']==$username && $_POST['pwd']==$password) {
	$_SESSION["username"]=$username;
	echo "<script>location.href='welcome.php'</script>";
}
else{
	echo "<script>alert ('username or password incorrect!')</script>";
		echo "<script>location.href='form.php'</script>";

}
}



?>