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
    <title>Login Page</title>
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
                <p> Login Land Page </p>
            </div>
        </div>
        <div class="right-side">
            <div class="login-container">
                <div class="login">
                    <p>Login</p>
                </div>
                <form action="./authentication.php" method="post">
                    <div class="username">
                    <label for="">Username</label><br><input name="username" id="username" type="text">
                    </div><br>
                    <div class="password">
                    <label for="">Password</label><br><input name="password"id="password" type="password">
                    <a href="./forgetpass.html">Forget Password?</a>
                    </div>
                     <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                    ?>  
                    <!-- <p class="error-user">* All fields are required</p> -->
                    <button id="login-button" type="submit"> Login</button>
                    <div class="signup">
                        <p>Don't have account? </p><a href="./signup.html">Signup here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./scripts/login-validation.js"></script>
</body>

</html>

<?php
    unset($_SESSION["error"]);
    session_destroy();
?>