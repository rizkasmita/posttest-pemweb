<?php

$conn = mysqli_connect("localhost", "root", "", "praktikum-web-posttest");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload() {
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $tempName = $_FILES['image']['tmp_name'];

    $validExtensions = ['png', 'jpg', 'jpeg'];
    $imgExtension = explode('.', $fileName);
    $imgExtension = strtolower(end($imgExtension));
    if(!in_array($imgExtension, $validExtensions)) {
        $_SESSION['fail'] = 'Please upload an image file';
        return false;
    }

    if($fileSize > 3000000) {
        $_SESSION['fail'] = 'File is too big';
        return false;
    }

    date_default_timezone_set("Asia/Makassar");
    // $newFileName = uniqid();
    $newFileName = date('Y-m-d') . $fileName;
    $newFileName .= '.';
    $newFileName .= $imgExtension;
    
    move_uploaded_file($tempName, 'img/' . $newFileName);
    return $newFileName;
}
?>