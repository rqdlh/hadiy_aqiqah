<?php 
    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");

    $nama = $_POST['nama'];
    $category_id = $_POST['category_id'];
    $porsi = $_POST['porsi'];
    $harga = $_POST['harga'];

    if (empty($nama) || empty($category_id) || empty($porsi) || empty($harga)) {
        header("location: ".BASE_URL."dashboard/product-create.php");
    } else {
        mysqli_query($koneksi, "INSERT INTO products (nama, category_id, porsi, harga)
                                VALUES ('$nama', '$category_id', '$porsi', '$harga')");
        header("location: ".BASE_URL."dashboard/products.php");
    }
?>