<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>PPDB</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- site icons -->
  <link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>" />
  <!-- Site css -->
  <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" />
  <!-- responsive css -->
  <link rel="stylesheet" href="<?php echo base_url('css/responsive.css') ?>" />
  <!-- colors css -->
  <link rel="stylesheet" href="<?php echo base_url('css/colors1.css') ?>" />
  <!-- custom css -->
  <link rel="stylesheet" href="<?php echo base_url('css/custom.css') ?>" />
  <!-- wow Animation css -->
  <link rel="stylesheet" href="<?php echo base_url('css/animate.css') ?>" />
  <!-- revolution slider css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('revolution/css/settings.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('revolution/css/layers.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('revolution/css/navigation.css') ?>" />
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>


<!-- end inner page banner -->
<div class="section padding_layout_1">
<div class="section">
  <div class="container">
    <div class="row">
      <div class="center">    
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="d-flex h-100 justify-content-center align-items-center">    
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>Register</h2>
              </div>        
                 <div class="form_section">                   
                    <form class="form_contant" action="<?php echo base_url('admin/login/proses_register'); ?>" method="post" style="padding-left: 50px; padding-right:50px; width:100%; display:block;">
                      <div class="row">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="nama_lengkap">Nama Lengkap</label>
                          <input class="field_custom" placeholder="Nama Lengkap" name="nama_lengkap" type="text" required>
                        </div>          
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="email">Email</label>
                          <input class="field_custom" placeholder="Email" name="email" type="text" required>
                        </div>
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="no_telpon">Nomor Telepon</label>
                          <input class="field_custom" placeholder="Nomor Telepon" name="no_telpon" type="options" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="password">Kata Sandi</label>
                          <input class="field_custom" placeholder="Kata Sandi" name="password" type="password" required>
                        </div>
                        <!-- <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="password">Konfirmasi Kata Sandi</label>
                          <input class="field_custom" placeholder="Konfirmasi Kata Sandi" name="password" type="password" required>
                        </div> -->
                      </div>
                      <div class="center">
                        <button class="btn main_bt">Daftar</button>
                      </div>                  
                    </form>
                  </div>
                </div>
              </div>            
            </div>
          </div>        
        </div>
      </div>
    </div>
  </div>

<!-- section -->




<!-- end section -->
<!-- footer -->

<!-- end footer -->
<!-- js section -->
<script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
<!-- menu js -->
<script src="<?php echo base_url('js/menumaker.js') ?>"></script>
<!-- wow animation -->
<script src="<?php echo base_url('js/wow.js') ?>"></script>
<!-- custom js -->
<script src="<?php echo base_url('js/custom.js') ?>"></script>
<!-- revolution js files -->
<script src="<?php echo base_url('revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.actions.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.kenburn.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.migration.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
<script src="<?php echo base_url('revolution/js/extensions/revolution.extension.video.min.js') ?>"></script>
<!-- map js -->

</body>

</html>