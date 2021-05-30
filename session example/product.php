<?php
session_start();
if (isset($_SESSION['username'])) {
	echo "WELCOME, <h1>".$_SESSION['username']."</h1>";
echo "<br> You are at product page";
 echo "<br><a href='welcome.php'><input type='submit' name='back' value='back'></a>";

}
else{
	echo "<script>location.href='form.php'</script>";
}
?>