<?php 
    $css_link = 'css/addroom.css';
    require '../inc/config.php';
    require 'inc/header.php';

    // Debugging: Check if the form data is being received
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

        $description = $conn->real_escape_string($_POST["description"]);
        $number = $conn->real_escape_string($_POST["number"]);

        // Check if description already exists
        $sql = "SELECT description FROM facilities WHERE description='$description'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Description already exists!";
        } else {
            // Inserting data into the database using prepared statements
            $stmt = $conn->prepare("INSERT INTO facilities (description, number) VALUES (?, ?)");
            $stmt->bind_param("ss", $description, $number);

            if ($stmt->execute()) {
                echo "Upload data successfully";
                // header("location: upload_biodata.php");
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }
?>            
<div class="general-setting">
    <div class="align-form">
        <form action="upload_biodata.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="description">Description:</label>
                </div>  
                <div class="col-75">
                    <textarea name="description" required placeholder="Write description"></textarea><br>
                </div>  
            </div> 
            <div class="row">
                <div class="col-25">
                    <label for="text">Number:</label>
                </div>  
                <div class="col-75">
                    <input type="text" name="number" required placeholder="Provide a unique number">
                </div>  
            </div>
            <div class="row" class="btn">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>