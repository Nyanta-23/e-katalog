<?php
//load koneksi database
include_once('../../koneksi.php');

//ambil data dari form
$id = $_POST['id'];
$nama_barang_post = $_POST['nama_barang_post'];
// $deskripsi_post = $_POST['deskripsi_post'];
// $harga_post = $_POST['harga_post'];
//

//proses upload gambar
// $nama_file = $_FILES['gambar_post']['name'];
// $source = $_FILES['gambar_post']['tmp_name'];
// $folder = './gambar/';
// move_uploaded_file($source, $folder . $nama_file);
//
//update data ke database
$update = mysqli_query($koneksi, "UPDATE kategori SET
  kategori = '$nama_barang_post'
  WHERE id = '$id'");

//cek apakah proses edit ke database berhasil
if ($update) {
  //jika berhasil tampilkan pesan berhasil edit data
  echo "<script>
  alert('Data Berhasil Diubah');
  window.location.href='../dashboard.php?page=kategori';
  </script>";
} else {
  //jika gagal tampilkan pesan gagal edit data
  echo "<script>
  alert('Data Gagal Diubah');
  window.location.href='../dashboard.php?page=kategori';
  </script>";
}
 //
