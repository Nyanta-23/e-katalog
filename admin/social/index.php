<?php
include_once('../koneksi.php');
$no = 1;

$query = mysqli_query(
  $koneksi,
  "SELECT tb_social.*, tb_icons.icon 
  FROM tb_social 
  INNER JOIN tb_icons ON tb_social.icon = tb_icons.id 
  ORDER BY id DESC"
);

?>

<!-- MAIN CONTENT -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Data Social</h3>
      <a href="social/tambah.php?page=social" class="btn btn-primary float-right">Tambah Data</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Sosmed</th>
            <th>Icon</th>
            <th>URL</th>
            <th class="text-center">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['name_social']; ?></td>
              <td class="text-center">
                <i style="border: 1px solid #000; border-radius: 5px;" class="text-xl p-3 fas far fa fa-<?= $data['icon']; ?>"></i>
              </td>

              <td><?= $data['url']; ?></td>
              <td class="text-center">
                <a href="social/edit.php?id=<?= $data['id']; ?>&page=social" class="btn btn-warning text-light">Edit</a>
                <a onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" href="social/proses_hapus.php?id=<?= $data['id']; ?>&page=social" class="btn btn-danger">Hapus</a>
              </td>
            </tr>

          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <p>For reference icon see from this <a href="https://adminlte.io/themes/AdminLTE/pages/UI/icons.html">Link</a></p>
    </div>
  </div>
</section>
<!-- MAIN CONTENT -->
