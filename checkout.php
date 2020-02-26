<?php
session_start();
require "conne.php";
if (isset($_POST['ceck'])) {
 $email=$_SESSION['email'];
 $sql_up="UPDATE cars SET status='Done' WHERE email='$email'";
 if(mysqli_query($mycon,$sql_up)){
  header("location:checkout.php");
 }
  # code...
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Out</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/checkout.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- Start Navbar -->
    
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage">OTTRS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#traintrips">TRAIN TRIPS</a></li>
            
            <li><a href="#contact">CONTACT</a></li>
            <?php 
            if(isset($_SESSION['email'])){
              echo '<li><a href="checkout.php">Check Out</a></li></li>
              <li><a href="logout.php">Logout</a></li></li>

              ';

            }
            else{
              echo'<li><a href="#register">REGISTER</a></li>';
            }


            ?>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>
    
    <!-- End Navbar -->
    
    <!-- Start Checkout -->
    <div class="container">
      <h2>Checkout</h2>
      <div class="row">
        <div class="col-75">
          <div class="container">
            <form method="POST">
              <div class="row">
                <div class="col-50">
                  <h3>Billing Address</h3>
                  <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Ahmad">
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="ahmad@example.com">
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" id="city" name="city" placeholder="">
                  <div class="row">
                    <div class="col-50">
                      <label for="state">State</label>
                      <input type="text" id="state" name="state" placeholder="NY">
                    </div>
                  </div>
                </div>
                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                  <label for="ccnum">Credit card number</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September">
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2018">
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                  </div>
                </div>
              </div>
              <label>
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
              </label>
              <input type="submit" value="Continue to checkout" name="ceck" class="btn">
            </form>
          </div>
        </div>
        <div class="col-25">
          <div class="container">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
            <?php
            $email=$_SESSION['email'];
            $sql_co="SELECT * FROM cars LEFT JOIN trip ON  cars.triton = trip.tripon WHERE cars.email='$email' AND cars.status='new'";
            $res=mysqli_query($mycon,$sql_co);
            $total=0;
            while ($rwo=mysqli_fetch_array($res)) {
              # code...
              echo '  <p><a href="#">'.$rwo['triton'].'</a> <span class="price">'.$rwo['price'].'</span></p>';
              $total+=$rwo['price'];


            }

            ?>
            
            <hr>
            <p>Total <span class="price" style="color:black"><b><?php echo $total." ";?>SR</b></span></p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Checkout -->
</body>
</html>
