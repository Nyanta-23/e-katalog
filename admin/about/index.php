<?php
include_once('../koneksi.php');

$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tb_about");

?>

<!-- MAIN CONTENT -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Data About</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px;">No</th>
            <th style="width: 220px;">Nama About</th>
            <th>About</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>

          <?php
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['judul']; ?></td>
              <td><?= $data['isi']; ?></td>
              <td class="text-center">
                <a href="about/edit.php?id=<?= $data['id']; ?>&page=about" class="btn btn-warning">Edit</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
    </div>
  </div>
</section>
<!-- MAIN CONTENT -->