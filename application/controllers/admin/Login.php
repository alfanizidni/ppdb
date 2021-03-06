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
                    'id_psb' => $user['id_psb_akun'], 
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
        // $this->form_validation->set_rules('password', 'Kata Sandi', 'required|trim');
        $this->form_validation->set_rules( [
            'password' => 'min:3|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password' => 'min:3'
        ]);

        if ($this->form_validation->run() == true) {
            if ($_POST['password'] == $_POST['konfirmasi_password']) {
                $nama = $_POST['nama_lengkap'];
                $email = $_POST['email'];
                $no_telpon = $_POST['no_telpon'];
                $password = $_POST['password'];
                $konfirmasi = $_POST['konfirmasi_password'];
            
                // $nama_lengkap = $this->input->post('nama_lengkap');
                // $email = $this->input->post('email');
                // $no_telpon = $this->input->post('no_telpon');
                // $password== $this->input->post('password');
                $this->Login_model->register($nama, $email, $no_telpon, $password);
                $this->session->set_flashdata('success', 'Pendaftaran Berhasil');

                redirect('login');
                // var_dump($session);
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect('register');
            }
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