<?php 
    include_once("header.php");
    include_once("sidebar.php");

    // if($_SESSION['role'] === "customer") {
    //     header("location: ".BASE_URL."dashboard/index.php");
    // }

    // $queryProduct = mysqli_query($koneksi, "SELECT products.*, categories.nama AS category FROM products LEFT JOIN categories ON products.category_id = categories.id");
    $queryOrder = mysqli_query($koneksi, "SELECT orders.id AS id_order, users.username, users.id AS id_user, users.alamat, users.no_hp, products.nama AS nama_product, categories.nama AS nama_category, orders.qty, orders.harga, orders.bukti_tf, orders.status FROM orders JOIN users ON orders.user_id = users.id JOIN products ON orders.product_id = products.id JOIN categories ON products.category_id = categories.id ORDER BY orders.id asc");
?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Tabel Order</h3>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Order</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            
                            <?php 
                                if($_SESSION['role'] === "customer") {
                            ?>
                                <div class="row">
                                    <div class="col-8 align-self-center">
                                        <a href="<?= BASE_URL. "dashboard/order-create.php"; ?>" class="btn btn-primary btn-sm align-self-center">Tambah Order</a>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">         
                                <table class="table table-lg">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Username</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>
                                            <th>Produk</th>
                                            <th>Kategori</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Bukti Transfer</th>
                                            <th>Status</th>
                                            
                                            <?php 
                                                if($_SESSION['role'] === "admin") {
                                            ?>
                                                <th>Action</th>
                                            <?php 
                                                }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $x = 1;
                                            while ($row = mysqli_fetch_assoc($queryOrder)) :
                                        ?>
                                        <?php 
                                            if($_SESSION['id'] == $row['id_user']) {
                                        ?>
                                        <tr>
                                            <td scope="row" style="vertical-align: middle;"><?= $x; ?></td>
                                            <td class="text-bold-500"><?= $row['username']; ?></td>
                                            <td class="text-bold-500"><?= $row['alamat']; ?></td>
                                            <td class="text-bold-500"><?= $row['no_hp']; ?></td>
                                            <td class="text-bold-500"><?= $row['nama_product']; ?></td>
                                            <td class="text-bold-500"><?= $row['nama_category']; ?></td>
                                            <td class="text-bold-500"><?= $row['qty']; ?></td>
                                            <td class="text-bold-500">Rp. <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                                            <td class="text-bold-500"><img class="img-fluid" src="<?= $row['bukti_tf']; ?>" alt="bukti_tf"></td>
                                            <td class="text-bold-500"><?= $row['status']; ?></td>
                                        </tr>
                                        <?php
                                        } elseif ($_SESSION['role'] === "admin") {
                                        ?>
                                        <tr>
                                            <td scope="row" style="vertical-align: middle;"><?= $x; ?></td>
                                            <td class="text-bold-500"><?= $row['username']; ?></td>
                                            <td class="text-bold-500"><?= $row['alamat']; ?></td>
                                            <td class="text-bold-500"><?= $row['no_hp']; ?></td>
                                            <td class="text-bold-500"><?= $row['nama_product']; ?></td>
                                            <td class="text-bold-500"><?= $row['nama_category']; ?></td>
                                            <td class="text-bold-500"><?= $row['qty']; ?></td>
                                            <td class="text-bold-500">Rp. <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                                            <td class="text-bold-500"><img class="img-fluid" src="<?= $row['bukti_tf']; ?>" alt="bukti_tf"></td>
                                            <td class="text-bold-500"><?= $row['status']; ?></td>
                                            <td class="text-bold-500">
                                                <form action="<?= BASE_URL . "dashboard/order-delete.php?id=" . $row['id_order'] ;?>" method="POST">
                                                    <a href="<?= BASE_URL. "dashboard/order-edit.php?id=".$row['id_order'] ;?>" class="btn btn-success btn-sm">Edit</a>
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                            $x++;
                                            endwhile;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php 
    include_once("footer.php");
?>
