<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form </title>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <!-- css for navbar -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-main.css">
        
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>   
     <link rel="stylesheet" href="css/login.css">
     
   </head>
<body>

<!-- navbar -->
<?php /*
<div class="site-header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="left-header">
                        <span><i class="fa fa-phone"></i>080 080 0990</span>
                        <span><i class="fa fa-envelope"></i>info@company.com</span>
                    </div> <!-- /.left-header -->
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="right-header text-right">
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div> <!-- /.left-header -->
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.top-header -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="logo">
                        <h1><a href="#" title="Dreri">Vasudev Kalyana Mantapa</a></h1>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-8 col-xs-6">
                    <div class="menu text-right hidden-sm hidden-xs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <?php
                        if (strpos($_SERVER['PHP_SELF'], 'booking.php') === false) {
                            echo '<li><a href="login.php">Booking</a></li>';
                          }
                          ?>
                            <li><a href="./#portfolio" class="external">Hall-Photos</a></li>
                            <li><a href="./#about">About</a></li>
                            <li><a href="./#contact">Feedback</a></li>
                            <!-- <li><a href="http://www.facebook.com/templatemo" class="external">External</a></li> -->
                        </ul>
                    </div> <!-- /.menu -->
                </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
            <div class="responsive-menu text-right visible-xs visible-sm">
                <a href="#" class="toggle-menu fa fa-bars"></a>
                <div class="menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <?php
                        if (strpos($_SERVER['PHP_SELF'], 'booking.php') === false) {
                            echo '<li><a href="login.php">Booking</a></li>';
                          }
                          ?>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <!-- <li><a href="http://www.facebook.com/templatemo" class="external">External</a></li> -->
                    </ul>
                </div> <!-- /.menu -->
            </div> <!-- /.responsive-menu -->
        </div> <!-- /.container -->
    </div> <!-- /.header -->
 </div> <!-- /.site-header -->
</div> /#home
*/ ?>


<?php include("navbar.php"); ?>




<div class="lgnbox">
  <div class="container1">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/login2_image.jpeg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/login_image.jpeg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="reset.php">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
  </div>








<?php include("footer.php");?>
<script src="js/writing.js"></script>


</body>
</html>

