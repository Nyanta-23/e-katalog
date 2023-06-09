<?php
$base_url = "http://localhost/ekatalog/admin";
$page  = $_GET['page'];
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary eslevation-4">
  <!-- Brand Logo -->
  <a href="./artikel/admin/dashboard.php?page=beranda" class="brand-link">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">

      </div>
    </div> -->


    <!-- Sidebar Menu -->
    <nav class="mt-2 d-flex">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=data_barang" class="nav-link <?php if ($page == 'data_barang') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Data Barang
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=kategori" class="nav-link <?php if ($page == 'kategori') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=about" class="nav-link <?php if ($page == 'about') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              About
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=social" class="nav-link <?php if ($page == 'social') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Social
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= $base_url ?>/dashboard.php?page=twitter" class="nav-link <?php if ($page == 'twitter') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Twitter
            </p>
          </a>
        </li>


    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>