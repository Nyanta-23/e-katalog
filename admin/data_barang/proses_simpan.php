<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_barang_post = $_POST['nama_barang_post'];
$deskripsi_post = $_POST['deskripsi_post'];
$harga_post = $_POST['harga_post'];
$kategori_post = $_POST['kategori_post'];
//

//proses upload gambar
$nama_file = $_FILES['gambar_post']['name'];
$source = $_FILES['gambar_post']['tmp_name'];
$folder = './gambar/';
move_uploaded_file($source, $folder . $nama_file);

//
//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO data_barang VALUES (
  NULL,
  '$nama_barang_post',
  '$deskripsi_post',
  '$harga_post',
  '$nama_file',
  '$kategori_post'
  )");
//
//cek apakah proses simpan ke database berhasil
if ($insert) {
  //jika berhasil tampilkan pesan berhasil simpan data
  echo "<script>
  alert('Data Berhasil Ditambahkan');
  window.location.href='../dashboard.php?page=data_barang';
  </script>";
} else {
  //jika gagal tampilkan pesan gagal simpan data
  echo "<script>
  alert('Data Gagal Ditambahkan');
  window.location.href='../dashboard.php?page=data_barang';
  </script>";
}
 //
