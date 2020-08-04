<?php 

if(!isset($artikel)){
    $artikel = null;
    $game = null;
    $developer = null;
    $genres = null;
    $platforms=null;
}

function get($var, $index)
{
    if(isset($var->$index)) return $var->$index;
    else return null;
}

?>

<div class="container px-5">    
        <div class="row">
            <div class="col-12 bg-indigo rounded-lg shadow nav-panel" >
                <div class="py-3">
                    <div class="mx-auto mt-5 col-6">
                        <span class="text-white">Enter anything you want to <b>find</b> here</span>
                    </div>
                    <form action="<?= site_url('Wiki/search') ?>" method="get" class="form-inline mx-auto mt-1 mb-5">
                        <input name="search" class="form-control mx-auto py-4 col-6 shadow" type="text" placeholder="Search">
                    </form>
                    <div class="row align-items-center">
                        <ul class="list-inline list-justified mx-auto">
                            <li class="list-inline-item">
                                <a class="nav-link" href="<?php echo base_url('wiki/index'); ?>">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="list-inline-item dropdown">
                                <span class="nav-link">Categories</span>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo base_url('wiki/genres'); ?>">Genres</a>
                                    <a class="dropdown-item" href="<?php echo base_url('wiki/platforms'); ?>">Platforms</a>
                                    <a class="dropdown-item" href="<?php echo base_url('wiki/developers'); ?>">Developers</a>
                                </div>
                            </li>

                            <li class="list-inline-item">
                                <a class="nav-link" href="<?php echo base_url('wiki/search'); ?>">Game Finder <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="list-inline-item">
                                <a class="nav-link" href="<?php echo base_url('wiki/browse'); ?>">Browse Games <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="list-inline-item">
                                <a class="nav-link" href="<?php echo base_url('wiki/about'); ?>">About <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12 bg-white content-container">
            <div class="row p-3">
                <div class="col-lg-8 col-sm-12">
                    <div class="row">
                        <div class="col welcome-container">
                            <div class="col-12 welcome-box border border-dark my-2" style="background-image: url(<?= base_url('images/gameupdates/FFIII_Chocobo2.jpg') ?>);">
                                <div class="welcome-overlay"></div>
                                <div class="welcome-text">
                                    <h4 class="h4 font-weight-normal mb-2"> Welcome to the <a href=""><b><i>Game Updates</i></b></a></h4>
                                    <span class="mb-0">The <b><i> Video Games</i></b> encyclopedia that <b><i>anyone can edit!</i></b></span><br>
                                    <span class="mb-0"><b>Spoilers</b> are appropriately enclosed in spoiler tags</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col releases-container">
                            <div class="row h-100 px-3">
                                <div class="col releases-box shadow">
                                    <div class="col releases-header py-2 bg-indigo">
                                        <h4 class="mb-0 font-weight-normal">New Video Game Releases</h4>
                                    </div>
                                    <div class="releases-content row">

                                        <?php foreach ($new as $item) { ?>
                                        <div class="release mx-auto col">
                                            <img src="<?= base_url('images/articles-tn/'.$item->game_img)?>" alt="">
                                            <div class="release-detail">
                                                <a class="text-dark font-weight-bold" href="<?= site_url('Games/artikel/'.str_replace(array(' ', ':'), '_', $item->judul_game)) ?>">
                                                    <span id="title"><?= $item->judul_game ?></span>
                                                </a><br>
                                                <span id="release-date"><?= date("F d, Y", strtotime($item->release_date)) ?></span><br>
                                            </div>
                                        </div>
                                        <?php } ?>

                                        <!-- <div class="release mx-auto col">
                                            <img src="<?= base_url('images/articles-tn/deluxe.jfif')?>" alt="">
                                            <div class="release-detail">
                                                <span id="title">New Super Mario Bros U Deluxe</span><br>
                                                <span id="release-date">January 11, 2019</span><br>
                                                <span id="platform">Nintendo Switch</span>
                                            </div>
                                        </div>
                                        <div class="release mx-auto col">
                                            <img src="<?= base_url('images/articles-tn/sb.jfif')?>" alt="">
                                            <div class="release-detail">
                                                <span id="title">Super Smash Bros</span><br>
                                                <span id="release-date">December 7, 2018</span><br>
                                                <span id="platform">Nintendo Switch</span>
                                            </div>
                                        </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col releases-container">
                            <div class="row h-100 px-3">
                                <div class="col releases-box shadow">
                                    <div class="col releases-header py-2 bg-indigo">
                                        <h4 class="mb-0  font-weight-normal">Upcoming Video Game Releases</h4>
                                    </div>
                                    <div class="releases-content row">
                                        <div class="release mx-auto col">
                                            <img src="<?= base_url('images/articles-tn/'.get($upcoming, 'game_img'))?>" alt="">
                                            <div class="release-detail">
                                                <a class="text-dark font-weight-bold" href="<?= site_url('Games/artikel/'.str_replace(array(' ', ':'), '_', get($upcoming, 'judul_game'))) ?>">
                                                    <span id="title"><?= get($upcoming, 'judul_game') ?></span>
                                                </a><br>
                                                <span id="release-date"><?php if(get($upcoming, 'release_date')) echo date("F d, Y", strtotime($upcoming->release_date)) ?></span><br>
                                                <!-- <span id="platform">Playstation 4, Xbox One</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-12">
                    <!-- Latest Post -->
                    <div class="row">                              
                        <div class="col latest-container">
                            <div class="row px-3 h-100">
                                <div class="col latest-box my-2 shadow-sm">
                                    <div class="row px-3 h-100">
                                        <div class="col-5 latest-img border">
                                            <img src="<?= base_url('images/articles-tn/'.$latest['game']->game_img) ?>" alt="">
                                        </div>
                                        <div class="col latest-game">
                                            <small>Latest Post</small><br>
                                            <a class="text-dark" href="<?= site_url('Games/artikel/'.$latest['artikel']->judul_artikel) ?>"><span class="h5"><?= $latest['game']->judul_game ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Post -->
                    <div class="row">
                        <div class="col featured-container">
                            <div class="row px-3 h-100">
                                <div class="col featured-box border shadow-sm">
                                    <div class="row">
                                        <div class="col featured-header">
                                            Featured Articles
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col featured-article">
                                            <a href="<?= site_url('Games/artikel/Final_Fantasy_VII') ?>" class="mx-auto d-block"><img class="" src="<?= base_url('images/articles-tn/Final_Fantasy_VII.jpg') ?>" alt=""></a>                                                    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col featured-article">
                                            <a href="<?= site_url('Games/artikel/Metal_Gear_Solid_V') ?>" class="mx-auto d-block"><img src="<?= base_url('images/articles-tn/Metal_Gear_Solid_V.jpg') ?>" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col featured-article">
                                            <a href="<?= site_url('Games/artikel/Devil_May_Cry_5') ?>" class="mx-auto d-block"><img src="<?= base_url('images/articles-tn/Devil_May_Cry_5.jpg') ?>" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Feautured Platforms -->
                    <div class="row">
                        <div class="col featured-container">
                            <div class="row px-3 h-100">
                                <div class="col featured-box border shadow-sm">
                                    <div class="row">
                                        <div class="col featured-header">
                                            Featured Platform
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col featured-platform text-center">
                                            <img class="mx-auto d-block position-relative img-round" src="<?= base_url('images/platforms-tn/xbox.png') ?>" alt="">
                                            <a href="<?= site_url("Wiki/platforms/9") ?>"><span class="align-top">Xbox One</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col  featured-platform text-center">
                                            <img class="mx-auto d-block position-relative img-round" src="<?= base_url('images/platforms-tn/ps.png') ?>" alt="">
                                            <a href="<?= site_url("Wiki/platforms/5") ?>"><span class="align-top">Playstation 4</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col  featured-platform text-center">
                                            <img class="mx-auto d-block position-relative" src="<?= base_url('images/platforms-tn/windows.png') ?>" alt="">
                                            <a href="<?= site_url("Wiki/platforms/1") ?>"><span class="align-top">PC Windows</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
