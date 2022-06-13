<!DOCTYPE html>
<html>
<head>
	<title>Update from student</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">

    input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

  background-color: #45a049;
}
  </style>
</head>

<body>
  <center>
    <div class="topnav">
      <a href="home.php"><img src="logo.jpg" width="80px" height="50px"></a>
  <a class="active" href="home.php">Home</a>
  <a class="active" href="products.php">Products</a>
  <a class="active"href="stockin.php">stock In</a>
  <a  class="active"href="stockout.php">Stock out</a>
</div> <br><br><br>
<center>
  <a href="insertpro.php">Add new product</a>&nbsp &nbsp &nbsp &nbsp
<a href="deleteproduct.php">Delete Products</a>&nbsp &nbsp &nbsp &nbsp
<a href="updateproduct.php">update product</a>&nbsp &nbsp &nbsp &nbsp
<a href="reportproduct.php">Report</a>&nbsp &nbsp &nbsp &nbsp
<div class="box">

 
    <h1>Update </H1>      
<form action="" method="POST"><br>
    <table>
        <tr>   
      <td>product number:</td>
        <td><input type="number" name="product_id" value=""><br></td>
        </tr>
        <tr>
        <td>Product name:</td>
        <td><input type="text" name="Name" value=""></td>
        </tr>
        
       
         <tr colspan="2">
        <td><input type="submit" name="submit" value="update"></td>
        </tr>

</table>

</form>
</center>
</div>


</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","izere_canteen");
if (isset($_POST['submit'])) {
	$a=$_POST['product_id'];
	$b=$_POST['Name'];
    
	$select="select * from products where product_id='$a'";
	$check=mysqli_query($con,$select);
	if(mysqli_num_rows($check)>0){
	$update="update products set Name='$b' where product_id='$a'";
	$query=mysqli_query($con,$update);
	if ($query) {
		echo "data in products has been updated successfully ";
	}
	else {
		echo "error while updating products table";
	}
}
}
?>
