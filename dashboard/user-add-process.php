<?php 
    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");

    $email = $_POST['email'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

    if (empty($email) || empty($username) || empty($alamat) || empty($no_hp) || empty($password) || empty($role)) {
        header("location: ".BASE_URL."dashboard/user-create.php");
    } elseif (mysqli_num_rows($query) == 1) {
        header("location: ".BASE_URL."dashboard/user-create.php");
    } else {
        $password = md5($password);
        mysqli_query($koneksi, "INSERT INTO users (email, username, alamat, no_hp, password, role)
                                VALUES ('$email', '$username', '$alamat', '$no_hp', '$password', '$role')");
        header("location: ".BASE_URL."dashboard/users.php");
    }
?>
