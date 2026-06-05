<?php 
if (isset($_POST['submit'])) {  
   include("../includes/connection.php");
   
   $name=$_POST['name'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $massege=$_POST['massege'];
   
   
	
	$sql = "INSERT INTO contact ". "(name,phone,email,address,massege)". "VALUES('$name','$phone','$email','$address','$massege')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            header("location:homepage.php");
			}
			
			
   }  else {

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>

