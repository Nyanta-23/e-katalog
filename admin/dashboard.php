<?php


include("./session.php");
checkSession();

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Head -->
  <?php include_once('template/head.php') ?>

  <!-- Link Css -->
  <?php include('template/linkCss.php') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include_once('template/navbar.php') ?>

    <!-- Main Sidebar Container -->
    <?php include_once('template/sidebar.php') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <?php include_once('template/combine-content-header.php') ?>
      <!-- /.content-header -->
      <!-- Main content -->
      <?php include_once('template/combine-main-content.php') ?>
      <!-- /.content -->
    </div>

    <!-- Footer -->
    <?php include_once('template/footer.php') ?>
  </div>

  <!-- Link Script -->
  <?php include_once('template/linkScript.php') ?>
</body>

</html>