<?php 
    $admin = (object) [
        'nama' => 'Administrator'
    ];

    // if(!empty($artikel)){
    //   $_artikel = $artikel;
    //   $_game = $game;
    //   $_developer =$developer;
    //   $_genres = $genres;
    //   $_platforms = $_platforms;
    // }

    function get($var, $index)
    {
      if(isset($var->$index)) return $var->$index;
      else return null;
    }
    
    if(!isset($artikel)){
      $artikel = null;
      $game = null;
      $developer = null;
      $genres = null;
      $platforms=null;

    //   $form_link = site_url('Admin/create');
    }else{
      $form_link = site_url('Games/update');
    }
?>
<!DOCTYPE html>
<html lang="en" class="p-toolbar">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href= '<?= base_url("assets/css/bootstrap.css") ?>' >
    <link rel="stylesheet" href= '<?= base_url("assets/css/custom.css") ?>' >
    <link rel="stylesheet" href= '<?= base_url("assets/css/stickyfooter.css") ?>' >
    <link rel="stylesheet" href='<?= base_url("assets/css/sidebar.css") ?>'>
    <link rel="stylesheet" href='<?= base_url("assets/css/adminpanel.css") ?>'>
    <link rel="stylesheet" href='<?= base_url("assets/fontawesome/css/all.css") ?>'>

  <link rel="stylesheet" href="<?= base_url('assets/froala/css/froala_editor.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/froala_style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/code_view.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/draggable.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/colors.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/emoticons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/image_manager.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/image.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/line_breaker.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/table.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/char_counter.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/video.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/fullscreen.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/file.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/quick_insert.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/help.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/third_party/spell_checker.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/froala/css/plugins/special_characters.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <script src="<?=  base_url('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

  <style>
    /* body {
      text-align: center;
    } */

    div#editor {
        height: 600px;
      /* width: 80%; */
      margin: auto;
      text-align: left;
    }

    .ss {
      background-color: red;
    }
  </style>
</head>
<body>
    <div class="row">
        <div class="col bg-dark py-3 position-fixed" style="z-index:99; left:0; top:0">
            <a id="goback" href="<?= site_url('Games/artikel/'.get($artikel, 'judul_artikel')) ?>" class="btn btn-sm btn-light"><i class="fa fa-arrow-left mr-1"></i> Go to article page</a>
        </div>
    </div>
<div id="main" class="pb-5">


    <div class="main">

        <!-- ----------------------- -->
        <div class="content-wrapper">
        <form id="form"  action="<?= site_url('Games/saveEdit') ?>" method="post"  enctype="multipart/form-data"> 
          <input name="id_user" type="text" value="<?= $this->session->userdata('id_user') ?>" hidden>
          <input name="id_artikel" type="text" value="<?= get($artikel, 'id_artikel') ?>" hidden>
          <input name="judul_artikel" type="text" value="<?= get($artikel, 'judul_artikel') ?>" hidden>
          <input name="id_game" type="text" value="<?= get($game, 'id_game') ?>" hidden>
          <input name="id_developer" type="text" value="<?= get($developer, 'id_developer') ?>" hidden>
          <div class="row my-5">
            <div class="col pb-2 border-bottom">
                <h3 class="font-weight-normal">Edit Artikel <b><?= $game->judul_game ?></b> </h3>
            </div>
          </div>

          <!-- <div class="row">
              <div class="col-3 pl-5 position-fixed" style=" top:120px; right:20px;">
                <div class="col border bg-white shadow py-4">
                    <div class="row border-bottom mb-3">
                        <div class="col"> <h6>Publish</h6></div>
                    </div>
                    <div class="row">
                        <div class="col text-left">
                          <a onclick="" href="<?= site_url('Games/preview/'.get($artikel, 'id_artikel'))?>" ><button type="button" id="prev-btn" class="btn btn-secondary border-0 rounded-0">Preview</button></a>
                        </div>
                        <div class="col text-right">
                            <button id="publish-btn" class="btn btn-info border-0 rounded-0">Publish</button>
                        </div>
                    </div>
                </div> 
              </div>
          </div> -->

            <div class="row mb-3 pr-3">
                <!-- <form> -->
                <div class="col-9">

                    <div class="row mb-3">
                      <div class="col">
                        <div id="editor">  
                            <textarea id='edit' name="konten_artikel" placeholder="Type some text">
                              <?= get($artikel, 'konten_artikel') ?>
                            </textarea>
                        </div>
                      </div>
                    </div>
                </div>    
                
                
                <div class="col d-flex align-content-around flex-column mb-3">

                  <div class="row mb-4">
                    <div class="col border bg-white shadow py-4 align-self-start">
                        <div class="row border-bottom mb-3">
                            <div class="col"> <h6>Publish</h6></div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                            <a  id="preview-link" onclick="" href="<?= site_url('Games/preview/'.get($artikel, 'id_artikel'))?>" ><button id="prev-btn" type="button" class="btn btn-secondary border-0 rounded-0">Preview</button></a>
                              <!-- <a class="btn btn-secondary border-0 rounded-0"> Preview </a> -->
                            </div>
                            <div class="col text-right">
                                <button id="publish-btn" class="btn btn-info border-0 rounded-0">Publish</button>
                            </div>
                        </div>
                    </div>
                  </div>

                </div>


            </div>

        </form>


            <form id="form2" action="<?= site_url("Admin/preview") ?>" method="post">
              <textarea name="isi_konten" id="preview-text" cols="30" rows="10" hidden></textarea>
            </form>

            <div class="row mb-3">
                <div class="col-8 mx-auto py-5">
                <div id="preview" class="fr-view">
                </div>
                </div>
            </div>

            
        </div>
    </div>

</div>

<!-- <script src="<?=  base_url('assets/js/jquery-3.4.1.min.js') ?>"></script> -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

  <script type="text/javascript" src="<?= base_url('assets/froala/js/froala_editor.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/align.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/char_counter.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/code_beautifier.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/code_view.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/colors.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/draggable.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/emoticons.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/entities.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/file.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/font_size.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/font_family.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/fullscreen.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/image.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/image_manager.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/line_breaker.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/inline_style.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/link.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/lists.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/paragraph_format.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/paragraph_style.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/quick_insert.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/quote.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/table.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/save.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/url.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/video.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/help.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/print.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/third_party/spell_checker.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/special_characters.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/froala/js/plugins/word_paste.min.js') ?>"></script>

  <script>
    (function () {

      FroalaEditor.DefineIcon('headline', {NAME: 'Section Head', template: 'text'})
      FroalaEditor.RegisterCommand('headline', {
        title: 'Insert Section Title',
        focus: true,
        undo: true,
        refreshAfterCallback: true,
        callback: function () {
          this.html.insert('<h3 class="headline"> </h3>')
        }
      })

      const editorInstance = new FroalaEditor('#edit', {
        height: 800,
        enter: FroalaEditor.ENTER_P,
        placeholderText: null,
        toolbarButtons: {
          'moreText': {
            'buttons': ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'textColor', 'backgroundColor', 'inlineClass', 'inlineStyle', 'clearFormatting']
          },
          // 'custom': {
          //   'buttons' : ['headline']
          // },
          'moreParagraph': {
            'buttons': ['headline', 'alignLeft', 'alignCenter', 'formatOLSimple', 'alignRight', 'alignJustify', 'formatOL', 'formatUL', 'paragraphFormat', 'paragraphStyle', 'lineHeight', 'outdent', 'indent', 'quote']
          },
          'moreRich': {
            'buttons': ['insertLink', 'insertImage', 'insertVideo', 'insertTable', 'emoticons', 'fontAwesome', 'specialCharacters', 'embedly', 'insertFile', 'insertHR']
          },
          'moreMisc': {
            'buttons': ['undo', 'redo', 'fullscreen', 'print', 'getPDF', 'spellChecker', 'selectAll', 'html', 'help'],
            'align': 'right',
            'buttonsVisible': 2
          }
        },
        events: {
          initialized: function () {
            const editor = this;            
            editor.events.bindClick(editor.$('body'), 'button#prev-btn', function () {
            //     sessionStorage.setItem("judul_game", $('#judul_game').val());
              // sessionStorage.setItem("release_date", $('#release_date').val());
              // sessionStorage.setItem("id_developer", $('#id_developer').val());
              // sessionStorage.setItem("judul_konten", $('#judul_konten').val());
              // sessionStorage.setItem("isi_konten", editor.html.get());      
            });
            editor.events.bindClick(editor.$('body'), 'button#publish-btn', function () {
              // $('#edit').val(editor.$oel.val());
              // $('#judul_konten').val($('#judul').val());
              $('#edit').text(editor.$oel.val());
              // console.log($('#judul_konten').val());
              $('#form').submit();
            });
            window.onload = function()
            {
                var konten = sessionStorage.getItem('konten');
                if(konten !== null){ 
                  editor.html.set(konten);
                }
            }

            window.onbeforeunload = function() {
                // sessionStorage.clear();
              // sessionStorage.setItem("judul_game", $('#judul_game').val());
              // sessionStorage.setItem("release_date", $('#release_date').val());
              // sessionStorage.setItem("id_developer", $('#id_developer').val());
              // sessionStorage.setItem("judul_konten", $('#judul_konten').val());
            //   sessionStorage.setItem("isi_konten", editor.html.get());                
            }
            // editor.el.closest('form').addEventListener('submit', function (e) {
            // //   console.log(editor.$oel.val())
            //   e.preventDefault()
            // //   $('#preview').html(editor.$oel.val())
            //     $('#edit').val(editor.$oel.val())
            //     $('#preview').html($('#edit').val())
            // })            
          }
        }
      })


      $("#prev-btn").on("click", function(e){
        // e.preventDefault();
        console.log("preview");
        sessionStorage.setItem("konten", editorInstance.html.get());      
        // $('#form').attr('action', "<?= site_url('Games/preview') ?>").submit();
      });

      $("#goback").on("click", function(e){
            sessionStorage.clear();
            // $('#form').attr('action', "<?= site_url('Games/preview') ?>").submit();
      });

    })()


  </script>

</body>
</html>
