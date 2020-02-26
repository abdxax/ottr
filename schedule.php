<?php
session_start();
require "conne.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dammam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
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
    
    <!-- Start Table -->
    
    <div class="container">
      <h2>Trips Schedule To Dammam</h2>
      <br><br><br>         
      <table class="table table-borderless">
        <thead class="thead-light">
          <tr>
            <th>Train No.</th>
            <th>Departur Time</th>
            <th>Arrival Time</th>
            <th>Departur Station</th>
            <th>Arrival Station</th>
            <th>Operations Days</th>
            <th>price</th>
          </tr>
        </thead>
        <tbody>
         <?php
         $id_ci=strip_tags($_GET['id_ci']);
         $sql_teb="SELECT * FROM trip LEFT JOIN city ON trip.city_to=city.id WHERE trip.city_to='$id_ci'";
         $res=mysqli_query($mycon,$sql_teb);
         while ($rows=mysqli_fetch_array($res)) {
           # code...

          echo '
         <tr>
         <td>'.$rows['tripon'].'</td>
         <td>'.$rows['DeparturTime'].'</td>
         <td>'.$rows['ArrivalTime'].'</td>
         ';
    $sql_city="SELECT * FROM city WHERE id='$rows[city_id]'";
    $res=mysqli_query($mycon,$sql_city);
    $ciy='';
    while ($rowe=mysqli_fetch_array($res)) {
      # code...
      $ciy=$rowe['city_name'];
    }

         echo '<td>'.$ciy.'</td>

         <td>'.$rows['city_name'].'</td>
         <td>'.$rows['OperationsDays'].'</td>
         <td>'.$rows['price'].'</td>';
         if(isset($_SESSION['email'])){
          echo '<td><a href="addCar.php?idon='.$rows['tripon'].' class="btn btn-info">Booking </a></td>';
         }

         echo '</tr>
          ';
         }

         ?>
        </tbody>
      </table>
      <div class="form-btn">
        <a class="submit-btn" href="book.html"><b>Book Your Tickets </b></a>
      </div>
    </div>
    
    <!-- End Table -->
    
  </body>
</html>