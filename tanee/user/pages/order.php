<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/order.css">
    
</head>
<body backimage="https://e0.pxfuel.com/wallpapers/674/138/desktop-wallpaper-bakery-background-bakery.jpg">
    <?php
if(isset($_GET['package']) && isset($_GET['price'])){
    $package = $_GET['package'];
    $price = $_GET['price'];
} else {
header('location: breakfast.php');
exit();
}

?>
        <div class="container">
        <h2>Fill this form to confirm your order.</h2>
        <form action="" class="" method="POST">
                <fieldset>
                    <legend>Selected Package</legend>
                    
                        <div class="food-menu-desc">
                        <h3><?php echo $package; ?></h3>
                        <p class="food-price">$<?php echo $price; ?></p>
                        <input type="hidden" name="package" value="<?php echo $package; ?>">
                        <input type="hidden" name="price" value="<?php echo $price; ?>">
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="" placeholder="select your Quantity" required>
                        </div>
                </fieldset>
                <fieldset>
                    <legend>Custemer Details</legend>
                    <lable for="full-name">Full Name</lable>
                    <input type="text" name="full-name" placeholder="E.g. Vijay Thapa" class="input-responsive" required>
                    <lable for="contact">Phone Number</lable>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>
                    <lable for="email">Email</lable>
                    <input type="email" name="email" placeholder="E.g. hi@vijaythapa.com" class="input-responsive" required>
                    <lable for="address">Address</lable>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>
                    <label for="hotel">Choose a hotel:</label> 
                        <select name="hotel" id="hotel"> 
                            <option value="Signature_cuisine_colombo">Signature cuisine colombo</option> 
                            <option value="Signature_cuisine_galle">Signature cuisine galle</option> 
                            <option value="Signature_cuisine_kandy">Signature cuisine kandy</option> 
                        </select><br><br>
                    <label for="type">Choose a hotel:</label>
                        <select name="type" id="type"> 
                            <option value="dine_in">Dine-In</option> 
                            <option value="delivery">Delivery</option> 
                        </select><br><br>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>
        </form>


        <?php
          if (isset($_POST['submit'])) {  
                //check whether submit button is clicked or not 
                
                    include("../includes/connection.php");
                    //get all te details from te form 
                if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
                    $package=$_POST['package'];
                    $price=$_POST['price'];
                    $qty=$_POST['qty'];
                    $total= $price*$qty;//total=peice*qty 
                    $order_date=date("Y-m-d h:i:sa");///order date
                    $customer_name=$_POST['full-name'];
                    $customer_contact=$_POST['contact'];
                    $customer_email=$_POST['email'];
                    $customer_address=$_POST['address'];
                    $hotel=$_POST['hotel'];
                    $order_type=$_POST['type'];

                    //save order in database
                    //create SQL  to save te data
                    $sql="INSERT INTO `orders` (`package`, `price`, `qty`, `total`, `order_date`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`, `hotel`, `order_type`) 
                    VALUES ('$package','$price','$qty','$total','$order_date','$customer_name','$customer_contact','$customer_email','$customer_address','$hotel','$order_type')";

                   //execute the query
                   if(mysqli_query($conn, $sql)) {
                    
                    echo "<Order placed";
                    header('location: dataretrive.php');
                    exit();
                   } else {
                    echo "<script>alert('Fuck you too');</script>";
                    echo " Error: " .mysqli_error($conn);
                   }
                   
                  
                   
                }
          }
        ?>
        </div>
   
</body>
</html>
