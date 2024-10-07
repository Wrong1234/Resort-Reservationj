<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- link font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="<?php echo $css_link;?>">
</head>
<body>
   <header class="header">
        <div class="head-nav">
            <div>
               <h2>MR Resorts</h2>
            </div>
            
            <div class="nav_bar">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact Us</a>
                <div class="dropdown">
                    <a href="#" class="dropbtn">Service</a>
                    <div class="dropdown-content">
                        <a href="#">Hotels</a>
                        <a href="#">Flights</a>
                        <a href="#">Transport</a>
                        <a href="#">Apartment Booking</a>
                    </div>
                </div>
            </div>
            <div class="log">
                <a class="login" href="../admin/login.php">Login</a>
                <a class="register" href="../admin/register.php" >Register</a>
                <div class="dropdown">
                    <!-- <img class="showprofile" src="../assets/img/login-img/avatar.jpg"> -->
                     <h3><?php echo $_SESSION['username'];?></h3>
                    <div class="dropdown-content">
                        <a href="../admin/user-profile.php">Profile</a>
                        <a href="#">Setting and privacy</a>
                        <a href="../admin/login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="head-search">
            <div class="search-container">
                <input type="text" placeholder="Destination name..." class="input-field" id="name">
                <input type="date" class="input-field" id="checkin" placeholder="Check-in">
                <input type="date" class="input-field" id="checkout" placeholder="Check-out">
                <input type="number" placeholder="Adults" class="input-field" id="adults" min="1" value="1">
                <button class="search-btnn">Search</button>
            </div>
        </div>
   </header>