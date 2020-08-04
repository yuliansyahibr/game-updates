<?php 
    $admin = (object) [
        'nama' => $this->session->userdata('username')
    ]
?>
<!DOCTYPE html>
<html lang="en" class="p-toolbar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href= '<?= base_url("assets/css/bootstrap.css") ?>' >
    <link rel="stylesheet" href= '<?=  base_url("assets/css/custom.css") ?>' >
    <link rel="stylesheet" href= '<?=  base_url("assets/css/stickyfooter.css") ?>' >
    <link rel="stylesheet" href='<?= base_url("assets/css/sidebar.css") ?>'>
    <link rel="stylesheet" href='<?= base_url("assets/css/adminpanel.css") ?>'>
    <link rel="stylesheet" href='<?= base_url("assets/fontawesome/css/all.css") ?>'>
</head>
<body>
<div id="main" class="pb-5">

    <div class="side-wrapper">
        <div class="sidenav-back"></div>
        <div class="sidenav py-4">
        <!-- <a href=""><i class="fa fa-tachometer-alt mr-2"></i> Dashboard</a> -->
        <a href="<?= site_url('Admin') ?>"><i class="fas fa-thumbtack mr-2"></i> Post</a>
        <!-- <a href="<?= site_url('Admin/categories') ?>"><i class="fas fa-sticky-note mr-2"></i> Categories</a> -->
        <!-- <a href="<?= site_url('Admin/comments') ?>"><i class="fa fa-comments mr-2"></i> Comments</a> -->
        </div>
    </div>

    <div class="main">

        <nav class="position-fixed p-nav shadow-sm">
            <div class="row mx-0">
                <div class="col">
                    <a class="" href="<?php echo base_url('wiki/index'); ?>">
                    <img src="<?= base_url('images/gameupdates/logo.png') ?>" alt="" height="22">
                </a>
                    <a href="<?= site_url('Admin/create') ?>"><i class="fa fa-plus"></i> New</a>
                </div>
                <div class="col text-right">
                    <span class="">Hello, <?= $admin->nama ?>!</span>
                </div>


                <div class="collapse navbar-collapse" id="navbarColor02">
                </div>
            </div>
        </nav>

        <div class="content-wrapper">
            <div class="row mb-3">
                <div class="col">
                    <span class="h3">Post</span>
                    <a href="<?= site_url('Admin/create') ?>">
                    <button class="ml-2 btn btn-light btn-sm btn-action">Add New</button>
                    </a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <form action="" method="post" class="form-inline">
                        <input type="text" class="form-control form-control-sm">
                        <input type="submit" class="btn btn-sm btn-light ml-2" value="Search Post">
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col py-3">
                    <table class="table table-sm border shadow-sm">
                    <thead class="bg-white">
                        <tr>
                        <th scope="col" width="5"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Developer</th>
                        <th scope="col" width="240">Genres</th>
                        <th scope="col" width="260">Platforms</th>
                        <th scope="col" width="14"><i class="fa fa-comments"></th>
                        <th scope="col">Date</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($artikel as $item) { ?>
                            <tr>
                                <th></th>
                                <td class="font-weight-bold">
                                    <a href="<?= site_url('Admin/edit/'.$item->id_artikel) ?>"><?= $item->detail->game->judul_game ?></a>
                                </td>
                                <td>
                                    <a href="">
                                    <?= $item->detail->developer->nama_developer ?>
                                    </a>
                                </td>
                                <td>
                                    <?php
                                    foreach ($item->detail->genres as $item2) {
                                        echo '<a href="">'.$item2->nama_genre.' '.'</a>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    foreach ($item->detail->platforms as $item2) {
                                        echo '<a href="">'.$item2->nama_platform.' '.'</a>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= count($item->detail->komentar) ?>
                                </td>
                                <td>
                                    <?=  date("Y/m/d", strtotime($item->time_created)) ?>
                                </td>
                                <td>
                                    <a href="<?= site_url('Admin/delete/'.$item->id_game) ?>" class="btn btn-sm btn-light px-3 rounded-0 border"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        <!-- <tr>
                        <th scope="row">1</th>
                        <td>title</td>
                        <td>author</td>
                        <td>category</td>
                        <td>tag</td>
                        <td>0</td>
                        <td>00-00-0000</td>
                        </tr> -->
                    </tbody>
                    <thead class="bg-white">
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Developer</th>
                        <th scope="col">Genres</th>
                        <th scope="col">Platforms</th>
                        <th scope="col"><i class="fa fa-comments"></th>
                        <th scope="col">Date</th>
                        <th></th>
                        </tr>
                    </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>