<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Session class</title>
</head>
<body>

<?php




$_SESSION["stu"]="happy Sharma";
$_SESSION["student_2"]="HOney Singh";
echo "session variable are set";
echo "<br>";
echo $_SESSION["student_2"];




?>
</body>
</html>