<?php 
    include_once("../functions/koneksi.php");
    include_once("../functions/helper.php");
    
    $id = isset($_GET['id']) ? $_GET['id'] : false;

    $email = $_POST['email'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $role = $_POST['role'];


    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

    if (empty($email) || empty($username) || empty($alamat) || empty($no_hp) || empty($role)) {
        header("location: ".BASE_URL."dashboard/user-edit.php");
    } else {
		mysqli_query($koneksi, "UPDATE users SET email='$email',
												username='$username',
												alamat='$alamat', 
												no_hp='$no_hp', 
												role='$role' 
                                                WHERE id='$id'");
        header("location: ".BASE_URL."dashboard/users.php");
    }
?>
