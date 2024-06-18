<?php
//load koneksi database
include '../../koneksi.php';

if (isset($_POST['submit'])) {
  $nama_barang_post = $_POST['nama_barang_post'];
  $deskripsi_post = $_POST['deskripsi_post'];
  $harga_post = $_POST['harga_post'];
  $kategori_post = $_POST['kategori_post'];
  
  $gambar_post = $_FILES["gambar_post"];
  var_dump($gambar_post["tmp_name"]);

  if (is_uploaded_file($gambar_post['tmp_name'])) {

    $gambar = filterImage($gambar_post);

    if ($gambar) {
      $query = "INSERT INTO 
      tb_barang
      (nama_barang, gambar, deskripsi, harga, kategori) 
      VALUES
      ('$nama_barang_post', '$gambar', '$deskripsi_post', '$harga_post', '$kategori_post')";

      $insert = mysqli_query($koneksi, $query);

      if ($insert) {

        saveImageToFolder($gambar_post["tmp_name"], $gambar);

        echo "<script type='text/javascript'>
        alert('Data Berhasil Ditambahkan');
        window.location.href='../dashboard.php?page=data_barang';
        </script>";
      } else {
        echo "<script type='text/javascript'>
        alert('Data Gagal Ditambahkan');
        window.location.href='../dashboard.php?page=data_barang';
        </script>";
      }
    } else {
      echo '<script type="text/javascript">alert("Foto gagal diupload");window.history.go(-1);</script>';
      return false;
    }
  }
} else {
  echo "<script>alert('terjadi kesalahan')</script>";
  return false;
}


function filterImage($data)
{
  $gambar = $data;
  $ext = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
  $tipe = $gambar['type'];
  $size = $gambar['size'];

  if (!in_array(($tipe), $ext)) {

    echo '<script type="text/javascript">
        alert("Format gambar tidak diperbolehkan!");
        window.history.go(-1);
        </script>';

    return false;
  } else if ($size > 2097152) {

    echo '<script type="text/javascript">alert("Ukuran gambar terlalu besar!");window.history.go(-1);</script>';
    return false;
  } else {

    $extractFile = pathinfo($gambar['name']);
    $namaGambarBaru = uniqid() . "." . $extractFile["extension"];

    return $namaGambarBaru;
  }
}

function saveImageToFolder($tmp_name, $nameAndExtension)
{
  $dir = "./gambar/";

  return move_uploaded_file($tmp_name, $dir . $nameAndExtension);
}
