<?php
//load koneksi database
include '../../koneksi.php';

//ambil data dari form
$nama_slider_post = $_POST['nama_slider_post'];
//

//proses upload gambar
$source = $_FILES['gambar_slider_post']['tmp_name'];
$folder = './gambar/';

$nama_file = $_FILES['gambar_slider_post']['name'];
move_uploaded_file($source, $folder . $nama_file);
//
//simpan data ke database
$insert = mysqli_query($koneksi, "INSERT INTO tb_slider VALUES (
    NULL,
    '$nama_slider_post',
    '$nama_file'
)");

//

//cek apakah proses simpan ke database berhasil
if ($insert) {
    //jika berhasil tampilkan pesan berhasil simpan data
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    window.location.href='../dashboard.php?page=slider';
    </script>";
} else {
    //jika gagal tampilkan pesan gagal simpan data
    echo "<script>
    alert('Data Gagal Ditambahkan');
    window.location.href='../dashboard.php?page=slider';
    </script>";
}
//
