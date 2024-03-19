<?php 
    include_once("../../functions/koneksi.php");
    include_once("../../functions/helper.php");

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($query) == 0) {
        header("location: ".BASE_URL."dashboard/auth/login.php");
    } else {
        $row = mysqli_fetch_assoc($query);

        session_start();
        
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];

        header("location: ".BASE_URL."dashboard/index.php");

    }
?>