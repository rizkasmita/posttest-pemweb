<?php
require 'layouts/header.php';
require '../../aksi/koneksi.php';

$products = query("SELECT * FROM products");
$i = 1;
?>
<p class="greeting">Products</p>
<hr>
<div class="btn-create">
    <a href="create.php">add new</a>
</div>
<?php
if (isset($_SESSION['success'])) :
?>
<div class="alert success">
    <?= $_SESSION['success'] ?>
</div>
<?php unset($_SESSION['success']); 
endif; ?>
<?php
if (isset($_SESSION['fail'])) :
?>
<div class="alert fail">
    <?= $_SESSION['fail'] ?>
</div>
<?php unset($_SESSION['fail']); endif; ?>
<table border="1" cellspacing="0" style="width:100%; margin-top:20px">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php foreach($products as $product) : ?>
        <tr>
            <th><?= $i++; ?></th>
            <td><?= $product['name']; ?></td>
            <td><?= $product['price']; ?></td>
            <td style="text-align: center;"><?= $product['qty']; ?></td>
            <td class="actions">
                <a href="read.php?id=<?= $product['id']; ?>" class="btn-action view"><img src="../../img/eye (1).svg" alt=""></a>
                <a href="edit.php?id=<?= $product['id']; ?>" class="btn-action edit"><img src="../../img/pencil-square.svg" alt=""></a>
                <a href="delete.php?id=<?= $product['id']; ?>" onclick="return confirm('are you sure to remove this data?')" class="btn-action delete"><img src="../../img/trash.svg" alt=""></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
require 'layouts/footer.php';
?>