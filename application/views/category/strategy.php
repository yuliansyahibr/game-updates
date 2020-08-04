<div class="py-5 px-5 vh-200 text-dark">
  <h2>Strategy</h2>
  <hr class="bg-dark">
  <div class="container">
    <div class="row">
      <?php foreach ($strategy as $key) { ?>
        <div class="col-12 pb-5">
          <div class="row">
          <h4>
           <a class="text-dark" href="#"><?= $key->judul_artikel;  ?></a>
          </h4>
          </div>
          <div class="row">
            <?= $key->judul_game;  ?> |
            <?= $key->nama_developer;  ?> |
            <?= $key->nama_platform;  ?>
            <!-- Genre ditampilin di detail artikel -->
            <!-- <?php foreach ($genres as $key2) { ?>
               <?= $key2->nama_genre; ?>
            <?php } ?> -->
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

</div>
</div>
