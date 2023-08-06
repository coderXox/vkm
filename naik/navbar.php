<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Compass Responsive Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Compass Template
    http://www.templatemo.com/tm-454-compass
    -->
    <meta charset="UTF-8">

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
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>
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
                        <!-- <h1><a href="#" title="Dreri">Vasudev Kalyana Mantapa</a></h1> -->
                        <h1><a href="#" title="Dreri" class="typewrite" data-period="2000" data-type='[ "Vasudev Kalyana Mantapa." ]'>
                        <span class="wrap"></span></a></h1>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-8 col-xs-6">
                    <div class="menu text-right hidden-sm hidden-xs">
                        <ul>
                            <li><a href="index.html" class="external">Home</a></li>
                            <?php
                        if (strpos($_SERVER['PHP_SELF'], 'booking.php') === false) {
                            echo '<li><a href="login.php" class="external">Booking</a></li>';
                          }
                          ?>
                            <li><a href="./#portfolio" class="external">Hall-Photos</a></li>
                            <li><a href="./#about" class="external">About</a></li>
                            <li><a href="./#contact" class="external">Feedback</a></li>
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
                        <li><a href="#portfolio" class="external">Portfolio</a></li>
                        <li><a href="#about" class="external">About</a></li>
                        <li><a href="#contact" class="external">Feedback</a></li>

                        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>

                        <!-- <li><a href="http://www.facebook.com/templatemo" class="external">External</a></li> -->
                    </ul>
                </div> <!-- /.menu -->
            </div> <!-- /.responsive-menu -->
        </div> <!-- /.container -->
    </div> <!-- /.header -->
 </div> <!-- /.site-header -->
</div> <!-- /#home -->





<script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/writing.js"></script>



</body>
</html>


















