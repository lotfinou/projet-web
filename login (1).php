<?php

// Include database file
include 'core/userlogin.php';
session_start();
$user = new user();

// Insert Record in customer table
if(isset($_POST['submit'])) {
    $user->userauth($_POST);
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Free Gym Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <!-- grid-slider -->
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <!-- //grid-slider -->
</head>
<body>
<div class="main-wrapper account-wrapper">
    <div class="account-page">
        <div class="account-center">
            <div class="account-box">
            <form class="text-left clearfix" action="connexion.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="container text-center">
                <button type="submit" class="btn btn-main text-center">Login</button>
              </div>
                    </div>
                    <div class="text-center register-link">
                        Don’t have an account? <a href="register.php">Register Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>