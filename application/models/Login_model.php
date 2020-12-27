<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function register($nama_lengkap, $email, $no_telpon, $password)
    {
        $data_user = array(
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'no_telpon' => $no_telpon,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );
        $this->db->insert('rb_psb_akun',$data_user);
    }
    
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}