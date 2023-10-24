<?php
require 'layouts/header.php';
require '../../aksi/koneksi.php';

$id = $_GET['id'];
if(!isset($_GET['id'])) {
    header("Location:index.php");
    exit;
}
$product = query("SELECT * FROM products WHERE id=$id")[0];
?>
<p class="greeting">View</p>
<hr>
<div class="btn-back">
    <a href="../products">Back</a>
</div>
<div class="container">
    <div class="image">
        <img src="img/<?= $product['image']; ?>" alt="">
    </div>
    <p class="title"><b>Name: </b><?= $product['name']; ?></p>
    <p class="desc"><b>Description: </b><?= $product['description']; ?></p>
    <p><b>Price: </b>$<?= $product['price']; ?></p>
    <p><b>Qty: </b><?= $product['qty']; ?></p>
    <div class="actions" style="margin-top: 20px;">
        <a href="edit.php?id=<?= $product['id']; ?>" style="text-decoration:none; color:black" class="btn-action edit">edit</a>
        <a href="delete.php?id=<?= $product['id']; ?>" onclick="return confirm('are you sure to remove this data?')" style="text-decoration:none; color:black" class="btn-action delete">delete</a>
    </div>
</div>
<?php
require 'layouts/footer.php';
?>