<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
if (isset($_POST['submit'])) {  
   include("../includes/connection.php");
   
   $username=$_POST['username'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   
   
	
	$sql = "INSERT INTO persons ". "(username,email,password) ". "VALUES('$username','$email','$pass')";
	
	$results = mysqli_query($conn, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
			else
			{
            header("location: login.html");
			}
			
			
   }  else {

    echo "Your form is not submitted yet please fill the form and visit again";
  } 
?>
</head>
<body>
    
</body>
</html>