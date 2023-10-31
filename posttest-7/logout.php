<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
echo "<script>alert('berhasil logout')</script>";
header("Location:index.php");
exit;
?>