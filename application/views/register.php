<div class="container px-5">
  <div class="row">
    <div class="col-12 bg-indigo mx-auto rounded-lg shadow" >
        <div class="py-5">
            <center>
              <div class="text-white">
                <h1>SELAMAT DATANG!</h1>
              </div>
              <div class="text-white">
                <h5>Anda sudah punya akun? <a href="<?php echo base_url('wiki/login'); ?>" class="text-info"><u>Login</u></a> Sekarang</h5>
              </div>
            </center>
        </div>
    </div>
  </div>

<div class="row">
    <div class="col-12 bg-white mx-auto px-0 rounded-lg rounded-top content-container" >
  <div class="py-5">
    <div class="text-center text-dark">
      <h1>Daftar</h1>
    </div>

    <form id="form" class="mb-5" action="<?= site_url('autentikasi/register') ?>" method="post" id="register" enctype="multipart/form-data" >
      <div class="">
        <div class="mt-5 row">
          <div class="col-4 mx-auto form-group">
            <label>Nama</label>
            <input id="nama" type="text" class="form-control py-4" name="nama" placeholder="Nama lengkap" value="" autofocus required>
          </div>
        </div>
        <div class="row">
          <div class="col-4 mx-auto form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control py-4" placeholder="Email" value="" required>
          </div>
        </div>
        <div class="row">
          <div class="col-4 mx-auto form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control py-4" placeholder="Username" value="" required>
          </div>
        </div>

        <div class="mt-2 row">
          <div class="col-4 mx-auto form-group">
            <label>Password</label>
            <input type="password" id="password1" name="password" class="form-control py-4" placeholder="Password" value="" required>
          </div>
        </div>
        <div class="row">
          <div class="col-4 mx-auto form-group mb-0">
            <label>Konfirmasi Password</label>
            <input type="password" id="password2" name="" class="form-control py-4" placeholder="Konfirmasi Password" value="" required>
          </div>
        </div>
        <div class="row ">
          <div class="col-4 mx-auto form-group">
            <span class="text-danger mb-2"><b id="error"></b></span>
          </div>
        </div>

        <div class="mt-2 row">
          <div class="col-4 mx-auto form-group mb-4">
            <label>Profile Picture</label>
            <input type="file" id="img" class="form-control-file" name="profile_pic" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">File gambar berukuran < 500KB </small>
    
          </div>
        </div>
        
        <div class="mt-3 pb-5 row center-block">
          <div class="col-4 mx-auto">
            <button type="submit" id="submit" class="btn btn-secondary btn-lg btn-block">Daftar</button>
          </div>
        </div>
      </div>
    </form>

    
  </div>
</div>
</div>
</div>

<script>

//cek inputan
$( "form" ).submit(function( event ) {

  // check image extension
  var img_ext = $('#img').val().split('.').pop().toLowerCase();
  console.log(img_ext);
  var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
  if (img_ext && $.inArray(img_ext, fileExtension) == -1) {
      event.preventDefault();
      alert("Only formats are allowed : "+fileExtension.join(', '));
  }

  var password1 = $('#password1').val();
  var password2 = $('#password2').val();
  if(password1 != password2){
    event.preventDefault();
    $('#error').text("Passsword tidak sesuai");
  }

  return;
});


</script>