<?php
session_start();
require('./dpconnection.php');

if(isset($_POST)){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $repass = $_POST['rpassword'];
    $admin = 0;
   
    if ($fname != "" && $lname !="" && $email != "" && $username != ""){
         if ($pass == $repass and $pass != "" and $repass != ""){
        $query = "INSERT INTO users (firstname, lastname, username, email, password, admin) VALUES ('$fname', '$lname', '$username', '$email', '$pass', '$admin')";
        if ($conn->query($query) === TRUE) {
        header('location:login.php');
        } else {
        $_SESSION['errorExisted']="* User is already existed"; 
        header("location:signup.php");
        }
    }else {
        $_SESSION['errorEmpty']="* Passwords not matched"; 
        header("location:signup.php");
    }
    } else {
        $_SESSION['errorRequire']="* All fields required"; 
        header("location:signup.php");
    }
}
?>