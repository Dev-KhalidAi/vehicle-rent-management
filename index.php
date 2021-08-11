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
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/graph-fonts/EuclidCircular/fonts.css">
<script src="https://kit.fontawesome.com/78756aeda5.js" crossorigin="anonymous"></script>

</head>

<body>
    <div  id ="move-to-home" class="main-container">
        <img class="main-background" src="./images/mercedes-benz.jpg.webp" alt="">
        <div class="main-section">
            <div class="header">
                <a href="./index.php"><img class="logo" src="./images/logo-white.png" alt=""></a>
                <ul>
                    <li><a href="#move-to-home"> Home</a></li>
                    <li><a href="#move-to-vheicle">Vehicles</a></li>
                    <li><a href="#move-to-how">How To Use </a></li>
                    <li><a href="#move-to-about">About Us</a></li>

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

                     <?php if (isset($_SESSION['name'])){
                        echo "<li id='signs'><a href='./orders.php'";
                        echo "<i class='fas fa-shopping-basket'></i>";
                        echo " Your Orders";
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
                        echo "Logout";
                    }else{
                        echo "Signup";
                    }
                    ?></a></li>
                </ul>
            </div>
            <section>
                <div class="intro">
                    Welcome To Khalid's Vehicle <br> Rent Management System
                </div><br>
                <div class="describtion">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ab cum officia esse ipsam laboriosam
                    optio. Quaerat, doloribus unde? Accusantium, laudantium. Labore dignissimos sequi repellat in,
                    labori Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam incidunt magni earum nostrum
                    exercitationem qui tenetur autem, quidem a sit tempore illum ex delectus corporis necessitatibus
                    fuga, voluptas sapiente enim!
                </div>
                <a class="book-button" href="./booking.php"> Book Now</a>
            </section>
            <br><br>
            <div id ="move-to-vheicle"  class="seprator">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>
            <section>
                <div class="section-title">
                    Vheicles We Offer
                </div>
                <div class="vheicles-container">
                     <?php
                    $query = "SELECT * FROM cars";
                    $result = mysqli_query($conn, $query);
                    while($cars = mysqli_fetch_array($result)){
                        echo"
                        
                        <div class='vheicle-container'>
                        <div class='car-image-container'>
                            <div class='test'></div>
                            <img src= $cars[5] alt=''>
                        </div>
                        <div class='vheicle-describtion'>
                            $cars[2] $cars[1]
                        </div>
                        <div class='vhecle-year'>
                            2021
                        </div>
                        </div>
                        
                        ";
                        };  
                ?>
                </div>
            </section>
            <div id ="move-to-how" class="seprator">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>
            <section>
                <div class="section-title">
                    How to Use
                </div>
                <div class="use-container">
                    <div class="steps">
                        <i id="icon1" class="fas fa-mouse"></i>
                        <h5>Click on Book Now</h5>
                        <p>From home section you will find <br> a white button "Book Now"</p>
                    </div>
                    <div class="steps">
                        <i  id="icon1" class="fas fa-car"></i>
                        <h5>Choose Car</h5>
                        <p>From the listed car <br> choose the car that suits you</p>
                    </div>
                    <div class="steps">
                        <i id="icon1" class="fas fa-shopping-cart"></i>
                        <h5>Fill Info and Checkout</h5>
                        <p>Fill the reservation information <br> and click on checkout then fill <br> your payments method info</p>
                    </div>
                </div>

            </section>
            <div id ="move-to-about" class="seprator">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>

            <section>
                <div class="about-us">
                    <div  class="section-title">
                        About Us
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias voluptas, id adipisci distinctio ab, similique quos possimus ullam a, rerum tempore qui suscipit laborum quis et debitis praesentium autem voluptatum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe veniam explicabo consequuntur facere nesciunt? Vel aliquid debitis ex maxime? Iure placeat inventore, aut quod nisi repudiandae et eum qui sint.
                    </p>
                </div>
            </section>
            <div class="seprator">
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
                        Home
                    </div>
                    <div class="link-item">
                        Vheicles We Offer
                    </div>
                    <div class="link-item">
                        How to Use
                    </div>
                    <div class="link-item">
                        About us
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
                    Copyright reserved to Khalid Awlaqi 2020-2021 ©
                </div>
        
            </div>
        </footer>
    </div>
    <script src="./scripts/header-script.js"></script>
</body>

</html>