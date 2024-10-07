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
    <button class="left btn"><i class="fa fa-chevron-left"></i></button>
        <div class="frame">
            <div class="slider">
                <img class="slide" src="../assets/img/addimg.jpeg">
                <img class="slide" src="../assets/img/adimg.webp">
                <img class="slide" src="../assets/img/chatt1.webp">
                <img class="slide" src="../assets/img/chatt2.webp">
                <img class="slide" src="../assets/img/chatt3.webp">
                <img class="slide" src="../assets/img/chatt4.jpg"> 
                 <img class="slide" src="../assets/img/chatt5.webp"> 
                <img class="slide" src="../assets/img/chatt6.jpg">
                <img class="slide" src="../assets/img/chatt7.jpg">
                <img class="slide" src="../assets/img/chatt8.jpg">
                <img class="slide" src="../assets/img/chatt9.jpg">
                <img class="slide" src="../assets/img/chatt9.webp">
                <img class="slide" src="../assets/img/chatt10.jpg">
                <img class="slide" src="../assets/img/chatt11.jpg">
                <img class="slide" src="../assets/img/chatt12.jpg">
                <img class="slide" src="../assets/img/chattb1.jpg">
                <img class="slide" src="../assets/img/chattd1.jpg">
                <img class="slide" src="../assets/img/2nd.webp">
                <img class="slide" src="../assets/img/3rd.webp">
                <img class="slide"src="../assets/img/Hotel-N_S.jpg">
                <img class="slide" src="../assets/img/Hotel-n-s1.jpg">
                <img class="slide" src="../assets/img/hotel-n-s2.jpg">
                <img class="slide" src="../assets/img/hotel-n-s3.jpg">
                <img class="slide" src="../assets/img/hotel-n-s4.jpg">
                <img class="slide" src="../assets/img/hotel-N-S.jpg">
                <img class="slide" src="../assets/img/1.jpg">
                <img class="slide" src="../assets/img/2.jpg">
                <img class="slide" src="../assets/img/3.jpg">
                <img class="slide" src="../assets/img/4.jpg">
                <img class="slide" src="../assets/img/5.jpg">
                <img class="slide" src="../assets/img/6.jpg">
                <img class="slide" src="../assets/img/7.jpg">
                <img class="slide" src="../assets/img/8.jpg">
                <img class="slide" src="../assets/img/9.jpg">
            </div>
        </div>
        <button class="right btn"><i class="fa fa-chevron-right"></i></button>
    </div>
    <div class="details">
        <div class="detail">
            <h2>Mr Resort </h2>
            <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                Conveniently situated in the Gulshan part of Dhaka, this property puts you close to attractions and interesting dining options.
                 Don't leave before paying a visit to the famous Shahjalal International Airport. 
                 Rated with 4 stars, this high-quality property provides guests with access to restaurant, fitness center and spa on-site.</p>
        </div>
    </div>
    <div class="facility">
        <h2>Facilities of Mr Resort</h2>
        <div class="mfacility">
            <h3>Most popular facility</h3>
             <ul>
                    <div class="list-mf">
                    <li>Family rooms</li>
                    <li>Free parking</li>
                    <li>Room service</li>
                    <li>Restaurant</li>
                    <li>24 hour front desk</li>
                    <li>Breakfast</li>
                </div>
            </ul>   
            <div class="list-facility">
                <div class="list">
                    <h3>Bathroom</h3>
                    <ul>
                        <li>Toilet paper</li>
                        <li>Towels</li>
                        <li>Slippers</li>
                        <li>Toilet</li>
                        <li>Shower</li>
                        <li>Private bathroom</li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Bedroom</h3>
                    <ul>
                        <li>linen</li>
                        <li>wardrobe or cloest</li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Outdoors</h3>
                    <ul>
                        <li>Balcony</li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Living Area</h3>
                    <ul>
                        <li>sofa</li>
                        <li>Seating</li>
                        <li>Dining Area</li>
                        <li>Desk</li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Media and Technology</h3>
                    <ul>
                        <li>Flat-screen TV</li>
                        <li>Telephone</li>
                        <li>TV</li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Food and Drink</h3>
                    <ul>
                        <li>Fruits Additional charge</li>
                        <li>Breakfast in the room</li>
                         <li>Cafe</li> 
                         <li>Free tea/Coffee</li>  
                         <li>Restaurant</li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Reception service</h3>
                    <ul>
                        <li>Invoice provided</li>
                        <li>lockers</li>
                        <li>24-hour front desk</li>

                    </ul>
                </div>
                <div class="list">
                    <h3>Cleaning service</h3>
                    <ul>
                        <li>Daily housekeeping</li>
                        <li>Ironing service Additional charge</li>
                        <li>Dry cleaning Additional charge</li>
                    </ul>
                </div>
                <div class="list">
                    <h3>Safety and security</h3>
                    <ul>
                        <li>CCTV in common areas</li>
                        <li>Smoke alarms</li>
                        <li>24-hour security</li>
                        <li>Key card access</li>

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
                    <img class="image" src="../admin/images/<?php echo $addroom['image'];?>">
                </div>   
                <div class="listt2">
                    <a href="#"><?php echo $addroom['room_name'];?></a>
                    <ul>
                        <li><?php echo $addroom['description'];?></li>
                    </ul>
                    <button class="chatt-btnp">Enter dates to see price</button>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
        <div class="important">
            <h1>Important - Please Note</h1>
            <div class="import">
                <h3>Additional Facts:</h3>
                <ul>
                    <li>Extra beds are dependent on the room you choose. Price for an extra bed will be 2975 BDT. </li>
                    <li>The number of restaurant(s) in the hotel is 2 .</li>
                    <li>Check in from: 02:00 PM</li>
                    <li>Check Out until: 12:00 PM</li>
                    <li>Reception Open Until: 10:00 PM</li>
                </ul>
            </div>
            <div class="import">
                <h3>Child Policy:</h3>
                <ul>
                    <li>Extra beds are dependent on the room you choose. Children above 0 and below 4 stay for free if using existing bedding. If extra bed is requested, additional charge will be added.</li>
                    <li>Children aged above 5 and below 10 will have to pay 850 BDT.</li>
                    <li>Traveler aged above 10 will be considered as adult and will have to use an extra bed which will incur additional charge.</li>
                </ul>
            </div>
            <div class="import">
                <h3>Payment accepted by the property:</h3>
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
   <?php 
        require 'inc/fotter.php';
   ?>
   <script src="assets/js/chatt-bay.js"></script>
</body>
</html>