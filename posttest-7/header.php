<?php
session_start();
if (isset($_SESSION['loginUser'])) {
    echo "<script>alert('berhasil login')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysia Scents</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/star-fill.svg">
</head>
<body>
    <nav>
        <div class="left">
            <input type="checkbox" name="" id="check">
            <label for="check" class="checkbtn">
                <img src="img/list (2).svg" alt="" class="filter-white">
            </label>
            <ul>
                <label class="logo"><a href="#home">Elysian Scents</a></label>
                <li><a href="#home" class="active" style="margin-left: 20px;">home</a></li>
                <li><a href="#about" style="margin-left: 20px;">about</a></li>
                <li><a href="" style="margin-left: 20px;">shop</a></li>
                <li><a href="#contact" style="margin-left: 20px;">contact</a></li>
                <?php if(isset($_SESSION['loginAdmin']) || isset($_SESSION['loginUser'])) : ?>
                    <li><a href="logout.php" class="list-login">logout</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="list-login">login</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="center">
            <label class="logo"><a href="#home">Elysian Scents</a></label>
        </div>
        <div class="right">
            <?php if(isset($_SESSION['loginAdmin']) || isset($_SESSION['loginUser'])) : ?>
                <a href="logout.php" style="text-decoration: none;" >
                    <button class="btn-login">log out</button>
                </a>
            <?php else: ?>
                <a href="login.php" style="text-decoration: none;" >
                    <button class="btn-login">log in</button>
                </a>
            <?php endif; ?>
            <span style="margin-right: 10px;"><img src="img/cart.svg" alt="" class="filter-white" id="cart"></span>
            <button id="light"><img src="img/sun.svg" id="btnIcon"></button>
            <!-- <button id="dark"><img src="img/moon.svg"></button> -->
        </div>
    </nav>