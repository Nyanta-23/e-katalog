 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
          case 'data_barang':
            include "data_barang/index.php";
            break;
          case 'kategori':
            include "kategori/index.php";
            break;
          case 'about':
            include "about/index.php";
            break;
          case 'social':
            include "social/index.php";
            break;
          case 'home':
            include "home/index.php";
            break;
          case 'icons':
            include "icons/index.php";
            break;

          default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
      } else {
        include "./../index.php";
      }

      ?>
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->