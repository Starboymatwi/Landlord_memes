<!DOCTYPE html>
<html>
<head>
    <title>Update Stock out</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   
</style>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
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
  <a href="insertstockout.php">Add new product</a>&nbsp &nbsp &nbsp &nbsp
<a href="deletestockout.php">Delete Products</a>&nbsp &nbsp &nbsp &nbsp
<a href="updatestockout.php">update product</a>&nbsp &nbsp &nbsp &nbsp
<a href="reportstockout.php">Report</a>&nbsp &nbsp &nbsp &nbsp

    <div class="box">
         <center>
        <h1>Update </H1>            
<form action="" method="POST"><br>
    <table>
        <tr>   
        <td>product number:</td>
        <td><input type="number" name="product_id" value=""><br></td>
        </tr>
        <tr>
        <td>Date:</td>
        <td><input type="date" name="date" value=""></td>
        </tr>
        <tr>
        <td>Product Quantity:</td>
        <td><input type="text" name="qua" value=""></td>
        </tr>

        <tr>
        
        <td><input type="submit" name="submit" value="update"></td>
        </tr>

</table>
</fieldset>
</form>
</center>

    </div>
   
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","izere_canteen");
if (isset($_POST['submit'])) {
    $a=$_POST['product_id'];
    $b=$_POST['date'];
    $c=$_POST['qua'];
    
    
    $select="select * from stock_out where product_id='$a'";
    $check=mysqli_query($con,$select);
    if(mysqli_num_rows($check)>0){
    $update="update stock_out set date_bought='$b',quantity='$c'where product_id='$a'";
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
