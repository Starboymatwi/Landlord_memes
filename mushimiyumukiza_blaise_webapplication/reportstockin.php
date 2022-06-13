<html>
 <head> 
    <title>Manager's Signin</title>
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
  <a href="reportstockin.php">Report</a>&nbsp &nbsp &nbsp &nbsp
<a href="insertstockin.php">Insert into stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="updatstockin.php">Update Stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="deletestockin.php"> Report Stock in</a>&nbsp &nbsp &nbsp &nbsp
       <a href="home.php">View products</a>
        <center>
 <h3>Izere canteen product</h3>
  <table border="1">
   <tr> 
    
     <a href="reportstockin.php">Report</a>&nbsp &nbsp &nbsp &nbsp
<a href="insertstockin.php">Insert into stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="updatestockin.php">Update Stock in</a>&nbsp &nbsp &nbsp &nbsp
<a href="deletestockin.php"> delete Stock in</a>&nbsp &nbsp &nbsp &nbsp
    <th>Stockout id</th>
      <th>Stockout date</th> 
      <th>Stockout quantity</th>
     
       <th>Unit price</th> 
       <th>Total price</th> 
   </tr>
    <?php

$conn=mysqli_connect("localhost","root","","izere_canteen");
     $products="SELECT * from stock_in;"; 
     if ($check=mysqli_query($conn, $products)) { 
        if (mysqli_num_rows($check)>0) { 
            while ($prods=mysqli_fetch_assoc($check)) {
             $name=$prods['product_id']; 
             $stockin_price=$prods['date_bought'];
              $stockout_date=$prods['quantity'];
               $stockin_qua=$prods['unit_price']; 
               $stockout_price=$prods['total_Price']; 
              
                 ?>
                  <tr>
                    <td><?php echo "$name"; ?></td> 
                    <td><?php echo "$stockin_price"; ?></td> 
                    <td><?php echo "$stockout_date"; ?></td> 
                    <td><?php echo "$stockin_qua"; ?></td> 
                    <td><?php echo "$stockout_price"; ?></td> 
                    
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