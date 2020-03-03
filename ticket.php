<?php
session_start();
require "conne.php";
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
    <link href="css/ticket.css" rel="stylesheet">
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
            <li><a href="index.html">HOME</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>
    
    <!-- End Navbar -->
    
    <!-- Start Ticket -->
    
    <section class="container">
      <h1>Ticket</h1>
      <div class="row">
      <?php
      $id_trip=$_GET['idon'];
      $sql="SELECT * FROM trip WHERE tripon='$id_trip'";
      $res=mysqli_query($mycon,$sql);
      while($rows=mysqli_fetch_array($res)){
        echo '
        <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>'.$rows['date_trav'].'</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>live in sydney</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>'.$rows['OperationsDays'].' '.$rows['date_trav'].'</span>
               <span>'.$rows['DeparturTime'].' to '.$rows['ArrivalTime'].'</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
            <a href="#">tickets</a>
          </section>
        </article>
        ';
      }


?>
       <!-- <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>23</span><span>feb</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>live in sydney</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>wednesday 28 december 2014</span>
               <span>08:55pm to 12:00 am</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
            <a href="#">tickets</a>
          </section>
        </article>-->
      <!--  <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>23</span><span>feb</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>corner obsest program</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>wednesday 28 december 2014</span>
               <span>08:55pm to 12:00 am</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
            <a href="#">tickets</a>
          </section>
        </article>
      </div>
      <div class="row">
        <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>23</span><span>feb</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>music kaboom festivel</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>wednesday 28 december 2014</span>
               <span>08:55pm to 12:00 am</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
           <a href="#">cancel</a>
          </section>
        </article>
        <article class="card fl-left">
          <section class="date">
            <time datetime="23th feb">
              <span>23</span><span>feb</span>
            </time>
          </section>
          <section class="card-cont">
            <small>dj khaled</small>
            <h3>hello dubai festivel</h3>
            <div class="even-date">
             <i class="fa fa-calendar"></i>
             <time>
               <span>wednesday 28 december 2014</span>
               <span>08:55pm to 12:00 am</span>
             </time>
            </div>
            <div class="even-info">
              <i class="fa fa-map-marker"></i>
              <p>
                nexen square for people australia, sydney
              </p>
            </div>
            <a href="#">canceled</a>
          </section>
        </article>-->
      </div>
    </section>
    
  <!-- End Ticket -->
</body>
</html>