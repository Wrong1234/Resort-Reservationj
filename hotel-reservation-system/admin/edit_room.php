<?php
    $css_link = 'css/addroom.css';
    require '../inc/config.php';
    require 'inc/header.php';
    if (isset($_GET['id'])) {

        $room_id = $_GET['id'];
        $sql = "SELECT * FROM add_rooms WHERE id = $room_id ";
        $result = mysqli_query($conn , $sql);
        $room = mysqli_fetch_assoc($result);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

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
        $sql = "UPDATE add_rooms SET room_name = '$room_name', room_type = '$room_type', price = '$price', 
        capacity = '$capacity', description = '$description', image = '$image', status = '$status' WHERE id = $room_id";

        if(mysqli_query($conn , $sql)){
            header("Location: room.php");
            echo"successfully updated";
        }
        else{
            echo "Not updated: " . mysqli_error($conn);
        }
    }  
    mysqli_close($conn);
  ?> 
    <div class="general-setting">
                <div class="align-form">

                    <form method="POST" enctype="multipart/form-data">
                        
                        <div class="row">
                            <div class="col-25">
                                <label for="room_name">Room Name:</label>
                            </div>  
                            <div class="col-75">
                                <input type="text" name="room_name" required value="<?php echo $room['room_name'];?>"><br>
                            </div>  
                        </div> 
                        
                        <div class="row">
                            <div class="col-25">
                                <label for="room_type">Room Type:</label>
                            </div>  
                            <div class="col-75">
                                <input type="text" name="room_type" required value="<?php echo $room['room_type'];?>"><br>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-25">
                                <label for="price">Room Price:</label>
                            </div>  
                            <div class="col-75">
                                <input type="number" name="price" step="0.01" required value="<?php echo $room['price'];?>"><br>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-25">
                                <label for="capacity">Capacity:</label>
                            </div>  
                            <div class="col-75">
                                <input type="number" name="capacity" required value="<?php echo $room['capacity'];?>"><br>
                            </div>  
                        </div> 

                        <div class="row">
                            <div class="col-25">
                                <label for="description">Description:</label>
                            </div>  
                            <div class="col-75">
                                <input type="text" name="description" required value="<?php echo $room['description'];?>"><br>
                            </div>  
                        </div> 

                        <div class="row">
                            <div class="col-25">
                                <label for="image">Room Image:</label>
                            </div>  
                            <div class="col-75">
                                <div class="change-image">
                                    <div>
        
                                        <input class="imag" type="file" name="image" required value="Change image"><br>
                                    </div>
                                    <div class="type-file">
                                        <img style="width: 200px; height:100px;" src="images/<?php echo $room['image'];?>">
                                        <h4>Change Image</h4>
                                    </div>
                                </div>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-25">
                                <label for="status">Room Status:</label>
                            </div>  
                            <div class="col-75">
                                <input type="text" name="status" required value="<?php echo $room['status'];?>"><br>
                            </div>  
                        </div> 
                        <div class="row" class="btn">
                            <button type="submit" name="submit">Update Room</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>