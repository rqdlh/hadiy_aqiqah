<?php
    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");

    $id = isset($_GET['id']) ? $_GET['id'] : false;

    // Mendapatkan informasi gambar dari database
    $query = mysqli_query($koneksi, "SELECT bukti_tf FROM orders WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
    $gambar = $data['bukti_tf'];

    // Hapus gambar pada lokal
    if (file_exists($gambar)) {
        unlink($gambar); // Menghapus gambar
    }

    // Hapus data dari database
    mysqli_query($koneksi, "DELETE FROM orders WHERE id='$id'");

    header("location:" . BASE_URL . "dashboard/orders.php");
?>
