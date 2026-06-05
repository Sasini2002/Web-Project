<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../css/lunch.css">
</head>
<body>
<div class="container">
        <div id="backimage">
            <center><p class="p1">LUNCH</p></center>
        </div>
        <?php
     include '../includes/connection.php';
     $sql = "SELECT * FROM `package` WHERE `pack_identifire` = 2";
     $result = mysqli_query($conn, $sql);
    if ($result) {
     if (mysqli_num_rows($result) > 0) {
        
     while ($row = mysqli_fetch_assoc($result)){

     echo '<div class="div"><p class="p2">' . $row['pacTitle'] . '</p> Rs. ' . $row['Pprice'] . '/=<br>Per head with service<hr class="new4">';
        echo '<table style="width:100%">';
        echo '<tr><th><p class="p3">Main Dishes</p><hr class="new4"></th><hr class="new4"></th></tr>';
        echo '<tr><td>' . $row['description'] . '</td><td>' . '</td></tr>';
        echo '</table>';
        echo '<a href="order.php?package=' . $row['pacTitle'] . '&price=' . $row['Pprice'] . '"><input type="submit" name="lunch1" class="button" value="Book" id="lunch1"></a>';
        echo '</div>';
     }
     } else {
     }
    } else {
        echo ': ' .mysqli_error($conn);
    }
    ?>
</div>       
    <!--<div class="container">
    <div id="backimage">
        <center><p class="p1">LUNCH</p></center>
    </div>
    
      <div class="div"><p class="p2">Lunch<br> Menu 01</p>  Rs. 2,800/=<br>Per head with service<hr class="new4">
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
                Steamed Basmathi Rice
            </td>
            <td>
                Chocolate Biscuit Pudding
            </td>
        </tr>
        <tr>
            <td>
                Chick Pea Salad
            </td>
            <td>
                Peach Sabayon
            </td>
        </tr>
        <tr>
            <td>
                Vegetable Fried Rice
            </td>
            
        </tr>
        <tr>
            <td>
                Potato Tempered
            </td>
            
        </tr>
        <tr>
            <td>
                Brinjal Morju
            </td>
            
        </tr>
        <tr>
            <td>
                Papadam
            </td>
            
        </tr>
        <tr>
            <td>
                Chatti Roast Chicken with Hot Gravy

            </td>
            
        </tr>
        <tr>
            <td>
                Tomato & Onion Salad
            </td>
            
        </tr>
        <tr>
            <td>
                Mustard Fish Curry
            </td>
            
        </tr>
        <tr>
            <td>
                <P class="p2">Ready to Book?</P>
            </td>
            
        </tr>
        </table>
        <a href="order.php"><input type="submit" name="lunch1" class="button" value="Book" id="lunch1"></a>
    </div>

    <div class="div"><p class="p2">Lunch<br> Menu 02</p>  Rs. 3,000/=<br>Per head with service<hr class="new4">
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
                Steamed Basmathi Rice

            </td>
            <td>
                Cream Caramel
                
            </td>
        </tr>
        <tr>
            <td>
                Fish Cutlet
            </td>
            <td>
                Chocolate Mousse
            </td>
        </tr>
        <tr>
            <td>
                Fish Ambulthiyal
            </td>
            
        </tr>
        <tr>
            <td>
                Dhal Curry
            </td>
            
        </tr>
        <tr>
            <td>
                Ghee Rice with Crispy Onion
            </td>
            
        </tr>
        <tr>
            <td>
                Brinjal Pehi
            </td>
            
        </tr>
        <tr>
            <td>
                Chicken Mustard Dry Curry
            </td>
            
        </tr>
        <tr>
            <td>
                Pork Pepper Curry or Tempered Cuttle Fish (Select One)
            </td>
            
        </tr>
        <tr>
            <td>
                Vegetable Khorma
            </td>
            
        </tr>
        <tr>
            <td>
                potato Curry or Tomato Curry (Select One)
            </td>
            
        </tr>
        <tr>
            <td>
                <P class="p2">Ready to Book?</P>
            </td>
            
        </tr>
        </table>
        <a href="order.php"><input type="submit" name="lunch2" class="button" value="Book" id="lunch2"></a>
    </div>
    
  </div>-->
  
  <?php 
        include '../../templates/footer.php';
        ?>
</body>
</html>