<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model{

   function input_data($data)
   {
       $this->db->insert($data);
       $this->db->from('rb_psb_pendaftaran');
       $this->db->join('rb_psb_akun', 'rb_psb_akun.id_psb_akun = rb_psb_pendaftaran.id_psb_akun');
       $query = $this->db->get();
       return $query->result();
   }

   function tampil_data()
   {
       return $this->db->get('rb_psb_akun');
   }

    function tampil_data_by_id($id) {
        return $this->db->query("SELECT * FROM rb_psb_akun WHERE id_psb_akun = '$id'");
    }

   function update_data($where, $data, $table)
   {
       $this->db->where($where);
       $this->db->update();
   }


    
    // function daftar_akun_join()
    // {
    //     $this->db->select('rb_psb_akun.*');
    //     $this->db->from('rb_psb_pendaftaran');
    //     $this->db->join('rb_psb_akun','rb_psb_akun.id_psb_akun = rb_psb_pendaftaran.id_pendaftaran');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}