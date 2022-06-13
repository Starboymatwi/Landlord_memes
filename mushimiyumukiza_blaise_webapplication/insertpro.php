<?php

$conn=mysqli_connect("localhost","root","","izere_canteen"); 
if (isset($_POST['sub'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	

$insert="insert into products(product_id,Name)
 values('$id','$name')";
$query=mysqli_query($conn,$insert);
if ($query) {
	echo "data has been inserted successfully";
}
else  {
	echo "data not insrted";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data insert</title>
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
	<div class="box">
		<h1>Add new Product</h1>
  <form action="" method="POST">
  

    <p><b>Product number</b></p>
    <input type="text" placeholder="Enter product number" name="id" required><br>

    <p><b>Product name</b><p>
    <input type="text" placeholder="Enter product name" name="name" required>

    <input  type="submit" name="sub"value="Add data">
  </form>
</div>

</body>
</html>