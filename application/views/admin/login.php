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
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>"/>
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
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>LOGIN</h2>
              </div>
            </div>
            <div class="card-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
              <div class="form_section">
              <?php
                $errors = $this->session->flashdata('errors');
                if(!empty($errors)){
                ?>
                <div class="row">
                    <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        <?php foreach($errors as $key=>$error){ ?>
                        <?php echo "$error<br>"; ?>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            <?php } ?>
                <form class="form_contant" action="<?php echo base_url('admin/login/proses_login'); ?>" method="post">
                  <fieldset class="row">
                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Email" type="email" name="email" required>
                  </div>
                  <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input class="field_custom" placeholder="Password" type="password" name="password" required>
                  </div>
                  <div class="col">
                  <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <h3 class="small text-center">Silahkan masukan Username dan Password yang valid</h3>
                    </label>
                  </div>
                  </div>
                  </div>
                  <div class="center">
                    <button class="btn main_bt">Login</button>
                  </div>
                  </fieldset>                  
                </form>
                </div>
                  <div class="center">                    
                      <a class="btn dark_gray_bt" href="<?= base_url('register') ?>">Daftar Baru</a>                    
                  </div>
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
