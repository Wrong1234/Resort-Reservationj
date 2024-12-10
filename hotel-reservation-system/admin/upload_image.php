<?php
    $css_link = 'css/addroom.css';
    require '../inc/config.php';
    require  'inc/header.php';

    if(isset($_POST['submit'])){
        
        $image_name = $_POST['image_name'];
        $caption = $_POST['caption'];

        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $image =  $_FILES['image']['name'];
 
        if(move_uploaded_file($file_tmp, "images/".$file_name)){
            $image = $file_name;
        }
        else{
            echo "Not uploaded";
        }
        
        //  Inserting data into the database
        mysqli_query($conn , "INSERT INTO image (name, image, caption) 
        VALUES ('$image_name', '$image', '$caption')");
    }
?>
         <div class="general-setting">
         <div class="align-form">

            <form action="upload_image.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="room_name">Image Name:</label>
                        </div>  
                        <div class="col-75">
                            <input type="text" name="image_name" required placeholder="image_name"><br>
                        </div>  
                    </div> 

                    <div class="row">
                        <div class="col-25">
                            <label for="image">Room Image:</label>
                        </div>  
                        <div class="col-75">
                            <input class="imag" type="file" name="image" required placeholder="upload image"><br>
                        </div>  
                    </div> 
                    <div class="row">
                        <div class="col-25">
                            <label for="description">Caption:</label>
                        </div>  
                        <div class="col-75">
                            <textarea  name="caption" required placeholder="write Caption"></textarea><br>
                        </div>  
                    </div> 
                    <div class="row" class="btn">
                        <button type="submit" name="submit">Add Image</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>