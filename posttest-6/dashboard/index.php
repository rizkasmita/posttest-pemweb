<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location:../login.php");
    exit;
}
date_default_timezone_set('Asia/Makassar');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysia Scents | Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="sidenav">
        <div class="logo">Elysia Scents</div>
        <div class="links">
            <a href="products">Products</a>
            <a href="">Users</a>
            <a href="">Orders</a>
        </div>
        <div class="logout">
            <a href="logout.php">log out</a>
        </div>
    </div>
    <div class="main">
        <p class="greeting">welcome back, admin</p>
        <hr>
        <?= date('l, d M Y'); ?>
    </div>
</body>
</html>