<?php

$conn=mysqli_connect("localhost","root","","izere_canteen"); 
if (isset($_POST['sub'])) {
	$id=$_POST['id'];
	$date=$_POST['date'];
	$qua=$_POST['qua'];
	

$insert="insert into stock_out(product_id,date_bought,quantity)
 values('$id','$date','$qua')";
$query=mysqli_query($conn,$insert);
if ($query) {
 $update="update stock_in set date_bought='$date',quantity=quantity -'$qua' where product_id='$id'";
    $query=mysqli_query($conn,$update);
    if ($query) {
        echo "data in products has been updated successfully ";
    }
    else {
        echo "error while updating products table";
    }

}
else  {
	echo "data not inserted";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ibyasohotse</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</style>
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
	 <a href="insertstockout.php">Add new product</a>&nbsp &nbsp &nbsp &nbsp
<a href="deletestockout.php">Delete Products</a>&nbsp &nbsp &nbsp &nbsp
<a href="updatestockout.php">update product</a>&nbsp &nbsp &nbsp &nbsp
<a href="reportstockout.php">Report</a>&nbsp &nbsp &nbsp &nbsp
  <form action="" method="POST">
  

    <p><b>Product number</b></p>
    <input type="text" placeholder="Enter product number" name="id" required><br>
<p><b>Date</b></p>
    <input type="date" placeholder="Enter date bought" name="date" required><br>
<p><b>Quantities</b></p>
    <input type="text" placeholder="Enter quantity amount" name="qua" required><br>



    <input  type="submit" name="sub"value="Add data">
  </form>
</div>

</body>
</html>