<div class="container px-5">
    <div class="row">
        <div class="col-12 bg-white mb-2 content-container" >


          <div class="col-12 py-5 px-5">
              <h2 class="text-dark ml-4 mb-4">Browse Game</h2>


              <?php if (!empty($games)) { ?>
                <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <div class="col-2">
                        <th scope="col">Developer</th>
                        <th scope="col">Judul</th>
                    </div>
                    </tr>
                </thead>
                <tbody>
                    <div class="col-10">

                    <?php foreach ($games as $key) { ?>
                    <tr>
                        <th class="py-5">
                        <center>
                            <b><?= $key->nama_developer; ?></b>
                        </center>
                        </th>
                        <th class="pl-4">
                        <div class="row">
                            <div class="col">
                            <div class="row pl-3">
                                <h5>
                                <a style="color:#3333ff" href="<?= site_url('Games/artikel/'.$key->judul_artikel) ?>"><?= $key->judul_game;  ?></a>
                                </h5>
                            </div>
                            <hr class="bg-info">
                            <div class="row pl-3">
                                <?= substr(strip_tags($key->konten_artikel), 0, 210) . " . . .<a href='". site_url('Games/artikel/'.$key->judul_artikel) ."' style='color:blue' >Read more</a>" ?>
                            </div>
                            <!-- <br> -->
                            <hr class="bg-info">
                            <div class="row pl-3">
                                <?= $key->judul_game;  ?>
                            </div>
                            </div>
                        </div>
                        </th>
                    </tr>
                    <?php } ?>
                </div>
                </tbody>
                </table>
                <?php }
                else {
                    echo "<h4>This page is empty..</h4>";
                }
                ?>


          </div>

        </div>
    </div>
</div>
