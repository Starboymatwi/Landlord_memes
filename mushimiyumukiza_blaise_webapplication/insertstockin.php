<?php

$conn=mysqli_connect("localhost","root","","izere_canteen"); 
if (isset($_POST['sub'])) {
	$id=$_POST['id'];
	$date=$_POST['date'];
	$qua=$_POST['qua'];
	$price=$_POST['price'];
	$tot=$_POST['tot'];
	

$insert="insert into stock_in(product_id,date_bought,quantity,unit_price,total_Price)
 values('$id','$date','$qua','$price','$tot')";
$query=mysqli_query($conn,$insert);
if ($query) {
	$select="select * from stock_in where product_id='$id'";
	$check=mysqli_query($con,$select);
	if(mysqli_num_rows($check)>0){
		$me=mysqli_query($conn,$check);
                    if($row=mysqli_fetch_array($me)){
                        $qua=$row['quantity']+$qua;
                        $price=$row['unit_price']+$price;
                        $tot=$qua*$price;
                        $update=("update stock_in set product_id='$id',date='$date',quantity='$qua',unit_price='$price',total_price='$tot'");
                        $try=mysqli_query($conn,$update);
}
else  {
	echo "data not inserted";
}
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data insert</title>
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
	<a href="reportstockin.php">Report</a>&nbsp &nbsp &nbsp &nbsp
<a href="insertstockin.php">Insert into stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="updatestockin.php">Update Stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="deletestockin.php"> delete Stock in</a>&nbsp &nbsp &nbsp &nbsp
	<div class="box">
		<h1>Stock in record</h1>
  <form action="" method="POST">
  

    <p><b>Product number</b></p>
    <input type="text" placeholder="Enter product number" name="id" required><br>
<p><b>Date</b></p>
    <input type="date" placeholder="Enter date bought" name="date" required><br>
<p><b>Quantities</b></p>
    <input type="text" placeholder="Enter quantity amount" name="qua" required><br>

<p><b>Price</b></p>
    <input type="number" placeholder="Enter product price" name="price" required><br>

    <p><b>Total price</b><p>
    <input type="number" placeholder="Enter Total price" name="tot" required><br>

    <input  type="submit" name="sub"value="Add data">
  </form>
</div>

</body>
</html>