<?php 
    session_start();
    if(isset($_SESSION["id"]) && isset($_SESSION['role']) === 'admin' ){
        header("location: dashboard.php");
        $user_id = $_SESSION['id'];
        exit();
    }
    if(isset($_SESSION["id"]) && isset($_SESSION['role']) === 'customer') {
        header("location: ../index.php");
        $user_id = $_SESSION['id'];
        exit();
    }
    require '../inc/config.php';
    $loginError = "";
     
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $email = $conn -> real_escape_string($_POST["email"]);
        $password = $conn -> real_escape_string($_POST["password"]);

        $sql = "SELECT id, password, role, username, email FROM users WHERE email='$email'";
        $result = mysqli_query($conn , $sql);
        $row = mysqli_fetch_assoc($result);

        if($row && password_verify($password, $row["password"])) {
            $_SESSION["id"] = $row["id"];
            $_SESSION["role"] = $row["role"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["email"] = $row["email"];

            if($row['role'] === 'admin'){
                 header("location: dashboard.php");
            }
            else{
                header("location: ../index.php");
            }
            exit();
        }
        else
            $loginError = "The email and/or password you specified are not correct.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login-logout.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<form action="login.php" method="post">
       <div class="login-form">
        <div class="login">
            <h1>Login</h1>
            <div class="email">
                <input type="email" name="email" id="email" required placeholder="Email">
                <i class='bx bxs-envelope' ></i>
            </div>
            <div class="password">
                <input type="password" name="password" id="password" required placeholder="Password">
                <i class='bx bx-lock-open'></i>
            </div>

            <p style="color:#f96d00"><?php echo $loginError; ?></p>
            <br>
            <div class="rem-for">
                <div class="check">
                    <input type="checkbox">
                    <label>Remember me</label>
                </div>
                <a href="#">Forget password?</a>
            </div>
            <div class="btnn">
                <button class="btn" type="submit" name="submit">Login</button>
            </div>
            <div class="acount">
                <label >Don't have an acount?</label>
                <a href="register.php">Register</a>
            </div>

        </div>
       </div> 
    </form>
    <script src="showprofile.js"></script>
</body>
</html>