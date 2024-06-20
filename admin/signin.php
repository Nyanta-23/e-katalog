<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_SESSION['username'])) {
  header("Location: ../admin/dashboard.php?page=home");
}
if (isset($_POST['submit'])) {
  include("../koneksi.php");

  $username = @$_POST['username'];
  $password = md5(@$_POST['password']);

  $sql = "SELECT * FROM tb_users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];

    header("Location: ../admin/dashboard.php?page=home");
  } else {
    echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin Panel</title>

  <?php include("./template/linkCss.php") ?>

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="./signin.php" class="h1"><b>Admin</b> Panel</a>
      </div>
      <div class="card-body">
        <h4 class="login-box-msg">Login</h4>

        <form action="signin.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name='password' class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center mt-2 mb-3"></div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>