<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- link font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="<?php echo $css_link;?>">
</head>
<body>
   <header class="header">
        <div class="head-nav">
            <div>
               <h1>MR Resorts</h1>
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
                <a href="login.php">Log in</a>
                <a href="signup.php">Register</a>
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
<div class="main">
<h3 class="index">Discover the regions of Bangladesh</h3>
    <div class="ma_container">
        <div class="maa">
            <a href="#">Dhaka Division</a>
            <a href="#">Rangpur Division</a>
            <a href="#">Borisal Division</a>
        </div>
        <div class="maa">
            <a href="#">Sylhet Division</a>
            <a href="#">Rajshahi Division</a>
            <a href="#">Chittagong Division</a>
        </div>
        <div class="maa">
            <a href="#">Mymensingh Division</a>
            <a href="#">Khulna Division</a>
        </div>
    </div>
    <h3 class="index">Bangladesh hotel and accommodations</h3>
    <div class="main_container">
    <button class="btn left"><i class="fa fa-chevron-left"></i></button>
        <div class="frame">
            <div class="slider">
                    <div class="container" >
                        <img class="imsz" src="assets/img/image.jpg.webp">
                        <a href="chatt-bay.php">Radisson Blu Chattogram Bay View</a>
                        <p>The staff were wonderful and really took care of me--from the driver who picked me up at the airport, 
                        to the breakfast and  dinner staff, to the very helpful staff at the desk.<span class="dots">........</span><span class="more">As a woman traveling alone, I felt so comfortable and safe traveling  around Chittagong. The staff was also so helpful telling me how to get to museums and other sites, and where to get the best souvenirs. The Bangladeshi restaurant was excellent; I had dinner there every night since I wanted to try the local food, anothere was a great selection. Also the breakfast had an excellent selection of food. On the whole the staff was wonderfully  welcoming.  It is a big 5 star luxury hotel, but it feels very warm and welcoming. I had a really nice stay there.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/2nd.webp">
                        <a href="index.php">Radisson Blu Dhaka Water Garden</a>
                        <p>Radisson is locally known as the best hotel in Dhaka and lives upto its name. we found the staff very helpful and obliging.
                        <span class="dots">........</span><span class="more"> the rooms were spacious and the amenities adequate for a five star hotel. there are ample facilities and space around the complex that one does not need to leave.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/3rd.webp">
                        <a href="#">Four Points by Sheraton Dhaka, Gulshan</a>
                        <p>We booked this hotel because it's new building. However, when we arrive, found we need to stay in their old 
                         building becaus we book the suite. <span class="dots">........</span><span class="more">Although it's disappointed, we honour to our booking and stay in the old building. However, the swim pool is small surrounding by other tall building, gym room is small. No matter how, the main problem is the maintenance of the room facilities is extremely poor. My 1st room which the shower is not working. After changing to another room, which security box is not working, weight balance is not working. Only one resuraunt in the hotel. One thing I like this hotel is they are having very nice and friendly staff. It's credit to the scores for this hotel.</span></p>
                         <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/dhaka1.jpg">
                        <a href="#">The Raintree Dhaka</a>
                        <p>We booked this hotel because it's new building. However, when we arrive, found we need to stay in their old
                        building becaus we book the suite.<span class="dots">........</span><span class="more"> Although it's disappointed, we honour to our booking and stay in the old building. However, the swim pool is small surrounding by other tall building, gym room is small. No matter how, the main problem is the maintenance of the room facilities is extremely poor. My 1st room which the shower is not working. After changing to another room, which security box is not working, weight balance is not working. Only one resuraunt in the hotel. One thing I like this hotel is they are having very nice and friendly staff. It's credit to the scores for this hotel.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/dhaka.jpg">
                        <a href="#">Hotel sarina Dhaka</a>
                        <p>We booked this hotel because it's new building. However, when we arrive, found we need to stay in their old
                         building becaus we book the suite.<span class="dots">........</span><span class="more"> Although it's disappointed, we honour to our booking and stay in the old building. However, the swim pool is small surrounding by other tall building, gym room is small. No matter how, the main problem is the maintenance of the room facilities is extremely poor. My 1st room which the shower is not working. After changing to another room, which security box is not working, weight balance is not working. Only one resuraunt in the hotel. One thing I like this hotel is they are having very nice and friendly staff. It's credit to the scores for this hotel.</span></p>
                         <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/chatt11.jpg">
                        <a href="#">Amari Dhaka Hotel</a>
                        <p>We booked this hotel because it's new building. However, when we arrive, found we need to stay in 
                        their old building becaus we book the suite. <span class="dots">........</span><span class="more">Although it's disappointed, we honour to our booking and stay in the old building. However, the swim pool is small surrounding by other tall building, gym room is small. No matter how, the main problem is the maintenance of the room facilities is extremely poor. My 1st room which the shower is not working. After changing to another room, which security box is not working, weight balance is not working. Only one resuraunt in the hotel. One thing I like this hotel is they are having very nice and friendly staff. It's credit to the scores for this hotel.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/chatt9.jpg">
                        <a href="#">Gulshan Lake View Hotel</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                        Conveniently situated in the Gulshan part of Dhaka, <span class="dots">........</span><span class="more">this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/chatt9.webp">
                        <a href="#">Pan Pacific Sonargaon Dhaka</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                        Conveniently situated in the Gulshan part of Dhaka, this property puts you close to attractions and <span class="dots">........</span><span class="more">interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/chatt2.webp">
                        <a href="#">Hotel Seven Star (Residential)</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                        Conveniently situated in the Gulshan part of Dhaka, <span class="dots">........</span><span class="more">this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/chatt1.webp">
                        <a href="#">The Zabeer Jashore</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms.
                        Conveniently situated in the Gulshan part of Dhaka, <span class="dots">........</span><span class="more">this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/chatt3.webp">
                        <a href="#">Bandarban Hill Resort</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms.
                        Conveniently situated in the Gulshan part of Dhaka, <span class="dots">........</span><span class="more">this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="container" >
                        <img class="imsz" src="assets/img/chatt4.jpg">
                        <a href="#">Muscat Holiday Resort</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                        Conveniently situated in the Gulshan part of Dhaka,<span class="dots">........</span><span class="more"> this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
            </div>
        </div>
        <button class="btn right"><i class="fa fa-chevron-right"></i></button>
    
    </div>
    <h3 class="index">Most booked hotels in Bangladesh in the past month</h3>
    <div class="main_container">
        <button class="btn leftt"><i class="fa fa-chevron-left"></i></button>
        <div class="frame">
            <div class="sliderr">
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/image.jpg.webp">
                        <a href="chatt-bay.php">Radisson Blu Chattogram Bay View</a>
                        <p>The staff were wonderful and really took care of me--from the driver who picked me up at the airport, 
                        to the breakfast and  dinner staff, to the very helpful staff at the desk.<span class="dots">........</span><span class="more">As a woman traveling alone, I felt so comfortable and safe traveling  around Chittagong. The staff was also so helpful telling me how to get to museums and other sites, and where to get the best souvenirs. The Bangladeshi restaurant was excellent; I had dinner there every night since I wanted to try the local food, anothere was a great selection. Also the breakfast had an excellent selection of food. On the whole the staff was wonderfully  welcoming.  It is a big 5 star luxury hotel, but it feels very warm and welcoming. I had a really nice stay there.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/2nd.webp">
                        <a href="index.php">Radisson Blu Dhaka Water Garden</a>
                        <p>Radisson is locally known as the best hotel in Dhaka and lives upto its name. we found the staff very helpful and obliging.
                        <span class="dots">........</span><span class="more"> the rooms were spacious and the amenities adequate for a five star hotel. there are ample facilities and space around the complex that one does not need to leave.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/3rd.webp">
                        <a href="#">Four Points by Sheraton Dhaka, Gulshan</a>
                        <p>We booked this hotel because it's new building. However, when we arrive, found we need to stay in their old 
                         building becaus we book the suite. <span class="dots">........</span><span class="more">Although it's disappointed, we honour to our booking and stay in the old building. However, the swim pool is small surrounding by other tall building, gym room is small. No matter how, the main problem is the maintenance of the room facilities is extremely poor. My 1st room which the shower is not working. After changing to another room, which security box is not working, weight balance is not working. Only one resuraunt in the hotel. One thing I like this hotel is they are having very nice and friendly staff. It's credit to the scores for this hotel.</span></p>
                         <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/dhaka1.jpg">
                        <a href="#">The Raintree Dhaka</a>
                        <p>We booked this hotel because it's new building. However, when we arrive, found we need to stay in their old
                        building becaus we book the suite.<span class="dots">........</span><span class="more"> Although it's disappointed, we honour to our booking and stay in the old building. However, the swim pool is small surrounding by other tall building, gym room is small. No matter how, the main problem is the maintenance of the room facilities is extremely poor. My 1st room which the shower is not working. After changing to another room, which security box is not working, weight balance is not working. Only one resuraunt in the hotel. One thing I like this hotel is they are having very nice and friendly staff. It's credit to the scores for this hotel.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/dhaka.jpg">
                        <a href="#">Hotel sarina Dhaka</a>
                        <p>We booked this hotel because it's new building. However, when we arrive, found we need to stay in their old
                         building becaus we book the suite.<span class="dots">........</span><span class="more"> Although it's disappointed, we honour to our booking and stay in the old building. However, the swim pool is small surrounding by other tall building, gym room is small. No matter how, the main problem is the maintenance of the room facilities is extremely poor. My 1st room which the shower is not working. After changing to another room, which security box is not working, weight balance is not working. Only one resuraunt in the hotel. One thing I like this hotel is they are having very nice and friendly staff. It's credit to the scores for this hotel.</span></p>
                         <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/chatt11.jpg">
                        <a href="#">Amari Dhaka Hotel</a>
                        <p>We booked this hotel because it's new building. However, when we arrive, found we need to stay in 
                        their old building becaus we book the suite. <span class="dots">........</span><span class="more">Although it's disappointed, we honour to our booking and stay in the old building. However, the swim pool is small surrounding by other tall building, gym room is small. No matter how, the main problem is the maintenance of the room facilities is extremely poor. My 1st room which the shower is not working. After changing to another room, which security box is not working, weight balance is not working. Only one resuraunt in the hotel. One thing I like this hotel is they are having very nice and friendly staff. It's credit to the scores for this hotel.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/chatt9.jpg">
                        <a href="#">Gulshan Lake View Hotel</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                        Conveniently situated in the Gulshan part of Dhaka, <span class="dots">........</span><span class="more">this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/chatt9.webp">
                        <a href="#">Pan Pacific Sonargaon Dhaka</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                        Conveniently situated in the Gulshan part of Dhaka, this property puts you close to attractions and <span class="dots">........</span><span class="more">interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/chatt2.webp">
                        <a href="#">Hotel Seven Star (Residential)</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                        Conveniently situated in the Gulshan part of Dhaka, <span class="dots">........</span><span class="more">this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/chatt1.webp">
                        <a href="#">The Zabeer Jashore</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms.
                        Conveniently situated in the Gulshan part of Dhaka, <span class="dots">........</span><span class="more">this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/chatt3.webp">
                        <a href="#">Bandarban Hill Resort</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms.
                        Conveniently situated in the Gulshan part of Dhaka, <span class="dots">........</span><span class="more">this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                    </div>
                    <div class="containerr" >
                        <img class="imsz" src="assets/img/chatt4.jpg">
                        <a href="#">Muscat Holiday Resort</a>
                        <p>Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. 
                        Conveniently situated in the Gulshan part of Dhaka,<span class="dots">........</span><span class="more"> this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Shahjalal International Airport. This 5-star property features spa to make your stay more indulgent and memorable.</span></p>
                        <button class="myBtn">Read more</button>
                 </div>
            </div>
        </div>
        <button class="btn rightt"><i class="fa fa-chevron-right"></i></button>
    </div>
</div>
<?php 
    $css_link = 'assets/css/index.css';
    echo include 'inc/fotter.php';
?>
<script src="assets/js/index.js"></script>
</body>
</html>