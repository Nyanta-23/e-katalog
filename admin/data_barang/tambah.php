<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Data Barang</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,40
0i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesomefree/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.cs
s">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../assets/plugins/tempusdominusbootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../assets/plugins/icheckbootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.c
ss">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php include '../lazyLoad.php' ?>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      </ul>
    </nav>

    <?php include '../sidebarDataBarang.php' ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Data Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Tambah Data Barang</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
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
                  <?php include '../../koneksi.php';

                  $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                  while ($data = mysqli_fetch_array($kategori)) { ?>
                    <option value=" <?= $data['id'] ?> "><?= $data['kategori']; ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Pilih Gambar</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="gambar_post" class="custom-file-input">
                    <label class="custom-filelabel">Pilih File Gambar</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btnprimary">Simpan</button>
              <a href="index.php" type="button" class="btn
btn-default">kembali</a>
            </div>
          </form>
        </div>
      </section>
      <!-- MAIN CONTENT -->
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <!-- jQuery -->
  <script src="../../assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../assets/plugins/jquery-ui/jqueryui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --
>
 <script>
 $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
  <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../assets/plugins/jqueryknob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../assets/plugins/moment/moment.min.js"></script>
  <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../assets/plugins/tempusdominus-bootstrap4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../assets/plugins/summernote/summernotebs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.
min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../assets/dist/js/adminlte.js"></script>
</body>

</html>