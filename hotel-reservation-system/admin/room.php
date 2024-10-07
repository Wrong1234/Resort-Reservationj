<?php
    session_start();
    $css_link = 'css/table.css';
    require '../inc/config.php';
    require 'inc/header.php';
    if (isset($_POST['delete_room'])) {
        $delete_id = $_POST['delete_id'];

        // Delete room from the database
        $sql = "DELETE FROM add_rooms WHERE id = $delete_id";

        if(mysqli_query($conn , $sql)){
            header("Location: room.php");
        }
        else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
?>

<table>
    <tr>
        <th>ID</th>
        <th>Room_name</th>
        <th>Room_type</th>
        <th>Price</th>
        <th>Capacity</th>
        <th>Image</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
        <?php $res=mysqli_query($conn,"select * from add_rooms")or die(mysqli_error($conn));
        while($room=mysqli_fetch_assoc($res)): ?>

            <tr>
                <td> <?php echo $room['id'];?></td>
                <td> <?php echo $room['room_name'];?></td>
                <td> <?php echo $room['room_type'];?></td>
                <td> <?php echo $room['price'];?></td>
                <td> <?php echo $room['capacity'];?></td>
                <td><img class="img" style="width: 100%; height: 50px" src="images/<?php echo $room['image'];?>"></th>
                <td> <?php echo $room['status'];?></td>
                <td>
                 <a class="edit" href="edit_room.php?id=<?php echo $room['id'];?>">Edit</a>
                 <form method="POST" action="room.php" style="display:inline;">
                    <input type="hidden" name="delete_id" value="<?php echo $room['id'];?>">
                    <button class="delete" type="submit" name="delete_room" onclick="return confirm('Are you sure you want to delete this room?');">Delete</button>
                </form>
                </td>
            </tr>
            <?php endwhile;?>
</table>
    <?php
    // Free result set
    mysqli_free_result($res);

    // Close the connection
    mysqli_close($conn);
    ?>
    </div> 
</div>
       
</body>
</html>