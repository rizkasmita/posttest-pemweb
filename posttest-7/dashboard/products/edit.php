<?php
require 'layouts/header.php';
require '../../aksi/koneksi.php';

$id = $_GET['id'];
$product = query("SELECT * FROM products WHERE id=$id")[0];

if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $desc = htmlspecialchars($_POST['desc']);
    $price = htmlspecialchars($_POST['price']);
    $qty = htmlspecialchars($_POST['qty']);

    $img = upload();
    unlink('img/'.$_POST['oldimg']);
    if(!$img) {
        header("Location:edit.php?id=$id");
        return;
    }

    $result = mysqli_query($conn, "UPDATE products SET `name` = '$name', `description` = '$desc', `price` = '$price', `qty` = '$qty', `image` = '$img' WHERE `id` = '$id' ");
    if($result) {
        $_SESSION['success'] = 'data updated successfully';
        header("Location:index.php");
    } else {
        $_SESSION['fail'] = 'data failed to be updated';
        header("Location:index.php");
    }
}

?>
<p class="greeting">Edit</p>
<hr>
<div class="btn-back">
    <a href="../products">Back</a>
</div>
<?php if(isset($_SESSION['fail'])): ?>
    <div class="alert fail"><?= $_SESSION['fail']; ?></div>
<?php unset($_SESSION['fail']); endif; ?>
<div class="form-create">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="oldimg" value="<?= $product['image']; ?>">
        <div class="form-element">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required value="<?= $product['name']; ?>">
        </div>
        <div class="form-element">
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" cols="30" rows="10" required><?= $product['description'] ?></textarea>
        </div>
        <div class="form-element">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" required value="<?= $product['price'] ?>">
        </div>
        <div class="form-element">
            <label for="qty">Qty</label>
            <input type="number" name="qty" id="qty" required value="<?= $product['qty']; ?>">
        </div>
        <div class="form-element">
            <label for="image">Upload Image</label>
            <input type="file" name="image" id="image" required>
        </div>
        <button type="submit" name="submit" class="btn-submit">Submit</button>
    </form>
</div>
<?php
require 'layouts/footer.php';
?>