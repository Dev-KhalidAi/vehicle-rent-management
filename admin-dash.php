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
    <title>Vehicle Rent Management System</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/graph-fonts/EuclidCircular/fonts.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">


</head>

<body>
    <div class="main-container">
        <img class="main-background" src="./images/mercedes-benz.jpg.webp" alt="">
        <div class="main-section">
            <div class="header">
                <img class="logo" src="./images/logo-white.png" alt="">
                <ul class="sign-in-up">     
                   <li id="signs"><a href=<?php
                        if(isset($_SESSION["name"])){
                            $name = $_SESSION["name"];
                            echo "./edit-profile.php";
                        }else{
                            echo "./login.php";
                        }
                    ?>>
                    <i class="far fa-user"></i>
                    <?php  if(isset($_SESSION["name"])){
                        $name = $_SESSION["name"];
                        echo "Hello, $name";
                    }else{
                        echo "Signin";
                    }?></a></li>
                    <?php
                    if(isset($_SESSION["role"])){
                        if($_SESSION["role"]==1){
                    echo "<li id='signs'><a href=";
                    
                            echo "./admin-dash.php
                            <i class='far fa-solar-panel'></i>
                            <span id = 'orders'>Admin Dashboard</span></a></li>";
                        }else{
                            echo "";
                        }}
                    ?>
          
                     <?php if (isset($_SESSION['name'])){
                        echo "<li id='signs'><a href='./orders.php'";
                        echo "<i class='far fa-shopping-cart'></i> <span id = 'orders'> Your Orders</span>";
                    }?></a></li>
                    <li id="signs"> <a href=<?php
                    
                     if(isset($_SESSION["name"])){
                        echo "./logout.php";
                    }else{
                        echo "./signup.php";
                    }
                    ?> > <?php
                     if(isset($_SESSION["name"])){
                        $name = $_SESSION["name"];
                        echo "<i class='far fa-sign-out-alt'></i> Logout";
                    }else{
                        echo "Signup";
                    }
                    ?></a></li>
                    </ul>
            </div>
            <section>
             <div class="section-title admin">
                    Admin Dashboard
                </div>   
            <div class="seprator sep-admin">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>
            <section>
                
                  
                    <!-- <tr>
                        <td>Mohammed Awlaqi</td>
                        <td>Mo1997</td>
                        <td>Mercedes</td>
                        <td>10/9/1997</td>
                        <td>10/9/1997</td>
                        <td><button id="approve">Approve</button> <button id="decline">Decline</button></td>
                    </tr> -->
                    <?php
                    require('./dpconnection.php');
                    $username = $_SESSION['username'];
                    $query = "SELECT * FROM checkout WHERE accepted = 2";
                    $result = mysqli_query($conn, $query);
                    $count = mysqli_num_rows($result);
                    if ($count == 0){
                        echo "<span id = 'no-orders'>You have no orderes to approve/decline</span>"; 
                    }else{ 
                     ?> 
                      <table>
                    <tr>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Car name</th>
                        <th>Pickup-Date</th>
                        <th>Dropoff-Date</th>
                        <th>Aprove\Decline</th>
                    </tr>    <?php  
                    while($order = mysqli_fetch_array($result)){
                        $query2 = "SELECT * FROM users where username = '$order[0]'";
                        $result2 = mysqli_query($conn, $query2); 
                        $name = mysqli_fetch_array($result2, MYSQLI_NUM);
                        echo "<tr>";
                        echo "<td>$name[0] $name[1]</td>";
                        echo "<td>$order[0]</td>";
                        echo "<td>Mercedes $order[7]</td>";
                        echo "<td>$order[1]</td>";
                        echo "<td>$order[2]</td>";
                        echo "<form action='./approve-orders.php' method = 'post'>
                        <input name = 'username' type='hidden' value = '$order[0]'>
                        <input name = 'carname' type='hidden' value = '$order[7]'>
                        <td><button type = 'submit' id='approve' name = 'approve'>Approve</button> <button  name = 'decline' type = 'submit'id='decline'>Decline</button></td>
                        </form>";
                         echo "</tr>";
                    }}
                    ?>     
                </table>
            </section>

            <div class="seprator">
                <div class="square1"></div>
                <div class="line"></div>
                <div class="square1"></div>
            </div>
        </div>
        <footer>
            <div class="main-footer">
                <div class="logo-footer">
                    <img src="./images/logo-white.png" alt="">
                </div>
                <div class="newsletter">
                    <input id="newsletter" type="text" name=""
                        placeholder="Enter your email to sign up for newsletter..">
                </div>
                <div class="socialmedia-icons">
                    <div class="sm-icon">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-snapchat-ghost"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-behance"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="sm-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>

                </div>
                <div class="links">
                    <div class="link-item">
                        Home
                    </div>
                    <div class="link-item">
                        Vheicles We Offer
                    </div>
                    <div class="link-item">
                        How to Use
                    </div>
                    <div class="link-item">
                        About us
                    </div>
                    <div class="links2">

                    </div>
                    <div id="line2" class="link-item">
                        Contact us
                    </div>
                    <div id="line2" class="link-item">
                        Terms of Use
                    </div>
                </div>
                <div class="copyright">
                    Copyright reserved to Khalid Awlaqi 2020-2021 ©
                </div>

            </div>
        </footer>
    </div>
</body>

</html>