  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
          case 'data_barang':
            include "data_barang/content-header.php";
            break;
          case 'kategori':
            include "kategori/content-header.php";
            break;
          case 'about':
            include "about/content-header.php";
            break;
          case 'social':
            include "social/content-header.php";
            break;
          case 'home':
            include "home/content-header.php";
            break;
          case 'icons':
            include "icons/content-header.php";
            break;

          default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
      }

      ?>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->