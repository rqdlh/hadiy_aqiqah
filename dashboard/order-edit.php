<?php 
    include_once("header.php");
    include_once("sidebar.php");

    if($_SESSION['role'] === "customer") {
        header("location: ".BASE_URL."dashboard/index.php");
    }

    $id = isset($_GET['id']) ? $_GET['id'] : false;

    $products = mysqli_query($koneksi, "SELECT products.id, products.nama, categories.nama AS nama_category, products.porsi, products.harga FROM products JOIN categories ON products.category_id = categories.id");

    if($id){
        // $queryProduct = mysqli_query($koneksi, "SELECT * FROM products WHERE id='$id'");
        $queryOrder = mysqli_query($koneksi, "SELECT orders.id, orders.user_id, users.username, users.alamat, users.no_hp, products.id AS product_id, categories.nama AS nama_category, orders.qty, orders.harga, orders.bukti_tf, orders.status FROM orders JOIN users ON orders.user_id = users.id JOIN products ON orders.product_id = products.id JOIN categories ON products.category_id = categories.id WHERE orders.id='$id'");

        $row=mysqli_fetch_assoc($queryOrder);
        
        $nama = $row['username'];
        $id_user = $row['user_id'];
        $product = $row['product_id'];
        $qty = $row['qty'];
        $harga = $row['harga'];
        $bukti_tf = $row['bukti_tf'];
        $status = $row['status'];
    }

?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Edit Order</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="<?= BASE_URL. "dashboard/order-update-process.php?id=". $id; ?>" method="POST" class="form form-horizontal" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        <input type="number" class="form-control" name="user_id" hidden value="<?= $id_user; ?>">
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nama" value="<?= $nama ;?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Produk</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset>
                                            <select class="form-select" name="product_id">
                                                <option value="">Pilih...</option>
                                                <?php while ($product = mysqli_fetch_assoc($products)) { ?>
                                                    <option value="<?php echo $product['id']; ?>" <?php echo ($product['id'] == $row['product_id']) ? 'selected' : ''; ?>>
                                                        <?php echo $product['nama'] . " (" . $product['nama_category'] . ")" . " - " . $product['porsi'] . " porsi" . " - " . "Rp. " . number_format($product['harga'], 0, ',', '.'); ?>
                                                    </option>
                                                <?php } ?>
                                            </select>

                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Qty</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="qty" value="<?= $qty ;?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bukti Transfer</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="file" class="form-control" name="bukti_tf" value="<?= $bukti_tf ;?>">
                                            <img class="img-fluid w-25 mt-5" src="<?= $bukti_tf ;?>" alt="bukti_tf">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset>
                                                <select class="form-select" name="status">
                                                    <option value="">Pilih...</option>
                                                    <option value="belum_di_verifikasi" <?php echo ($status === "belum_di_verifikasi") ? 'selected' : ''; ?>>Belum Di Verifikasi</option>
                                                    <option value="sudah_di_verifikasi" <?php echo ($status === "sudah_di_verifikasi") ? 'selected' : ''; ?>>Sudah Di Verifikasi</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                                            <a href="<?= BASE_URL . "dashboard/orders.php" ;?>" class="btn btn-light-secondary me-1 mb-1">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
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