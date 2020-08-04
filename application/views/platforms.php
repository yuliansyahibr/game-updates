<div class="container px-5">
    <div class="row">
        <div class="col-12 bg-white mb-2 content-container" >


          <div class="col-12 py-5 px-5">
              <h2 class="text-dark ml-4 mb-4">Browse Games by Platforms</h2>

              <?php foreach ($platforms as $item) { ?>
                <div class="row pl-3">
                  <div class="col cat-box mx-4">
                      <a href="<?= site_url('Wiki/Platforms/'.$item->id_platform) ?>" class="cat-link">
                        <?= $item->nama_platform ?>
                      </a>
                  </div>
                </div>
              <?php } ?>            

          </div>

        </div>
    </div>
</div>
