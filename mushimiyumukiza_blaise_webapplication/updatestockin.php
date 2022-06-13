<!DOCTYPE html>
<html>
<head>
    <title>Update from student</title>
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
  <a href="reportstockin.php">Report</a>&nbsp &nbsp &nbsp &nbsp
<a href="insertstockin.php">Insert into stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="updatestockin.php">Update Stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="deletestockin.php"> delete Stock in</a>&nbsp &nbsp &nbsp &nbsp
<div class="box">
   
    
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
        <td>Product price:</td>
        <td><input type="text" name="pr" value=""></td>
        </tr>
        <tr>
        <td>total price:</td>
        <td><input type="text" name="tot" value=""></td>
        </tr>
        <tr>
        
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
    $b=$_POST['date'];
    $c=$_POST['qua'];
    $d=$_POST['pr'];
    $e=$_POST['tot'];
    
    $select="select * from stock_in where product_id='$a'";
    $check=mysqli_query($con,$select);
    if(mysqli_num_rows($check)>0){
    $update="update stock_in set date_bought='$b',quantity='$c',unit_price='$d',total_price='$b' where product_id='$a'";
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
