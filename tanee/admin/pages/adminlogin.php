
<?php
session_start();
$message="";
if(isset($_POST['submit'])) {
	
 include '../includes/connect.php';
 
 $UserName=$_POST["UserName"];
 $pass=$_POST["password"];


 $sql="SELECT * FROM empreg WHERE email='$UserName' and password ='$pass'";

$result = mysqli_query($conn,$sql);

$row= mysqli_fetch_array($result);

   $_SESSION['UserName']=$row['email'];
   
	if(mysqli_num_rows($result) == 1) {
         
       	header("location: adminhome.html");
      }else 
	  {
        $msg = "Your Login Name or Password is invalid";		 
      }
	  
	  echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
  