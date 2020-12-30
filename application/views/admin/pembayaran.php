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



<!-- header bottom -->
<div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
          <!-- logo start -->
          <div class="logo"> <a href="<?= base_url('admin') ?>">Logo Sekolah</a> </div>
          <!-- logo end -->
        </div>         
        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li><a href="<?= base_url('admin') ?>">Beranda</a></li>
                <li><a href="<?= base_url('prosedur') ?>">Prosedur</a></li>
                <li> <a href="<?= base_url('pendaftaran') ?>" class="active">Pendaftaran</a></li>
                <li> <a href="<?= base_url("login") ?>" >Logout</a></li>
              </ul>
            </div>            
          </div>
         <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>

<!-- Tabs navs -->
<div class="section">
  <div class="container">
    <div class="row">
     <div class="center"> 
      <ul class="nav nav-tabs mb-3" id="ex1" role="tablist" >
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="ex1-tab-1"
            data-mdb-toggle="tab"
            href="<?= base_url('pendaftaran') ?>"
            role="tab"
            aria-controls="ex1-tabs-1"
            aria-selected="true"
            >Data Pribadi</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="ex1-tab-2"
            data-mdb-toggle="tab"
            href="<?= base_url('pendaftaran-ortu') ?>"
            role="tab"
            aria-controls="ex1-tabs-2"
            aria-selected="false"
            >Data Orang Tua</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="ex1-tab-3"
            data-mdb-toggle="tab"
            href="<?= base_url('daftar-nilai') ?>"
            role="tab"
            aria-controls="ex1-tabs-3"
            aria-selected="false"
            >Data Nilai</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="ex1-tab-4"
            data-mdb-toggle="tab"
            href="<?= base_url('upload-berkas') ?>"
            role="tab"
            aria-controls="ex1-tabs-4"
            aria-selected="false"
            >Upload Berkas</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="ex1-tab-5"
            data-mdb-toggle="tab"
            href="<?= base_url('cetak-berkas') ?>"
            role="tab"
            aria-controls="ex1-tabs-5"
            aria-selected="false"
            >Cetak</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="ex1-tab-6"
            data-mdb-toggle="tab"
            href="#ex1-tabs-5"
            role="tab"
            aria-controls="ex1-tabs-6"
            aria-selected="false"
            >Pembayaran</a
          >
        </li>
      </ul>
      <!-- Tabs navs -->

      <!-- Tabs content -->
      <div class="tab-content" id="ex1-content">
        <div
          class="tab-pane fade show active"
          id="ex1-tabs-1"
          role="tabpanel"
          aria-labelledby="ex1-tab-1"
        >
        </div>
        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
          Tab 2 content
        </div>
        <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
          Tab 3 content
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Tabs content -->

<!-- end inner page banner -->
<div class="section">
  <div class="container">
    <div class="row">
     <div class="center">  
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
                    <form class="form_contant" action="admin/pendaftaran/tambah_aksi" method="post" style="padding-left: 50px; padding-right:50px; width:100%; display:block;">
                    <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                          <label for="ttl">Waktu Daftar</label>
                          <input class="form-control" placeholder="Waktu Daftar" type="date" required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Status Seleksi</label>
                          <input class="form-control" placeholder="Proses.." name="anak_ke" type="number" id="ttl" readonly required>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Beban Biaya</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Rp.</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Beban Biaya">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                          <label for="ttl">Dusun</label>
                          <input class="form-control" placeholder="Waktu Daftar" type="text" required>
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label for="ttl">Kelurahan</label>
                          <input class="form-control" placeholder="Proses.." name="anak_ke" type="number" id="ttl"required>
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                          <label for="ttl">Kecamatan</label>
                          <input class="form-control" placeholder="Waktu Daftar" type="text" required>
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                          <label for="ttl">Kode Pos</label>
                          <input class="form-control" placeholder="Waktu Daftar" type="text" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Email</label>
                          <div class="input-group mb-2">
                            <div class="input-group-prepend">
                              <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Foto Bukti Administrasi</label>
                          <input class="form-control" placeholder="Unggah Foto" type="text" required>
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
                          <button type="submit" class="btn sqaure_bt" style="margin-top: 25px;">Unggah Foto</button>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Lainnya</label>
                          <textarea class="form-control" rows="6" placeholder="Lainnya.." type="text" required></textarea>
                        </div>
                      </div>
                      <br/>
                      <div class="row form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Data diatas diisi dengan benar
                          </label>
                        </div>
                      </div>
                      <br/>

                      <div class="center">
                        <button class="btn main_bt">Cetak</button>
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