<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/dinner.css">
        
</head>
<body>

 <div class="container">
        <div id="backimage">
            <center><p class="p1">DINNER</p></center>
        </div>
        <?php
     include '../includes/connection.php';
     $sql = "SELECT * FROM `package` WHERE `pack_identifire` = 3";
     $result = mysqli_query($conn, $sql);
    if ($result) {
     if (mysqli_num_rows($result) > 0) {
        
     while ($row = mysqli_fetch_assoc($result)){

     echo '<div class="div"><p class="p2">' . $row['pacTitle'] . '</p> Rs. ' . $row['Pprice'] . '/=<br>Per head with service<hr class="new4">';
        echo '<table style="width:100%">';
        echo '<tr><th><p class="p3">Main Dishes</p><hr class="new4"></th><hr class="new4"></th></tr>';
        echo '<tr><td>' . $row['description'] . '</td><td>' . '</td></tr>';
        echo '</table>';
        echo '<a href="order.php?package=' . $row['pacTitle'] . '&price=' . $row['Pprice'] . '"><input type="submit" name="dinner1" class="button" value="Book" id="dinner1"></a>';
        echo '</div>';
     }
     } else {
     }
    } else {
        echo ': ' .mysqli_error($conn);
    }
    ?>
</div>     
        
       <!--<div class="div"><p class="p2">Dinner<br> Menu 01</p>  Rs. 2,450/=<br>Per head with service<hr class="new4">
            <table style="width:100%">
                <tr>
                    <th>
                        <p class="p3" >Main Dishes </p><hr class="new4">
                    
                    </th>
                    <th>
                        <p class="p3" >Dessert</p><hr class="new4">
                    </th>
            </tr>
            <tr>
                <td>
                    Chicken Fried Rice
                </td>
                <td>
                    Chocolate & Orange Mousse

                </td>
            </tr>
            <tr>
                <td>
                    Chilli Chicken
                </td>
                <td>
                    Cream Caramel
                </td>
            </tr>
            <tr>
                <td>
                    Vegetable Chopsuey 
                </td>
                
            </tr>
            <tr>
                <td>
                    Sweet & Sour Fish
                </td>
                
            </tr>
            <tr>
                <td>
                    Stir Fried Vegetable Noodles
                </td>
                
            </tr>
            <tr>
                <td>
                    Fried Garlic & Kankung
                </td>
                
            </tr>
            <tr>
                <td>
                    Fresh Mushroom Devilled
                </td>
                
            </tr>
            
            <tr>
                <td>
                    <P class="p2">Ready to Book?</P>
                </td>
                
            </tr>
            </table>
            <a href="order.php"><input type="submit" name="dinner1" class="button" value="Book" id="dinner1"></a>
        </div>
    
        <div class="div"><p class="p2">Dinner<br> Menu 02</p>  Rs. 1,750/=<br>Per head with service<hr class="new4">
            <table style="width:100%">
                <tr>
                    <th>
                        <p class="p3" >Main Dishes </p><hr class="new4">
                    
                    </th>
                    <th>
                        <p class="p3" >Dessrt</p><hr class="new4">
                    </th>
            </tr>
            <tr>
                <td>
                    Mixed Vegetable Curry
                </td>
                <td>
                    Cream Caramel or Chocolate Biscuit Pudding<br> (Select One)
                </td>
            </tr>
            <tr>
                <td>
                    Fish Cutlet
                </td>
                
            </tr>
            <tr>
                <td>
                    Vegetable Biriyani
                </td>
                
            </tr>
            <tr>
                <td>
                    Roast Chicken with Spicy Gravy
                </td>
                
            </tr>
            <tr>
                <td>
                    Savoury Egg
                </td>
                
            </tr>
            <tr>
                <td>
                    Raita
                </td>
                
            </tr>
            <tr>
                <td>
                    Fresh Mint Sambol
                </td>
                
            </tr>
            
            <tr>
                <td>
                    <P class="p2">Ready to Book?</P>
                </td>
                
            </tr>
            </table>
            <a href="order.php"><input type="submit" name="dinner2" class="button" value="Book" id="dinner2"></a>
        </div>
        
      </div>-->
      <?php 
        include '../../templates/footer.php';
        ?> 
</body>
</html>