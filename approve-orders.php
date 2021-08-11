<?php
session_start();
require('./dpconnection.php');

if(isset($_POST)){
    $username= $_POST['username'];
    $carname= $_POST['carname'];
    if (isset($_POST['approve'])){
        $status = 1;
        $getAvail = "SELECT * FROM cars WHERE name = '$carname'";
        $result = mysqli_query($conn, $getAvail);
        $availablity = mysqli_fetch_array($result);
        $newAvailablity = $availablity[3] - 1;
        $sql2  = "UPDATE cars
        SET availablity= '$newAvailablity'
        WHERE name = '$carname'";
        if ($conn->query($sql2)=== TRUE){
            echo "done";
        }
        }else if (isset($_POST['decline'])){
        $status = 0;
        }
        $sql  = "UPDATE checkout
        SET accepted= '$status'
        WHERE user_username = '$username' and car_name = '$carname'";
        if ($conn->query($sql) === TRUE){
            header('Location:http://localhost/vehicle-rent-management/admin-dash.php');
        }else{
            header('Location:http://localhost/vehicle-rent-management/admin-dash.php');
        }
    }

?>