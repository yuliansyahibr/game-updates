
<div class="container px-5">
    <div class="row">
        <div class="col-12 bg-white content-container px-5">
            <div class="row">
                <div class="col py-3">
                    <div class="game-title">
                        <h2><?= $game->judul_game ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 px-2 py-1">
                    <div class="col pb-4 py-1 ">
                        <div class="game-img text-center">
                            <img src="<?= base_url('images/articles-tn/'.$game->game_img) ?>" alt="">
                        </div>
                    </div>
                    <div class="col py-3 game-info">
                        <div class="info-title">
                            <h6>Developer</h6>
                            <hr>
                        </div>
                        <a href="<?= site_url('Wiki/developers/'.$developer->id_developer) ?>" class=""><?= $developer->nama_developer ?></a>
                    </div>

                    <div class="col py-3 game-info">
                        <div class="info-title">
                            <h6>Genres</h6>
                            <hr>
                        </div>
                        <?php foreach($genres as $item) {?>
                            <a href="<?= site_url('Wiki/genres/'.$item->nama_genre) ?>" class=""><?= $item->nama_genre ?></a>
                        <?php } ?>
                    </div>

                    <div class="col py-3 game-info">
                        <div class="info-title">
                            <h6>Release Date</h6>
                            <hr>
                        </div>
                        <span><?= $game->release_date ?></span>
                    </div>

                    <div class="col py-3 game-info">
                        <div class="info-title">
                            <h6>Platforms</h6>
                            <hr>
                        </div>
                        <?php foreach($platforms as $item) {?>
                            <a href="<?= site_url('Wiki/platforms/'.$item->id_platform) ?>" class=""><?= $item->nama_platform ?></a>
                        <?php } ?>
                    </div>
                </div>

                <div class="col py-1">
                    <div class="col pb-5 section">
                        <div class="section-text pl-3">
                            <?= $artikel->konten_artikel ?>
                        </div>
                    </div>
                </div>

                <!-- <div class="col py-1">
                    <?php foreach($konten as $item) {?>
                        <div class="col pb-5 section">
                            <div class="section-title">
                                <h5><?= nl2br($item->judul_konten) ?></h5>
                                <hr>
                            </div>
                            <div class="section-text">
                                <?= nl2br($item->isi_konten) ?>
                            </div>
                        </div>
                    <?php } ?>
                   
                </div> -->
            </div>
        </div>
    </div>
    <div class="row bg-white">
        <div class="w-100">
            <hr>
        </div>
        <div class="col px-5 artikel-info">
            <div class="row">
                <div class="col-3">
                    <span class="h6 mb-0"> 
                        <i class="far fa-clock mr-2"> </i> 
                        <?= $artikel->time_created ?>
                    </span>
                </div>
                <div class="col-3">
                    <span class="h6"> 
                        <i class="fa fa-user mr-2"> </i>
                        <?= $author ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="w-100">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col bg-white pt-5">
            <div class="row">
                <div class="col px-5 comments py-5">                    
                    <div class="row mb-4">
                        <div class="col">
                            <h4><?= $jumlah_komentar ?> Comments</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border-bottom pb-3 mb-5">
                            <form action="<?= site_url("Games/komentar") ?>" method="post">
                            <div class="row mb-2">
                                <!-- <div class="col-2">
                                    <div class="comment-img mx-auto text-center">
                                        <img src="<?= base_url('images/profile_pics/user2.jpg') ?>" alt="">
                                    </div>
                                </div> -->
                                <div class="col">
                                    <textarea class="form-control" name="komentar" id="" cols="30" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <input type="text" name="judul_artikel" value="<?= $artikel->judul_artikel?>" hidden="hidden">
                                    <input type="text" name="id_artikel" value="<?= $artikel->id_artikel?>" hidden="hidden">
                                    <input type="text" name="id_user" value="<?= $this->session->userdata('id_user') ?>" hidden="hidden">
                                    <button type="submit" class="btn btn-secondary">Post Comment</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <?php foreach ($komentar as $item) { ?>
                        <div class="row py-2 comment-wrapper">
                            <div class="col py-3 comment-box border-bottom">
                                <div class="row">
                                    <div class="col-2">
                                        <div class="comment-img mx-auto text-center">
                                            <img src="<?= base_url('images/profile_pics/'.$item->user->profile_pic) ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col comment-detail">
                                        <h5 class="mb-0"><?= $item->user->nama ?></h5>
                                        <small> <?= $item->time_komentar ?></small>
                                    </div>
                                </div>
                                <div class="row row-comment">
                                    <div class="col offset-2 py-3 comment">
                                        <?= $item->komentar ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row py-5">
                        <div class="col py-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>