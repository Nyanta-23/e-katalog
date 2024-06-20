<?php
include_once('../../koneksi.php');

if (isset($_POST["update"])) {

  $id = $_POST['id'];
  $kategori = $_POST['kategori'];

  $update = mysqli_query(
    $koneksi,
    "UPDATE tb_kategori SET
    nama_kategori = '$kategori'
    WHERE id = '$id'"
  );

  if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../dashboard.php?page=kategori';
    </script>";
  } else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../dashboard.php?page=kategori';
    </script>";
  }
}
