<?php
session_start();
require('./dpconnection.php');

// $fullname = $_GET["name"];
// $name = trim(str_replace('Mercedes','',$fullname));

if(isset($_POST)){
    $username = $_SESSION['username'];
    $cardNumber = $_POST['card-number'];
    $expDate = $_POST['exp-date'];
    $ccv = $_POST['ccv'];
    $nameCard = $_POST['name-card'];

    $query_credit = "INSERT INTO credit (user_username, number, exp_date, cvv, name) VALUES ('$username', '$cardNumber', '$expDate', '$ccv', '$nameCard')";

    $pickdate = $_POST['pickdate'];
    $dropdate = $_POST['dropdate'];
    $picktime = $_POST['picktime'];
    $droptime = $_POST['droptime'];
    $totalprice = $_POST['pricedb'];
    $email = $_SESSION['email'];
    $fullcarname = $_POST['carname'];
    $carname = trim(str_replace('Mercedes','',$fullcarname));
    $accepted = 2;


    $query_checkout = "INSERT INTO
    checkout (user_username, pickdate, dropdate, picktime, droptime, totalPrice, user_email, car_name, accepted)
    VALUES
    ('$username', '$pickdate', '$dropdate', '$picktime', '$droptime', '$totalprice', '$email', '$carname', $accepted )";

    if ($conn->query($query_credit) === TRUE && $conn->query($query_checkout)) {
       header('Location:http://localhost/vehicle-rent-management/success-info.php');
    }else {

        printf("Errormessage: %s\n", $mysqli->error);
    }

}
?>