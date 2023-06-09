<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_sosmed = $_POST['nama_sosmed_post'];
$nama_icons = $_POST['nama_icon_post'];
$getSosialIcons = 'https://' . $nama_icons;
//
//
//simpan data ke database
$insert = mysqli_query(
  $koneksi,
  "INSERT INTO tb_social VALUES (
  NULL,
  '$nama_sosmed',
  '$getSosialIcons'
)"
);

//
//cek apakah proses simpan ke database berhasil
if ($insert) {
  //jika berhasil tampilkan pesan berhasil simpan data
  echo "<script>
  alert('Data Berhasil Ditambahkan');
  window.location.href='../dashboard.php?page=kategori';
  </script>";
} else {
  //jika gagal tampilkan pesan gagal simpan data
  echo "<script>
  alert('Data Gagal Ditambahkan');
    window.location.href='../dashboard.php?page=kategori';
    </script>";
}

//  //
