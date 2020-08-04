<div class="container px-5">

        <!-- <div class="col-12 bg-white mx-auto px-0 rounded-lg rounded-top mb-2 content-container" > -->
        <div class="row">
                <div class="col-12 bg-indigo mx-auto rounded-lg shadow nav-panel" >
                    <div class="mt-4"></div>
                    <?php if(!empty($idArtikel)) { ?>
                    <div class="row ">
                        <div class="col text-right">
                            <a href="<?= site_url('Games/edit/'.$idArtikel) ?>" class="btn btn-info mr-3"> <i class="far fa-edit"> </i> Edit</a>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row align-items-center pt-5 pb-2">
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
          
    
