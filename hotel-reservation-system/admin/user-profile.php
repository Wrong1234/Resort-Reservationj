<?php
    session_start();
    require '../inc/config.php';
    $user_id = -1;
    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];
    }
    else{
        header("location : login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- link font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="<?php echo $css_link;?>">
    <link rel="stylesheet" href="css/user-profile.css">
</head>
<body>
   <header class="header">
        <div class="head-nav">
            <div class="resort-name">
               <h3>MR Resorts</h3>
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
            <div class="profile-image">
                <a href="#"><?php echo $_SESSION['username'];?></a>
            </div>
         </div>
    </header>
    <div class="profile-main">
        <div class="aside">
            <div class="aside1">
                <div class="asid">
                    <a href="#">My booking</a>
                </div>
                <div class="asid">
                    <a href="#">Profile</a>
                </div>  
                <div class="asid">
                    <a href="#">Cashback Rewards</a>
                </div>  
                <div class="asid">
                    <a href="#">Reviews</a>   
                </div>  
                <div class="asid">
                    <a href="#">PointMax</a>   
                </div>  
                <div class="asid">
                    <a href="#">Payment Method</a>   
                </div>  
            </div>
        </div>
        <div class="main-part">
            <div class="main-container">
                <div class="user">
                    <h2>User Details</h2>
                </div>
                <?php
                    $res = mysqli_query($conn , "SELECT id , password , username , email FROM users WHERE id = $user_id") 
                    or die(mysqli_error($conn));
                    while($information=mysqli_fetch_assoc($res)): ?>
                <div class="row name">
                    <div class="col-75">
                        <h4>Name</h4> 
                        <p><?php echo $information['username'];?>
                    </div>
                    <div class="col-25">
                        <a href="#"> Edit</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-75">
                        <h4>Email</h4> 
                        <p><?php echo $information['email'];?></p>
                    </div>
                    <div class="col-25">
                        <a href="#">Edit</a>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-75">
                        <h4>Phone Number</h4> 
                    </div>
                    <div class="col-25">
                        <a href="#">Add</a>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-75">
                        <h4>Password</h4> 
                        <input type="password" name="password" id="password" value="<?php echo $information['password']?>">
                    </div>
                    <div class="col-25">
                        <a href="#">Edit</a>
                    </div>
                </div> 
                <?php endwhile;?> 
            </div>
        </div>
    </div>
    </body>
</html>