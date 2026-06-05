<?php
session_start();
$message="";
if(isset($_POST['submit'])) {
	
 include '../includes/connection.php';
 
 $UserName=$_POST["UserName"];
 $pass=$_POST["password"];


 $sql="SELECT * FROM persons WHERE email='$UserName' and password ='$pass'";

$result = mysqli_query($conn,$sql);

$row= mysqli_fetch_array($result);

   $_SESSION['UserName']=$row['email'];
   
	if(mysqli_num_rows($result) == 1) {
         
       	header("location: menu.php");
      }else 
	  {
        $msg = "Your Login Name or Password is invalid";		 
      }
	  
	  echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
