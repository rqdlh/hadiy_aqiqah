<?php 
    include_once("header.php");
    include_once("sidebar.php");

    // if($_SESSION['role'] === "customer") {
    //     header("location: ".BASE_URL."dashboard/index.php");
    // }

    $products = mysqli_query($koneksi, "SELECT products.id, products.nama, categories.nama AS nama_category, products.porsi, products.harga FROM products JOIN categories ON products.category_id = categories.id");

?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Tambah Order</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="<?= BASE_URL. "dashboard/order-add-process.php"; ?>" method="POST" class="form form-horizontal" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        <input type="number" class="form-control" name="user_id" hidden value="<?= $user_id; ?>">
                                        <div class="col-md-4">
                                            <label>Produk</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset>
                                                <select class="form-select" name="product_id">
                                                    <option value="">Pilih...</option>
                                                    <?php while($product = mysqli_fetch_assoc($products)) { ?>
                                                    <option value="<?php echo $product['id']; ?>"><?php echo $product['nama'] . " (" . $product['nama_category'] . ")" . " - " . $product['porsi'] . " porsi" . " - " . "Rp. " . number_format($product['harga'], 0, ',', '.'); ?></option>
                                                    <?php } ?>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Qty</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" class="form-control" name="qty">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Bukti Transfer</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="file" class="form-control" name="bukti_tf">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Tambah</button>
                                            <a href="<?= BASE_URL . "dashboard/orders.php" ;?>" class="btn btn-light-secondary me-1 mb-1">Batal</a>
                                        </div
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