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

function register($data) {
    global $conn;

    $nama = $data['name'];
    $email = $data['email'];
    $usn = strtolower(stripslashes($data['username']));
    $pw = mysqli_real_escape_string($conn, $data['password']);
    $pw2 = mysqli_real_escape_string($conn, $data['password2']);

    // cek usn
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$usn'");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>alert('username sudah tersedia')</script>";
        return false;
    }

    // cek confirm password
    if ($pw != $pw2) {
        echo "<script>alert('konfirmasi password tidak sesuai')</script>";
        return false;
    }

    // enkripsi password
    $pw = password_hash($pw, PASSWORD_DEFAULT);

    // insert user ke db
    mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$usn', '$email', '$pw')");

    return mysqli_affected_rows($conn);
}
?>