<?php 
    session_start();
    $css_link = 'assets/css/chatt-bay.css';
    require 'inc/config.php';
    require 'inc/header.php';
?>
    <script>
    // Hide login and register options if user is logged in
        document.addEventListener("DOMContentLoaded", function() {
            console.log("DOM fully loaded and parsed");
            const loginLink = document.querySelector('.login');
            const registerLink = document.querySelector('.register');
            const profileShow = document.querySelector('.showprofile');
            const logout = document.querySelector('.logout');

            console.log(loginLink, registerLink, profileShow, logout);
            
            if (<?php echo isset($_SESSION['username']) ? 'true' : 'false'; ?>) {
                loginLink.style.display = 'none';
                registerLink.style.display = 'none';
                profileShow.style.display = 'inline';
                logout.style.display = 'inline';
            }
        });
    </script>
   <div class="main">
    <div class="main-container">
        <div class="frame">
            <div class="slider">
             <div class="imagestyle1">
                <?php
                    $sql = "SELECT * FROM image WHERE caption = 'Common 6'";
                    $result = mysqli_query($conn , $sql);   
                    while($room = mysqli_fetch_assoc($result)):
                ?>
                    <img class="slide" src="admin/images/<?php echo $room['image'];?>" class="gallery-img" onclick="openModal();">
                <?php endwhile;?>
             </div>  
             <div class="imagestyle2">
                <?php
                    $sql = "SELECT * FROM image WHERE name = 'Common area'";
                    $result = mysqli_query($conn , $sql);   
                    while($room = mysqli_fetch_assoc($result)):
                ?>
                    <img class="slide" src="admin/images/<?php echo $room['image'];?>" class="gallery-img" onclick="openModal();">
                <?php endwhile;?>
             </div>           
            </div>
        </div>  
    </div>
    <div class="details">
        <div class="detail">
                <?php
                    $sql = "SELECT * FROM facilities WHERE number = 'Resort'";
                    $result = mysqli_query($conn , $sql);   
                    while($room = mysqli_fetch_assoc($result)):
                ?>
                <p><?php echo $room['description']?></p>
            <?php endwhile;?>
        </div>
    </div>
    <div class="facility">
        <h2>Facilities</h2>
        <div class="facility1">
                <div class="facility2">
                      <ul>
                    <?php
                        $sql = "SELECT * FROM facilities WHERE number = 'facilities'";
                        $result = mysqli_query($conn , $sql);   
                        while($room = mysqli_fetch_assoc($result)):
                     ?>
                        <li><?php echo $room['description']?></li>
                        <?php endwhile;?>
                      </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="select-room">
        <h2>Rooms available at Mr Resort</h2>
        <div class="select">
            <?php
                $res = mysqli_query($conn , "select * from add_rooms")or die(mysqli_error($conn));
                while($addroom = mysqli_fetch_assoc($res)):  
            ?>
            <div class="listt">
                <div class="listt1">
                    <img class="image" src="admin/images/<?php echo $addroom['image'];?>">
                </div>   
                <div class="listt2">
                    <a href="#"><?php echo $addroom['room_name'];?></a>
                    <ul>
                        <li><?php echo $addroom['description'];?></li>
                    </ul>
                    <a href="seeprice.php? id=<?php echo $addroom['id'];?>"><button class="chatt-btnp">Enter dates to see price</button></a>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
        <div class="important">
            <h1>Important - Please Note</h1>
            <div class="lastimport">
                <h3>Additional Facts:</h3>
                <div class="import">
                    <ul>
                        <li>Extra beds are dependent on the room you choose. Price for an extra bed will be 2975 BDT. </li>
                        <li>The number of restaurant(s) in the hotel is 2 .</li>
                        <li>Check in from: 02:00 PM</li>
                        <li>Check Out until: 12:00 PM</li>
                        <li>Reception Open Until: 10:00 PM</li>
                    </ul>
                </div>
            </div>
            <div class="lastimport">
                <div class="import">
                    <h3>Child Policy:</h3>
                    <ul>
                        <li>Extra beds are dependent on the room you choose. Children above 0 and below 4 stay for free if using existing bedding. If extra bed is requested, additional charge will be added.</li>
                        <li>Children aged above 5 and below 10 will have to pay 850 BDT.</li>
                        <li>Traveler aged above 10 will be considered as adult and will have to use an extra bed which will incur additional charge.</li>
                    </ul>
                </div>
            </div>
                <div class="lastimport">
                     <h3>Payment accepted by the property:</h3>
                    <div class="import">
                        <div class="import1">
                            <ul>
                                <li>Visa Master</li>
                                <li>Amex</li>
                                <li>Cash</li>
                                <li>Nogad</li>
                                <li>Bkash</li>
                                <li>Rocket</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
   </div>
   <?php 
        require 'inc/fotter.php';
   ?>
   <script src="assets/js/chatt-bay.js"></script>
</body>
</html>