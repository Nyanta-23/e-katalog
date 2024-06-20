<?php
include '../../koneksi.php';

if (isset($_POST['submit'])) {
  $icon = $_POST['icon'];


  $query = "INSERT INTO tb_icons(icon) VALUES ('$icon')";

  $insert = mysqli_query($koneksi, $query);

  if ($insert) {
    echo "<script type='text/javascript'>
        alert('Data Berhasil Ditambahkan');
        window.location.href='../dashboard.php?page=icons';
        </script>";
  } else {

    echo "<script type='text/javascript'>
        alert('Data Gagal Ditambahkan');
        window.location.href='../dashboard.php?page=icons';
        </script>";
  }
}
