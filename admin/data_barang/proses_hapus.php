<?php
include '../../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id = '$id'");
$data = mysqli_fetch_array($query);
$nama_file = $data['gambar'];
unlink('./gambar/' . $nama_file);

$hapus = mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id ='$id'");

if ($id) {

  if ($hapus) {
    echo "<script>
  alert('Data Berhasil Dihapus');
  window.location.href='../dashboard.php?page=data_barang';
  </script>";
  } else {

    echo "<script>
  alert('Data Gagal Dihapus');
  window.location.href='../dashboard.php?page=data_barang';
  </script>";
  }
}
