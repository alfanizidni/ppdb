<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('pendaftaran_model');
    }

    public function login()
    {
        //load view admin/overview.php
        $this->load->view("admin/login");
    }

    public function register()
    {
        //load view admin/overview.php
        $this->load->view("admin/register");
    }

    public function proses_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // $level = $this->select->post('level');
        $user = $this->Login_model->cek_login('rb_psb_akun', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data_session = [
                    'email' => $user['email'],
                    'status' => 'login'
                ];
                $this->session->set_userdata($data_session);
                redirect('admin/overview');

            }else {
                echo '<script>alert("Email atau Password yang Anda masukan salah.");window.location.href="'.base_url('login').'";</script>';
            }
        } else{
            echo '<script>alert("Email atau Password yang Anda masukan Tidak Terdaftar.");window.location.href="'.base_url('login').'";</script>';
        }
        
    }

    public function proses_register()
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_telpon', 'Telepon', 'required');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'required|trim');

        if ($this->form_validation->run() == true) {

            $nama_lengkap = $this->input->post('nama_lengkap');
            $email = $this->input->post('email');
            $no_telpon = $this->input->post('no_telpon');
            $password = $this->input->post('password');
            $this->Login_model->register($nama_lengkap, $email, $no_telpon, $password);
            $this->session->set_flashdata('success', 'Pendaftaran Berhasil');

            redirect('login');           
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('register');
        }
    }
  

    public function logout()
    {
        //
    }
}