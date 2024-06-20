<?php
include_once('../../koneksi.php');

if (isset($_POST['submit'])) {
  $kategori = $_POST['kategori'];

  $query = "INSERT INTO tb_kategori(nama_kategori) VALUES ('$kategori')";

  $insert = mysqli_query($koneksi, $query);

  if ($insert) {
    echo "<script type='text/javascript'>
        alert('Data Berhasil Ditambahkan');
        window.location.href='../dashboard.php?page=kategori';
        </script>";
  } else {

    echo "<script type='text/javascript'>
        alert('Data Gagal Ditambahkan');
        window.location.href='../dashboard.php?page=kategori';
        </script>";
  }
} else {
  echo "<h1>POST GAGAL!<h1/>";
}
