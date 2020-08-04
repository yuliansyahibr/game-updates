<div class="side-wrapper">
        <div class="sidenav-back"></div>
        <div class="sidenav py-4">
        <!-- <a href=""><i class="fa fa-tachometer-alt mr-2"></i> Dashboard</a> -->
        <a href="<?= site_url('Admin/') ?>"><i class="fas fa-thumbtack mr-2"></i> Post</a>
        <a href=""><i class="fas fa-sticky-note mr-2"></i> Categories</a>
        <a href=""><i class="fa fa-comments mr-2"></i> Comments</a>
        </div>
    </div>

    <div class="main">

        <nav class="position-fixed p-nav shadow-sm">
            <div class="row mx-0">
                <div class="col">
                    <a class="" href="<?php echo base_url('wiki/index'); ?>">
                    <img src="<?= base_url('images/gameupdates/logo.png') ?>" alt="" height="22">
                </a>
                    <a href=""><i class="fa fa-plus"></i> New</a>
                </div>
                <div class="col text-right">
                    <span class="">Hello, <?= $admin->nama ?>!</span>
                </div>


                <div class="collapse navbar-collapse" id="navbarColor02">
                </div>
            </div>
        </nav>

        <!-- ----------------------- -->
        <div class="content-wrapper">