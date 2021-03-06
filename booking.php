<?php
session_start();
require('./dpconnection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/booking.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/graph-fonts/EuclidCircular/fonts.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>
<body>
    <div class="main-container">
        
        <div class="header">
            <img class="logo" src="./images/logo-white.png" alt="">
            <ul>
                <li><a href="./index.php"> Home</a></li>
                <li><a href="./index.php#move-to-vheicle">Vehicles</a></li>
                <li><a href="./index.php#move-to-how"> How To Use</a></li>
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
                    if(isset($_SESSION["role"])){
                        if($_SESSION["role"]==1){
                    echo "<li id='signs'><a href=";
                    
                            echo "./admin-dash.php
                            <i class='far fa-solar-panel'></i>
                            <span id = 'orders'>Admin Dashboard</span></a></li>";
                        }else{
                            echo "";
                        }}
                    ?>

                      <?php
                    if(isset($_SESSION["role"])){
                        if($_SESSION["role"]==1){
                    echo "<li id='signs'><a href=";
                    
                            echo "./add-car.php
                            <i class='far fa-plus-circle'></i>
                            <span id = 'orders'>Add Car</span></a></li>";
                        }else{
                            echo "";
                        }}
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
        <div class="section-title">
            Booking Car
        </div>
        <div class="section-desc">
            lorem ipsum dolor sit amet lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis nulla neque deleniti fuga rerum commodi, ab, maxime ipsa sint illum numquam laborum temporibus perspiciatis quod magni possimus itaque omnis. Repellat!
        </div>
        <div class="seprator">
            <div class="square1"></div>
            <div class="line"></div>
            <div class="square1"></div>
        </div>
        <div class="test">
            <div class="cars-container">
                <!-- <div class="cars">
                    <img src="./images/car1.jpeg.webp" alt="">
                    <button class="book-car" onclick="window.location.href='http://localhost/vehicle-rent-management/checkout.php';">Book Car</button>
                    <div class="car-details">
                        <p class="details"><i class="fas fa-industry"></i> Brand: Mercedes</p>
                        <p class="details"><i class="fas fa-car"></i> Name: C 300 Coup??</p>
                        <p class="details"><i class="fas fa-history"></i> Availability: 6 remaining</p>
                        <p class="details"><i class="fas fa-money-bill-wave"></i> Price: 650\day</p>
                    </div>
                </div> -->
                <?php
                    $query = "SELECT * FROM cars";
                    $result = mysqli_query($conn, $query);
                    while($cars = mysqli_fetch_array($result)){
                        echo "<div class='cars'>";
                        echo "<img src='$cars[5]'>";
                         if ($cars[3]==0){
                            echo "<button disabled = true style = 'background: rgb(138, 138, 138);   cursor:unset;' class='book-car'>Not Available</button>";
                        }else{
                             echo "<button class='book-car'>Book Car</button>";
                        }
                        echo " 
                            <div class='car-details'>
                            <p class='details'><i class='fas fa-industry'></i> Brand: <span>$cars[2]</span></p>
                            <p class='details'><i class='fas fa-car'></i> Name: <span>$cars[1]</span></p>
                            <p class='details'><i class='fas fa-history'></i> Availability: <span id='avail-num'>$cars[3]</span> remaining</p>
                            <p class='details'><i class='fas fa-money-bill-wave'></i> Price: <span>$cars[4] SAR </span>\ day</p>
                            </div>
                            </div>
                        ";
                        }        
                ?>
            </div>
            <div class="seprator2">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>
        </div>
        <footer>
            <div class="main-footer">
                <div class="logo-footer">
                    <img src="./images/logo-white.png" alt="">
                </div>
                <div class="newsletter">
                    <input id="newsletter" type="text" name="" placeholder="Enter your email to sign up for newsletter..">
                </div>
                <div class="socialmedia-icons">
                    <div class="sm-icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-snapchat-ghost"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-behance"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
                <div class="links">
                    <div class="link-item">
                        <a href="./index.php#move-to-home">Home</a>
                    </div>
                    <div class="link-item">
                        <a href="./index.php#move-to-vheicle">Vheicles We Offer</a>
                    </div>
                    <div class="link-item">
                        <a href="./index.php#move-to-how">How to Use</a>
                    </div>
                    <div class="link-item">
                        <a href ="./index.php#move-to-about">About us</a>
                    </div>
                    <div class="links2">
        
                    </div>
                    <div id="line2" class="link-item">
                        Contact us
                    </div>
                    <div id="line2" class="link-item">
                        Terms of Use
                    </div>
                </div>
                <div class="copyright">
                    Copyright reserved to Khalid Awlaqi 2020-2021 ??
                </div>
        
            </div>
        </footer>
    </div>
    <script src="./scripts/booking.js"></script>
</body>
</html>