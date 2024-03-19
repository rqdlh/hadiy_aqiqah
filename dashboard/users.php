<?php 
    include_once("header.php");
    include_once("sidebar.php");

    if($_SESSION['role'] === "customer") {
        header("location: ".BASE_URL."dashboard/index.php");
    }

    $queryUser = mysqli_query($koneksi, "SELECT * FROM users");
?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Tabel User</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8 align-self-center">
                                    <a href="<?= BASE_URL. "dashboard/user-create.php"; ?>" class="btn btn-primary btn-sm align-self-center">Tambah User</a>
                                </div>
                            </div>
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">         
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>EMAIL</th>
                                                <th>USERNAME</th>
                                                <th>ALAMAT</th>
                                                <th>NO HP</th>
                                                <th>ROLE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $x = 1;
                                                while ($row = mysqli_fetch_assoc($queryUser)) :
                                            ?>
                                            <tr>
                                                <td scope="row" style="vertical-align: middle;"><?= $x; ?></td>
                                                <td class="text-bold-500"><?= $row['email']; ?></td>
                                                <td class="text-bold-500"><?= $row['username']; ?></td>
                                                <td class="text-bold-500"><?= $row['alamat']; ?></td>
                                                <td class="text-bold-500"><?= $row['no_hp']; ?></td>
                                                <td class="text-bold-500"><?= $row['role']; ?></td>
                                                <td class="text-bold-500">
                                                    <form action="<?= BASE_URL . "dashboard/user-delete.php?id=" . $row['id'] ;?>" method="POST">
                                                        <a href="<?= BASE_URL. "dashboard/user-edit.php?id=".$row['id'] ;?>" class="btn btn-success btn-sm">Edit</a>
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            <?php
                                                $x++;
                                                endwhile;
                                            ?>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
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