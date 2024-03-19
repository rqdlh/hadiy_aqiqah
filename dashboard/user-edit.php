<?php 
    include_once("header.php");
    include_once("sidebar.php");

    if($_SESSION['role'] === "customer") {
        header("location: ".BASE_URL."dashboard/index.php");
    }

    $id = isset($_GET['id']) ? $_GET['id'] : false;

    if($id){
		$queryUser = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
		$row=mysqli_fetch_assoc($queryUser);
		
		$email = $row['email'];
		$username = $row['username'];
		$alamat = $row['alamat'];
		$no_hp = $row['no_hp'];
        $role = $row['role'];
	}

?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Edit User</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="<?= BASE_URL. "dashboard/user-update-process.php?id=". $id; ?>" method="POST" class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="email" value="<?= $email ;?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="username" value="<?= $username ;?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="alamat" value="<?= $alamat ;?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>No HP</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="no_hp" value="<?= $no_hp ;?>">
                                        </div>
                                        <!-- <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" class="form-control" name="password">
                                        </div> -->
                                        <div class="col-md-4">
                                            <label>Role</label>
                                        </div>
                                        <fieldset class=" col-md-8 form-group">
                                            <select class="form-select" id="basicSelect" name="role">
                                                <option value="">Pilih...</option>    
                                                <option value="admin" <?= $role === "admin" ? "selected" : ""; ?>>Admin</option>    
                                                <option value="customer" <?= $role === "customer" ? "selected" : ""; ?>>Customer</option>  
                                            </select>
                                        </fieldset>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                                            <a href="<?= BASE_URL . "dashboard/users.php" ;?>" class="btn btn-light-secondary me-1 mb-1">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php 
    include_once("footer.php");
?>