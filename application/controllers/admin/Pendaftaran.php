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
        $jumlah_saudara = $this->input->post('jumlah_saudara');
		$no_telpon = $this->input->post('no_telpon');
		$golongan_darah = $this->input->post('golongan_darah');
		$berat_badan = $this->input->post('berat_badan');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$sekolah_asal = $this->input->post('sekolah_asal');
		$alamat_siswa = $this->input->post('alamat_siswa');
		$alamat_sekolah_asal = $this->input->post('alamat_sekolah_asal');
        
        
		$data = array(
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
            'no_induk' => $no_induk,
            'anak_ke' => $anak_ke,
            'jumlah_saudara' => $jumlah_saudara,
            'no_telpon' => $no_telpon,
            'golongan_darah' => $golongan_darah,
            'berat_badan' => $berat_badan,
            'tinggi_badan' => $tinggi_badan,
            'sekolah_asal' => $sekolah_asal,
            'alamat_siswa' => $alamat_siswa,
            'alamat_sekolah_asal' => $alamat_sekolah_asal          
            );
        
        if ($data == true) 
        {
            $this->pendaftaran_model->input_data($data,'rb_psb_pendaftaran');
            redirect('admin/overview');
            // var_dump($data);

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