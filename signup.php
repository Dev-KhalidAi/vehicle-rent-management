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
    <link rel="stylesheet" href="./styles/forms.css">
    <title>Signup Page</title>
</head>

<body>
    <div class="container">
        <div class="left-side">
            <div class="logo-back">
                <img src="./images/Logo.svg" alt="">
            </div>
            <div class="title">
                <a href="./index.php"><img src="./images/logo-white.png" alt=""></a>
                <h5> Khalid's Rent Management System </h5>
                <p> Signup Land Page </p>
            </div>
        </div>
        <div class="right-side">
            <div class="login-container">
                <div class="login">
                    <p>Signup</p>
                </div>
                <form action="./add-user.php" method="post">
                    <div class="username">
                        <label for="">Firstname</label><br><input name ="firstname" id="firstname" type="text">
                    </div><br>
                    <div class="username">
                        <label for="">Lastname</label><br><input name ="lastname" id="lastname" type="text">
                    </div><br>
                    <div class="username">
                        <label for="">E-mail</label><br><input name ="email" id="email" type="email">
                    </div><br>
                    <div class="username">
                        <label for="">Username</label><br><input name ="username" id="username-signup" type="text">
                    </div><br>
                    <div class="username">
                        <label for="">Password</label><br><input name ="password" id="password-signup" type="password">
                    </div><br>
                    <div class="username">
                        <label for="">Repeat Password</label><br><input name ="rpassword" id="re-password" type="password">
                    </div><br>
                    <p class="error-pass error-repass"><?php
                    if(isset($_SESSION["errorEmpty"])){
                        $error = $_SESSION["errorEmpty"];
                        echo $error;
                    }else if (isset($_SESSION["errorRequire"])){
                        $error = $_SESSION["errorRequire"];
                        echo $error;
                    }else if (isset($_SESSION["errorExisted"])){
                         $error = $_SESSION["errorExisted"];
                        echo $error;
                    }
                    ?></p>
                    <button id="signup-button" type="submit"> Sign Up</button>
                    <div class="signup">
                        <p>Already have account? </p><a href="./login.html">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./scripts/signup-validation.js"></script>
</body>

</html>

<?php
    unset($_SESSION["errorEmpty"]);
    unset($_SESSION["errorRequire"]);
    unset($_SESSION["errorExisted"]);
?>