<?php
include_once('../../koneksi.php');

if (isset($_POST["update"])) {

  try {
    $id = $_POST["id"];
    $about = $_POST["about"];

    var_dump($about);

    $update = mysqli_query(
      $koneksi,
      "UPDATE tb_about
        SET
        about = '$about'
        WHERE id = '$id'"
    );
  } catch (mysqli_sql_exception $err) {
    var_dump($err);
    exit;
  }

  if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../dashboard.php?page=about';
    </script>";
  } else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../dashboard.php?page=about';
    </script>";
  }
}
