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
    <script src="https://kit.fontawesome.com/9c6a0911b0.js" crossorigin="anonymous"></script>
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
            Edit Profile
        </div>
        
        <div class="seprator">
            <div class="square1"></div>
            <div class="line"></div>
            <div class="square1"></div>
        </div>

        <div class="edit-profile">
            <form action="./edit-profile-alter.php" method="post">
                <div class="entity">
                    <p class="field-label">Firstname</p> <input name = "firstname" type="text" value = "<?php echo $_SESSION['firstname']?>">
                </div>
                <div class="entity">
                    <p class="field-label">Lastname</p> <input  name = "lastname" type="text" value = "<?php echo $_SESSION['lastname']?>">
                </div>
                <div class="entity">
                    <p class="field-label">E-mail</p> <input  name = "email" type="text" value = "<?php echo $_SESSION['email']?>">
                </div>
                <div class="entity">
                    <p class="field-label">Username</p> <input  name = "username" type="text" value = "<?php echo $_SESSION['username']?>">
                </div>
                <div class="entity">
                    <p class="field-label">Password</p> <input  name = "password" type="password" value = "<?php echo $_SESSION['password']?>">
                </div>
                <div class="entity">
                    <p class="field-label">Re-Password</p> <input  name = "repassword" type="password" value = "<?php echo $_SESSION['repassword']?>">
                </div>
                <div class="errorMsg">
                <?php  if (isset($_SESSION["errorExsit"])){
                    $error = $_SESSION["errorExsit"];
                    echo $error;} else if (isset($_SESSION["errorPassword"])){
                    $error = $_SESSION["errorPassword"];
                    echo $error;}
                    ?>
                </div>
                <div class="sucMsg">
                <?php  if (isset($_SESSION["success"])){
                    $success = $_SESSION["success"];
                    echo $success;}
                    ?>
                </div>
                <button type="submit" class="edit-button">Save</button>
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

</body>

</html>


<?php
    unset($_SESSION["errorExsit"]);
    unset($_SESSION["errorPassword"]);
    unset($_SESSION["success"]);
?>