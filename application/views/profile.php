<div class="container px-5">
    <div class="row">
        <div class="col-12 bg-white mb-2 content-container" >


          <div class="col-12 py-5 px-5">
              <h2 class="text-dark ml-4 mb-4"></h2>

                <div class="row pl-3 mb-4">
                    <div class="col-10 mx-auto bg-light profile-wrapper rounded p-4">
                        <div class="ml-2 row">
                            <div class="col-3">
                                <div class="profile-img my-2">
                                    <img src="<?= base_url('images/profile_pics/'.$user->profile_pic) ?>" alt="">
                                </div>  
                            </div>
                            <div class="col">
                                <div class="row mb-4">
                                    <div class="col profile-info">
                                        <small>Display Name</small><br>
                                        <h5><?= $user->nama ?></h5>
                                    </div>
                                    <div class="col-4 ml-auto pt-2 text-right">
                                        <!-- <a href="#modal-edit" data-toggle="modal" class="btn btn-light border-0"> <i class="fa fa-edit mr-2"></i> Edit</a> -->
                                        <button type="button" class="btn btn-light border-0" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit mr-2"></i> Edit</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col profile-info">
                                        <small>Email</small><br>
                                        <h5><?= $user->email ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 py-5">
                </div>
                <div class="row pl-3">
                    <div class="col py-2">
                    </div>
                </div>
          </div>

        </div>
    </div>
</div>


<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <form id="form" class="" action="<?= site_url('user/update') ?>" method="post" enctype="multipart/form-data" >
        <!-- <input type="text" name="id_user" value="<?= $user->id_user ?>" hidden> -->
        <div class="modal-body col mx-0 rounded bg-light py-5">
            <div class="form-group row">
                <div class="col-3 ml-auto">
                    <div class="col">
                        <label class="">Display name</label>
                    </div>
                </div>
                <div class="col-6 mr-auto">
                <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama lengkap" value="<?= $user->nama ?>" autofocus required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 ml-auto">
                    <div class="col">
                        <label class="pt-2">Username</label>
                    </div>
                </div>
                <div class="col-6 mr-auto">
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?= $user->username ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 ml-auto">
                    <div class="col">
                        <label class="">New Password</label>
                    </div>
                </div>
                <div class="col-6 mr-auto">
                <input type="password" id="password1" name="password" class="form-control" placeholder="Password" value="" required>
                </div>
            </div>
            <div class="form-group mb-0 row">
                <div class="col-3 ml-auto">
                    <div class="col">
                        <label class="pt-0">Konfirmasi Password</label>
                    </div>
                </div>
                <div class="col-6 mr-auto">
                    <input type="password" id="password2" class="form-control" placeholder="Konfirmasi Password" value="" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 ml-auto">
                    <div class="col">
                    </div>
                </div>
                <div class="col-6 mr-auto">
                    <span class="text-danger mb-2"><b id="error"></b></span>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-3 ml-auto">
                    <div class="col">
                        <label class="pt-2">Foto profil</label>
                    </div>
                </div>
                <div class="col-6 mr-auto">
                    <input type="file" id="img" class="form-control-file" name="profile_pic" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">File gambar berukuran < 500KB </small>                            </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary border-0" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success border-0">Save</button>
        </form>

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