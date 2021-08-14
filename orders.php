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
    <title>Your Orders</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/graph-fonts/EuclidCircular/fonts.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">


</head>

<body>
    <div class="main-container">
        <img class="main-background" src="./images/mercedes-benz.jpg.webp" alt="">
        <div class="main-section">
            <div class="header">
                <img class="logo" src="./images/logo-white.png" alt="">
                 <ul>
                    <li><a href="./index.php#move-to-home"> Home</a></li>
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
            <section>
                
            <div class="seprator">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>
            <section>
              
                <table>
                    <?php
                    require('./dpconnection.php');
                    $username = $_SESSION['username'];
                    $query = "SELECT * FROM checkout WHERE user_username = '$username'";
                    $result = mysqli_query($conn, $query);
                    $count = mysqli_num_rows($result);
                    if ($count > 0){

                        echo "
                          <div class='section-title'>
                            Your Orders
                          </div>
                            <tr>
                                <th>Car Name</th>
                                <th>Pickup-Date</th>
                                <th>Dropoff-Date</th>
                                <th>Total Price</th>
                                <th>Order Status</th>
                            </tr>
                        ";
                   
                    while($order = mysqli_fetch_array($result)){
                        
                        echo "<tr>";
                        echo "<td>Mercedes $order[7]</td>";
                        echo "<td>$order[1]</td>";
                        echo "<td>$order[2]</td>";
                        echo "<td>$order[5]</td>";
                        if ($order[8] == 2){
                            echo "<td><span id='waiting'>Waiting for Approval</span></td>";
                        }else if ($order[8] == 1){
                            echo "<td><span id='approved'>Approved</span></td>";
                        }else{
                            echo "<td><span id='declined'>Declined</span></td>";
                        } echo "</tr>";}}else{
                            echo "<div class='section-title'> You have no orders yet <br> Make your first one</div>";
                            echo "<a class='book-button' href='./booking.php'> Book Now</a>";
                        }
                    ?>
                    

                </table>
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
                    <input id="newsletter" type="text" name=""
                        placeholder="Enter your email to sign up for newsletter..">
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

                <!-- <li><a href="./index.php#move-to-home"> Home</a></li>
                    <li><a href="./index.php#move-to-vheicle">Vehicles</a></li>
                    <li><a href="./index.php#move-to-how">How To Use </a></li>
                    <li><a href="./index.php#move-to-about">About Us</a></li> -->

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
                    Copyright reserved to Khalid Awlaqi 2020-2021 ©
                </div>

            </div>
        </footer>
    </div>
</body>

</html>