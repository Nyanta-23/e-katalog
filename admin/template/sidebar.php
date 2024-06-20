<?php
$base_url = "http://localhost:8080/e-katalog/admin";
$page = $_GET["page"];

?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary eslevation-4">
  <!-- Brand Logo -->
  <a href="./dashboard.php?page=home" class="brand-link">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="./../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        <img src="<?= $path; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> -->


    <!-- Sidebar Menu -->
    <nav class="mt-2 d-flex">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=home" class="nav-link <?= $page == 'home' ? "active" : false  ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=data_barang" class="nav-link <?= $page == 'data_barang' ? "active" : false  ?>">
            <i class="nav-icon fas fa-box"></i>
            <p>
              Data Barang
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=kategori" class="nav-link <?= $page == 'kategori' ? "active" : false  ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=social" class="nav-link <?= $page == 'social' ? "active" : false  ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Social Media
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=icons" class="nav-link <?= $page == 'icons' ? "active" : false  ?>">
            <i class="nav-icon fas fa-file-image-o"></i>
            <p>
              Icons
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=about" class="nav-link <?= $page == 'about' ? "active" : false  ?>">
            <i class="nav-icon fas fa-info-circle"></i>
            <p>
              About
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a onclick="return confirm('Yakin ingin keluar?')" href="../admin/signout.php" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=about" class="nav-link <?= $page == 'about' ? "active" : false  ?>">
            <i class="nav-icon fas fa-users"></i>

            <p class="fs-1"><?= $path; ?></p>
          </a>
        </li> -->
    </nav>

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->

</aside>