<?php
include_once "koneksi.php";

$product = mysqli_query($koneksi, "SELECT * FROM tb_barang");
$social = mysqli_query($koneksi, "SELECT * FROM tb_social");
$slider = mysqli_query($koneksi, "SELECT * FROM tb_barang");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>E-Katalog</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="assets_front/templatemo_style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="assets_front/css/orman.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets_front/css/nivo-slider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets_front/css/slimbox2.css" type="text/css" media="screen" />

  <script type="text/javascript" src="assets_front/js/jquery.min.js"></script>
  <script type="text/javaScript" src="assets_front/js/slimbox2.js"></script>
</head>

<body>
  <div id="templatemo_wrapper">

    <div id="templatemo_header">
      <div class="templatemo_header_box left">
        <div id="site_title"><a href="http://www.templatemo.com/preview/templatemo_380_eco_tree" rel="nofollow">Ekatalog</a></div>
      </div>
      <!-- END of headar box -->

      <div id="templatemo_slider"><span class="sliderframe"></span>
        <div class="slider-wrapper theme-orman">

          <div id="slider" class="nivoSlider">
            <?php

            while ($data = mysqli_fetch_array($slider)) :
            ?>
              <img src="./admin/data_barang/gambar/<?= $data['gambar'] ?>" alt="Image 6" style="display:flex">

            <?php
            endwhile;
            ?>

            <div class="nivo-directionNav">
              <a class="nivo-prevNav">Prev</a>
              <a class="nivo-nextNav">Next</a>
            </div>
          </div>

        </div>
        <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
          $(window).load(function() {
            $('#slider').nivoSlider({
              controlNav: true,
              directionNavHide: true
            });
          });
        </script>

      </div>
      <!-- END of templatemo_slider -->

      <div class="templatemo_header_box right">
        <ul id="templatemo_menu">
          <li><a href="index.php" class="selected home">Beranda</a></li>
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");

          while ($data = mysqli_fetch_array($query)) {
          ?>

            <li>
              <a href="index.php?id= <?= $data['id']; ?>" class="selected home">
                <?= $data['nama_kategori']; ?>
              </a>
            </li>

          <?php } ?>

        </ul>
      </div>
      <!-- END of headar box -->
      <div class="clear"></div>
    </div>
    <!-- END of header -->
    <div id="templatemo_main" class="mb-5">

      <h1 class="mt-5">Product</h1>


      <?php
      $query = mysqli_query($koneksi, "SELECT * FROM tb_barang");

      if ($product->num_rows != 0) :
        while ($data = mysqli_fetch_array($query)) :
      ?>
          <div class="col col_3">
            <h2><?= $data['nama_barang'] ?></h2>
            <img width="200" src="admin/data_barang/gambar/<?= $data['gambar'] ?>" alt="image 1" class="img_nom img_border img_border_b" />
            <p><em><?= $data['deskripsi'] ?></em>
            </p>
            <ul class="list_bullet">
              <li>Rp. <?= number_format($data['harga']) ?></li>
            </ul>
            <a href="#" class="more">Beli</a>
          </div>
      <?php
        endwhile;
      else :
        echo "Test";

      endif;
      ?>
      <div class="clear"></div>
    </div>
    <!-- END of main -->
    <?php
    include 'footer.php';
    ?>

    <div id="templatemo_footer">
      Copyright © 2023 E-Katalog
    </div> <!-- END of footer -->
  </div> <!-- END of wrapper -->
</body>

</html>