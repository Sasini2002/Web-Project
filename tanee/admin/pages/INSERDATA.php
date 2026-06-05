<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
if (isset($_POST['submit'])) {  
   include("../includes/connect.php");
   
   $fnam=$_POST['fname'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   
  		
	
	$sql = "INSERT INTO empreg ". "(fname,email,password) ". "VALUES('$fnam','$email','$pass')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            header("location: adminlogin.php");
			}
			
			
   }  else {

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>

  
  
echo "</table>";

</body>
</html>
