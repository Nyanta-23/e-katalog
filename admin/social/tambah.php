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

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Social</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../dashboard.php?page=social">Home</a></li>
                <li class="breadcrumb-item active">Tambah Social</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <!-- MAIN CONTENT -->
      <section class="content">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Social</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->

          <form action="proses_simpan.php" method="post" enctype="multipart/form-data">
            <div class="card-body">

              <div class="form-group">
                <label>Nama Sosmed</label>
                <input type="text" name="nama_sosmed_post" class="form-control" placeholder="Masukan Nama Sosmed" required>
              </div>

              <div class="form-group">
                <label>Icons</label>
                <textarea name="nama_icon_post" cols="30" class="form-control" required></textarea>
              </div>

              <div class="form-group">
                <label>URL</label>
                <textarea name="nama_icon_post" cols="30" class="form-control" required></textarea>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="../dashboard.php?page=kategori" type="button" class="btn btn-default">Kembali</a>
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