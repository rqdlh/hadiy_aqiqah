<?php
include_once("../functions/koneksi.php");
include_once("../functions/helper.php");

$id = isset($_GET['id']) ? $_GET['id'] : false;

$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];
$qty = $_POST['qty'];
$status = $_POST['status'];

if (empty($user_id) || empty($product_id) || empty($qty) || empty($status)) {
    header("location: ".BASE_URL."dashboard/order-edit.php?id=".$id);
} else {
    // Mendapatkan informasi harga dari produk
    $query = mysqli_query($koneksi, "SELECT harga FROM products WHERE id = '$product_id'");
    $product = mysqli_fetch_assoc($query);
    $harga = $product['harga'] * $qty;

    $bukti_tf = $_FILES['bukti_tf'];
    $upload_dir = '';

    if ($bukti_tf['size'] > 0) {
        // Mengunggah gambar baru sebagai bukti transfer
        $file_name = date('YmdHis') . '_' . $bukti_tf['name'];
        $upload_dir = '../assets/img/order/' . $file_name;
        move_uploaded_file($bukti_tf['tmp_name'], $upload_dir);
    } else {
        // Menggunakan gambar lama sebagai bukti transfer
        $queryOrder = mysqli_query($koneksi, "SELECT bukti_tf FROM orders WHERE id='$id'");
        $order = mysqli_fetch_assoc($queryOrder);
        $upload_dir = $order['bukti_tf'];
    }

    mysqli_query($koneksi, "UPDATE orders SET user_id='$user_id', product_id='$product_id', qty='$qty', harga='$harga', bukti_tf='$upload_dir', status='$status' WHERE id='$id'");
    header("location: ".BASE_URL."dashboard/orders.php");
}
?>
