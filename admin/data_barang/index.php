<?php
include_once('../koneksi.php');

$no = 1;
// $query = mysqli_query($koneksi, "SELECT * FROM tb_barang");

$query = mysqli_query(
  $koneksi,
  "SELECT tb_barang.*, tb_kategori.nama_kategori
  FROM tb_barang
  INNER JOIN tb_kategori
  ON tb_barang.kategori = tb_kategori.id
  ORDER BY id DESC"
);

?>

<!-- MAIN CONTENT -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Data Barang</h3>
      <a href="data_barang/tambah.php?page=data_barang" class="btn btn-primary float-right">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th class="text-center">Gambar</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php

            while ($data = mysqli_fetch_array($query)) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_barang']; ?></td>
                <td><?= $data['deskripsi']; ?></td>
                <td><?= $data['harga']; ?></td>
                <td><?= $data['nama_kategori']; ?></td>
                <td class="text-center">
                  <img width="100" src="./../admin/data_barang/gambar/<?= $data['gambar']; ?>" width="100px">
                </td>
                <td class="text-center">
                  <a href="data_barang/edit.php?id=<?= $data['id']; ?>&page=data_barang" class="btn btn-warning text-light">Edit</a>
                  <a href="data_barang/proses_hapus.php?id=<?= $data['id']; ?>&page=data_barang" onclick="return confirm('Anda yakin ingin menghapusnya?')" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
          <?php
            endwhile;
          ?>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
    </div>
  </div>
</section>
<!-- MAIN CONTENT -->