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

<!-- Header -->
<?php $this->load->view('admin/_partials/header') ?>
<!-- End Header -->

<!-- end inner page banner -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="row">
        <div class="full">
          <div class="d-flex h-100 justify-content-center align-items-center">
            <div class="card-body">
              <div class="payment-form">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="main_heading text_align_center">
                    <h2>Daftar Peserta Didik Baru</h2>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form">
                  <div class="form_section">
                    <form class="form_contant" action="index.html" style="padding-left: 200px; padding-right:200px; width:100%; display:block;">
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Nama Lengkap</label>
                          <input class="field_custom" placeholder="Nama Lengkap" type="text" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label for="ttl">TTL</label>
                          <input class="field_custom" placeholder="Tempat Lahir" type="text" id="ttl" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <input class="field_custom" placeholder="Tanggal Lahir" type="date" required style="margin-top: 25px;">
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Email</label>
                          <input class="field_custom" placeholder="Email" type="text" required>
                        </div>
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Telepon</label>
                          <input class="field_custom" placeholder="Telepon" type="text" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Kata Sandi</label>
                          <input class="field_custom" placeholder="Kata Sandi" type="password" required>
                        </div>
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Konfirmasi Kata Sandi</label>
                          <input class="field_custom" placeholder="Konfirmasi Kata Sandi" type="password" required>
                        </div>
                      </div>
                      <!-- <div class="col">
                          <div class="form-group">
                            <div class="checkbox">
                              <label>
                                <h3 class="small text-center">Silahkan masukan Username dan Password yang valid</h3>
                              </label>
                            </div>
                          </div>
                        </div> -->
                      <div class="center">
                        <button class="btn main_bt">Daftar</button>
                      </div>
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