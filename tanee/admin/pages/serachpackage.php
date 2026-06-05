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
               Update package details
            </h1>
         </center>
         
       
      </div>
      <center>
         <br><br>

<?php
      if(isset($_POST['submit'])){ 
        include("../includes/connect.php");
				
		$search=$_POST['pid'];
	
$sql = 'SELECT * FROM package WHERE pid = "'.$search.'"';

  			$result = mysqli_query($conn,$sql) or die("Couldn't execute query. ". mysqli_error($conn));	
					
  		  if(mysqli_num_rows($result) > 0){ 
		  
                $row = mysqli_fetch_array($result);
                ?>
                        
                <form name="form" method="POST" action="updatepackage.php">
                <p>
                       Package Title:
                     <input type="text" name="pacTitle" 
                        value="<?php echo $row['pacTitle']?>"/>
                </p>
                 <p>
                     Package price:
                    <input type="text" name="Pprice" 
                    value="<?php echo $row['Pprice']?>"/>
                 </p>
                <p>
                    Description:
                    <input type="text" name="description" 
                    value="<?php echo $row['description']?>"/>
                </p>
                
        

                        
                    <input type="hidden" name="pid" value="<?php echo $search; ?>" />
                                
                    <input type="submit" name="update" id="update" value="Update" class="button" />
                </p>
                </form>
                <?php
		 	
		
	        }
       else{
		 echo " No results found "; 
	    }
	
    
  }
	else{
		header("Location:adminhome.html");
	}  
	  	 
?>

</div>
<br><br><br><br><br><br><br>
<footer class="bg-dark text-center text-white">
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         signaturecuisine © 2023 All Rights Reserved.
         </div>
   </footer>
   
</body>
</html>