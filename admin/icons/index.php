<?php
include_once('../koneksi.php');
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tb_icons");
?>

<!-- MAIN CONTENT -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Data Icons</h3>
      <a href="icons/tambah.php?page=icons" class="btn btn-primary float-right">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Icons</th>
            <th>Class Icons</th>
            <th class="text-center">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php

          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['nama_icons']; ?></td>
              <td class="text-center">
                <i style="border: 1px solid #000; border-radius: 5px;" class="text-xl p-3 fas far fa fa-<?= $data['icons']; ?>"></i>
              </td>
              <td class="text-center">
                <a href="icons/edit.php?id=<?= $data['id']; ?>&page=icons" class="btn btn-warning text-light">Edit</a>
                <a href="icons/proses_hapus.php?id=<?= $data['id']; ?>&page=icons" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php }

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


<!-- Key -->

<!--                   
  <div class="col-md-3 col-sm-4">
    <i class="fas fa fa-facebook"></i>
    <i class="fas fa fa-chrome"></i>
  </div> 
-->