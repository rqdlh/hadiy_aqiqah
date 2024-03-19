<?php 
    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");
    
    $id = isset($_GET['id']) ? $_GET['id'] : false;

    $nama = $_POST['nama'];

    $query = mysqli_query($koneksi, "SELECT * FROM categories WHERE id='$id'");

    if (empty($nama)) {
        header("location: ".BASE_URL."dashboard/category-edit.php");
    } else {
        mysqli_query($koneksi, "UPDATE categories SET nama='$nama' WHERE id='$id'");
        header("location: ".BASE_URL."dashboard/categories.php");
    }
?>
