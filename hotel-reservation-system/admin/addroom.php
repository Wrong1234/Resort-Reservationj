<?php 
    $css_link = 'css/addroom.css';
    require '../inc/config.php';
    require  'inc/header.php';

    if(isset($_POST['submit'])){

        $status = $_POST['status'];
        $room_name = $_POST['room_name'];
        $room_type = $_POST['room_type'];
        $price = $_POST['price'];
        $capacity = $_POST['capacity'];
        $description = $_POST['description'];

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
        mysqli_query($conn , "INSERT INTO add_rooms (room_name, room_type, price, capacity, description, image, status) 
        VALUES ('$room_name', '$room_type', '$price', '$capacity','$description', '$image', '$status')");

        if(mysqli_affected_rows($conn)) {
                    echo "<script>alert('insert Successfully:".$description."');</script>";
	                 echo "<script>window.location='room.php';</script>";
                     exit();
        }
        else {
            echo "<script>alert('Could not update data:');</script>";
            echo "<script>window.location='show.php';</script>";
            exit();
        }
   }

?>            
        <div class="general-setting">
            <div class="align-form">

                <form action="addroom.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="room_name">Room Name:</label>
                        </div>  
                        <div class="col-75">
                            <input type="text" name="room_name" required placeholder="room_name"><br>
                        </div>  
                    </div> 
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="room_type">Room Type:</label>
                        </div>  
                        <div class="col-75">
                            <input type="text" name="room_type" required placeholder="room_type"><br>
                        </div>  
                    </div> 
                    <div class="row">
                        <div class="col-25">
                            <label for="price">Room Price:</label>
                        </div>  
                        <div class="col-75">
                            <input type="number" name="price" step="0.01" required placeholder="Type price"><br>
                        </div>  
                    </div> 
                    <div class="row">
                        <div class="col-25">
                            <label for="capacity">Capacity:</label>
                        </div>  
                        <div class="col-75">
                            <input type="number" name="capacity" required placeholder="type-capacity"><br>
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
                            <label for="description">Description:</label>
                        </div>  
                        <div class="col-75">
                            <textarea  name="description" required placeholder="write desciption"></textarea><br>
                        </div>  
                    </div> 
                    <div class="row">
                        <div class="col-25">
                            <label for="status">Room Status:</label>
                        </div>  
                        <div class="col-75">
                            <input type="text" name="status" required placeholder="room_status"><br>
                        </div>  
                    </div> 
                    <div class="row" class="btn">
                        <button type="submit" name="submit">Add Room</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>