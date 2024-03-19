<?php 
    include_once("../../functions/koneksi.php");
    include_once("../../functions/helper.php");
    session_start();

    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['username']);
    unset($_SESSION['role']);

    header("location: ".BASE_URL."dashboard/auth/login.php");
?>