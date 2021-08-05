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
                <form action="">
                    <div class="username">
                        <label for="">Firstname</label><br><input id="firstname" type="text">
                    </div><br>
                    <div class="username">
                        <label for="">Lastname</label><br><input id="lastname" type="text">
                    </div><br>
                    <div class="username">
                        <label for="">E-mail</label><br><input id="email" type="text">
                    </div><br>
                    <div class="username">
                        <label for="">Username</label><br><input id="username-signup" type="text">
                    </div><br>
                    <div class="username">
                        <label for="">Password</label><br><input id="password-signup" type="text">
                    </div><br>
                    <div class="username">
                        <label for="">Repeat Password</label><br><input id="re-password" type="text">
                    </div><br>
                    <p class="error-user error-field">* All fields are required</p>
                    <p class="error-pass error-repass">* Passwords not matched</p>
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