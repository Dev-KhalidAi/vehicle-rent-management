<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <link rel="icon" href="./images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/info-redirection.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/graph-fonts/EuclidCircular/fonts.css">
    <script src="https://kit.fontawesome.com/9c6a0911b0.js" crossorigin="anonymous"></script>
    <title>Success</title>
</head>

<body>
    <div class="main-container">
        <div class="header">
            <img class="logo" src="./images/logo-white.png" alt="">
            <ul>
                <li><a href="./index.php"> Home</a></li>
                <li><a href="./index.php#move-to-vheicle">Vehicles</a></li>
                <li><a href="./index.php#move-to-how">How To Use </a></li>
                <li><a href="./index.php#move-to-about">About Us</a></li>
            </ul>
            <ul class="sign-in-up">
                <li id="signs"> <a href=<?php
                        if(isset($_SESSION["name"])){
                        $name = $_SESSION["name"];
                        echo "./edit-profile.php";
                    }else{
                        echo "./login.php";
                    }
                    ?> >
                    <i class="far fa-user"> </i>
                    <?php  if(isset($_SESSION["name"])){
                        $name = $_SESSION["name"];
                        echo "Hello, $name";
                    }else{
                        echo "Signin";
                    } ?> </a></li>
                    <li id="signs"> <a href=<?php
                    
                     if(isset($_SESSION["name"])){
                        echo "./login.php";
                    }else{
                        echo "./signup.php";
                    }
                    ?> > <?php
                     if(isset($_SESSION["name"])){
                        $name = $_SESSION["name"];
                        echo "Logout";
                    }else{
                        echo "Signup";
                    }
                    ?></a></li>
            </ul>
        </div>
       
        <div class="title-container">
            <div class="seprator">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>
            <i  id = "check"class="far fa-check-circle"></i>
            <div class="section-title warning">
               You order has been placed <span id="success">Successfully</span>, <br> once approved will send you a confirmatiom email !
            </div>
            
            <div class="seprator">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>
        </div>
    </div>


</body>

</html>