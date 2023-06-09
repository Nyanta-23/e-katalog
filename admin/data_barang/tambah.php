<?php
include_once('../../koneksi.php');
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../template/head.php') ?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      </ul>
    </nav>

    <!-- Sidebar -->
    <?php include_once('../template/sidebar.php') ?>

    <!-- Content Header -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Data Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../dashboard.php?page=data_barang">Home</a></li>
                <li class="breadcrumb-item active">Tambah Data Barang</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- Content Header -->

      <!-- MAIN CONTENT -->
      <section class="content">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Data Barang</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="proses_simpan.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang_post" class="form-control" placeholder="Masukan Nama Barang" required>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi_post" class="form-control" rows="3" required></textarea>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga_post" class="form-control" placeholder="Masukan Harga Barang" required>
              </div>

              <div class="form-group">
                <label for="">Kategori</label>

                <select class="form-control" name="kategori_post" required>

                  <option value="">Pilih Kategori</option>
                  <?php

                  while ($data = mysqli_fetch_array($kategori)) { ?>
                    <option value=" <?= $data['id'] ?> "><?= $data['kategori']; ?></option>
                  <?php } ?>

                </select>
              </div>

              <div class="form-group">
                <label>Pilih Gambar</label>
                <div class="input-group">
                  <div class="custom-file">

                    <input style="width: 100px; height: 100px; border: 1px solid #000;" type="file" name="gambar_post" class="custom-file-input">

                    <?php
                    $page_file_temp = $_SERVER["PHP_SELF"];
                    ?>

                    <!-- <img width="100" src="gambar/<?= $data['gambar']; ?>" width="100px"> -->
                    <label class="custom-file-label">Pilih File Gambar</label>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="../dashboard.php?page=data_barang" type="button" class="btn btn-default">Kembali</a>
            </div>
          </form>
        </div>
      </section>
      <!-- MAIN CONTENT -->
    </div>

    <?php include_once('../template/footer.php') ?>
  </div>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="../../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../assets/dist/js/adminlte.min.js"></script>
</body>

</html>