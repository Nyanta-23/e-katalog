<?php
//load koneksi database
include '../../koneksi.php';


if (isset($_POST["update"])) {

  $id = $_POST["id"];

  $nama_barang_post = $_POST["nama_barang_post"];
  $deskripsi_post = $_POST["deskripsi_post"];
  $harga_post = $_POST["harga_post"];
  $kategori_post = $_POST["kategori_post"];

  $gambar_post = $_FILES["gambar_post"];

  if ($gambar_post["error"] == 4) {

    $update = mysqli_query(
      $koneksi,
      "UPDATE tb_barang 
      SET
      nama_barang = '$nama_barang_post',
      deskripsi = '$deskripsi_post',
      harga = '$harga_post',
      kategori = '$kategori_post'
      WHERE id = '$id'"
    );

    if ($update) {
      echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../dashboard.php?page=data_barang';
    </script>";
    } else {
      echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../dashboard.php?page=data_barang';
    </script>";
    }
  } else {
    $query = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id = '$id'");

    if ($data = mysqli_fetch_array($query)) {
      $dataGambar = $data["gambar"];

      if (file_exists("./gambar/$dataGambar")) {
        unlink("./gambar/$dataGambar");
      }
    }

    if (is_uploaded_file($gambar_post["tmp_name"])) {
      $gambar = filterImage($gambar_post);

      if ($gambar) {
        $update = mysqli_query(
          $koneksi,
          "UPDATE tb_barang 
          SET
          nama_barang = '$nama_barang_post',
          deskripsi = '$deskripsi_post',
          harga = '$harga_post',
          kategori = '$kategori_post',
          gambar = '$gambar'
          WHERE id = '$id'"
        );

        if ($update) {

          saveImageToFolder($gambar_post["tmp_name"], $gambar);

          echo "<script>
        alert('Data Berhasil Diubah');
        window.location.href='../dashboard.php?page=data_barang';
        </script>";
        } else {
          echo "<script>
        alert('Data Gagal Diubah');
        window.location.href='../dashboard.php?page=data_barang';
        </script>";
        }
      }
    }
  }
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
