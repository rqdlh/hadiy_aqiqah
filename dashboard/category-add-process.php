<?php 
    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");

    $nama = $_POST['nama'];

    if (empty($nama)) {
        header("location: ".BASE_URL."dashboard/category-create.php");
    } else {
        mysqli_query($koneksi, "INSERT INTO categories (nama)
                                VALUES ('$nama')");
        header("location: ".BASE_URL."dashboard/categories.php");
    }
?>
