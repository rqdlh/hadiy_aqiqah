<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="<?= BASE_URL. "dashboard/index.php"; ?>"><img src="<?= BASE_URL. "assets/img/logo.png"; ?>" alt="Logo" srcset="" class="w-25 h-auto"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
   
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span><?= $username; ?></span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="<?= BASE_URL. "/dashboard/auth/logout.php"; ?>">Keluar</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="<?= BASE_URL. "dashboard/index.php"; ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="<?= BASE_URL. "index.php"; ?>" class='sidebar-link'>
                        <i class="bi bi-house-door-fill"></i>
                        <span>Halaman Utama</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="<?= BASE_URL. "dashboard/orders.php"; ?>" class='sidebar-link'>
                        <i class="bi bi-cash"></i>
                        <span>Order</span>
                    </a>
                </li>
                
                <?php 
                    if($_SESSION['role'] === "admin") : 
                ?>
                <li class="sidebar-item">
                    <a href="<?= BASE_URL. "dashboard/users.php"; ?>" class='sidebar-link'>
                        <i class="bi bi-people-fill"></i>
                        <span>User</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= BASE_URL. "dashboard/categories.php"; ?>" class='sidebar-link'>
                        <i class="bi bi-diamond-fill"></i>
                        <span>Kategori</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= BASE_URL. "dashboard/products.php"; ?>" class='sidebar-link'>
                        <i class="bi bi-bucket-fill"></i>
                        <span>Produk</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= BASE_URL. "dashboard/orders.php"; ?>" class='sidebar-link'>
                        <i class="bi bi-cash"></i>
                        <span>Order</span>
                    </a>
                </li>
                <?php 
                    endif;
                ?>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>