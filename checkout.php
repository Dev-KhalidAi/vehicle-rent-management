<?php
session_start();
if (!isset($_SESSION["name"])){
    header('Location:http://localhost/vehicle-rent-management/info-redirection.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/checkout.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/graph-fonts/EuclidCircular/fonts.css">
    <script src="https://kit.fontawesome.com/9c6a0911b0.js" crossorigin="anonymous"></script>
    <title>Checkout</title>
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
        <div class="section-title">
            Manage Booking & Checkout
        </div>

        <div class="seprator">
            <div class="square1"></div>
            <div class="line"></div>
            <div class="square1"></div>
        </div>

        <div class="main-box details-box" >
            <div class="car-details">
                <div class="main-title ">You Picked <p id="name"> Mercedes C 300 Coupé</p> <a id = "change" href="./booking.html"> (Change?)</a></div>
            </div>
            <div class="car-details">
               <img src="./images/car2.jpeg.webp" alt="">
            </div>
            <div class="car-price">600SAR \ Day</div>
            <div class="car-details">
                <div class="pickup-date"> <label>Pickup-Date:</label> <input class="date" type="date"></div>
                <div class="pickup-date"> <label>Dropoff-Date:</label> <input class="date" type="date"></div>
            </div>
            <div class="car-details">
                <div class="pickup-date"><label>Pickup-Time:</label> <input class="date" type="time"></div>
                <div class="pickup-date"><label> Dropoff-Time:</label>  <input class="date" type="time"></div>
            </div>
            <div class="buttons">
                <button type="submit" class="btns" id = "availablity-button">Check Availability</button>
                <button type="submit" class="btns" id = "price-button">Calculate Price</button>
            </div>
            <div class="info">
                <p id="available">Available</p>
                <p id="price">Total Price: 600 SAR</p>
                <button class="checkout"> Checkout </button>
            </div>

        </div>
        <div class="main-box checkout-box">
            <div class="car-details">
                <div class="main-title title2"> Checkout </div>
            </div>
            <div class="fill-card">
                <div class="title">
                    <div class="checkout-details">
                        <hr>
                        <p>Checkout Summary</p>
                        <hr>
                    </div>
                    <div class="fill-info">
                        <hr>
                        <p>Fill Your Credit Card Info</p>
                        <hr>
                    </div>
                    
                </div>
                <div class="checkout-info-container">
                    <div class="checkout-summ">
                        <img src="./images/car2.jpeg.webp" alt="">
                        <h5>Mercedes C 300 Coupé</h5>
                        <hr>
                        <h6>Pickup date: 10/9/2021</h6>
                        <h6>Dropoff date: 10/9/2021</h6>
                        <h6>Pickup Time: 6:00 PM</h6>
                        <h6>Dropoff Time: 12:00 AM</h6>
                        <hr>
                        <h3>Total Price: 600 SAR</h3>
                    </div>

                    <div>
                    <form action="">
                        <label for=""> Email </label><input type="text">
                        <label for=""> Card details </label>
                        <div class="test"><input maxlength="16" id="one" type="text" placeholder="Card Number"><i class="fas fa-credit-card cards"></i></div>
                        <div class="card-info">
                            <input id="two" maxlength="5" type="text" placeholder="Expire date">
                            <input maxlength="3" id="three" type="text" placeholder="CVV">
                        </div>
                        <label for=""> Name on card </label><input type="text">
                        <button id="checkout-btn" type="submit">Checkout</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="seprator">
            <div class="square1"></div>
            <div class="line"></div>
            <div class="square1"></div>
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
    <script src="./scripts/checkout.js"></script>
</body>

</html>