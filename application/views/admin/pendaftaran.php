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

<!-- end inner page banner -->
<div class="section">
  <div class="container">
    <div class="row">
      <!-- <div class="center">   -->
        <!-- <div class="row"> -->
          <!-- <div class="full"> -->
            <!-- <div class="d-flex h-100 justify-content-center align-items-center"> -->
              <div class="card-body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="main_heading text_align_center">
                      <h2>Daftar Peserta Didik Baru</h2>
                    </div>                
                    <div class="payment-form">
                      <br/>
                        <div class="center">
                        <ul class="nav nav-tabs nav-tabs mb-3">
                          <li class="nav-item active"><a data-toggle="tab" href="#siswa" class="nav-link">Data Pribadi</a></li>
                          <li class="nav-item"><a data-toggle="tab" href="#orangtua" class="nav-link">Data Orang Tua</a></li>
                          <li class="nav-item"><a data-toggle="tab" href="#nilai" class="nav-link">Data Nilai </a></li>
                          <li class="nav-item"><a data-toggle="tab" href="#upload_berkas" class="nav-link">Upload Berkas </a></li>
                          <li class="nav-item"><a data-toggle="tab" href="#cetak" class="nav-link">Cetak </a></li>
                          <li class="nav-item"><a data-toggle="tab" href="#pembayaran" class="nav-link">Pembayaran </a></li>
                        </ul>
                        </div>
                      <br>

                      <div class="form_section">                  
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 appointment_form"> 
                          <form class="form_contant" action="admin/pendaftaran/tambah_aksi" method="post" style="padding-left: 50px; padding-right:50px; width:100%; display:block;">
                            <div class="tab-content">
                              <!-- TAB CONTENT DATA PRIBADI -->
                              <div id="siswa" class="tab-pane active">
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Nama Lengkap</label>                                                       
                                    <input class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $rb_psb_akun->nama_lengkap ?>" type="text" readonly>                                                                                             
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="ttl">Tempat/Tanggal Lahir</label>
                                    <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" type="text" id="tempat_lahir" value="<?php $tempat_lahir; ?>" required>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old='tanggal_lahir' }}" type="date" required style="margin-top: 25px;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">NISN</label>
                                    <input class="form-control" placeholder="NISN" name="no_induk" type="number" required>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">                          
                                    <label for="ttl">Jenis Kelamin</label>                        
                                    <div class="form-group" required>                          
                                      <select class="form-control" name="" class="form-group col-lg-8 col-md-8 col-sm-8 col-xs-8" id="exampleFormControlSelect1" required>
                                        <option >Laki-laki</option>
                                        <option >Perempuan</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                    <label for="ttl">Agama</label>
                                    <br/>
                                    <div class="form-group" required>
                                      <select class="form-control" id="exampleFormControlSelect1" required>
                                        <option>Islam</option>
                                        <option>Protestan</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <label for="ttl">Anak ke-</label>
                                    <input class="form-control" placeholder="Anak Ke-" name="anak_ke" type="number" id="ttl" required>
                                  </div>
                                  <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <label for="ttl">Jumlah Saudara</label>
                                    <input class="form-control" placeholder="Jumlah Saudara" name="jumlah_saudara" type="text" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <label for="ttl">Nomor Telepon</label>
                                    <input class="form-control" placeholder="Telepon" name="no_telpon" value="<?php echo $rb_psb_akun->no_telpon ?>" type="dropdown" required>
                                  </div>
                                  <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="ttl">Gol. Darah</label>
                                    <br/>
                                    <div class="form-group" required>
                                      <select class="form-control" name="golongan_darah" id="exampleFormControlSelect1" required>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>O</option>
                                        <option>AB</option>
                                        <option>-</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="ttl">Berat Badan</label>
                                    <input class="form-control" placeholder="... Kg" name="berat_badan" type="number" id="ttl" required>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="ttl">Tinggi Badan</label>
                                    <input class="form-control" placeholder="... cm" name="tinggi_badan" type="number" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <label for="ttl">Sekolah Asal</label>
                                      <input class="form-control" placeholder="Sekolah Asal" name="sekolah_asal" type="text" required>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <label for="ttl">Alamat</label>
                                    <textarea class="form-control" placeholder="Alamat Lengkap" name="alamat_siswa" type="text" ></textarea>
                                  </div>                        
                                  <div class="form-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <label for="ttl">Alamat Sekolah Asal</label>
                                    <textarea class="form-control" placeholder="Alamat Sekolah Asal" name="alamat_sekolah_asal" type="text"></textarea>
                                  </div>
                                </div>
                              </div>
                              <!-- TAB CONTENT DATA ORTU -->
                              <div id="orangtua" class="tab-pane fade">
                                <div class="row">
                                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="ttl">Nama Ayah</label>
                                    <input class="form-control" placeholder="Nama Lengkap Ayah" type="text" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Agama Ayah</label>
                                    <br/>
                                    <div class="form-group" required>
                                      <select class="form-control" id="exampleFormControlSelect1" required>
                                        <option>Islam</option>
                                        <option>Protestan</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="ttl">Tempat/Tanggal Lahir Ayah</label>
                                    <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" type="text" id="tempat_lahir" value="<?php $tempat_lahir; ?>" required>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old='tanggal_lahir' }}" type="date" required style="margin-top: 25px;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Pendidikan Ayah</label>
                                    <input class="form-control" placeholder="Pendidikan Ayah" type="text" required>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Pekerjaan Ayah</label>
                                    <input class="form-control" placeholder="Pekerjaan Ayah" type="text" id="ttl" required>
                                  </div>
                                </div>
                                <div class="row">                        
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Telepon Kantor Ayah</label>
                                    <input class="form-control" placeholder="Telepon Kantor Ayah" type="number" id="ttl" required>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Telepon Ayah</label>
                                    <input class="form-control" placeholder="Nomor Telepon Ayah" type="number" id="ttl" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                      <label for="ttl">Alamat Rumah Ayah</label>
                                      <textarea class="form-control" rows="4" placeholder="Alamat Lengkap" type="text" required></textarea>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Alamat Kantor Ayah</label>
                                    <textarea class="form-control" rows="4" placeholder="Alamat Lengkap" type="text" required></textarea>
                                  </div>                        
                                </div>
                                <br/>
                                <hr/>
                                <br/>
                                <div class="row">
                                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="ttl">Nama Ibu</label>
                                    <input class="form-control" placeholder="Nama Lengkap Ibu" type="text" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Agama Ibu</label>
                                    <br/>
                                    <div class="form-group" required>
                                      <select class="form-control" id="exampleFormControlSelect1" required>
                                        <option>Islam</option>
                                        <option>Protestan</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="ttl">Tempat/Tanggal Lahir Ibu</label>
                                    <input class="form-control" placeholder="Tempat Lahir" type="text" id="ttl" required>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input class="form-control" placeholder="Tanggal Lahir" type="date" required style="margin-top: 25px;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Pendidikan Ibu</label>
                                    <input class="form-control" placeholder="Pendidikan Ibu" type="text" required>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Pekerjaan Ibu</label>
                                    <input class="form-control" placeholder="Pekerjaan Ibu" type="text" id="ttl" required>
                                  </div>
                                </div>
                                <div class="row">                        
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Telepon Kantor Ibu</label>
                                    <input class="form-control" placeholder="Telepon Kantor Ibu" type="number" id="ttl" required>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Telepon Ibu</label>
                                    <input class="form-control" placeholder="Nomor Telepon Ibu" type="number" id="ttl" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                      <label for="ttl">Alamat Rumah Ibu</label>
                                      <textarea class="form-control" rows="4" placeholder="Alamat Lengkap" type="text" required></textarea>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Alamat Kantor Ibu</label>
                                    <textarea class="form-control" rows="4" placeholder="Alamat Lengkap" type="text" required></textarea>
                                  </div>                        
                                </div>
                                <br/>
                                <hr/>
                                <br/>
                                <div class="row">
                                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="ttl">Nama Wali</label>
                                    <input class="form-control" placeholder="Nama Lengkap Wali" type="text" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Agama Wali</label>
                                    <br/>
                                    <div class="form-group" required>
                                      <select class="form-control" style="margin-top: 8px;" id="exampleFormControlSelect1" required>
                                        <option>Islam</option>
                                        <option>Protestan</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Konghucu</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <label for="ttl">Tempat/Tanggal Lahir Wali</label>
                                    <input class="form-control" placeholder="Tempat Lahir" type="text" id="ttl" required>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <input class="form-control" placeholder="Tanggal Lahir" type="date" required style="margin-top: 25px;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Pendidikan Wali</label>
                                    <input class="form-control" placeholder="Pendidikan Wali" type="text" required>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Pekerjaan Wali</label>
                                    <input class="form-control" placeholder="Pekerjaan Wali" type="text" id="ttl" required>
                                  </div>
                                </div>
                                <div class="row">                        
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Telepon Kantor Wali</label>
                                    <input class="form-control" placeholder="Telepon Kantor Wali" type="number" id="ttl" required>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Telepon Wali</label>
                                    <input class="form-control" placeholder="Nomor Telepon Wali" type="number" id="ttl" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                      <label for="ttl">Alamat Rumah Wali</label>
                                      <textarea class="form-control" rows="4" placeholder="Alamat Lengkap" type="text" required></textarea>
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label for="ttl">Alamat Kantor Wali</label>
                                    <textarea class="form-control" rows="4" placeholder="Alamat Lengkap" type="text" required></textarea>
                                  </div>                        
                                </div>
                              </div>
                              <!-- TAB CONTENT DATA NILAI --> 
                              <div id="nilai" class="tab-pane fade">
                              </div>
                              <!-- TAB CONTENT DATA UPLOAD BERKAS -->
                              <div id="upload_berkas" class="tab-pane fade">
                              </div>
                              <!-- TAB CONTENT DATA CETAK -->
                              <div id="cetak" class="tab-pane fade">
                              </div>
                              <!-- TAB CONTENT DATA PEMBAYARAN -->
                              <div id="pembayaran" class="tab-pane fade">
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
                                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                      <label for="ttl">Email</label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">@</div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                      <label for="ttl">Foto Bukti Pembayaran</label>
                                      <input class="form-control" placeholder="Unggah Foto" type="text" required>
                                  </div>
                                  <div class="form-group col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                      <button type="submit" class="btn sqaure_bt" style="margin-top: 25px;">Unggah Foto</button>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <label for="ttl">Lainnya</label>
                                      <textarea class="form-control" rows="6" placeholder="Lainnya.." type="text" required></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                   <label class="form-check-label" for="gridCheck">
                                    Data diatas diisi dengan benar
                                   </label>
                                </div>
                              </div> 
                              <br/>
                              <!-- BUTTON -->
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
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> -->
      <!-- </div> -->
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