<?php
    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");

    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $qty = $_POST['qty'];

    // Mendapatkan informasi harga dari produk
    $query = mysqli_query($koneksi, "SELECT harga FROM products WHERE id = '$product_id'");
    $product = mysqli_fetch_assoc($query);
    $harga = $product['harga'] * $qty;

    // Mengunggah gambar sebagai bukti transfer
    $bukti_tf = $_FILES['bukti_tf'];
    $file_name = date('YmdHis') . '_' . $bukti_tf['name'];
    $upload_dir = '../assets/img/order/' . $file_name;
    move_uploaded_file($bukti_tf['tmp_name'], $upload_dir);

    // Memasukkan data pesanan ke dalam tabel orders
    $query = mysqli_query($koneksi, "INSERT INTO orders (user_id, product_id, qty, harga, bukti_tf, status)
                                    VALUES ('$user_id', '$product_id', '$qty', '$harga', '$upload_dir', 'belum_di_verifikasi')");

    if ($query) {
        header("location: " . BASE_URL . "dashboard/orders.php");
    } else {
        header("location: " . BASE_URL . "dashboard/order-create.php");
    }
?>
