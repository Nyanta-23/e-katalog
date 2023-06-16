<?php
include_once('koneksi.php');
$queryAbout = mysqli_query($koneksi, "SELECT * FROM tb_about");
$queryTwitter = mysqli_query($koneksi, "SELECT * FROM tb_twitter");

$querySocial = mysqli_query(
  $koneksi,
  "SELECT tb_social.*, tb_icons.icons
  FROM tb_social
  INNER JOIN tb_icons
  ON tb_social.id_icons = tb_icons.id
  ORDER BY id DESC"
);

?>

<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>
  <div class="col col_3">
    <h4>Social</h4>


    <ul class="nobullet social">
      <?php while ($dataSocial = mysqli_fetch_array($querySocial)) { ?>
        <li>
          <a href="<?= $dataSocial['url'] ?>" class="<?= $dataSocial['icons']; ?>">
            <?= $dataSocial['nama_sosmed']; ?>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>

  <!-- <li><a href="#" class="facebook">Facebook</a></li>
  <li><a href="#" class="twitter">Twitter</a></li>
  <li><a href="#" class="youtube">Youtube</a></li>
  <li><a href="#" class="google">Google+</a></li>
  <li><a href="#" class="vimeo">Vimeo</a></li>
  <li><a href="#" class="skype">Skype</a></li> -->

  <!-- Tiwtter -->
  <?php while ($dataTwitter = mysqli_fetch_array($queryTwitter)) { ?>
    <div class="col col_3">
      <h4><?= $dataTwitter['judul']; ?></h4>
      <ul class="nobullet twitter">
        <?= $dataTwitter['isi']; ?>
      </ul>
    </div>
  <?php } ?>

  <!-- <div class="col col_3">
      <h4>Twitter</h4>
      <ul class="nobullet twitter">
        <li><a href="#">@templatemo</a> at scelerisque urna in tellus varius ultricies.</li>
        <li>Suspendisse enean <a href="#">#FREE</a> tincidunt massa in tellus varius ultricies.</li>
        <li> Aenean tincidunt massa in tellus varius ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
      </ul>
    </div> -->

  <!-- About -->
  <?php while ($dataAbout = mysqli_fetch_array($queryAbout)) { ?>
    <div class="col col_3">
      <h4><?= $dataAbout['judul']; ?></h4>
      <p><?= $dataAbout['isi']; ?></p>
    </div>

  <?php }  ?>


  <div class="clear"></div>
</div>