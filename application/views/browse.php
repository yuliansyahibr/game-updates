<div class="container px-5">
    <div class="row">
        <div class="col-12 bg-white mb-2 content-container" >


          <div class="col-12 py-5 px-5">
              <h2 class="text-dark ml-4 mb-4">Browse Articles</h2>

              <?php foreach ($artikel as $item) { ?>
                <div class="row pl-3">
                    <div class="col cat-box mx-4">
                        <a href="<?= site_url('Games/artikel/'.$item->judul_artikel) ?>" class="cat-link">
                            <?= str_replace('_', ' ',$item->judul_artikel) ?>
                        </a>
                    </div>
                </div>
              <?php } ?>
          </div>

        </div>
    </div>
</div>
