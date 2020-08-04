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
    <script src="<?=  base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- <script src="<?=  base_url('assets/js/popper.min.js') ?>"></script> -->

</head>
<body class="bg-img bg-fixed" style="background-image: url(<?= base_url('images/gameupdates/dmc5-resized.jpg') ?>);">

  <div id="main" class="pb-2">
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
