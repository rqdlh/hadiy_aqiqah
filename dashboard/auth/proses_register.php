<?php 
    include_once("../../functions/koneksi.php");
    include_once("../../functions/helper.php");

    $role = "customer";
    $email = $_POST['email'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    // unset($_POST['password']);
    // unset($_POST['re_password']);
    // $dataForm = http_build_query($_POST);

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

    if ($password != $re_password) {
        header("location: ".BASE_URL."dashboard/auth/register.php");
    } elseif (mysqli_num_rows($query) == 1) {
        header("location: ".BASE_URL."dashboard/auth/register.php");
    } else {
        $password = md5($password);
        mysqli_query($koneksi, "INSERT INTO users (email, username, alamat, no_hp, password, role)
                                VALUES ('$email', '$username', '$alamat', '$no_hp', '$password', '$role')");
        header("location: ".BASE_URL."dashboard/auth/login.php");
    }

?>