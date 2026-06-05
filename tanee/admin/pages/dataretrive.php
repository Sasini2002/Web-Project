<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/adminhome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>display data</title>
</head>

<body>
<div class="container">
      <div id="backimage">
         <center>
            <h1 class="font1">
              View all Order Details
            </h1>
         </center>
         
       
      </div>
      <center>
         <br><br>
   
<?php
include("../includes/connect.php");
	$sql=	"SELECT * FROM orders";	
	$result = mysqli_query($conn,$sql);
echo "<table border='1' class='customers'>
<tr>
<th>Package:</th>
<th>Price:</th>
<th>Quantity:</th>
<th>Total: </th>
<th>Order Date:</th>
<th>Customer name:</th>
<th>Customer contact:</th>
<th>Customer email:</th>
<th>Customer address:</th>
<th>hotel:</th>
<th> Order type:</th>
</tr>";
//fetches a result row as an  array .
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
 echo "<td>" . $row['package'] . "</td>";
 echo "<td>" . $row['price'] . "</td>";
 echo "<td>" . $row['qty'] . "</td>";
 echo "<td>" . $row['total'] . "</td>";
 echo "<td>" . $row['order_date'] . "</td>";
 echo "<td>" . $row['customer_name'] . "</td>";
 echo "<td>" . $row['customer_contact'] . "</td>";
 echo "<td>" . $row['customer_email'] . "</td>";
 echo "<td>" . $row['customer_address'] . "</td>";
 echo "<td>" . $row['hotel'] . "</td>";
 echo "<td>" . $row['order_type'] . "</td>";
  echo "</tr>";
 
  }//end of while
  
  
  
echo "</table>";
?>
<br>
<a href="adminhome.html"><input type=button name=button value="<- Back to Home Page" class="btn btn-primary"></a>

</div>
<br><br><br><br><br><br><br>
<footer class="bg-dark text-center text-white">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         signaturecuisine © 2023 All Rights Reserved.
         </div>
   </footer>
   
</body>
</html>
