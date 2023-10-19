<?php
require 'header.php';
require 'aksi/koneksi.php';

$products = query("SELECT * FROM products");
$i = 1;
?>

    <section id="home">
        <div class="container">
            <div class="row">
                <div class="content">
                    <p>experience <em>luxury</em> in every scent.</p>
                    <a href="" name="collection" onclick="alert('koleksi belum tersedia')">browse our collection</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <p class="title">about me</p>
            <div class="row">
                <div class="col img">
                    <img src="img/1.jpeg" alt="">
                </div>
                <div class="col content">
                    <p>hai! namaku rizka asmita biasa dipanggil rizka. aku seorang mahasiswi di universitas mulawarman fakultas teknik program studi informatika! NIM ku 2209106038, sehingga aku ditempatkan di kelas A. aku angkatan 2022. aku lulusan smkn 7 samarinda. hobiku dengerin lagu aja sih especially lagu2nya arash buana! omg i loooooveeee his songs so much, yall should listen to it too. terusss aku juga suka main sama kucing, kucingku namanya jennie, dia kucing persia-mixdom berwarna oren, dia gendut, hampir 4 kg. udah kayaknya ini aja gausah panjang-panjang, karena aku juga udah bingung, bye!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="collection">
        <p class="title">collection</p>
        <div class="container">
            <?php foreach($products as $product): ?>
            <div class="card">
                <div class="header-img">
                    <img src="dashboard/products/img/<?= $product['image'] ?>" alt="">
                </div>
                <div class="content">
                    <h1 class="name"><?= $product['name'] ?></h1>
                    <p class="price">$<?= $product['price'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <p class="title">contact us</p>
            <form action="contact.php" method="post">
                <div class="input-name" style="margin-bottom: 15px;">
                    <label for="name">Name</label><br>
                    <input type="text" name="name" id="name" required placeholder="Name">
                </div>
                <div class="input-email" style="margin-bottom: 15px;">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" required placeholder="example@mail.com">
                </div>
                <div class="input-msg" style="margin-bottom: 15px;">
                    <label for="message">Message</label><br>
                    <textarea name="message" id="message" cols="30" rows="10" required placeholder="Write your message here"></textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="Send" class="btn-submit">
                </div>
            </form>
        </div>
    </section>

<?php require 'footer.php' ?>