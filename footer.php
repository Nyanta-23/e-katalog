<?php
include_once('koneksi.php');
$queryAbout = mysqli_query($koneksi, "SELECT * FROM tb_about");

$social = mysqli_query(
  $koneksi,
  "SELECT tb_social.*, tb_icons.icon
  FROM tb_social
  INNER JOIN tb_icons
  ON tb_social.icon = tb_icons.id
  ORDER BY id DESC"
);

?>

<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>
  <div class="col col_3">
    <h4>Social</h4>

    <ul class="nobullet social">
      <?php while ($dataSocial = mysqli_fetch_assoc($social)) : ?>
        <li>
          <a href="<?= $dataSocial['url'] ?>">
            <i style="font-size: 1em; color: black;" class="p-3 fas fa-<?= $dataSocial['icon']; ?>"></i>
            <?= $dataSocial['name_social']; ?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>

  <!-- About -->
  <?php while ($dataAbout = mysqli_fetch_assoc($queryAbout)) : ?>
    <div class="col col_3">
      <h4>Tentang</h4>
      <p><?= $dataAbout['about']; ?></p>
    </div>

  <?php endwhile; ?>


  <div class="clear"></div>
</div>