<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataretrive</title>
    <link rel="stylesheet" href="../css/displaya.css">
    </head>
<body>
<?php
      if(isset($_POST['submit'])){ 
        include("../includes/connection.php");
	  	  
	    if($_POST['name']){ 
		
			$search=$_POST['name'];
	
			$sql = 'SELECT * FROM orders WHERE customer_name = "'.$search.'"';

  			$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));
			
  		  if(mysqli_num_rows($result) > 0){ 
	  
	 	     $row=mysqli_fetch_array($result);
	 	     
	         
	  ?>
	  <center>
	  <fieldset>
		<center><legend> <p> Your order details </P></legend></center>
         
         <form name="form" method="POST" action="">
		Package: <input type="text" name="package" readonly
		value="<?php echo $row['package']?>"/><br /> <br />
		
        Price: <input type="text" name="price" 
		value="<?php echo $row['price']?>"/><br /><br />

        Quantity: <input type="text" name="qty" readonly
		value="<?php echo $row['qty']?>"/><br /><br />

        Total: <input type="text" name="total" readonly
		value="<?php echo $row['total']?>"/><br /><br />

        Order Date: <input type="text" name="order_date" readonly
		value="<?php echo $row['order_date']?>"/><br /><br />

        Customer name: <input type="text" name="customer_name" readonly
		value="<?php echo $row['customer_name']?>"/><br /><br />

         Customer contact: <input type="text" name="customer_contact" readonly
		value="<?php echo $row['customer_contact']?>"/><br /><br />

        Customer email: <input type="text" name="customer_email" readonly
		value="<?php echo $row['customer_email']?>"/><br /><br />

        Customer address: <input type="text" name="customer_address" readonly
		value="<?php echo $row['customer_address']?>"/><br /><br />

        hotel: <input type="text" name="hotel" readonly
		value="<?php echo $row['hotel']?>"/><br /><br />

        Order type: <input type="text" name="order_type" readonly
		value="<?php echo $row['order_type']?>"/><br /><br />
        
        <a href="homepage.php"><input type=button name=button value="Back to Home Page" class="btn btn-primary"></a>
		 </form>
	</fieldset>
		  </center>
		 <?php
		 
  		
	 }
    else{
		 echo " No results found "; 
	    }
	}
    
  }
	else{
		header("Location: welcome.html");
		}  
	  	 
?>
<?php 
        include '../../templates/footer.php';
        ?>
</body>
</html>