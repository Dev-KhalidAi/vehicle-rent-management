<?php
session_start();
require('./dpconnection.php');

if(isset($_SESSION["username"])){
    $username = $_SESSION["username"];
    $query = "SELECT * FROM users where username = '$username'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);  
    if($count > 0){
        $type = mysqli_fetch_array($result, MYSQLI_NUM);
        $_SESSION['firstname'] = $type[0];
        $_SESSION['lastname'] = $type[1];
        $_SESSION['email'] = $type[3];
        $_SESSION['username'] = $type[2];
        $_SESSION['password'] = $type[4];
        $_SESSION['repassword'] = $type[4];
    
    }else {
       echo "Could not update".$conn -> error;
    }
}else{
    header('Location:http://localhost/vehicle-rent-management/info-redirection.php');

}

if ($_SESSION['role']!=1){
    header('Location:block-user.php');

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
        <link rel="icon" href="./images/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/edit-profile.css">
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
            Add Car
        </div>
        
        <div class="seprator">
            <div class="square1"></div>
            <div class="line"></div>
            <div class="square1"></div>
        </div>

        <div class="edit-profile">
            <form action="./add-car-sql.php" method="post">
                <div class="entity">
                    <p class="field-label">Car Name</p> <input name = "carname" type="text" required>
                </div>
                <div class="entity">
                    <p class="field-label">Car Brand</p> <input  name = "carbrand" type="text"required>
                </div>
                <div class="entity">
                    <p class="field-label">Availability</p> <input  name = "availablity" type="number" required>
                </div>
                <div class="entity">
                    <p class="field-label">Price</p> <input  name = "price" type="number" required>
                </div>
                <div class="entity">
                    <p class="field-label">Car Image (URL)</p> <input  name = "carimage" type="url" required>
                </div>

                <div class="sucMsg">
                <?php  if (isset($_SESSION["caradded"])){
                    $success = $_SESSION["caradded"];
                    echo $success;}
                    ?>
                </div>
              
                <button type="submit" class="edit-button">Add Car</button>
            </form>
        </div>
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

</body>

</html>


<?php
    unset($_SESSION["caradded"]);
    
?>