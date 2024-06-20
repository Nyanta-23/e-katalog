<?php

include '../../koneksi.php';

if (isset($_POST["update"])) {

  $id = $_POST["id"];

  $icon = $_POST["icon"];

  $update = mysqli_query(
    $koneksi,
    "UPDATE tb_icons
      SET
      icon = '$icon'
      WHERE id = '$id'"
  );

  if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../dashboard.php?page=icons';
    </script>";
  } else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../dashboard.php?page=icons';
    </script>";
  }
}
