<?php

class Pendaftaran extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pendaftaran_model');
    }

    public function index() 
    {        
        // $id = $this->session->userdata['ses_id'];
        $data['rb_psb_akun'] = $this->pendaftaran_model->tampil_data_by_id($this->session->id_psb)->row();
        $this->load->view("admin/pendaftaran", $data);
        // var_dump($data);
    }

    public function tambah()
    {
        $this->load->view('admin/pendaftaran');
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$no_induk = $this->input->post('no_induk');
        $anak_ke = $this->input->post('anak_ke');
        $gender = $this->input->post('id_jenis_kelamin');
		$agama = $this->input->post('id_agama');
        $jumlah_saudara = $this->input->post('jumlah_saudara');
		$no_telpon = $this->input->post('no_telpon');
		$golongan_darah = $this->input->post('golongan_darah');
		$berat_badan = $this->input->post('berat_badan');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$sekolah_asal = $this->input->post('sekolah_asal');
		$alamat_siswa = $this->input->post('alamat_siswa');
        $alamat_sekolah_asal = $this->input->post('alamat_sekolah_asal');
        $prestasi_akademik = $this->input->post('prestasi_akademik');
        $prestasi_non_akademik = $this->input->post('prestasi_non_akademik');
        // ayah
        $nama_ayah = $this->input->post('nama_ayah');
        $agama_ayah = $this->input->post('agama_ayah');
        $tempat_lahir_ayah = $this->input->post('tempat_lahir_ayah');
        $tanggal_lahir_ayah = $this->input->post('tanggal_lahir_ayah');
        $pendidikan_ayah = $this->input->post('pendidikan_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $telpon_kantor_ayah = $this->input->post('telpon_kantor_ayah');
        $telpon_ayah = $this->input->post('telpon_ayah');
        $alamat_rumah_ayah = $this->input->post('alamat_rumah_ayah');
        $alamat_kantor_ayah = $this->input->post('alamat_kantor_ayah');
        // ibu
        $nama_ibu = $this->input->post('nama_ibu');
        $agama_ibu = $this->input->post('agama_ibu');
        $tempat_lahir_ibu = $this->input->post('tempat_lahir_ibu');
        $tanggal_lahir_ibu = $this->input->post('tanggal_lahir_ibu');
        $pendidikan_ibu = $this->input->post('pendidikan_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $telpon_kantor_ibu = $this->input->post('telpon_kantor_ibu');
        $telpon_ibu = $this->input->post('telpon_ibu');
        $alamat_rumah_ibu = $this->input->post('alamat_rumah_ibu');
        $alamat_kantor_ibu = $this->input->post('alamat_kantor_ibu');
        
        
		$data = array(
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
            'no_induk' => $no_induk,
            'anak_ke' => $anak_ke,
            'id_jenis_kelamin' => $gender,
            'id_agama' => $agama,
            'jumlah_saudara' => $jumlah_saudara,
            'no_telpon' => $no_telpon,
            'golongan_darah' => $golongan_darah,
            'berat_badan' => $berat_badan,
            'tinggi_badan' => $tinggi_badan,
            'sekolah_asal' => $sekolah_asal,
            'alamat_siswa' => $alamat_siswa,
            'alamat_sekolah_asal' => $alamat_sekolah_asal,
            'prestasi_akademik' => $prestasi_akademik,
            'prestasi_non_akademik' => $prestasi_non_akademik,
            //ayah
            'nama_ayah' => $nama_ayah,
            'agama_ayah' => $agama_ayah,
            'tempat_lahir_ayah' => $tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $tanggal_lahir_ayah,
            'pendidikan_ayah' => $pendidikan_ayah,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'telpon_kantor_ayah' => $telpon_kantor_ayah,
            'telpon_ayah' => $telpon_ayah,
            'alamat_rumah_ayah' => $alamat_rumah_ayah,
            'alamat_kantor_ayah' => $alamat_kantor_ayah,
            //ibu
            'nama_ibu' => $nama_ibu,
            'agama_ibu' => $agama_ibu,
            'tempat_lahir_ibu' => $tempat_lahir_ibu,
            'tanggal_lahir_ibu' => $tanggal_lahir_ibu,
            'pendidikan_ibu' => $pendidikan_ibu,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'telpon_kantor_ibu' => $telpon_kantor_ibu,
            'telpon_ibu' => $telpon_ibu,
            'alamat_rumah_ibu' => $alamat_rumah_ibu,
            'alamat_kantor_ibu' => $alamat_kantor_ibu,


        );
        
        if ($data == true) 
        {
            // $this->pendaftaran_model->input_data($data,'rb_psb_pendaftaran');
            // redirect('admin/overview');
            var_dump($data);

        } else {
            redirect('admin/pendaftaran');
        }   
		
    }

    public function tambah_ortu()
    {
        $this->load->view('admin/pendaftaran_ortu');
    }

    public function daftar_nilai()
    {
        $this->load->view('admin/daftar_nilai');
    }

    public function upload_berkas()
    {
        $this->load->view('admin/upload_berkas');
    }

    public function cetak_berkas()
    {
        $this->load->view('admin/cetak_berkas');
    }
 
    public function pembayaran()
    {
        $this->load->view('admin/pembayaran');
    }




    public function edit()
    {
        $data['rb_psb_akun'] = $this->pendaftaran_model->tampil_data()->result();

        // $where = array('id_pendaftaran' => $id);
        // $data['rb_psb_pendaftaran'] = $this->pendaftaran_model->edit_data($where, 'rb_psb_pendaftaran')->result();
        // $this->load->view('admin/overview', $data);
    }

    public function update()
    {
        $id = $this->input->post('id_pendaftaran');
		$nama = $this->input->post('nama_lengkap');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
        $nisn = $this->input->post('nisn');
		$gender = $this->input->post('gender');
        
	 
		$data = array(
			'nama_lengkap' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'tanggal_lahir' => $tanggal_lahir,
            'nisn' => $nisn,
            'gender' => $gender
		);
	 
		$where = array(
			'id_pendaftaran' => $id
		);
	 
		$this->pendaftaran_model->update_data($where,$data,'rb_psb_pendaftaran');
		redirect('admin/overview');

    }

    
}