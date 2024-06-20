<?php

include '../../koneksi.php';

if (isset($_POST['submit'])) {
  $nama_sosmed = $_POST['name_sosmed'];
  $nama_icons = $_POST['icons'];
  $url = $_POST['url'];



  $query = "INSERT INTO tb_social(name_social, icon, url) VALUES ('$nama_sosmed', '$nama_icons', '$url')";

  $insert = mysqli_query($koneksi, $query);

  if ($insert) {
    echo "<script type='text/javascript'>
        alert('Data Berhasil Ditambahkan');
        window.location.href='../dashboard.php?page=social';
        </script>";
  } else {

    echo "<script type='text/javascript'>
        alert('Data Gagal Ditambahkan');
        window.location.href='../dashboard.php?page=social';
        </script>";
  }
}
