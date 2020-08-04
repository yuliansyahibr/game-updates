<div class="container px-5">

        <div class="col-12 bg-white mx-auto px-0 pb-5 rounded-lg rounded-top mb-2" >
            <div class="col-12 bg-indigo mx-auto rounded-lg shadow" >
                <div class="py-5">
                    <center>
                      <div class="text-white">
                        <h1>SELAMAT DATANG!</h1>
                      </div>
                      <div class="text-white">
                        <h5>Anda belum punya akun? <a href="<?php echo base_url('wiki/register'); ?>" class="text-info"><u>Daftar</u></a> Sekarang</h5>
                      </div>
                    </center>
                </div>
            </div>
          <div class="py-5 my-4">
            <div class="text-center text-dark">
              <h1>Login</h1>
            </div>
            <form class="mb-5" action="<?php echo base_url('autentikasi/verify'); ?>" method="post">
              <div class="">
                <div class="py-2 pt-5 mb-2 row">
                  <div class="col-4 mx-auto form-group">
                    <label>Username</label>
                    <input type="text" class="form-control py-4" name="username" placeholder="Username" value="" autofocus required>
                  </div>
                </div>
                <div class="py-2 mb-1 row">
                  <div class="col-4 mx-auto form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control py-4" placeholder="Password" value="" required>
                  </div>
                </div>
                <?php if($notFound){ ?>
                <div class="row mb-4">
                  <div class="col-4 mx-auto">
                    <span class="h6 text-danger"> Wrong username or password.</span> 
                  </div>
                </div>
                <?php } ?>
                <div class="text-center pb-5 mt-4 row center-block">
                  <div class="col-4 mx-auto">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block" name="button">Login</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

</div>
