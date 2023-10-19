<?php
require '../../aksi/koneksi.php';
require 'layouts/header.php';

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $desc = htmlspecialchars($_POST['desc']);
    $price = htmlspecialchars($_POST['price']);
    $qty = htmlspecialchars($_POST['qty']);
    // var_dump($_FILES); die;

    $img = upload();
    if(!$img) {
        // var_dump("masuk"); die;
        header("Location:create.php");
        return;
    }

    $query = "INSERT INTO products (`name`, `description`, `price`, `qty`, `image`) VALUES('$name', '$desc', '$price', '$qty', '$img')";
    $result = mysqli_query($conn, $query);
    // var_dump(mysqli_error($conn)); die;
    if ($result) {
        $_SESSION['success'] = 'berhasil menambahkan produk';
        header("Location:index.php");
    } else {
        $_SESSION['fail'] = 'gagal menambahkan produk';
        header("Location:index.php");
    }
}
?>
<p class="greeting">Add New</p>
<hr>
<div class="btn-back">
    <a href="../products">Back</a>
</div>
<?php if(isset($_SESSION['fail'])): ?>
    <div class="alert fail"><?= $_SESSION['fail']; ?></div>
<?php unset($_SESSION['fail']); endif; ?>
<div class="form-create">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-element">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-element">
            <label for="desc">Description</label>
            <textarea name="desc" id="desc" cols="30" rows="10" required></textarea>
        </div>
        <div class="form-element">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" required>
        </div>
        <div class="form-element">
            <label for="qty">Qty</label>
            <input type="number" name="qty" id="qty" required>
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