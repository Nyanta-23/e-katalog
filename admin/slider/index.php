<?php
include('../koneksi.php');
$no = 1;
$query = mysqli_query(
    $koneksi,
    "SELECT * FROM tb_slider"
);
?>

<!-- MAIN CONTENT -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Data Sosial Media</h3>
            <a href="slider/tambah.php?page=slider" class="btn btn-primary float-right">Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama Slider</th>
                        <th>Gambar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $data['nama_slider']; ?>
                            </td>
                            <td class="text-center">
                                <img src="../admin/slider/gambar/<?= $data['gambar']; ?>" width="100" height="100">
                            </td>
                            <td class="text-center">
                                <a href="slider/edit.php?id=<?= $data['id']; ?>&page=slider" class="btn btn-warning btn-lg">Edit</a>
                                <a href="slider/proses_hapus.php?id=<?= $data['id']; ?>&page=slider" class="btn btn-danger btn-lg">Hapus</a>
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