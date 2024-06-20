<?php
include_once('../koneksi.php');

$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tb_about");

$about = mysqli_fetch_assoc($query);

?>

<!-- MAIN CONTENT -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel Data About</h3>
      <a href="./about/edit.php?id=<?= $about["id"]?>&page=about" class="btn btn-primary float-right">Edit About</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>About</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?= $about["about"]; ?></td>
          </tr>
        </tbody>

      </table>

    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
    </div>
  </div>
</section>
<!-- MAIN CONTENT -->