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
  <script type="text/javascript" src="assets_front/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets_front/css/slimbox2.css" type="text/css" media="screen" />
  <script type="text/JavaScript" src="assets_front/js/slimbox2.js"></script>
</head>

<body>
  <div id="templatemo_wrapper">
    <div id="templatemo_header">
      <img width="950" src="assets_front/images/slider/01.jpg" alt="Slider" />
      <div class="clear"></div>
    </div> <!-- END of header -->
    <div id="templatemo_main"><span class="mf mft"></span><span class="mf mfb"></span>
      <?php
      include "koneksi.php";
      $query = mysqli_query($koneksi, "SELECT * FROM
data_barang");
      while ($data = mysqli_fetch_array($query)) {

      ?>
        <div class="col col_3">
          <h2><?= $data['nama_barang'] ?></h2>
          <img width="200" src="admin/data_barang/gambar/<?=
                                                          $data['gambar'] ?>" alt="image 1" class="img_nom img_border img_border_b" />
          <p><em><?= $data['deskripsi'] ?></em>
          </p>
          <ul class="list_bullet">
            <li>Rp. <?= number_format($data['harga']) ?></li>
          </ul>
          <a href="#" class="more">Beli</a>
        </div>
      <?php } ?>
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