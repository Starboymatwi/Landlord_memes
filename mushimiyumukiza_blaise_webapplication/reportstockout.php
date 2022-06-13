<html>
 <head> 
    <title>Stock out</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
  <a href="insertstockout.php">Add new product</a>&nbsp &nbsp &nbsp &nbsp
<a href="deletestockout.php">Delete Products</a>&nbsp &nbsp &nbsp &nbsp
<a href="updatestockout.php">update product</a>&nbsp &nbsp &nbsp &nbsp
<a href="reportstockout.php">Report</a>&nbsp &nbsp &nbsp &nbsp
       <a href="home.php">View products</a>
        <center>
 <h3>Izere canteen product</h3>
  <table border="1">
   <tr> 
    <th>Product id</th>
     <th>Stockout date</th>  
      <th>Stockout quantity</th>
      
   </tr>
    <?php

$conn=mysqli_connect("localhost","root","","izere_canteen");
     $products="SELECT * from stock_out;"; 
     if ($check=mysqli_query($conn, $products)) { 
        if (mysqli_num_rows($check)>0) { 
            while ($prods=mysqli_fetch_assoc($check)) {
             $name=$prods['product_id']; 
              $stockout_date=$prods['date_bought'];
               $stockin_qua=$prods['quantity']; 
              
                 ?>
                  <tr>
                    <td><?php echo "$name"; ?></td>  
                    <td><?php echo "$stockout_date"; ?></td> 
                    <td><?php echo "$stockin_qua"; ?></td> 
                    
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