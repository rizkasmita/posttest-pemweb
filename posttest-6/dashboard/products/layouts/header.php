<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location:../../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysia Scents | Dashboard</title>
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidenav">
        <div class="logo">Elysia Scents</div>
        <div class="links">
            <a href="#" class="active">Products</a>
            <a href="">Users</a>
            <a href="">Orders</a>
        </div>
        <div class="logout">
            <!-- <button type="submit" name="logout">log out</button> -->
            <a href="../logout.php">log out</a>
        </div>
    </div>
    <div class="main">