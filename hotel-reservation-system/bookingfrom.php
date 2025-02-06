<?php
    session_start();
    $css_link = 'assets/css/bookingfrom.css';
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

    <div class="bfrom">
        <h2>Guest Information</h2>
        <div class="sbfrom">
               <div class="style">
                    <input type="text" name="firstname"  id="firstname" required placeholder="First name">
                </div>
                <div class="style">
                    <input type="text" name="lastname" id="lastname" required placeholder="Last name">
                </div>
                <div class="style">
                    <input type="email" name="email" id="email" required placeholder="example@gmail.com">
                </div>
                <div class="style">
                    <input type="number" name="number" id="number" required placeholder="Pnone number">
                 </div>
                 <div class="style">
                    <input type="date" name="date" required placeholder="Starting date">
                 </div>
                 <div class="style">
                    <input type="date" name="date1" required placeholder="Ending date"> 
                 </div>
                 <div class="style">
                    <button class="btnp" name="submit">Submit</button>
                 </div>
                 <br>
        </div>
    </div>
    <?php 
      require 'inc/fotter.php';
    ?>
   <script src="assets/js/chatt-bay.js"></script>
</body>
</html>