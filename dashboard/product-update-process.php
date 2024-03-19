<?php
include_once("../functions/koneksi.php");
include_once("../functions/helper.php");

$id = isset($_GET['id']) ? $_GET['id'] : false;

$nama = $_POST['nama'];
$category_id = $_POST['category_id'];
$porsi = $_POST['porsi'];
$harga = $_POST['harga'];

if (empty($nama) || empty($category_id) || empty($porsi) || empty($harga)) {
    header("location: ".BASE_URL."dashboard/product-edit.php?id=".$id);
} else {
    mysqli_query($koneksi, "UPDATE products SET nama='$nama', category_id='$category_id', porsi='$porsi', harga='$harga' WHERE id='$id'");
    header("location: ".BASE_URL."dashboard/products.php");
}
?>
