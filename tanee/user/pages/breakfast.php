<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
    <title>Breakfast</title>
    <link rel="stylesheet" href="../css/breakfast.css">
    
</head>
<body>
<div class="container"> <div id="backimage"> <center><p class="p1">BREAKFAST</p></center> </div> 
    <?php
     include '../includes/connection.php';
     $sql = "SELECT * FROM `package` WHERE `pack_identifire` = 1";
     $result = mysqli_query($conn, $sql);
    if ($result) {
     if (mysqli_num_rows($result) > 0) {
        
     while ($row = mysqli_fetch_assoc($result)){

     echo '<div class="div"><p class="p2">' . $row['pacTitle'] . '</p> Rs. ' . $row['Pprice'] . '/=<br>Per head with service<hr class="new4">';
        echo '<table style="width:100%">';
        echo '<tr><th><p class="p3">Main Dishes</p><hr class="new4"></th><hr class="new4"></th></tr>';
        echo '<tr><td>' . $row['description'] . '</td><td>' . '</td></tr>';
        echo '</table>';
        echo '<a href="order.php?package=' . $row['pacTitle'] . '&price=' . $row['Pprice'] . '"><input type="submit" name="breakfast1" 
        class="button" value="Book" id="breakfast1"></a>';
        echo '</div>';
     }
     } else {
     }
    } else {
        echo ': ' .mysqli_error($conn);
    }
    ?>
</div>
    
    <!-- <div class="container"> <div id="backimage"> <center><p class="p1">BREAKFAST</p></center> </div> <div class="div"><p class="p2">Breakfast<br> Menu 01</p> Rs. 1,500/=<br>Per head with service<hr class="new4"> <table style="width:100%"> <tr> <th> <p class="p3" >Main Dishes </p><hr class="new4"> </th> <th> <p class="p3" >Drinks</p><hr class="new4"> </th> </tr> <tr> <td> Kiribath (2pcs) </td> <td> Tea/Coffee </td> </tr> <tr> <td> Katta Sambol </td> <td> Kola Kanda & Jaggery </td> </tr> <tr> <td> Fish Ambulthiyal </td> </tr> <tr> <td> Red Rice </td> </tr> <tr> <td> Potato White Curry or Dhal Curry <br>(Select One) </td> </tr> <tr> <td> Tomato Curry </td> </tr> <tr> <td> Seeni Sambol </td> </tr> <tr> <td> Vegetable Noodles </td> </tr> <tr> <td> <P class="p2">Ready to Book?</P> </td> </tr> </table> <a href="order.php"><input type="submit" name="breakfast1" class="button" value="Book" id="breakfast1"></a> </div> <div class="div"><p class="p2">Breakfast<br> Menu 02</p> Rs. 1,750/=<br>Per head with service<hr class="new4"> <table style="width:100%"> <tr> <th> <p class="p3" >Main Dishes </p><hr class="new4"> </th> <th> <p class="p3" >Dessrt</p><hr class="new4"> </th> </tr> <tr> <td> Kiribath (2pcs) </td> <td> Banana </td> </tr> <tr> <td> Katta Sambol </td> <td> Curd & Treacle </td> </tr> <tr> <td> Potato White Curry or Dhal Curry (Select One) </td> </tr> <tr> <td> Tomato Curry </td> </tr> <tr> <td> Seeni Sambol </td> </tr> <tr> <td> Plain Hoppers & Egg Hoppers </td> </tr> <tr> <td> Miris Malu </td> </tr> <tr> <td> Vegetable Noodles </td> </tr> <tr> <td> <p class="p3">Drinks</p><hr class="new4"> </td> </tr> <tr> <td> Tea/Coffee </td> </tr> <tr> <td> <P class="p2">Ready to Book?</P> </td> </tr> </table> <a href="order.php"><input type="submit" name="breakfast2" class="button" value="Book" id="breakfast2"></a> </div>  </div> -->
    <?php include '../../templates/footer.php'; ?> 
</body>
</html>