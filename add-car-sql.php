<?php
session_start();
require('./dpconnection.php');

if(isset($_POST)){
    $carName = $_POST['carname'];
    $carBrand = $_POST['carbrand'];
    $availablity = $_POST['availablity'];
    $carPrice = $_POST['price'];
    $carImage = $_POST['carimage'];
   
    
        $query = "INSERT INTO cars (name, brand, availablity, price, image) VALUES ('$carName', '$carBrand', '$availablity', '$carPrice', '$carImage')";
        if ($conn->query($query) === TRUE) {
        $_SESSION['caradded']="* Car added successfully"; 
        header("location:add-car.php");
        }
   
    } 

?>