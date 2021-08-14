<?php
session_start();
require('./dpconnection.php');

if(isset($_POST)){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = "SELECT * FROM users where username = '$user' and password = '$pass' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);  
    if($count == 1){
        $type = mysqli_fetch_array($result, MYSQLI_NUM);
        $_SESSION['name'] = $type[0];
        $_SESSION['username'] = $type[2];
        $_SESSION['role'] = $type[5];
        $_SESSION['email'] = $type[3];
        if($type[5] == 1){
            header('location:index.php');
        }else{
            header('location:index.php');
        }
    }else{
        $_SESSION['error']="Incorrect Username or Password."; 
        header("location:login.php");
    }
}else{
    echo 'error';
}

?>