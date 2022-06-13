<!DOCTYPE html>
<html>
<head>
	<title>delete data into student</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="topnav">
      <a href="home.php"><img src="logo.jpg" width="80px" height="50px"></a>
  <a class="active" href="home.php">Home</a>
  <a class="active" href="products.php">Products</a>
  <a class="active"href="stockin.php">stock In</a>
  <a  class="active"href="stockout.php">Stock out</a>
</div> <br><br><br>
<div class="box">
	<center>
 <a href="reportstockin.php">Report</a>&nbsp &nbsp &nbsp &nbsp
<a href="insertstockin.php">Insert into stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="updatestockin.php">Update Stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="deletestockin.php"> Report Stock in</a>&nbsp &nbsp &nbsp &nbsp
	<center>
		<h1>Delete from student information </h1>			
<form name="action="" method="POST"><br>
    <table>
        <tr>
	<td>Enter id to delete:</td>
    <td><input type="number" name="id" value="id" required=""></td><br>
    </tr>
    <tr>
	<td>Delete:</td>
    <td><input type="SUBMIT" name="sub" value="delete"><br></td>
    </tr>
    </table>
</form>
</center>
</fieldset>
</div>


</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","izere_canteen");
if (isset($_POST['sub'])) {
	$a=$_POST['id'];
	$delete="delete from stock_in where product_id='$a'";
	$query=mysqli_query($con,$delete);
	if ($query) {
		echo "record has been deleted successfully";
	}
	else{
		echo "record not deleted";
	}
}
?>