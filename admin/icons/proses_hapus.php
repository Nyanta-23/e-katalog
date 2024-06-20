<?php
include '../../koneksi.php';

$id = $_GET['id'];

$delete = mysqli_query($koneksi, "DELETE FROM tb_icons WHERE id ='$id'");

if ($id) {

  if ($delete) {
    echo "<script>
  alert('Data Berhasil Dihapus');
  window.location.href='../dashboard.php?page=icons';
  </script>";
  } else {

    echo "<script>
  alert('Data Gagal Dihapus');
  window.location.href='../dashboard.php?page=icons';
  </script>";
  }
}
