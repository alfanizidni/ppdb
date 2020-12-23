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


<!-- Section -->
<div class="section padding_layout_1">
  <div class="container col-md-2">
  <div class="row" style="margin-upside: 10px;">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Tata Cara Mendaftar</h2>
            <p class="large">Dibawah ini merupakan informasi yang perlu diperhatikan saat melakukan pendaftaran</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="center">
      <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
        <div class="row" style="margin-bottom: 30px; center-block">
          <div class="col-md-12">
            <div class="full margin_bottom_30 ">
              <div class="accordion border_circle">
                <div class="bs-example">
                  <div class="panel-group " id="accordion" style="margin-top: 0;">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">1. Informasi<i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                            over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">2. Aturan<i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                            over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">3. Persyaratan<i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                            over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">4. Tata Cara<i class="fa fa-angle-down"></i></a> </p>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                            over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                            consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
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
    </div>
      <div class="center">
        <p><a class="btn main_bt" href="<?= base_url('daftar') ?>">Daftar Sekarang</a></p>
      </div>
    </div>
  </div>
</div>  
          <!-- End Section  -->

<!-- footer -->
<?php $this->load->view('admin/_partials/footer') ?>
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