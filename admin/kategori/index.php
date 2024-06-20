<?php
include_once('../koneksi.php');
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");

?>
<!-- MAIN CONTENT -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Data Kategori</h3>
      <a href="kategori/tambah.php?page=kategori" class="btn btn-primary float-right">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Kategori</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php
            while ($data = mysqli_fetch_array($query)) :
          ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nama_kategori']; ?></td>
                <td class="text-center">
                  <a href="kategori/edit.php?id=<?= $data['id']; ?>&page=kategori" class="btn btn-warning text-light">Edit</a>
                  <a onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" href="kategori/proses_hapus.php?id=<?= $data['id']; ?>&kategori" class="btn btn-danger">Hapus</a>
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