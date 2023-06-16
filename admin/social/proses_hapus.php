<?php
//load koneksi database
include '../../koneksi.php';
//ambil id dari url
$id = $_GET['id'];
// //hapus file gambar dari folder gambar
// $query = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id
// = '$id'");
// $data = mysqli_fetch_array($query);
// $nama_file = $data['gambar'];
// unlink('./gambar/' . $nama_file);
//
//hapus data dari database
$hapus = mysqli_query($koneksi, "DELETE FROM tb_social WHERE id = '$id'");

//cek apakah proses hapus data berhasil
if ($hapus) {
  //jika berhasil tampilkan pesan berhasil hapus data
  echo "<script>
  alert('Data Berhasil Dihapus');
  window.location.href='../dashboard.php?page=social';
  </script>";
} else {
  //jika gagal tampilkan pesan gagal hapus data
  echo "<script>
  alert('Data Gagal Dihapus');
  window.location.href='../dashboard.php?page=social';
  </script>";
}
