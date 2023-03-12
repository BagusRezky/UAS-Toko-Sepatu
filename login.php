<?php 
 
include 'config.php';
 
error_reporting(0);

session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']) ;
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
   
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
        
    } else {
        echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="loginStyle.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
   
   <link rel="stylesheet" href="register.css">
    <title>Login</title>
</head>
<body>
<div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
            <form action="" method="POST">
                <h2 class="text-center"><strong>Login</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" id="myButton" name="submit">Login</button>
                </div>
                <a href="register.php" class="already">You already have an account? Login here.</a>
            </form>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <div class="kotak_login">
        <form action="" method="POST">
            <div class="container">
                <h3><center><b>Login</b></center></h3><br>
                <label for="username"><b>Username</b></label>
                <input type="text" name="username" id="username" placeholder="Enter Username" size="20">

                <label for="password"><b>Password</b></label>
                <input type="password" name="password" id="password" placeholder="Enter Password" size="20"><br><br>

                
                <button type="submit" id="myButton" name="submit">Login</button>

                <div class="reg">
                    <br>
                    <span class="registrasi">
                        <a href="register.php" onclick="validation();">Don't have an account?</a>
                    </span>
                </div>
            </div>
        </form>
    </div> -->
</body>
</html>