<?php 
$username='admin';
$password='root';

session_start();

if (isset($_SESSION["username"])) {
	 echo "<h1>WELCOME ". $_SESSION["username"]."!<h1>";
	 echo "<a href='product.php'>Go to product</a><br>";
	 echo "<br><button type='submit'><a href='logout.php'>logout</a></button>";
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