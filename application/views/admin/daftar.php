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

<!-- Header -->
<?php $this->load->view('admin/_partials/header') ?>
<!-- End Header -->

<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4 col-md-8 col-sm-8 col-xs-12"></div>
      <div class="col-xl-6 col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col">
              <div class="main_heading text_align_center">
                <h2>Daftar	Peserta Didik Baru</h2>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
              <div class="checkout-form">
                <form action="#">
                  <fieldset>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-field" required>
                        <label>Nama Lengkap <span class="red">*</span></label>
                        <div class="col-xs-12">
                        <input name="fn" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-field">
                        <label>TTL <span class="red">*</span></label>
                        <div class="col-xs-12">
                        <input name="ln" type="text">
                      </div>
                     </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-field">
                        <label>Email <span class="red">*</span></label>
                        <div class="col-xs">
                        <input name="cm" type="text">
                      </div>
                     </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-field">
                        <label>Telpon <span class="red">*</span></label>
                        <div class="col-xs">
                        <input name="tc" type="text">
                      </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-field">
                        <label>Password <span class="red">*</span></label>
                        <div class="col-xs">
                        <input name="sc" type="text">
                      </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-field">
                        <label>Konfirmasi Password <span class="red">*</span></label>
                        <div class="col-xs">
                        <input name="pz" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="center">
                      <button class="btn main_bt">Simpan</button>
                    </div>
                    </div>
                    <div class="center">
                      <div class="checkbox">
                        <label>
                          <h3 class="small text-center">Silahkan lengkapi data diri anda <a href="#">disini</a></h3>
                        </label>
                      </div>      
                    </div>             
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>            
<!-- section -->

<!-- new -->
<div class="col-sm-12 " >
    <div class="payment-form">
        <div class="col-xs-6 col-md-6">
            <!-- CREDIT CARD FORM STARTS HERE -->
            
            
            
        </div>
    </div>
</div>





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
