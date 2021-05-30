<html>
<head>
	<title>form</title>
	<style>
		
		table{
			font-size: 30px;
			outline: 2px solid black;
padding: 5px
		}
		th
	{
		background-color: gray;
		color: white;
	}
	td{
		background-color: lightgrey;
	}

	tr>td>input{
		height: 40px;
		width: 250px;
		font-size: 30px;
	}



	</style>
</head>
<body>

<form action="welcome.php" method="post">  
	<!-- if we want to stay on same page there is aglobal variable for that is written in action and is a php content hence written php quotes -->

	<!--                  <?php $_SERVER["PHP_SELF"] ?>              -->

<table align="center">
	<tr>
	<th colspan="2"><h2 align="center">Login</h2></th>
	 	</tr>
	<tr>
		<td><label>Username:</label></td>
		<td><input type="text" name="uname"></td>
	</tr>
	<tr>
		<td><label>Password:</label></td>
		<td><input type="Password" name="pwd"></td>
	</tr>
	<tr>
		<td align="center" colspan="2"><input type="submit" name="Login" value="Login"></input></td>
	</tr>
</table>

</form>

</body>
</html>