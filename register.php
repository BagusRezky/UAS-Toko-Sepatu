<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['submit'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $cpassword = ($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user 
                    VALUES ('', '$name', '$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $name = "";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Maaf! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Maaf! Username Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Maaf! Password Tidak Sesuai')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.css">
    <!-- <link rel="stylesheet" type="text/css" href="regisStyle.css"> -->
    <title>Registrasi</title>
</head>
<body>

    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="" method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Register</button>
                </div>
                <a href="login.php" class="already">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>