<?php
session_start();
require 'aksi/koneksi.php';

if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        echo "<script>alert('registrasi berhasil')</script>";
        header("Location:login.php");
        exit;
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysia Scents | Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <div class="container">
            <p class="title">Register</p>
            <form action="" method="post">
                <div class="input-form">
                    <input type="text" name="name" required placeholder="Name">
                </div>
                <div class="input-form">
                    <input type="email" name="email" required placeholder="Email">
                </div>
                <div class="input-form">
                    <input type="text" name="username" required placeholder="Username">
                </div>
                <div class="input-form">
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div class="input-form">
                    <input type="password" name="password2" required placeholder="Confirm Password">
                </div>
                <div class="input-form">
                    <button type="submit" name="register">Register</button>
                </div>
            </form>
            <p class="register">Have an account? <a href="login.php">Sign in here</a></p>
        </div>
    </div>
</body>
</html>