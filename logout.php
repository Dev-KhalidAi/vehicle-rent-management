<?php
    session_start();
    session_destroy();
    header('Location:http://localhost/vehicle-rent-management/index.php');

?>