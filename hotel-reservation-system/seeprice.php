<?php
    session_start();
    $css_link = 'assets/css/seeprice.css';
    require 'inc/config.php';
    require 'inc/header.php';
?>

<div class="seeprice">
    <div class="price">
       <div class="style">
            <img class="img"  src="admin/images/1.jpg" alt="">
       </div>
       <div class="description">
            <p>Resort Name</p>
            <p>Room name</p>
            <p>Room quality</p>
            <p>Free Breakfast</p>
            <p>Free Cancellation</p>
       </div>
       <div class="price1">
            <p>BDT 4000</p>
            <p>Tax included</p>
            <p>1 night, 2 adults</p>
            <button class="btnp">Booked Now</button>
       </div>

    </div>

    <div class="price">
       <div class="style">
            <img class="img"  src="admin/images/1.jpg" alt="">
       </div>
       <div class="description">
            <p>Resort Name</p>
            <p>Room name</p>
            <p>Room quality</p>
            <p>Free Breakfast</p>
            <p>Free Cancellation</p>
       </div>
       <div class="price1">
            <p>BDT 4000</p>
            <p>Tax included</p>
            <p>1 night, 2 adults</p>
            <button class="btnp">Booked Now</button>
       </div>

    </div>
</div>
<?php 
    require 'inc/fotter.php';
?>
   <script src="assets/js/chatt-bay.js"></script>
</body>
</html>