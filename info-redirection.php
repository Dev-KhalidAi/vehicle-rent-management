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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <title>Edit Profile</title>
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
               <li id="signs"><a href=<?php
                        if(isset($_SESSION["name"])){
                            $name = $_SESSION["name"];
                            echo "./edit-profile.php";
                        }else{
                            echo "./login.php";
                        }
                    ?>>
                    <i class="far fa-user"></i>
                    <?php  if(isset($_SESSION["name"])){
                        $name = $_SESSION["name"];
                        echo "Hello, $name";
                    }else{
                        echo "Signin";
                    }?></a></li>
                    <?php
                    if($_SESSION["role"]==1){
                    echo "<li id='signs'><a href=";
                    
                            echo "./admin-dash.php
                            <i class='far fa-solar-panel'></i>
                            <span id = 'orders'>Admin Dashboard</span></a></li>";
                        }else{
                            echo "";
                        }
                    ?>
          
                     <?php if (isset($_SESSION['name'])){
                        echo "<li id='signs'><a href='./orders.php'";
                        echo "<i class='far fa-shopping-cart'></i> <span id = 'orders'> Your Orders</span>";
                    }?></a></li>
                    <li id="signs"> <a href=<?php
                    
                     if(isset($_SESSION["name"])){
                        echo "./logout.php";
                    }else{
                        echo "./signup.php";
                    }
                    ?> > <?php
                     if(isset($_SESSION["name"])){
                        $name = $_SESSION["name"];
                        echo "<i class='far fa-sign-out-alt'></i> Logout";
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
            <i class="fas fa-ban"></i>
            <div class="section-title warning">
                You must be logged in to see this page
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