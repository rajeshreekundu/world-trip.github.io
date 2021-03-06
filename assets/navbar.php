<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="top-navbar">
        <div class="container">
            <div class="row pt-2 pb-2">
                <div class="col-md-6 col-lg-7">
                    <ul class="cntct-info d-lg-flex">
                        <li class='pr-3 pl-0'><a href="tel: +91-3456-789-210"><i class="fa fa-phone"></i>Phone: +91-3456-789-210</a></li>
                        <li><a href="mailto:info@worldtrip.com"><i class='fa fa-envelope-o'></i>
                                Email: info@worldtrip.com</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-5">
               
                    <?php
                    if(isset($_SESSION['id'])){
                        echo "<p>" . $_SESSION['name'] ."</p>";
                    }else{
                        echo ' <ul class="auth-link-div d-flex">
                        <li><a href="signup.php">Register</a></li>
                        <li class="bodr-cls pr-0"><a href="login.php">Log-In</a></li>
                        </ul>';
                    }
                    ?>
                    
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white pl-lg-5 pr-lg-5">
        <a class="navbar-brand navbr-logo" href="index.php">
            WorldTrip
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto pl-lg-5 nav-menu-area">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tour Package</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline m-0 nav-searchbar">
                <input class="form-control m-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </nav>
</body>
</html>