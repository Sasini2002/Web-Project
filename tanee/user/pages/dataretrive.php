
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataretrive</title>
    <link rel="stylesheet" href="../css/dataretrive.css">
    </head>
<body>

<?php
	include("../includes/connection.php");
		
	$result = mysqli_query($conn,"SELECT customer_name FROM orders");
?>

<br><br>

<center><p> Order has been generated successfully. </p>
<div class="p1">If you want to see your order details please select your user name below field</p>

<form  method="POST" action="dislpayform.php"> 
 
<select name="name">

<?php 
while($row = mysqli_fetch_array($result)){ 

echo "<option value='". $row['customer_name']."'>".$row['customer_name']
 .'</option>';
}
?> 

<input  type="submit" name="submit" value="Search" class="btn btn-primary"> 
</select> 
    </form>
</center> 

<br>
<br><br><br><br><br><br><br><br><br><br><br><br>

<?php 
        include '../../templates/footer.php';
        ?>
</body>
</html>