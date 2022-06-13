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
<center>
  <a href="insertproduct.php">Add new product</a>&nbsp &nbsp &nbsp &nbsp
<a href="deleteproduct.php">Delete Products</a>&nbsp &nbsp &nbsp &nbsp
<a href="updateproduct.php">update product</a>&nbsp &nbsp &nbsp &nbsp
<a href="reportproduct.php">Report</a>&nbsp &nbsp &nbsp &nbsp

	<div class="box">\<fieldset>
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
	$delete="delete from products where product_id='$a'";
	$query=mysqli_query($con,$delete);
	if ($query) {
		echo "record has been deleted successfully";
	}
	else{
		echo "record not deleted";
	}
}
?>