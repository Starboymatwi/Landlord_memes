<html>
 <head> 
    <title>Manager's Signin</title>
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
  <center>
  <a href="insertpro.php">Add new product</a>&nbsp &nbsp &nbsp &nbsp
<a href="deleteproduct.php">Delete Products</a>&nbsp &nbsp &nbsp &nbsp
<a href="updateproduct.php">update product</a>&nbsp &nbsp &nbsp &nbsp
<a href="reportproduct.php">Report</a>&nbsp &nbsp &nbsp &nbsp
       <a href="home.php">View products</a>
        <center>
 <h3>Izere canteen product</h3>
  <table border="1">
   <tr> 
    <th>Product id</th>
     <th>product name</th> 
     

   </tr>
    <?php

$conn=mysqli_connect("localhost","root","","izere_canteen");
     $products="SELECT * from products;"; 
     if ($check=mysqli_query($conn, $products)) { 
        if (mysqli_num_rows($check)>0) { 
            while ($prods=mysqli_fetch_assoc($check)) {
             $id=$prods['product_id']; 
             $name=$prods['Name']; 
           
                 ?>
                  <tr>
                    <td><?php echo "$id"; ?></td> 
                    <td><?php echo "$name"; ?></td> 
                    <?php
                     }
                      }
                      else { echo"<td colspan='8'><center>Not any product available</center></td>"; 
                  }
                       }
                       else { echo"<td colspan='8'><center>Querry error</center></td>"; }
                        ?>
                         </tr> 
                     </table> 
                     <a href="home.php">Sold products</a> 
                 </center>
                  </body> 
                  </html>