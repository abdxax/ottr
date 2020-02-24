<?php
require "conne.php";
if(isset($_POST['sub'])){
    $name=strip_tags($_POST['first_name'])." ".strip_tags($_POST['last_name']);
    $email=strip_tags($_POST['email']);
    $phone=strip_tags($_POST['phone']);
    $age=strip_tags($_POST['age']);
    $national=strip_tags($_POST['national']);
    $id=strip_tags($_POST['id']);
    $gender=strip_tags($_POST['gender']);
    $password_confirmation=strip_tags($_POST['password_confirmation']);
    $password=strip_tags($_POST['password']);
    if($password===$password_confirmation){
        $sql="INSERT INTO user (email,password,role)VALUES ('$email','$password_confirmation','2')";
        if(mysqli_query($mycon,$sql)){
            echo "dd";
        }
        else{
            echo "S";
        }
    }

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OTTRS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
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
            <li><a href="#register">REGISTER</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- End Navbar -->
    
    <!-- Start Main Section -->
    
    <div class="jumbotron text-center">
      <h1>ONLINE TRAINE TICKET SYSTEM</h1>
      <p>The Best in Domestic Train Trip</p>
    </div>
    
    <!-- End Main Section -->

    <!-- Start About Section -->
    
    <div id="about" class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <h2>About </h2><br>
          <h4>established in 2016 in Riyadh and Dammam, then expanded to Jeddah, Makkah, Madinah and finally Dhahran City. Our goal is to facilitate the transportation of passengers via rail for domestic flights</h4><br>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-signal logo"></span>
        </div>
      </div>
    </div>
    
    <!-- End About Section -->

    <!-- Start Services Section -->
    
    <div id="services" class="container-fluid text-center">
      <h2>SERVICES</h2>
      <h4>What we offer</h4>
      <br>
      <div class="row slideanim">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-certificate logo-small"></span>
          <h4>Ticket and seat reservation online</h4>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-heart logo-small"></span>
          <h4>Special needs services</h4>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-lock logo-small"></span>
          <h4>Luggage shipping</h4>
        </div>
      </div>
      <br><br>
    </div>
    
    <!-- End Services Section -->
    
    <!-- Start Train trips Section -->
    
    <div id="Flight" class="container-fluid text-center bg-grey">
      <h2>Train trips</h2><br>
      <h4>where do you want to go?</h4>
      <div class="row text-center slideanim">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/m1.jpg" alt="Makkah">
            <p><strong>Makkah</strong></p>
            <p><a href="schedule.html">Train trips to Makkah</a></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/mm2.jpg" alt="Madeena" >
            <p><strong>Madeena</strong></p>
            <p><a href="schedule.html">Train trips to Madeena</a></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/d.jpg" alt="Dammam" >
            <p><strong>Dammam</strong></p>
            <p><a href="schedule.html">Train trips to Dammam </a></p>
          </div>
        </div>
      </div>
      <div class="row text-center slideanim">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/dd.jpg" alt="Dhahran" >
            <p><strong>Dhahran</strong></p>
            <p><a href="schedule.html">Train trips to Dhahran</a></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/r.jpg" alt="Riyadh" >
            <p><strong>Riyadh </strong></p>
            <p><a href="schedule.html">Train trips to Riyadh</a></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/j.jpg" alt="Jeddah" >
            <p><strong>Jeddah</strong></p>
            <p><a href="schedule.html">Train trips to Jeddah</a></p>
          </div>
        </div>
      </div><br>
      <h2>What our customers say</h2>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4>"This company is the best. I am so happy with the result!"<br></h4>
          </div>
          <div class="item">
            <h4>"One word... WOW!!"<br></h4>
          </div>
          <div class="item">
            <h4>"Could I... BE any more happy with this company?"<br></h4>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
    <!-- End Train trips Section -->
    
    <!-- Start Register Section -->
    
    <div id="pricing" class="container-fluid">
      <div class="text-center">
        <h2>Register</h2>
        <h4>If you register before <a id='login' style="width:auto;">Login</a></h4>
        <div id="id01" class="modal">
          <span id="exit" title="Close Modal">&times;</span>
          <form class="modal-content" action="index.html">
            <div class="container">
              <h1>Login</h1>
              <p>Please fill in this form to login.</p>    
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
              <br>
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
              <br>
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
              <div class="clearfix">
                <button type="submit" class="signupbtn">login </button>
                <button type="button" id='test' class="cancelbtn">Cancel</button>
              </div>
            </div>
          </form>
        </div>
        <div class="panel-body">
          <form role="form" method="POST">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="number" name="phone" id="phonen" class="form-control input-sm" placeholder="Phone Number">
            </div>
            <div class="form-group">
              <input type="num" name="age" id="number" class="form-control input-sm" placeholder="Age">
            </div>
            <div class="form-group">
              <input type="text" name="national" id="na" class="form-control input-sm" placeholder="Nationality">
            </div>
            <div class="form-group">
              <input type="num" name="id" id="id" class="form-control input-sm" placeholder="ID">
            </div>
            <h3>Gender</h3>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                  </div>
                </div>
              </div>
            <input type="submit" value="Register" name="sub" class="btn btn-info btn-block">
          </form>
        </div>
      </div>
    </div>
    
    <!-- End Register Section -->
    
    
    <!-- Start Contact Section -->
    
    <div id="contact" class="container-fluid bg-grey">
      <h2 class="text-center">CONTACT</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Riyadh,KSA</p>
          <p><span class="glyphicon glyphicon-phone"></span> +996 531119081</p>
          <p><span class="glyphicon glyphicon-envelope"></span> ottrs@hotmail.com</p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Contact Section -->
    
    <!-- Start Footer Section -->
    
    <footer class="container-fluid text-center">
      <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
    </footer>
    
    <!-- End Footer Section -->

    <script src="js/main.js"></script>
  </body>
</html>