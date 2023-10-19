<?php
session_start();
if(isset($_SESSION['login'])) {
    header("Location:dashboard");
    exit;
}
require 'aksi/koneksi.php';

$adminusn = "admin";
$adminpw = "123123";

if(isset($_POST['login'])) {
    $inputUsn = htmlspecialchars($_POST['username']);
    $inputPw = htmlspecialchars($_POST['password']);

    if($inputUsn == $adminusn && $inputPw == $adminpw) {
        $_SESSION['login'] = true;
        header("Location:dashboard");
        exit;
    } else {
        $_SESSION['fail'] = 'Login failed';
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
            <p class="register">Don't have an account? <a href="">Register here</a></p>
        </div>
    </div>
</body>
</html>