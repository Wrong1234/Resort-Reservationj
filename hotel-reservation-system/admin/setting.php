<?php
    $css_link  = 'css/setting.css';
    require '../inc/config.php';
    require 'inc/header.php';
?>


        <div class="general-setting">
            <h1>General Setting</h1>
            <div class="sett-card">
                <div class="title">
                    <h2>Site title</h2>
                        <p>content</p>
                        <h2>About us</h2>
                        <p>content</p>   
                </div>
                <div class="edit">
                    <!-- open modal -->
                    <button class="btn">Edit</button>

                    <div id="myModal" class="modal">
                    <h1>Update Information</h1>
                    <!-- Modal content -->
                        <form action="">
                        <div class="modal-content">
                            <label for="text">Site title</label>
                            <input type="text" class="form-control" id="title" placeholder="Type title">

                            <label for="text">About Us</label>
                            <textarea type="text" class="form-control" id="about" placeholder="Type about"></textarea>
                        </div>
                        <div class="sub-clos">
                            <button class="can-btn">Cancle</button>
                            <button class="sub-btn">Submit</button>
                        </div> 
                        </form>  

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="scripts.js"></script>
</body>
</html>