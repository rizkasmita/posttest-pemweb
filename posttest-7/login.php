<?php
session_start();
if(isset($_SESSION['loginAdmin'])) {
    header("Location:dashboard");
    exit;
} else if (isset($_SESSION['loginUser'])) {
    header("Location:index.php");
    exit;
}
require 'aksi/koneksi.php';

$adminusn = "admin";
$adminpw = "admin";

if(isset($_POST['login'])) {
    $inputUsn = htmlspecialchars($_POST['username']);
    $inputPw = htmlspecialchars($_POST['password']);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$inputUsn'");

    if($inputUsn == $adminusn && $inputPw == $adminpw) {
        $_SESSION['loginAdmin'] = true;
        header("Location:dashboard");
        exit;
    } else {
        if (mysqli_num_rows($result) === 1) {
            // CEK PW
            $row = mysqli_fetch_assoc($result);
            if (password_verify($inputPw, $row['password'])) {
                echo "<script>alert('berhasil login')</script>";
                $_SESSION['loginUser'] = true;
                header("Location:index.php");
                exit;
            }
        } else {
            $_SESSION['fail'] = 'Login failed';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysia Scents | Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <div class="container">
            <p class="title">Log in</p>
            <?php if(isset($_SESSION['fail'])) : ?>
                <div class="alert fail">
                    <p><?= $_SESSION['fail']; ?></p>
                </div>
            <?php unset($_SESSION['fail']); endif; ?>
            <form action="" method="post">
                <div class="input-form">
                    <input type="text" name="username" required placeholder="Username">
                </div>
                <div class="input-form">
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div class="input-form">
                    <button type="submit" name="login">Login</button>
                </div>
            </form>
            <p class="register">Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</body>
</html>