<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
<link rel="stylesheet" href="../css/menu.css">

<script>
    
</script>
</head>
<body>
    <div class="container">
    <ul class="a">
            <li><a href="../../user/pages/homepage.php">Home</a></li>
            <li><a href="../../user/pages/overview.php">Overveiw</a></li>
            <li class="active"><a href="../../user/pages/menu.php">Service</a></li>
            <li><a href="../../user/pages/facility.php">Facilities</a></li>
            <li><a href="../../user/pages/gallery.php">Gallery</a></li>
            <li><a href="../../user/pages/contactus.php">Contact Us</a></li>
           
          </ul>
    <div id="backimage">
       
          <center><p class="font2">Our team of experienced chefs and event planners work closely with you to create<br>
             a customized menu <br>
             that reflects your unique taste and style.<br>
              From elegant plated dinners to creative food stations, <br>
          we ensure that every bite is a culinary delight that leaves a lasting impression on your guests. </p></center>
          </div>
          <center><P class="font3">OUR MENUS</P>
          <h1>Dedicated towards culinary excellence to create memorable food experiences</h1></center><hr>
          <h2>Time Basis</h2>
          <table>
            <tr>
                <th>
                    <div id="backimage1">
                       <a href="breakfast.php"> <input type="submit" class="button" value="BREAKFAST"></a>
                    </div>
               </th>
               <th>
                <div id="backimage2">
                    <a href="lunch.php"> <input type="submit" class="button" value="LUNCH"></a>
                </div>
                </th>
                <th>
                    <div id="backimage3">
                        <a href="dinner.php"> <input type="submit" class="button" value="DINNER"></a>
                    </div>
                </th>
            </tr>
        </table>
        <br><br><br>
        <div class="container overflow-hidden">
            <div class="row gx-5">
              <div class="col">
                <div class="p-3 border bg-light">
                    <h1>We consider memory as the treasury and that's why we help people to top it up.<br></h1>
                    We understand your sky-scraping requirements and our supplementary services very well complements our reliablity,
                     responsiveness, courtesy of employees and keenness to deliver the best at your special day.<br>
                     <ul>
                        <li>Providing Cutlery, Glassware and Crockery</li><br>
                        <li>Provide Tables for the Buffet with Skirting.</li><br>
                        <li>Uniformed Staff.</li>
                     </ul>
                    
                </div>
            </div>
              <div class="col">
                <div class="p-3 border bg-light"><img src="https://static5.depositphotos.com/1030283/425/i/600/depositphotos_4252616-stock-photo-restaurant-serving.jpg"></div>
              </div>
            
          </div>
          <?php 
        include '../../templates/footer.php';
        ?>
    </div>
    
</body>
</html>