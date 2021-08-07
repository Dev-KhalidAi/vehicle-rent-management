<?php
session_start();
require('./dpconnection.php');

if(isset($_POST)){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $repassword= $_POST['repassword'];
    $admin = 0;
    $currUsername = $_SESSION["username"];
    // $password == "" && $repassword == ""
    if ($firstname =="" || $lastname =="" || $email =="" || $username =="" || $password =="" || $repassword ==""){
        $_SESSION ['errorPassword'] = "* Fill the blank fields";
        header('Location:http://localhost/vehicle-rent-management/edit-profile.php');
    } else if ($password != $repassword){
        $_SESSION ['errorPassword'] = "* Passwords not matched";
        header('Location:http://localhost/vehicle-rent-management/edit-profile.php');
    }else {
    $sql  = "UPDATE users
    SET firstname='$firstname',
        lastname='$lastname',
        username='$username',
        email='$email',
        password='$password',
        admin = '$admin'
    WHERE username = '$currUsername'";
    if ($conn->query($sql) === TRUE){
        header('Location:http://localhost/vehicle-rent-management/edit-profile.php');
        $_SESSION ['success'] = "* Your profile updated successfully";
        $_SESSION['name'] = $firstname;

    }else{
        header('Location:http://localhost/vehicle-rent-management/edit-profile.php');
        $_SESSION ['errorExsit'] = "* Username or Email is existed";
    }
}
}
?>