<?php
//load koneksi database
include_once('../../koneksi.php');

//ambil data dari form
$nama_icons = $_POST['nama_icons_post'];
$icons = $_POST['icons_post'];

//
//simpan data ke database
$insert = mysqli_query(
  $koneksi,
  "INSERT INTO tb_icons
  VALUES (
  NULL,
  '$nama_icons',
  LOWER('$icons')
  )"
);

//
//cek apakah proses simpan ke database berhasil
if ($insert) {
  //jika berhasil tampilkan pesan berhasil simpan data
  echo "<script>
  alert('Data Berhasil Ditambahkan');
  window.location.href='../dashboard.php?page=icons';
  </script>";
} else {
  //jika gagal tampilkan pesan gagal simpan data
  echo "<script>
  alert('Data Gagal Ditambahkan');
    window.location.href='../dashboard.php?page=icons';
    </script>";
}

//  //
