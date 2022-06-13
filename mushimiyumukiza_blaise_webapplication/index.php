<?php
$conn=mysqli_connect("localhost","root","","izere_canteen");
session_start();
if (isset($_POST['submit'])) {
	$name=$_POST['un'];
	$pass=$_POST['pw'];
	$select="select * from users where user_name='$name' and password='$pass'";
	if ($check=mysqli_query($conn,$select)) {
		if (mysqli_num_rows($check)>0) {
			header("location:home.php");
		}
		else{
			echo "incorerrect username and password";
		}
	}else 
		{
		echo "selecting query error";
		}

}

  ?>
  <!DOCTYPE html>
<html>
<head>
	<title>log into account</title>
	
</head>
<body>
	<form method="POST">
	<center>
<table cell padding="2", cell spacing="2">
	
	<tr>
		<td>user name:</td><td><input type="text" name="un"></td>
	</tr>
	<tr>
		<td>password:</td><td><input type="password" name="pw"></td>
	</tr>
	<tr>
		<td><input type="submit" name="submit"></td>
	</tr>
</table>
</form>
</center>
</body>
</html>