<?php 

    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");
    
    session_start();

    if(!isset($_SESSION['username'])) {
        header("location: ".BASE_URL."dashboard/auth/login.php");
    }

    $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : false;
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : false;
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : false;
    $role = isset($_SESSION['role']) ? $_SESSION['role'] : false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">