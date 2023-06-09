<?php
// load koneksi database
include_once('../../koneksi.php');
try {
  // ambil data dari form
  $id = $_POST['id'];
  $judul_post = $_POST['judul_about_post'];
  $isi_post = $_POST['isi_about_post'];

  // simpan ke database
  $update = mysqli_query(
    $koneksi,
    "UPDATE tb_about 
    SET
    judul = '$judul_post',
    isi = '$isi_post'
    WHERE id = '$id'"
  );
} catch (mysqli_sql_exception $err) {
  var_dump($err);
  exit;
}

// cek apakah proses simpan ke database berhasil

if ($update) {
  // jika berhasil tampilkan pesan berhasil simpan data
  echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href = '../dashboard.php?page=about';
  </script>";
} else {
  echo "<script>
    alert('Data Gagal Diubah');
    window.location.href = '../dashboard.php?page=about';
  </script>";
};
