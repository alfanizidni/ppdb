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
        $data['rb_psb_akun'] = $this->pendaftaran_model->tampil_data()->result();
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
		$nama_panggilan = $this->input->post('nama_panggilan');
        

		$data = array(
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
            'no_induk' => $no_induk,
			'nama_panggilan' => $nama_panggilan            
			);
		$this->pendaftaran_model->input_data($data,'rb_psb_pendaftaran');
        redirect('admin/overview');
        // var_dump($data);
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