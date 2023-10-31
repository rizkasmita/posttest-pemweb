<?php
require '../../aksi/koneksi.php';

$id = $_GET['id'];
$product = query("SELECT * FROM products WHERE id=$id")[0];
unlink('img/' . $product['image']);

$result = mysqli_query($conn, "DELETE FROM products WHERE id=$id");
if($result) {
    session_start();
    $_SESSION['success'] = 'data berhasil dihapus';
    header("Location:index.php");
} else {
    session_start();
    $_SESSION['fail'] = 'data gagal dihapus';
    header("Location:index.php");
}
?>