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
        if($type[6] == 1){
            header('Location:http://localhost/vehicle-rent-management/admin-dash.php');
        }else{
            header('Location:http://localhost/vehicle-rent-management/index.php');
        }
    }else{
        $_SESSION['error']="Incorrect Username or Password."; 
        header("location:login.php");
    }
}else{
    echo 'error';
}

?>