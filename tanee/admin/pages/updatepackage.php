<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST['update'])){ 
	include("../includes/connect.php");
        $pid=$_POST['pid'];
		$pacTitle=$_POST['pacTitle'];
        $Pprice=$_POST['Pprice'];
        $description=$_POST['description'];


		$sql="UPDATE package SET pacTitle='$pacTitle',Pprice='$Pprice',description='$description' 
		WHERE pid ='$pid' ";
		
  		 $result=mysqli_query($conn,$sql);
   
// if successfully updated. 
		if($result){			     
			header("Location:adminhome.html");
         // echo $row['emp_address'];
		//echo "Hello ".$pid ." package details is successfully updated";
		//echo "<BR>";
		}
	}
	else {
	echo "ERROR";
	}
	?>

</body>
</html>
