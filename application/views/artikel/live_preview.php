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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=  $title ?></title>
    <link rel="stylesheet" href= '<?= base_url("assets/css/bootstrap.css") ?>' >
    <link rel="stylesheet" href= '<?=  base_url("assets/css/custom.css") ?>' >
    <link rel="stylesheet" href= '<?=  base_url("assets/css/stickyfooter.css") ?>' >
    <link rel="stylesheet" href='<?= base_url("assets/fontawesome/css/all.css") ?>'>

    <script src="<?=  base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
</head>
<body class="bg-img bg-fixed" style="background-image: url(<?= base_url('images/gameupdates/dmc5-resized.jpg') ?>);">

        <div class="row">
            <div class="col bg-dark py-3 position-fixed" style="z-index:99; left:0; top:0;">
                <a id="goback" onclick="window.history.go(-1); return false;" class="btn btn-sm btn-light"><i class="fa fa-arrow-left mr-1"></i> Go Back</a>
            </div>
        </div>


  <div id="main" class="pb-2" style="margin-top:36px;">      
      <nav class="navbar navbar-expand-lg navbar-dark bg-nav mb-3">
        <a class="navbar-brand font-weight-bold" href="<?php echo base_url('wiki/index'); ?>"><img src="<?= base_url('images/gameupdates/logo.png') ?>" alt="" height="40"> GameUpdates</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">

          <form class="form-inline my-lg-0 ml-auto mr-5">
            <input class=" bg-search form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-sm-0 mr-1" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
            <a href="<?php echo base_url('wiki/login'); ?>" class=" ml-3 mr-3">Login</a>
            <a href="<?php echo base_url('wiki/register'); ?>" class="ml-3 mr-5">Register</a>
        </div>
      </nav>

      <div id="container">

      <div class="container px-5">

        <!-- <div class="col-12 bg-white mx-auto px-0 rounded-lg rounded-top mb-2 content-container" > -->
        <div class="row">
                <div class="col-12 bg-indigo mx-auto rounded-lg shadow nav-panel" >
                <div class="pt-5 pb-2">
                    <div class="row align-items-center mt-4">
                        <ul class="list-inline list-justified mx-auto mb-2">
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
        </div>



        <!-- MAIN -->
        
        <div class="container px-5">
            <div class="row">
                <div class="col-12 bg-white content-container px-5">
                    <div class="row">
                        <div class="col py-3">
                            <div class="game-title">
                                <h2 id="judul_game"><?=  get($game, 'judul_game') ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 px-2 py-1">
                            <div class="col py-4 ">
                                <div class="game-img text-center">
                                    <img src="<?= base_url('images/articles-tn/'.get($game,'game_img')) ?>" alt="">
                                </div>
                            </div>
                            <div class="col py-3 game-info">
                                <div class="info-title">
                                    <h6>Developer</h6>
                                    <hr>
                                </div>
                                <a href="" class=""><?= get($developer, 'nama_developer') ?></a>
                            </div>

                            <div class="col py-3 game-info">
                                <div class="info-title">
                                    <h6>Genres</h6>
                                    <hr>
                                </div>
                                <?php if(isset($genres)){ foreach($genres as $item) {?>
                                    <a href="" class=""><?= $item->nama_genre ?></a>
                                <?php }} ?>
                            </div>

                            <div class="col py-3 game-info">
                                <div class="info-title">
                                    <h6>Release Date</h6>
                                    <hr>
                                </div>
                                <span id="release_date"><?= get($game, 'release_date') ?></span>
                            </div>

                            <div class="col py-3 game-info">
                                <div class="info-title">
                                    <h6>Platforms</h6>
                                    <hr>
                                </div>
                                <?php if(isset($platforms)){ foreach($platforms as $item) {?>
                                    <a href="" class=""><?= $item->nama_platform ?></a>
                                <?php }} ?>
                            </div>
                        </div>
                        <div class="col py-1">
                            <div class="col pb-5 section">
                                <div class="section-text">
                                </div>
                            </div>
                        </div>

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
                                <?= date("Y/m/d h:i:s A") ?>
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
                                    <h4> 0 Comments</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col border-bottom pb-3 mb-5">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <textarea class="form-control" name="komentar" id="" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button class="btn btn-secondary">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="col py-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                  
          <!--  Closing tag for div id="main" -->
          </div>

        <!-- Closing tag for div id="container" -->
        </div>

        <!-- footer -->
        <footer class="footer mx-auto">        
        </footer>

        <script>
             window.onload = function()
            {
                console.log("preview");
                var judul_game = sessionStorage.getItem('judul_game');
                if(judul_game !== null){                     
                    document.getElementById("judul_game").textContent= judul_game; 
                }
                var release_date = sessionStorage.getItem('release_date');
                if(release_date!== null){                     
                    document.getElementById("release_date").textContent = release_date;
                }
                var konten = sessionStorage.getItem('konten');
                if(konten !== null){ 
                //   editor.html.set(konten);
                  $('.section-text').html(konten);
                }
            }

            function back() {
                
            }

            function exit() {
                sessionStorage.clear();
            }

            $('a').not( document.getElementById("goback")).on("click", function(e) {
                console.log("exit");
                exit();
            });
            $('button').not( document.getElementById("goback")).on("click", function(e) {
                console.log("exit");
                exit();
            })
            

        </script>
        
    </body>

    <!-- jss -->
    <!-- <script src="<?=  base_url('assets/js/jquery-3.3.1.slim.min.js') ?>"></script> -->
    <script src="<?=  base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- <script src="<?=  base_url('assets/js/custom.js') ?>"></script> -->
    
</html>

          
    
