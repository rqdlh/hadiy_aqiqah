<?php 
    include_once("header.php");
    include_once("sidebar.php");

    $id = isset($_GET['id']) ? $_GET['id'] : false;

    if($id){
        $queryCategory = mysqli_query($koneksi, "SELECT * FROM categories WHERE id='$id'");
        $row=mysqli_fetch_assoc($queryCategory);

        $nama = $row['nama'];
    }
?>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Edit Kategori</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="<?= BASE_URL. "dashboard/category-update-process.php?id=". $id; ?>" method="POST" class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Kategori</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nama" value="<?= $nama ;?>">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                                            <a href="<?= BASE_URL . "dashboard/categories.php" ;?>" class="btn btn-light-secondary me-1 mb-1">Batal</a>
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