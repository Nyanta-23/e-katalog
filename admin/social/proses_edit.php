<?php

include '../../koneksi.php';
if (isset($_POST["update"])) {

  $id = $_POST['id'];
  $nama_social_post = $_POST['nama_social_post'];
  $icons = $_POST['icons_post'];
  $url = $_POST['nama_url_post'];

  $update = mysqli_query(
    $koneksi,
    "UPDATE tb_social 
    SET 
    name_social = '$nama_social_post',
    icon = '$icons',
    url = '$url'
    WHERE id = '$id'"
  );

  if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../dashboard.php?page=social';
    </script>";
  } else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../dashboard.php?page=social';
    </script>";
  }
}
