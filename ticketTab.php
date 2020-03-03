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
            <th>Ticket</th>
          </tr>
        </thead>
        <tbody>
         <?php
         
         $email=$_SESSION['email'];
         $sql="SELECT * FROM cars LEFT JOIN trip ON cars.triton=trip.tripon WHERE cars.email='$email' AND status='Done'";
         $res=mysqli_query($mycon,$sql);

        // echo mysqli_num_rows($res);
        while ($rows=mysqli_fetch_array($res)) {
            # code...
 
           echo '
          <tr>
          <td>'.$rows['tripon'].'</td>
          <td>'.$rows['DeparturTime'].'</td>
          <td>'.$rows['ArrivalTime'].'</td>
          ';
     $sql_city="SELECT * FROM city WHERE id='$rows[city_id]'";
     $res3=mysqli_query($mycon,$sql_city);
     $ciy='';
     while ($rowe=mysqli_fetch_array($res3)) {
       # code...
       $ciy=$rowe['city_name'];
     }
 
          echo '<td>'.$ciy.'</td>';
          $sql_city2="SELECT * FROM city WHERE id='$rows[city_to]'";
          $res2=mysqli_query($mycon,$sql_city2);
          $ciy2='';
          while ($rowe=mysqli_fetch_array($res2)) {
            # code...
            $ciy2=$rowe['city_name'];
          }
 
          echo'<td>'.$ciy2.'</td>';
         echo' <td>'.$rows['OperationsDays'].'</td>'
          ;
          if(isset($_SESSION['email'])){
           echo '<td><a href="ticket.php?idon='.$rows['tripon'].' class="btn btn-info">Ticket </a></td>';
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