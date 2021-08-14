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
    <title>Forget Password</title>
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
                <p> Forget Password Landing Page </p>
            </div>
        </div>
        <div class="right-side">
            <div class="login-container">
                <div class="login">
                    <p>Forget Password</p>
                </div>
                <form action="">
                    <div class="username">
                        <label for="">Email</label><br><input id="email" type="email" required>
                    </div><br>
                    <button type="submit" id="retrieve"> Retrieve Password</button>
                    <div class="signup">
                        <p>Login? </p><a href="./login.html">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./scripts/forgetpass-validation.js"></script>
</body>

</html>

<?php
    unset($_SESSION["error"]);
?>