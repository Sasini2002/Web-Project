<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
        <link rel="stylesheet" href="../css/contactus.css">


        <link rel="stylesheet" href="../css/header.css">
<body>
<div class="container">
        <ul>
            <li><a href="../../user/pages/homepage.php">Home</a></li>
            <li><a href="../../user/pages/overview.php">Overveiw</a></li>
            <li><a href="../../user/pages/menu.php">Service</a></li>
            <li ><a href="../../user/pages/facility.php">Facilities</a></li>
            <li><a href="../../user/pages/gallery.php">Gallery</a></li>
            <li class="active"><a href="../../user/pages/contactus.php">Contact Us</a></li>
         </ul>
    <div id="backimage">
            <center><p class="p2">CONTACT US</p></center>
     </div>
     <center>
     <div class="div">
         <p class="p1">We'll get in touch with you soon enough</p>

     <form action="insertdatacontact.php" method="POST">
         <table>
            <tr>
                <td>
                        Name:<br>
                        <input type="text" name="name" id="name">
                </td>
                <td>
             
                        Phone:<br>
                        <input type="text" name="phone" id="phone">
               
                </td>
            </tr>
            <tr>
            </tr>
                 <td>
                
                        Email:<br>
                        <input type="text" name="email" id="email">
                
                 </td>
                <td>
                 
                        Address:<br>
                        <input type="text" name="address" id="address">
                 
                </td>
             <tr>
                <td colspan="2">
                    
                        Your Message:<br>
                        <textarea id="massege" name="massege" rows="4" cols="50">
                        </textarea>
                  
                </td>
            </tr>
         </table>
        <input type="submit" name="submit" id="submit" value="submit" class="button">

    </form>
     </div>
     </center>
     </div>
<?php 
        include '../../templates/footer.php';
        ?>
</body>
</html>