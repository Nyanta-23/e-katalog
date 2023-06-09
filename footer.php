<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>
  <div class="col col_3">
    <h4>Social</h4>
    <ul class="nobullet social">
      <li><a href="#" class="facebook">Facebook</a></li>
      <li><a href="#" class="twitter">Twitter</a></li>
      <li><a href="#" class="youtube">Youtube</a></li>
      <li><a href="#" class="google">Google+</a></li>
      <li><a href="#" class="vimeo">Vimeo</a></li>
      <li><a href="#" class="skype">Skype</a></li>
    </ul>
  </div>

  <!-- Tiwtter -->
  <div class="col col_3">
    <h4>Twitter</h4>
    <ul class="nobullet twitter">
      <li><a href="#">@templatemo</a> at scelerisque urna in tellus varius ultricies.</li>
      <li>Suspendisse enean <a href="#">#FREE</a> tincidunt massa in tellus varius ultricies.</li>
      <li> Aenean tincidunt massa in tellus varius ultricies. <a href="#">http://bit.ly/13IwZO</a></li>
    </ul>
  </div>

  <!-- About -->
  <?php
  include "koneksi.php";
  $query = mysqli_query($koneksi, "SELECT * FROM tb_about");
  while ($data = mysqli_fetch_array($query)) { ?>
    <div class="col col_3">
      <h4><?= $data['judul']; ?></h4>
      <p><?= $data['isi']; ?></p>
    </div>

  <?php }  ?>


  <div class="clear"></div>
</div>