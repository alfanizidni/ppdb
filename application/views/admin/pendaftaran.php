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
                    <form class="form_contant" action="index.html" style="padding-left: 50px; padding-right:50px; width:100%; display:block;">
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Nama Lengkap</label>
                          <input class="field_custom" placeholder="Nama Lengkap" type="text" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label for="ttl">Tempat/Tanggal Lahir</label>
                          <input class="field_custom" placeholder="Tempat Lahir" type="text" id="ttl" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <input class="field_custom" placeholder="Tanggal Lahir" type="date" required style="margin-top: 25px;">
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">NISN</label>
                          <input class="field_custom" placeholder="Email" type="text" required>
                        </div>
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Jenis Kelamin</label>
                          <input class="field_custom" placeholder="Laki-laki/Perempuan" type="options" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Agama</label>
                          <input class="field_custom" placeholder="Agama" type="text" required>
                        </div>
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Anak ke-</label>
                          <input class="field_custom" placeholder="Anak Ke-" type="text" id="ttl" required>
                        </div>
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Jumlah Saudara</label>
                          <input class="field_custom" placeholder="Jumlah Saudara" type="text" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Nomor Telepon</label>
                          <input class="field_custom" placeholder="Telepon" type="text" required>
                        </div>
                        <div class="field col-lg-2 col-md-2 col-sm-2 col-xs-2">
                          <label for="ttl">Gol. Darah</label>
                          <input class="field_custom" placeholder="Gol. Darah" type="text" id="ttl" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label for="ttl">Berat Badan</label>
                          <input class="field_custom" placeholder="... Kg" type="text" id="ttl" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label for="ttl">Tinggi Badan</label>
                          <input class="field_custom" placeholder="... cm" type="text" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Alamat</label>
                          <input class="field_custom" placeholder="Alamat Lengkap" type="password" required>
                        </div>
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Sekolah Asal</label>
                          <input class="field_custom" placeholder="Sekolah Asal" type="password" required>
                        </div>
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Alamat Sekolah Asal</label>
                          <input class="field_custom" placeholder="Alamat Sekolah Asal" type="password" required>
                        </div>
                      </div>
                      <br/>
                      <hr/>
                      <br/>
                      <div class="row">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Nama Ayah</label>
                          <input class="field_custom" placeholder="Nama Lengkap Ayah" type="text" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Agama Ayah</label>
                          <input class="field_custom" placeholder="Agama" type="text" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label for="ttl">Tempat/Tanggal Lahir Ayah</label>
                          <input class="field_custom" placeholder="Tempat Lahir" type="text" id="ttl" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <input class="field_custom" placeholder="Tanggal Lahir" type="date" required style="margin-top: 25px;">
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Pendidikan Ayah</label>
                          <input class="field_custom" placeholder="Pendidikan Ayah" type="text" required>
                        </div>
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Pekerjaan Ayah</label>
                          <input class="field_custom" placeholder="Pekerjaan Ayah" type="text" id="ttl" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-8 col-md-8 col-sm-8 col-xs-8">
                          <label for="ttl">Alamat Rumah Ayah</label>
                          <input class="field_custom" placeholder="Alamat Lengkap" type="text" required>
                        </div>
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Telepon Ayah</label>
                          <input class="field_custom" placeholder="Nomor Telepon Ayah" type="text" id="ttl" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-8 col-md-8 col-sm-8 col-xs-8">
                          <label for="ttl">Alamat Kantor Ayah</label>
                          <input class="field_custom" placeholder="Alamat Lengkap" type="text" required>
                        </div>
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Telepon Kantor Ayah</label>
                          <input class="field_custom" placeholder="Telepon Kantor Ayah" type="text" id="ttl" required>
                        </div>
                      </div>
                      <br/>
                      <hr/>
                      <br/>
                      <div class="row">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Nama Ibu</label>
                          <input class="field_custom" placeholder="Nama Lengkap Ibu" type="text" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Agama Ibu</label>
                          <input class="field_custom" placeholder="Agama" type="text" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label for="ttl">Tempat/Tanggal Lahir Ibu</label>
                          <input class="field_custom" placeholder="Tempat Lahir" type="text" id="ttl" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <input class="field_custom" placeholder="Tanggal Lahir" type="date" required style="margin-top: 25px;">
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Pendidikan Ibu</label>
                          <input class="field_custom" placeholder="Pendidikan Ibu" type="text" required>
                        </div>
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Pekerjaan Ibu</label>
                          <input class="field_custom" placeholder="Pekerjaan Ibu" type="text" id="ttl" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-8 col-md-8 col-sm-8 col-xs-8">
                          <label for="ttl">Alamat Rumah Ibu</label>
                          <input class="field_custom" placeholder="Alamat Lengkap" type="text" required>
                        </div>
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Telepon Ibu</label>
                          <input class="field_custom" placeholder="Nomor Telepon Ibu" type="text" id="ttl" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-8 col-md-8 col-sm-8 col-xs-8">
                          <label for="ttl">Alamat Kantor Ibu</label>
                          <input class="field_custom" placeholder="Alamat Lengkap" type="text" required>
                        </div>
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Telepon Kantor Ibu</label>
                          <input class="field_custom" placeholder="Telepon Kantor Ibu" type="text" id="ttl" required>
                        </div>
                      </div>
                      <br/>
                      <hr/>
                      <br/>
                      <div class="row">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Nama Wali</label>
                          <input class="field_custom" placeholder="Nama Lengkap Wali" type="text" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Agama Wali</label>
                          <input class="field_custom" placeholder="Agama" type="text" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <label for="ttl">Tempat/Tanggal Lahir Wali</label>
                          <input class="field_custom" placeholder="Tempat Lahir" type="text" id="ttl" required>
                        </div>
                        <div class="field col-lg-3 col-md-3 col-sm-3 col-xs-3">
                          <input class="field_custom" placeholder="Tanggal Lahir" type="date" required style="margin-top: 25px;">
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Pendidikan Wali</label>
                          <input class="field_custom" placeholder="Pendidikan Wali" type="text" required>
                        </div>
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Pekerjaan Wali</label>
                          <input class="field_custom" placeholder="Pekerjaan Wali" type="text" id="ttl" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-8 col-md-8 col-sm-8 col-xs-8">
                          <label for="ttl">Alamat Rumah Wali</label>
                          <input class="field_custom" placeholder="Alamat Lengkap" type="text" required>
                        </div>
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Telepon Wali</label>
                          <input class="field_custom" placeholder="Nomor Telepon Wali" type="text" id="ttl" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="field col-lg-8 col-md-8 col-sm-8 col-xs-8">
                          <label for="ttl">Alamat Kantor Wali</label>
                          <input class="field_custom" placeholder="Alamat Lengkap" type="text" required>
                        </div>
                        <div class="field col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <label for="ttl">Telepon Kantor Wali</label>
                          <input class="field_custom" placeholder="Telepon Kantor Wali" type="text" id="ttl" required>
                        </div>
                      </div>
                      <br/>
                      <hr/>
                      <br/>
                      <div class="row">
                        <div class="field col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <label for="ttl">Foto Bukti Administrasi</label>
                          <input class="field_custom" placeholder="Unggah Foto" type="text" required>
                        </div>
                        <div class="field col-lg-2 col-md-2 col-sm-2 col-xs-2">
                          <button type="submit" class="btn sqaure_bt" style="margin-top: 25px;">Unggah Foto</button>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Prestasi Akademik</label>
                          <select multiple type="text" class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label for="ttl">Prestasi Non-Akademik</label>
                          <select multiple class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
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